<?php

use MediaWiki\MediaWikiServices;

class InterwikiHooks {
	/** @var bool */
	private static $shouldSkipIWCheck = false;
	/** @var bool */
	private static $shouldSkipILCheck = false;

	public static function onExtensionFunctions() {
		global $wgInterwikiViewOnly;

		if ( !$wgInterwikiViewOnly ) {
			global $wgLogTypes;

			// Set up the new log type - interwiki actions are logged to this new log
			// TODO: Move this out of an extension function once T200385 is implemented.
			$wgLogTypes[] = 'interwiki';
		}
		// Register the (deprecated) InterwikiLoadPrefix hook only if one
		// of the wgInterwiki*CentralDB globals is set.
		global $wgInterwikiCentralDB, $wgInterwikiCentralInterlanguageDB;

		self::$shouldSkipIWCheck = (
			$wgInterwikiCentralDB === null ||
			$wgInterwikiCentralDB === wfWikiID()
		);
		self::$shouldSkipILCheck = (
			$wgInterwikiCentralInterlanguageDB === null ||
			$wgInterwikiCentralInterlanguageDB === wfWikiID()
		);
		if ( self::$shouldSkipIWCheck && self::$shouldSkipILCheck ) {
			// Bail out early if _neither_ $wgInterwiki*CentralDB
			// global is set; if one or both are set, we gotta register
			// the InterwikiLoadPrefix hook.
			return;
		}
		// This will trigger a deprecation warning in MW 1.36+
		Hooks::register(
			'InterwikiLoadPrefix', 'InterwikiHooks::onInterwikiLoadPrefix'
		);
	}

	/**
	 * @param array &$rights
	 */
	public static function onUserGetAllRights( array &$rights ) {
		global $wgInterwikiViewOnly;
		if ( !$wgInterwikiViewOnly ) {
			// New user right, required to modify the interwiki table through Special:Interwiki
			$rights[] = 'interwiki';
		}
	}

	public static function onInterwikiLoadPrefix( $prefix, &$iwData ) {
		global $wgInterwikiCentralDB, $wgInterwikiCentralInterlanguageDB;
		$isInterlanguageLink = Language::fetchLanguageName( $prefix );
		if ( !$isInterlanguageLink && !self::$shouldSkipIWCheck ) {
			// Check if prefix exists locally and skip
			$lookup = MediaWikiServices::getInstance()->getInterwikiLookup();
			foreach ( $lookup->getAllPrefixes( null ) as $id => $localPrefixInfo ) {
				if ( $prefix === $localPrefixInfo['iw_prefix'] ) {
					return true;
				}
			}
			$dbr = wfGetDB( DB_REPLICA, [], $wgInterwikiCentralDB );
			$res = $dbr->selectRow(
				'interwiki',
				'*',
				[ 'iw_prefix' => $prefix ],
				__METHOD__
			);
			if ( !$res ) {
				return true;
			}
			// Excplicitly make this an array since it's expected to be one
			$iwData = (array)$res;
			// At this point, we can safely return false because we know that we have something
			return false;
		} elseif ( $isInterlanguageLink && !self::$shouldSkipILCheck ) {
			// Global interlanguage link? Whoo!
			$dbr = wfGetDB( DB_REPLICA, [], $wgInterwikiCentralInterlanguageDB );
			$res = $dbr->selectRow(
				'interwiki',
				'*',
				[ 'iw_prefix' => $prefix ],
				__METHOD__
			);
			if ( !$res ) {
				return false;
			}
			// Excplicitly make this an array since it's expected to be one
			$iwData = (array)$res;
			// At this point, we can safely return false because we know that we have something
			return false;
		}
	}
}

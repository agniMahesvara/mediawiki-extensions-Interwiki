<?php
/**
 * This program is free software; you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation; either version 2 of the License, or
 * (at your option) any later version.
 *
 * @file
 * @ingroup Extensions
 * @version 2.0
 * @author Stephanie Amanda Stevens <phroziac@gmail.com>
 * @author Robin Pepermans (SPQRobin) <robinp.1273@gmail.com>
 * @copyright Copyright © 2005-2007 Stephanie Amanda Stevens
 * @copyright Copyright © 2007-2011 Robin Pepermans (SPQRobin)
 * @license http://www.gnu.org/copyleft/gpl.html GNU General Public License 2.0 or later
 * @link http://www.mediawiki.org/wiki/Extension:SpecialInterwiki Documentation
 * Formatting improvements Stephen Kennedy, 2006.
 */

if( !defined( 'MEDIAWIKI' ) ){
	die( "This is not a valid entry point.\n" );
}

// Extension credits for Special:Version
$wgExtensionCredits['specialpage'][] = array(
	'path' => __FILE__,
	'name' => 'SpecialInterwiki',
	'author' => array( 'Stephanie Amanda Stevens', 'SPQRobin', '...' ),
	'version' => '2.0',
	'url' => 'http://www.mediawiki.org/wiki/Extension:SpecialInterwiki',
	'descriptionmsg' => 'interwiki-desc',
);

$wgResourceModules['SpecialInterwiki'] = array(
		'styles' => 'Interwiki.css',
		'localBasePath' => dirname( __FILE__ ),
		'remoteExtPath' => 'Interwiki',
);

// Set up the new special page
$dir = dirname( __FILE__ ) . '/';
$wgExtensionMessagesFiles['Interwiki'] = $dir . 'Interwiki.i18n.php';
$wgExtensionAliasesFiles['Interwiki'] = $dir . 'Interwiki.alias.php';
$wgAutoloadClasses['SpecialInterwiki'] = $dir . 'Interwiki_body.php';
$wgSpecialPages['Interwiki'] = 'SpecialInterwiki';
$wgSpecialPageGroups['Interwiki'] = 'wiki';

// New user right, required to modify the interwiki table through Special:Interwiki
$wgAvailableRights[] = 'interwiki';

// Set up the new log type - interwiki actions are logged to this new log
$wgLogTypes[] = 'interwiki';
$wgLogNames['interwiki'] = 'interwiki_logpagename';
$wgLogHeaders['interwiki'] = 'interwiki_logpagetext';
$wgLogActions['interwiki/interwiki'] = 'interwiki_logentry';
$wgLogActions['interwiki/iw_add'] = 'interwiki_log_added';
$wgLogActions['interwiki/iw_delete'] = 'interwiki_log_deleted';
$wgLogActions['interwiki/iw_edit'] = 'interwiki_log_edited';

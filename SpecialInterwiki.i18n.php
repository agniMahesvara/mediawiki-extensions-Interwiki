<?php
/**
 * Internationalisation file for extension Interwiki.
 *
 * @addtogroup Extensions
 *
 * This program is free software; you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation; either version 2 of the License, or
 * (at your option) any later version.
 *
 * @author Stephanie Amanda Stevens <phroziac@gmail.com>
 * @author SPQRobin <robin_1273@hotmail.com>
 * @copyright Copyright (C) 2005-2007 Stephanie Amanda Stevens
 * @copyright Copyright (C) 2007 SPQRobin
 * @license http://www.gnu.org/copyleft/gpl.html GNU General Public License 2.0 or later
 */

$messages = array();

$messages['en'] = array(
	# general messages
	'interwiki'                => 'View and edit interwiki data',
	'interwiki-title-norights' => 'View interwiki data',
	'interwiki-desc'           => 'Adds a [[Special:Interwiki|special page]] to view and edit the interwiki table',
	'interwiki_prefix'         => 'Prefix',
	'interwiki_reasonfield'    => 'Reason',
	'interwiki_intro'          => 'See $1 for more information about the interwiki table.
There is a [[Special:Log/interwiki|log of changes]] to the interwiki table.',
	'interwiki_url'            => 'URL', # only translate this message if you have to change it
	'interwiki_local'          => 'Local', # only translate this message if you have to change it
	'interwiki_trans'          => 'Trans', # only translate this message if you have to change it
	'interwiki_error'          => 'ERROR: The interwiki table is empty, or something else went wrong.',

	# deleting a prefix
	'interwiki_delquestion'    => 'Deleting "$1"',
	'interwiki_deleting'       => 'You are deleting prefix "$1".',
	'interwiki_deleted'        => 'Prefix "$1" was successfully removed from the interwiki table.',
	'interwiki_delfailed'      => 'Prefix "$1" could not be removed from the interwiki table.',

	# adding a prefix
	'interwiki_addtext'        => 'Add an interwiki prefix',
	'interwiki_addintro'       => 'You are adding a new interwiki prefix.
Remember that it cannot contain spaces ( ), colons (:), ampersands (&), or equal signs (=).',
	'interwiki_addbutton'      => 'Add',
	'interwiki_added'          => 'Prefix "$1" was successfully added to the interwiki table.',
	'interwiki_addfailed'      => 'Prefix "$1" could not be added to the interwiki table.
Possibly it already exists in the interwiki table.',
	'interwiki_defaulturl'     => 'http://www.example.com/$1', # only translate this message if you have to change it

	# editing a prefix
	'interwiki_edittext'       => 'Editing an interwiki prefix',
	'interwiki_editintro'      => 'You are edit an interwiki prefix. Remember that this can break existing links',
	'interwiki_editbutton'     => 'Edit',
	'interwiki_edited'         => 'Prefix "$1" was successfully modified in the interwiki table.',
	'interwiki_editfailed'     => 'Prefix "$1" could not be modified in the interwiki table. Possibly he doesn\'t exists in the interwiki table or has been deleted.',
	'interwiki_editerror'      => 'Prefix "$1" can not be modified in the interwiki table. Possibly he doesn\'t exists.',

	# interwiki log
	'interwiki_logpagename'    => 'Interwiki table log',
	'interwiki_log_added'      => 'added prefix "$2" ($3) (trans: $4) (local: $5) to the interwiki table',
	'interwiki_log_edited'     => 'modified prefix "$2" : ($3) (trans: $4) (local: $5) in the interwiki table',
	'interwiki_log_deleted'    => 'removed prefix "$2" from the interwiki table',
	'interwiki_logpagetext'    => 'This is a log of changes to the [[Special:Interwiki|interwiki table]].',
	'interwiki_defaultreason'  => 'no reason given',
	'interwiki_logentry'       => '', # do not translate this message
);

/** Arabic (العربية)
 * @author Meno25
 */
$messages['ar'] = array(
	'interwiki'               => 'عرض وتعديل بيانات الإنترويكي',
	'interwiki-desc'          => 'يضيف [[Special:Interwiki|صفحة خاصة]] لرؤية وتعديل جدول الإنترويكي',
	'interwiki_prefix'        => 'بادئة',
	'interwiki_reasonfield'   => 'سبب',
	'interwiki_intro'         => 'انظر $1 لمزيد من المعلومات حول جدول الإنترويكي. يوجد [[Special:Log/interwiki|سجل بالتغييرات]] لجدول الإنترويكي.',
	'interwiki_local'         => 'محلي',
	'interwiki_trans'         => 'نقل',
	'interwiki_error'         => 'خطأ: جدول الإنترويكي فارغ، أو حدث خطأ آخر.',
	'interwiki_delquestion'   => 'حذف "$1"',
	'interwiki_deleting'      => 'أنت تحذف البادئة "$1".',
	'interwiki_deleted'       => 'البادئة "$1" تمت إزالتها بنجاح من جدول الإنترويكي.',
	'interwiki_delfailed'     => 'البادئة "$1" لم يمكن إزالتها من جدول الإنترويكي.',
	'interwiki_addtext'       => 'أضف بادئة إنترويكي',
	'interwiki_addintro'      => 'أنت تضيف بادئة إنترويكي جديدة. تذكر أنها لا يمكن أن تحتوي على مسافات ( )، نقطتين فوق بعض (:)، علامة و (&)، أو علامة يساوي (=).',
	'interwiki_addbutton'     => 'إضافة',
	'interwiki_added'         => 'البادئة "$1" تمت إضافتها بنجاح إلى جدول الإنترويكي.',
	'interwiki_addfailed'     => 'البادئة "$1" لم يمكن إضافتها إلى جدول الإنترويكي. على الأرجح هي موجودة بالفعل في جدول الإنترويكي.',
	'interwiki_logpagename'   => 'سجل جدول الإنترويكي',
	'interwiki_log_added'     => 'أضاف "$2" ($3) (نقل: $4) (محلي: $5) إلى جدول الإنترويكي',
	'interwiki_log_deleted'   => 'أزال البادئة "$2" من جدول الإنترويكي',
	'interwiki_logpagetext'   => 'هذا سجل بالتغييرات في [[Special:Interwiki|جدول الإنترويكي]].',
	'interwiki_defaultreason' => 'لا سبب معطى',
);

/** Bulgarian (Български)
 * @author DCLXVI
 */
$messages['bg'] = array(
	'interwiki'               => 'Преглед и управление на междууикитата',
	'interwiki-desc'          => 'Добавя [[Special:Interwiki|специална страница]] за преглед и управление на таблицата с междууикита',
	'interwiki_prefix'        => 'Представка:',
	'interwiki_reasonfield'   => 'Причина',
	'interwiki_intro'         => 'Вижте $1 за повече информация относно таблицата с междууикита. Съществува [[Special:Log/interwiki|дневник на промените]] в таблицата с междууикита.',
	'interwiki_error'         => 'ГРЕШКА: Таблицата с междууикита е празна или е възникнала друга грешка.',
	'interwiki_delquestion'   => 'Изтриване на "$1"',
	'interwiki_deleting'      => 'Изтриване на представката „$1“.',
	'interwiki_deleted'       => '„$1“ беше успешно премахнато от таблицата с междууикита.',
	'interwiki_delfailed'     => '„$1“ не може да бъде премахнато от таблицата с междууикита.',
	'interwiki_addtext'       => 'Добавяне на ново междууики',
	'interwiki_addintro'      => "''Забележка:'' Междууикитата не могат да съдържат интервали ( ), двуеточия (:), амперсанд (&) или знак за равенство (=).",
	'interwiki_addbutton'     => 'Добавяне',
	'interwiki_added'         => '„$1“ беше успешно добавено в таблицата с междууикита.',
	'interwiki_addfailed'     => '„$1“ не може да бъде добавено в таблицата с междууикита. Възможно е вече да е било добавено там.',
	'interwiki_logpagename'   => 'Дневник на междууикитата',
	'interwiki_log_added'     => 'добави „$2“ ($3) (trans: $4) (локално: $5) в таблицата с междууикита',
	'interwiki_log_deleted'   => 'Премахна представката „$2“ от таблицата с междууикитата',
	'interwiki_logpagetext'   => 'Тази страница съдържа дневник на промените в [[Special:Interwiki|таблицата с междууикита]].',
	'interwiki_defaultreason' => 'не е посочена причина',
);

/** Breton (Brezhoneg)
 * @author Fulup
 */
$messages['br'] = array(
	'interwiki_addbutton' => 'Ouzhpennañ',
);

/** Welsh (Cymraeg)
 * @author Lloffiwr
 */
$messages['cy'] = array(
	'interwiki_defaultreason' => 'dim rheswm wedi ei roi',
);

/** Danish (Dansk)
 * @author Jon Harald Søby
 */
$messages['da'] = array(
	'interwiki_reasonfield' => 'Begrundelse',
);

/** German (Deutsch)
 * @author MF-Warburg
 * @author Raimond Spekking
 */
$messages['de'] = array(
	'interwiki'               => 'Interwiki-Daten betrachten und bearbeiten',
	'interwiki-desc'          => '[[Special:Interwiki|Spezialseite]] zur Pflege der Interwiki-Tabelle',
	'interwiki_prefix'        => 'Präfix',
	'interwiki_reasonfield'   => 'Grund',
	'interwiki_intro'         => 'Siehe $1 für weitere Informationen über die Interwiki-Tabelle. Das [[Special:Log/interwiki|Logbuch]] zeigt alle Änderungen an der Interwiki-Tabelle.',
	'interwiki_local'         => 'Lokal',
	'interwiki_error'         => 'Fehler: Die Interwiki-Tabelle ist leer.',
	'interwiki_delquestion'   => 'Löscht „$1“',
	'interwiki_deleted'       => '„$1“ wurde erfolgreich aus der Interwiki-Tabelle entfernt.',
	'interwiki_delfailed'     => '„$1“ konnte nicht aus der Interwiki-Tabelle gelöscht werden.',
	'interwiki_addtext'       => 'Ein Interwiki-Präfix hinzufügen',
	'interwiki_addintro'      => 'Du fügst ein neues Interwiki-Präfix hinzu. Beachte, dass es kein Leerzeichen ( ), Kaufmännisches Und (&), Gleichheitszeichen (=) und keinen Doppelpunkt (:) enthalten darf.',
	'interwiki_addbutton'     => 'Hinzufügen',
	'interwiki_added'         => '„$1“ wurde erfolgreich der Interwiki-Tabelle hinzugefügt.',
	'interwiki_addfailed'     => '„$1“ konnte nicht der Interwiki-Tabelle hinzugefügt werden.',
	'interwiki_logpagename'   => 'Interwikitabelle-Logbuch',
	'interwiki_log_added'     => 'hat „$2“ ($3) (trans: $4) (lokal: $5) der Interwiki-Tabelle hinzugefügt',
	'interwiki_log_deleted'   => 'hat „$2“ aus der Interwiki-Tabelle entfernt',
	'interwiki_logpagetext'   => 'In diesem Logbuch werden Änderungen an der [[Special:Interwiki|Interwiki-Tabelle]] protokolliert.',
	'interwiki_defaultreason' => 'kein Grund angegeben',
);

/** Greek (Ελληνικά)
 * @author Consta
 */
$messages['el'] = array(
	'interwiki_prefix'        => 'Πρόθεμα',
	'interwiki_reasonfield'   => 'Λόγος',
	'interwiki_defaultreason' => 'Δεν δίνετε λόγος',
);

/** Esperanto (Esperanto)
 * @author Yekrats
 */
$messages['eo'] = array(
	'interwiki'               => 'Rigardu kaj redaktu intervikiajn datenojn',
	'interwiki-desc'          => 'Aldonas [[Special:Interwiki|specialan paĝon]] por rigardi kaj redakti la intervikian tabelon',
	'interwiki_prefix'        => 'Prefikso',
	'interwiki_reasonfield'   => 'Kialo',
	'interwiki_intro'         => 'Vidu $1 por plia informo pri la intervikia tabelo.
Ekzistas [[Special:Log/interwiki|loglibro pri ŝanĝoj]] por la intervikia tabelo.',
	'interwiki_error'         => 'ERARO: La intervikia tabelo estas malplena, aŭ iel misfunkciis.',
	'interwiki_delquestion'   => 'Forigante "$1"',
	'interwiki_deleting'      => 'Vi forigas prefikson "$1".',
	'interwiki_deleted'       => 'Prefikso "$1" estis sukcese forigita de la intervikia tabelo.',
	'interwiki_delfailed'     => 'Prefikso "$1" ne eblis esti forigita el la intervikia tabelo.',
	'interwiki_addtext'       => 'Aldonu intervikian prefikson',
	'interwiki_addbutton'     => 'Aldonu',
	'interwiki_addfailed'     => 'Prefikso "$1" ne eblis esti aldonita al la intervikia tabelo.
Eble ĝi jam ekzistas en la intervikia tabelo.',
	'interwiki_logpagename'   => 'Loglibro pri la intervikia tabelo',
	'interwiki_log_deleted'   => 'Forigita prefikso "$2" de la intervikia tabelo',
	'interwiki_defaultreason' => 'nenia kialo skribata',
);

/** Finnish (Suomi)
 * @author Nike
 * @author Jack Phoenix
 */
$messages['fi'] = array(
	'interwiki'               => 'Katso ja muokkaa wikien välisiä linkkejä',
	'interwiki-desc'          => 'Lisää [[Special:Interwiki|toimintosivun]], jonka avulla voi katsoa ja muokata interwiki-taulua',
	'interwiki_prefix'        => 'Etuliite',
	'interwiki_reasonfield'   => 'Syy',
	'interwiki_intro'         => 'Lisätietoja interwiki-taulusta on sivulla $1. On olemassa [[Special:Log/interwiki|loki]] interwiki-tauluun tehdyistä muutoksista.',
	'interwiki_error'         => 'VIRHE: interwiki-taulu on tyhjä tai jokin muu meni pieleen.',
	'interwiki_delquestion'   => 'Poistetaan ”$1”',
	'interwiki_deleting'      => 'Olet poistamassa etuliitettä ”$1”.',
	'interwiki_deleted'       => 'Etuliite ”$1” poistettiin onnistuneesti interwiki-taulusta.',
	'interwiki_delfailed'     => 'Etuliitteen ”$1” poistaminen interwiki-taulusta epäonnistui.',
	'interwiki_addtext'       => 'Lisää wikienvälinen etuliite',
	'interwiki_addintro'      => 'Olet lisäämässä uutta wikienvälistä etuliitettä. Se ei voi sisältää välilyöntejä ( ), kaksoispisteitä (:), et-merkkejä (&), tai yhtäsuuruusmerkkejä (=).',
	'interwiki_addbutton'     => 'Lisää',
	'interwiki_added'         => 'Etuliite ”$1” lisättiin onnistuneesti interwiki-tauluun.',
	'interwiki_addfailed'     => 'Etuliitteen ”$1” lisääminen interwiki-tauluun epäonnistui. Kyseinen etuliite saattaa jo olla interwiki-taulussa.',
	'interwiki_logpagename'   => 'Loki muutoksista interwiki-tauluun',
	'interwiki_log_added'     => 'Uusi etuliite ”$2” ($3) (trans: $4) (paikallinen: $5) interwiki-tauluun',
	'interwiki_log_deleted'   => 'Poisti etuliitteen ”$2” interwiki-taulusta',
	'interwiki_logpagetext'   => 'Tämä on loki muutoksista [[Special:Interwiki|interwiki-tauluun]].',
	'interwiki_defaultreason' => 'ei annettua syytä',
);

/** French (Français)
 * @author Grondin
 * @author Sherbrooke
 * @author Urhixidur
 */
$messages['fr'] = array(
	'interwiki'                => 'Voir et manipuler les données interwiki',
	'interwiki-title-norights' => 'Voir les données interwiki',
	'interwiki-desc'           => 'Ajoute une [[Special:Interwiki|page spéciale]] pour voir et éditer la table interwiki',
	'interwiki_prefix'         => 'Préfixe',
	'interwiki_reasonfield'    => 'Motif',
	'interwiki_intro'          => "Voyez $1 pour obtenir plus d'informations en ce qui concerne la table interwiki. Ceci est le [[Special:Log/interwiki|journal des modifications]] de la table interwiki.",
	'interwiki_error'          => "Erreur : la table des interwikis est vide ou un processus s'est mal déroulé.",
	'interwiki_delquestion'    => 'Suppression « $1 »',
	'interwiki_deleting'       => 'Vous effacez présentement le préfixe « $1 ».',
	'interwiki_deleted'        => '$1 a été enlevé avec succès de la table interwiki.',
	'interwiki_delfailed'      => "$1 n'a pas pu être enlevé de la table interwiki.",
	'interwiki_addtext'        => 'Ajouter un préfixe interwiki',
	'interwiki_addintro'       => "Vous êtes en train d'ajouter un préfixe interwiki. Rappelez-vous qu'il ne peut pas contenir d'espaces ( ), de double points (:), d'éperluettes (&) ou de signes égal (=)",
	'interwiki_addbutton'      => 'Ajouter',
	'interwiki_added'          => '« $1 » a été ajouté avec succès dans la table interwiki.',
	'interwiki_addfailed'      => "« $1 » n'a pas pu être ajouté à la table interwiki.",
	'interwiki_edittext'       => 'Modifier un préfixe interwiki',
	'interwiki_editintro'      => 'Vous modifiez un préfixe interwiki. Rapellez-vous que cela peut casser des liens existant.',
	'interwiki_editbutton'     => 'Modifier',
	'interwiki_edited'         => 'Le préfixe « $1 » a été modifié avec succès dans la table interwiki.',
	'interwiki_editfailed'     => "Le préfixe « $1 » n'a pas pu être modifié dans la table interwiki. Il se peut qu'il n'existe pas ou qu'il ait été supprimé.",
	'interwiki_editerror'      => "Le préfixe « $1 » ne peut pas être modifié. Il se peut qu'il n'existe pas.",
	'interwiki_logpagename'    => 'Journal de la table interwiki',
	'interwiki_log_added'      => 'a ajouté « $2 » ($3) (trans: $4) (local: $5) dans la table interwiki',
	'interwiki_log_edited'     => 'a modifié le préfixe « $2 » : ($3) (trans: $4) (local: $5) dans la table interwiki',
	'interwiki_log_deleted'    => 'a supprimé le préfixe « $2 » de la table interwiki',
	'interwiki_logpagetext'    => 'Ceci est le journal des changements dans la [[Special:Interwiki|table interwiki]].',
	'interwiki_defaultreason'  => 'Aucun motif donné',
);

/** Franco-Provençal (Arpetan)
 * @author ChrisPtDe
 */
$messages['frp'] = array(
	'interwiki_defaulturl' => 'http://www.ègzemplo.com/$1',
);

/** Galician (Galego)
 * @author Xosé
 * @author Alma
 * @author Toliño
 */
$messages['gl'] = array(
	'interwiki'               => 'Ver e manipular datos interwiki',
	'interwiki-desc'          => 'Engade unha [[Special:Interwiki|páxina especial]] para ver e editar a táboa interwiki',
	'interwiki_prefix'        => 'Prefixo',
	'interwiki_reasonfield'   => 'Razón',
	'interwiki_intro'         => 'Vexa $1 para máis información acerca da táboa interwiki. Hai un [[Special:Log/interwiki|rexistro de cambios]] á táboa interwiki.',
	'interwiki_error'         => 'ERRO: A táboa interwiki está baleira, ou algo máis saíu mal.',
	'interwiki_delquestion'   => 'Eliminando "$1"',
	'interwiki_deleting'      => 'Vai eliminar o prefixo "$1".',
	'interwiki_deleted'       => 'Eliminouse sen problemas o prefixo "$1" da táboa interwiki.',
	'interwiki_delfailed'     => 'Non se puido eliminar o prefixo "$1" da táboa interwiki.',
	'interwiki_addtext'       => 'Engadir un prefixo interwiki',
	'interwiki_addintro'      => 'Vostede está engadindo un novo prefixo interwiki. Recorde que non pode conter espazos ( ), dous puntos (:), o símbolo de unión (&), ou signos de igual (=).',
	'interwiki_addbutton'     => 'Engadir',
	'interwiki_added'         => 'Engadiuse sen problemas o prefixo "$1" á táboa interwiki.',
	'interwiki_addfailed'     => 'Non se puido engadir o prefixo "$1" á táboa interwiki. Posibelmente xa existe na táboa interwiki.',
	'interwiki_logpagename'   => 'Rexistro de táboas interwiki',
	'interwiki_log_added'     => 'Engadir "$2" ($3) (trans: $4) (local: $5) á táboa interwiki',
	'interwiki_log_deleted'   => 'Eliminouse o prefixo "$2" da táboa interwiki',
	'interwiki_logpagetext'   => 'Este é un rexistro dos cambios a [[Special:Interwiki|táboa interwiki]].',
	'interwiki_defaultreason' => 'ningunha razón foi dada',
);

/** Gujarati (ગુજરાતી) */
$messages['gu'] = array(
	'interwiki_reasonfield' => 'કારણ',
);

/** Hawaiian (Hawai`i)
 * @author SPQRobin
 */
$messages['haw'] = array(
	'interwiki_reasonfield'   => 'Ke kumu',
	'interwiki_defaultreason' => '‘a‘ohe kumu',
);

$messages['hr'] = array(
	'interwiki'             => 'Vidi i uredi međuwiki podatke',
	'interwiki_prefix'      => 'Prefiks',
	'interwiki_local'       => 'Lokalno',
	'interwiki_trans'       => 'Međuwiki',
	'interwiki_reasonfield' => 'Razlog',
	'interwiki_delquestion' => 'Brišem "$1"',
	'interwiki_deleting'    => 'Brišete prefiks "$1".',
	'interwiki_addtext'     => 'Dodaj međuwiki prefiks',
	'interwiki_addbutton'   => 'Dodaj',
);

/** Upper Sorbian (Hornjoserbsce)
 * @author Michawiki
 */
$messages['hsb'] = array(
	'interwiki'               => 'Interwiki-daty wobhladać a změnić',
	'interwiki-desc'          => 'Přidawa [[Special:Interwiki|specialnu stronu]] za wobhladowanje a wobdźěłowanje interwiki-tabele',
	'interwiki_prefix'        => 'Prefiks',
	'interwiki_reasonfield'   => 'Přičina',
	'interwiki_intro'         => 'Hlej $1 za dalše informacije wo tabeli interwiki. Je [[Special:Log/interwiki|protokol změnow]] k tabeli interwiki.',
	'interwiki_local'         => 'Lokalny',
	'interwiki_error'         => 'ZMYLK: Interwiki-tabela je prózdna abo něšto je wopak.',
	'interwiki_delquestion'   => 'Wušmórnja so "$1"',
	'interwiki_deleting'      => 'Wušmórnješ prefiks "$1".',
	'interwiki_deleted'       => 'Prefiks "$1" je so wuspěšnje z interwiki-tabele wotstronił.',
	'interwiki_delfailed'     => 'Prefiks "$1" njeda so z interwiki-tabele wotstronić.',
	'interwiki_addtext'       => 'Interwiki-prefiks přidać',
	'interwiki_addintro'      => 'Přidawaš nowy prefiks interwiki. Wobkedźbuj, zo njesmě mjezery ( ), dwudypki (.), et-znamješka (&) abo znaki runosće (=) wobsahować.',
	'interwiki_addbutton'     => 'Přidać',
	'interwiki_added'         => 'Prefiks "$1" je so wuspěšnje interwiki-tabeli přidał.',
	'interwiki_addfailed'     => 'Prefiks "$1" njeda so interwiki-tabeli přidać. Snano eksistuje hižo w interwiki-tabeli.',
	'interwiki_logpagename'   => 'Protokol interwiki-tabele',
	'interwiki_log_added'     => 'Je "$2" ($3) (trans: $4) (lokalny: $5) interwiki-tabeli přidał',
	'interwiki_log_deleted'   => 'je prefiks "$2" z interwiki-tabele wotstronił',
	'interwiki_logpagetext'   => 'To je protokol změnow na [[Special:Interwiki|interwiki-tabeli]].',
	'interwiki_defaultreason' => 'žana přičina podata',
);

/** Hungarian (Magyar)
 * @author Dani
 */
$messages['hu'] = array(
	'interwiki'               => 'Interwiki adatok megtekintése és szerkesztése',
	'interwiki_prefix'        => 'Előtag',
	'interwiki_reasonfield'   => 'Ok',
	'interwiki_intro'         => 'Lásd a(z) $1 lapot további információkért az interwiki táblákról. Megtekintheted az interwiki táblában bekövetkezett [[Special:Log/interwiki|változások naplóját]] is.',
	'interwiki_error'         => 'HIBA: az interwiki-tábla üres, vagy valami elromlott.',
	'interwiki_delquestion'   => '„$1” törlése',
	'interwiki_deleting'      => 'A(z) „$1” előtag törlésére készülsz.',
	'interwiki_deleted'       => 'A(z) „$1” előtagot sikeresen eltávolítottam az interwiki táblából.',
	'interwiki_delfailed'     => 'A(z) „$1” előtagot nem sikerült eltávolítanom az interwiki táblából.',
	'interwiki_addtext'       => 'Interwiki előtag hozzáadása',
	'interwiki_addintro'      => 'Új interwiki előtag hozzáadására készülsz. Ügyelj arra, hogy ne tartalmazzon szóközt ( ), kettőspontot (:), és- (&), vagy egyenlő (=) jeleket.',
	'interwiki_addbutton'     => 'Hozzáadás',
	'interwiki_added'         => 'A(z) „$1” előtagot sikeresen hozzáadtam az interwiki táblához.',
	'interwiki_addfailed'     => 'A(z) „$1” előtagot nem tudtam hozzáadni az interwiki táblához. Valószínűleg már létezik.',
	'interwiki_logpagename'   => 'Interwiki tábla-napló',
	'interwiki_log_added'     => '„$2” hozzáadva ($3) (ford: $4) (helyi: $5) az interwiki táblához',
	'interwiki_log_deleted'   => '„$2” előtag eltávolítva az interwiki táblából',
	'interwiki_logpagetext'   => 'Ez az [[Special:Interwiki|interwiki táblában]] történt változások naplója.',
	'interwiki_defaultreason' => 'nincs ok megadva',
);

/** Khmer (ភាសាខ្មែរ)
 * @author Chhorran
 * @author Lovekhmer
 */
$messages['km'] = array(
	'interwiki'               => 'មើល និង កែប្រែ ទិន្នន័យ អន្តរវិគី',
	'interwiki_prefix'        => 'បុព្វបទ',
	'interwiki_reasonfield'   => 'ហេតុផល',
	'interwiki_intro'         => 'មើល $1 ដើម្បី ពត៌មានបន្ថែម អំពី តារាង អន្តរវិគី ។ នេះ​ជា [[Special:Log/interwiki|កំណត់ហេតុ នៃ បំលាស់ប្តូរ]] ក្នុង តារាង អន្តរវិគី។',
	'interwiki_delquestion'   => 'ការលុបចេញ "$1"',
	'interwiki_deleting'      => 'លោកអ្នកកំពុងលុបបុព្វបទ "$1"។',
	'interwiki_addbutton'     => 'បន្ថែម',
	'interwiki_logpagename'   => 'កំណត់ហេតុ តារាង អន្តរវិគី',
	'interwiki_log_added'     => 'បានបន្ថែម "$2" ($3) (trans: $4) (local: $5) ក្នុង តារាង អន្តរវិគី ៖',
	'interwiki_logpagetext'   => 'នេះជា កំណត់ហេតុ នៃបំលាស់ប្តូរ ក្នុង [[Special:Interwiki|តារាង អន្តរវិគី]]។',
	'interwiki_defaultreason' => 'គ្មានហេតុផល ត្រូវបានផ្តល់អោយ',
);

/** Latin (Latina)
 * @author UV
 * @author SPQRobin
 */
$messages['la'] = array(
	'interwiki'               => 'Videre et recensere data intervica',
	'interwiki_prefix'        => 'Praefixum',
	'interwiki_reasonfield'   => 'Causa',
	'interwiki_intro'         => 'De tabula intervica, vide etiam $1. Etiam sunt [[Special:Log/interwiki|acta mutationum]] tabulae intervicae.',
	'interwiki_error'         => 'ERROR: Tabula intervica est vacua, aut aerumna alia occurrit.',
	'interwiki_delquestion'   => 'Removens "$1"',
	'interwiki_deleting'      => 'Delens praefixum "$1".',
	'interwiki_deleted'       => 'Praefixum "$1" prospere remotum est ex tabula intervica.',
	'interwiki_delfailed'     => 'Praefixum "$1" ex tabula intervica removeri non potuit.',
	'interwiki_addtext'       => 'Addere praefixum intervicum',
	'interwiki_addbutton'     => 'Addere',
	'interwiki_added'         => 'Praefixum "$1" prospere in tabulam intervicam additum est.',
	'interwiki_addfailed'     => 'Praefixum "$1" in tabulam intervicam addi non potuit. Fortasse iam est in tabula intervica.',
	'interwiki_logpagename'   => 'Index tabulae intervicae',
	'interwiki_log_added'     => 'addidit "$2" ($3) (trans: $4) (local: $5) in tabulam intervicam',
	'interwiki_log_deleted'   => 'removit praefixum "$2" ex tabula intervica',
	'interwiki_logpagetext'   => 'Hic est index mutationum [[Special:Interwiki|tabulae intervicae]].',
	'interwiki_defaultreason' => 'nulla causa data',
);

/** Luxembourgish (Lëtzebuergesch)
 * @author Robby
 */
$messages['lb'] = array(
	'interwiki'               => 'Interwiki-Date kucken a veränneren',
	'interwiki_prefix'        => 'Prefix',
	'interwiki_reasonfield'   => 'Grond',
	'interwiki_local'         => 'Lokal',
	'interwiki_delquestion'   => 'Läscht "$1"',
	'interwiki_addbutton'     => 'Derbäisetzen',
	'interwiki_defaulturl'    => 'http://www.beispill.com/$1',
	'interwiki_defaultreason' => 'kee Grond uginn',
);

/** Marathi (मराठी)
 * @author Kaustubh
 */
$messages['mr'] = array(
	'interwiki'               => 'आंतरविकि डाटा पहा व संपादा',
	'interwiki-desc'          => 'आंतरविकि सारणी पाहण्यासाठी व संपादन्यासाठी एक [[Special:Interwiki|विशेष पान]] वाढविते',
	'interwiki_prefix'        => 'उपपद (पूर्वप्रत्यय)',
	'interwiki_reasonfield'   => 'कारण',
	'interwiki_intro'         => 'आंतरविकि सारणी बद्दल अधिक माहीतीसाठी $1 पहा. इथे आंतरविकि सारणीत करण्यात आलेल्या [[Special:Log/interwiki|बदलांची यादी]] आहे.',
	'interwiki_error'         => 'त्रुटी: आंतरविकि सारणी रिकामी आहे, किंवा इतर काहीतरी चुकलेले आहे.',
	'interwiki_delquestion'   => '"$1" वगळत आहे',
	'interwiki_deleting'      => 'तुम्ही "$1" उपपद वगळत आहात.',
	'interwiki_deleted'       => '"$1" उपपद आंतरविकि सारणीमधून वगळण्यात आलेले आहे.',
	'interwiki_delfailed'     => '"$1" उपपद आंतरविकि सारणीतून वगळता आलेले नाही.',
	'interwiki_addtext'       => 'एक आंतरविकि उपपद वाढवा',
	'interwiki_addintro'      => 'तुम्ही एक नवीन आंतरविकि उपपद वाढवित आहात. कृपया लक्षात घ्या की त्यामध्ये स्पेस ( ), विसर्ग (:), आणिचिन्ह (&), किंवा बरोबरची खूण (=) असू शकत नाही.',
	'interwiki_addbutton'     => 'वाढवा',
	'interwiki_added'         => '"$1" उपपद आंतरविकि सारणी मध्ये वाढविण्यात आलेले आहे.',
	'interwiki_addfailed'     => '"$1" उपपद आंतरविकि सारणी मध्ये वाढवू शकलेलो नाही. कदाचित ते अगोदरच अस्तित्वात असण्याची शक्यता आहे.',
	'interwiki_logpagename'   => 'आंतरविकि सारणी नोंद',
	'interwiki_log_added'     => 'आंतरविकि सारणी मध्ये "$2" ($3) (trans: $4) (local: $5) वाढविले',
	'interwiki_log_deleted'   => '"$2" उपपद आंतरविकिसारणी मधून वगळले',
	'interwiki_logpagetext'   => '[[Special:Interwiki|आंतरविकि सारणीत]] झालेल्या बदलांची ही सूची आहे.',
	'interwiki_defaultreason' => 'कारण दिलेले नाही',
);

/** Low German (Plattdüütsch)
 * @author Slomox
 */
$messages['nds'] = array(
	'interwiki_prefix'        => 'Präfix',
	'interwiki_reasonfield'   => 'Grund',
	'interwiki_delquestion'   => '„$1“ warrt rutsmeten',
	'interwiki_addtext'       => 'Interwiki-Präfix tofögen',
	'interwiki_addbutton'     => 'Tofögen',
	'interwiki_defaultreason' => 'keen Grund angeven',
);

/** Dutch (Nederlands)
 * @author SPQRobin
 * @author Siebrand
 */
$messages['nl'] = array(
	'interwiki'                => 'Interwikigegevens bekijken en wijzigen',
	'interwiki-title-norights' => 'Interwikigegevens bekijken',
	'interwiki-desc'           => 'Voegt een [[Special:Interwiki|speciale pagina]] toe om de interwikitabel te bekijken en bewerken',
	'interwiki_prefix'         => 'Voorvoegsel',
	'interwiki_reasonfield'    => 'Reden',
	'interwiki_intro'          => 'Zie $1 voor meer informatie over de interwikitabel. Er is een [[Special:Log/interwiki|logboek van wijzigingen]] aan de interwikitabel.',
	'interwiki_error'          => 'FOUT: De interwikitabel is leeg, of iets anders ging verkeerd.',
	'interwiki_delquestion'    => '"$1" aan het verwijderen',
	'interwiki_deleting'       => 'U bent voorvoegsel "$1" aan het verwijderen.',
	'interwiki_deleted'        => 'Voorvoegsel "$1" is succesvol verwijderd van de interwikitabel.',
	'interwiki_delfailed'      => 'Voorvoegsel "$1" kon niet worden verwijderd van de interwikitabel.',
	'interwiki_addtext'        => 'Een interwikivoorvoegsel toevoegen',
	'interwiki_addintro'       => 'U bent een nieuw interwikivoorvoegsel aan het toevoegen. Let op dat dit geen spaties ( ), dubbelepunt (:), ampersands (&), of gelijkheidstekens (=) mag bevatten.',
	'interwiki_addbutton'      => 'Toevoegen',
	'interwiki_added'          => 'Voorvoegsel "$1" is succesvol toegevoegd aan de interwikitabel.',
	'interwiki_addfailed'      => 'Voorvoegsel "$1" kon niet worden toegevoegd aan de interwikitabel. Mogelijk bestaat hij al in de interwikitabel.',
	'interwiki_logpagename'    => 'Logboek interwikitabel',
	'interwiki_log_added'      => 'Voegde "$2" ($3) (trans: $4) (local: $5) toe aan de interwikitabel',
	'interwiki_log_deleted'    => 'Verwijderde voorvoegsel "$2" van de interwikitabel',
	'interwiki_logpagetext'    => 'Dit is een logboek van wijzigingen aan de [[Special:Interwiki|interwikitabel]].',
	'interwiki_defaultreason'  => 'geen reden gegeven',
);

/** Norwegian Nynorsk (‪Norsk (nynorsk)‬)
 * @author Jon Harald Søby
 */
$messages['nn'] = array(
	'interwiki_reasonfield'   => 'Årsak',
	'interwiki_defaultreason' => 'inga grunngjeving',
);

/** Norwegian (bokmål)‬ (‪Norsk (bokmål)‬)
 * @author Jon Harald Søby
 */
$messages['no'] = array(
	'interwiki'               => 'Vis og manipuler interwikidata',
	'interwiki-desc'          => 'Legger til en [[Special:Interwiki|spesialside]] som gjør at man kan se og redigere interwiki-tabellen.',
	'interwiki_prefix'        => 'Prefiks',
	'interwiki_reasonfield'   => 'Årsak',
	'interwiki_intro'         => 'Se $1 for mer informasjon om interwikitabellen. Det er en [[Special:Log/interwiki|logg]] over endringer i interwikitabellen.',
	'interwiki_local'         => 'Lokal',
	'interwiki_error'         => 'FEIL: Interwikitabellen er tom, eller noe gikk gærent.',
	'interwiki_delquestion'   => 'Sletter «$1»',
	'interwiki_deleting'      => 'Du sletter prefikset «$1».',
	'interwiki_deleted'       => 'Prefikset «$1» ble fjernet fra interwikitabellen.',
	'interwiki_delfailed'     => 'Prefikset «$1» kunne ikke fjernes fra interwikitabellen.',
	'interwiki_addtext'       => 'Legg til et interwikiprefiks.',
	'interwiki_addintro'      => 'Du legger til et nytt interwikiprefiks. Husk at det ikke kan inneholde mellomrom ( ), kolon (:), &-tegn eller likhetstegn (=).',
	'interwiki_addbutton'     => 'Legg til',
	'interwiki_added'         => 'Prefikset «$1» ble lagt til i interwikitabellen.',
	'interwiki_addfailed'     => 'Prefikset «$1» kunne ikke legges til i interwikitabellen. Det er kanskje brukt der fra før.',
	'interwiki_logpagename'   => 'Interwikitabellogg',
	'interwiki_log_added'     => 'La til «$2» ($3) (trans: $4) (lokal: $5) til interwikitabellen',
	'interwiki_log_deleted'   => 'Fjernet prefikset «$2» fra interwikitabellen',
	'interwiki_logpagetext'   => 'Dette er en logg over endringer i [[Special:Interwiki|interwikitabellen]].',
	'interwiki_defaultreason' => 'ingen grunn gitt',
);

/** Northern Sotho (Sesotho sa Leboa)
 * @author Mohau
 */
$messages['nso'] = array(
	'interwiki_reasonfield'   => 'Lebaka',
	'interwiki_delquestion'   => 'Phumula "$1"',
	'interwiki_addbutton'     => 'Lokela',
	'interwiki_defaulturl'    => 'http://www.mohlala.com/$1',
	'interwiki_defaultreason' => 'gago lebaka leo lefilwego',
);

/** Occitan (Occitan)
 * @author Cedric31
 */
$messages['oc'] = array(
	'interwiki'               => 'Veire e editar las donadas interwiki',
	'interwiki-desc'          => 'Ajusta una [[Special:Interwiki|pagina especiala]] per veire e editar la taula interwiki',
	'interwiki_prefix'        => 'Prefix',
	'interwiki_reasonfield'   => 'Motiu',
	'interwiki_intro'         => "Vejatz $1 per obténer mai d'entresenhas per çò que concernís la taula interwiki. Aquò es lo [[Special:Log/interwiki|jornal de las modificacions]] de la taula interwiki.",
	'interwiki_error'         => "Error : la taula dels interwikis es voida o un processús s'es mal desenrotlat.",
	'interwiki_delquestion'   => 'Supression "$1"',
	'interwiki_deleting'      => 'Escafatz presentament lo prefix « $1 ».',
	'interwiki_deleted'       => '$1 es estada levada amb succès de la taula interwiki.',
	'interwiki_delfailed'     => '$1 a pas pogut èsser levat de la taula interwiki.',
	'interwiki_addtext'       => 'Ajusta un prefix interwiki',
	'interwiki_addintro'      => "Sètz a apondre un prefix interwiki. Rapelatz-vos que pòt pas conténer d'espacis ( ), de punts dobles (:), d'eperluetas (&) o de signes egal (=)",
	'interwiki_addbutton'     => 'Apondre',
	'interwiki_added'         => '$1 es estat ajustat amb succès dins la taula interwiki.',
	'interwiki_addfailed'     => '$1 a pas pogut èsser ajustat a la taula interwiki.',
	'interwiki_logpagename'   => 'Jornal de la taula interwiki',
	'interwiki_log_added'     => 'Ajustat « $2 » ($3) (trans: $4) (local: $5) dins la taula interwiki',
	'interwiki_log_deleted'   => 'Prefix « $2 » suprimit de la taula interwiki',
	'interwiki_logpagetext'   => 'Aquò es lo jornal dels cambiaments dins la [[Special:Interwiki|taula interwiki]].',
	'interwiki_defaultreason' => 'Cap de motiu balhat',
);

/** Polish (Polski)
 * @author McMonster
 */
$messages['pl'] = array(
	'interwiki_reasonfield'   => 'Powód',
	'interwiki_addbutton'     => 'Dodaj',
	'interwiki_defaultreason' => 'nie podano powodu',
);

/** Pashto (پښتو)
 * @author Ahmed-Najib-Biabani-Ibrahimkhel
 */
$messages['ps'] = array(
	'interwiki_prefix'        => 'مختاړی',
	'interwiki_reasonfield'   => 'سبب',
	'interwiki_delquestion'   => '"$1" د ړنګولو په حال کې دی...',
	'interwiki_deleting'      => 'تاسو د "$1" مختاړی ړنګوی.',
	'interwiki_addbutton'     => 'ورګډول',
	'interwiki_defaultreason' => 'هېڅ کوم سبب نه دی ورکړ شوی',
);

/** Portuguese (Português)
 * @author Malafaya
 * @author 555
 */
$messages['pt'] = array(
	'interwiki'               => 'Ver e manipular dados de interwikis',
	'interwiki-desc'          => 'Adiciona uma [[{{ns:Special}}:Interwiki|página especial]] para visualizar e editar a tabela de interwikis',
	'interwiki_prefix'        => 'Prefixo',
	'interwiki_reasonfield'   => 'Motivo',
	'interwiki_intro'         => 'Veja $1 para maiores informações em relação à tabela de interwikis. Há também um [[{{ns:special}}:Log/interwiki|registo de alterações]] na tabela de interwikis.',
	'interwiki_error'         => 'ERRO: A tabela de interwikis está vazia, ou alguma outra coisa não correu bem.',
	'interwiki_delquestion'   => 'A apagar "$1"',
	'interwiki_deleting'      => 'Está a apagar o prefixo "$1".',
	'interwiki_deleted'       => 'O prefixo "$1" foi removido da tabelas de interwikis com sucesso.',
	'interwiki_delfailed'     => 'O prefixo "$1" não pôde ser removido da tabela de interwikis.',
	'interwiki_addtext'       => 'Adicionar um prefixo de interwikis',
	'interwiki_addintro'      => 'Você se encontra prestes a adicionar um novo prefixo de interwiki. Lembre-se de que ele não pode conter espaços ( ), dois-pontos (:), conjunções (&) ou sinais de igualdade (=).',
	'interwiki_addbutton'     => 'Adicionar',
	'interwiki_added'         => 'O prefixo "$1" foi adicionado à tabela de interwikis com sucesso.',
	'interwiki_addfailed'     => 'O prefixo "$1" não pôde ser adicionado à tabela de interwikis. Possivelmente já existe nessa tabela.',
	'interwiki_logpagename'   => 'Registo da tabela de interwikis',
	'interwiki_log_added'     => 'Adicionado "$2" ($3) (trans: $4) (local: $5) à tabela de interwikis',
	'interwiki_log_deleted'   => 'Removido o prefixo "$2" da tabela de interwikis',
	'interwiki_logpagetext'   => 'Este é um registo das alterações à [[{{ns:special}}:Interwiki|tabela de interwikis]].',
	'interwiki_defaultreason' => 'sem motivo especificado',
);

/** Russian (Русский)
 * @author .:Ajvol:.
 * @author Illusion
 */
$messages['ru'] = array(
	'interwiki'               => 'Просмотр и изменение настроек интервики',
	'interwiki-desc'          => 'Добавляет [[Special:Interwiki|служебную страницу]] для просмотра и редактирования таблицы префиксов интервики.',
	'interwiki_prefix'        => 'Приставка',
	'interwiki_reasonfield'   => 'Причина',
	'interwiki_intro'         => 'См. $1, чтобы получить более подробную информацию о таблице интервики. Существует также  [[Special:Log/interwiki|журнал изменений]] таблицы интервики.',
	'interwiki_error'         => 'ОШИБКА: таблица интервики пуста или что-то другое работает ошибочно.',
	'interwiki_delquestion'   => 'Удаление «$1»',
	'interwiki_deleting'      => 'Вы удаляете приставку «$1».',
	'interwiki_deleted'       => 'Приставка «$1» успешно удалена из таблицы интервики.',
	'interwiki_delfailed'     => 'Приставка «$1» не может быть удалена из таблицы интервики.',
	'interwiki_addtext'       => 'Добавить новую интервики-приставку',
	'interwiki_addintro'      => 'Вы собираетесь добавить новую интервики-приставку. Помните, что она не может содержать пробелы ( ), двоеточия (:), амперсанды (&) и знаки равенства (=).',
	'interwiki_addbutton'     => 'Добавить',
	'interwiki_added'         => 'Приставка «$1» успешно добавлена в таблицу интервики.',
	'interwiki_addfailed'     => 'Приставка «$1» не может быть добавлена в таблицу интервики. Возможно, она уже присутствует в таблице интервики.',
	'interwiki_logpagename'   => 'Журнал изменений таблицы интервики',
	'interwiki_log_added'     => 'Приставка «$2» ($3) (trans: $4) (local: $5) добавлена в таблицу интервики',
	'interwiki_log_deleted'   => 'Приставка «$2» удалена из таблицы интервики',
	'interwiki_logpagetext'   => 'Это журнал изменений [[Special:Interwiki|таблицы интервики]].',
	'interwiki_defaultreason' => 'причина не указана',
);

/** Sassaresu (Sassaresu)
 * @author Felis
 */
$messages['sdc'] = array(
	'interwiki'               => 'Vidè e mudìfiggà li dati interwiki',
	'interwiki_prefix'        => 'Prefissu',
	'interwiki_reasonfield'   => 'Rasgioni',
	'interwiki_delquestion'   => 'Canzillendi "$1"',
	'interwiki_deleting'      => 'Sei canzillendi lu prefissu "$1".',
	'interwiki_addtext'       => 'Aggiungi un prefissu interwiki',
	'interwiki_addbutton'     => 'Aggiungi',
	'interwiki_logpagename'   => 'Rigisthru di la table interwiki',
	'interwiki_defaultreason' => 'nisciuna mutibazioni indicadda',
);

/** Slovak (Slovenčina)
 * @author Helix84
 */
$messages['sk'] = array(
	'interwiki'               => 'Zobraziť a upravovať údaje interwiki',
	'interwiki-desc'          => 'Pridáva [[Special:Interwiki|špeciálnu stránku]] na zobrazovanie a upravovanie tabuľky interwiki',
	'interwiki_prefix'        => 'Predpona',
	'interwiki_reasonfield'   => 'Dôvod',
	'interwiki_intro'         => 'Viac informácií o tabuľke interwiki nájdete na $1. Existuje [[Special:Log/interwiki|záznam zmien]] tabuľky interwiki.',
	'interwiki_error'         => 'CHYBA: Tabuľka interwiki je prázdna alebo sa pokazilo niečo iné.',
	'interwiki_delquestion'   => 'Maže sa „$1“',
	'interwiki_deleting'      => 'Mažete predponu „$1“.',
	'interwiki_deleted'       => 'Predpona „$1“ bola úspešne odstránená z tabuľky interwiki.',
	'interwiki_delfailed'     => 'Predponu „$1“ nebola možné odstrániť z tabuľky interwiki.',
	'interwiki_addtext'       => 'Pridať predponu interwiki',
	'interwiki_addintro'      => 'Pridávate novú predponu interwiki. Pamätajte, že nemôže obsahovať medzery „ “, dvojbodky „:“, ampersand „&“ ani znak rovnosti „=“.',
	'interwiki_addbutton'     => 'Pridať',
	'interwiki_added'         => 'Predpona „$1“ bola úspešne pridaná do tabuľky interwiki.',
	'interwiki_addfailed'     => 'Predponu „$1“ nebola možné pridať do tabuľky interwiki. Je možné, že už v tabuľke interwiki existuje.',
	'interwiki_logpagename'   => 'Záznam zmien tabuľky interwiki',
	'interwiki_log_added'     => 'Pridané „$2“ ($3) (trans: $4) (local: $5) do tabuľky interwiki',
	'interwiki_log_deleted'   => 'Odstránené „$2“ z tabuľky interwiki',
	'interwiki_logpagetext'   => 'Toto je záznam zmien [[Special:Interwiki|tabuľky interwiki]].',
	'interwiki_defaultreason' => 'nebol uvedený dôvod',
);



/** Seeltersk (Seeltersk)
 * @author Pyt
 */
$messages['stq'] = array(
	'interwiki'               => 'Interwiki-Doaten bekiekje un beoarbaidje',
	'interwiki_prefix'        => 'Präfix',
	'interwiki_reasonfield'   => 'Gruund',
	'interwiki_intro'         => 'Sjuch $1 foar wiedere Informatione uur ju Interwiki-Tabelle. Dät [[Special:Log/interwiki|Logbouk]] wiest aal Annerengen an ju Interwiki-Tabelle.',
	'interwiki_error'         => 'Failer: Ju Interwiki-Tabelle is loos.',
	'interwiki_delquestion'   => 'Läsket „$1“',
	'interwiki_deleting'      => 'Du hoalst Prefix "$1" wäch.',
	'interwiki_deleted'       => '„$1“ wuude mäd Ärfoulch uut ju Interwiki-Tabelle wächhoald.',
	'interwiki_delfailed'     => '„$1“ kuude nit uut ju Interwiki-Tabelle läsked wäide.',
	'interwiki_addtext'       => 'N Interwiki-Präfix bietouföigje',
	'interwiki_addintro'      => 'Du föigest n näi Interwiki-Präfix bietou. Beoachte, dät et neen Loosteeken ( ), Koopmons-Un (&), Gliekhaidsteeken (=) un naan Dubbelpunkt (:) änthoolde duur.',
	'interwiki_addbutton'     => 'Bietouföigje',
	'interwiki_added'         => '„$1“ wuude mäd Ärfoulch ju Interwiki-Tabelle bietouföiged.',
	'interwiki_addfailed'     => '„$1“ kuude nit ju Interwiki-Tabelle bietouföiged wäide.',
	'interwiki_logpagename'   => 'Interwiki-Tabellenlogbouk',
	'interwiki_log_added'     => 'häd „$2“ ($3) (trans: $4) (lokal: $5) ju Interwiki-Tabelle bietouföiged',
	'interwiki_log_deleted'   => 'häd „$2“ uut ju Interwiki-Tabelle wächhoald',
	'interwiki_logpagetext'   => 'In dit Logbouk wäide Annerengen an ju [[Special:Interwiki|Interwiki-Tabelle]] protokollierd.',
	'interwiki_defaultreason' => 'naan Gruund ounroat',
);

/** Swedish (Svenska)
 * @author M.M.S.
 * @author Lejonel
 */
$messages['sv'] = array(
	'interwiki'               => 'Visa och redigera interwiki-data',
	'interwiki-desc'          => 'Lägger till en [[Special:Interwiki|special sida]] till att visa och redigera interwiki tabellen',
	'interwiki_prefix'        => 'Prefix',
	'interwiki_reasonfield'   => 'Anledning',
	'interwiki_intro'         => 'Se $1 för mer information om interwiki tebellen. Det är en [[Special:Log/interwiki|logg av ändringar]] till interwiki tabellen.',
	'interwiki_error'         => 'FEL: Interwikitabellen är tom, eller så gick något fel.',
	'interwiki_delquestion'   => 'Tar bort "$1"',
	'interwiki_deleting'      => 'Du raderar prefixet "$1".',
	'interwiki_deleted'       => 'Prefixet "$1 blev raderad från interwikitabellen.',
	'interwiki_delfailed'     => 'Prefixet "$1" kunde inte raderas från interwikitabellen.',
	'interwiki_addtext'       => 'Lägg till ett interwiki prefix',
	'interwiki_addintro'      => 'Du lägger till ett nytt interwikiprefix. Kom ihåg att det inte kan innehålla mellanrum ( ), kolon (:), &-tecken eller likamedtecken (=).',
	'interwiki_addbutton'     => 'Lägg till',
	'interwiki_added'         => 'Prefixet "$1" blev tillaggt i interwikitabellen.',
	'interwiki_addfailed'     => 'Prefixet "$1" kunde inte läggas till i interwikitabellen. Det är kanske använt där från förr.',
	'interwiki_logpagename'   => 'Interwiki tabells logg',
	'interwiki_log_added'     => 'Lade till "$2" ($3) (trans: $4) (lokal: $5) till interwikitabellen',
	'interwiki_log_deleted'   => 'Raderade prefixet "$2" från interwikitabellen',
	'interwiki_logpagetext'   => 'Detta är en logg över ändringar i [[Special:Interwiki|interwikitabellen]].',
	'interwiki_defaultreason' => 'ingen anledning given',
);

/** ślůnski (ślůnski)
 * @author Herr Kriss
 */
$messages['szl'] = array(
	'interwiki_reasonfield' => 'Čymu',
);

/** Telugu (తెలుగు)
 * @author Veeven
 */
$messages['te'] = array(
	'interwiki'               => 'అంతర్వికీ భోగట్టాని చూడండి మరియు మార్చండి',
	'interwiki_prefix'        => 'ఉపసర్గ',
	'interwiki_reasonfield'   => 'కారణం',
	'interwiki_intro'         => 'అంతర్వికీ పట్టిక గురించి మరింత సమాచారం కోసం $1ని చూడండి. అంతర్వికీ పట్టికకి [[Special:Log/interwiki|మార్పుల దినచర్య]] ఉంది.',
	'interwiki_error'         => 'పొరపాటు: అంతర్వికీ పట్టిక ఖాళీగా ఉంది, లేదా ఏదో తప్పు జరిగింది.',
	'interwiki_delquestion'   => '"$1"ని తొలగిస్తున్నారు',
	'interwiki_deleting'      => 'మీరు "$1" అనే ఉపసర్గని తొలగించబోతున్నారు.',
	'interwiki_deleted'       => 'అంతర్వికీ పట్టిక నుండి "$1" అనే ఉపసర్గని విజయవంతంగా తొలగించాం.',
	'interwiki_delfailed'     => 'అంతర్వికీ పట్టిక నుండి "$1" అనే ఉపసర్గని తొలగించలేకపోయాం.',
	'interwiki_addtext'       => 'ఓ అంతర్వికీ ఉపసర్గని చేర్చండి',
	'interwiki_addbutton'     => 'చేర్చు',
	'interwiki_logpagename'   => 'అంతర్వికీ పట్టిక దినచర్య',
	'interwiki_logpagetext'   => 'ఇది [[Special:Interwiki|అంతర్వికీ పట్టిక]]కి జరిగిన మార్పుల దినచర్య.',
	'interwiki_defaultreason' => 'కారణం ఇవ్వలేదు',
);

/** Tetum (Tetun)
 * @author MF-Warburg
 */
$messages['tet'] = array(
	'interwiki_delquestion' => 'Halakon $1',
);

/** Vietnamese (Tiếng Việt)
 * @author Minh Nguyen
 */
$messages['vi'] = array(
	'interwiki'             => 'Xem và sửa đổi dữ liệu về liên kết liên wiki',
	'interwiki_prefix'      => 'Tiền tố',
	'interwiki_reasonfield' => 'Lý do',
	'interwiki_addtext'     => 'Thêm tiền tố liên kết liên wiki',
	'interwiki_addbutton'   => 'Thêm',
);

/** Traditional Chinese (‪中文(繁體)‬)
 * @author Alexsh
 */
$messages['zh-hant'] = array(
	'interwiki'             => '跨語言連結表',
	'interwiki-desc'        => '新增[[Special:Interwiki|特殊頁面]]以檢視或編輯跨語言連結表',
	'interwiki_prefix'      => '連結字串',
	'interwiki_reasonfield' => '原因',
	'interwiki_intro'       => '請參閱$1以取得更多有關跨語言連結表的訊息。

這裡有跨語言連結表的[[Special:Log/interwiki|更動日誌]]。',
	'interwiki_error'       => '錯誤：跨語言連結表為空，或是發生其他錯誤。',
	'interwiki_delquestion' => '正在刪除"$1"',
	'interwiki_deleting'    => '您正在刪除連結字串"$1"',
	'interwiki_deleted'     => '已成功從連結表中刪除連結字串"$1"',
	'interwiki_delfailed'   => '無法從連結表刪除連結字串"$1"',
	'interwiki_addtext'     => '新增跨語連結字串',
);
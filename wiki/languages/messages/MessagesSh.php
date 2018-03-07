<?php
/** Serbo-Croatian (srpskohrvatski / српскохрватски)
 *
 * To improve a translation please visit https://translatewiki.net
 *
 * @ingroup Language
 * @file
 *
 * @author Kaganer
 * @author Kolega2357
 * @author Nemo bis
 * @author OC Ripper
 * @author לערי ריינהארט
 */

$fallback = 'bs, sr-el, hr';

$namespaceNames = [
	NS_SPECIAL          => 'Posebno',
	NS_TALK             => 'Razgovor',
	NS_USER             => 'Korisnik',
	NS_USER_TALK        => 'Razgovor_sa_korisnikom',
	NS_PROJECT_TALK     => 'Razgovor_o_$1',
	NS_FILE             => 'Datoteka',
	NS_FILE_TALK        => 'Razgovor_o_datoteci',
	NS_MEDIAWIKI_TALK   => 'Mediawiki_razgovor',
	NS_TEMPLATE         => 'Šablon',
	NS_TEMPLATE_TALK    => 'Razgovor_o_šablonu',
	NS_HELP             => 'Pomoć',
	NS_HELP_TALK        => 'Razgovor_o_pomoći',
	NS_CATEGORY         => 'Kategorija',
	NS_CATEGORY_TALK    => 'Razgovor_o_kategoriji',
];

# Some dummy translations to prevent language fallback for now
# @TODO: Check whether localising them is appropriate.
$namespaceGenderAliases = [];
$defaultDateFormat = 'dmy';
$datePreferences = [
	'default',
	'dmy',
	'ymd',
	'ISO 8601',
];
$datePreferenceMigrationMap = [
	'default',
	'mdy',
	'dmy',
	'ymd'
];

$specialPageAliases = [
	'Activeusers'               => [ 'Aktivni_korisnici' ],
	'Allmessages'               => [ 'Sve_poruke' ],
	'Allpages'                  => [ 'Sve_stranice' ],
	'Ancientpages'              => [ 'Najstarije_stranice' ],
	'Blankpage'                 => [ 'Prazna_stranica' ],
	'Booksources'               => [ 'Traži_ISBN' ],
	'BrokenRedirects'           => [ 'Kriva_preusmjerenja' ],
	'Categories'                => [ 'Kategorije' ],
	'Confirmemail'              => [ 'E-mail_potvrda' ],
	'Contributions'             => [ 'Doprinosi' ],
	'CreateAccount'             => [ 'Stvori_račun' ],
	'Deadendpages'              => [ 'Mrtve_stranice' ],
	'DeletedContributions'      => [ 'Obrisani_doprinosi' ],
	'DoubleRedirects'           => [ 'Dvostruka_preusmjerenja' ],
	'Emailuser'                 => [ 'E-mail', 'Elektronska_pošta' ],
	'Export'                    => [ 'Izvezi' ],
	'Fewestrevisions'           => [ 'Najmanje_uređivane_stranice' ],
	'FileDuplicateSearch'       => [ 'Traži_kopije_datoteka' ],
	'Filepath'                  => [ 'Putanja_datoteke' ],
	'Import'                    => [ 'Uvezi' ],
	'LinkSearch'                => [ 'Traži_poveznice', 'Traži_linkove' ],
	'Listadmins'                => [ 'Popis_administratora' ],
	'Listbots'                  => [ 'Popis_botova' ],
	'Listgrouprights'           => [ 'Popis_korisničkih_prava' ],
	'Listredirects'             => [ 'Popis_preusmjerenja' ],
	'Listusers'                 => [ 'Popis_korisnika', 'Korisnički_popis' ],
	'Lockdb'                    => [ 'Zaključaj_bazu' ],
	'Log'                       => [ 'Evidencije', 'Registri' ],
	'Lonelypages'               => [ 'Usamljene_stranice', 'Siročad' ],
	'Longpages'                 => [ 'Duge_stranice' ],
	'MergeHistory'              => [ 'Spoji_historiju' ],
	'MIMEsearch'                => [ 'MIME_pretraga' ],
	'Mostcategories'            => [ 'Najviše_kategorija' ],
	'Mostimages'                => [ 'Najviše_povezane_datoteke', 'Najviše_povezane_slike' ],
	'Mostlinked'                => [ 'Najviše_povezane_stranice' ],
	'Mostlinkedcategories'      => [ 'Najviše_povezane_kategorije', 'Najviše_korištene_kategorije' ],
	'Mostlinkedtemplates'       => [ 'Najviše_povezani_šabloni', 'Najviše_korišteni_šabloni' ],
	'Mostrevisions'             => [ 'Najviše_uređivane_stranice' ],
	'Movepage'                  => [ 'Premjesti_stranicu' ],
	'Mycontributions'           => [ 'Moji_doprinosi' ],
	'Mypage'                    => [ 'Moja_stranica' ],
	'Mytalk'                    => [ 'Moj_razgovor' ],
	'Myuploads'                 => [ 'Moje_postavljene_datoteke' ],
	'Newimages'                 => [ 'Nove_datoteke', 'Nove_slike' ],
	'Newpages'                  => [ 'Nove_stranice' ],
	'Preferences'               => [ 'Postavke' ],
	'Prefixindex'               => [ 'Prefiks_indeks', 'Stranice_po_prefiksu' ],
	'Protectedpages'            => [ 'Zaštićene_stranice' ],
	'Protectedtitles'           => [ 'Zaštićeni_naslovi' ],
	'Randompage'                => [ 'Slučajna_stranica' ],
	'Randomredirect'            => [ 'Slučajno_preusmjerenje' ],
	'Recentchanges'             => [ 'Nedavne_izmjene' ],
	'Recentchangeslinked'       => [ 'Povezane_izmjene' ],
	'Revisiondelete'            => [ 'Brisanje_izmjene' ],
	'Search'                    => [ 'Traži' ],
	'Shortpages'                => [ 'Kratke_stranice' ],
	'Specialpages'              => [ 'Posebne_stranice' ],
	'Statistics'                => [ 'Statistike' ],
	'Unblock'                   => [ 'Odblokiraj' ],
	'Uncategorizedcategories'   => [ 'Nekategorizirane_kategorije' ],
	'Uncategorizedimages'       => [ 'Nekategorizirane_datoteke', 'Nekategorizirane_slike' ],
	'Uncategorizedpages'        => [ 'Nekategorizirane_stranice' ],
	'Uncategorizedtemplates'    => [ 'Nekategorizirani_šabloni' ],
	'Undelete'                  => [ 'Vrati' ],
	'Unlockdb'                  => [ 'Otključaj_bazu' ],
	'Unusedcategories'          => [ 'Nekorištene_kategorije' ],
	'Unusedimages'              => [ 'Nekorištene_datoteke', 'Nekorištene_slike' ],
	'Unusedtemplates'           => [ 'Nekorišteni_šabloni' ],
	'Unwatchedpages'            => [ 'Negledane_stranice' ],
	'Upload'                    => [ 'Postavi_datoteku' ],
	'Userrights'                => [ 'Korisnička_prava' ],
	'Version'                   => [ 'Verzija' ],
	'Wantedcategories'          => [ 'Tražene_kategorije' ],
	'Wantedfiles'               => [ 'Tražene_datoteke' ],
	'Wantedpages'               => [ 'Tražene_stranice' ],
	'Wantedtemplates'           => [ 'Traženi_šabloni' ],
	'Watchlist'                 => [ 'Spisak_praćenja' ],
	'Whatlinkshere'             => [ 'Što_vodi_ovdje' ],
	'Withoutinterwiki'          => [ 'Bez_interwikija' ],
];

$magicWords = [
	'redirect'                  => [ '0', '#PREUSMJERI', '#PREUSMERI', '#REDIRECT' ],
	'notoc'                     => [ '0', '__BEZSADRŽAJA__', '__NOTOC__' ],
	'nogallery'                 => [ '0', '__BEZGALERIJE__', '__NOGALLERY__' ],
	'forcetoc'                  => [ '0', '__FORSIRANISADRŽAJ__', '__UKLJUČISADRŽAJ__', '__FORCETOC__' ],
	'toc'                       => [ '0', '__SADRŽAJ__', '__TOC__' ],
	'noeditsection'             => [ '0', '__BEZ_IZMJENA__', '__BEZIZMJENA__', '__BEZ_IZMENA__', '__BEZIZMENA__', '__NOEDITSECTION__' ],
	'currentmonth'              => [ '1', 'TRENUTNIMJESEC', 'TRENUTNIMESEC', 'TRENUTAČNIMJESEC', 'CURRENTMONTH', 'CURRENTMONTH2' ],
	'currentmonth1'             => [ '1', 'TRENUTNIMJESEC1', 'TRENUTNIMESEC1', 'TRENUTAČNIMJESEC1', 'CURRENTMONTH1' ],
	'currentmonthname'          => [ '1', 'TRENUTNIMJESECIME', 'TRENUTNIMESECIME', 'TRENUTAČNIMJESECIME', 'CURRENTMONTHNAME' ],
	'currentmonthnamegen'       => [ '1', 'TRENUTNIMJESECROD', 'TRENUTNIMESECROD', 'TRENUTAČNIMJESECROD', 'CURRENTMONTHNAMEGEN' ],
	'currentmonthabbrev'        => [ '1', 'TRENUTNIMJESECSKR', 'TRENUTNIMESECSKR', 'TRENUTAČNIMJESECSKR', 'CURRENTMONTHABBREV' ],
	'currentday'                => [ '1', 'TRENUTNIDAN', 'TRENUTAČNIDAN', 'CURRENTDAY' ],
	'currentday2'               => [ '1', 'TRENUTNIDAN2', 'TRENUTAČNIDAN2', 'CURRENTDAY2' ],
	'currentdayname'            => [ '1', 'TRENUTNIDANIME', 'TRENUTAČNIDANIME', 'CURRENTDAYNAME' ],
	'currentyear'               => [ '1', 'TRENUTNAGODINA', 'TRENUTAČNAGODINA', 'CURRENTYEAR' ],
	'currenttime'               => [ '1', 'TRENUTNOVRIJEME', 'TRENUTNOVREME', 'TRENUTAČNOVRIJEME', 'CURRENTTIME' ],
	'currenthour'               => [ '1', 'TRENUTNISAT', 'TRENUTAČNISAT', 'CURRENTHOUR' ],
	'localmonth'                => [ '1', 'LOKALNIMJESEC', 'LOKALNIMESEC', 'LOCALMONTH', 'LOCALMONTH2' ],
	'localmonth1'               => [ '1', 'LOKALNIMJESEC1', 'LOKALNIMESEC1', 'LOCALMONTH1' ],
	'localmonthname'            => [ '1', 'LOKALNIMJESECIME', 'LOKALNIMESECIME', 'LOCALMONTHNAME' ],
	'localmonthnamegen'         => [ '1', 'LOKALNIMJESECROD', 'LOKALNIMESECROD', 'LOKALNIMJESECGEN', 'LOKALNIMESECGEN', 'LOCALMONTHNAMEGEN' ],
	'localmonthabbrev'          => [ '1', 'LOKALNIMJESECSKR', 'LOKALNIMESECSKR', 'LOKALNIMJESECKRAT', 'LOCALMONTHABBREV' ],
	'localday'                  => [ '1', 'LOKALNIDAN', 'LOCALDAY' ],
	'localday2'                 => [ '1', 'LOKALNIDAN2', 'LOCALDAY2' ],
	'localdayname'              => [ '1', 'LOKALNIDANIME', 'LOCALDAYNAME' ],
	'localyear'                 => [ '1', 'LOKALNAGODINA', 'LOCALYEAR' ],
	'localtime'                 => [ '1', 'LOKALNOVRIJEME', 'LOKALNOVREME', 'LOCALTIME' ],
	'localhour'                 => [ '1', 'LOKALNISAT', 'LOCALHOUR' ],
	'numberofpages'             => [ '1', 'BROJSTRANICA', 'BROJSTRANA', 'NUMBEROFPAGES' ],
	'numberofarticles'          => [ '1', 'BROJČLANAKA', 'NUMBEROFARTICLES' ],
	'numberoffiles'             => [ '1', 'BROJDATOTEKA', 'BROJFAJLOVA', 'NUMBEROFFILES' ],
	'numberofusers'             => [ '1', 'BROJKORISNIKA', 'NUMBEROFUSERS' ],
	'numberofactiveusers'       => [ '1', 'BROJAKTIVNIHKORISNIKA', 'NUMBEROFACTIVEUSERS' ],
	'numberofedits'             => [ '1', 'BROJIZMJENA', 'BROJIZMENA', 'BROJUREĐIVANJA', 'NUMBEROFEDITS' ],
	'pagename'                  => [ '1', 'STRANICA', 'IMESTRANICE', 'PAGENAME' ],
	'pagenamee'                 => [ '1', 'STRANICE', 'IMESTRANICEE', 'PAGENAMEE' ],
	'namespace'                 => [ '1', 'IMENSKIPROSTOR', 'NAMESPACE' ],
	'namespacee'                => [ '1', 'IMENSKIPROSTORI', 'NAMESPACEE' ],
	'talkspace'                 => [ '1', 'PROSTORZARAZGOVOR', 'TALKSPACE' ],
	'talkspacee'                => [ '1', 'PROSTORIZARAZGOVOR', 'TALKSPACEE' ],
	'fullpagename'              => [ '1', 'PUNOIMESTRANE', 'PUNOIMESTRANICE', 'FULLPAGENAME' ],
	'fullpagenamee'             => [ '1', 'PUNOIMESTRANEE', 'PUNOIMESTRANICEE', 'FULLPAGENAMEE' ],
	'msg'                       => [ '0', 'POR:', 'MSG:' ],
	'subst'                     => [ '0', 'ZAMJENI:', 'ZAMENI:', 'ZAMJENA:', 'SUBST:' ],
	'msgnw'                     => [ '0', 'NVPOR:', 'MSGNW:' ],
	'img_thumbnail'             => [ '1', 'mini', 'minijatura', 'thumb', 'thumbnail' ],
	'img_manualthumb'           => [ '1', 'minijatura=$1', 'mini=$1', 'thumbnail=$1', 'thumb=$1' ],
	'img_right'                 => [ '1', 'desno', 'right' ],
	'img_left'                  => [ '1', 'lijevo', 'levo', 'left' ],
	'img_none'                  => [ '1', 'n', 'ništa', 'bez', 'none' ],
	'img_center'                => [ '1', 'centar', 'c', 'središte', 'center', 'centre' ],
	'img_framed'                => [ '1', 'okvir', 'ram', 'frame', 'framed', 'enframed' ],
	'img_frameless'             => [ '1', 'bezokvira', 'bez_okvira', 'frameless' ],
	'img_page'                  => [ '1', 'stranica=$1', 'stranica_$1', 'strana=$1', 'strana_$1', 'page=$1', 'page $1' ],
	'img_upright'               => [ '1', 'na_gore', 'na_gore=$1', 'na_gore_$1', 'uspravno', 'uspravno=$1', 'uspravno_$1', 'upright', 'upright=$1', 'upright $1' ],
	'img_border'                => [ '1', 'granica', 'obrub', 'border' ],
	'img_baseline'              => [ '1', 'osnovnacrta', 'pocetna_linija', 'baseline' ],
	'img_top'                   => [ '1', 'vrh', 'top' ],
	'img_text_top'              => [ '1', 'vrh_teksta', 'tekst_vrh', 'text-top' ],
	'img_middle'                => [ '1', 'sredina', 'middle' ],
	'img_bottom'                => [ '1', 'dno', 'bottom' ],
	'img_text_bottom'           => [ '1', 'tekst-dno', 'text-bottom' ],
	'localurl'                  => [ '0', 'LOKALNIURL:', 'LOCALURL:' ],
	'localurle'                 => [ '0', 'LOKALNIURLE:', 'LOCALURLE:' ],
	'notitleconvert'            => [ '0', '__BEZTC__', '__BEZKN__', '__BPN__', '__NOTITLECONVERT__', '__NOTC__' ],
	'nocontentconvert'          => [ '0', '__BEZCC__', '__BPS__', '__NOCONTENTCONVERT__', '__NOCC__' ],
	'currentweek'               => [ '1', 'TRENUTNASEDMICA', 'TRENUTAČNITJEDAN', 'TRENUTNANEDELJA', 'TRENUTNITJEDAN', 'CURRENTWEEK' ],
	'currentdow'                => [ '1', 'TRENUTNIDANSEDMICE', 'TRENUTAČNIDANTJEDNA', 'TRENUTNIDANNEDELJE', 'TRENUTNIDANTJEDNA', 'CURRENTDOW' ],
	'localweek'                 => [ '1', 'LOKALNASEDMICA', 'LOKALNITJEDAN', 'LOKALNANEDELJA', 'LOCALWEEK' ],
	'localdow'                  => [ '1', 'LOKALNIDANSEDMICE', 'LOKALNIDANTJEDNA', 'LOKALNIDANNEDELJE', 'LOCALDOW' ],
	'revisionid'                => [ '1', 'IDIZMJENE', 'IDIZMENE', 'REVISIONID' ],
	'revisionday'               => [ '1', 'IZMJENEDANA', 'IZMENEDANA', 'REVISIONDAY' ],
	'revisionday2'              => [ '1', 'IZMJENEDANA2', 'IZMENEDANA2', 'REVISIONDAY2' ],
	'revisionmonth'             => [ '1', 'MJESECIZMJENE', 'MESECIZMENE', 'REVISIONMONTH' ],
	'revisionmonth1'            => [ '1', 'MJESECIZMJENE1', 'MESECIZMENE1', 'REVISIONMONTH1' ],
	'revisionyear'              => [ '1', 'GODINAIZMJENE', 'GODINAIZMENE', 'REVISIONYEAR' ],
	'revisiontimestamp'         => [ '1', 'OZNAKAVREMENAIZMJENE', 'OZNAKAVREMENAIZMENE', 'REVISIONTIMESTAMP' ],
	'plural'                    => [ '0', 'MNOŽINA:', 'PLURAL:' ],
	'fullurl'                   => [ '0', 'PUNIURL:', 'PUNURL:', 'FULLURL:' ],
	'fullurle'                  => [ '0', 'PUNIURLE:', 'PUNURLE:', 'FULLURLE:' ],
	'currenttimestamp'          => [ '1', 'TRENUTNAOZNAKAVREMENA', 'TRENUTAČNAOZNAKAVREMENA', 'CURRENTTIMESTAMP' ],
	'localtimestamp'            => [ '1', 'LOKALNAOZNAKAVREMENA', 'LOCALTIMESTAMP' ],
	'special'                   => [ '0', 'posebno', 'special' ],
	'hiddencat'                 => [ '1', '__SAKRIVENAKATEGORIJA__', 'SKRIVENAKAT', '__SAKRIVENAKAT__', '__HIDDENCAT__' ],
	'pagesize'                  => [ '1', 'VELICINASTRANICE', 'VELIČINASTRANICE', 'VELIČINASTRANE', 'VELICINASTRANE', 'PAGESIZE' ],
	'formatdate'                => [ '0', 'formatdatuma', 'formatdate', 'dateformat' ],
];

$linkTrail = '/^([a-zčćđžš]+)(.*)$/sDu';

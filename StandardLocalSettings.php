<?php

// for debug:
// $wgShowExceptionDetails = true;


$wgRCShowWatchingUsers = true; // shows number of watchers in recent changes
// $wgAjaxUploadDestCheck = true; // AJAX check for file overwrite pre-upload
// $wgPageShowWatchingUsers = true; // show number watching users on bottom of page...turn this on if not using WhoIsWatching

// on MOD servers can't access the desired "C:\\Windows\TEMP" directory
$wgTmpDirectory     = "d:\PHP\uploadtemp";



$wgEnotifUserTalk      = true; # UPO
$wgEnotifWatchlist     = true; # UPO
$wgEmailAuthentication = true;

# MySQL specific settings
$wgDBprefix         = "";

# MySQL table options to use during installation or update
$wgDBTableOptions   = "ENGINE=InnoDB, DEFAULT CHARSET=binary";

# Experimental charset support for MySQL 4.1/5.0.
$wgDBmysql5 = false;

## Shared memory settings
$wgMainCacheType    = CACHE_NONE;
$wgMemCachedServers = array();


## Disable all forms of MediaWiki caching
// TAKEN FROM: http://thinkhole.org/wp/2006/09/13/disabling-caching-in-mediawiki/
$wgMainCacheType = CACHE_NONE;
$wgMessageCacheType = CACHE_NONE;
$wgParserCacheType = CACHE_NONE;
//$wgEnableParserCache = false;
$wgCachePages = false;



## To enable image uploads, make sure the 'images' directory
## is writable, then set this to true:
$wgEnableUploads  = true;
#$wgUseImageMagick = true;
#$wgImageMagickConvertCommand = "/usr/bin/convert";

# maximum size of an image that will generate a thumbnail. Not sure if larger images will be
# prevented from being uploaded. If the images already were uploaded, then this number is reduced
# the wiki will display "error creating thumbnail" in place of the thumbnail.
$wgMaxImageArea = "100000000";

// added this... was just allowing images without it...
$wgFileExtensions = array('png','gif','jpg','jpeg','mpp','pdf','tiff','bmp','docx', 'xlsx', 'pptx','ps','odt','ods','odp','odg','zip');
$wgStrictFileExtensions = false;

// remove "this file type may contain malicious code" warning
$wgTrustedMediaFormats[] = "application/vnd.openxmlformats-officedocument.wordprocessingml.document";
$wgTrustedMediaFormats[] = "application/vnd.openxmlformats-officedocument.presentationml.presentation";
$wgTrustedMediaFormats[] = "application/vnd.openxmlformats-officedocument.spreadsheetml.sheet";

// James Montalvo added this line, which is not normally present in LocalSettings.php.
// Removed from this list are "application/msword", "application/vnd.ms-powerpoint", "application/vnd.msexcel"
$wgMimeTypeBlacklist = array ( "text/html", "text/javascript", "text/x-javascript", "application/x-shellscript", "application/x-php", "text/x-php", 
	"text/x-python", "text/x-perl", "text/x-bash", "text/x-sh", "text/x-csh", "text/scriptlet", "application/x-msdownload", "application/x-msmetafile", 
	"application/x-opc+zip");

# InstantCommons allows wiki to use images from http://commons.wikimedia.org
$wgUseInstantCommons  = false;

## If you use ImageMagick (or any other shell command) on a
## Linux server, this will need to be set to the name of an
## available UTF-8 locale
$wgShellLocale = "en_US.utf8";

## If you want to use image uploads under safe mode,
## create the directories images/archive, images/thumb and
## images/temp, and make them all writable. Then uncomment
## this, if it's not already uncommented:
#$wgHashedUploadDirectory = false;

## If you have the appropriate support software installed
## you can enable inline LaTeX equations:
$wgUseTeX           = false;

## Set $wgCacheDirectory to a writable directory on the web server
## to make your wiki go slightly faster. The directory should not
## be publically accessible from the web.
#$wgCacheDirectory = "$IP/cache";

# Site language code, should be one of ./languages/Language(.*).php
$wgLanguageCode = "en";

## Default skin: you can change the default skin. Use the internal symbolic
## names, ie 'standard', 'nostalgia', 'cologneblue', 'monobook', 'vector':
$wgDefaultSkin = "vector";


# Path to the GNU diff3 utility. Used for conflict resolution.
$wgDiff3 = 'C:/Program Files (x86)/GnuWin32/bin/diff3.exe';

# Path to the GNU diff3 utility. Used for conflict resolution.
// $wgDiff3 = "C:/Program Files (x86)/GnuWin/bin/diff3.exe";
# Use external mime detector
// $wgMimeDetectorCommand = "C:/Program Files (x86)/GnuWin/bin/file.exe -bi";


# Query string length limit for ResourceLoader. You should only set this if
# your web server has a query string length limit (then set it to that limit),
# or if you have suhosin.get.max_value_length set in php.ini (then set it to
# that value)
$wgResourceLoaderMaxQueryLength = -1;

# End of automatically generated settings.
# Add more configuration options below.

// allows users to remove the page title.
$wgRestrictDisplayTitle = false;

$wgUseRCPatrol = true;
$wgUseNPPatrol = true;


#
#	AUTH SETTINGS
#

// see http://www.mediawiki.org/wiki/Manual:Hooks/SpecialPage_initList
// and http://www.mediawiki.org/w/Manual:Special_pages
// and http://lists.wikimedia.org/pipermail/mediawiki-l/2009-June/031231.html
// disable login and logout functions for all users
function LessSpecialPages(&$list) {
        unset( $list['Userlogout'] );
        unset( $list['Userlogin'] );
        return true;
}
$wgHooks['SpecialPage_initList'][]='LessSpecialPages';
 
// http://www.mediawiki.org/wiki/Extension:Windows_NTLM_LDAP_Auto_Auth
// remove login and logout buttons for all users
function StripLogin(&$personal_urls, &$wgTitle) {  
        unset( $personal_urls["login"] );
        unset( $personal_urls["logout"] );
        unset( $personal_urls['anonlogin'] );
        return true;
}
$wgHooks['PersonalUrls'][] = 'StripLogin';

$wgGroupPermissions['*']['createaccount'] = false;
$wgGroupPermissions['*']['read'] = false;
$wgGroupPermissions['*']['edit'] = false;

$wgGroupPermissions['user']['talk'] = true; 
$wgGroupPermissions['user']['read'] = true;
$wgGroupPermissions['user']['edit'] = false;

// Viewer group is used by the Auth_remoteuser extension to allow only those in
// group "Viewer" to view the wiki. This allows anyone with NDC auth to get to the
// wiki (which auto-creates an account for them), but doesn't allow those users to
// see any of the wiki (besided the "access denied" page and "request access" page)
$wgGroupPermissions['Viewer']['talk'] = true; 
$wgGroupPermissions['Viewer']['read'] = true;
$wgGroupPermissions['Viewer']['edit'] = false;
$wgGroupPermissions['Viewer']['movefile'] = true;

$wgGroupPermissions['Contributor'] = $wgGroupPermissions['user'];
$wgGroupPermissions['Contributor']['edit'] = true;
$wgGroupPermissions['Contributor']['unwatchedpages'] = true;

#
#   CURATORs: people with delete permissions for now
#
$wgGroupPermissions['Curator']['delete'] = true; // Delete pages
$wgGroupPermissions['Curator']['bigdelete'] = true; // Delete pages with large histories
$wgGroupPermissions['Curator']['suppressredirect'] = true; // Not create redirect when moving page
$wgGroupPermissions['Curator']['browsearchive'] = true; // Search deleted pages
$wgGroupPermissions['Curator']['undelete'] = true; // Undelete a page
$wgGroupPermissions['Curator']['deletedhistory'] = true; // View deleted history w/o associated text
$wgGroupPermissions['Curator']['deletedtext'] = true; // View deleted text/changes between deleted revs

#
#   MANAGERs: can edit user rights, plus used in MediaWiki:Approvedrevs-permissions
#   to allow managers to give managers the ability to approve pages (lesson plans, ESOP, etc)
#
$wgGroupPermissions['Manager']['userrights'] = true; // Edit all user rights





################# MOVED TO DEFAULT SETTINGS from LocalSettings.php

$wgVectorFeatures['editwarning']['global'] = false;


// keep this at 1 except when usership will be low and maintenance is being performed.
$wgJobRunRate = 1;

## UPO means: this is also a user preference option
$wgEnableEmail      = true;
$wgEnableUserEmail  = true; # UPO

$wgMaxTocLevel = 3;



// opens external links in new window
$wgExternalLinkTarget = '_blank';


// added this line to allow linking. specifically to Imagery Online.
$wgAllowExternalImages = true;
$wgAllowImageTag = true;


//$wgDefaultUserOptions['useeditwarning'] = 1;
// disable page edit warning (edit warning affect Semantic Forms)

//$wgDefaultUserOptions['vector-collapsiblenav'] = 1;
	// 'collapsiblenav' => array( 'global' => true, 'user' => true ),
	// 'collapsibletabs' => array( 'global' => true, 'user' => false ),
	// 'editwarning' => array( 'global' => false, 'user' => true ),
	// 'expandablesearch' => array( 'global' => false, 'user' => false ),
	// 'footercleanup' => array( 'global' => false, 'user' => false ),
	// 'simplesearch' => array( 'global' => false, 'user' => true ),


$wgDefaultUserOptions['rememberpassword'] = 1;

// users watch pages by default (they can override in settings)
$wgDefaultUserOptions['watchdefault'] = 1;
$wgDefaultUserOptions['watchmoves'] = 1;
$wgDefaultUserOptions['watchdeletion'] = 1;
$wgDefaultUserOptions['watchcreations'] = 1;


// fixes login issue for some users (login issue fixed in MW version 1.18.1 supposedly)
$wgDisableCookieCheck = true;

#Set Default Timezone
$wgLocaltimezone = "America/Chicago";
$oldtz = getenv("TZ");
putenv("TZ=$wgLocaltimezone");


$wgMaxUploadSize = 1024*1024*30;
//$wgUploadSizeWarning = 1024*1024*100;

###### END MOVE TO DEFAULT SETTINGS 
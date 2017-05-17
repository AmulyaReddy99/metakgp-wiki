<?php
# This file was automatically generated by the MediaWiki 1.24.2
# installer. If you make manual changes, please keep track in case you
# need to recreate them later.
#
# See includes/DefaultSettings.php for all configurable settings
# and their default values, but don't forget to make changes in _this_
# file, not there.
#
# Further documentation for configuration settings may be found at:
# https://www.mediawiki.org/wiki/Manual:Configuration_settings

# Protect against web entry
if ( !defined( 'MEDIAWIKI' ) ) {
	exit;
}

## Uncomment this to disable output compression
# $wgDisableOutputCompression = true;

$wgSitename = "Metakgp Wiki";
$wgMetaNamespace = "Metakgp";

wfLoadSkin('Vector');

## The URL base path to the directory containing the wiki;
## defaults for all runtime URL paths are based off of this.
## For more information on customizing the URLs
## (like /w/index.php/Page_title to /wiki/Page_title) please see:
## https://www.mediawiki.org/wiki/Manual:Short_URL
$wgScriptPath = "";
$wgArticlePath = "/w/$1";
$wgScriptExtension = ".php";
$wgUsePathInfo = true;

## The protocol and server name to use in fully-qualified URLs
# $wgServer = "https://wiki.metakgp.org";
$wgServer = "http://localhost:8080";

## The relative URL path to the skins directory
$wgStylePath = "$wgScriptPath/skins";

## The relative URL path to the logo.  Make sure you change this from the default,
## or else you'll overwrite your logo when you upgrade!
$wgLogo = "$wgScriptPath/resources/assets/metakgp_logo.png";
$wgFavicon = "$wgScriptPath/resources/assets/metakgp_favicon.png";

## UPO means: this is also a user preference option

$wgEnableEmail = true;
$wgEnableUserEmail = true; # UPO

$wgEmergencyContact = "admin@wiki.metakgp.org";
$wgPasswordSender = "no-reply@wiki.metakgp.org";

$wgEnotifUserTalk = true; # UPO
$wgEnotifWatchlist = true; # UPO
$wgEmailAuthentication = true;

## Database settings
$wgDBtype = "mysql";
$wgDBserver = "mysql-docker";
$wgDBname = "metakgp_wiki_db";
$wgDBuser = "metakgp_user";
$wgDBpassword = getenv('MYSQL_PASSWORD');

# MySQL specific settings
$wgDBprefix = "";

# MySQL table options to use during installation or update
$wgDBTableOptions = "ENGINE=InnoDB, DEFAULT CHARSET=binary";

# Experimental charset support for MySQL 5.0.
$wgDBmysql5 = false;

## Shared memory settings
$wgMainCacheType = CACHE_ACCEL;
$wgMemCachedServers = [];

## To enable image uploads, make sure the 'images' directory
## is writable, then set this to true:
$wgTmpDirectory = "$wgScriptPath/images/temp";
$wgEnableUploads = true;
$wgUseImageMagick = true;
$wgImageMagickConvertCommand = "/usr/bin/gm";
$wgThumbnailEpoch = "1494964293000";

# InstantCommons allows wiki to use images from http://commons.wikimedia.org
$wgUseInstantCommons = true;

## If you use ImageMagick (or any other shell command) on a
## Linux server, this will need to be set to the name of an
## available UTF-8 locale
$wgShellLocale = "en_US.utf8";

## If you want to use image uploads under safe mode,
## create the directories images/archive, images/thumb and
## images/temp, and make them all writable. Then uncomment
## this, if it's not already uncommented:
#$wgHashedUploadDirectory = false;

## Set $wgCacheDirectory to a writable directory on the web server
## to make your wiki go slightly faster. The directory should not
## be publically accessible from the web.
$wgCacheDirectory = "$IP/cache";

# Site language code, should be one of the list in ./languages/Names.php
$wgLanguageCode = "en";

$wgSecretKey = getenv("WG_SECRET_KEY");

# Site upgrade key. Must be set to a string (default provided) to turn on the
# web installer while LocalSettings.php is in place
$wgUpgradeKey = getenv("SITE_UPGRADE_KEY");

## For attaching licensing metadata to pages, and displaying an
## appropriate copyright notice / icon. GNU Free Documentation
## License and Creative Commons licenses are supported so far.
$wgRightsPage = ""; # Set to the title of a wiki page that describes your license/copyright
$wgRightsUrl = "http://creativecommons.org/licenses/by-sa/4.0/";
$wgRightsText = "Creative Commons Attribution-ShareAlike";
$wgRightsIcon = "{$wgResourceBasePath}/resources/assets/licenses/cc-by-sa.png";

# Path to the GNU diff3 utility. Used for conflict resolution.
$wgDiff3 = "/usr/bin/diff3";

## Default skin: you can change the default skin. Use the internal symbolic
## names, ie 'vector', 'monobook':
$wgDefaultSkin = "vector";

# Enabled skins.
# The following skins were automatically enabled:
#require_once "$IP/skins/CologneBlue/CologneBlue.php";
require_once "$IP/skins/Modern/Modern.php";
#require_once "$IP/skins/MonoBook/MonoBook.php";
#require_once "$IP/skins/Vector/Vector.php";
#require_once "$IP/skins/brlcad/brlcad.php";

# End of automatically generated settings.
# Add more configuration options below.

// mail configuration (with Mailgun)
$wgSMTP = array(
    'host' => 'smtp.mailgun.org',
    'IDHost' => 'username.mailgun.org',
    'port' => 587,
    'username' => 'postmaster@wiki.metakgp.org',
    'password' => getenv('MAILGUN_PASSWORD'),
    'auth' => true
);

require_once "$IP/extensions/ParserFunctions/ParserFunctions.php";
require_once "$IP/extensions/Cite/Cite.php";
require_once "$IP/extensions/RecentPages/RecentPages.php";
wfLoadExtension("WikimediaMessages");

require_once "$IP/extensions/WikiEditor/WikiEditor.php";
$wgDefaultUserOptions['usebetatoolbar'] = 1;
$wgDefaultUserOptions['usebetatoolbar-cgd'] = 1;
$wgDefaultUserOptions['wikieditor-preview'] = 1;
#$wgDefaultUserOptions['wikieditor-publish'] = 1;

require_once "$IP/extensions/Scribunto/Scribunto.php";
$wgScribuntoDefaultEngine = 'luastandalone';
$wgScribuntoUseGeSHi = true;

$wgLocaltimezone = "Asia/Kolkata";
date_default_timezone_set( $wgLocaltimezone );

require_once "$IP/extensions/Gadgets/Gadgets.php";
# require_once "$IP/extensions/Echo/Echo.php";

# require_once "$IP/extensions/googleAnalytics/googleAnalytics.php";
$wgGoogleAnalyticsAccount = 'UA-62532508-2';

// Optional configuration (for defaults see googleAnalytics.php)
// Store full IP address in Google Universal Analytics (see https://support.google.com/analytics/answer/2763052?hl=en for details)
$wgGoogleAnalyticsAnonymizeIP = false;
// Use 'noanalytics' permission to exclude specific user groups from web analytics, e.g.
$wgGroupPermissions['sysop']['noanalytics'] = true;
$wgGroupPermissions['bot']['noanalytics'] = true;

# $wgUseSquid = true;
# $wgSquidServers = array('127.0.0.1');
# $wgUsePrivateIPs = true;

# require_once "$IP/extensions/MobileFrontend/MobileFrontend.php";
$wgMFAutodetectMobileView = true;

# require_once "$IP/extensions/ContributionScores/ContributionScores.php";
$wgContribScoreIgnoreBots = true;          // Exclude Bots from the reporting - Can be omitted.
$wgContribScoreIgnoreBlockedUsers = true;  // Exclude Blocked Users from the reporting - Can be omitted.
$wgContribScoresUseRealName = true;        // Use real user names when available - Can be omitted. Only for MediaWiki 1.19 and later.
$wgContribScoreDisableCache = false;       // Set to true to disable cache for parser function and inclusion of table.

$wgContribScoreReports = array(
    array(7,50),
    array(30,50),
    array(0,50));

# Uncomment to start logging for debugging
$wgDebugLogFile = "/dev/stderr";
$wgMaxShellMemory = 307200;
$wgMaxImageArea = 1250000000; // 1.25e9

require_once "$IP/extensions/SyntaxHighlight_GeSHi/SyntaxHighlight_GeSHi.php";

/*$wgResourceLoaderMaxage['unversioned'] = array(
	'server' => 7 * 24 * 60 * 60, // one week
	'client' => 6 * 60 * 60, // six hours
);*/

# error_reporting( -1 );
# ini_set('display_errors', 1);
# $wgShowExceptionDetails = true;

wfLoadExtensions( array( 'ConfirmEdit', 'ConfirmEdit/ReCaptchaNoCaptcha' ) );
$wgCaptchaClass = 'ReCaptchaNoCaptcha';
$wgReCaptchaSiteKey = '6LdItAoTAAAAALJJ011ZgHC5tna4r2DIkVYu9jyR';
$wgReCaptchaSecretKey = getenv('RECAPTCHA_SECRET_KEY');
$ceAllowConfirmedEmail = true;

$wgJobRunRate = 0;

$wgUseFileCache = false;
$wgFileCacheDirectory = "$IP/cache";
$wgShowIPInHeader = false;
$wgDisableCounters = true;
$wgEnableSidebarCache = true;


/*# Visual Editor
#require_once "$IP/extensions/UniversalLanguageSelector/UniversalLanguageSelector.php";
#$wgULSEnable = false;
#wfLoadExtension('VisualEditor');
#$wgDefaultUserOptions['visualeditor-enable'] = 1;
#$wgVisualEditorNamespaces = array_merge(
#	$wgContentNamespaces,
#	array(NS_USER, NS_HELP)
#);
#$wgVirtualRestConfig['modules']['parsoid'] = array(
  // URL to the Parsoid instance
  // Use port 8142 if you use the Debian package
  'url' => 'http://localhost:8142',
  // Parsoid "domain", see below (optional)
  'domain' => 'wiki.metakgp.org',
  // Parsoid "prefix", see below (optional)
  'prefix' => 'metakgp_wiki'
);
// OPTIONAL: Enable VisualEditor's experimental code features
$wgDefaultUserOptions['visualeditor-enable-experimental'] = 1;
 */

# Default user options
$wgDefaultUserOptions['enotifusertalkpages'] = 1;
$wgDefaultUserOptions['enotifwatchlistpages'] = 1;
$wgDefaultUserOptions['usenewrc'] = 1;
$wgDefaultUserOptions['watchdefault'] = 1;

$wgRestrictDisplayTitle = false;

/*
# Open search
require_once "$IP/extensions/OpenSearchXml/OpenSearchXml.php";

$wgAllowUserCss = true;

require_once("$IP/extensions/OpenGraphMeta/OpenGraphMeta.php");
*/
# require_once "$IP/extensions/MultimediaViewer/MultimediaViewer.php";
# require_once "$IP/extensions/Poem/Poem.php";

# File upload permissions
$wgGroupPermissions['user']['upload'] = false;
$wgGroupPermissions['user']['reupload'] = false;
$wgGroupPermissions['user']['reupload-shared'] = false;
$wgGroupPermissions['uploadaccess']['upload'] = true;
$wgFileExtensions = array_merge($wgFileExtensions, array('pdf'));

# Autopatrol
$wgGroupPermissions['autopatrol'] = $wgGroupPermissions['user'];
$wgGroupPermissions['autopatrol']['autopatrol'] = true;

# Maintainers
$wgGroupPermissions['maintainers'] = $wgGroupPermissions['sysop'];

# Allow CORS
$wgCrossSiteAJAXdomains = array( '*' );
/*
# Slack integration
require_once "$IP/extensions/Slack/Slack.php";

# Slack extension configuration options
$wgSlackWebhookURL = "https://hooks.slack.com/services/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";
$wgSlackUserName = "batman";
$wgSlackChannel = "#recent-changes";
$wgSlackIconURL = "http://i.picresize.com/images/2015/09/20/tdpsU.jpg";
$wgSlackLinkUsers = true;

# Redis
$redis = new Redis();
$redis->pconnect('127.0.0.1');
*/
# EmbedVideo
# require_once "$IP/extensions/EmbedVideo/EmbedVideo.php";

# TorBlock
# require_once "$IP/extensions/TorBlock/TorBlock.php";

# Add subpages for main namespace
$wgNamespacesWithSubpages[NS_MAIN] = true;

// Do not uncomment this. Elasticsearch doesn't work well at 
// our low scale; use the default search instead.
/*
# CirrusSearch
require_once "$IP/extensions/Elastica/Elastica.php";
require_once "$IP/extensions/CirrusSearch/CirrusSearch.php";
$wgSearchType = 'CirrusSearch';
*/
$wgNamespacesToBeSearchedDefault = array(
NS_MAIN => true,
NS_TALK => true,
NS_USER => true,
NS_USER_TALK => true,
NS_PROJECT => true,
NS_PROJECT_TALK => true,
NS_FILE => true,
NS_FILE_TALK => true,
NS_HELP => true,
NS_HELP_TALK => true,
NS_CATEGORY => true,
NS_CATEGORY_TALK => true
);
# Math
# require_once "$IP/extensions/Math/Math.php";
// Set MathML as default rendering option;
$wgDefaultUserOptions['math'] = 'mathml';
$wgMathFullRestbaseURL= 'http://127.0.0.1:10044';

# Nuke extension for mass deleting pages
wfLoadExtension('Nuke');

# InputBox extension for nice boxes
wfLoadExtension('InputBox');

# Sandbox extension;
# wfLoadExtension('SandboxLink');

# Change username extension 
wfLoadExtension( 'Renameuser' );
# JsonConfig extension
# require_once "$IP/extensions/JsonConfig/JsonConfig.php";
# Graph Extension
# wfLoadExtension('Graph');
# Disqus Extension for disqus comments
#wfLoadExtension('PageDisqus');
#$wgPageDisqusShortname = 'metakgp';
#$wgPageDisqusExclude = array("Main Page");

$wgReadOnly = "This wiki is currently experiencing an outage. We will resume accepting contributions shortly. For more information see https://github.com/metakgp/metakgp/issues/17.";

# $wgDebugToolbar = true;
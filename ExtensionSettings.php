<?php

$egExtensionLoaderConfig += array(

	/**
	 *	Auth remote user requires modification to strip the NDC off of it if we're going to
	 *  use the version in WMF git.
	 */
	// 'Auth_remoteuser' => array(
	// 	'git' => 'https://gerrit.wikimedia.org/r/mediawiki/extensions/Auth_remoteuser',
	// 	'branch' => 'REL1_23',
	// 	'beforeFn' => function(){
	// 		// Auth_remoteuser extension, updated by James Montalvo, blocks remote users not
	// 		// part of the group defined by $wgAuthRemoteuserViewerGroup
	// 		$GLOBALS['wgAuthRemoteuserViewerGroup'] = "Viewer"; // set to false to allow all valid REMOTE_USER to view; set to group name to restrict viewing to particular group
	// 		$GLOBALS['wgAuthRemoteuserDeniedPage'] = "Access_Denied"; // redirect non-viewers to this page (namespace below)
	// 		$GLOBALS['wgAuthRemoteuserDeniedNS'] = NS_PROJECT; // redirect non-viewers to page in this namespace
	// 	},
	// 	'afterFn' => function(){ $GLOBALS['wgAuth'] = new Auth_remoteuser(); },
	// ),

	'ParserFunctions' => array(
		'git' => 'https://gerrit.wikimedia.org/r/mediawiki/extensions/ParserFunctions.git',
		'branch' => 'REL1_23',
		'globals' => array(
			'wgPFEnableStringFunctions' => true,
		),
	),

	'StringFunctionsEscaped' => array(
		'git' => 'https://gerrit.wikimedia.org/r/mediawiki/extensions/StringFunctionsEscaped.git',
		'branch' => 'REL1_23',
	),

	'ExternalData' => array(
		'git' => 'https://gerrit.wikimedia.org/r/mediawiki/extensions/ExternalData.git',
		'branch' => 'REL1_23',
	),

	'LabeledSectionTransclusion' => array(
		'git' => 'https://gerrit.wikimedia.org/r/mediawiki/extensions/LabeledSectionTransclusion.git',
		'branch' => 'REL1_23',
	),

	'Cite' => array(
		'git' => 'https://gerrit.wikimedia.org/r/mediawiki/extensions/Cite.git',
		'branch' => 'REL1_23',
		'globals' => array(
			'wgCiteEnablePopups' => true,
		),
	),

	// allow pipes (i.e. "|") as parameters in template calls
	'PipeEscape' => array(
		'git' => 'https://github.com/jamesmontalvo3/MediaWiki-PipeEscape.git',
		'branch' => 'master',
	),

	'WhoIsWatching' => array(
		'git' => 'https://gerrit.wikimedia.org/r/mediawiki/extensions/WhoIsWatching.git',
		'branch' => 'REL1_23',
		'globals' => array(
			'wgPageShowWatchingUsers' => true,
		),
	),

	'CharInsert' => array(
		'git' => 'https://gerrit.wikimedia.org/r/mediawiki/extensions/CharInsert.git',
		'branch' => 'REL1_23',
	),

	'SemanticForms' => array(
		'git' => 'https://gerrit.wikimedia.org/r/mediawiki/extensions/SemanticForms.git',
		'tag' => '3.3.2',
	),

	'SemanticInternalObjects' => array(
		'git' => 'https://gerrit.wikimedia.org/r/mediawiki/extensions/SemanticInternalObjects.git',
		'branch' => 'REL1_23',
	),

	'SemanticCompoundQueries' => array(
		'git' => 'https://gerrit.wikimedia.org/r/mediawiki/extensions/SemanticCompoundQueries.git',
		'branch' => 'REL1_23',
	),

	'SemanticDrilldown' => array(
		'git' => 'https://gerrit.wikimedia.org/r/mediawiki/extensions/SemanticDrilldown.git',
		'branch' => 'REL1_23',
	),

	'Arrays' => array(
		'git' => 'https://gerrit.wikimedia.org/r/mediawiki/extensions/Arrays.git',
		'branch' => 'REL1_23',
	),

	'TitleKey' => array(
		'git' => 'https://gerrit.wikimedia.org/r/mediawiki/extensions/TitleKey.git',
		'branch' => 'REL1_23',
	),

	'TalkRight' => array(
		'git' => 'https://github.com/enterprisemediawiki/TalkRight.git',
		'branch' => 'master',
		'afterFn' => function(){
			$GLOBALS['wgGroupPermissions']['user']['talk'] = true;
		}
	),

	'AdminLinks' => array(
		'git' => 'https://gerrit.wikimedia.org/r/mediawiki/extensions/AdminLinks.git',
		'branch' => 'REL1_23',
		'afterFn' => function() {
			$GLOBALS['wgGroupPermissions']['sysop']['adminlinks'] = true;
		}
	),

	'DismissableSiteNotice' => array(
		'git' => 'https://gerrit.wikimedia.org/r/mediawiki/extensions/DismissableSiteNotice.git',
		'branch' => 'REL1_23',
	),

	'BatchUserRights' => array(
		'git' => 'https://gerrit.wikimedia.org/r/mediawiki/extensions/BatchUserRights.git',
		'branch' => 'REL1_23',
		'afterFn' => function(){
			$GLOBALS['wgBatchUserRightsGrantableGroups'] = array(
				'Viewer',
				'Contributor'
			);
		}
	),


	'HeaderTabs' => array(
		'git' => 'https://gerrit.wikimedia.org/r/mediawiki/extensions/HeaderTabs.git',
		'branch' => 'REL1_23',
		'globals' => array(
			'htEditTabLink' => false,
			'htRenderSingleTab' => true,
		)
	),

	'WikiEditor' => array(
		'git' => 'https://gerrit.wikimedia.org/r/mediawiki/extensions/WikiEditor.git',
		'branch' => 'REL1_23',
		'afterFn' => function() {
			$GLOBALS['wgDefaultUserOptions']['usebetatoolbar'] = 1;
			$GLOBALS['wgDefaultUserOptions']['usebetatoolbar-cgd'] = 1;
			# displays publish button
			$GLOBALS['wgDefaultUserOptions']['wikieditor-publish'] = 1;
			# Displays the Preview and Changes tabs
			$GLOBALS['wgDefaultUserOptions']['wikieditor-preview'] = 1;
		}
	),

	'CopyWatchers' => array(
		'git' => 'https://github.com/jamesmontalvo3/MediaWiki-CopyWatchers.git',
		'branch' => 'master',
	),

	// // consider replacing with SyntaxHighlight_Pygments
	// // https://gerrit.wikimedia.org/r/mediawiki/extensions/SyntaxHighlight_Pygments.git
	'SyntaxHighlight_GeSHi' => array(
		'git' => 'https://gerrit.wikimedia.org/r/mediawiki/extensions/SyntaxHighlight_GeSHi.git',
		'branch' => 'REL1_23',
	),

	'Wiretap' => array(
		'git' => 'https://github.com/enterprisemediawiki/Wiretap.git',
		'branch' => 'master',
	),

	'ApprovedRevs' => array(
		'git' => 'https://github.com/jamesmontalvo3/MediaWiki-ApprovedRevs.git',
		'branch' => 'master',
		'globals' => array(
			'egApprovedRevsAutomaticApprovals' => false,
		),
	),

	/**
	 * @todo: this is listed as unmaintained. take it over or get rid of it.
	 */
	'ImportUsers' => array(
		'git' => 'https://github.com/jamesmontalvo3/MediaWiki-ImportUsers.git',
		'branch' => 'master'
	),

	'InputBox' => array(
		'git' => 'https://gerrit.wikimedia.org/r/mediawiki/extensions/InputBox.git',
		'branch' => 'REL1_23',
	),


	'ReplaceText' => array(
		'git' => 'https://gerrit.wikimedia.org/r/mediawiki/extensions/ReplaceText.git',
		'branch' => 'REL1_23',
	),

	'Interwiki' => array(
		'git' => 'https://gerrit.wikimedia.org/r/mediawiki/extensions/Interwiki.git',
		'branch' => 'REL1_23',
		'afterFn' => function() {
			$GLOBALS['wgGroupPermissions']['sysop']['interwiki'] = true;
		}
	),

	'IMSQuery' => array(
		'git' => 'https://github.com/jamesmontalvo3/IMSQuery.git',
		'branch' => 'master',
	),

	'MasonryMainPage' => array(
		'git' => 'https://github.com/enterprisemediawiki/MasonryMainPage.git',
		'branch' => 'master',
	),

	'WatchAnalytics' => array(
		'git' => 'https://github.com/enterprisemediawiki/WatchAnalytics.git',
		'branch' => 'master',
		'globals' => array(
			'egPendingReviewsEmphasizeDays' => 10, // makes Pending Reviews shake after X days
		),
	),

	'Variables' => array(
		'git' => 'https://gerrit.wikimedia.org/r/mediawiki/extensions/Variables.git',
		'branch' => 'REL1_23',
	),

	'SummaryTimeline' => array(
		'git' => 'https://github.com/darenwelsh/SummaryTimeline.git',
		'branch' => 'master',
	),

	'YouTube' => array(
		'git' => 'https://gerrit.wikimedia.org/r/mediawiki/extensions/YouTube.git',
		'branch' => 'REL1_23',
	),

	'ContributionScores' => array(
		'git' => 'https://gerrit.wikimedia.org/r/mediawiki/extensions/ContributionScores.git',
		'branch' => 'REL1_23',
		'afterFn' => function() {
			$wgContribScoreIgnoreBots = true;          // Exclude Bots from the reporting - Can be omitted.
			$wgContribScoreIgnoreBlockedUsers = true;  // Exclude Blocked Users from the reporting - Can be omitted.
			$wgContribScoresUseRealName = true;        // Use real user names when available - Can be omitted. Only for MediaWiki 1.19 and later.
			$wgContribScoreDisableCache = false;       // Set to true to disable cache for parser function and inclusion of table.
			//Each array defines a report - 7,50 is "past 7 days" and "LIMIT 50" - Can be omitted.
			$wgContribScoreReports = array(
			    array(7,50),
			    array(30,50),
			    array(0,50));
		}
	),

	#
	# Semantic Meeting Minutes 
	#
	#	
	'SemanticMeetingMinutes' => array(
		'git' => 'https://github.com/enterprisemediawiki/SemanticMeetingMinutes.git',
		'branch' => 'master',
	),


	#
	# NumerAlpha and HeaderFooter are dependencies for SemanticMeetingMinutes
	# Instead of installing SMM via Composer, we are using ExtensionLoader
	# and explicitly adding the dependencies here:
	#
	'NumerAlpha' => array(
		'git' => 'https://github.com/jamesmontalvo3/NumerAlpha.git',
		'branch' => 'master',
	),

	'HeaderFooter' => array(
		'git' => 'https://github.com/enterprisemediawiki/HeaderFooter.git',
		'branch' => 'master',
	),

	'Math' => array(
		'git' => 'https://gerrit.wikimedia.org/r/mediawiki/extensions/Math.git',
		'branch' => 'REL1_23',
		'afterFn' => function() {
			// See below for installation requirements and configuration settings:
			$GLOBALS['wgMathValidModes'][] = MW_MATH_MATHJAX; // Define MathJax as one of the valid math rendering modes
			$GLOBALS['wgUseMathJax'] = true; // Enable MathJax as a math rendering option for users to pick
			$GLOBALS['wgDefaultUserOptions']['math'] = MW_MATH_MATHJAX; // Set MathJax as the default rendering option for all users (optional)
			$GLOBALS['wgMathDisableTexFilter'] = true; // or compile "texvccheck"
			$GLOBALS['wgDefaultUserOptions']['mathJax'] = true; // Enable the MathJax checkbox option
		},
	),

);
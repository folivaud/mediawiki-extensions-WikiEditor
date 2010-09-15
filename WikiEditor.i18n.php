<?php
/**
 * Internationalisation for WikiEditor extension
 *
 * @file
 * @ingroup Extensions
 */

$messages = array();

/** English
 * @author Trevor Parscal
 */
$messages['en'] = array(
	'wikieditor' => 'Advanced wikitext editing interface',
	'wikieditor-desc' => 'Provides an extendable wikitext editing interface and many feature-providing modules',
	'wikieditor-wikitext-tab' => 'Wikitext',
	'wikieditor-loading' => 'Loading',
	/* AddMediaWizard */
    'wikieditor-addMediaWizard-preference' => 'Enable "Add media wizard" gadget',
	/* Highlight */
	'wikieditor-highlight-preference' => 'Enable syntax highlighting when editing',
	/* Preview */
	'wikieditor-preview-preference' => 'Enable side-by-side preview',
	'wikieditor-preview-tab' => 'Preview',
	'wikieditor-preview-changes-tab' => 'Changes',
	'wikieditor-preview-loading' => 'Loading...',
	/* Preview Dialog */
	'wikieditor-previewDialog-preference' => 'Enable preview dialog',
	'wikieditor-previewDialog-tab' => 'Preview',
	'wikieditor-previewDialog-loading' => 'Loading...',
	/* Publish */
	'wikieditor-publish-preference' => 'Enable step-by-step publishing',
	'wikieditor-publish-button-publish' => 'Publish',
	'wikieditor-publish-button-cancel' => 'Cancel',
	'wikieditor-publish-dialog-title' => 'Publish to {{SITENAME}}',
	'wikieditor-publish-dialog-summary' => 'Edit summary (briefly describe the changes you have made):',
	'wikieditor-publish-dialog-minor' => 'Minor edit',
	'wikieditor-publish-dialog-watch' => 'Watch this page',
	'wikieditor-publish-dialog-publish' => 'Publish',
	'wikieditor-publish-dialog-goback' => 'Go back',
	/* Template Editor */
	'wikieditor-template-editor-preference' => 'Enable form-based editing of wiki templates',
	'wikieditor-template-editor-dialog-title' => 'Edit template',
	'wikieditor-template-editor-dialog-submit' => 'Update',
	'wikieditor-template-editor-dialog-cancel' => 'Cancel',
	/* Templates */
	'wikieditor-templates-preference' => 'Enable template collapsing',
	/* Table of Contents */
	'wikieditor-toc-preference' => 'Enable navigable table of contents',
	'wikieditor-toc-show' => 'Show contents',
	'wikieditor-toc-hide' => 'Hide contents',
	/* Toolbar */
	'wikieditor-toolbar' => 'Editing toolbar',
	'wikieditor-toolbar-desc' => 'Edit page toolbar with enhanced usability',
	'wikieditor-toolbar-preference' => 'Enable enhanced editing toolbar',
	'wikieditor-toolbar-dialogs-preference' => 'Enable dialogs for inserting links, tables and more',
	'wikieditor-toolbar-loading' => 'Loading...',
	/* Toolbar - Main Section */
	'wikieditor-toolbar-tool-bold' => 'Bold',
	'wikieditor-toolbar-tool-bold-example' => 'Bold text',
	'wikieditor-toolbar-tool-italic' => 'Italic',
	'wikieditor-toolbar-tool-italic-example' => 'Italic text',
	'wikieditor-toolbar-tool-ilink' => 'Internal link',
	'wikieditor-toolbar-tool-ilink-example' => 'Link title',
	'wikieditor-toolbar-tool-xlink' => 'External link (remember http:// prefix)',
	'wikieditor-toolbar-tool-xlink-example' => 'http://www.example.com link title',
	'wikieditor-toolbar-tool-link' => 'Link',
	'wikieditor-toolbar-tool-link-title' => 'Insert link',
	'wikieditor-toolbar-tool-link-int' => 'To a wiki page',
	'wikieditor-toolbar-tool-link-int-target' => 'Target page or URL:',
	'wikieditor-toolbar-tool-link-int-target-tooltip' => 'Page title or URL',
	'wikieditor-toolbar-tool-link-int-text' => 'Text to display:',
	'wikieditor-toolbar-tool-link-int-text-tooltip' => 'Text to be displayed',
	'wikieditor-toolbar-tool-link-ext' => 'To an external web page',
	'wikieditor-toolbar-tool-link-ext-target' => 'Link URL:',
	'wikieditor-toolbar-tool-link-ext-text' => 'Link text:',
	'wikieditor-toolbar-tool-link-insert' => 'Insert link',
	'wikieditor-toolbar-tool-link-cancel' => 'Cancel',
	'wikieditor-toolbar-tool-link-int-target-status-exists' => 'Page exists',
	'wikieditor-toolbar-tool-link-int-target-status-notexists' => 'Page does not exist',
	'wikieditor-toolbar-tool-link-int-target-status-invalid' => 'Invalid title',
	'wikieditor-toolbar-tool-link-int-target-status-external' => 'External link',
	'wikieditor-toolbar-tool-link-int-target-status-loading' => 'Checking page existence...',
	'wikieditor-toolbar-tool-link-int-invalid' => 'The title you specified is invalid.',
	'wikieditor-toolbar-tool-link-lookslikeinternal' => 'The URL you specified looks like it was intended as a link to another wiki page.
Do you want to make it an internal link?',
	'wikieditor-toolbar-tool-link-lookslikeinternal-int' => 'Internal link',
	'wikieditor-toolbar-tool-link-lookslikeinternal-ext' => 'External link',
	'wikieditor-toolbar-tool-link-empty' => "You did not enter anything to link to.",
	'wikieditor-toolbar-tool-file' => 'Embedded file',
	'wikieditor-toolbar-tool-file-pre' => '$1{{ns:file}}:',
	'wikieditor-toolbar-tool-file-example' => 'Example.jpg',
	'wikieditor-toolbar-tool-reference' => 'Reference',
	'wikieditor-toolbar-tool-reference-example' => 'Insert footnote text here',
	'wikieditor-toolbar-tool-reference-cancel' => 'Cancel',
	'wikieditor-toolbar-tool-reference-title' => 'Insert reference',
	'wikieditor-toolbar-tool-reference-insert' => 'Insert',
	'wikieditor-toolbar-tool-reference-text' => 'Reference text',
	'wikieditor-toolbar-tool-signature' => 'Signature and timestamp',
	/* Toolbar - Advanced Section */
	'wikieditor-toolbar-section-advanced' => 'Advanced',
	'wikieditor-toolbar-tool-heading' => 'Heading',
	'wikieditor-toolbar-tool-heading-1' => 'Level 1',
	'wikieditor-toolbar-tool-heading-2' => 'Level 2',
	'wikieditor-toolbar-tool-heading-3' => 'Level 3',
	'wikieditor-toolbar-tool-heading-4' => 'Level 4',
	'wikieditor-toolbar-tool-heading-5' => 'Level 5',
	'wikieditor-toolbar-tool-heading-example' => 'Heading text',
	'wikieditor-toolbar-group-format' => 'Format',
	'wikieditor-toolbar-tool-ulist' => 'Bulleted list',
	'wikieditor-toolbar-tool-ulist-example' => 'Bulleted list item',
	'wikieditor-toolbar-tool-olist' => 'Numbered list',
	'wikieditor-toolbar-tool-olist-example' => 'Numbered list item',
	'wikieditor-toolbar-tool-indent' => 'Indentation',
	'wikieditor-toolbar-tool-indent-example' => 'Indented line',
	'wikieditor-toolbar-tool-nowiki' => 'No wiki formatting',
	'wikieditor-toolbar-tool-nowiki-example' => 'Insert non-formatted text here',
	'wikieditor-toolbar-tool-redirect' => 'Redirect',
	'wikieditor-toolbar-tool-redirect-example' => 'Target page name',
	'wikieditor-toolbar-tool-big' => 'Big',
	'wikieditor-toolbar-tool-big-example' => 'Big text',
	'wikieditor-toolbar-tool-small' => 'Small',
	'wikieditor-toolbar-tool-small-example' => 'Small text',
	'wikieditor-toolbar-tool-superscript' => 'Superscript',
	'wikieditor-toolbar-tool-superscript-example' => 'Superscript text',
	'wikieditor-toolbar-tool-subscript' => 'Subscript',
	'wikieditor-toolbar-tool-subscript-example' => 'Subscript text',
	'wikieditor-toolbar-group-insert' => 'Insert',
	'wikieditor-toolbar-tool-gallery' => 'Picture gallery',
	'wikieditor-toolbar-tool-gallery-example' => "{{ns:file}}:Example.jpg|Caption1
{{ns:file}}:Example.jpg|Caption2",
	'wikieditor-toolbar-tool-newline' => 'New line',
	'wikieditor-toolbar-tool-table' => 'Table',
	'wikieditor-toolbar-tool-table-example-old' => "-
! header 1
! header 2
! header 3
|-
| row 1, cell 1
| row 1, cell 2
| row 1, cell 3
|-
| row 2, cell 1
| row 2, cell 2
| row 2, cell 3",
	'wikieditor-toolbar-tool-table-example-cell-text' => 'Cell text',
	'wikieditor-toolbar-tool-table-example-header' => 'Header text',
	'wikieditor-toolbar-tool-table-title' => 'Insert table',
	'wikieditor-toolbar-tool-table-dimensions-rows' => 'Rows',
	'wikieditor-toolbar-tool-table-dimensions-columns' => 'Columns',
	'wikieditor-toolbar-tool-table-dimensions-header' => 'Add header row',
	'wikieditor-toolbar-tool-table-wikitable' => 'Style with borders',
	'wikieditor-toolbar-tool-table-sortable' => 'Make table sortable',
	'wikieditor-toolbar-tool-table-example' => 'Example',
	'wikieditor-toolbar-tool-table-preview' => 'Preview',
	'wikieditor-toolbar-tool-table-insert' => 'Insert',
	'wikieditor-toolbar-tool-table-cancel' => 'Cancel',
	'wikieditor-toolbar-tool-table-example-text' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut nec purus diam. Sed aliquam imperdiet nunc quis lacinia. Donec rutrum consectetur placerat. Sed volutpat neque non purus faucibus id ultricies enim euismod.',
	'wikieditor-toolbar-tool-table-toomany' => 'Inserting a table with more than $1 cells is not possible with this dialog.',
	'wikieditor-toolbar-tool-table-invalidnumber' => 'You have not entered a valid number of rows or columns.',
	'wikieditor-toolbar-tool-table-zero' => 'You cannot insert a table with zero rows or columns.',
	'wikieditor-toolbar-tool-replace' => 'Search and replace',
	'wikieditor-toolbar-tool-replace-title' => 'Search and replace',
	'wikieditor-toolbar-tool-replace-search' => 'Search for:',
	'wikieditor-toolbar-tool-replace-replace' => 'Replace with:',
	'wikieditor-toolbar-tool-replace-case' => 'Match case',
	'wikieditor-toolbar-tool-replace-regex' => 'Treat search string as a regular expression',
	'wikieditor-toolbar-tool-replace-button-findnext' => 'Find next',
	'wikieditor-toolbar-tool-replace-button-replacenext' => 'Replace next',
	'wikieditor-toolbar-tool-replace-button-replaceall' => 'Replace all',
	'wikieditor-toolbar-tool-replace-close' => 'Close',
	'wikieditor-toolbar-tool-replace-nomatch' => 'Your search did not match anything.',
	'wikieditor-toolbar-tool-replace-success' => '$1 replacement(s) made.',
	'wikieditor-toolbar-tool-replace-emptysearch' => 'You did not enter anything to search for.',
	'wikieditor-toolbar-tool-replace-invalidregex' => 'The regular expression you entered is invalid: $1',
	/* Toolbar - Special characters Section */
	'wikieditor-toolbar-section-characters' => 'Special characters',
	'wikieditor-toolbar-characters-page-latin' => 'Latin',
	'wikieditor-toolbar-characters-page-latinextended' => 'Latin extended',
	'wikieditor-toolbar-characters-page-ipa' => 'IPA',
	'wikieditor-toolbar-characters-page-symbols' => 'Symbols',
	'wikieditor-toolbar-characters-page-greek' => 'Greek',
	'wikieditor-toolbar-characters-page-cyrillic' => 'Cyrillic',
	'wikieditor-toolbar-characters-page-arabic' => 'Arabic',
	'wikieditor-toolbar-characters-page-persian' => 'Persian',
	'wikieditor-toolbar-characters-page-hebrew' => 'Hebrew',
	'wikieditor-toolbar-characters-page-bangla' => 'Bangla',
	'wikieditor-toolbar-characters-page-telugu' => 'Telugu',
	'wikieditor-toolbar-characters-page-sinhala' => 'Sinhala',
	'wikieditor-toolbar-characters-page-gujarati' => 'Gujarati',
	'wikieditor-toolbar-characters-page-thai' => 'Thai',
	'wikieditor-toolbar-characters-page-lao' => 'Lao',
	'wikieditor-toolbar-characters-page-khmer' => 'Khmer',
	/* Toolbar - Help Section */
	'wikieditor-toolbar-section-help' => 'Help',
	'wikieditor-toolbar-help-heading-description' => 'Description',
	'wikieditor-toolbar-help-heading-syntax' => 'What you type',
	'wikieditor-toolbar-help-heading-result' => 'What you get',
	'wikieditor-toolbar-help-page-format' => 'Formatting',
	'wikieditor-toolbar-help-page-link' => 'Links',
	'wikieditor-toolbar-help-page-heading' => 'Headings',
	'wikieditor-toolbar-help-page-list' => 'Lists',
	'wikieditor-toolbar-help-page-file' => 'Files',
	'wikieditor-toolbar-help-page-reference' => 'References',
	'wikieditor-toolbar-help-page-discussion' => 'Discussion',
	'wikieditor-toolbar-help-content-italic-description' => 'Italic',
	'wikieditor-toolbar-help-content-italic-syntax' => "''Italic text''",
	'wikieditor-toolbar-help-content-italic-result' => '<em>Italic text</em>',
	'wikieditor-toolbar-help-content-bold-description' => 'Bold',
	'wikieditor-toolbar-help-content-bold-syntax' => "'''Bold text'''",
	'wikieditor-toolbar-help-content-bold-result' => '<strong>Bold text</strong>',
	'wikieditor-toolbar-help-content-bolditalic-description' => 'Bold &amp; italic',
	'wikieditor-toolbar-help-content-bolditalic-syntax' => "'''''Bold &amp; italic text'''''",
	'wikieditor-toolbar-help-content-bolditalic-result' => '<strong><em>Bold &amp; italic text</em></strong>',
	'wikieditor-toolbar-help-content-ilink-description' => 'Internal link',
	'wikieditor-toolbar-help-content-ilink-syntax' => '[[Page title|Link label]]<br />[[Page title]]',
	'wikieditor-toolbar-help-content-ilink-result' => "<a href='#'>Link label</a><br /><a href='#'>Page title</a>",
	'wikieditor-toolbar-help-content-xlink-description' => 'External link',
	'wikieditor-toolbar-help-content-xlink-syntax' => '[http://www.example.org Link label]<br />[http://www.example.org]<br />http://www.example.org',
	'wikieditor-toolbar-help-content-xlink-result' => "<a href='#' class='external'>Link label</a><br /><a href='#' class='external autonumber'>[1]</a><br /><a href='#' class='external'>http://www.example.org</a>",
	'wikieditor-toolbar-help-content-heading2-description' => '2nd level heading',
	'wikieditor-toolbar-help-content-heading2-syntax' => '== Heading text ==',
	'wikieditor-toolbar-help-content-heading2-result' => '<h2>Heading text</h2>',
	'wikieditor-toolbar-help-content-heading3-description' => '3rd level heading',
	'wikieditor-toolbar-help-content-heading3-syntax' => '=== Heading text ===',
	'wikieditor-toolbar-help-content-heading3-result' => '<h3>Heading text</h3>',
	'wikieditor-toolbar-help-content-heading4-description' => '4th level heading',
	'wikieditor-toolbar-help-content-heading4-syntax' => '==== Heading text ====',
	'wikieditor-toolbar-help-content-heading4-result' => '<h4>Heading text</h4>',
	'wikieditor-toolbar-help-content-heading5-description' => '5th level heading',
	'wikieditor-toolbar-help-content-heading5-syntax' => '===== Heading text =====',
	'wikieditor-toolbar-help-content-heading5-result' => '<h5>Heading text</h5>',
	'wikieditor-toolbar-help-content-ulist-description' => 'Bulleted list',
	'wikieditor-toolbar-help-content-ulist-syntax' => '* List item<br />* List item',
	'wikieditor-toolbar-help-content-ulist-result' => '<ul><li>List item</li><li>List item</li></ul>',
	'wikieditor-toolbar-help-content-olist-description' => 'Numbered list',
	'wikieditor-toolbar-help-content-olist-syntax' => '# List item<br /># List item',
	'wikieditor-toolbar-help-content-olist-result' => '<ol><li>List item</li><li>List item</li></ol>',
	'wikieditor-toolbar-help-content-file-description' => 'Embedded file',
	'wikieditor-toolbar-help-content-file-syntax' => '[[{{ns:file}}:Example.png|thumb|Caption text]]',
	'wikieditor-toolbar-help-content-file-result' => "<div style='width:104px;' class='thumbinner'><a title='Caption text' class='image' href='#'><img height='50' width='100' border='0' class='thumbimage' src='extensions/UsabilityInitiative/images/wikiEditor/toolbar/example-image.png' alt=''/></a><div class='thumbcaption'><div class='magnify'><a title='Enlarge' class='internal' href='#'><img height='11' width='15' alt='' src='$1/common/images/magnify-clip.png'/></a></div>Caption text</div></div>",
	'wikieditor-toolbar-help-content-reference-description' => 'Reference',
	'wikieditor-toolbar-help-content-reference-syntax' => 'Page text.&lt;ref name="test"&gt;[http://www.example.org Link text], additional text.&lt;/ref&gt;',
	'wikieditor-toolbar-help-content-reference-result' => "Page text.<sup><a href='#'>[1]</a></sup>",
	'wikieditor-toolbar-help-content-rereference-description' => 'Additional use of same reference',
	'wikieditor-toolbar-help-content-rereference-syntax' => '&lt;ref name="test" /&gt;',
	'wikieditor-toolbar-help-content-rereference-result' => "Page text.<sup><a href='#'>[1]</a></sup>",
	'wikieditor-toolbar-help-content-showreferences-description' => 'Display references',
	'wikieditor-toolbar-help-content-showreferences-syntax' => '&lt;references /&gt;',
	'wikieditor-toolbar-help-content-showreferences-result' => "<ol class='references'><li id='cite_note-test-0'><b><a title='' href='#'>^</a></b> <a rel='nofollow' title='http://www.example.org' class='external text' href='#'>Link text</a>, additional text.</li></ol>",
	'wikieditor-toolbar-help-content-signaturetimestamp-description' => 'Signature with timestamp',
	'wikieditor-toolbar-help-content-signaturetimestamp-syntax' => '~~~~',
	'wikieditor-toolbar-help-content-signaturetimestamp-result' => "<a href='#' title='{{#special:mypage}}'>Username</a> (<a href='#' title='{{#special:mytalk}}'>talk</a>) 15:54, 10 June 2009 (UTC)",
	'wikieditor-toolbar-help-content-signature-description' => 'Signature',
	'wikieditor-toolbar-help-content-signature-syntax' => '~~~',
	'wikieditor-toolbar-help-content-signature-result' => "<a href='#' title='{{#special:mypage}}'>Username</a> (<a href='#' title='{{#special:mytalk}}'>talk</a>)",
	'wikieditor-toolbar-help-content-indent-description' => 'Indent',
	'wikieditor-toolbar-help-content-indent-syntax' => 'Normal text<br />:Indented text<br />::Indented text',
	'wikieditor-toolbar-help-content-indent-result' => 'Normal text<dl><dd>Indented text<dl><dd>Indented text</dd></dl></dd></dl>',
);

<?php
	/** Языковые константы для английской версии */
	$i18n = [
			'load-average' => 'Indicators of load average: ',
			'memory-usage' => round(memory_get_usage() / (1024 * 1024), 3) . 'M | ',
			'copyright' => '2007-' . @date('Y'),
			'system-main-page' => 'Main page',
			'label-answer' => 'Answer',
			'label-delete' => 'Delete',
			'label-edit' => 'Edit',
			'label-edit-type' => 'Edit data type',
			'label-view-on-site' => 'Go to page',
			'label-add' => 'Add',
			'label-name' => 'Title',
			'label-content' => 'Content',
			'label-view' => 'View',
			'label-subitems' => 'Subitems',
			'label-type-field' => 'Type',
			'label-unblock' => 'Unblock',
			'label-block' => 'Block',
			'label-save' => 'Save',
			'label-save-exit' => 'Save and exit',
			'label-save-view' => 'Save and view',
			'label-move-to' => 'Move to another category: ',
			'label-virtual-copies' => 'Virtual copies: ',
			'label-cancel' => 'Cancel',
			'label-back' => 'Back',
			'label-proceed' => 'Proceed',
			'js-smc-virtual-copy' => ' (virtual copy)',
			'js-smc-original' => ' (original page)',
			'label-save-add' => 'Add',
			'label-save-add-exit' => 'Add and exit',
			'label-save-add-view' => 'Add and view',
			'label-lang-prefix' => 'label-lang-prefix',
			'label-common-group' => 'Required properties',
			'label-alt-name' => 'URL',
			'label-active' => 'Activity',
			'label-permissions' => 'Permissions',
			'label-restore' => 'Resotre',
			'label-edit-type-link' => 'Edit type',
			'label-is-visible' => 'Show in menu',
			'label-elements-per-page' => 'Elements per page:',
			'js-label-elements-per-page' => 'Elements per page:',
			'label-last-update' => 'Last update time',
			'label-link-on-site' => 'Link on site',
			'label-activity' => 'Activity',
			'label-is-default' => 'Default page',
			'label-arrow_up' => 'Expand',
			'label-arrow_down' => 'Collapse',
			'label-errors-found' => 'Some errors found',
			'label-errors-13041' => 'Remote connects forbidden. Module could not be install.',
			'label-errors-13052' => 'No such file.',
			'label-errors-13053' => 'Path to module not equal module name.',
			'label-errors-13054' => 'Can`t get modules list from server. Module could not be install.',
			'label-errors-13055' => 'Can`t load server answer. Module could not be install.',
			'label-errors-13056' => 'Can`t load module list.  Module could not be install.',
			'label-errors-13057' => 'Your license not supported this module.',
			'label-errors-13058' => 'http://errors.umi-cms.ru/13058/',
			'label-errors-13059' => 'http://errors.umi-cms.ru/13059/',
			'label-errors-14001' => 'Missing domain key in request.',
			'label-errors-14002' => 'Missing system build in request.',
			'label-errors-14003' => 'Domain key missing at update server. Please, contact sales department UMI.CMS',
			'label-errors-14004' => 'Error in request. Unknown type request.',
			'label-errors-14005' => 'Your license type not save at update server. Please, contact support UMI.CMS',
			'label-errors-14006' => 'Your license does not exist no one module. Please, contact support UMI.CMS',
			'label-errors-14007' => 'http://errors.umi-cms.ru/14007/',
			'label-errors-14008' => 'http://errors.umi-cms.ru/14008/',
			'label-errors-14009' => 'http://errors.umi-cms.ru/14009/',
			'label-errors-14010' => 'http://errors.umi-cms.ru/14010/',
			'label-errors-14011' => 'http://errors.umi-cms.ru/14011/',
			'label-errors-14012' => 'http://errors.umi-cms.ru/14012/',
			'label-errors-14013' => 'http://errors.umi-cms.ru/14013/',
			'label-errors-14014' => 'http://errors.umi-cms.ru/14014/',
			'label-errors-16008' => 'http://errors.umi-cms.ru/16008/',
		/** constants */
			'mouth-january' => 'January',
			'mouth-february' => 'February',
			'mouth-march' => 'March',
			'mouth-april' => 'April',
			'mouth-may' => 'May',
			'mouth-june' => 'June',
			'mouth-july' => 'July',
			'mouth-august' => 'August',
			'mouth-september' => 'September',
			'mouth-october' => 'October',
			'mouth-november' => 'November',
			'mouth-december' => 'December',
			'short-week-sunday' => 'Su',
			'short-week-monday' => 'Mo',
			'short-week-tuesday' => 'Tu',
			'short-week-wednesday' => 'We',
			'short-week-thursday' => 'Th',
			'short-week-friday' => 'Fr',
			'short-week-saturday' => 'Sa',
		/** classes/system/utils/ranges/ranges.php */
			'system-utils-ranges-monday' => 'Monday',
			'system-utils-ranges-tuesday' => 'Tuesday',
			'system-utils-ranges-wednesday' => 'Wednesday',
			'system-utils-ranges-thursday' => 'Thursday',
			'system-utils-ranges-friday' => 'Friday',
			'system-utils-ranges-saturday' => 'Saturday',
			'system-utils-ranges-sunday' => 'Sunday',
			'system-utils-ranges-mon' => 'mn',
			'system-utils-ranges-mon2' => 'mon',
			'system-utils-ranges-tue' => 'tu',
			'system-utils-ranges-wed' => 'we',
			'system-utils-ranges-wed2' => 'wed',
			'system-utils-ranges-thu' => 'th',
			'system-utils-ranges-thu2' => 'thu',
			'system-utils-ranges-fri' => 'fr',
			'system-utils-ranges-fri2' => 'fri',
			'system-utils-ranges-sat' => 'st',
			'system-utils-ranges-sun' => 'sn',
			'system-utils-ranges-january' => 'january',
			'system-utils-ranges-february' => 'february',
			'system-utils-ranges-march' => 'march',
			'system-utils-ranges-april' => 'april',
			'system-utils-ranges-may' => 'may',
			'system-utils-ranges-june' => 'june',
			'system-utils-ranges-july' => 'july',
			'system-utils-ranges-august' => 'august',
			'system-utils-ranges-september' => 'september',
			'system-utils-ranges-october' => 'october',
			'system-utils-ranges-november' => 'november',
			'system-utils-ranges-december' => 'december',
			'system-utils-ranges-jan' => 'jan',
			'system-utils-ranges-jan1' => 'jn',
			'system-utils-ranges-feb' => 'feb',
			'system-utils-ranges-feb1' => 'fb',
			'system-utils-ranges-mar' => 'mar',
			'system-utils-ranges-apr' => 'apr',
			'system-utils-ranges-apr2' => 'ap',
			'system-utils-ranges-june2' => 'jn',
			'system-utils-ranges-july2' => 'jl',
			'system-utils-ranges-august2' => 'aug',
			'system-utils-ranges-sep' => 'sep',
			'system-utils-ranges-sep2' => 'sp',
			'system-utils-ranges-oct' => 'okt',
			'system-utils-ranges-oct2' => 'ok',
			'system-utils-ranges-november2' => 'nbr',
			'system-utils-ranges-december2' => 'dec',
			'label-update-sitemap' => 'Update sitemap.xml',
			'label-use-ssl' => 'Use SSL',
			'label-update' => 'Update',
			'js-update-sitemap' => 'Update Sitemap.xml',
			'js-label-stop' => 'Stop',
			'js-update-sitemap-submit' => 'Do you want to update Sitemap.xml now?',
			'js-updating-sitemap' => 'Updating Sitemap.xml is in progress.',
			'fl' => '{',
			'fr' => '}',
			'support' => 'Support',
			'help' => 'Help',
			'buy-umi-cms' => 'Buy UMI.CMS',
			'days-left1' => 'You have',
			'days-left2' => 'You have',
			'days-left-number1' => 'days left',
			'days-left-number2' => 'days left',
			'days-left-number3' => 'days left',
			'buy-umi-cms-link' => 'http://www.umi-cms.ru/purchase/how-to-buy/',
			'cms-name' => 'UMI.CMS',
			'cms-slogan' => 'Site managment system',
			'trash-link' => 'Trash',
			'site-link' => 'Site',
			'to-site' => 'Site',
			'auth-info-prefix' => 'You logged as: ',
			'site-lang-versions' => 'Site: ',
			'home-link' => 'Main',
			'exit-link' => 'Exit',
			'block-link' => 'Quick jump to block on this page',
			'umi-cms-site' => 'umi-cms.ru',
			'modules' => 'Modules',
			'profile' => 'Profile',
			'switch-user' => 'Switch user',
			'new-updates' => 'New updates',
			'mobile-app' => "Install <a href='#' style='color: #0088E8; font-size:11px;' onclick='modalMobileInfo(); return false;'>mobile application UMI.eManager</a> for orders processing.",
			'config' => 'Module settings',
			'tags' => 'Tags',
			'authorization' => 'Authorization',
			'main-authorization' => 'UMI.CMS: Authorization',
			'error-expect-element' => 'Error: expected element id as param',
			'error-license-limit' => 'Disabled in this edition',
			'error-no-domain-permissions' => 'No permissions to work with this domain',
			'error-unexpected-element-type' => 'Trying to create unknown object',
			'error-deleting-an-object-is-locked' => 'Deleting an object is prohibited',
			'error-require-more-permissions' => 'You don\'t have permissions to complete this request',
			'error-no-publication-permissions' => 'No permissions to publish this content',
			'error-can-not-create-directory' => 'Can not create directory',
			'error-require-name-param' => '"name" param is required',
			'error-element-type-detect-failed' => 'Element type detection is failed',
			'error-dominant-template-not-found' => 'Template-not-found',
			'error-minimum-one-lang-required' => 'Minimum one language version is required',
			'error-try-delete-default-language' => 'Trying to delete default language',
			'error-domain-already-exists' => 'Domain already exists',
			'js-error-domain-already-exists' => 'Domain already exists',
			'error-can-not-delete-config-module' => 'Can not delete "Configuration" module',
			'error-can-not-delete-content-module' => 'Can not delete "Content" module',
			'error-can-not-delete-users-module' => 'Can not delete "Users" module',
			'error-can-not-delete-data-module' => 'Can not delete "Data" module',
			'error-expect-object' => 'Object expected',
			'error-disabled-in-demo' => 'Disabled in this version',
			'error-missed-field-value' => 'You should fill in field',
			'error-wrong-field-value' => 'Wrong field value',
			'error-non-unique-field-name' => 'Field with this name already exists',
			'error-non-unique-group-name' => 'Group with this name already exists',
			'error-not-found' => 'Not found',
			'error-expect-object-type' => 'Data type doesn\'t exists',
			'error-object-type-locked' => 'Can not delete: object type is locked by developer',
			'error-auth-required' => 'Authorization required',
			'error-file-does-not-exist' => 'File %s not found',
			'error-image-corrupted' => 'Image %s is corrupted',
			'error-page-does-not-exist' => 'Page %s not found',
			'error-object-does-not-exist' => 'Object %s not found',
			'error-resource-not-found' => 'Resourse %s is not responding',
			'error-prop-not-found' => 'Property %s not found',
			'error-type-not-found' => 'Type %s not found',
			'error-only-xslt-method' => 'This method could be used only in xsl mode',
			'error-only-tpl-method' => 'This method could be used only in tpl mode',
			'error-method-doesnt-exists' => 'Method does not exist',
			'error-require-default-template' => 'Default template is required. Please setup this template in Module settings.',
			'error-recursive-max-depth' => 'Exceeded the maximum permissible length of recursion',
			'error-login-short' => 'Login required.',
			'error-login-wrong-format' => 'Login shall not contain spaces.',
			'error-login-exists' => 'User with this login already exists.',
			'error-password-short' => 'Password required.',
			'error-password-wrong-format' => 'Password shall not contain spaces.',
			'error-password-equal-login' => 'Password equal login',
			'error-email-required' => 'E-mail required.',
			'error-email-wrong-format' => 'Wrong format of e-mail.',
			'error-email-exists' => 'User with this e-mail already exists.',
			'error-call-non-existent-method' => 'Calling a non-existent method.',
			'error-cannot-connect-mail-template' => 'Unable to connect the email template: ',
			'error-cannot-connect-template' => 'Unable to connect the template: ',
			'error-cannot-process-template' => 'Unable to process template: ',
			'js-error-required-field' => 'Not filled a required field',
			'js-error-password-repeat' => 'Passwords mismatch',
			'js-error-number-field' => 'Input data in not a number in field',
			'js-error-time-field' => 'Input data in not a time in field',
			'js-error-date-field' => 'Input data in not a date in field',
			'js-label-errors-found' => 'Some errors found',
			'js-label-errors-occurred' => 'Errors occurred',
			'label-notify-found' => 'Notice',
			'js-check-speedmark' => 'Check system performance',
			'js-system-speedmark' => 'Performance',
			'js-index-speedmark' => 'This indicator measures how many times a blank page generated per one second. The higher - the better.',
			'js-index-speedmark-less-10' => 'too slow',
			'js-index-speedmark-less-20' => 'below normal',
			'js-index-speedmark-less-30' => 'normal',
			'js-index-speedmark-less-40' => 'good',
			'js-index-speedmark-more-40' => 'excellent!',
			'js-index-speedmark-wait' => 'please wait...',
			'js-index-speedmark-error' => 'Error. Please try again!',
			'js-index-speedmark-message' => 'Message',
			'js-index-speedmark-popup' => 'Performance settings for advanced users. Please do not change unless you know what you do.',
			'js-edit-form-delete-button-title' => 'Delete',
			'module-config' => 'Configuration',
			'module-news' => 'News',
			'module-catalog' => 'Catalog',
			'module-users' => 'Users',
			'module-data' => 'Data types',
			'module-photoalbum' => 'Photoalbums',
			'module-search' => 'Search',
			'module-autoupdate' => 'Autoupdates',
			'module-backup' => 'Backups',
			'module-geoip' => 'GeoIP',
			'module-seo' => 'SEO',
			'module-content' => 'Structure',
			'module-stat' => 'Statistic',
			'module-vote' => 'Votes',
			'module-forum' => 'Forum',
			'module-banners' => 'Banners',
			'module-dispatches' => 'Dispatches',
			'module-comments' => 'Comments',
			'module-webforms' => 'Webforms',
			'module-faq' => 'FAQ',
			'module-filemanager' => 'Filemanager',
			'module-eshop' => 'Emarket',
			'module-blogs' => 'Blogs',
			'module-blogs20' => 'Blogs',
			'module-updatesrv' => 'Update server',
			'module-trash' => 'Trash',
			'module-emarket' => 'Emarket',
			'module-exchange' => 'Exchange',
			'module-social_networks' => 'Social Networks',
			'module-reklamer' => 'Reklamer',
			'module-events' => 'Events',
			'module-appointment' => 'Appointments',
			'module-umiNotifications' => 'System notifications',
			'save' => 'Save',
			'group-config' => 'Module settings',
			'option-per_page' => 'Objects per page',
			'permissions-users' => 'Outgroup users',
			'permissions-groups' => 'Groups',
			'permissions-read' => 'View',
			'permissions-write' => 'Edit',
			'title-prefix' => 'Jezebel ',
			'permissions-panel' => 'Permissions',
			'label-trashbin' => 'Trash bin',
			'label-login' => 'Login',
			'label-password' => 'Password',
			'label-skin' => 'Skin',
			'label-interface-lang' => 'Language',
			'label-login-do' => 'Log in',
			'label-error' => 'Error',
			'label-text-error' => 'Invalid login or password',
			'skin-full' => 'Default',
			'skin-simple' => 'Lite',
			'skin-mac' => 'Butterfly',
			'skin-modern' => 'Modern',
			'skin-rbs' => 'RBS',
			'label-type' => 'Data type',
			'label-is-sured' => 'Are you sure?',
			'label-template' => 'Design template',
			'backup-changelog' => 'Last changes',
			'backup-change-number' => '#',
			'backup-change-page' => 'Page',
			'backup-change-time' => 'Date and time',
			'backup-change-author' => 'Author',
			'backup-change-rollback' => 'Rollback',
			'backup-no-changes-found' => 'History for this page not found.',
			'month-jan' => 'january',
			'month-feb' => 'february',
			'month-mar' => 'march',
			'month-apr' => 'april',
			'month-may' => 'may',
			'month-jun' => 'june',
			'month-jul' => 'july',
			'month-aug' => 'august',
			'month-sep' => 'september',
			'month-oct' => 'october',
			'month-nov' => 'november',
			'month-dec' => 'december',
			'label-user-login' => 'Login',
			'label-user-email' => 'E-mail',
			'label-user-fio' => 'Name',
			'label-user-gender' => 'Gender',
			'label-user-age' => 'Age',
			'stores-panel' => 'Store amouts',
			'label-store-name' => 'Store name',
			'label-store-amount' => 'Amount',
			'label-store-total-amount' => 'Total on all stores',
			'label-tags-cloud' => 'Tags cloud',
			'label-add-list' => 'Label Add List',
			'label-add-item' => 'Label Add Item',
			'label-file-upload-do' => 'Upload',
			'label-filter-do' => 'Filter',
			'label-edit-guide-items' => 'Edit guide items',
			'tip-page-name' => 'Page name',
			'tip-title' => 'Page title',
			'tip-alt-name' => 'URL',
			'tip-keywords' => 'Keywords',
			'tip-description' => 'Description',
			'tip-h1' => 'Header (H1)',
			'tip-publish-time' => 'Publish date and time',
			'tip-is-default' => 'Is default page',
			'tip-is-unindexed' => 'Is indexed',
			'tip-robots-deny' => 'Robots Deny',
			'tip-is-visible' => 'Is visible',
			'tip-expanded' => 'Is expanded',
			'tip-show-submenu' => 'Show submenu',
			'tip-menu_ua' => 'Image',
			'tip-menu_a' => 'Image',
			'tip-is-active' => 'Disable page',
			'tip-is-noactive' => 'Enable page',
			'js-tip-is-active' => 'Disable page',
			'js-tip-is-noactive' => 'Enable page',
			'tip-headers' => 'Header image',
			'tip-template-id' => 'Template id',
			'tip-object-type' => 'Object type',
			'tip-tags' => 'Tags',
			'tip-change-parent' => 'Allow you to move this page into other category.',
			'tip-virtuals' => 'Allow you to create virtual copies of this page.',
			'label-yes' => 'Yes',
			'label-no' => 'No',
			'js-label-yes' => 'Yes',
			'js-label-no' => 'No',
			'label-remember-login' => 'Remember me',
			'autoguide-for-field' => 'Guide for field',
			'backup-entry-is-void' => 'Can\'t rollback this modification',
			'js-fields-expand' => 'Show Additional parameters',
			'js-fields-collapse' => 'Hide Additional parameters',
			'js-delete-confirm' => 'Are you sure?',
			'js-relation-use_search' => 'Use search field below',
			'js-relation-total' => 'Total: ',
			'js-files-use_search' => 'Use filemanager to search files',
			'js-file-manager' => 'Filemanager',
			'js-water-mark' => 'Watermark',
			'js-remember-last-dir' => 'Remember last folder',
			'js-filemanager-create-title' => 'Add directory',
			'js-filemanager-create' => 'Add',
			'js-filemanager-cancel' => 'Cancel',
			'js-filemanager-rename-title' => 'Rename',
			'js-filemanager-rename' => 'Rename',
			'js-filemanager-demo-notice' => 'The filemanager works in demo mode. You can only view the files. User preferences are not considered.',
			'js-no-filemanager-notice' => 'Classic filemanager is not available any more, <br/> select elFinder in your <a href="/admin/users/">profile</a>.',
			'js-confirm-unrecoverable-del' => '<p>If sure, press "Delete".<br />This element is unrecoverable</p>',
			'js-confirm-unrecoverable-yes' => 'Delete',
			'js-confirm-unrecoverable-no' => 'Cancel',
			'js-tagscloud-header' => 'Tags',
			'js-dispatch-send1' => 'sent ',
			'js-dispatch-send2' => ' messages of ',
			'js-dispatch-send3' => 'sent',
			'js-dispatch-send-sucess' => 'Release sucefully send',
			'js-dispatch-no-subscribers' => 'No subscribers.',
			'js-dispatch-unknown-error' => 'Unknown runtime error',
			'js-dispatch-unknown-response' => 'Unknown error. Unknown server request',
			'js-dispatch-dialog-close' => 'Close',
			'js-dispatch-dialog-title' => 'Release sending',
			'js-group-expand' => 'Expand',
			'js-group-collapse' => 'Collapse',
			'js-data-add-field' => 'Add field',
			'js-cancel' => 'Cancel',
			'js-delete' => 'Delete',
			'js-browse' => 'Browse...',
			'js-search-zip-archive' => 'Browse zip-archive',
			'js-page-delete-question' => '<h1>Are you sure you want to delete this page?</h1><p>You are deleting the page. If you are sure, click "Delete".',
			'js-field-tip' => 'Field tip',
			'js-close' => 'Close',
			'js-delete-object-type' => '<h1>Are you sure you want to delete this data type?</h1><p>If you are sure, click "Delete". <br /><b>Attention! All objects of this data type will be removed!</b></p>',
			'js-add-field' => 'Add field',
			'js-social-export-done' => 'Products were successfully added to the directory Vkontakte',
		/** Редактируемая ячейка таблицы */
			'error-property-not-exists' => 'Property does not exist for this object',
			'js-error-header' => 'Error!',
			'js-property-saved-success' => 'Saved successfully',
			'js-edcell-unsupported-type' => 'Unsupported property type',
			'js-edcell-get-error' => 'Get data error: ',
			'js-edcell-save-error' => 'Set data error: ',
		/** Контекстная меню для таблиц */
			'js-add-column' => 'Add column',
			'js-del-column' => 'Delete column',
		/** Обзор изоображений */
			'js-imgbrowser-close' => 'Close',
			'js-imgbrowser-currentlabel' => 'Current dir',
			'js-imgbrowser-title' => 'Image select',
			'js-imgbrowser-dirempty' => 'Directory is empty',
			'js-imgbrowser-uploadimage' => 'Upload image',
			'js-imgbrowser-createdir' => 'Add dir',
			'js-cifi-load' => 'Files are loading. Please wait...',
			'js-guide-load' => 'Loading',
			'js-label-add-watermark' => 'Add watermark',
			'interface-lang-ru' => 'Russian',
			'interface-lang-en' => 'English',
			'js-change-activity' => 'Active',
			'js-change-template' => 'Design template',
			'js-add-page' => 'Add new',
			'js-edit-item' => 'Edit',
			'js-page-is-locked' => 'Page is blocked.',
			'js-steal-lock-question' => 'Steal lock?',
			'js-crossdomain-copy' => 'Copy to',
			'js-crossdomain-move' => 'Move to',
			'js-filter-by-node' => 'Search here',
			'js-pages-label' => 'Pages:',
			'js-value-yes' => 'Yes',
			'js-value-no' => 'No',
			'js-value-file-yes' => 'Yes',
			'js-panel-edit' => 'Edit',
			'js-panel-edit-save' => 'Save',
			'js-panel-view' => 'View',
			'js-panel-save' => 'Save',
			'js-panel-cancel' => 'Cansel',
			'js-panel-repeat' => 'Repeat',
			'js-panel-edit-menu' => 'Edit in admin (Shift+D)',
			'js-panel-history-changes' => 'History changes',
			'js-panel-note' => 'Note (Shift+C) ',
			'js-panel-modules' => 'Modules',
			'js-panel-exit' => 'Exit',
			'js-panel-adminzone' => 'Menu',
			'js-panel-adminzonelink' => 'Main',
			'js-panel-adminzone-title' => 'Adminzone',
			'js-panel-documentation' => 'Documentation',
			'js-panel-meta' => 'META-tags',
			'js-panel-last-documents' => 'Last documents',
			'js-panel-add' => 'Add',
			'js-on-eip' => 'On Edit',
			'js-off-eip' => 'Off Edit',
			'js-panel-act-as-user' => 'You are acting on behalf of user ',
			'js-panel-edited-order' => 'Editing order: ',
			'js-panel-switch' => 'Switch to your profile',
			'js-panel-meta-title' => 'Title',
			'js-panel-meta-keywords' => 'Keywords',
			'js-panel-meta-descriptions' => 'Description',
			'js-panel-meta-altname' => 'URL',
			'js-panel-meta-analysis' => 'Words analysis',
			'js-panel-link-to-go' => 'Press Ctrl+left mouse button to click on the link.',
			'js-panel-analysis-position' => 'Position analysis',
			'js-panel-message-edit-on' => 'Page-editing is on',
			'js-panel-message-edit-off' => 'Page-editing is off',
			'js-panel-message-save-confirm' => 'Save changes?',
			'js-panel-message-changes-revert' => 'All changes are canceled.',
			'js-panel-message-cant-edit' => 'You can\'t edit the deleted item.',
			'js-panel-message-save-first' => 'Remained uncommitted changes, which you can either save or cancel before creating a new page.',
			'js-panel-message-page-moved' => 'Page is moved',
			'js-panel-message-save-before-exit' => 'Remained unsaved changes. If you leave this page, these changes will be lost.',
			'js-panel-message-delete-after-save' => 'The page will be removed after you click Save.',
			'js-panel-message-add-after-save' => 'The page will be added after you click Save.',
			'js-panel-message-no-changes' => 'No changes that could have been saved.',
			'js-panel-message-changes-saved' => 'The changes are saved.',
			'js-eip-create-page' => 'Create a page',
			'js-eip-type-choise' => 'Choose a page type:',
			'js-cms-eip-symlink-no-elements' => 'No elements',
			'js-cms-eip-symlink-search' => 'Search',
			'js-cms-eip-symlink-choose-element' => 'Choose element',
			'js-permissions-view' => 'View',
			'js-permissions-edit' => 'Edit',
			'js-permissions-create' => 'Create subpage',
			'js-permissions-delete' => 'Delete',
			'js-permissions-move' => 'Move',
			'js-ticket-empty' => 'New note',
			'js-ticket-delete' => 'Delete note',
			'author-anonymous' => 'Anonymous',
			'label-quick-help' => 'Help',
			'dock-usage-tip' => 'You can drag here your modules',
			'cache-disabled-message' => 'Cache disabled',
			'cache-enabled-message' => 'Cache enabled',
			'ask_support' => 'Ask support',
			'ask_support2' => 'Ask support',
			'js-ask-support' => 'Ask support',
			'js-now-we-will-check-your-domain-key' => 'Now we will check your domain key',
			'js-info' => 'Info',
			'js-when-creating-request-remember' => 'When creating an request, remember:',
			'js-i-hate-multiple-questions' => 'do not write a single request several unrelated issues;',
			'js-i-want-postpone' => 'the problem can be solved longer if it requires detailed diagnostics, functional improvements or release product updates;',
			'js-i-hate-doubles' => 'do not duplicate your question.',
			'js-no-demo' => 'in demo mode requests are not sent to Care Service',
			'js-i-decline-support' => 'We do not provide support in the event that:',
			'js-if-somebody-do-something-perverted' => 'make any changes to the software code of the product or its modules;',
			'js-if-you-have-not-read-manual' => 'Hosting (server) does not meet the system requirements;',
			'js-if-mysql-has-gone-away' => 'issue goes beyond technical support.',
			'js-send' => 'Send',
			'error-invalid_answer' => 'Invalid answer',
			'no-ask-support-in-demo-mode' => 'Sorry, in demo mode request at support not send.',
			'header-users-login' => 'Log in',
			'header-users-login_do' => 'Log in',
			'header-yandex-oauth' => 'Yandex Authorisation (OAuth) settings',
			'label-yandex-oauth-get-code' => 'Get the code',
			'button-tag-cloud-exit' => 'Exit',
			'manifest-transaction-start' => 'Started transaction',
			'manifest-transaction-finish' => 'Completed transaction',
			'manifest-action-start' => 'Started action',
			'manifest-action-finish' => 'Completed action',
			'manifest-start' => 'Started manifest',
			'manifest-finish' => 'Completed manifest',
			'manifest-rollback-start' => 'Started rollback manifest',
			'transaction-rollback-start' => 'Started rollback transaction',
			'action-rollback-start' => 'Started rollback action',
			'manifest-exception' => 'Error detected',
			'manifest-rollback-end' => 'Manifest was rolled back',
			'transaction-rollback-end' => 'Transaction was rolled back',
			'action-rollback-end' => 'Action was rolled back',
			'label-download' => 'Download',
			'field-date-empty' => 'Never',
			'label-notification-mail-header' => 'Page expire notification',
			'label-notification-expired-mail-header' => 'Page expired notification',
			'user-preffered-currency' => 'Preffered currency',
			'label-no-content' => 'No content to display',
			'smc-social-export' => 'Export',
			'smc-load' => 'Load',
			'smc-delete' => 'Delete',
			'smc-activity' => 'On / off',
			'smc-copy' => 'Copy / make virtual copy',
			'smc-move' => 'Move',
			'smc-change-template' => 'Change template',
			'smc-change-lang' => 'Move to other lang. version',
			'js-smc-name-column' => 'Name',
			'js-smc-empty-result' => 'No results',
			'js-smc-empty-title' => 'Search',
			'js-filter-normal-mode' => 'Standart mode',
			'js-filter-extended-mode' => 'Extended mode',
			'js-filter-enter-natural-number' => 'Enter natural number',
			'js-filter-enter-float-number' => 'Enter float number',
			'js-filter-remove-field' => 'Remove field',
			'js-filter-do' => 'Search',
			'js-filter-add-field' => 'Add field',
			'js-filter-fields-list' => 'Add field',
			'js-filter-search-matches' => ' Search matches ',
			'js-filter-with-all-fields' => ' for all fields ',
			'js-filter-one-at-least' => ' / at least with one ',
			'js-filter-current-rubrics' => 'Current sections: ',
			'js-filter-delete-category' => 'Click to delete from current sections list',
			'js-filter-date-format' => 'dd.mm.yyyy hh:mm',
			'js-csv-import-button' => 'Import',
			'js-csv-export-button' => 'Export',
			'js-csv-choose-encoding' => 'Choose encoding:',
			'js-csv-import-question' => 'Choose CSV file to import',
			'js-csv-export' => 'Export to CSV',
			'js-csv-import' => 'Import from CSV',
			'js-csv-import-ignore-id' => 'Allow numeric guides names',
			'csv-error-not-found' => 'Not found in database',
			'csv-error-wrong-type' => 'Wrong data type for this context',
			'csv-error-import-list' => 'Some items were not imported:',
			'csv-new-item' => 'New',
			'js-error-double-submit' => 'Form is already submitted to server',
			'js-smc-noname-page' => '(Empty name)',
			'js-tags-cloud' => 'Tag cloud',
			'js-panel-note-add' => 'Now you need to select an area of the page to which you want to create a note.',
			'js-panel-message-cant-add' => 'You can not add in remote section.',
			'js-goto-page' => 'Go to page',
			'js-move-to-other-category' => 'Move to another category : ',
			'virtual-copies' => 'Virtual copies : ',
			'move-to-other-category' => 'Move to another category : ',
			'object-paymenttype-kvk' => 'KupiVCredit',
			'label-module-emarket-is-absent' => 'No module emarket. Mobile applications can not work.',
			'error-require-add-permissions' => 'Required add permissions',
			'error-require-edit-permissions' => 'Requred edit permissions',
			'error-require-move-permissions' => 'Required move permissions',
			'error-require-view-permissions' => 'Required view permissions',
			'error-require-delete-permissions' => 'Required delete permissions',
			'error-common-type-mismatch' => 'Objects of this data type can not be passed to this method',
			'error-cannot-load-lib' => 'File with class was not found on the path: ',
			'error-content-module-not-found' => 'Module "Content" was not found',
			'error-module-method-not-found' => 'Method was not found: ',
			'label-group-common' => 'Common properties',
			'label-field-type' => 'field type',
			'label-field' => 'field',
			'label-object' => 'object',
			'label-entity' => 'entity',
			'label-of-object' => 'of object',
			'label-datatype' => 'type',
			'label-page' => 'page',
			'label-property' => 'field',
			'label-of-page' => 'of page',
			'label-language' => 'language',
			'label-domain' => 'domain',
			'label-domain-mirror' => 'domain mirror',
			'label-restriction' => 'field restriction',
			'label-registry-item' => 'registry item',
			'label-relation' => 'relation',
			'label-guide' => 'guide',
			'label-module' => 'module',
			'label-method' => 'method',
			'label-file' => 'file',
			'label-folder' => 'folder',
			'label-values-for-field' => 'values for field',
			'label-owner-for-entity' => 'owner for entity',
			'label-permissions-for' => 'permissions for',
			'label-has-been-updated-m' => 'has been updated',
			'label-has-been-updated-f' => 'has been updated',
			'label-has-been-updated-n' => 'has been updated',
			'label-have-been-updated' => 'have been updated',
			'label-has-been-created-m' => 'has been created',
			'label-has-been-created-f' => 'has been created',
			'label-has-been-created-n' => 'has been created',
			'label-has-been-deleted-f' => 'has been deleted',
			'label-has-been-copied-m' => 'has been copied',
			'label-cannot-read-file' => 'cannot read file',
			'label-unknown-umidump-version' => 'unknown UmiDump version',
			'label-cannot-find-files-source' => 'cannot find files source',
			'label-cannot-create' => 'cannot create',
			'label-cannot-create-template' => 'cannot create template',
			'label-cannot-create-hierarchy-type' => 'cannot create hierarchy type',
			'label-cannot-create-type' => 'cannot create type',
			'label-cannot-create-element' => 'cannot create element',
			'label-cannot-create-object' => 'cannot create object',
			'label-cannot-create-language' => 'cannot create language',
			'label-cannot-create-domain' => 'cannot create domain',
			'label-cannot-create-domain-mirror' => 'cannot create domain mirror',
			'label-cannot-create-restriction' => 'cannot create frield restriction',
			'label-cannot-create-relation-for-field' => 'cannot create relation for field',
			'label-cannot-create-options-for-field' => 'cannot create options for field',
			'label-cannot-create-permission' => 'cannot create permission',
			'label-cannot-import-group' => 'cannot import group',
			'label-cannot-import-field-with-empty-name' => 'cannot import field with empty name',
			'label-cannot-create-file-with-empty-path' => 'cannot create file with empty path',
			'label-cannot-create-folder-with-empty-path' => 'cannot create with empty path',
			'label-cannot-create-registry-item-with-empty-path' => 'cannot create registry item with empty path',
			'label-cannot-set-restriction-for-field' => 'cannot set restriction for field',
			'label-has-been-set-for-field' => 'has been set for field',
			'label-cannot-detect' => 'cannot detect',
			'label-cannot-detect-type' => 'cannot detect type',
			'label-module-not-installed' => 'module "%s" not installed',
			'label-cannot-detect-template' => 'cannot detect template',
			'label-cannot-detect-group' => 'cannot detect group',
			'label-cannot-detect-datatype' => 'cannot detect datatype',
			'label-cannot-detect-field' => 'cannot detect field',
			'label-cannot-detect-field-type-for' => 'cannot detect field type for',
			'label-cannot-detect-language' => 'cannot detect language',
			'label-cannot-detect-domain' => 'cannot detect domain',
			'label-cannot-detect-domain-mirror' => 'cannot detect domain mirror',
			'label-cannot-detect-restriction' => 'cannot detect field restriction',
			'label-cannot-detect-entity' => 'cannot detect entity',
			'label-cannot-copy-file' => 'cannot detect file',
			'label-with-empty-id' => 'with empty id',
			'label-already-exists' => 'already exists',
			'label-does-not-exist' => 'does not exist',
			'label-is-broken' => 'is broken',
			'label-has-no-values' => 'has no values',
			'label-catalog-for-field' => 'Сatalog for field',
			'js-add-album' => 'Add photoalbum',
			'js-add-photos' => 'Add photo',
			'js-created' => 'Created',
			'js-out-of' => 'from',
			'js-no-photos-selected' => 'Nothing selected',
			'js-cant-touch-this' => 'Do not close window until operations will be done',
			'js-upload-some-photos' => 'You can load several images at once',
			'js-empty-photo-album' => 'Add images oan photoalbums here',
			'js-search-result' => 'Search results',
			'object-orderstatus-editing' => 'Being edited',
			'object-bonus-discount' => 'Future discount',
			'js-move-hint' => 'Move to this category',
			'js-move-label' => 'Move',
			'js-copy-hint' => 'Make virtual copy in this category',
			'js-copy-label' => 'Copy',
			'error-no-child-group' => 'A group of fields <b>%s</b> does not exist in the child type <b>%s</b>',
			'error-no-object-type' => 'Field type <b>#%s</b> does not exist',
			'error-no-fieldgroup' => 'A group of fields <b>#%s</b> does not exist',
			'error-can-not-save-image' => 'Unable to save image',
			'error-mobile-application-not-allowed' => 'Using the mobile application is not allowed for the current user',
			'error-module-emarket-absent' => 'No module emarket. The use of mobile applications is impossible.',
			'error-mobile-application-no-controller-host' => 'At the moment, the application for the site is not available. Details on UMI.ru/feedback/',
			'error-mobile-application-controller-not-allowed' => 'The mobile app is not available on the free version. Please go to premium services in the site control panel.',
			'js-session-is-away' => 'You are away for ',
			'js-session-was-away' => 'You were away for',
			'js-minutes' => 'min',
			'js-session-warning' => 'Session will be closed soon.',
			'js-session-close' => 'your session was closed.',
			'js-session-restored' => 'Session is successfully restored',
			'js-session-lifetime-configure' => 'Configure session lifetime',
			'js-label-login' => 'Login',
			'js-label-password' => 'Password',
			'js-label-login-do' => 'Log in',
			'js-label-text-error' => 'Invalid login or password',
			'js-wysiwyg-paragraph' => 'Paragraph',
			'js-label-jgrowl-close-all' => 'close all',
			'protocol-execution-not-allowed' => 'You can\'t execute this macro via stream',
			'no-data-found' => 'No data found',
			'type-edit-add_group' => 'Add group',
			'type-edit-add_field' => 'Add field',
			'js-type-edit-name' => 'Identifier',
			'type-edit-tip' => 'Hint',
			'type-edit-restriction' => 'Value format',
			'js-delete-success' => 'The object is removed.',
			'table-control-nodata' => 'No data',
			'js-table-control-nodata' => 'No data',
			'js-select-all' => 'Select all',
			'js-un-select-all' => 'Remove all selection',
			'js-invert-all' => 'Invert selection',
			'fields-group-antispam' => 'Antispam',
			'js-image-field-empty' => 'file is not selected',
			'js-image-field-alt-dialog-title' => 'Alternative text',
			'js-choose-category' => 'Choose category',
			'js-user-search-placeholder' => 'Find a user or group',
			'object-vkontakte' => '"V kontakte"',
			'js-smc-no-filter' => 'All',
			'js-error-validate-number' => 'Input data is not a number',
			'change-theme' => 'Change skin',
			'js-all-results' => 'All results',
			'js-all' => 'All',
			'support-acting-until-text' => 'Updates and support until',
			'year-text' => 'of the year',
			'prolong' => 'prolong',
			'link-will-open-in-new-window' => 'Link will open in a new window',
			'error-wrong-type-id-given' => 'Wrong type id given',
			'error-selector-executed' => 'Query is done. Create a new selector or use the method selector :: flush ().',
			'error-create-zip-archive' => 'An error occurred when creating Zip archives. ',
			'error-put-files-to-zip-archive' => 'An error occurred while adding files to a Zip archive. ',
			'error-zip-archive-already-exits' => 'Archive already exists.',
			'error-cannot-open-file' => 'Unable to open file.',
			'error-unexpected-exception' => 'Unexpected error',
			'exception-title' => 'Uncaught exception',
			'exception-solution-found' => 'We found a solution for this problem:',
			'exception-show-debug-data' => 'Show debug info',
		/** classes/system/subsystems/export/exporters/CSVExporter.php */
			'export-csv-exporter-column-name' => 'Name',
			'export-csv-exporter-column-identify-type' => 'type ID',
			'export-csv-exporter-column-activity' => 'Activity',
			'export-csv-exporter-column-identify-template' => 'ID template',
			'export-csv-exporter-column-id-parent-page' => 'id parent page',
		/** classes/system/subsystems/import/umiXmlImporter.php */
			'sub-system-import-sub-type' => 'Subtype \"%s\" #%d',
			'sub-system-import-references_for_field' => 'Reference field \"%s\"',
			'sub-system-import-error' => 'error',
		/** classes/system/utils/basket/umiBasket.php */
			'system-utils-busket-currency' => 'Russian ruble',
			'system-utils-busket-currency-symbol' => 'Rub.',
			'system-utils-busket-currency-letter-code' => 'RUB',
		/** styles/skins/_eip/main.xsl */
			'styles-skins-eip-main-error' => 'Error',
			'styles-skins-eip-main-cannot_view_current_page_type' => 'I can not display this type of page',
			'styles-skins-eip-main-have_not_learned' => 'we have not yet learned.',
		/** styles/skins/_eip/data/form.modify.xsl */
			'styles-skins-eip-data-form-modify-in_current_window_management_fields_unavailable' => 'In this window, the management of some fields is not available, so they are not shown here.',
			'styles-skins-eip-data-form-modify-in_current_window_management_optional_properties_unavailable' => 'This window management optional features available, so they are not shown here.',
		/** styles/skins/_eip/data/modules/content/common.custom.xsl */
			'styles-skins-eip-data-modules-content-common-author_info' => 'Author info',
		/** styles/skins/_eip/ui/errors.xsl */
			'styles-skins-eip-ui-errors-error' => 'Error:',
			'styles-skins-eip-ui-errors-following_errors_occurred' => 'The following errors occurred:',
		/** styles/skins/mac/interface/ui/controls.xsl */
			'styles-skins-mac-interface-ui-controls-edit_data_type' => 'Edit data type',
		/** styles/skins/mac/interface/layout.xsl */
			'styles-skins-mac-interface-layout-exit_link' => 'Exit',
			'styles-skins-mac-interface-layout-documentstion-link-title' => 'Documentation',
		/** js/client/lang/qEdit_.js */
			'js-client-lang-qEdit-gotoModule' => 'Go to the module',
			'js-client-lang-qEdit-whatEdit' => 'What to edit?',
			'js-client-lang-qEdit-createnew' => 'New note',
			'js-client-lang-qEdit-createnewalert' => 'Now you need to select an area of the page to which you want to create a note.',
			'js-client-lang-qEdit-collapse' => 'Roll up',
			'js-client-lang-qEdit-edit' => 'Edit',
			'js-client-lang-qEdit-hide' => 'Hide',
			'js-client-lang-qEdit-uncollapse' => 'Expand the panel',
			'js-client-lang-qEdit-statictics' => 'Transitions',
			'js-client-lang-qEdit-administration' => 'Administration',
			'js-client-lang-qEdit-quit' => 'Exit',

		/** js/client/catalog.js */
			'js-client-catalog-add_to_comparison' => 'Added to&nbsp;comparison',
			'js-client-catalog-compare' => 'Compare',
			'js-client-catalog-added_in_cart' => 'Added to cart',
			'js-client-catalog-in_cart' => 'Add to cart',

		/** js/client/eshop.js */
			'js-client-eshop-must_fill-field-name' => 'You must fill field \"Имя\"',
			'js-client-eshop-must_fill-field-family' => 'You must fill field \"Фамилия\"',
			'js-client-eshop-must_fill-field-surname' => 'You must fill field \"Отчество\"',
			'js-client-eshop-must_fill-field-email' => 'You must fill field \"E-mail\"',
		/** js/client/forum.js */
			'js-client-forum-not_correct_form' => 'Improperly formed form.',
			'js-client-forum-must_fill_field_login' => 'You must fill field \"Логин\"',
			'js-client-forum-must_fill_field_password' => 'You must fill field \"Пароль\"',
			'js-client-forum-password_not_correct' => 'Passwords do not match.',
			'js-client-forum-must_fill_field_email' => 'You must fill field  \"E-mail\"',
			'js-client-forum-code_not_correct' => 'Wrong code.',
			'js-client-forum-input_name' => 'Enter your name.',
			'js-client-forum-input_header' => 'Enter a title.',
			'js-client-forum-input_message_text' => 'Enter your message',
		/** js/client/subscribe.js */
			'js-client-subscribe-not_correct_form' => 'Improperly formed form.',
			'js-client-subscribe-must_fill_field_login' => 'You must fill field \"Логин\"',
			'js-client-subscribe-must_fill_field_password' => 'You must fill field \"Пароль\"',
			'js-client-subscribe-password_not_correct' => 'Passwords do not match.',
			'js-client-subscribe-must_fill_field_email' => 'You must fill field \"E-mail\"',
		/** js/client/umiBasket.js */
			'js-client-umiBasket-in_cart' => 'In the basket % s items.',
		/** js/client/umiTicket.js */
			'js-client-umiTicket-edit' => 'Edit',
			'js-client-umiTicket-remove_mark' => 'Delete note',
		/** js/client/umiTickets.js */
			'js-client-umiTickets-new_mark' => 'New note',
		/** js/client/users.js */
			'js-client-users-not_correct_form' => 'Improperly formed form.',
			'js-client-users-must_fill_field_login' => 'You must fill field \"Логин\"',
			'js-client-users-must_fill_field_password' => 'You must fill field \"Пароль\"',
			'js-client-users-password_not_correct' => 'Passwords do not match.',
			'js-client-users-must_fill_field_email' => 'You must fill field \"E-mail\"',

		/** js/cms/eip/edit_in_place.js */
			'js-cms-eip-edit_in_place-save_processing' => 'There is a saving',
			'js-cms-eip-edit_in_place-saved_count_modify' => 'Saved <span>0</span> change from %s.',
		/** js/cms/eip/edit_in_place_custom.js */
			'js-cms-eip-edit_in_place_custom-remove' => 'Delete',
			'js-cms-eip-edit_in_place_custom-active' => 'Actively',
			'js-cms-eip-edit_in_place_custom-not_active' => 'Not active',
			'js-cms-eip-editor-yes' => 'Yes',
			'js-cms-eip-editor-no' => 'No',
		/** js/cms/eip/editor_custom.js */
			'js-cms-eip-editor_custom-select_value' => 'Select',
			'js-cms-eip-editor_custom-new_value' => 'The new value',
			'js-cms-eip-editor_custom-price_modify' => 'Price modifier',
			'js-cms-eip-editor_custom-add_properties' => 'Add properties',
		/** js/cms/session.js */
			'js-cms-session-your_out' => 'You are out% s minutes. The session will end soon<br>',
			'js-cms-session-time_out' => 'You are no more than% s minutes, so your session is over.',
			'js-cms-session-label-login' => 'Login: ',
			'js-cms-session-label-password' => 'Password:',
			'js-cms-session-label-session-continue' => 'I want to extend the session',
			'js-cms-session-label-timeout_setting' => 'Configure idle timeout',
			'js-cms-session-label-session_restore' => 'Session successfully restored!',
			'js-cms-session-label-error-filed-login' => 'Error! Incorrect login or password',
			'js-cms-session-label-enter-login-or-password-for-session-restore' => 'Enter login and password to restore the session!',
		/** js/smc/Control.js */
			'js-smc-control-page-already-exist' => 'A page of that pseudo static address already exists (<a href=\'%s\'>%s</a>): <br/>',
		/** js/guest.js */
			'js-guest-not_correct_form' => 'Improperly formed form.',
			'js-guest-must_fill_field_login' => 'You must fill field \"Логин\"',
			'js-guest-must_fill_field_password' => 'You must fill field \"Пароль\"',
			'js-guest-password_not_correct' => 'Passwords do not match.',
			'js-guest-must_fill_field_email' => 'You must fill field \"E-mail\"',
			'js-guest-code_not_correct' => 'Wrong code.',
			'js-guest-input_name' => 'Enter your name.',
			'js-guest-input_header' => 'Enter a title.',
			'js-guest-input_message_text' => 'Enter your message',
			'js-choose-page' => 'Page selection',
			'js-users-adv-message' => 'Post UMI.CMS',
			'js-ieditor-request-failed' => 'Failed to perform action. Please try again.',
			'js-ieditor-module-filemanager-title' => 'Paste from file manager',
			'js-ieditor-module-edit-title' => 'Edit',
			'js-ieditor-module-crop-title' => 'Trim',
			'js-ieditor-module-resize-title' => 'Change size',
			'js-ieditor-module-rotate-title' => 'To turn',
			'js-ieditor-module-popup-title' => 'Make popup',
			'js-ieditor-module-popup-title-msg' => 'Now when you click on an image, it will open in a pop-up window',
			'js-ieditor-module-popup-title-active' => 'Remove popup',
			'js-ieditor-module-popup-title-active-msg' => 'The image will no longer be opened in a popup window ',
			'js-ieditor-module-delete-title' => 'Delete',
			'js-ieditor-module-upload-title' => 'Upload from PC',
			'js-ieditor-module-apply-title' => 'Save',
			'js-ieditor-module-cancel-title' => 'Cancel',
			'js-ieditor-invalid-action' => 'Error in determining surgery',
			'js-ieditor-switcher' => 'Image editing',
			'type-edit-name' => 'Identifier',
			'js-selectize-clear-selection' => 'Clear selection',
			'js-asw-label-error' => 'Error',
			'js-asw-label-success' => 'The order has been successfully sent. Check its status on the delivery page.',
			'js-asw-label-empty-delivery-providers' => 'Specify a delivery service in the same field, to work with their settings.',
			'js-asw-dialog-title' => 'Choose shipping method',
			'label-asw-edit-button' => 'Edit',
			'label-asw-send-button' => 'Send the order to ApiShip',
			'label-asw-data-loading-message' => 'The information is loading',
			'label-asw-field-title' => 'Tariff and type of delivery',
			'js-asw-empty-data' => 'Not selected',
			'js-asw-select-tariff-error' => 'Select tariff of delivery.',
			'js-asw-delivery-type-label' => 'Selected delivery',
			'js-asw-label-delivery-to-door' => 'to door',
			'js-asw-label-delivery-to-point' => 'to point of delivery',
			'js-asw-info-provider' => 'Delivery service',
			'js-asw-info-tariff' => 'Tariff',
			'js-asw-info-point' => 'Selected point of delivery',
			'js-asw-info-address' => 'Address',
			'js-asw-info-phone' => 'Phone',
			'js-asw-info-timetable' => 'Schedule',
			'js-asw-select-button' => 'Choose',
			'js-asw-cancel-button' => 'Cancel',
			'js-asw-tab-label-to-door' => 'To door',
			'js-asw-tab-label-to-point' => 'Point of delivery',
			'js-asw-error-town-detect' => 'The error in determining the city',
			'js-asps-connect-log-start-connect' => 'Number of customized delivery services (DM): ',
			'js-asps-connect-log-server-answer' => 'Delivery Service: ',
			'js-asps-connect-log-server-error'	=> 'Error: ',
			'js-asps-connect-data-loading'	=> 'Loading data ...',
			'js-asps-connect-provider-dialog-title' => 'Connect delivery services',
			'label-error-object-not-found' => 'Object with id %d was not found',
			'error-cannot-get-city-by-id' => 'Cannot get city object by id %d',
			'error-cannot-get-country-by-id' => 'Cannot get country object by id %d',
			'error-cannot-get-country-by-iso' => 'Cannot get country object by ISO code %s',
			'error-cannot-get-city-by-name' => 'Cannot get city object by name %s',
			'error-cannot-create-proxy-for-object-with-guid' => 'Wrong object type GUID %s given for proxy %s',
			'js-choose-error-tariff-point-no-select' => 'Select the delivery rate, or point of delivery and the delivery rate.',
			'js-delivery-city-not-defined' => 'City of delivery was not specified',
			'js-choose-error-tariff-no-select' => 'You have not selected tariff.',
			'js-choose-error-config' => 'The problem with setting up a delivery service. Contact your site administrator.',
			'js-choose-error-no-eligible-providers' => 'Unfortunately, we couldn\'t calculate the delivery tariff automatically. Please, choose another delivery type.',
			'js-goto-edit-page'=>'Go to the edit page',
			'js-table-control-fast-edit'=>'Fast edit',
			'js-ieditor-module-slider-title' => 'Slider management',
			'js-ieditor-module-slider-popup-title' => 'Slider editing',
			'option-use-umiNotifications' => 'Use Notifications module for sending emails',
			'error-no-entity-attribute' => 'Can\'t import entity with empty attribute "%s"',
			'error-no-collection-for-service' => 'Can\'t find collection for service "%s"',
			'page-number-format' => 'Page %d ',
			'label-branch_content_table' => 'Separate content of objects of different hierarchical types according to different tables',
			'label-make_system_backup' => 'Create backup of system files',
			'label-merge_content_table' => 'Merge content of objects of different hierarchical types into one table',
			'label-restore_system_backup' => 'Restoring system files from backup',
			'label-CheckPermissions' => 'Check some fs permissions',
			'label-CreateBranchTable' => 'Create cms3_object_content table clone',
			'label-MoveContentTableData' => 'Move data to branched table',
			'label-SaveBranchTableRelations' => 'Save relation data',
			'label-DeleteContentTableData' => 'Delete moved data from primary table',
			'label-CheckEnvironment' => 'Check environment',
			'label-MakeFilesBackup' => 'Make backup copy of system files',
			'label-CompressDirectory' => 'Compress backup files',
			'label-RemoveDirectory' => 'Remove temporary files',
			'label-MergeContentTableData' => 'Move data from branched table to primary table',
			'label-DeleteBranchedTable' => 'Delete branched table',
			'label-DecompressDirectory' => 'Decompress backup zip-archive',
			'label-CompareDirectoriesPermissions' => 'Compare permissions',
			'label-CopyDirectory' => 'Copy decompressed files',
			'label-DeleteFiles' => 'Delete files',
			'label-CreateDirectory' => 'Create directories',
			'label-incorrect-field-title' => 'Incorrect field title given, not empty string expected',
			'label-incorrect-field-name' => 'Incorrect field name given, not empty string expected',
			'label-incorrect-field-type' => 'Incorrect field guid type',
			'label-search_indexing_on_install' => 'Search indexation on install',
			'label-search_indexing_on_update' => 'Search indexation on update',
			'label-DeleteIndex' => 'Index deleting',
			'label-SearchIndexing' => 'Search indexing',
			'label-SiteMapIndexing' => 'Site map indexing',
			'label-site_map_indexing_on_install' => 'Site map indexation on install',
			'label-site_map_indexing_on_update' => 'Site map indexation on update',
			'label-filter_indexing_on_install' => 'Filter map indexation on install',
			'label-FilterIndexing' => 'Index filter',
			'label-update_links_on_install' => 'Updating menu links on installation',
			'label-UpdateLinks' => 'Menu links updating',
			'label-update_related_id_on_install' => 'Updating related id on installation',
			'label-UpdateRelatedId' => 'Updating related id',
			'label-update_order_domain_ids_on_install' => 'Updating order domain ids on installation',
			'label-UpdateOrderDomainIds' => 'Updating order domain ids',
			'label-MigrateObjectType' => 'Object type migration',
			'label-TruncateRelationTable' => 'Truncate object type hierarchy relation table',
			'label-FillRelationTable' => 'Fill object type hierarchy relation table',
			'error-wrong-domain-and-lang-ids' => 'Wrong domain and lang ids given',
			'js-relation_search' => 'Search',
			'js-server_error' => 'Internal error',
			'js-new_guide_item_title' => 'Add a new element',
			'js-new_guide_item_name' => 'Enter name:',
			'js-new_guide_item_add' => 'Add',
			'js-new_guide_item_cancel' => 'Cancel',
			'js-add-option' => 'Add option',
			'js-remove-option' => 'Remove option',
			'js-add-relation-item' => 'Add relation item',
			'js-edit-guide-items' => 'Edit guide items',
			'js-editable-optioned-field' => 'Edit optioned field',
			'js-optioned-value-hidden' => '[Value is hidden]',
			'js-save' => 'Save',
			'label-error-domain-not-found-by-id' => 'Domain with the given identifier was not found "%s"',
			'label-error-domain-not-found-by-host' => 'Domain with the given host was not found "%s"',
			'label-from' => 'from',
			'label-to' => 'to',
			'label-period' => 'Period',
			'label-action-filter' => 'Filter'
	];

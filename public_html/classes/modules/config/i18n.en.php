<?php
$i18n = Array(
	"header-config-main"		=> "Global settings",
	"group-globals"			=> "ite name",
	"option-admin_email"		=> "E-mail of administrator",
	"option-keycode"		=> "License key",
	"option-chache_browser"		=> "Allow browser cache",
	"option-disable_url_autocorrection"	=> "Disable URL autocorrection",
	"option-disable_captcha"	=> "Disable CAPTCHA",
	"option-show_macros_onerror" => "Show macros source on errors",
	"option-site_name"		=> "Site name",
	"option-ip_blacklist"	=> "IP blacklist",
	"option-session_lifetime"	=> "Session lifetime",
	"option-busy_quota_files_and_images"	=> "Busy disk size (summary for /files/ and /images/, Mb)",
	"option-busy_quota_files_and_images_percent"	=> "Percent of busy disk size (summary for /files/ and /images/, Mb)",
	"option-quota_files_and_images"	=> "Restriction of disk space (summary for /files/ and /images/, Mb)",
	"option-busy_quota_uploads"	=> "Busy of disk size for directory /sys-temp/uploads/, Mb",
	"option-quota_uploads"	=> "Restriction of disk space for directory /sys-temp/uploads/, Mb",
	"option-timezones"				=> "Time zone",
	"option-modules"				=> "Default admin module",
	"header-config-mails"		=> "Outgoing mails settings",
	"option-email_from"		=> "Sender e-mail",
	"option-fio_from"		=> "Sender name",
	"header-config-social_networks"	=> "Social Networks",
	"header-config-memcached"	=> "Memcached connection settings",
	"group-memcached"		=> "Memcached",
	"option-host"			=> "Host",
	"option-port"			=> "Port",
	"option-is_enabled"		=> "Memcached enabled",
	"option-status"			=> "Status",
	"config-memcache-no-connection"	=> "No connection",
	"config-memcache-disabled"	=> "Disconnected",
	"config-memcache-used"		=> "Used",
	"label-modules-list"		=> "Installed modules list",
	"label-install-path"		=> "Installation file path",
	"label-install"			=> "Install",
	"label-langs-list"		=> "Languages list",
	"label-lang-prefix"		=> "Prefix",
	"header-config-langs"		=> "Languages",
	"header-config-domains"		=> "Domains settings",
	"label-domain-address"		=> "Domain host",
	"label-domain-mirror-address" => "Mirror domain host",
	"label-domain-lang"		=> "Default languages",
	"label-mirrows"			=> "Settings",
	"header-config-domain_del"	=> "Domain deleting",
	"error-can-not-delete-default-domain" => "Default domain deleting is denied.",
	"tabs-config-main"		=> "Globals",
	"tabs-config-modules"		=> "Modules",
	"tabs-config-langs"		=> "Languages",
	"tabs-config-domains"		=> "Domains",
	"tabs-config-memcached"		=> "Memcached",
	"tabs-config-mails"		=> "Mails",
	"tabs-config-watermark" => "Watemark",
	"tabs-config-security" => "Security",
	"header-config-modules"		=> "Modules",
	"header-config-domain_mirrows"	=> "Domain properties",
	"header-config-lang_del" => "Delete language version",
	"option-upload_max_filesize" => "Maximum upload filesize in PHP settings (Mb)",
	"option-max_img_filesize"	=> "Maximum upload filesize (Mb)",
	"header-config-del_module" => "Uninstall module",
	"header-config-security" => "Security",
	"group-static"				=> "Cache settings",
	"group-test" 				=> "Testing",
	"group-security-audit" 		=> "System security audit",
	"option-enabled"			=> "Enabled",
	"option-expire"				=> "Cache expire",
	"cache-static-short"		=> "Short cache, max 10 mins",
	"cache-static-normal"		=> "Normal cache, max 1 day (recommended)",
	"cache-static-long"			=> "Long cache, max 1 month",
	"option-lock_duration"		=> "Lock duation (sec)",
	"option-ga-id"				=> "Google Analytics Id",
	"option-expiration_control"	=> "Enable expiration control",
	"header-config-branching"	=> "Data base optimization",
	"label-optimize-db"			=> "Optimize",
	"header-config-add_module_do"	=> "Install module",
	"label-watermark" => "Watermark",
	"header-config-watermark" => "Watermark settings",
	"option-image" => "Image",
	"option-scale" => "Scale",
	"option-alpha" => "Transparent (100 — opaque)",
	"option-valign" => "Vertical align",
	"option-halign" => "Horisontal align",
	"watermark-valign-top" => "Top",
	"watermark-valign-center" => "center",
	"watermark-valign-bottom" => "Bottom",
	"watermark-halign-right" => "Right",
	"watermark-halign-left" => "Left",
	"watermark-halign-center" => "Center",
	"header-config-cache" => "Caching",
	"tabs-config-cache" => "Caching",
	"group-engine" => "General cache",
	"option-current-engine" => "Current cache engine",
	"option-cache-status" => "Cache status",
	"cache-engine-on" => "Working",
	"cache-engine-off" => "Out of service",
	"option-cache-size" => "Cache size",
	"cache-size-off" => "Cant calculate",
	"option-engines" => "Cache engines",
	"cache-engine-apc" => "APC",
	"cache-engine-eaccelerator" => "eAccelerator",
	"cache-engine-xcache" => "XCache",
	"cache-engine-memcache" => "Memcache (TCP/IP, autodetect)",
	"cache-engine-shm" => "Shared memory (shm)",
	"cache-engine-fs" => "File system",
	"cache-engine-redis" => "Redis",
	"cache-engine-database" => "Data base",
	"group-streamscache" => "Protocols and macros cache for XSLT and PHP templaters",
	"option-cache-enabled" => "Enabled",
	"option-cache-lifetime" => "Cache lifetime (seconds)",
	"option-reset" => "Flush cache",
	"group-seo" => "SEO settings",
	"group-additional" => "Additional settings",
	"option-seo-title"			=> "TITLE prefix",
	"option-seo-default-title" => "TITLE (default)",
	"option-seo-keywords"			=> "Keywords (default)",
	"option-seo-description"		=> "Description (default)",
	"option-allow-alt-name-with-module-collision" => "Allow page url and module name collision",
	"cache-engine-none"		=> "Not selected",
	"group-branching"		=> "Database optimization",
	"option-branch"			=> "Optimize DB",
	"js-config-optimize-db-header"     => "Optimizing DB",
	"js-config-optimize-db-content"    => "<p>Database is rebuilding.<br />Please, wait.</p>",
	"event-systemModifyElement-title" => "Page is modified",
	"event-systemModifyElement-content" => "Page \"<a href='%page-link%'>%page-name%</a>\" is modified",
	"event-systemCreateElement-title" => "Page is created",
	"event-systemCreateElement-content" => "New page \"<a href='%page-link%'>%page-name%</a>\" is created",
	"event-systemSwitchElementActivity-title" => "Activity is changed",
	"event-systemSwitchElementActivity-content" => "Activity of \"<a href='%page-link%'>%page-name%</a>\" is changed",
	"event-systemDeleteElement-title" => "Page is deleted",
	"event-systemDeleteElement-content" => "Page \"<a href='%page-link%'>%page-name%</a>\" is deleted",
	"event-systemMoveElement-title" => "Page is moved",
	"event-systemMoveElement-content" => "Page \"<a href='%page-link%'>%page-name%</a>\" is moved",
	"event-systemModifyObject-title" => "Object is modified",
	"event-systemModifyObject-content" => "Object \"%object-name%\" of type \"%object-type%\" is modified",
	'option-disable_too_many_childs_notification' => 'Disable too many childs notification',
	'js-check-security'					=> 'Test security',
	'js-index-security-fine'			=> 'Test passed',
	'js-index-security-problem'			=> 'Test failed',
	'js-index-security-no'				=> 'Testing was not run',
	'option-security-UFS'				=> 'UFS protocol is closed',
	'option-security-UObject'			=> 'UObject protocol is closed',
	'option-security-DBLogin'			=> 'DB login not equal root',
	'option-security-DBPassword'		=> 'DB password isn\'t empty',
	'option-security-ConfigIniAccess'	=> 'Access to configuration file closed',
	'option-security-FoldersAccess'		=> 'Access to system folders closed',
	'option-security-PhpDisabledForFiles' => 'PHP-scripts executing',
	'option-security-PhpDelConnector' => 'Access to file php_for_del_connector.php',
	'js-sitemap-ok' => 'OK',
	'js-sitemap-ajax-error' => 'Some ajax error occurred.',
	'js-sitemap-updating-complete' => 'Updating of Sitemap.xml complete',
	'js-label-stop-and-close' => 'Stop and close',
	'group-mails' => 'E-mail settings',
	'group-watermark' => 'Watermark options',
	'js-current-watermark' => 'Save changes for preview of current watermark',
	"label-extensions-list" => "Installed extensions list",
	"js-label-component-installed" => "Component is installed",
	"js-label-component-install" => "Installing the component ",
	"tabs-config-extensions" => "Extensions",
	"header-config-extensions" => "Extensions",
	'extension-list-available-for-installing' => 'List of extensions available for installation',
	'all-available-extensions-installed' => 'All available extensions are installed',
	'module-list-available-for-installing' => 'List of modules available for installation',
	'all-available-modules-installed' => 'All available modules are installed',
	'js-label-stop-in-demo' => 'Sorry, this option is inaccessible in a demonstration mode',
	'error-label-available-module-list' => 'Failed to get list due to error:',
	'group-browser' => 'Browser cache',
	'option-current-browser-cache-engine' => "Selected engine",
	'option-browser-cache-engine' => "Available engine list",
	'None-browser-cache' => 'Cache disabled',
	'LastModified-browser-cache' => 'Header "Last-Modified"',
	'EntityTag-browser-cache' => 'Header "ETag"',
	'Expires-browser-cache' => 'Header "Expires"',
);
?>

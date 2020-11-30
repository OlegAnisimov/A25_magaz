<?php

	/** Языковые константы для русской версии */
	$i18n = [
		'header-config-main' => 'Основные настройки',
		'option-admin_email' => 'E-mail администратора',
		'option-keycode' => 'Доменный ключ',
		'option-chache_browser' => 'Разрешить браузерам кэшировать страницы',
		'option-disable_url_autocorrection' => 'Отключить автокоррекцию адресов',
		'option-disable_captcha' => 'Отключить CAPTCHA',
		'option-show_macros_onerror' => 'Показывать текст макроса при ошибке',
		'option-site_name' => 'Название сайта',
		'option-ip_blacklist' => 'Список IP-адресов, которым недоступен сайт',
		'option-session_lifetime' => 'Таймаут неактивности пользователя',
		'option-busy_quota_files_and_images' => 'Занятое дисковое пространство (суммарно для каталогов /files/ и /images/, Мб)',
		'option-busy_quota_files_and_images_percent' => 'Процент занятого дискового пространства (суммарно для каталогов /files/ и /images/, Мб)',
		'option-busy_quota_uploads' => 'Занятое дисковое пространство для директории /sys-temp/uploads/, Мб',
		'option-quota_uploads' => 'Ограничение дискового пространства для директории /sys-temp/uploads/, Мб',
		'option-quota_files_and_images' => 'Ограничение дискового пространства (суммарно для каталогов /files/ и /images/, Мб)',
		'option-timezones' => 'Часовой пояс',
		'option-redirect_to_default_module' => 'Перенаправлять в модуль администратора по умолчанию при авторизации',
		'option-modules' => 'Модуль администратора по умолчанию',
		'header-config-mails' => 'Настройки исходящих писем',
		'option-email_from' => 'E-mail отправителя',
		'option-fio_from' => 'Имя отправителя',
		'option-engine' => 'Средство отправки писем',
		'option-is-disable-parse-content' => 'Отключить парсинг писем',
		'option-x-mailer' => 'X-Mailer',
		'option-timeout' => 'Задержка',
		'option-encryption' => 'Шифрование',
		'option-auth' => 'Включить авторизацию',
		'option-username' => 'Логин',
		'option-password' => 'Пароль',
		'option-is-debug' => 'Включить режим отладки',
		'option-is-use-verp' => 'Использовать VERP',
		'mail-engine-php-mail' => 'phpMail',
		'mail-engine-smtp' => 'SMTP',
		'mail-engine-null-engine' => 'Заглушка',
		'mail-encryption-ssl' => 'SSL',
		'mail-encryption-tls' => 'TLS',
		'mail-encryption-auto' => 'Auto',
		'header-config-social_networks' => 'Social Networks',
		'header-config-memcached' => 'Настройки подключения к memcached',
		'group-memcached' => 'Memcached',
		'option-host' => 'Хост',
		'option-port' => 'Порт',
		'option-is_enabled' => 'Использовать memcached',
		'option-status' => 'Статус',
		'config-memcache-no-connection' => 'Нет подключения',
		'config-memcache-disabled' => 'Отключено',
		'config-memcache-used' => 'Используется',
		'label-langs-list' => 'Список языков',
		'label-lang-prefix' => 'Префикс',
		'header-config-langs' => 'Языки',
		'header-config-domains' => 'Настройка доменов',
		'label-domain-address' => 'Адрес домена',
		'label-domain-mirror-address' => 'Адрес зеркала домена',
		'label-domain-lang' => 'Язык по умолчанию',
		'label-mirrows' => 'Свойства',
		'header-config-domain_del' => 'Удаление домена',
		'error-can-not-delete-default-domain' => 'Удаление основного домена запрещено.',
		'tabs-config-main' => 'Глобальные',
		'tabs-config-langs' => 'Языки',
		'tabs-config-domains' => 'Домены',
		'tabs-config-memcached' => 'Memcached',
		'tabs-config-mails' => 'Почта',
		'tabs-config-security' => 'Безопасность',
		'header-config-domain_mirrows' => 'Свойства домена',
		'header-config-lang_del' => 'Удаление языка',
		'option-upload_max_filesize' => 'Максимальный размер загружаемого файла в PHP (Мб)',
		'option-max_img_filesize' => 'Максимальный размер загружаемой фотографии (Мб)',
		'header-config-security' => 'Безопасность',
		'group-static' => 'Статический кеш',
		'option-expire' => 'Время хранения кэша (обычно не имеет значения)',
		'cache-static-short' => 'Короткий кэш, не более 10 минут',
		'cache-static-normal' => 'Нормальный кэш, не более суток (рекомендуется)',
		'cache-static-long' => 'Длинный кэш, не более месяца',
		'option-ga-id' => 'Google Analytics Id',
		'header-config-branching' => 'Оптимизация базы данных',
		'label-optimize-db' => 'Оптимизировать',
		'header-config-cache' => 'Кэширование',
		'tabs-config-cache' => 'Производительность',
		'group-engine' => 'Обычное кэширование',
		'group-test' => 'Тестирование',
		'group-security-audit' => 'Аудит безопасности системы',
		'header-config-captcha' => 'CAPTCHA',
		'null-captcha' => 'Не использовать',
		'captcha' => 'Классическая',
		'recaptcha' => 'Google reCAPTCHA',
		'group-captcha' => 'Общие настройки',
		'option-use-site-settings' => 'Использовать настройки сайта',
		'option-captcha' => 'CAPTCHA',
		'option-captcha-drawer' => 'Класс отрисовки изображений',
		'option-captcha-remember' => 'Запоминать успешно пройденную пользователем CAPTCHA',
		'option-recaptcha-sitekey' => 'параметр sitekey',
		'option-recaptcha-secret' => 'параметр secret',
		'option-current-engine' => 'Используемый кеширующий механизм',
		'option-cache-status' => 'Статус кеширования',
		'cache-engine-on' => 'Работает',
		'cache-engine-off' => 'Не работает',
		'option-cache-size' => 'Размер кеша',
		'cache-size-off' => 'Невозможно определить',
		'option-engines' => 'Список доступных кэширующих механизмов',
		'cache-engine-memcache' => 'Memcache',
		'cache-engine-memcached' => 'Memcached',
		'cache-engine-null' => 'Заглушка',
		'cache-engine-array' => 'Массив',
		'cache-engine-fs' => 'Файловая система',
		'cache-engine-database' => 'База данных',
		'cache-engine-redis' => 'Redis',
		'group-streamscache' => 'Кэширование макросов и протоколов для XSLT и PHP шаблонизаторов',
		'option-cache-enabled' => 'Включено',
		'option-static-cache-enabled' => 'Включено',
		'option-cache-lifetime' => 'Время жизни кэша (в секундах)',
		'option-reset' => 'Сбросить кэш',
		'group-seo' => 'Настройки SEO',
		'group-additional' => 'Дополнительные настройки',
		'option-allow-alt-name-with-module-collision' => 'Разрешить совпадение адреса страницы с названием модуля',
		'cache-engine-none' => 'Не выбрано',
		'group-branching' => 'Оптимизация базы данных',
		'option-branch' => 'Оптимизировать БД',
		'js-config-optimize-db-header' => 'Оптимизация базы данных',
		'js-config-optimize-db-content' => '<p>Перестраивается база данных для более оптимальной работы.<br />Это может занять некоторое время.</p>',
		'event-systemModifyElement-title' => 'Отредактирована страница',
		'event-systemModifyElement-content' => 'В страницу "<a href="%page-link%">%page-name%</a>" внесены изменения',
		'event-systemCreateElement-title' => 'Создана страница',
		'event-systemCreateElement-content' => 'Создана новая страница "<a href="%page-link%">%page-name%</a>"',
		'event-systemSwitchElementActivity-title' => 'Изменена активность',
		'event-systemSwitchElementActivity-content' => 'Изменена активность страницы "<a href="%page-link%">%page-name%</a>"',
		'event-systemDeleteElement-title' => 'Удалена страница',
		'event-systemDeleteElement-content' => 'Удалена страница "<a href="%page-link%">%page-name%</a>"',
		'event-systemMoveElement-title' => 'Перемещена страница',
		'event-systemMoveElement-content' => 'Перемещена страница "<a href="%page-link%">%page-name%</a>"',
		'event-systemModifyObject-title' => 'Отредактирован объект',
		'event-systemModifyObject-content' => 'Отредактирован объект "%object-name%" типа "%object-type%"',
		'option-disable_too_many_childs_notification' => 'Отключить уведомление о большом количестве дочерних документов в структуре',
		'js-check-security' => 'Проверить безопасность',
		'js-index-security-fine' => 'Тест пройден',
		'js-index-security-problem' => 'Тест провален',
		'js-index-security-no' => 'Тестирование не проводилось',
		'option-security-UFS' => 'Протокол UFS закрыт',
		'option-security-UObject' => 'Протокол UObject закрыт',
		'option-security-DBLogin' => 'Подключение к БД не под root-ом',
		'option-security-DBPassword' => 'Пароль для БД не пустой',
		'option-security-ConfigIniAccess' => 'Доступ к файлу конфигурации закрыт',
		'option-security-FoldersAccess' => 'Доступ к системным папкам закрыт',
		'option-security-PhpDisabledForFiles' => 'Выполнение php скриптов в /files/ запрещено',
		'option-security-PhpDisabledForImages' => 'Выполнение php скриптов в /images/ запрещено',
		'option-security-PhpDisabledForTemplates' => 'Выполнение php скриптов в /templates/ запрещено',
		'option-security-ConfigIniCsrfProtection' => 'Сайт защищен от CSRF-атак (включена настройка csrf_protection в файле config.ini)',
		'option-security-UserCsrfProtection' => 'Сайт защищен от CSRF-атак (включена настройка "Проверять CSRF-токен при изменении настроек пользователя" в модуле "Пользователи")',
		'option-security-RequireUserPassword' => 'Включена настройка "При изменении настроек пользователя нужно запрашивать его пароль" в модуле "Пользователи"',
		'option-security-TemplatesEditorGuestAccess' => 'Гостевой пользователь не имеет права на редактирование файлов шаблонов в модуле "Шаблоны сайтов"',
		'js-sitemap-ok' => 'OK',
		'js-sitemap-ajax-error' => 'Возникла ошибка при получении данных от сервера.',
		'js-label-stop-and-close' => 'Остановить и закрыть',
		'group-mails' => 'Настройки почты',
		'perms-config-cron_http_execute' => 'Права на запуск крона по http',
		'perms-config-main' => 'Права на работу с глобальными настройками',
		'perms-config-langs' => 'Права на работу с языками',
		'perms-config-domains' => 'Права на работу с доменами',
		'perms-config-mails' => 'Права на работу с настройками почты',
		'perms-config-cache' => 'Права на работу с настройками производительности',
		'perms-config-security' => 'Права на выполнение тестов безопасности',
		'perms-config-phpInfo' => 'Права на чтение phpInfo',
		'perms-config-captcha' => 'Права на работу с настройками captcha',
		'perms-config-delete' => 'Права на удаление доменов, зеркал и языков',
		'group-browser' => 'Браузерный кеш',
		'option-current-browser-cache-engine' => 'Выбранный способ кеширования',
		'option-browser-cache-engine' => 'Список доступных способов кеширования',
		'None-browser-cache' => 'Кеш браузера отключен',
		'LastModified-browser-cache' => 'Заголовок "Last-Modified"',
		'EntityTag-browser-cache' => 'Заголовок "ETag"',
		'Expires-browser-cache' => 'Заголовок "Expires"',
		'header-config-phpInfo' => 'phpInfo',
		'mail-site-settings' => 'Настройки сайта',
		'option-smtp-settings-label' => 'Настройки SMTP',
		'group-mail' => 'Общие настройки почты',
		'label-favicon' => 'Фавикон',
		'js-error-incorrect-favicon' => 'Выберите файл с расширением \'ico\', \'png\', \'svg\', \'jpeg\', \'gif\', \'jpg\', \'webp\''
	];

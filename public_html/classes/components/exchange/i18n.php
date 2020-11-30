<?php

	/** Языковые константы для русской версии */
	$i18n = [
		'header-exchange-import' => 'Импорт данных',
		'label-add-import' => 'Настроить новый импорт',
		'header-exchange-add-import' => 'Настройка нового импорта',
		'header-exchange-edit-import' => 'Настройка импорта данных',
		'header-exchange-get_export' => 'Экспорт данных',
		'header-exchange-config' => 'Настройки модуля',
		'label-import-do' => 'Выполнить импорт',
		'js-exchange-import' => 'Импорт',
		'js-exchange-import-help' => 'Подождите, выполняется импорт данных...',
		'js-exchange-created' => 'Создано: ',
		'js-exchange-updated' => 'Обновлено: ',
		'js-exchange-deleted' => 'Удалено: ',
		'js-exchange-import-errors' => 'Ошибок: ',
		'js-exchange-toggle-log' => 'скрыть/показать лог',
		'js-exchange-show-hide-log' => 'Показать/Скрыть лог',
		'js-exchange-ajaxerror' => 'Ошибка разбора данных.',
		'js-exchange-btn_repeat' => 'Повторить',
		'js-exchange-btn_stop' => 'Остановить',
		'js-exchange-btn_ok' => 'Готово',
		'js-exchange-btn_cancel' => 'Отмена',
		'js-exchange-import-done' => 'Импорт успешно завершен!',
		'perms-exchange-auto' => 'Интеграция с 1С',
		'perms-exchange-exchange' => 'Импорт/экспорт данных',
		'perms-exchange-get_export' => 'Доступ к экспорту данных по http',
		'perms-exchange-config' => 'Права на работу с настройками',
		'perms-exchange-delete' => 'Права на удаление сценариев импорта, экспорта и логов',
		'exchange-site-settings' => 'Настройки сайта',
		'exchange-err-importfile' => 'Не удалось получить файл для импорта. Проверьте, пожалуйста, настройки.',
		'exchange-err-settings_notfound' => 'Не найдены настройки с указанным идентификатором',
		'exchange-err-format_undefined' => 'Не указан формат обмена данными. Проверьте, пожалуйста, настройки.',
		'header-exchange-export' => 'Экспорт данных',
		'label-add-export' => 'Настроить новый экспорт',
		'header-exchange-add-export' => 'Настройка нового экспорта',
		'header-exchange-edit-export' => 'Настройка экспорта данных',
		'label-export-do' => 'Выполнить экспорт',
		'js-exchange-export' => 'Экспорт данных',
		'js-exchange-export-in-progress' => 'Выполняется экспорт данных.',
		'js-exchange-export-getlink' => 'Получить ссылку на результат экспорта',
		'js-exchange-export-getfile' => 'Скачать файл экспорта',
		'js-exchange-prepare-export-submit' => 'Для формирования полной передачи каталога товаров в Яндекс.Маркет подготовьте данные к экспорту.',
		'js-exchange-prepare-export' => 'Подготовить к экспорту',
		'js-exchange-prepare-done' => 'Данные подготовлены к экспорту. Нажмите «Готово», кликните на раздел и нажмите «Выполнить экспорт».',
		'js-exchange-type-error' => 'Этот тип экспорта не нуждается в подготовке',
		'error-social-nodsc' => 'Нет описания..',
		'error-update-yml' => 'Родительская страница не является категорией каталога для объекта',
		'label-errors-no-information' => 'http://errors.umi-cms.ru/15001/',
		'error-wrong-user' => 'У вас недостаточно прав для выполнения данной операции.',
		'error-unknown-action-type' => 'Неизвестный тип действия',
		'error-wrong-export-format' => 'Сценарий экспорта с заданным id не существует или его формат не соответствует ожидаемому.',
		'error-wrong-export-id' => 'Сценарий экспорта с заданным id не существует.',
		'error-wrong-identification-data-format' => 'Неверный формат данных для идентификации созданных сущностей.',
		'error-wrong-entity-type' => 'Неизвестный тип сущности',
		'error-cant-get-data' => 'Не удалось получить идентификационные данные.',
		'error-no-export-template' => 'Файл с шаблоном экспорта %s не существует.',
		'error-no-element' => 'Страницы с id %s не существует.',
		'error-no-field' => 'Поля с id %s не существует.',
		'error-no-type' => 'Типа данных с id %s не существует.',
		'error-impossible-export-parametrs' => 'Заданы невозможные размеры пакета экспорта.',
		'csv-property-id' => 'id',
		'csv-property-name' => 'Наименование',
		'csv-property-type-id' => 'Идентификатор типа',
		'csv-property-is-active' => 'Активность',
		'csv-property-template-id' => 'Идентификатор шаблона',
		'csv-property-parent-id' => 'id родительской страницы',
		'csv-property-alt-name' => 'Псевдостатический адрес',
		'option-use_custom_params' => 'Использовать настройки сайта',
		'option-use_cml_trade_offers' => 'Использовать торговые предложения в CommerceML',
		'option-restore_deleted_catalog_items_from_cml' => 'Восстанавливать из модуля "Корзина" товары и разделы каталога при импорте из формата CommerceML',
		'option-is_change_catalog_item_h1_from_cml' => 'Изменять поле "h1" товаров и разделов каталога при импорте из формата CommerceML',
		'option-is_change_catalog_item_title_from_cml' => 'Изменять поле "title" товаров и разделов каталога при импорте из формата CommerceML',
		'option-is_write_import_log' => 'Записывать лог импорта в файл',
		'header-exchange-logList' => 'Логи импорта',
		'label-file-change-date' => 'Дата изменения',
		'label-file-generate-date' => 'Дата создания',
		'label-file-format' => 'Формат импорта',
		'label-import-script' => 'Сценарий импорта',
		'label-called-from' => 'Вызван из',
		'js-label-download-log-file' => 'Скачать файл',
		'js-label-delete-log-file' => 'Удалить файл',
		'js-label-log-file-delete-confirm' => 'Вы собираетесь удалить файлы логов, это необратимая операция!',
		'js-label-open-import' => 'Открыть импорт',
		'perms-exchange-logList' => 'Права на просмотр логов импорта',
	];

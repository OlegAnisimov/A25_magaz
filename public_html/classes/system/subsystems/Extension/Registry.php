<?php

	namespace UmiCms\System\Extension;

	use UmiCms\System\Registry\Part;

	/**
	 * Реестр расширений.
	 * Не учитывает расширения, установленные вручную.
	 * @package UmiCms\System\Extension
	 */
	class Registry extends Part implements iRegistry {

		/** @const string PATH_PREFIX префикс пути для ключей */
		const PATH_PREFIX = '//extensions';

		/** @inheritDoc */
		public function __construct(\iRegedit $storage) {
			parent::__construct($storage);
			parent::setPathPrefix(self::PATH_PREFIX);
		}

		/** @inheritDoc */
		public function append($name) {
			return $this->set($name, $name);
		}

		/** @inheritDoc */
		public function setPathPrefix($prefix) {
			return $this;
		}
	}

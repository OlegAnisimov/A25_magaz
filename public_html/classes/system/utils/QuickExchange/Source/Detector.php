<?php

	namespace UmiCms\Classes\System\Utils\QuickExchange\Source;

	/**
	 * Класс определителя источника
	 * @package UmiCms\Classes\System\Utils\QuickExchange\Source
	 */
	class Detector implements iDetector {

		/** @var \iCmsController $cmsController cms контроллер */
		private $cmsController;

		/** @inheritDoc */
		public function __construct(\iCmsController $cmsController) {
			$this->cmsController = $cmsController;
		}

		/** @inheritDoc */
		public function detectForImport() {
			return sprintf('%s.csv', $this->detectForExport());
		}

		/** @inheritDoc */
		public function detectForExport() {
			$cmsController = $this->getCmsController();
			return sprintf('sync-%s-%s', $cmsController->getCurrentModule(), $cmsController->getCurrentMethod());
		}

		/**
		 * Возвращает cms контоллер
		 * @return \iCmsController
		 */
		private function getCmsController() {
			return $this->cmsController;
		}
	}

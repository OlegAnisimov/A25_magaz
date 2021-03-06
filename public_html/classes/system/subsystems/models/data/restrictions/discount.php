<?php

	class discountRestriction extends baseRestriction implements iNormalizeInRestriction {

		protected $errorMessage = 'restriction-error-discount-size';

		public function validate($value, $objectId = false) {
			return ($value >= 0) && ($value <= 100);
		}

		public function normalizeIn($value, $objectId = false) {
			$value = (double) $value;
			if ($value > 100) {
				$value = 100;
			}

			if ($value < 0) {
				$value = 0;
			}
			return $value;
		}
	}


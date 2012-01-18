<?php

	class AmortizationHelper {

		public static function total($array_vals) {
			$total = 0;
			foreach ($array_vals as $value) {
				$total += $value;
			}
			return $total;
		}

	}
?>
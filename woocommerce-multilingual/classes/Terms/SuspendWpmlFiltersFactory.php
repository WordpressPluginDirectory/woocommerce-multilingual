<?php

namespace WCML\Terms;

use WCML\Utilities\Suspend\Filters as SuspendFilters;
use function WCML\functions\getSitePress;

class SuspendWpmlFiltersFactory {

	/**
	 * @return \WCML\Utilities\Suspend\Suspend
	 */
	public static function create() {
		$sitepress = getSitePress();

		return new SuspendWpmlFilters(
			new SuspendFilters( [
				[ 'get_term', [ $sitepress, 'get_term_adjust_id' ], 1, 1 ],
				[ 'terms_clauses', [ $sitepress, 'terms_clauses' ], 10, 3 ],
				[ 'get_terms_args', [ $sitepress, 'get_terms_args_filter' ], 10, 2 ],
			] )
		);
	}
}

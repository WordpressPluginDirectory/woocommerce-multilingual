<?php

namespace WCML\Compatibility\AdventureTours;

use WCML\Compatibility\ComponentFactory;
use WCML_Adventure_Tours;
use function WCML\functions\getSitePress;
use function WCML\functions\getWooCommerceWpml;

class Factory extends ComponentFactory {

	/**
	 * @inheritDoc
	 */
	public function create() {
		return new WCML_Adventure_Tours( getWooCommerceWpml(), getSitePress(), self::getElementTranslationPackage() );
	}
}

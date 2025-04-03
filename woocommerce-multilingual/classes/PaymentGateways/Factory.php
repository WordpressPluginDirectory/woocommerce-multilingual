<?php

namespace WCML\PaymentGateways;

use function WPML\Container\make;

class Factory implements \IWPML_Backend_Action_Loader, \IWPML_Frontend_Action_Loader {

	public function create() {
		$hooks = [ make( Hooks::class ) ];

		if ( is_admin() ) {
			$hooks[] = make( Settings\TranslationControls::class );
		}

		return $hooks;
	}

}

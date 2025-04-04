<?php

namespace WCML\Options;

use WPML\Settings\PostType\Automatic;
use WPML\Setup\Option;

class WPML {

	/**
	 * @param string $postType
	 * @param bool   $state
	 */
	public static function setAutomatic( $postType, $state ) {
		if ( method_exists( Automatic::class, 'set' ) ) {
			Automatic::set( $postType, $state );
		}
	}

	/**
	 * @param string $postType
	 *
	 * @return bool
	 */
	public static function isAutomatic( $postType ) {
		if ( method_exists( Automatic::class, 'isAutomatic' ) ) {
			return Automatic::isAutomatic( $postType );
		}

		return false;
	}

	/**
	 * @return bool
	 */
	public static function useAte() {
		return method_exists( \WPML_TM_ATE_Status::class, 'is_enabled_and_activated' )
			&& \WPML_TM_ATE_Status::is_enabled_and_activated();
	}
}

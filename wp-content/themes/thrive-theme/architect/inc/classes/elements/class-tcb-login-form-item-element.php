<?php

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Silence is golden
}

class TCB_Login_Form_Item_Element extends TCB_Element_Abstract {

	public function name() {
		return __( 'Login Form Item', 'thrive-cb' );
	}

	public function identifier() {
		return '.tve-login-form-item';
	}

	/**
	 * Hide Element From Sidebar Menu
	 *
	 * @return bool
	 */
	public function hide() {
		return true;
	}

	public function own_components() {

		return array(
			'typography'       => array(
				'hidden' => true,
			),
			'layout'           => array(
				'disabled_controls' => array(
					'Width',
					'Height',
					'Alignment',
					'Display',
					'.tve-advanced-controls',
				),
			),
			'animation'        => array(
				'hidden' => true,
			),
			'responsive'       => array(
				'hidden' => true,
			),
			'styles-templates' => array(
				'hidden' => true,
			),
		);
	}
}


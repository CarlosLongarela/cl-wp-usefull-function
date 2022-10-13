<?php

/**
 * Add or modify States (Add Portugal states).
 *
 */
function cl_woocommerce_states( $states ) {
	$states['PT'] = array(
		'AC' => 'Azores',
		'AV' => 'Aveiro',
		'BJ' => 'Beja',
		'BR' => 'Braga',
		'BG' => 'Bragança',
		'CB' => 'Castelo Branco',
		'CM' => 'Coimbra',
		'EV' => 'Évora',
		'FR' => 'Faro',
		'GD' => 'Guarda',
		'LR' => 'Leiria',
		'LS' => 'Lisbon',
		'MD' => 'Madeira',
		'PR' => 'Portalegre',
		'PT' => 'Oporto',
		'ST' => 'Santarém',
		'SB' => 'Setúbal',
		'VC' => 'Viana do Castelo',
		'VR' => 'Vila Real',
		'VS' => 'Viseu',
	);

	return $states;
}
add_filter( 'woocommerce_states', 'cl_woocommerce_states' );

// Remove related products.
remove_action( 'woocommerce_after_single_product_summary', 'woocommerce_output_related_products', 20 );

// Ship to a different address opened by default.
add_filter( 'woocommerce_ship_to_different_address_checked', '__return_false' );

/**
 * Redirect user after registration.
 */
function cl_redirect_after_register() {
	return ( 'https://your-website.com/register-tahnks-webpage/' );
}
add_filter ( 'woocommerce_registration_redirect', 'cl_redirect_after_register' );
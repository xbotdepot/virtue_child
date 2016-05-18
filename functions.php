<?php
/*-----------------------------------------------------------------------------------*/
/* Include Theme Functions */
/*-----------------------------------------------------------------------------------*/

//add_filter( 'woocommerce_currencies', 'add_my_currency' );

function add_my_currency( $currencies ) {
     $currencies['ABC'] = __( 'Currency name', 'woocommerce' );
     return $currencies;
}

add_filter('woocommerce_currency_symbol', 'add_my_currency_symbol', 10, 2);

function add_my_currency_symbol( $currency_symbol, $currency ) {
     switch( $currency ) {
          case 'CAD': $currency_symbol = 'CAD $'; break;
          case 'USD': $currency_symbol = 'USD $'; break;
     }
     return $currency_symbol;
}


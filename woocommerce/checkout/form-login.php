<?php
/**
 * Checkout login form
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/checkout/form-login.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see https://docs.woocommerce.com/document/template-structure/
 * @package WooCommerce\Templates
 * @version 3.8.0
 */

defined( 'ABSPATH' ) || exit;

if ( is_user_logged_in() || 'no' === get_option( 'woocommerce_enable_checkout_login_reminder' ) ) {
	return;
}

?>

<style>

	.woocommerce{
		margin:50px;
		min-height: calc(100vh - 400px);
	}
	form.woocommerce-form.woocommerce-form-login.login {
    padding: 20px;
}
p.form-row {
    display: flex;
    flex-direction: column;
}
label {
    color: #C60967;
    font-weight: 600;
}
button.woocommerce-button.button.woocommerce-form-login__submit {
    width: 150px;
    color: #C60967;
    border: 1px solid #C60967;
}

a.button.wc-forward {
    color: #C60967;
    border: 1px solid #C60967;
   
}
p {
    /* color: #d3ced2; */
    font-weight: 600;
    /* font-size: 20px; */
}
a{
	color:black;
}
@media only screen and (min-width:1460px){
	.entry-content {
    display: flex;
    align-items: flex-start;
    justify-content: center;
    min-height: calc(100vh - 400px);
	}
	.woocommerce{
		margin:0px;
		width:1460px;
	}
}
</style>
<div class="woocommerce-form-login-toggle">
	<?php wc_print_notice( apply_filters( 'woocommerce_checkout_login_message', esc_html__( 'Returning customer?', 'woocommerce' ) ) . ' <a href="#" class="showlogin">' . esc_html__( 'Click here to login', 'woocommerce' ) . '</a>', 'notice' ); ?>
</div>
<?php

woocommerce_login_form(
	array(
		'message'  => esc_html__( 'If you have shopped with us before, please enter your details below. If you are a new customer, please proceed to the Billing section.', 'woocommerce' ),
		'redirect' => wc_get_checkout_url(),
		'hidden'   => true,
	)
);

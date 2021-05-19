<?php
/**
 * Lost password form
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/myaccount/form-lost-password.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see https://docs.woocommerce.com/document/template-structure/
 * @package WooCommerce\Templates
 * @version 3.5.2
 */

defined( 'ABSPATH' ) || exit;

do_action( 'woocommerce_before_lost_password_form' );
?>
<style>
	.entry-header h1{
		color:#c60967;
		font-weight:600;

	}
.lost-password-container{
	display:flex;
	align-items:flex-start;
	justify-content:center;
	height: calc(100vh - 250px);
}

.woocommerce form .form-row input.input-text, .woocommerce form .form-row textarea {
    box-sizing: border-box;
    width: 55%;
	
}
.woocommerce #respond input#submit, .woocommerce a.button, .woocommerce button.button, .woocommerce input.button {
    
font-size: 20px;
    margin: 10px 0;
    line-height: 1;
    cursor: pointer;
    position: relative;
    text-decoration: none;
    overflow: visible;
    padding: .618em 1em;
    font-weight: 700;
    border-radius: 3px;
    left: auto;
    color: #c60967;
    border-radius: 10px;
    background-color:#fff;
    width: 300px;
    height: 50px;
    border: 1px solid #c60967;
}

	
</style>
<div class="lost-password-container">
	<form method="post" class="woocommerce-ResetPassword lost_reset_password" style="width:80%;">

		<p><?php echo apply_filters( 'woocommerce_lost_password_message', esc_html__( 'Passwort vergessen? Bitte geben Sie Ihren Benutzernamen oder Ihre E-Mail-Adresse ein. Sie erhalten einen Link zum Erstellen eines neuen Passworts per E-Mail.', 'woocommerce' ) ); ?></p><?php // @codingStandardsIgnoreLine ?>

		<p class="woocommerce-form-row woocommerce-form-row--first form-row form-row-first">
			<label for="user_login"><?php esc_html_e( 'Benutzername oder EMail-Adresse', 'woocommerce' ); ?></label>
			<input class="woocommerce-Input woocommerce-Input--text input-text" type="text" name="user_login" id="user_login" autocomplete="username" />
		</p>

		<div class="clear"></div>

		<?php do_action( 'woocommerce_lostpassword_form' ); ?>

		<p class="woocommerce-form-row form-row">
			<input type="hidden" name="wc_reset_password" value="true" />
			<button type="submit" class="woocommerce-Button button" value="<?php esc_attr_e( '
Passwort zurücksetzen', 'woocommerce' ); ?>"><?php esc_html_e( 'Reset password', 'woocommerce' ); ?></button>
		</p>

		<?php wp_nonce_field( 'lost_password', 'woocommerce-lost-password-nonce' ); ?>

	</form>
</div>
<?php
do_action( 'woocommerce_after_lost_password_form' );

<?php
/**
 * Edit account form
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/myaccount/form-edit-account.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see https://docs.woocommerce.com/document/template-structure/
 * @package WooCommerce\Templates
 * @version 3.5.0
 */

defined( 'ABSPATH' ) || exit;

do_action( 'woocommerce_before_edit_account_form' ); ?>
<style>
	legend {
	color: #c60967;
    float: left;
    font-size: 22px;
    font-weight: bold;	
}
.woocommerce form .form-row label {
  
    width: 30%;
}

.woocommerce form .form-row input.input-text, .woocommerce form .form-row textarea {
  
    width: 30%;
    margin: 0 12px;
    border: 1px solid #ccc;
}
fieldset {
    padding: 0;
}


.woocommerce #respond input#submit, .woocommerce a.button, .woocommerce button.button, .woocommerce input.button {

    border-radius: 10px;
    border: 2px solid #c60967;
    /* margin-left: 74px; */
    margin-right: 20px;
	background:#fff;
	width: 200px;
    height: 50px;
}

@media screen and (min-width: 1700px){
		.entry-content{
			display:flex;
			align-items:center;
			justify-content:center;
			
		}

		.woocommerce{
			max-width:1700px;
		}
	}
</style>

<form class="woocommerce-EditAccountForm edit-account" action="" method="post" <?php do_action( 'woocommerce_edit_account_form_tag' ); ?> >

	<?php do_action( 'woocommerce_edit_account_form_start' ); ?>


	<fieldset>
		<legend><?php esc_html_e( 'Mein Passwort ändern  (leer lassen, um unverändert zu bleiben)', 'woocommerce' ); ?></legend>

		<p class="woocommerce-form-row woocommerce-form-row--wide form-row form-row-wide">
			<label for="password_current"><?php esc_html_e( 'Aktuelles Passwort', 'woocommerce' ); ?></label>
			<input type="password" class="woocommerce-Input woocommerce-Input--password input-text" name="password_current" id="password_current" autocomplete="off" />
		</p>
		<p class="woocommerce-form-row woocommerce-form-row--wide form-row form-row-wide">
			<label for="password_1"><?php esc_html_e( 'Neues Passwort', 'woocommerce' ); ?></label>
			<input type="password" class="woocommerce-Input woocommerce-Input--password input-text" name="password_1" id="password_1" autocomplete="off" />
		</p>
		<p class="woocommerce-form-row woocommerce-form-row--wide form-row form-row-wide">
			<label for="password_2"><?php esc_html_e( 'Bestätige neues Passwort', 'woocommerce' ); ?></label>
			<input type="password" class="woocommerce-Input woocommerce-Input--password input-text" name="password_2" id="password_2" autocomplete="off" />
		</p>
	</fieldset>
    <legend><?php esc_html_e( 'Impressum für Ihre Inserate', 'woocommerce' ); ?></legend>
  <p>Sehr geehrter Vermieter. Hier haben Sie die Möglichkeit alle entscheidenden Daten Ihres Unternehmens zu hinterlegen. Diese Angaben erscheinen dann in Ihrem Impressum, welches automatisch in jedem Ihrer Inserate im Bereich "Vermieter" angezeigt wird und für potentielle Mieter einsehbar ist.</p>
	<legend><?php esc_html_e( 'Meine Adresse bearbeiten', 'woocommerce' ); ?></legend>
	<p><?php esc_html_e( 'Hier können Sie Ihre Adresse eingeben und bearbeiten. Die eingegebene Adresse ist gleichzeitig Ihre Rechnungsadresse, wenn Sie keine abweichende Rechnungsadresse während des Buchungsprozesses eingeben. Ihre Adresse wird nicht veröffentlicht.', 'woocommerce' ); ?></p>
	
	<p class="woocommerce-form-row woocommerce-form-row--wide form-row form-row-wide">
		<label for="account_first_name"><?php esc_html_e( 'Vorname', 'woocommerce' ); ?>&nbsp;<span class="required">*</span></label>
		<input type="text" class="woocommerce-Input woocommerce-Input--text input-text" name="account_first_name" id="account_first_name" autocomplete="given-name" value="<?php echo esc_attr( $user->first_name ); ?>" />
	</p>
	<p class="woocommerce-form-row woocommerce-form-row--wide form-row form-row-wide">
		<label for="account_last_name"><?php esc_html_e( 'Nachname', 'woocommerce' ); ?>&nbsp;<span class="required">*</span></label>
		<input type="text" class="woocommerce-Input woocommerce-Input--text input-text" name="account_last_name" id="account_last_name" autocomplete="family-name" value="<?php echo esc_attr( $user->last_name ); ?>" />
	</p>
	<div class="clear"></div>

	<p class="woocommerce-form-row woocommerce-form-row--wide form-row form-row-wide">
		<label for="account_display_name"><?php esc_html_e( 'Anzeigename', 'woocommerce' ); ?>&nbsp;<span class="required">*</span></label>
		<input type="text" class="woocommerce-Input woocommerce-Input--text input-text" name="account_display_name" id="account_display_name" value="<?php echo esc_attr( $user->display_name ); ?>" /> <span><em><?php esc_html_e( 'So wird Ihr Name im Kontobereich und in Bewertungen angezeigt', 'woocommerce' ); ?></em></span>
	</p>
	<div class="clear"></div>

	<p class="woocommerce-form-row woocommerce-form-row--wide form-row form-row-wide">
		<label for="account_email"><?php esc_html_e( 'E-Mail-Addresse', 'woocommerce' ); ?>&nbsp;<span class="required">*</span></label>
		<input type="email" class="woocommerce-Input woocommerce-Input--email input-text" name="account_email" id="account_email" autocomplete="email" value="<?php echo esc_attr( $user->user_email ); ?>" />
	</p>
	

	<div class="clear"></div>

	<?php do_action( 'woocommerce_edit_account_form' ); ?>

	<p>
		<?php wp_nonce_field( 'save_account_details', 'save-account-details-nonce' ); ?>
		<button type="submit" class="woocommerce-Button button" name="save_account_details" value="<?php esc_attr_e( 'Änderungen speichern', 'woocommerce' ); ?>"><?php esc_html_e( 'Änderungen speichern', 'woocommerce' ); ?></button>
		<input type="hidden" name="action" value="Post" />
	</p>

	<?php do_action( 'woocommerce_edit_account_form_end' ); ?>
</form>
<?php do_action( 'woocommerce_after_edit_account_form' ); ?>

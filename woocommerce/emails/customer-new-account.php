<?php
/**
 * Customer new account email
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/emails/customer-new-account.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see https://docs.woocommerce.com/document/template-structure/
 * @package WooCommerce\Templates\Emails
 * @version 3.7.0
 */

defined( 'ABSPATH' ) || exit;

do_action( 'woocommerce_email_header', $email_heading, $email ); ?>

<style>
.email-logo{
	display: flex !important;
    align-items: center !important;
    justify-content: center !important;
}
.logo-img{
	width:20% !important;
}
.footer{
	display: flex !important;
    align-items: center !important;
    justify-content: space-around !important;
}
</style>
<div>
	<div style="display:flex;align-items:center !important;justify-content:center !important">
		<img style="width:20%" src="https://fair-hand.com/wp-content/uploads/2021/04/KUGEL_OHNE-HINTERGRUND.png" />                                    
	</div>
	<hr>
	<div>
		<h2>Herzlich willkommen bei Fair-Hand!</h2>
		<p>Vielen Dank für Ihre Anmeldung auf fair-hand.com. Sie haben schon jetzt die Möglichkeit, in Ihrem Vermieter-Login Inserate zu erstellen. </p>
		<h2>Ihre Zugangsdaten:</h2>			
			<?php			
			$user = get_user_by('login',$user_login);
			if($user)
			{ ?>
				<p>E-Mail: <?php echo $user->user_email; ?> </p>
			   	<p>Kundennummer: <?php echo $user->ID; ?> </p>			   
			<?php }
			?>			
			<p>Gerne können Sie uns direkt für ein individuelles Angebot ansprechen. Kontaktieren Sie dafür bitte info@fair-hand.com oder über die sozialen Medien:</p>
			<!-- <div style="display:flex; flex-direction:row;margin-top: 300px;">
				<i class="fa fa-instagram" aria-hidden="true" style="font-size:30px;color:#C60967;"></i>
				<i class="fa fa-facebook-official" aria-hidden="true" style="font-size:30px;color:#C60967;"></i>
				<i class="fa fa-youtube-play" aria-hidden="true" style="font-size:30px;color:#C60967;"></i>
        	</div> -->
			<p>Mit freundlichen Grüßen</p>
			<p><b>Ihr fair-hand.com – Team</b></p>
			<hr>
			<div style="text-align:center;margin:0">
				<p><b>Fair-Hand</b></p>
				<p><b>Basenberg 22</b></p>
				<p><b>32457 Porta Westfalica</b></p>
				<p><b>Germany</b></p>
			</div>
			<div style="align-items:center !important;justify-content:space-around !important;display:flex">
				<p style="margin: 0 !important"><a href="https://fair-hand.com/kontakt">Kontakt</a></p>
				<p style="margin: 0 !important"><a href="https://fair-hand.com/agb">AGB</a></p>
				<p style="margin: 0 !important"><a href="https://fair-hand.com/datenschutzerklarung">Datenschutz</a></p>
			</div>
	</div>
</div>
<!-- <?php /* translators: %s: Customer username */ ?>
<p><?php printf( esc_html__( 'Hi %s,', 'woocommerce' ), esc_html( $user_login ) ); ?></p>
<?php /* translators: %1$s: Site title, %2$s: Username, %3$s: My account link */ ?>
<p><?php printf( esc_html__( 'Thanks for creating an account on %1$s. Your username is %2$s. You can access your account area to view orders, change your password, and more at: %3$s', 'woocommerce' ), esc_html( $blogname ), '<strong>' . esc_html( $user_login ) . '</strong>', make_clickable( esc_url( wc_get_page_permalink( 'myaccount' ) ) ) ); // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?></p> -->
<?php if ( 'yes' === get_option( 'woocommerce_registration_generate_password' ) && $password_generated ) : ?>
	<?php /* translators: %s: Auto generated password */ ?>
	<p><?php printf( esc_html__( 'Your password has been automatically generated: %s', 'woocommerce' ), '<strong>' . esc_html( $user_pass ) . '</strong>' ); ?></p>
<?php endif; ?>

<?php
/**
 * Show user-defined additional content - this is set in each email's settings.
 */
// if ( $additional_content ) {
// 	echo wp_kses_post( wpautop( wptexturize( $additional_content ) ) );
// }

// do_action( 'woocommerce_email_footer', $email );
?>

<script>
	 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</script>
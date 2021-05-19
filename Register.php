<?php
  /*
   * Template name: Register
   */
?>
<?php if(is_user_logged_in()){
  wp_redirect(get_permalink(get_option('woocommerce_myaccount_page_id')));
} ?>
<?php get_header();?>

<?php do_action( 'woocommerce_before_customer_login_form' ); ?>


<meta content="width=device-width, initial-scale=1" name="viewport" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
<style>
  .reg-img{
    background: url(https://fair-hand.com/wp-content/uploads/2021/01/login.png) 100% 0 no-repeat;
    background-size: cover;
    /* margin-top: 100px !important;
        min-height: 100vh; */
    
  }
.register_page{
  overflow-x:hidden;
}
  .register_structure{
    max-width: 35em !important;
    margin: 5rem auto 2rem;
    display: flex;
    flex-direction: column;
    justify-content: center;
    min-height: 60vh;
    color: #BDBDBD;

}
.register_structure h1{
  color:#c60967;
}

  .input-text{display: block !important;
    width: 400px !important;
    padding: .375rem .75rem !important;
    font-size: 1rem !important;
    line-height: 1.5 !important;
    color: #495057 !important;
    background-color: #fff !important;
    background-clip: padding-box !important;
    border: 1px solid #ced4da !important;
    border-radius: .25rem !important;
    transition: border-color .15s ease-in-out,box-shadow .15s ease-in-out !important;
}
  .reg-btn{height: 5rem;
    width: 200px;   
    background: var(--btn_bg-color,#fff);
    color: var(--btn_text-color,#C60967);
    border: 1px solid #C60967;
    border-radius: .5rem;
    padding: 0 1.5rem;
    outline: none;
    cursor: pointer;
    transition: all .2s;
    font-weight: 500;
    font-size: 1.8rem;}
    .radio-input-text{
	width:auto !important;

}
</style>
<section id="register_page" class="register_page">
<div class="row">
<!-- <div class="row container"> -->
    <div class="col-sm-6 reg-img">
      
    </div>
    <div class=" col-sm-6 register_structure">
      <form method="post" class="woocommerce-form woocommerce-form-register register" <?php do_action( 'woocommerce_register_form_tag' ); ?> >
        <?php do_action( 'woocommerce_register_form_start' ); ?>
        <div class=" form-box">
          <div class="section-title custom-title">
            <h1><?php esc_html_e( 'Registrieren', 'woocommerce' ); ?></h1>
          </div>
          <?php if ( 'no' === get_option( 'woocommerce_registration_generate_username' ) ) : ?>
            <div class="item">
              <label for="reg_username"><?php esc_html_e( 'Benutzername', 'woocommerce' ); ?>&nbsp;<span class="required">*</span></label>
            <p><input type="text" class="woocommerce-Input woocommerce-Input--text input-text" name="username" id="reg_username" autocomplete="username" value="<?php echo ( ! empty( $_POST['username'] ) ) ? esc_attr( wp_unslash( $_POST['username'] ) ) : ''; ?>" /><?php // @codingStandardsIgnoreLine ?>
              </p> 
              </div>
          <?php endif; ?>
          <div class="item">
            <label for="reg_email"><?php esc_html_e( 'Email', 'woocommerce' ); ?>&nbsp;<span class="required">*</span></label>
          <p>  <input type="email" class="woocommerce-Input woocommerce-Input--text input-text" name="email" id="reg_email" autocomplete="email" value="<?php echo ( ! empty( $_POST['email'] ) ) ? esc_attr( wp_unslash( $_POST['email'] ) ) : ''; ?>" /><?php // @codingStandardsIgnoreLine ?>
            </p></div>
          <?php if ( 'no' === get_option( 'woocommerce_registration_generate_password' ) ) : ?>
            <div class="item">
              <label for="reg_password"><?php esc_html_e( 'Passwort', 'woocommerce' ); ?>&nbsp;<span class="required">*</span></label>
              <input type="password" class="woocommerce-Input woocommerce-Input--text input-text" name="password" id="reg_password" autocomplete="new-password" />
            </div>
          <?php else : ?>
            <p class="pass-msg"><?php esc_html_e( 'A password will be sent to your email address.', 'woocommerce' ); ?></p>
          <?php endif; ?>
          
        </div>
        <?php do_action( 'woocommerce_register_form' ); ?>
        <div class="item btn-default">
          <?php wp_nonce_field( 'woocommerce-register', 'woocommerce-register-nonce' ); ?>
          <button type="submit" onclick="idForm()" class="woocommerce-Button woocommerce-button button woocommerce-form-register__submit reg-btn" name="register" value="<?php esc_attr_e( 'Register', 'woocommerce' ); ?>"><?php esc_html_e( 'Register', 'woocommerce' ); ?></button>
        </div>
        <?php do_action( 'woocommerce_register_form_end' ); ?>
      </form>
    </div>
  </div>
  </div>
</section>
<script>

jQuery(document).ready(function(){

var first_name_field=jQuery('.first-name');
var last_name_field=jQuery('.last-name');
var phone_no_field=jQuery('.phone-no');
var company_name_field=jQuery('.company-name');
var address_name_field=jQuery('.address-name');
var state_name_field=jQuery('.state-name');
var country_name_field=jQuery('.country-name');
var postal_name_field=jQuery('.post-code');



jQuery('.section-title').after(last_name_field);
jQuery('.section-title').after(first_name_field);
jQuery('.section-title').after(phone_no_field);
jQuery('.section-title').after(company_name_field);
jQuery('.section-title').after(address_name_field);
jQuery('.section-title').after(state_name_field);
jQuery('.section-title').after(country_name_field);
jQuery('.section-title').after(postal_name_field);

});
</script>
<?php do_action( 'woocommerce_after_customer_login_form' ); ?>
<?php get_footer();?>
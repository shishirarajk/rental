<?php

/**
 * Login Form
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/myaccount/form-login.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see     https://docs.woocommerce.com/document/template-structure/
 * @package WooCommerce\Templates
 * @version 4.1.0
 */

if (!defined('ABSPATH')) {
  exit; // Exit if accessed directly.
}

do_action('woocommerce_before_customer_login_form'); ?>
<meta content="width=device-width, initial-scale=1" name="viewport" />
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>

<style>
  .login-wrap {
    /* display: flex;
    justify-content: center; */
    /* height:calc(100vh - 200px); */
    
  }

  .entry-header {
    display: none;
  }

  .entry-content {
    margin: 0
  }

  /* #login{margin-top:100px;} */
  .form_left {
    background: url(https://fair-hand.com/wp-content/uploads/2021/01/login.png) 100% 0 no-repeat;
    background-size: cover;
    /* margin-top: 100px !important; */
    height:100vh;
  
  }

  #form_wrapper {
   
    overflow-y: hidden;
  }

  .form_reg {
    max-width: 35em !important;
    margin: 0rem auto 2rem;
    display: flex;
    flex-direction: column;
    justify-content: center;

    color: #BDBDBD;
  }

  .woocommerce form .form-row input.input-text {
    width: 500px;
    height: 30px;
  }

  input[type=checkbox] {
    color: #BDBDBD;
  }

  .lost_password a {
    color: #c60967;
  }


  #switch1 {
    text-decoration: none;
    color: #C60967;
  }

  #switch a:hover {
    text-decoration: none;
    color: #C60967;
  }

  .woocommerce form.checkout_coupon,
  .woocommerce form.login,
  .woocommerce form.register {
    border: none;
  }

  h1 {
    color: #C60967;
    font-weight: 600
  }



  .woocommerce form .form-row label {
    margin-bottom: 0px;
  }

  .woocommerce #respond input#submit,
  .woocommerce a.button,
  .woocommerce button.button,
  .woocommerce input.button {
    font-size: 20px;
    margin: 0;
    line-height: 1;
    cursor: pointer;
    position: relative;
    text-decoration: none;
    overflow: visible;
    padding: .618em 1em;
    font-weight: 700;
    border-radius: 3px;
    left: auto;
    color: #fff;
    border-radius: 10px;
    background: linear-gradient(134.05deg, #c60967 0%, #603 100%);
    width: 150px;
    height: 50px;
    border: none;

  }

  #secondary {
    display: none;
  }

  @media only screen and (max-width: 700px) {
    .form_left {
      display: none;
    }

  }


  @media only screen and (min-width: 1460px) {
    .login-wrap {
    display: flex;
    align-items: center;
    justify-content: center;
}
#form_wrapper {
  width:1460px
}
  }
</style>

<?php if ('yes' === get_option('woocommerce_enable_myaccount_registration')) : ?>

  <div class="u-columns col2-set" id="customer_login">



  <?php endif; ?>


  <body id="login">
    <div class="login-wrap">

      <div id="form_wrapper" style="overflow-x:hidden;">
        <div class="row">
          <div class=" col-sm-6 form_left">
            <!-- <img src="http://fair-hand.com/wp-content/uploads/2021/01/login.png" alt="fair-hand" /> -->
          </div>
          <div class=" col-sm-6 form_reg" id="login_part">

            <form class="woocommerce-form woocommerce-form-login login rhs_login" method="post">
              <p>hello</p>
              <h1 id="form_head"><?php esc_html_e('Login', 'woocommerce'); ?></h1>
              <?php do_action('woocommerce_login_form_start'); ?>

              <p class="woocommerce-form-row woocommerce-form-row--wide form-row form-row-wide">
                <label for="username"><?php esc_html_e('Benutzername oder Email', 'woocommerce'); ?>&nbsp;<span class="required">*</span></label>
                <input type="text" class="woocommerce-Input woocommerce-Input--text input-text" name="username" id="username" autocomplete="username" value="<?php echo (!empty($_POST['username'])) ? esc_attr(wp_unslash($_POST['username'])) : ''; ?>" /><?php // @codingStandardsIgnoreLine 
                                                                                                                                                                                                                                                            ?>
              </p>
              <p class="woocommerce-form-row woocommerce-form-row--wide form-row form-row-wide">
                <label for="password"><?php esc_html_e('Passwort', 'woocommerce'); ?>&nbsp;<span class="required">*</span></label>
                <input class="woocommerce-Input woocommerce-Input--text input-text" type="password" name="password" id="password" autocomplete="current-password" />
              </p>

              <?php do_action('woocommerce_login_form'); ?>

              <p class="form-row">
                <label class="woocommerce-form__label woocommerce-form__label-for-checkbox woocommerce-form-login__rememberme">
                  <input class="woocommerce-form__input woocommerce-form__input-checkbox" name="rememberme" type="checkbox" id="rememberme" value="forever" /> <span><?php esc_html_e('Remember me', 'woocommerce'); ?></span>
                </label>
                </p>
              <p class="woocommerce-LostPassword lost_password">
                <a href="<?php echo esc_url(wp_lostpassword_url()); ?>"><?php esc_html_e('Passwort vergessen?', 'woocommerce'); ?></a>
              </p>
              <p>
              <?php wp_nonce_field('woocommerce-login', 'woocommerce-login-nonce'); ?>
              <button type="submit" class="woocommerce-button button woocommerce-form-login__submit registerbtn" name="login" value="<?php esc_attr_e('Log in', 'woocommerce'); ?>"><?php esc_html_e('Log in', 'woocommerce'); ?></button>
              </p><br></br>
              <br></br>
              <p> <a id="switch1" href="https://fair-hand.com/register">Noch keinen Account? Hier anmelden!</a></p>

              <?php do_action('woocommerce_login_form_end'); ?>

            </form>
          </div>
        </div>
      </div>

    </div>
  </body>

  <?php do_action('woocommerce_after_customer_login_form'); ?>
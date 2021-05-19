<?php
/**
 * My Account Dashboard
 *
 * Shows the first intro screen on the account dashboard.
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/myaccount/dashboard.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see     https://docs.woocommerce.com/document/template-structure/
 * @package WooCommerce\Templates
 * @version 4.4.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

$allowed_html = array(
	'a' => array(
		'href' => array(),
	),
);

?>

<?php
global $current_user;
get_currentuserinfo(); 

$user_info = get_user_meta($current_user->ID);


?>
<meta content="width=device-width, initial-scale=1" name="viewport" />

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>

<style>

.first_login {
    border: 3px solid #c60967;
    color: #656668;
    float: left;
    font-size: 30px;
    font-weight: bold;
    padding: 20px 40px;
    -webkit-border-radius: 5px;
    border-radius: 5px;
    position: relative;
    behavior: url(/css/ie-css3.htc);
}
a {
    outline: none;
}

a:hover{
	text-decoration:none !important;
	color:#c60967;
}


/* .dsh_wrap{min-height:10vh;margin: 20px 10px 20px 0px;;} */
.dsh_para{font-size:30px;}
/* <style> */
.prods{
	margin-bottom:30px;
}
  .myacc-wrap{
    /* margin:10px; */
  }
  .myacc{
    margin:100px;
  }
.entry-header{
	display:none;
}
    .myacc-img{
      display:flex;
      align-items:flex-start;
      justify-content:flex-start;
    }
    .myacc-img img{
      width:50%;
    }
    .myacc-txt h2{
      font-size:30px;
    }
    .myacc-txt p{
      font-size:25px;
	  margin:0px;
    }


	@media screen and (min-width: 1550px){
		.entry-content{
			display:flex;
			align-items:center;
			justify-content:center;
			height:calc(100vh - 300px);
		}

		.woocommerce{
			max-width:1540px;
		}
	}
</style>
<div class="dsh_wrap">
	<p class="dsh_para" >
		<?php
		printf(
			/* translators: 1: user display name 2: logout url */
			wp_kses( __( 'Hello %1$s ', 'woocommerce' ), $allowed_html ),
			'<strong>' . esc_html( $current_user->first_name ) . '</strong>',
			esc_url( wc_logout_url() )
		);
		?>
	</p>
	<a class="first_login" href="https://fair-hand.com/inserat-hochladen">
				<div>
					<span>Jetzt inserieren!</span>
				</div>
	</a>

	</div>

<?php
	/**
	 * My Account dashboard.
	 *
	 * @since 2.6.0
	 */
	do_action( 'woocommerce_account_dashboard' );

	/**
	 * Deprecated woocommerce_before_my_account action.
	 *
	 * @deprecated 2.6.0
	 */
	do_action( 'woocommerce_before_my_account' );

	/**
	 * Deprecated woocommerce_after_my_account action.
	 *
	 * @deprecated 2.6.0
	 */
	do_action( 'woocommerce_after_my_account' );

/* Omit closing PHP tag at the end of PHP files to avoid "headers already sent" issues. */
?>

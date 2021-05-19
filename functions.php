<?php
/**
 * fair_hand functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package fair_hand
 */

if ( ! defined( '_S_VERSION' ) ) {
	// Replace the version number of the theme on each release.
	define( '_S_VERSION', '1.0.0' );
}

if ( ! function_exists( 'fair_hand_setup' ) ) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function fair_hand_setup() {
		/*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on fair_hand, use a find and replace
		 * to change 'fair_hand' to the name of your theme in all the template files.
		 */
		load_theme_textdomain( 'fair_hand', get_template_directory() . '/languages' );

		// Add default posts and comments RSS feed links to head.
		add_theme_support( 'automatic-feed-links' );

		/*
		 * Let WordPress manage the document title.
		 * By adding theme support, we declare that this theme does not use a
		 * hard-coded <title> tag in the document head, and expect WordPress to
		 * provide it for us.
		 */
		add_theme_support( 'title-tag' );

		/*
		 * Enable support for Post Thumbnails on posts and pages.
		 *
		 * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
		 */
		add_theme_support( 'post-thumbnails' );

		// This theme uses wp_nav_menu() in one location.
		register_nav_menus(
			array(
				'menu-1' => esc_html__( 'Primary', 'fair_hand' ),
			)
		);

		/*
		 * Switch default core markup for search form, comment form, and comments
		 * to output valid HTML5.
		 */
		add_theme_support(
			'html5',
			array(
				'search-form',
				'comment-form',
				'comment-list',
				'gallery',
				'caption',
				'style',
				'script',
			)
		);

		// Set up the WordPress core custom background feature.
		add_theme_support(
			'custom-background',
			apply_filters(
				'fair_hand_custom_background_args',
				array(
					'default-color' => 'ffffff',
					'default-image' => '',
				)
			)
		);

		// Add theme support for selective refresh for widgets.
		add_theme_support( 'customize-selective-refresh-widgets' );

		/**
		 * Add support for core custom logo.
		 *
		 * @link https://codex.wordpress.org/Theme_Logo
		 */
		add_theme_support(
			'custom-logo',
			array(
				'height'      => 250,
				'width'       => 250,
				'flex-width'  => true,
				'flex-height' => true,
			)
		);
	}
endif;
add_action( 'after_setup_theme', 'fair_hand_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function fair_hand_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'fair_hand_content_width', 640 );
}
add_action( 'after_setup_theme', 'fair_hand_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function fair_hand_widgets_init() {
	register_sidebar(
		array(
			'name'          => esc_html__( 'Sidebar', 'fair_hand' ),
			'id'            => 'sidebar-1',
			'description'   => esc_html__( 'Add widgets here.', 'fair_hand' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);
}
add_action( 'widgets_init', 'fair_hand_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function fair_hand_scripts() {
	wp_enqueue_style( 'fair_hand-style', get_stylesheet_uri(), array(), _S_VERSION );
	wp_style_add_data( 'fair_hand-style', 'rtl', 'replace' );

	wp_enqueue_script( 'fair_hand-navigation', get_template_directory_uri() . '/js/navigation.js', array(), _S_VERSION, true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'fair_hand_scripts' );

/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Functions which enhance the theme by hooking into WordPress.
 */
require get_template_directory() . '/inc/template-functions.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
if ( defined( 'JETPACK__VERSION' ) ) {
	require get_template_directory() . '/inc/jetpack.php';
}
function mytheme_add_woocommerce_support() {
add_theme_support( 'woocommerce' );
}
add_action( 'after_setup_theme', 'mytheme_add_woocommerce_support' );



/**
 * To add WooCommerce registration form custom fields.
 */

function text_domain_woo_reg_form_fields() {
    ?>
	
    <p class="form-row-first first-name">
        <label for="billing_first_name"><?php _e('Vorname', 'text_domain'); ?><span class="required">*</span></label>
        <input type="text" class="input-text" name="billing_first_name" id="billing_first_name" value="<?php if (!empty($_POST['billing_first_name'])) esc_attr_e($_POST['billing_first_name']); ?>" />
    </p>
    <p class="form-row-last last-name">
        <label for="billing_last_name"><?php _e('Nachname', 'text_domain'); ?><span class="required">*</span></label>
        <input type="text" class="input-text" name="billing_last_name" id="billing_last_name" value="<?php if (!empty($_POST['billing_last_name'])) esc_attr_e($_POST['billing_last_name']); ?>" />
    </p>
     <!-- <p class="form-row-last phone-no">
        <label for="billing_phone_no"><?php _e('Phone number', 'text_domain'); ?><span class="required">*</span></label>
        <input type="number" class="input-text" name="billing_phone_no" id="billing_phone_no" value="<?php if (!empty($_POST['billing_phone_no'])) esc_attr_e($_POST['billing_phone_no']); ?>" />
    </p> -->
     <p class="form-row-last company-name">
        <label for="billing_company_name"><?php _e('Unternehmen', 'text_domain'); ?></label>
        <input type="text" class="input-text" name="billing_company_name" id="billing_company_name" value="<?php if (!empty($_POST['billing_company_name'])) esc_attr_e($_POST['billing_company_name']); ?>" />
    </p>

<p class="form-row-last post-code">
        <label for="billing_postcode"><?php _e('Adresse', 'text_domain'); ?><span class="required">*</span></label>
        <input type="text" class="input-text" name="billing_postcode" id="billing_postcode" value="<?php if (!empty($_POST['billing_postcode'])) esc_attr_e($_POST['billing_postcode']); ?>" />
    </p>
    <div class="radio-btn">
	<!-- <label for="radio-btn">Choose one:</label> -->
	<p class="form-row form-row-last radio-btn" >
        <label for="billing_radio"><?php _e('Ich verleihe als Unternehmen', 'text_domain'); ?><span class="required">*</span></label>
        <input type="radio" class="input-text radio-input-text company" name="billing_radio" id="billing_radio" value="Ich verleihe als Unternehmen" />
		<label for="billing_radio"><?php _e('Ich verleihe privat', 'text_domain'); ?><span class="required">*</span></label>
		<input type="radio" class="input-text radio-input-text private" name="billing_radio" id="billing_radio" value="Ich verleihe privat" />
   
    </p>
	</div>
    <div class="clear"></div>
	
    <?php
}

add_action('woocommerce_register_form', 'text_domain_woo_reg_form_fields');



/**
 * To save WooCommerce registration form custom fields.
 */
function text_domain_woo_save_reg_form_fields($customer_id) {
    //First name field
    if (isset($_POST['billing_first_name'])) {
        update_user_meta($customer_id, 'first_name', sanitize_text_field($_POST['billing_first_name']));
        update_user_meta($customer_id, 'billing_first_name', sanitize_text_field($_POST['billing_first_name']));
    }
    //Last name field
    if (isset($_POST['billing_last_name'])) {
        update_user_meta($customer_id, 'last_name', sanitize_text_field($_POST['billing_last_name']));
        update_user_meta($customer_id, 'billing_last_name', sanitize_text_field($_POST['billing_last_name']));
    }
  //phone no field
    if (isset($_POST['billing_phone_no'])) {
        update_user_meta($customer_id, 'phone_no', sanitize_text_field($_POST['billing_phone_no']));
        update_user_meta($customer_id, 'billing_phone_no', sanitize_text_field($_POST['billing_phone_no']));
    }
  //company name
//   if (isset($_POST['billing_company_name'])) {
//         update_user_meta($customer_id, 'company_name', sanitize_text_field($_POST['billing_company_name']));
//         update_user_meta($customer_id, 'billing_company_name', sanitize_text_field($_POST['billing_company_name']));
//     }
  
  if (isset($_POST['billing_postcode'])) {
        update_user_meta($customer_id, 'zip_code', sanitize_text_field($_POST['billing_postcode']));
        update_user_meta($customer_id, 'billing_postcode', sanitize_text_field($_POST['billing_postcode']));
    }
	if (isset($_POST['billing_radio'])) {
        update_user_meta($customer_id, 'radio_btns', sanitize_text_field($_POST['billing_radio']));
        update_user_meta($customer_id, 'billing_radio', sanitize_text_field($_POST['billing_radio']));
    }

	if (isset($_POST['company'])) {
        update_user_meta($customer_id, 'company', sanitize_text_field($_POST['company']));
        update_user_meta($customer_id, 'company', sanitize_text_field($_POST['company']));
    }

}

   
       
   
add_action('woocommerce_created_customer', 'text_domain_woo_save_reg_form_fields');
function register_my_menus() {
  register_nav_menus(
    array(
      'footer-menu-one' => __( 'Footer Menu one' ),
      'footer-menu-mobile' => __( 'Footer Menu Mobile' ),
	  'primary-signin'=> __( 'primary on signin' ),

  	)
  );
}



$customer_id =get_currentuserinfo(); 
$key = 'billing_radio'; 
$single = true; 
$customer_type = get_user_meta( $customer_id, $key, $single ); 

add_filter( 'woocommerce_registration_auth_new_customer', '__return_false' );

function my_account_menu_order() {

	
		$menuOrder = array(
			'dashboard' => __( 'Dashboard', 'woocommerce'),
			'orders' => __( 'My Orders', 'woocommerce' ),			
			// 'edit-address' => __( 'Addresses', 'woocommerce' ),
			'edit-account' => __( 'Account Details', 'woocommerce' ),
			'upload-product'=>__( 'Upload Product', 'woocommerce'),
			'my-product'=>__( 'View Product', 'woocommerce'),
			 'notification'=>__( 'Notification', 'woocommerce'),
			'customer-logout' => __( 'Logout', 'woocommerce')	
	   );
	  return $menuOrder;

	
}
add_filter ( 'woocommerce_account_menu_items', 'my_account_menu_order');



function has_bought_items() {
    $bought = false;

    // Set HERE ine the array your specific target product IDs
    $prod_arr =  array( '308', '309','310','311');


    // Get all customer orders
    $customer_orders = get_posts( array(
        'numberposts' => -1,
        'meta_key'    => '_customer_user',
        'meta_value'  => get_current_user_id(),
        'post_type'   => 'shop_order', // WC orders post type
        'post_status' => 'wc-completed' // Only orders with status "completed"
    ) );
	// print_r($customer_orders);
	// echo get_current_user_id();
	// exit;
    foreach ( $customer_orders as $customer_order ) {
        // Updated compatibility with WooCommerce 3+
        $order_id = method_exists( $order, 'get_id' ) ? $order->get_id() : $order->id;
        $order = wc_get_order( $customer_order );

        // Iterating through each current customer products bought in the order
        foreach ($order->get_items() as $item) {
            // WC 3+ compatibility
            if ( version_compare( WC_VERSION, '3.0', '<' ) ) 
                $product_id = $item['product_id'];				
            else
                $product_id = $item->get_product_id();
			// print_r($item);
			// exit;
			if  ($product_id==308 || $product_id==311){				
				if(date('Y-m-d') <= date("Y-m-d", strtotime("+1 month", strtotime($customer_order->post_date))) ){
				
					$bought = true;
				}
				
			}
			else if ($product_id==309 || $product_id==310){	
				
				if(date('Y-m-d') <= date("Y-m-d", strtotime("+1 year", strtotime($customer_order->post_date))) ){
					$bought = true;
				}
			}
            // Your condition related to your 2 specific products Ids
            // if ( in_array( $product_id, $prod_arr ) ) 
            //     $bought = true;
        }
    }
    // return "true" if one the specifics products have been bought before by customer
    return $bought;
}


add_action( 'woocommerce_thankyou', 'custom_woocommerce_auto_complete_order' );
function custom_woocommerce_auto_complete_order( $order_id ) { 
    if ( ! $order_id ) {
        return;
    }
    $order = wc_get_order( $order_id );
    $order->update_status( 'completed' );
}	
// $product = wc_get_product($id);

// $product->delete();



add_filter( 'woocommerce_checkout_fields' , 'njengah_simplify_checkout_virtual' );

function njengah_simplify_checkout_virtual( $fields ) {

   $only_virtual = true;

   foreach( WC()->cart->get_cart() as $cart_item_key => $cart_item ) {

      // Check if there are non-virtual products
      if ( ! $cart_item['data']->is_virtual() ) $only_virtual = false;  
   }

    if( $only_virtual ) {

       unset($fields['billing']['billing_company']);

       unset($fields['billing']['billing_address_1']);

       unset($fields['billing']['billing_address_2']);

       unset($fields['billing']['billing_city']);

       unset($fields['billing']['billing_postcode']);

       unset($fields['billing']['billing_country']);

       unset($fields['billing']['billing_state']);

       unset($fields['billing']['billing_phone']);

       add_filter( 'woocommerce_enable_order_notes_field', '__return_false' );

     }
     return $fields;

}

// Add the custom field "favorite_color"
add_action( 'woocommerce_edit_account_form', 'add_favorite_color_to_edit_account_form' );
function add_favorite_color_to_edit_account_form() {
    $user = wp_get_current_user();
    ?>
        <p class="woocommerce-form-row woocommerce-form-row--wide form-row form-row-wide">
        <label for="address"><?php _e( 'Adresszusatz*', 'woocommerce' ); ?></label>
        <input type="text" class="woocommerce-Input woocommerce-Input--text input-text" name="address" id="address" value="<?php echo esc_attr( $user->address ); ?>" />
    </p>
	<p class="woocommerce-form-row woocommerce-form-row--wide form-row form-row-wide">
        <label for="plz"><?php _e( 'PLZ*', 'woocommerce' ); ?></label>
        <input type="text" class="woocommerce-Input woocommerce-Input--text input-text" name="plz" id="plz" value="<?php echo esc_attr( $user->plz ); ?>" />
    </p>
	<p class="woocommerce-form-row woocommerce-form-row--wide form-row form-row-wide">
        <label for="ort"><?php _e( 'ORT*', 'woocommerce' ); ?></label>
        <input type="text" class="woocommerce-Input woocommerce-Input--text input-text" name="ort" id="ort" value="<?php echo esc_attr( $user->ort ); ?>" />
    </p>
	<p class="woocommerce-form-row woocommerce-form-row--wide form-row form-row-wide">
        <label for="phn"><?php _e( 'Mobil-Nummer:*', 'woocommerce' ); ?></label>
        <input type="tel" class="woocommerce-Input woocommerce-Input--text input-text" name="phn" id="phn" value="<?php echo esc_attr( $user->phn ); ?>" />
    </p>
	
    <?php
}

// Save the custom field 'favorite_color' 
add_action( 'woocommerce_save_account_details', 'save_favorite_color_account_details', 12, 1 );
function save_favorite_color_account_details( $user_id ) {
    // For Favorite color
    if( isset( $_POST['address'] ) )
        update_user_meta( $user_id, 'favorite_color', sanitize_text_field( $_POST['address'] ) );
	if( isset( $_POST['plz'] ) )
        update_user_meta( $user_id, 'favorite_color', sanitize_text_field( $_POST['address'] ) );
		if( isset( $_POST['ort'] ) )
        update_user_meta( $user_id, 'favorite_color', sanitize_text_field( $_POST['address'] ) );
		if( isset( $_POST['phn'] ) )
        update_user_meta( $user_id, 'favorite_color', sanitize_text_field( $_POST['address'] ) );
		
        

    

 if( isset( $_POST['account_email'] ) )
        update_user_meta( $user_id, 'billing_email', sanitize_text_field( $_POST['account_email'] ) );
}



// function my_handle_attachment($file_handler,$post_id,$set_thu=false) {
// 	if ($_FILES[$file_handler]['error'] !== UPLOAD_ERR_OK) __return_false();
  
// 	require_once(ABSPATH . "wp-admin" . '/includes/image.php');
// 	require_once(ABSPATH . "wp-admin" . '/includes/file.php');
// 	require_once(ABSPATH . "wp-admin" . '/includes/media.php');
  
// 	$attach_id = media_handle_upload( $file_handler, $post_id );
  
// 	if ( is_numeric( $attach_id ) ) {
  
// 	  update_post_meta( $post_id, '_product_image_gallery', $attach_id );
  
// 	}
// 	return $attach_id;  
//   }

//THE BELOW CODE IS USED TO FORMAT THE EMAIL BODY TAG

function wpse27856_set_content_type(){
    return "text/html";
}
add_filter( 'wp_mail_content_type','wpse27856_set_content_type' );


add_filter( 'woocommerce_add_cart_item_data', 'woo_custom_add_to_cart' );
function woo_custom_add_to_cart( $cart_item_data ) {
    global $woocommerce;
    $woocommerce->cart->empty_cart();
    // Do nothing with the data and return
    return $cart_item_data;
}

function get_cancel_order_url( $redirect = '' ) {
    return apply_filters(
      'woocommerce_get_cancel_order_url',
      wp_nonce_url(
        add_query_arg(
          array(
            'cancel_order' => 'true',
            'order'        => $this->get_order_key(),
            'order_id'     => $this->get_id(),
            'redirect'     => $redirect,
          ),
          $this->get_cancel_endpoint()
        ),
        'woocommerce-cancel_order'
      )
    );
  }
// pagination code

add_filter( 'woocommerce_valid_order_statuses_for_cancel', 'filter_valid_order_statuses_for_cancel', 20, 2 );
function filter_valid_order_statuses_for_cancel( $statuses, $order = '' ){

    // Set HERE the order statuses where you want the cancel button to appear
    $custom_statuses    = array( 'pending', 'processing', 'on-hold', 'failed' );

    // Set HERE the delay (in days)
    $duration = 3; // 3 days

    // UPDATE: Get the order ID and the WC_Order object
    if( ! is_object( $order ) && isset($_GET['order_id']) )
        $order = wc_get_order( absint( $_GET['order_id'] ) );

    $delay = $duration*24*60*60; // (duration in seconds)
    $date_created_time  = strtotime($order->get_date_created()); // Creation date time stamp
    $date_modified_time = strtotime($order->get_date_modified()); // Modified date time stamp
    $now = strtotime("now"); // Now  time stamp

    // Using Creation date time stamp
    if ( ( $date_created_time + $delay ) >= $now ) return $custom_statuses;
    else return $statuses;
}


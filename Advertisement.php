<?php
/* Template Name: Advertisement*/

?>
<?php get_header(); ?>
<?
global $current_user;
get_currentuserinfo();
$user_info = get_user_meta($current_user->ID);
$total_products = count(get_posts(array('post_type' => 'product', 'post_status' => 'publish', 'fields' => 'ids', 'posts_per_page' => '-1', 'author' => $current_user->ID)));

?>
<meta content="width=device-width, initial-scale=1" name="viewport" />
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
<style>
  .Ad-container {
    display: flex;
    flex-direction: row;

  }

  .left-container {
    width: 30%;
    float: left;
  }

  .Ad-right {
    width: 70%;
    float: right;
    margin: 30px;
  }

  .prods {
    margin-bottom: 30px;
    border: 1px solid #C60967;
    width: 100%;
    margin-left: 0px;
    height: 140px;
  }

  myacc-img {
    /* display: flex; */
    /* align-items: flex-start; */
    /* justify-content: flex-start; */
    width: 232px;
    height: 130px;
  }

  .myacc-wrap {
    /* margin:10px; */
  }

  .entry-header {
    display: none;
  }

  .myprodimg {
    width: 232px;
    height: 130px;
  }
  .myprod-icons{width:20%}
    .myacc-txt{display: flex;
    flex-direction: row;}
  .myacc-txt h2 {
    font-size: 30px;
  }

  .myacc-txt p {
    font-size: 25px;
    margin: 0px;
  }

  .box-text {
    background-color: #fff;
    width: 100%;
    border: 2px solid #c60967;
    padding: 50px;
    margin-bottom: 20px;

  }
  .prod-left{
    width: 70%;
    margin-top:20px
  }
  .prod-right{
    width: 30%;
    margin-top:20px;
  }
  button.delete-button {
    width: 150px;
    color: #C60967;
    margin: 10px 0;    
    background: white;
    border-radius: 8px;
    border: 1px solid #C60967;
}

  @media screen and (min-width: 1550px) {
    .ad-wrapper {
      display: flex;
      align-items: center;
      justify-content: center;

    }

    .Ad-container {
      max-width: 1535px;
    }
  }

  @media screen and (max-width: 960px) {
    .myacc-txt h5{font-size: 15px;
    color:#C60967;}
    .Ad-container {
      flex-direction: column;
    }

    .left-container {
      width: 100%;
    }

    .Ad-right {
      width: 80%;
    }
  }
  @media screen and (max-width: 590px) {
    .myacc-img{height: 130px;
    width: 130px;
  }
    .myacc-txt{
      width: calc(100% - 130px);
      display: flex;
      flex-direction: column;
    font-size: 12px;
  }
    .myacc-txt h5{
      font-size: 12px;
    color:#C60967;
  }
    .myprodimg{
      width: 130px;
    height: 130px;}
    .fa{
      font-size: 12px !important;}
    .myacc-txt p{
      font-size: 12px;
    }
    .myprod-icons{
    display: flex;
    justify-content: flex-start;
    flex-direction:column;}
    .prod-left{
      margin-top:0px;
    }
    button.delete-button {
    margin: 0 0 10px 0 !important;
    width: 100px;
}
  }
</style>
<div class="ad-wrapper">
  <div class="Ad-container">
    <div class="left-container">
      <?php include_once('menu-navigation.php'); ?>
    </div>
    <div class="Ad-right">

      <h1 class="dsh_para">
        <?php
        printf(
          /* translators: 1: user display name 2: logout url */
          wp_kses(__('Hello %1$s ', 'woocommerce'), $allowed_html),
          '<strong>' . esc_html($current_user->first_name) . '</strong>',
          esc_url(wc_logout_url())
        );
        ?>
      </h1>
      <div class="total-product">Bereits eingestellte Inserate:<?php echo $total_products; ?></div>
      <div class="box-text">
        <h3>Herzlich willkommen bei fair-hand.com</h3>
        <p>Herzlich willkommen bei fair-hand.com Gerne können Sie uns telefonisch unter 040-244249-304 oder per Email an info@fair-hand.com bezüglich Ihrer präsenz auf fair-hand.com kontakieren. Wir beraten Sie gerne!</p>


      </div>



      <?php

      if (isset($_GET['error-flag']) && $_GET['error-flag'] == 1) {
        echo '<script type="text/javascript">alert("Das Produkt konnte nicht gelöscht werden");</script>';
      } else if (isset($_GET['error-flag']) && $_GET['error-flag'] == 0) {
        echo '<script type="text/javascript">alert("Das Produkt wurde erfolgreich gelöscht.");</script>';
      }
      ?>
      <?php

      $args = array('post_type' => 'product', 'author' =>  $current_user->ID, 'posts_per_page' => -1, 'product_cat' => $_GET['category'], 'orderby' => 'rand');

      $loop = new WP_Query($args);

      while ($loop->have_posts()) : $loop->the_post();
        global $product;
        $City = get_post_meta($loop->post->ID, "_product_attributes");


        $image = wp_get_attachment_image_src(get_post_thumbnail_id($loop->post->ID), 'single-post-thumbnail');
        // print_r($product);  
      ?>



        <div class="row prods">

          <div class="col-sm-4 myacc-img">
            <img class="myprodimg" src="<?php echo $image[0]; ?>" data-id="<?php echo $loop->post->ID; ?>" alt="fair hand">
          </div>
          <div class="col-sm-8 myacc-txt">
           <div class="prod-left">

            <h5>
              <?php echo $product->name; ?>
            </h5>
            <!-- <h4><?php echo $product->name; ?></h4> -->
            <p> <?php echo $product->price; ?> €</p>

            <div>
              <div class="locationName"><i class="fa fa-map-marker" style="font-size:30px;color:#C60967"></i><?php print_r($City[0]["options"]["Cities"]); ?></div>
            </div>
    </div>
    <div class="prod-right">
            <div class="myprod-icons">
            <a href="https://fair-hand.com/editieren" style="text-decoration:none;color:#C60967;">Editieren</a>
            <!-- <a href="/delete-product?id=<? echo $loop->post->ID ?>">
              <i class="fa fa-trash" style="font-size:20px;color:#C60967;float:right;margin-right:20px;" aria-hidden="true"></i>
            </a> -->  
                  
            <form  method="post">
              <button type="submit" name="<?php echo $product->get_slug(); ?>" class="delete-button" >Entfernen<i class="fa fa-trash" style="font-size:20px;color:#C60967" aria-hidden="true"></i></button>
            </form>
            <?php
                $myprdname = $product->get_slug();            
                $myid=$product->get_id();            
                if(isset($_POST[$myprdname])) {                 
                      $count=0;
                      $product = wc_get_product($myid);                      
                      if(empty($product))
                      $count=0;
                      // If we're forcing, then delete permanently.                        
                      $product->delete();
                      $result = 'trash' === $product->get_status();                     
                      if (!$result)
                      {
                        $count=0;
                      }
                      $count=1;                  
                    // $id=$_GET['id'];
                    $res=$count;
                    if(!$res){
                      echo "<script type='text/javascript'>alert('Das Produkt konnte nicht gelöscht werden');  
                      window.location.href = 'https://fair-hand.com/objekte';                                        
                      </script>";
                    }
                    else{
                      {
                        echo "<script type='text/javascript'>alert('Das Produkt wurde erfolgreich gelöscht.');  
                        window.location.href = 'https://fair-hand.com/objekte';                                              
                        </script>";
                      }
                    } 
                  } 
                  else  if(isset($_POST["delete-all"])) {                 
                    $count=0;
                    $product = wc_get_product($myid);                      
                    if(empty($product))
                    $count=0;
                    // If we're forcing, then delete permanently.                        
                    $product->delete();
                    $result = 'trash' === $product->get_status();                     
                    if (!$result)
                    {
                      $count=0;
                    }
                    $count=1;                  
                  // $id=$_GET['id'];
                  $res=$count;
                  if(!$res){
                    echo "<script type='text/javascript'>alert('Das Produkt konnte nicht gelöscht werden');  
                    window.location.href = 'https://fair-hand.com/objekte';                                        
                    </script>";
                  }
                  else{
                    {
                      echo "<script type='text/javascript'>alert('Die Produkte wurden erfolgreich gelöscht.');  
                      window.location.href = 'https://fair-hand.com/objekte';                                              
                      </script>";
                    }
                  } 
                }   
            ?>  
          </div>
    </div>
          </div>
          
        </div>

       
      <?php endwhile; ?>
      <?php if ($loop->have_posts()) {?>
        <form  method="post">
              <button type="submit" name="delete-all" class="delete-button" style="width:200px">Alles Entfernen<i class="fa fa-trash" style="font-size:20px;color:#C60967" aria-hidden="true"></i></button>
        </form>
      <?php } ?>
    </div>
    </p>
    <p>
      <?php
      /* translators: 1: Orders URL 2: Address URL 3: Account URL. */
      // $dashboard_desc = __( 'From your account dashboard you can view your <a href="%1$s">recent orders</a>, manage your <a href="%2$s">billing address</a>, and <a href="%3$s">edit your password and account details</a>.', 'woocommerce' );
      // if ( wc_shipping_enabled() ) {
      // 	/* translators: 1: Orders URL 2: Addresses URL 3: Account URL. */
      // 	$dashboard_desc = __( 'From your account dashboard you can view your <a href="%1$s">recent orders</a>, manage your <a href="%2$s">shipping and billing addresses</a>, and <a href="%3$s">edit your password and account details</a>.', 'woocommerce' );
      // }
      printf(
        wp_kses($dashboard_desc, $allowed_html),
        esc_url(wc_get_endpoint_url('orders')),
        esc_url(wc_get_endpoint_url('edit-address')),
        esc_url(wc_get_endpoint_url('edit-account'))
      );
      ?>
    </p>
  </div>
  <div>
    <!-- <a class="first_login" href="">
              <div>
                <span>Jetzt inserieren!</span>
              </div>
</a> -->
  </div>
</div>
</div>
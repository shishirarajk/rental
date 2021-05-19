<?php /* Template Name: View Profile */ ?>
<?php
global $current_user;
get_currentuserinfo(); 

$user_info = get_user_meta($current_user->ID);


?>
<?php get_header(); ?> 


<meta content="width=device-width, initial-scale=1" name="viewport" />
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
<style>

  .myacc-wrap{
    margin:10px;
  }
  .myacc{
    margin:100px;
  }
  .owner-mail{
    height: 56px;
    width: 164px;
    border-radius: 8px;
    background: linear-gradient(134.05deg, #C60967 0%, #603 100%) !important;
  }
  .myacc-img,.myacc-txt{
    max-width: 35em !important;
    margin: 5rem auto 2rem;
    display: flex;
    flex-direction: column;
    justify-content: center;
    min-height: 60vh;
  }

    .myacc-img{
      display:flex;
      align-items:center;
      justify-content:center;
    }
    .myacc-img img{
      width:50%;
    }
    .myacc-img h1{
      font-size:30px;
    }
    .myacc-img h3{
      font-size:25px;
    }
</style> 

<div class="myacc">
<div class="myacc-wrap">
  <div class="row cust_info">
   
    <div class="col-sm-4">
      <h1>
      <?php 
        echo $current_user-> display_name;

        ?></h1>
      <p><?php echo do_shortcode('[contact-form-7 id="237" title="Untitled"]') ?></p>
                </div>
                <h1>Meine Inserate</h1>
  </div>
  <?php   
      
        $args = array( 'post_type' => 'product','author' =>  $current_user->ID, 'posts_per_page' => -1, 'product_cat' =>$_GET['category'], 'orderby' => 'rand' );       
        $loop = new WP_Query( $args );
       
        while ( $loop->have_posts() ) : $loop->the_post(); global $product;
        $City = get_post_meta($loop->post->ID,"_product_attributes");
       
  		$image = wp_get_attachment_image_src( get_post_thumbnail_id( $loop->post->ID ), 'single-post-thumbnail' );
      
    ?>
    <div class="row prods">     
        <div class="col-sm-4 myacc-img">
          <img src= "<?php  echo $image[0]; ?>" data-id="<?php echo $loop->post->ID; ?>" alt="fair hand">
        </div>
        <div class="col-sm-8 myacc-txt">
              <h2>
                  <?php echo $product->name; ?>
              </h2>
              <!-- <h4><?php echo $product->name; ?></h4> -->
              <h3> <?php echo $product->price; ?> €</h3>
              <h3> <?php echo $product->description; ?> </h3>
              <h3> <?php print_r( $City[0]["options"]["Cities"] )?> </h3>      
        
        </div>
      </div>
<?php endwhile; ?>   
</div>
</div>

  		

<?php get_footer();?>    




                       
                           


    
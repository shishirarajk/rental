<?php /* Template Name: City */?>
<?php 


$args = array(
  'taxonomy'     => $taxonomy,
  'orderby'      => $orderby,
  'show_count'   => $show_count,
  'pad_counts'   => $pad_counts,
  'hierarchical' => $hierarchical,
  'title_li'     => $title,
  'hide-btn_empty'   => $empty
);


$all_categories = get_categories($args);
if(isset($_GET['city'])){
  $Cityname=$_GET['city']; 
  }


  ?>
<?php get_header(); ?>
<style>
  .cities{columns:3;
  margin-top:30px;
  display: flex;
  justify-content: center;
  align-items: center;

  }
  .cities-wrap{
    columns:3;
    width: 80%;
    margin-bottom:50px;

  }
  .city-list{Text-decoration:none;
  color:#000;
  font-size:17px;}
  .city-list:hover{Text-decoration:none;
  color:#000;}


li.alphabets {
    color: #C60967;
    font-size: 3em;
    /* position: absolute; */
    /* left: 0; */
    /* top: -3px; */
    line-height: 1;
    position: relative;
    /* padding: 10px 0px 0 0; */
    /* margin: 0 20px 0 0; */
    left: -50px;
    top: 50px;
}
  @media screen and (max-width:885px){
    .cities-wrap{
    columns:2;
    

  }
  }
  @media screen and (max-width:700px) {
    .cities{columns: 2;}
    .city-list{Text-decoration:none;
  color:#000;
  font-size:13px;}
  ul, ol {
    margin: 0 0 1.5em 1em;
}
li.alphabets {
    color: #C60967;
    font-size: 2em;
    left: -27px;
    top: 43px;

}  
  }

  @media screen and (min-width:1460px){
    .cities-wrap{
      width:1400px;
    }
  }
</style>
<div class="cities"  >
<div class="cities-wrap"  >

<ul>
      <?php
    
      
      
      // $args = array('post_type' => 'product', 'posts_per_page' => -1, 'product_cat' => $_GET['category'], 'orderby' => 'rand');
      // $CityArray = array();
      // $loop = new WP_Query($args);
      // while ($loop->have_posts()) : $loop->the_post();
      //   global $product;
      //   $City = get_post_meta($loop->post->ID, "_product_attributes");

      //   if (!in_array($City[0]["options"]["Cities"], $CityArray)) {
        $host_name = 'db5001593531.hosting-data.io';
        $dbUsername="dbu1634689";
        $dbPassword="MDfh-1211";
        $dbName ="dbs1326586";  

          
    $conn = mysqli_connect($host_name,$dbUsername,$dbPassword, $dbName);
                  $query = "SELECT * FROM City";
                  $result = mysqli_query($conn,$query);
                  while($row = mysqli_fetch_array($result))
                  {
                   
                    ?>

    <?php $string = $row["City"];    
    $firstCharacter = $string[0];
    $firstCharacter=strtoupper($firstCharacter);     
    if($next != $firstCharacter){ ?>
      <li class="alphabets"><?php echo $firstCharacter; ?> </li>
  <?php  }
    $next = $firstCharacter;
      // echo $count;
    ?>
    <li>
    <?php $loop = new WP_Query( $args );        
          remove_filter( 'posts_where', 'title_filter', 10 );
         $loop->the_post(); global $product;      
            $City = get_post_meta($loop->post->ID,"_product_attributes"); 		      
            if((isset($Cityname) && $Cityname==$row["City"] || (!isset($Cityname)) || $Cityname=='')){
              ?> <a href="https://fair-hand.com/produktliste?city=<?php echo $row["City"];?> " class="city-list"><?php 
                            echo $row["City"] ;
                  ?></a>
            <?php } 
      
            ?>
                          
    </li>
  
                      <?php 
                }
      // endwhile;
        ?>
         <?php 
        //  $CityArray[] = $City[0]["options"]["Cities"]; 
         ?>
      <?php 
    // endwhile;
     ?> 
     </ul>
     <br>
</div>  
</div>
<?php get_footer(); ?>

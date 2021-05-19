<?php /* Template Name: category */ ?>
<?php
$taxonomy     = 'product_cat';
  $orderby      = 'name';  
  $show_count   = 0;      // 1 for yes, 0 for no
  $pad_counts   = 0;      // 1 for yes, 0 for no
  $hierarchical = 1;      // 1 for yes, 0 for no  
  $title        = '';  
  $empty        = 0;

  $args = array(
         'taxonomy'     => $taxonomy,
         'orderby'      => $orderby,
         'show_count'   => $show_count,
         'pad_counts'   => $pad_counts,
         'hierarchical' => $hierarchical,
         'title_li'     => $title,
         'hide_empty'   => $empty
  );
 $all_categories = get_categories( $args );

 
?>
<?php get_header(); ?>



<style>
 .kategorien{
    display: flex;
    justify-content: center;
    align-items:center;
    overflow-x:hidden;
    margin-bottom:100px;
  }

  #kat_head{color:#C60967;}
.card {
  
  background-size: contain;
  background-repeat: no-repeat;
  font-size:20px;
  color: white;
  padding: 1rem;
  height: 250px;
  border:none;
  width: 400px;
}
  .cate-link{
    text-decoration:none;
    display:flex;
    align-items:center;
    justify-content:center;
    }
  .cate-link:hover{text-decoration:none;}
.cards {
  max-width: 100%;
  margin: 0 auto;
  display: grid;
  grid-gap: 1rem;
 
  
}
.kat_wrapper h1{
  color:#c60967;  
 
}
/* Screen larger than 600px? 2 column */
@media (min-width: 600px) and (max-width:900px) {
  .cards { 
    grid-template-columns: repeat(2, 1fr) !important;
     }
}

/* Screen larger than 900px? 3 columns */
@media (min-width: 900px) {
  .cards { 
    grid-template-columns: repeat(3, 1fr) !important; 
   
    }
    
}
@media (max-width: 600px) {
  .cards { 
    grid-template-columns: repeat(1, 1fr) !important; 
   
    }
}

@media (max-width: 1210px){
      .card{
        width:300px;
      }
}
@media (min-width: 1460px){
  .kategorien{
    display: flex;
    justify-content: center;
    align-items:center;
   
  }
  .kat_wrapper h1{
  
  margin-left:30px;
}
  .kat_wrapper{
    margin:10px 50px 50px 50px;
    width:1460px;
  }
}
</style>
<div class="kategorien">
<div class="kat_wrapper">
<h1>Alle Kategorien</h1>
  <!-- <h1 id="kat_head">Lorem Ipsum Si Dolor</h1>
  <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, 

quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. 
Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
   -->
  <div class="cards" style="margin-top:50px">
  <?php 
  foreach($all_categories as $category){ 
    if($category->category_parent==0 && $category->name!='Uncategorized' && $category->name!='Subscription'){
     
 // get the thumbnail id using the queried category term_id
    $thumbnail_id = get_term_meta( $category->term_id, 'thumbnail_id', true ); 

    // get the image URL
    $image = wp_get_attachment_url( $thumbnail_id );    
    ?>
     <a class="cate-link" href="http://fair-hand.com/subcatergories?subcategory=<?php echo $category->slug;
                                        ?>">
   <div class="card" style="background-image:url(<?php echo $image ?>);">
   <span style="backdrop-filter: brightness(0.5);
    width: 178px;
    text-align: center;">
   <?php echo $category->name;
                                        ?></span>
    
</div>

    </a>
  <?php }}
  ?>
 

</div>
  </div>
</div>
</div>
<?php get_footer() ?>









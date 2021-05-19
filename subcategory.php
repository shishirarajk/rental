<?php /* Template Name: sub-category */ ?>
<?php
$slug= $_GET['subcategory'];
$category = get_term_by( 'slug', $slug, 'product_cat' );
$cat_id = $category->term_id;
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
  .kat_wrapper{margin:10px 50px 50px 50px;overflow-x:hidden;}
  #kat_head{color:#C60967;}
  h3{
    color:#C60967;
  }
a{
  text-decoration:none !important;
}
.listing-categories{
  width: 100%;
    -webkit-column-count: 3;
    -moz-column-count: 3;
    column-count: 3;
    -webkit-column-gap: 40px;
    -moz-column-gap: 40px;
    column-gap: 40px !important;
    margin-bottom:30px;
}
.cat-head-img-in {
    /* padding-bottom: 20px; */
    box-shadow: 0 8px 16px 0 rgb(0 0 0 / 20%);
    border-radius:10px;
    width: 400px;
    margin: 10px;
    height: 350px;
    display:flex;
    align-items:flex-start;
    justify-content:center;
    flex-wrap:wrap;
    flex-direction:row;
    cursor: pointer;
    
}
.card-link a{
  text-decoration:none;
}
a:hover{
  text-decoration: none !important;
  color:#C60967;
}
  .card-link{
    text-decoration:none; 
    margin-left:0px !important;
    -webkit-column-break-inside: avoid;
    page-break-inside: avoid;
    break-inside: avoid;
    padding-bottom:20px;
    }
  .card-link:hover{
    text-decoration:none;
    }
.card-link h2{
  color: #66666a;
    display: block;    
    font-size: 1.2em;
    font-weight: 700;
    padding: 0 0 8px 0;
}

.card-link a{
  text-decoration: none;
    color: #66666a;
    display: block;
}
.cat-head-img{height: auto;
    overflow: hidden;
    display: flex;
   
    justify-content: center;
    margin-bottom:50px;
  }
    .sub-cat-img{
      max-width:100%;
    }
.title-style{
  font-weight: 400;
    font-size: 1.5em;
    float: left;
    margin-top: 25px;
    display: block;
    width: 100%;
    margin-bottom: 25px;
}

.card-content-cat{
  display: flex;
    align-items: flex-start;
    justify-content: flex-start;
    flex-direction: column;
    width: 100%;
    margin: 0 20px;
}
.card-content-cat h4 {
    color: #66666a;
    display: block;
    font-size: 20px;
    font-weight: 700;
    text-decoration:none !important;
}

.card-content-cat .link-card{
    color: #66666a !important;
    display: block !important;
    text-decoration: none !important;
}
/* Screen larger than 600px? 2 column */
@media (min-width: 600px) {
  .cards { grid-template-columns: repeat(1, 1fr); }
}

/* Screen larger than 900px? 3 columns */
@media (min-width: 900px) {
  .cards { grid-template-columns: repeat(1, 1fr); }
}

@media (min-width: 1460px) {
  .sub-category-container{
    display:flex;
    align-items:center;
    justify-content:center;
  }
  .kat_wrapper {
    width: 1388px;
    margin: 0;
    margin-bottom:100px;
}
}

@media (max-width:930px){
    .cat-head-img {
      height: auto;
      overflow: hidden;
      display: flex;
      justify-content: center;
      align-items: center;
      margin-bottom: 50px;
      flex-direction: column;
  }
  .kat_wrapper {
    /* margin: 10px 50px 50px 50px; */
      margin:0 !important;
  }
  .listing-categories {
    column-count:2;
    margin:0 20px 0 20px;
  }
  .description-category{
    margin:0 20px 0 20px;
  }
  .title-style {
    margin:0 20px 0 20px;
  }
}

@media (max-width:459px){
  .listing-categories {
    column-count:1;  
  } 
  .cat-head-img-in {
   
    width: 100%;
  }
 
}
</style>
<div class="sub-category-container">
<div class="kat_wrapper">
<div>
<?php 
if( $category->name=='Baumaschinen')
{


?>
<div>

<div class="cat-head-img">
  <a href="https://fair-hand.com/produktliste?category=mischmaschinen" style="text-decoration:none;">
    <div class="cat-head-img-in">
      <img class="sub-cat-img" src="https://fair-hand.com/wp-content/uploads/2021/03/work-1201545_1920.jpg" alt="faithand">
      <div class="card-content-cat">
        <h4>Mischmaschinen</h4>
        <a class="link-card" href="https://fair-hand.com/produktliste?category=mischmaschinen">Mischmaschinen</a>
      </div>
    </div>
  </a>

  <a href="https://fair-hand.com/produktliste?category=gerust-leiter">
  <div class="cat-head-img-in"><img class="sub-cat-img" src="https://fair-hand.com/wp-content/uploads/2021/03/shutterstock_1406182250.jpg" alt="faithand">
      <div class="card-content-cat">
        <h4>Gerüst/ Leiter</h4>
        <a class="link-card" href="https://fair-hand.com/produktliste?category=gerust-leiter">Gerüst/ Leiter</a>
      </div>
  </div>
  </a>

  <a href="https://fair-hand.com/produktliste?category=hebebuhne-arbeitsbuhnen">
    <div class="cat-head-img-in"><img class="sub-cat-img" src="https://fair-hand.com/wp-content/uploads/2021/03/shutterstock_1106644793.jpg" alt="faithand">
        <div class="card-content-cat">
            <h4>Hebebühne</h4>
            <a class="link-card" href=" https://fair-hand.com/produktliste?category=hebebuhne-arbeitsbuhnen">Hebebühne</a>
        </div>
    </div>
  </a>

  <a href="https://fair-hand.com/produktliste?category=bagger-walzen-raupen">
    <div class="cat-head-img-in"><img class="sub-cat-img" src="https://fair-hand.com/wp-content/uploads/2021/05/last-cat.png" alt="faithand">
        <div class="card-content-cat">
            <h4>Bagger</h4>
            <a class="link-card" href="https://fair-hand.com/produktliste?category=bagger-walzen-raupen">Bagger</a>
        </div>
    </div>
  </a>


</div>

<?php } 
else if( $category->name=='Dienstleistungen')
{

?>
<div class="cat-head-img">
<a href="https://fair-hand.com/produktliste?category=bauunternehmen">
  <div class="cat-head-img-in"><img class="sub-cat-img" src="https://fair-hand.com/wp-content/uploads/2021/03/shutterstock_1116716528-min.png" alt="faithand">
        <div class="card-content-cat">
            <h4>Bauunternehmen</h4>
            <a class="link-card" href="https://fair-hand.com/produktliste?category=bauunternehmen">Bauunternehmen</a>
        </div>
  </div>
</a>

<a href="https://fair-hand.com/produktliste?category=heizungsinstallateure">
<div class="cat-head-img-in"><img class="sub-cat-img" src="https://fair-hand.com/wp-content/uploads/2021/03/shutterstock_1024475122-min.png" alt="faithand">
  <div class="card-content-cat">
            <h4>Heizungsinstallateure</h4>
          <a class="link-card" href="https://fair-hand.com/produktliste?category=heizungsinstallateure">Heizungsinstallateure</a>
      </div>
</div>
</a>

<a href="https://fair-hand.com/produktliste?category=caterer">
<div class="cat-head-img-in"><img class="sub-cat-img" src="https://fair-hand.com/wp-content/uploads/2021/03/shutterstock_575961655-min.png" alt="faithand">
    <div class="card-content-cat">
              <h4>Caterer</h4>
              <a class="link-card" href="https://fair-hand.com/produktliste?category=caterer">Caterer</a>
      </div>
</div>
</a>

<a href="https://fair-hand.com/produktliste?category=bauberater-planer-statiker-landschaftsarchitekten-etc">
<div class="cat-head-img-in"><img class="sub-cat-img" src="https://fair-hand.com/wp-content/uploads/2021/03/shutterstock_197720264-min.png" alt="faithand">
    <div class="card-content-cat">
              <h4>Bauplaner</h4>
              <a class="link-card" href="https://fair-hand.com/produktliste?category=bauberater-planer-statiker-landschaftsarchitekten-etc">Bauplaner</a>
      </div>
</div>
</a>
</div>
<?php }
else if( $category->name=='Events, Messen und Partys')
{
?>
<div class="cat-head-img">
  <a href="https://fair-hand.com/produktliste?category=zeltverleih">
  <div class="cat-head-img-in"><img class="sub-cat-img" src="https://fair-hand.com/wp-content/uploads/2021/05/marquee-419284_1920.png" alt="faithand">
  <div class="card-content-cat">
              <h4>Zeltverleih</h4>
              <a class="link-card" href="https://fair-hand.com/produktliste?category=zeltverleih">Zeltverleih</a>
      </div>
  </div>
  </a>

  <a href="https://fair-hand.com/produktliste?category=partyverleih">
  <div class="cat-head-img-in"><img class="sub-cat-img" src="https://fair-hand.com/wp-content/uploads/2021/05/event-644537_1920.png" alt="faithand">
  <div class="card-content-cat">
              <h4>Partyverleih</h4>
              <a class="link-card" href="https://fair-hand.com/produktliste?category=partyverleih">Partyverleih</a>
      </div>
  </div>
  </a>

  <a href="https://fair-hand.com/produktliste?category=dekoration">
  <div class="cat-head-img-in"><img class="sub-cat-img" src="https://fair-hand.com/wp-content/uploads/2021/05/dinner-1284245_1920.png" alt="faithand">
  <div class="card-content-cat">
              <h4>Dekoration</h4>
              <a class="link-card" href="https://fair-hand.com/produktliste?category=dekoration">Dekoration</a>
      </div>
  </div>
  </a>

  <a href="https://fair-hand.com/produktliste?category=hupfburgen">
  <div class="cat-head-img-in"><img class="sub-cat-img" src="https://fair-hand.com/wp-content/uploads/2021/05/shutterstock_1487306075.png" alt="faithand">
  <div class="card-content-cat">
              <h4>Hüpfburgen</h4>
              <a class="link-card" href="https://fair-hand.com/produktliste?category=hupfburgen">Hüpfburgen</a>
      </div>
  </div>
  </a>
</div>
<?php }
else if( $category->name=='Fahrzeuge')
{


?>
<div class="cat-head-img">
<a href="https://fair-hand.com/produktliste?category=partybus">
<div class="cat-head-img-in"><img class="sub-cat-img" src="https://fair-hand.com/wp-content/uploads/2021/03/party-bus-3272482_1920.jpg" alt="faithand">
<div class="card-content-cat">
              <h4>Partybus</h4>
              <a class="link-card" href="https://fair-hand.com/produktliste?category=partybus">Partybus</a>
      </div>
</div>
</a>

<a href="https://fair-hand.com/produktliste?category=wohnmobile">
<div class="cat-head-img-in"><img class="sub-cat-img" src="https://fair-hand.com/wp-content/uploads/2021/03/caravan-at-needles-4003421_1920.jpg" alt="faithand">
<div class="card-content-cat">
              <h4>Wohnmobile</h4>
              <a class="link-card" href="https://fair-hand.com/produktliste?category=wohnmobile">Wohnmobile</a>
      </div>
</div>
</a>

<a href="https://fair-hand.com/produktliste?category=oldtimer">
<div class="cat-head-img-in"><img class="sub-cat-img" src="https://fair-hand.com/wp-content/uploads/2021/03/auto-788747_1920.jpg" alt="faithand">
<div class="card-content-cat">
              <h4>Oldtimer</h4>
              <a class="link-card" href="https://fair-hand.com/produktliste?category=oldtimer">Oldtimer</a>
      </div>
</div>
</a>

<a href="https://fair-hand.com/produktliste?category=anhanger">
<div class="cat-head-img-in"><img class="sub-cat-img" src="https://fair-hand.com/wp-content/uploads/2021/03/20210312_171412.jpg" alt="faithand">
<div class="card-content-cat">
              <h4>Anhänger</h4>
              <a class="link-card" href="https://fair-hand.com/produktliste?category=anhanger">Anhänger</a>
      </div>
</div>
</a>
</div>
<?php }
else if( $category->name=='Freizeit')
{


?>
<div class="cat-head-img">

<a href="https://fair-hand.com/produktliste?category=wellness">
<div class="cat-head-img-in"><img class="sub-cat-img" src="https://fair-hand.com/wp-content/uploads/2021/03/wellness-285587_1920-min.png" alt="faithand">
<div class="card-content-cat">
              <h4>Wellness</h4>
              <a class="link-card" href="https://fair-hand.com/produktliste?category=wellness">Wellness</a>
      </div>
</div>
</a>

<a href="https://fair-hand.com/produktliste?category=boote-yachten">
<div class="cat-head-img-in"><img class="sub-cat-img" src="https://fair-hand.com/wp-content/uploads/2021/03/sailboat-950352_1920-min.png" alt="faithand">
<div class="card-content-cat">
              <h4>Boote & Yachten</h4>
              <a class="link-card" href="https://fair-hand.com/produktliste?category=boote-yachten">Boote & Yachten</a>
      </div>
</div>
</a>

<a href="https://fair-hand.com/produktliste?category=fahrrader">
<div class="cat-head-img-in"><img class="sub-cat-img" src="https://fair-hand.com/wp-content/uploads/2021/03/cyclists-847896_1920-min.png" alt="faithand">
<div class="card-content-cat">
              <h4>Fahrräder</h4>
              <a class="link-card" href="https://fair-hand.com/produktliste?category=fahrrader">Fahrräder</a>
      </div>
</div>
</a>

<a href="https://fair-hand.com/produktliste?category=kostume">
<div class="cat-head-img-in"><img class="sub-cat-img" src="https://fair-hand.com/wp-content/uploads/2021/03/carnival-476816_1920-min.png" alt="faithand">
<div class="card-content-cat">
              <h4>Kostüme</h4>
              <a class="link-card" href="https://fair-hand.com/produktliste?category=kostume">Kostüme</a>
      </div>

</div>
</a>
</div>
<?php }
else if( $category->name=='Hochzeit')
{


?>
<div class="cat-head-img">
<a href="https://fair-hand.com/produktliste?category=hochzeitsanzuge">
<div class="cat-head-img-in"><img class="sub-cat-img" src="https://fair-hand.com/wp-content/uploads/2021/03/wedding-1031493_1920-min.png" alt="faithand">
    <div class="card-content-cat">
              <h4>Hochzeitsanzüge</h4>
              <a class="link-card" href="https://fair-hand.com/produktliste?category=hochzeitsanzuge">Hochzeitsanzüge</a>
      </div>
</div>
</a>

<a href="https://fair-hand.com/produktliste?category=brautkleider">
<div class="cat-head-img-in"><img class="sub-cat-img" src="https://fair-hand.com/wp-content/uploads/2021/03/people-2595862_1920-min.png" alt="faithand">
<div class="card-content-cat">
              <h4>Brautkleider</h4>
              <a class="link-card" href="https://fair-hand.com/produktliste?category=brautkleider">Brautkleider</a>
      </div>
</div>
</a>

<a href="https://fair-hand.com/produktliste?category=hochzeitsfeier">
<div class="cat-head-img-in"><img class="sub-cat-img" src="https://fair-hand.com/wp-content/uploads/2021/03/dinner-1284245_1920-min.png" alt="faithand">
<div class="card-content-cat">
              <h4>Hochzeitsfeier</h4>
              <a class="link-card" href="https://fair-hand.com/produktliste?category=hochzeitsfeier">Hochzeitsfeier</a>
      </div>
</div>
</a>

<a href="https://fair-hand.com/produktliste?category=hochzeitskutsche">
<div class="cat-head-img-in"><img class="sub-cat-img" src="https://fair-hand.com/wp-content/uploads/2021/03/carriage-2370541_1920-min.png" alt="faithand">
<div class="card-content-cat">
              <h4>Hochzeitskutsche</h4>
              <a class="link-card" href="https://fair-hand.com/produktliste?category=hochzeitskutsche">Hochzeitskutsche</a>
      </div>
</div>
</a>
</div>



<?php }
else if( $category->name=='Elektronik')
{


?>
<div class="cat-head-img">
  <a href="https://fair-hand.com/produktliste?category=kameraverleih">
  <div class="cat-head-img-in"><img class="sub-cat-img" src="https://fair-hand.com/wp-content/uploads/2021/05/equipment-731132_1920-1.png" alt="faithand">
  <div class="card-content-cat">
                  <h4>Kameraverleih</h4>
                  <a class="link-card" href="https://fair-hand.com/produktliste?category=kameraverleih">Kameraverleih</a>
          </div>
  </div>
  </a>

<a href="https://fair-hand.com/produktliste?category=computer-notebook">
<div class="cat-head-img-in"><img class="sub-cat-img" src="https://fair-hand.com/wp-content/uploads/2021/05/laptop-820274_1920-1.png" alt="faithand">
<div class="card-content-cat">
                <h4>Computer & Notebook</h4>
                <a class="link-card" href="https://fair-hand.com/produktliste?category=computer-notebook">Computer & Notebook</a>
        </div>
</div>
</a>

<a href="https://fair-hand.com/produktliste?category=elektronikzubehor">
<div class="cat-head-img-in"><img class="sub-cat-img" src="https://fair-hand.com/wp-content/uploads/2021/05/mixer-4197733_1920-1-3.png" alt="faithand">
<div class="card-content-cat">
                <h4>Elektronikzubehör</h4>
                <a class="link-card" href="https://fair-hand.com/produktliste?category=elektronikzubehor">Elektronikzubehör</a>
        </div>
</div>
</a>

<a href="https://fair-hand.com/produktliste?category=displayverleih">
<div class="cat-head-img-in"><img class="sub-cat-img" src="https://fair-hand.com/wp-content/uploads/2021/05/photography-1850469_1920-1.png" alt="faithand">
<div class="card-content-cat">
                <h4>Displayverleih</h4>
                <a class="link-card" href="https://fair-hand.com/produktliste?category=displayverleih">Displayverleih</a>
        </div>
</div>
</a> 
</div>
<?php }
else if( $category->name=='Immobilien')
{


?>
<div class="cat-head-img">

  <a href="https://fair-hand.com/produktliste?category=monteurzimmer">
  <div class="cat-head-img-in"><img class="sub-cat-img" src="https://fair-hand.com/wp-content/uploads/2021/03/image_resized-min.png" alt="faithand">
      <div class="card-content-cat">
                <h4>Monteurzimmer</h4>
                <a class="link-card" href="https://fair-hand.com/produktliste?category=monteurzimmer">Monteurzimmer</a>
        </div>
  </div>
  </a>

  <a href="https://fair-hand.com/produktliste?category=garage">
  <div class="cat-head-img-in"><img class="sub-cat-img" src="https://fair-hand.com/wp-content/uploads/2021/03/garages-428636_1920-min.png" alt="faithand">
  <div class="card-content-cat">
                <h4>Garage</h4>
                <a class="link-card" href="https://fair-hand.com/produktliste?category=garage">Garage</a>
        </div>
  </div>
  </a>

  <a href="https://fair-hand.com/produktliste?category=bueros">
  <div class="cat-head-img-in"><img class="sub-cat-img" src="https://fair-hand.com/wp-content/uploads/2021/03/chairs-2181960_1920-min.png" alt="faithand">
  <div class="card-content-cat">
                <h4>Büro</h4>
                <a class="link-card" href="https://fair-hand.com/produktliste?category=bueros">Büro</a>
        </div>
  </div>
  </a>

  <a href="https://fair-hand.com/produktliste?category=wohnung">
  <div class="cat-head-img-in"><img class="sub-cat-img" src="https://fair-hand.com/wp-content/uploads/2021/03/apartment-406901_1920-min.png" alt="faithand">
  <div class="card-content-cat">
                <h4>Wohnung</h4>
                <a class="link-card" href="https://fair-hand.com/produktliste?category=wohnung">Wohnung</a>
        </div>
  </div>
  </a>
</div>
<?php }
else if( $category->name=='Künstler')

{


?>
<div class="cat-head-img">
<a href="https://fair-hand.com/produktliste?category=weihnachtsmann">
<div class="cat-head-img-in"><img class="sub-cat-img" src="https://fair-hand.com/wp-content/uploads/2021/03/father-christmas-1149928_1920-min.png" alt="faithand">
<div class="card-content-cat">
              <h4>Weihnachtsmann</h4>
              <a class="link-card" href="https://fair-hand.com/produktliste?category=weihnachtsmann">Weihnachtsmann</a>
      </div>
</div>
</a>

<a href="https://fair-hand.com/produktliste?category=feuershow">
<div class="cat-head-img-in"><img class="sub-cat-img" src="https://fair-hand.com/wp-content/uploads/2021/03/circus-1873241_1920-min.png" alt="faithand">
<div class="card-content-cat">
              <h4>Feuershow</h4>
              <a class="link-card" href="https://fair-hand.com/produktliste?category=feuershow">Feuershow</a>
      </div>
</div>
</a>

<a href="https://fair-hand.com/produktliste?category=djs">
<div class="cat-head-img-in"><img class="sub-cat-img" src="https://fair-hand.com/wp-content/uploads/2021/03/blurry-1854113_1920-min.png" alt="faithand">
<div class="card-content-cat">
              <h4>DJs</h4>
              <a class="link-card" href="https://fair-hand.com/produktliste?category=djs">DJs</a>
      </div>
</div>
</a>

<a href="https://fair-hand.com/produktliste?category=ballonkunstler">
<div class="cat-head-img-in"><img class="sub-cat-img" src="https://fair-hand.com/wp-content/uploads/2021/03/baloon-min.png" alt="faithand">
<div class="card-content-cat">
              <h4>Ballonkünstler</h4>
              <a class="link-card" href="https://fair-hand.com/produktliste?category=ballonkunstler">Ballonkünstler</a>
      </div>
</div>
</a>

</div>
<?php }
else if( $category->name=='Schmuck, Uhren, Accessoires')

{


?>
<div class="cat-head-img">
<a href="https://fair-hand.com/produktliste?category=automatikuhren">
<div class="cat-head-img-in"><img class="sub-cat-img" src="https://fair-hand.com/wp-content/uploads/2021/03/rolex-3171195_1920.jpg" alt="faithand">
<div class="card-content-cat">
              <h4>Automatikuhren</h4>
              <a class="link-card" href="https://fair-hand.com/produktliste?category=automatikuhren">Automatikuhren</a>
      </div>
</div>
</a>

<a href="https://fair-hand.com/produktliste?category=goldschmuck">
<div class="cat-head-img-in"><img class="sub-cat-img" src="https://fair-hand.com/wp-content/uploads/2021/03/jewelry-625724_1920.jpg" alt="faithand">
<div class="card-content-cat">
              <h4>Goldschmuck</h4>
              <a class="link-card" href="https://fair-hand.com/produktliste?category=goldschmuck">Goldschmuck</a>
      </div>
</div>
</a>

<a href="https://fair-hand.com/produktliste?category=silberschmuck">
<div class="cat-head-img-in"><img class="sub-cat-img" src="https://fair-hand.com/wp-content/uploads/2021/03/jewellery-1633124_1920.jpg" alt="faithand">
<div class="card-content-cat">
              <h4>Silberschmuck</h4>
              <a class="link-card" href="https://fair-hand.com/produktliste?category=silberschmuck">Silberschmuck</a>
      </div>
</div>
</a>

<a href="https://fair-hand.com/produktliste?category=schals-tucher">
<div class="cat-head-img-in"><img class="sub-cat-img" src="https://fair-hand.com/wp-content/uploads/2021/03/businessman-1284463_1920.jpg" alt="faithand">
<div class="card-content-cat">
              <h4>Krawatten, Schals & Tücher</h4>
              <a class="link-card" href="https://fair-hand.com/produktliste?category=schals-tucher">Krawatten, Schals & Tücher</a>
      </div>
</div>
</a>

</div>
<?php }
else if( $category->name=='Werkzeuge')

{


?>
<div class="cat-head-img">  
<a href="https://fair-hand.com/produktliste?category=entfeuchter">
  <div class="cat-head-img-in"><img class="sub-cat-img" src="https://fair-hand.com/wp-content/uploads/2021/03/shutterstock_1756618310-min.png" alt="faithand">
  <div class="card-content-cat">
              <h4>Entfeuchter</h4>
              <a class="link-card" href="">Entfeuchter</a>
      </div>
  </div>
  </a>

  <a href="https://fair-hand.com/produktliste?category=bodenverdichter-ruttler">
  <div class="cat-head-img-in"><img class="sub-cat-img" src="https://fair-hand.com/wp-content/uploads/2021/03/shutterstock_1262246200-min.png" alt="faithand">
  <div class="card-content-cat">
              <h4>Bodenverdichter & Rüttler</h4>
              <a class="link-card" href="https://fair-hand.com/produktliste?category=bodenverdichter-ruttler">Bodenverdichter & Rüttler</a>
      </div>
  </div>
  </a>

  <a href="https://fair-hand.com/produktliste?category=abbruchhammer">
  <div class="cat-head-img-in"><img class="sub-cat-img" src="https://fair-hand.com/wp-content/uploads/2021/03/jackhammer-91101_1920-min.png" alt="faithand">
  <div class="card-content-cat">
              <h4>Abbruchhammer</h4>
              <a class="link-card" href="https://fair-hand.com/produktliste?category=abbruchhammer">Abbruchhammer</a>
      </div>
  </div>
  </a>

  <a href="https://fair-hand.com/produktliste?category=mess-prufgerate">
  <div class="cat-head-img-in"><img class="sub-cat-img" src="https://fair-hand.com/wp-content/uploads/2021/03/123797-15687166-1-min.png" alt="faithand">
  <div class="card-content-cat">
              <h4>Mess & Prüfgeräte</h4>
              <a class="link-card" href="https://fair-hand.com/produktliste?category=mess-prufgerate">Mess & Prüfgeräte</a>
      </div>
  </div>
  </a>
</div>
<div>
<?php }
?>
</div>
<h1 class="title-style">Weitere Kategorien</h1>
<div class="listing-categories">
    <?php 
    foreach($all_categories as $category){ 
      if($category->parent == $cat_id){
      ?>      
      <div class="card-link" >
      <h2><?php echo $category->name; ?></h2>
      <a  href="https://fair-hand.com/produktliste?category=<?php echo $category->slug; ?>"><?php echo $category->name;
       ?>
        </a>
      <?php
        $child_args = array(
                    'taxonomy' => 'product_cat',
                    'hide_empty' => false,
                    'child_of' => $category->term_id                                   
                );
                $child_product_cats = get_terms( $child_args );
              //  print_r($child_product_cats);
                foreach ($child_product_cats as $child_product_cat) {
                  echo '<p style="margin-left:10px;">' . $child_product_cat->name . '</p>' ;                                 
                }
        ?>
      </div>
    
  <?php } } 
    $slug= $_GET['subcategory'];
    $category = get_term_by( 'slug', $slug, 'product_cat' );
    $cat_id = $category->term_id;
    $taxonomy     = 'product_cat';?>
    </div>

    <div class="description-category">
    <?php
    if( $category->name=='Baumaschinen')
  {
    ?>
<div>
<h3>Baumaschinen leihen statt kaufen</h3>
<p>Benötigst du demnächst eine Hebebühne oder einen Bagger? Oder brauchst du kurzfristig einen Kompressor, einen Gabelstapler oder einen Stromgenerator? Für kleinere, einmalige Projekte lohnt es sich keineswegs, teure Maschinen zu kaufen. Kostengünstiger ist es, sich Baumaschinen zu leihen. So sparst du zum einen jede Menge Geld. Zum anderen schonst du mit der Nutzung vorhandener Ressourcen die Umwelt. Wer Baumaschinen wie beispielsweise Arbeitsbühnen, Stapler oder Mischmaschinen leihen möchte, findet in dieser Kategorie sicherlich die passenden Geräte beziehungsweise die passenden Maschinen. Von Druckluftwerkzeugen über Walzen und Raupen bis hin zu Arbeitsschutzausrüstungen, bei uns kannst du dein benötigtes Equipment kostengünstig leihen statt es zu kaufen.
</p>
<h3>Baumaschinenverleih – günstig und einfach</h3>
<p>Unsere Kategorie Baumaschinenverleih umfasst eine Vielzahl an Baugeräten und -maschinen, die du über uns ganz einfach mieten kannst. Ganz gleich, ob gewerblich oder privat, bei uns kannst du mit nur wenigen Klicks die gewünschte Baumaschine aus deiner Nähe auswählen und ausleihen. Auf diese Weise hast du die Möglichkeit, Stapler oder Arbeitsbühnen zu mieten oder dir Bauaufzüge, Gerüste und Leitern oder Generatoren auszuleihen. Wähle dazu die entsprechende Baumaschine in der Kategorie aus und erfahre sofort, zu welchem Preis welche Maschinen und Geräte verfügbar wären. </p>

<h3>Hebe- und Arbeitsbühnen mieten – so einfach geht’s</h3>
<p>Brauchst du eine Hebe- oder Arbeitsbühne für ein oder mehrere Projekte, die jedoch keinen Kauf rechtfertigen würden? Wenn du nur für eine begrenzte Zeit eine Arbeitsbühne benötigst, lohnt es in den seltensten Fällen, dir eine eigene Hebe- oder Arbeitsbühne anzuschaffen. Die Kosten für den Kauf übersteigen im Normalfall bei weitem den Nutzen, sodass es sich lohnen kann, Hebe- und Arbeitsbühnen zu mieten anstatt sie zu kaufen. Bei uns kannst du verfügbare Bühnen in deiner Nähe sehen und sie für die gewünschte Dauer mieten.</p>

<h3>Privater und gewerblicher Verleih von Baugeräten</h3>
<p>Bei uns kannst du Baugeräte und -maschinen sowohl privat als auch gewerblich mieten. So hast du die Möglichkeit, unseren Baumaschinenverleih deinem Bedarf individuell anzupassen. Ob für einzelne Stunden, ganze Tage oder mehrere Wochen – anstatt dir teure Geräte zu kaufen kannst du sie besser bei uns mieten. Alle angebotenen Baumaschinen stammen von Privatpersonen oder Unternehmen, die die Baugeräte zeitweise vermieten. So können vorhandene Ressourcen bestmöglich genutzt werden, während die Umwelt gleichzeitig geschont wird.</p>
</div>

<?php } 

else if( $category->name=='Elektronik')
{

?>

<div>
  <h3>Wo kann man Elektronik online mieten? </h3>
  <p>Ganz einfach: bei uns. Bei fair-hand kannst du diverse Elektronik-Artikel ganz einfach online mieten und aus deiner Nähe abholen. Die Kategorie Elektronik umfasst eine Vielzahl an elektronischen Geräten wie beispielsweise Beamer und Displays, Kameras und Diascanner sowie Notebooks, Router und Bürotechnik. Elektronik zu mieten ist nicht nur deutlich günstiger als etwas Neues zu kaufen. Viel entscheidender ist, dass man viele elektronische Geräte nur gelegentlich braucht. Den Rest der Zeit liegen sie jedoch oftmals unbenutzt herum. Wenn du auf der Suche nach einzelnen Elektronik-Geräten oder komplette Netzwerke, Bürotechnik oder Computer bist, die du für einen bestimmten Zeitraum benötigst, kannst du sie bei uns bequem online mieten. </p>
  <h3>Computer und Notebooks mieten statt kaufen</h3>
  <p>Wer nur unregelmäßig einen Computer oder ein Notebook benötigt, überlegt meist intensiv, ob sich der Kauf eines neuen Geräts überhaupt lohnt. Dabei ist die Alternative so einfach wie effektiv: Anstatt dir ein neues Notebook zu kaufen, miete es doch einfach von einem Anbieter aus deiner Nähe! Ob gewerblich oder von privat – wir haben verschiedene Arten der Vermietung von Elektronik-Artikeln. Von wenigen Stunden bis hin zu wochenlangen Projekten, bei uns kannst du auswählen, wie lange du die gemieteten elektronischen Geräte benötigst. Das sparst dir viel Geld, weil du exakt bestimmen kannst, für wie lange das Mietgerät bezahlen musst. Vor allem bei anstehenden Abschlussarbeiten, für Präsentationen oder zur Ausarbeitung von Meetings und Berichten sind Computer und Notebooks unerlässlich. Wer jedoch nur selten außerhalb des Arbeitsplatzes ein Notebook braucht, kann sich dieses beispielsweise tageweise mieten.</p>
  
  <h3>Kameraverleih leicht gemacht</h3>
  <p>Eine professionelle Kamera macht hervorragende Bilder, kostet jedoch in der Neuanschaffung auch oftmals viel Geld. Für einmalige Events wie besondere Ausflüge, Familientreffen, Hochzeiten oder Urlaube ist es daher mitunter sinnvoller, sich eine hochwertige Kamera zu mieten anstatt eine neue zu kaufen. Ob Kompaktkamera, Sofortbildkamera oder digitale Spiegelreflexkamera – bei uns ist der Online-Kameraverleih so einfach wie nie. Wähle einfach die passende Kamera aus den verschiedenen Angeboten der Verleiher aus und miete sich für die gewünschte Dauer.</p>
  <h3>Displayverleih, Elektronikzubehör und Netzwerke</h3>
  <p>Bei uns kannst du auch sehr spezielle Elektronik-Artikel mieten. Von Netzwerken und Routern über Displays bin hin zu Spezial-Equipment für Dias, Beamer und Elektronikzubehör – die Kategorie Elektronik umfasst Geräte für diverse Zwecke.</p>
</div>
<?php }
else if( $category->name=='Dienstleistungen')
{

?>
<div>
  <h3>Dienstleistungen online mieten </h3>
  <p>Brauchst du Hilfe beim Hausbau und suchst daher einen Dachdecker, einen Bodenleger oder einen Fenster- und Türenbauer? Oder planst du deine Hochzeit und bist aktuell auf der Suche nach einem Fotografen, einem Caterer oder einem Hochzeitsplaner? Ganz gleich, ob du einen Handwerker, einen Grafiker oder ein Umzugsunternehmen suchst, bei uns kannst du Dienstleistungen bequem online mieten. Die Kategorie Dienstleistungen umfasst eine Vielzahl an Fachkräften, die dich gern bei deinem Projekt, deinem Hausbau oder dem schönsten Tag in deinem Leben unterstützen. Von Innenarchitekten über Zaunbauer und Stuckateure bis hin zu Sängern, Pflasterern und Musiklehrer – bei uns findest du den passenden Dienstleister in deiner Nähe.</p>

  <h3>Private und gewerbliche Dienstleitungen in deiner Nähe</h3>
  <p>Für Arbeiten am und im Haus lohnt es sich oftmals, einen Profi kommen zu lassen, der sein Handwerk versteht. Darum kannst du bei uns Dienstleistungen online mieten, die Fachleute aus diversen Genres über uns anbieten. Klicke dich einfach durch die verschiedenen Bereiche und finde mit wenigen Klicks Parkett- und Laminatleger, Poolbauer, Möbel- und Küchenaufbauer oder Kfz-Mechaniker. Darüber hinaus gibt es auf unserem Portal private wie auch gewerbliche Angebote für Maler und Lackierer, Klimatechniker und Kaminbauer. Ob stunden- oder tageweise oder für mehrere Wochen – du bestimmst, wie lange du die Profis in Anspruch nehmen möchtest. </p>

  <h3>Hochzeitsplaner gesucht?</h3>
  <p>Steht euer großer Tag bevor und du hast noch keinen Hochzeitsplaner? Oder suchst du einen erfahrenen Hochzeitsfotografen, den euren schönsten Tag im Leben bildlich festhält? Neben Fotografen und Raumausstattern kannst du bei uns auch Sänger und Caterer für deinen Hochzeitstag buchen. Klicke dazu einfach auf die gewünschten Dienstleistungen und sieh dir die verschiedenen Angebote an. Ist jemand Passendes dabei, so kannst du es direkt über unsere Webseite buchen.</p>

  <h3>Erfahrene Handwerker gesucht?</h3>
  <p>Für bestimmte Gewerke empfiehlt es sich fast immer, sich einen Experten zu holen. So sparst du dir vor allem Zeit, während du jedoch weißt, dass sich jemand Erfahrenes um dein Projekt kümmert. Neben handwerklichen Experten wie Rollladen- und Markisenbauer gibt es bei uns auch Maurer, Metallbauer, Heizungsinstallateure und Glaser. Besonders für Häuslebauer ist es oftmals ratsam, professionelle Handwerker zu mieten, die ihr Gewerk verstehen. So hast du mehr Zeit für andere Dinge, während der Fliesenleger, der Estrichleger und der Dachdecker sich beispielsweise um die Fertigstellung des Innenausbaus deines Hauses kümmern. </p>
</div>
<?php }

else if( $category->name=='Schmuck, Uhren, Accessoires')
{

?>
<div>
  <h3>Schmuck mieten für besondere Anlässe</h3>
  <p>Möchtest du an deinem Hochzeitstag hochwertigen und teuren Designerschmuck tragen, ohne diesen kaufen zu müssen? Oder bist du auf der Suche nach Ohr-, Hals- oder Haarschmuck, den du für einen ganz besonderen Anlass benötigst? Die Kosten für die Neuanschaffung von Ringen, Ketten und Armbändern sind mitunter sehr hoch. Wer jedoch nur zu ganz besonderen Anlässen elegante Accessoires tragen möchte, kann Schmuck mieten anstatt ihn zu kaufen. In der Kategorie Schmuck findest du zahlreiche Angebote für Anhänger und Armbänder, Designer-Armbanduhren, Halsketten, Schmuckringe oder Haarschmuck. Klicke dich durch die einzelnen Unterkategorien und finde bei uns hochwertigen Schmuck für den Anlass deiner Wahl.</p>
  <h3>So kannst du Hochzeitsschmuck online mieten</h3>
  <p>Auf der Suche nach den passenden Accessoires für den schönsten Tag deines Lebens kannst du bei uns verschiedene Schmuck-Elemente mieten anstatt sie zu kaufen. Besonders Hochzeitsschmuck ist mitunter sehr teuer, sodass es oftmals lohnt, eine Armschmuck, ein Diadem, elegante Ohrringe oder eine Designer-Halskette zu leihen. In den Angeboten dieser Kategorie findest du eine Vielzahl an Farben, sodass du den perfekten Farbton passend zu deinem Brautkleid auswählen kannst.</p>
  
  <h3>Ohrringe, Ketten und Armbänder mieten</h3>
  <p>Doch nicht nur zur eigenen Hochzeit kann es empfehlenswert sein, hochwertigen Schmuck zu mieten. Auch die geladenen Gäste der Hochzeit, die Brautjungfern sowie die Ehrengäste sind oftmals auf der Suche nach Schmuck, den man nur für einen bestimmten Tag benötigt. Weiterhin bieten Anlässe wie Geburtstagsfeiern, Betriebsfeiern, Feiern zur bestandenen Prüfung oder Beförderung sowie Jubiläen eine großartige Möglichkeit, sich mit hochwertigem Schmuck zu schmücken. Von Anstecknadeln und Manschettenknöpfen über Armreife, Halsketten in jeder Länge und Haarschmuck bis hin zu Ohrsteckern und Ohrringen – die Inserate für den privaten wie auch gewerblichen Schmuckverleih in deiner Nähe sind vielseitig. </p>
  <h3>Schmuck leihen statt kaufen</h3>
  <p>Anstatt teuren Schmuck zu kaufen, den du nur wenige Male im Jahr trägst, lohnt es sich mitunter mehr, sich von Zeit zu Zeit schönen Schmuck zu leihen. So bleibt die Auswahl des gewünschten Schmucks jedes Mal spannend, während die mitunter preisstarken Schmuckstücke so häufig wie möglich getragen werden, anstatt achtlos in der Schublade zu liegen. Wenn auch du Schmuck für besondere Anlässe leihen statt kaufen willst, bist du bei fair-hand genau richtig. </p>
</div>
<?php }


else if( $category->name=='Events, Messen und Partys')
{
?>
<div>
  <h3>Event-Vermietung – Geschirr, Personal und Catering</h3>
  <p>Ob klein oder riesig, Events bedürfen nicht nur einer besonders guten Planung. Genauso wichtig ist es, passendes Equipment für das Event zu haben. Zu Geburtstagen oder Taufen, auf Firmenfeiern, bei Silber- oder Goldhochzeiten oder zur bestandenen Prüfung oder Beförderung – damit das geplante Event ein voller Erfolg wird, gibt es diverse Dienstleister und Ausstattungen, die dein Event abrunden. Neben Mietmöbeln und Partyräumen kannst du bei uns unter anderem Zelte ausleihen, Veranstaltungstechnik mieten und Hüpfburgen leihen. Weiterhin findest du bei uns Angebote für Funfood, Gastronomie und Bars, Eventmodule sowie vollständig ausgestattete Bühnen, Absperrungen und Zäune oder Messebedarf.</p>

  <h3>Betriebsfeier geplant? Finde hier passendes Mobiliar für euer Event</h3>
  <p>Neben privaten Vermietern können bei fair-hand auch Gewerbetreibende ihr Mobiliar über uns vermieten. Besonders für Betriebsfeiern enthält die Kategorie Events eine vielseitige Auswahl an Angeboten für den Geschirrverleih, Miettoiletten und Mietmöbel, Zeltverleih und Dekoration. Darüber hinaus kannst du hier Eventmodule und Eventpersonal mieten, Bühnen ausleihen und deinen bevorzugten Catering-Service auswählen. Auch besondere Gewerke für besondere Veranstaltungen sind bei uns zu finden. Neben Bodenbelägen und Kinderanimation gehören auch Angebote für den Verleih von Hüpfburgen und Hussen zu dieser Kategorie.</p>

  <h3>Seminar- und Konferenzräume in deiner Nähe mieten</h3>
  <p>Finde mit nur wenigen Klicks Seminar- und Konferenzräume in deiner Nähe und miete sie für exakt die Dauer, die du möchtest. Auf Wunsch findest Du auch passende Catering-Anbieter sowie Angebote für Veranstaltungstechnik und Moderationsequipment, falls dein Event mit besonderem Equipment ausgestattet sein soll. Von kleinen Konferenzräumen über Seminarräume für mittlere und große Gruppen bis hin zu Locations für Betriebsfeiern und Veranstaltungen mit tausenden von Mitarbeitern – klicke dich einfach durch die zahlreichen Anbieter für Party-, Seminar- und Konferenzräume</p>

  <h3>Vermietung von Messemöbeln in deiner Nähe</h3>
  <p>Suchst du für dein Unternehmen einen Verleiher für Mietmöbel, Messe-Equipment und zuverlässigem Personal? Dann wirst du in unseren Angeboten für Komplettpakete, einzelne Mietmöbel und Eventpersonal sicherlich fündig. Vom Geschirrverleih in deiner Nähe über Angebote zur Ausstattung deines Messestandes bis hin zu Experten für Bodenbeläge, Bühnen und Moderationsequipment – bei uns kannst du nahezu alles mieten, was du für einen erfolgreichen Messeauftritt benötigst. </p>
</div>

<?php }
else if( $category->name=='Fahrzeuge')
{
?>

<div>
  <h3>So einfach kannst du Fahrzeuge online mieten</h3>
  <p>Bist du auf der Suche nach einer Limousine für deinen Hochzeitstag? Suchst du kurzfristig einen Anhänger oder einen Abschleppwagen? Oder träumst du davon, mit einem Wohnmobil in den Urlaub zu fahren, hast aber kein eigenes? Dann ist unser Fahrzeuge-Verleih genau das Richtige für dich. Hier kannst du Oldtimer mieten, Limousinen stunden- oder tageweise buchen und Trikes, Motorräder sowie Transporter mieten. Natürlich findest du hier auch diverse Autos, die du dir ausleihen kannst. Wie wäre es beispielsweise mit einem coolen Oldtimer, einem Hummer oder einem Rolls Royce, den du für den wichtigsten Tag in deinem Leben mieten kannst?</p>

  <h3>Bei uns kannst du dein Traumauto mieten</h3>
  <p>Hast du schon immer davon geträumt, einmal mit einem Lamborghini zu fahren? Oder wärst du gern für einen Tag ein Ferrari-Pilot? Ganz gleich, ob Bentley, Hummer oder Porsche – bei uns kannst du dein Traumauto bequem online mieten. Klicke dich dazu einfach durch die Angebote in deiner Nähe und nutze unseren Fahrzeugverleih für Traumautos. Private wie auch gewerbliche Autobesitzer verleihen ihre Fahrzeuge auf fair-hand, wodurch du eine Vielzahl von Autos, Zweirädern und Transporter zur Auswahl hast. Neben Elektroautos und Quads gehören zum Beispiel auch Roller, Cabrios und Partybusse zu den Fahrzeugen, die du mieten kannst.</p>

  <h3>Suchst du einen LKW- oder Transporter-Verleih in deiner Nähe?</h3>
  <p>Dann klicke dich bequem durch die Angebote der zahlreichen Fahrzeugvermieter, um das passende Fahrzeug zum fairen Preis mieten zu können. Ob für einen privaten Umzug oder für gewerbliche Tätigkeiten, unseren Fahrzeugverleih-Service können Privatpersonen wie auch Unternehmen gleichermaßen nutzen. Profitiere von der großen Auswahl an Mietfahrzeuge und buche LKW, Transporter, Kühlfahrzeuge, Anhänger und Abschleppwagen dann, wann du sie benötigst. Neben der stundenweisen Anmietung von Transportern oder LKW gibt es bei uns zudem die Möglichkeit, die bei uns angebotenen Fahrzeuge auch tage- oder sogar wochenweise anzumieten. 

</p>

  <h3>Wohnmobil mieten leicht gemacht</h3>
  <p>Möchtest du gern mit einem Wohnmobil durch Deutschland oder Europa fahren? Die Anschaffungskosten für ein Wohnmobil sind jedoch meist sehr hoch, sodass es sich mitunter lohnt, ein Wohnmobil zu mieten anstatt eines neu zu kaufen. Bei uns findest du verschiedene Anbieter für Wohnmobile, die ihre Fahrzeuge zum Verleih anbieten. </p>
</div>

<?php }
else if( $category->name=='Freizeit')
{
?>
<div>
  <h3>Sport- und Freizeitgegenstände mieten</h3>
  <p>Von einer kompletten Campingausrüstung über Boote und Yachten bis hin zu Fahrrädern, Gartenpavillons und Freizeitgegenständen für Kinder – in der Kategorie Freizeit findest du diverse Angebote für Sport, Spiel und Freizeitgestaltung. Neben Zelten und Kutschen kannst du beispielsweise eine Kutsche, Spielekonsolen oder Musikinstrumente mieten. So sparst du dir die teure Anschaffung eines neuen Teils und schonst zugleich die Umwelt, indem du vorhandene Ressourcen nutzt, die der Besitzer in dem Moment nicht benötigt. Wähle dazu einfach die gewünschte Unterkategorie im Bereich Sport und Freizeit aus und klicke dich durch die Angebote. Du entscheidest, ob du nur stundenweise Sportgeräte benötigst oder ob du Campingausrüstungen, Boote oder Requisiten über einen längeren Zeitraum mieten möchtest.</p>

  <h3>Kostüm- und Musikinstrumentenverleih in deiner Nähe</h3>
  <p>Suchst du einen Verleih für Musikinstrumente, Kostüme oder Requisiten? Dann bist du bei uns genau richtig. Wir bieten eine Vielzahl an Angeboten im kreativen Bereich. Ob künstlerisch oder musisch – bei fair-hand findest du Gegenstände zum Mieten aus nahezu jedem Bereich. Darüber hinaus kannst du bei uns auch gleich den passenden Kunst- oder Musiklehrer finden. Das Besondere bei fair-hand ist, dass du keinerlei langfristige Mietverträge eingehen musst. Im Gegenteil: du mietest die gewünschten Gegenstände oder Dienstleistungen nur für die Dauer, in der du sie auch benötigst. </p>

  <h3>Wie wäre es, ein Boot oder eine Yacht zu mieten?</h3>
  <p>Wer in Besitz eines gültigen Bootführerscheins ist, darf in Deutschland sowohl Boote als auch Segelboote fahren. Doch was tun, wenn sich die Anschaffung eines Bootes oder gar einer Yacht im Vergleich zu der potenziellen Nutzung nicht lohnt? Ganz einfach, du mietest dir dein Traumboot oder deine Traumyacht über uns. Privatpersonen wie auch Gewerbetreibende können bei uns ihre Boote und Yachten vermieten, sodass du sicherlich ein passendes Angebot finden wirst. </p>

  <h3>Bei uns kannst du Baby- und Kinderausstattung mieten </h3>
  <p>Brauchst du für einen geplanten Ausflug einen Bollerwagen? Oder bist du auf der Suche nach einem Kombi-Kinderwagen für den bevorstehenden Urlaub? Ganz gleich, ob du Kinder-Rollschuhe, Krabbeltunnel oder eine Babytrage mieten möchtest, in unserer Kategorie Freizeit findest du eine vielseitige Auswahl an Baby und Kinder-Anzeigen. Neben praktischen Babytragen und Kinderwagen gehören zu der Unterkategorie Baby und Kind auch Angebote für Kindersport und Kinder-Gartenspielgeräte, die du bei uns mieten kannst.</p>
</div>

<?php }
else if( $category->name=='Hochzeit')
{
?>
<div>
  <h3>Mietangebote rund um den schönsten Tag im Leben</h3>
  <p>Die Hochzeit ist einer der wichtigsten Tage im Leben eines Paares. Damit dieser ein voller Erfolg wird, bedarf es einer guten Vorbereitung sowie unvergessliche Extras. Wir haben daher eine große Auswahl an Angeboten, die du speziell für eine bevorstehende Hochzeit mieten kannst. Neben traumhaft schönen Hochzeitsautos findest du in dieser Kategorie unter anderen Hochzeitskutschen, die du mieten kannst sowie diverse Inserate für die Vermietung von Hochzeitsdekoration. Weiterhin kannst du bei uns nicht nur Hochzeitsmusik oder Hochzeitssänger buchen, sondern auch gleich einen Hochzeitsplaner, der dir die gesamte Planung deines wichtigsten Tages abnimmt. Von der Hochzeitslocation über Brautkleider bis hin zu Hochzeitsfotografen – bei fair-hand kannst du sowohl Hochzeits-Equipment mieten als auch erfahrene Dienstleister buchen.</p>

  <h3>Vom Brautkleid bis zum Hochzeitsauto – so einfach geht mieten</h3>
  <p>Anstatt dir ein Brautkleid zu kaufen bieten wir dir die Möglichkeit, dir eines auszuleihen. Wähle aus privaten Inseraten sowie Angeboten von Brautmodengeschäften dein absolutes Traum-Brautkleid aus und miete es für deinen Hochzeitstag. So sparst du dir viel Geld für ein Brautkleid, das du – im Idealfall – nur ein Mal in deinem Leben tragen wirst. Darüber hinaus findest du bei uns zahlreiche Angebote zur Vermietung von Hochzeitsautos. Vom Rolls Royce über Limousine bis hin zur Hochzeitskutsche – du bestimmst, in welchem Fahrzeug du an deinem schönsten Tag im Leben gefahren werden möchtest.</p>

  <h3>Miete deine Traum-Hochzeitslocation samt Hochzeitsdekoration</h3>
  <p>Möchtest du gern in einem Schloss heiraten? Oder träumst du davon, dir das Ja-Wort unter freiem Himmel geben zu können? Ganz gleich, wie deine ganz persönliche Traum-Hochzeitslocation auch aussieht, bei uns findest du zahlreiche Anbieter für Locations, aus denen du die für dich beste Location auswählen und anmieten kannst. Zudem bekommst du bei uns auch die passende Hochzeitsdekoration inklusive Stuhlhussen, Geschirr, Bühne und Musikausrüstung, den passenden DJ, Hochzeitsband oder Hochzeitssänger</p>

  <h3>Plane die Anmietung deiner Hochzeitsausstattung frühzeitig</h3>
  <p>Damit deine Hochzeit später stressfrei ablaufen kann, empfiehlt es sich, wichtige Bestandteile einer Hochzeit wie das Brautkleid, die Location, das Hochzeitsauto und die Hochzeitsmusik frühzeitig zu organisieren. Wir raten daher, diese wesentlichen Elemente für deine Hochzeit so früh wie möglich zu mieten, damit du den Kopf frei hast für andere Dinge. </p>
</div>

<?php }
else if( $category->name=='Immobilien')
{
?>
<div>
  <h3>Immobilien mieten in deiner Wunschstadt</h3>
  <p>Die Suche nach einer geeigneten Immobilie gestaltet sich mitunter schwierig. Mal stimmt die Größe der angebotenen Immobilie nicht, mal der Preis. Bei uns findest du hingegen eine große Auswahl an Immobilien zum Mieten, die sich deinen Bedürfnissen ideal anpassen. Von einem Zimmer in einer WG über Proberäume bis hin zu Büros, Lagerräumen und Garagen – bei uns findest du mit Sicherheit eine passende Immobilie in deiner Nähe. Der Vorteil bei den Inseraten auf fair-hand ist, dass du die Dauer der gemieteten Immobilie individuell gestalten kannst. Von kurzzeitigen Aufenthalten bis hin zu einer monatelangen Anmietung von privaten oder gewerblichen Immobilien – hier findest du eine Vielzahl an Angeboten zur Immobilienvermietung in deiner Wunschstadt.</p>

  <h3>Möchtest du eine Garage oder einen Lagerplatz anmieten?</h3>
  <p>Dann sieh dir die Inserate zur Vermietung von Lagerhallen, Stellplätzen und Kellerräumen in dieser Kategorie an. Suche dir dazu die passende Stadt aus und bestimmte die Dauer deiner Anmietung. Gemeinsam mit dem Anbieter der Immobilie legst du auch langfristigere Anmietungen fest, sofern du dies wünschst. Doch auch, wenn du nur Bedarf an einer stundenweisen Anmietung einer Garage, eines Kellerraumes, einer Werkstatt oder eines Proberaums hast, wirst du in der Kategorie Immobilien auf fair-hand fündig.</p>

  <h3>Gewerbliche Immobilien zur Anmietung gesucht?</h3>
  <p>Von Büroräumen jeder Größe über Geschäftsimmobilien mit Büros und Lagerkapazität bis hin zu großzügigen Lagerhallenflächen in ganz Deutschland – auf unserem Portal können Gewerbetreibende wie auch Immobilienbesitzer ihre Flächen zur Vermietung anbieten. So hast du eine große Auswahl an Immobilienangeboten, die von klassischen Wohnungen und Häusern über einzelne Stellplätze bis hin zu Kfz-Werkstätten, Seminarräumen und Ateliers gehen. Weiterhin kannst du bei uns Lagerhallen in nahezu jeder Größe finden, die über die von dir benötigte Ausstattung verfügen. Dies können sowohl vorhandene Lastenaufzüge als auch Rolltore, Hallen mit Wasseranschluss oder Starkstrom oder aber Wachpersonal sein.</p>

  <h3>Immobilien zur privaten Nutzung</h3>
  <p>Neben gewerblichen Immobilien findest du in dieser Kategorie auch zahlreiche Angebote für die Vermietung von Immobilien zur privaten Nutzung. Dazu zählen einzelne Zimmer oder Ferienwohnungen und -häuser, aber auch besondere Örtlichkeiten wie Kunstateliers, Werkstattplätzen oder temporären Plätzen zum Arbeiten. Möchtest du Immobilien in deiner Wunschstadt mieten? Dann stöbere durch die Anzeigen dieser Kategorie. Hier wirst du sicherlich fündig</p>
</div>

<?php }
else if( $category->name=='Künstler')
{
?>
<div>
  <h3>Bei uns kannst du Künstler jeder Art buchen</h3>
  <p>Von Clowns für Kindergeburtstage über Magier und Zauberer bis hin zu Alleinunterhaltern, Comedians und Schnellzeichnern – bei uns kannst du diverse Künstler für dein Event buchen. Dies kann eine Hochzeit, ein Geburtstag oder ein anderer besonderer Tag sein, an dem du dir professionelle Unterhaltung durch einen Künstler wünschst. Oder suchst du eine Band oder einen Sänger für eine bevorstehende Firmenfeier oder eine Weihnachtsfeier? Klicke dich durch die Inserate unserer Kategorie Künstler, um einen DJ oder einen Stripper zu buchen, einen Ballonkünstler oder Tänzer zu finden oder um Spezial-Acts wie beispielsweise Stelzenläufer oder eine Feuershow zu buchen.</p>

  <h3>Stripper für Junggesellinnenabschied buchen</h3>
  <p>Willst du der zukünftigen Braut an ihrem Junggesellinnenabschied eine ganz besondere Freude machen und ihr einen Stripper buchen? Bei uns kannst du Künstler jeder Art für besondere Anlässe wie Junggesellenabschiede buchen, damit dieser ein voller Erfolg werden. Klicke dich einfach durch die verschiedenen Angebote an Künstlern in deiner gewünschten Stadt und finde bei uns neben einem Stripper beispielsweise auch einen DJ, Alleinunterhalte oder Sänger und Bands. </p>

  <h3>Künstler für Kindergeburtstage buchen</h3>
  <p>Wie wäre es, dein Kind an seinem Geburtstag mit einem ganz besonderen Ereignis zu überraschen? Buche bei uns Ballonkünstler, Magier, Zauberer oder Clown für Kindergeburtstage. Du entscheidest, für welches Angebot du dich entscheidest, weil es deinen Anforderungen am besten entspricht. Weiterhin hast du bei uns die Möglichkeit, die Künstler für exakt den Zeitraum zu mieten, für den du ihn brauchst. Ob stunden- oder tageweise oder für regelmäßige Events – du stimmst dich mit dem gebuchten Künstler aus deiner Nähe selber ab, um die Rahmenbedingungen für seinen geplanten Auftritt abzuklären. Auf diese Weise bist du sehr flexibel bei der Auswahl deiner Acts.

</p>

  <h3>Musiker oder Bands für Firmenfeier buchen</h3>
  <p>Um die geplante Firmenfeier musikalisch abzurunden, kannst du bei uns passende Musiker oder Bands buchen. Von Solo-Sängerinnen und Sängern bis hin zu Vollblut-Musikern und Bands samt Equipment – du wählst aus, welche Art von Künstler du dir für die bevorstehende Firmenfeier vorstellst. Natürlich findest du in dieser Kategorie auch weitere Künstler, die deine Betriebsfeier ideal ergänzen würden: neben Comedians und DJs bieten hier Tänzer wie auch Walkacts ihre Dienstleistungen an. </p>
</div>

<?php }
else if( $category->name=='Werkzeuge')
{
?>
<div>
  <h3>So mietest du Werkzeuge in deiner Nähe</h3>
  <p>Brauchst du Klimageräte, einen Hochdruckreiniger oder einen Abbruchhammer für dein bevorstehendes Projekt? Oder möchtest du dir einen professionellen Akkuschrauber oder eine Bohrmaschine ausleihen, um die hohen Kosten einer Neuanschaffung zu umgehen? Ganz gleich, ob du auf der Suche nach Gartengeräten, Bautrocknern oder Luftentfeuchtern bist, in unserer Kategorie Werkzeuge findest du mit Sicherheit das passende Gerät. Von Schleifmaschinen und Kompressoren über Schneefräsen und Rüttelplatten bis hin zu Pumpen, Fräsen und Sägen – die Kategorie Werkzeuge umfasst eine Vielzahl an Inseraten für Geräte und Maschinen zum Ausleihen. </p>

  <h3>Große Auswahl an Mietwerkzeugen in deiner Nähe</h3>
  <p>Bei der Auswahl der passenden Werkzeuge stehen dir diverse Unterkategorien zur Verfügung, aus denen du das gewünschte Werkzeug auswählen kannst. So findest du beispielsweise zahlreiche Gartengeräte wie etwa Gartenwalzen, Baumstumpfsägen und Vertikutierer, aber auch Häcksler, Motorsensen oder Teichschlammsauger. Weiterhin kannst du bei uns Nasssauger und Kehrmaschinen mieten, Dampf- oder Hochdruckreiniger leihen und Klimageräte sowie Bautrockner ausleihen. So hast du für jedes Projekt das passende Mietwerkzeug, ohne dass du es kaufen musst. Von gängigen Werkzeugen wie Bohrmaschinen, Akkuschraubern und Rasenmähern bis hin zu Spezialwerkzeugen – bei fair-hand findest du Angebote für diverse Werkzeuge.</p>

  <h3>Werkzeuge für den privaten und gewerblichen Gebrauch</h3>
  <p>Die Inserate für Mietwerkzeuge richten sich sowohl an Privatpersonen als auch an Gewerbetreibende. Die Mietdauer ist dabei individuell mit dem Vermieter der Werkzeuge abzustimmen. So kannst du sicher sein, dass du die benötigten Werkzeuge nur in der benötigten Zeit mietest. Das spart Kosten, während vorhandene Werkzeug-Ressourcen bereits anderweitig vermietet und genutzt werden können. Durch die gemeinsame Nutzung bereits angeschaffter Werkzeuge schonst du nicht nur die Umwelt, sondern auch das Werkzeug selbst wird seinem Zweck entsprechend regelmäßig verwendet.</p>

  <h3>So mietest du Werkzeuge aus deiner Nähe</h3>
  <p>Wähle zunächst die gewünschte Unterkategorie im Bereich der Werkzeuge und suche anschließend in deiner oder der nächstgelegenen Stadt nach passenden Anzeigen für Mietwerkzeuge. Ob Entfeuchter und Poliermaschine, Schuttrutschen und Parkettschleifmaschinen oder Rohrkameras und Möbellifte – Werkzeuge online mieten ist so einfach und vielfältig wie nie. Klicke dich durch die verschiedenen Subkategorien, um Spezialwerkzeuge, Spezialkameras oder spezielle Schleifmaschinen zu mieten. </p>
</div>

<?php } ?>
</div>
</div>
  </div>
</div>
</div>
<?php get_footer(); ?>




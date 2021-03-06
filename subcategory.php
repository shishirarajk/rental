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
        <h4>Ger??st/ Leiter</h4>
        <a class="link-card" href="https://fair-hand.com/produktliste?category=gerust-leiter">Ger??st/ Leiter</a>
      </div>
  </div>
  </a>

  <a href="https://fair-hand.com/produktliste?category=hebebuhne-arbeitsbuhnen">
    <div class="cat-head-img-in"><img class="sub-cat-img" src="https://fair-hand.com/wp-content/uploads/2021/03/shutterstock_1106644793.jpg" alt="faithand">
        <div class="card-content-cat">
            <h4>Hebeb??hne</h4>
            <a class="link-card" href=" https://fair-hand.com/produktliste?category=hebebuhne-arbeitsbuhnen">Hebeb??hne</a>
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
              <h4>H??pfburgen</h4>
              <a class="link-card" href="https://fair-hand.com/produktliste?category=hupfburgen">H??pfburgen</a>
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
              <h4>Anh??nger</h4>
              <a class="link-card" href="https://fair-hand.com/produktliste?category=anhanger">Anh??nger</a>
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
              <h4>Fahrr??der</h4>
              <a class="link-card" href="https://fair-hand.com/produktliste?category=fahrrader">Fahrr??der</a>
      </div>
</div>
</a>

<a href="https://fair-hand.com/produktliste?category=kostume">
<div class="cat-head-img-in"><img class="sub-cat-img" src="https://fair-hand.com/wp-content/uploads/2021/03/carnival-476816_1920-min.png" alt="faithand">
<div class="card-content-cat">
              <h4>Kost??me</h4>
              <a class="link-card" href="https://fair-hand.com/produktliste?category=kostume">Kost??me</a>
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
              <h4>Hochzeitsanz??ge</h4>
              <a class="link-card" href="https://fair-hand.com/produktliste?category=hochzeitsanzuge">Hochzeitsanz??ge</a>
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
                <h4>Elektronikzubeh??r</h4>
                <a class="link-card" href="https://fair-hand.com/produktliste?category=elektronikzubehor">Elektronikzubeh??r</a>
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
                <h4>B??ro</h4>
                <a class="link-card" href="https://fair-hand.com/produktliste?category=bueros">B??ro</a>
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
else if( $category->name=='K??nstler')

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
              <h4>Ballonk??nstler</h4>
              <a class="link-card" href="https://fair-hand.com/produktliste?category=ballonkunstler">Ballonk??nstler</a>
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
              <h4>Krawatten, Schals & T??cher</h4>
              <a class="link-card" href="https://fair-hand.com/produktliste?category=schals-tucher">Krawatten, Schals & T??cher</a>
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
              <h4>Bodenverdichter & R??ttler</h4>
              <a class="link-card" href="https://fair-hand.com/produktliste?category=bodenverdichter-ruttler">Bodenverdichter & R??ttler</a>
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
              <h4>Mess & Pr??fger??te</h4>
              <a class="link-card" href="https://fair-hand.com/produktliste?category=mess-prufgerate">Mess & Pr??fger??te</a>
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
<p>Ben??tigst du demn??chst eine Hebeb??hne oder einen Bagger? Oder brauchst du kurzfristig einen Kompressor, einen Gabelstapler oder einen Stromgenerator? F??r kleinere, einmalige Projekte lohnt es sich keineswegs, teure Maschinen zu kaufen. Kosteng??nstiger ist es, sich Baumaschinen zu leihen. So sparst du zum einen jede Menge Geld. Zum anderen schonst du mit der Nutzung vorhandener Ressourcen die Umwelt. Wer Baumaschinen wie beispielsweise Arbeitsb??hnen, Stapler oder Mischmaschinen leihen m??chte, findet in dieser Kategorie sicherlich die passenden Ger??te beziehungsweise die passenden Maschinen. Von Druckluftwerkzeugen ??ber Walzen und Raupen bis hin zu Arbeitsschutzausr??stungen, bei uns kannst du dein ben??tigtes Equipment kosteng??nstig leihen statt es zu kaufen.
</p>
<h3>Baumaschinenverleih ??? g??nstig und einfach</h3>
<p>Unsere Kategorie Baumaschinenverleih umfasst eine Vielzahl an Bauger??ten und -maschinen, die du ??ber uns ganz einfach mieten kannst. Ganz gleich, ob gewerblich oder privat, bei uns kannst du mit nur wenigen Klicks die gew??nschte Baumaschine aus deiner N??he ausw??hlen und ausleihen. Auf diese Weise hast du die M??glichkeit, Stapler oder Arbeitsb??hnen zu mieten oder dir Bauaufz??ge, Ger??ste und Leitern oder Generatoren auszuleihen. W??hle dazu die entsprechende Baumaschine in der Kategorie aus und erfahre sofort, zu welchem Preis welche Maschinen und Ger??te verf??gbar w??ren. </p>

<h3>Hebe- und Arbeitsb??hnen mieten ??? so einfach geht???s</h3>
<p>Brauchst du eine Hebe- oder Arbeitsb??hne f??r ein oder mehrere Projekte, die jedoch keinen Kauf rechtfertigen w??rden? Wenn du nur f??r eine begrenzte Zeit eine Arbeitsb??hne ben??tigst, lohnt es in den seltensten F??llen, dir eine eigene Hebe- oder Arbeitsb??hne anzuschaffen. Die Kosten f??r den Kauf ??bersteigen im Normalfall bei weitem den Nutzen, sodass es sich lohnen kann, Hebe- und Arbeitsb??hnen zu mieten anstatt sie zu kaufen. Bei uns kannst du verf??gbare B??hnen in deiner N??he sehen und sie f??r die gew??nschte Dauer mieten.</p>

<h3>Privater und gewerblicher Verleih von Bauger??ten</h3>
<p>Bei uns kannst du Bauger??te und -maschinen sowohl privat als auch gewerblich mieten. So hast du die M??glichkeit, unseren Baumaschinenverleih deinem Bedarf individuell anzupassen. Ob f??r einzelne Stunden, ganze Tage oder mehrere Wochen ??? anstatt dir teure Ger??te zu kaufen kannst du sie besser bei uns mieten. Alle angebotenen Baumaschinen stammen von Privatpersonen oder Unternehmen, die die Bauger??te zeitweise vermieten. So k??nnen vorhandene Ressourcen bestm??glich genutzt werden, w??hrend die Umwelt gleichzeitig geschont wird.</p>
</div>

<?php } 

else if( $category->name=='Elektronik')
{

?>

<div>
  <h3>Wo kann man Elektronik online mieten? </h3>
  <p>Ganz einfach: bei uns. Bei fair-hand kannst du diverse Elektronik-Artikel ganz einfach online mieten und aus deiner N??he abholen. Die Kategorie Elektronik umfasst eine Vielzahl an elektronischen Ger??ten wie beispielsweise Beamer und Displays, Kameras und Diascanner sowie Notebooks, Router und B??rotechnik. Elektronik zu mieten ist nicht nur deutlich g??nstiger als etwas Neues zu kaufen. Viel entscheidender ist, dass man viele elektronische Ger??te nur gelegentlich braucht. Den Rest der Zeit liegen sie jedoch oftmals unbenutzt herum. Wenn du auf der Suche nach einzelnen Elektronik-Ger??ten oder komplette Netzwerke, B??rotechnik oder Computer bist, die du f??r einen bestimmten Zeitraum ben??tigst, kannst du sie bei uns bequem online mieten. </p>
  <h3>Computer und Notebooks mieten statt kaufen</h3>
  <p>Wer nur unregelm????ig einen Computer oder ein Notebook ben??tigt, ??berlegt meist intensiv, ob sich der Kauf eines neuen Ger??ts ??berhaupt lohnt. Dabei ist die Alternative so einfach wie effektiv: Anstatt dir ein neues Notebook zu kaufen, miete es doch einfach von einem Anbieter aus deiner N??he! Ob gewerblich oder von privat ??? wir haben verschiedene Arten der Vermietung von Elektronik-Artikeln. Von wenigen Stunden bis hin zu wochenlangen Projekten, bei uns kannst du ausw??hlen, wie lange du die gemieteten elektronischen Ger??te ben??tigst. Das sparst dir viel Geld, weil du exakt bestimmen kannst, f??r wie lange das Mietger??t bezahlen musst. Vor allem bei anstehenden Abschlussarbeiten, f??r Pr??sentationen oder zur Ausarbeitung von Meetings und Berichten sind Computer und Notebooks unerl??sslich. Wer jedoch nur selten au??erhalb des Arbeitsplatzes ein Notebook braucht, kann sich dieses beispielsweise tageweise mieten.</p>
  
  <h3>Kameraverleih leicht gemacht</h3>
  <p>Eine professionelle Kamera macht hervorragende Bilder, kostet jedoch in der Neuanschaffung auch oftmals viel Geld. F??r einmalige Events wie besondere Ausfl??ge, Familientreffen, Hochzeiten oder Urlaube ist es daher mitunter sinnvoller, sich eine hochwertige Kamera zu mieten anstatt eine neue zu kaufen. Ob Kompaktkamera, Sofortbildkamera oder digitale Spiegelreflexkamera ??? bei uns ist der Online-Kameraverleih so einfach wie nie. W??hle einfach die passende Kamera aus den verschiedenen Angeboten der Verleiher aus und miete sich f??r die gew??nschte Dauer.</p>
  <h3>Displayverleih, Elektronikzubeh??r und Netzwerke</h3>
  <p>Bei uns kannst du auch sehr spezielle Elektronik-Artikel mieten. Von Netzwerken und Routern ??ber Displays bin hin zu Spezial-Equipment f??r Dias, Beamer und Elektronikzubeh??r ??? die Kategorie Elektronik umfasst Ger??te f??r diverse Zwecke.</p>
</div>
<?php }
else if( $category->name=='Dienstleistungen')
{

?>
<div>
  <h3>Dienstleistungen online mieten </h3>
  <p>Brauchst du Hilfe beim Hausbau und suchst daher einen Dachdecker, einen Bodenleger oder einen Fenster- und T??renbauer? Oder planst du deine Hochzeit und bist aktuell auf der Suche nach einem Fotografen, einem Caterer oder einem Hochzeitsplaner? Ganz gleich, ob du einen Handwerker, einen Grafiker oder ein Umzugsunternehmen suchst, bei uns kannst du Dienstleistungen bequem online mieten. Die Kategorie Dienstleistungen umfasst eine Vielzahl an Fachkr??ften, die dich gern bei deinem Projekt, deinem Hausbau oder dem sch??nsten Tag in deinem Leben unterst??tzen. Von Innenarchitekten ??ber Zaunbauer und Stuckateure bis hin zu S??ngern, Pflasterern und Musiklehrer ??? bei uns findest du den passenden Dienstleister in deiner N??he.</p>

  <h3>Private und gewerbliche Dienstleitungen in deiner N??he</h3>
  <p>F??r Arbeiten am und im Haus lohnt es sich oftmals, einen Profi kommen zu lassen, der sein Handwerk versteht. Darum kannst du bei uns Dienstleistungen online mieten, die Fachleute aus diversen Genres ??ber uns anbieten. Klicke dich einfach durch die verschiedenen Bereiche und finde mit wenigen Klicks Parkett- und Laminatleger, Poolbauer, M??bel- und K??chenaufbauer oder Kfz-Mechaniker. Dar??ber hinaus gibt es auf unserem Portal private wie auch gewerbliche Angebote f??r Maler und Lackierer, Klimatechniker und Kaminbauer. Ob stunden- oder tageweise oder f??r mehrere Wochen ??? du bestimmst, wie lange du die Profis in Anspruch nehmen m??chtest. </p>

  <h3>Hochzeitsplaner gesucht?</h3>
  <p>Steht euer gro??er Tag bevor und du hast noch keinen Hochzeitsplaner? Oder suchst du einen erfahrenen Hochzeitsfotografen, den euren sch??nsten Tag im Leben bildlich festh??lt? Neben Fotografen und Raumausstattern kannst du bei uns auch S??nger und Caterer f??r deinen Hochzeitstag buchen. Klicke dazu einfach auf die gew??nschten Dienstleistungen und sieh dir die verschiedenen Angebote an. Ist jemand Passendes dabei, so kannst du es direkt ??ber unsere Webseite buchen.</p>

  <h3>Erfahrene Handwerker gesucht?</h3>
  <p>F??r bestimmte Gewerke empfiehlt es sich fast immer, sich einen Experten zu holen. So sparst du dir vor allem Zeit, w??hrend du jedoch wei??t, dass sich jemand Erfahrenes um dein Projekt k??mmert. Neben handwerklichen Experten wie Rollladen- und Markisenbauer gibt es bei uns auch Maurer, Metallbauer, Heizungsinstallateure und Glaser. Besonders f??r H??uslebauer ist es oftmals ratsam, professionelle Handwerker zu mieten, die ihr Gewerk verstehen. So hast du mehr Zeit f??r andere Dinge, w??hrend der Fliesenleger, der Estrichleger und der Dachdecker sich beispielsweise um die Fertigstellung des Innenausbaus deines Hauses k??mmern. </p>
</div>
<?php }

else if( $category->name=='Schmuck, Uhren, Accessoires')
{

?>
<div>
  <h3>Schmuck mieten f??r besondere Anl??sse</h3>
  <p>M??chtest du an deinem Hochzeitstag hochwertigen und teuren Designerschmuck tragen, ohne diesen kaufen zu m??ssen? Oder bist du auf der Suche nach Ohr-, Hals- oder Haarschmuck, den du f??r einen ganz besonderen Anlass ben??tigst? Die Kosten f??r die Neuanschaffung von Ringen, Ketten und Armb??ndern sind mitunter sehr hoch. Wer jedoch nur zu ganz besonderen Anl??ssen elegante Accessoires tragen m??chte, kann Schmuck mieten anstatt ihn zu kaufen. In der Kategorie Schmuck findest du zahlreiche Angebote f??r Anh??nger und Armb??nder, Designer-Armbanduhren, Halsketten, Schmuckringe oder Haarschmuck. Klicke dich durch die einzelnen Unterkategorien und finde bei uns hochwertigen Schmuck f??r den Anlass deiner Wahl.</p>
  <h3>So kannst du Hochzeitsschmuck online mieten</h3>
  <p>Auf der Suche nach den passenden Accessoires f??r den sch??nsten Tag deines Lebens kannst du bei uns verschiedene Schmuck-Elemente mieten anstatt sie zu kaufen. Besonders Hochzeitsschmuck ist mitunter sehr teuer, sodass es oftmals lohnt, eine Armschmuck, ein Diadem, elegante Ohrringe oder eine Designer-Halskette zu leihen. In den Angeboten dieser Kategorie findest du eine Vielzahl an Farben, sodass du den perfekten Farbton passend zu deinem Brautkleid ausw??hlen kannst.</p>
  
  <h3>Ohrringe, Ketten und Armb??nder mieten</h3>
  <p>Doch nicht nur zur eigenen Hochzeit kann es empfehlenswert sein, hochwertigen Schmuck zu mieten. Auch die geladenen G??ste der Hochzeit, die Brautjungfern sowie die Ehreng??ste sind oftmals auf der Suche nach Schmuck, den man nur f??r einen bestimmten Tag ben??tigt. Weiterhin bieten Anl??sse wie Geburtstagsfeiern, Betriebsfeiern, Feiern zur bestandenen Pr??fung oder Bef??rderung sowie Jubil??en eine gro??artige M??glichkeit, sich mit hochwertigem Schmuck zu schm??cken. Von Anstecknadeln und Manschettenkn??pfen ??ber Armreife, Halsketten in jeder L??nge und Haarschmuck bis hin zu Ohrsteckern und Ohrringen ??? die Inserate f??r den privaten wie auch gewerblichen Schmuckverleih in deiner N??he sind vielseitig. </p>
  <h3>Schmuck leihen statt kaufen</h3>
  <p>Anstatt teuren Schmuck zu kaufen, den du nur wenige Male im Jahr tr??gst, lohnt es sich mitunter mehr, sich von Zeit zu Zeit sch??nen Schmuck zu leihen. So bleibt die Auswahl des gew??nschten Schmucks jedes Mal spannend, w??hrend die mitunter preisstarken Schmuckst??cke so h??ufig wie m??glich getragen werden, anstatt achtlos in der Schublade zu liegen. Wenn auch du Schmuck f??r besondere Anl??sse leihen statt kaufen willst, bist du bei fair-hand genau richtig. </p>
</div>
<?php }


else if( $category->name=='Events, Messen und Partys')
{
?>
<div>
  <h3>Event-Vermietung ??? Geschirr, Personal und Catering</h3>
  <p>Ob klein oder riesig, Events bed??rfen nicht nur einer besonders guten Planung. Genauso wichtig ist es, passendes Equipment f??r das Event zu haben. Zu Geburtstagen oder Taufen, auf Firmenfeiern, bei Silber- oder Goldhochzeiten oder zur bestandenen Pr??fung oder Bef??rderung ??? damit das geplante Event ein voller Erfolg wird, gibt es diverse Dienstleister und Ausstattungen, die dein Event abrunden. Neben Mietm??beln und Partyr??umen kannst du bei uns unter anderem Zelte ausleihen, Veranstaltungstechnik mieten und H??pfburgen leihen. Weiterhin findest du bei uns Angebote f??r Funfood, Gastronomie und Bars, Eventmodule sowie vollst??ndig ausgestattete B??hnen, Absperrungen und Z??une oder Messebedarf.</p>

  <h3>Betriebsfeier geplant? Finde hier passendes Mobiliar f??r euer Event</h3>
  <p>Neben privaten Vermietern k??nnen bei fair-hand auch Gewerbetreibende ihr Mobiliar ??ber uns vermieten. Besonders f??r Betriebsfeiern enth??lt die Kategorie Events eine vielseitige Auswahl an Angeboten f??r den Geschirrverleih, Miettoiletten und Mietm??bel, Zeltverleih und Dekoration. Dar??ber hinaus kannst du hier Eventmodule und Eventpersonal mieten, B??hnen ausleihen und deinen bevorzugten Catering-Service ausw??hlen. Auch besondere Gewerke f??r besondere Veranstaltungen sind bei uns zu finden. Neben Bodenbel??gen und Kinderanimation geh??ren auch Angebote f??r den Verleih von H??pfburgen und Hussen zu dieser Kategorie.</p>

  <h3>Seminar- und Konferenzr??ume in deiner N??he mieten</h3>
  <p>Finde mit nur wenigen Klicks Seminar- und Konferenzr??ume in deiner N??he und miete sie f??r exakt die Dauer, die du m??chtest. Auf Wunsch findest Du auch passende Catering-Anbieter sowie Angebote f??r Veranstaltungstechnik und Moderationsequipment, falls dein Event mit besonderem Equipment ausgestattet sein soll. Von kleinen Konferenzr??umen ??ber Seminarr??ume f??r mittlere und gro??e Gruppen bis hin zu Locations f??r Betriebsfeiern und Veranstaltungen mit tausenden von Mitarbeitern ??? klicke dich einfach durch die zahlreichen Anbieter f??r Party-, Seminar- und Konferenzr??ume</p>

  <h3>Vermietung von Messem??beln in deiner N??he</h3>
  <p>Suchst du f??r dein Unternehmen einen Verleiher f??r Mietm??bel, Messe-Equipment und zuverl??ssigem Personal? Dann wirst du in unseren Angeboten f??r Komplettpakete, einzelne Mietm??bel und Eventpersonal sicherlich f??ndig. Vom Geschirrverleih in deiner N??he ??ber Angebote zur Ausstattung deines Messestandes bis hin zu Experten f??r Bodenbel??ge, B??hnen und Moderationsequipment ??? bei uns kannst du nahezu alles mieten, was du f??r einen erfolgreichen Messeauftritt ben??tigst. </p>
</div>

<?php }
else if( $category->name=='Fahrzeuge')
{
?>

<div>
  <h3>So einfach kannst du Fahrzeuge online mieten</h3>
  <p>Bist du auf der Suche nach einer Limousine f??r deinen Hochzeitstag? Suchst du kurzfristig einen Anh??nger oder einen Abschleppwagen? Oder tr??umst du davon, mit einem Wohnmobil in den Urlaub zu fahren, hast aber kein eigenes? Dann ist unser Fahrzeuge-Verleih genau das Richtige f??r dich. Hier kannst du Oldtimer mieten, Limousinen stunden- oder tageweise buchen und Trikes, Motorr??der sowie Transporter mieten. Nat??rlich findest du hier auch diverse Autos, die du dir ausleihen kannst. Wie w??re es beispielsweise mit einem coolen Oldtimer, einem Hummer oder einem Rolls Royce, den du f??r den wichtigsten Tag in deinem Leben mieten kannst?</p>

  <h3>Bei uns kannst du dein Traumauto mieten</h3>
  <p>Hast du schon immer davon getr??umt, einmal mit einem Lamborghini zu fahren? Oder w??rst du gern f??r einen Tag ein Ferrari-Pilot? Ganz gleich, ob Bentley, Hummer oder Porsche ??? bei uns kannst du dein Traumauto bequem online mieten. Klicke dich dazu einfach durch die Angebote in deiner N??he und nutze unseren Fahrzeugverleih f??r Traumautos. Private wie auch gewerbliche Autobesitzer verleihen ihre Fahrzeuge auf fair-hand, wodurch du eine Vielzahl von Autos, Zweir??dern und Transporter zur Auswahl hast. Neben Elektroautos und Quads geh??ren zum Beispiel auch Roller, Cabrios und Partybusse zu den Fahrzeugen, die du mieten kannst.</p>

  <h3>Suchst du einen LKW- oder Transporter-Verleih in deiner N??he?</h3>
  <p>Dann klicke dich bequem durch die Angebote der zahlreichen Fahrzeugvermieter, um das passende Fahrzeug zum fairen Preis mieten zu k??nnen. Ob f??r einen privaten Umzug oder f??r gewerbliche T??tigkeiten, unseren Fahrzeugverleih-Service k??nnen Privatpersonen wie auch Unternehmen gleicherma??en nutzen. Profitiere von der gro??en Auswahl an Mietfahrzeuge und buche LKW, Transporter, K??hlfahrzeuge, Anh??nger und Abschleppwagen dann, wann du sie ben??tigst. Neben der stundenweisen Anmietung von Transportern oder LKW gibt es bei uns zudem die M??glichkeit, die bei uns angebotenen Fahrzeuge auch tage- oder sogar wochenweise anzumieten. 

</p>

  <h3>Wohnmobil mieten leicht gemacht</h3>
  <p>M??chtest du gern mit einem Wohnmobil durch Deutschland oder Europa fahren? Die Anschaffungskosten f??r ein Wohnmobil sind jedoch meist sehr hoch, sodass es sich mitunter lohnt, ein Wohnmobil zu mieten anstatt eines neu zu kaufen. Bei uns findest du verschiedene Anbieter f??r Wohnmobile, die ihre Fahrzeuge zum Verleih anbieten. </p>
</div>

<?php }
else if( $category->name=='Freizeit')
{
?>
<div>
  <h3>Sport- und Freizeitgegenst??nde mieten</h3>
  <p>Von einer kompletten Campingausr??stung ??ber Boote und Yachten bis hin zu Fahrr??dern, Gartenpavillons und Freizeitgegenst??nden f??r Kinder ??? in der Kategorie Freizeit findest du diverse Angebote f??r Sport, Spiel und Freizeitgestaltung. Neben Zelten und Kutschen kannst du beispielsweise eine Kutsche, Spielekonsolen oder Musikinstrumente mieten. So sparst du dir die teure Anschaffung eines neuen Teils und schonst zugleich die Umwelt, indem du vorhandene Ressourcen nutzt, die der Besitzer in dem Moment nicht ben??tigt. W??hle dazu einfach die gew??nschte Unterkategorie im Bereich Sport und Freizeit aus und klicke dich durch die Angebote. Du entscheidest, ob du nur stundenweise Sportger??te ben??tigst oder ob du Campingausr??stungen, Boote oder Requisiten ??ber einen l??ngeren Zeitraum mieten m??chtest.</p>

  <h3>Kost??m- und Musikinstrumentenverleih in deiner N??he</h3>
  <p>Suchst du einen Verleih f??r Musikinstrumente, Kost??me oder Requisiten? Dann bist du bei uns genau richtig. Wir bieten eine Vielzahl an Angeboten im kreativen Bereich. Ob k??nstlerisch oder musisch ??? bei fair-hand findest du Gegenst??nde zum Mieten aus nahezu jedem Bereich. Dar??ber hinaus kannst du bei uns auch gleich den passenden Kunst- oder Musiklehrer finden. Das Besondere bei fair-hand ist, dass du keinerlei langfristige Mietvertr??ge eingehen musst. Im Gegenteil: du mietest die gew??nschten Gegenst??nde oder Dienstleistungen nur f??r die Dauer, in der du sie auch ben??tigst. </p>

  <h3>Wie w??re es, ein Boot oder eine Yacht zu mieten?</h3>
  <p>Wer in Besitz eines g??ltigen Bootf??hrerscheins ist, darf in Deutschland sowohl Boote als auch Segelboote fahren. Doch was tun, wenn sich die Anschaffung eines Bootes oder gar einer Yacht im Vergleich zu der potenziellen Nutzung nicht lohnt? Ganz einfach, du mietest dir dein Traumboot oder deine Traumyacht ??ber uns. Privatpersonen wie auch Gewerbetreibende k??nnen bei uns ihre Boote und Yachten vermieten, sodass du sicherlich ein passendes Angebot finden wirst. </p>

  <h3>Bei uns kannst du Baby- und Kinderausstattung mieten </h3>
  <p>Brauchst du f??r einen geplanten Ausflug einen Bollerwagen? Oder bist du auf der Suche nach einem Kombi-Kinderwagen f??r den bevorstehenden Urlaub? Ganz gleich, ob du Kinder-Rollschuhe, Krabbeltunnel oder eine Babytrage mieten m??chtest, in unserer Kategorie Freizeit findest du eine vielseitige Auswahl an Baby und Kinder-Anzeigen. Neben praktischen Babytragen und Kinderwagen geh??ren zu der Unterkategorie Baby und Kind auch Angebote f??r Kindersport und Kinder-Gartenspielger??te, die du bei uns mieten kannst.</p>
</div>

<?php }
else if( $category->name=='Hochzeit')
{
?>
<div>
  <h3>Mietangebote rund um den sch??nsten Tag im Leben</h3>
  <p>Die Hochzeit ist einer der wichtigsten Tage im Leben eines Paares. Damit dieser ein voller Erfolg wird, bedarf es einer guten Vorbereitung sowie unvergessliche Extras. Wir haben daher eine gro??e Auswahl an Angeboten, die du speziell f??r eine bevorstehende Hochzeit mieten kannst. Neben traumhaft sch??nen Hochzeitsautos findest du in dieser Kategorie unter anderen Hochzeitskutschen, die du mieten kannst sowie diverse Inserate f??r die Vermietung von Hochzeitsdekoration. Weiterhin kannst du bei uns nicht nur Hochzeitsmusik oder Hochzeitss??nger buchen, sondern auch gleich einen Hochzeitsplaner, der dir die gesamte Planung deines wichtigsten Tages abnimmt. Von der Hochzeitslocation ??ber Brautkleider bis hin zu Hochzeitsfotografen ??? bei fair-hand kannst du sowohl Hochzeits-Equipment mieten als auch erfahrene Dienstleister buchen.</p>

  <h3>Vom Brautkleid bis zum Hochzeitsauto ??? so einfach geht mieten</h3>
  <p>Anstatt dir ein Brautkleid zu kaufen bieten wir dir die M??glichkeit, dir eines auszuleihen. W??hle aus privaten Inseraten sowie Angeboten von Brautmodengesch??ften dein absolutes Traum-Brautkleid aus und miete es f??r deinen Hochzeitstag. So sparst du dir viel Geld f??r ein Brautkleid, das du ??? im Idealfall ??? nur ein Mal in deinem Leben tragen wirst. Dar??ber hinaus findest du bei uns zahlreiche Angebote zur Vermietung von Hochzeitsautos. Vom Rolls Royce ??ber Limousine bis hin zur Hochzeitskutsche ??? du bestimmst, in welchem Fahrzeug du an deinem sch??nsten Tag im Leben gefahren werden m??chtest.</p>

  <h3>Miete deine Traum-Hochzeitslocation samt Hochzeitsdekoration</h3>
  <p>M??chtest du gern in einem Schloss heiraten? Oder tr??umst du davon, dir das Ja-Wort unter freiem Himmel geben zu k??nnen? Ganz gleich, wie deine ganz pers??nliche Traum-Hochzeitslocation auch aussieht, bei uns findest du zahlreiche Anbieter f??r Locations, aus denen du die f??r dich beste Location ausw??hlen und anmieten kannst. Zudem bekommst du bei uns auch die passende Hochzeitsdekoration inklusive Stuhlhussen, Geschirr, B??hne und Musikausr??stung, den passenden DJ, Hochzeitsband oder Hochzeitss??nger</p>

  <h3>Plane die Anmietung deiner Hochzeitsausstattung fr??hzeitig</h3>
  <p>Damit deine Hochzeit sp??ter stressfrei ablaufen kann, empfiehlt es sich, wichtige Bestandteile einer Hochzeit wie das Brautkleid, die Location, das Hochzeitsauto und die Hochzeitsmusik fr??hzeitig zu organisieren. Wir raten daher, diese wesentlichen Elemente f??r deine Hochzeit so fr??h wie m??glich zu mieten, damit du den Kopf frei hast f??r andere Dinge. </p>
</div>

<?php }
else if( $category->name=='Immobilien')
{
?>
<div>
  <h3>Immobilien mieten in deiner Wunschstadt</h3>
  <p>Die Suche nach einer geeigneten Immobilie gestaltet sich mitunter schwierig. Mal stimmt die Gr????e der angebotenen Immobilie nicht, mal der Preis. Bei uns findest du hingegen eine gro??e Auswahl an Immobilien zum Mieten, die sich deinen Bed??rfnissen ideal anpassen. Von einem Zimmer in einer WG ??ber Prober??ume bis hin zu B??ros, Lagerr??umen und Garagen ??? bei uns findest du mit Sicherheit eine passende Immobilie in deiner N??he. Der Vorteil bei den Inseraten auf fair-hand ist, dass du die Dauer der gemieteten Immobilie individuell gestalten kannst. Von kurzzeitigen Aufenthalten bis hin zu einer monatelangen Anmietung von privaten oder gewerblichen Immobilien ??? hier findest du eine Vielzahl an Angeboten zur Immobilienvermietung in deiner Wunschstadt.</p>

  <h3>M??chtest du eine Garage oder einen Lagerplatz anmieten?</h3>
  <p>Dann sieh dir die Inserate zur Vermietung von Lagerhallen, Stellpl??tzen und Kellerr??umen in dieser Kategorie an. Suche dir dazu die passende Stadt aus und bestimmte die Dauer deiner Anmietung. Gemeinsam mit dem Anbieter der Immobilie legst du auch langfristigere Anmietungen fest, sofern du dies w??nschst. Doch auch, wenn du nur Bedarf an einer stundenweisen Anmietung einer Garage, eines Kellerraumes, einer Werkstatt oder eines Proberaums hast, wirst du in der Kategorie Immobilien auf fair-hand f??ndig.</p>

  <h3>Gewerbliche Immobilien zur Anmietung gesucht?</h3>
  <p>Von B??ror??umen jeder Gr????e ??ber Gesch??ftsimmobilien mit B??ros und Lagerkapazit??t bis hin zu gro??z??gigen Lagerhallenfl??chen in ganz Deutschland ??? auf unserem Portal k??nnen Gewerbetreibende wie auch Immobilienbesitzer ihre Fl??chen zur Vermietung anbieten. So hast du eine gro??e Auswahl an Immobilienangeboten, die von klassischen Wohnungen und H??usern ??ber einzelne Stellpl??tze bis hin zu Kfz-Werkst??tten, Seminarr??umen und Ateliers gehen. Weiterhin kannst du bei uns Lagerhallen in nahezu jeder Gr????e finden, die ??ber die von dir ben??tigte Ausstattung verf??gen. Dies k??nnen sowohl vorhandene Lastenaufz??ge als auch Rolltore, Hallen mit Wasseranschluss oder Starkstrom oder aber Wachpersonal sein.</p>

  <h3>Immobilien zur privaten Nutzung</h3>
  <p>Neben gewerblichen Immobilien findest du in dieser Kategorie auch zahlreiche Angebote f??r die Vermietung von Immobilien zur privaten Nutzung. Dazu z??hlen einzelne Zimmer oder Ferienwohnungen und -h??user, aber auch besondere ??rtlichkeiten wie Kunstateliers, Werkstattpl??tzen oder tempor??ren Pl??tzen zum Arbeiten. M??chtest du Immobilien in deiner Wunschstadt mieten? Dann st??bere durch die Anzeigen dieser Kategorie. Hier wirst du sicherlich f??ndig</p>
</div>

<?php }
else if( $category->name=='K??nstler')
{
?>
<div>
  <h3>Bei uns kannst du K??nstler jeder Art buchen</h3>
  <p>Von Clowns f??r Kindergeburtstage ??ber Magier und Zauberer bis hin zu Alleinunterhaltern, Comedians und Schnellzeichnern ??? bei uns kannst du diverse K??nstler f??r dein Event buchen. Dies kann eine Hochzeit, ein Geburtstag oder ein anderer besonderer Tag sein, an dem du dir professionelle Unterhaltung durch einen K??nstler w??nschst. Oder suchst du eine Band oder einen S??nger f??r eine bevorstehende Firmenfeier oder eine Weihnachtsfeier? Klicke dich durch die Inserate unserer Kategorie K??nstler, um einen DJ oder einen Stripper zu buchen, einen Ballonk??nstler oder T??nzer zu finden oder um Spezial-Acts wie beispielsweise Stelzenl??ufer oder eine Feuershow zu buchen.</p>

  <h3>Stripper f??r Junggesellinnenabschied buchen</h3>
  <p>Willst du der zuk??nftigen Braut an ihrem Junggesellinnenabschied eine ganz besondere Freude machen und ihr einen Stripper buchen? Bei uns kannst du K??nstler jeder Art f??r besondere Anl??sse wie Junggesellenabschiede buchen, damit dieser ein voller Erfolg werden. Klicke dich einfach durch die verschiedenen Angebote an K??nstlern in deiner gew??nschten Stadt und finde bei uns neben einem Stripper beispielsweise auch einen DJ, Alleinunterhalte oder S??nger und Bands. </p>

  <h3>K??nstler f??r Kindergeburtstage buchen</h3>
  <p>Wie w??re es, dein Kind an seinem Geburtstag mit einem ganz besonderen Ereignis zu ??berraschen? Buche bei uns Ballonk??nstler, Magier, Zauberer oder Clown f??r Kindergeburtstage. Du entscheidest, f??r welches Angebot du dich entscheidest, weil es deinen Anforderungen am besten entspricht. Weiterhin hast du bei uns die M??glichkeit, die K??nstler f??r exakt den Zeitraum zu mieten, f??r den du ihn brauchst. Ob stunden- oder tageweise oder f??r regelm????ige Events ??? du stimmst dich mit dem gebuchten K??nstler aus deiner N??he selber ab, um die Rahmenbedingungen f??r seinen geplanten Auftritt abzukl??ren. Auf diese Weise bist du sehr flexibel bei der Auswahl deiner Acts.

</p>

  <h3>Musiker oder Bands f??r Firmenfeier buchen</h3>
  <p>Um die geplante Firmenfeier musikalisch abzurunden, kannst du bei uns passende Musiker oder Bands buchen. Von Solo-S??ngerinnen und S??ngern bis hin zu Vollblut-Musikern und Bands samt Equipment ??? du w??hlst aus, welche Art von K??nstler du dir f??r die bevorstehende Firmenfeier vorstellst. Nat??rlich findest du in dieser Kategorie auch weitere K??nstler, die deine Betriebsfeier ideal erg??nzen w??rden: neben Comedians und DJs bieten hier T??nzer wie auch Walkacts ihre Dienstleistungen an. </p>
</div>

<?php }
else if( $category->name=='Werkzeuge')
{
?>
<div>
  <h3>So mietest du Werkzeuge in deiner N??he</h3>
  <p>Brauchst du Klimager??te, einen Hochdruckreiniger oder einen Abbruchhammer f??r dein bevorstehendes Projekt? Oder m??chtest du dir einen professionellen Akkuschrauber oder eine Bohrmaschine ausleihen, um die hohen Kosten einer Neuanschaffung zu umgehen? Ganz gleich, ob du auf der Suche nach Gartenger??ten, Bautrocknern oder Luftentfeuchtern bist, in unserer Kategorie Werkzeuge findest du mit Sicherheit das passende Ger??t. Von Schleifmaschinen und Kompressoren ??ber Schneefr??sen und R??ttelplatten bis hin zu Pumpen, Fr??sen und S??gen ??? die Kategorie Werkzeuge umfasst eine Vielzahl an Inseraten f??r Ger??te und Maschinen zum Ausleihen. </p>

  <h3>Gro??e Auswahl an Mietwerkzeugen in deiner N??he</h3>
  <p>Bei der Auswahl der passenden Werkzeuge stehen dir diverse Unterkategorien zur Verf??gung, aus denen du das gew??nschte Werkzeug ausw??hlen kannst. So findest du beispielsweise zahlreiche Gartenger??te wie etwa Gartenwalzen, Baumstumpfs??gen und Vertikutierer, aber auch H??cksler, Motorsensen oder Teichschlammsauger. Weiterhin kannst du bei uns Nasssauger und Kehrmaschinen mieten, Dampf- oder Hochdruckreiniger leihen und Klimager??te sowie Bautrockner ausleihen. So hast du f??r jedes Projekt das passende Mietwerkzeug, ohne dass du es kaufen musst. Von g??ngigen Werkzeugen wie Bohrmaschinen, Akkuschraubern und Rasenm??hern bis hin zu Spezialwerkzeugen ??? bei fair-hand findest du Angebote f??r diverse Werkzeuge.</p>

  <h3>Werkzeuge f??r den privaten und gewerblichen Gebrauch</h3>
  <p>Die Inserate f??r Mietwerkzeuge richten sich sowohl an Privatpersonen als auch an Gewerbetreibende. Die Mietdauer ist dabei individuell mit dem Vermieter der Werkzeuge abzustimmen. So kannst du sicher sein, dass du die ben??tigten Werkzeuge nur in der ben??tigten Zeit mietest. Das spart Kosten, w??hrend vorhandene Werkzeug-Ressourcen bereits anderweitig vermietet und genutzt werden k??nnen. Durch die gemeinsame Nutzung bereits angeschaffter Werkzeuge schonst du nicht nur die Umwelt, sondern auch das Werkzeug selbst wird seinem Zweck entsprechend regelm????ig verwendet.</p>

  <h3>So mietest du Werkzeuge aus deiner N??he</h3>
  <p>W??hle zun??chst die gew??nschte Unterkategorie im Bereich der Werkzeuge und suche anschlie??end in deiner oder der n??chstgelegenen Stadt nach passenden Anzeigen f??r Mietwerkzeuge. Ob Entfeuchter und Poliermaschine, Schuttrutschen und Parkettschleifmaschinen oder Rohrkameras und M??bellifte ??? Werkzeuge online mieten ist so einfach und vielf??ltig wie nie. Klicke dich durch die verschiedenen Subkategorien, um Spezialwerkzeuge, Spezialkameras oder spezielle Schleifmaschinen zu mieten. </p>
</div>

<?php } ?>
</div>
</div>
  </div>
</div>
</div>
<?php get_footer(); ?>




<?php /* Template Name: product upload tab*/

$user_info = get_user_meta($current_user->ID);
// print_r($user_info);

// $product_ids = array( '308', '309','310','311' );
// if(!has_bought_items( '', $product_ids ) ){
//   if ($user_info['radio_btns'][0]=='Ich verleihe als Unternehmen'){   
//       header('Location: /company-pricing');
//       exit;
//   }
//   else{
//     header('Location: /private-pricing');
//     exit;
//   }
// }

  get_header(); 
 
// if(array_key_exists('submit_button', $_POST)) {
//   $product_ids = array( '308', '309','310','311' );
//       if(!has_bought_items( '', $product_ids ) ){
//         if ($user_info['radio_btns'][0]=='Ich verleihe als Unternehmen'){   
//             header('Location: https://fair-hand.com/company-pricing');
//             exit;
//         }
//         else{
//           header('Location: https://fair-hand.com/private-pricing');
//           exit;
//         }
//       }
// }

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
  // Get All order of current user
  $orders = get_posts( array(
      'numberposts' => -1,
      'meta_key'    => '_customer_user',
      'meta_value'  => get_current_user_id(),
      'post_type'   => wc_get_order_types( 'view-orders' ),
      'post_status' => array_keys( wc_get_order_statuses() )
  ) );
?> 
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
 <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

<script>
    function fileSelection() {
      var customFile = document.getElementById('customFile').value;
      document.getElementById("demo1").innerHTML = customFile;
    }
  </script>
<style>
.product-upload-container{
  display:flex;
  flex-direction: row;
  
}
.left-container{
  width: 30%;
    float: left;
}
.right-container{
  width:70%;
  float:right;
  margin-top:30px;
}
.toggle-form{
  
  margin:20px 0;
  display:flex;
    align-items:flex-start;
    justify-content:flex-start;
}
#mytabs{
  width:100%;
  background-color:#c60967;
  margin: 0px;
}
.nav-tabs>li.active>a, .nav-tabs>li.active>a:focus, .nav-tabs>li.active>a:hover {
     color: #c60967;
    background-color: #fff; 
    width: 150px;
}

.nav-tabs>li>a {
    border-radius: 0px;
    width: 150px;
    text-align: center;
    font-weight:600;
    color:#fff;
}
.tab-content{
  margin-top:20px;
}
.toggle-wrap{
  border: 1px solid #9b9b9b;
    /* background: #ffffff url(/img/jquery/ui/ui-bg_flat_100_ffffff_40x100.png) 50% 50% repeat-x; */
    color: #656668;
    text-align: left;
    width:80%;
    display:flex;
    align-items:center;
    justify-content:center;
    flex-direction:column;
    
}
.category-heading h2{
  color:#c60967;
 }
.category-listing{
  display:flex;
  margin:0;
  padding:0;
}
.form-group{
  width:300px;
  
}
select.form-control:not([size]):not([multiple]) {
   height:unset;
}
.wrap-next{
  width:100%;
}
.wrap-left{
  float:left;
  width:50%;
}
.wrap-right{
  float:right;
  width:50%;
  display: flex;
    align-items: flex-end;
    justify-content: flex-end;
}
.next-button{
  float:right;
  border-radius: 10px;
  border: 2px solid #c60967;
  width:150px;
  margin:10px;
  color:#c60967;
}
input[type="submit"]{
    border-radius: 10px;
    border: 2px solid #c60967 !important;
    /* margin-left: 74px; */
    margin-right: 20px;
    color: #c60967 !important;
    width: 150px;
    margin: 10px;
    height: 40px;
    background: white !important;
    font-weight: 600;
}

.error{
  color:red;
  font-style:italic;
  font-weight:200;
}
@media screen and (min-width: 1500px){
          .product-wrapper{
            display: flex;
          align-items: flex-start;
          justify-content: center;
          min-height: calc(100vh - 400px);
      }
      .product-upload-container{
			max-width:1500px;
		}
}

	
	

  @media screen and (max-width: 960px){
    .product-upload-container {   
        flex-direction: column;
    }
    .right-container{
      width:100%;
    }
    .left-container{
      width:100%;
    }
    .left-container{
      width:100%;
    }
   
    .toggle-wrap {
        width:100%;
    }
    form.woocommerce-EditAccountForm.edit-account {
        margin: 0 12px !important;
    }
    .woocommerce form .form-row input.input-text, .woocommerce form .form-row textarea {   
     margin: 0 0 !important;
    }
  }
  @media screen and (max-width: 1100px){

    .category-listing {
    display: block;
    }
  }
  @media only screen and (max-width: 1024px){
.nav, .main-navigation, .genesis-nav-menu, #main-header, #et-top-navigation, .site-header, .site-branding, .ast-mobile-menu-buttons, .storefront-handheld-footer-bar, .hide {
    display:block !important;
}}

 .next-tab,.previous-tab{
	display: inline-block;
	border: 2px solid #c60967;
	border-radius: 3px;
	margin: 10px;
	color: #c60967;
	font-size: 14px;
	padding: 10px 15px;
	cursor: pointer;
  background: white !important;
    font-weight: 600;

    width: 150px;
    text-align: center;
  border-radius: 10px;
    
    
}
</style>
<div class="product-wrapper">
<div  class="product-upload-container">
  <div class="left-container">
    <?php  include_once('menu-navigation.php'); ?>
  </div>

  <div class="right-container">
  <div class="category-heading">
    <h2>Kategorie wählen</h2>
    <p>Wählen Sie die Kategorie, in der Ihr Inserat erscheinen soll.</p>
  </div>
  <form method="post" action="" class="toggle-form" enctype="multipart/form-data">
<div class="toggle-wrap tabs">
  <ul class="nav nav-tabs" id="mytabs" role="tablist">
    <li role="presentation" class="active"><a href="#step1" aria-controls="step1" role="tab" data-toggle="tab">Kategorie</a></li>
    <li role="presentation"  id="two" class="tab-two" style="pointer-events: none;"><a href="#step2" aria-controls="step2" role="tab" data-toggle="tab">Beschreibung</a></li> 
  </ul>
  <?php if ($_SERVER["REQUEST_METHOD"] == "POST") {
                    if (empty($_POST["product_title"])){         
                        $nameErr = "Dieses ist ein Pflichtfeld";  
                    }
                    if (empty($_POST["Category"])){
                      $catErr = "Bitte wähle eine Option";
                    }
                    if(empty($_POST["Description"])){
                      $desErr = "Dieses ist ein Pflichtfeld";
                    }
                    if(empty($_POST["Price"])){
                      $priErr = "Dieses ist ein Pflichtfeld";
                    }
                    if(empty($_POST["Distance"])){
                      $disErr = "Dieses ist ein Pflichtfeld";
                    }
                    if(empty($_POST["Company"])){
                      $comErr = "Dieses ist ein Pflichtfeld";
                    }
                    if(empty($_POST["Firstname"]) ){
                      $firErr = "Dieses ist ein Pflichtfeld";
                    }
                    if(empty($_POST["Lastname"])){
                      $lasErr = "Dieses ist ein Pflichtfeld";
                    }
                    if(empty($_POST["Email"])){
                      $emaErr = "Dieses ist ein Pflichtfeld";
                    }
                    if(empty($_POST["Telephone"])){
                      $telErr = "Dieses ist ein Pflichtfeld";
                    }
                    if(empty($_POST["Sub_Category"])){
                      $subErr = "Bitte wähle eine Option";
                    }
                    if(empty($_POST["Cities"])){
                      $citErr = "Dieses ist ein Pflichtfeld";
                    }
                    if(empty($_POST["ZIP"])){
                      $zipErr = "Dieses ist ein Pflichtfeld";
                    }                  
                    
                    
    }
    ?>
    <div id='content' class="tab-content">
          <div role="tabpanel" class="tab-pane active" id="step1">
                <ul class="category-listing">
                  <div class="form-group">
                        <label for="Category">Kategorie<span class="error">* <?php echo $catErr; ?> </span></label>
                        <select class="form-control" name="Category" id="Category" size="15" required>                          
                          
                          <?php
                          foreach ($all_categories as $category) {
                            if ($category->category_parent == 0 && $category->name != 'Uncategorized' && $category->name != 'Subscription') {
                          ?>
                              <option value="<?php echo $category->term_id ?>"><?php echo $category->name;
                                                                                ?></option>
                          <?php }
                          } ?>
                         <option href="#">Andere</option> 
                        </select>
                        <p id="demo"></p>
                      </div>
                      <div class="form-group">
                        <label for="Sub_Category">Unterkategorie<span class="error">* <?php echo $subErr; ?> </span></label>
                        <select class="form-control" name="Sub_Category" id="Sub-Category" size="15" required>
                          
                          <?php
                          foreach ($all_categories as $category) {
                            if ($category->category_parent != 0 && $category->name != 'Uncategorized') {
                          ?>
                              <option style="display:none;" data-category-parent="<?php echo $category->category_parent ?>" value="<?php echo $category->term_id ?>"><?php echo $category->name;
                                                                                                                                                                      ?></option>
                          <?php }
                          }
                          ?>
                        </select> 
                                             
                      </div>                      
                  </ul>  
                  <div class="wrap-next" >
                    <div class="wrap-left">
                    
                    <a href="mailto:info@fair-hand.com" >Ihre Kategorie nicht dabei? Sagen Sie uns Bescheid!</a>     
                    <!-- <a href="#step2" data-toggle="tab" class="next-button" style="text-align:center">Next</a> -->
                    </div>
                    <div class="wrap-right">
                    <span class="next-tab" id="next-tab" onclick="return Validate()">Weiter</span>
                    </div>
                  </div>             
          </div>

      <div role="tabpanel" class="tab-pane" id="step2">
          <ul style="margin:0;
  padding:0;">
          <div class="form-group">
              <label for="product_title">Titel <span class="error">* <?php echo $nameErr; ?> </span></label>
              <input type="text" class="form-control" name="product_title" id="product_title" value="<?php echo isset($_POST["product_title"]) ? $_POST["product_title"] : ''; ?>" required>
            </div>
            <div class="form-group">
              <label for="imageupload">Bilder hochladen <span class="error">* <?php echo $imgErr; ?> </span></label>
              <div class="custom-file">
                <input type="file" class="img-upload file" name="customFilemain[]" id="img-file"  multiple="multiple" required>
                <p>*Max. 3 Bilder *Max. 2MB</p>
                
                <!-- <label class="custom-file-label" name="customFile" for="customFile">Choose file</label>
                <p id="demo1"></p> -->
              </div><br></br>
            </div>
            <div class="form-group">
              <label for="Description">Inseratsbeschreibung <span class="error">* <?php echo $desErr; ?> </span></label>
              <textarea class="form-control" name="Description" id="Description" rows="3" required></textarea>
            </div>
            <div class="form-group">
              <label for="Characteristics">Eigenschaften</label>
              <input type="text" class="form-control" name="Characteristics" id="Characteristics" placeholder="" value="<?php echo isset($_POST["Characteristics"]) ? $_POST["Characteristics"] : ''; ?>">
            </div>
            <hr>
            
            <div class="form-group">
              <label for="Price">Preis <span class="error">* <?php echo $priErr; ?> </span></label>
              <input type="number" class="form-control" name="Price" id="Price" value="<?php echo isset($_POST["Price"]) ? $_POST["Price"] : ''; ?>" required>
            </div> 

            <div class="form-group">
              <!-- <label for="Negotiation">Negotiation</label>               -->
              <select class="form-control" name="Negotiation" id="Negotiation" required>
                      <option value="Festpreis">
                        Festpreis
                      </option>
                      <option value="Verhandlungspreis">
                        Verhandlungspreis
                      </option>
                      <option value="auf Anfrage">
                        auf Anfrage
                      </option>                    
              </select>   
            </div>

            <div class="form-group">
              <!-- <label for="Duration">Duration</label> -->
              <select class="form-control" name="Duration" id="Duration" required>
                      <option value="pro Stunde">
                        pro Stunde
                      </option>
                      <option value="pro Tag">
                        pro Tag
                      </option>                     
                      <option value="pro Woche" >
                        pro Woche
                      </option>
                      <option value="pro Monat">
                        pro Monat
                      </option>
                      <option value="für 2 Tage">
                        für 2 Tage
                      </option>
                      <option value="für 3 Tage">
                        für 3 Tage
                      </option>
                      <option value="Wochenendpreis">
                        Wochenendpreis
                      </option>
              </select>
            </div>

            <div class="form-group">
              <label for="Vat">Angaben zur Mehrwertsteuer:</label>
              <select class="form-control" name="Vat" id="Vat" required>
                      <option value="Die Mehrwertsteuer ist auf der Rechnung ausgewiesen.">
                        Die Mehrwertsteuer ist auf der Rechnung ausgewiesen.
                      </option>
                      <option value="Die Mehrwertsteuer ist nicht auf der Rechnung ausgewiesen.">
                        Die Mehrwertsteuer ist nicht auf der Rechnung ausgewiesen.
                      </option>
              </select>
            </div>
          <hr>

          <div class="form-group">
              <label for="Hauptstandort">Hauptstandort</label>
                           
              <span class="error">* <?php echo $zipErr; ?> </span>
              <input type="number" class="form-control" name="ZIP" id="ZIP" placeholder="PLZ"  pattern="[0-9]{5}" maxlength="5" value="<?php echo isset($_POST["ZIP"]) ? $_POST["ZIP"] : ''; ?>" required>
            
              <span class="error">* <?php echo $citErr; ?> </span>
              <!-- <input type="text" class="form-control" name="Cities" id="Cities" placeholder="PLZ" value="<?php echo isset($_POST["Cities"]) ? $_POST["Cities"] : ''; ?>" >
               -->
              <select class="form-control" name="Cities" id="Cities"  value="<?php echo isset($_POST["Cities"]) ? $_POST["Cities"] : ''; ?>" required>
                      <option value="" disabled selected>Ort</option>
                      <?php
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
                                        <option value="<?php echo $row["City"] ; ?>"><?php 
                                        echo $row["City"] ;
                                        ?></option>
                                      <?php  } ?>
              </select> 
            </div>
            

            <div class="form-group">
              <label for="Distance">Wählen Sie hier den Umkreis, in dem Sie Mietartikel oder Dienstleistungen anbieten: <span class="error">* <?php echo $disErr; ?> </span></label>
              <select class="form-control" name="Distance" id="Distance" required>
                      <option value="">&nbsp;</option>
                      <option value="Bis 50 km">Bis 50 km</option>
                      <option value="Bis 100 km">Bis 100 km</option>
                      <option value="Bis 150 km">Bis 150 km</option>
                      <option value="Bis 200 km">Bis 200 km</option>
                      <option value="Deutschlandweit">Deutschlandweit</option>
              </select>
            </div>
           
            <div class="form-group">
              <label for="Delivery">Wählen Sie hier optional eine Zusatzangabe aus, die im Inserat veröffentlicht werden soll:</label>
                  <div style="clear: both">&nbsp;</div>
                    <label style="cursor: pointer">
                      <input type="radio" name="Delivery" value="Deutschlandweiter Versand" style="width: auto" >
                      <span>Deutschlandweiter Versand</span>
                    </label>
                    <br>
                    <label style="cursor: pointer">
                      <input type="radio" name="Delivery" value="Lieferung im angegebenen Umkreis" style="width: auto">
                      <span>Lieferung im angegebenen Umkreis</span>
                    </label>
                    <br>
                    <label style="cursor: pointer">
                      <input type="radio" name="Delivery" value="Anreise im angegebenen Umkreis" style="width: auto">
                      <span>Anreise im angegebenen Umkreis</span>
                    </label>
                    <br>
                    <label style="cursor: pointer">
                      <input type="radio" name="Delivery" value="Abholung vor Ort" style="width: auto">
                      <span>Abholung vor Ort</span>
                    </label>
                    <br>
                    <label style="cursor: pointer">
                      <input type="radio" name="Delivery" value="Keine Zusatzangabe" style="width: auto">
                      <span>Keine Zusatzangabe</span>
                    </label>
            </div>
 
            <hr>

            <div class="form-group">
              <label for="Company">Firma <span class="error">* <?php echo $comErr; ?> </span></label>
              <input type="text" class="form-control" name="Company" id="Company" placeholder="" value="<?php echo $user_info['billing_company_name'][0]; ?>">
            </div>

            <div class="form-group">
              <label for="Firstname">Vorname <span class="error">* <?php echo $firErr; ?> </span></label>
              <input type="text" class="form-control" name="Firstname" id="Firstname" placeholder="" value="<?php echo $user_info['first_name'][0]; ?>" required>
            </div>

            <div class="form-group">
              <label for="Lastname">Nachname <span class="error">* <?php echo $lasErr; ?> </span></label>
              <input type="text" class="form-control" name="Lastname" id="Lastname" placeholder="" value="<?php echo $user_info['last_name'][0]; ?>" required>
            </div>

            <div class="form-group">
              <label for="Email">E-Mail-Adresse <span class="error">* <?php echo $emaErr; ?> </span></label>
              <input type="text" class="form-control" name="Email" id="Email" placeholder="" value="<?php echo $user_info['billing_email'][0]; ?>" required>
            </div>

            <div class="form-group">
              <label for="Telephone">Telefon-Nummer <span class="error">* <?php echo $telErr; ?> </span></label>
              <input type="text" class="form-control" name="Telephone" id="Telephone" value="<?php echo isset($_POST["Telephone"]) ? $_POST["Telephone"] : ''; ?>" required>
            </div>

            <span class="previous-tab">Bisherige </span>   
            <input type="submit" name="submit_button" id="submit_button" value="Abschicken" />  
            
            
          </ul>
          
      </div>      
    </div>

    </div> 
  </form>
   
  </div>

</div>
</div>   

  <?php
  $nameErr=$catErr=$desErr=$priErr=$disErr=$comErr=$firErr=$lasErr=$emaErr=$telErr=$subErr=$citErr=$zipErr="";
  if(isset($_POST['submit_button'])) 
  { 
          $username = $_POST["Cities"];
          $user_info = get_user_meta($current_user->ID);
          $product_ids = array( '308', '309','310','311' );
          if(!has_bought_items( '', $product_ids ) ){
              // print_r ($user_info);
              // exit;
            if ($user_info['radio_btns'][0]=='Ich verleihe als Unternehmen'){   
                // header('Location: /company-pricing');
                echo "<script type='text/javascript'>window.location.href = 'https://fair-hand.com/company-pricing';
                          </script>";                
            }
            else{
              // header('Location: /private-pricing');
              echo "<script type='text/javascript'>window.location.href = 'https://fair-hand.com/private-pricing';
                          </script>";              
            }
          } 
            else{    
              
                      $Product_title = $_REQUEST['product_title'];
                      $file = $_FILES["customFilemain"];
                      $file2 = $_request['customFile2'];
                      $file3 = $_request['customFile3'];
                      $file4 = $_request['customFile4'];
                      $file5 = $_request['customFile5'];
                      $Description = $_REQUEST['Description'];
                      $Characteristics = $_REQUEST['Characteristics'];
                      $Cities=$_REQUEST['Cities'];
                      $Negotiation=$_REQUEST['Negotiation'];
                      $Duration=$_REQUEST['Duration'];
                      $Vat=$_REQUEST['Vat'];
                      $ZIP=$_REQUEST['ZIP'];
                      $Distance=$_REQUEST['Distance'];
                      $Delivery=$_REQUEST['Delivery'];
                      $Company=$_REQUEST['Company'];
                      $Firstname=$_REQUEST['Firstname'];
                      $Lastname=$_REQUEST['Lastname'];
                      $Email=$_REQUEST['Email'];
                      $Telephone=$_REQUEST['Telephone'];
                      $Price = $_REQUEST['Price'];
                      $Category = $_REQUEST['Category'];
                      $Sub_Category = $_REQUEST['Sub_Category'];
                      $term = get_term_by( 'id', $Category, 'product_cat' );
                      $categoryName = $term->name;
                      $term = get_term_by( 'id', $Sub_Category, 'product_cat' );
                      $sub_categoryName = $term->name;
                      if(empty($Product_title)  || empty($Description) || empty($Category) || empty($Sub_Category) ||empty($Cities)||empty($Negotiation)||empty($Duration)||empty($Vat)||empty($ZIP)||empty($Distance)||empty($Firstname)||empty($Lastname)||empty($Email)||empty($Price))
                      {
                          echo "<script type='text/javascript'>alert('Bitte geben Sie alle Daten ein !!');                          
                          </script>";
                      }
                      else{
                            $objProduct = new WC_Product();
                            //$objProduct = new WC_Product_Variable();
                            $objProduct->set_name($Product_title);
                            $objProduct->set_status("publish");  // can be publish,draft or any wordpress post status
                            $objProduct->set_catalog_visibility('visible'); // add the product visibility status
                            $objProduct->set_description("$Description");
                            $objProduct->set_sku(""); //can be blank in case you don't have sku, but You can't add duplicate sku's
                            $objProduct->set_price($Price); // set product price
                            $objProduct->set_regular_price($Price); // set product regular price
                            $objProduct->set_manage_stock(true); // true or false
                            $objProduct->set_stock_quantity(10);
                            $objProduct->set_stock_status('instock'); // in stock or out of stock value
                            $objProduct->set_backorders('no');
                            $objProduct->set_reviews_allowed(true);
                            $objProduct->set_sold_individually(false);
                            $objProduct->set_category_ids(array($Sub_Category)); // array of category ids, You can get category id from WooCommerce Product Category Section of Wordpress Admin
                            $productImagesIDs = array(); // define an array to store the media ids.
                            $images = array($file,$file2,$file3,$file4,$file5); // images url array of product
                            $product_id = $objProduct->save(); // it will save the product and return the generated product id
                          
                            $image_count=0;
                            $gallery_image_array=array();
                            foreach($file['name'] as $image){
                                // if($image!=''){
                                  $upload = wp_upload_bits($file["name"][$image_count], null, file_get_contents($file["tmp_name"][$image_count]));
                                      $post_id =  $product_id; //set post id to which you need to set featured image
                                      $filename = $upload['file'];
                                      $wp_filetype = wp_check_filetype($filename, null);
                                      $attachment = array(
                                          'post_mime_type' => $wp_filetype['type'],
                          'post_title' => sanitize_file_name($filename),
                                          'post_content' => '',
                                          'post_status' => 'inherit'
                                      );
                                      $attachment_id = wp_insert_attachment( $attachment, $filename, $post_id );
                                      if ( ! is_wp_error( $attachment_id ) ) {
                                          require_once(ABSPATH . 'wp-admin/includes/image.php');
                                          $attachment_data = wp_generate_attachment_metadata( $attachment_id, $filename );
                          wp_update_attachment_metadata( $attachment_id, $attachment_data );
                          if($image_count==0){
                                          set_post_thumbnail( $post_id, $attachment_id );
                                      }
                          else{
                                  //                 require_once(ABSPATH . "wp-admin" . '/includes/image.php');               
                                  // require_once(ABSPATH . "wp-admin" . '/includes/file.php');
                                  // require_once(ABSPATH . "wp-admin" . '/includes/media.php');

                                  // $attachment_id = media_handle_upload($file["name"][$image_count], $product_id);
                                
                                  $gallery_image_array[]=$attachment_id;
                              

                          }
                                  $image_count++;
                                      
                                      
                                  // }
                              //   $mediaID = uploadMedia($image['tmp_name']); // calling the uploadMedia function and passing image url to get the uploade
                          //    if($mediaID) $productImagesIDs[] = $mediaID; // storing media ids in a array.
                            }}
                            if(!empty($gallery_image_array)){

                              update_post_meta($product_id, '_product_image_gallery', implode(',',$gallery_image_array));
                            }
                            
                          //   print_r($productImagesIDs);
                          //   exit;
                          //   if($productImagesIDs){
                          //       $objProduct->set_image_id($productImagesIDs[0]); // set the first image as primary image of the product
                          //    //in case we have more than 1 image, then add them to product gallery. 
                          //       if(count($productImagesIDs) > 1){
                          //           $objProduct->set_gallery_image_ids($productImagesIDs);
                          //       }
                          //   }    
                            $productAttributes['options'] = array('Price'=>$Price,'Cities'=>$Cities,'Negotiation'=>$Negotiation,'Duration'=>$Duration,'Vat'=>$Vat,'ZIP'=>$ZIP,'Distance'=>$Distance,'Delivery'=>$Delivery,'Company'=>$Company,'Firstname'=>$Firstname,'Lastname'=>$Lastname,'Email'=>$Email,'Telephone'=>$Telephone);
                                update_post_meta($product_id,'_product_attributes',$productAttributes); // save the meta entry for product attributes
                                wp_set_object_terms($product_id, array($Cities,$categoryName ,$sub_categoryName,$Product_title ), 'product_tag');
                        echo "<script type='text/javascript'>alert('Artikel erfolgreich hinzugefügt');
                        window.location.href = 'https://fair-hand.com/loggen';
                          </script>";
          ?>
          <!-- <div><a href="https://fair-hand.com" style="color:#C60967; text-decoration:none;">Home</a></div> -->
          <?php }
                      }
                            function uploadMedia($image_url){
                                require_once('wp-admin/includes/image.php');
                                require_once('wp-admin/includes/file.php');
                                require_once('wp-admin/includes/media.php');
                                $media = media_sideload_image($image_url,0);
                                print_r($media);
                                $attachments = get_posts(array(
                                    'post_type' => 'attachment',
                                    'post_status' => null,
                                    'post_parent' => 0,
                                    'orderby' => 'post_date',
                                    'order' => 'DESC'
                                ));
                                return $attachments[0]->ID;
                            }
}            // above function uploadMedia, I have written which takes an image url as an argument and upload image to wordpress and returns the media id, later we will use this id to assign the image to product.
               
               
               
               ?>

    <script>
   

     jQuery(document).ready(function() {
        jQuery('#Sub-Category').hide();
        jQuery('#Category').change(function() {
          var value = jQuery(this).val();
          jQuery('#Sub-Category').show();
          jQuery('#Sub-Category option').hide();
          jQuery('#Sub-Category option[data-category-parent="' + value + '"]').show();
        });
      });
    
      // $('li:has([data-toggle="tab"])').click(
      //   function(event)
      //   {
      //     return false;
      //     }
      // );
      jQuery('body').on('click','.next-tab', function(){
        
      var next = jQuery('.nav-tabs > .active').next('li');
      var books = $('#Sub-Category').val();
      if (!$("#Sub-Category option:selected").length) {
          alert("Bitte wählen Sie einen Eintrag aus der Liste aus und fahren Sie fort!");
          $('#Sub-Category').focus();               
          return false;
      }
      else{
        $('.tab-two').css({pointerEvents: "auto"})
        $('.nav li.active').next('li').removeClass('disabled');
          if(next.length){
          next.find('a').trigger('click');         
        }else{
          jQuery('#myTabs a:first').tab('show');
        }
      }
       
      });


jQuery('body').on('click','.previous-tab', function(){
      var prev = jQuery('.nav-tabs > .active').prev('li')
      if(prev.length){
        prev.find('a').trigger('click');
      }else{
        jQuery('#myTabs a:last').tab('show');
      }
});

 
    </script>
    <script>
  var limit = 5;
  jQuery(document).ready(function(){
    jQuery('#img-file').change(function(){
        var files = $(this)[0].files;
        if(files.length > limit){
            alert("Sie können nicht mehr als "+limit+" Bilder auswählen.");
            $('#img-file').val('');
            return false;
        }
        // else if (files.length < limit){
        //   alert("Bitte wählen Sie "+limit+" Bilder aus.");
        //     $('#img-file').val('');
        //     return false;
        // }
        else{
            return true;
        }
    });
});

var uploadField = document.getElementById("img-file");
uploadField.onchange = function() {
    if(this.files[0].size > 2097152){
       alert("Bildgröße zu groß!");
       this.value = "";
    };
};



// $(document).ready(function () {
//         $("#next-tab").click(function () {

            
//         });
//     });


    // function Validate() {
    //     var ddlFruits = document.getElementById("Sub-Category");
    //     if (ddlFruits.value == "") {
    //         //If the "Please Select" option is selected display error.
    //         alert("Please select an option!");
    //         return false;
    //     }
    //     return false;
    // }
</script>


<?php get_footer(); ?> 
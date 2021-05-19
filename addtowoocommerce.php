<?php /* Template Name: ProductUpload */ 
$user_info = get_user_meta($current_user->ID);
$product_ids = array( '308', '309','310','311' );
if(!has_bought_items( '', $product_ids ) ){
    // print_r ($user_info);
    // exit;
  if ($user_info['radio_btns'][0]=='Ich verleihe als Unternehmen'){   
      header('Location: https://fair-hand.com/company-pricing');
      exit;
  }
  else{
    header('Location: https://fair-hand.com/private-pricing');
    exit;
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
            if(empty($Product_title)  || empty($Description) || empty($Category) || empty($Sub_Category) ||empty($Cities)||empty($Negotiation)||empty($Duration)||empty($Vat)||empty($ZIP)||empty($Distance)||empty($Company)||empty($Firstname)||empty($Lastname)||empty($Email)||empty($Characteristics)|| empty($Price))
            {
                 echo "<script type='text/javascript'>alert('Please Fill all the data');
                 window.location.href = 'https://fair-hand.com/inserat-hochladen';
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
              echo "<script type='text/javascript'>alert('Item added successfully');
                </script>";
?>
<div><a href="https://fair-hand.com" style="color:#C60967; text-decoration:none;">Home</a></div>
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
                  // above function uploadMedia, I have written which takes an image url as an argument and upload image to wordpress and returns the media id, later we will use this id to assign the image to product.
                ?>
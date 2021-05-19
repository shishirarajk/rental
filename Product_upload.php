<?php /* Template Name: product upload */
// $user_info = get_user_meta($current_user->ID);
// print_r($user_info);
$product_ids = array('308', '309', '310', '311');
if (!has_bought_items('', $product_ids)) {
  if ($user_info['radio_btns'][0] == 'Ich verleihe als Unternehmen') {
    header('Location: /company-pricing');
    exit;
  } else {
    header('Location: /private-pricing');
    exit;
  }
}
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
$all_categories = get_categories($args);
// Get All order of current user
$orders = get_posts(array(
  'numberposts' => -1,
  'meta_key'    => '_customer_user',
  'meta_value'  => get_current_user_id(),
  'post_type'   => wc_get_order_types('view-orders'),
  'post_status' => array_keys(wc_get_order_statuses())
));
?>
<?php get_header(); ?>
<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <script>
    function fileSelection() {
      var customFile = document.getElementById('customFile').value;
      document.getElementById("demo1").innerHTML = customFile;
    }
  </script>
</head>
<style>
  .produpload_wrap {
    margin: 60px;
    font-family: poppins;
    color: darkgray;
  }

  .btnReg {
    border-radius: 40px;
    border-color: #C60967;
    background-color: white;
    height: 50px;
    width: 120px;
    border-radius: 10px;
    color: #C60967;
    font-size: 20px;
  }
</style>

<body>
  <div class="produpload_wrap">
    <div class="container" style="margin: initial;">
      <div class="row">
        <div class="col-6">
          <form method="POST" action="https://fair-hand.com/productupdation">
             <div class="form-group">
              <label for="product_title">Product Title*</label>
              <input type="text" class="form-control" name="product_title" id="product_title" placeholder="">
            </div>
            <div class="form-group">
              <label for="imageupload">Upload Image</label>
              <div class="custom-file">
                <input type="file" class="custom-file-input" id="customFile" onchange="fileSelection()">
                <label class="custom-file-label" name="customFile" for="customFile">Choose file</label>
                <p id="demo1"></p>
              </div>
            </div>
            <div class="form-group">
              <label for="Description">Description</label>
              <textarea class="form-control" name="Description" id="Description" rows="3"></textarea>
            </div>
            <div class="form-group">
              <label for="Characteristics">Characteristics*</label>
              <input type="text" class="form-control" name="Characteristics" id="Characteristics" placeholder="">
            </div>
            <div class="form-group">
              <label for="Cities">City*</label>
              <input type="text" class="form-control" name="Cities" id="Citiess" placeholder="">
            </div>
            <div class="form-group">
              <label for="Price">Price per Hour*</label>
              <input type="text" class="form-control" name="Price" id="Price" placeholder="">
            </div>
            <div class="form-group">
              <label for="Category">Category*</label>
              <select class="form-control" name="Category" id="Category">
                <option>
                  Select form Dropdown
                </option>
                <?php
                foreach ($all_categories as $category) {
                  if ($category->category_parent == 0 && $category->name != 'Uncategorized') {
                ?>
                    <option value="<?php echo $category->term_id ?>"><?php echo $category->name;
                                                                      ?></option>
                <?php }
                } ?>
              </select>
              <p id="demo"></p>
            </div>
            <div class="form-group">
              <label for="Sub_Category">Sub-Category*</label>
              <select class="form-control" name="Sub_Category" id="Sub-Category">
                <option>Select form Dropdown</option>
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
            <br>
            <input type="submit" class="btnReg" value="Post">
        </div>
      </div>
      </form>
    </div>
    <script>
      jQuery(document).ready(function() {
        jQuery('#Category').change(function() {
          var value = jQuery(this).val();
          jQuery('#Sub-Category option').hide();
          jQuery('#Sub-Category option[data-category-parent="' + value + '"]').show();
        });
      });
    </script>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </div>
</body>

</html>
<?php get_footer() ?>
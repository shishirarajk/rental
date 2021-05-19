<?php /* Template Name:Delete Product */ ?>
<?php
function wh_deleteProduct($id)
{
    $product = wc_get_product($id);
    
    if(empty($product))
        return 0;

    // If we're forcing, then delete permanently.
       
        $product->delete();
        $result = 'trash' === $product->get_status();
    

    if (!$result)
    {
        return 0;
    }

    // Delete parent product transients.
    // if ($parent_id = wp_get_post_parent_id($id))
    // {
    //     wc_delete_product_transients($parent_id);
    // }
    return 1;
}
$id=$_GET['id'];
$res=wh_deleteProduct($id);

if(!$res){
    header('Location: /my-products?error-flag=1');
    exit;

}
else{
    header('Location: /my-products?error-flag=0');
    exit;
}
?>
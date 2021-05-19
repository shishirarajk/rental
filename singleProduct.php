<?php /* Template Name: product-single */ 
 get_header(); 

// $id=$_GET['id'];
// $product = wc_get_product( $id );
// $product_name=$product->name;

?>
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  
</head>
<style>
.single-product{
    width:100%;
}

.left-section{
    width:65%;
    float:left;
    display:flex;
    align-items:center;
    justify-content:center;
}
.form{
    width: 35%;
    float: right;
    background: #66666a;
    /* padding: 10px 0 10px 25px; */
    display: flex;
    align-items: center;
    justify-content: center;
}
.image-area{
    width: 100%;
    height: 400px;
    border: 1px solid #ccc;
    display:flex;
    align-items:center;
    justify-content:center;
}
.wrapper{
    width:80%;
}

.single-product h2{
    color:#66666a;
}

.single-product h1{
    color:#c60967;
    font-size:40px;
    margin-bottom:0;
    font-weight: 600;
}

.single-product p{    
    font-size:16px;
    margin-bottom:5px;
}

.formContent{
    line-height: 2.5;
    width:65%;
    padding: 50px 0;
    
}

label{
    width: 100% !important;
    color: white;
    margin: 0;
}
.formContent input[type="text"], input[type="email"], input[type="url"], input[type="password"], input[type="search"], input[type="number"], input[type="tel"], input[type="range"], input[type="date"], input[type="month"], input[type="week"], input[type="time"], input[type="datetime"], input[type="datetime-local"], input[type="color"], textarea {
  
    width: 100%;
}

.formContent button{
   cursor: pointer;
    width: 100%;
    margin: 20px 0;
    height: 40px;
    color: white;
    /* border: 10px; */
    background: linear-gradient(134.05deg, #c60967 0%, #603 100%);
    border-radius: 5px;
    border: none;
    margin-top:30px;    
}

@media screen and (max-width: 950px){
        .single-product {
        width: 100%;
        display: flex;
        flex-direction: column;
    }
    .single-product h1{   
    font-size:30px;    
    }
    .form {
    width: 100%;
    }
    .left-section{
        width: 100%;
    }
    .formContent button{
        margin:20px 0 0 0 !important; 
    }
    
}

@media screen and (min-width: 1600px){
    .single-product-container{
        display: flex;
    align-items: center;
    justify-content: center;
    }
    .single-product{
        width:1700px;
    }
}


.error{
    color:white;
    font-weight:200;
    font-style: italic;
}
</style>
<?php 
global $product;

$id=$_GET['id'];
$product = wc_get_product( $id );
// echo $product->regular_price;

$product_name=$product->name;
$product_description=$product->description;
$args = array( 'post_type' => 'product', 'posts_per_page' => -1, 'product_cat' => $_GET['category']);
$loop = new WP_Query( $args );

 $City = get_post_meta($id,"_product_attributes");  
//  print_r($City);
 $image = wp_get_attachment_image_src( get_post_thumbnail_id( $id ), 'single-post-thumbnail' );      
 $emailid=$City[0]["options"]["Email"];
 
 
 ?>
<div class="single-product-container">
    <div class="single-product">
            <div class="left-section">
                <div class="wrapper">
                    <h1><?php echo $product_name ?></h1>
                    <h2><?php echo $product->regular_price; ?>€</h2>                   
                    <p><?php echo $City[0]["options"]["Duration"]; ?></p>
                    <hr style="border: 1px solid #ccc;">
                    <div class="image-area" >               
                        <div class="imgclass" >                           
                            <div id="myCarousel" class="carousel slide" data-ride="carousel">
                                <!-- Indicators -->
                                <!-- <ol class="carousel-indicators">
                                <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                                <li data-target="#myCarousel" data-slide-to="1"></li>
                                <li data-target="#myCarousel" data-slide-to="2"></li>
                                </ol> -->

                                <!-- Wrapper for slides -->
                                <div class="carousel-inner">
                                <div class="item active">
                                    <img src="<?php  echo $image[0]; ?>" data-id="<?php echo $id; ?>" style="width:499px;height:399px">
                                </div>
                                <?php  
                                    $count=0;                                 
                                    if( $gallery_image_ids = get_post_meta( $id, '_product_image_gallery', true ) ) :                                                                         
                                        $gallery_image_ids = explode(',', $gallery_image_ids);    
                                        // print_r( get_post_meta( $id, '_product_image_gallery', true ));                                    
                                ?>

                                <div class="item">                                       
                                    <img src="<?php echo wp_get_attachment_image_url( reset($gallery_image_ids), 'single-post-thumbnail'); ?>" data-id="<?php echo $id; ?>" style="width:499px;height:399px">
                                       <?php $count++; ?>
                                </div>
                                <?php endif; ?>

                                <?php                                
                                if( isset( $gallery_image_ids[1] ) ) :
                                ?>
                                <div class="item">
                                        <img src="<?php echo wp_get_attachment_image_url( $gallery_image_ids[1], 'single-post-thumbnail'); ?>" data-id="<?php echo $id; ?>" style="width:499px;height:399px">                               
                                        <?php $count++; ?>
                                </div>
                                <?php endif; ?>


                                <?php                                
                                if( isset( $gallery_image_ids[2] ) ) :
                                ?>
                                <div class="item">
                                        <img src="<?php echo wp_get_attachment_image_url( $gallery_image_ids[2], 'single-post-thumbnail'); ?>" data-id="<?php echo $id; ?>" style="width:499px;height:399px">                               
                                        <?php $count++; ?>
                                </div>
                                <?php endif; ?>

                                <?php                                
                                if( isset( $gallery_image_ids[3] ) ) :
                                ?>
                                <div class="item">
                                        <img src="<?php echo wp_get_attachment_image_url( $gallery_image_ids[3], 'single-post-thumbnail'); ?>" data-id="<?php echo $id; ?>" style="width:499px;height:399px">                               
                                        <?php $count++; ?>
                                </div>
                                <?php endif; ?>


                                </div>
                                       <?php
                                    //  echo $count;
                                if ($count!=0)
                                {
                                ?> 
                                    <!-- Left and right controls -->
                                    <a class="left carousel-control" href="#myCarousel" data-slide="prev">
                                        <span class="glyphicon glyphicon-chevron-left"></span>
                                        <span class="sr-only">Previous</span>
                                    </a>
                                    <a class="right carousel-control" href="#myCarousel" data-slide="next">
                                        <span class="glyphicon glyphicon-chevron-right"></span>
                                        <span class="sr-only">Next</span>
                                    </a>
                               
                                        <?php  $count=$count+1; ?>
                                <ol class="carousel-indicators">
                                    <?php for ($x = 1; $x <= $count; $x++) { ?>
                                    <li data-target="#myCarousel" data-slide-to="<?php echo $x ?>" class="active"></li>
                                  <?php } ?>
                                </ol>

                                 <?php } ?>
                            </div>
                        </div>	
                        	
                    </div>
                    <h2>Beschreibung</h2>
                    <p><?php echo $product_description ?></p>
                    <p><?php echo $City[0]["options"]["Delivery"]; ?></p>
                    <p><?php echo $City[0]["options"]["Vat"]; ?></p>
                    <p><?php echo $City[0]["options"]["Negotiation"]; ?></p>    
                    <hr style="border: 1px solid #ccc;">
                    <h2>Standort</h2>
                    <p><i class="fa fa-map-marker" style="font-size:30px;color:#C60967"></i><?php print_r($City[0]["options"]["Cities"]); ?></p>
                    <p><?php echo $City[0]["options"]["Distance"]; ?></p>
                    <hr style="border: 1px solid #ccc;">
                    <h2>Vermieter</h2>
                    <p><?php echo $City[0]["options"]["Firstname"]; ?></p>
                    <p><?php echo $City[0]["options"]["Email"]; ?></p>
                    <p><?php echo $City[0]["options"]["Telephone"]; ?></p>
                </div>             
                
            </div>
           
        <!-- Inquiry Form -->
 
        <?php if ($_SERVER["REQUEST_METHOD"] == "POST") {
                    if (empty($_POST["myname"])) {  
                        $nameErr = "Dieses ist ein Pflichtfeld";  
                    }

                    if (empty($_POST["myemail"])) {  
                        $emailErr = "Dieses ist ein Pflichtfeld";  
                        }  
                    
                    if (empty($_POST["from"])) {  
                        $frmErr = "Dieses ist ein Pflichtfeld";  
                        }  
                    
                    if (empty($_POST["to"])) {  
                        $toErr = "Dieses ist ein Pflichtfeld";  
                        } 
                        
                        if (empty($_POST["phone"])) {  
                            $teleErr = "Dieses ist ein Pflichtfeld";  
                            }  
                        
                    
                    if (empty($_POST["pin"])) {  
                        $pinErr = "Dieses ist ein Pflichtfeld";  
                        }  
                    
                        if (empty($_POST["agree"])) {  
                            $agreeErr = "Bitte aktivieren Sie das Kontrollkästchen";  
                            }
                            
                       
                }
                    
            ?>
            <div class="form">
                <div class="formContent">
                
                        <form action=" " method="post">
                        <h2 style="color:white">Unverbindliche Mietanfrage an den Vermieter</h2>
                             <p style="color:white"><b>erforderliches Feld (*)</b></p>
                            <label for="from">Von  <span class="error">* <?php echo $frmErr; ?> </span></label> 
                            <input type="date" id="from" name="from" >
                           
                            <br> 

                            <label for="to">Bis  <span class="error">* <?php echo $toErr; ?> </span></label> 
                            <input type="date" id="to" name="to" >
                           
                            <br>

                            <label>Name <span class="error">* <?php echo $nameErr; ?> </span> </label> 
                            <input class="input" type="text" name="myname" value="<?php echo isset($_POST["myname"]) ? $_POST["myname"] : ''; ?>" >
                          <br>

                            <label>E-Mail <span class="error">* <?php echo $emailErr; ?> </span></label>
                            <input class="input" type="email" name="myemail" value="<?php echo isset($_POST["myemail"]) ? $_POST["myemail"] : ''; ?>" >
                             <br> 

                            <label>Name des Unternehmens :</label>
                            <input class="input" type="text" name="company" value="<?php echo isset($_POST["company"]) ? $_POST["company"] : ''; ?>">
                            <br> 
                            
                            <label>PLZ <span class="error">* <?php echo $pinErr; ?> </span></label>
                            <input type="number" name="pin" pattern="[0-9]{5}" maxlength="5" value="<?php echo isset($_POST["pin"]) ? $_POST["pin"] : ''; ?>" >
                            
                            <br> 

                            <label for="phone">Telefon- oder Handynumme <span class="error">* <?php echo $teleErr; ?> </span></label>
                            <input type="tel" id="phone" name="phone" value="<?php echo isset($_POST["phone"]) ? $_POST["phone"] : ''; ?>" >
                            
                            
                            <br>             
<!--                            
                            <input type="text" id="ownerid" name="ownerid" value="<?php echo $userid; ?>" style="display:none;" >   -->

                            <label>Anmerkungen </label>                            
                            <textarea name="message" value="<?php echo isset($_POST["myname"]) ? $_POST["myname"] : ''; ?>"></textarea>
                     
                            <br>
                            <br>
                            <label ><input type="checkbox" name="agree" style="margin: 0 10px 0 0 !important;">Ich bin mit den <a href="https://fair-hand.com/agb" style="color:white">AGBs</a> und den <a href="https://fair-hand.com/datenschutzerklarung" style="color:white">Datenschutzrichtlinien einverstanden</a><span class="error">* <?php echo $agreeErr; ?> </span></label>  
                              

                            <br> 
                            
                            <button  type="submit" id="submit_button"  name="submit_button" class="submit" >Abschicken</button>
                            <input type="hidden" name="action" value="email_notification" />
                        </form>
                        <?php 
                                        $nameErr = $emailErr = $frmErr = $toErr = $teleErr = $pinErr = $agreeErr = "";
                                        $myname = $myemail = $message = $company = $from = $too = $phone = "";
                                        if(isset($_POST['submit_button'])) 
                                        { 
                                            $myname = $_REQUEST['myname'];
                                            $myemail = $_REQUEST['myemail'];
                                            $message = $_REQUEST['message'];
                                            $company = $_REQUEST['company'];
                                            $from = $_REQUEST['from'];
                                            $too = $_REQUEST['to'];
                                            $phone = $_REQUEST['phone'];
                                            $pin = $_REQUEST['pin'];
                                            $agree=$_REQUEST['agree'];
                                            $id=$_GET['id'];
                                            $product = wc_get_product( $id );
                                            $product_name=$product->name;
                                            
                                            if(empty($myname) || empty($agree) || empty($myemail) || empty($from) || empty($too) || empty($phone) || empty($pin) ) 
                                            {
                                               
                                                echo "<script type='text/javascript'>alert('Bitte geben Sie alle Felder ein');                                           
                                                </script>";                                      
                                            }
                                        else{
                                            // $mail=$_REQUEST['E-Mail'];
                                            // $file=$_REQUEST[]
                                            // $to = "yourname@yourwebsite.com";
                                            // $body=  "body text";                    
                                            // $to = 'shishirahere@gmail.com';
                                            // $subject = 'subject';
                                            // $message = 'text here';
                                            // wp_mail( $to, $subject, $message );
                                            $emailid=$City[0]["options"]["Email"];       
                                            $to      = $emailid;
                                            $subject = 'Eine neue Nachricht von Fair-Hand!  ';
                                            $body = "<div>                                       
                                            <p style='font-size:16px'><b>$myname interessiert sich für Ihr Inserat und möchte es gerne vom $from bis $too ausleihen</b></p> 
                                            <p style='font-size:16px'>Hier sind $myname 's Kontaktdaten </p>
                                            <p style='font-size:16px'>Telefonnummer: $phone </p>
                                            <p style='font-size:16px'>Email: $myemail</p>
                                            <p style='font-size:16px'>Unternehmen: $company</p>
                                            <p style='font-size:16px'>Nachricht: $message</p>
                                            </div> 
                                            ";
                                            wp_mail($to, $subject, $body);
                                            echo "<script type='text/javascript'>alert('Ihre Daten werden an gesendet $emailid');                                           
                                            window.location.href = 'https://fair-hand.com/kategorien';
                                            </script>";
                                    }  
                                    if ( 'POST' == $_SERVER['REQUEST_METHOD'] && !empty( $_POST['action'] ) && $_POST['action'] == "email_notification") {
                                        $id=$_GET['id'];
                                        $product = wc_get_product( $id );
                                        $product_name=$product->name;
                                        // $title     = $_POST['title'];
                                        // $post_type = 'email_notification';
                                        $custom_field_name = $_POST['myname'];
                                        $custom_field_email = $_POST['myemail']; 
                                        //the array of arguements to be inserted with wp_insert_post
                                        $front_post = array(
                                        'post_title'    => $product_name,
                                        'post_status'   => 'publish',          
                                        'post_type'     => 'email_notification' 
                                        );
                                        //insert the the post into database by passing $new_post to wp_insert_post
                                        //store our post ID in a variable $pid
                                        $post_id = wp_insert_post($front_post);
                                        //we now use $pid (post id) to help add out post meta data
                                        // update_post_meta($post_id, "short_description", @$_POST["short_description"]);
                                        add_post_meta($post_id, 'custom_field_name', $custom_field_name, true);
                                        add_post_meta($post_id, 'custom_field_name', $custom_field_email, true);
                                    }
                                    }   
                            // exit;                             
                            ?>      
                </div>
            </div>   
        </div>
</div>  
                        

<?php

/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package fair_hand
 */
$slug = $_GET['subcategory'];
$category = get_term_by('slug', $slug, 'product_cat');
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
$all_categories = get_categories($args);

global $current_user;
get_currentuserinfo();
?>
<!DOCTYPE html>
<html lang="de">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>



<style>
.main-navigation ul {
    display: flex;
    justify-content: flex-end;
    background: #C60967 !important;
    margin-right: 30px !important;
}
#menu-container{
    display:none;
}
    #masthead {
        height: 100px;
       
    }

    .logo-img {
       width: 40%;
    }

    .vl {
        border-left: 3px solid white;
        height: 15px;
    }

    .cat-list {
        display: flex;
        justify-content: center;
        padding:0px;
        margin: 0;
        align-items: center;
        list-style: none;
        background: #c60967;
        flex-wrap: wrap;
        /* margin-top: 36px; */
    }

    .cat-list-li {
        display: inline-block;
        position: relative;
        line-height: 21px;
        text-align: left;
    }

    .cat-list-li a {
        display: block;
        padding: 8px 15px;
        font-size: 16px;
        color: #fff  !important;
        text-decoration: none !important;
    }

    .cat-list-li a:hover {
        color: #fff !important;
        text-decoration: none !important;
        /* background: #939393; */
    }

    .cat-list-li ul.dropdown {
        min-width: 100%;
        /* Set width of the dropdown */
        background: #f2f2f2;
        display: none;
        position: absolute;
        z-index: 999;
        left: 0;
        padding: 20px;
        width: 500px;
        border-radius:8px;
    }
    .cat-list-li ul.dropdown .left-dropdown{float: left; width:50%;}

    .left-dropdown h4 ,.right-dropdown h4 {
    color: #C60967;
    border-bottom: 1px solid #C60967;
    border-bottom-width: 2px;
    border-spacing: 100px;
    padding: 5px;
}
    .cat-list-li ul.dropdown .right-dropdown{float: right;width:50%;}
    .cat-list-li:hover ul.dropdown {
        display: block;
        /* Display the dropdown */
    }
.cat-list-li a{
    cursor:pointer;
}
.left-dropdown a, .right-dropdown a{
    color: #000 !important;
}
.left-dropdown a:hover,.right-dropdown a:hover{
    color: #C60967 !important;
}
    .woocommerce-product-search {
        width: 100%;
        position: relative;
        display: flex;
    }
.head-div{
color: #fff;}
    .abc-input {
        width: 500px !important;
        height: 45px;
        border: 3px solid #C60967;
        border-right: none;
        padding: 5px;
        /* height: 20px; */
        border-radius: 5px 0 0 5px;
        outline: none;
        color: #9DBFAF;
    }

    .search-container {
        margin-top: 30px;
        margin-right: 10px;
    }

    .menu-cnt {
        display: flex;
    }
   .drop a{
       padding: 5px 0 5px 0 !important;
   }
@media (max-width:500px){
    .hamburger-logo-img {
    width: 20%;
}
}
@media (min-width: 501px) and (max-width:1352px){
    .hamburger-logo-img{
            width:10%;
        }
}
    @media (min-width:1353px) and (max-width:1999px){
    .logo-img {
        width: 50%;
    }
}
@media (min-width:2000px){
    .logo-img {
        width: 60%;
    }
    
}

@media (max-width: 1352px) and (min-width: 901px){
    .search-container {
         margin-top: 0px;
        margin-right: 10px;
    }
    .woocommerce-product-search {   
        display:flex; 
        justify-content: flex-start !important;
        align-items:flex-start !important;
        padding:0px 20px 20px 20px;
    }
    .abc-input {
    width: 400px !important;
    height: 40px;
    }
        button {
        height: 40px;
        margin-left: 10px !important;
    }
}
   
@media (max-width: 1352px){
            body{
            padding:0 !important;
        }
            .desktop-version{
                display:none;
            }
            ul { list-style: none; }
        a { text-decoration: none; color: black;}
        .cat-list{
            display:none;
        }

        #menu-container {
            display: block;
            background:#C60967;
        }
        #menu-wrapper {
            overflow: hidden;
            max-width: 100%;
            cursor: pointer;
        }


        #menu-wrapper #hamburger-menu {
            position: relative;
            width: 25px;
            height: 20px;
            margin: 15px;
        }

        #menu-wrapper #hamburger-menu span {
            opacity: 1;
            left: 0;
            display: block;
            width: 100%;
            height: 2px;
            border-radius: 10px;
            color: black;
            background-color: white;
            position: absolute;
            transform: rotate(0deg);
            transition: .4s ease-in-out;
        }

        #menu-wrapper #hamburger-menu span:nth-child(1) {
            top: 0;
        }
        #menu-wrapper #hamburger-menu span:nth-child(2) {
            top: 9px;
        }
        #menu-wrapper #hamburger-menu span:nth-child(3) {
            top: 18px;
        }
        #menu-wrapper #hamburger-menu.open span:nth-child(1) {
            transform: translateY(9px) rotate(135deg);
        }
        #menu-wrapper #hamburger-menu.open span:nth-child(2) {
            opacity: 0;
            transform: translateX(-60px);
        }
        #menu-wrapper #hamburger-menu.open span:nth-child(3) {
            transform: translateY(-9px) rotate(-135deg);
        }

        #menu-container .menu-list .menu-submenu {
            padding-top: 20px;
            padding-bottom: 20px;
        }
        #menu-container .menu-list {
            padding-left: 0;
            display: block;
            position: absolute;
            width: 100%;
            max-width: 450px;
            background: white;
            box-shadow: rgba(100,100,100,0.2) 6px 2px 10px;
            z-index: 999;
            overflow-y: auto;
            overflow-x: hidden;
            margin-left: 0;
            left: -100%;
        }

        #menu-container .menu-list li.accordion-toggle, #menu-container .menu-list .menu-login {
            font-size: 16px;
            padding: 20px;
            text-transform: uppercase;
            border-top: 1px solid #dbdcd2;
        }
        #menu-container .menu-list li:first-of-type {
            border-top: 0;
        }

        .accordion-toggle, .accordion-content {
            cursor: pointer;
            font-size: 16px;
            position: relative;
            letter-spacing: 1px;
        }

        .accordion-content {
            display: none;
        }

        .accordion-toggle a:before, .accordion-toggle a:after {
            content: '';
            display: block;
            position: absolute;
            top: 50%;
            right: 30px;
            width: 15px;
            height: 2px;
            margin-top: -1px;
            background: #C60967;
            transform-origin: 50% 50%;
            transition: all 0.3s ease-out;
        }

        .accordion-toggle a:before {
            transform: rotate(-90deg);
            opacity: 1;
            z-index: 2;
            background: #C60967;
            
        }

        .accordion-toggle.active-tab {
        background: #C60967;
        transition: all 0.3s ease;
        }
        .accordion-toggle a.active:before {
            transform: rotate(0deg);
            background: #fff !important;
        }

        .accordion-toggle a.active:after {
            transform: rotate(180deg);
            background: #fff !important;
            opacity: 0;
        }

        a.menu-link.active {
            color: white;
            text-decoration: none;
        }

        a.menu-link {
            color: #C60967;
            text-decoration: none;
        }
        a.head {
            color: #C60967;
            text-decoration:none;
        }

        .menu-item{

            font-size: 16px;
            padding: 20px;
            text-transform: uppercase;
            border-top: 1px solid #dbdcd2;
        }
        .menu-item a{
            color: #C60967;
            text-decoration:none;
        }
        .hamburger-logo{
            width: 100%;
            display: flex;
            align-items: flex-end;
            justify-content: flex-end;
            margin-bottom: 10px;
        }
        
       html{
        margin-top: 0 !important;
        }
        header#masthead {
            display: none !important;
        }
        .site{
            display:none;
        }
}
@media (min-width: 1700px){
    #masthead {
        padding-top: 30px !important;
        
        display: flex;
        justify-content: center;
        align-items: center;
       
    }
    .desktop-version{width: 1460px;}
}
@media (max-width: 900px){
    
    .woocommerce-product-search {           
            flex-direction: column !important;
        }
        .search-container{
            margin-top:0px;
        }
        input[type="text"], input[type="email"], input[type="url"], input[type="password"], input[type="search"], input[type="number"], input[type="tel"], input[type="range"], input[type="date"], input[type="month"], input[type="week"], input[type="time"], input[type="datetime"], input[type="datetime-local"], input[type="color"], textarea {
            
            width: 96% !important;          
            margin: 0 10px 10px 10px;
        }

        [type=button]:not(:disabled), [type=reset]:not(:disabled), [type=submit]:not(:disabled), button:not(:disabled) {
            margin: 0 10px 10px 10px;
        }
}
</style>

<!doctype html>
<html <?php language_attributes(); ?> style="margin-top:0px !important;">

<head>
    <!-- Google Tag Manager -->
    <script>
        (function(w, d, s, l, i) {
            w[l] = w[l] || [];
            w[l].push({
                'gtm.start': new Date().getTime(),
                event: 'gtm.js'
            });
            var f = d.getElementsByTagName(s)[0],
                j = d.createElement(s),
                dl = l != 'dataLayer' ? '&l=' + l : '';
            j.async = true;
            j.src =
                'https://www.googletagmanager.com/gtm.js?id=' + i + dl;
            f.parentNode.insertBefore(j, f);
        })(window, document, 'script', 'dataLayer', 'GTM-NKFM3HV');
    </script>
    <!-- End Google Tag Manager -->
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="profile" href="https://gmpg.org/xfn/11">

    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
    <?php wp_body_open(); ?>
    <script
      src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVKdoJ_85dgWEBEuIyGV-ykNTEfqd9rRM&callback=initMap&libraries=&v=weekly"
      async
    ></script>
    <!-- Google Tag Manager (noscript) -->
    <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-NKFM3HV" height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
    <!-- End Google Tag Manager (noscript) -->
    <div id="page" class="site" style="background:#C60967">
        <a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e('Skip to content', 'fair_hand'); ?></a>

        <header id="masthead" class="site-header">
            <div class="desktop-version">
                        <div class="menu-cnt">
                            <!-- .site-branding -->

                            <nav id="site-navigation" class="main-navigation" >
                                <button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><?php esc_html_e('Primary Menu', 'fair_hand'); ?></button>
                                <?php
                                if ($current_user->ID == '') {
                                    wp_nav_menu(
                                        array(
                                            'theme_location' => 'menu-1',
                                            'menu_id'        => 'primary-menu',
                                        )
                                    );
                                } else {
                                    wp_nav_menu(
                                        array(
                                            'theme_location' => 'primary-signin',
                                            'menu_id'        => 'primary-signin',
                                        )
                                    );
                                }
                                ?>


                            </nav><!-- #site-navigation -->
                        </div>
                            <div class="search-container" style="width:100%;">
                                <div class="site-branding clm-left" style="float:left;width:10%;margin-top: -23px;margin-left: 100px;">
                                    <a href="https://fair-hand.com/" class="logo">
                                        <img class="logo-img" src="https://fair-hand.com/wp-content/uploads/2021/04/KUGEL_OHNE-HINTERGRUND.png" />
                                    </a>
                                </div>
                                <div class="clm-right" style="float:right;width:auto;margin-right:10px">
                                    <form role="search" method="get" class="woocommerce-product-search" action="/produktliste" style="margin-right:30px">
                                        <label class="screen-reader-text" for="woocommerce-product-search-field-<?php echo isset($index) ? absint($index) : 0; ?>"><?php esc_html_e('Search for:', 'woocommerce'); ?></label>
                                        <input type="search" id="woocommerce-product-search-field-<?php echo isset($index) ? absint($index) : 0; ?>" class="search-field abc-input" placeholder="WAS möchten Sie mieten?" value="<?php echo get_search_query(); ?>" name="search" />
                                        <input type="search" style="margin-left:10px;margin-right:10px;" id="woocommerce-product-search-field-<?php echo isset($index) ? absint($index) : 0; ?>" class="search-field abc-input" placeholder="WO möchten Sie mieten? (ORT/PLZ)" value="<?php echo get_search_query(); ?>" name="city" />
                                        <button type="submit" value="<?php echo esc_attr_x('search', 'submit button', 'woocommerce'); ?>"><?php echo esc_html_x('', 'submit button', 'woocommerce'); ?> <i class="fa fa-search" style="font-size:19px;color:#C60967"></i></button>

                                    </form>
                                </div>
                            </div>
                        </header>
                        <br><br>
                       
                        <!-- #masthead -->
                        <hr class="head-div"/>
                        <div>
                        <ul class="cat-list">
                    
                            <li class="cat-list-li">
                                <a href="https://fair-hand.com/subcatergories?subcategory=baumaschinen">Baumaschinen</a>
                                <ul class="dropdown">
                                    <div class="left-dropdown">
                                    <h4 style="color:#C60967;">Top Kategorien</h4>
                                    
                                            <li class="sub-li drop"><a href="https://fair-hand.com/produktliste?category=arbeitsschutzausruestung">Arbeitsschutzausrüstung</a></li>
                                            <li class="sub-li drop"><a href="https://fair-hand.com/produktliste?category=bagger-walzen-raupen">Bagger und Waalzen und Raupen</a></li>
                                            <li class="sub-li drop"><a href="https://fair-hand.com/produktliste?category= aufzuege">Aufzüge</a></li>
                                </div>
                                            
                                <div class="right-dropdown" style="float:right;">
                                    <h4 style="color:#C60967;">Weitere Kategorien</h4>
                                    
                                            <li class="sub-li drop"><a href="https://fair-hand.com/produktliste?category=stapler">Stapler</a></li>
                                            <li class="sub-li drop"><a href="https://fair-hand.com/produktliste?category=stromgenerator">Stromgenerator</a></li>
                                            <li class="sub-li drop"><a href="https://fair-hand.com/produktliste?category=raumsysteme">Raumsysteme</a></li>       

                                
                                    <li class="drop"><a href="https://fair-hand.com/subcatergories?subcategory=baumaschinen" style="color:#C60967 !important">mehr</a></li>
                                </div>
                                </ul>
                            </li>
                            <div class="vl"></div>
                            <li class="cat-list-li">
                                <a href="https://fair-hand.com/subcatergories?subcategory=dienstleistungen">Dienstleistungen</a>
                                
                                <ul class="dropdown">
                                <div class="left-dropdown">
                                    <h4 style="color:#C60967;">Top Kategorien</h4>
                                    
                                            <li class="sub-li drop"><a href="https://fair-hand.com/produktliste?category=abrissunternehmen">Abrissunternehmen</a></li>
                                            <li class="sub-li drop"><a href="https://fair-hand.com/produktliste?category=bauunternehmen">Bauunternehmen</a></li>
                                            <li class="sub-li drop"><a href="https://fair-hand.com/produktliste?category=bauberater-planer-statiker-landschaftsarchitekten-etc"> Bauberater</a></li>
                                </div>
                                            
                                <div class="right-dropdown" style="float:right;">
                                    <h4 style="color:#C60967;">Weitere Kategorien</h4>
                                    
                                            <li class="sub-li drop"><a href="https://fair-hand.com/produktliste?category=caterer">Caterer</a></li>
                                            <li class="sub-li drop"><a href="https://fair-hand.com/produktliste?category=bootsbauer">Bootsbauer</a></li>
                                            <li class="sub-li drop"><a href="https://fair-hand.com/produktliste?category=dj">DJ</a></li>       

                                
                                    <li class="sub-li drop"><a href="https://fair-hand.com/subcatergories?subcategory=dienstleistungen"style="color:#C60967 !important">mehr</a></li>
                                </div>
                                </ul>
                            </li>
                            <div class="vl"></div>

                            <li class="cat-list-li">
                                <a href="https://fair-hand.com/subcatergories?subcategory=elektronik">Elektronik</a>
                                <ul class="dropdown">
                                <div class="left-dropdown">
                                    <h4 style="color:#C60967;">Top Kategorien</h4>
                                    
                                            <li class="sub-li drop"><a href="https://fair-hand.com/produktliste?category=beamer">Beamer</a></li>
                                            <li class="sub-li drop"><a href="https://fair-hand.com/produktliste?category=buerotechnik">Bürotechnik</a></li>
                                            <li class="sub-li drop"><a href="https://fair-hand.com/produktliste?category=computer-notebook"> Computer und Notebooks</a></li>
                                </div>
                                            
                                <div class="right-dropdown" style="float:right;">
                                    <h4 style="color:#C60967;">Weitere Kategorien</h4>
                                    
                                            <li class="sub-li drop"><a href="https://fair-hand.com/produktliste?category=diascanner-projektor">Diascanner und Projektor</a></li>
                                            <li class="sub-li drop"><a href="https://fair-hand.com/produktliste?category=displayverleih">Displayverleih</a></li>
                                            <li class="sub-li drop"><a href="https://fair-hand.com/produktliste?category=dvd-blue-ray-player">DVD</a></li>       

                                
                                            <li class="sub-li drop"><a href="https://fair-hand.com/subcatergories?subcategory=elektronik" style="color:#C60967 !important">mehr</a></li>
                                </div>
                                    

                                </ul>
                            </li>
                            <div class="vl"></div>

                            <li class="cat-list-li">
                                <a href="https://fair-hand.com/subcatergories?subcategory=events-messen-und-partys">Events</a>
                                <ul class="dropdown">
                                <div class="left-dropdown">
                                    <h4 style="color:#C60967;">Top Kategorien</h4>
                                    
                                            <li class="sub-li drop"><a href="https://fair-hand.com/produktliste?category=absperrungszaeune">Absperrungen & Zäeune</a></li>
                                            <li class="sub-li drop"><a href="https://fair-hand.com/produktliste?category=bodenbelag">Bodenbelag</a></li>
                                            <li class="sub-li drop"><a href="https://fair-hand.com/produktliste?category=buhne"> Bühne</a></li>
                                </div>
                                            
                                <div class="right-dropdown" style="float:right;">
                                    <h4 style="color:#C60967;">Weitere Kategorien</h4>
                                    
                                            <li class="sub-li drop"><a href="https://fair-hand.com/produktliste?category=catering">Catering</a></li>
                                            <li class="sub-li drop"><a href="https://fair-hand.com/produktliste?category=dekoration">Dekoration</a></li>
                                            <li class="sub-li drop"><a href="https://fair-hand.com/produktliste?category=eventmodule">Eventmodule</a></li>       

                                
                                            <li class="sub-li drop"><a href="https://fair-hand.com/subcatergories?subcategory=events-messen-und-partys" style="color:#C60967 !important">mehr</a></li>
                                </div>
                                    
                                

                                </ul>
                            </li>
                            <div class="vl"></div>

                            <li class="cat-list-li">
                                <a href="https://fair-hand.com/subcatergories?subcategory=fahrzeuge">Fahrzeuge</a>
                                <ul class="dropdown">
                                <div class="left-dropdown">
                                    <h4 style="color:#C60967;">Top Kategorien</h4>
                                    
                                            <li class="sub-li drop"><a href="https://fair-hand.com/produktliste?category=abschleppwagen">Abschleppwagen</a></li>
                                            <li class="sub-li drop"><a href="https://fair-hand.com/produktliste?category=anhanger">Anhänger </a></li>
                                            <li class="sub-li drop"><a href="https://fair-hand.com/produktliste?category=auto"> Auto</a></li>
                                </div>
                                            
                                <div class="right-dropdown" style="float:right;">
                                    <h4 style="color:#C60967;">Weitere Kategorien</h4>
                                    
                                            <li class="sub-li drop"><a href="https://fair-hand.com/produktliste?category=cabrio">Cabrio</a></li>
                                            <li class="sub-li drop"><a href="https://fair-hand.com/produktliste?category=elektroauto">Elektroauto</a></li>
                                            <li class="sub-li drop"><a href="https://fair-hand.com/produktliste?category=lkw">LKW
                                        </a></li>       

                                
                                            <li class="sub-li drop"><a href="https://fair-hand.com/subcatergories?subcategory=fahrzeuge" style="color:#C60967 !important">mehr</a></li>
                                </div>

                                </ul>
                            </li>
                            <div class="vl"></div>

                            <li class="cat-list-li">
                                <a href="https://fair-hand.com/subcatergories?subcategory=freizeit">Freizeit</a>
                                <ul class="dropdown">
                                <div class="left-dropdown">
                                    <h4 style="color:#C60967;">Top Kategorien</h4>
                                    
                                            <li class="sub-li drop"><a href="https://fair-hand.com/produktliste?category=baby-kinder">Baby & Kinder</a></li>
                                            <li class="sub-li drop"><a href="https://fair-hand.com/produktliste?category=boote-yachten">Boote and Yachten</a></li>
                                            <li class="sub-li drop"><a href="https://fair-hand.com/produktliste?category=camping"> Camping</a></li>
                                </div>
                                            
                                <div class="right-dropdown" style="float:right;">
                                    <h4 style="color:#C60967;">Weitere Kategorien</h4>
                                    
                                            <li class="sub-li drop"><a href="https://fair-hand.com/produktliste?category=kosteume">Kostüeme</a></li>
                                            <li class="sub-li drop"><a href="https://fair-hand.com/produktliste?category=kutsche">Kutsche</a></li>
                                            <li class="sub-li drop"><a href="https://fair-hand.com/produktliste?category=requisiten">Requisiten</a></li>       

                                
                                            <li class="sub-li drop"><a href="https://fair-hand.com/subcatergories?subcategory=freizeit" style="color:#C60967 !important">mehr</a></li>
                                </div>

                                </ul>
                            </li>
                            <div class="vl"></div>

                            <li class="cat-list-li">
                                <a href="https://fair-hand.com/subcatergories?subcategory=hochzeit">Hochzeit</a>
                                <ul class="dropdown">
                                <div class="left-dropdown">
                                    <h4 style="color:#C60967;">Top Kategorien</h4>
                                    
                                            <li class="sub-li drop"><a href="https://fair-hand.com/produktliste?category=brautkleider">Brautkleider</a></li>
                                            <li class="sub-li drop"><a href="https://fair-hand.com/produktliste?category=hochzeitsauto">Hochzeitsauto</a></li>
                                            <li class="sub-li drop"><a href="https://fair-hand.com/produktliste?category=hochzeitsdekoration">Hochzeitsdekoration</a></li>
                                </div>
                                            
                                <div class="right-dropdown" style="float:right;">
                                    <h4 style="color:#C60967;">Weitere Kategorien</h4>
                                    
                                            <li class="sub-li drop"><a href="https://fair-hand.com/produktliste?category=hochzeitsfeier">Hochzeitsfeier</a></li>
                                            <li class="sub-li drop"><a href="https://fair-hand.com/produktliste?category=hochzeitskutsche">Hochzeitskutsche</a></li>
                                            <li class="sub-li drop"><a href="https://fair-hand.com/produktliste?category=hochzeitslocation">Hochzeitslocation</a></li>       

                                
                                            <li class="sub-li drop"><a href="https://fair-hand.com/subcatergories?subcategory=hochzeit" style="color:#C60967 !important">mehr</a></li>
                                </div>

                                </ul>
                            </li>
                            <div class="vl"></div>

                            <li class="cat-list-li">
                                <a href="https://fair-hand.com/subcatergories?subcategory=immobilien">Immobilien</a>
                                <ul class="dropdown">
                                <div class="left-dropdown">
                                    <h4 style="color:#C60967;">Top Kategorien</h4>
                                    
                                            <li class="sub-li drop"><a href="https://fair-hand.com/produktliste?category=bueros">Büeros</a></li>
                                            <li class="sub-li drop"><a href="https://fair-hand.com/produktliste?category=garage">Garage</a></li>
                                            <li class="sub-li drop"><a href="https://fair-hand.com/produktliste?category=lagerraum">Lagerraum</a></li>
                                </div>
                                            
                                <div class="right-dropdown" style="float:right;">
                                    <h4 style="color:#C60967;">Weitere Kategorien</h4>
                                    
                                            <li class="sub-li drop"><a href="https://fair-hand.com/produktliste?category=monteurzimmer">Monteurzimmer</a></li>
                                            <li class="sub-li drop"><a href="https://fair-hand.com/produktliste?category=proberaum">Proberaum</a></li>
                                            <li class="sub-li drop"><a href="https://fair-hand.com/produktliste?category=wohnung">Wohnung</a></li>       

                                
                                            <li class="sub-li drop"><a href="https://fair-hand.com/subcatergories?subcategory=immobilien" style="color:#C60967 !important">mehr</a></li>
                                </div>
                                </ul>
                            </li>
                            <div class="vl"></div>

                            <li class="cat-list-li">
                                <a href="https://fair-hand.com/subcatergories?subcategory=kunstler">Künstler</a>
                                <ul class="dropdown" style="right:50px;left:-100px;">
                                <div class="left-dropdown">
                                    <h4 style="color:#C60967;">Top Kategorien</h4>
                                    
                                            <li class="sub-li drop"><a href="https://fair-hand.com/produktliste?category=alleinunterhalter">Alleinunterhalter</a></li>
                                            <li class="sub-li drop"><a href="https://fair-hand.com/produktliste?category=ballonkünstler">Ballonkünstler</a></li>
                                            <li class="sub-li drop"><a href="https://fair-hand.com/produktliste?category=clown">Clown</a></li>
                                </div>
                                            
                                <div class="right-dropdown" style="float:right;">
                                    <h4 style="color:#C60967;">Weitere Kategorien</h4>
                                    
                                            <li class="sub-li drop"><a href="https://fair-hand.com/produktliste?category=comedian">Comedian</a></li>
                                            <li class="sub-li drop"><a href="https://fair-hand.com/produktliste?category=djs">DJS</a></li>
                                            <li class="sub-li drop"><a href="https://fair-hand.com/produktliste?category=double">Double</a></li>       

                                
                                            <li class="sub-li drop"><a href="https://fair-hand.com/subcatergories?subcategory=kunstler" style="color:#C60967 !important">mehr</a></li>
                                </div>

                              

                                </ul>
                            </li>
                            <div class="vl"></div>

                            <li class="cat-list-li">
                                <a href="https://fair-hand.com/subcatergories?subcategory=schmuck-uhren-accessoires">Schmuck</a>
                                <ul class="dropdown" style="right:50px;left:-300px;">
                                <div class="left-dropdown">
                                    <h4 style="color:#C60967;">Top Kategorien</h4>
                                    
                                            <li class="sub-li drop"><a href="https://fair-hand.com/produktliste?category=anhanger-schmuck-uhren-accessoires">Anhänger</a></li>
                                            <li class="sub-li drop"><a href="https://fair-hand.com/produktliste?category=armbander">Armbänder</a></li>
                                            <li class="sub-li drop"><a href="https://fair-hand.com/produktliste?category=automatikuhren">Automatikuhren</a></li>
                                </div>
                                            
                                <div class="right-dropdown" style="float:right;">
                                    <h4 style="color:#C60967;">Weitere Kategorien</h4>
                                    
                                            <li class="sub-li drop"><a href="https://fair-hand.com/produktliste?category=beauty">Beauty</a></li>
                                            <li class="sub-li drop"><a href="https://fair-hand.com/produktliste?category=chronographen">Chronographen</a></li>
                                            <li class="sub-li drop"><a href="https://fair-hand.com/produktliste?category=diamantschmuck">Diamantschmuck</a></li>       

                                
                                            <li class="sub-li drop"><a href="https://fair-hand.com/subcatergories?subcategory=schmuck-uhren-accessoires" style="color:#C60967 !important">mehr</a></li>
                                </div>

                                </ul>
                            </li>
                            <div class="vl"></div>

                            <li class="cat-list-li">
                                <a href="https://fair-hand.com/subcatergories?subcategory=werkzeuge">Werkzeuge</a>
                                <ul class="dropdown last" style="right:50px;left:-300px;">
                                <div class="left-dropdown">
                                    <h4 style="color:#C60967;">Top Kategorien</h4>
                                    
                                            <li class="sub-li drop"><a href="https://fair-hand.com/produktliste?category=abbruchhammer">Abbruchhammer</a></li>
                                            <li class="sub-li drop"><a href="https://fair-hand.com/produktliste?category=akkuschrauber">Akkuschrauber</a></li>
                                            <li class="sub-li drop"><a href="https://fair-hand.com/produktliste?category=bodenverdichter-ruettler">Bodenverdichter & Rüettler</a></li>
                                </div>
                                            
                                <div class="right-dropdown" style="float:right;">
                                    <h4 style="color:#C60967;">Weitere Kategorien</h4>
                                    
                                            <li class="sub-li drop"><a href="https://fair-hand.com/produktliste?category=bohrmaschine">Bohrmaschine</a></li>
                                            <li class="sub-li drop"><a href="https://fair-hand.com/produktliste?category=brenner">Brenner</a></li>
                                            <li class="sub-li drop"><a href="https://fair-hand.com/produktliste?category=einfriergerate">Einfriergeräte</a></li>       

                                
                                            <li class="sub-li drop"><a href="https://fair-hand.com/subcatergories?subcategory=werkzeuge" style="color:#C60967 !important">mehr</a></li>
                                </div>

                                </ul>
                            </li>

                        </ul>
                        </div>
        </div>
        </header>
        <!-- hamburger -->
        <div id="menu-container">
        <div style="width:100%;display:flex;">
             <div id="menu-wrapper" style="width:30%;float:left">
                    <div id="hamburger-menu"><span></span><span></span><span></span></div>
                   
      <!-- hamburger-menu -->
             </div>
             <div class="hamburger-logo" style="width:70%;float:right">
             <a href="https://fair-hand.com/" style="display: flex;
    align-items: flex-end;
    justify-content: flex-end;padding: 10px;"><img class="hamburger-logo-img" src="https://fair-hand.com/wp-content/uploads/2021/04/KUGEL_OHNE-HINTERGRUND.png" /></a>
                    </div>
        </div>
   <!-- menu-wrapper -->
                <ul class="menu-list accordion">

                    <?php
                            if (is_user_logged_in() ) {
                                // When the user is Logged-in
                                $current_user= wp_get_current_user();
                                // echo '<li id="nav3" class="menu-item">'. __( 'Willkommen, ', 'text-domain' ) .'<strong>'. $current_user->user_nicename .'</strong></li>';
                                echo '<li id="nav3" class="menu-item"><a href="https://fair-hand.com/loggen" >'. __( 'Willkommen, ', 'text-domain' ) .'<strong>'. $current_user->user_nicename .'</strong></a></li>';
                                echo '<li id="nav3" class="menu-item"><a href="'. wp_logout_url( home_url() ) .'" title="Log out">'. __( 'Ausloggen', 'text-domain' ) .'</a></li>';
                            }
                            else
                            {
                                // When user is logged-out
                                echo '<li id="nav3" class="menu-item"><a href="https://fair-hand.com/register" title="Register a New Account">'. __( 'Registrieren', 'text-domain' ) .'</a></li>';
                                echo '<li id="nav3" class="menu-item"><a href="https://fair-hand.com/loggen" title="Login to the site">'. __( 'Einloggen', 'text-domain' ) .'</a></li>';
                            } ?>
                    <li id="nav1" class="toggle accordion-toggle"> 
                        <span class="icon-plus"></span>
                        <a class="menu-link" href="#">Alle kategrien</a>
                    </li>
                    <!-- accordion-toggle -->
                    <ul class="menu-submenu accordion-content">
                            <li><a class="head" href="https://fair-hand.com/kategorien">Alle Kategorien</a></li>                           
                            <li><a class="head" href="https://fair-hand.com/subcatergories?subcategory=baumaschinen">Baumaschinen</a></li>
                            <li><a class="head" href="https://fair-hand.com/subcatergories?subcategory=dienstleistungen">Dienstleistungen</a></li>
                            <li><a class="head" href="https://fair-hand.com/subcatergories?subcategory=elektronik">Elektronik</a></li>
                            <li><a class="head" href="https://fair-hand.com/subcatergories?subcategory=events-messen-und-partys">Events, Messen und Partys</a></li>
                            <li><a class="head" href="https://fair-hand.com/subcatergories?subcategory=fahrzeuge">Fahrzeuge</a></li>
                            <li><a class="head" href="https://fair-hand.com/subcatergories?subcategory=freizeit">Freizeit</a></li>
                            <li><a class="head" href="https://fair-hand.com/subcatergories?subcategory=hochzeit">Hochzeit</a></li>
                            <li><a class="head" href="https://fair-hand.com/subcatergories?subcategory=immobilien">Immobilien</a></li>
                            <li><a class="head" href="https://fair-hand.com/subcatergories?subcategory=immobilien">Künstler</a></li>
                            <li><a class="head" href="https://fair-hand.com/subcatergories?subcategory=immobilien">Schmuck, Uhren, Accessoires</a></li>
                            <li><a class="head" href="https://fair-hand.com/subcatergories?subcategory=werkzeuge">Werkzeuge</a></li>
                    </ul>
                    <!-- menu-submenu accordon-content-->
                    <li id="nav2" class="menu-item"> 
                        <span class="icon-plus"></span>
                        <a class="menu-link" href="https://fair-hand.com/kontakt">Kontakt</a>
                    </li>
                   
                    <li id="nav2" class="menu-item"> 
                        <span class="icon-plus"></span>
                        <a class="menu-link" href="https://fair-hand.com/">Fair-Hand</a>
                    </li>
                </ul>
   <!-- menu-list accordion-->
   <div class="search-container" style="width:100%;">
                                
                                <div class="clm-right" >
                                    <form role="search" method="get" class="woocommerce-product-search" action="/produktliste">
                                        <label class="screen-reader-text" for="woocommerce-product-search-field-<?php echo isset($index) ? absint($index) : 0; ?>"><?php esc_html_e('Search for:', 'woocommerce'); ?></label>
                                        <input type="search" id="woocommerce-product-search-field-<?php echo isset($index) ? absint($index) : 0; ?>" class="search-field abc-input" placeholder="WAS möchten Sie mieten?" value="<?php echo get_search_query(); ?>" name="search" />
                                        <input type="search" style="margin-left:10px;" id="woocommerce-product-search-field-<?php echo isset($index) ? absint($index) : 0; ?>" class="search-field abc-input" placeholder="WO möchten Sie mieten? (ORT/PLZ)" value="<?php echo get_search_query(); ?>" name="city" />
                                        <button type="submit" value="<?php echo esc_attr_x('search', 'submit button', 'woocommerce'); ?>"><?php echo esc_html_x('', 'submit button', 'woocommerce'); ?> <i class="fa fa-search" style="font-size:19px;color:#C60967"></i></button>

                                    </form>
                                </div>
                            </div>  
    </div>
<!-- menu-container -->  
        
</div>


    

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script>
    $(function() {
  function slideMenu() {
    var activeState = $("#menu-container .menu-list").hasClass("active");
    $("#menu-container .menu-list").animate({left: activeState ? "0%" : "-100%"}, 400);
  }
  $("#menu-wrapper").click(function(event) {
    event.stopPropagation();
    $("#hamburger-menu").toggleClass("open");
    $("#menu-container .menu-list").toggleClass("active");
    slideMenu();

    $("body").toggleClass("overflow-hidden");
  });

  $(".menu-list").find(".accordion-toggle").click(function() {
    $(this).next().toggleClass("open").slideToggle("fast");
    $(this).toggleClass("active-tab").find(".menu-link").toggleClass("active");

    $(".menu-list .accordion-content").not($(this).next()).slideUp("fast").removeClass("open");
    $(".menu-list .accordion-toggle").not(jQuery(this)).removeClass("active-tab").find(".menu-link").removeClass("active");
  });
}); // jQuery load
//Geolocation
let map, infoWindow;

function initMap() {
  map = new google.maps.Map(document.getElementById("map"), {
    center: { lat: -34.397, lng: 150.644 },
    zoom: 6,
  });
  infoWindow = new google.maps.InfoWindow();
  const locationButton = document.createElement("button");
  locationButton.textContent = "Pan to Current Location";
  locationButton.classList.add("custom-map-control-button");
  map.controls[google.maps.ControlPosition.TOP_CENTER].push(locationButton);
  locationButton.addEventListener("click", () => {
    // Try HTML5 geolocation.
    if (navigator.geolocation) {
      navigator.geolocation.getCurrentPosition(
        (position) => {
          const pos = {
            lat: position.coords.latitude,
            lng: position.coords.longitude,
          };
          infoWindow.setPosition(pos);
          infoWindow.setContent("Location found.");
          infoWindow.open(map);
          map.setCenter(pos);
        },
        () => {
          handleLocationError(true, infoWindow, map.getCenter());
        }
      );
    } else {
      // Browser doesn't support Geolocation
      handleLocationError(false, infoWindow, map.getCenter());
    }
  });
}

function handleLocationError(browserHasGeolocation, infoWindow, pos) {
  infoWindow.setPosition(pos);
  infoWindow.setContent(
    browserHasGeolocation
      ? "Error: The Geolocation service failed."
      : "Error: Your browser doesn't support geolocation."
  );
  infoWindow.open(map);
}

</script>


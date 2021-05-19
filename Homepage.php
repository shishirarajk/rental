<?php /* Template Name: homepage */ ?>
<?php $all_categories = get_categories($args);

$slug = $_GET['category'];
$category = get_term_by('slug', $slug, 'product_cat');
$cat_id = $category->term_id;
$parent = $category->parent;
if (isset($_GET['search'])) {
  $search = $_GET['search'];
}
$all_categories = get_categories(array('posts_per_page' => -1, 'taxonomy' => 'product_cat'));
if (isset($_GET['city'])) {
  $Cityname = $_GET['city'];
}
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
  'hide-btn_empty'   => $empty
);
$all_categories = get_categories($args);
if (isset($_GET['city'])) {
  $Cityname = $_GET['city'];
}




?>
<?php get_header(); ?>


<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<meta content="width=device-width, initial-scale=1" name="viewport" />
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
<!-- Owl Carousel -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css">


<style>
  /* Header css */
  .main-navigation ul {
    display: flex;
    justify-content: flex-end;
    background: #C60967 !important;
    margin-right: 30px !important;
}
#menu-container {
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
.head-div{margin-top:40px;
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
    @media (min-width:1352px) and (max-width:1999px){
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
/* ................................................................................................................. */
  .green-btn {
    color: #c60967;
    /* background: #c60967; */
    /* width: 110px; */
    border: none;
    font-size: 12px;
    font-weight: 500;
    /* padding: 6px 12px 7px 12px; */
    cursor: pointer;
    text-decoration: none;
    text-align: center;
    /* line-height: 1.4; */
    /* float: left; */
    margin-left: 85px;
  }

  .green-btn:hover {
    text-decoration: none;
    /* color: #c60967;
    background: #c60967; */
  }

  .home-container {
    /* margin: 50px 50px 50px 50px; */
    align-items: center;
    justify-content: center;
    overflow-x: hidden;
    margin-top: 30px;

  }

  .home_wrap {
    margin: 0px 30px 30px 30px;
  }
.kategorie-wrap-images{
  display:flex;
  flex-direction:column;
}
  .cat-head-img {
    height: auto;
    overflow: hidden;
    display: flex;
    /* flex-wrap: wrap; */
    justify-content: center;
  }

  .sub-cat-img {
    max-width: 100%;
  }

  .category {
    margin: 10px;
  }

  #row1 {
    margin-top: -30px;
  }

  #left1 {
    width: 60%;
    display: flex;

    flex-direction: column;
    justify-content: center;
    align-items: center;
  }

  .city-name {
    s width: auto;
    border: 1px solid #C60967;
    display: flex;
    flex-direction: column;
    padding: 10px;
    margin-top: 50px;
  }

  .city-list {
    text-decoration: none;
    color: #000;
    font-size: 14px;
    line-height: 2;
  }

  .city-list:hover {
    text-decoration: none;
    color: #C60967;
  }

  #right1 {
    margin-left: 100px;
  }

  #left4 {
    position: relative;
    text-align: center;
    color: #000;
  }

  #right4 {
    font-size: 25px;
  }

  @media only screen and (max-width: 487px) {
    #right4-head {
      margin-top: 30px
    }

    #right4-para {
      margin-top: 30px
    }
  }

  .hm-btn {
    pointer-events: none;
    float: left;
    width: 50px;
    height: 56px;
    padding: 10px;
    background: #C60967;
    color: white;
    font-size: 17px;
    border: 1px solid grey;
    border-left: none;
    cursor: pointer;
    box-shadow: 5px 10px #d0d0d0;

  }

  .centered {
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
  }

  #grey-background {
    background-color: #F0F0F0;
  }

  #grey_text2 {
    font-size: 18px;
    line-height: 1.7;
    color: #404040;
    font-weight: 500;
  }

  .txt-area {
    margin: 20px;
    padding: 30px;
  }

  .example {
    margin-left: 50px;
  }

  form.example input[type="text"] {
    padding: 15px;
    font-size: 17px;
    border: 1px solid grey;
    float: left;
    width: 70%;
    height: 56px;
    background: #fff;
    box-shadow: 5px 10px #D0D0D0;
  }



  form.example button:hover {
    background: #0b7dda;
  }

  .top-buffer {
    margin-top: 100px;
  }

  #outer {
    height: auto;
    overflow: hidden;
    display: flex;
    flex-wrap: wrap;
    justify-content: space-evenly;
  }

  .msgBtn1 {
    height: 80px;
    width: 350px;
    border-radius: 15px;
    background-color: #603;
    color: #fff;
    font-size: 20px;
    border: none;
  }

  .msgBtn2 {
    height: 80px;
    width: 350px;
    border-radius: 15px;
    background-color: #F0F0F0;
    color: #959595;
    font-size: 20px;
    border: none;
  }
  .msgBtn2:hover{background-color: #603;
  color: #fff;}
.third:hover{background-color: #603;
  color: #fff;}
  .msgBtn3 {
    height: 70px;
    width: 100px;
    border-radius: 15px;
    background-color: #603;
    color: #fff;
    font-size: 20px;
  }

  #grey_text {
    font-size: 20px;
  }

  #right1_img {
    height: 300px;
  }

  select {
    margin-bottom: 1em;
    padding: .25em;
    border: 2px solid #C60967;
    color: #C60967;
    font-weight: 600;
    font-size: 15px;
    letter-spacing: .15em;
    width: 130px;
    height: 56px;
    border-radius: 5px;
    box-shadow: 5px 10px #D0D0D0;

    &:focus,
    &:active {
      outline: 0;
      border-bottom-color: red;
    }
  }

   /* owl carousel */
  .owl-carousel {
    width: 100%;
    /* height: 100vh; */
    padding: 0 20px 0 20px !important;
  }

  .row2 {
    margin-top: 150px;
    margin-left: 100px;
  }

  .home-btn {
    background-color: #c60967 !important;
    margin-top: 5px;
    border: none;
    color: white;
    width: 220px;
    padding: 15px 32px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 16px;
    opacity: 0.8;
  }

  .home-btn:hover {
    color: #FFF5FA;
    text-decoration: none;
  }

  .slide {
    width: 100%;
    height: 80vh;
    position: relative;
    background-size: contain;
    background-repeat: no-repeat;
    background-position: center center;
  }

  .slide::before {
    content: "";
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100vh;

  }

  .slide-1 {
    background-image: url(https://fair-hand.com/wp-content/uploads/2021/05/minibus-1651031_1920.png);
  }

  .slide-2 {
    background-image: url(https://fair-hand.com/wp-content/uploads/2021/05/bouncy-castle-3466291_1920.png);
  }

  .slide-3 {
    background-image: url(https://fair-hand.com/wp-content/uploads/2021/05/mountain-bike-3469468_1920.png);
  }

  .slide-4 {
    background-image: url(https://fair-hand.com/wp-content/uploads/2021/05/wu-jianxiong-4TET084JWaA-unsplash-1.png);
  }

  .slide-content {
    /* text-align: center; */
    position: absolute;
    top: 50%;
    left: 50%;
    padding-right: 20px;
    padding-bottom: 20px;
    transform: translateY(-50%);
    /* backdrop-filter: blur(10px);
    -webkit-backdrop-filter: blur(10px) */

  }

  @media screen and (max-width:600px) {
    .slide-1 {
      background-image: url(https://fair-hand.com/wp-content/uploads/2021/05/minibus-1651031_1920-1.png) !important;
    }

    .slide-2 {
      background-image: url(https://fair-hand.com/wp-content/uploads/2021/05/bouncy-castle-3466291_1920-1.png) !important;
    }

    .slide-3 {
      background-image: url(https://fair-hand.com/wp-content/uploads/2021/05/mountain-bike-3469468_1920-1.png) !important;
    }

    .slide-4 {
      background-image: url(https://fair-hand.com/wp-content/uploads/2021/05/wu-jianxiong-4TET084JWaA-unsplash-1-1.png) !important;
    }

  }

  .hm-icons {
    display: flex;
    flex-direction: row;
    align-items: center;
    justify-content: center;
  }

  .hm-icons img {
    width: 10%;
  }

  .slide-content h1 {
    color: #000;
    font-size: 45px;
    text-transform: uppercase;
    text-align: left;
    font-weight: 600;

  }

  .slide-content p {
    color: white;
    font-size: 28px;
    font-weight: 600;
    margin-bottom: 20px;
    line-height: 1.5;
    text-shadow: 2px 2px 3px #000000;
  }

  .owl-dots {
    text-align: center;
    margin-top: 0px;
  }

  .owl-dot {
    height: 10px;
    width: 20px;

    margin: 0 5px;
    outline: none;
    border-radius: 0px;
    border: 2px solid #C60967 !important;
    box-shadow: 0px 4px 15px rgba(0, 0, 0, 0.2);
    transition: all 0.3s ease;
  }

  .owl-dot.active,
  .owl-dot:hover {
    background: #C60967 !important;
  }

  .owl-theme .owl-nav {
    margin-top: 0px;
    display: none;
  }

  .owl-theme .owl-dots .owl-dot span {
    width: 0px;
  }


  @media screen and (max-width: 909px) {
    .msgBtn1 {
      margin-top: 50px;

    }

    .msgBtn2 {
      margin-top: 50px;
    }
    .slide {   
    height: 60vh;
    }

  }

  @media screen and (max-width: 759px) {
    form.example input[type="text"] {
      width: 50%;
    }
    .hm-icons img {
      width: 25%;
    }
    .top-buffer {
      margin-top: 50px;
    }
    .green-btn {
      margin-left:50px;
    }
  }

  @media screen and (max-width:470px) and (min-width:50px) {
    .slide-content {
      top: 85% !important;
      width:100%;
      left:unset !important;
      text-align:center;
    }
    .slide-content p{
      font-size: 12px !important;
      margin:0;
      color:black;
    }
   
    .row2 {
      margin-top:0px !important;
      margin-left: 0px !important;
    }

  }

  @media only screen and (max-width: 487px) {
    #right4-head {
      margin-top: 30px
    }

    #right4-para {
      margin-top: 30px
    }

    .hm-icons img {
      width: 55%;
    }
  }

  /* @media screen and (max-width:1300px) {
  .slide{height: 60vh !important;}
  
} */
  @media screen and (min-width: 1460px) {
    .home-container{
      display:flex;
      align-items:center;
      justify-content:center;
    }
    .home_wrap {
      width:1400px
    }
  }

  @media screen and (max-width: 1024px) {

    .slide-1,
    .slide-2,
    .slide-3,
    .slide-4 {
      background-size: contain;
      /* background-image: none;
      background: linear-gradient(134.68deg, #FFF5FA 0%, #FFEEF6 56%, #F0C4DA 100%); */
    }

    .row2 {
      margin-top: 0px;
    }

    .citys {
      columns: 5 !important;
    }

    .owl-dots {

      margin-top: 10px;
    }


  }


  @media screen and (min-width:779px) and (max-width: 950px) {
    .msgBtn1 {
      margin-top: 50px;

    }

    .msgBtn2 {
      margin-top: 50px;
    }
    
    .slide-content p{
      font-size:18px !important ;
      margin:0;
    }
  }

  @media screen and (max-width: 779px) {
    form.example input[type="text"] {
      width: 50%;
    }

    #grey_text2 {
      font-size: 14px;
    }

    .home-btn {
      width: auto;
      padding: 5px 10px;
    }
  }


  @media screen and (min-width: 470px) and (max-width: 600px) {
    .slide-content{
      padding-bottom:10px;
    }
    .slide-content p {
      
      font-size: 12px !important; 
      /* text-transform: uppercase; */
      text-align: left;
      font-weight: 600;
      margin: 0;
      


    }

    .slide {
      height: 60vh !important;
    }

    .row2 {
      margin-top: 30px !important;
      margin-left:30px !important;
    }
  }

    @media screen and (max-width: 779px) and (min-width: 600px){
    .slide-content p {
     
      font-size: 16px !important;
      /* text-transform: uppercase; */
      text-align: left;
      font-weight: 600;
      margin: 0;

    }

    .slide {
      height: 60vh !important;
    }

    .row2 {
      margin-top: 50px !important;
      margin-left:30px;
    }
  }

  @media screen and (max-width: 1190px) {
    .hide-btn {
      display: none;
    }
  }

  #carousel2 {
    display: flex;
    justify-content: center;
    align-items: center;
  }



  .carousel {
    position: relative;
    height: 100%;
  }

  .carousel-inner {
    position: relative;
    width: 100%;
    overflow: hidden;
  }

  .carousel-inner>.item {
    position: relative;
    display: none;
    height: 100vh;
    background-color: #fff;
    -webkit-transition: .6s ease-in-out left;
    -o-transition: .6s ease-in-out left;
    transition: .6s ease-in-out left;
  }

  .carousel-inner>.item>img,
  .carousel-inner>.item>a>img {
    line-height: 1;
    position: absolute;
    top: 0;
    left: 0;
    min-width: 100%;
    height: 100vh;
  }

  .carousel-inner>.active,
  .carousel-inner>.next,
  .carousel-inner>.prev {
    display: block;
  }

  .carousel-inner>.active {
    left: 0;
  }

  .carousel-inner>.next,
  .carousel-inner>.prev {
    position: absolute;
    top: 0;
    width: 100%;
  }

  .carousel-inner>.next {
    left: 100%;
  }

  .carousel-inner>.prev {
    left: -100%;
  }

  .carousel-inner>.next.left,
  .carousel-inner>.prev.right {
    left: 0;
  }

  .carousel-inner>.active.left {
    left: -100%;
  }

  .carousel-inner>.active.right {
    left: 100%;
  }

  .controlsBlock {
    position: relative;
    bottom: 0;
    left: 0;
    top: 10px;
    display: block;
    width: 177px;
    margin: 0 auto;
    z-index: 1;
    height: 24px;
    text-align: center;
  }

  .controls {
    position: relative;
    display: block;
  }

  .carousel-control {
    position: absolute;
    top: 25.5px;
    bottom: 0;
    left: 0;
    background: #000000;
    font-size: 5px;
    background: none !important;
    color: #000 !important;
    text-align: center;
  }

  .carousel-control i {
    font-size: 20px;
  }

  .carousel-control.left {
    left: 0;
  }

  .carousel-control.right {
    right: 0;

  }

  .carousel-control:hover,
  .carousel-control:focus {
    color: #000;
  }

  .carousel-control .glyphicon-chevron-left,
  .carousel-control .glyphicon-chevron-right {
    position: absolute;
    z-index: 5;
    display: inline-block;
  }

  .carousel-control .glyphicon-chevron-left {
    left: 0;
  }

  .carousel-control .glyphicon-chevron-right {
    right: 0;
  }

  .carousel-indicators {
    position: relative;
    bottom: 0;
    left: 50%;
    z-index: 15;
    width: 60%;
    top: 10px;
    padding-left: 0;
    margin-left: -30%;
    text-align: center;
    list-style: none;
  }

  .carousel-indicators li {
    display: inline-block;
    zoom: 1;
    width: 20px;
    height: 10px;
    margin: 0 2px;
    background: grey;
    -webkit-border-radius: 50%;
    -moz-border-radius: 50%;
    border-radius: 0%;
    border: 3px solid transparent;
    -webkit-box-shadow: rgba(0, 0, 0, 0.5) 0 0 2px;
    -moz-box-shadow: rgba(0, 0, 0, 0.5) 0 0 2px;
    box-shadow: rgba(0, 0, 0, 0.5) 0 0 2px;
    cursor: pointer;
  }

  .carousel-indicators .active {
    width: 20px;
    height: 10px;
    margin: 0;
    background-color: #C60967;
  }

  .slider-btn {

    border: none;
    font-weight: 400;
    cursor: pointer;
    text-decoration: none;
    text-align: center;
    line-height: 1.4;
    float: left;
    color: #fff;
  }

  .video-section {
    /* display: flex; */
    width: 100%;
    margin-top: 100px;
    margin-bottom: 50px;
  }

  .vid-text {
    /* width: 50%; */
    display:flex;
    align-items:center;
    justify-content:center;
  }
  .vid-text h1{
    color: #C60967;
    text-align:center;
    font-size:30px;

  }
  .vid-img {
    /* width: 50%; */
    display: flex;
    align-items: center;
    justify-content: center;
    margin-top:50px;
  }
.vid-img video {
  width:820px;
  height:auto;
}

@media screen and (max-width:781px){
  .vid-img video {
    width:400px;
  }
}
  @media screen and (max-width:900px) {
    .video-section {
      /* display: flex;
      flex-direction: column-reverse;
      align-items: center;
      justify-content: center; */
      margin-top:20px;
    }

    .vid-text {
      margin-top: 20px;
      width: 100%;
    }

  }

  .citys {
    columns: 5;
  }

  .citys ul {
    margin: 0 !important;
    color: #404040;
    text-align:center;
  }


  .image-wrapper {
    position: relative;
    display: block;
    text-decoration: none;
  }

  .label-text {
    background: -moz-linear-gradient(90deg, rgba(241, 150, 195, 81) 0%, rgba(245, 101, 173, .8) 45%);
    background: -webkit-linear-gradient(90deg, rgba(241, 150, 195, 81) 0%, rgba(245, 101, 173, .8) 45%);
    background: rgb(241, 150, 195);
    background: linear-gradient(90deg, rgba(241, 150, 195, 81) 0%, rgba(245, 101, 173, .8) 45%);
    position: absolute;
    color: #fff;
    bottom: 0;
    right: 0;
    width: 100%;
    text-align: center;
    padding: 3px 15px 8px 15px;
    overflow: hidden;
    white-space: nowrap;
    text-overflow: ellipsis;
    margin: 0;
    padding: 10px;
    font-size: 20px;
  }

  .teaser-box-price {
    background: -moz-linear-gradient(90deg, rgba(241, 150, 195, 81) 0%, rgba(245, 101, 173, .8) 45%);
    background: -webkit-linear-gradient(90deg, rgba(241, 150, 195, 81) 0%, rgba(245, 101, 173, .8) 45%);
    background: rgb(241, 150, 195);
    background: linear-gradient(90deg, rgba(241, 150, 195, 81) 0%, rgba(245, 101, 173, .8) 45%);
    position: absolute;
    color: #fff;
    top: 0;
    left: 0;
    padding: 15px;
    font-size: 20px;
  }

  @media screen and (max-width: 1300px) {
    #carousel2 {
      display: flex;
      flex-direction: column-reverse;
    }

    .carou-text {
      width: 100%;
      margin-top: 50px;
    }

    .carou-img {

      width: 100%;
    }

    .city-list {

      font-size: 12px;
    }

    .slide-content p {      
      font-size: 22px;
    }
    .row2 {
    margin-top: 100px;
    }

  }

  @media screen and (max-width:900px) {
    .citys {
      columns: 5;
    }

    .home_wrap {
      margin: 0px 0px 0px 0px;
    }

    /* .category {
      margin: 10px 0 10px 0;
    } */  

  }
  @media screen and (max-width:680px) { 
  .category {
      margin: 10px 0 10px 0;
      width:100%;
    }
    .cat-head-img{
      flex-wrap:wrap;
    }
    .sub-cat-img {
    width:100%;
}
  }
  @media screen and (min-width: 768px) {
    .carousel {
      height: 500px;
    }

    .carousel-inner>.item {
      height: 500px;
    }


  }

  @media only screen and (max-width: 580px) {
    .citys {
      columns: 3 !important;
    }
  }

  @media only screen and (max-width: 487px) {
    #right4-head {
      margin-top: 30px
    }

    #right4-para {
      margin-top: 30px
    }

    .citys {
      columns: 2 !important;
    }
  }

  .carousel-inner>.item>img,
  .carousel-inner>.item>a>img {
    height: 500px;
  }

  .carousel-control .glyphicon-chevron-left,
  .carousel-control .glyphicon-chevron-right,
  .carousel-control .icon-prev,
  .carousel-control .icon-next {

    font-size: 15px;
  }



  .carousel-indicators {
    bottom: .0;
  }
  }

  @media only screen and (max-width: 992px) {
    #right4 {
      width: 100%;
    }
  }

  /* .vl {
    border-left: 6px solid #C60967;
    height: 100px;
    text-align: left;
    /* padding: 20px; */
  /* padding-left: 30px; */
  /* margin: 27px; */
  /* margin-top: 25px; */
  /* } */

  @media only screen and (max-width: 487px) {
      #right4-head {
        margin-top: 30px
      }

      #right4-para {
        margin-top: 30px
      }
  }

  .carousel-control .glyphicon-chevron-left {
    display: none;
  }

  .carousel-control .glyphicon-chevron-right {
    display: none;
  }


</style>
<div class="home-container">
  <div class="home_wrap">

    <div class="row" id="row1">
      <!-- OWL CAROUSEL START -->
      <div class="owl-carousel owl-theme">
          <div class="slide slide-1">
            <div class="slide-content">
              <div class="row2">
                  <span>
                    <p>Urlaubsreif? Dann mieten Sie sich ein Wohnmobil und fahren Sie wohin Sie möchten!</p>
                  <span>
                    <a href="https://fair-hand.com/produktliste?category=wohnmobile" class="home-btn hide-btn">Wohnmobile</a>
                    <a href="https://fair-hand.com/produktliste?category=wohnwagen" class="home-btn hide-btn">Wohnwagen</a>

                    <!-- Force next columns to break to new line at md breakpoint and up -->
                    <div class="w-100 d-none d-md-block"></div>

                    <a class="home-btn hide-btn" href="https://fair-hand.com/produktliste?category=camping">Camping</a>
                    <a href="https://fair-hand.com/produktliste?category=kameraverleih" class="home-btn">Kameraverleih</a>
              </div>
            </div>
          </div>
          <div class="slide slide-2">
            <div class="slide-content">
              <div class="row2">
                <p>Kindergeburtstag geplant?</p><p> Mieten Sie sich das Party-Highlight!</p>
                <a href="https://fair-hand.com/produktliste?category=hupfburgen" class="home-btn hide-btn">Hüpfburgen</a>
                <a href="https://fair-hand.com/produktliste?category=catering" class="home-btn hide-btn">Catering</a>

                <!-- Force next columns to break to new line at md breakpoint and up -->
                <div class="w-100 d-none d-md-block"></div>

                <a class="home-btn hide-btn" href="https://fair-hand.com/produktliste?category=kinderanimation">Kinderanimation</a>
                <a href="https://fair-hand.com/produktliste?category=mietmobel" class="home-btn">Mietmöbel  </a>
              </div>
            </div>
          </div>
          <div class="slide slide-3">
            <div class="slide-content">
              <div class="row2">
                <p>Fahrradtour geplant? Hier finden Sie das passende Mountainbike!</p>
                <a href="https://fair-hand.com/produktliste?category=fahrrader" class="home-btn hide-btn">Fahrräder</a>
                <a href="https://fair-hand.com/produktliste?category=camping" class="home-btn hide-btn">Camping</a>

                <!-- Force next columns to break to new line at md breakpoint and up -->
                <div class="w-100 d-none d-md-block"></div>

                <a class="home-btn hide-btn" href="https://fair-hand.com/produktliste?category=kameraverleih">Kameraverleih</a>
                <a href="https://fair-hand.com/produktliste?category=freizeit" class="home-btn">Freizeit</a>
              </div>
            </div>
          </div>
          <div class="slide slide-4">
            <div class="slide-content">
              <div class="row2">
                <p>Der wichtigste Tag Ihres Lebens - Jetzt Equipment leihen!</p>
                <a href="https://fair-hand.com/produktliste?category=brautkleider" class="home-btn hide-btn">Brautkleider</a>
                <a href="https://fair-hand.com/produktliste?category=hochzeitsauto" class="home-btn hide-btn">Hochzeitsauto</a>

                <!-- Force next columns to break to new line at md breakpoint and up -->
                <div class="w-100 d-none d-md-block"></div>

                <a class="home-btn hide-btn" href="https://fair-hand.com/produktliste?category=hochzeitsfeier">Hochzeitsfeier</a>
                <a href="https://fair-hand.com/produktliste?category=hochzeitsmusik" class="home-btn">Hochzeitsmusik</a>
              </div>
            </div>
          </div>
      </div>
      <!-- OWL CAROUSEL END -->

      <!-- ICONS -->

      <div class="hm-icons" style="margin-top:50px;">
        <h3 style="margin-left:20px;color: #404040;"><img src="https://fair-hand.com/wp-content/uploads/2021/04/Group-2.png" alt="fair-hand"> Das Online-Portal zum Ver- und Entleihen</h3>
        <h3 style="margin-left:20px;color: #404040;"><img src="https://fair-hand.com/wp-content/uploads/2021/04/Group-4.png" alt="fair-hand"> Immer kostenlos für den Entleiher</h3>
        <h3 style="margin-left:20px;color: #404040;"><img src="https://fair-hand.com/wp-content/uploads/2021/04/Group-1.png" alt="fair-hand"> Privater Verleiher schon ab 1,99€ / Monat</h3>

      </div>

       <!-- ICONS END-->

        <!-- BUTTONS -->
      
      <div class="row top-buffer">
        <div id="outer">
          <div class="inner">
            <form><button type="submit" class="msgBtn1" formaction="/verleihen-privat">Verleihen Privat</button></form>
          </div>
          <div class="inner">
            <form><button type="submit" class="msgBtn2" formaction="/verleihen-gewerblich">Verleihen Gewerblich</button></form>
          </div>
          <div class="inner">
            <form><button type="submit" class="msgBtn2 third" formaction="/kategorien">Alle Kategorien</button></form>
          </div>
        </div>
      </div>
        <!-- BUTTONS END-->

        <!-- VIDEO -->
      <div class="video-section" id="vid-sec">
        <div class="vid-text">
          <div style="width:90%">
            <h1>Leihen und verleihen von privat für privat</h1>
            <p id="grey_text2">Über unsere Plattform können sich Privatleute registrieren und ihre Werkzeuge, ihr Spezial-Equipment sowie hochwertige Kleider, Anzüge und Partyausstattungen zum Verleih anbieten.</p>
            <p id="grey_text2"> Ob Hochzeitswillige, Häuslebauer, Familienplaner oder Hobby-Handwerker – wer einen bestimmten Gegenstand benötigt, diesen aber nicht selber besitzt, findet auf unserer Plattform garantiert den passenden Verleiher aus seiner Nähe. Neben Partyzelten und Bierzapfanlagen findest du bei uns auch Bierzeltgarnituren und Musikanlagen, Hochzeitskleider und -anzüge, Häcksler und Fräsen sowie Oldtimer und Spezialwerkzeuge. In der Kategorie „Verleihen privat“ kannst du sämtliches Equipment zum Verleih anbieten, das du nicht jeden Tag brauchst.</p>
          </div>
        </div>
        <div class="vid-img">
          <video autoplay controls muted loop>
            <source src="https://fair-hand.com/wp-content/uploads/2021/04/09XN7FJOG6E806K8.mp4" type="video/mp4">
          </video>
        </div>
      </div>
       <!-- VIDEO END-->

      <div class="kategorie-wrap-images">
        <!-- kategorie -->       
      <div class="cat-head-img" style="margin-top:30px;">
        <div class="category">
          <div class="image-wrapper">
            <a href="https://fair-hand.com/subcatergories?subcategory=baumaschinen">

              <img class="sub-cat-img" src="https://fair-hand.com/wp-content/uploads/2021/05/five_adobespark-1.jpg" alt="faithand">

              <p class="label-text">Mischmaschine mieten</p>
              <div class="teaser-box-price"><span>Ab 69€</span></div>
            </a>
          </div>
        </div>

        <div class="category">
          <div class="image-wrapper">
            <a href="https://fair-hand.com/subcatergories?subcategory=dienstleistungen">

              <img class="sub-cat-img" src="https://fair-hand.com/wp-content/uploads/2021/05/seven_adobespark.png" alt="faithand">

              <p class="label-text">Verputzer mieten</p>
              <div class="teaser-box-price"><span>Ab 34€</span></div>
            </a>
          </div>
        </div>

        <div class="category">
          <div class="image-wrapper">
            <a href="https://fair-hand.com/subcatergories?subcategory=fahrzeuge">

              <img class="sub-cat-img" src="https://fair-hand.com/wp-content/uploads/2021/05/six_adobespark.jpg" alt="faithand">

              <p class="label-text">Partybus mieten</p>
              <div class="teaser-box-price"><span>Ab 149€</span></div>
            </a>
          </div>
        </div>

        

      </div>
              <!-- CATEGORY FIRST 3 IMAGES  END AND NEXT 2 IMAGES BELOW-->  

      <div class="cat-head-img">
      <!-- new image watch -->
      <div class="category">
            <div class="image-wrapper">
              <a href="https://fair-hand.com/subcatergories?subcategory=schmuck-uhren-accessoires">

                <img class="sub-cat-img" src="https://fair-hand.com/wp-content/uploads/2021/05/one_adobespark.jpg" alt="faithand">

                <p class="label-text">Automatikuhren</p>
                <div class="teaser-box-price"><span>Ab 19€</span></div>
              </a>
            </div>
          </div>
<!-- new image watch -->

          <div class="category">
            <div class="image-wrapper">
              <a href="https://fair-hand.com/subcatergories?subcategory=hochzeit">

                <img class="sub-cat-img" src="https://fair-hand.com/wp-content/uploads/2021/03/wedding-1031493_1920-min.png" alt="faithand">

                <p class="label-text">Hochzeitsanzug mieten</p>
                <div class="teaser-box-price"><span>Ab 99€</span></div>
              </a>
            </div>
          </div>

          <div class="category">
            <div class="image-wrapper">
              <a href="https://fair-hand.com/subcatergories?subcategory=freizeit">

                <img class="sub-cat-img" src="https://fair-hand.com/wp-content/uploads/2021/05/eight_adobespark.png" alt="faithand">

                <p class="label-text">Yacht mieten</p>
                <div class="teaser-box-price"><span>Ab 149€</span></div>
              </a>
            </div>
          </div>

          
      </div>

      <!-- NEW ROW -->

      <div class="cat-head-img">      
      <div class="category">
            <div class="image-wrapper">
              <a href="https://fair-hand.com/subcatergories?subcategory=immobilien">

                <img class="sub-cat-img" src="https://fair-hand.com/wp-content/uploads/2021/05/two_adobespark.png" alt="faithand">

                <p class="label-text">Garage</p>
                <div class="teaser-box-price"><span>Ab 40€</span></div>
              </a>
            </div>
          </div>


          <div class="category">
            <div class="image-wrapper">
              <a href="https://fair-hand.com/subcatergories?subcategory=elektronik">

                <img class="sub-cat-img" src="https://fair-hand.com/wp-content/uploads/2021/05/three_adobespark.png" alt="faithand">

                <p class="label-text">Kameraverleih</p>
                <div class="teaser-box-price"><span>Ab 29€</span></div>
              </a>
            </div>
          </div>

          <div class="category">
            <div class="image-wrapper">
              <a href="https://fair-hand.com/subcatergories?subcategory=events-messen-und-partys">

                <img class="sub-cat-img" src="https://fair-hand.com/wp-content/uploads/2021/05/four_adobespark.jpg" alt="faithand">

                <p class="label-text">Zeltverleih</p>
                <div class="teaser-box-price"><span>Ab 279€</span></div>
              </a>
            </div>
          </div>

          
      </div>

</div>
       <!-- CATEGORY END-->

        <!-- CITY START-->

      <div class="city-name">
        <h2 style="color: #C60967;text-align:center">Top Städte</h2>
        <div class="citys">
          <?php
          $host_name = 'db5001593531.hosting-data.io';
          $dbUsername = "dbu1634689";
          $dbPassword = "MDfh-1211";
          $dbName = "dbs1326586";
          $conn = mysqli_connect($host_name, $dbUsername, $dbPassword, $dbName);
          $query = "SELECT * FROM topcity WHERE topcity!=''";
          $result = mysqli_query($conn, $query);
          while ($row = mysqli_fetch_array($result)) {
          ?>
            <ul>
              <li>
                <?php $loop = new WP_Query($args);


               $loop->the_post();
                  global $product;
                  $City = get_post_meta($loop->post->ID, "_product_attributes");
                 

                  if ((isset($Cityname) && $Cityname == $row["topcity"] || (!isset($Cityname)) || $Cityname == '')) {
                ?>
               
                    <a href="https://fair-hand.com/produktliste?city=<?php echo $row["topcity"]; ?> " class="city-list"><?php echo $row["topcity"]; ?></a>
                <?php }
              ?>
              </li>
            </ul>
          <?php
          }         
          ?>         
          <br>
          <a href="https://fair-hand.com/stadt" class="green-btn">Alle Top-Städte</a>
        </div>
      </div>
    </div>
          <!-- CITY END-->

          <!-- COOKIE BANNER -->
            
      <?php include_once('cookie.php'); ?>
           
         
          <!-- END OF COOKIE BANNER -->
  </div>

</div>
</div>
<!-- Jquery -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<!-- Owl Carousel -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
<!-- Custom Javascript -->
<script>
  $(document).ready(function() {
    $(".owl-carousel").owlCarousel({
      items: 1,
      loop: true,
      nav: true,
      autoplay: true,
      autoplaySpeed: 1000,
      smartSpeed: 1500,
      autoplayHoverPause: true
    });

    $('#slideshow').carousel({
      items: 1,
      loop: true,
      nav: true,
      autoplay: true,
      autoplaySpeed: 500,
      smartSpeed: 1500,
      autoplayHoverPause: true
    });

  });
</script>
<script>
  jQuery(document).ready(function() {
    jQuery('.inpt').keydown(function(event) {
      if (event.keyCode == 13) {
        event.preventDefault();
        return false;
      }
    });
  });
  jQuery(document).ready(function() {
    jQuery('.inpt').keydown(function(event) {
      if (event.keyCode == 13) {
        event.preventDefault();
        return false;
      }
    });
  });



//   $('.cookie-accept').click(function () { //on click event
//   days = 182; //number of days to keep the cookie
//   myDate = new Date();
//   myDate.setTime(myDate.getTime()+(days*24*60*60*1000));
//   document.cookie = "comply_cookie = comply_yes; expires = " + myDate.toGMTString(); //creates the cookie: name|value|expiry
//   // $("#cookies").slideUp("slow"); //jquery to slide it up
//    $("#transparent-bg").hide();
//   // $("#transparent-bg").css({
//   //       'background-color': 'none'       
//   //   });
// });

// document.getElementById("cookie-accept").onclick = function(e) {
//   days = 182; //number of days to keep the cookie
//   myDate = new Date();
//   myDate.setTime(myDate.getTime()+(days*24*60*60*1000));
//   document.cookie = "comply_cookie = comply_yes; expires = " + myDate.toGMTString(); //creates the cookie: name|value|expiry
//   document.getElementById("cookies").parentNode.removeChild(elem);
// }



    // $('#show-next').click(function() {
    //   $('.privite-cookie').hide();
    //   $('.public-cookie').hide();      
    // });




</script>

<?php get_footer(); ?>
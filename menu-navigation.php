
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>

<?php


?>
<style>
	.nav-list{
		/* width:50%;
		background-color:#F5F5F5;
		padding:30px; */
		margin: 25px 0 0 70px;
    height: 100%;
	}
	.nav-anchor{
		text-decoration:none;
		color:black;
		font-weight:600;
		font-size:16px;
	}
	.nav-anchor:hover{
		text-decoration:none;
		color:#e83e8c;
	}

	ul#icons{
		list-style: none;
		padding-top: 20px;
	}
	ul#icons li {
		display: inline;
	}

	#left_navigation {
    list-style-type: none;
    float:left; /* fix IE6 bug */ display:inline;
    text-align: left;
    margin-top: 20px;

}

#left_navigation h2 {
    margin-left: 3px;
    margin-top: 0;
}

#left_navigation ul {
	background-color: #FFFFFF;
    float: left;
    font-size: 13px;
    list-style-type: none;
    margin: 10px 0 20px;
    padding: 5px 0 10px;
    position: relative;
    width: 230px;
}

#left_navigation ul li {
	background-color: #FFFFFF;
    color: #656668;
    overflow: hidden;
    padding: 3px 0;
    width: 100%;
}

#left_navigation ul li.aktiv {
    /*border: 1px solid #e3e3e3;*/
    background-color: #565656;
}

#left_navigation ul li a {
    margin-left: 5px;
	float:left;
	color:#656668;
}
a:link {
    text-decoration: none;
    color: #656668;
}
#left_navigation ul li a:hover {
    text-decoration: none;
}
/* #left_navigation ul li a.eingerueckt1 {
    margin-left: 10px;
}

#left_navigation ul li a.eingerueckt2 {
    margin-left: 20px;
}

#left_navigation ul li a.eingerueckt3 {
    margin-left: 25px;
} */
.us_links_intern_navi{
	background: none repeat scroll 0 0 #c60967;
    color: #FFFFFF;
    float: left;
    font-size: 16px;
    font-weight: bold;
    padding: 8px 12px;
    width: 205px;
	line-height:1.2;
	}


    /* dropdown styling */

    @import "compass/css3";



body {
  font-family: 'Source Sans Pro', sans-serif;
}

h1 {
  padding-bottom: 0;
  margin-bottom: 0;
}

h3 {
  margin-top: 0;
  font-weight: 300;
}

.container {
  width: 40em;
  margin: 10px auto;
}



.ac-label {
  color:white;
  font-weight: 700;
  position: relative;
  padding: .5em 1em;
  margin-bottom: .5em;
  display: block;
  cursor: pointer;
  background-color: #C60967;
  transition: background-color .15s ease-in-out;
}
article.ac-sub-text a {
    text-decoration: none;
    color: black;
}
.ac-input:checked + label, .ac-label:hover {
  background-color: #C60967;
}

.ac-label:after, .ac-input:checked + .ac-label:after {
  content: "+";
  position: absolute;
  display: block;
  right: 0;
  top: 0;
  width: 2em;
  height: 100%;
  line-height: 2.25em;
  text-align: center;
  background-color: #C60967;
  transition: background-color .15s ease-in-out;
}

.ac-label:hover:after, .ac-input:checked + .ac-label:after {
  background-color: #C60967;
}

.ac-input:checked + .ac-label:after {
  content: "-";
}

.ac-input {
  display: none;
}



.ac-text, .ac-sub-text {
  opacity: 0;
  height: 0;
  margin-bottom: .5em;
  transition: opacity .5s ease-in-out;
  overflow: hidden;
}

.ac-input:checked ~ .ac-text, .ac-sub .ac-input:checked ~ .ac-sub-text { 
  opacity: 1;
  height: auto;
}



.ac-sub .ac-label {
  background: none;
  font-weight: 600;
  padding: .5em 2em;
  margin-bottom: 0;
  color: #C60967;

}

.ac-sub .ac-label:checked {
  background: none;
  border-bottom: 1px solid whitesmoke;
}

.ac-sub .ac-label:after, .ac-sub .ac-input:checked + .ac-label:after {
  left: 0;
  background: none;
}

.ac-sub .ac-input:checked + label, .ac-sub .ac-label:hover {
  background: none;
}

.ac-sub-text {
  padding: 0 1em 0 2em;
}




.dropdown{
        display:none;
      }
  @media screen and (max-width: 960px){
    .woocommerce-MyAccount-navigation{
      display:none;
    }
    .dropdown{
        display:block;
      }
  }
</style>
<nav class="woocommerce-MyAccount-navigation">
	
	
	<ul class="nav-list">
	<div id="left_navigation">
          <div class="us_links_intern_navi">
            <span>Meine Inserate</span>
          </div>
          <ul>
            <li>
              <a href="https://fair-hand.com/inserat-hochladen">
                <span>Neues Inserat erstellen</span>
              </a>
            </li>
            <li>
              <a href="https://fair-hand.com/objekte">
                <span>Übersicht meiner Inserate</span>
              </a>
            </li>
            
          </ul>
          <div class="us_links_intern_navi">
            <span>Mein Konto</span>
          </div>
          <ul>
         
            
            <li>
              <a href="https://fair-hand.com/loggen/orders">
                <span>Meine Rechnungen</span>
              </a>
            </li>
            <li>
              <a href="https://fair-hand.com/loggen/edit-account">
                <span>Mein Impressum</span>
              </a>
            </li>
          </ul>          
          <div class="us_links_intern_navi">
            <span>Kooperation</span>
          </div>
          <ul>
         
            
            <li>
            <a href="https://drive.google.com/file/d/1b3O5MvdJQkSns6VYKtEQ5f8CTuoYRSHt/view?usp=sharing" target="_blank">
                <span>Download Verleihprotokoll</span>
              </a>
            </li>
          </ul> 
          <div class="us_links_intern_navi"><span>Kontakt</span>&nbsp;</div>
          <ul id="links_intern">
            <li>
              <span><strong>Fair-Hand - Team</strong><br>
<a style="text-decoration:underline; margin-left:0;" href="mailto:info@fair-hand.com">E-Mail schreiben</a><br></span>
            </li>
            <li>
             
<a style="text-decoration:none; margin-left:0;" href="/loggen/customer-logout/">Ausloggen</a><br></span>
            </li>
          </ul>
 
  </div>
	</ul>
</nav>


<div class="dropdown">
<section class="">

<div class="ac">
  
  <input class="ac-input" id="ac-1" name="ac-1" type="checkbox" />
  


<div class="ac">
  
  <input class="ac-input" id="ac-4" name="ac-4" type="checkbox" />
  <label class="ac-label" for="ac-4">More</label>
  
  <article class="ac-text">
    
    <div class="ac-sub">
      <input class="ac-input" id="ac-5" name="ac-5" type="checkbox" />
      <label class="ac-label" for="ac-5">Meine Inserate</label>
      <article class="ac-sub-text">
              <a href="https://fair-hand.com/inserat-hochladen">Neues Inserat erstellen</a>
      </article>
      <article class="ac-sub-text">
              <a href="https://fair-hand.com/objekte">Übersicht meiner Inserate</a>
      </article>
    </div>
    
    <div class="ac-sub">
      <input class="ac-input" id="ac-6" name="ac-6" type="checkbox" />
      <label class="ac-label" for="ac-6">Mein Konto</label>
      <article class="ac-sub-text">
              <a href="https://fair-hand.com/loggen/orders">Meine Rechnungen</a>
      </article>
      <article class="ac-sub-text">
              <a href="https://fair-hand.com/loggen/edit-account">Mein Impressum</a>
      </article>
    </div>

    <div class="ac-sub">
      <input class="ac-input" id="ac-7" name="ac-7" type="checkbox" />
      <label class="ac-label" for="ac-7">Kooperation</label>
      <article class="ac-sub-text">
              <a href="https://drive.google.com/file/d/1b3O5MvdJQkSns6VYKtEQ5f8CTuoYRSHt/view?usp=sharing">Download Verleihprotokoll</a>
      </article>      
    </div>

    <div class="ac-sub">
      <input class="ac-input" id="ac-8" name="ac-8" type="checkbox" />
      <label class="ac-label" for="ac-8">Kontakt</label>
      <article class="ac-sub-text">
              <a href="mailto:info@fair-hand.com">E-Mail schreiben</a>
      </article>
      <article class="ac-sub-text">
              <a href="/loggen/customer-logout/">Ausloggen</a>
      </article>
    </div>
    
  </article><!--/ac-text-->
  
</div><!--/ac-->


</section>

</div>
<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package fair_hand
 */

?>
<?php
/**
 * The template for displaying the footer
 *
 * Contains the opening of the #site-footer div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Twenty_Twenty
 * @since Twenty Twenty 1.0
 */

?>
<style>
  #foot-ul{
  list-style: none;
  padding-left: 0;
}
.col3{margin-top:20px;}
  ft-main-item ul{ list-style: none;
  padding-left: 0;
  color:#fff;}
  footer li{ list-style: none;
  padding-left: 0;
  color:#fff;
  margin:10px;}
footer {
  background-color: #000;
  color: #fff;
  line-height: 1.5;
  padding: 10px 20px;
}
  .soft-logo{max-width:100px !important;}
footer a {
  text-decoration: none;
  color: #fff;
}
a:hover {
  text-decoration: underline;
}

.ft-title {
  color: #fff;
  
  font-size: 1.375rem;
  padding-bottom: 0.625rem;
}
/* Sticks footer to bottom */
.foot-wrap{
  display: flex;
 
  flex-direction: column;
}

/* Footer main */
.ft-main {
  padding: 1.25rem 1.875rem;
  display: flex;
  flex-wrap: wrap;
  width:100%;
}
.menu-footer-menu1-container{

  width: 100%;
    display: flex;
    align-items: flex-end;
    justify-content: flex-end;
}
  @media only screen and (max-width:350px){.soft-logo{max-width:80px;}
  .col3 {
    font-size: 15px;
}}
@media only screen and (min-width: 29.8125rem /* 477px */) {
  .ft-main {
    justify-content: space-evenly;
  }
}
@media only screen and (min-width: 77.5rem /* 1240px */) {
  .ft-main {
    justify-content: space-evenly;
  }
}

@media only screen and (max-width: 800px /* 1240px */) {
    .ft-social-list li {    
      width: 100%;      
  }
}
.ft-main-item {
  /* padding: 1.25rem;
  min-width: 12.5rem; */
  width:50%;
}
.ft-main-item col3{font-size:20px;}
/* Footer main | Newsletter form */

input[type="email"] {
  border: 0;
  padding: 0.625rem;
  margin-top: 0.3125rem;
}
input[type="submit"] {
  background-color: #00d188;
  color: #fff;
  cursor: pointer;
  border: 0;
  padding: 0.625rem 0.9375rem;
  margin-top: 0.3125rem;
}
/* Footer social */
.ft-social {
  background:black;
}
.ft-social ul, ol {
    margin: 0;
}
.ft-social-list {
  display: flex;
    justify-content: center;
    border-top: 1px #777 solid;
    padding-top: 1.25rem;
    padding: 10px 10px 10px 10px;
}
.ft-social-list li {
  margin: 0.5rem;
  font-size: 1.25rem;
  width: 50%;
    display: flex;
    align-items: center;
}
/* Footer legal */
.ft-legal {
  padding: 0.9375rem 1.875rem;
  background-color: #333;
}
.ft-legal-list {
  width: 100%;
  display: flex;
  flex-wrap: wrap;
}
.ft-legal-list li {
  margin: 0.125rem 0.625rem;
  white-space: nowrap;
}
/* one before the last child */
.ft-legal-list li:nth-last-child(2) {
    flex: 1;
}

.ft-bottom-right img{
  width:unset;
}

/* UPDATED FOOTER STYLING */

.footer-container {
    /* background-color: #5bab62; */
    color: #fff;
    float: left;
    width: 100%;
    padding: 20px 0 20px 0;
}

@media (min-width: 640px) and (max-width: 1399px){
  .footer-container-in {
      padding: 0 25px 80px 25px;
      width: 100%;
  }
}

@media (min-width: 960px) and (max-width: 1399px){
  .footer-container-box:first-child {
      width: 50%;
  }
  .footer-container-box {
      float: left;
      text-align: left;
  }
}
@media (min-width: 960px) and (max-width: 1399px){
  .footer-container-box {
      font-size: 1em;
      width: 50%;
  }
}

@media (min-width: 960px) and (max-width: 1399px){
  .footer-container-box-in {
      width: 50%;
      float: left;
  }
}

@media (min-width: 960px) and (max-width: 1399px)
{
  .footer-container-box-in {
    width: 50%;
    float: left;
}

}


.footer-container-box {
    float: left;
    text-align: left;
}
@media (min-width: 960px) and (max-width: 1399px)
{
    .footer-container-box {
      font-size: 1em;
      width: 50%;
  }
}

.footer-container-box .footer-us {
    font-size: 1.1em;
    font-weight: 700;
}
@media (min-width: 960px)
{
    .footer-us {
      margin: 0 0 15px 0;
  }
}

.footer-container-box a {
    display: block;
    text-decoration: none;
    color: #fff;
}

.facebook-icon {
    background-position: -29px 0;
    height: 25px;
    width: 25px;
}
.main-footer-box a:hover span {
    text-decoration: underline;
}
/* .youtube-icon:hover {
    background-position: -96px -26px;
} */
.youtube-icon {
    background-position: -96px -1px;
    height: 25px;
    width: 55px;
}
.facebook-icon,.youtube-icon{
    background-image: url(https://fair-hand.com/wp-content/uploads/2021/04/Social-Media.png);
    display: inline-block;
    background-repeat: no-repeat;
}

.instagram-icon {
    background-image: url(https://fair-hand.com/wp-content/uploads/2021/05/insta-edit_adobespark.jpg);
    display: inline-block;
    background-repeat: no-repeat;
    height: 25px;
    width: 100px;
    background-size: contain;
}

@media (min-width: 1400px)
{
  .footer-container-in {
    margin: 0 auto;
    padding-bottom: 20px;
    width: 1375px;
}

    .footer-container-box:first-child {
      width: 50%;
  }

    .footer-container-box {
      font-size: 16px;
      width: 50%;
  }

  .footer-container-box-in {
    width: 50%;
    float: left;
    margin-bottom: 20px;
}
}
@media (min-width: 180px) and (max-width: 959px){
  .footer-container-box-in {
      width: 60%;
      float: left;
  
      margin-bottom: 20px;
  }
  .ft-social-list{
    padding:0 !important;
    
  }
  .ft-social-list li{
    font-size:14px !important;
  }
}



</style>

<div class="foot-wrap">
<footer> 

  <div class="footer-container">
    <div class="footer-container-in">
      <div class="footer-container-box">
           <!-- footer-container-box-in -->
          <div class="footer-container-box-in footer-container-link-mob">
                <div class="footer-us">ÜBER UNS</div>
                  <a href="/impressum">Impressum</a>
                  <a href="https://fair-hand.com/agb">AGB</a>
                  <a href="https://fair-hand.com/datenschutzerklarung">Datenschutz</a>
                  <a href="https://fair-hand.com/kontakt">Kontakt</a>              
                </div>          
                <div class="footer-container-box-in footer-container-link-mob">
                    <div class="footer-us">DIENSTLEISTUNGEN</div>
                      <a href="/verleihen-gewerblich">Verleihen Gewerblich</a>
                      <a href="/verleihen-privat">Verleihen Privat</a>
                      <a href="https://fair-hand.com/kontakt">FAQ</a>               
                </div>
            </div>
            <!--end of footer-container-box-in -->
            <!-- FOOTER CONTAINER BOX -->
            <div class="footer-container-box">
                <div class="footer-container-box-in footer-container-link-mob">
                      <div class="footer-us">HILFREICHES</div>
                        <a href="https://fair-hand.com/stadt">Top Städte</a>
                        <a href="https://fair-hand.com/subcatergories?subcategory=baumaschinen">Beliebte Angebote</a>
                        <a href="https://fair-hand.com/produktliste?city=Bielefeld">Beliebte Suchen</a>
                        
                      </div>
                  
                      <div class="footer-container-box-in">
                            <div class="footer-us">FOLGEN SIE UNS</div>
                                <div class="footer-social-in-mob">
                                      <div class="footer-social-in">
                                          <a class="footer-social-l" target="_blank" href=""><p class="facebook-icon" style="margin: 0;"></p></a>
                                          <a class="footer-social-l" target="_blank" href=""><p class="instagram-icon" style="margin: 0;"></p></a>
                                          <a class="footer-social-l" target="_blank" href=""><p class="youtube-icon" style="margin: 0;"></p></a>
                                        </div>                                        
                                        <!-- <div class="footer-social-in"><a class="footer-social-l" target="_blank" href=""><span class="youtube-icon"></span></a>
                                        </div> -->
                                  </div>
                            </div>
                      </div>
                </div>
            </div>
              <!-- END OF FOOER CONTAINER BOX -->
            </div>
            </div>
            </div>
            <section class="ft-social" >
                <ul class="ft-social-list">
                  <ul class="ft-legal-list" id="foot-ul">
                    <li style="color:#FFFFFF"> © 2021 Fairhand</li>        
                    <li style="justify-content:flex-end;"><p style="color:#FFFFFF">Entwickelt von</p><a href="https://www.appleute.de/"><img class="soft-logo" src="https://fair-hand.com/wp-content/uploads/2021/05/output-onlinepngtools-4-p4206j6k9soy5qb9ntjyu86u9znom8y0r66zifi3iw.png"></a></li>
                  </ul>        
                </ul>
            </section>
            </footer>
            </div>
           
            </html>   


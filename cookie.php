<!-- <link href='https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css'>
<script src='https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js'></script>
<link href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css'>
<script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js'></script>

 <style>
    .card {
    width: 400px;
    flex-direction: column;
    min-width: 0;
    color: #fff;
    word-wrap: break-word;
    background-color: #000;
    background-clip: border-box;
    border: 1px solid #000;
    border-radius: 6px;
    -webkit-box-shadow: 0px 0px 5px 0px rgb(249, 249, 250);
    -moz-box-shadow: 0px 0px 5px 0px rgba(212, 182, 212, 1);
    box-shadow: 0px 0px 5px 0px rgb(161, 163, 164)
}

.cookie a {
    text-decoration: none;
    color: #000;
    margin-top: 8px;
    font-size: 12px
}

.cookie a {
    text-decoration: none;
    color: #fff;
    margin-top: 8px
}

.decline {
    cursor: pointer
}
</style> 

<div class="fixed-bottom p-4">
    <div class="toast bg-dark text-white w-100 mw-100" role="alert" data-autohide="false">
        <div class="toast-body p-4 d-flex flex-column">
            <h4>Cookie Warning</h4>
            <p>
            This website stores data such as cookies to enable site functionality including analytics and personalization. By using this website, you automatically accept that we use cookies. 
            </p>
            <div class="ml-auto">
                <button type="button" class="btn btn-outline-light mr-3" id="btnDeny">
                    Deny
                </button>
                <button type="button" class="btn btn-light" id="btnAccept">
                    Accept
                </button>
            </div>
        </div>
    </div>
</div>


<script>
    function setCookie(name,value,days) {
    var expires = "";
    if (days) {
        var date = new Date();
        date.setTime(date.getTime() + (days*24*60*60*1000));
        expires = "; expires=" + date.toUTCString();
    }
    document.cookie = name + "=" + (value || "")  + expires + "; path=/";
}
function getCookie(name) {
    var nameEQ = name + "=";
    var ca = document.cookie.split(';');
    for(var i=0;i < ca.length;i++) {
        var c = ca[i];
        while (c.charAt(0)==' ') c = c.substring(1,c.length);
        if (c.indexOf(nameEQ) == 0) return c.substring(nameEQ.length,c.length);
    }
    return null;
}

function eraseCookie(name) {   
    document.cookie = name +'=; Path=/; Expires=Thu, 01 Jan 1970 00:00:01 GMT;';
}

function cookieConsent() {
    if (!getCookie('allowCookies')) {
        $('.toast').toast('show')
    }
}

$('#btnDeny').click(()=>{
    eraseCookie('allowCookies')
    $('.toast').toast('hide')
})

$('#btnAccept').click(()=>{
    setCookie('allowCookies','1',7)
    $('.toast').toast('hide')
})

// load
cookieConsent()

// for demo / testing only
$('#btnReset').click(()=>{
    // clear cookie to show toast after acceptance
    eraseCookie('allowCookies')
    $('.toast').toast('show')
})
</script>
 -->

<!-- 
<meta charset="UTF-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<meta http-equiv="X-UA-Compatible" content="ie=edge" />

<script type="text/javascript">
        const cookieContainer = document.querySelector(".cookie-container");
        const cookieButton = document.querySelector(".cookie-btn");

        cookieButton.addEventListener("click", () => {
        cookieContainer.classList.remove("active");
        localStorage.setItem("cookieBannerDisplayed", "true");
        });

        setTimeout(() => {
        if (!localStorage.getItem("cookieBannerDisplayed")) {
            cookieContainer.classList.add("active");
        }
        }, 2000);
    </script>
<style>
    p {
  margin: 24px 0;
  line-height: 2;
}

.wrapper {
  padding: 32px;
}

.cookie-container {
  position: fixed;
  /* bottom: 0%; */
  top: 10%;
    left: 10%;
    width: 80%;
    right: 20%;
    height:80%;
  background: #2f3640;
  color: #f5f6fa;
  /* padding: 0 32px; */
  box-shadow: 0 -2px 16px rgba(47, 54, 64, 0.39);
    z-index:999;
  transition: 400ms;
}

.cookie-container.active {
  /* bottom: 0; */
}

.cookie-container a {
  color: #f5f6fa;
}

.cookie-btn {
  background: #e84118;
  border: 0;
  color: #f5f6fa;
  padding: 12px 48px;
  font-size: 18px;
  margin-bottom: 16px;
  border-radius: 8px;
  cursor: pointer;
}

.cookie-image{
    float: left;
    width: 35%;
    background: url(https://fair-hand.com/wp-content/uploads/2021/01/login.png);
    background-position: left;
    background-size: cover;
    height: 100%;
}
.cookie-description{
    float:right;
  width:50%;
}
</style>
<div class="wrapper">    
    <div class="cookie-container">      
            <div class="cookie-image">        
            </div>
            <div class="cookie-description">  
                <p>
                    We use cookies in this website to give you the best experience on our
                    site and show you relevant ads. To find out more, read our
                    <a href="#">privacy policy</a> and <a href="#">cookie policy</a>.
                </p>

                <button class="cookie-btn">
                    Okay
                </button>
            </div>      
    </div>
</div> -->

<style>
     /* #transparent-bg{
	position: fixed; 
	top: 0%; 
	left: 0%; 
	width: 100%; 
	height: 100%; 
	
	-moz-opacity: 0.30; 
	background-color: rgba(0, 0, 0, 0.7);
	filter: alpha(opacity=30);
	z-index: 1000; 
	
} */

/* @keyframes animateBackground {
	from {opacity: 0.8;}
	to {opacity: 0.30;}
} */
  #cookies { 
    width: 80%;
    margin: 0;
    /* padding: 0.5em 10%; */
    background: rgba(86,86,86,0.95);
    border-bottom: solid 1px rgb(225,225,225);
    position: fixed;
    box-shadow: 0 -2px 16px rgba(47, 54, 64, 0.39);
    height: 70%;
    top: 20%;
    /* display: flex; */
    /* align-items: center; */
    /* justify-content: center; */
    left: 10%;
    right: 10%;
    z-index:1001;
    border-radius:10px;
    /* display:none; */
    /* background:#fff; */
    
}

#cookies p {
  font-family: sans-serif;
  font-size: 14px;
  font-weight: 700;
  letter-spacing: 1px;
  text-shadow: 0 -1px 0 rgba(0,0,0,0.35);
  text-align: center; 
  color: rgb(255,255,250);
  margin: 4px;
  z-index: 999;
 
}
 .cookie-left{
  float: left;
    width: 40%;
    background: url(https://fair-hand.com/wp-content/uploads/2021/01/login.png);
    background-position: left;
    background-size: cover;
    border-bottom-left-radius: 10px;
    border-top-left-radius: 10px;
 }
 span.cookie-accept, .show-next {
    width: 100px;
    height: 40px;
    background: #C60967 ;
    padding: 10px;
    border-radius: 10px;
}
.cookie-right{
  float:right;
  width:50%;
}
#public-cookie{
    display:none;
}
</style>
<script>
// $(document).ready(
//     function() {
//         $("button").click(function() {
//             // $('.privite-cookie').hide();
//             // $('#public-cookie').toggle(); 
//             $("#public-cookie").css('display', 'block');
//             // $("#privite-cookie").css('display', 'none');
//         });
//     });

//     $(document).ready(
//     function() {
//         $("button").click(function() {
//             // $('.privite-cookie').hide();
//             // $('#public-cookie').toggle(); 
//             // $("#public-cookie").css('display', 'block');
//             $("#privite-cookie").css('display', 'none');
//         });
//     });
</script>
<?php if(!isset($_COOKIE["comply_cookie"])) { ?>
          <div id="transparent-bg">
              <div id="cookies">
                  <div style="display:flex;flex-direction:row;width:100%;height:100%">
                    <div class="cookie-left"></div>
                    <div class="cookie-right">
                      <div class="privite-cookie" id="privite-cookie">
                          <p>Our website uses cookies. By continuing we assume your permission to deploy cookies, as detailed in our <a href="yourPolicy">privacy policy</a>.</p>
                          <p><span class="cookie-accept" title="Okay, close">Accept</span></p>                          
                          <!-- <button>Mehr</button> -->
                      </div>  

                       <div id="public-cookie" >
                          <p>cookie two</p>
                          <p><span class="cookie-accept" title="Okay, close">Accept</span></p>
                      </div> 


                      <input id="Button1" type="button" value="Click" onclick="switchVisible();"/> 
                    </div>
                   
                  </div>
              </div>
          <div>
          <?php } ?>


<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script>
$('.cookie-accept').click(function () { //on click event
  days = 182; //number of days to keep the cookie
  myDate = new Date();
  myDate.setTime(myDate.getTime()+(days*24*60*60*1000));
  document.cookie = "comply_cookie = comply_yes; expires = " + myDate.toGMTString(); //creates the cookie: name|value|expiry
  $("#cookies").slideUp("slow"); //jquery to slide it up
//    $("#transparent-bg").hide();
  // $("#transparent-bg").css({
  //       'background-color': 'none'       
  //   });
});

document.getElementById("cookie-accept").onclick = function(e) {
  days = 182; //number of days to keep the cookie
  myDate = new Date();
  myDate.setTime(myDate.getTime()+(days*24*60*60*1000));
  document.cookie = "comply_cookie = comply_yes; expires = " + myDate.toGMTString(); //creates the cookie: name|value|expiry
  document.getElementById("cookies").parentNode.removeChild(elem);
 }

//  $('#show-next').click(function() {
//       $('.privite-cookie').hide();
//       $('.public-cookie').show();      
//     });

function switchVisible() {
            if (document.getElementById('privite-cookie')) {

                if (document.getElementById('privite-cookie').style.display == 'none') {
                    document.getElementById('privite-cookie').style.display = 'block';
                    document.getElementById('public-cookie').style.display = 'none';
                }
                else {
                    document.getElementById('privite-cookie').style.display = 'none';
                    document.getElementById('public-cookie').style.display = 'block';
                }
            }
}
 </script>
<?php /* Template Name: Pricing Private */ ?>
<? get_header(); ?>

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
 <style>
 .row1{
  display: flex;
    align-items: center;
    justify-content: space-evenly;
    flex-direction: row;
    margin-bottom: 100px;

 }
 .private-pricing{
   margin:20px;
   margin-top:100px;
 }
 .card{
  height: 500px;
    border-radius: 20px;
  
 }
 
 .second-card1{
  background-color:#C60967;
    color:#fff;

 }

 .align-button{
    display:flex;
   align-items:center;
   justify-content:center;
 }
 .btn{
   width:150px;
   text-align:center;
 }
 .btn-primary-one{
  border: 2px #C60967 solid;
  color:#C60967;
  background:#fff;
 }
 .card-list{
   margin:0px;
   padding:0px;
 }

 .card-list li{
   margin:10px 0 10px 0;
 }
 </style>

<div class="private-pricing">
<div class="private-pricing-wrap">
<div class="row1">
<div class="card first-card1" style="width: 18rem;">
<div class="card-body">
    <h5 class="card-title">Paket 1</h5>
    <p class="card-text">Monatlich</p>
    <h1>1,99€  <span style="font-size:15px;"> /monat</span></h1>
    <p class="card-text">Sie können unbegrenzt viele Inserate schalten. Hier die Kurzinfos: </p>
      <ul class="card-list">
          <li>Unbegrenzte Inserate</li>
          <li>Monatliche Rechnung</li>
          <li>Jederzeit kündbar</li>
          <li>Schnell inserieren</li>
          
      </ul>
    <p class="align-button"> <a href="https://fair-hand.com/checkout?add-to-cart=308&quantity=1" class="btn btn-primary-one">Paket wählen</a></p>
  </div>
 
</div>
<div class="card second-card1" style="width: 18rem;">
<div class="card-body">
    <h5 class="card-title">Paket 2</h5>
    <p>Jährlich</p>
    <h1>19,90€<span style="font-size:15px;"> /jahr</span></h1>
    <p class="card-text">Sie können unbegrenzt viele Inserate schalten. Hier die Kurzinfos:</p>
    <ul class="card-list">
          <li>Sie sparen!</li>
          <li>Unbegrenzte Inserate</li>
          <li>Jährliche Rechnung</li>
          <li>Jederzeit kündbar</li>
          <li>Schnell inserieren</li>
      </ul>
   <p class="align-button"> <a href="https://fair-hand.com/checkout?add-to-cart=309&quantity=1" class="btn btn-primary-one">Paket wählen</a></p>
  </div>
</div>
</div>
</div>

</div>

<?php get_footer();?>
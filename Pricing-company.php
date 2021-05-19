<?php /* Template Name: Pricing Company */ ?>
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
 .card{height: 500px;
    border-radius: 20px;}
    .second-card{
    background-color: #C60967;
    color: #fff;}
    .btn-primary-one {
    border: 2px #C60967 solid;
    color: #C60967;
    background: #fff;
}
.btn-primary-one:hover {
  
    
    color: #C60967;
    
}
.align-button {
    display: flex;
    align-items: center;
    justify-content: center;
}

 </style>
<div class="private-pricing">
<div class="private-pricing-wrap">
<div class="row1">
<div class="card first-card" style="width: 18rem;">
<div class="card-body">
    <h5 class="card-title">Intro</h5>
    <h1>4,99€/Monat</h1>
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
  <p> <i class="bi bi-check-circle-fill"></i>lorem Ipsum</p>
  <p class="align-button"> <a href="https://fair-hand.com/product/company-monthly-subscription" class="btn btn-primary-one">Choose Plan</a></p>
  </div>
</div>
<div class="card second-card" style="width: 18rem;">
<div class="card-body">
    <h5 class="card-title">Intro</h5>
    <h1>49,90€/Jahr</h1>
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
  <p> <span class="glyphicon glyphicon-ok-circle"></span>lorem Ipsum</p>
  <p class="align-button"> <a href="https://fair-hand.com/product/company-yearly-subscription" class="btn btn-primary-one">Choose Plan</a></p>
  </div>
</div>
</div>
</div>

</div>

<?php get_footer();?>
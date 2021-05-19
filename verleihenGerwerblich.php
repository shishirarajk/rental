<?php /* Template Name: Verleihen Gewerblich */ ?>
<?php get_header(); ?>
 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

<style>
    .verleihenPrivate {
        display: flex;
    align-items: center;
    justify-content: center;
    
     }  
     p{color: #404040;}
     .verleihenPrivate_wrap{
           margin: 50px 20px 20px 20px;
     }
  .imgclass{    max-width: 40em;
    /* margin: 10rem 2rem 0rem 5rem;
    display: flex;
    flex-direction: column;
    justify-content: center;
    min-height: 58vh; */
  }
     .section{
         width: 100%;
     } 
     .heading{       
      color: #404040;
      /* font-family: Poppins !important; */
      font-size: 60px;
      font-weight: 500;
  
     }
     .button1 {
      background-color: white;
        color: white;
        border: 3px solid #C60967;
        width: 30%;
        height: 13px;
    }
     .solid {
         border-style: solid;
         border-width: 30%;
         border-color: #C60967;}
     
     .content_wrap{
         padding-left: 10%;
           text-align: justify;
    font-size: 15px;
    /* font-family: poppins; */
     }
     .content{
        line-height:1.5;
        color: #404040;
     }
     .btnReg {
         border-radius: 40px;
         background-color: #C60967;
         height: 59px;
         width: 205px;
         border-radius: 10px;
         background: linear-gradient(134.05deg, #C60967 0%, #603 100%);
         color: white;
         font-size: 20px;
         }




  @media (max-width:760px){  
  .heading{
      font-size:30px !important;
  }
  .verleihenPrivate_wrap {
    
      margin-top: 50px !important;
  }
  .button1 {
    
    width: 50% !important;
    
}

}
  @media (min-width:1460px){
  .verleihenPrivate{
    display:flex;
    align-items:flex-start;
    justify-content:center;
    min-height: calc(100vh - 400px);
  }
  .verleihenPrivate_wrap{
    width:1460px;
  }
}


</style>
<body>
<div class="verleihenPrivate">
   <div class="verleihenPrivate_wrap">
       <div class="heading">
        Verleihen Gewerblich
        </div>
        <br>
		
        <div class="button1"></div>
     <br>
        <br>
       <div class="row" style="margin-top:10px;">
       <div class=" col-sm-4 imgclass">
			     <img style="width:100%" src="http://fair-hand.com/wp-content/uploads/2021/02/Group.png" />
         </div>
       <div class="  col-sm-8 content">
         

           <p>Gewerbliche Vermietung von Gegenständen</p>
			<p>Auf unserer Plattform kannst du Profi-Werkzeuge, Baumaschinen sowie High-Tech-Ausrüstungen gewerblich vermieten und somit deinen Kundenkreis schnell und einfach erweitern. Mit einer unbegrenzten Anzahl an Anzeigen pro Monat kannst du bei uns sämtliche Gegenstände zum Verleih anbieten. Von Fräsen und Bautrocknern über Limousinen und Gegenstände aus der Veranstaltungstechnik bis hin zu Hüpfburgen, Partyausstattungen und Kränen – vermietet werden darf alles, was einwandfrei funktioniert und gut erhalten ist. Nutze unser Onlineportal für die Vermietung deines Fuhrparks oder deiner Eventagentur oder starte noch heute mit dem Verleih deiner Shop-Produkte. Je vielfältiger dein Angebot ist, desto mehr Interesse weckst du bei potenziellen Neukunden. Dies können beispielsweise Wedding Planner oder Club-Besitzer sein, aber auch die Brautpaare selbst sowie Handwerker, Messebauer oder Privatpersonen suchen mehr und mehr im Internet nach Gegenständen, die zum Verleih stehen.</p>
<p>So einfach funktioniert der gewerbliche Verleih auf fair-hand.com</p>
            <p>Unser Motto lautet fair-hand – the way to rent. Wir wollen kleinen, mittelständischen wie auch großen Unternehmen die Möglichkeit geben, ihre nicht genutzten Gegenstände auf unserem Portal zum Verleih anzubieten. Deshalb kannst du fair-hand den ersten Monat vollkommen kostenfrei testen, ehe die monatliche Gebühr von 4,99 € fällig wird. Darin enthalten ist eine beliebige Anzahl an Anzeigen für die gewerbliche Vermietung von Gegenständen zu einem von dir festgelegten Preis. Bei uns gibt es keinerlei versteckte Kosten. Das heißt, das wir keinerlei Provision für die einzelnen Vermietungen deiner Gegenstände veranschlagen. Im Gegenteil: Wir sorgen mit unseren transparenten Kosten dafür, dass du deinen Gewinn maximierst, während du gleichzeitig die Kapazitäten deiner Mietgegenstände effektiv auslastest. Und das Beste ist: Du kannst dein Abo monatlich kündigen und gehst keine weitere vertragliche Verpflichtung ein.</p>
<p>Regionale Anzeigen zur Vermietung von Gegenständen</p>

<p>Durch das Schalten regionaler Anzeigen auf unserem Onlineportal zur An- und Vermietung von Gegenständen erreichst du deine Zielgruppe am besten. Mit ansprechenden Fotos, klaren und detaillierten Beschreibungen und einem fairen Mietpreis machst du dein Angebot für Menschen aus deiner Region interessant. Neben Heizgeräten und Zelten kannst du bei uns auch elektronische Geräte sowie Baumaschinen, Hochzeitsdekorationen, Fahrzeuge oder Eventmodule zum gewerblichen Verleih anbieten. Auf diese Weise weckst du das Interesse der Menschen aus deiner Umgebung und erweiterst somit ganz einfach deinen Kundenkreis.</p>
            <button onclick="location.href='https://fair-hand.com/register'" type="button" class="btnReg">Registrieren</button>
         
       </div>
    </div>
   </div> 
</div>

<?php get_footer(); ?>
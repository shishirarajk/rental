<?php /* Template Name: Verleihen Privat */ ?>
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
     .verleihenPrivate_wrap{
      margin: 50px 20px 20px 20px;
       
     }

     .section{
         width: 100%;
     } 
     .heading{
       
      color: #484848;
      font-family: Poppins;
      font-size: 60px;
      font-weight: 500;
      
     }
     .solid {
         border-style: solid;
         border-width: 30%;
         border-color: #C60967;}
   
         .imgclass{    max-width: 100%;
   }
     
     
     .content{
        line-height:1.5;
     }
     .btnRegi {
         border-radius: 40px;
         background-color: #C60967;
         height: 59px;
         width: 205px;
         border-radius: 10px;
         background: linear-gradient(134.05deg, #C60967 0%, #603 100%);
         color: white;
         font-size: 20px;
         }

 

.button1 {
  background-color: white; 
  color: white; 
  border: 3px solid #C60967;
  width: 30%;
  height:13px;
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

<div class="verleihenPrivate">
   <div class="verleihenPrivate_wrap">
       <div class="heading">
        Verleihen Privat
        </div>
        <br>
		
        <div class="button1"></div>
     <br>
        <br>
       <div class=" row section">
       <div class="col-sm-4 imgclass">
			     <img style="width:100%" src="http://fair-hand.com/wp-content/uploads/2021/02/Group.png" />
         </div>
       <div class="col-sm-8 content">
          

            <p>Gegenst??nde verleihen als Privatperson </p>
            <p>Unser Onlineportal fair-hand.com bietet dir als Privatperson die M??glichkeit, deine gebrauchten Ger??te, Werkzeuge, Kost??me und Elektronikger??te zu verleihen. Unser Portal richtet sich an diejenigen Menschen, die gem???? unserem Motto fair-hand ??? the way to rent die Umwelt nachhaltig unterst??tzen wollen. Durch den privaten Verleih von Gegenst??nden nutzt man vorhandene Ressourcen, anstatt sich die Gegenst??nde zu kaufen und damit die energieverschwendende Produktion neuer Artikel anzukurbeln. Und das Beste ist: Durch die private Vermietung deiner Gegenst??nde tust du nicht nur der Umwelt etwas Gutes, sondern verdienst dir nebenbei auch noch etwas Geld ??? und zwar mit den Dingen, die du selbst nicht jeden Tag brauchst. </p>
            <p>So verleihst du Gegenst??nde von privat </p>
            <p>Mit der einmaligen Registrierung in unserem Onlineportal erh??ltst du die M??glichkeit, unseren Service zun??chst einen Monat lang vollkommen kostenfrei zu testen. Schalte beliebig viele Anzeigen, um deine ganz pers??nlichen Vorteile aus der privaten Vermietung von Gegenst??nden zu erkennen. Nach dem kostenlosen Probemonat wird eine monatliche Geb??hr in H??he von 1,99 ??? f??llig. Darin enthalten ist die M??glichkeit, eine unbegrenzte Anzahl an Anzeigen zum privaten Verleih zu schalten. Den Preis f??r die entgeltliche ??berlassung deiner Mietgegenst??nde bestimmst du selbst. Als fairer Vermittler erheben wir keinerlei zus??tzliche Kosten f??r die einzelnen Vermietungen. So bleiben s??mtliche Kosten absolut transparent und ??berschaubar. Zudem kannst du dein Abo f??r private Anzeigen zur Vermietung von Artikeln monatlich k??ndigen. So bleibt das Risiko f??r dich gering, w??hrend du jedoch den maximalen Ertrag aus dem Verleih deiner privaten Gegenst??nde herausholen kannst</p>
            <p>Was du auf fair-hand als Privatperson verleihen kannst</p>
            <p>
Der Bereich f??r Gegenst??nde zur privaten Vermietung reicht von Party-Equipment und Hochzeitskleider ??ber qualitativ hochwertiges Werkzeug und Ger??te bis hin zu Kost??men, elektrischen und elektronischen Ger??ten, Gartenger??ten und M??beln. Ob Laubbl??ser oder Schneefr??se, Spielekonsole, Beamer oder Designerkleid ??? auf unserem Onlineportal zur An- und Vermietung von Gegenst??nden kannst du alles anbieten, was intakt und gut erhalten ist. Elektrische sowie elektronische Ger??te m??ssen einwandfrei funktionieren. Die Dauer, die Kosten f??r die Nutzung deiner Gegenst??nde und Ort, Zeit und Art der ??bergabe machst du mit dem Mieter selbst aus. Worauf wartest du noch? Registriere dich unverbindlich und schalte deine ersten Anzeigen vollkommen kostenfrei!
</p>
           
            <button onclick="location.href='https://fair-hand.com/register'" type="button" class="btnRegi">Registrieren</button>
          
       </div>
    </div>
   </div> 
</div>

<?php get_footer(); ?>
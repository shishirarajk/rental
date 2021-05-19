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
          

            <p>Gegenstände verleihen als Privatperson </p>
            <p>Unser Onlineportal fair-hand.com bietet dir als Privatperson die Möglichkeit, deine gebrauchten Geräte, Werkzeuge, Kostüme und Elektronikgeräte zu verleihen. Unser Portal richtet sich an diejenigen Menschen, die gemäß unserem Motto fair-hand – the way to rent die Umwelt nachhaltig unterstützen wollen. Durch den privaten Verleih von Gegenständen nutzt man vorhandene Ressourcen, anstatt sich die Gegenstände zu kaufen und damit die energieverschwendende Produktion neuer Artikel anzukurbeln. Und das Beste ist: Durch die private Vermietung deiner Gegenstände tust du nicht nur der Umwelt etwas Gutes, sondern verdienst dir nebenbei auch noch etwas Geld – und zwar mit den Dingen, die du selbst nicht jeden Tag brauchst. </p>
            <p>So verleihst du Gegenstände von privat </p>
            <p>Mit der einmaligen Registrierung in unserem Onlineportal erhältst du die Möglichkeit, unseren Service zunächst einen Monat lang vollkommen kostenfrei zu testen. Schalte beliebig viele Anzeigen, um deine ganz persönlichen Vorteile aus der privaten Vermietung von Gegenständen zu erkennen. Nach dem kostenlosen Probemonat wird eine monatliche Gebühr in Höhe von 1,99 € fällig. Darin enthalten ist die Möglichkeit, eine unbegrenzte Anzahl an Anzeigen zum privaten Verleih zu schalten. Den Preis für die entgeltliche Überlassung deiner Mietgegenstände bestimmst du selbst. Als fairer Vermittler erheben wir keinerlei zusätzliche Kosten für die einzelnen Vermietungen. So bleiben sämtliche Kosten absolut transparent und überschaubar. Zudem kannst du dein Abo für private Anzeigen zur Vermietung von Artikeln monatlich kündigen. So bleibt das Risiko für dich gering, während du jedoch den maximalen Ertrag aus dem Verleih deiner privaten Gegenstände herausholen kannst</p>
            <p>Was du auf fair-hand als Privatperson verleihen kannst</p>
            <p>
Der Bereich für Gegenstände zur privaten Vermietung reicht von Party-Equipment und Hochzeitskleider über qualitativ hochwertiges Werkzeug und Geräte bis hin zu Kostümen, elektrischen und elektronischen Geräten, Gartengeräten und Möbeln. Ob Laubbläser oder Schneefräse, Spielekonsole, Beamer oder Designerkleid – auf unserem Onlineportal zur An- und Vermietung von Gegenständen kannst du alles anbieten, was intakt und gut erhalten ist. Elektrische sowie elektronische Geräte müssen einwandfrei funktionieren. Die Dauer, die Kosten für die Nutzung deiner Gegenstände und Ort, Zeit und Art der Übergabe machst du mit dem Mieter selbst aus. Worauf wartest du noch? Registriere dich unverbindlich und schalte deine ersten Anzeigen vollkommen kostenfrei!
</p>
           
            <button onclick="location.href='https://fair-hand.com/register'" type="button" class="btnRegi">Registrieren</button>
          
       </div>
    </div>
   </div> 
</div>

<?php get_footer(); ?>
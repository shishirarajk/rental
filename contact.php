    <?php /* Template Name: contact_Us */ ?>

    <?php get_header(); ?>

    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <meta content="width=device-width, initial-scale=1" name="viewport" />
    <script src="https://www.google.com/recaptcha/api.js"></script>
    <style media="screen">
       

        body {
            overflow-x: hidden;
        }
       /* .kontakt-main{display: flex;
       justify-content:center;}
       .kontakt-wrap{width: 1700px;} */
        .kontact {
            display: flex;
            /* align-items: center;
            justify-content: center; */
            margin: 10px 100px 50px 121px;
        }

        .kont-main {
            /*         margin: 50px 70px 50px 70px; */
            

        }

        .icon1 {
            /* margin: 10px; */
            font-weight: bold;
            color: #C60967;
            margin-top: 0px;
            font-size: 25px;
        }

        .fbicon {
            /* margin: 10px; */
            font-size: 20px;
            color: black;
            font-weight: 400;
            line-height: 2;
        }
      
        .part1 h1 {
            text-align: left;
            font-weight: 600;
            font-size: 30px;
        }
        .part1 h3{
            font-size:18px;
            font-weight:200;
            color: #404040;
            line-height:1.5;     
        }

        .part2 {
            display: flex;
            flex-direction: column;
            width: 100%;
        }

        .section_one {

            float: left;
            margin: 10px 0px 20px 50px;
        }

        .section_one h3 {
            margin: 0px;
            text-align: left;
        }

        .font-part {
            width: 60%;
            float: right;
        }

        .radio {
            padding: 20px;
            display: flex;
        }

        .radio_btn {
            display: flex;
            flex-direction: row;
            padding-left: 30px;
            flex-wrap: wrap;
        }

        .sent-notification {
            color: #C60967;
            font-size: 25px;
            font-weight: bold;
        }

        .icon1 img {
            width: 3%;
        }

        input[type=text],
        select,
        textarea {
            width: 70%;
            padding: 5px;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
            margin-top: 6px;
            margin-bottom: 16px;
            resize: vertical;
        }
        input.wpcf7-form-control.wpcf7-text.wpcf7-tel.wpcf7-validates-as-required.wpcf7-validates-as-tel {
    width: 500px;
    height: 40px;
}
        input[type=email],
        select,
        textarea {
            width: 70%;
            padding: 5px;
            border: 1px solid #ccc !important;
            border-radius: 4px;
            box-sizing: border-box;
            margin-top: 6px;
            margin-bottom: 16px;
            resize: vertical;
        }
        .wpcf7-list-item {
    display: inline-block;
    margin:0px !important;
}
        input[type=button] {
            background-color: #C60967;
            color: white;
            font-size: 20px;
            border: none;
            width: 150px;
            border-radius: 5px;
        }

        input[type="radio"] {
            -webkit-appearance: none;
            -moz-appearance: none;
            appearance: none;
            display: inline-block;
            width: 20px;
            height: 20px;
            padding: 4px;
            background-clip: content-box;
            border: 2px solid #bbbbbb;
            background-color: #e7e6e7;
            border-radius: 50%;
            outline: none;
            cursor: pointer;
        }

        .contactNumber {
            font-weight: bold;
            font-size: 20px;
            color: #C60967;
            padding: 10px;
            text-indent: 5em;
        }

        .con_content h3 {
            font-size: 20px;
            margin-left: 100px;
            line-height: 1.5;
            text-align: left;
            color: black;
            font-weight: 400;
            margin-top: 0px;
        }

        .content1 h3 {
            font-size: 20px;
            margin-left: 100px;
            line-height: 1.5;
            color: black;
            font-weight: 400;
            margin-top: 0px;
            text-align: left;
        }

        .formContent {
            display: flex;
            flex-directon: column;
        }

        .heading h1 {
            font-size: 25px;
            font-weight: bold;

            margin-top: unset;
            line-height: 1.5;
            text-align: left;
        }

        .section_one_content {
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .bottom_icon {
            display: flex;
            flex-direction: row;
            margin-top: 50px;
            width: 100%
        }

        .address {
            font-size: 20px;
            color: black;
            font-weight: 400;
            margin-left: 10%;
        }

        .address1 {
            margin-left: 10%;
        }

        input[type="radio"]:checked {
            background-color: brown;
            outline: none;
        }


        .radio__input {
            display: flex;
            align-items: center;
            padding-right: 5px;
        }

        input[type=submit]:hover {
            background-color: #C60967;
        }

        .container {
            border-radius: 5px;
            padding: 30px;
        }

        .bottom_section p {
            margin: 0px;
            padding-left: 150
        }



        .wpcf7 {
            /* width: 700px;*/
            padding: 20px 20px 20px 0px !important;
        }

        .wpcf7 label {
            font-weight: 500;
            font-size: 20px;
            color:#404040
        }

        .wpcf7 input[type="text"],
        .wpcf7 input[type="email"] {

            width: 500px;
            height: 40px;
            font-weight: 400;
            padding: 5px;
        }

        .wpcf7 textarea {
            width: 500px;
            height: 140px;
            font-weight: 400;
        }

        .wpcf7 input[type="submit"] {
            font-size: 20px;
    margin: 0;
    line-height: 1;
    cursor: pointer;
    position: relative;
    text-decoration: none;
    overflow: visible;
    padding: .618em 1em;
    font-weight: 600;
    border-radius: 3px;
    left: auto;
    color: #fff;
    border-radius: 10px;
    background: linear-gradient(
134.05deg
, #c60967 0%, #603 100%);
    width: 150px;
    height: 50px;
    border: none;
        }

        .contact_icons {
            width: 10%;
            display: flex;
            align-items: flex-start;
            justify-content: center;

        }

        .mail_icon {
            margin-top: 0px;
        }



        @media (min-width:1460px){
            .kontact {   
                margin: 30px 0px 50px 0px;
            }
            .kontakt-main{
                display: flex;
                justify-content:center;
                align-items:flex-start;
            }
            .kontakt-wrap{width: 1400px;}

            .wpcf7 {                
                padding: 20px 20px 20px 0px !important;
            }
            h1 {
                margin-left:0px !important;
            }    

          
        }

        @media (max-width: 1125px) {

            .wpcf7 input[type="text"],.wpcf7 input[type="email"] {
                width: 90%;
                height: 50px;
                font-weight: 400;
                padding: 5px;
            }

            .wpcf7 textarea {
                width: 110%;
                height: 140px;
                font-weight: 400;
            }

        }

   


        @media (max-width: 700px) {
            .kontact {
                margin: 30px 0px 0px 5px;
            }

            .kont-main {
                /* margin: 30px 0px 100px 0px; */
                width:100%;
            }

            .part1 h1 {
                font-size: 25px;
            }

            .part2 {
                flex-direction: column-reverse;
            }

            .font-part {
                width: 100%
            }

            .section_one {
                width: 100%;
                padding: 20px;
                margin: 10px 0px 20px 20px;
            }

            .heading h1 {
                font-size: 22px;
                margin-top: unset;
                justify-content: center;
                align-items: center;
                direction: flex;
            }

            .section_one_content1 {
                margin-right: 20%;
            }

            .section_one_content1 h3 {
                font-size: 20px;
                margin-left: unset;
            }

            .notification {
                color: #C60967;
                font-size: 25px;
                font-weight: bold;
            }

            .con_content h3 {
                font-size: 20px;
                margin-left: 10%;
                margin-right: 10%;
                text-align: left;

            }

            .content1 h3 {
                font-size: 20px;
                display: flex;
                justify-content: center;
                align-items: center;
                margin-left: 10%;

                text-align: left;

            }

            .formContent {
                margin-left: 0;
            }

            .fbicon {
                margin-left: 5%;
                margin-right: 5%;
                justify-content: center;
                /*             display: flex; */
                align-items: center;
            }

            input[type=text],
            select,
            textarea {
                width: 50%;
                padding: 12px;
                border: 1px solid #ccc;
                border-radius: 4px;
                box-sizing: border-box;
                margin-top: 6px;
                margin-bottom: 16px;
                resize: vertical;
            }

            input[type=email],
            select,
            textarea {
                width: 0%;
                padding: 12px;
                border: 1px solid #ccc;
                border-radius: 4px;
                box-sizing: border-box;
                margin-top: 6px;
                margin-bottom: 16px;
                resize: vertical;
            }

            input[type=submit] {
                background-color: #C60967;
                color: white;
                padding: 12px 20px;
                border: none;
                border-radius: 4px;
                cursor: pointer;
            }

            input[type=submit]:hover {
                background-color: #C60967;
            }

            .kont-main p {
                font-size: 20px
            }

            .kont-main h2 {
                font-size: 20px;
            }

            /*         .icon1 img {
                width: 8%;
            } */
            .bottom_section p {
                margin: 0px;
                padding-left: 0px;
                font-size: 18px;
            }

            .wpcf7 {
                width: 700px;
                padding: 20px 20px 20px 50px !important;
            }

            .wpcf7 label {
                font-weight: 400;
            }

            .wpcf7 input[type="text"],
            .wpcf7 input[type="email"] {
                font-weight: 400;
                width: 100%;
            }

            .wpcf7 textarea {
                width: 100%;
                height: 140px;
                font-weight: 400;
            }
            .wpcf7 input[type="url"], .wpcf7 input[type="email"], .wpcf7 input[type="tel"] {
                width: 100%;
                }
            .bottom_icon p {
                font-size: 18px;
            }

            .contact_icons {
                width: 20%;
            }

            .mail_icon {
                margin-top: 10px;
            }
                .social-icons{
                margin-top:30px !important;
                flex-direction: row !important;
                align-items: center !important;
                justify-content: space-around !important;
                margin-bottom: 30px !important;
            }
        }
        

        @media only screen and (max-device-width: 640px),
        only screen and (max-device-width: 667px),
        only screen and (max-width: 480px) {
            .kont-main h2 {
                font-size: 20px;

                justify-content: center;
                align-items: center;

            }

            .icon1 img {
                width: 8%;
            }

            .fbicon img {
                width: 8%;
            }

            .wpcf7 {
                width: 500px;
                padding: 20px 20px 20px 50px !important;
            }

            .wpcf7 input[type="text"],
            .wpcf7 input[type="email"] {
                font-weight: 400;

                height: 40px;
            }

            .wpcf7 textarea {

                height: 100px;
                font-weight: 400;
            }
        }
    </style>
   <div class="kontakt-main" style="margin-top:30px;">
         <div class="kontakt-wrap">

    <div class="row kontact">
        <div class=" col-sm-8 kont-main">
            <h1 style="color: #404040;">So erreichst du uns</h1>
            <div class="part1">
                <h3>Hast du Fragen oder Anregungen zu unserer Plattform? Oder vermisst du eine spezielle Kategorie, in die dein Equipment passen würde? Ganz gleich, ob dein Anliegen die private oder die gewerbliche Vermietung von Gegenständen betrifft – du kannst uns telefonisch oder mit Hilfe des Kontaktformulars via E-Mail erreichen. </h3>
                <h3>Wir freuen uns auf deine Kontaktaufnahme.</h3>

                <h2><img src="http://fair-hand.com/wp-content/uploads/2021/01/Group-1.png" style="width:4%;color:#404040;" alt="fair-hand"> Schreiben Sie uns eine E-Mail</h2>

                <br>

            </div>


            <div class="part2">

                <div class="font-part">
                    <div class="formContent">
                        <?php echo do_shortcode('[contact-form-7 id="254" title="Untitled"]'); ?>
                    </div>


                </div>

            </div>


        </div>


        <div class="col-sm-4 social-icons" style="display:flex; flex-direction:column;margin-top: 300px;">
            <i class="fa fa-instagram" aria-hidden="true" style="font-size:30px;color:#C60967;"></i>
            <i class="fa fa-facebook-official" aria-hidden="true" style="font-size:30px;color:#C60967;"></i>
            <i class="fa fa-youtube-play" aria-hidden="true" style="font-size:30px;color:#C60967;"></i>
        </div>
    </div>
         </div>
    </div>
    <script>
   function onSubmit(token) {
     document.getElementById("254").submit();
   }
 </script>
    <?php get_footer(); ?>
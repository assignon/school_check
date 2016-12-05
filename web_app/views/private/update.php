<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8" />
		<meta name="keywords" content=""/>
		<meta name="description" content=""/>
		<meta name="author" content="Yanick 007"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../public/css/update.css"/>
    <!--<link rel="stylesheet" href="../../public/css/global_style/footer.css"/>-->
    <!--<link rel="stylesheet" href="../../public/css/global_style/leader_info.css"/>-->
    <script src="../../public/javascript/update.js"></script>
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
    <script src="//code.jquery.com/ui/1.11.4/jquery-ui.js"></script>

   <!--  <script src="../../public/js/global/leader_info.js"></script>-->
    <title>addistrator</title>
  </head>
    <body>

       <header>

         <a href="admin?id=<?php echo $_SESSION['id'];?>"><button>Naar de admin Page</button></a>

         <div id="updateContainer">

           <p id='error'>Hier kunt u alle toegevoegde scholen wijzigen</p>

           <form id="update" action="" method="post">

             <div class="updateBox">

               <div class="formulaire">

                 <input type="text" name="school_name" placeholder="School Naam"  class="updateInput">
                 <input type="text" name="adress" placeholder="Adress"  class="updateInput">
                 <input type="number" name="street_num" placeholder="Straat Nummer" class="updateInput">
                 <input type="text" name="zip_code" placeholder="Post Code"  class="updateInput">

               </div>

               <div class="formulaire">

               </div>

             </div>



             <div class="updateBox">

                <div class="formulaire">

                  <select name="district"  class="updateInput">

                      <option value="">Kies een District</option>
                      <option value="amsterdam">Amsterdam</option>
                      <option value="noord">Noord</option>
                      <option value="zuid">Zuid</option>
                      <option value="oost">Oost</option>
                      <option value="west">West</option>
                      <option value="zuid">Zuid</option>
                      <option value="zuid_oost">Zuid-oost</option>
                      <option value="centrum">Centrum</option>


                  </select>
                  <input type="number" name="tel" placeholder="Telefoon Nummer"  class="updateInput">
                  <input type="email" name="email" placeholder="Email"  class="updateInput">
                  <input type="text" name="web_site" placeholder="Web Site"   class="updateInput">

                </div>

                <div class="formulaire">

                </div>

             </div>

             <div class="updateBox">

                <div class="formulaire">

                  <select class="updateInput" name="private">

                    <option value="">Privee Of Niet</option>
                    <option value="ja">Ja</option>
                    <option value="nee">Nee</option>

                  </select>

                  <select name="concept" class="updateInput" id="concepts">

                      <option value="">Kies een Concept</option>
                      <option value="standaard">Standaard</option>
                      <option value="vrije_school">Vrije School</option>
                      <option value="montessori">Montessori</option>
                      <option value="dalton">Dalton</option>

                  </select>

                  <select name="special" class="updateInput" id="specials">

                      <option value="">Specialen</option>
                      <option value="speciaal_onderwijs">Speciaal onderwijs</option>
                      <option value="nvt">n.v.t.</option>
                      <option value="esprit school">Esprit school</option>
                      <option value="sportklas">Sportklas</option>
                      <option value="technasium">Technasium</option>
                      <option value="kopklas">Kopklas</option>
                      <option value="havo_kansklas">Havo kansklas</option>
                      <option value="dyslexie">Topsportregeling, dyslexie</option>
                      <option value="tussenvoorziening">Tussenvoorziening</option>
                      <option value="ttO">TTO mogelijk</option>
                      <option value="cambridge">Cambridge English</option>
                      <option value="international">International School</option>
                      <option value="engelstalig">Engelstalig</option>
                      <option value="dansklas">Dansklas</option>
                      <option value="spaans">Spaans, Italiaans, Chinees</option>
                      <option value="spaanse_les">Spaanse les</option>
                      <option value="private">Private</option>
                      <option value="vwo">VWO +, science/art, kopklas</option>
                      <option value="exellius">Exellius vwo, TTO, kopklas</option>

                  </select>

                  <select name="basis" class="updateInput" id="basis">

                      <option value="">Selecteer Je Basis</option>
                      <option value="openbaar">Openbaar</option>
                      <option value="algemeen_bijzonder">Algemeen Bijzonder</option>
                      <option value="interconfessioneel">Interconfessioneel</option>
                      <option value="protestants_christelijk">Protestants-Christelijk</option>
                      <option value="overig">Overig</option>
                      <option value="verig_ab">Overig/ AB?</option>
                      <option value="katholiek">Katholiek</option>
                      <option value="joods">Joods</option>
                      <option value="oecumenisch">Oecumenisch</option>


                  </select>

                </div>

                <div class="formulaire">

                </div>

             </div>

             <div class="updateBox">

               <div class="formulaire">

                 <select name="tto"  class="updateInput">

                   <option value="">Tto</option>
                   <option value="js">Ja</option>
                   <option value="nee">Nee</option>

                 </select>

                 <select name="sport"  class="updateInput">

                   <option value="">Sport</option>
                   <option value="ja">Ja</option>
                   <option value="nee">Nee</option>

                 </select>

                 <select name="tech"  class="updateInput">

                   <option value="">Technologie</option>
                   <option value="ja">Ja</option>
                   <option value="nee">Nee</option>

                 </select>

                 <select name="spanish"   class="updateInput">

                   <option value="">Spaans</option>
                   <option value="ja">Ja</option>
                   <option value="nee">Nee</option>

                 </select>

                 <select name="art" class="updateInput">

                   <option value="">Kunst</option>
                   <option value="ja">Ja</option>
                   <option value="nee">Nee</option>

                 </select>


               </div>

               <div class="formulaire">

               </div>

             </div>

             <div class="updateBox">

                <div class="formulaire">
                  <p>Open dag</p>
                  <div class="dateTime">

                      <!--<input type="date" name="dag_date" class="inputs_parent">
                      <input type="time"  name="dag_time" class="inputs_parent">-->


                  </div>

                  <!--<div class="addInput"><p>Voeg Meer Velden Toe</p></div>-->

                </div>

                <div class="formulaire">



                </div>

             </div>

             <div class="updateBox">

                <div class="formulaire">
                  <p>Open Klas</p>
                  <div class="dateTime">

                      <!--<input type="date" name="class_date" placeholder="Datum" class="inputs_parent">
                      <input type="time" name="class_time" placeholder="Tijd" class="inputs_parent">-->


                  </div>
                    <!--<div class="addInput"><p>Voeg Meer Velden Toe</p></div>-->
                </div>

                <div class="formulaire">

                </div>

             </div>

             <div class="updateBox">

                <div class="formulaire">
                  <p>Nacht Informatie</p>
                  <div class="dateTime">

                      <!--<input type="date" name="info_date" class="inputs_parent">
                      <input type="time" name="info_time" class="inputs_parent">-->


                  </div>

                  <select name="kind_parent" class="pKind" required>

                      <option value="">Kies uit allen ouders of ouders en student</option>
                      <option value="parent">Ouders</option>
                      <option value="parent_kind">Ouders en Student</option>

                  </select>
                  <!--<div class="addInput"><p>Voeg Meer Velden Toe</p></div>-->
                </div>

                <div class="formulaire">

                </div>

             </div>


               <input type="submit" name="update" value="Update">


           </form>

         </div>


       </header>
     </body>

     </html>

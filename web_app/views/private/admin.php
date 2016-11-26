<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8" />
		<meta name="keywords" content=""/>
		<meta name="description" content=""/>
		<meta name="author" content="Yanick 007"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../public/css/admin.css"/>
    <!--<link rel="stylesheet" href="../../public/css/global_style/footer.css"/>-->
    <!--<link rel="stylesheet" href="../../public/css/global_style/leader_info.css"/>-->
    <script src="../../public/javascript/admin.js"></script>
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
    <script src="//code.jquery.com/ui/1.11.4/jquery-ui.js"></script>
    <!--<script src="../../public/js/global/footer.js"></script>-->
   <!--  <script src="../../public/js/global/leader_info.js"></script>-->
    <title>Administrator</title>
  </head>
    <body>

       <header>

         <div id="forms">



           <form id="update" action="" method="post">

             <div id="sluitUpdate">Sluiten</div>

             <input type="text" name="school_name" placeholder="School Naam"  class="updateInput">
             <input type="text" name="adress" placeholder="Adress"  class="updateInput">
             <input type="number" name="street_num" placeholder="Straat Nummer" class="updateInput">
             <input type="text" name="zip_code" placeholder="Post Code"  class="upodateInput">

             <select name="district"  required  class="updateInput">

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
             <input type="email" name="email" placeholder="Email"  class="aadInput">
             <input type="text" name="web_site" placeholder="Web Site"   class="updateInput">
             <input type="text" name="private" placeholder="Privee"  class="updateInput">

             <select name="concept"  required class="updateInput">

                 <option value="">Kies een Concept</option>
                 <option value="standaard">Standaard</option>
                 <option value="vrije_school">Vrije School</option>
                 <option value="montessori">Montessori</option>
                 <option value="dalton">Dalton</option>

             </select>

             <select name="special"  required class="updateInput">

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

             <select name="basic" required class="updateInput">

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

               <input type="submit" name="add" value="Update">


           </form>

           <form id="deleteForm" action="" method="post">

             <div id="close">Sluiten</div>
             <input type="number" name="school_id" id="schoolId">
             <input type="password" name="password" placeholder="Wachtwoord">
             <input type="submit" name="delete" value="Delete">

           </form>

         </div>

         <form id="addSchool" action="" method="post">

             <div id="sluit">Sluiten</div>

             <input type="text" name="school_name" placeholder="School Naam" id="schoolName" value="<?php echo $admin->POST('school_name') ?>" class="aadInput">
             <input type="text" name="adress" placeholder="Adress" id="adress" value="<?php echo $admin->POST('adress') ?>">
             <input type="number" name="street_num" placeholder="Straat Nummer" id="streetNumber" value="<?php echo $admin->POST('street_num') ?>" class="aadInput">
             <input type="text" name="zip_code" placeholder="Post Code" id="zipcode" value="<?php echo $admin->POST('zip_code') ?>">

             <select name="district" id="district" required value="<?php echo $admin->POST('district') ?>" class="aadInput">

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

             <input type="number" name="tel" placeholder="Telefoon Nummer" id="telNumber" value="<?php echo $admin->POST('tel') ?>" class="aadInput">
             <input type="email" name="email" placeholder="Email" id="email" value="<?php echo $admin->POST('email') ?>" class="aadInput">
             <input type="text" name="web_site" placeholder="Web Site" id="webSite" value="<?php echo $admin->POST('web_site') ?>" class="aadInput">
             <input type="text" name="private" placeholder="Privee" id="private" value="<?php echo $admin->POST('private') ?>" class="aadInput">

             <select name="concept" id="concept" required value="<?php echo $admin->POST('concept') ?>" class="aadInput">

                 <option value="">Kies een Concept</option>
                 <option value="standaard">Standaard</option>
                 <option value="vrije_school">Vrije School</option>
                 <option value="montessori">Montessori</option>
                 <option value="dalton">Dalton</option>

             </select>

             <select name="special" id="special" required value="<?php echo $admin->POST('special') ?>" class="aadInput">

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

             <select name="basic" id="basic" required value="<?php echo $admin->POST('basic') ?>" class="aadInput">

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

             <div id="empty">

             </div>

             <input type="submit" name="add" value="Voeg Toe" id="submit">

         </form>

         <div id="container">

             <div id="menu">

                 <img src="" alt="" id="userAvatar">

                 <button id="grid"></button>

                 <button id="add">Toevogen</button>

                 <button id="list"></button>

                 <a href="logout"><button>Uitlogen</button></a>

             </div>

             <div id="userContainer">

               <p id="error"></p>

                <div id="listOption">



                 </div>

                 <div id="gridOption">



                 </div>



             </div>

         </div>

        </header>

        <footer>



        </footer>

    </body>
</html>

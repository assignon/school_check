<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8" />
		<meta name="keywords" content=""/>
		<meta name="description" content=""/>
		<meta name="author" content="Yanick 007"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../public/css/add.css"/>
    <!--<link rel="stylesheet" href="../../public/css/global_style/footer.css"/>-->
    <!--<link rel="stylesheet" href="../../public/css/global_style/leader_info.css"/>-->
    <script src="../../public/javascript/add.js"></script>
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
    <script src="//code.jquery.com/ui/1.11.4/jquery-ui.js"></script>

   <!--  <script src="../../public/js/global/leader_info.js"></script>-->
    <title>addistrator</title>
  </head>
    <body>

       <header>

          <form class="inputField" action="" method="post">

             <div id="sluit">
                <p>Sluiten</p>
             </div>
             <input type="text" name="field_date" placeholder="Veld Naam voor Datum">
             <input type="text" name="place_holder_date" placeholder="PlaceHolder voor Datum">
             <input type="text" name="field_time" placeholder="Veld Naam voor Tijd">
             <input type="text" name="place_holder_time" placeholder="PlaceHolder voor Tijd">
             <input type="text" name="soort_field" id="soort">
             <input type="submit" name="add_input" value="Voeg Toe">

          </form>

          <a href="admin?id=<?php echo $_SESSION['id'];?>"><button>Naar de admin Page</button></a>

          <div id="addContainer">

            <p id="error"> Welkom Door deze Formulier In Te Vulen, Voegt U Neieuw School Toe</p>

           <form id="addSchool" action="" method="post">


             <div class="deel1">


                <input type="text" name="school_name" placeholder="School Naam*" id="schoolName" value="<?php echo $add->POST('school_name') ?>" class="aadInput">
                <input type="text" name="adress" placeholder="Adress*" id="adress" value="<?php echo $add->POST('adress') ?>">
                <input type="number" name="street_num" placeholder="Straat Nummer*" id="streetNumber" value="<?php echo $add->POST('street_num') ?>" class="aadInput">
                <input type="text" name="zip_code" placeholder="Post Code*" id="zipcode" value="<?php echo $add->POST('zip_code') ?>">

                <select name="district" id="district" required value="<?php echo $add->POST('district') ?>" class="aadInput">

                    <option value="">Kies een District*</option>
                    <option value="amsterdam">Amsterdam</option>
                    <option value="noord">Noord</option>
                    <option value="zuid">Zuid</option>
                    <option value="oost">Oost</option>
                    <option value="west">West</option>
                    <option value="zuid">Zuid</option>
                    <option value="zuid_oost">Zuid-oost</option>
                    <option value="centrum">Centrum</option>


                </select>

                <input type="number" name="tel" placeholder="Telefoon Nummer*" id="telNumber" value="<?php echo $add->POST('tel') ?>" class="aadInput">
                <input type="email" name="email" placeholder="Email*" id="email" value="<?php echo $add->POST('email') ?>" class="aadInput">
                <input type="text" name="web_site" placeholder="Web Site*" id="webSite" value="<?php echo $add->POST('web_site') ?>" class="aadInput">

                <select class="aadInput" id='private' name="private" value="<?php echo $add->POST('private') ?>" required>

                   <option value="">privee of niet*</option>
                   <option value="ja">Ja</option>
                   <option value="ne">Nee</option>

                </select>

                <select name="concept" id="concept" required value="<?php echo $add->POST('concept') ?>" class="aadInput">

                    <option value="">Kies een Concept*</option>
                    <option value="standaard">Standaard</option>
                    <option value="vrije_school">Vrije School</option>
                    <option value="montessori">Montessori</option>
                    <option value="dalton">Dalton</option>

                </select>

                <select name="special" id="special" required value="<?php echo $add->POST('special') ?>" class="aadInput">

                    <option value="">Specialen*</option>
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

                <select name="basic" id="basic" required value="<?php echo $add->POST('basic') ?>" class="aadInput">

                    <option value="">Selecteer Je Basis*</option>
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

                <div class="deel2">

                    <fieldset class="field">

                        <legend>Open Dag</legend>

                        <div class="dateTime">

                            <input type="date" name="dag_date">
                            <input type="time"  name="dag_time">


                        </div>

                        <div class="addInput"><p>Voeg Meer Velden Toe</p></div>

                    </fieldset>

                    <fieldset class="field">

                        <legend>Open Klas</legend>

                        <div class="dateTime">

                            <input type="date" name="class_date" placeholder="Datum">
                            <input type="time" name="class_time" placeholder="Tijd">


                        </div>

                        <div class="addInput"><p>Voeg Meer Velden Toe</p></div>

                    </fieldset>

                    <fieldset class="field">

                        <legend>Nacht Informatie</legend>

                        <div class="dateTime">

                            <input type="date" name="info_date">
                            <input type="time" name="info_time">


                        </div>

                        <select name="kind_parent" class="pKind" require>

                            <option value="">Kies uit allen ouders of ouders en student</option>
                            <option value="parent">Ouders</option>
                            <option value="parent_kind">Ouders en Student</option>

                        </select>
                        <div class="addInput"><p>Voeg Meer Velden Toe</p></div>

                    </fieldset>

                </div>

                <input type="submit" name="add" value="Voeg Toe" id="submit">

            </form>

          </div>

       </header>
     </body>

     </html>

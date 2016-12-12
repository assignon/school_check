<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8" />
		<meta name="keywords" content=""/>
		<meta name="description" content=""/>
		<meta name="author" content="Yanick 007"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../public/css/add.css"/>
    <!--<link rel="stylesheet" href="../../public/css/global_style/footer.css"/>-->
    <!--<link rel="stylesheet" href="../../public/css/global_style/leader_info.css"/>-->
    <script src="../public/javascript/add.js"></script>
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
    <script src="//code.jquery.com/ui/1.11.4/jquery-ui.js"></script>

   <!--  <script src="../../public/js/global/leader_info.js"></script>-->
    <title>addistrator</title>
  </head>
    <body>

       <header>



          <a href="welcom.php?action=admin&id=<?php echo $_SESSION['id'];?>"><button>Naar de admin Page</button></a>

          <div id="addContainer">

            <p id="error"> Welkom Door deze Formulier In Te Vulen, Voegt U Nieuw School Toe</p>
            <p id="inform">Op de velden waar een stertje(*) vvor staat, beteken dat die velden gevuld moeten worden. De rest waar geen * voor staat, kunnen jullie na de toevoeging via de update pagina of helemaal onderaan(op de meer opties knop) bij de toevoeg pagina nog vullen.</p>

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

                <fieldset id="extraInfo">
                  <legend>Extra Informatie</legend>

                  <select name="tto"   value="<?php //echo $add->POST('basic') ?>" class="aadInput">

                    <option value="">Tto</option>
                    <option value="js">Ja</option>
                    <option value="nee">Nee</option>

                  </select>

                  <select name="sport"   value="<?php //echo $add->POST('basic') ?>" class="aadInput">

                    <option value="">Sport</option>
                    <option value="ja">Ja</option>
                    <option value="nee">Nee</option>

                  </select>

                  <select name="tech"   value="<?php //echo $add->POST('basic') ?>" class="aadInput">

                    <option value="">Technologie</option>
                    <option value="ja">Ja</option>
                    <option value="nee">Nee</option>

                  </select>

                  <select name="spanish"   value="<?php //echo $add->POST('basic') ?>" class="aadInput">

                    <option value="">Spaans</option>
                    <option value="ja">Ja</option>
                    <option value="nee">Nee</option>

                  </select>

                  <select name="art"   value="<?php //echo $add->POST('basic') ?>" class="aadInput">

                    <option value="">Kunst</option>
                    <option value="ja">Ja</option>
                    <option value="nee">Nee</option>

                  </select>

                </fieldset>





             </div>

                <div class="deel2">

                  <fieldset class="opens">
                    <legend>Open Dagen, Klassen en Nacht Informatie</legend>

                      <p>Als u meerdere open dagen, klassen of avonden data's heeft, kunt u helemaal onderaan op de Blauwe knop (waar meer opties staan) door middel van een formulier toevoegen.</p>
                      <div class="fieldsets">


                        <fieldset class="field">

                            <legend>Open Dag</legend>

                            <div class="dateTime">

                                <input type="date" name="dag_date" placeholder="Datum">
                                <input type="time"  name="dag_time" placeholder="Tijd">


                            </div>

                        </fieldset>

                        <fieldset class="field">

                            <legend>Open Klas</legend>

                            <div class="dateTime">

                                <input type="date" name="class_date" placeholder="Datum">
                                <input type="time" name="class_time" placeholder="Tijd">


                            </div>

                        </fieldset>

                        <fieldset class="field">

                            <legend>Nacht Informatie</legend>

                            <div class="dateTime">

                                <input type="date" name="info_date" placeholder="Datum">
                                <input type="time" name="info_time" placeholder="Tijd">


                            </div>

                            <select name="kind_parent" class="pKind">

                                <option value="">Kies uit allen ouders of ouders en student</option>
                                <option value="parent">Ouders</option>
                                <option value="parent_kind">Ouders en Student</option>

                            </select>

                        </fieldset>



                      </div>

                  </fieldset>

                    <fieldset id="levels">
                     <legend>Niveau </legend>

                     <input type="checkbox" name="check_levels[]" value="praktijk"><p>Praktij</p>
                     <input type="checkbox" name="check_levels[]" value="vmbob"><p>Vmbo-B</p>
                     <input type="checkbox" name="check_levels[]" value="vmbok"><p>Vmbo-K</p>
                     <input type="checkbox" name="check_levels[]" value="vmbot"><p>Vmbo-T/Mavo</p>
                     <input type="checkbox" name="check_levels[]" value="havo"><p>Havo</p>
                     <input type="checkbox" name="check_levels[]" value="vwo"><p>Vwo</p>
                     <input type="checkbox" name="check_levels[]" value="gymnasium"><p>Gymnasium</p>
                     <input type="checkbox" name="check_levels[]" value="lwoo"><p>Lwoo</p>



                    </fieldset>

                </div>

                <input type="submit" name="add" value="Voeg Toe" id="submit">

            </form>

          </div>

          <div id="options">

            <button id="hide">Verbergen</button>
            <button id="show">Meer opties</button>


          </div>

          <div id="extraOption">

                <div class="extras">

                  <form  action="" method="post">


                     <input type="text" name="value" placeholder="Niveau Waarde">
                     <select id="levelsOption" name="levels">

                       <option value="">Selecteer de bijhorende school</option>

                     </select>

                     <input type="submit" name="addLevel" value="Toevoegen">

                  </form>
                  <p>Hier kunnen jullie nieuw Niveau toevoegen</p>

                </div>

                <div class="extras">

                  <form  action="" method="post">

                     <input type="text" name="district" placeholder="stadsdeel Naam">
                     <input type="submit" name="adddistrict" value="Toevoegen">

                  </form>
                  <p>Hier kunnen jullie nieuw stadsdeel toevoegen</p>

                </div>

                <div class="extras">

                  <form  action="" method="post">

                     <input type="text" name="concept" placeholder="Concept Naam">
                     <input type="submit" name="addconcept" value="Toevoegen">

                  </form>
                  <p>Hier kunnen jullie nieuw Concept toevoegen</p>

                </div>


                <div class="extras">

                  <form  action="" method="post">

                     <input type="text" name="onderwijs" placeholder="Onderwijs Naam">
                     <input type="submit" name="addOnderwijs" value="Toevoegen">

                  </form>
                  <p>Hier kunnen jullie nieuw Speciaal Onderwijs toevoegen</p>

                </div>

                <div class="extras">

                  <form  action="" method="post">

                     <input type="text" name="openbaar" placeholder="Openbaar Naam">
                     <input type="submit" name="addOpenbaar" value="Toevoegen">

                  </form>
                  <p>Hier kunnen jullie nieuw Openbaarheden toevoegen</p>

                </div>

                <div class="extras">

                  <form  action="" method="post">

                     <input type="text" name="input_name_date" placeholder="Datum Veld Naam">

                     <input type="date" name="field_date" placeholder=" Datum">
                     <input type="text" name="input_name_time" placeholder="Tijd Veld Naam">
                     <input type="time" name="field_time" placeholder=" Tijd">
                     <select  name="schools" id="allschool" required="">

                       <option value="">Kies bij welk school de informaties horen</option>


                     </select>

                     <select id="pkind" name="kparent">

                        <option value="">Ouders/Ouders-kind</option>
                        <option value="parent">Ouders</option>
                        <option value="kindParent">Ouders en Kind</option>

                     </select>

                     <div class="soorts">

                         <p>Open Dag:</p> <input type="radio" name="soort" value="openday" class="openInfos">
                         <p>Open Klas:</p> <input type="radio" name="soort" value="openclass" class="openInfos">
                         <p>Nacht Informatie:</p> <input type="radio" name="soort" value="nightinfo" class="openInfos">

                     </div>

                     <input type="submit" name="add_input" value="Toevoegen" >


                  </form>
                  <p id="opening">Hier kunnen jullie nieuw Openbaarheden toevoegen</p>

                </div>




          </div>

       </header>
     </body>

     </html>

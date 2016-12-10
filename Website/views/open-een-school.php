<?php
if(isset($_GET['schoolname'])){
    $nameschool = $_GET['schoolname'];
}

$sql = "SELECT * FROM schools where schoolname = '$nameschool'";
$result = $conn->query($sql);

while($row = $result ->fetch_assoc()){
    
?>

< <section class="keuze">
       <div class="omallesheen">
        <article>
            <?php
    echo ' <h2 class="titleschool">'. $nameschool .'</h2>';
    
    ?>
                <br>
                <hr style="color:steelblue;">
                <div class="container-info">
                    <div class="Allinfo">
                        <p class="contact"><strong>Algemene informatie</strong></p>
                        <div class=ominfoheen>
                            <ul class="info">
                                <li>Private:</li>
                                <li>Concept:</li>
                                <li>Specials:</li>
                                <li>Basis:</li>
                                <li>Tto:</li>
                                <li>Sport:</li>
                                <li>Spanish:</li>
                                <li>Technologie:</li>
                                <li>Art:</li>
                            </ul>
                        
                            <ul class="info">
                                <?php
    
    echo '<li>' . $row['private'] . '</li>';
    echo '<li>' . $row['concept'] . '</li>';
    echo '<li>' . $row['specials'] . '</li>';
    echo '<li>' . $row['basis'] . '</li>';
    echo '<li>' . $row['tto'] . '</li>';
    echo '<li>' . $row['sport'] . '</li>';
    echo '<li>' . $row['spanish'] . '</li>';
    echo '<li>' . $row['technologie'] . '</li>';
    echo '<li>' . $row['art'] . '</li>';
    ?>
                            </ul>
                        </div>
                    </div>
        
        <div class="Allinfo">
            <p class="contact"><strong>Contact gegevens van <?php echo $nameschool; ?>:</strong></p>
            <div class="ominfoheen">
                <ul class="info">
                                <li>Straat:</li>
                                <li>Postcode</li>
                                <li>District:</li>
                                <li>Telefoon:</li>
                                <li>Email:</li>
                                <li>Website:</li>
                            </ul>
                </ul>
                <ul class="info2">

   <?php
    
    echo '<li>' . $row['adress'] . '&nbsp;'. $row['street_number'] . '</li>';
    echo '<li>' . $row['zipcode'] . '</li>';
    echo '<li>' . $row['district'] . '</li>';
    echo '<li>' . $row['telnr'] . '</li>';
    echo '<li>' . $row['email'] . '</li>';
    echo '<li>' . $row['website'] . '</li>';
    } 
    ?>
    
                    </ul>
            </div>
        </div>
        </div>
    </article>
    
     <article>
        <hr style="color:steelblue;">
        <div class="container-info">
        <div class="Allinfo">
        <p class="contact"><strong>Opendagen, Openklassen etc.</strong></p>
        <div class=ominfoheen>
             <ul class="info">
        <li>Opendag Datum:</li>
        <li>Tijdstip</li>
        <li>Openklas Datum:</li>
        <li>Tijdstip:</li>
        <li>Informatieavond Datum:</li>
        <li>Tijdstip:</li>
        
            </ul>
        <ul class="info2">
        
    <?php
           
    //OPENDAG in table open_dag
    $sql2 = "SELECT * FROM open_day WHERE school_name = '$nameschool'";
    $result2 = $conn->query($sql2) or die($conn->error);
    while($row = $result2 ->fetch_assoc()){
        echo '<li>' . $row['date_openday'] . '</li>';
        echo '<li>' . $row['time_openday'] . '</li>';
    } 
    
     //OPENklasG in table open_dag
    $sql3 = "SELECT * FROM open_class WHERE school_name = '$nameschool'";
    $result3 = $conn->query($sql3) or die($conn->error);
    while($row = $result3 ->fetch_assoc()){
        echo '<li>' . $row['date_openclass'] . '</li>';
        echo '<li>' . $row['time_openclass'] . '</li>';
    } 
            
    $sql4 = "SELECT * FROM info_night WHERE school_name  = '$nameschool'";
    $result4 = $conn->query($sql4) or die($conn->error);
    while($row = $result4 ->fetch_assoc()){
        echo '<li>' . $row['date_infonight'] . '</li>';
        echo '<li>' . $row['time_infonight'] . '</li>';
    }

      ?>      
    
   </ul>
        
            </div>
            <hr>
            <p class="contact"><strong>Op de plekken waar geen datums en/of tijd <staan></staan>, betekent dat er (nog) niks gepland is.</strong></p>
        </div>
        
        <div class="Allinfo">
            <p class="contact"><strong>Extra datums</strong></p>
            <div class="ominfoheen">
                <ul class="info">
                <?php
                $sql5 = "SELECT * FROM more_input WHERE school_name = '$nameschool'";
                $result5 = $conn->query($sql5) or die ($conn ->error);
                while($row = $result5 ->fetch_assoc()){
                    echo '<li>Voor ' . $row['soort'] . ':<li>';
                    echo '<li>Op  ' . $row['name_date'] . ' & om ' . $row['name_time'] . '</li>';
                }
                    
                    ?>
        
        </div>

        <br>
    
    </article>
       
       <hr>
       <p class="contact">Bekijk op de kaart</p>
        <?php
       $sql9 = "SELECT * FROM schools WHERE schoolname= '$nameschool'";
       $result9 = $conn->query($sql9);
while($row = $result9 ->fetch_assoc()){
        echo '<a href="https://www.google.nl/maps/place/' . $row['adress'] .'+' . $row['street_number'] .',+' . $row['zipcode'] . '+Amsterdam/@"><img class="iconafb" src="Stylesheet/Afbeeldingen/iconlocatie.png"></a>';
        }        
        ?>
    </div>
    
</section>
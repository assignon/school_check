<section class="keuze">
<?php

include 'model/select-open.php';
   
while($row = $result ->fetch_assoc()){
    $schoolUpper = ucwords($row['school_name']);
    $schoolReplace = str_replace('_', ' ', $schoolUpper);
    $schoolName = str_replace('-', ' ', $schoolReplace);
    echo '<a style="text-decoration:none; color: steelblue;" href="?action=openschool&schoolname=' . $row['school_name'] . '">';
    echo '<div class="scholen">';
    echo '<div class="top">';
    echo '<h2>' . $schoolName . '</h2></div>';
    echo '<p>' . $row['date_openday'] . '</p><br>';
    echo '<p>' . $row['time_openday'] . '</p>';
    echo '</div>';
    echo '</a>';
}
   ?>
   
   
</section>



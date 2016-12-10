<section class="keuze">

<?php

include 'model/select-from.php';
   
while($row = $result ->fetch_assoc()){
    $schoolUpper = ucwords($row['schoolname']);
    $schoolReplace = str_replace('_', ' ', $schoolUpper);
    $schoolName = str_replace('-', ' ', $schoolReplace);
    echo '<a style="text-decoration:none; color: steelblue;" href="?action=school&schoolname=' . $row['schoolname'] . '&schoolid=' . $row['id'] . '">';
    echo '<div class="scholen">';
    echo '<div class="top">';
    echo '<h2>' . $schoolName . ' - ' . $row['district'] . '</h2></div>';
    echo '<p><a class="linkjes" target=_blank href="' . $row['website'] . '">' . $row['website'] . '</a></p>';
    //target_blank = niewe venster
    echo '</div>';
    echo '</a>';
}
   ?>
   
   
</section>



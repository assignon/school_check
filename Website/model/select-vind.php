<?php

//$pdo = new PDO("mysql: host=localhost;dbname=schoolcheck_cms",'root'.'');
$pdo = new PDO("mysql: host=mysql.hostinger.fr;dbname=u646001124_check",'u646001124_yan','serges007');

 if(isset($_POST['knop']) AND !empty($_POST['check_list'])){

    $checked = $_POST['check_list'];


    $select = $pdo->prepare("SELECT*FROM add_levels INNER JOIN schools ON levels_data.school_name=schools.schoolname  WHERE level_value=?");
    foreach ($checked as $value) {

      $select->execute(array($value));

      $display_school = $select->fetch();


        echo $display_school['level_value'];
        echo "het werkt wel";



    }




 }else{

    echo "Maak een keuze";

 }


/*if(isset($_POST['knop']) AND !empty($_POST['check_list'])){
    foreach($_POST['check_list'] as $check){
         $sql = "SELECT school_name  FROM levels_data WHERE levels_name = '$check'";
        $result = $conn->query($sql) or die($conn->error);
        while($row = $result ->fetch_assoc()){
            $schoolName = $row['school_name'];
        }
        //Schoolnaaam Voor Niveau/levels
        $sql2 = "SELECT * FROM schools WHERE schoolname = '$schoolName'";
        $result2 = $conn->query($sql2) or die ($conn->error);
        while($row = $result2 ->fetch_assoc()){
            echo $row['schoolname'];
        }

        //code voor de district
        $sql3 = "SELECT district FROM schools WHERE district = '$check'";
        $result3 = $conn->query($sql3) or die ($conn->error);
        while($row = $result3 ->fetch_assoc()){
            $district = $row['district'];
            echo $district;
        }

        //echte district
        $sql4 = "SELECT * FROM schools WHERE district = '$district'";
        $result4 = $conn->query($sql4) or die ($conn->error);
        while($row = $result4->fetch_assoc()){

        }


    }
}*/


//$sql = "SELECT schools.schoolname, level_data.levels_name FROM schools INNER JOIN level_data ON schools.schoolname = level_data.levels_name";
//
//$result = $conn->query($sql);
?>

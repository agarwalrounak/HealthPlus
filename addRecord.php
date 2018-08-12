<?php
    session_start() ;
    if(!isset($_SESSION['user_id'])){
        header("location: index.php") ;
    }
    include("connection.php") ;
    $doctor_id = $_SESSION['user_id'] ;
    $aadhar = $_POST['addaadhar'] ;
    $date = $_POST['visit'] ;
    $med = $_POST['medicines'] ;
    $notes = $_POST['notes'] ;

    $sql = "SELECT * FROM patient WHERE aadhar='$aadhar'" ;
    $result = mysqli_query($link , $sql) ;
    $count = mysqli_num_rows($result) ;
    if($count==1){
        $row = mysqli_fetch_assoc($result) ;
        $patient_id = $row['user_id'] ;
    }else{
        echo "ERROR: Unable to run the fetch query" ;
    }
//    echo "<p>$patient_id</p>" ;
//    echo "<p>$doctor_id</p>" ;
//    echo "<p>$aadhar</p>" ;
//    echo "<p>$med</p>" ;
//    echo "<p>$notes</p>" ;
    
    $sql = "INSERT INTO records (patient_id, doctor_id, patient_aadhar, visit_date, medicines, notes) VALUES ('$patient_id', '$doctor_id','$aadhar' , '$date', '$med', '$notes')" ;
    $result = mysqli_query($link , $sql) ;
    if(!$result){
        echo "<div>ERROR: Unable to run the insert query.</div>" ;
    }else {
        header("location: AccessPatient.php?loginaadhar=$aadhar") ;
    }
?>
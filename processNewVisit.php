<?php

include("dbcon.php");


if ($_SERVER["REQUEST_METHOD"] == "POST") {
   
    $vdate = isset($_POST['visitDate']) ? $_POST['visitDate'] : '';
    $vtime = isset($_POST['visitTime']) ? $_POST['visitTime'] : '';
    $docid = isset($_POST['docid']) ? $_POST['docid'] : '';
    $ptntid = isset($_POST['ptntid']) ? $_POST['ptntid'] : '';
    $cost = isset($_POST['cost']) ? $_POST['cost'] : '';

 
    $sql = "INSERT INTO Visit (visit_date, visit_time, doctor_id, patient_id, cost) VALUES ('$vdate', '$vtime', '$docid', '$ptntid', $cost)";
    
    echo $sql; 

    if (mysqli_query($conn, $sql)) {
        echo "New visit created successfully.";
    } else {
        echo "Error: " . mysqli_error($conn);
    }
}


$conn->close();
?>

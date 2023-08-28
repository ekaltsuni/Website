<?php
require_once 'credent.php';
// Create connection to database
$dbconn = mysqli_connect(DB_SERVER, DB_USER, DB_PASS, DB_BASE);

// Check if connection is established
if (!$dbconn) {
    die("Connection failed: " . mysqli_connect_error ()); 
}

mysqli_set_charset($dbconn, "utf8");

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["email"])) {
    $email = $_POST["email"];
    // Create insert query
    if (isset($_POST['submit-button']) && $_POST['submit-button'] === 'Submit') {
        $sql = "INSERT INTO donation_form(firstname, lastname, address, zip, country, phone, email, card_type, card_number) 
        VALUES ('".$_POST['firstname']."','".$_POST['lastname']."','".$_POST['address']."',".$_POST['zip'].",
        '".$_POST['country']."', '".$_POST['phone']."', '".$_POST['email']."', '".$_POST['card-type']."', ".$_POST['card-number'].") ";
        
        // Execute insert query 
        $result = mysqli_query($dbconn, $sql) ;

        // If query succeeds, show alert
        if ($result) {
            echo '<script language="javascript">';
            echo 'alert("Your data is saved.");history.back(-1);';
            echo '</script>';
        }
        else {
            echo '<script language="javascript">';
            echo 'alert("Something went wrong.")';
            echo '</script>';
            die('Query failed: ' . mysqli_error($dbconn)); 
        }   
    } else {
        // Create select query
        $sql = "SELECT * FROM donation_form WHERE email = '$email'";
        $result = mysqli_query($dbconn, $sql);
        // If query succeeds and at least one email exists in database, print data
        if ($result) {
            if (mysqli_num_rows($result) > 0) {
                $row = mysqli_fetch_assoc($result);
                echo json_encode($row);
            } else {
            // If query succeeds but email doesn't exist in database, return empty array and print relevant message  
                echo json_encode(array("error" => "No match found"));
            }
        }
        // If query doesn't succeed
        else {
            echo json_encode(array("error" => "Error fetching data"));
            }
        }
    }
    else {
        echo "Invalid request";
    }
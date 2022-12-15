<?php
// Connecting to the Database
$servername = "localhost";
$username = "root";
$passowrd = "";
$database = "dbharry";

// Create a connection
$conn = mysqli_connect($servername, $username, $passowrd, $database);

// Die if onnection was not successful
if(!$conn){
    die("Sorry we failed to connect: " . mysqli_connect_error());
}
echo "Connection was successfull <br> ";

$sql = "SELECT * FROM `phptrip`";
$result = mysqli_query($conn, $sql);

// find the number of records returned
$num = mysqli_num_rows($result);
echo $num;
echo " records found in the DataBase";
echo "<br><br>";

// Display the rows returned by the sql query
if($num > 0){
    // $row = mysqli_fetch_assoc($result);
    // echo var_dump($row);
    // echo "<br>";

    // $row = mysqli_fetch_assoc($result);
    // echo var_dump($row);
    // echo "<br>";

    // it return next rows

    // now fetch until it return NULL
    

    // We can fetch in a better way using the while loop    
    // while($row = mysqli_fetch_assoc($result)){
    //     echo var_dump($row);
    //     echo "<br>";

    // }

    while($row = mysqli_fetch_assoc($result)){
        echo $row['sno'] . " Hello " . $row['name'] . ", Welcome to " . $row['dest'];
        echo "<br>";
        
    }

}

?>
<?php


require_once("./head.php");
require_once("./dbconnect.php");



// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT id,nom,email,tel,message FROM contact";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    echo "<table class='table'><tr>
    <th scope='col'>ID</th>
    <th>NOM</th>
    <th>Email</th>
    <th>Tel</th>
    <th>Message</th>
    </tr>";
    while($row = $result->fetch_assoc()) {
        echo "<tr><td>" . $row["id"]. "</td><td>" .
         $row["nom"]."</td><td>"  .
          $row["email"]. "</td><td> " .
           $row["tel"]. "</td><td> " .
            $row["message"]. ""
             ;
    }
    echo "</table>";
} else {
    echo "0 results";
}

$conn->close();


?>

<style>

      /* table, th, td {
    border: 1px solid black;
} */
</style>





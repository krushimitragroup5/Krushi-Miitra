<?php
$servername = "localhost:3307";
$username = "root";
$password = "";
$dbname = "apna_salon_db";
// Process the form data
$conn = new mysqli($servername, $username, $password, $dbname);

$transactionId = $_POST['transactionId'];

$query = "select * from payments where transaction_id='$transactionId'";
$result = $conn->query($query);
// if (!$result) {
//     die("Connection failed: " . $conn->connect_error);
// }
// else{
//     echo("hii");
// }
// $result = mysqli_query($conn, $query);

$count = mysqli_num_rows($result);
// echo $count;
if ($count == 0) {
    echo "<h1>Payment not found</h1>";
} else {

    echo "<h1 class='heading'>Payment Details</h1>";
    echo "<table  class='details_table'> ";
    echo "<tr >
    <th>Email</th>
    <th>Mobile</th>
    <th>Services</th>
    <th>Amount</th>
    <th>Transaction ID</th>
    </tr>";
    while ($row = $result->fetch_assoc()) {
        echo "<tr>
        <td>" . $row["email"] . "</td>
        <td>" . $row["mobile"] . "</td>
        <td>" . $row["services"] . "</td>
        <td>" . $row["amount"] . "</td>
        <td>" . $row["transaction_id"] . "</td>
        </tr>";
    }
    echo "</table>";
}

?>
<style>
    .details_table {
        display: flex;
        justify-content: center;
        position: relative;
        top: 20vh;
        font-size: 30px;
    }

    .heading {
        display: flex;
        justify-content: center;
        position: relative;
        top: 20vh;
        font-size: 60px;
    }

    th,
    td {
        border: 1px solid;

    }
</style>
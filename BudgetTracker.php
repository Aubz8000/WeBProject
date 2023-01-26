<?php 
// Connect to the database

$query = file_get_contents('C:\Users\MTC\Documents\BUSINESS & FINANCE\Website business\Budget Tracker Website\BT.sql');
mysqli_query($conn, $query);

$host = "hostname";
$username = "username";
$password = "password";
$dbname = "dbname";

$conn = new mysqli($host, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Create a SQL query
$sql = "SELECT * FROM expenses";
$result = $conn->query($sql);

// Check if the query returns any results
if ($result->num_rows > 0) {
    // Print the data in an HTML table
    echo "<table>";
    echo "<tr><th>Expense Name</th><th>Expense Amount</th><th>Expense Date</th><th>Currency</th></tr>";
    while($row = $result->fetch_assoc()) {
        echo "<tr><td>" . $row["expense_name"] . "</td><td>" . $row["expense_amount"] . "</td><td>" . $row["expense_date"] . "</td><td>" . $row["currency"] . "</td></tr>";
    }
    echo "</table>";
} else {
    echo "No results found.";
}

// Close the connection
$conn->close();
?>
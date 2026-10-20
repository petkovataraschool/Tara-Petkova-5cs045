<meta charset="UTF-8">
<?php
// Connect to server and select DB
$connection = mysqli_connect("127.0.0.1", "root", "root", "bookstore", 8889);

// Build SQL statement
$sql = "SELECT * FROM books";

// Retrieve the data
$result = mysqli_query($connection, $sql);

// Display table headings
echo "<table border='1'>";
echo "<tr><th>Book name</th><th>Genre</th><th>Price</th><th>Date of release</th></tr>";

// Loop through data and display
while ($row = mysqli_fetch_assoc($result)) {
  echo "<tr>";
  echo "<td>" . $row['Book_name'] . "</td>";
  echo "<td>" . $row['Genre'] . "</td>";
  echo "<td>£" . number_format($row['Price'], 2) . "</td>";
  echo "<td>" . date("d/m/Y", strtotime($row['Date_of_release'])) . "</td>";
  echo "</tr>";
}

echo "</table>";

// Close connection
mysqli_close($connection);
?>
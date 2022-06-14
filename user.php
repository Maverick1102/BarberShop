<html>

<style>
table, th, td {
  border: 1px solid black;
  border-collapse: collapse;
  text-align: center;
    width: 30rem;
}
</style>

<?php 

include 'config.php';

//DISPLAY

$display = "SELECT * FROM user";
$result = mysqli_query($conn, $display);
echo "<p><b>Student Table</b></p>";
echo "<table>";
echo "<tr>";
                echo "<th>Name</th>";
                echo "<th>HP</th>";
                echo "<th>Appointment</th>";
            echo "</tr>";
while ($row = mysqli_fetch_array($result)) {    
    echo "<tr>";
                echo "<td>" . $row['name'] . "</td>";
                echo "<td>" . $row['hp'] . "</td>";
                echo "<td>" . $row['appointment'] . "</td>";
            echo "</tr>";
            
}



mysqli_close($conn);

?>


</html>

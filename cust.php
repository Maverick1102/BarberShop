<?php
 $servername = "localhost";
 $username = "root";
 $password = "";
 $db = "projectbarber";
 $conn = mysqli_connect($servername, $username, $password, $db);
 
 if (!$conn){
         die("Connection failed : " . mysqli_connect_error());
 }
     
     echo "Connected <p>";

    if(isset($_POST['submit'])){

        $name = $_POST['name'];
        $hp = $_POST['hp'];
        $appointment = $_POST['appointment'];
        $service = $_POST['service'];

        $sql = "INSERT INTO appointment(name, hp, appointment, service)
        VALUES ('$name','$hp','$appointment','$service')";
    }
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        table, th, td{
            border: 2px solid black;
        }
        td{
            padding: 4px;
        }
    </style>
</head>
<body>
    <form action="cust.php" method="POST">
        <fieldset>
            <legend>Order Information</legend>
            <label for="cust">Name</label>
            <input type="text" name="name" id="name" value="<?php echo $name; ?>" required>
            <br><br>

            <label for="hp">HP</label>
            <input type="text" name="hp" value="<?php echo $hp; ?>" required>
            <br><br>

            <label for="appointment">Appointment</label>
            <input type="datetime-local" name="appointment"  value="<?php echo $appointment; ?>" required>
            <br><br>

            <label for="service">Service</label>
            <input type="text" name="service" value="<?php echo $service; ?>" required>
            <br><br>

            <input type="button" value="Back To Home" onclick="history.back()">
        </fieldset>
    </form>
</body>
</html>

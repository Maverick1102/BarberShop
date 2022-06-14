<?php 

session_start();

if (isset($_SESSION['username'])) {


 ?>

<!DOCTYPE html>

<html>

<head>

    <title>HOME</title>

    <link rel="stylesheet" type="text/css" href="style.css">

</head>

<body>

     <h1>Hello, Admin</h1>
     <a href="logout.php">Logout</a>

     <div class="container">
    <table class="table">
        <thead id="thead" style="background-color: red">
        <tr>
            <th>Name</th>
            <th>HP Number</th>
            <th>Appointment Details</th>
        </tr>
        </thead>
        <tbody>
        <?php
        include "config.php";
        include_once "Common.php";
        $common = new Common();
        $records = $common->getAllRecords($conn);
        if ($records->num_rows>0){
            $sr = 1;
            while ($record = $records->fetch_object()) {
                $recordId = $record->id;
                $name = $record->name;
                $hp = $record->hp;
                $appointment = $record->appointment;
                ?>
                <tr>
                    <th><?php echo $name;?></th>
                    <th><?php echo $hp;?></th>
                    <th><?php echo $appointment;?></th>
                    <td><a href="delete-script.php?recordId=<?php echo $recordId?>" class="btn btn-danger btn-sm">Delete</a> </td>
                </tr>
                <?php
                $sr++;
            }
        }
        ?>
        </tbody>

    <br>
    <br>


</body>

</html>

<?php 

}else{

     header("Location: admin.php");

     exit();

}

 ?>
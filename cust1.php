<?php

include 'config.php';

$name = $_POST['name'];
$hp = $_POST['hp'];
$appointment = $_POST['appointment'];
                $insert = "INSERT INTO user (name,hp,appointment) VALUES ('$name','$hp','$appointment')";
                    echo "<b>Inserting data . . .</b><br><br>";
                    if (mysqli_query($conn, $insert)) {
                        echo "Success inserting data <br><br>";
                    }
                    
                    else {
                        echo "Failed to insert data <br><br>";    
                    }


                    header("Location: main.html");  


?>
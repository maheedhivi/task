<?php
include "connection1.php"; // Using database connection file here
if(isset($_POST['submit']))
{		
    $name=$_POST['name'];
    $mysqli->query("INSERT INTO members(name) value('$name')");
     if(!$mysqli)
    {
        echo mysqli_error();
    }
    else
    {
        echo "Records added successfully <br/>";
    }
}
mysqli_close($mysqli); // Close connection
?>
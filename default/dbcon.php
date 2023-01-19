<?php
$con=new mysqli("localhost", "root","","hall");
if($con->connect_error)
{
    die("Connection is Failed".$con->connect_error);
    return;
}
// else
// {
//     print("Connection Success");
// }


?>
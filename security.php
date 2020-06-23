<?php

session_start();
include('database/dbconfig.php');

if($dbconfig)
{

//echo "databse connect";

} else{

    header('Location: database/dbconfig.php');
    

}





if(!$_SESSION['username'])
{
    header('Location: login2.php');
    
}
?>
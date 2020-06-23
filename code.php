


  <?php

include('security.php');

// if(isset($_POST['registerbtn']))
// {
//     $username = $_POST['username'];
//     $email = $_POST['email'];
//     $password = $_POST['password'];
//     $confirm_password = $_POST['confirmpassword'];

//     if($password === $confirm_password)
//     {
//         $query = "INSERT INTO register (username,email,password) VALUES ('$username','$email','$password')";
//         $query_run = mysqli_query($connection, $query);
    
//         if($query_run)
//         {
//             echo "done";
//             $_SESSION['success'] =  "Admin is Added Successfully";
//             header('Location: register.php');
//         }
//         else 
//         {
//             echo "not done";
//             $_SESSION['status'] =  "Admin is Not Added";
//             header('Location: register.php');
//         }
//     }
//     else 
//     {
//         echo "pass no match";
//         $_SESSION['status'] =  "Password and Confirm Password Does not Match";
//         header('Location: register.php');
//     }

// }



if(isset($_POST['login_btn']))
{
    $email_login = $_POST['email'];
    $pass_login = $_POST['pass'];
  
    $query = "SELECT * FROM register WHERE email ='$email_login' AND pass='$pass_login' ";
    $query_run = mysqli_query($connection, $query);


    if(mysqli_fetch_array($query_run))
    {
       
     
          
            $_SESSION['username'] =  $email_login;
            header('Location: index.php');
    }
        else 
        {
          
            $_SESSION['status'] =  "Email or password are invalid";
            header('Location: login2.php');
        }
    
   
}



?>
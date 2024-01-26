<?php 
include '../core/init.php';
require_once '../core/classes/validation/Validator.php';
use validation\Validator;


    
    

   if (isset($_POST['login']) && !empty($_POST['login'])) {
    
        $email = $_POST['email'];
        $password = $_POST['password'];
        if(!empty($email) && !empty($password)) {
        $email = User::checkInput($email);
        $password = User::checkInput($password); 
       } 
       
          

        $v = new Validator; 
        $v->rules('email' , $email , ['required' , 'email']);
        $v->rules('password' , $password , ['required' , 'string']);
        $errors = $v->errors;
        if($errors == []) {
            User::login($email , $password);
         if(User::login($email , $password) === false ) {
          // $errors = 'the email or password is not correct';/
           $_SESSION['errors'] = ['the email or password is not correct'];
           header('location: ../index.php')  ;
         }

        } else {
          $_SESSION['errors'] = $errors;
          header('location: ../index.php')  ;
        }


        
            

   } else  header('location: ../index.php')  ;




?>
<?php
    if(isset($_POST['login'])){
        $connection = mysqli_connect("localhost","root","");
        $db = mysqli_select_db($connection,"tweetphp");
        $query ="select * from admin where email = '$_POST[email]' and password='$_POST[password]'";
        $query_run=mysqli_query($connection,$query);
        $row=mysqli_fetch_assoc($query_run);
        if (mysqli_num_rows($query_run)==1){
         
                    $_SESSION['name'] = $row['name'];
                    $_SESSION['email'] = $row['email'];
                    header("location:../dash.php");
                }
                else{
                    echo"<script>window.alert('invalid USERNAME or PASSWORD.........')</script>";

                    echo"<script>location.href='index.php'</script>";
                }
            
            
    }
?>


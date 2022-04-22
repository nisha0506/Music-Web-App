<?php
session_start();
?>

<!DOCTYPE html>
<html>
<head>
<title>Login</title>
<?php include 'css/login._style.php' ?>

</head>

<body>
<?php
   include 'dbcon.php';
    if(isset($_POST['submit'])){
        $email= $_POST['email'];
        $password= $_POST['password'];

        $email_search = "select * from registration where email= '$email'";
        $query= mysqli_query($con,$email_search );
        $email_count = mysqli_num_rows($query);
        if($email_count){
              $email_pass = mysqli_fetch_assoc($query);
             $db_pass = $email_pass['password'];
             $pass_decode = password_verify($password, $db_pass);
             if($pass_decode){
                     echo "login successful";
                   ?>
                   <script>
                   location.replace("music_web.php"); 
                   </script>
                   <?php
             }
             else{
                ?>
                      <script>
                          alert("Incorrect password");
                         </script>
                     <?php
             }

        }
        else{
            ?>
                      <script>
                          alert("Invalid email. Please Register Yourself to continue");
                         </script>
                     <?php
        }

    }
?>
<div class="card bg-light">
<article class="card-body mx-auto">
<h1 class="card-title mt-3 text-center"> Create Account</h1>
<h2><p class="text-center">Get started with your free account</p><br></h2>

<p><h2>
<a href=" https://accounts.google.com/ServiceLogin/signinchooser?service=mail&passive=true&rm=false&continue=https%3A%2F%2Fmail.google.com%2Fmail%2F&ss=1&scc=1&ltmpl=default&ltmplcache=2&emr=1&osid=1&flowName=GlifWebSignIn&flowEntry=ServiceLogin" class="btn btn-block btn-gmail">
Login via gmail </a>
</p></h2><br>

<p><h2>
<a href="https://www.facebook.com/ " class="btn btn-block btn-facebook">
Login via facebook</a>
</p></h2>



<p class="divider-text">
<span class="bg-light"> or </span>
</p>

<div class="main">
<form action=" <?php echo htmlentities($_SERVER['PHP_SELF']); ?>" method="POST"><h3>
<div class="form-group input-group">
<div class="input-group-prepend">
<span class="input-group-text"><i class="fa fa-user"></i></span>
</div>

E-mail Address:<input name="email" class="form-control" placeholder="Email Address" type="email" required>
</div>

<div class="form-group input-group">
<div class="input-group-prepend">
<span class="input-group-text"><i class="fa fa-lock"></i></span>
</div>
Password:<input class="form-control" placeholder="Create Password" type="password" name="password" value="" required>
</div>

<div class="form-group">
<button type="submit" name="submit" class="btn btn-primary btn-block">
<h2>Login Now</h2> </button>
</div>


<p class="text-center"><br> Don't Have an account? <a href="registration.php">SignUp Here</a></p>
</h3></form>
</div>

</article>

</div>
</body>
</html>


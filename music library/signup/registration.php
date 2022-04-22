
<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
<title>Registration</title>
<?php include 'css/style.php' ?>
</head>
<body>


<?php
include 'dbcon.php';

if(isset($_POST['submit'])){
    $username = mysqli_real_escape_string($con, $_POST['username']);
    $email = mysqli_real_escape_string($con, $_POST['email']);
    $mobile = mysqli_real_escape_string($con, $_POST['mobile']);
    $password = mysqli_real_escape_string($con, $_POST['password']);
    $cpassword = mysqli_real_escape_string($con, $_POST['cpassword']);

    $pass = password_hash($password, PASSWORD_BCRYPT);
    $cpass = password_hash($cpassword, PASSWORD_BCRYPT);

    $emailquery= "select * from registration where email='$email'";
    $query = mysqli_query($con, $emailquery);

    $emailcount = mysqli_num_rows($query);

    if($emailcount>0){
        ?>
        <script>
            alert("email already exists");
           </script>
       <?php
    }
    else{
        if($password === $cpassword){
            
            $insertquery = "insert into registration( username, email, mobile, password, cpassword) values('$username' , '$email' , '$mobile' , '$pass' , '$cpass')";

            $iquery = mysqli_query($con, $insertquery);

            if( $iquery)
        {
                   ?>
                      <script>
                          alert("registration successfull");
                         </script>
                     <?php
        }
     else
        {
                    ?>
                      <script>
                            alert("registration not successfull");
                       </script>
                    <?php
        }

        }
        else
        {
            ?>
            <script>
                alert("Passwords are not matching");
               </script>
           <?php
        }
    }




}




?>
<div class="card bg-light">
<article class="card-body mx-auto">
<h1 class="card-title mt-3 text-center"> Create Account</h1>
<h4><p class="text-center">Get started with your free account</p><br></h4>
<p><h5>
<a href=" https://accounts.google.com/ServiceLogin/signinchooser?service=mail&passive=true&rm=false&continue=https%3A%2F%2Fmail.google.com%2Fmail%2F&ss=1&scc=1&ltmpl=default&ltmplcache=2&emr=1&osid=1&flowName=GlifWebSignIn&flowEntry=ServiceLogin" class="btn btn-block btn-gmail">
Login via gmail </a>
</p></h5><br>

<p><h5>
<a href="https://www.facebook.com/ " class="btn btn-block btn-facebook">
Login via facebook</a>
</p></h5>



<p class="divider-text">
<span class="bg-light"> or </span>
</p>

<div class="main">
<form action ="<?php echo htmlentities($_SERVER['PHP_SELF']); ?>" method= "POST"><h3>
<div class="form-group input-group">
<div class="input-group-prepend">
<span class="input-group-text"><i class="fa fa-user"></i></span>
</div>
Name:<input name="username" class="form-control" placeholder="Full Name" type="text" required>
</div>

<div class="form-group input-group">
<div class="input-group-prepend">
<span class="input-group-text"><i class="fa fa-envelope"></i></span>
</div>
E-mail Address:<input name="email" class="form-control" placeholder="Email Address" type="email" required>
</div>

<div class="form-group input-group">
<div class="input-group-prepend">
<span class="input-group-text"><i class="fa fa-phone"></i></span>
</div>
Phone Number:<input name="mobile" class="form-control" placeholder="Phone Number" type="number" required>
</div>

<div class="form-group input-group">
<div class="input-group-prepend">
<span class="input-group-text"><i class="fa fa-lock"></i></span>
</div>
Password:<input class="form-control" placeholder="Create Password" type="password" name="password" value="" required>
</div>

<div class="form-group input-group">
<div class="input-group-prepend">
<span class="input-group-text"><i class="fa fa-lock"></i></span>
</div>
Confirm Password:<input class="form-control" placeholder="Repeat Password" type="password" name="cpassword" required><br><br>
</div>


<div class="form-group">
<button type="submit" name="submit" class="btn btn-primary btn-block">
<h2>Create Account</h2> </button>
</div>


<p class="text-center"><br> Have an account? <a href="login.php"> Log In</a></p>
</h3></form>
</div>

</article>

</div>
</div>
</div>
</div>

</body>
</html>








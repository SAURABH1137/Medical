<?php
session_start();
    include("../medical/navbar.html");
	include("../medical/connection/index.php");
?>
<html>
    <head>
    <title>MEDICAL STORE</title>
    </head>
    <body style="background-image: url('http://127.0.0.1:8080/medical/img/1.bmp'); background-repeat:no-repeat; background-position: center;">
    <div class="container pt-5 row no-gutters "> 
        <div class="rounded col-md-4 offset-md-5 rounded text-black " style="background-color: #008080;">
            <div class="col bg-white text-center p-2">
                <img src="http://127.0.0.1:8080/medical/img/logo1.bmp" alt=""  style='height:5rem; width:5rem;'>
            </div>  
            <div class="bg-white col p-1 shadow-lg">
                <p class="text-white  p-4 mb-3 h5 rounded col-xs-4" style='background-color: #008080;'>Login Form</p>  
                <form action="#" method="post" >
                    <div class="col mt-2">
                        <div class="col-md-8">
                        <label for="username"><i class="fas fa-user"></i> USERNAME </label>
                        </div>
                        <div class="col">
                            <input type="text" name="username" id="username" class="form-control">
                        </div>
                    </div>
                    <div class="col">
                        <div class="col-md-8">
                            <label for="password"><i class="fas fa-unlock-alt"></i> PASSWORD </label>
                        </div>
                        <div class="col">
                            <input type="password" name="password" id="password" class="form-control">
                        </div>
                    </div>
                    <div class="form-check ml-4 mt-2">
                        <input type="checkbox" class="form-check-input" id="dropdownCheck">
                        <label class="form-check-label" for="dropdownCheck">
                             Remember me
                        </label>
                    </div>
                    <div class="col">
                        <a href="register.php"><p class="text-right">Create Account</p></a>
                    </div>
                    <div class="col">
                        <input type="submit" value="LOGIN"  name="submit" class=" btn btn-primary">
                        <input type="reset" value="RESET" class="btn btn-danger">
                    </div> 
                </form>
            </div>
        </div>
    </body>
    <script src="../medical/javascript/sweet.js"></script>
</html>
<?php
if(isset($_POST['submit'])){
    $u=$_POST['username'];
    $p=$_POST['password'];

    if(!$conn){
        die("An error occured...");
    }else{
        $sql = "SELECT * FROM userlogin WHERE username='".$u."' AND password ='".$p."'";
        $result = mysqli_query($conn,$sql) or die("Query Unsuccessful.");
        if($result){
            if(mysqli_num_rows($result)<=0){
                echo "<script>swal('User Name or Password is Incorrect');</script>";
            }
        }
        $new = mysqli_num_rows($result);
        if($new==1){
            $_SESSION['username'] = $u;
            echo "<script> location.href='http://127.0.0.1:8080/medical/homepage.php'</script>";
        }
    }
}
?>  
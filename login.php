
<!DOCTYPE html>
<html>

<head>
    <title >HORIZON</title>
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

    <link rel="stylesheet" type="text/css" href="/css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:ital,wght@1,700&display=swap" rel="stylesheet">
    <link
        href="https://fonts.googleapis.com/css2?family=Cormorant+SC&family=Dancing+Script:wght@500&family=Oswald&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" type="text/css"
        href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@6.1.1/css/fontawesome.min.css">
     
<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
    <!-- Google Fonts links     -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300&display=swap" rel="stylesheet">
</head>


<header id="home" bg-warning>
    <nav class="navbar navbar-expand-lg navbar-light bg-white px-4 border-bottom fixed-top">
        <div class="container-fluid">
            <a class="navbar-brand fs-2" href="/"><span class="text-warning cursive">HORIZON </span>
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ms-auto mb-2 mb-lg-0 fs-5 text-center">
                    <li class="nav-item">
                        <a class="nav-link active " aria-current="page" href="index.php">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link  " href="#about">About Us</a>
                    </li>
                   
                    <li class="nav-item">
                        <a class="nav-link" href="#services">Services</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="#contact">Contact US</a>
                    </li>
                     <li class="nav-item">
                        <a class="nav-link" href="login.php">Login</a>
                
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="apply.php">Apply</a>
                
                    </li>


            </div>
        </div>
    </nav>

 <style>
  body {
    font-family: "Lato", sans-serif;
}



.main-head{
    height: 150px;
    background: #FFF;
   
}

.sidenav {
    height: 100%;
    background-color: #000;
    overflow-x: hidden;
    padding-top: 20px;
}


.main {
    padding: 0px 10px;
}

@media screen and (max-height: 450px) {
    .sidenav {padding-top: 15px;}
}

@media screen and (max-width: 450px) {
    .login-form{
        margin-top: 10%;
    }

    .register-form{
        margin-top: 10%;
    }
}

@media screen and (min-width: 768px){
    .main{
        margin-left: 40%; 
    }

    .sidenav{
        width: 40%;
        position: fixed;
        z-index: 1;
        top: 0;
        left: 0;
    }

    .login-form{
        margin-top: 80%;
    }

    .register-form{
        margin-top: 20%;
    }
}


.login-main-text{
    margin-top: 20%;
    padding: 60px;
    color: #fff;
}

.login-main-text h2{
    font-weight: 300;
}

.btn-black{
    background-color: #000 !important;
    color: #fff;
}
 </style>
<div class="sidenav">
         <div class="login-main-text">
            <h2>Application<br> Login Page</h2>
            <p>Login or register from here to access.</p>
         </div>
      </div>
      <div class="main">
         <div class="col-md-6 col-sm-12">
            <div class="login-form">
               <form action="connect.php
               " method="POST">
                  <div class="form-group">
                     <label>User Name</label>
                     <input type="text" class="form-control" placeholder="User Name">
                  </div>
                  <div class="form-group">
                     <label>Password</label>
                     <input type="password" class="form-control" placeholder="Password">
                  </div>
                  <button type="submit" class="btn btn-black">Login</button>
                  <button type="submit" class="btn btn-secondary">Register</button>
               </form>
                


                <?php
                $_SESSION_start();
                       if(isset($POST['login'])){
                        $connection = mysqli_connect("localhost","root","");
                        $db= mysqli_select_db($connection,"horizon");
                        $query="select * from Signup where email= '$_POST[email]'";
                        $query_run= mysqli_query($connection,$query); 
                        while($row = mysqli_fetch_assoc($query_run)){
                            if($row['email']== $_POST['email']){
                                if($row['password']==$_POST['password']){
                                    $_SESSION['username']== $row['username'];
                                    $_SESSION['email']==$row['email'];
                                    header("location:index.php");


                                }
                                else{
                                    echo "worng";
                                }
                            }
                            else{
                                echo"worng mail";
                            }
                        }

                                         }




                  

                ?>

            </div>
         </div>
      </div>




<?php
session_start();

if (isset($_SESSION['email']) && !empty($_SESSION['email'])) {
    header('location:profile.php');
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.4.1/css/bootstrap.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.min.css">
<link rel="stylesheet" href="style.css">
<title>Register</title>
</head>
<body>


<!--navigation-->
<nav class="navbar navbar-expand-lg navbar-light" style="background-color:#6158e5">
        <a class="navbar-brand" href="../index.php">BOOK ADDICTION</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup"
            aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link" href="#">shooping cart
                        <span id="shopcartnbr"  class="badge badge-pill badge-primary">0</span>
                    </a>
                </li>
            </ul>
        </div>
    </nav>
    <!--end navigation-->

<div class="container my-5">
        <form method="POST" action="../controllers/userController.php?event=register">
            <div class="form-row">
                
                    <div class="form-group col-md-5 mb-3">
                        <label for="firstname">Firstname :</label>
                        <input type="text" name="firstname" id="firstname" class="form-control">
                    </div>
              
                
                    <div class="form-group col-md-5 mb-3">
                        <label for="lastname">Lastname :</label>
                        <input type="text" name="lastname" id="lastname" class="form-control">
                    </div>
               
            </div>
            
                
            
            <div class="form-row">
                
                    <div class="form-group col-md-6 mb-3">
                        <label for="email">Email :</label>
                        <input type="email" name="email" id="email" class="form-control">
                    </div>
               
            </div>
            <div class="form-row">
                
                    <div class="form-group col-md-5 mb-3">
                        <label for="password">Password :</label>
                        <input type="password" name="password" id="password" class="form-control">
                    </div>

                    <div class="form-group col-md-5 mb-3">
                        <label for="repassword">RePassword :</label>
                        <input type="password" name="password" id="repassword" class="form-control">
                    </div>
                
            </div>
            <div class="form-row">
                
                    <div class="form-group col-md-5 mb-3">
                        <input type="submit" value="Register" class="btn btn-primary">
                    </div>
               
            </div>
        </form>
    </div>

    <br><br><br> <br> <br> <br>
        <!-- Footer -->
        <footer class="footer font-small bg-dark text-white-50 pt-4">
    
            <div class="footer-copyright text-center py-3">© 2020 Copyright: </div>    

        </footer>
        <!-- Footer -->

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.4.1/js/bootstrap.min.js"></script>
</body>
</html>
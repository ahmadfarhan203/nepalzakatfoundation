<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>Sign Up</title>
</head>
<body>


<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container-fluid">
         <a class="navbar-brand" href="index.php">Nepal Zakat Foundation</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ml-auto ">
                <li class="nav-item ">
                    <a class="nav-link" href="index.php">Home <span class="sr-only">
                    (Current)</span>
                    </a>
                </li>
                <li class="nav-item ">
                    <a class="nav-link" href="about.php">About</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="contact.php">Contact</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="login.php">Login</a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link" href="registrationform.php">Sign Up</a>
                </li>
            </ul>
                <form class="form-inline my-2 my-lg-0">
                    <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
                </form>
        </div>
     </div>
</nav>


</br>
</br>
</br>
</br>
</br>
    <div class="container">
        <h1>Sign Up</h1>
        <div class="row">
           <form  action="register.php" method="post">
                    <div class="form-group">
                        <label>Username</label>
                        <input type="text" name="username" class="form-control">
                    </div>
                         <div class="form-group">
                         <label>Name Surname</label>
                        <input type="text" name="name" class="form-control">
                         </div>
                         <div class="form-group">
                         <label>Address</label>
                        <input type="text" name="adress" class="form-control">
                         </div>
                         <div class="form-group">
                         <label>Phone Number</label>
                        <input type="text" name="phone" class="form-control">
                         </div>
                         <div class="form-group">
                         <label>Email</label>
                        <input type="email" name="email" class="form-control">
                         </div>
                        <div class="form-group">
                        <label>Password</label>
                        <input type="Password" name="pass" class="form-control">
                       </div>
                      <div class="form-group">
                        <label>Confirm Password</label>
                        <input type="Password" name="confirmpass" class="form-control">
                      </div>
                      
                      <button type="submit" name="submit" class="btn btn-primary">Register</button>
                      <a href="login.php" class="btn btn-primary" role="button">Login</a>
            </form>
        </div>
     </div>
</br>
</br>
</br>
</br>

<?php
include 'footer.php';
?>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>

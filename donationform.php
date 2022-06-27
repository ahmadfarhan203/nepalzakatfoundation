<?php
session_start();
if ( !isset($_SESSION['username']) ) {
     header('Location: login.php');
     exit();
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
   




    <title>Donation Form</title>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <a class="navbar-brand" href="#">Nepal Zakat Foundation </a>

    <div class="collapse navbar-collapse" id="navbarsupportedcontent">
<ul class="navbar-nav ml-auto">
<li class="nav-item active">
<a class="nav-link" href="logout.php">LogOut <span class="sr-only">
(Current)</span>
</a>
</li>   
</nav>


</br>
</br>
 <h1 class="text-center"> Start Your Donation Process Here</h1>
</br>
</br>
<hr>


<div class="container">
    <div class="row">
        <form  action="donation.php" method="post">
        <h2>Step 1: Choose the type of Donation</h2>
        <div class="form-group">
                <label>Email</label>
                <input type="email" name="email" class="form-control">
         </div>


        <div class="form-group">
            <label for="sel1">ZAKAT:</label>
            <select class="form-control" id="sel1" name="zakat">
                <option></option>
                <option>ZAKAT FUND</option>
            </select>
        </div>

        

        <div class="form-group">
            <label for="sel1">SADAQAH JARIYAH :</label>
            <select class="form-control" id="sel1" name="sadaqah">
                <option></option>
                <option>Water Well $3000</option>
                <option>MOSQUE CONSTRUCTION</option>
                <option>SCHOOL-COLLEGE</option>
                <option>HEALTH-HOSPITALS</option>
            </select>
        </div> 
        <div class="form-group">
             <label for="sel1">RELEIF</label>
            <select class="form-control" id="sel1"name ="releif">
                <option></option>
                <option>FLOOD</option>
                <option>FIRE</option>
                <option>EARTHQUAKE</option>
                <option>HOME CONSTRUCTION</option>

            </select>
        </div>

        <div class="form-group">
             <label for="sel1">ORPHAN CARE</label>
             <select class="form-control" id="sel1"name ="orphan">
                <option></option>
                <option>STUDY</option>
                <option>FOOD-CLOTHES</option>
            </select>
        </div>


        <h2>Step 2: Choose THE AMOUNT</h2>
        <div class="form-group">
            <label class="control-label">Amount*</label>
            <div class="radio">
                <label class="control-label">
                    <input type="radio" id="amount_25" name="amount" value="50" checked="">
                     $50
                </label>
            </div>
        </div>
        <div class="form-group">
             <div class="radio">
                 <label class="control-label">
                    <input type="radio" id="amount_50" name="amount" value="100">
                     $100
                </label>
            </div>
        </div>
        <div class="form-group">
            <div class="radio">
                 <label class="radio control-label">
                    <input type="radio" id="amount_100" name="amount" value="200">
                        $200
                </label>
            </div>
        </div>
    <div class="form-group">
      <div class="radio">
        <label class="control-label">
          <input type="radio" id="amount_100" name="amount" value="500">
          $500
        </label>
      </div>
    </div>
    <div class="form-group">
      <div class="radio">
        <label class="control-label">
          <input type="radio" id="amount_100" name="amount"value="1000">
          $1000
        </label>
      </div>
    </div>
    <div class="form-group">
      <div class="radio">
        <label class="control-label">
          <input type="radio" id="amount_other" name="amount">
          Other: $<input placeholder="" type="text" class="form-control" id="amount_actual" name="amount_actual" maxlength="5" data-rule-required="true" contenteditable="false">
        </label>
    </div>
    <button type="submit" name="insert" value="INSERT DATA" class="btn btn-primary">Donate</button>

            </form>
    </div>
</div>
</div>
</br>
</br>
</br>
</br>
</br>
<?php
include 'footer.php';
?>


</body>
</html>

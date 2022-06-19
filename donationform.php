<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<link href="https://fonts.googleapis.com/css?family=Josefin+Sans&display=swap" rel="stylesheet">
<link rel="stylesheet" href=" https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
<link rel="stylesheet" href="css/style.css">
    <title>Donation Form</title>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <a class="navbar-brand" href="#">Nepal Zakat Foundation</a>

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
          <input type="radio" id="amount_100" name="amount" value="500">>
          $500
        </label>
      </div>
    </div>
    <div class="form-group">
      <div class="radio">
        <label class="control-label">
          <input type="radio" id="amount_100" name="amount"value="1000">>
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
</br>
</br>
</br>
</br>
</br>
<footer class="bg-dark text-white pt-5 pb-4">

	<div class="container text-center text-md-left">

		<div class="row text-center text-md-left">

			<div class="col-md-3 col-lg-3 col-xl-3 mx-auto mt-3">
				<h5 class="text-uppercase mb-4 font-weight-bold text-warning">Nepal Zakat Foundation</h5>
				<p>Here you can use rows and columns to organize your footer content. Lorem ipsum dolor sit amet,
          ital consectetur lorem ipsum dolor sit amet adipisicing elit.</p>
				
			</div>

			<div class="col-md-2 col-lg-2 col-xl-2 mx-auto mt-3">
				<h5 class="text-uppercase mb-4 font-weight-bold text-warning">Products</h5>
			<p>
				<a href="#" class="text-white" style="text-decoration: none;"> TheProviders</a>
			</p>
			<p>
				<a href="#" class="text-white" style="text-decoration: none;"> Creativity</a>
			</p>
			<p>
				<a href="#" class="text-white" style="text-decoration: none;"> SourceFiles</a>
			</p>
			<p>
				<a href="#" class="text-white" style="text-decoration: none;"> bootstrap 5 alpha</a>
			</p>

			</div>

			<div class="col-md-3 col-lg-2 col-xl-2 mx-auto mt-3">
				<h5 class="text-uppercase mb-4 font-weight-bold text-warning">About Zakat</h5>
			<p>
				<a href="#https://www.islamic-relief.org/zakat/zakat-calculator/" class="text-white" style="text-decoration: none;">Zakat Calculator</a>
			</p>
			<p>
				<a href="https://en.wikipedia.org/wiki/Zakat" class="text-white" style="text-decoration: none;">Zakat</a>
			</p>
			<p>
				<a href="https://en.wikipedia.org/wiki/Sadaqah" class="text-white" style="text-decoration: none;">Sadaqah</a>
			</p>
			<p>
				<a href="https://en.wikipedia.org/wiki/Islam_and_children" class="text-white" style="text-decoration: none;">Orphan</a>
			</p>
			</div>

			<div class="col-md-4 col-lg-3 col-xl-3 mx-auto mt-3">
				<h5 class="text-uppercase mb-4 font-weight-bold text-warning" >Contact</h5>
				<p>
					<i class="fas fa-home mr-3"></i>Sagartole -2 Kapilvastu municipality taulihawa Nepal
				</p>
				<p>
					<i class="fas fa-envelope mr-3"></i>salamabdul129@gmail.com
				</p>
				<p>
					<i class="fas fa-phone mr-3"></i>+977 9813801266
				</p>
				<p>
					<i class="fas fa-id-card mr-3"></i>Abdul Salam
				</p>
			</div>
			
		</div>

		<hr class="mb-4">

		<div class="row align-items-center">

			<div class="col-md-7 col-lg-8">
				<p>	Copyright ©2020 All rights reserved by:
					<a href="#" style="text-decoration: none;">
						<strong class="text-warning">Nepal Zakat Foundation</strong>
					</a></p>
				
			</div>

			<div class="col-md-5 col-lg-4">
				<div class="text-center text-md-right">

					<ul class="list-unstyled list-inline">
						<li class="list-inline-item">
							<a href="Fb.com/NepalZakatFoundation" class="btn-floating btn-sm text-white" style="font-size: 23px;"><i class="fab fa-facebook"></i></a>
						</li>
						<li class="list-inline-item">
							<a href="#" class="btn-floating btn-sm text-white" style="font-size: 23px;"><i class="fab fa-instagram"></i></a>
						</li>
						<li class="list-inline-item">
							<a href="#" class="btn-floating btn-sm text-white" style="font-size: 23px;"><i class="fab fa-github"></i></a>
						</li>
						<li class="list-inline-item">
							<a href="https://www.youtube.com/channel/UCEN4Ps2BYX6HAn1fXLFThOg" class="btn-floating btn-sm text-white" style="font-size: 23px;"><i class="fab fa-youtube"></i></a>
						</li>
					</ul>
					
				</div>
				
			</div>
			
		</div>

	</div>
	
</footer>




<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</body>
</html>

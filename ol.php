

<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
 
</head>
<body>


<div id="demo" class="carousel slide" data-bs-ride="carousel">


  <div class="carousel-indicators">
    <button type="button" data-bs-target="#demo" data-bs-slide-to="0" class="active"></button>
    <button type="button" data-bs-target="#demo" data-bs-slide-to="1"></button>
    <button type="button" data-bs-target="#demo" data-bs-slide-to="2"></button>
  </div>
  
 
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="img\zakat1.png" alt="Los Angeles" class="d-block" style="width:100%">
      <div class="carousel-caption">
        <h3>Zakat</h3>
        <p>“And establish prayer and give zakat, and whatever good you put forward for yourselves  you will find it with Allah.” (2:110, Qur'an)</p>
      </div>
    </div>
    <div class="carousel-item">
      <img src="img\zakat4.png" alt="Chicago" class="d-block" style="width:100%">
      <div class="carousel-caption">
        <h3>Emergency Releif</h3>
        <p>In the Quran, Allah (swt) says: “Help one another in acts of piety and righteousness. 
						And do not assist each other in acts of sinfulness and transgression. And be aware of Allah. 
						Verily, Allah is severe in punishment” (Quran 5:2).</p>
      </div> 
    </div>
    <div class="carousel-item">
      <img src="img\zakat3.png" alt="New York" class="d-block" style="width:100%">
      <div class="carousel-caption">
        <h3>Sadaqah Jariya</h3>
        <p>The Qur'an reminds us that there is a “recognised right, for the needy and deprived” over our wealth (70:24-5)</p>
      </div>  
    </div>
  </div>

  <button class="carousel-control-prev" type="button" data-bs-target="#demo" data-bs-slide="prev">
    <span class="carousel-control-prev-icon"></span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#demo" data-bs-slide="next">
    <span class="carousel-control-next-icon"></span>
  </button>
</div>

<div class="container-fluid mt-3">
  <h3> </h3>
  <p> </p>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>

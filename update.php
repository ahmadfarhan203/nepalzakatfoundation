<?php
//mysql con kodunu ekliyoruz
include("config.php");

//sorguyu hazirliyoruz
$l = "SELECT * FROM donations WHERE donor_id =".$_GET['id'];

//sorguyu veritabanina gönderiyoruz.
$cevap = mysqli_query($con,$l);

//eger cevap FALSE ise hata yazdiriyoruz.      
if(!$cevap ){
    echo '<br>Hata:' . mysqli_error($con);
}


//veritabanından gelen cevabı alıyoruz.
$gelen=mysqli_fetch_array($cevap);
?>
<html>
<body>
<div class="container">
    <div class="row">
        <form  action="update.php?id=<?php echo $_GET['id'] ?>" method="post">
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
            <select class="form-control" id="sel1" name="sadaqah" >
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

</form>
</body>
</html>

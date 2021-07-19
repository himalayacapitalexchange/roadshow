
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>STO Application form</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <!--font awesome code-->
    <script src="https://use.fontawesome.com/cff3954bc0.js"></script>

    <link href="https://fonts.googleapis.com/css?family=Crimson+Text" rel="stylesheet">
    <!--main css-->
    <link href="css/custom.css" rel="stylesheet">
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="js/jquery.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>

  </head>
  <body>
    <section id="formpage">
      <div class="container con">
        <center>
          <br><br>
        <h1 style="font-size:40px;">
          Call for ICOs, STOs to pitch to funds and investors around the globe
        </h1>
       </center>
      </div>
    </section>

    <div class="jumbotron" style="background-color:rgba(0,0,0,0);margin-bottom:0px;padding-bottom:0px;">
      <center>
      <p style="font-size:22px;color:black;">All ICO's and STO's can <strong>apply here </strong>to join our 2019 Roadshow to meet funds one on one around the globe.</p>
    </center>
    </div>

    <section id="sto_form" style="padding:40px;">
      <div class="container">
          <div class="row">
            <div class="col-lg-offset-2 col-lg-8">
            <div class="panel panel-primary">
            <div class="panel-heading">Application Form</div>
            <div class="panel-body">

              <form method="post" action="validate.php" enctype="multipart/form-data">
                <div class="form-group">
                  <label for="text">Name of Security Token Offering:</label>
                  <input type="text" class="form-control" name="sto_name" id="sto">
                </div>
                <div class="form-group">
                  <label for="reg">Registered in Jurisdiction??:</label>
                  <input type="text" class="form-control" name="reg" id="reg">
                </div>
                <div class="form-group">
                  <label for="text">Does the STO have Regulatory Approvals necessary for above Jurisdiction??:</label>
                  <input type="text" class="form-control" name="approval" id="sto">
                </div>
                <div class="form-group">
                  <label for="reg">Address:</label>
                  <input type="text" class="form-control" name="addr" id="reg">
                </div>
                <div class="form-group">
                  <label for="text">Country:</label>
                  <input type="text" class="form-control" name="country" id="sto">
                </div>
                <div class="form-group">
                  <label for="reg">Size of STO Soft Cap:</label>
                  <input type="text" class="form-control" name="sto_soft" id="reg">
                </div>
                <div class="form-group">
                  <label for="text">Size of STO hard cap:</label>
                  <input type="text" class="form-control" name="sto_hard" id="sto">
                </div>
                <div class="form-group">
                  <label for="reg">What industry does the STO relate to?:</label>
                  <input type="text" class="form-control" name="industry" id="reg">
                </div>
                <div class="form-group">
                  <label for="text">Any Current Investment?:</label>
                  <input type="text" class="form-control" name="curr_invest" id="sto">
                </div>
                <div class="form-group">
                  <label for="reg">Size of Investment so far:</label>
                  <input type="text" class="form-control" name="invest" id="reg">
                </div>
                <div class="form-group">
                  <label for="text">How much % equity are you willing to divest to investors?:</label>
                  <input type="number" class="form-control" name="percent" id="sto">
                </div>
                <div class="form-group">
                  <label for="reg">Person 1:</label>
                  <input type="text" class="form-control" name="person1" id="reg">
                </div>
                <div class="form-group">
                  <label for="reg">Person 2:</label>
                  <input type="text" class="form-control" name="person2" id="reg">
                </div>
                <div class="form-group">
                  <label for="reg">Person 3:</label>
                  <input type="text" class="form-control" name="person3" id="reg">
                </div>
                <div class="form-group">
                  <label for="reg">Upload Pitch deck in pdf. (Max size:20MB):</label>
                  <span class="help-block">**The file should be in proper format**</span>
                  <input type="file" class="form-control" accept="application/pdf" name="file[]" id="reg">
                </div>
                <div class="form-group">
                  <label for="reg">Upload White paper in pdf. (Max size:20MB):</label>
                  <span class="help-block">**The file should be in proper format**</span>
                  <input type="file" class="form-control" accept="application/pdf" name="file[]" id="reg">
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
              </form>
            </div>
            <div class="panel-footer"><strong>**Kindly mail your STO name, Pitch and White paper to <a href="mailto:team@himalayalabs.com">team@himalayalabs.com</a> as well**</strong></div>
            </div>
            </div>
        </div>

      </div>
    </section>

    <!--FOOTER-->
        <footer style="background:black;min-height:120px;">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-sm-6 pt-4" style="padding-left:0; padding-right:0;padding:30px;">
                    <p class="follow"><e>Follow us at:</e></p>
                    <ul class="ftrlog">
                      <li style="display:inline" class="ml-3 wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.5s">
                           <a href="https://t.me/capitalcoinico" style="color:azure; "><img src="image/telegram.jpg" style="width: 30px" /></a>
                       </li>
                       <li style="display:inline" class="ml-3 wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.7s">
                           <a href="https://www.facebook.com/CapitalCoin11" style="color:azure;"><img src="image/facebook.jpg" style="width: 30px" /></a>
                       </li>
                       <li style="display:inline" class="ml-3 wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.9s">
                           <a href="https://twitter.com/CapitalCoinICO" style="color:azure;"><img src="image/twitter.png" style="width: 30px" /></a>
                       </li>
                       <li style="display:inline" class="ml-3 wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.9s">
                           <a href="https://medium.com/@misskhan" style="color:azure;"><img src="image/medium.png" style="width: 30px" /></a>
                       </li>
                       <li style="display:inline" class="ml-3 wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.9s">
                           <a href="https://www.youtube.com/channel/UCVCH2nzRycVWhfnn3qGSM8Q" style="color:azure;"><img src="image/youtube-512.png" style="width: 30px" /></a>
                       </li>
                       <li style="display:inline" class="ml-3 wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.9s">
                           <a href="http://himalayacrypto.show/" style="color:azure;"><img src="image/website.png" style="width: 30px" /></a>
                       </li>

                    </ul>
                </div>
                <div class="col-lg-6 col-sm-6 pt" style="padding-left:0; padding-right:0;padding:20px;">
                    <br>
                    <p class="ftrcpr">Copyright © Himalaya Labs Limited</p>
                </div>
            </div>
        </div>
    </footer>




   <!--javascript-->
   <script src="js/main.js" charset="utf-8"></script>

  </body>
</html>

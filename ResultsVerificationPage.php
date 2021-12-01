<!DOCTYPE html>
<html lang="en">
<head>
  <title>CSC 642 848 Fall 2021 Individual Assignment Marco Marino Data survey Form</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <script src="https://www.google.com/recaptcha/api.js" async defer></script>
  <script src="https://polyfill.io/v3/polyfill.min.js?features=default"></script>

  <script>
    let map;

    function initMap(){
      const sfsuCoord = {lat:37.7241, lng:-122.4799};
      map = new google.maps.Map(document.getElementById("map"),{
        center: sfsuCoord,
        zoom: 8,
      });

      new google.maps.Marker({
        position:sfsuCoord,
        map,
        title: "SFSU",
      });
    }

  </script>

</head>
<body style="background-color:rgb(156, 168, 168)">

<div style ="background-color: rgb(126, 130, 133); color:ghostwhite" class="jumbotron bg-primary text-center">
  <h2>Results verification page Marco Marino</h2>
  <p>Data results Form</p> 
</div>

<div class="container">
  <div class="row">
    <div class="col-sm-4"></div>
    <div class="col-sm-8">
      <div class="col-xs-4">
        <label ><u>Last, First name:</u></label>
        <p id="totalnameresult"></p>
      </div>
      <div class="col-xs-3">
        <label><u>Preferred Title:</u></label>
        <p id="prefTitle"></p>
      </div>
    </div>
  </div>
  <div class="row">
    <div class="col-sm-4"></div>
    <div class="col-sm-8">
      <div class="col-xs-4">
        <label ><u>Height:</u></label>
        <p id="userHeight"></p>
      </div>
      <div class="col-xs-3">
        <label><u>Phone number:</u></label>
        <p id="userphone"></p>
      </div>
    </div>
  </div>
  <div class="row">
    <div class="col-sm-4"></div>
    <div class="col-sm-8">
      <div class="col-xs-4">
        <label ><u>Address:</u></label>
        <p id="userAddress"></p>
      </div>
      <div class="col-xs-3">
        <label><u>Zipcode:</u></label>
        <p id="userzip"></p>
      </div>
    </div>
  </div>
  <div class="row">
    <div class="col-sm-4"></div>
    <div class="col-sm-8">
    <div class="col-xs-4">
        <label ><u>Services Requested:</u></label>
        <p id="emailService"></p>
        <p id="phoneService"></p>
        <p id="facebookService"></p>
        <p id="tweeterService"></p>
        <p id="surfacemailService"></p>
        <p id="personalvisitService"></p>
      </div>
      <div class="col-xs-3">
        <label><u>Budget:</u></label>
        <p id="userbudget"></p>
      </div>
    </div>
  </div>
  <div class="row">
    <div class="col-sm-4"></div>
    <div class="col-sm-8">
    <div class="col-xs-4">
      <label><u>Email:</u></label>
      <p id="useremail"></p>
    </div>
    </div>
  </div>
    <br>
    <div id="map" style="width:50%; height:400px; left:300px;"></div>

    <script
      src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDAvIHKuWYct413NDzjOEf5C4HdqaEF00Y&callback=initMap&v=weekly"
      async
    ></script>

</div>
<footer><br><br><br><br><br></footer>

</body>

<script>
    document.getElementById("totalnameresult").innerHTML = sessionStorage.getItem("lastname") + ", " + sessionStorage.getItem("firstname");
    document.getElementById("prefTitle").innerHTML = sessionStorage.getItem("title");
    document.getElementById("userHeight").innerHTML = sessionStorage.getItem("feetHeight") + "'" + sessionStorage.getItem("inchesHeight") + "\" ";
    document.getElementById("userphone").innerHTML = sessionStorage.getItem("userPhone");
    document.getElementById("userAddress").innerHTML = sessionStorage.getItem("userAddress");
    document.getElementById("userzip").innerHTML = sessionStorage.getItem("userZipcode");

    if( sessionStorage.getItem("userEmailCheck") == 'true'){
      document.getElementById("emailService").innerHTML = "Email service: YES";
    }else{
      document.getElementById("emailService").innerHTML = "Email service: NO";
    }

    if( sessionStorage.getItem("userPhoneCheck") == 'true'){
      document.getElementById("phoneService").innerHTML = "Phone service: YES";
    }else{
      document.getElementById("phoneService").innerHTML = "Phone service: NO";
    }

    if( sessionStorage.getItem("userFacebookCheck") == 'true'){
      document.getElementById("facebookService").innerHTML = "Facebook service: YES";
    }else{
      document.getElementById("facebookService").innerHTML = "Facebook service: NO";
    }

    if( sessionStorage.getItem("userTweeterCheck") == 'true'){
      document.getElementById("tweeterService").innerHTML = "Tweeter service: YES";
    }else{
      document.getElementById("tweeterService").innerHTML = "Tweeter service: NO";
    }

    if( sessionStorage.getItem("userSurfaceMailCheck") == 'true'){
      document.getElementById("surfacemailService").innerHTML = "Surface Mail service: YES";
    }else{
      document.getElementById("surfacemailService").innerHTML = "Surface Mail service: NO";
    }

    if( sessionStorage.getItem("userPersonalVisitCheck") == 'true'){
      document.getElementById("personalvisitService").innerHTML = "Personal Visit service: YES";
    }else{
      document.getElementById("personalvisitService").innerHTML = "Personal Visit service: NO";
    }

    document.getElementById("userbudget").innerHTML = sessionStorage.getItem("userBudget");
    document.getElementById("useremail").innerHTML = sessionStorage.getItem("userEmail");

         
  </script>
</html>
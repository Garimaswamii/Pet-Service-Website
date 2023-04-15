<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0 " />

  <link rel="stylesheet" href="/css/dogwalking.css" />

  <title>DOG WALKING</title>
</head>

<body>
  <nav>
    <!-- <a href="services.php">service</a>
    <a href="appointment.php">appointment</a>
    <a href="Reschedule.php">reschedule</a> -->
  </nav>

  <div class="dropdown">
    <button onclick="myFunction()" class="dropbtn">SERVICES</button>
    <div id="myDropdown" class="dropdown-content">
      <a href="petgrooming.php">Pet Grooming</a>
      <a href="petboarding.php">Pet Boarding</a>
      <a href="dogwalking.php">Dog Walking</a>
      <a href="dogbehaviourist.php">Dog Behaviourist</a>

    </div>
  </div>

  <script>
    /* When the user clicks on the button, 
toggle between hiding and showing the dropdown content */
    function myFunction() {
      document.getElementById("myDropdown").classList.toggle("show");
    }

    // Close the dropdown if the user clicks outside of it
    window.onclick = function(event) {
      if (!event.target.matches('.dropbtn')) {
        var dropdowns = document.getElementsByClassName("dropdown-content");
        var i;
        for (i = 0; i < dropdowns.length; i++) {
          var openDropdown = dropdowns[i];
          if (openDropdown.classList.contains('show')) {
            openDropdown.classList.remove('show');
          }
        }
      }
    }
  </script>
  <h6 class="dwh"><strong>DOG WALKING</strong></h6>
  <br>
  <img class="dwimg1" src="img/dwimg1.webp">
  <p class="dw1">Busy day at work or traveling out of town? When it comes to walking your dog, you may<br /> be a bit short on time. Thanks to Park's Paws dog walking service , you can <br />provide your furry friend with regular exercise, much needed socialisation or potty <br />breaks.
    <br />
    <br /> We know your dog means the world to you, and when it comes to their daily walks there cannot be any compromises.
    <br />Therefore, all of our dog walkers undergo a rigorous training program and an enhanced background check. Park's Paws expert dog walkers are dedicated to ensuring that your dog receives the daily physical activity they require to stay fit and healthy.
    <br />
    <br />
    Park's Paws dog walking services offer a convenient and reliable solution for providing your furry <br />companion with the regular exercise they need to maintain a healthy lifestyle.
    <br /> With Park's Paws app, you can easily book a walk for your dog at the tap of a button and even track their walk path and daily walks.
    <br />Trust Park's Paws to give your beloved pet the best dog walking service.
  </p>
  <br />
  <img class="dwimg2" src="img/dog_walking_importance.webp">
  <br />
  <center class="dw2">
    <p><u><b>How it Works</b></u></p>
  </center>
  <img class="dwimg3" src="img/dogw.png">
  <p class="dw3">

    We at Park's Paws, a premier provider of dog walking services, offers 5-star rated service that is tailored to meet
    the unique needs of your dog. Our trained and experienced dog walkers will come to your location at a time that is convenient for you and take your beloved
    pet for a fun and invigorating walk of 30 minutes. Whether you need just one walk a day or multiple walks,
    we have got you covered.<br />
    <CENTER>
      <p class="dw4"><b>Book your first walk now</b></p>
    </CENTER>

    <a href="appointment.php ">
      <button class="dwbtn">BOOK NOW</button>
    </a>
  </p>


  <style>
    body {
      background-image: url('img/dog background.jpg');
    }

    .dropbtn {
      color: white;
      padding: 16px;
      font-size: 14px;
      border: none;
      cursor: pointer;
      margin-left: 1250px;
      background-color: rgb(30, 148, 144);
      border-radius: 8px;
    }

    .dropbtn:hover,
    .dropbtn:focus {
      background-color: rgb(101, 191, 188);
      transform: scale(1.15);
      cursor: pointer;
    }

    .dropdown {
      position: relative;
      display: inline-block;
    }

    .dropdown-content {
      margin-left: 1250px;
      display: none;
      position: absolute;
      background-color: #f1f1f1;
      min-width: 160px;
      overflow: auto;
      box-shadow: 0px 8px 16px 0px rgba(0, 0, 0, 0.2);
      z-index: 1;
    }

    .dropdown-content a {
      color: black;
      padding: 12px 16px;
      text-decoration: none;
      display: block;
    }

    .dropdown a:hover {
      background-color: rgb(101, 191, 188);
    }

    .show {
      display: block;
    }

    .dw1 {

      margin-left: 40px;
      margin-right: 40px;
      color: rgb(82, 183, 160);
      text-align: center;
      font-size: 20px;
      /* font-family: "Quicksand", Sans-serif; */
      font-style: italic;
    }

    .dwimg1 {
      background-color: rgb(82, 183, 182);
      width: 1200px;
      margin-left: 100px;
      margin-top: -70px;
    }

    .dwh {
      margin-top: 2%;
      font-size: 55px;
      text-align: center;
      font-style: italic;
      color: rgb(30, 148, 144);
    }

    .dwimg2 {
      margin-left: 17%;
      width: 1000px;
    }

    .dwimg3 {
      float: left;
      width: 600px;
      margin-left: 16%;
    }

    .dw2 {
      color: rgb(82, 183, 182);
      text-align: center;
      font-size: 50px;
      /* font-family: "Quicksand", Sans-serif; */
      font-style: italic;
      margin-left: 8%;

    }

    .dw3 {

      font-size: 23px;
      color: rgb(82, 183, 182);

      margin-left: 60px;
      /* font-family: "Quicksand", Sans-serif; */
      font-style: italic;
      margin-right: 30%
    }

    .dw4 {
      text-align: center;
      color: rgb(82, 183, 182);
      font-size: 20px;
      font-style: italic;
    }

    .dwbtn {
      background-color: rgb(30, 148, 144);
      display: inline-block;
      text-align: center;
      text-decoration: none;
      font-size: 1.3rem;
      border-radius: 8px;
      color: white;
    }
  </style>
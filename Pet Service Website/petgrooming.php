<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0 " />

  <link rel="stylesheet" href="/css/Petboarding.css" />

  <title>PET GROOMING</title>
</head>

<body>
  <nav>
    <!-- <a href="services.php">service</a>
    <a href="appointment.php">appointment</a>
    <a href="Reschedule.php">reschedule</a> -->
  </nav>

  <br />
  <h6 class="pg1">PET GROOMING</h6>
  <br />

  <body>

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
    <img class="pgimg1" src="img/pet grooming.png ">


    <p class="pg2">
      Park's Paws is the leading pet grooming home service provider ,we provide convenient, flexible and cost-effective pet grooming home services. <br /><br />
      Park's Paws pet grooming packages include a bath with shampoo and conditioner, full body hair trimming, nail cutting, ear cleaning, tick and flea treatment, and much more. <br /> <br />
      Whether you are looking for a basic dog bath or a stylish dog hair cut, Park's Paws dog groomers have got you covered. For cats, we have specialized teams of professional cat groomers that can make your cat fall in love with their grooming sessions. <br /> <br />
      Park's Paws cat grooming and dog grooming at home service are the most dependable and trustworthy home pet grooming service . <br /> <br />
      Our professional pet groomers use premium quality products and equipment that are specially designed for your pets comfort and excellent coat health.<br /><br />
      We offer different pet grooming packages to suit your pets grooming needs. <br /><br />
      You can book a pet grooming session for your dog or cat based on your pet's specific requirements. <br /> <br />
      With Park's Paws, get a pet salon like experience at home!
    </p>
    <h6 class="pg3">Our <b>SERVICES</b></h6>
    <img class="pgimg2" src="img/petgroomingimg2.webp">
    <p class="pg4"> <b><u>How does this benefit you?</u></b>
      </br>Your pet will look and smell better
      </br>Prevents matting and tangling of the fur
      </br>Prevents fleas, ticks and mites
      </br>No overgrown nails
      </br>Improved oral health and clean ears
      </br>Your pet will be comfortable after their session
    </p>
    <p>
      </br>
      </br>
      <img class="pgimg3" src="img/petgroomingimg3.webp">
      </br>
      </br>
      </br>
    <p class="pg5"> <b><u>How you will benefit?</u></b>
      </br> Keep you aware of the pet's health
      </br> Prevent unnecessary medical bills by keeping ear infections in check
      </br> Better smelling pet
      </br> No more fur all over you and your home
      </br> Comfortable, clean and groomed pet is a happy pet
      </br><b>BOOK YOUR SERVICE AT 999/-</b>
    </p>

    <a href="appointment.php ">
      <center> <button class="pgbtn">BOOK NOW</button> </center>
    </a>
    </br>
    <center><a href="register.php ">
        <button class="logout">Logout</button>
      </a></center>

    <style>
      .logout {
        background-color: rgb(30, 148, 144);
        display: inline-block;
        text-decoration: none;
        font-size: 1.6rem;
        border-radius: 10px;
        color: white;
        position: relative;
      }

      .pg1 {

        font-size: 50px;
        margin-bottom: -5px;
        margin-top: -10px;
        text-align: center;
        font-style: italic;
        color: rgb(30, 148, 144);
      }

      .pgimg1 {
        margin-left: 8%;
        width: 800px;
        transform: translate(30%);
        top: 10%;
        z-index: 1;
      }

      .pg2 {
        color: rgb(82, 183, 182);
        font-size: 18px;
        /* font-family: "Quicksand", Sans-serif; */
        font-style: italic;
        text-align: center;
        margin-left: 100px;
      }

      .pg3 {
        font-size: 45px;
        margin-top: 4.5%;
        margin-left: 54%;
        font-style: italic;
        color: rgb(30, 148, 144);
        text-decoration: underline;
      }

      .pgimg2 {
        margin-top: -80px;
        width: 400px;
        float: left;
        margin-left: 15%;
      }

      .pg4 {
        color: rgb(82, 183, 182);
        font-size: 24px;
        /* font-family: "Quicksand", Sans-serif; */
        font-style: italic;
        text-align: left;
        margin-left: 100px;
        line-height: 50px;
        margin-top: -40px;
      }

      .pgimg3 {
        width: 500px;
        float: right;
        margin-right: 10%;
      }

      .pg5 {
        color: rgb(82, 183, 182);
        font-size: 24px;
        /* font-family: "Quicksand", Sans-serif; */
        font-style: italic;
        text-align: left;
        margin-left: 220px;
        line-height: 50px;
        margin-top: -40px;
      }

      .pgbtn {
        background-color: rgb(30, 148, 144);
        display: inline-block;
        text-decoration: none;
        font-size: 1.3rem;
        border-radius: 8px;
        color: white;
        position: relative;
      }

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
    </style>
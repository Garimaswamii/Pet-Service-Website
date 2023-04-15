<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0 " />

  <link rel="stylesheet" href="/css/Petboarding.css" />

  <title>PET BOARDING</title>
</head>

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

  <div>
    <h4 class="pb-h">
      <center>Pet Boarding in Bangalore</center>
    </h4>
    <center>
      <p class="pbpara">Discover affordable home pet boarding services for your furry friend with a caring pet sitter in your neighbourhood.</p>
    </center>
    <img class="pb" src="img/pet boarding.png">
    <center>
      <h5 class="pb-h2">A Home Away From Home with Park's Paws Pet Boarding</h5>
    </center>
    <center>
      <p class="pb-h3">Your pet’s care is our priority – be it on a short weekend getaway or a long vacation. We provide the
        <b>best home pet boarding in Bangalore for cats and dogs </b>with the utmost care and safety while you relax, unwind, recharge. You don't have to look for a cat/dog care centre or a doggy day-care either. Let our devoted pet boarders treat your fur-babies with the love and care they deserve. We provide constant updates of all the woofs and meows, keeping a track of their activities.
      </p>
    </center>

    <center>

      <p class="pb-h4"><strong>Why Choose park's Paws for Pet Boarding?</strong></p>
      <p class="pb-h5">At Park's Paws, we understand that leaving your pet behind can be a difficult decision. That’s why we strive to provide a home-like environment for your furry companion during their stay with us. </p>
      <p class="pb-h6">Our Pet Boarding service provides a comfortable and safe environment for your pet, with home like facility. We do not use kennels or cages, instead, We provide certified pet borders who gives your pet a home like love and care while you are away.</p>
      <p class="pb-h7">Choose Park's Paws for your pet boarding needs and rest assured that your pet is in good hands.</p>
      <p><br /></p>

      <p class="pb-h8"><strong>Worried about the home your pet is going to stay in? Worry no further!</strong></p>
      <p class="pb-h9">Park's Paws ensures a safe, comfortable and nurturing environment for your fur baby, our pawstars boarders guarantee a safe, secure, pet proofed, hygienic, and a pet friendly habitat to make them feel right at home.</p>

      <p><br /></p>
      <p class="pb-h10"><strong>Our Pet Boarding Services charges</strong></p>
      <p class="pb-11"><strong>749/-</strong></p>
      <a href="appointment.php ">
        <BR /><button class="pbbtn">BOOK NOW</button></h6>
      </a>
      </br>
      </br>
      <center><a href="register.php ">
          <button class="logout">Logout</button>
        </a></center>
    </center>
</body>
</div>
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

  .pb {
    width: 900px;
    transform: translate(30%);
    top: 10%;
    z-index: 1;
    /* --content-transition-duration: 800ms;
      --content-transition-delay: 800ms;  */
  }

  .pb-h {

    margin-left: 40px;
    margin-right: 40px;
    font-size: 50px;
    margin-bottom: -4px;
    margin-top: 1px;
    text-align: center;
    font-style: italic;
    color: rgb(30, 148, 144);
  }

  .pbpara {

    margin-left: 40px;
    margin-right: 40px;
    color: rgb(82, 183, 182);
    text-align: center;
    font-size: 18px;
    /* font-family: "Quicksand", Sans-serif; */
    font-style: italic;
  }

  .pb-h2 {

    margin-left: 40px;
    margin-right: 40px;
    font-style: bold;
    text-decoration: underline;
    font-family: "Quicksand", Sans-serif;
    color: rgb(30, 148, 144);
    font-size: 25px;

  }

  .pb-h3 {

    margin-left: 40px;
    margin-right: 40px;
    font-style: bold;
    font-family: "Quicksand", Sans-serif;
    font-size: 16px;
    color: rgb(82, 183, 182);
  }

  .pb-h4 {

    margin-left: 50px;
    margin-right: 50px;
    font-style: bold;
    font-family: "Quicksand", Sans-serif;
    font-size: 25px;
    color: rgb(30, 148, 144);

  }

  .pb-h5 {

    margin-left: 50px;
    margin-right: 50px;
    font-family: "Quicksand", Sans-serif;
    font-size: 18px;
    color: rgb(82, 183, 182);
  }

  .pb-h6 {

    margin-left: 50px;
    margin-right: 50px;
    font-family: "Quicksand", Sans-serif;
    font-size: 17px;
    color: rgb(82, 183, 182);
  }

  .pb-h7 {

    margin-left: 50px;
    margin-right: 50px;
    font-family: "Quicksand", Sans-serif;
    font-size: 17px;
    color: rgb(82, 183, 182);
  }

  .pb-h8 {

    margin-left: 50px;
    margin-right: 50px;
    font-style: bold;
    font-family: "Quicksand", Sans-serif;
    color: rgb(30, 148, 144);
    font-size: 25px;
  }

  .pb-h9 {

    margin-left: 50px;
    margin-right: 50px;
    font-style: bold;
    font-family: "Quicksand", Sans-serif;
    color: rgb(82, 183, 182);
    font-size: large;
  }

  .pb-h10 {

    margin-left: 50px;
    margin-right: 50px;
    font-style: bold;
    font-family: "Quicksand", Sans-serif;
    color: rgb(30, 148, 144);
    font-size: 30px;
    text-decoration: underline;
  }

  .pb-11 {

    margin-left: 40px;
    margin-right: 40px;
    color: rgb(19, 121, 118);
    font-size: 30px;
  }

  .pbbtn {

    background-color: rgb(30, 148, 144);
    display: inline-block;
    text-align: center;
    text-decoration: none;
    font-size: 1.3rem;
    border-radius: 8px;
    color: white;
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
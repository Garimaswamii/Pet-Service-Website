<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0 " />

  <link rel="stylesheet" href="/css/style.css" />
</head>

<div class="dropdown">
  <button onclick="myFunction()" class="dropbtn">SERVICES</button>
  <div id="myDropdown" class="dropdown-content">
    <a href="petgrooming.php">Pet Grooming</a>
    <a href="petboarding.php">Pet Boarding</a>
    <a href="dogwalking.php">Dog Walking</a>
    <a href="dogbehaviourist.php">Dog Behaviourist</a>
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

<title>PARK'S PAWS</title>

<body>
  <form action="" method="post">
    <img class="title-img" src="img/logo.png" />

    <h6 class="title-heading">PARK'S PAWS
    </h6>


    <img class="pet-sitter" src="img/pet sitter.avif " />
    <h4 class="context">
      A cozy place with a loving sitter</h4>
  </form>
</body>


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

  .signinbtn {
    position: fixed;
    top: 30px;
    right: 50px;
    background-color: rgb(30, 148, 144);
    display: inline-block;
    text-align: center;
    text-decoration: none;
    font-size: 1.2rem;
    border-radius: 8px;
    color: white;
  }

  .signinbtn:hover {
    background-color: rgb(101, 191, 188);
  }

  .title-img {
    width: 230px;
    position: absolute;
    z-index: 1;
    border-radius: 200px;
    transform: translate(-50%, -50%);
    top: 15%;
    left: 50%;
  }

  .pet-sitter {

    border-radius: 50px;
    width: 1300px;
    margin-top: -8%;
    margin-left: 4.5%;
  }


  .context {
    text-align: center;
    font-size: 2rem;
    color: rgb(30, 148, 144);
    font-weight: 700;
    /*font: inherit;*/
    display: block;
    font-family: "Helvetica Neue", Helvetica, Arial, sans-serif;
    line-height: 0rem;
  }


  .title-heading {
    color: rgb(30, 148, 144);
    font-size: 3.5rem;
    font-weight: bold;
    text-align: center;
    text-align: top;
    font-style: oblique;
    z-index: 5;
    position: relative;

  }

  .process {
    width: 75rem;
    padding-left: 8%;
  }

  .appointmentbtn {
    /* margin-top: 5%; */
    margin-left: 1150px;
    background-color: rgb(30, 148, 144);
    display: inline-block;
    text-align: center;
    text-decoration: none;
    font-size: 1rem;
    border-radius: 8px;
    color: white;
  }

  .appointment:hover {
    background-color: rgb(101, 191, 188);

  }
</style>
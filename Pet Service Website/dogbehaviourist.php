<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0 " />

  <link rel="stylesheet" href="/css/dogbehaviourist.css" />
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

  <title>Dog Behaviourist</title>
</head>

<body>

  <h6 class="dbh">Dog Behaviourist</h6>
  <br />
  <img class="dbimg" src=" img/behavioural_training_services_in_bangalore.png">
  <P class="db1">
    <centre>Park's Paws dog training service offers a variety of customized plans for dogs of all ages and breeds. Be it simple problems like nipping, irregular bathroom habits, or complex ones like separation anxiety, or pet socialization our behavior experts have solutions for all. All dog trainers working on the platform are experienced and certified, additionally, they undergo a rigorous onboarding process also as part of our process. They are passionate about helping pet parents communicate effectively with their dogs and address common behavioral concerns.</centre>
  </P>

  <p class="db2">Park's Paws dog training service is dedicated to providing the best pet training experience for both dogs and their Hoomans. We strongly believe in empowering pet parents to be an integral part of the training process to ensure that you reap lifelong benefits of the success achieved in the training program.</P>
  <br />
  <img class="dbimg2" src="img/dog_behaviourist_benefits.webp">
  <br />
  <br />
  <p class="db3">How <strong>It
      WORKS</strong></p>
  <br />
  <br />
  <br />

  <img class="dbimg3" src="img/db3.png">
  <p class="db4">Our group of certified trainers conduct one on one training
    <br />sessions at your home without your pet facing the anxiety of
    <br /> being sent away in a kennel. They use positive reinforcement
    <br />techniques to ensure that your dog learns to understand
    <br />your body language and voice tones and respond to it accordingly.
  </p>
  <p class="db5"><strong>Customized plans to fit your needs</strong>
    <br />
    <strong>We work with pets of all breeds, sizes and age</strong>
    <br />
    <strong> Regular support </strong>
    <br />
    <strong> Enabling pet parents
  </p></strong>
  <br />
  <br />
  <p class="db6">What <strong><u>all We Do</u></strong>
  </p>
  <img class="dbimg4" src="img/dog_behaviourist_importance_mobile.png">
  <br />
  <h6 class="db7">Book trail for your Dog at 499/-

    <a href="appointment.php ">
      <BR /><button class="dbbtn">BOOK NOW</button>
  </h6>
  </a>
  <center><a href="register.php ">
      <button class="logout">Logout</button>
    </a></center>
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

  .logout {
    background-color: rgb(30, 148, 144);
    display: inline-block;
    text-decoration: none;
    font-size: 1.6rem;
    border-radius: 10px;
    color: white;
    position: relative;
  }

  .dbimg {
    margin-left: 25%;
    width: 500px;
    transform: translate(30%);
    top: 10%;
    z-index: 1;
  }

  .dbimg6 {
    width: 20px;
    background-color: rgb(82, 183, 182);

  }

  .dbh {
    font-size: 50px;
    margin-bottom: -10px;
    margin-top: -15px;
    text-align: center;
    font-style: italic;
    color: rgb(30, 148, 144);
  }

  .db1 {
    margin-left: 40px;
    margin-right: 40px;
    color: rgb(82, 183, 182);
    text-align: center;
    font-size: 18px;
    /* font-family: "Quicksand", Sans-serif; */
    font-style: italic;
  }

  .db2 {

    margin-left: 40px;
    margin-right: 40px;
    color: rgb(82, 183, 182);
    text-align: center;
    font-size: 18px;
    /* font-family: "Quicksand", Sans-serif; */
    font-style: italic;
  }

  .dbimg2 {
    margin-top: 25px;
    width: 1200px;

    margin-left: 10%;
  }

  .db3 {
    font-size: 50px;
    margin-bottom: -5px;
    margin-top: 20px;
    text-align: center;
    font-style: italic;
    color: rgb(30, 148, 144);
    text-decoration: underline;

  }

  .dbimg3 {
    margin-left: 150px;
    width: 350px;
    float: left;

  }

  .db4 {
    color: rgb(82, 183, 182);
    font-size: 28px;
    /* font-family: "Quicksand", Sans-serif; */
    font-style: italic;

    margin-left: 100px;
  }

  .db5 {

    margin-left: 60px;
    margin-right: 60px;
    color: rgb(82, 183, 182);
    font-size: 30px;
    font-style: italic;

    /* font-family: "Quicksand", Sans-serif; */
  }

  .dbimg4 {
    width: 800px;
    height: 600px;
    margin-left: 25%;

  }

  .db6 {
    text-align: center;
    font-style: italic;
    color: rgb(30, 148, 144);
    text-decoration: wavy;
    font-size: 50px;
  }

  .db7 {

    text-align: center;
    font-style: italic;
    color: rgb(30, 148, 144);
    text-decoration: wavy;
    font-size: 50px;
  }

  .dbbtn {

    background-color: rgb(30, 148, 144);
    display: inline-block;
    text-align: center;
    text-decoration: none;
    font-size: 1.6rem;
    border-radius: 8px;
    color: white;
  }

  .dbbtn:hover {
    background-color: rgb(82, 183, 182);
  }
</style>
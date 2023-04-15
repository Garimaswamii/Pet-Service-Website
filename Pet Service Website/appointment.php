<html>

<head>
  <title>book Appointment </title>
</head>

<style>
  .box {
    /* background: radial-gradient(rgb(193, 238, 235), rgb(30, 148, 144)); */
    background-image: url("img/dog background.jpg");
    height: 100vh;
    width: 100vw;
  }

  form {
    display: flex;
    flex-direction: column;
    align-items: center;
    height: 600px;
    width: 400px;
    /* background-color: white; */
    justify-content: center;
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
    box-shadow: 0 19px 38px rgb(30, 148, 144), 0 15px 12px rgb(30, 148, 144);
    border: none;
    border-radius: 10px;
  }

  form input {
    background-color: rgb(193, 238, 235);
    width: 250px;
    margin: 20px 0;
    height: 30px;
    border: none;
    border-radius: 10px;
    text-align: center;
    transition: 0.3s ease;
    opacity: 0.6;
  }

  input:focus {
    width: 300px;
    opacity: 1;
  }

  button {
    width: 150px;
    background-color: rgb(30, 148, 144);
    color: white;
    border: none;
    border-radius: 10px;
    height: 30px;
    transition: 0.2s ease;

  }

  button:hover {
    transform: scale(1.15);
    cursor: pointer;
    background-color: rgb(30, 135, 144);
  }

  h1 {
    font-size: 40px;
    color: transparent;
    -webkit-text-stroke: 1px rgb(30, 148, 144);
  }
</style>


<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {

  // $host = $_POST['localhost'];
  $servicetype = $_POST['service'];
  $bookingdate = $_POST['booking '];
  $bookingtime = $_POST['time'];
  $location = $_POST['location'];


  // Connect to the database
  $conn = mysqli_connect("localhost", "root", "", "library");
  if (mysqli_connect_errno()) {
    echo "Failed to connect to MySQL: " . mysqli_connect_error();
  } else {
    echo "Connection is estbalished.";
  }

  $query = "INSERT INTO Appointment VALUES('$servicetype','$bookingdate','$bookingtime','$location')";

  $result = mysqli_query($conn, $query);
  // echo ($result);
  if ($result) {
    header("Location:index.php");
  } else {
    echo ("Failed to do bookings");
  }
  // Close the database connection
  $conn->close();
}
?>

<body>
  <div class="box">
    <form action="appointment.php" method="post">
      <h1>Booking Appointment </h1>

      <input type="text" name="service" placeholder="Service Type">
      <input type="booking" name="booking" placeholder="Booking Date">
      <input type="text" name="time" placeholder="Booking Time">
      <input type="text" name="location" placeholder="Location ">
      <button>Submit</button>
    </form>

  </div>
</body>

</html>
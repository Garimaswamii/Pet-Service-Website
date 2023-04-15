<html>

<head>
  <title>Register</title>
</head>
<style>
  .box {
    background: radial-gradient(rgb(193, 238, 235), rgb(30, 148, 144));
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
    box-shadow: 0 19px 38px rgba(0, 0, 0, 0.30), 0 15px 12px rgba(0, 0, 0, 0.22);
    border: none;
    border-radius: 10px;
  }

  form input {
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
    background-color: #0e3636;
    color: white;
    border: none;
    border-radius: 10px;
    height: 30px;
    transition: 0.2s ease;

  }

  button:hover {
    transform: scale(1.15);
    cursor: pointer;
  }

  h1 {
    font-size: 40px;
    color: transparent;
    -webkit-text-stroke: 1px white;
  }

  span a {
    text-decoration: none;
    color: white;
  }

  span {
    color: white;
  }
</style>

<?php
//put the codee here
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $userid = $_POST['userid'];
  $name = $_POST['name'];
  $petname = $_POST['petname'];
  $phone = $_POST['phoneNumber'];
  $email = $_POST['email'];
  $password = $_POST['password'];
  $cpassword = $_POST['cpassword'];
  //Database connection here
  $con = mysqli_connect("localhost", "root", "", "library");
  if (mysqli_connect_errno()) {
    echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
  if ($password != $cpassword) {
    echo '<script>alert("Passwords do not match")</script>';
  } else {

    $query = "INSERT INTO User VALUES('$userid', '$petname','$name','$phone','$email','$password')";
    $result = mysqli_query($con, $query);
    echo ($result);
    if ($result) {
      header("Location:login.php");
    } else {
      echo ("Invalid credentials");
    }
  }
}
?>

<body>
  <div class="box">

    <form action="register.php" method="post">
      <h1>Register Form</h1>

      <input type="text" name="name" placeholder="Full Name">
      <input type="text" name="petname" placeholder="Pet Name">
      <input type="digit" name="userid" placeholder="Used Id">
      <input type="email" name="email" placeholder="Email">
      <input type="digit" name="phoneNumber" placeholder="Phone Number">
      <input type="password" name="password" placeholder="Password">
      <input type="text" name="cpassword" placeholder="Confirm Password">
      <button>Submit</button>
      <span>Already have an account? <a href="login.php">Login</a></span>
    </form>
  </div>
</body>

</html>
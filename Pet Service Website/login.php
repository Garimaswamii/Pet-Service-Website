<!DOCTYPE html>
<html lang="en">
<html>

<head>
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0 " />



  <title>Login Page</title>
</head>

<?php
//put the codee here
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $userid = $_POST['userid'];
  $password = $_POST['password'];
  //Database connection here
  $con = mysqli_connect("localhost", "root", "", "library");
  if (mysqli_connect_errno()) {
    echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
  $stmt = $con->prepare("SELECT * FROM User WHERE userid= ? and password=?");
  $stmt->bind_param("ss", $userid, $password);
  $stmt->execute();
  $result = $stmt->get_result();
  if ($result->num_rows == 1) {
    header("refresh:1;url=index.php");
    exit();
  } else {
    echo '<p> invalid </p>';
  }
  $stmt->close();
}
?>


<body>
  <center>
    <img class="signinlogo" src="img/logo.png" />
  </center>
  <h6 class="signin">PARK'S PAWS</h6>
  <h6 class="signup">LOGIN</h6>
  </centre>
  <form name="login" action="login.php" method="post">
    <div class="container">

      <label>UserID:</label>
      <input type="userid" placeholder="Enter UserID" name="userid" required />

      <label>PASSWORD:</label>
      <input type="password" placeholder="Enter Password" name="password" />
      <button type="submit" class="submitbtn">LOGIN</button>
      <input type="checkbox" checked="checked" /> Remember me
      <br />
      <span><button>New User <a href="register.php">
            Sign Up</a></button> </span>

    </div>
  </form>
  <style>
    .signinlogo {
      height: 9rem;
      width: 8rem;
    }

    .signin {
      color: rgb(30, 148, 144);
      font-size: 50px;
      text-align: center;
      font-family: Calibri, Helvetica, sans-serif;
      margin-top: 2rem;
    }

    .signup {
      color: rgb(30, 148, 144);
      font-size: 20px;
      text-align: center;
      font-family: Calibri, Helvetica, sans-serif;
      margin-top: -6rem;
    }

    /*
  Body {
  font-family: calibri, Arial, Helvetica, sans-serif;
  background-color: #f6f6f1;
  } */
    .signinlogo {
      width: 200px;
      height: 250px;
    }

    button {
      color: red;
      width: 100%;
      color: black;
      padding: 15px;
      margin: 10px 0px;
      border: none;
      cursor: pointer;
    }

    form {
      background-color: #f6f6f1;
    }

    input[type="userid"],
    input[type="name"],
    input[type="phone"],
    input[type="password"],
    input[type="email"] {
      width: 100%;
      margin: 8px 0;
      padding: 12px 20px;
      display: inline-block;
      border: 2px solid #f6f6f1;
      box-sizing: border-box;
      background-color: #f6f6f1;
    }

    button:hover {
      opacity: 0.7;
      background-color: #f6f6f1;
    }

    .cancelbtn {
      width: auto;
      padding: 10px 18px;
      margin: 10px 5px;
      border: 2px solid #f6f6f1;
      background-color: #f6f6f1;
    }

    .submitbtn {
      background-color: #f6f6f1;
      color: rgb(30, 148, 144);
      font-weight: bold;
    }

    .container {
      padding: 25px;
      background-color: rgb(193, 238, 235);
    }

    .forgot {
      text-align: right;
    }
  </style>
</body>

</html>
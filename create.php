<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
 <head>
   <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
   <title>Home | Big Brother</title>
   <meta http-equiv="content-language" content="en" />
   <meta name="keywords" content="" />
   <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
   <script src="https://code.jquery.com/jquery-1.9.1.min.js"></script>
   <link rel="stylesheet" href="src/css/homepage_topheader.css" />
 </head>
 <body>
   <div class="top-header">
       <div>
           <center><img src="src/pics/Arris_logo.png" class="top_header_icon">
       </div>
   </div>

   <div class="site-name-area">
   <div class="site-name">
          <h1><font face="sans-serif" class="site-name2" style="font-size: 48px" color="black">Big Brother</font></h1>
   </div>
   <div class="search-bar">
   <form class="form-wrapper">
       <input type="text" id="search" size="48" placeholder="Search for..." required>
       <input type="submit" value="go"  id="submit">
   </form>
   </div>
   </div>

   <div class="top-menu">
     <table height=60px  align=center margin=0px border="0">
     <tr bgcolor='white'>
        <td><a href="home.php">Home</a></td>
        <td><a href="vmlist.php">Manage Configurations</a></td>
        <td><a href="create.php">Create Configurations</a></td>
        <td>User: Nhim</td>
        <td><a href="login.php">Logout</a></td>
      </tr>
    </table>
    </div>

    <?php
    // define variables and set to empty values
    $nameErr = $locationErr = $ipErr = $typeErr = $operErr=  $userErr = $passErr = "";
    $name = $location = $ip = $type = $oper = $note = $user = $pass ="";

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
      if (empty($_POST["name"])) {
        $nameErr = "Name is required";
      } else {
        $name = test_input($_POST["name"]);
        // check if name only contains letters and whitespace
        if (!preg_match("/^[a-zA-Z0-9. ]*$/",$name)) {
          $nameErr = "Only letters and white space allowed";
        }
      }

      if ($_SERVER["REQUEST_METHOD"] == "POST") {
        if (empty($_POST["location"])) {
          $locationErr = "Location is required";
        } else {
          $location = test_input($_POST["location"]);
          // check if name only contains letters and whitespace
          if (!preg_match("/^[a-zA-Z ]*$/",$location)) {
            $locationErr = "Only letters and white space allowed";
          }
        }
      }
      if ($_SERVER["REQUEST_METHOD"] == "POST") {
        if (empty($_POST["ip"])) {
          $ipErr = "IP Address is required";
        } else {
          $ip = test_input($_POST["ip"]);
          // check if name only contains letters and whitespace
          if (!preg_match("/^[0-99 .]*$/",$ip)) {
            $ipErr = "Only numbers and periods allowed";
          }
        }
      }
      if ($_SERVER["REQUEST_METHOD"] == "POST") {
        if (empty($_POST["pass"])) {
          $passErr = "Password is required";
        } else {
          $pass = test_input($_POST["pass"]);
          // check if name only contains letters and whitespace
          if (!preg_match("/^[a-zA-Z0-9. ]*$/",$pass)) {
            $passErr = "Only letters and white space allowed";
          }
        }
      }
      if ($_SERVER["REQUEST_METHOD"] == "POST") {
        if (empty($_POST["user"])) {
          $userErr = "Username is required";
        } else {
          $user = test_input($_POST["user"]);
          // check if name only contains letters and whitespace
          if (!preg_match("/^[a-zA-Z0-9. ]*$/",$user)) {
            $userErr = "Only letters and white space allowed";
          }
        }
      }

      if ($_SERVER["REQUEST_METHOD"] == "POST") {
        if (empty($_POST["type"])) {
          $typeErr = "Type is required";
        } else {
          $type = test_input($_POST["type"]);
          // check if name only contains letters and whitespace
          if (!preg_match("/^[a-zA-Z ]*$/",$type)) {
            $typeErr = "Only letters and white space allowed";
          }
        }
      }

      if ($_SERVER["REQUEST_METHOD"] == "POST") {
        if (empty($_POST["oper"])) {
          $operErr = "Operating System is required";
        } else {
          $oper = test_input($_POST["oper"]);
          // check if name only contains letters and whitespace
          if (!preg_match("/^[a-zA-Z0-9. ]*$/",$oper)) {
            $operErr = "Only letters and white space allowed";
          }
        }
      }

      if (empty($_POST["comment"])) {
        $cnote = "";
      } else {
        $note = test_input($_POST["note"]);
      }
}
    function test_input($data) {
      $data = trim($data);
      $data = stripslashes($data);
      $data = htmlspecialchars($data);
      return $data;
    }
    ?>
    <h2>Configuration System</h2>
    <p><span class="error">* required field.</span></p>
    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
      Name: <input type="text" name="name" value="<?php echo $name;?>">
      <span class="error">* <?php echo $nameErr;?></span>
      <br><br>
      Location: <input type="text" name="location" value="<?php echo $location;?>">
      <span class="error">* <?php echo $locationErr;?></span>
      <br><br>
      IP Address: <input type="text" name="ip" value="<?php echo $ip;?>">
      <span class="error">* <?php echo $ipErr;?></span>
      <br><br>
      Username: <input type="text" name="user" value="<?php echo $user;?>">
      <span class="error">* <?php echo $userErr;?></span>
      <br><br>
      Password: <input type="text" name="pass" value="<?php echo $pass;?>">
      <span class="error">* <?php echo $passErr;?></span>
      <br><br>
      Type: <input type="text" name="type" value="<?php echo $type;?>">
      <span class="error">* <?php echo $typeErr;?></span>
      <br><br>
      Operating System: <input type="text" name="oper" value="<?php echo $oper;?>">
      <span class="error">* <?php echo $operErr;?></span>
      <br><br>
      Notes: <textarea name="note" rows="5" cols="40"><?php echo $note;?></textarea>
      <br><br>
      <input type="submit" name="submit" value="Submit">
    </form>


    <?php
    echo "<h2>Your Created Configuration:</h2>";
    echo $name;
    echo "<br>";
    echo $location;
    echo "<br>";
    echo $ip;
    echo "<br>";
    echo $user;
    echo "<br>";
    echo $pass;
    echo "<br>";
    echo $type;
    echo "<br>";
    echo $oper;
    echo "<br>";
    echo $note;
    ?>

  </body>
 </html>

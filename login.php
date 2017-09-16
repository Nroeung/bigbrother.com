<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
 <head>
   <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
   <title>Home | Big Brother</title>
   <meta http-equiv="content-language" content="en" />
   <meta name="keywords" content="" />
   <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
   <script src="https://code.jquery.com/jquery-1.9.1.min.js"></script>
   <link rel="stylesheet" href="src/css/login.css" />


   <style>
form {
    border: 3px solid #f1f1f1;
}

input[type=text], input[type=password] {
    width: 100%;
    padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    box-sizing: border-box;
}

button {
    background-color: #4CAF50;
    color: white;
    padding: 14px 20px;
    margin: 8px 0;
    border: none;
    cursor: pointer;
    width: 100%;
}

button:hover {
    opacity: 0.8;
}

.cancelbtn {
    width: auto;
    padding: 10px 18px;
    background-color: #f44336;
}

.imgcontainer {
    text-align: center;
    margin: 24px 0 12px 0;
}

img.avatar {
    width: 40%;

}

.container {
    padding: 16px;
}

span.psw {
    float: right;
    padding-top: 16px;
}

/* Change styles for span and cancel button on extra small screens */
@media screen and (max-width: 300px) {
    span.psw {
       display: block;
       float: none;
    }
    .cancelbtn {
       width: 100%;
    }
}
</style>
 </head>
 <body>
   <div class="top-header">
       <div>
           <center><img src="src/pics/Arris_logo.png" class="top_header_icon">
       </div>
   </div>

   <h2>Login</h2>

   <form action="/bigbrother.com/logincheck.php">
     <div class="imgcontainer">
       <img src="src/pics/cms.png" alt="Avatar" class="avatar">
     </div>

     <div class="container">
       <label><b>Username</b></label>
       <input type="text" placeholder="Enter Username" name="user" required>

       <label><b>Password</b></label>
       <input type="password" placeholder="Enter Password" name="pass" required>

       <button type="submit">Login</button>
       <input type="checkbox" checked="checked"> Remember me
     </div>
   </form>

 </body>
</html>

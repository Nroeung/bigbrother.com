<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
 <head>
   <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
   <title>Home | Big Brother</title>
   <meta http-equiv="content-language" content="en" />
   <meta name="keywords" content="" />
   <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
   <script src="https://code.jquery.com/jquery-1.9.1.min.js"></script>
   <link rel="stylesheet" href="src/css/vmlist.css" />
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
    <div class="vm-menu">
      <table height=120px  align=center margin=0px border="0">
      <tr bgcolor='white' class="table1">
        <td>Location</td>
        <td>Type</td>
        <td>VM</td>
      </tr>
      <tr bgcolor='white'>
         <td><select >
      <option value="volvo">      </option>
      <option value="saab">Horsham</option>
      <option value="opel">Austin</option>
      <option value="audi">Santa Clara</option>
    </select></td>
         <td><select >
      <option value="volvo">       </option>
      <option value="saab">ECO Manage</option>
      <option value="nothing">ECO Collect</option>
      <option value="nothing">General</option>
    </select></td>
    <td><select name="forma" onchange="location = this.value;">
      <option value="nothing">     </option>
      <option value="vm1.php">VM: 1</option>
      <option value="vm2.php">VM: 2</option>
    </select></td>
    </tr>
     </table>
    </div>





  </body>
 </html>

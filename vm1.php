<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">

 <head>
   <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
   <title>Home | Big Brother</title>
   <meta http-equiv="content-language" content="en" />
   <meta name="keywords" content="" />
   <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
   <script src="https://code.jquery.com/jquery-1.9.1.min.js"></script>
   <link rel="stylesheet" href="src/css/top-header.css" />
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
        <td><a href="vmlist.php">VM List</a></td>
        <td>User: Nhim</td>
        <td><a href="login.php">Logout</a></td>
      </tr>
    </table>
    </div>

<div class="infor">
  <table class=infor-table>
    <h1><font face="arial" style="font-size: 24px" color="black">View Asset Resource</font></h1>
    <tr>
      <td>Name</td>
      <td>ECO Manage - Collect</td>
    </tr>
    <tr>
      <td>Location</td>
      <td>Horsham</td>
    </tr>
    <tr>
      <td>IP Address</td>
      <td>10.10.53.82</td>
    </tr>
    <tr>
      <td>Type</td>
      <td>Redis Monitor</td>
    </tr>
    <tr>
      <td>Operating System</td>
      <td>RHEL 7.3</td>
    </tr>
    <tr>
      <td>Notes</td>
      <td>This device is current being tested</td>
    </tr>
  </table>
</div>

<div class="top-header-bg"></div>

<div class="button-run">
  <table class=button-table>
  <tr> <td> <button style="height:50px;width:150px" id="button1" type="button">Setup and Install</button>
  <script type="text/javascript">
      $(document).ready(function(){
          $('#button1').click(function(){
              $.ajax({
                  type: 'POST',
                  url: 'install.php',
                  success: function(data) {
                      alert(data);
                      $("p").text(data);
              }
          });
     });
  });
  </script></td>
  <td><button style="height:50px;width:150px" id="button2" type="button"><a href="http://10.10.53.80:3000/dashboard/db/at-hack-o-thon-monitor?refresh=5m&orgId=1&var-Group=apps&var-Server=10.10.53.81&var-MinStep=$__auto_interval">Netdata</a></button></td>
  <td><button style="height:50px;width:150px" id="button3" type="button">Tableu</button></td>
</tr>
</table>
</div>
 </body>
</html>

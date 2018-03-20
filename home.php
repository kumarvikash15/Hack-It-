<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>HOME</title>
    <script src = "https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.3/jquery-ui.min.js"></script>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <style media="screen">
      body{
        background: #000000 url("back.jpg") no-repeat fixed center;

      }
      a:link{
        text-decoration: none;
      }
      .link{
        border: 3px solid white;
        padding: 40px;
        border-radius: 15px;
        opacity: 40%;
        font-weight: bolder;
        font-size: 30px;
        color: #f1f1f1;
      }
      .link:hover{
        color:grey;
      }
      .link_row{
        margin-top: 300px;
      }
      #about{
        background: #000000;
        font-family: monospace;
        margin-top: 100px;
        border-radius:15px;
        padding: 20px;
        font-size: 15px;
        color: #ffffff;
      }

    </style>
  </head>
  <body>

    <nav class="navbar navbar-default">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="index.html">SnooPi</a>
    </div>
    <ul class="nav navbar-nav">
      <li class="active"><a href="#">Home</a></li>
      <li><a href="team.php">Contact-Us</a></li>
      <li><a target="_blank" href="https://goo.gl/forms/qf5CQvP2Gwhd4sz02">Help</a></li>
    </ul>
  </div>
</nav>

  <div class="container">
    <div class="text-center">
      <h1>SNOOPERS</h1>
    </div>
    <div class="row link_row">
      <div class="col-md-6 text-center">
        <a href="index.html" class="link" id="terminal">Proceed to Terminal</a>
      </div>
      <div class="col-md-6 text-center">
        <a href="#" class="link" id="linkAbout">About the Project</a>
      </div>
    </div>
    <div id="about">
      <h3>WE ARE TEAM SNOOPERS.</h3>
      <h4>NORTH INDIA CYBER SECURITY HACKATHON</h4>
      <img src="cy.jpg" alt="logo" width="300" height="300">
       <h3>Objective:</h3>
       <ol>
         <li>To exploit a directory traversal flaw in the samba CIFS server and gaining access to remote system from external network using raspberry pi.</li>
         <li>To prevent exploits on vulnerability of SAMBA (SMB server on Linux machines) to gain access of root privileges and performing insider attacks. </li>
         <li>To create awareness among SSH users about that a person with access to a writeable share can upload a piece of arbitrary code and execute it with root permissions in the server.</li>
         <li>To provide non technical client friendly solution in form of a WebApp and recommendations to prevent above mentioned situations.</li>
       </ol>
      <h3>Problem Statement:</h3>
      <p>All versions between Samba 3.5.0 and 4.6.4/4.5 are vulnerable to a remote code execution vulnerability, allowing a malicious client to upload a shared library to a writable share, and then cause the server to load and execute it.

<br><br>Malicious clients can upload and cause the smbd server to execute a shared library from a writable share.
</p>

  </div>
  </div>
<script type="text/javascript">
  $(document).ready(function(){
    $("#about").hide();
    $("#linkAbout").click(function(){
      $("#linkAbout.link").css("background","#b0b6c1");
      $("#linkAbout.link").css("color","white");


      $("#about").toggle("slow",function(){

      });
    });
  });
</script>

  </body>
</html>

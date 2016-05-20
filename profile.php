<html>
<head>
	<title>Profile</title>
	<link href="styles/fonts.css" type="text/css" rel="stylesheet">
	<link href="styles/style.css" type="text/css" rel="stylesheet">
	<link href="css/bootstrap.css" type="text/css" rel="stylesheet">
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
	<script type="text/javascript" src="scripts/mainsc.js"></script>
</head>
<body>
	<div class="container" id="main">
		<nav class="navbar navbar-default navbar-fixed-top">
		    <div class="container">
		      <div class="navbar-header">
	        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
		          <span class="icon-bar"></span>
		          <span class="icon-bar"></span>
		          <span class="icon-bar"></span>
		        </button> 
		        <a href="index.php"><img src="img/2.png" style="height:70px;margin-right:5px;"></a>
		      </div>
		      <div class="collapse navbar-collapse" id="myNavbar">
		        <ul class="nav navbar-nav nav-pills">
		          <li class="active"><a href="index.php"style="margin-top:10px;">Home </a></li>
		          <li><a href="blogs.php"style="margin-top:10px;">News </a></li>
		          <li><a href="about.php"style="margin-top:10px;">About us</a></li>
		          <li><a href="contacts.php"style="margin-top:10px;">Contacts</a></li>
		        </ul>
		        <form class="navbar-form navbar-right" role="search" action="function/search.php" onsubmit="return false" method="POST">
		          <div class="form-group input-group">
		           	<div id="search">
					<form method="post">
						<input type="text" name="search" placeholder="Search">
						<a href="https://www.google.kz/?gws_rd=ssl" title="Search"><i class="icon icon-search"></i></a>
					</form>				
				</div>
		          </div>
		        </form>
		        <ul class="nav navbar-nav navbar-right">
		          <li><a href="index3.php" style="margin-top:10px;">Registration</a></li>
		          <li><a href="logout.php"style="margin-top:10px;">Log out</a></li>
		        </ul>
		      </div>
		    </div>
		  </nav>

    <div class="row" style="margin-top :80px;">
    	<div class="col-sm-8 text-center">

        <div class="row" >
          <div class="col-sm-12">
            <div class="panel panel-default" style="background:#331a00;border-radius:25px;">
              <div class="panel-body">
                <form class="for_post" action="post.php" method="post">
                  <label for="textArea" style="font-size:20px; color:white;">Browning</label>
                  <textarea class="form-control" rows="3" id="textArea" placeholder="in process..." name="message"></textarea>
                  <div class="form-group">
                    <button type="submit" class="btn btn-warning" style="margin:5px;">Post it!</button>
                  </div>
                </form>
              </div>
            </div>
          </div>

          <?php session_start();
          		include 'connection.php';
          		$user = $_SESSION['name'];
          		$sql ="select * from message where name='".$user."' order by id desc";
          		$query = mysql_query($sql);
          		if(mysql_num_rows($query)>0){
          			while($row = mysql_fetch_array($query)){
          				echo "<div class='col-sm-12'>
					          	<div class='col-sm-3 well'>$row[name]</div>
					          	<div class='col-sm-9 well'>$row[message]</div>
					          </div>";
          			}
          		}
          	
           ?>
          

        </div>



        
      </div>
      <div class="col-sm-3">
        <div class="col-sm-12">
            <img src='img/0004.png' width="100%" alt="Avatar">
          <ul class="list-group" >
            <li class="list-group-item"><a href="#"> My page</a></li>
            <li class="list-group-item"><a href="#">Followers</a></li>
            <li class="list-group-item"><a href="#">Followings</a></li>
           
            <div id="collapse1" class="panel-collapse collapse">
           
            </div>
            <li class="list-group-item"><a href="#"> Settings</a></li>
          </ul>
        </div>
      </div>

      
    </div>
  </div>

</body>
</html>
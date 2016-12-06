<?php
		include('connection.php');
?>
<html>
<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Senior Project</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/logo-nav.css" rel="stylesheet">

    <!-- Navigation -->
    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <div class="container" style="min-height:135px; background-color:#324499; width:100vw">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="#">
                    <img src="img/navbarlogo.png" alt="">
                </a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1" 
				style="position:absolute; bottom:0; padding-left: 300px; font-size: 150%; color:white; padding-left:800px">
                <ul class="nav navbar-nav">
                    <li>
                        <a href="Home.php" style="color:white">Home</a>
                    </li>
                    <li>
                        <a href="Participants.php" style="color:white">Participants</a>
                    </li>
					<li>
                        <a href="AddParticipant.php" style="color:white">Add Participant</a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>

    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>
</head>

<body>
		<div class="container" style="padding-top: 160px">
    	<div class="row">
			<div class="col-md-6 col-md-offset-3">
				<div class="panel panel-login">
					<div class="panel-heading">
						<div class="row">
							<h2 align="center" style="padding-bottom:25px;">Zones of Regulation Participants</h2>
						</div>
						<hr>
					</div>
					<div class="panel-body">
						<div class="row">
							<div class="col-lg-12">
								<form id="login-form" action="AddParticipant.php" method="post" role="form" style="display: block;">
									<div class="form-group">
										<input type="text" name="username" id="username" class="form-control" placeholder="Username" value="">
									</div>
									<div class="form-group">
										<input type="password" name="password" id="password" class="form-control" placeholder="Password" value="">
									</div>
									<div class="form-group">
										<input type="name" name="name" id="name"  class="form-control" placeholder="Name">
									</div>
									<div class="form-group">
										<input type="daystart" name="daystart" id="daystart" class="form-control" placeholder="Day Start">
									</div>
									<div class="form-group">
										<input type="dayend" name="dayend" id="dayend" class="form-control" placeholder="Day End">
									</div>
									<div class="form-group">
										<div class="row">
											<div class="col-sm-6 col-sm-offset-3">
												<input type="submit" name="register-submit" id="register-submit" class="form-control btn btn-register" value="Add Participant" style="background-color:#324499; color: white">
											</div>
										</div>
									</div>
									
								</form>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<?php 
		if(isset($_POST["username"]) && isset($_POST["password"]) && isset($_POST["name"]) && isset($_POST["daystart"]) && isset($_POST["dayend"])){
			$username = $_POST["username"]; 
			$password = $_POST["password"]; 
			$name = $_POST["name"]; 
			$daystart = $_POST["daystart"]; 
			$dayend = $_POST["dayend"]; 
			
			$query = "INSERT INTO Participants VALUES('$username', '$password', '$name', '$daystart', '$dayend')";
			$connection->query($query);
		}
		
	?>
</body>
</html>
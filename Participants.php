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
<title>Bootstrap Grid</title>
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap-theme.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/js/bootstrap.min.js"></script>
<script type="text/javascript">
$(document).ready(function($) {
    $(".table-row").click(function() {
        window.document.location = $(this).data("href");
    });
});
</script>
<style type="text/css">
.table-row{
cursor:pointer;
}
</style>
</head>
<body>
	<div class="container" style="padding-top: 200px; padding-left: 200px; padding-right:200px;">
		<h1 align="center" style="padding-bottom:25px;">Zones of Regulation Participants</h1>
		<table class='table table-bordered table-condensed table-striped table-hover'>
		  <thead style="background-color:#324499; color:white;">
			<tr>
			  <th>Name</th>
			  <th>Username</th>
			  <th>Day Start</th>
			  <th>Day End</th>
			</tr>
		  </thead>
		  <tbody>
			<?php
			$sql = "SELECT * FROM Participants";
			foreach($connection->query($sql) as $result)
			{
				?> <tr class='table-row'data-href='ParticipantData.php?id=<?php echo "". $result["Username"].""?>'> 
				<?php 
				echo "<td>"  . $result["Name"] . "</td>";
				echo "<td>" . $result["Username"] . "</td>";
				echo "<td>" . $result["DayStart"] . "</td>";
				echo "<td>" . $result["DayEnd"] . "</td>";
				echo "</tr>";
			}
			?>
		 </tbody>
		</table>
	</div>
</body>
</html>
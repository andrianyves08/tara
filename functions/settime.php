<?php
echo '<head>
<title>Nya Ngay? - Meet new friends today!</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="../css/reset.css" />
<link rel="stylesheet" type="text/css" href="../css/navbar.css">
<link rel="stylesheet" type="text/css" href="../css/style.css" />
<link href="https://fonts.googleapis.com/css?family=Montserrat:900|Work+Sans:300" rel="stylesheet">

<script src="http://code.jquery.com/jquery-latest.min.js" type="text/javascript"></script>
<script src="script/script.js"></script>
</head>';
include 'dbconn.php';

$venue = $_GET['id'];


echo '<body>
	<div id="main_content">
		<div id="cssmenu">
			<ul>
				<li class="active"><a href="#">Home</a></li>
				<li><a href="#">Hangout Guide</a></li>
				<li><a href="#">FAQ/Help</a></li>
				<li id="login-signup"><a href="#">Login/Signup</a></li>
			</ul>
		</div>
		<div id="banner_bg">
			<div id="title">
				<h1>Set Agenda?</h1>
			</div>
			<div id="subtitle">
				<form method="POST" action="saveme.php?id='.$venue.'">
                                <input type="time" name="time" /><br />
                                How many buddies do you want to join you?<br />
                                <input type="radio" name="number" value=1>Just one</input><br />
                                <input type="radio" name="number" value=0>Group</input><br />
			</div>
			<div class="button" id="register_button">
				<div id="translate"></div>
				<a href="#">Set!</a>
			</div>
			<div id="small_text">
				
			</div>
		</div>
		<div id="footer">
			<p>Copyright &copy 2020 Designed by <a href="http://www.intelektbusiness.com">Intelekt Business Solutions</a>. All Rights Reserved.</p>
			<ul>
				<li><a href="#">About </a></li>
				<li><a href="#">Contact Us</a></li>
				<li><a href="#">Terms and Conditions</a></li>
				<li><a href="#">Privacy Policy</a></li>
			</ul>
		</div>
	</div>
</body>
</html>';

echo "<form method='POST' action='saveme.php?id=".$venue."'>";

echo "How many buddies do you want to join you?";
echo "<input type='radio' name='number' value=1>Just one</input>";
echo "<input type='radio' name='number' value=0>Group</input>";
echo "<input type='submit' value='Set' />";
echo "</form>";



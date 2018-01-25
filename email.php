<!DOCTYPE html>
<html>
<head>
	<title>Sent Email</title>

<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>


</head>
<body>


<?php

if(isset($_POST['Submit']))
{

	$first=$_POST['First'];
	$last=$_POST['Last'];
	$email=$_POST['Email'];
	$sub=$_POST['Subject'];
	$msg=$_POST['Message'];
	
	$to='chavanshubham36@gmail.com';
	$subject='form submission';
	$messeges="Name:".$first.$last."\n"."sent by:".$email."\n"."Wrote the following: "."\n\n".$msg;
	$header="from:".$email;
}
	?>

<?php if (mail($to,$subject,$messeges,$header)): ?>
<div class="container">
 	<div class="jumbotron" style="background-color: white; border: 2px solid grey;">
	<h2 style="color: black; text-shadow: 2px 2px 2px gray;text-align: center;font-weight: bold;"><?php echo  "message sent successfully I will contact you very soon!!!"; ?></h2>
	</div>
</div>	
<?php else: ?>
<div class="container">
 	<div class="jumbotron" style="background-color: white; border: 2px solid grey;">
	<h2 style="color: black; text-shadow: 2px 2px 2px gray;text-align: center;font-weight: bold;"><?php echo  "Something went wrong..Please try again.!!!"; ?></h2>
	</div>
</div>	
<?php endif; ?>
	
</body>
</html>
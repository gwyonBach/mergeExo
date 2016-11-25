<?php  

?>


<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Abracadabra!</title>
	<link rel="stylesheet" href="">
</head>
<body>

<h1>Servez chaud!</h1>


<form action="#" method="post" name="mailer">

	<input type="text" placeholder="enter your mail here!">
	<input type="submit" name="send" value="sendMail">
<?php sendMail ('damien.hergesheimer@gmail.com', 'truc','machin','machin') ?>
</form>	
</body>
</html>
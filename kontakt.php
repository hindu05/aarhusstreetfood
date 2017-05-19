<!DOCTYPE html>
<html lang="da">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="description" content="Oplev ægte street food i Aarhus med mad og drikke fra mere end 30 gadekøkkener og flere barer. Besøg Aarhus Street Food på rutebilstationen i hjertet af Aarhus.">
<meta name="keywords" content="Aarhus, street food, Kontakt, mad, drikke, spisested">
<meta name="author" content="Andreas Nielsen, Emma Schumacher, Mathilde Gladov, Michael Rønne">
<title>Kontakt | Aarhus Street Food</title>
<link rel="shortcut icon" type="image/ico" href="img/favicon.ico">
<!-- Bootstrap -->
<link href="css/bootstrap.css" rel="stylesheet">
<link href="css/style.css" rel="stylesheet">
</head>
<body>
<?php include 'header.php';?>
<div class="breadcrumb hidden-xs col-sm-offset-1 col-sm-1 col-md-offset-1 col-md-1 col-lg-offset-1 col-lg-1">
	<a href="index.php">Hjem / </a>Kontakt
</div>
<div class="col-lg-8 col-md-8 col-sm-8 col-xs-12 content underside">
	<div class="wrap">
		
		<img alt="hero image" src="img/banner_kontakt.jpg" class="img-responsive heroimg">
		<h1>Kontakt</h1>
	</div>
	<article class="col-md-12">
		
		<p>Ved spørgsmål kontakt os via formularen herunder.</p>
		<p>Vi har ikke flere ledige stadepladser - alt er udlejet for nu.  Skulle der komme en åbning gør vi opmærksom på det her på siden samt på vores Facebook.</p>
		<b>Bemærk at kontaktformularen ikke kan bruges til bordreservation - se i stedet under <a href="selskaber.php">selskaber</a></b>
		 
	</article>

	<section class="col-md-12">
		<?php
		$action=$_REQUEST['action'];
		if ($action=="")    /* display the contact form */
		    {
		?>
			<form id="contactform" action="" method="POST" enctype="multipart/form-data">
				<input type="hidden" name="action" value="submit">
				<input type="text" name="name" placeholder="Navn"></input>
				
				<input name="email" type="text" placeholder="Email" ></input>
				
				<textarea name="message" rows="7" cols="30" placeholder="Din besked"></textarea>
				
				<button type="submit" value="Send email">Send</button>
			</form>
	    <?php
			    } 
			else                /* send the submitted data */
			    {
			    $name=$_REQUEST['name'];
			    $email=$_REQUEST['email'];
			    $message=$_REQUEST['message'];
			    if (($name=="")||($email=="")||($message==""))
			        {
					echo "Alle felter er nødvendige, udfyld venligst <a href=\"\">formen</a> igen.";
				    }
			    else{		
				    $from="From: $name<$email>\r\nReturn-path: $email";
			        $subject="Besked sent via. kontaktformularen";
					mail("andreasschmidtnielsen@outlook.com", $subject, $message, $from);
					echo "Email sendt!";
				    }
			    }  
		?>
	</section>
</div>
<?php include 'footer.php';?>
<script src="js/jquery-3.1.1.min.js"></script>
<!-- Include all compiled plugins (below), or include individual files as needed --> 
<script src="js/bootstrap.js"></script>
<script src="js/custom.js"></script>
</body>
</html>
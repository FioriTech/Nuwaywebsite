<!DOCTYPE html>
<html>
<head>
     <title>Nuway Solutions</title>
    <link href="../css_file/common.css" type="text/css" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css?family=Raleway|Roboto" rel="stylesheet">
    <link rel="shortcut icon" href="https://static.wixstatic.com/media/bec1f9_78f7d4ef1fe54e33b95b4739c644555a.png/v1/fill/w_32%2Ch_32%2Clg_1%2Cusm_0.66_1.00_0.01/bec1f9_78f7d4ef1fe54e33b95b4739c644555a.png" type="image/png">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.1/css/all.css" integrity="sha384-gfdkjb5BdAXd+lj+gudLWI+BXq4IuLW5IT+brZEZsLFm++aCMlF1V92rMkPaX4PP" crossorigin="anonymous">
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
</head>

<body>
    <div id="fb-root"></div>
<a href="#" id="pagetop" style="display: none;"><img src="../images/download.png"></a>
    <div class="image1">
        <header>
      <img src="../images/logo.png" alt="Nuway Logo" height="120px" class="logo">
      <?php include 'common_files/menu.php' ?>
      </header>
    </div>
    <div class="clear"></div>
	<div class="contactall">
    <div class="form">
        <form method="post" action="backend/contactdetail.php" target="_parent" class="form1">
            <input type="text" name="name" placeholder="Name *" required class="form2"><br />
            <input type="text" name="email" placeholder="Email *" required class="form2"><br />
            <input type="text" name="subject" placeholder="subject" required class="form2"><br />
            <textarea rows="6" cols="50" name="message" placeholder="Message" required class="form3"></textarea><br />
            <input type="submit" name="submit" placeholder="Submit" class="form4">
        </form>
    </div>
    <div class="contactdetail">
        <h1>Contact Details</h1>
		<div class="detail">
            <img src="../images/kisspng-email.png" alt="icon">
            <p>sales@NuwaySolutions.com</p>
        </div>
			
		 <div class="detail">
		 <h3>CORPORATE OFFICE:</h3>
		 <a href="https://www.google.com/maps/place/50+Cragwood+Rd+%23228,+South+Plainfield,+NJ+07080,+USA/@40.5523491,-74.4267919,15z/data=!4m5!3m4!1s0x89c3b810ab2bea93:0x1145ac70b58aaa5f!8m2!3d40.5533355!4d-74.4174793" target="_blank">
            <img src="../images/vector-free-download-png-3.png" alt="icon">
            <p>50 Cragwood Road, Suite 228 South Plainfield, NJ 07080<br>
  Tel: 732-825-7888</p></a>
		</div>
		
        <div class="detail">
		<h3>SALES OFFICE:</h3>
		<a href="https://www.google.com/maps/place/3959+Welsh+Rd+%23154,+Willow+Grove,+PA+19090,+USA/@40.1557787,-75.142398,17z/data=!3m1!4b1!4m5!3m4!1s0x89c6b01d74629f83:0x91bb4b04152f9e6e!8m2!3d40.1557746!4d-75.1402093" target="_blank">
            <img src="../images/vector-free-download-png-3.png" alt="icon">
            <p>3959 Welsh Road, Suite 154 Willow Grove, PA 19090<br>
  Tel: 732-825-7888</p></a>
        </div>
    </div>
	</div>
   
    <?php include 'common_files/footer.php' ?>
    <script>
    $(document).ready(function(){ 
    $(window).scroll(function(){ 
        if ($(this).scrollTop() > 100) { 
            $('#pagetop').fadeIn(); 
        } else { 
            $('#pagetop').fadeOut(); 
        } 
    }); 
    $('#pagetop').click(function(){ 
        $("html, body").animate({ scrollTop: 0 }, 600); 
        return false; 
    }); 
});
</script>
</body>
</html>
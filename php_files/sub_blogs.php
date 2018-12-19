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
    <br>
    <br>
    <br>
    <div class="blog-background">
      <?php 
      $id1=$_GET['id']; 
      ?>
       <?php include 'backend/subblogs.php' ?>
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
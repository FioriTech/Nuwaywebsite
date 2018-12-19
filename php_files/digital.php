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
    <div class="image">
        <header>
      <img src="../images/logo.png" alt="FioriTech Logo" height="120px" class="logo">
	  <?php include 'common_files/menu.php' ?>
	  </header>
        <div class="clear"></div>
            <div class="ie_heading">
                <p>Digital Core & ERP</p>
                <img src="../images/logo-netsuite-v1-inverted.webp">
                <img src="../images/Dynamics-365-logo.webp">
                <img src="../images/1487139246_s4hanapng.webp">
            </div>
    </div>
    <div class="clear"></div>
    <div class="ie_paragraph">
        <h1>Our Core ERP Focus</h1>
        <ul>
            <li>We focus on Building and migrating your ERP foundation to the latest in-memory digital cores to run smarter, and unify your data.</li>
            <li>We provide full-scale Cloud or on-premise ERP implementations, as well as enhancements, goingoing support, and connectivity and integration services.</li>
        </ul>
    </div>
	
    <br />
    <div class="clear"></div>
    <br />
    <div class="aboutproducts">
        <p>The Future is here with in-memory ERP, and we can help get you up and running ASAP.</p>
        <div class="aboutproductsdata2">
            <span>Cloud Based, in-memory technologies is the next-generation approach to ERP systems, which is designed to "Run Simple" in a digital economy.<br>
            Today, it fundamentally redefines how enterprise software creates value across industries with instant insight.<br>
            This revolutionary technology is the backbone SAP S/4HANA,  also personalizes the user experience on any device and natively connects to Big Data, the Internet of Things, and business and social networks<br>
            <span style="font-weight: bold;">- all in real time.</span></span>
        </div>
        <div class="clear"></div>
        <br>
        <br>
        <p>Areas we can help Improve for you</p>
        <div class="aboutproductsdata2">
            <span><span style="font-weight: bold;">Business Models</span><br>

            Connect to people, devices, Big Data, and business networks in real-time.<br>

            <span style="font-weight: bold;">Business Processes</span><br>

            Run every process at new, unprecedented speeds, eliminating outdated batch processing.<br>

            <span style="font-weight: bold;">Data Models</span><br>

            Eliminate indices, aggregates, and redundancies to reduce data footprint and total cost of ownership<br>

            <span style="font-weight: bold;">Business Decisions</span><br>

            Perform powerful, state of the art Analytics and simulations using real-time data, live and in the moment.<br>

            <span style="font-weight: bold;">User Experience</span><br>

            Accelerate user adoption and business value with a new, overhauled intuitive personal experience for every device and user.<br>

            <span style="font-weight: bold;">Solution Deployment</span><br>

            That's where Nuwaycomes in, you can accelerate ERP centric deployment with S/4HANA, or any of the other modern ERP platforms,  saving time and money.</span>
        </div>
    <br>
    <br>
    </div>
    <div class="clear"></div>
    <div><br><br><br><br><br><br></div>
    <?php include 'common_files/request_demo.php' ?>
    <br>
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
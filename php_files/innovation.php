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
                <p>Innovation & Disruptive Technology</p>
            </div>
    </div>
    <div class="clear"></div>
    <div class="ie_paragraph">
        <h1>Our Focus on Innovation</h1>
        <ul>
            <li>Machine Learning, the Internet of Things, Blockchain Technologies, etc.</li>
            <li>In the digital age, business leaders must stay on top of new, innovative and emerging emerging technologies, or risk falling behind. But where do you start? Explore the latest digital trends to determine the best opportunities for your company. Let our experts help you get ahead of the curve.</li>
        </ul>
    </div>
	
    <br />
    <div class="clear"></div>
    <br />
    <div class="aboutproducts">
        <p>Nuway is continually invests in the latest innovations and disruptive technologies in the Enterprise.</p>
        <div class="aboutproductsdata2">
            <span>To remain at the forefront, you need to quickly adapt and embrace the latest technological advancements, and that's exactly what we implement for our clients. Three fundamental, and proven disruptive technologies include Artificial Intelligence (AI), Blockchain, and the Internet of Things (IoT)</span>
        </div>
        <div class="clear"></div>
        <br>
        <br>
        <p>Areas we can help Improve for you</p>
        <div class="aboutproductsdata2">
            <span><span style="font-weight: bold;">Artificial Intelligence & Machine Learning</span><br>

            We have expertise in IBM Watson, SAP Conversational AI & Leonardo as well as deep knowledge of configurable CRM based assistants like SFDC's Einstein, and Microsoft's Artificial Intelligence for business, including Telefonica's AI Bot.<br>

            <span style="font-weight: bold;">Blockchain & Multi-Party Processing</span><br>

            We're experienced in Blockchain integration scenarios, Blockchain focused app development, as well as SAP Cloud Platform (SCM) and SAP HANA Blockchain. We also have deep knowledge of Microsoft's Azure Blockchain workbench.​
            <br>

            <span style="font-weight: bold;">Internet of Things</span><br>

            EliminateWe're leading the charge with our significant investments towards IoT technologies, including significant implementation testing of the SAP Leonardo IoT Bridge, IoT App Development, as well as IoT Edge, and IoT focused Predictive Maintenance Services. 

            </span>
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
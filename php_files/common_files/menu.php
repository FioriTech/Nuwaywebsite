<?php 
    $root_url = "http://FioriTech.com/";
    $sub_folder = "php_files/";
?>

      <nav>
        <ul>
          <li><a id="home" href="<?php echo $root_url ?>index.php">Home</a></li>
          <li><a id="aboutus" href="#aboutus">About</a></li>
          <li class="sub-menu"><a id="services" href="#">Our Capabilities</a>
            <ul>
              <li><a id="webdesigning" name="services" href="<?php echo $root_url.$sub_folder ?>webdesigning.php">Intelligent Enterprise</a></li>
              <li><a id="websitedevelopment" name="services" href="<?php echo $root_url.$sub_folder ?>websitedevelopment.php">Customer Experience</a></li>
              <li><a id="digitalmarketing" name="services" href="<?php echo $root_url.$sub_folder ?>digitalmarketing.php">Digital Core & ERP</a></li>
              <li><a id="infrastructureservice" name="services" href="<?php echo $root_url.$sub_folder ?>infrastructureservice.php">Innovation & Disruptive Technology</a></li>
            </ul>
          </li>
          <li><a id="client" href="<?php echo $root_url.$sub_folder ?>clients.php">Clients</a></li>
		  <li><a id="career" href="<?php echo $root_url.$sub_folder ?>career.php">Blog</a></li>
      <li><a id="career" href="#requestdemo">Request Demo</a></li>
		  <li><a id="contactus" href="<?php echo $root_url.$sub_folder ?>contactus.php">Contact Us</a></li>

        </ul>
      </nav>
      <div class="menu-toggle">
        <i class="fa fa-bars" aria-hidden="true"></i>
      </div>
    


    <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
    <script type="text/javascript">
      $(document).ready(
        function() {
          $('.menu-toggle').click(function() {
            $('nav').toggleClass('active');
          })

          $('ul li').click(function() {
            $(this).siblings().removeClass('active');
            $(this).toggleClass('active');
          })
        }
      )

    </script>


<script type="application/javascript">
    var url = window.location.href.replace(/\/$/, '');
    var parts = url.split('/').pop(); 
    var lastSegment = parts.split(".")[0];
	if(lastSegment === 'clients'){
		lastSegment = 'client';
	}
	if(lastSegment === 'fioritech' || lastSegment === 'index'){
		lastSegment = 'home';
	}
    document.getElementById(lastSegment).classList.add("active1");
    
    if(document.getElementById(lastSegment).getAttribute("name") == "services")
         document.getElementById("services").classList.add("active1");
    else if(document.getElementById(lastSegment).getAttribute("name") == "tech")
         document.getElementById("tech").classList.add("active1");
        
</script>


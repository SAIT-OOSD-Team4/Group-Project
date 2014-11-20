<!--
Jasmeen Kathuria & Leisy Moliner
-->

<!DOCTYPE html>
<html>

    <head>
        
        <link href='http://fonts.googleapis.com/css?family=Poiret+One' rel='stylesheet' type='text/css'><!--google fonts-->
        <link rel="stylesheet" type="text/css" href="stylesheet.css"><!--css stylesheet-->
        <script type="text/javascript" src="javaScriptInfo.js"></script><!--javascript functions-->
        
        <title>Main Page</title>
        
        <meta http-equiv="content-type" content="text/html; charset=utf-8" />
	<meta name="description" content="Made with WOW Slider - Create beautiful, responsive image sliders in a few clicks. Awesome skins and animations. Image carousel" />
	
	<!-- Start WOWSlider.com HEAD section --> <!-- add to the <head> of your page -->
	<link rel="stylesheet" type="text/css" href="slider/engine1/style.css" />
	<script type="text/javascript" src="slider/engine1/jquery.js"></script>
	<!-- End WOWSlider.com HEAD section -->


             
    </head>

    <body>
        
        <div id=wrap><!-- wrap starts -->
            
            
            <div id="header"><!-- header starts -->  
                
                <!-- header content goes here --> 
                <?php
                    $title = "welcome to Travel Experts";
                    include("header.php");
                ?>
            
            </div><!-- header ends -->   

            
            <div id="nav"><!-- nav starts --> 
                
                <!-- nav content goes here --> 
                <?php
                    include("navigation.php");
                ?>
                
            </div><!-- nav ends --> 
            
            <div id="sideNav"><!-- sideNav starts --> 
                <!-- sideNav content goes here --> 
                <?php
                    include("sideNavigation.php");
                ?>
            </div><!-- sideNav ends --> 
            

            <div id="section"><!-- section starts -->
                
                <!-- section content goes here --> 
                <br/><br/><br/><br/><br/>
                <h4 style="color:black;">Explore Destinations</h4>
                <hr style="border-color:black;"/>
            
                <!-- Start WOWSlider.com BODY section --> <!-- add to the <body> of your page -->
                <div id="wowslider-container1">
                    <div class="ws_images"><ul>
                        <li><img src="slider/data1/images/01.jpg" alt="01" title="01" id="wows1_0"/></li>
                        <li><img src="slider/data1/images/02.jpg" alt="02" title="02" id="wows1_1"/></li>
                        <li><img src="slider/data1/images/03.jpg" alt="03" title="03" id="wows1_2"/></li>
                        <li><img src="slider/data1/images/04.jpg" alt="04" title="04" id="wows1_3"/></li>
                        <li><img src="slider/data1/images/05.jpg" alt="05" title="05" id="wows1_4"/></li>
                        <li><img src="slider/data1/images/06.jpg" alt="06" title="06" id="wows1_5"/></li>
                        <li><img src="slider/data1/images/07.jpg" alt="07" title="07" id="wows1_6"/></li>
                        <li><a href="http://wowslider.com/vf"><img src="slider/data1/images/08.jpg" alt="full screen slider" title="08" id="wows1_7"/></a></li>
                        <li><img src="slider/data1/images/09.jpg" alt="09" title="09" id="wows1_8"/></li>
                    </ul></div>
                    <div class="ws_bullets"><div>
                        <a href="#" title="01"><img src="slider/data1/tooltips/01.jpg" alt="01"/>1</a>
                        <a href="#" title="02"><img src="slider/data1/tooltips/02.jpg" alt="02"/>2</a>
                        <a href="#" title="03"><img src="slider/data1/tooltips/03.jpg" alt="03"/>3</a>
                        <a href="#" title="04"><img src="slider/data1/tooltips/04.jpg" alt="04"/>4</a>
                        <a href="#" title="05"><img src="slider/data1/tooltips/05.jpg" alt="05"/>5</a>
                        <a href="#" title="06"><img src="slider/data1/tooltips/06.jpg" alt="06"/>6</a>
                        <a href="#" title="07"><img src="slider/data1/tooltips/07.jpg" alt="07"/>7</a>
                        <a href="#" title="08"><img src="slider/data1/tooltips/08.jpg" alt="08"/>8</a>
                        <a href="#" title="09"><img src="slider/data1/tooltips/09.jpg" alt="09"/>9</a>
                    </div></div><span class="wsl">
                        <a href="http://wowslider.com/vu">image carousel</a> by WOWSlider.com v7.2</span>
                    <div class="ws_shadow"></div>
                    </div>	
                    <script type="text/javascript" src="slider/engine1/wowslider.js"></script>
                    <script type="text/javascript" src="slider/engine1/script.js"></script>

                <hr style="border-color:black;"/>
                <!-- End WOWSlider.com BODY section -->

            </div><!-- section ends --> 
            

            <div id="footer"><!-- footer starts --> 
                
                <!-- footer content goes here --> 
                <?php
                    include("footer.php");
                ?>
                
            </div><!-- footer ends --> 
            
            
        </div> <!-- header ends -->  
        
    </body>
</html>


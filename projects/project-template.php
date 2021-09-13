<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="Unicode/UTF-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    
    <meta name="description" content="Patricia Morales. An illustrator and graphic designer based in London, Ontario. Focused on digital illustrations, web design, UI/UX and branding." />
    <title>Patricia Morales :: Illustrator and Designer</title>

    		<!-- Font Awesome API -->
	  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
    <link rel="stylesheet" href=".././css/reset.css">
    <link rel="stylesheet" href=".././css/main.css">
    <meta name="viewport" content="width=device-width, initial-scale=1">
  </head>
<body>
<!-- fun header stuff -->
<!-- navbar -->
<header>
<!-- logo container begin -->
<div class="logo-container">
  <a href="http://localhost:8888/portfolio_2021-main/"><img class="header-logo" src="./img/temp-logo.png" alt="Patricia Garcia" height="100" width="100"></a>
<!-- logo container end -->  
</div>
<!-- navigation begins -->
<?php
// connect 
$conn = mysqli_connect("localhost", "root", "root", "db_portfolio");
// Check connection
if($conn === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
// Attempt select query execution
$sql = "SELECT * FROM `tbl_projects`";
$result = mysqli_query($conn, $sql);

mysqli_close($conn);
?>
<!-- end portfolio project loop -->

<nav class="header-nav">
  <ul>
    <li><a href="projects/project-template.php">portfolio</a></li>
    <li><a href="<?php echo $link ?>/project-template.php">about</a></li>
    <li><a href="<?php echo $link ?>/project-template.php">contact</a></li>
  </ul>
<!-- navigation ends -->
</nav>
<!-- header ends -->
</header>


<section class="portfolio-project-PROJECTNAME">
<div class="proj-header">
    <h2 class="projtitle">Title overlay</h2>
</div>

<div class="project-info">

    <h3 class="project-name">Project name</h3>
    <h4 class="project-objective-title">Objective</h4>
    <p class="project-objective">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus imperdiet tristique porttitor. Vivamus congue consequat imperdiet. Nam lacinia consequat odio in suscipit. Integer fermentum dignissim turpis, sit amet porta tortor sollicitudin quis. Donec vel ultricies sem. Donec tincidunt dignissim lectus, non pulvinar orci semper id. Quisque in est sem. In euismod, arcu varius vehicula porttitor, odio leo elementum neque, a tempor metus nisi vitae nulla. Suspendisse potenti. Sed venenatis dapibus blandit.</p>    

</div>

<div class='project-specifics'>

    <ul list='project-specs'>
        <li><span class="bold">Role:</span> Designer</li>
        <li><span class="bold">Year:</span> 2050!!</li>
        <li>UI/UX, Graphic Design</li>
    </ul>
    
</div>


<!-- parallax scroll -->
<section class="portfolio-parallax-project"></section>

<div class="project-description">
    <p class="desc">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus imperdiet tristique porttitor. Vivamus congue consequat imperdiet. Nam lacinia consequat odio in suscipit. Integer fermentum dignissim turpis, sit amet porta tortor sollicitudin quis. Donec vel ultricies sem. Donec tincidunt dignissim lectus, non pulvinar orci semper id. Quisque in est sem.</p>
</div>



<div class='project-views-container'>

<section class="portfolio-closeup">
    <img src="../img/tidal_thumb.jpg" alt="">
    <img src="../img/tidal_thumb.jpg" alt="">
    <img src="../img/tidal_thumb.jpg" alt="">
    <img src="../img/tidal_thumb.jpg" alt="">
</section>

</div>

<div class="proj-links clearfix">
    <ul>
        <li class="prevProj left"><a href="#home"><i class="fas fa-angle-left"></i><br> Project name</a></li>
        <li class="allProj"><a href="#home">View All</a></li>
        <li class="nextProj right"><a href="#home"><i class="fas fa-angle-right"></i><br> Project name </a></li>
    </ul>
</div>
<!-- portfolio proj ends -->
</section>


<?php require_once '.././sections/footer.php'; ?>

<!--- end body --->
</body>
<script src="js/button.js"></script>
</html>
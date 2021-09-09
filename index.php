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
    <link rel="stylesheet" href="css/reset.css">
    <link rel="stylesheet" href="css/main.css">
    <meta name="viewport" content="width=device-width, initial-scale=1">
  </head>
<body>
<!-- fun header stuff -->

<!-- header starts -->
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
    <li><?php echo ' <a href=" ' . $link . ' ">Portfolio</a> ' ; ?></li>
    <li><?php echo ' <a href=" ' . $link . ' ">About</a> ' ; ?></li>
    <li><?php echo ' <a href=" ' . $link . $row['project_name'] . ' ">Contact</a> ' ; ?></li>
  </ul>
<!-- navigation ends -->
</nav>
<!-- header ends -->
</header>

<?php
// Program to display URL of current page.
  
if(isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on')
    $link = "https";
else
    $link = "http";
  
// Here append the common URL characters.
$link .= "://";
  
// Append the host(domain name, ip) to the URL.
$link .= $_SERVER['HTTP_HOST'];
  
// Append the requested resource location to the URL
$link .= $_SERVER['REQUEST_URI'];
      
// Print the link
//echo $link;
?>


<!-- header ends -->


<!-- edit content to match page -->
<?php include 'sections/body.php'; ?>


<!-- fun footer stuff -->

<?php include 'sections/footer.php'; ?>

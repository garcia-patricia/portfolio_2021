
<div class="content-container">
<section class="about-main">
           <p class="text-center-hidden">Trisha Morales, Illustrator &amp; Designer located in London,Ontario.</p>
    <!-- intro text ends -->
</section>


<section class="portfolio-projects">
    <!-- PHP echo and loop through all projects -->

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

if (mysqli_num_rows($result) > 0) {
  // output data of each row
  while($row = mysqli_fetch_assoc($result)) {
    echo "<div class='portfolio-grid'><a href='http://www.google.com/" .$row['project_thumbnail']. "'><img class='thumbnail-image' src='img/" . $row['project_thumbnail'] . " ' /> ";
    echo "<div class='middle'><h1 class='thumb-project-title'> " .$row['project_name']. "</h1></a></div></div>";
    //this echos out the project info, making sure it works
    //echo "id: " . $row["id"]. " - Name: " . $row["project_thumbnail"]. "<br>";
  }
} else {
  echo "No results";
}
mysqli_close($conn);
?>

<!-- end portfolio project loop -->



<!-- portfolio grid ends -->
    </div>
<!-- portfolio proj ends -->
</section>

<!-- container ends -->
</div>
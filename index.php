<?php
include('includes/header.php'); 
include('includes/navbar.php'); 
?>


<!-- Begin Page Content -->
<div class="container-fluid">

  <!-- Page Heading -->
  <div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">COVID</h1>
    <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
        class="fas fa-download fa-sm text-white-50"></i> Generate Report</a>

  </div>
  <form action="" method="POST">
Enter Search Query: 
<input type="text" name="search_entered" value=''/> <br><br>
 
<input type="submit" name="submit" value="Search"/><br><br>
</form>
<?php

$search= $_POST['search_entered'];

$searchoriginal= $search;

$search= strtolower($search);

$search= trim($search);



$search= explode(" ", $search);

$countsearchterms= count($search);

$submitbutton= $_POST['submit'];

?>


<?php

$directory = "Articles/";


if ($submitbutton){
if (!empty($searchoriginal)) 
{
if (is_dir($directory)){

  if ($open = opendir($directory)){
if ($countsearchterms == 1)
{
    while (($file = readdir($open)) !== false){
  $fileoriginal= $file;
  $file= strtolower($file);
  $file= str_replace("-", " ", $file);
  $file= str_replace("_", " ", $file);
  $position= strpos("$file", ".");
  $file= substr($file, 0, $position);
  
      if (strpos("$file",  "$search[0]") !== false)
  {
  $file= ucwords($file);
  $array[] += "$file";
   echo "<a href='http://www.learningaboutelectronics.com/$directory" . "$fileoriginal'>$file</a>"."<br>";
}
 
  
    }
}
else if ($countsearchterms == 2) {
while (($file = readdir($open)) !== false){
$fileoriginal= $file;
  $file= strtolower($file);
  $file= str_replace("-", " ", $file);
  $position= strpos("$file", ".");
  $file= substr($file, 0, $position);
      if ((strpos("$file",  "$search[0]") !== false) && (strpos("$file",  "$search[1]") !== false))
  {
  $file= ucwords($file);
  $array[] += "$file";
   echo "<a href='http://www.learningaboutelectronics.com/$directory" . "$fileoriginal'>$file</a>"."<br>";
}
 
  
    }
    

}

else if ($countsearchterms == 3) {
while (($file = readdir($open)) !== false){
$fileoriginal= $file;
  $file= strtolower($file);
  $file= str_replace("-", " ", $file);
  $position= strpos("$file", ".");
  $file= substr($file, 0, $position);
      if ((strpos("$file",  "$search[0]") !== false) && (strpos("$file",  "$search[1]") !== false) && (strpos("$file",  "$search[2]") !== false))
  {
  $file= ucwords($file);
  $array[] += "$file";
   echo "<a href='http://www.learningaboutelectronics.com/$directory" . "$fileoriginal'>$file</a>"."<br>";
}
 
  
    }
    

}

else if ($countsearchterms == 4) {
while (($file = readdir($open)) !== false){
$fileoriginal= $file;
  $file= strtolower($file);
  $file= str_replace("-", " ", $file);
  $position= strpos("$file", ".");
  $file= substr($file, 0, $position);
      if ((strpos("$file",  "$search[0]") !== false) && (strpos("$file",  "$search[1]") !== false) && (strpos("$file",  "$search[2]") !== false)&& (strpos("$file",  "$search[3]") !== false))
  {
  $file= ucwords($file);
  $array[] += "$file";
   echo "<a href='http://www.learningaboutelectronics.com/$directory" . "$fileoriginal'>$file</a>"."<br>";
}
 
  
    }
    

}

else if ($countsearchterms == 5) {
while (($file = readdir($open)) !== false){
$fileoriginal= $file;
  $file= strtolower($file);
  $file= str_replace("-", " ", $file);
  $position= strpos("$file", ".");
  $file= substr($file, 0, $position);
      if ((strpos("$file",  "$search[0]") !== false) && (strpos("$file",  "$search[1]") !== false) && (strpos("$file",  "$search[2]") !== false)&& (strpos("$file",  "$search[3]") !== false)
&& (strpos("$file",  "$search[4]") !== false))
  {
  $file= ucwords($file);
  $array[] += "$file";
   echo "<a href='http://www.learningaboutelectronics.com/$directory" . "$fileoriginal'>$file</a>"."<br>";
}
}  
}
else if ($countsearchterms == 6) {
while (($file = readdir($open)) !== false){
$fileoriginal= $file;
  $file= strtolower($file);
  $file= str_replace("-", " ", $file);
  $position= strpos("$file", ".");
  $file= substr($file, 0, $position);
      if ((strpos("$file",  "$search[0]") !== false) && (strpos("$file",  "$search[1]") !== false) && (strpos("$file",  "$search[2]") !== false)&& (strpos("$file",  "$search[3]") !== false)
&& (strpos("$file",  "$search[4]") !== false) && (strpos("$file",  "$search[5]") !== false))
  {
  $file= ucwords($file);
  $array[] += "$file";
   echo "<a href='http://www.learningaboutelectronics.com/$directory" . "$fileoriginal'>$file</a>"."<br>";
}
}  
}
else if ($countsearchterms == 7) {
while (($file = readdir($open)) !== false){
$fileoriginal= $file;
  $file= strtolower($file);
  $file= str_replace("-", " ", $file);
  $position= strpos("$file", ".");
  $file= substr($file, 0, $position);
      if ((strpos("$file",  "$search[0]") !== false) && (strpos("$file",  "$search[1]") !== false) && (strpos("$file",  "$search[2]") !== false)&& (strpos("$file",  "$search[3]") !== false)
&& (strpos("$file",  "$search[4]") !== false) && (strpos("$file",  "$search[5]") !== false) && (strpos("$file",  "$search[6]") !== false))
  {
  $file= ucwords($file);
  $array[] += "$file";
   echo "<a href='http://www.learningaboutelectronics.com/$directory" . "$fileoriginal'>$file</a>"."<br>";
}
}  
}
closedir($open);
    }

  }//while loop

$arraycount= count($array);

if ($arraycount == 0)
{
echo "No results for this search entered";
}
}
}
?>



  <!-- Content Row -->
  <div class="row">

    <!-- Earnings (Monthly) Card Example -->
    <div class="col-xl-3 col-md-6 mb-4">
      <div class="card border-left-primary shadow h-100 py-2">
        <div class="card-body">
          <div class="row no-gutters align-items-center">
            <div class="col mr-2">
              <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Tests</div>
              <div class="h5 mb-0 font-weight-bold text-gray-800">

               <h4>Test info:</h4>

              </div>
            </div>
            <div class="col-auto">
              <i class="fas fa-calendar fa-2x text-gray-300"></i>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Earnings (Monthly) Card Example -->
    <div class="col-xl-3 col-md-6 mb-4">
      <div class="card border-left-success shadow h-100 py-2">
        <div class="card-body">
          <div class="row no-gutters align-items-center">
            <div class="col mr-2">
              <div class="text-xs font-weight-bold text-success text-uppercase mb-1">Treatment</div>
              <div class="h5 mb-0 font-weight-bold text-gray-800">$215,000</div>
            </div>
            <div class="col-auto">
              <i class="fas fa-dollar-sign fa-2x text-gray-300"></i>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Earnings (Monthly) Card Example -->
    <div class="col-xl-3 col-md-6 mb-4">
      <div class="card border-left-info shadow h-100 py-2">
        <div class="card-body">
          <div class="row no-gutters align-items-center">
            <div class="col mr-2">
              <div class="text-xs font-weight-bold text-info text-uppercase mb-1">Managment</div>
              <div class="row no-gutters align-items-center">
                <div class="col-auto">
                  <div class="h5 mb-0 mr-3 font-weight-bold text-gray-800">50%</div>
                </div>
                <div class="col">
                  <div class="progress progress-sm mr-2">
                    <div class="progress-bar bg-info" role="progressbar" style="width: 50%" aria-valuenow="50"
                      aria-valuemin="0" aria-valuemax="100"></div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-auto">
              <i class="fas fa-clipboard-list fa-2x text-gray-300"></i>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Pending Requests Card Example -->
    <div class="col-xl-3 col-md-6 mb-4">
      <div class="card border-left-warning shadow h-100 py-2">
        <div class="card-body">
          <div class="row no-gutters align-items-center">
            <div class="col mr-2">
              <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">Pending Requests</div>
              <div class="h5 mb-0 font-weight-bold text-gray-800">18</div>
            </div>
            <div class="col-auto">
              <i class="fas fa-comments fa-2x text-gray-300"></i>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- Content Row -->








  <?php
include('includes/scripts.php');
include('includes/footer.php');
?>
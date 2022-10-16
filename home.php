<?php
    $name = "Amanda McGraw";
    $location = "Cambridge, MA";
    $emergency_lat_long = "37.790917, -122.410719";

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>inSurely</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
  <style>
    #accident_message{
      display:none;
    }
  </style>
</head>
<body>
<nav class="navbar navbar-expand-md bg-primary navbar-dark text-white">
  <a class="navbar-brand mr-auto" href="/home.php">inSurely</a>
  <p><?php echo $name.' ('.$location.') '; ?></p>
  <a class="ml-2 btn btn-danger" href="index.php">Logout</a>

</nav>
<div class="container">
  <div id="welcome_message">
    <h3 class="text-center mt-5">
      Welcome. Everything Looks Good.
      <br>
      <br>
      <img class="img-responsive" src="https://therealdeal.com/wp-content/uploads/2021/12/Main-Leonardo-DiCaprio-Gatsby.jpg" height="300" alt="">
    </h3>
  </div>
  <div id="accident_message">
    <h3 class="text-center mt-2"> 
    <img class="img-responsive" src="a.svg" height="100" width="100" alt="">
    <br>    
    Accident Detected</h3>
    <br>
    <div class="mapouter"><div class="gmap_canvas"><iframe width="1100" height="400" id="gmap_canvas" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2949.662340864836!2d-71.10451756970171!3d42.328400178539795!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89e37987010575c9%3A0xa8acceca6e653b2c!2s234%20Calumet%20St%2C%20Boston%2C%20MA%2002120!5e0!3m2!1sen!2sus!4v1665949227459!5m2!1sen!2sus" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe><a href="https://123movies-to.org"></a><br><style>.mapouter{position:relative;text-align:right;height:400px;width:1100px;}</style><a href="https://www.embedgooglemap.net">google map html embed</a><style>.gmap_canvas {overflow:hidden;background:none!important;height:400px;width:1100px;}</style></div></div>
    <button type="button" class="mt-4 btn btn-primary btn-block" onclick="window.location.href= 'help.php'">Find inSured Hospitals</button>
  </div>

</div>
<script>
  setTimeout(() => {
    $('#welcome_message').hide();
    $('#accident_message').show();
  }, 5000);
</script>
</body>


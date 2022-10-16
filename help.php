<?php
    $name = "Amanda McGraw";
    $location = "Cambridge, MA";
    $emergency_lat_long = "37.790917, -122.410719";

    function fetchData(){
      $cURLConnection = curl_init();
      curl_setopt($cURLConnection, CURLOPT_URL, 'https://fhir.4msbckns3qy4.static-test-account.isccloud.io/Organization?address-state=MA');
      curl_setopt($cURLConnection, CURLOPT_RETURNTRANSFER, true);
      curl_setopt($cURLConnection, CURLOPT_HTTPHEADER, array(
        'accept: application/fhir+json',
        'x-api-key: pwiqHvBChwKatYEvoo6q7I5QFUqNnGi94uudVrn0'
      ));
      $phoneList = curl_exec($cURLConnection);
      curl_close($cURLConnection);
      $jsonArrayResponse = json_decode($phoneList);
      return $jsonArrayResponse;
    }
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
</head>
<body>
<nav class="navbar navbar-expand-md bg-primary navbar-dark text-white">
  <a class="navbar-brand mr-auto" href="/home.php">inSurely</a>
  <p><?php echo $name.' ('.$location.') '; ?></p>
  <a class="ml-2 btn btn-danger" href="index.php">Logout</a>
</nav>
<div class="container">
    <h3 class="text-center mt-5"> 
    <br>    
    Available Hospitals</h3>
    <div class="mapouter"><div class="gmap_canvas">
    <iframe id="gmap_canvas" width="1100" height="400" 
    src="https://www.google.com/maps/d/embed?mid=18PKlX-Fdk9-_IsDWPncOY9ABZIYinZ8&ehbc=2E312F" 
    width="640" height="480"></iframe>
    <a href="https://123movies-to.org"></a><br><style>.mapouter{position:relative;text-align:right;height:400px;width:1100px;}</style><a href="https://www.embedgooglemap.net">google map html embed</a><style>.gmap_canvas {overflow:hidden;background:none!important;height:400px;width:1100px;}</style></div></div>
    <span class="mt-3">
    <table class="table">
      <thead class="thead-dark">
        <tr>
          <th scope="col">Name</th>
          <th scope="col">City</th>
          <th scope="col">State</th>
        </tr>
      </thead>
      <tbody>
  


    <?php
      $data = fetchData()->entry;
      foreach ($data as $key => $value) {
        ;
        echo '
        <tr>
        <td>';
        print_r($value->resource->name);
        echo '</td>
        <td>';
        print_r($value->resource->address[0]->city);
        echo '</td>
        <td>';
        print_r($data[0]->resource->address[0]->state);
        echo '</td></tr>';
      }
      
      
      
    ?>
      </tbody>
</table>
    </span>
</div>

</body>
</html>
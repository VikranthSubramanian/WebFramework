
<?php
//index.php
$Fixed = '';
$Adaptive = '';
$Flashingred = '';
$Flashingyellow = '';
$Green_Ext = '';
$Interrupt='';
$Synch='';
$Plan='';
$CycleTime='';
$Phase='';
$TimeZone='';
$Controller = '';
$Number_of_Approaches='';
$Number_of_Movements = '';
$Freeflowtraveltime ='';
$Number_of_NoMovements ='';
$Num_Plans='';
$StageTimeFlashingred='';
$StageFlashingred='';
$StageTimeFlashingorange='';
$StageFlashingorange='';
$Synchcontroller='';
$Address = '';
$lat= '';
$long = '';
$Plan_Number = '';
$Starttime= '';
$Endtime = '';
$Cycletimeplan = '';
$Green_times = '';
$Green_times_lower='';
$Green_times_upper='';
$Yellow='';
$Red='';
$Maxlight='';
$offset_tol='';
$offset_maxded='';
$offset_phase='';
$Stages='';
$Stagestime='';
$Num_ped='';
$offset_stages='';
$Fixed = '';
$Adaptive = '';
$Flashingred = '';
$Flashingyellow = '';
$Green_Ext = '';
$Interrupt='';
$Synch='';
$Plan='';
$CycleTime='';
$Phase='';
$TimeZone='';
$Controller = '';
$Number_of_Approaches='';
$Number_of_Movements = '';
$Freeflowtraveltime ='';
$Number_of_NoMovements ='';
$Num_Plans='';
$StageTimeFlashingred='';
$StageFlashingred='';
$StageTimeFlashingorange='';
$StageFlashingorange='';
$Synchcontroller='';
$Address = '';
$lat= '';
$long = '';
$Plan_Number = '';
$Starttime= '';
$Endtime = '';
$Cycletimeplan = '';
$Green_times = '';
$Green_times_lower='';
$Green_times_upper='';
$Yellow='';
$Red='';
$Maxlight='';
$offset_tol='';
$offset_maxded='';
$offset_phase='';
$Stages='';
$Stagestime='';
$Num_ped='';
$offset_stages='';
function clean_text($string)
{
 $string = trim($string);
 $string = stripslashes($string);
 $string = htmlspecialchars($string);
 return $string;
}
$t=1;
if(isset($_POST["submit"]))
{
  $Fixed = $_POST["Fixed"];
  $Adaptive= $_POST["Adaptive"];
  $Flashingred = $_POST["Flashingred"];
  $Flashingyellow = $_POST["Flashingyellow"];
  $Green_Ext = $_POST["Green_Ext"];
  $Interrupt=$_POST["Interrupt"];
  $Synch=$_POST["Synch"];
  $Plan=$_POST["Plan"];
  $CycleTime=$_POST["CycleTime"];
  $Phase=$_POST["Phase"];
  $TimeZone=$_POST["TimeZone"];
  $error='';
 if($error == '')
 {
  $file_open = fopen("Form1.csv", "a");
  $no_rows = count(file("Form1.csv"));
  if($no_rows > 1)
  {
   $no_rows = ($no_rows - 1) + 1;
  }
  $form_data = array(
   'sr_no'  => $no_rows+1,
   'Fixed'  => $Fixed,
   'Adaptive'  => $Adaptive,
   'Flashingred' => $Flashingred,
   'Flashingyellow' => $Flashingyellow,
   'Green_ext' => $Green_Ext,
   'Interrupt' => $Interrupt,
   'Synch' => $Synch,
   'Plan' => $Plan,
   'CycleTime' => $CycleTime,
   'Phase' => $Phase,
   'TimeZone' => $TimeZone

  );
  if ($t < 2) {
    if ($no_rows<1){
        $t=$t+1;
        echo $t;
        $index_elem= array("Fixed", "Adaptive", "Flashingred", "Flashingyellow", "Green_Ext","Interrupt","Synch","Plan","CycleTime","Phase","TimeZone"); 
        $form_data1 = array(
            'sr_no'  => $no_rows,
            'Fixed'  => $index_elem[0],
            'Adaptive'  => $index_elem[1],
            'Flashingred' => $index_elem[2],
            'Flashingyellow' => $index_elem[3],
            'Green_ext' => $index_elem[4],
            'Interrupt' => $index_elem[5],
            'Synch' => $index_elem[6],
            'Plan' => $index_elem[7],
            'CycleTime' => $index_elem[8],
            'Phase' => $index_elem[9],
            'TimeZone' => $index_elem[10]
           );
        fputcsv($file_open, $form_data1);
    }
    }
}
  fputcsv($file_open, $form_data);
  $error = '<label class="text-success">Converting to CSV is successful</label>';
  $Fixed = '';
  $Adaptive = '';
  $Flashingred = '';
  $Flashingyellow = '';
  $Green_Ext = '';
  $Interrupt='';
  $Synch='';
  $Plan='';
  $CycleTime='';
  $Phase='';
  $TimeZone='';
}
if(isset($_POST["submit1"]))
{
  $Controller = $_POST["Controller"];
  $Number_of_Approaches= $_POST["Number_of_Approaches"];
  $Number_of_Movements = $_POST["Number_of_Movements"];
  $Freeflowtraveltime = $_POST["Freeflowtraveltime"];
  $Number_of_NoMovements = $_POST["Number_of_NoMovements"];
  $Num_Plans=$_POST["Num_Plans"];
  $StageTimeFlashingred=$_POST["StageTimeFlashingred"];
  $StageFlashingred=$_POST["StageFlashingred"];
  $StageTimeFlashingorange=$_POST["StageTimeFlashingorange"];
  $StageFlashingorange=$_POST["StageFlashingorange"];
  $Synchcontroller=$_POST["Synchcontroller"];
  $error='';
 if($error == '')
 {
  $file_open1 = fopen("Form2.csv", "a");
  $no_rows1 = count(file("Form2.csv"));
  if($no_rows1 > 1)
  {
   $no_rows1 = ($no_rows1 - 1) + 1;
  }
  $form_data3 = array(
   'sr_no'  => $no_rows1+1,
   'Controller'  => $Controller,
   'Number_of_Approaches'  => $Number_of_Approaches,
   'Number_of_Movements' => $Number_of_Movements,
   'Freeflowtraveltime' => $Freeflowtraveltime,
   'Number_of_NoMovements' => $Number_of_NoMovements,
   'Num_Plans' => $Num_Plans,
   'StageTimeFlashingred' => $StageTimeFlashingred,
   'StageFlashingred' => $PStageFlashingredlan,
   'StageTimeFlashingorange' => $StageTimeFlashingorange,
   'StageFlashingorange' => $StageFlashingorange,
   'Synchcontroller' => $Synchcontroller

  );
  if ($no_rows1<1){
    $t=$t+1;
    $index_elem= array("Controller", "Number_of_Approaches", "Number_of_Movements", "Freeflowtraveltime", "Number_of_NoMovements","Num_Plans","StageTimeFlashingred","StageFlashingred","StageTimeFlashingorange","PhaStageFlashingorangese","Synchcontroller"); 
    $form_data4 = array(
        'sr_no'  => $no_rows1,
        'Controller'  => $index_elem[0],
        'Number_of_Approaches'  => $index_elem[1],
        'Number_of_Movements' => $index_elem[2],
        'Number_of_NoMovements' => $index_elem[3],
        'Num_Plans' => $index_elem[4],
        'StageTimeFlashingred' => $index_elem[5],
        'StageFlashingred' => $index_elem[6],
        'Plan' => $index_elem[7],
        'StageTimeFlashingorange' => $index_elem[8],
        'StageFlashingorange' => $index_elem[9],
        'Synchcontroller' => $index_elem[10]
        );
    fputcsv($file_open1, $form_data4);
    }
}
  fputcsv($file_open1, $form_data3);
  $error = '<label class="text-success">Converting to CSV is successful</label>';
  $Controller = '';
  $Number_of_Approaches='';
  $Number_of_Movements = '';
  $Freeflowtraveltime ='';
  $Number_of_NoMovements ='';
  $Num_Plans='';
  $StageTimeFlashingred='';
  $StageFlashingred='';
  $StageTimeFlashingorange='';
  $StageFlashingorange='';
  $Synchcontroller='';
}
if(isset($_POST["submit2"]))
{
  $Plan_Number = $_POST["Plan_Number"];
  $Starttime= $_POST["Starttime"];
  $Endtime = $_POST["Endtime"];
  $Cycletimeplan = $_POST["Cycletimeplan"];
  $Green_times = $_POST["Green_times"];
  $Green_times_lower=$_POST["Green_times_lower"];
  $Green_times_upper=$_POST["Green_times_upper"];
  $Yellow=$_POST["Yellow"];
  $Red=$_POST["Red"];
  $Maxlight=$_POST["Maxlight"];
  $offset_tol=$_POST["offset_tol"];
  $offset_maxded=$_POST["offset_maxded"];
  $offset_phase=$_POST["offset_phase"];
  $Stages=$_POST["Stages"];
  $Stagestime=$_POST["Stagestime"];
  $Num_ped=$_POST["Num_ped"];
  $offset_stages=$_POST["offset_stages"];
  $error='';
 if($error == '')
 {
  $file_open2 = fopen("Form3.csv", "a");
  $no_rows2 = count(file("Form3.csv"));
  if($no_rows2 > 1)
  {
   $no_rows2= ($no_rows2 - 1) + 1;
  }
  $form_data5 = array(
   'sr_no'  => $no_rows2,
   'Plan_Number'  => $Plan_Number,
   'Starttime'  => $Starttime,
   'Endtime' => $Endtime,
   'Cycletimeplan' => $Cycletimeplan,
   'Green_times' => $Green_times,
   'Green_times_lower' => $Green_times_lower,
   'Green_times_upper' => $Green_times_upper,
   'Yellow' => $Yellow,
   'Red' => $Red,
   'Maxlight' => $Maxlight,
   'offset_tol' => $offset_tol,
   'offset_maxded' => $offset_maxded,
   'offset_phase' => $offset_phase,
   'Stages' => $Stages,
   'Stagestime' => $Stagestime,
   'Num_ped' => $Num_ped,
   'offset_stages' => $offset_stages
  );
  if ($no_rows2<1){
    $t=$t+1;
    $index_elem= array("Plan_Number", "Starttime", "Endtime", "Cycletimeplan", "Green_times","Green_times_lower","Green_times_upper","Yellow","Red","Maxlight","offset_tol","offset_maxded","offset_phase","Stages","Stagestime","Num_ped","offset_stages"); 
    $form_data6 = array(
        'sr_no'  => $no_rows2,
        'Plan_Number'  => $index_elem[0],
        'Starttime'  => $index_elem[1],
        'Endtime' => $index_elem[2],
        'Cycletimeplan' => $index_elem[3],
        'Green_times' => $Green_times[4],
        'Green_times_lower' => $index_elem[5],
        'Green_times_upper' => $index_elem[6],
        'Yellow' => $index_elem[7],
        'Red' => $index_elem[8],
        'Maxlight' => $index_elem[9],
        'offset_tol' => $index_elem[10],
        'offset_maxded' => $index_elem[11],
        'offset_phase' => $index_elem[12],
        'Stages' => $index_elem[13],
        'Stagestime' => $index_elem[14],
        'Num_ped' => $index_elem[15],
        'offset_stages' => $index_elem[16]
        );
    fputcsv($file_open2, $form_data6);
    }
}
  fputcsv($file_open2, $form_data5);
  $error = '<label class="text-success">Converting to CSV is successful</label>';
  $Plan_Number = '';
  $Starttime= '';
  $Endtime = '';
  $Cycletimeplan = '';
  $Green_times = '';
  $Green_times_lower='';
  $Green_times_upper='';
  $Yellow='';
  $Red='';
  $Maxlight='';
  $offset_tol='';
  $offset_maxded='';
  $offset_phase='';
  $Stages='';
  $Stagestime='';
  $Num_ped='';
  $offset_stages='';
}
if(isset($_POST["submit3"]))
{
  $lat = $_POST["lat"];
  $long= $_POST["long"];
  $Address = $_POST["address"];
  $error='';
 if($error == '')
 {
  $file_open3 = fopen("Form4.csv", "a");
  $no_rows3 = count(file("Form4.csv"));
  if($no_rows3 > 1)
  {
   $no_rows3= ($no_rows3 - 1) + 1;
  }
  $form_data7 = array(
   'sr_no'  => $no_rows3+1,
   'lat'  => $lat,
   'long'  => $long,
   'Address' => $Address,
  );
  if ($no_rows3<1){
    $t=$t+1;
    $index_elem= array("lat", "long","Address"); 
    $form_data6 = array(
        'sr_no'  => $no_rows3,
        'lat'  => $index_elem[0],
        'long'  => $index_elem[1],
        'Address' => $index_elem[2]
        );
    fputcsv($file_open3, $form_data6);
    }
}
  fputcsv($file_open3, $form_data7);
  $error = '<label class="text-success">Converting to CSV is successful</label>';
  $Address = '';
  $lat= '';
  $long = '';
}

?>
<!DOCTYPE html>
<html>
 <head>
    <title>CSV Converter</title>
    <style>
 #myMap {
   height: 350px;
   width: 680px;
  }
  </style>
  <title>Storing form data in csv</title>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <script src="https://maps.googleapis.com/maps/api/js?&sensor=false">
  </script>
  <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js">
  </script>
  <script type="text/javascript"> 
  var map;
  var marker;
  var myLatlng = new google.maps.LatLng(-33.605564955904455,150.86982656250007);
  var geocoder = new google.maps.Geocoder(); 
  var infowindow = new google.maps.InfoWindow();
  function initialize(){
  var mapOptions = {
  zoom: 18,
  center: myLatlng,
  mapTypeId: google.maps.MapTypeId.ROADMAP
  };
  map = new google.maps.Map(document.getElementById("myMap"), mapOptions);
  marker = new google.maps.Marker({
  map: map,
  position: myLatlng,
  draggable: true 
  }); 

  geocoder.geocode({'latLng': myLatlng }, function(results, status) {
  if (status == google.maps.GeocoderStatus.OK) {
  if (results[0]) {
  $('#latitude,#longitude').show();
  $('#Address').val(results[0].formatted_address);
  $('#latitude').val(marker.getPosition().lat());
  $('#longitude').val(marker.getPosition().lng());
  infowindow.setContent(results[0].formatted_address);
  infowindow.open(map, marker);
  }
  }
  });

  google.maps.event.addListener(marker, 'dragend', function() {

  geocoder.geocode({'latLng': marker.getPosition()}, function(results, status) {
  if (status == google.maps.GeocoderStatus.OK) {
  if (results[0]) {
  $('#address').val(results[0].formatted_address);
  $('#latitude').val(marker.getPosition().lat());
  $('#longitude').val(marker.getPosition().lng());
  infowindow.setContent(results[0].formatted_address);
  infowindow.open(map, marker);
  }
  }
  });
  });

  }
  google.maps.event.addDomListener(window, 'load', initialize);
  </script>
 </head>
 <body>
  <br />
    <div class="page" id="one" style='display:block;'>
        <h2 align="center">Storing form data in csv</h2>
    <br />
        <div class="col-md-6" style="margin:0 auto; float:none;">
            <form method="post">
            <h3 align="center">Enter Details</h3>
            <br />
            <?php echo $error; ?>
            <div class="form-group">
            <label>Fixed</label>
            <select input type="text" name="Fixed" placeholder="Enter Fixed" class="form-control" value="<?php echo $Fixed; ?>" >
            <option></option>
            <option>0</option>
            <option>1</option>
            </select>
            </div>
            <div class="form-group">
            <label>Adaptive</label>
            <select input type="text" name="Adaptive" placeholder="Enter Adaptive"  class="form-control" value="<?php echo $Adaptive; ?>" >
            <option></option>
            <option>0</option>
            <option>1</option>
            </select>
            </div>
            <div class="form-group">
            <label>Flashing Red</label>
            <select input type="text" name="Flashingred" placeholder="Enter Flashing Red"  class="form-control" value="<?php echo $Flashingred; ?>" >
            <option></option>
            <option>0</option>
            <option>1</option>
            </select>
            </div>
            <div class="form-group">
            <label>Flashing Yellow</label>
            <select input type="text" name="Flashingyellow" placeholder="Enter Flashing Yellow"  class="form-control" value="<?php echo $Flashingyellow; ?>" >
            <option></option>
            <option>0</option>
            <option>1</option>
            </select>
            </div>
            <div class="form-group">
            <label>Green_Ext</label>
            <select input type="text" name="Green_Ext" placeholder="Enter Green_Ext"  class="form-control" value="<?php echo $Green_Ext; ?>" >
            <option></option>
            <option>0</option>
            <option>1</option>
            </select>
            </div>
            <div class="form-group">
            <label>Interrupt</label>
            <select input type="text" name="Interrupt" placeholder="Enter Interrupt"  class="form-control" value="<?php echo $Interrupt; ?>" >
            <option></option>
            <option>101</option>
            <option>102</option>
            </select>
            </div>
            <div class="form-group">
            <label>Synch</label>
            <select input type="text" name="Synch" placeholder="Enter Synch"  class="form-control" value="<?php echo $Synch; ?>" >
            <option></option>
            <option>1</option>
            <option>2</option>
            <option>3</option>
            <option>4</option>
            <option>5</option>
            <option>6</option>
            <option>7</option>
            <option>8</option>
            <option>9</option>
            <option>20</option>
            </select>
            </div>
            <div class="form-group">
            <label>Plan</label>
            <select input type="text" name="Plan" placeholder="Enter Plan"  class="form-control" value="<?php echo $Plan; ?>" >
            <option></option>
            <option>1</option>
            <option>2</option>
            </select>
            </div>
            <div class="form-group">
            <label>Enter CycleTime</label>
            <textarea name="CycleTime" class="form-control" placeholder="Enter CycleTime"><?php echo $CycleTime; ?></textarea>
            </div>
            <div class="form-group">
            <label>Phase</label>
            <select input type="text" name="Phase" placeholder="Enter Phase"  class="form-control" value="<?php echo $Phase; ?>" >
            <option></option>
            <option>1</option>
            <option>2</option>
            </select>
            </div>
            <div class="form-group">
            <label>TimeZone</label>
            <select input type="text" name="TimeZone" placeholder="Enter TimeZone"  class="form-control"  value="<?php echo $TimeZone; ?>" >
            <option></option>
            <option>Asia/Kolkata</option>
            <option>Others</option>
            </select>
            </div>
            <div class="form-group" align="center">
            <input type="submit" name="submit" class="btn btn-info" value="Submit"/>
            </div>
            </form>
        </div>
        <ul>
            <li><input type='button' value='Page2' onClick = "document.getElementById('two').style.display= 'block'; document.getElementById('one').style.display= 'none';document.getElementById('three').style.display= 'none';document.getElementById('four').style.display= 'none';"></li>
            <li><input type='button' value='Page3' onClick = "document.getElementById('three').style.display= 'block'; document.getElementById('one').style.display= 'none';document.getElementById('two').style.display= 'none';document.getElementById('four').style.display= 'none';"></li>
            <li><input type='button' value='Page4' onClick = "document.getElementById('four').style.display= 'block'; document.getElementById('one').style.display= 'none';document.getElementById('three').style.display= 'none';document.getElementById('two').style.display= 'none';"></li>
        </ul>
    </div>
    <div class="col-md-6" style="margin:0 auto; float:none;">
    <div class="page" id="three" style='display:none;'>
    <h2 align="center">Storing form data in csv</h2>
    <form method="post">
    <div class="form-group">
    <label>Enter Controller</label>
    <textarea name="Controller" class="form-control" placeholder="Enter Controller"><?php echo $Controller; ?></textarea>
    </div>
    <div class="form-group">
    <label>Number_of_Approaches</label>
    <select input type="text" name="Number_of_Approaches" placeholder="Enter Number_of_Approaches"  class="form-control" value="<?php echo $Number_of_Approaches; ?>" >
    <option></option>
    <option>0</option>
    <option>1</option>
    <option>2</option>
    <option>3</option>
    <option>4</option>
    </select>
    </div>
    <div class="form-group">
    <label>Number_of_Movements</label>
    <select input type="text" name="Number_of_Movements" placeholder="Enter Number_of_Movements"  class="form-control" value="<?php echo $Number_of_Movements; ?>" >
    <option></option>
    <option>0</option>
    <option>1</option>
    <option>2</option>
    <option>3</option>
    <option>4</option>
    <option>5</option>
    <option>6</option>
    <option>7</option>
    <option>8</option>
    <option>9</option>
    <option>10</option>
    <option>11</option>
    <option>12</option>
    <option>13</option>
    <option>14</option>
    </select>
    </div>
    <div class="form-group">
    <label>Enter Freeflowtraveltime</label>
    <textarea name="Freeflowtraveltime" class="form-control" placeholder="Enter Freeflowtraveltime"><?php echo $Freeflowtraveltime; ?></textarea>
    </div>
    <div class="form-group">
    <label>Enter Number_of_NoMovements</label>
    <textarea name="Number_of_NoMovements" class="form-control" placeholder="Enter Number_of_NoMovements"><?php echo $Number_of_NoMovements; ?></textarea>
    </div>
    <div class="form-group">
    <label>Enter Num_Plans</label>
    <textarea name="Num_Plans" class="form-control" placeholder="Enter Num_Plans"><?php echo $Num_Plans; ?></textarea>
    </div>
    <div class="form-group">
    <label>Enter StageTimeFlashingred</label>
    <textarea name="StageTimeFlashingred" class="form-control" placeholder="Enter StageTimeFlashingred"><?php echo $StageTimeFlashingred; ?></textarea>
    </div>
    <div class="form-group">
    <label>Enter StageFlashingred</label>
    <textarea name="StageFlashingred" class="form-control" placeholder="Enter StageFlashingred"><?php echo $StageFlashingred; ?></textarea>
    </div>
    <div class="form-group">
    <label>Enter StageTimeFlashingorange</label>
    <textarea name="StageTimeFlashingorange" class="form-control" placeholder="Enter StageTimeFlashingorange"><?php echo $StageTimeFlashingorange; ?></textarea>
    </div>
    <div class="form-group">
    <label>Enter StageFlashingorange</label>
    <textarea name="StageFlashingorange" class="form-control" placeholder="Enter StageFlashingorange"><?php echo $StageFlashingorange; ?></textarea>
    </div>
    <div class="form-group">
    <label>Synchcontroller</label>
    <select input type="text" name="Synchcontroller" placeholder="Enter Synchcontroller"  class="form-control" value="<?php echo $Synchcontroller; ?>" >
    <option></option>
    <option>Plan1Time(6 to 8)</option>
    <option>Plan1Time(8to 12)</option>
    <option>Plan1Time(12 to 18)</option>
    <option>Plan1Time(18 to 23)</option>
    <option>Plan1Time(23 to 6)</option>
    </select>
    </div>
    <div class="form-group" align="center">
    <input type="submit" name="submit1" class="btn btn-info" value="Submit"/>
    </div>
    <ul>
            <li><input type='button' value='Page1' onClick = "document.getElementById('one').style.display= 'block'; document.getElementById('two').style.display= 'none';document.getElementById('three').style.display= 'none';document.getElementById('four').style.display= 'none';"></li>
            <li><input type='button' value='Page3' onClick = "document.getElementById('three').style.display= 'block'; document.getElementById('one').style.display= 'none';document.getElementById('two').style.display= 'none';document.getElementById('four').style.display= 'none';"></li>
            <li><input type='button' value='Page4' onClick = "document.getElementById('four').style.display= 'block'; document.getElementById('one').style.display= 'none';document.getElementById('three').style.display= 'none';document.getElementById('two').style.display= 'none';"></li>
        </ul>
    </form>
    </div>
    </div>
    <div class="col-md-6" style="margin:0 auto; float:none;">
    <div class="page" id="two" style='display:none;'>
    <form method="post">
    <h2 align="center">Storing form data in csv</h2>
    <div class="form-group">
    <label>Enter Plan_Number</label>
    <textarea name="Plan_Number" class="form-control" placeholder="Enter Plan_Number"><?php echo $Plan_Number; ?></textarea>
    </div>
    
    <div class="form-group">
    <label>Starttime</label>
    <select input type="text" name="Starttime" placeholder="Enter Starttime"  class="form-control" value="<?php echo $Starttime; ?>" >
    <option></option>
    <option>0</option>
    <option>1</option>
    <option>2</option>
    <option>3</option>
    <option>4</option>
    <option>5</option>
    <option>6</option>
    <option>7</option>
    <option>8</option>
    <option>9</option>
    <option>10</option>
    <option>11</option>
    <option>12</option>
    </select>
    </div>
    <div class="form-group">
    <label>Endtime</label>
    <select input type="text" name="Endtime" placeholder="Enter Endtime"  class="form-control" value="<?php echo $Endtime; ?>" >
    <option></option>
    <option>0</option>
    <option>1</option>
    <option>2</option>
    <option>3</option>
    <option>4</option>
    <option>5</option>
    <option>6</option>
    <option>7</option>
    <option>8</option>
    <option>9</option>
    <option>10</option>
    <option>11</option>
    <option>12</option>
    </select>
    </div>
    <div class="form-group">
    <label>Enter Cycletimeplan</label>
    <textarea name="Cycletimeplan" class="form-control" placeholder="Enter FreCycletimeplaneflowtraveltime"><?php echo $Cycletimeplan; ?></textarea>
    </div>
    <div class="form-group">
    <label>Enter Green_times</label>
    <textarea name="Green_times" class="form-control" placeholder="Enter Green_times"><?php echo $Green_times; ?></textarea>
    </div>
    <div class="form-group">
    <label>Enter Green_times_lower</label>
    <textarea name="Green_times_lower" class="form-control" placeholder="Enter Green_times_lower"><?php echo $Green_times_lower; ?></textarea>
    </div>
    <div class="form-group">
    <label>Enter Green_times_upper</label>
    <textarea name="Green_times_upper" class="form-control" placeholder="Enter Green_times_upper"><?php echo $Green_times_upper; ?></textarea>
    </div>
    <div class="form-group">
    <label>Enter Yellow</label>
    <textarea name="Yellow" class="form-control" placeholder="Enter Yellow"><?php echo $Yellow; ?></textarea>
    </div>
    <div class="form-group">
    <label>Enter Red</label>
    <textarea name="Red" class="form-control" placeholder="Enter Red"><?php echo $Red; ?></textarea>
    </div>
    <div class="form-group">
    <label>Enter Maxlight</label>
    <textarea name="Maxlight" class="form-control" placeholder="Enter Maxlight"><?php echo $Maxlight; ?></textarea>
    </div>
    <div class="form-group">
    <label>Enter offset_tol</label>
    <textarea name="offset_tol" class="form-control" placeholder="Enter offset_tol"><?php echo $offset_tol; ?></textarea>
    </div>
    <div class="form-group">
    <label>Enter offset_maxded</label>
    <textarea name="offset_maxded" class="form-control" placeholder="Enter offset_maxded"><?php echo $offset_maxded; ?></textarea>
    </div>
    <div class="form-group">
    <label>Enter offset_maxext</label>
    <textarea name="offset_maxext" class="form-control" placeholder="Enter offset_maxext"><?php echo $offset_maxext; ?></textarea>
    </div>
    <div class="form-group">
    <label>Enter offset_phase</label>
    <textarea name="offset_phase" class="form-control" placeholder="Enter offset_phase"><?php echo $offset_phase; ?></textarea>
    </div>
    <div class="form-group">
    <label>Enter Stages</label>
    <textarea name="Stages" class="form-control" placeholder="Enter Stages"><?php echo $Stages; ?></textarea>
    </div>
    <div class="form-group">
    <label>Stagestime</label>
    <select input type="text" name="Stagestime" placeholder="Enter Stagestime"  class="form-control" value="<?php echo $Stagestime; ?>" >
    <option></option>
    <option>G1</option>
    <option>G2</option>
    <option>G3</option>
    <option>G4</option>
    </select>
    </div>
    <div class="form-group">
    <label>Num_ped</label>
    <select input type="text" name="Num_ped" placeholder="Enter Num_ped"  class="form-control" value="<?php echo $Num_ped; ?>" >
    <option></option>
    <option>0</option>
    <option>1</option>
    <option>2</option>
    <option>3</option>
    </select>
    </div>
    <div class="form-group">
    <label>Enter offset_stages</label>
    <textarea name="offset_stages" class="form-control" placeholder="Enter offset_stages"><?php echo $offset_stages; ?></textarea>
    </div>
    <div class="form-group">
    <label>Enter offset_phase</label>
    <textarea name="offset_phase" class="form-control" placeholder="Enter offset_phase"><?php echo $offset_phase; ?></textarea>
    </div>
    <div class="form-group" align="center">
    <input type="submit" name="submit2" class="btn btn-info" value="Submit"/>
    </div>
    <ul>
        <li><input type='button' value='Page2' onClick = "document.getElementById('two').style.display= 'block'; document.getElementById('one').style.display= 'none';document.getElementById('three').style.display= 'none';document.getElementById('four').style.display= 'none';"></li>
        <li><input type='button' value='Page1' onClick = "document.getElementById('one').style.display= 'block'; document.getElementById('three').style.display= 'none';document.getElementById('two').style.display= 'none';document.getElementById('four').style.display= 'none';"></li>
        <li><input type='button' value='Page4' onClick = "document.getElementById('four').style.display= 'block'; document.getElementById('one').style.display= 'none';document.getElementById('three').style.display= 'none';document.getElementById('two').style.display= 'none';"></li>
    </ul>
    </form>
    </div>
    </div>
 </body>
</html>
<div class="col-md-6" style="margin:0 auto; float:none;">
    <div class="page" id="four" style='display:none;'>
    <h2 align="center">Storing form data in csv</h2>
    <br />
        <div id="myMap"></div>
        <form  method="post">
        <input id="address" type="text" style="width:600px;" value="<?php echo $Address; ?>"/><br/>
        <input name="lat" type="text" id="latitude" placeholder="Latitude" value="<?php echo $lat; ?>"/>
        <input name="long" type="text" id="longitude" placeholder="Longitude" value="<?php echo $long; ?>"/>
        <div class="form-group" align="center">
            <input type="submit" name="submit3" class="btn btn-info" value="Submit"/>
        </div>
        </form>
    <ul>
        <li><input type='button' value='Page2' onClick = "document.getElementById('two').style.display= 'block'; document.getElementById('one').style.display= 'none';document.getElementById('three').style.display= 'none';document.getElementById('four').style.display= 'none';"></li>
        <li><input type='button' value='Page1' onClick = "document.getElementById('one').style.display= 'block'; document.getElementById('three').style.display= 'none';document.getElementById('two').style.display= 'none';document.getElementById('four').style.display= 'none';"></li>
        <li><input type='button' value='Page3' onClick = "document.getElementById('three').style.display= 'block'; document.getElementById('one').style.display= 'none';document.getElementById('four').style.display= 'none';document.getElementById('two').style.display= 'none';"></li>
    </ul>
    </div>
    </div>

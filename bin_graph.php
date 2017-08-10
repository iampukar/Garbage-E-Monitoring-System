

<?php 
$bin_depth_global=11;
$no = $_GET['id'];
$alias  = $_GET['alias'];

 
function bar($perc,$remain,$bin_info)
{


?>

<!-- Styles -->
<style>
	
#bar {
    font-family: "Helvetica Neue",Helvetica,Arial,sans-serif;
    font-size: 14px;
    color: #333;
    background-color: rgba(58, 146, 213,.3);
}												
</style>

<!-- Resources
  <script src="https://www.amcharts.com/lib/3/amcharts.js"></script>
  <script src="https://www.amcharts.com/lib/3/serial.js"></script>
  <script src="https://www.amcharts.com/lib/3/plugins/export/export.min.js"></script>
  <link rel="stylesheet" href="https://www.amcharts.com/lib/3/plugins/export/export.css" type="text/css" media="all" />
  <script src="https://www.amcharts.com/lib/3/themes/patterns.js"></script>
-->

<!-- Chart code -->
  <script src="https://www.amcharts.com/lib/3/amcharts.js"></script>
  <script src="js/amcharts/serial.js"></script>
  <script src="js/amcharts/export.min.js"></script>
  <link rel="stylesheet" href="css/export.css" type="text/css" media="all" />
  <link rel="stylesheet" href="css/bin_graph.css" type="text/css" media="all" />
  <link href="css/bootstrap.min.css" rel="stylesheet">

<script>
var chartData = [ {
  "category": "The Garabage level in  the Bin",
  "value1": <?php echo json_decode($remain); ?>,
  "value2": <?php echo json_decode($perc); ?>
} ];


var chart = AmCharts.makeChart( "chartdiv", {
  "theme": "patterns",
  "type": "serial",
  "depth3D": 100,
  "angle": 30,
  "autoMargins": true,
  "marginBottom": 100,
  "marginLeft": 50,
  "marginRight": 40,
  "dataProvider": chartData,
  "valueAxes": [ {
    "stackType": "100%",
    "gridAlpha": 0
  } ],
  "graphs": [ {
    "type": "column",
    "topRadius": 1,
    "columnWidth": 1,
    "showOnAxis": true,
    "lineThickness": 2,
    "lineAlpha": 0.5,
    "lineColor": "#FFFFFF",
    "fillColors": "black",
    "fillAlphas": .6,
    "valueField": "value1"
  }, {
    "type": "column",
    "topRadius": 1,
    "columnWidth": 1,
    "showOnAxis": true,
    "lineThickness": 2,
    "lineAlpha": 0.5,
    "lineColor": "#cdcdcd",
    "fillColors": "#cdcdcd",
    "fillAlphas": .2,
    "valueField": "value2"
  } ],

  "categoryField": "category",
  "categoryAxis": {
    "axisAlpha": 0,
    "labelOffset": 40,
    "gridAlpha": 0
  },
  "export": {
    "enabled": true
  }
} );
</script>

<!-- HTML -->
<html>
 
 <body id="bar">
    <?php include 'header_nex.php'; ?>
  <div class="responsive">
  <div class="row" style="margin-top:50px;">

      <div class="well col-md-6 col-sm-6 col-xs-6" style="background:#F0F6E6"> 
    <div id="chartdiv" class="responsive"></div>
    </div>
    <div class="well col-md-4 col-sm-4 col-xs-4" style="background:#F0F6E6">
 
 <div id="bin_info">
 
<h4>Alias:<?php 
   echo  $_GET['alias']; ?> </h4>
    
   <?php require "weather.php"; ?>
           <button type="button" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#myModal">View Stat</button>
 
  </div>
     

      <div id="myModal" class="modal fade" role="dialog">
  <div class="modal-dialog" style="width:90%">

    <!-- Modal content-->
    <div class="modal-content" >
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Statistics</h4>
      </div>
      <div class="modal-body">
         <?php include 'stat.php'; ?>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>

  </div>
</div>

    </div>
</div>
 </div>

    <!-- jQuery -->
    <script src="js/jquery.js"></script>
    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

 <body>
</html>

<?php 
}
?>

<?php 

 
$mysqli = new mysqli("localhost", "root", "", "dustbin");

if ($mysqli->connect_errno) {
    echo "Failed to connect to MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
}

$stmt = $mysqli->prepare("SELECT `$no` FROM bin_level ORDER BY `bin_level`.`record_no` DESC LIMIT 1");
$stmt->execute();
$arr = [];

foreach ($stmt->get_result() as $row)
{
    $arr[] = $row[$no];
}


$perc = round(floatval(($arr[0]/$bin_depth_global)*100),4);
$remain = floatval(100-$perc);

$bin_info = array('id' => 233, 
                    'name' => 'vasant',
                    'level' => $perc
                    );

$jsn_perc = json_encode($perc);
$jsn_remain = json_encode($remain);

bar($jsn_perc,$jsn_remain,$bin_info);
 
?>
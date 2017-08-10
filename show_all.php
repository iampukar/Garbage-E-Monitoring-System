<?php 

$bin_depth_global=11;

$mysqli = new mysqli("localhost", "root", "", "dustbin");

if ($mysqli->connect_errno) {
    echo "Failed to connect to MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
}

$stmt = $mysqli->prepare("SELECT * FROM bin_level ORDER BY `bin_level`.`record_no` DESC LIMIT 1");
$stmt->execute();
$arr1 = [];
$arr2 = [];
$arr3 = [];

foreach ($stmt->get_result() as $row)
{
    $arr1[] = $row['bin1'];
}
 

$perc1 = round(floatval(($arr1[0]/$bin_depth_global)*100),2);
$remain1 = floatval(100-$perc1);

$stmt->execute();
foreach ($stmt->get_result() as $row)
{
    $arr2[] = $row['bin2'];
}

$perc2 = round(floatval(($arr2[0]/$bin_depth_global)*100),2);
$remain2 = floatval(100-$perc2);


$stmt->execute();
foreach ($stmt->get_result() as $row)
{
    $arr3[] = $row['bin3'];
}
 

$perc3 = round(floatval(($arr3[0]/$bin_depth_global)*100),2);
$remain3 = floatval(100-$perc3);

 $j_perc1 = json_encode($perc1);
 $j_remain1 = json_encode($remain1);
 $j_perc2 = json_encode($perc2);
 $j_perc3 = json_encode($perc3);
 $j_remain2 = json_encode($remain2);
 $j_remain3 = json_encode($remain3);
 
?>





<!-- Resources -->
<script src="https://www.amcharts.com/lib/3/amcharts.js"></script>
 
<script src="https://www.amcharts.com/lib/3/themes/patterns.js"></script>
  
  <script src="js/amcharts/serial.js"></script>
  <script src="js/amcharts/export.min.js"></script>
  <link rel="stylesheet" href="css/export.css" type="text/css" media="all" />
 
  <link href="css/bootstrap.min.css" rel="stylesheet">
<!-- Chart code -->
<script>
var chartData = [ {
  "category": "Level in Dustbin-1",
  "value1": <?php echo json_decode($j_remain1);?>,
  "value2": <?php echo json_decode($j_perc1);?>
} ];


var chart = AmCharts.makeChart( "chartdiv", {
  "theme": "patterns",
  "type": "serial",
  "depth3D": 100,
  "angle": 30,
  "autoMargins": true,
  "marginBottom": 10,
  "marginLeft": 10,
  "marginRight": 10,
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
    "fillColors": "#8d003b",
    "fillAlphas": 0.8,
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
    "fillAlphas": 0.5,
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


 
<script>
var chartData = [ {
  "category": "Level in Dustbin-2",
  "value1": <?php echo json_decode($j_remain2);?>,
  "value2": <?php echo json_decode($j_perc2);?>
} ];


var chart = AmCharts.makeChart( "chart2", {
  "theme": "patterns",
  "type": "serial",
  "depth3D": 100,
  "angle": 30,
  "autoMargins": true,
  "marginBottom": 10,
  "marginLeft": 10,
  "marginRight": 10,
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
    "fillColors": "#8d003b",
    "fillAlphas": 0.8,
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
    "fillAlphas": 0.5,
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


<script>
var chartData = [ {
  "category": "Level in Dustbin-3",
  "value1": 0<?php //echo json_decode($j_remain3);?>,
  "value2": 100<?php //echo json_decode($j_perc3);?>
} ];


var chart = AmCharts.makeChart( "chart3", {
  "theme": "patterns",
  "type": "serial",
  "depth3D": 100,
  "angle": 30,
  "autoMargins": true,
  "marginBottom": 10,
  "marginLeft": 10,
  "marginRight": 10,
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
    "fillColors": "#8d003b",
    "fillAlphas": 0.8,
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
    "fillAlphas": 0.5,
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


<!-- Styles -->
<style>
#chartdiv {
  width   : 100%;
  height    : 320px;
  font-size : 11px;
}                             
</style>
 


<!-- Styles -->
<style>
#chart2 {
  width   : 100%;
  height    : 320px;
  font-size : 11px;
}                             
</style>
<!-- HTML -->
 


<!-- Styles -->
<style>
#chart3 {
  width   : 100%;
  height    : 320px;
  font-size : 11px;
}   
.well-bin
{
  margin-right: 0px;
 background-color: rgba(100, 78, 78,);
  
}       
#view{
  position: relative;
  left: 30%;
}                   
</style>

<!-- HTML -->
 
<body style="background-color:rgba(58, 146, 213,.5);padding:50px;">
  <?php include 'header_nex.php'; ?>
<div class="container">
<div class="well" style="width:100%;height:100px;margin-top:30px"><bold><h1 style="text-align:center;color:#294D00">E-Garbage Monitoring System</h1></bold></div>
<div class="row ">
<div class="col-md-4 well well-bin"><div id="chartdiv"></div><a id="view"href="http://localhost/E-garbage/stat1.php?id=bin1" class="btn btn-sm btn-dark ">view more</a> </div>
<div class="col-md-4 well"><div id="chart2"></div><a id="view"href="http://localhost/E-garbage/stat1.php?id=bin2" class="btn  btn-sm btn-dark ">view more</a></div>
<div class="col-md-4 well "><div id="chart3"> </div><a id="view"href="http://localhost/E-garbage/stat1.php?id=bin3" class="btn btn-sm btn-dark ">view more</a></div>
</div>


</div>


 <!-- jQuery -->
    <script src="js/jquery.js"></script>
    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>
    <script type="text/javascript">
    setTimeout(function(){
   window.location.reload(1);
}, 8000);

    </script>
</body>
   
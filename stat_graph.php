<!-- Styles -->
<style>
#chartdiv {
  width: 100%;
  height: 500px;
}																
</style>
 
<?php 

$mysqli = new mysqli("localhost", "root", "", "dustbin");

if ($mysqli->connect_errno) {
    echo "Failed to connect to MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
}


 $querr = $mysqli->prepare("SELECT date_is,bin2 FROM bin_level ORDER BY `bin_level`.`record_no`");
                        $querr->execute();
                      

//foreach ($querr->get_result() as $row)
//{
 //   echo $row['date_is']." ".$row['bin3'].'<br/>';
//}
 $myDate = date('m/d/Y');
 echo $myDate;          
?>

<!-- Resources -->
  <script src="js/amcharts/amcharts.js"></script>
  <script src="js/amcharts/serial.js"></script>
  <script src="js/amcharts/export.min.js"></script>
  <link rel="stylesheet" href="css/export.css" type="text/css" media="all" />
 <script src="https://www.amcharts.com/lib/3/themes/light.js"></script>

<!-- Chart code -->
<script>
var chartData = generatechartData();

function generatechartData() {
    var chartData = [];
    var da = new Date('0000-00-00');
<?php 
foreach ($querr->get_result() as $row)
{
  
?>
        da.setDate(<?php echo ($row['date_is']);?>);
        chartData.push({
            date: da,
            visits: <?php echo $row['bin2'];?> 
        });
   

       <?php  } ?>
    
    return chartData;
}


var chart = AmCharts.makeChart("chartdiv", {
    "theme": "light",
    "type": "serial",
    "marginRight": 80,
    "autoMarginOffset": 20,
    "marginTop":20,
    "dataProvider": chartData,
    "valueAxes": [{
        "id": "v1",
        "axisAlpha": 0.1
    }],
    "graphs": [{
        "useNegativeColorIfDown": true,
        "balloonText": "[[category]]<br><b>value: [[value]]</b>",
        "bullet": "round",
        "bulletBorderAlpha": 1,
        "bulletBorderColor": "#FFFFFF",
        "hideBulletsCount": 50,
        "lineThickness": 2,
        "lineColor": "#fdd400",
        "negativeLineColor": "#67b7dc",
        "valueField": "visits"
    }],
    "chartScrollbar": {
        "scrollbarHeight": 5,
        "backgroundAlpha": 0.1,
        "backgroundColor": "#868686",
        "selectedBackgroundColor": "#67b7dc",
        "selectedBackgroundAlpha": 1
    },
    "chartCursor": {
        "valueLineEnabled": true,
        "valueLineBalloonEnabled": true
    },
    "categoryField": "date",
    "categoryAxis": {
        "parseDates": true,
        "axisAlpha": 0,
        "minHorizontalGap": 60
    },
    "export": {
        "enabled": true
    }
});

chart.addListener("dataUpdated", zoomChart);
//zoomChart();

function zoomChart() {
    if (chart.zoomToIndexes) {
        chart.zoomToIndexes(130, chartData.length - 1);
    }
}
</script>

<!-- HTML -->
<div id="chartdiv"></div>
 

<?php 
$noo = $_GET['id'];
$mysqli = new mysqli("localhost", "root", "", "dustbin");

if ($mysqli->connect_errno) {
    echo "Failed to connect to MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
}
 
      $querr = $mysqli->prepare("SELECT  * FROM bin_level ORDER BY `bin_level`.`record_no`");
                        $querr->execute();
 ?>


<!-- Styles -->
<style>
#chartdiv1 {
    width   : 100%;
    height  : 500px;
    
}                                                                   
</style>

<!-- Resources -->
 <script src="https://www.amcharts.com/lib/3/amcharts.js"></script>
  <script src="js/amcharts/serial.js"></script>
  <script src="js/amcharts/export.min.js"></script>
  <link rel="stylesheet" href="css/export.css" type="text/css" media="all" />
  
  <link href="css/bootstrap.min.css" rel="stylesheet">


<!-- Chart code -->
<script>
// generate some random data, quite different range
function generateChartData() {
    var chartData = [];
    var firstDate = new Date();
    var val;
    var i=1;
   
    firstDate.setDate(firstDate.getDate() - 120);


<?php
                       foreach ($querr->get_result() as $row){ ?>

                            val = ((11- <?php echo $row[$noo]; ?>));
                             
                    
 
        // we create date objects here. In your data, you can have date strings
        // and then set format of your dates using chart.dataDateFormat property,
        // however when possible, use date objects, as this will speed up chart rendering.
        var newDate = new Date(firstDate);
        newDate.setDate(newDate.getDate() + i++ );

        

        chartData.push({
            date: newDate,
            visits: val
        });

       <?php }?> 
    return chartData;
}

var chartData = generateChartData();

var chart = AmCharts.makeChart("chartdiv1", {
    "type": "serial",
    "theme": "light",
    "marginRight": 80,
    "autoMarginOffset": 20,
    "marginTop": 7,
    "dataProvider": chartData,
    "valueAxes": [{
        "axisAlpha": 0.2,
        "dashLength": 1,
        "position": "left"
    }],
    "mouseWheelZoomEnabled": true,
    "graphs": [{
        "id": "g1",
        "balloonText": "[[value]]",
        "bullet": "round",
        "bulletBorderAlpha": 1,
        "bulletColor": "#FFFFFF",
        "hideBulletsCount": 50,
        "title": "red line",
        "valueField": "visits",
        "useLineColorForBulletBorder": true,
        "balloon":{
            "drop":true
        }
    }],
    "chartScrollbar": {
        "autoGridCount": true,
        "graph": "g1",
        "scrollbarHeight": 40
    },
    "chartCursor": {
       "limitToGraph":"g1"
    },
    "categoryField": "date",
    "categoryAxis": {
        "parseDates": true,
        "axisColor": "#DADADA",
        "dashLength": 1,
        "minorGridEnabled": true
    },
    "export": {
        "enabled": true
    }
});

chart.addListener("rendered", zoomChart);
zoomChart();

// this method is called when chart is first inited as we listen for "rendered" event
function zoomChart() {
    // different zoom methods can be used - zoomToIndexes, zoomToDates, zoomToCategoryValues
    chart.zoomToIndexes(chartData.length - 40, chartData.length - 1);
}



</script>

<!-- HTML -->
<div id="chartdiv1"></div>                                                                               
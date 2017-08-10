<?php
    $key = "762824a140834e0ab9c93835162510";
    //$city = 'paris';
    $url = "http://api.apixu.com/v1/current.json?key=$key&q=bengaluru&=" ;

    $ch = curl_init();  
    curl_setopt($ch,CURLOPT_URL,$url);
    curl_setopt($ch,CURLOPT_RETURNTRANSFER,true);

    $json_output=curl_exec($ch);
    $weather = json_decode($json_output);
    //print_r($weather);

    if(isset($weather)){
    $temp       = $weather->current->temp_c;
    $location = $weather->location->name;
    $localtime = $weather->location->localtime;
 
  
    $latitude = $weather->location->lat;
    $longitude = $weather->location->lon;
    
    $hum = $weather->current->humidity;
    $pressure = $weather->current->pressure_mb;
    $wind_dir =  $weather->current->wind_dir;
    $wind_speed = $weather->current->wind_mph;
    $text = $weather->current->condition->text;
    $img = $weather->current->condition->icon;
    ?>
<h4>
     <?php echo  $location." ( ".$latitude." ,".$longitude." )".'<br/><br/>';?>
     <?php echo "Localtime : ".$localtime.'<br/><br/>';?>
    <?php echo "Temperature : ".$temp.'<br/><br/>';?>
   
    
    <?php echo "Humidity : ".$hum."%".'<br/><br/>';?>
    <?php echo "Wind speed :".$wind_speed." mph".'<br/><br/>';?>

     <?php echo "Wind Direction : ".$wind_dir."".'<br/><br/>';?>
    <?php echo "Pressure : ".$pressure." mb".'<br/><br/>';?>
    <img src="<?php echo $img;?>"><?php echo $text.'<br/>';?>
</h4>
    

   <?php  }?>
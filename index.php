<script>

if (navigator.geolocation) { // device can return its location
    navigator.geolocation.getCurrentPosition(function(position){
         console.log(position.coords.latitude);
         console.log(position.coords.longitude);
         
        //  document.write(position.coords.latitude);
        //  document.write("<br>");
        //  document.write(position.coords.longitude);
         
         
        //  Assign the values to a cookie
         document.cookie = "latitude = " + position.coords.latitude
         document.cookie = "longitude = " + position.coords.longitude
    });
}
</script>



<?php
    $longitude = $_COOKIE['latitude'];
    $latitude = $_COOKIE['longitude'];

    // Echo the location
    echo $longitude;
    echo '<br><br><br>';
    echo $latitude;
?>

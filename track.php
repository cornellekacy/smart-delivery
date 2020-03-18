<?php include 'head.php'; ?>

<!-- masthead end -->

<!--Page Header-->
<div class="page-header title-area">
    <div class="header-title" >
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-sm-12 col-xs-12">
                    <h1 class="page-title">Track Your Shipment</h1> </div>
                </div>
            </div>
        </div>
        <div class="breadcrumb-area">
            <div class="container">
                <div class="row">
                    <div class="col-md-8 col-sm-12 col-xs-12 site-breadcrumb">
                        <nav class="breadcrumb">
                            <a class="home" href="#"><span>Home</span></a>
                            <i class="fa fa-angle-right" aria-hidden="true"></i>
                            <span>Track Your Shipment</span>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--Page Header end-->

    <!--Track Your Shipment -->
    <section class="tracksipment secpadd">
        <div class="container">
            <div class="row quote1top">
                <div class="col-md-12">
                    <div class="fh-section-title clearfix f30  text-left version-dark paddbtm40">
                        <h2>Track Your Shipment</h2>
                    </div>
                    <p>If you require maximum visibility to your Freight transactions, contact our logistic customer team or you can track your cargo by using below tracking system.</p>
                    <div class="row paddtop30">
                        <div class="col-sm-9">
                            <form method="post">
                                <div class="fh-form track-form">
                                    <div>
                                        <p class="field">
                                            <input size="40" name="term" autocomplete="off" placeholder="Enter Tracking Number E.g CS-656267916" type="text" autocomplete="off">
                                        </p>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-3">

                                        </div>
                                        <div class="col-md-3">

                                        </div>
                                        <div class="col-md-3">
                                           <p class="submit">
                                            <input value="Track Now" class="fh-btn" name="save" type="submit">
                                        </p> 
                                    </div>
                                    <div class="col-md-3">

                                    </div>
                                </div>

                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<div class="container">
    <div class="row">
     <div class="col-md-12">
        <?php
        include 'Admin/conn.php';
// Check connection
        if (!$link) {
            die("Connection failed: " . mysqli_connect_error());
        }
        if(isset($_POST['save'])){
         $name = $_POST['term'];
         if (empty($name)) {
            echo "<div class='alert alert-danger'>
            <strong>Failed!</strong> Tracking Id Cannot Be Empty.
            </div>";
        }else{

            $sql = "SELECT * FROM track where ship_id LIKE '%$name%'";
            $result = mysqli_query($link, $sql);

            if (mysqli_num_rows($result) > 0) {
    // output data of each row
                while($row = mysqli_fetch_assoc($result)) {?> 
                    <h3 align="center">Tracking information for tracking number <?php echo $row["ship_id"] ?></h3>
                    <div class="col-md-6">
                        <h3 align="center">RECEIVERS DETAILS</h3><br>
                        <div class="table-responsive">
                            <table class="table table-clean-paddings margin-bottom-0" style="background-color: #0c1239">

                                <tbody>
                                    <tr>
                                        <td>
                                         <div class="contact-container"><a href="#" style="color: #ff0000;"><b>RECEIVERS <br> NAME:</b></a> </div>
                                     </td> 
                                     <td style="color: #fff; text-transform: uppercase;"><?php echo $row["jname"] ?></td>

                                 </tr>
                                 <tr>

                                    <tr>
                                        <td>
                                         <div class="contact-container"><a href="#" style="color: #ff0000;"><b>RECEIVERS <br> ADDRESS:</b></a> </div>
                                     </td>
                                     <td style="color: #fff; text-transform: uppercase;"><?php echo $row["jadd"] ?></td>

                                 </tr>
                                 <tr>
                                    <td>
                                     <div class="contact-container"><a href="#" style="color: #ff0000;"><b>RECEIVERS <br> COUNTRY:</b></a> </div>
                                 </td>
                                 <td style="color: #fff; text-transform: uppercase;"><?php echo $row["jcountry"] ?></td>

                             </tr>
                             <tr>
                                <td>
                                 <div class="contact-container"><a href="#" style="color: #ff0000;"><b>RECEIVERS <br> Number:</b></a> </div>
                             </td>
                             <td style="color: #fff; text-transform: uppercase;"><?php echo $row["jnumber"] ?></td>

                         </tr>
                         <tr>
                            <td>
                             <div class="contact-container"><a href="#" style="color: #ff0000;"><b>RECEIVERS <br> Email:</b></a> </div>
                         </td>
                         <td style="color: #fff; text-transform: uppercase;"><?php echo $row["jemail"] ?></td>

                     </tr>

                 </tbody>
             </table>
         </div><br>
     </div>

     <div class="col-md-6">
        <h3 align="center">Sender's DETAILS</h3><br>
        <div class="table-responsive">
            <table class="table table-clean-paddings margin-bottom-0" style="background-color: #0c1239">

                <tbody>
                    <tr>
                        <td>
                         <div class="contact-container"><a href="#" style="color: #ff0000;"><b>SENDER'S <br> NAME:</b></a> </div>
                     </td> 
                     <td style="color: #fff; text-transform: uppercase;"><?php echo $row["sname"] ?></td>

                 </tr>
                 <tr>

                    <tr>
                        <td>
                         <div class="contact-container"><a href="#" style="color: #ff0000;"><b>SENDER'S <br> ADDRESS:</b></a> </div>
                     </td>
                     <td style="color: #fff; text-transform: uppercase;"><?php echo $row["sadd"] ?></td>

                 </tr>
                 <tr>
                    <td>
                     <div class="contact-container"><a href="#" style="color: #ff0000;"><b>SENDER'S <br> COUNTRY:</b></a> </div>
                 </td>
                 <td style="color: #fff; text-transform: uppercase;"><?php echo $row["scountry"] ?></td>

             </tr>
             <tr>
                <td>
                 <div class="contact-container"><a href="#" style="color: #ff0000;"><b>SENDER'S <br> Number:</b></a> </div>
             </td>
             <td style="color: #fff; text-transform: uppercase;"><?php echo $row["snumber"] ?></td>

         </tr>
         <tr>
            <td>
             <div class="contact-container"><a href="#" style="color: #ff0000;"><b>SENDER'S <br> Email:</b></a> </div>
         </td>
         <td style="color: #fff; text-transform: uppercase;"><?php echo $row["semail"] ?></td>

     </tr>

 </tbody>
</table>
</div><br>
</div>

<div class="col-md-6">
  <h3 align="center">SHIPMENT DETAILS</h3><br>
  <div class="table-responsive">
    <table class="table table-clean-paddings margin-bottom-0" style="background-color: #0c1239">

        <tbody>
            <tr>
                <td>
                 <div class="contact-container"><a href="#" style="color: #ff0000;"><b>TRANSPORTATION <br> MODE:</b></a> </div>
             </td> 
             <td style="color: #fff; text-transform: uppercase;"><?php echo $row["mode"] ?></td>

         </tr>
         <tr>

            <tr>
                <td>
                 <div class="contact-container"><a href="#" style="color: #ff0000;"><b>PRODUCT <br> NAME:</b></a> </div>
             </td>
             <td style="color: #fff; text-transform: uppercase;"><?php echo $row["prod"] ?></td>

         </tr>
         <tr>
            <td>
             <div class="contact-container"><a href="#" style="color: #ff0000;"><b>TRACKING<br> NUMBER:</b></a> </div>
         </td>
         <td style="color: #fff; text-transform: uppercase;"><?php echo $row["ship_id"] ?></td>

     </tr>
     <tr>
        <td>
         <div class="contact-container"><a href="#" style="color: #ff0000;"><b>DELIVERY <br> STATUS:</b></a> </div>
     </td>
     <td style="color: #fff; text-transform: uppercase;"><?php echo $row["deliverys"] ?></td>

 </tr>
 <tr>
    <td>
     <div class="contact-container"><a href="#" style="color: #ff0000;"><b>SHIPMENT <br> DESCRIPTION:</b></a> </div>
 </td>
 <td style="color: #fff; text-transform: uppercase;"><?php echo $row["descrip"] ?></td>

</tr>
</tbody>
</table>
</div><br>
</div>
<div class="col-md-6">
    <h3 align="center">Package Details</h3><br>
    <div class="table-responsive">
        <table class="table table-clean-paddings margin-bottom-0" style="background-color: #0c1239">

            <tbody>
                <tr>
                    <td>
                     <div class="contact-container"><a href="#" style="color: #ff0000;"><b>PACKAGE CURRENT  <br> LOCATION:</b></a> </div>
                 </td> 
                 <td style="color: #fff; text-transform: uppercase;"><?php echo $row["currentl"] ?></td>

             </tr>
             <tr>

                <tr>
                    <td>
                     <div class="contact-container"><a href="#" style="color: #ff0000;"><b>PACKAGE PICKUP <br> LOCATION:</b></a> </div>
                 </td>
                 <td style="color: #fff; text-transform: uppercase;"><?php echo $row["pickupl"] ?></td>

             </tr>
             <tr>
                <td>
                 <div class="contact-container"><a href="#" style="color: #ff0000;"><b>DEPARTURE<br> DATE:</b></a> </div>
             </td>
             <td style="color: #fff; text-transform: uppercase;"><?php echo $row["Ship_date"] ?></td>

         </tr>
         <tr>
            <td>
             <div class="contact-container"><a href="#" style="color: #ff0000;"><b>DELIVERY <br> DATE:</b></a> </div>
         </td>
         <td style="color: #fff; text-transform: uppercase;"><?php echo $row["ddate"] ?></td>

     </tr>
     <tr>
        <td>
         <div class="contact-container"><a href="#" style="color: #ff0000;"><b>QUANTITY <br> SHIPPED:</b></a> </div>
     </td>
     <td style="color: #fff; text-transform: uppercase;"><?php echo $row["items"] ?></td>

 </tr>
 <tr>
    <td>
     <div class="contact-container"><a href="#" style="color: #ff0000;"><b>PACKAGE <br> WEIGHT:</b></a> </div>
 </td>
 <td style="color: #fff; text-transform: uppercase;"><?php echo $row["weight"] ?></td>

</tr>

<tr>
    <td>
     <div class="contact-container"><a href="#" style="color: #ff0000;"><b>SHIPMENT <br> CATRGORY:</b></a> </div>
 </td>
 <td style="color: #fff; text-transform: uppercase;"><?php echo $row["cat"] ?></td>

</tr>
<tr>
    <td>
     <div class="contact-container"><a href="#" style="color: #ff0000;"><b>SHIPMENT <br> STATUS:</b></a> </div>
 </td>
 <td style="color: #fff; text-transform: uppercase;"><?php echo $row["status"] ?></td>

</tr>
</tbody>
</table>
</div><br>
</div>

       <?php
        $locations=array(); 
        $uname="takwidgr_ship1";
        $pass="cornellekacy45";
        $servername="localhost";
        $dbname="takwidgr_ship";
        $db=new mysqli($servername,$uname,$pass,$dbname);
        $query =  $db->query("SELECT lon, lat FROM track where ship_id LIKE '%$name%'");
        // $locations=array(); 
        // $uname="root";
        // $pass="";
        // $servername="localhost";
        // $dbname="tracking";
        // $db=new mysqli($servername,$uname,$pass,$dbname);
        // $query =  $db->query("SELECT lon, lat FROM track where ship_id LIKE '%$name%'");
        //$number_of_rows = mysql_num_rows($db);  
        //echo $number_of_rows;

        while( $row = $query->fetch_assoc() ){
            $longitude = $row['lon'];                              
            $latitude = $row['lat'];
            /* Each row is added as a new array */
            $locations[]=array( 'lat'=>$latitude, 'lng'=>$longitude );
        }


        //echo $locations[0]['name'].": In stock: ".$locations[0]['lat'].", sold: ".$locations[0]['lng'].".<br>";
        //echo $locations[1]['name'].": In stock: ".$locations[1]['lat'].", sold: ".$locations[1]['lng'].".<br>";
    ?>
    <script type="text/javascript" src="http://maps.googleapis.com/maps/api/js?key=AIzaSyDLzAV7BTAMl6x0r_DBXVuy9lBZNJq1PAg "></script> 
    <script type="text/javascript">
    var map;
    var Markers = {};
    var infowindow;
    var locations = [
        <?php for($i=0;$i<sizeof($locations);$i++){ $j=$i+1;?>
        [
            'AMC Service',
            '<p><a href="">Current Package location and moving</a></p>',
            <?php echo $locations[$i]['lat'];?>,
            <?php echo $locations[$i]['lng'];?>,
            0
        ]<?php if($j!=sizeof($locations))echo ","; }?>
    ];
    var origin = new google.maps.LatLng(locations[0][2], locations[0][3]);

    function initialize() {
      var mapOptions = {
        zoom: 9,
        center: origin
      };

      map = new google.maps.Map(document.getElementById('map-canvas'), mapOptions);

        infowindow = new google.maps.InfoWindow();

        for(i=0; i<locations.length; i++) {
            var position = new google.maps.LatLng(locations[i][2], locations[i][3]);
            var marker = new google.maps.Marker({
                position: position,
                map: map,
            });
            google.maps.event.addListener(marker, 'click', (function(marker, i) {
                return function() {
                    infowindow.setContent(locations[i][1]);
                    infowindow.setOptions({maxWidth: 200});
                    infowindow.open(map, marker);
                }
            }) (marker, i));
            Markers[locations[i][4]] = marker;
        }

        locate(0);

    }

    function locate(marker_id) {
        var myMarker = Markers[marker_id];
        var markerPosition = myMarker.getPosition();
        map.setCenter(markerPosition);
        google.maps.event.trigger(myMarker, 'click');
    }

    google.maps.event.addDomListener(window, 'load', initialize);

    </script>
<!-- <body > -->
    <br><br>

             <h3 align="center">The map bellow shows the current package location and how it being moved</h3>
<div id="map-canvas" style='height:600px;width:1200px;'>
    
</div>  
 

   <?php       

?> 


<?php       
}
} else {
    echo "<div class='alert alert-danger'>
    <strong>Failed!</strong> No Search Done Yet Or Tracking Id Doesnt Exist.
    </div>";
}
}
}

?>


</div> 
</div> 

</div>

<?php include 'footer.php'; ?>
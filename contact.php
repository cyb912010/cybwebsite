<div class='contact' >
     <div class='half '>
        <h1 style="margin-left:10%">Leave me a message:<h1>


     <form name="form" novalidate action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" onsubmit="return successful()" method="GET">
      

      <ul >
        <li><textarea    style="font-size:16px" cols="40" rows="1" name="name" ng-required="true" ng-model="name" placeholder="Name"></textarea></li>
         <p class="error" ng-cloak ng-show="form.name.$invalid && form.name.$touched ">Please enter a name.</p>
        <li><textarea    style="font-size:16px" cols="40" rows="1" name="email" ng-required="true" ng-model="email" type="email" placeholder="Email"></textarea></li>
         <p class="error" ng-cloak ng-show="form.email.$invalid && form.email.$touched ">Please enter an correct email.</p>
        <li><textarea    style="font-size:16px" cols="40" rows="1" name="subject" ng-model="subject" placeholder="Subject"></textarea></li>
        <li><textarea    style="font-size:16px" cols="40" rows="5" name="message"  placeholder="Message" ng-model="message" ng-required="true"></textarea></li>      
        <p class="error" ng-cloak ng-show="form.message.$invalid && form.message.$touched ">Please enter a message.</p>
        <button  type="submit" class="btn btn-primary" ng-disabled="form.$invalid" >Send</button>
        </ul>
        </form>

     </div>
     <div class='half '>
       <br>
       <p id="address">Address:</p>
       <p>1054 67st APT 3C</p>
       <p>Brooklyn,NY,11219</p>
       <div style='overflow:hidden;height:300px;width:400px;'><div id='gmap_canvas' style='height:300px;width:400px;'></div><style>#gmap_canvas img{max-width:none!important;background:none!important}</style></div><script type='text/javascript'>function init_map(){var myOptions = {zoom:11,center:new google.maps.LatLng(40.6277975,-74.00820820000001),mapTypeId: google.maps.MapTypeId.ROADMAP};map = new google.maps.Map(document.getElementById('gmap_canvas'), myOptions);marker = new google.maps.Marker({map: map,position: new google.maps.LatLng(40.6277975,-74.00820820000001)});infowindow = new google.maps.InfoWindow({content:'<strong>Location:</strong><br>1054 67th st #3c,Brooklyn,NY,11219,United States<br>'});google.maps.event.addListener(marker, 'click', function(){infowindow.open(map,marker);});infowindow.open(map,marker);}google.maps.event.addDomListener(window, 'load', init_map);</script>
     </div>
   </div><!-- end of contact-->

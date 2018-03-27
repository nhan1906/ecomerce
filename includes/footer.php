<footer class="container text-left" style="padding: 25px 65px 55px 65px; background-color: black; color: #fff;">
  <div class="row">
    <div class="col-sm-4">
      <p><strong>TINH BỘT THIÊN NHIÊN COCONUT</strong></p>
      <p><strong>Hotline:</strong> 0165 401 8013</p>
      <p><strong>Địa chỉ:</strong> Kí túc xá khu A ĐHQG Tp.HCM</p>
      <p><strong>Email:</strong> nhantx.1906@gmail.com</p>
    </div>
    <div class="col-sm-8">
      <!-- Add Google Maps -->
      <div id="googleMap" style="height:120px;width:100%;"></div>
      <script>
        function myMap() {
          var myCenter = new google.maps.LatLng(10.878953, 106.807025);
          var mapProp = {center:myCenter, zoom:12.5, scrollwheel:false, draggable:false, mapTypeId:google.maps.MapTypeId.ROADMAP};
          var map = new google.maps.Map(document.getElementById("googleMap"),mapProp);
          var marker = new google.maps.Marker({position:myCenter});
          marker.setMap(map);
        }
      </script>
      <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAk5itRz-kxvoYAVL7G_DTGfZtsZojGA-I&callback=myMap"></script>
<!--
To use this code on your website, get a free API key from Google.
Read more at: https://www.w3schools.com/graphics/google_maps_basic.asp
-->
</div>
</div>
</footer>
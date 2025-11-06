<?php
    include('include/auth_check.php');
    include('include/header.php');
?>

<div id="map"></div>

<div id="bottom-bar">
    <input
        type="text"
        id="searchLocation"
        placeholder="Search location..."
    >
    <button id="walkBtn">Walk</button>
</div>

<script src="https://unpkg.com/leaflet/dist/leaflet.js"></script>
<script src="assets/js/map.js"></script>
<script src="assets/js/rating.js"></script>
<script src="assets/js/api.js"></script>

<?php
    include('include/footer.php');
?>

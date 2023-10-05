<?php
define('DB_SERVER', 'localhost');
define('DB_USERNAME', 'root');
define('DB_PASSWORD', '');
define('DB_DATABASE', 'vida');

// Connect to server and select database.
$connect = mysqli_connect(DB_SERVER,DB_USERNAME,DB_PASSWORD,DB_DATABASE);

// Table Names
$gallery="vida_gallery"; // Table name
$admin="vida_admin"; // Table name
$category="vida_category"; // Table name

// Other Variables
$title = "La Vida Foundation"; // Site Title
$contact= "Suite 14 Royalty Plaza,<br>
216 DBS Road, Asaba,<br>
Oshimili South L.G.A. Delta State."; //Contact Info
$site_tel ="+234 815 500 5261, +234 701 768 5937";
$site_address ="Suite 14 Royalty Plaza, 216 DBS Road, Asaba, Oshimili South L.G.A. Delta State";
$site_email = "info@lavidafoundation.com";  
?>
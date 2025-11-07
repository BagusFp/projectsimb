<?php
// Konfigurasi dasar aplikasi
define('APP_NAME', 'SIGLON - Sistem Informasi Tanah Longsor');
define('APP_DESCRIPTION', 'Pusat informasi dan pemantauan tanah longsor di Indonesia');

// Konfigurasi path
$base_url = 'http://' . $_SERVER['HTTP_HOST'] . str_replace(basename($_SERVER['SCRIPT_NAME']), '', $_SERVER['SCRIPT_NAME']);
define('BASE_URL', rtrim($base_url, '/'));
?>
<?php 

$server = 'inf.co.id';
$username = 'infcoid_pengguna';
$password = 'Zeromind';
$database = 'infcoid_sigTA';

$koneksi = new mysqli($server, $username, $password, $database);

if($koneksi->connect_error){
    die("Connection failed: " . $koneksi->connect_error);
}

echo "Connected successfully";

?>
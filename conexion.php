 <?php
$nombre_bd 		= "curso_web";
$usuario_bd 	= "curso";
$password_bd 	= "cursoweb";
$host_bd 		= "localhost";
$host_bd_ip		= "127.0.0.1";

$mysqli = new mysqli($host_bd, $usuario_bd, $password_bd, $nombre_bd);
if ($mysqli->connect_error) {
    echo "Fallo al contenctar a MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
}
/*echo $mysqli->host_info . "\n";

$mysqli = new mysqli($host_bd_ip, $usuario_bd, $password_bd, $nombre_bd);
if ($mysqli->connect_error) {
    echo "Fallo al contenctar a MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
}
echo $mysqli->host_info . "\n";

*/
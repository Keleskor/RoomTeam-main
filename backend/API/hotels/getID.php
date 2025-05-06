<?
require($_SERVER["DOCUMENT_ROOT"].'/backend/database/connect.php');

$QUERY = 'SELECT * FROM HOTELS WHERE HOTELS.index LIKE ?';
$PREPARE =  $pdo->prepare($QUERY);
$PREPARE->execute([$_GET['id']]);
$HOTEL = $PREPARE->fetch();
?>
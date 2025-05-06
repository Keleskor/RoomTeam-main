<?
require($_SERVER["DOCUMENT_ROOT"].'/backend/database/connect.php');

$QUERY = 'SELECT * FROM HOTELS';
$PREPARE =  $pdo->prepare($QUERY);
$PREPARE->execute([]);
$HOTELS = $PREPARE->fetchAll();

echo json_encode($HOTELS);
?>
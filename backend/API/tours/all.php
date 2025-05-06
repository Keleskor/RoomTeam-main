<?
require($_SERVER["DOCUMENT_ROOT"].'/backend/database/connect.php');

$QUERY = 'SELECT * FROM TOURS';
$PREPARE =  $pdo->prepare($QUERY);
$PREPARE->execute([]);
$TOUR = $PREPARE->fetchAll();

echo json_encode($TOUR);

?>
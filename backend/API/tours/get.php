<?
require($_SERVER["DOCUMENT_ROOT"].'/backend/database/connect.php');

$QUERY = 'SELECT * FROM TOURS WHERE id LIKE ?';
$PREPARE =  $pdo->prepare($QUERY);
$PREPARE->execute([$_GET['id']]);
$TOUR = $PREPARE->fetch();

?>
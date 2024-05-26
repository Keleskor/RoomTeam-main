<?
require($_SERVER["DOCUMENT_ROOT"].'/backend/database/connect.php');

$QUERY = 'SELECT * FROM TOURS WHERE date LIKE ? AND total_users <= ? AND total_users >= ? AND location LIKE ?';
$PREPARE =  $pdo->prepare($QUERY);
$PREPARE->execute([$_GET['date'],$_GET['max_users'],$_GET['min_users'],$_GET['location']]);
$TOURS = $PREPARE->fetch();

echo json_encode($TOURS);
?>
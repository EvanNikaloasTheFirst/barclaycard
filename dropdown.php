<?php
require '../Database.php';
$stmt = $pdo->prepare('SELECT * FROM category');
$stmt->execute();

foreach ($stmt as $row) {

    echo '<option value="' . $row['id'] . '">' . $row['name'] . '</option>';
}

?>
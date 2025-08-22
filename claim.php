<?php
if(isset($_POST['id'])) {
    $id = intval($_POST['id']);
} else {
    echo "Invalid request.";
    exit;
}

$json = file_get_contents('beschreibungen.json');
$data = json_decode($json, true);
if (isset($data[$id])) {
    $entry = $data[$id];
} else {
    echo "Entry not found.";
    exit;
}
?>
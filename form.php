<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $numerik = $_POST["numerik"];
    $teks = $_POST["teks"];
    $data = array();
    for ($i = 0; $i < $numerik; $i++) {
        $data[$i] = $teks . ' ' . $i;
    }
    header('Content-Type: application/json');
    echo json_encode($data);
}
?>

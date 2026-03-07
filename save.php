<?php
$data = file_get_contents("php://input");
$js = "var markerData = " . json_encode(json_decode($data), JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE) . ";";

file_put_contents("data.js", $js);

echo "保存しました";


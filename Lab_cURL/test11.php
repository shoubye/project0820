<?php
header("content-type: text/html; charset=utf-8");

// 1. 初始設定
$ch = curl_init();

// 2. 設定 / 調整參數
curl_setopt($ch, CURLOPT_URL, "https://tw.appledaily.com/home/");
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_HEADER, 1);

// 3. 執行，取回 response 結果
$output = curl_exec($ch);
// var_dump($output);

// 4. 關閉與釋放資源
curl_close($ch);

echo htmlspecialchars($output);

?>
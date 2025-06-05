<?php
$conn = new mysqli("localhost", "root", "", "house_survey");
$own = $rent = 0;

$sql = "SELECT house_type, COUNT(*) as count FROM responses GROUP BY house_type";
$result = $conn->query($sql);

while($row = $result->fetch_assoc()) {
    if ($row['house_type'] == 'Own') $own = $row['count'];
    else $rent = $row['count'];
}

$total = $own + $rent;
$own_percent = $total ? ($own / $total) * 100 : 0;
$rent_percent = $total ? ($rent / $total) * 100 : 0;
?>

<!DOCTYPE html>
<html>
<head>
    <title>Survey Results</title>
    <link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
    <div class="result-box">
        <h2>Survey Results</h2>
        <div class="bar">Own  : <?= str_repeat("█", round($own_percent / 5)) ?> <?= round($own_percent) ?>%</div>
        <div class="bar">Rent : <?= str_repeat("█", round($rent_percent / 5)) ?> <?= round($rent_percent) ?>%</div>
    </div>
</body>
</html>

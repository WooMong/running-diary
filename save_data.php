<?php
include("DBconect.php");

// POST로 전송된 데이터 가져오기
$date = date('Y-m-d H:i:s'); // 현재 날짜와 시간
$distance = $_POST['distance'];
$runtime = $_POST['timer'];
$kcal = $_POST['calories'];

$sql = "INSERT INTO Diary (runtime, distance, kcal, date) VALUES ('$runtime', '$distance', '$kcal', '$date')";

if ($conn->query($sql) === TRUE) {
    echo "기록이 성공적으로 저장되었습니다.";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>

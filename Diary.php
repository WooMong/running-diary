<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <title>Diary</title>
    <style>
        table {
            border-collapse: collapse;
            width: 80%;
            margin: 20px;
        }

        th, td {
            border: 1px solid #ddd;
            padding: 8px;
            text-align: left;
        }

        th {
            background-color: #4CAF50;
            color: white;
        }
    </style>
</head>

<body>
    <h2>운동 일지</h2>
    <table>
        <tr>
            <th>번호</th>
            <th>운동 시간</th>
            <th>이동 거리 (km)</th>
            <th>칼로리 소비량</th>
            <th>날짜 및 시간</th>
        </tr>
        <?php
           include('DBconect.php');

            // 데이터베이스에서 데이터 가져오기
            $sql = "SELECT * FROM Diary";
            $result = $conn->query($sql);

            if ($result->num_rows > 0) {
                while ($row = $result->fetch_assoc()) {
                    echo "<tr>";
                    echo "<td>" . $row["id"] . "</td>";
                    echo "<td>" . $row["runtime"] . "</td>";
                    echo "<td>" . $row["distance"] . "</td>";
                    echo "<td>" . $row["kcal"] . "</td>";
                    echo "<td>" . $row["date"] . "</td>";
                    echo "</tr>";
                }
            } else {
                echo "<tr><td colspan='5'>No records found</td></tr>";
            }

            // 데이터베이스 연결 종료
            $conn->close();
        ?>
    </table>
</body>

</html>

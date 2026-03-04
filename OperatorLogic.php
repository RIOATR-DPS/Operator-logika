<!DOCTYPE html>
<html>
<head>
    <title>Kelulusan</title>
    <style>
        body {
            font-family: Arial;
            background-color: #ff0000;
            text-align: center;
            padding: 40px;
        }
        .box {
            background: white;
            padding: 25px;             
            width: 400px;
            margin: auto;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(255, 255, 255, 0.1);
        }
        input, select {
            padding: 8px;
            margin: 8px;
            width: 80%;
        }
        .hasil {
            margin-top: 15px;
            font-weight: bold;
        }
    </style>
</head>
<body>

<div class="box">
    <h2>Penentuan Kelulusan Siswa</h2>

    <form method="post">
        Nilai: <br>
        <input type="number" name="nilai" required><br>

        Kehadiran: <br>
        <input type="number" name="hadir" required><br>

        <input type="submit" name="proses" value="Cek Kelulusan">
    </form>

<?php
if(isset($_POST['proses'])){
    $nilai = $_POST['nilai'];
    $hadir = $_POST['hadir'];

    echo "<div class='hasil'>";

    // AND
    if($nilai >= 75 && $hadir >= 80){
        echo "Status: LULUS<br>";
    }

    // OR
    if($nilai >= 75 || $hadir >= 80){
        echo "Memenuhi salah satu syarat<br>";
    }
 
    // XOR
    if(($nilai >= 75) xor ($hadir >= 80)){
        echo "Hanya satu syarat terpenuhi<br>";
    }

    // NOT
    if(!($nilai >= 75)){
        echo "Nilai kurang dari 75<br>";
    }

    if($nilai < 75 && $hadir < 80){
        echo "Status: TIDAK LULUS";
    }

    echo "</div>";
}
?>

</div>

</body>
</html>
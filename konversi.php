<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<style>
    * {
        font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
    }

    body {
        background-image: linear-gradient(to right, #0016BE, #00ED8E);
        background-attachment: fixed;
        margin: 0;
        margin-top: 10vh;
    }

    h1 {
        text-align: center;
    }

    form {
        background-color: white;
        padding: 20px 20px 5px 20px;
        border-radius: 10px 10px 0 0;
        margin-left: 550px;
        margin-right: 550px;
        box-shadow: 10px 10px 4px rgba(0, 0, 0, 0.6);
    }

    .hasil {
        width: 372px;
        background-color: white;
        padding: 0 8px 8px 8px;
        border-radius: 0 0 10px 10px;
        margin-left: 550px;
        box-shadow: 10px 10px 4px rgba(0, 0, 0, 0.6);
        display: inline-block;
    }

    .hasil p {
        padding-left: 12px;
        font-size: 20px;
        text-align: center;
        font-weight: bold;
    }

    input[type="text"],
    input[type="number"] {
        width: 100%;
        padding: 10px;
        margin: 8px 0;
        display: inline-block;
        border: none;
        border-bottom: 1px solid #aaa;
        box-sizing: border-box;
        box-shadow: 0 1px 0 rgba(50, 50, 50, 0.5);
    }

    input[type="text"]:focus,
    input[type="number"]:focus {
        outline: none;
        border-bottom: 2px solid #000;
    }

    input[type="submit"] {
        width: 100%;
        padding: 10px;
        margin: 8px 0;
        display: block;
        border: none;
        border-radius: 25px;
        box-sizing: border-box;
        font-size: 15px;
        background-image: linear-gradient(to left, #0016BE, #00ED8E);
        color: white;
    }

    input[type="submit"]:hover {
        background-image: linear-gradient(to right, #00BE82, #00BE82);
        border: none;
        color: #000;
    }
</style>

<body>

    <form action="konversi.php" method="post">
        <h1>Konversi Nilai Angka Menjadi Nilai Huruf</h1>
        <br>
        Nama : <br>
        <input type="text" name="nama" placeholder="Masukkan Nama"> <br>
        Nilai : <br>
        <input type="number" name="nilai" placeholder="Masukkan Nilai Angka">
        <br>
        <br>
        <input type="submit" value="Konversi">
    </form>

    <div class="hasil">
        <p>
            <?php
            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                $x = $_POST['nilai'];
                $nama = $_POST['nama'];
                $hasil;

                if ($x >= 81 && $x <= 100)
                    $hasil = 'A';
                elseif ($x >= 71 && $x < 81)
                    $hasil = 'AB';
                elseif ($x >= 66 && $x < 71)
                    $hasil = 'B';
                elseif ($x >= 60 && $x < 66)
                    $hasil = 'BC';
                elseif ($x >= 56 && $x < 60)
                    $hasil = 'C';
                elseif ($x >= 41 && $x < 56)
                    $hasil = 'D';
                elseif ($x >= 0 && $x < 41)
                    $hasil = 'E';
                else
                    $hasil = "Invalid!";

                echo "Nilai Huruf dari " . $nama . " adalah " . $hasil;
            }
            ?>

        </p>
    </div>

</body>

</html>

<?php

require 'function.php';

if( isset ($_POST["submit"])){
    if(tambahData($_POST) > 0){
        echo "<script>
               alert('データが正常に追加されました (Data added successfully)');
               document.location.href= 'index.php'
               </script>";

        // echo "Data berhasil ditambahkan";
    } else {
        // echo "Data gagal ditambahkan";
        echo "<script>
               alert('データを追加できませんでした (Data failed to add)');
               document.location.href= 'index.php'
               </script>";
    }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Manga</title>
</head>
<body>
    <h1> Tambah Manga</h1>

    <form action="<?php $_SERVER["PHP_SELF"]?>" method="post">
    Gambar: <input type="text" name="gambar" required>
    <br><br>
    Judul Manga: <input type="text" name="judulManga" required>
    <br><br>
    Desc: <input type="text" name="desc" required>
    <br><br>
    Rate: <input type="text" name="rate" required>
    <br><br>
    First Chapter: <input type="text" name="firstChapter" required>
    <br><br>
    Last Chapter: <input type="text" name="lastChapter" required>
    <br><br>
    Genre: <input type="text" name="genre" required>
    <br><br>
    

    <button type="submit" name="submit">Tambah Data <a href="/"></a> </button>

    

</body>
</html>
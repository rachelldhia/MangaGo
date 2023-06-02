<?php

require 'function.php';
$manga = query("SELECT * FROM `manga`");

?>



<!DOCTYPE html>
<html lang="en">
<head>
    <title>MangaGo</title>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" a href="../dist/css/style.css">
     <style>
        #manga{
            color: #ffffff;
            margin: 50px;
            margin-bottom: 100px;
        }
        .table td{
            margin: 30px;
            text-align: center;
        }
        #about h1{
            margin-right: 145px;
        }
        #about h3{
            margin-right: 295px;
        }

    </style>
</head>

<body>
    <header>
        <div class="navbar">
            <div class="logo"><a href="index.php"><img src="../img/logo.png"></a></div>
            <nav>
                <a href="#home">Home</a>
                <a href="#about">About</a>
                <a href="#manga">Manga</a>
                <a href="#footer">Contact</a>
            </nav>
        </div>
        
        <div id="home">
            <div id="mainbanner">
                

                <div class="polygon">
                <img src="../img/Polygon.png">
                <img src="../img/Polygon.png">
                <img src="../img/Polygon.png">
                <img src="../img/Polygon.png">
                <img src="../img/Polygon.png">
                <img src="../img/Polygon.png">
                <img src="../img/Polygon.png">
                <img src="../img/Polygon.png">
                <img src="../img/Polygon.png">
            </div>
            <div class="banner">
                    <h1>Find and Read <br>
                        Your Favorite <br>
                        Manga</h1>
                        <div class="loader">
                        <p>好きなマンガを選んで好きなだけ読める</p>
                        </div>
                </div>
           
            </div>
            
        </div>
    </header>

    <about>
        <div id ="about">
        <div id="gambarbg"><img src="../img/theArticle.png" width="35%"></div>
        <div id="komik"><img src="../img/bokunohero.png" width="28%">
    </div>
    <h1>Boku No Hero Academia</h1>
    <h3>Shōnen, Action, Comedy</h3>
    <p>9.5/10</p>
    </div>

    <div id="aboutManga">
        <h1>MangaGo</h1>
        <p>マンガゴ</p>
        <h3>Welcome to MangaGo.<br>
         MangaGo is a website<br>
          made for </h3>
         
    </div>
    <div class ="recomendation"><img src="../img/recomendation.png" width="540px">
    <h3>Enjoy reading chapter <br>
    one of each title for <br>
    free and discover new<br>
     ones.</h3>

</div>
        
</about>



<div id="manga">
<h1>Daftar Manga</h1>

<a href="tambahdata.php">tambah Manga</a>
<table border= "2" cellpadding="10" cellspacing="0" class="table">

<tr>

        <th>No.</th>
        <th> Judul Manga </th>
        <th> Desc </th>
        <th> Rate </th>
        <th> First Chapter </th>
        <th> Last Chapter </th>
        <th> Genre </th>
        <th> Gambar </th>
        <th> Action </th>


</tr>


<?php $i=1 ?>

<?php foreach($manga as $row):?>

<tr>
    <td><?php echo $i ?></td>
    <td><img src="../img/<?= $row["gambar"]?>" alt="" width="80"></td>
    <td><?php echo $row["judulManga"] ?></td>
    <td><?php echo $row["desc"] ?></td>
    <td><?php echo $row["rate"] ?></td>
    <td><?php echo $row ["firstChapter"] ?></td>
    <td><?php echo $row ["lastChapter"] ?></td>
    <td><?php echo $row ["genre"] ?></td>
   
   
    <td>
    <a href="edit.php?mangaId=<?= $row["mangaId"];?>">ubah</a>
    <a href="hapus.php?mangaId=<?= $row["mangaId"];?>" onclick="return confirm('このデータを完全に削除してもよろしいですか?(Are you sure you want to permanently delete this data?)')";>hapus</a>
    </td>

</tr>
<?php $i++ ?>
<?php endforeach ?>
</table>
</div>





<footer>
<div id="footer">

    <div class="icons">
        <svg class="waves" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 24 150 28" preserveAspectRatio="none" shape-rendering="auto">
            <defs><path id="gentle-wave" d="M-160 44c30 0 58-18 88-18s 58 18 88 18 58-18 88-18 58 18 88 18 v44h-352z" /></defs>
            <g class="parallax">
                <use xlink:href="#gentle-wave" x="48" y="0" fill="rgba(80, 54, 139,0.7" />
                <use xlink:href="#gentle-wave" x="48" y="3" fill="rgba(80, 54, 139,0.5)" />
                <use xlink:href="#gentle-wave" x="48" y="5" fill="rgba(80, 54, 139,0.3)" />
                <use xlink:href="#gentle-wave" x="48" y="7" fill="#7857BC" />
            </g>
        </svg>
    </div>
    <div class="content flex">
    <ul class="icons">
        <a href="#" target="_blank"><img src ="../img/instagram.png"></a> 
        <a href="https://www.linkedin.com/in/rachel-dhia-103a46230/" target="_blank"><img src ="../img/linkedin.png" ></a> 
        <a href="https://github.com/rachelldhia" target="_blank"><img src ="../img/github.png"></a> 
        <a href="#" target="_blank"><img src ="../img/email.png" target="_blank"></a> 
    </ul>
   
    </div>
    <p>© 2022 Design By Rachel Dhia Maharani </p>
    
    </footer>
</body>
</html>
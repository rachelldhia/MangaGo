<?php
//koneksi ke database
$conn = mysqli_connect("localhost", "root", "", "mangago");

function query($query){
//ambil data di database
global $conn;
$result = mysqli_query ($conn,$query);
$rows = [];
while($row = mysqli_fetch_assoc($result)){
    $rows[] = $row;
}
return $rows;

}

function tambahData($data){
    global $conn;
    $gambar = htmlspecialchars($data["gambar"]) ;
    $judulManga = htmlspecialchars($data["judulManga"]) ;
    $desc = htmlspecialchars($data["desc"]) ;
    $rate = htmlspecialchars($data["rate"]) ;
    $firstChapter = htmlspecialchars($data["firstChapter"]) ;
    $lastChapter = htmlspecialchars($data["lastChapter"]) ;
    $genre = htmlspecialchars($data["genre"]);
    
    
//id nya gk usah ditambahin
$sql = "INSERT INTO manga (gambar, judulManga, `desc`, rate, firstChapter, lastChapter, genre) VALUES ('$gambar', '$judulManga', '$desc', '$rate', '$firstChapter', '$lastChapter', '$genre')  ";
mysqli_query($conn, $sql);

return mysqli_affected_rows($conn);
}

function hapusData($id){
    global $conn;
    mysqli_query($conn, "DELETE FROM manga WHERE mangaId = $id");

    return mysqli_affected_rows($conn);
    
}
?>
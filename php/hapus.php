<?php

require 'function.php';

$id = $_GET['mangaId'];

if(hapusData($id) >0){
    echo "<script>
        alert('データは正常に削除されました (Data deleted successfully)');
        document.location.href='../php/index.php';
        </script>";
}else{
    echo "<script>
        alert('データを削除できませんでした  (Data failed to delete)');
        document.location.href='../php/index.php';
        </script>";
}
?>
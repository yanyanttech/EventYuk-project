<?php
session_start();
if (!isset($_SESSION["login"])){
    header("location: login.php");
    exit;
}
require 'connect.php';
$id = $_GET["ID_Event"];
if(hapus($id)>0) {
    echo "<script>
    alert('data berhasil dihapus');
    document.location.href = 'lihat-event.php';
    </script>";
}
else{
    echo "<script>
    alert('event gagal ditambahkan');
    document.location.href = 'lihat-event.php';
</script>";
}
?>
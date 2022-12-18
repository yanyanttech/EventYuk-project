<?php
session_start();
if (!isset($_SESSION["login"])){
    header("location: login.php");
    exit;
}
require 'connect.php';
// ambil data di url
$id = $_GET["ID"];
// query data berdasarkan ID user
$tiket = lihat("SELECT * FROM user WHERE ID=$id")[0];
if( isset($_POST["Kirim"])){
    echo "<script>
    alert('Pemesanan berhasil');
    document.location.href = 'buktitiket.php';
</script>";}
?>

<!DOCTYPE html>
<html lang="en">
<?php foreach ($tiket as $row):?>
                    <div class="row gx-5">
                        <div class="col-lg-6">
                            <div class=" ">
                                <td><?= $row["nama"];?></td>
                                <td><?= $row["email"]; ?></td>
                                <td><?= $row["telepon"]; ?></td>
                                <td><?= $row["pilih_event"]; ?></td>
                                <td><?= $row["jumlah_tiket"]; ?></td>
                                <td><?= $row["harga"]; ?></td>
                            </div>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
</html>
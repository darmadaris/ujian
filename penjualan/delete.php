<?php
include_once('setting.php');
$id = $_GET['id'];
$sql = "DELETE FROM penjualan WHERE id='$id'";
$result = mysqli_query($koneksi, $sql);
if ($result) {
    header('location: index.php?m=penjualan');
} else {
    include "index.php?m=penjualan";
    echo '<script language="JavaScript">';
    echo 'alert{"Data gagal Dihapus."}';
    echo '</script>';
}

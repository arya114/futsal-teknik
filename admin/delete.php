<?php
include '../function/koneksi.php';

if (isset($_GET['id_lapangan'])) {
    $id_lapangan = $_GET['id_lapangan'];

    // Hapus data dari database
    $query_hapus = mysqli_query($koneksi, "DELETE FROM lapangan WHERE id_lapangan = '$id_lapangan'");

    if ($query_hapus) {
        // Hapus gambar dari folder img jika berhasil dihapus dari database
        $query_select_gambar = mysqli_query($koneksi, "SELECT gambar_lapangan FROM lapangan WHERE id_lapangan = '$id_lapangan'");
        $gambar_data = mysqli_fetch_assoc($query_select_gambar);
        $gambar_lapangan = $gambar_data['gambar_lapangan'];
        
        // Hapus file gambar dari folder img
        unlink("img/" . $gambar_lapangan);

        header("location: lapangan.php");
    } else {
        echo "Gagal menghapus data lapangan.";
    }
} else {
    echo "ID lapangan tidak valid.";
}
?>

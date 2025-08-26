<?php
session_start();
include "../../koneksi.php";

$username = mysqli_real_escape_string($db, $_POST['username']);
$password = mysqli_real_escape_string($db, sha1($_POST['password']));

$login = mysqli_query($db, "SELECT * FROM tabel_user WHERE nama_user = '$username' AND password_user = '$password'");
$check = mysqli_num_rows($login);

if ($check > 0) {
    $data = mysqli_fetch_assoc($login);
    $_SESSION['username'] = $username;
    header("location: ../../index.php");
    // echo "<script>
    //         alert('✅ Login Success');
    //         window.history.back(); // ⬅️ this goes back to previous page
    //       </script>";
} else {
    echo "<script>
            alert('❌ Gagal Login');
            window.history.back();
          </script>";
}
?>
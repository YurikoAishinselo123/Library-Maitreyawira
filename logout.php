<?php
session_start();
session_unset();
session_destroy();
echo "<Script language='JavaScript'>
alert('Logout Berhasil!');
document.location='pages/Login/login.php';
</script>";
?>
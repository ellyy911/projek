<?php
session_start();
session_destroy();// menghapus semua session
header("location:login.php?aksi=logout");// mengalihkan halaman sambil mengirim pesan logout
?>
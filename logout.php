<?php
session_start();

//Hapus semua session
session_unset();
session_destory();

//Kembali ke halaman login
header("Location: login.php");
exit;
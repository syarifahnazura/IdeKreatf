<?php
session_start();

$name = $_SESSION["name"];
$role = $_SESSION["role"];
// ambil notifikasi jika ada, kemudian hapus dari sesi
$notification = $_SESSION['notification'] ?? null;
if ($notification) {
    unset($_SESSION['notifiication']);
}
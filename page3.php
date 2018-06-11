<?php
session_start();
session_unset();
echo 'Menghapus sesi / $_SESSION';
/* Pada page3.php ini, berarti sistem sedang menghapus semua
sesi, yang menandakan bahwa user sedang melakukan Logout / 
keluar dari halaman Loginnya.
Setelah Logout, kita coba ke page2.php, maka sesi akan 0 (nol).
Selesai. Terima kasih telah menonton video tutorial ini.
Jangan lupa Subscribe, Like, dan Komen, yaaaa....
*/
?>
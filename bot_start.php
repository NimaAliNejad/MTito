<?php
require('Titozer.php');
@set_time_limit(0);
@clearstatcache();
@ini_set('max_execution_time',0);
@ini_set('output_buffering',0);
echo "[?] Tedade Hesabha:";
$count = trim(fgets(STDIN, 1024));
echo "[?] Chand Saniye Vaghfe Be Ezaye Har Account:";
$sleep = trim(fgets(STDIN, 1024));
<<<<<<< HEAD
echo "[!] Lotfan Sabr Konid. . .\n\n";
$i = new instaCreator();
=======
echo "[!] Lutfen bekleyiniz. . .\n\n";
$i = new Titozer();
>>>>>>> master
$i->userCreate($count,$sleep);
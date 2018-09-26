<?php
require('class.php');
@set_time_limit(0);
@clearstatcache();
@ini_set('max_execution_time',0);
@ini_set('output_buffering',0);
echo "[?] Kac adet hesap olusturulsun:";
$count = trim(fgets(STDIN, 1024));
echo "[?] Kac saniyede bir olusturulsun:";
$sleep = trim(fgets(STDIN, 1024));
echo "[!] Lutfen bekleyiniz. . .\n\n";
$proxyFile = @fopen('proxylist.txt', 'r');
$getProxies = explode(PHP_EOL, fread($proxyFile, filesize('proxylist.txt')));
$fisier = fopen("bune.txt", "a");
$num = 1;

for($i = 0; $i < count($getProxies) - 1; $i++) {
    test($getProxies[$i]);
}


function test($proxy)
{
    global $fisier;
    global $num;
    $splited = explode(':',$proxy); // Separate IP and port
    if($con = @fsockopen($splited[0], $splited[1], $eroare, $eroare_str, 3))
    {
        print $num." ";
        fwrite($fisier, $proxy . PHP_EOL); // Check if we can connect to that IP and port
        print $proxy . "\n"; // Show the proxy
        fclose($con); // Close the socket handle
        $num++;
    }
}
fclose($fisier);
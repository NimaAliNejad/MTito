<?php
require('class.php');
@set_time_limit(0);
@clearstatcache();
@ini_set('max_execution_time',0);
@ini_set('output_buffering',0);
//function getProxy($index){
//    $proxyFile = @fopen('proxylist.txt', 'r');
//    if($proxyFile){
//        $getProxies = explode(PHP_EOL, fread($proxyFile, filesize('proxylist.txt')));
//    }
//    $getRandom = (count($getProxies) > 0) ? $getProxies[$index] : NULL;
//    return $getRandom;
//}
//system(`curl -k --insecure --socks4 103.216.82.198:6667 -d "email=naadxdrawdhhkbinda@gmail.com&password=y00sefabad&username=nimaadrawjkbhd123dia&first_name=raaawvajnjnrcaws&seamless_login_enabled=1&tos_version=row" -H 'Accept-Encoding: gzip,deflate' -H "Content-Type: application/x-www-form-urlencoded" -H "Host: www.instagram.com" -H "Cookie: fbm_124024574287414=base_domain=.instagram.com; rur=PRN; csrftoken=fLe4FjT6RmAAbG2BQbQMl0UbIF9fW0iE; mid=VpwyKAAEAAGDjG7hYv7xetbzU2vy; fbm_124024574287414="base_domain=.instagram.com"; mcd=1" -H "User-Agent: Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/53.0.2785.124 Safari/537.36" -H "Origin: https://www.instagram.com" -H "X-Instagram-Ajax: 8958fe1e75ab" -H "Content-Type: application/x-www-form-urlencoded" -H "Accept: */*" -H "X-Requested-With: XMLHttpRequest" -H "Save-Data: on" -H "X-Csrftoken: fLe4FjT6RmAAbG2BQbQMl0UbIF9fW0iE" -H "Referer: https://www.instagram.com/" -H "Accept-Language: en-US,en;q=0.8,id;q=0.6" -X POST https://www.instagram.com/accounts/web_create_ajax/
//`);
//echo "curl -k --insecure --socks4 103.216.82.198:6667 -d \"email=naadxdrawdhhkbinda@gmail.com&password=y00sefabad&username=nimaadrawjkbhd123dia&first_name=raaawvajnjnrcaws&seamless_login_enabled=1&tos_version=row\" -H 'Accept-Encoding: gzip,deflate' -H \"Content-Type: application/x-www-form-urlencoded\" -H \"Host: www.instagram.com\" -H \"Cookie: fbm_124024574287414=base_domain=.instagram.com; rur=PRN; csrftoken=fLe4FjT6RmAAbG2BQbQMl0UbIF9fW0iE; mid=VpwyKAAEAAGDjG7hYv7xetbzU2vy; fbm_124024574287414=\"base_domain =.instagram . com\"; mcd=1\" -H \"User-Agent: Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/53.0.2785.124 Safari/537.36\" -H \"Origin: https://www.instagram.com\" -H \"X-Instagram-Ajax: 8958fe1e75ab\" -H \"Content-Type: application/x-www-form-urlencoded\" -H \"Accept: */*\" -H \"X-Requested-With: XMLHttpRequest\" -H \"Save-Data: on\" -H \"X-Csrftoken: fLe4FjT6RmAAbG2BQbQMl0UbIF9fW0iE\" -H \"Referer: https://www.instagram.com/\" -H \"Accept-Language: en-US,en;q=0.8,id;q=0.6\" -X POST https://www.instagram.com/accounts/web_create_ajax/";
//for ($i = 0; $i<50;$i++) {
//    $proxy = getProxy($i);
//    system("curl -k --insecure --socks4 ".$proxy." -d \"email=naccqhvcxcxhkbinda@gmail.com&password=y00sefabad&username=nidaxknmereka&first_name=rawvaljnjnrcaws&seamless_login_enabled=1&tos_version=row\" -H 'Accept-Encoding: gzip,deflate' -H \"Content-Type: application/x-www-form-urlencoded\" -H \"Host: www.instagram.com\" -H \"Cookie: fbm_124024574287414=base_domain=.instagram.com; rur=PRN; csrftoken=fLe4FjT6RmAAbG2BQbQMl0UbIF9fW0iE; mid=VpwyKAAEAAGDjG7hYv7xetbzU2vy; fbm_124024574287414=\"base_domain =.instagram.com\"; mcd=1\" -H \"User-Agent: Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/53.0.2785.124 Safari/537.36\" -H \"Origin: https://www.instagram.com\" -H \"X-Instagram-Ajax: 8958fe1e75ab\" -H \"Content-Type: application/x-www-form-urlencoded\" -H \"Accept: */*\" -H \"X-Requested-With: XMLHttpRequest\" -H \"Save-Data: on\" -H \"X-Csrftoken: fLe4FjT6RmAAbG2BQbQMl0UbIF9fW0iE\" -H \"Referer: https://www.instagram.com/\" -H \"Accept-Language: en-US,en;q=0.8,id;q=0.6\" -X POST https://www.instagram.com/accounts/web_create_ajax/");
//    sleep(10);
//}

//system("curl -k --insecure --socks4 174.70.241.7:24385 -d \"email=naccqhvcxcxhkbinda@gmail.com&password=y00sefabad&username=nidaxknmereka&first_name=rawvaljnjnrcaws&seamless_login_enabled=1&tos_version=row\" -H 'Accept-Encoding: gzip,deflate' -H \"Content-Type: application/x-www-form-urlencoded\" -H \"Host: www.instagram.com\" -H \"Cookie: fbm_124024574287414=base_domain=.instagram.com; rur=PRN; csrftoken=fLe4FjT6RmAAbG2BQbQMl0UbIF9fW0iE; mid=VpwyKAAEAAGDjG7hYv7xetbzU2vy; fbm_124024574287414=\"base_domain =.instagram.com\"; mcd=1\" -H \"User-Agent: Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/53.0.2785.124 Safari/537.36\" -H \"Origin: https://www.instagram.com\" -H \"X-Instagram-Ajax: 8958fe1e75ab\" -H \"Content-Type: application/x-www-form-urlencoded\" -H \"Accept: */*\" -H \"X-Requested-With: XMLHttpRequest\" -H \"Save-Data: on\" -H \"X-Csrftoken: fLe4FjT6RmAAbG2BQbQMl0UbIF9fW0iE\" -H \"Referer: https://www.instagram.com/\" -H \"Accept-Language: en-US,en;q=0.8,id;q=0.6\" -X POST https://www.instagram.com/accounts/web_create_ajax/");
//system("curl -k --insecure --socks4 174.70.241.7:24385 -d 'email=naadxdrawdhhkbinda@gmail.com&password=y00sefabad&username=nimaadrawjkbhd123dia&first_name=raaawvajnjnrcaws&seamless_login_enabled=1&tos_version=row' -H 'Accept-Encoding: gzip,deflate' -H 'Content-Type: application/x-www-form-urlencoded' -H 'Host: www.instagram.com' -H 'Cookie: fbm_124024574287414=base_domain=.instagram.com; rur=PRN; csrftoken=fLe4FjT6RmAAbG2BQbQMl0UbIF9fW0iE; mid=VpwyKAAEAAGDjG7hYv7xetbzU2vy; fbm_124024574287414=\"base_domain =.instagram.com\"; mcd=1' -H 'User-Agent: Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/53.0.2785.124 Safari/537.36' -H 'Origin: https://www.instagram.com' -H 'X-Instagram-Ajax: 8958fe1e75ab' -H 'Content-Type: application/x-www-form-urlencoded' -H 'Accept: */*' -H 'X-Requested-With: XMLHttpRequest' -H 'Save-Data: on' -H 'X-Csrftoken: fLe4FjT6RmAAbG2BQbQMl0UbIF9fW0iE' -H 'Referer: https://www.instagram.com/' -H 'Accept-Language: en-US,en;q=0.8,id;q=0.6' -X POST https://www.instagram.com/accounts/web_create_ajax/");
echo "[?] Kac adet hesap olusturulsun:";
//echo exec("simple.bat");
$count = trim(fgets(STDIN, 1024));
echo "[?] Kac saniyede bir olusturulsun:";
$sleep = trim(fgets(STDIN, 1024));
echo "[!] Lutfen bekleyiniz. . .\n\n";
$i = new instaCreator();
$i->userCreate($count,$sleep);
<?php
include 'class.php';
echo
"
_   _       ____                     __     _______
| \ | | __ _/ ___| _ __   __ _ _ __ __\ \   / /___  |
|  \| |/ _` \___ \| '_ \ / _` | '_ ` _ \ \ / /   / /
| |\  | (_| |___) | |_) | (_| | | | | | \ V /   / /
|_| \_|\__, |____/| .__/ \__,_|_| |_| |_|\_/   /_/
       |___/      |_|
";
echo "\n";
$z = 0;
sleep(2);
echo "╔╤╤╤╤╤╤╤╤╤╤╤╤╤╤╤╤╤╤╤╤╤╤╤╤╤╤╤╤╤╤╤╤╤╤╤╤╤╤╤╤╤╤╤╤╤╤╤╤╤╤╤\n";
echo "╟\n";
echo "╟> Url  >_: ";
$url = trim(fgets(STDIN));

echo "╟> Message  >_: ";
$msg = trim(fgets(STDIN));

echo "╟> Count  >_: ";
$limit = trim(fgets(STDIN));
echo "╟\n";
echo "╚╧╧╧╧╧╧╧╧╧╧╧╧╧╧╧╧╧╧╧╧╧╧╧╧╧╧╧╧╧╧╧╧╧╧╧╧╧╧╧╧╧╧╧╧╧╧╧╧╧╧╧\n";
echo "╔╤╤╤╤╤╤╤╤╤╤╤╤╤╤╤╤╤╤╤╤╤╤╤╤╤╤╤╤╤╤╤╤╤╤╤╤╤╤╤╤╤╤╤╤╤╤╤╤╤╤╤\n";
echo "╟\n";
echo "╟> GoTo $url \n";
echo "╟\n";
echo "╚╧╧╧╧╧╧╧╧╧╧╧╧╧╧╧╧╧╧╧╧╧╧╧╧╧╧╧╧╧╧╧╧╧╧╧╧╧╧╧╧╧╧╧╧╧╧╧╧╧╧╧\n";
sleep(2);
echo "╔╤╤╤╤╤╤╤╤╤╤╤╤╤╤╤╤╤╤╤╤╤╤╤╤╤╤╤╤╤╤╤╤╤╤╤╤╤╤╤╤╤╤╤╤╤╤╤╤╤╤╤\n";
echo "╟\n";
$y = 1;
while($y <= $limit)
{
    echo '╟> '.$init->Vaccume($url,$msg);
    echo "\n";
    echo "╟\n";
    if($y == $limit){
    echo "╟\n";
    echo "╟> Spam Selesai \n";
    echo "╟\n";
    echo "╚╧╧╧╧╧╧╧╧╧╧╧╧╧╧╧╧╧╧╧╧╧╧╧╧╧╧╧╧╧╧╧╧╧╧╧╧╧╧╧╧╧╧╧╧╧╧╧╧╧╧╧\n";
    }
 $y++;
}
?>
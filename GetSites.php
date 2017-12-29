<?php
$uname = php_uname();
if(preg_match("/Linux/",$uname)){
// if OS = linux do this command	
	system("clear");
	
	} else {
// else do this command	
		system("cls");
		
		}
$version = "v1.0";
$white = "\e[97m";
$black = "\e[30m\e[1m";
$yellow = "\e[93m";
$orange = "\e[38;5;208m";
$blue   = "\e[34m";
$lblue  = "\e[36m";
$cln    = "\e[0;94m";
$green  = "\e[92m";
$fgreen = "\e[32m";
$red    = "\e[91m";
$magenta = "\e[35m";
$bluebg = "\e[44m";
$lbluebg = "\e[106m";
$greenbg = "\e[42m";
$lgreenbg = "\e[102m";
$yellowbg = "\e[43m";
$lyellowbg = "\e[103m";
$redbg = "\e[101m";
$grey = "\e[37m";
$cyan = "\e[36m";
$bold   = "\e[1m";
$nbold = "\e[1;97m";
echo $green.$bold;
echo "
   _____                          _____ _ _            
  / ____|                        / ____(_) |           
 | (___   ___ _ ____   _____ _ _| (___  _| |_ ___  ___ 
  \___ \ / _ \ '__\ \ / / _ \ '__\___ \| | __/ _ \/ __|
  ____) |  __/ |   \ V /  __/ |  ____) | | ||  __/\__ \
 |_____/ \___|_|    \_/ \___|_| |_____/|_|\__\___||___/
          -==============================-
          -|      Coded by MrSqar       |-
          -==============================-
                                                       \n";
                                                       

echo $yellow."    [~] Enter ip or url [ without http:// ] : ".$green;
$target = @fgets(STDIN,1024);
$target = @trim($target);
$target = "http://www.viewdns.info/reverseip/?host=$target&t=1";
$target = @file_get_contents($target);
echo $yellow."    [~] Enter index name [ Enter for none ] : ".$green;
$index = @fgets(STDIN,1024);
$index = @trim($index);
@preg_match_all('#<td align="center">(.*?)</td>\s*</tr>#is',$target,$link);
$exp = @explode("<td>",$target);
$exp1 = @explode('<td align="center">',$target);
unset($exp[0]);
unset($exp[1]);
unset($exp[2]);
unset($exp[3]);
unset($exp[4]);
$c = @count($link);
for($i=0;$i<$c;$i++){
$arr = array(
"</tr>" => "",
'</td><td align="center">' => "",
'</td>' => "",
'</table>' => "",
'</body>' => "",
'</tr>' => "",
'<tr>' => "",
'</tbody>' => "",
'</html>' => "",
'</head>' => "",
'<body>' => "",
'<head>' => "",
'<html>' => "",
'</center>' => "",
'<br>' => "",
'<!--</div>-->' => "",
'<table width="1000" align="center" border="0">' => "",
'<tr align="center">' => "",
'<td align="center">' => "",
'<br />' => "",
'<table width="731" align="center" border="0">' => "",
'<tr align="center">' => "",
'<td align="center">' => "",
'<center>' => "",
'' => "",
);
$rb = @str_replace(array_keys($arr),"",$exp);
$rb2 = @str_replace($link[$i],"",$rb);
$cal = @count($rb2) + 4;
$cal2 = @count($rb2) - 1;
}
unset($rb2[5]);
unset($rb2[$cal]);
echo $yellow."    [+] Total sites : ".$green.$cal2."\n";
echo $cln;
foreach($rb2 AS $sites){
$f = @fopen("result.txt","a+");
$sites = @trim($sites);
	if(!empty($index)){
$original = "http://".$sites."/".$index."\n";
@fwrite($f,$original);
	echo $original;
}else{
$original = @trim($sites);
$original = "http://".$sites."\n";
@fwrite($f,$original);
	echo $original;
}
	}


<?php  
//获取当前文件所在的绝对目录
$dir =  dirname(__FILE__);
//扫描文件夹
$file = scandir($dir);
//显示

$s=sizeof($file);
$x=rand(0,$s);
while(substr($file[$x],-3)!="jpg" && substr($file[$x],-3)!="png"){
	$x=rand(0,$s);
}
$img="http://47.103.204.220/img/".$file[$x];
// echo "<img src=$img>";
header("location:$img");
?>
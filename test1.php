<?php
$url_name='http://www.domain.com/mytest.php?uid=5&pages=2&category=3';
$urlarr=parse_url($url_name);

//指定第二个参数
parse_str($urlarr['query'],$parr);//$urlarr['query']的值为：uid=5&pages=2&category=3'
print_r($parr);
echo "<br/><br/>";

//不指定第二个参数
parse_str($urlarr['query']);
echo $uid."<br/>";
echo $pages."<br/>";
echo $category."<br/>";

$i = count(urlarr);
print_r($urlarr);




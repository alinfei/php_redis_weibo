<?php

$m = new Memcache(); 
$m->connect('192.168.0.13', 11211); 
$session = $m->get("tofcomuum6kencl4s067ebh0h6"); 
var_dump($session );
echo $session."<br/>"; //��õ����������ݣ�username|s:16:"pandao";������һ�¾Ϳ��Եõ���Ӧ��ֵ��
echo session_id()."<br/>";
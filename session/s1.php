<?php
//����session��ȡ�Ƿ����� 
session_start(); 
$_SESSION['username'] = "sijiaomao"; 
echo session_id()."\n"; 
//��Memcache�ж�ȡsession 
$m = new Memcache(); 
$m->connect('192.166.1.39', 11211); 
//�������� 
//$mem->addServer("127.0.0.1", 11211) or die ("Can't add Memcache server 127.0.0.1:12000"); 

//����session_id��ȡ���� 

//���� 

$session = $m->get(session_id());

var_dump($session);

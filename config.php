<?php
require_once('sqlin.php');
$conf['debug']['level']=5;

/*		���ݿ�����		*/
$conf['db']['dsn']='mysql:host=localhost;dbname=lc;charset=utf8'; //���ݿ���
$dbname='lc'; //���ݿ���
$dbhost='localhost';
$conf['db']['user']='root';  //���ݿ��˺�
$conf['db']['password']='root'; //���ݿ�����
$conf['db']['charset']='utf8';
$conf['db']['prename']='lottery_'; //���ݿ��ǰ��

$conf['cache']['expire']=0;
$conf['cache']['dir']='_cache_$98sdf29@fw!d#s4fef/'; //����Ŀ¼

$conf['url_modal']=2;

$conf['action']['template']='wjinc/default/';
$conf['action']['modals']='wjaction/default/';

$conf['member']['sessionTime']=15*60;	// �û���Чʱ��

error_reporting(E_ERROR & ~E_NOTICE);

ini_set('date.timezone', 'asia/shanghai');

ini_set('display_errors', 'On');

if(strtotime(date('Y-m-d',time()))>strtotime(date('Y-m-d',time()))){
	$GLOBALS['fromTime']=strtotime(date('Y-m-d',strtotime("-1 day")));
	$GLOBALS['toTime']=strtotime(date('Y-m-d',time()));
}else{
	
	$GLOBALS['fromTime']=strtotime(date('Y-m-d'));
	$GLOBALS['toTime']=strtotime(date('Y-m-d',strtotime("+1 day")));
}
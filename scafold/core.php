<?php
session_start();
header('P3P:CP="IDC DSP COR ADM DEVi TAIi PSA PSD IVAi IVDi CONi HIS OUR IND CNT"');    
ob_start(); 

//classe simple
require_once '../class/Inscrit.class.php';

require_once('../class/InscritManager.php');
$inscritMan = new InscritManager();

$page = 'yopantilles';
$appId = '272024172943561';
$appSecret = '4469fb4fee1e9faf49b0b15033cf7f76';
?>
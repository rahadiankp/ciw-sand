<?php
include_once('inc/compiler.php');
include_once('inc/config.php');

//var for files
$bhs = $_POST['lang'];
$kode = $_POST['kode'];
$input = $_POST['input'];

//file and source processing
writeSrc($kode,$rand,$bhs);//write source
writeInput($input,$rand); //write input
bgnKode($rand,$bhs); //compile & exec src
lariKode($rand,$bhs,$TIMELIMIT); //run the code

//passing var to output
$fout="$SUB_PATH/out";
$fcrout="$SUB_PATH/outcr";
$fin="$SUB_PATH/src.in";
$isiinp=htmlspecialchars(file_get_contents($fin));
$output=htmlspecialchars(file_get_contents($fout));
$outcr=file_get_contents($fcrout);

$outcres = array("out" => $output, "cres" => $outcr, "inpot" => $isiinp);
echo json_encode($outcres);

//removing src
hapusGan($rand);

?>
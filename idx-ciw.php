<?php
include_once('inc/compiler.php');
include_once('inc/config.php');

/*=S====VAR FOR FILES=======*/
$bhs = $_POST['lang'];
$kode = $_POST['kode'];
$input = $_POST['input'];
/*=E====VAR FOR FILES=======*/

/*=S=====COMPILING AND EXEC SOURCE========*/
writeSrc($kode,$rand,$bhs);
writeInput($input,$rand);
bgnKode($rand,$bhs);
lariKode($rand,$bhs,$TIMELIMIT);
/*=E=====COMPILING AND EXEC SOURCE========*/

/*=S========OUTPUT PASSING=========*/
$fout="$SUB_PATH/out";
$fcrout="$SUB_PATH/outcr";
$fin="$SUB_PATH/src.in";
$isiinp=htmlspecialchars(file_get_contents($fin));
$output=htmlspecialchars(file_get_contents($fout));
$outcr=file_get_contents($fcrout);
/*=E========OUTPUT PASSING=========*/

/*=S=======jQUERY PROCESSING=======*/
$outcres = array("out" => $output, "cres" => $outcr, "inpot" => $isiinp);
echo json_encode($outcres);
/*=E=======jQUERY PROCESSING=======*/:

hapusGan($rand); //del source

?>

<?php

function bgnKode($rand,$bhs) {
	$fcomp="";
	switch($bhs) {
        case "java":
            $fcomp="javac submissions/a--$rand/Main.$bhs &> submissions/a--$rand/outcr";
            break;
        case "cpp":
            $fcomp="g++ submissions/a--$rand/Main.$bhs -o submissions/a--$rand/src &> submissions/a--$rand/outcr";
            break;
        case "c":
            $fcomp="gcc submissions/a--$rand/Main.$bhs -o submissions/a--$rand/src -lm &> submissions/a--$rand/outcr";
            break;
		case "pas":
            $fcomp="fpc submissions/a--$rand/Main.$bhs &> submissions/a--$rand/outcr";
            break;
		case "py3":
			$fcomp="python -m py_compile submissions/a--$rand/Main.$bhs 2>&1 | tee submissions/a--$rand/outcr";
			break;
    }
	exec($fcomp);
}

function lariKode($rand,$bhs,$TIMELIMIT) {
	$exc="";
    switch($bhs) {
	case "java":
		$exc="java -cp submissions/a--$rand Main < submissions/a--$rand/src.in > submissions/a--$rand/out";
		break;
	case "pas":
		$exc="submissions/a--$rand/Main < submissions/a--$rand/src.in > submissions/a--$rand/out";
		break;
	case "py3":
		$exc="python3 submissions/a--$rand/Main.$bhs < submissions/a--$rand/src.in > submissions/a--$rand/out";
		break;
	default:
 		$exc="submissions/a--$rand/src < submissions/a--$rand/src.in > submissions/a--$rand/out";
        	break;
	}
	exec("ulimit -t $TIMELIMIT; ".$exc);
}

function writeSrc($kode,$rand,$bhs) {
	$dir="mkdir submissions/a--$rand && chmod 777 a--$rand -R";
	exec($dir);
	$fsrc="submissions/a--$rand/Main.$bhs";
	$fileSrc = fopen($fsrc,"a+");
	fwrite($fileSrc, $kode);
	fclose($fileSrc);
}

function writeInput($input,$rand) {
    $fin="submissions/a--$rand/src.in";
    $fileInput = fopen($fin,"a+");
    fwrite($fileInput, $input);
    fclose($fileInput);
}

function hapusGan($nameRand) {
	$exc="rm submissions/*$nameRand* -r";
	exec($exc);
}
?>

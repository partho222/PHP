<?php
error_reporting(0);
//////////////////////// Class For Read Input --- @laurenceHR [02/2012] ////////////////////////////////////////////////////////////
class stdIn{var $ntxt = 0;var $nline = 0;var $arr_txt;var $arr_line;var $linex;var $liney;
function stdIn($local = false){if($local){$dir = fopen("input.txt", 'r');}else{$dir = fopen("php://stdin", 'r');}
$datatxt = stream_get_contents($dir);$del = Array("\n","\r","\n\r");$data = explode("\n",$datatxt);	$il = 0;$id = 0;
foreach($data as $line){if(strlen($line) > 0){$line = str_replace($del,'',$line);$dataex[] = $line;$text = explode(" ",$line);
foreach($text as $txt){$arr_txt[] = $txt;$this->linex[$id] = $il;$this->liney[$il] = $id;$id++;}}$il++;}$this->arr_line = $dataex;$this->arr_txt  = $arr_txt;}
function G(){$ret = $this->arr_txt[$this->ntxt++];$this->nline = $this->linex[$this->ntxt];return $ret;}
function GL(){$this->ntxt = $this->liney[$this->nline]+1;return $this->arr_line[$this->nline++];}} /*init*/ $dxs = new stdIn(false);
////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
///////////////////////////////////// DECLARE FUNCTIONS ///////////////////////////////////////

function mint($a, $b){if($a<$b){return $a;}else{return $b;}}
function maxt($a, $b){if($a>$b){return $a;}else{return $b;}}

/////////////////////////////////// MAIN CODE /////////////////////////////////////////////////

$a=$dxs-> G(); 
$b=$dxs-> G(); 
$jo=$dxs-> G();

$res1 = $a+$a+$b+$b;
$res2 = $a+$jo+$b;
$res3 = $a+$jo+$jo+$a;
$res4 = $b+$jo+$jo+$b;

$res = mint($res1, mint($res2, mint($res3, $res4)));

echo $res+"\n";

////////////////////////////////// PRINT OUTPUT ////////////////////////////////////////////////

/////////////////////////////////////////////////////////////////////////////////////////////////


// $x = $dxs-> G(); equivalent to cin>>x; [G() like Get] and for read a complete line//
// $line = $dxs->GL(); // GL() like GetLine then i can emulate cin>> of C++ //
// :P for see this template in action see my submissions ;) oh! i was forget that the constructor //
// $dxs = newSdtIn(true) is 'true' //
// if you are testing localy then read of input.txt, for submit the code change this to 'false'..//
?>
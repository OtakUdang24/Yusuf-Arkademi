<?php
function is_username_valid($str){
    $str_split = str_split($str);
    $dotdot     = false;
    $dotdotkey  = '';
    for ($i = 0; $i < count($str_split); $i++){
        if($str_split[$i] === '.'){
            $dotdot = true;
            $dotdotkey = $i;
            break;
        }
    }
    $strwithoutdot = $str_split;
    unset($strwithoutdot[$dotdotkey]);
    $length    = strlen($str);
    $arraytostring = implode($strwithoutdot);
    if($length == 8){
        if(ctype_lower($arraytostring) OR $dotdot == true){
            echo "true";
        }else{
            echo "false";
        }
    }else{
        echo "false";
    }

}
function is_email_valid($str){

    $str_split = str_split($str);
    $dotdot     = false;
    $panjangemail = 0;
    $dotdotkey  = '';
    for ($i = 0; $i < count($str_split); $i++){
        if($str_split[$i] === '@'){
            $dotdot = true;
            $dotdotkey = $i;
            break;
        }else{
            $panjangemail++;
        }
    }
    $lowercase         = preg_match('@[a-z]@', $str);
    $uppercase         = preg_match('@[A-Z]@', $str);
    $number            = preg_match('@[0-9]@', $str);
    if($panjangemail >= 4){
        if($lowercase OR $uppercase OR $number){
            // return true;
            echo "true";
        }else{
            // return false;
            echo "false";
        }
    }else{
        // return false;
        echo "false";
    }


}
$str = "zer.null";
is_username_valid($str); echo "\n";
$str = "kamu@aku.com";  
is_email_valid($str); echo "\n";
$str = "aku@kamu.com";
is_email_valid($str); echo "\n";
?>
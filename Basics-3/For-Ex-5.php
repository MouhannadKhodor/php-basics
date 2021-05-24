<?php
function rev($s){
    $n="";
    for($i=strlen($s);$i>=0;$i--){
        $n=$n . $s[$i];
    }
    return $n;
}

echo rev("Mouhannad");
?>
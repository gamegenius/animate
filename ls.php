<?php
function ls(){
    $msg = "";
    exec("ls | grep .mp4",$ls);
    foreach($ls as $value){
        $link = "<a class='lead' href='$value' target='_blank'>$value</a><br />";
        $msg .= "$link";
    }
    return $msg;
}
?>
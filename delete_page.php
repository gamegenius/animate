<?php
function delete_page(){
    $msg = "<form action='index.php?action=delete_action' method='post'><table class='lead'><tr><td>檔案名稱</td><td>刪除</td>";
    exec("ls | grep .mp4",$mp4);
    exec("ls | grep .txt",$txt);
    foreach($mp4 as $value){
        $input = "<input type='checkbox' name='list[]' value='$value' />";
        $msg .= "<tr><td>$value</td><td>$input</td></tr>";
    }
    foreach($txt as $value){
        $input = "<input type='checkbox' name='list[]' value='$value' />";
        $msg .= "<tr><td>$value</td><td>$input</td></tr>";
    }
    $msg .= "</table><br /><input class='btn btn-lg btn-default' type='submit' value='刪除'/></form>";
    return $msg;
}
?>
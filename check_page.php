<?php
function check_page(){
    $msg .= "<h1 class='lead'>任務名稱</h1><br />";
    exec("ls | grep .txt",$missions);
    foreach($missions as $value){
        $missionname = str_replace(".txt","",$value); 
        $link = "<a class='lead' href=index.php?action=check_action&missionname=$missionname>$missionname</a>";
        $msg .= $link."<br />";
    }
    return $msg;
}
?>
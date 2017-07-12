<?php
function tget(){
    $missionname = $_POST['missionname'];
    $url = $_POST['url'];
    $msg = "";
    $msg .= "下載中，可利用下載檢查來查看檔案是否下載完成";
    $tget = popen("nohup tget $url > $missionname.txt &",'r');
    return $msg;
    header("Refresh: 3; url=index.php?action=check_action&missionname=$missionname");
}
?>
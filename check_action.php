<?php
function check_action(){
    $missionname = $_GET['missionname'];
    $msg = "<p class='lead'>";
    exec("less $missionname.txt",$result);
    foreach($result as $value){
        $msg .= $value."<br />";
    }
    $result = shell_exec("cat $missionname.txt | grep downloaded");
    $msg .= ($result == "")?"<h1>downloading...</h1>":"<h1>done.</h1>";
    $msg .= "</p>";
    return $msg;
    header("Refresh: 10; url=''");
}
?>
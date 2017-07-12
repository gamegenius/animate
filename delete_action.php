<?php
function delete_action(){
    $list = $_POST['list'];
    foreach($list as $value){
        if(!unlink($value)){
            $msg .= "Error deleting $value";
        }else{
            $msg .= "Deleted $value";
        }
        $msg .= "<br />";
    }
    return $msg;
}
?>
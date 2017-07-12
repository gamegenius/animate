<?php
function url(){
    $msg = 
<<<HTML
<form action="index.php?action=tget" method="post">
任務名稱*：<input type="text" name="missionname"/><br />
種子位址*：<input type="text" name="url"/><br />
<input class="btn btn-lg btn-default" type="submit" value="下載"/>
</form>
HTML;
    return $msg;
}
?>
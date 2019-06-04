<?php
session_start();
function Message(){
    if(isset($_SESSION["message"]))
    {
        $Output="<div>";
        $Output .=htmlentities($_SESSION["message"]);
        $Output .="</div>";
        return $Output;





    }





}






?>
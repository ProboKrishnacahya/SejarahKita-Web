<?php
use Carbon\Carbon;

    function tsToDate($timeStamp){
        $createdAt = Carbon::parse($timeStamp)->format('d/m/Y');
        return $createdAt;
    }
?>

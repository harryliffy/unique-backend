<!-- Data tables -->
<script type="text/javascript" src="jquery-1.11.3-jquery.min.js"></script>
<script type="text/javascript" src="../spakul/assets/vendor/datatables.net/js/jquery.dataTables.min.js"></script>


<?php
include('classes/core.php');
$user=new user(); 
include('header.php');
$now=Date('d-m-Y H:i:s');
$datetime1 = new DateTime($now);
$datetime2 = new DateTime('2019-10-10 12:12:35');
$difference = $datetime1->diff($datetime2);
//echo timeAgo($difference);

 function timeAgo($diff){
    /* function to return the highrst defference fount */
    if(!is_object($diff)){
        return;
    }

    if($diff->y > 0){
        return $diff->y .(" year".($diff->y > 1?"s":"")." ago");
    }

    if($diff->m > 0){
        return $diff->m .(" month".($diff->m > 1?"s":"")." ago");
    }

    if($diff->d > 0){
        return $diff->d .(" day".($diff->d > 1?"s":"")." ago");
    }

    if($diff->h > 0){
        return $diff->h .(" hour".($diff->h > 1?"s":"")." ago");
    }

    if($diff->i > 0){
        return $diff->i .(" minute".($diff->i > 1?"s":"")." ago");
    }

    if($diff->s > 0){
        return $diff->s .(" second".($diff->s > 1?"s":"")." ago");
    }
}

?>
<?php

/* $user->addEvent('good', 'location', 'dste','descript','foto');
echo $user? 'ok':'err';
*/

?>
<table class="table" align="center" border="" width="" height="" id="data">
    <thead>
    <th>action</th>
        <th>Name</th>
        <th>location</th>
        <th>Description</th>
    </thead>
        <?php 
        /*
       $query = "SELECT * FROM sch_events";
        $records_per_page=3;
        $newquery = $user->paging($query,$records_per_page);
        $user->dataview($newquery);
        //$user->paginglink($query,$records_per_page);  
        */ 

        $user->viewEvent()
        ?> 
    </table>



 <script type="text/javascript">
                                                    $('#data').DataTable({
                                                        responsive: true
                                                    });
                                                </script>
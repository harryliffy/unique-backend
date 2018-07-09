<?php 
include "../dbconfig.php";
?>

<!doctype html>
<html>
    <head>
        <title>How to Delete Record from MySQL Table with AJAX</title>
        <link href='style.css' rel='stylesheet' type='text/css'>
        <script src='jquery-3.0.0.js' type='text/javascript'></script>
        <script src='script.js' type='text/javascript'></script>
        
    </head>
    <body>
        <div class='container'>
            <table border='1' >
                <tr style='background: whitesmoke;'>
                    <th>S.no</th>
                    <th>Title</th>
                    <th>Operation</th>
                </tr>

                <?php 
                $count = 1;
                $stmtb = $db_con->query("SELECT *  FROM blogpost ORDER BY postid ");  // query to select all vendor users
    while($rowb = $stmtb->fetch(PDO::FETCH_ASSOC)){ //looop fetching the records avialable
     
        $postid = $rowb['postid'];
        $posttitle=$rowb['posttitle'];
        $link = $rowb['link'];

    
    ?>
                    <tr>
                        <td align='center'><?php echo $count; ?></td>
                        <td><a href='<?php echo $link; ?>'><?php echo $posttitle; ?></a></td>
                        <td align='center'><span class='delete' id='del_<?php echo $postid; ?>'>Delete</span></td>
                    </tr>
                <?php
                    $count++;
                }
                ?>
            </table>
        </div>
    </body>
</html>
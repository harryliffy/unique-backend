<?php 
include "config.php";
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
                $query = "SELECT * FROM posts";
                $result = mysqli_query($con,$query);

                $count = 1;
                while($row = mysqli_fetch_array($result) ){
                    $id = $row['id'];
                    $title = $row['title'];
                    $link = $row['link'];

                ?>
                    <tr>
                        <td align='center'><?php echo $count; ?></td>
                        <td><a href='<?php echo $link; ?>'><?php echo $title; ?></a></td>
                        <td align='center'><span class='delete' id='del_<?php echo $id; ?>'>Delete</span></td>
                    </tr>
                <?php
                    $count++;
                }
                ?>
            </table>
        </div>
    </body>
</html>
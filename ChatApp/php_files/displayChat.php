<?php
    require_once('../DataBase/config.php');

    $querry = "SELECT * FROM chatroom";
    $run = mysqli_query($db, $querry);

    while( $row = mysqli_fetch_array($run)) {
        ?>
        <p>
            <span style="color: red;"><?php echo $row['name']. ': ';?></span>
            <span style="color: blue;"><?php echo $row['message'];?></span>
            <span style="float: right;"><?php echo date('h:m A',strtotime($row['time']));?></span>
        </p>

     <?php }
?>
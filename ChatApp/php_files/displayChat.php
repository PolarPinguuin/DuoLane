<?php
    require_once('../DataBase/config.php');

    $querry = "SELECT * FROM chatroom";
    $run = mysqli_query($db, $querry);

    while( $row = mysqli_fetch_array($run)) {
        ?>
        <p class="message-wrapper">
            <span class="name"><?php echo $row['name']. ': ';?></span>
            <span class="message"><?php echo $row['message'];?></span>
            <span class="date"><?php echo date('h:m A',strtotime($row['time']));?></span>
        </p>

     <?php }
?>
<?php include('DataBase/config.php');
    session_start();
    ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Duo Lane - Chat page</title>
    <link rel="stylesheet" href="CSS/chat_style_sheet.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

    <script>
        $(document).ready(function (e) {
            function displayChat() {
                $.ajax({
                    url: 'php_files/displayChat.php',
                    type: 'POST',
                    success: function (data) {
                        $("#chatDisplay").html(data);
                    }
                });
            }

            setInterval(function() {displayChat();}, 1000);

            $('#sendMessageBtn').click(function (e){

               // var name = $("#user_name").val();

                var name = "<?php echo $_SESSION['username']?>";
                var message = $("#message").val();

                $.ajax({
                    url: 'php_files/sendChat.php',
                    type: 'POST',
                    data:{
                        uname: name,
                        umessage: message,
                    }
                });
            })
        })
    </script>
</head>
    <body>
        <div class="container-fluid">
            <h3 class="test-center"> Live chat room</h3>

            <div class="well" id="chatBox">
                <div id="chatDisplay">

                </div>

            </div>

            <form id="myChatForm">
                <textarea name="message" id="message" placeholder="Enter your message here..." cols="30" rows="2"></textarea><br>
                <button type="button" class= "btn btn-success btn-lg string_format" id="sendMessageBtn">SEND MESSAGE</button>
            </form>
        </div>
    </body>
</html>
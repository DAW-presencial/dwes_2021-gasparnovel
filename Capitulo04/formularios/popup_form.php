<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
        <link rel='stylesheet' href='pop_up.css'>
    </head>
    <body>
        <script>
// When the user clicks on <div>, open the popup
            function myFunction() {
                var popup = document.getElementById("myPopup");
                popup.classList.toggle("show");
            }
        </script>

        <div class="popup" onclick="myFunction()">Click me!
            <span class="popuptext" id="myPopup">Popup text...</span>
        </div>
        <?php
        // put your code here
        error_reporting(E_ALL);
        ini_set('display_errors','1');
        ?>
    </body>
</html>
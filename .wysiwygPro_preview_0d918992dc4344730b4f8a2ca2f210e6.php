<?php
if ($_GET['randomId'] != "OwozvC1HKZ8sUSliwzE9KFDkUcBhjkFPKwuulHmNejSjwFYXslybqZ4vFXRSM3Qi") {
    echo "Access Denied";
    exit();
}

// display the HTML code:
echo stripslashes($_POST['wproPreviewHTML']);

?>  

<?php
session_start();
if(empty($_SESSION['userdata']))
{
    header('LOCATION:select/index.php');
} else {   
    header('LOCATION:select/index.php');
}
?>
    <script src="javascrpit.js"></script>
    </body>
</html>

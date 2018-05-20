<html>
    <head>
    <meta charset="UTF-8" />
    </head>

<body>
<?php
    if (isset($_POST['ON']))
        { exec("sudo python /home/pi/relaypi/4port/script5.py"); }
    if (isset($_POST['OFF']))
        { exec("sudo python /home/pi/relaypi/4port/script5a.py"); }
?>

<form method="post">
<button name="ON">turn On</button>&nbsp;
<button name="OFF">turn Off</button><br>
</form>
</body>
</html>
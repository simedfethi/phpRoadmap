<html>

<head>
    <meta lang="UTF-8">
<title>  server php</title>
</head>

<body>
<?php
#######################
## Cookie functions
#######################
if (!empty($_POST['name']))
echo 'greeting'.$_POST['name'];
    ?>
<form method="POST" action="<?php echo $_SERVER['PHP_SELF']; ?>">
    <input name="name" type="text">
    <button type="submit">Submit</button>
</form>
</body>
</html>

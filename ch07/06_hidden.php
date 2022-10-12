<?php
$name = "Nirvana";
$id = "alternative007";
$email = "nirvana2727@email.com"
?>

<!doctype html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
    <title>Hidden</title>
</head>
<body>
<h1>Hidden Page</h1>
    <form action="02_post_result.php" method="post">
        <input type="hidden" name="name" value="<?php echo $name ?>">
        <input type="hidden" name="id" value="<?php echo $id ?>">
        <input type="hidden" name="email" value="<?php echo $email ?>">
        <input type="submit" value="Send!">
    </form>
</body>
</html>

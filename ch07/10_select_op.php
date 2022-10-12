<!doctype html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
    <title>Select OP</title>
</head>
<body>
<h1>Select / Option</h1>
    <form action="02_post_result.php" method="post">
        이름:
        <select name="name">
            <option value="">--Choose One--</option>
            <option value="samsung">Samsung</option>
            <option value="hyundai">Hyundai</option>
            <option value="lg">LG</option>
            <option value="sk">SK</option>
        </select>
        <br>

        ID:
        <select name="id">
            <option value="">--Choose One--</option>
            <option value="samsung6974">samsung6974</option>
            <option value="hyundai6974">hyundai6974</option>
            <option value="lg6974">lg6974</option>
            <option value="sk6974">sk6974</option>
        </select>
        <br>

        E-mail:
        <select name="email">
            <option value="">--Choose One--</option>
            <option value="samsung6974@email.com">samsung6974@email.com</option>
            <option value="hyundai6974@email.com">hyundai6974@email.com</option>
            <option value="lg6974@email.com">lg6974@email.com</option>
            <option value="sk6974@email.com">sk6974@email.com</option>
        </select>
        <br>

        <input type="submit" value="Send!">
    </form>
</body>
</html>
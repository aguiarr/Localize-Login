
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?=$title?></title>
</head>
<body>
    <h1>Welcome!</h1>
    <div><a href="/logout">sair</a></div>
    <div>
        <h3>Your data:</h3>
        <div>
            <h4>ID:</h4>
            <input type="text" readonly class="feilds" value="<?=$user['id']?>"></input>
        </div>
        <div>
            <h4>Name:</h4>
            <input type="text" readonly class="feilds" value="<?=$user['name']?>"></input>
        </div>
        <div>
            <h4>Email:</h4>
            <input type="text" readonly class="feilds" value="<?=$user['email']?>"></input>
        </div>
        <div>
            <h4>Phone:</h4>
            <input type="text" readonly class="feilds" value="<?=$user['phone']?>"></input>
        </div>
    </div>
</body>
</html>
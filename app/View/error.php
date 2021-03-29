<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?=$title?></title>
    <link rel="stylesheet" type="text/css" href="../app/View/resources/css/index.css">
	<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;600&display=swap" rel="stylesheet">
    <script type="text/javascript" defer src="../app/View/resources/js/scripts.js"></script>
</head>
<body>
    <div class="message-container">
        <div class="message">
            <h1><?=$error?>  );</h1>
            <div class="paragraphs">
                <p><?= isset($description) ?  $description : ''; ?></p>
            </div>
        </div>
    </div>
</body>
</html>
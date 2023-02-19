<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Message Contact</title>
</head>
<body>
    <p>
        Nom : {{ $infos['name'] }}
    </p>
    <p>
        Email : {{ $infos['email'] }}
    </p>
    <p>
        Sujet : {{ $infos['subject'] }}
    </p>
    <p>
        Message : {{ $infos['message'] }}
    </p>

</body>
</html>

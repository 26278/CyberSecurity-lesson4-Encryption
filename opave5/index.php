<!doctype HTML>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="author" content="Jochem de Wit">
    <title>Document</title>
</head>
<body>
    <main>
        <form action="/action.php" method="post">
            <p>Voornaam</p>
            <input type="text" name="firstname">
            <p>Achternaam</p>
            <input type="text" name="lastname">
            <p>Straat</p>
            <input type="text" name="streetname">
            <p>Postcode</p>
            <input type="text" name="zipcode">
            <p>Huisnummer</p>
            <input type="text" name="number">
            <p>Woonplaats</p>
            <input type="text" name="city">
            <p>E-mail</p>
            <input type="text" name="email">
            <p>Telefoonnummer</p>
            <input type="text" name="phonenumber">
            <input type="submit" value="Verstuur!">
        </form>
    </main>
</body>
</html>
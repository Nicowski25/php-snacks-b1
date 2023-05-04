## Snack 2

Con un form passare come parametri GET name, mail e age e verificare (cercando i metodi che non conosciamo nella documentazione) che name sia più lungo di 3 caratteri, che mail contenga un punto e una chiocciola e che age sia un numero. Se tutto è ok stampare “Accesso riuscito”, altrimenti “Accesso negato”

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Snack2</title>
</head>
<body>
    
    <form action="check.php" method="get">
        <label for="name">Nome</label>
        <input type="text" name="name" placeholder="insert name">
        <label for="mail">Mail</label>
        <input type="text" name="mail" placeholder="insert mail">
        <label for="age">Age</label>
        <input type="text" name="age" placeholder="insert age">
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>


</body>
</html>
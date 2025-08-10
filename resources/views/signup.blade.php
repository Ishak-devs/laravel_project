<!DOCTYPE html>
<html>
<head>
    <title>Signup</title>
</head>
<body>
    <h1>Signup</h1>

    <form action="/signup" method="POST">
    @csrf

        <label>Nom :</label>
        <input type="text" name="name" required>
        <br><br>

        <label>Prénom :</label>
        <input type="number" name="price" required>
        <br><br>

        <label>Email :</label>
        <textarea name="description"></textarea>
        <br><br>

        <label>Mot de passe :</label>
        <textarea name="description"></textarea>
        <br><br>

        <button type="submit">Ajouter</button>
    </form>
</body>
</html>

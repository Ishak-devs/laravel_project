<!DOCTYPE html>
<html>
<head>
    <title>Signup</title>
    <link rel="stylesheet" href="{{ asset('css/signup.css') }}">
</head>
<body>
<h1>Inscription</h1>

<form>
    @csrf

    <label>Nom :</label>
    <input type="text" name="nom" required>
    <br><br>

    <label>Prénom :</label>
    <input type="text" name="prenom" required>
    <br><br>

    <label>Email :</label>
    <input type="email" name="email" required>
    <br><br>

    <label>Mot de passe :</label>
    <input type="password" name="password" required>
    <br><br>

    <label>Confirmer le mot de passe :</label>
    <input type="password" name="password_confirmation" required>
    <br><br>

    <button type="submit">S'inscrire</button>
</form>
</body>
</html>

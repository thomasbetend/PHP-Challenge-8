<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" 
            rel="stylesheet">
    <title>Formulaire</title>
</head>
<body>
    
</body>
</html>
<div class="container w-50">
    <form action="/thanks.php" method="post" class="mt-3">
        <div class="form-group mb-2">
            <label for="firstname">Prénom</label>
            <input type="text" id="firstname" name="user_firstname" class="form-control">
        </div>
        <div class="form-group mb-2">
            <label for="lastname">Nom</label>
            <input type="text" id="lastname" name="user_lastname" class="form-control">
        </div>
        <div class="form-group mb-2">
            <label for="email">Email</label>
            <input type="email" id="email" name="user_email" class="form-control">
        </div>
        <div class="form-group mb-2">
            <label for="phone">Téléphone</label>
            <input type="tel" id="phone" name="user_phone" class="form-control">
        </div>
        <div class="form-group mb-2">
            <label for="subject">Sujet</label>
            <select id="subject" name="user_subject" class="form-control">
                <option value="GOOD VIBES">Message amical</option>
                <option value="BAD VIBES">Message de réclamation</option>
                <option value="INFO?">Message à caractère informatif</option>
            </select>
        </div>
        <div class="form-group mb-2">
            <label for="message">Message</label>
            <textarea id="message" name="user_message" class="form-control"></textarea>
        </div>
        <div>
            <button type="submit" class="btn btn-primary mt-2">Envoyer le message</button>
        </div>
    </form>
</div>

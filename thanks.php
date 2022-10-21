<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" 
            rel="stylesheet">
    <title>Message validé</title>
</head>
<body>
    <div class="container w-50">
        <div class="p-3 mt-5">
            Merci <span class="text-primary"><?php echo ucfirst($_POST['user_firstname']) . ' ' . ucfirst($_POST['user_lastname']) ?></span> de nous avoir contacté à propos de <span class="text-primary"><?php echo $_POST['user_subject'] ?></span>.<br/>
            Un de nos conseiller vous contactera soit à l’adresse <span class="text-primary"><?php echo $_POST['user_email'] ?></span> soit par téléphone au <span class="text-primary"><?php echo $_POST['user_phone'] ?></span>
            dans les plus brefs délais pour traiter votre demande : <br/>
            <em class="text-secondary"> "<?php echo $_POST['user_message']?>"</em>
        </div>
    </div>
</body>
</html>
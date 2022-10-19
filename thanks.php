<h2>
    Merci <?php echo $_POST['user_lastname'] . ' ' . $_POST['user_firstname'] ?> de nous avoir contacté à propos de <?php echo $_POST['user_subject'] ?>.<br/>
    Un de nos conseiller vous contactera soit à l’adresse <?php echo $_POST['user_email'] ?> <br/>soit par téléphone au <?php echo $_POST['user_phone'] ?> 
    dans les plus brefs délais pour traiter votre demande : <br/>
    <span style="text-transform: uppercase; color: red;"><?php echo $_POST['user_message']?></span>
</h2>
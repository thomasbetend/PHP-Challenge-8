<form action="/thanks.php" method="post">
    <div>
        <label for="lastname">Nom</label>
        <input type="text" id="lastname" name="user_lastname">
    </div>
    <div>
        <label for="firstname">Prénom</label>
        <input type="text" id="firstname" name="user_firstname">
    </div>
    <div>
        <label for="email">Email</label>
        <input type="email" id="email" name="user_email">
    </div>
    <div>
        <label for="phone">Téléphone</label>
        <input type="tel" id="phone" name="user_phone">
    </div>
    <div>
        <label for="subject">Sujet</label>
        <select id="subject" name="user_subject">
            <option value="friendly">Message amical</option>
            <option value="claim">Message de réclamation</option>
            <option value="info">Message à caractère informatif</option>
        </select>
    </div>
    <div>
        <label for="message">Message</label>
        <textarea id="message" name="user_message" ></textarea>
    </div>
    <div>
        <button type="submit">Envoyer le message</button>
    </div>
</form>
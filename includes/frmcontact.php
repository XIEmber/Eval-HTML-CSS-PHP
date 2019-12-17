<h1 id="TitreContact">CONTACT</h1>
<form name="frmContact" action="index.php?page=contact" method="post">
  <fieldset>
  <div>
    <label for="nom">Nom démoniaque:</label>
    <input type="text" name="nom" id="nom" />
  </div>
  <div>
    <label for="prenom">Prénom démoniaque:</label>
    <input type="text" name="prenom" id="prenom" />
  </div>
  <div>
    <label for="mail">E-mail démoniaque:</label>
    <input type="mail" name="mail" id="mail" />
  </div>
  <div>
    <label for="phone">Numéro Démoniaque:</label>
    <input type="text" name="phone" id="phone" />
  </div>
  <div>
    <label for="message">Message à notre seigneur: </label>
  <textarea name="msg" id="msg"></textarea>
  </div>
  <div>
    <label for="file">Met une photo pour voir</label>
  <input type="file" id="file"></input>
  </div>
  <div>
<input type="submit" value="Clique ici ou va au paradis" id="submit"/>
  </div>
  </fieldset>
  <input type="hidden" name="frmContact" />
</form>

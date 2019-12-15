<h1 id="TitreContact">CONTACT</h1>
<form action="index.php?page=contact" method="post">
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
    <label for="email">E-mail démoniaque:</label>
    <input type="mail" name="email" id="email" />
  </div>
  <div>
    <label for="numéro">Numéro Démoniaque:</label>
    <input type="text" name="numéro" id="numéro" />
  </div>
  <div>
    <label for="message">Message à notre seigneur: </label>
  <textarea name="message" id="message"></textarea>
  </div>
  <div>
    <label for="file">Met une photo pour voir</label>
  <input type="file" id="fichier"></input>
  </div>
  <div>
<input type="submit" value="Clique ici ou va au paradis" id="submit"/>
  </div>
  </fieldset>
  <input type="hidden" name="frmContact" />
</form>

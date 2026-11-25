<?php
require_once 'config.php';
$titolPagina = 'Crea el teu compte';
require 'header.php';
?>
<h2>Crea el teu compte</h2>
<form action="processa.php" method="post">
  <fieldset>
    <legend>Dades personals</legend>

    <label for="nom">Nom</label>
    <input type="text" name="nom" id="nom">

    <label for="cognom">Cognom</label>
    <input type="text" name="cognom" id="cognom">

    <label for="naixement">Data de naixement</label>
    <input type="date" name="naixement" id="naixement">

    <label for="telefon">Telèfon</label>
    <input type="tel" name="telefon" id="telefon">
  </fieldset>

  <fieldset>
    <legend>Dades del compte</legend>

    <label for="usuari">Usuari (mínim <?= MIN_USUARI ?> caràcters)</label>
    <input type="text" name="usuari" id="usuari">

    <label for="correu">Correu</label>
    <input type="email" name="correu" id="correu">

    <label for="contrasenya">Contrasenya (mínim <?= MIN_CLAU ?> caràcters)</label>
    <input type="password" name="contrasenya" id="contrasenya">

    <label for="confContrasenya">Repetir contrasenya</label>
    <input type="password" name="confContrasenya" id="confContrasenya">
  </fieldset>

  <fieldset>
    <legend>Adreça</legend>

    <label for="carrer">Carrer i número</label>
    <input type="text" name="carrer" id="carrer">

    <label for="poblacio">Població</label>
    <input type="text" name="poblacio" id="poblacio">

    <label for="codiPostal">Codi postal</label>
    <input type="text" name="codiPostal" id="codiPostal">
  </fieldset>

  <fieldset>
    <legend>Preferències</legend>

    <label for="tipusClient">Tipus de client</label>
    <select name="tipusClient" id="tipusClient">
      <option value="">Selecciona</option>
      <option value="particular">Particular</option>
      <option value="empresa">Empresa</option>
      <option value="premium">Premium</option>
    </select>

    <p class="grup">Com ens has conegut</p>
    <label class="linia"><input type="radio" name="origen" value="Xarxes socials"> Xarxes socials</label>
    <label class="linia"><input type="radio" name="origen" value="Amics"> Amics</label>
    <label class="linia"><input type="radio" name="origen" value="Publicitat"> Publicitat</label>

    <br>

    <label class="linia"><input type="checkbox" name="bulleti" value="si"> Rebre ofertes</label>
    <label class="linia"><input type="checkbox" name="condicions" value="si"> Accepto les condicions</label>
  </fieldset>

  <button type="submit">Crear el compte</button>
</form>
<?php
require 'footer.php';

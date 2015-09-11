<h2>Add a Character Sheet</h2>
<div class="normalArea">
  <p>Bitte wähle aus was für einen Charakterbogen du erstellen möchtest: </p>
  <select id="chooseEmptyCharSheet" name="chooseEmptyCharSheet">
    <option value="0">V20 Vampir Bogen (Spieler)</option>
    <option value="1">V20 Vampir Bogen (NSC)</option>
  </select>
  <button id="chooseEmptyCharSheetButton" type="button">Auswählen</button>
</div>
<div class="normalArea">
  <form id="createCharacter" name="createCharacter">
    <?php require("includes/sheets/v20VampirePlayerSheet.php") ?>
  </form>
</div>

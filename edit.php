<?php
  include_once("templates/header.php");
?>
  <div class="container">
    <?php include_once("templates/backbtn.html"); ?>
    <h1 id="main-title">Editar contacto</h1>
    <form id="create-form" action="<?= $BASE_URL ?>config/process.php" method="POST">
      <input type="hidden" name="type" value="edit">
      <input type="hidden" name="id" value="<?= $contact['id'] ?>">
      <div class="form-group">
        <label for="name">Nombre de Contacto:</label>
        <input type="text" class="form-control" id="name" name="name" placeholder="Introduce el nombre" value="<?= $contact['name'] ?>" required>
      </div>
      <div class="form-group">
        <label for="phone">Telefono de contacto:</label>
        <input type="text" class="form-control" id="phone" name="phone" placeholder="Introduce el telefono" value="<?= $contact['phone'] ?>" required>
      </div>
      <div class="form-group">
        <label for="observations">Observaciones:</label>
        <textarea type="text" class="form-control" id="observations" name="observations" placeholder="Introducir observaciones" rows="3"><?= $contact['observations'] ?></textarea>
      </div>
      <button type="submit" class="btn btn-primary">Para actualizar</button>
    </form>
  </div>
<?php
  include_once("templates/footer.php");
?>

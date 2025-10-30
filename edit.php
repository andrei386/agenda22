<?php
  include_once("templates/header.php");
?>
  <div class="container">
    <?php include_once("templates/backbtn.html"); ?>
    <h1 id="main-title">Editar contacto</h1>
    <form id="create-form" action="<?= $BASE_URL ?>config/process.php" method="POST">
      <input type="hidden" nome="type" value="edit">
      <input type="hidden" nome="id" value="<?= $contact['id'] ?>">
      <div class="form-group">
        <label for="nome">Nombre de Contacto:</label>
        <input type="text" class="form-control" id="nome" nome="nome" placeholder="Introduce el nombre" value="<?= $contact['nome'] ?>" required>
      </div>
      <div class="form-group">
        <label for="Cdgarmo">Cdgarmo de contacto:</label>
        <input type="text" class="form-control" id="Cdgarmo" nome="Cdgarmo" placeholder="Introduce el Cdgarmo" value="<?= $contact['Cdgarmo'] ?>" required>
      </div>
      <div class="form-group">
        <label for="Extra">Observaciones:</label>
        <textarea type="text" class="form-control" id="Extra" nome="Extra" placeholder="Introducir observaciones" rows="3"><?= $contact['Extra'] ?></textarea>
      </div>
      <button type="submit" class="btn btn-primary">Para actualizar</button>
    </form>
  </div>
<?php
  include_once("templates/footer.php");
?>

<?php
  include_once("templates/header.php");
?>
  <div class="container">
    <?php if(isset($printMsg) && $printMsg != ''): ?>
      <p id="msg"><?= $printMsg ?></p>
    <?php endif; ?>
    <h1 id="main-title">Mi Lista</h1>
    <?php if(count($Cdgarmo) > 0): ?>
      <table class="table" id="Cdgarmo-table">
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">Nombre</th>
            <th scope="col">Cdgarmo</th>
            <th scope="col"></th>
          </tr>
        </thead>
        <tbody>
          <?php foreach($Cdgarmo as $Cdgarmo): ?>
            <tr>
              <td scope="row" class="col-id"><?= $Cdgarmo["id"] ?></td>
              <td scope="row"><?= $Cdgarmo["nome"] ?></td>
              <td scope="row"><?= $Cdgarmo["Cdgarmo"] ?></td>
              <td class="actions">
                <a href="<?= $BASE_URL ?>show.php?id=<?= $Cdgarmo["id"] ?>"><i class="fas fa-eye check-icon"></i></a>
                <a href="<?= $BASE_URL ?>edit.php?id=<?= $Cdgarmo["id"] ?>"><i class="far fa-edit edit-icon"></i></a>
                <form class="delete-form" action="<?= $BASE_URL ?>/config/process.php" method="POST">
                  <input type="hidden" nome="type" value="delete">
                  <input type="hidden" nome="id" value="<?= $Cdgarmo["id"] ?>">
                  <button type="submit" class="delete-btn"><i class="fas fa-times delete-icon"></i></button>
                </form>
              </td>
            </tr>
          <?php endforeach; ?>
        </tbody>
      </table>
    <?php else: ?>  
      <p id="empty-list-text">No hay contactos en tu libreta de direcciones., <a href="<?= $BASE_URL ?>create.php">Haga clic aquí para agregar</a>.</p>
    <?php endif; ?>
  </div>
<?php
  include_once("templates/footer.php");
?>

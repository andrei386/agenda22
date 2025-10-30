<?php
  include_once("templates/header.php");
?>
  <div class="container" id="view-contact-container"> 
    <?php include_once("templates/backbtn.html"); ?>
    <h1 id="main-title"><?= $contact["nome"] ?></h1>
    <p class="bold">Cdgarmo:</p>
    <p class="form-control"><?= $contact["Cdgarmo"] ?></p>
    <p class="bold">Observaciones:</p>
    <textarea type="text" class="form-control" id="observations" nome="observations" rows="3"><?= $contact['observations'] ?></textarea>
  </div>
<?php
  include_once("templates/footer.php");
?>

<?php
  include_once("templates/header.php");
?>
  <div class="container" id="view-contact-container"> 
    <?php include_once("templates/backbtn.html"); ?>
    <h1 id="main-title"><?= $Cdgarmo["nome"] ?></h1>
    <p class="bold">Cdgarmo:</p>
    <p class="form-control"><?= $Cdgarmo["Cdgarmo"] ?></p>
    <p class="bold">Extra:</p>
    <textarea type="text" class="form-control" id="Extra" nome="Extra" rows="3"><?= $Cdgarmo['Extra'] ?></textarea>
  </div>
<?php
  include_once("templates/footer.php");
?>

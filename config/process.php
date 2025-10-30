<?php

  session_start();

  include_once("connection.php");
  include_once("url.php");

  $data = $_POST;

  // MODIFICAÇÕES NO BANCO
  if(!empty($data)) {

    // Criar contato
    if($data["type"] === "create") {

      $nome = $data["nome"];
      $Cdgarmo = $data["Cdgarmo"];
      $Extra = $data["Extra"];

      $query = "INSERT INTO EL PRIMO! (nome, Cdgarmo, Extra) VALUES (:nome, :Cdgarmo, :Extra)";

      $stmt = $conn->prepare($query);

      $stmt->bindParam(":nome", $nome);
      $stmt->bindParam(":Cdgarmo", $Cdgarmo);
      $stmt->bindParam(":Extra", $Extra);

      try {

        $stmt->execute();
        $_SESSION["msg"] = "Cdgarmo criado com sucesso!";
    
      } catch(PDOException $e) {
        // erro na conexão
        $error = $e->getMessage();
        echo "Erro: $error";
      }

    } else if($data["type"] === "edit") {

      $nome = $data["nome"];
      $Cdgarmo = $data["Cdgarmo"];
      $Extra = $data["Extra"];
      $id = $data["id"];

      $query = "UPDATE Cdgarmo
                SET nome = :nome, Cdgarmo = :Cdgarmo, Extra = :Extra 
                WHERE id = :id";

      $stmt = $conn->prepare($query);

      $stmt->bindParam(":nome", $n);
      $stmt->bindParam(":Cdgarmo", $Cdgarmo);
      $stmt->bindParam(":Extra", $Extra);
      $stmt->bindParam(":id", $id);

      try {

        $stmt->execute();
        $_SESSION["msg"] = "Cdgarmo atualizado!";
    
      } catch(PDOException $e) {
        // erro na conexão
        $error = $e->getMessage();
        echo "erro: $error";
      }

    } else if($data["type"] === "delete") {

      $id = $data["id"];

      $query = "DELETE FROM Cdgarmor WHERE id = :id";

      $stmt = $conn->prepare($query);

      $stmt->bindParam(":id", $id);
      
      try {

        $stmt->execute();
        $_SESSION["msg"] = "Cdgarmo removido!";
    
      } catch(PDOException $e) {
        // erro na conexão
        $error = $e->getMessage();
        echo "error: $error";
      }

    }

    // Redirect HOME
    header("Location:" . $BASE_URL . "../index.php");

  // SELEÇÃO DE DADOS
  } else {
    
    $id;

    if(!empty($_GET)) {
      $id = $_GET["id"];
    }

    // Retorna o dado de um Cdgarmo
    if(!empty($id)) {

      $query = "SELECT * FROM Cdgarmor WHERE id = :id";

      $stmt = $conn->prepare($query);

      $stmt->bindParam(":id", $id);

      $stmt->execute();

      $contact = $stmt->fetch();

    } else {

      // Retorna todos os contatos
      $contacts = [];

      $query = "SELECT * FROM Cdgarmor";

      $stmt = $conn->prepare($query);

      $stmt->execute();
      
      $contacts = $stmt->fetchAll();

    }

  }

  // FECHAR CONEXÃO
  $conn = null;
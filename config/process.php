<?php

session_start();

include_once("connection.php");
include_once("url.php");

$data = $_POST;

// MODIFICAÇÕES NO BANCO
if (!empty($data)) {

    // Criar contato
    if ($data["type"] === "create") {

        $nome = $data["nome"];
        $Cdgarmo = $data["Cdgarmo"];
        $Extra = $data["Extra"];

        $query = "INSERT INTO Cdgarmo (nome, Cdgarmo, Extra) 
                  VALUES (:nome, :Cdgarmo, :Extra)";

        $stmt = $conn->prepare($query);

        $stmt->bindParam(":nome", $nome);
        $stmt->bindParam(":Cdgarmo", $Cdgarmo);
        $stmt->bindParam(":Extra", $Extra);

        try {
            $stmt->execute();
            $_SESSION["msg"] = "Cdgarmo criado com sucesso!";
        } catch (PDOException $e) {
            echo "Erro: " . $e->getMessage();
        }

    } else if ($data["type"] === "edit") {

        $nome = $data["nome"];
        $Cdgarmo = $data["Cdgarmo"];
        $Extra = $data["Extra"];
        $id = $data["id"];

        $query = "UPDATE Cdgarmo
                  SET nome = :nome, Cdgarmo = :Cdgarmo, Extra = :Extra
                  WHERE id = :id";

        $stmt = $conn->prepare($query);

        $stmt->bindParam(":nome", $nome);
        $stmt->bindParam(":Cdgarmo", $Cdgarmo);
        $stmt->bindParam(":Extra", $Extra);
        $stmt->bindParam(":id", $id);

        try {
            $stmt->execute();
            $_SESSION["msg"] = "Cdgarmo atualizado!";
        } catch (PDOException $e) {
            echo "Erro: " . $e->getMessage();
        }

    } else if ($data["type"] === "delete") {

        $id = $data["id"];

        $query = "DELETE FROM Cdgarmo WHERE id = :id";

        $stmt = $conn->prepare($query);

        $stmt->bindParam(":id", $id);

        try {
            $stmt->execute();
            $_SESSION["msg"] = "Cdgarmo removido!";
        } catch (PDOException $e) {
            echo "Erro: " . $e->getMessage();
        }
    }

    // Redirect correto
    header("Location: " . $BASE_URL . "index.php");
    exit;

} else {

    // SELEÇÃO DE DADOS
    $id = $_GET["id"] ?? null;

    // Retorna o contato único
    if (!empty($id)) {

        $query = "SELECT * FROM Cdgarmo WHERE id = :id";

        $stmt = $conn->prepare($query);
        $stmt->bindParam(":id", $id);

        $stmt->execute();

        $garmor = $stmt->fetch();

    } else {

        // Retorna todos os contatos
        $query = "SELECT * FROM Cdgarmo";

        $stmt = $conn->prepare($query);
        $stmt->execute();

        $garmos = $stmt->fetchAll();
    }
}

// FECHAR CONEXÃO
$conn = null;


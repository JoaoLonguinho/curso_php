<?php
    session_start();

    include_once("connection.php");
    include_once("url.php");

    $data = $_POST;

    if(!empty($data)){
        // Modificações no banco

        // Criar contato 
        if($data["type"] === "create"){

        $stmt = $conn->prepare("INSERT INTO contacts (name, phone, observation) VALUES (:name, :phone, :observation)");

        $name = $data['name'];
        $phone = $data['phone'];
        $observation = $data['observation'];

        $stmt->bindParam(":name", $name);
        $stmt->bindParam(":phone", $phone);
        $stmt->bindParam(":observation", $observation);

        try{
            $stmt->execute();
            $_SESSION["msg"] = "Contato criado com sucesso!";
        } catch(PDOException $e){
            #Erro na conexão
            $error = $e->getMessage();
            echo "Erro: $error <br/>";
        }
        header("Location:" . $BASE_URL . "../index.php");
    } else if ($data["type"] === "edit") {
        $stmt = $conn->prepare("UPDATE contacts SET name = :name, phone = :phone, observation = :observation WHERE id = :id");

        $id = $data["id"];
        $name = $data['name'];
        $phone = $data['phone'];
        $observation = $data['observation'];

        $stmt->bindParam(":id", $id);
        $stmt->bindParam(":name", $name);
        $stmt->bindParam(":phone", $phone);
        $stmt->bindParam(":observation", $observation);

        try{
            $stmt->execute();
            $_SESSION["msg"] = "Contato alterado com sucesso!";
        } catch(PDOException $e){
            #Erro na conexão
            $error = $e->getMessage();
            echo "Erro: $error <br/>";
        }
        header("Location:" . $BASE_URL . "../index.php");
    }

    } else {

        // Seleção de dados
        $id;

        if(!empty($_GET)){
            $id = $_GET["id"];
        }
        // retorna o dado de um contato
        if(!empty($id)){

            $query = "SELECT * FROM contacts WHERE id = :id";

            $stmt = $conn->prepare($query);

            $stmt->bindParam(":id", $id);

            $stmt->execute();

            $contact = $stmt->fetch();


        } else {

            // retorna todos os contatos 
            $contacts = [];

            $query = "SELECT * FROM contacts";
        
            $stmt = $conn->prepare($query);
        
            $stmt->execute();
        
            $contacts = $stmt->fetchAll();

        }
    }

    
    
?>
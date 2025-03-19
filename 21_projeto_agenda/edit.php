<?php
    include_once("templates/header.php");
?>
<div class="container">
    <?php include_once("templates/backbtn.html"); ?>
    <h1 id="main-title">Editar contato</h1>
    <form id="create-form" action="<?= $BASE_URL ?>config/process.php" method="POST">
        <input type="hidden" name="type" value="edit">
        <input type="hidden" name="id" value="<?= $contact["id"];?> ">
        <div class="form-group">
            <label for="name"> Nome do contato: </label>
            <input type="text" class="form-control" id="name" name="name" value="<?= $contact["name"];?>" placeholder="Nome" required>
        </div>
        <div class="form-group">
            <label for="phone"> Telefone do contato: </label>
            <input type="text" class="form-control" id="phone" name="phone" placeholder="Telefone" value="<?= $contact["phone"];?>" required>
        </div>
        <div class="form-group">
            <label for="observation"> Observação: </label>
            <textarea placeholder="Observação" rows="3" class="form-control" id="observation" name="observation"> <?= $contact["observation"];?> </textarea>
        </div>
        <button type="submit" class="btn btn-primary">Atualizar</button>
    </form>
</div>

<?php
    include_once("templates/footer.php");
?>

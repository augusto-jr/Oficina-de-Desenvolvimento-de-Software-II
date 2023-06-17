<?php include('../app/views/header.php'); ?>

<h1>EDITAR TIPO ATIVIDADE</h1>

<form method="post" action="">
    <?php foreach ($base as $b): ?>

    <label for="descricaoatividade">TIPOATIVIDADEID</label>
    <input type="text" name="id" value="<?= $b->tipoatividadeid ?>" disabled><br>

    <label for="descricaoatividade">DESCRICAO</label>
    <input type="text" name="descricao" value="<?= $b->descricao ?>" required><br>

    <?php endforeach; ?>

    <button class="button btn-shw" type="submit">EDITAR</button>
    <a class="button btn-shw" href="../">CANCELAR</button>
</form>

<?php include('../app/views/footer.php'); ?>
<?php include('../app/views/header.php'); ?>

<h1>EDITAR TIPO ATIVIDADE</h1>

<form method="post" action="">
    <?php foreach ($base as $b): ?>

    <input type="hidden" name="id" value="<?= $b->alunoid ?>">

    <label for="cpf">CPF</label>
    <input type="text" name="cpf" value="<?= $b->cpf ?>" required><br>

    <label for="nome">NOME</label>
    <input type="text" name="nome" value="<?= $b->nome ?>" required><br>

    <label for="matricula">MATRICULA</label>
    <input type="number" name="matricula" value="<?= $b->matricula ?>" required><br>

    <label for="email">EMAIL</label>
    <input type="text" name="email" value="<?= $b->email ?>" required><br>

    <label for="telefone">TELEFONE</label>
    <input type="text" name="telefone" value="<?= $b->telefone ?>" required><br>

    <?php endforeach; ?>

    <button class="button btn-shw" type="submit">EDITAR</button>
    <a class="button btn-shw" href="../">CANCELAR</button>
</form>

<?php include('../app/views/footer.php'); ?>
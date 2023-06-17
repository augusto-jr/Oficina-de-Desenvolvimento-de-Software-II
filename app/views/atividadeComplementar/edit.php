<?php include('../app/views/header.php'); ?>

<h1>EDITAR ATIVIDADE COMPLEMENTAR</h1>

<form method="post" action="">
    <?php foreach ($base as $b): ?>
    
    <input type="hidden" name="id" value="<?= $b->atividadecomplementarid ?>">

    <label for="titulo">ALUNOID</label>
    <select name="alunoid" disabled>
        <?php foreach ($atividade as $a): ?>
            <option value="<?= $b->alunoid ?>"><?= $b->alunoid." - ".$b->nome ?></option>
        <?php endforeach ?>
    </select><br>

    <label for="tipoatividade">TIPOATIVIDADEID</label>
    <select name="tipoatividadeid" required>
        <?php foreach ($atividade as $a): ?>
            <option value="<?= $a->tipoatividadeid ?>" <?php if ($b->tipoatividadeid == $a->tipoatividadeid) echo "selected"; ?>><?= $a->tipoatividadeid." - ".$a->descricao ?></option>
        <?php endforeach ?>
    </select><br>

    <label for="descricaoatividade">DESCRICAOATIVIDADE</label>
    <input type="text" name="descricaoatividade" value="<?= $b->descricaoatividade ?>" required><br>

    <label for="cargahoraria">CARGAHORARIA</label>
    <input type="number" name="cargahoraria" value="<?= $b->cargahoraria ?>" required><br>

    <label for="instituicao">INSTITUICAO</label>
    <input type="text" name="instituicao" value="<?= $b->instituicao ?>" required><br>

    <label for="anoconclusao">ANOCONCLUSAO</label>
    <input type="number" name="anoconclusao" value="<?= $b->anoconclusao ?>" required><br>

    <label for="arquivo">ARQUIVO</label>
    <input type="file" name="arquivo"><br>

    <label for="observacao">OBSERVACAO</label>
    <textarea name="observacao" required><?= $b->observacao ?></textarea><br><br>

    <button class="button btn-shw" type="submit">EDITAR</button>
    <a class="button btn-shw" href="../../atividadeComplementar">CANCELAR</button>

    <?php endforeach; ?>
</form>

<?php include('../app/views/footer.php'); ?>
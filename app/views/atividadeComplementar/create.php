<?php include('../app/views/header.php'); ?>

<section class="main-content">
    <center>
        <a class="btn btn-primary mb-2" href="/atividadeComplementar/create">NOVA ATIVIDADE COMPLEMENTAR</a>
        <a class="btn btn-secondary mb-2" href="/tipoAtividade">TIPO ATIVIDADE</a>
        <a class="btn btn-secondary mb-2" href="/aluno">ALUNO</a>
    </center>
    <div class="container">
        <h1>NOVA ATIVIDADE COMPLEMENTAR</h1>

        <form method="post" action="/atividadeComplementar/create">
            <label for="titulo">ALUNOID</label>
            <select name="alunoid" required>
                <option hidden></option>
                <?php foreach ($aluno as $a): ?>
                    <option value="<?= $a->alunoid ?>"><?= $a->alunoid." - ".$a->nome ?></option>
                <?php endforeach ?>
            </select><br>

            <label for="tipoatividade">TIPOATIVIDADEID</label>
            <select name="tipoatividadeid" required>
                <option hidden></option>
                <?php foreach ($atividade as $at): ?>
                    <option value="<?= $at->tipoatividadeid ?>"><?= $at->descricao ?></option>
                <?php endforeach ?>
            </select><br>

            <label for="descricaoatividade">DESCRICAOATIVIDADE</label>
            <input type="text" name="descricaoatividade" required><br>

            <label for="cargahoraria">CARGAHORARIA</label>
            <input type="number" name="cargahoraria" required><br>

            <label for="instituicao">INSTITUICAO</label>
            <input type="text" name="instituicao" required><br>

            <label for="anoconclusao">ANOCONCLUSAO</label>
            <input type="number" name="anoconclusao" required><br>

            <label for="arquivo">ARQUIVO</label>
            <input type="file" name="arquivo"><br>

            <label for="observacao">OBSERVACAO</label>
            <textarea name="observacao" required></textarea><br>

            <button class="btn btn-primary mb-2" type="submit">CRIAR</button>
        </form>
    </div>
</section>

<?php include('../app/views/footer.php'); ?>
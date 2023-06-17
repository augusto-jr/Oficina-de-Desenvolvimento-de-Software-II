<?php include('../app/views/header.php'); ?>

<h1>VISUALIZAR ATIVIDADE COMPLEMENTAR</h1>
    
<?php foreach ($base as $b): ?>

<div class="content">
    <table class="table">
        <thead>
            <tr>
                <th>ALUNOID</th>
                <th>TIPOATIVIDADEID</th>
                <th>DESCRICAOATIVIDADE</th>
                <th>CARGAHORARIA</th>
                <th>INSTITUICAO</th>
                <th>ANOCONCLUSAO</th>
                <th>ARQUIVO</th>
                <th>OBSERVACAO</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td><?= $b->alunoid ?></td>
                <td><?= $b->tipoatividadeid ?></td>
                <td><?= $b->descricaoatividade ?></td>
                <td><?= $b->cargahoraria ?></td>
                <td><?= $b->instituicao ?></td>
                <td><?= $b->anoconclusao ?></td>
                <td><?= $b->arquivo ?></td>
                <td><?= $b->observacao ?></td>
            </tr>
        </tbody>
    </table>
</div>

<a class="button btn-shw" href="../../atividadeComplementar">VOLTAR</button>

<?php endforeach; ?>

<?php include('../app/views/footer.php'); ?>
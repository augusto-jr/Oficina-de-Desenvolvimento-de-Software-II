<?php include('../app/views/header.php'); ?>

<h1>VISUALIZAR ATIVIDADE COMPLEMENTAR</h1>
    
<?php foreach ($base as $b): ?>

<div class="content">
    <table class="table">
        <thead>
            <tr>
                <th>TIPOATIVIDADEID</th>
                <th>DESCRIÇÃO</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td><?= $b->tipoatividadeid ?></td>
                <td><?= $b->descricao?></td>
            </tr>
        </tbody>
    </table>
</div>

<a class="button btn-shw" href="../">VOLTAR</button>

<?php endforeach; ?>

<?php include('../app/views/footer.php'); ?>
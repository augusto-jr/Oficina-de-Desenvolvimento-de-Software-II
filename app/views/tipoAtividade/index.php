<?php include('../app/views/header.php'); ?>

<section class="main-content">
    <center>
        <a class="btn btn-primary mb-2" href="/tipoAtividade/create">NOVO TIPO ATIVIDADE</a>
        <a class="btn btn-secondary mb-2" href="/atividadeComplementar">ATIVIDADE COMPLEMENTAR</a>
        <a class="btn btn-secondary mb-2" href="/aluno">ALUNO</a>
    </center>
    <div class="container">
        <table class="table">
            <thead>
                <tr>
                    <th>TIPO ATIVIDADE</th>
                    <th>AÇÕES</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach($base as $b): ?>
                <tr>
                    <td>
                        <div class="user-info">
                            <div class="user-info__img">
                                <img src="/img/users-icon.webp" alt="User Img">
                            </div>
                            <div class="user-info__basic">
                                <h5 class="mb-0"><?=$b->descricao?></h5>
                                <p class="text-muted mb-0">#ID <?=$b->tipoatividadeid?></p>
                            </div>
                        </div>
                    </td>
                    <td>
                        <div class="dropdown open">
                            <a href="#!" class="px-2" id="triggerId1" data-toggle="dropdown" aria-haspopup="true"
                                aria-expanded="false">
                            <i class="fa fa-ellipsis-v"></i>
                            </a>
                            <div class="dropdown-menu" aria-labelledby="triggerId1">
                                <a class="dropdown-item" href="/tipoatividade/show/<?= $b->tipoatividadeid ?>"><i class="fa fa-pencil mr-1"></i> Show</a>
                                <a class="dropdown-item" href="/tipoatividade/edit/<?= $b->tipoatividadeid ?>"><i class="fa fa-pencil mr-1"></i> Edit</a>
                                <a class="dropdown-item text-danger" href="/tipoatividade/delete/<?= $b->tipoatividadeid ?>"><i class="fa fa-trash mr-1"></i> Delete</a>
                            </div>
                        </div>
                    </td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</section>

<?php include('../app/views/footer.php'); ?>
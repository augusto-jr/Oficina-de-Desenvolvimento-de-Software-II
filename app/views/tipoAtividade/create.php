<?php include('../app/views/header.php'); ?>

<section class="main-content">
    <div class="container">
        <h1>NOVA ATIVIDADE COMPLEMENTAR</h1>
        <form method="post" action="/tipoAtividade/create">
            <label for="descricaoatividade">DESCRIÇÃO:</label>
            <input type="text" name="descricao" required><br>
            <button class="btn btn-primary mb-2" type="submit">CRIAR</button>
            <a class="btn btn-danger mb-2" href="/tipoAtividade">CANCELAR</a>
        </form>
    </div>
</section>

<?php include('../app/views/footer.php'); ?>
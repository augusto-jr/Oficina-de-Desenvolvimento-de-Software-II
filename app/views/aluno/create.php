<?php include('../app/views/header.php'); ?>

<section class="main-content">
    <div class="container">
        <h1>NOVO ALUNO</h1>
        <form method="post" action="/aluno/create">

            <label for="cpf">CPF: </label>
            <input type="text" name="cpf" required><br>

            <label for="nome">NOME: </label>
            <input type="text" name="nome" required><br>

            <label for="matricula">MATRICULA: </label>
            <input type="number" name="matricula" required><br>

            <label for="email">EMAIL: </label>
            <input type="email" name="email" required><br>

            <label for="telefone">TELEFONE: </label>
            <input type="text" name="telefone" required><br>

            <button class="btn btn-primary mb-2" type="submit">CRIAR</button>
            <a class="btn btn-danger mb-2" href="/aluno">CANCELAR</a>
        </form>
    </div>
</section>

<?php include('../app/views/footer.php'); ?>
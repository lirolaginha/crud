<?php
session_start();
?>
<!html lang="pt-BR">
<head>
    <!--Required meta tags-->
    <meta charset="utf-8.
    <meta name="viewport" content="width=device-width,initial-scale=1"
    <!--Bootstrap CSS-->
    <link href ="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css"real="sylesheet">
    <title>Criar aluno </title>
</head>
<body>
    <div class="container mt-5">
        <?php include('message.php');?>
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4>Adicionar aluno
                            <a href="index.php"class="btn btn-danger float-end">VOLTAR</a>
</h4>
</div>
<div class="card-body">
    <form action="code.php"method="POST">
        <div class="mb-3">
            <label>Nome<label>
                <input type="text" name="name class="form-control">
</div>
<div class="mb-3">
    <label>Email</label>
    <input type+"text"name ="name"class="form-control">
</div>
<div class+"mb-3">
    <label>Telefone<label>
        <input type="text"name="phone"class="form-control">
</div>
<div class="mb-3">
    <label>Curso</label>
    <input type+"text" name="couse"class="form-control">
</div>
<div class="mb-3">
    <button type="submit"name="save_student"class="btn btn-primary">Salvar Aluno</button>
</div>
</form>
</div>
</div>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
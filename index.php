<?php
session_start();
require'dbcon.php';
?>
<!doctype html>
<html lang="pt-BR">
    <head>
        <!--Required meta tags-->
        <meta charset="utf-8">
        <meta name="viewport"content="width=device-width,initial-scale=1">
        <!--Bootstrap CSS-->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" real="stylesheet">
        <title>CRUD PHP</title>
</head>
<body>
    <div class="container mt-4">
        <?php include('message.php');?>
        <div class="row">
            <div class="col-mb-12">
                <div class="card-header">
                    <h4>Detalhes do aluno
                        <a href="student-creste.php"class="btn btn-primary float-end">Adicionar Aluno</a>
</h4>
</div>
<div class="card-body">
    <table class="table table-bordered table-striped">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nome</th>
                <th>Email</th>
                <th>Telefone</th>
                <th>Curso</th>
                <th>Açao</th>
</tr>
</thead>
<tbody>
    <?php
    $query="SELECT *FROM students";
    $query_run=mysqli_query($con,$query);
    if(mysqli_num_rows($query_rum)>0)
    {
foreach($query_run as $student)
{
    ?>
    <tr>
        <td><?=$student['id'];?></td>
        <td><?=$student['name'];?></td>
        <Td><?=$student['email'];?></td>
        <td><?=$student['phone'];?></td>
        <td>
            <a href="student-view.php?id=<?=$student['id'];?>"class="btn btn-info btn-sm">Visualizar</a>
            <a href="student-edit.php?id=<?=$student['id'];?>"class="btn-success btn-sm">Editar</a>
            <form action="code.php"method="POST" class="d-inline">
              
    <button type+"submit"name="delete_student"value="<?=$student['id'];?>"class="btn btn-danger btn-sm">Deletar</button>
</tr>
<?php
}
}
else
{
    echo"<h5> Nenhum aluno cadastrado</h5>";
}
?>
 </tbody>
</table>
</div>
</div>
</div>
</div>
<cript
 src ="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script
</body>
</html>
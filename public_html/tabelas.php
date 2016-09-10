<!DOCTYPE html>
<html>
    <head>
        <title>Chart - Gráfico</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <script type="text/javascript" src="js/jquery-3.1.0.min.js"></script>
        <script type="text/javascript" src="js/bootstrap.min.js"></script>
        <script type="text/javascript" src="js/jquery.dataTables.min.js"></script>
        <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
        <link rel="stylesheet" type="text/css" href="css/jquery.dataTables.min.css">

    </head>
    <body>
        <h1>
            Tabela de Alunos
        </h1>
        <table id="alunos" class="display table table-striped">
            <caption>todos os alunos</caption>
            <thead>
                <tr>
                    <th>Nome do aluno</th>
                    <th>Idade</th>
                    <th>Nota do Aluno</th>
                    <th>Opções</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>Renann Zanelato</td>
                    <td>21 anos</td>
                    <td>8</td>
                    <td><button class="btn btn-danger"><span class="glyphicon glyphicon-trash"></span></button>
                        <button class="btn btn-info"><span class="glyphicon glyphicon-edit"></span></button></td>
                </tr>
                <tr>
                    <td>Lucas Manara</td>
                    <td>23 anos</td>
                    <td>9.5</td>
                    <td><button class="btn btn-danger"><span class="glyphicon glyphicon-trash"></span></button>
                        <button class="btn btn-info"><span class="glyphicon glyphicon-edit"></span></button></td>
                </tr>
                <?php for($i =1 ; $i < 400; $i++): ?>
                <tr>
                    <td>Aluno <?php
                        for($j=1;$j<20;$j++) {
                            if ($j === 10) {
                                echo " ";
                            }
                            echo chr(rand(100,120));
                        }
                   ?></td>
                    <td><?php echo rand(20, 40); ?> anos</td>
                    <td><?php echo rand(4,10); ?></td>
                    <td><button class="btn btn-danger"><span class="glyphicon glyphicon-trash"></span></button>
                        <button class="btn btn-info"><span class="glyphicon glyphicon-edit"></span></button></td>
                </tr>
                <?php endfor; ?>
            </tbody>
        </table>
        <script type="text/javascript">
            $(document).ready(function(){
                $('#alunos').DataTable({
                    "language":{
                        "lengthMenu": "Mostrar _MENU_ registros por página",
                        "info": "mostrando _PAGE_ de _PAGES_",
                        "infoEmpty": "Nenhum registro",
                        "infoFiltered": "Filtrado de _MAX_"
                    }
                });
            });
        </script>
    </body>
</html>
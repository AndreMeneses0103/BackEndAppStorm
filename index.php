<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vendas</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
</head>
<script type="text/javascript">

</script>
<style>
@import url('https://fonts.googleapis.com/css2?family=Roboto:wght@500&display=swap');


*{
    margin: 0 auto;
    padding: 0;
    text-align: center;
    font-family: 'Roboto', sans-serif;
}


.topo{
    font-size: 50px;
    color: #fff;
    border: 2px solid #000;
    background-color: #006e20;
    width: 100%;
    margin: 0;
    padding: 0;
}

.table{
    margin-top: 50px;
}

thead{
    border: 3px solid black;
    background-color: #b1fed1;
}
th{
    border: 1px solid black;
}

.dados{
    background-color: #e6ffff;
}


</style>
<body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
    <div class="topo">Controle de Vendas</div>

    <table class="table">
        <thead>
            <tr>
                <th>Nome</th>
                <th>Preco</th>
                <th>Fornecedores</th>
            </tr>
        </thead>
            

    <tbody>
        <?php

        include "database.php";

        $select = "SELECT * FROM tbl_produtos";
        $query = mysqli_query($conexao, $select);


        while($column = mysqli_fetch_array($query)){
            echo
                    "<tr class='dados'>
                        <th>".$column['nome']."</th>
                        <th>".$column['preco']."</th>
                        <th>".$column['fornecedor']. "</th>
                    </tr>";        
        }


        ?>

    </tbody>
</body>
</html>
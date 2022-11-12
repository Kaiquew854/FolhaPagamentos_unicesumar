<!--Atividade 1 Kaique Winicios Souza-->

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TECINFO Folha de Pagamento</title>

    <link rel="stylesheet" type="text/css" href="estilo.css" media="screen" />
</head>
<body>

<table id="Funcionarios"> 
    <tr>
        <th>Nome</th>
        <th>Salário fixo</th>
        <th>Venda semana 1</th>
        <th>Venda semana 2</th>
        <th>Venda semana 3</th>
        <th>Venda semana 4</th>

        <th>Total vendas</th>
        <th>Comissão</th>
        <th>Salário final</th>

    </tr>

    <?php

    $colaboradores=array(           
        array('Jose',   2000.30, 1500.00, 2250.00, 2800.00, 1900.00,0,0),
        array('Tadeu',  2500.0, 1500.00, 4150.2, 3500.0, 2100.0,0),
        array('Amanda', 1800.00, 1500.00, 6950.00, 4800.40, 2250.00,0),
        array('Tsara' , 2200.00, 1500.00, 4250.80, 3200.00, 1980.00,0)
        );    
 
        $ttVendasJose=$colaboradores[0][2]+$colaboradores[0][3]+$colaboradores[0][4]+$colaboradores[0][5];
        $ttVendasTadeu=$colaboradores[1][2]+$colaboradores[1][3]+$colaboradores[1][4]+$colaboradores[1][5];;
        $ttVendasAmanda=$colaboradores[2][2]+$colaboradores[2][3]+$colaboradores[2][4]+$colaboradores[2][5];;
        $ttVendasTsara=$colaboradores[3][2]+$colaboradores[3][3]+$colaboradores[3][4]+$colaboradores[3][5];; 
        
        $comissaoJose=($ttVendasJose/100)*5;
        $totSalJose=$comissaoJose+$colaboradores[0][1];

        $comissaoTadeu=($ttVendasTadeu/100)*5;
        $totSalTadeu=$comissaoTadeu+$colaboradores[1][1];

        $comissaoAmanda=($ttVendasAmanda/100)*5;
        $totSalAmanda=$comissaoAmanda+$colaboradores[2][1];

        $comissaoTsara=($ttVendasTsara/100)*5;
        $totSalTsara=$comissaoTsara+$colaboradores[3][1];

    ?>
    
        <tr>
                <td><?php echo $colaboradores [0][0]?></td>
                <td><?php echo "R$ ".$colaboradores [0][1]?></td>
                <td><?php echo "R$ ".$colaboradores [0][2]?></td>
                <td><?php echo "R$ ".$colaboradores [0][3]?></td>
                <td><?php echo "R$ ".$colaboradores [0][4]?></td>
                <td><?php echo "R$ ".$colaboradores [0][5]?></td>
                <td><?php echo "R$ ".$colaboradores [0][6]=$ttVendasJose?>
                <td><?php echo "R$ ".$colaboradores [0][7]=$comissaoJose?>
                <td><?php echo "R$ ".$colaboradores [0][8]=$totSalJose?>
         </tr>
         <tr>
                <td><?php echo $colaboradores [1][0]?></td>
                <td><?php echo "R$ ".$colaboradores [1][1]?></td>
                <td><?php echo "R$ ".$colaboradores [1][2]?></td>
                <td><?php echo "R$ ".$colaboradores [1][3]?></td>
                <td><?php echo "R$ ".$colaboradores [1][4]?></td>
                <td><?php echo "R$ ".$colaboradores [1][5]?></td>
                <td><?php echo "R$ ".$colaboradores [1][6]=$ttVendasTadeu?></td>
                <td><?php echo "R$ ".$colaboradores [0][7]=$comissaoTadeu?>
                <td><?php echo "R$ ".$colaboradores [0][8]=$totSalTadeu?>
        </tr>
        <tr>
                <td><?php echo $colaboradores [2][0]?></td>
                <td><?php echo "R$ ".$colaboradores [2][1]?></td>
                <td><?php echo "R$ ".$colaboradores [2][2]?></td>
                <td><?php echo "R$ ".$colaboradores [2][3]?></td>
                <td><?php echo "R$ ".$colaboradores [2][4]?></td>
                <td><?php echo "R$ ".$colaboradores [2][5]?></td>
                <td><?php echo "R$ ".$colaboradores [2][6]=$ttVendasAmanda?></td>
                <td><?php echo "R$ ".$colaboradores [0][7]=$comissaoAmanda?>
                <td ><?php echo "R$ ".$colaboradores [0][8]=$totSalAmanda?>
        </tr>
        <tr>
                <td><?php echo $colaboradores [3][0]?></td>
                <td><?php echo "R$ ".$colaboradores [3][1]?></td>
                <td><?php echo "R$ ".$colaboradores [3][2]?></td>
                <td><?php echo "R$ ".$colaboradores [3][3]?></td>
                <td><?php echo "R$ ".$colaboradores [3][4]?></td>
                <td><?php echo "R$ ".$colaboradores [3][5]?></td>
                <td><?php echo "R$ ".$colaboradores [3][6]=$ttVendasTsara?></td>
                <td><?php echo "R$ ".$colaboradores [0][7]=$comissaoTsara?>
                <td><?php echo "R$ ".$colaboradores [0][8]=$totSalTsara?>
        </tr>
        
</table>
</body>
</html>
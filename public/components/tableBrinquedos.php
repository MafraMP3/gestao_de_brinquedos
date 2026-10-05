

<h4>  Brinquedos cadastrados  </h4>

<table class="table  table-hover m-0 ">
    
 <tr>
    <th>ID</th>
    <th>Nome</th>
    <th>Categoria</th>
    <th>faixa Etária</th>
    <th>Preço</th>
    <th>Quantia em Estoque</th>
    <th></th>
    <th></th>

 </tr>

 <?php
    
    $sqlBrinquedos = "SELECT * FROM brinquedos";

    
    $resultadoBrinquedos = $conn -> query($sqlBrinquedos);


    while ($linha = $resultadoBrinquedos->fetch_assoc()){
        echo"<tr>

            <td>" . $linha["id"] . "</td>
            <td>" . $linha["nome"] . "</td>
            <td>" . $linha["categoria"] . "</td>
            <td>" . $linha["faixaEtaria"] . "</td>
            <td>" . $linha["preco"] . "</td>
            <td>" . $linha["quantiaEstoque"] . "</td>
            <td>" . $linha["usuario_id"] . "</td>
            <td>
                <a href='editar.php?id=" . $linha["id"] . "' 
                   class='btn btn-outline-dark'>
                    Editar
                </a>
            </td>

            <td>
                <a href='excluir.php?id=" . $linha["id"] . "' 
                   class='btn btn-outline-danger'>
                    Excluir
                </a>
            </td>

        </tr>";

    }
?>




</table>
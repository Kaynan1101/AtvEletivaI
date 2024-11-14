<?php

    $mensagem = '';
    if(isset($_GET['status'])){
        switch ($_GET['status']) {
            case 'success':
                $mensagem = '<div class="alert alert-success">Ação executada com sucesso!</div>';
                break;

            case 'error':
                $mensagem = '<div class="alert alert-danger">Ação não executada!</div>';
                break;  
        }
    }

    $resultados = '';
    foreach($destinos as $destino){
        $resultados .= '<tr>
                            <td>'.$destino->id_destino.'</td>
                            <td>'.$destino->nome.'</td>
                            <td>'.$destino->descricao.'</td>
                            <td>'.$destino->pais.'</td>
                            <td>'.$destino->cidade.'</td>
                            <td>
                                <a href="editar-dest.php?id='.$destino->id_destino.'">
                                    <button type="button" class="btn btn-primary">EDITAR</button>
                                </a>
                                <a href="excluir-dest.php?id='.$destino->id_destino.'">
                                    <button type="button" class="btn btn-danger">EXCLUIR</button>
                                </a>
                            </td>
                        </tr>';
    }

    $resultados = strlen($resultados) ? $resultados : '<tr>
                                                        <td colspan="6" class="text-center">Nenhum destino encontrado
                                                        </td>
                                                    </tr>';



?>

<main>

    <?=$mensagem?>

    <section class="col mt-3" >
        <a href="index.php">
            <button class="btn btn-success">Visualizar Clientes</button>
        </a>

        <a href="cadastrar-dest.php">
            <button class="btn btn-success">Novo Destino</button>
        </a>
    </section>

    <section>
        <table class="table mt-3">
            <thead>
                <tr>
                <th>ID</th>
                <th>NOME</th>
                <th>DESCRIÇÃO</th>
                <th>PAÍS</th>
                <th>CIDADE</th>
                <th>AÇÕES</th>
                </tr>
            </thead>
            <tbody>

                <?=$resultados?>

            </tbody>
        </table>
    </section>



</main>
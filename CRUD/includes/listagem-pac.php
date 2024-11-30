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
    foreach($pacotes as $pacote){
        $resultados .= '<tr>
                            <td>'.$pacote->id_pacote.'</td>
                            <td>'.$pacote->dt_inicio.'</td>
                            <td>'.$pacote->dt_fim.'</td>
                            <td>'.$pacote->valor.'</td>
                            <td>
                                <a href="editar-pac.php?id='.$pacote->id_pacote.'">
                                    <button type="button" class="btn btn-primary">EDITAR</button>
                                </a>
                                <a href="excluir-pac.php?id='.$pacote->id_pacote.'">
                                    <button type="button" class="btn btn-danger">EXCLUIR</button>
                                </a>
                            </td>
                        </tr>';
    }

    $resultados = strlen($resultados) ? $resultados : '<tr>
                                                        <td colspan="6" class="text-center">Nenhum pacote encontrado
                                                        </td>
                                                    </tr>';



?>

<main>

    <?=$mensagem?>

    <section class="col mt-3" >
        <a href="index.php">
            <button class="btn btn-success">Visualizar Clientes</button>
        </a>

        <a href="index-dest.php">
            <button class="btn btn-success">Visualizar Destinos</button>
        </a>

        <a href="cadastrar-pac.php">
            <button class="btn btn-success">Novo Pacote</button>
        </a>
    </section>

    <section>
        <table class="table mt-3">
            <thead>
                <tr>
                <th>ID</th>
                <th>DATA DE INÍCIO</th>
                <th>DATA DE TÉRMINO</th>
                <th>VALOR</th>
                <th>AÇÕES</th>
                </tr>
            </thead>
            <tbody>

                <?=$resultados?>

            </tbody>
        </table>
    </section>



</main>
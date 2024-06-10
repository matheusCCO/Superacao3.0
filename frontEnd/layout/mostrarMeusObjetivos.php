<section>
            <div>
                <table>
                    <tr>
                        <th>Objetivo</th>
                        <th>Descrição</th>
                        <th>Peso(%)</th>
                    </tr>
                <?php 
                    $meusOjetivos = mostrarMeusObjetivos($connect, $id_colaborador);
                    foreach($meusOjetivos as $objetivos){
                        $objetivo = $objetivos['NOME_OBJETIVO'];
                        $descricao = $objetivos['DESCRICAO_OBJETIVO'];
                        $peso = $objetivos['PESO'];?>
                    <tr>
                    <td><?php echo $objetivo; ?></td>
                    <td><?php echo $descricao;?></td>
                    <td><?php echo $peso; ?></td>
                    </tr>  
                <?php } ?>

                </table>
            </div>
</section>
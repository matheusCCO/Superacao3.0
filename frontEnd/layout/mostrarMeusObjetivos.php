<section>
            <div>
                <table>
                    <tr>
                        <th>Objetivo</th>
                    </tr>
                <?php 
                    $meusOjetivos = mostrarMeusObjetivos($connect, $id_colaborador);
                    foreach($meusOjetivos as $objetivos){
                        $objetivo = $objetivos['DESCRICAO_OBJETIVO'];?>
                    <tr>
                    <td><?php echo $objetivo; ?></td>   
                    </tr>  
                <?php } ?>

                </table>
            </div>
</section>
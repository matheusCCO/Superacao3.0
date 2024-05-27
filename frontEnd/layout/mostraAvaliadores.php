<section>

            <?php 
                if(!empty($resultadoAvaliadores)){ 
                    foreach( $resultadoAvaliadores as $avalidores){                   
                        $nome = $avalidores['NOME'];
                       // echo $nome."<br>";
            ?>
            <table>
                <tr>
                    <th>Nome</th>
                    <th>Status</th>
                </tr>
                <tr>
                    <td><?php echo $avalidores['NOME']; ?></td>
                    <td>Em Avaliação</td>
                </tr>
            </table>
                   <?php } 
                 } else {
                    echo "<h2>Voce não tem avaliadires selecionados</h2>";
                } ?>
        </section>
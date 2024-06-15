<section>
    <table>
                <tr>
                    <th>Nome</th>
                    <th>Status</th>
                </tr>
            <?php 
                if(!empty($resultadoAvaliadores)){ 
                    foreach( $resultadoAvaliadores as $avalidores){                   
                        $nome = $avalidores['NOME'];
                       // echo $nome."<br>";?>
                <tr>
                    <td><?php echo $avalidores['NOME']; ?></td>
                    <td>Em Avaliação</td>
                </tr>
                <?php }
                 } else {
                    echo "<h2>Voce não tem avaliadires selecionados</h2>";
                } ?>
            </table>             
</section> 
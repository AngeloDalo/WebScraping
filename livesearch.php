<?php

    include ("config.php");
    if(isset($_POST['input'])){
        $input = $_POST['input'];
        $query = "SELECT * FROM telefoni WHERE Nome LIKE '{$input}%' AND Prezzo > 0 ORDER BY Prezzo";
        $result = mysqli_query($con,$query);
        if(mysqli_num_rows($result)>0){ ?>

            <table class="table table-borderes table-striped mt.4">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Nome</th>
                        <th>Prezzo</th>
                        <th>Negozio</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    while($row = mysqli_fetch_assoc($result)){
                        $id = $row['ID'];
                        $nome = $row['Nome'];
                        $prezzo = $row['Prezzo'];
                        $negozio = $row['Negozio'];
                        ?>

                        <tr>
                            <td><?php echo $id;?></td>
                            <td><?php echo $nome;?></td>
                            <td><?php echo $prezzo;?></td>
                            <td><?php echo $negozio;?></td>
                        </tr>
                        <?php
                    }
                    ?>
                </tbody>
            </table>

        <?php
        }else{
            echo "<h6 class='text-danger text-center mt-3'>Nessun risultato</h6>";
        }
    }

?>
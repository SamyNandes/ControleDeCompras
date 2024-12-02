<!DOCTYPE html>
<head>
<link rel="stylesheet" href="style.css">
</head>
<body>
    
<div class="modal">
        <div class="modalContent">
            <h1>Dados das compras:</h1>
            <table>
                <tr>
                    <td><b>Nome do cliente</b></td>
                    <td><b>Id da compra</b></td>
                    <td><b>Loja que comprou</b></td>
                    <td><b>Data da compra</b></td>
                    <td><b>Id no banco de dados</b></td>
                </tr>
                <tr>
                    <?php
                                        $servidor = "localhost";
                                        $usuario = "root";
                                        $senha = "";
                                        $db = "compraspessoais";
                    
                                        $conexao = mysqli_connect($servidor, $usuario, $senha, $db); /* Aqui faz a conexão ao banco de dados*/ 

                                        $consulta_alunos = mysqli_query($conexao, 'SELECT * FROM compra'); /* Aqui faz a conexão e envia nossa query */
                                        while($linha = mysqli_fetch_array($consulta_alunos)) {
                                            echo '<tr> <td>' .$linha['nome_Cli_Compra']. '</td>';
                                            echo '<td>' .$linha['Compra_Identificador'].'</td>' ;
                                            echo '<td>' .$linha['nome_Loja_Compra'].'</td>' ;
                                            echo '<td>' .$linha['data_Compra']. '</td>' ; 
                                            echo '<td>' .$linha['Id_Compra']. '</td>' ; 
                                            echo '</tr>';
                                        } /* Essa parte faz a logica de colocar os dados na tabela*/ 
                    ?>
                </tr>
            </table>
        </div>
    </div>
<div class="container">
        <div class="bubbles">
            <span style="--i:17;"></span>
            <span style="--i:12;"></span>
            <span style="--i:20;"></span>
            <span style="--i:14;"></span>
            <span style="--i:23;"></span>
            <span style="--i:18;"></span>
            <span style="--i:27;"></span>
            <span style="--i:11;"></span>
            <span style="--i:16;"></span>
            <span style="--i:25;"></span>
            <span style="--i:13;"></span>
            <span style="--i:22;"></span>
            <span style="--i:15;"></span>
            <span style="--i:28;"></span>
            <span style="--i:19;"></span>
            <span style="--i:24;"></span>
            <span style="--i:10;"></span>
            <span style="--i:26;"></span>
            <span style="--i:21;"></span>
            <span style="--i:11;"></span>
            <span style="--i:18;"></span>
            <span style="--i:12;"></span>
            <span style="--i:25;"></span>
            <span style="--i:20;"></span>
            <span style="--i:14;"></span>
            <span style="--i:27;"></span>
            <span style="--i:23;"></span>
            <span style="--i:20;"></span>
            <span style="--i:14;"></span>
            <span style="--i:27;"></span>
            <span style="--i:13;"></span>            
        </div>
</div>  <!-- Parte das bolinhas no background -->
<div class="container2">
    <div class="form" style="flex-direction: column;">
        <form method="post" action="processa_compra.php"> <!-- Aqui nós colocamos o metodo de envio que será POST e o que irá acontecer quando esse metodo for enviado. Esse processo aconte no processa_compra.php -->
            <label for="nome_Cli_Compra">Insira o nome do cliente: </label>
            <input type="text" name="nome_Cli_Compra" placeholder="Digite o nome do cliente" required>
            <br>
            <label for="data_Compra">Insira a data da compra: </label>
            <input type="date" name="data_Compra" required> <!-- Aqui nós colocamos o input para enviar o dado -->
            <br>
            <label for="Compra_Identificador">Insira o id da compra: </label>
            <input type="number" name="Compra_Identificador" required>
            <br>
            <label for="nome_Loja_Compra">Insira o nome da loja: </label>
            <br>
            <select name="nome_Loja_Compra" id="lojas">
                <option value="" disabled selected hidden>Selecione a loja</option>
                <option value="Americanas">Americanas</option>
                <option value="Submarino">Submarino</option>
                <option value="Casas bahia">Casas Bahia</option>
                <option value="Magazine Luiza">Magazine Luiza</option>
            </select>
            <button type="button" id="botao">Ver dados</button>
            <input type="submit" value="Enviar dados">
        </form>

    </div>
</div>
<script>
        const switchModal = () => {
            var modal = document.querySelector('.modal') // Aqui ele está pegando o modal pela classe dele
            var modo = modal.style.display // Verificando qual é o estado do display no momento
            if (modo == "none" || modo == ""){
                modal.style.display = "block" /* Se for igual a none ou "", ele vai aparecer na tela. Se não for igual a nenhum desses, ele irá esconder, setando ele para "none" */ 
            } else {
                modal.style.display = "none" /* Aqui setamos para none, quando clicamos na parte cinza do modal, ele cai aqui*/ 
            }
        }
        
        document.getElementById("botao").addEventListener('click', switchModal) // Aqui colocamos um listener
        
        window.onclick = function(e){ 
            const modal = document.querySelector(".modal") 
            if (e.target == modal) {
                switchModal()
            }
        } /* Este window.onclick, serve para ver qualquer ação que é feita na nossa página, se o nosso target for igual o modal, ele irá chamar a função switchModal */
    </script>
    <?php 

    $servidor = "localhost";
    $usuario = "root";
    $senha = "";
    $db = "compraspessoais";

    $conexao = mysqli_connect($servidor, $usuario, $senha, $db);
    ?>
</body>
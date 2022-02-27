<?php
    if(isset($_POST['submit']))
    {
        include_once('config.php');
        $dataa = $_POST['data'];
        $material = $_POST['material'];
        $titulo = $_POST['titulo'];
        $cliente = $_POST['clientes'];
        $valor = $_POST['valor'];
        $result = mysqli_query($conexao, "INSERT INTO relatorio(data,material,titulo,cliente,valor) VALUES ('$dataa', '$material', '$titulo','$cliente','$valor')");
    }
?>


<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Handspike Media</title>
    <link rel = "stylesheet" href="style.css">
</head>
<body>
    <main class="container">
        <h2>Handspike Media <br></h2>
        <h2>Data de hoje</h2>
        <form action = "index.php" method="POST">
            <div class="input-field">
                <input required type="date" name="data" id="input-data"
                    placeholder="Insira a data de hoje">
                <div class="underline"></div>
            </div>
            <h2>Material</h2>
            <div class="input-field">
                <label for="radio-arte"><input required type="radio" name="material" value="arte" id="radio-arte">Arte</label>
                <label for="radio-video"><input required type="radio" name="material" value="video" id="radio-video">Vídeo</label>
                <label for="radio-outro"><input required type="radio" name="material" value="outro" id="radio-outro">Outro</label>
                <div class="underline"></div>
            </div>
            <h2>Título</h2>
                <div class="input-field">
                    <input required type="text" name="titulo" id="input-titulo"
                        placeholder="Insira o titulo">
                    <div class="underline"></div>
                </div>
            <h2>Cliente</h2>
                <div class="input-field"></div>
                    <select name="clientes" id="input-cliente">
                    <option value="carrossel">Carrossel</option>
                    <option value="criancaTodoDia">Criança Todo Dia</option>
                    <option value="designDecoracao">Design & Decoração</option>
                    <option value="diversaoNautica">Diversão Náutica</option>
                    <option value="gasLindaChama">Gás Linda Chama</option>
                    <option value="handspike">Handpike Media</option>
                    <option value="esplanada">Hotel Esplanada</option>
                    <option value="jfCred">JF Cred</option>
                    <option value="lares">Lares Materiais de Construção</option>
                    <option value="maisCelulares">Mais Celulares</option>
                    <option value="oticasCarol">Óticas Carol</option>
                    <option value="sportTotal">Sport Total</option>
                    <option value="zrImoveis">ZR Imóveis</option>
                    <option value="outro">Outro</option>
                    </select>
                </div>
            <h2>Valor</h2>
                <div class="input-field">
                    <input required autocomplete ="R$" type="number" name="valor" id="input-valor" placeholder="R$ ">
                    <div class="underline"></div>
                </div>
                <br>
            <input type="submit" name="submit" value="Adicionar">
          </form>

    </main>
    
</body>
</html>
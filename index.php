<?php
    if(isset($_POST['submit']))
    {
        include_once('config.php');
        $id = $_POST['id'];
        $dataa = $_POST['data'];
        $material = $_POST['material'];
        $titulo = $_POST['titulo'];
        $cliente = $_POST['clientes'];
        $valor = $_POST['valor'];
        $result = mysqli_query($conexao, "INSERT INTO relatorio(ID,Data,Material,Titulo,Cliente,Valor) VALUES ('$id','$dataa', '$material', '$titulo','$cliente','$valor')");
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
        <h2 class="titulo">Handspike Media <br></h2>
        <h2>Quem é você?</h2>
        <form action = "index.php" method="POST">
        <div class="input-field">
                <label for="radio-erick"><input required type="radio" name="id" value="Erick" id="radio-erick">Erick</label>
                <label for="radio-felipe"><input required type="radio" name="id" value="Felipe" id="radio-felipe">Felipe</label>
                <div class="underline"></div>
            </div>
        <h2>Data de hoje</h2>
            <div class="input-field">
                <input required type="date" name="data" id="input-data"
                    placeholder="Insira a data de hoje">
                <div class="underline"></div>
            </div>
            <h2>Material</h2>
            <div class="input-field">
                <label for="radio-arte"><input required type="radio" name="material" value="Arte" id="radio-arte">Arte</label>
                <label for="radio-video"><input required type="radio" name="material" value="Video" id="radio-video">Vídeo</label>
                <label for="radio-outro"><input required type="radio" name="material" value="Outro" id="radio-outro">Outro</label>
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
                    <option value="Carrossel">Carrossel</option>
                    <option value="CriancaTodoDia">Criança Todo Dia</option>
                    <option value="Design&Decoracao">Design & Decoração</option>
                    <option value="DiversaoNautica">Diversão Náutica</option>
                    <option value="GasLindaChama">Gás Linda Chama</option>
                    <option value="Handspike">Handpike Media</option>
                    <option value="EsplanadaHotel">Hotel Esplanada</option>
                    <option value="JFCred">JF Cred</option>
                    <option value="Lares">Lares Materiais de Construção</option>
                    <option value="MaisCelulares">Mais Celulares</option>
                    <option value="OticasCarol">Óticas Carol</option>
                    <option value="SportTotal">Sport Total</option>
                    <option value="ZRImoveis">ZR Imóveis</option>
                    <option value="Outro">Outro</option>
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
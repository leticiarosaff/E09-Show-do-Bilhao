<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Show do Bilhão</title>
</head>

<body>
    <?php include ("cabeçalho.inc");?>

    <?php 
    $perguntas=["Qual a fórmula da água benta?",
    "Quanto é 1+1 em binário?",
    "Qual é o nome do 50cent brasileiro?",
    "Em uma situação em que você e sua dupla têm 10 pontos no truco mineiro, e você possui em sua mão o 'zap' e o 'sete de copas', assinale a jogada incorreta:",
    "Pra fechar com chave de ouro, qual das seguintes linguagens não é de programação:"];
    
    $alternativas=[
        ["H2O", "HDeusO", "H2O2", "HO"],
        ["2", "10", "11", "Depende do humor do javascript"],
        ["R$ 2,61", "R$ 4.294.967.295", "Vários reais", "R$ 3.4028235E+38"],
        ["Apenas seguir o fluxo do jogo", "Pedir truco bem alto"],
        ["Python", "Javascript", "CSS", "PHP"]];
    
    $respostas= [1, 2, 3, 1, 3];

    for($i=0; $i< count($perguntas); $i++) {

        echo "<h2>{$perguntas[$i]}</h2>";
        echo "<ol type = 'A'>";

        for($j = 0; $j< count($alternativas[$i]);$j++) {
            echo "<li>{$alternativas[$i][$j]}";
        }
        echo "</ol>";
    }
    ?>

    <?php include ("rodapé.inc");?>
</body>
</html>
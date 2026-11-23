<?php

$valorCompra = $_POST['valorCompra'];
$pagamento = $_POST['pagamento'];

// valor final
if ($pagamento == "avista") {
    $desconto = $valorCompra * 0.05;
    $valorFinal = $valorCompra - $desconto;
} else {
    $acrescimo = $valorCompra * 0.02;
    $valorFinal = $valorCompra + $acrescimo;
}

if ($pagamento == "avista") {
        $formaPagamento = "À vista";
        $ajuste = "Desconto: 5%";
} else {
        $formaPagamento = "A prazo";
        $ajuste = "Acréscimo: 2%";
}
$participaSorteio = isset($_POST['visa']) ? "Sim" : "Não";
?>
<!doctype html>
<html lang="pt-BR">
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>Resultado do Pagamento</title>
        <link rel="stylesheet" href="style.css" />
    </head>
    <body>
        <main class="card">
            <h1>Resultado do Pagamento</h1>
            <p>Valor da compra: R$ <?php echo number_format($valorCompra, 2, ',', '.'); ?></p>
            <p>Forma de pagamento: <?php echo $formaPagamento; ?></p>
            <p><?php echo $ajuste; ?></p>
            <p><strong>Valor final: R$ <?php echo number_format($valorFinal, 2, ',', '.'); ?></strong></p>
            <p>Apto ao sorteio do automóvel: <?php echo $participaSorteio; ?></p>
        </main>
    </body>
</html>
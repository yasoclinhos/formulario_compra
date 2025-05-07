<?php
$cliente = htmlspecialchars($_POST['cliente']);
$produto1 = htmlspecialchars($_POST['produto1']);
$produto2 = htmlspecialchars($_POST['produto2']);
$valor1 = floatval($_POST['valor1']);
$valor2 = floatval($_POST['valor2']);
$valorPago = floatval($_POST['valorPago']);

$totalGasto = $valor1 + $valor2;
$troco = $valorPago - $totalGasto;
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" />
    <title>Nota Fiscal</title>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap');
        * {
            box-sizing: border-box;
        }
        body {
            font-family: 'Roboto', sans-serif;
            background: #f5f7fa;
            margin: 0;
            padding: 20px;
            display: flex;
            justify-content: center;
            align-items: flex-start;
            min-height: 100vh;
            color: #333;
        }
        .container {
            background: white;
            max-width: 350px;
            width: 100%;
            border-radius: 12px;
            box-shadow: 0 8px 16px rgba(0,0,0,0.1);
            padding: 30px 25px;
        }
        h1 {
            font-weight: 700;
            font-size: 1.8rem;
            margin-bottom: 15px;
            color: #2c3e50;
            text-align: center;
            letter-spacing: 1px;
        }
        .field {
            margin-bottom: 15px;
        }
        .label {
            font-weight: 700;
            color: #34495e;
            margin-bottom: 6px;
            display: block;
            font-size: 0.9rem;
        }
        .value {
            font-size: 1.1rem;
            color: #2c3e50;
            font-weight: 500;
        }
        .highlight {
            color: #27ae60;
            font-weight: 700;
        }
        .negative {
            color: #e74c3c;
            font-weight: 700;
        }
        .product-list {
            margin-top: 15px;
            margin-bottom: 25px;
            border-top: 1px solid #ddd;
            padding-top: 15px;
        }
        .product {
            display: flex;
            justify-content: space-between;
            font-size: 1rem;
            margin-bottom: 8px;
        }
        .footer {
            text-align: center;
            font-size: 0.85rem;
            color: #999;
            margin-top: 20px;
            user-select: none;
        }
        @media (max-width: 400px) {
            body {
                padding: 15px 10px;
            }
            .container {
                padding: 20px 15px;
            }
            h1 {
                font-size: 1.5rem;
            }
        }
    </style>
</head>
<body>
    <div class="container" role="main" aria-labelledby="notafiscal-title">
        <h1 id="notafiscal-title">Nota Fiscal</h1>
        <div class="field">
            <span class="label">Cliente:</span>
            <span class="value"><?= $cliente ?></span>
        </div>
        <div class="product-list">
            <div class="product">
                <span><?= $produto1 ?></span>
                <span>R$ <?= number_format($valor1, 2, ',', '.') ?></span>
            </div>
            <div class="product">
                <span><?= $produto2 ?></span>
                <span>R$ <?= number_format($valor2, 2, ',', '.') ?></span>
            </div>
        </div>
        <div class="field">
            <span class="label">Total Gasto:</span>
            <span class="value highlight">R$ <?= number_format($totalGasto, 2, ',', '.') ?></span>
        </div>
        <div class="field">
            <span class="label">Valor Pago:</span>
            <span class="value">R$ <?= number_format($valorPago, 2, ',', '.') ?></span>
        </div>
        <div class="field">
            <span class="label">Troco:</span>
            <span class="value <?= $troco < 0 ? 'negative' : 'highlight' ?>">
                R$ <?= number_format($troco, 2, ',', '.') ?>
            </span>
        </div>
        <div class="footer">
            Obrigado pela preferência!
        </div>
    </div>
</body>
</html>
</content>
</create_file>

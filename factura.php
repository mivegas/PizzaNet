<?php
$precios_tamano = [
    'Normal' => 7.99,
    'Grande' => 17.99,
    'Familiar' => 27.99,

];

$precios_masa = [
    'Normal' => 1.00,
    'Fina' => 5.00
];

$precios_extra = [
    'Extra de Queso' => 0.80,
    'Extra de Pimiento' => 0.90,
    'Extra de Cebolla' => 0.70,
    'Extra de Jamon' => 1.30,
    'Extra de Pollo' => 2.00,
];

$total = 0.00;
$cont = 0.00;
?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>PizzaNet - Factura</title>

    <style>
        .invoice-box {
            max-width: 800px;
            margin: auto;
            padding: 30px;
            border: 1px solid #eee;
            box-shadow: 0 0 10px rgba(0, 0, 0, .15);
            font-size: 16px;
            line-height: 24px;
            font-family: 'Helvetica Neue', 'Helvetica', Helvetica, Arial, sans-serif;
            color: #555;
        }

        .invoice-box table {
            width: 100%;
            line-height: inherit;
            text-align: left;
        }

        .invoice-box table td {
            padding: 5px;
            vertical-align: top;
        }

        .invoice-box table tr td:nth-child(2) {
            text-align: right;
        }

        .invoice-box table tr.top table td {
            padding-bottom: 20px;
        }

        .invoice-box table tr.top table td.title {
            font-size: 45px;
            line-height: 45px;
            color: #333;
        }

        .invoice-box table tr.information table td {
            padding-bottom: 40px;
        }

        .invoice-box table tr.heading td {
            background: #eee;
            border-bottom: 1px solid #ddd;
            font-weight: bold;
        }

        .invoice-box table tr.details td {
            padding-bottom: 20px;
        }

        .invoice-box table tr.item td {
            border-bottom: 1px solid #eee;
        }

        .invoice-box table tr.item.last td {
            border-bottom: none;
        }

        .invoice-box table tr.total td:nth-child(2) {
            border-top: 2px solid #eee;
            font-weight: bold;
        }

        @media only screen and (max-width: 600px) {
            .invoice-box table tr.top table td {
                width: 100%;
                display: block;
                text-align: center;
            }

            .invoice-box table tr.information table td {
                width: 100%;
                display: block;
                text-align: center;
            }
        }

        /** RTL **/
        .rtl {
            direction: rtl;
            font-family: Tahoma, 'Helvetica Neue', 'Helvetica', Helvetica, Arial, sans-serif;
        }

        .rtl table {
            text-align: right;
        }

        .rtl table tr td:nth-child(2) {
            text-align: left;
        }
    </style>
</head>

<body>
<div class="invoice-box">
    <table cellpadding="0" cellspacing="0">
        <tr class="top">
            <td colspan="2">
                <table>
                    <tr>
                        <td class="title">
                            <img src="logo.jpg" style="width:40%; max-width:300px;">
                        </td>

                        <td>
                            Nº Factura #: 123<br>
                            Fecha: 27 de octubre<br>
                        </td>
                    </tr>
                </table>
            </td>
        </tr>

        <tr class="information">
            <td colspan="2">
                <table>
                    <tr>
                        <td>
                            <?= (isset($_POST['direccion']) ? $_POST['direccion'] : ''); ?>
                        </td>

                        <td>
                            <?= (isset($_POST['nombre']) ? $_POST['nombre'] : ''); ?> <br>
                            <?= (isset($_POST['telefono']) ? $_POST['telefono'] : ''); ?> <br>
                            <?= (isset($_POST['correo']) ? $_POST['correo'] : ''); ?> <br>
                        </td>
                    </tr>
                </table>
            </td>
        </tr>

        <tr class="heading">
            <td>
                Metodo de pago
            </td>

            <td>

            </td>
        </tr>

        <tr class="details">
            <td>
                Metalico
            </td>
        </tr>

        <tr class="heading">
            <td>
                Articulo:
            </td>

            <td>
                Precio:
            </td>
        </tr>
        <!-- Pizzas y sus componentes -->

        <?php
        if (isset($_POST['cantidad'])) {
            for ($i = 1; $i <= $_POST['cantidad']; $i++) {
                include 'facturaPizzas.inc';
            }
        }
        ?>
        <!-- TOTALES -->

        <tr class="total">
            <td></td>

            <td>
                Total:
                <?php echo $total . '€' ?>
            </td>
        </tr>
    </table>
</div>
<form method="post">
    <input type="hidden" name="direccion2" value="<?= $_POST['direccion'] ?>">
    <input type="submit" name="confirmar" value="CONFIRMAR PEDIDO" formaction="form_aceptacion.php">&nbsp;
    <input type="submit" name="cancelar" value="CANCELAR PEDIDO" formaction="form_cancelacion.php">&nbsp;
</form>

</body>

</html>
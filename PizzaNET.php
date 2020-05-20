<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>PizzaNet</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">

</head>
<style>
    input:invalid {
        border: 2px solid red;
    }

    input:valid {
        border: 1px solid black;
    }
</style>
<body>
<h1 align="center">PizzaNet</h1>
<form action="PizzaNET.php" method="post">
    <fieldset>
        <legend>Tus datos:</legend>
        Nombre: <input type="text" name="nombre" value="<?= (isset($_POST['nombre']) ? $_POST['nombre'] : ''); ?>"
                       required>&nbsp;
        Direccion: <input type="text" name="direccion"
                          value="<?= (isset($_POST['direccion']) ? $_POST['direccion'] : ''); ?>"
                          required>&nbsp;
        Telefono: <input type="text" name="telefono" maxlength="9"
                         value="<?= (isset($_POST['telefono']) ? $_POST['telefono'] : ''); ?>"
                         required>&nbsp;
        Correo: <input type="email" name="correo" placeholder="correo@correo.x"
                       value="<?= (isset($_POST['correo']) ? $_POST['correo'] : ''); ?>"
                       required>&nbsp;
    </fieldset>
    <fieldset>
        <legend>Selecciona cuantas pizzas vas a querer:</legend>

        Nº de Pizzas: <input type="text" name="cantidad"
                             value="<?= (isset($_POST['cantidad']) ? $_POST['cantidad'] : ''); ?>"
                             required>&nbsp;

        <input type="submit" name="empezar_pedido" value="Empezar Pedido">&nbsp;
    </fieldset>

    <?php
    if (isset($_POST['cantidad'])) {
        for ($i = 1; $i <= $_POST['cantidad']; $i++) {
            include 'pizzas.inc';
        }
    }
    ?>

    <p>*Campos en rojo, son obligatorios.</p><br>
    <br><br>
    <input type="submit" name="terminar" value="TERMINAR PEDIDO" formaction="factura.php">&nbsp;
    <input type="submit" name="cancelar" value="CANCELAR PEDIDO"> <br> <br>
</form>
</body>

</html
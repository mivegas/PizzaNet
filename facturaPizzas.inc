<tr class="item">
    <td>
        <h3>Pizza
            <?= $i ?>
        </h3>
        <p>Pizza : ->
            <?= (isset($_POST['pizzas'][$i]['tipo']) ? $_POST['pizzas'][$i]['tipo'] : ''); ?>
        </p>

        <p>Tamaño : ->
            <?php
            foreach ($precios_tamano as $dato => $precio) {
                if ($dato == $_POST['tamaño'][$i]['tipo']) {
                    $total = $total + $precio;
                    $cont = $precio;
                }
            }
            ?>
            <?= (isset($_POST['tamaño'][$i]['tipo']) ? $_POST['tamaño'][$i]['tipo'] : ''); ?>
            <?php echo '(' . $cont . '€)' ?>
        </p>

        <p>Masa : ->
            <?php
            foreach ($precios_masa as $dato => $precio) {
                if ($dato == $_POST['masa'][$i]['tipo']) {
                    $total = $total + $precio;
                    $cont = $precio;
                }
            }
            ?>
            <?= (isset($_POST['masa'][$i]['tipo']) ? $_POST['masa'][$i]['tipo'] : ''); ?>
            <?php echo '(' . $cont . '€)' ?>
        </p>

        <p> Extras:<br>
            <!-- 1 extra -->
            <?php
            if (isset($_POST['pizzas'][$i]['extras']['extraQueso'])) {
                foreach ($precios_extra as $dato => $precio) {
                    if ($dato == $_POST['pizzas'][$i]['extras']['extraQueso']) {
                        $total = $total + $precio;
                        $cont = $precio;
                    }
                }
            }
            ?>
            <?= (isset($_POST['pizzas'][$i]['extras']['extraQueso']) ? '->' . $_POST['pizzas'][$i]['extras']['extraQueso'] . '(' . $cont . '€)' . '<br>' : ''); ?>
            <!-- 2 extra -->
            <?php
            if (isset($_POST['pizzas'][$i]['extras']['extrapimiento'])) {
                foreach ($precios_extra as $dato => $precio) {
                    if ($dato == $_POST['pizzas'][$i]['extras']['extrapimiento']) {
                        $total = $total + $precio;
                        $cont = $precio;
                    }
                }
            }
            ?>
            <?= (isset($_POST['pizzas'][$i]['extras']['extrapimiento']) ? '->' . $_POST['pizzas'][$i]['extras']['extrapimiento'] . '(' . $cont . '€)' . '<br>' : ''); ?>
            <!-- 3 extra -->
            <?php
            if (isset($_POST['pizzas'][$i]['extras']['extracebolla'])) {
                foreach ($precios_extra as $dato => $precio) {
                    if ($dato == $_POST['pizzas'][$i]['extras']['extracebolla']) {
                        $total = $total + $precio;
                        $cont = $precio;
                    }
                }
            }
            ?>
            <?= (isset($_POST['pizzas'][$i]['extras']['extracebolla']) ? '->' . $_POST['pizzas'][$i]['extras']['extracebolla'] . '(' . $cont . '€)' . '<br>' : ''); ?>
            <!-- 4 extra -->
            <?php
            if (isset($_POST['pizzas'][$i]['extras']['extrajamon'])) {
                foreach ($precios_extra as $dato => $precio) {
                    if ($dato == $_POST['pizzas'][$i]['extras']['extrajamon']) {
                        $total = $total + $precio;
                        $cont = $precio;
                    }
                }
            }
            ?>
            <?= (isset($_POST['pizzas'][$i]['extras']['extrajamon']) ? '->' . $_POST['pizzas'][$i]['extras']['extrajamon'] . '(' . $cont . '€)' . '<br>' : ''); ?>
            <!-- 5 extra -->
            <?php
            if (isset($_POST['pizzas'][$i]['extras']['extrapollo'])) {
                foreach ($precios_extra as $dato => $precio) {
                    if ($dato == $_POST['pizzas'][$i]['extras']['extrapollo']) {
                        $total = $total + $precio;
                        $cont = $precio;
                    }
                }
            }
            ?>
            <?= (isset($_POST['pizzas'][$i]['extras']['extrapollo']) ? '->' . $_POST['pizzas'][$i]['extras']['extrapollo'] . '(' . $cont . '€)' . '<br>' : ''); ?>
        </p>
    </td>
</tr>
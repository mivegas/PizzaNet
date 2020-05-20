<fieldset <?= $i ?>>
    <legend>Pizza <?= $i ?>:</legend>
    <p>Selecciona la que mas te guste:</p>

    <select name="pizzas[<?= $i ?>][tipo]">
        <option value=""></option>
        <option value="Margarita">Margarita</option>
        <option value="Barbacoa">Barbacoa</option>
        <option value="4Estaciones">4Estaciones</option>
        <option value="4Quesos">4Quesos</option>
        <option value="Carbonara">Carbonara</option>
        <option value="Romana">Romana</option>
        <option value="Mediterranea">Mediterranea</option>
    </select>
    <p>Selecciona el tamaño:</p>
    <select name="tamaño[<?= $i ?>][tipo]">
        <option value=""></option>
        <option value="Normal">Normal</option>
        <option value="Grande">Grande</option>
        <option value="Familiar">Familiar</option>
    </select>
    <p>Selecciona la masa:</p>
    <select name="masa[<?= $i ?>][tipo]">
        <option value=""></option>
        <option value="Normal">Normal</option>
        <option value="Fina">Fina</option>
    </select>
    <p>Selecciona uno o varios:</p>
    <input type="checkbox" name="pizzas[<?= $i ?>][extras][extraQueso]" value="Extra de Queso">Extra de Queso<br>
    <input type="checkbox" name="pizzas[<?= $i ?>][extras][extrapimiento]" value="Extra de Pimiento">Extra de
    Pimiento<br>
    <input type="checkbox" name="pizzas[<?= $i ?>][extras][extracebolla]" value="Extra de Cebolla">Extra de Cebolla<br>
    <input type="checkbox" name="pizzas[<?= $i ?>][extras][extrajamon]" value="Extra de Jamon">Extra de Jamon<br>
    <input type="checkbox" name="pizzas[<?= $i ?>][extras][extrapollo]" value="Extra de Pollo">Extra de Pollo
</fieldset>

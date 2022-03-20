<?php
    $id = filter_var($_GET['id'], FILTER_SANITIZE_NUMBER_INT);
    echo "<label id='label-formulario'>Cód. Cliente: </label>
    <input type='number' name='cliente_id' id='cliente_id' value=$id />";
?>
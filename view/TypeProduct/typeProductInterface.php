<?php
require_once 'poo/typeProduct.php';
include 'public/header.php';
?>


<?php
if (isset($this->result)) {
    foreach ($this->result as $tem) {
        //echo '->'.$tem->getIdTypeProduct().' -  '.$tem->getNameTypeProduct().'<br>';

        echo '<form action="?tipoProducto=actualizar" method="post">                         
            <input type="hidden" id="idType"      name="idType"       value=' . $tem->getIdTypeProduct() . '>
            <input type="text" id="txtNameType" name="txtNameType"  value=' . $tem->getNameTypeProduct() . '>
            <input type="submit" id="update" name="update" value="Actualizar" />
            <br><br>
            </form>';
    }
}
?>



<?php
    include_once 'public/Midle.php';
?>

<form action="?tipoProducto=registrar" method="post">
    <label> Nuevo Tipo: </label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    <input type="text" id="txtNameTypeProductInsert" name="txtNameTypeProductInsert" 
           data-validation="custom" data-validation-regexp="^([a-zA-Z]+)$"
           placeholder="Digite el nombre aqui">
    <input  type="submit" id="btnAccept" name="btnAccept" value="Insertar" ><br> 
</form>  

<?php
include_once 'public/footer.php';
?>




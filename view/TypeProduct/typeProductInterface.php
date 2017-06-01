<?php
require_once 'Domain/typeProduct.php';
include 'view/header.php';
?>


<?php
if (isset($this->result)) {
    foreach ($this->result as $tem) {
        //echo '->'.$tem->getIdTypeProduct().' -  '.$tem->getNameTypeProduct().'<br>';

        echo '<form action="?tipoProducto=actualizar" method="post">                         
            <input type="hidden" id="idType"      name="idType"       value=' . $tem->getIdTypeProduct() . '><br> 
            <input type="text" id="txtNameType" name="txtNameType"  value=' . $tem->getNameTypeProduct() . '><br>
            <input type="submit" id="update" name="update" value="Actualizar" />        
            </form>';
    }
}
?>



<?php
    include_once 'view/Midle.php';
?>

<form action="?tipoProducto=registrar" method="post">
    <label> Nuevo Tipo: </label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    <input type="text" id="txtNameTypeProductInsert" name="txtNameTypeProductInsert" 
           data-validation="custom" data-validation-regexp="^([a-zA-Z]+)$"
           placeholder="Digite el nombre aqui">
    <input  type="submit" id="btnAccept" name="btnAccept" value="Insertar" ><br> 
</form>  

<?php
include_once 'view/footer.php';
?>




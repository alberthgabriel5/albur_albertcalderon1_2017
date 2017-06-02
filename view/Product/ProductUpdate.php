
<hr>
<h1>Visualizar Productos</h1>
<br>        
<table>
    <tr>
        <th>Nombre</th>
        <th>Marca</th>
        <th>Modelo</th>
        <th>Serie</th>            
        <th>Precio</th>                       
        <th>Descripción</th>
        <th>Tipo</th>
        <th>&circlearrowleft;</th>

    </tr>
    <?php
    foreach ($this->products as $currentProducts) {
        ?>    

        <form action="?producto=actualizar" method="post"> 
            <tr>
            <input type="hidden" id="idProduct" name='idProduct' 
                   value=<?php echo '"' . $currentProducts->getIdProduct() . '"'; ?>/>
            <td><input type="text" id="txtName" name="txtName" 
                       data-validation="custom" data-validation-regexp="^[a-zA-Z_áéíóúñ\s]*$"
                       value= <?php echo '"' . $currentProducts->getName() . '"'; ?>></td>
            <td><input type="text" id="txtBrand" name="txtBrand" 
                       data-validation="custom" data-validation-regexp="^[a-zA-Z_áéíóúñ\s]*$"
                       value= <?php echo '"' . $currentProducts->getBrand() . '"'; ?>></td>
            <td><input type="text" id="txtModel" name="txtModel"
                       data-validation="alphanumeric" data-validation-allowing="-_"
                       value= <?php echo '"' . $currentProducts->getModel() . '"'; ?>/></td>
            <td><input type="text" id="txtSerie" name="txtSerie"
                       data-validation="alphanumeric" data-validation-allowing="-_"
                       value= <?php echo '"' . $currentProducts->getSerie() . '"'; ?>/></td>
            <td><input type="text" id="txtPrice" name="txtPrice" onkeypress="mascara(this, cpf)"  
                       value= <?php
                       $price = number_format($currentProducts->getPrice());
                       echo '' . $price . '';
                       ?> /></td>
            <td><textarea id="txtDescription" name="txtDescription">
                <?php echo $currentProducts->getDescription(); ?>
                </textarea>                                
                        </td>

            <td><select name="cbTypeProduct2" id="cbTypeProduct2"  >          
                    <?php
                    foreach ($this->result as $typeProdu) {
                        ?>
                        <option value="<?php echo $typeProdu->getIdTypeProduct() ?>"
                        <?php
                        if ($typeProdu->getIdTypeProduct() == $currentProducts->getTypeProduct()) {
                            echo 'selected';
                        }
                        ?>
                                >
                                    <?php echo '' . $typeProdu->getNameTypeProduct() . ''; ?>
                        </option>
                        <?php
                    }
                    ?>
                </select></td>
            <td><input type="submit" id="btnUpdate" name="btnUpdate" value='&circlearrowleft;' /></td>

        </form>

    </tr>

    <?php
}
?>
</table>
<label id="lblName" >Presiona el Boton &circlearrowleft; para actualizar</label> <br><br>





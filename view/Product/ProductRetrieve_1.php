
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
        

    </tr>
    
    <?php
    foreach ($this->products as $currentProducts) {
        ?>    
    
      
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
        <td><input type="text" id="txtDescription" name="txtDescription"                                
                   value="<?php echo $currentProducts->getDescription(); ?>" /></td>
        
         <?php
        $valorTipo = "";
                foreach ($this->result as $typeProdu) {
                    if ($typeProdu->getIdTypeProduct() == $currentProducts->getTypeProduct()) {
                        $valorTipo = $typeProdu->getNameTypeProduct();
                    }
                }
                ?>  
        <td><input type="text" id="txtDescription" name="txtDescription"                                
                   value="<?php echo $valorTipo ?>" /></td>

        </tr>
       
    <?php
}
?>
</table>





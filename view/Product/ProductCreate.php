<h1>Registar Producto</h1>

<form action="?producto=registrar" method="post">
    <table id="newSpe">
        <tr>
            <td><label id="lblName" >Tipo producto:</label></td>
            <td><select name="cbTypeProduct" id="cbTypeProduct">
                    <?php
                    foreach ($this->result as $currentType) {
                        echo '<option value=' . $currentType->getIdTypeProduct() . '>' .
                        $currentType->getNameTypeProduct() . '</option>';
                    }
                    ?>
                </select> </td>                     
        </tr>
        <tr></tr> 
        <tr>
            <td><label id="lblName" >Nombre:</label></td>
            <td><input type="text" id="txtNameProduct" name="txtNameProduct" 
                       data-validation="custom" data-validation-regexp="^[a-zA-Z_áéíóúñ\s]*$"></td>                     
        </tr>
        <tr></tr> 
        <tr>
            <td><label id="lblBrand" >Marca:</label></td>
            <td><input type="text" id="txtBrand" name="txtBrand" 
                       data-validation="custom" data-validation-regexp="^[a-zA-Z_áéíóúñ\s]*$"></td>                     
        </tr>
        <tr></tr> 
        <tr>
            <td><label id="lblModel">Modelo:</label></td>
            <td><input type="text" id="txtModel" name="txtModel"
                       data-validation="alphanumeric" data-validation-allowing="-_"/></td
        </tr>
        <tr></tr> 
        <tr>
            <td><label id="lblSerie">Serie:</label></td>
            <td><input type="text" id="txtSerie" name="txtSerie"
                       data-validation="alphanumeric" data-validation-allowing="-_"/></td
        </tr>
        <tr></tr> 
        <tr>
            <td><label id="lblPrice">Precio</label></td>
            <td><input type="text" id="txtPrice" name="txtPrice"  
                       onpaste="return false" value=''/></td>                    
        </tr>
        <tr></tr>            
        <tr>

            <td><label id="lblDescription">Descripción:</label></td>
            <td><textarea type="text" id="txtDescription" name="txtDescription" 
                          data-validation="custom" data-validation-regexp="^[a-zA-Z_áéíóúñ\s]*$"></textarea></td>
        </tr>           

    </table>

    <input type="submit" id="btnAccept" name="btnAccept" value="Insertar"  />

</form>
<br>

<script>
    $.validate({
        lang: 'es'
    });

</script>



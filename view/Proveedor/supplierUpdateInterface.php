<!Doctype>


<table border="0" width="10" cellspacing="1">
    <thead>
        <tr>
            <th>Nombre</th>
            <th>Email</th>
            <th>Telefono</th>
            <th>Actualizar</th>
        </tr>
    </thead>
    <tbody>
        <tr>



            <?php
            foreach ($this->result as $tem) {
                ?>          
        <form name="updateSupplier" method="post" action="?supplier=update">           

            <input type="hidden" id="idSupplier" name="idSupplier" value="<?php echo '' . $tem->getIdSupplier() . ''; ?>">
            <td><input type="text" id="txtNameSupplier" name="txtNameSupplier" 
                       data-validation="custom" data-validation-regexp="^([a-zA-Z]+)$"
                       placeholder="Nombre" size="10" maxlength="15" value="<?php echo '' . $tem->getNameSupplier() . ''; ?>" > </td>
            <td><input type="email" id="txtEmailSupplier" name="txtEmailSupplier" 
                       data-validation="custom" data-validation-regexp="^([a-zA-Z]+)$"
                       placeholder="ejemplo@email.com" value="<?php echo '' . $tem->getEmailSupplier() . ''; ?>"></td>
            <td> <input type='tel' id="txtTelSupplier" name="txtTelSupplier" pattern="[0-9]{8}"
                        placeholder="Telefono" value="<?php echo '' . $tem->getTelephoneSupplier() . ''; ?>"></td>
            <td><input  type="submit" id="btnUpdate" name="btnUpdate" value="Actualizar" >  </td>      

        </form>
 </tr>
   
    <?php
}
?>
 
    </tbody>
    </table>
  
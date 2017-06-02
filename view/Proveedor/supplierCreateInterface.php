<!Doctype>


<table border="0">
    <thead>
        <tr>
            <th><h1>Registro de Nuevo Provedor</h1></th>
        </tr>
    </thead>
    <tbody>
    <form name="RegisterSupplier" method="post" action="?supplier=insert">
        <tr>
            <td><input type="text" id="txtNameSupplier" name="txtNameSupplier" 
                       data-validation="custom" data-validation-regexp="^([a-zA-Z]+)$"
                       placeholder="Nombre"></td>
        </tr>
        <tr/>  
        <tr>
            <td>
                <input type="email" id="txtEmailSupplier" name="txtEmailSupplier" 
                       data-validation="custom" data-validation-regexp="^([a-zA-Z]+)$"
                       placeholder="E-mail"> 
            </td>
        </tr>
        <tr/>
        <tr>
            <td><input type="tel" id="txtTelSupplier" name="txtTelSupplier" placeholder="Telefono" pattern="[0-9]{8}"></td>
        </tr>
        <tr/>
        <tr>
            <td>
                <input  type="submit" id="btnInsert" name="btnInsert" value="Insertar" >
            </td>
        </tr>
        </tbody>
</table>           
</form>










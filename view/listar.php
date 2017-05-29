<?php
    include_once 'public/header.php';
?>

<table>
    <tr>
        <th>ID</th>
        <th>Item</th>
    </tr>
    
    <?php
        while($item=$vars['listado']->fetch()){
    ?>
    <tr>
        <td><?php echo $item[0] ?></td>
        <td><?php echo $item[1] ?></td>
    </tr>
    
    <?php 
        }
    ?>
</table>

<?php
    include_once 'public/footer.php';
?>
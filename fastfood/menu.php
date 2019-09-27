<?php 
    require_once 'header.php'; 
    
    $sql = "SELECT * FROM tbl_menu";
    
    $arr = [];
    $result = $conn->query($sql);
    while($row = $result->fetch_assoc()){
        $arr[] = $row;
    }

?>
<div class="clearfix">
    <div class="float-left">
        <h4>Menu List</h4>
    </div>
    <div class="float-right">
        <a class="btn btn-info" href="menu-add.php">Add Menu</a>
    </div>
</div>
<hr>
<table class="table table-light">
    <thead class="thead-light">
        <tr>
            <th>Menu</th>
            <th>Description</th>
            <th>Quantity</th>
            <th></th>
        </tr>
    </thead>
    <tbody>
        <?php foreach($arr as $val): ?>
        <tr>
            <td><?= $val['menu'] ?></td>
            <td><?= $val['description'] ?></td>
            <td><?= $val['quantity'] ?></td>
            <td>
                <a href="menu-update.php?id=<?= $val['id']?>" class="btn btn-info btn-sm">Update</a>
                <a href="menu-delete-function.php?id=<?= $val['id']?>" class="btn btn-danger btn-sm">Delete</a>
            </td>
        </tr>
        <?php endforeach; ?>
    </tbody>
</table>
<?php require_once 'footer.php'; ?>
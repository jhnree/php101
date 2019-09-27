<?php require_once 'header.php'; 

   $sql = "SELECT * FROM tbl_menu WHERE id = ". $_GET['id'];
    
   $arr = [];
   $result = $conn->query($sql);
   while($row = $result->fetch_assoc()){
       $arr = $row;
   }
?>

<div class="clearfix">
    <div class="float-left">
        <h4>Update Menu</h4>
    </div>
    <div class="float-right">
        <!-- <a class="btn btn-info" href="menu-add.php">Add Menu</a> -->
    </div>
</div>
<hr>
<form method="post" action="menu-update-function.php">
    <input class="form-control" type="hidden" name="id" value="<?= $arr['id']?>">
    <div class="form-group">
        <label for="menu">Menu</label>
        <input id="menu" class="form-control" type="text" name="menu" value="<?= $arr['menu']?>">
    </div>
    <div class="form-group">
        <label for="description">Description</label>
        <input id="description" class="form-control" type="text" name="description" value="<?= $arr['description']?>">
    </div>
    <div class="form-group">
        <label for="quantity">Quantity</label>
        <input id="quantity" class="form-control" type="text" name="quantity" value="<?= $arr['quantity']?>">
    </div>
    <div class="form-group">
        <button type="submit" class="btn btn-success">Submit</button>
    </div>
</form>
<?php require_once 'footer.php'; ?>
<?php require_once 'header.php'; ?>
<div class="clearfix">
    <div class="float-left">
        <h4>Add Menu</h4>
    </div>
    <div class="float-right">
        <!-- <a class="btn btn-info" href="menu-add.php">Add Menu</a> -->
    </div>
</div>
<hr>
<form method="post" action="menu-add-function.php">
    <div class="form-group">
        <label for="menu">Menu</label>
        <input id="menu" class="form-control" type="text" name="menu">
    </div>
    <div class="form-group">
        <label for="description">Description</label>
        <input id="description" class="form-control" type="text" name="description">
    </div>
    <div class="form-group">
        <label for="quantity">Quantity</label>
        <input id="quantity" class="form-control" type="text" name="quantity">
    </div>
    <div class="form-group">
        <button type="submit" class="btn btn-success">Submit</button>
    </div>
</form>
<?php require_once 'footer.php'; ?>
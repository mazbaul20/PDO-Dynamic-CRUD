<?php
    include 'inc/header.php';
    include 'lib/Database.php';
?>
<div class="well text-center">
    <h2>Student List</h2>
</div>
<div class="panel panel-danger">
    <div class="panel-heading">
        <h2>Update Student<a class="btn btn-success btn-lg pull-right" href="index.php">Back</a></h2>
    </div>
    <!-- php code start -->
    <?php
        $id = $_GET['id'];
        $db = new Database();
        $table = "tbl_student";
        $wherecond = array(
            'where' => array('id' => $id),
            'return_type' => 'single'
        );
        $value = $db->select($table, $wherecond);
        if(!empty($value)){
    ?>
    <!-- php code end -->

<div class="panel-body">
            <form action="lib/process_student.php" method="post">
                <div class="form-group">
                    <label for="name">Student Name</label>
                    <input class="form-control" type="text" name="name" id="name" required="1" value="<?php echo $value['name']; ?>"/>
                </div>
                <div class="form-group">
                    <label for="email">Student Email</label>
                    <input class="form-control" type="email" name="email" id="email" required="1" value="<?php echo $value['email']; ?>"/>
                </div>
                <div class="form-group">
                    <label for="name">Student Phone</label>
                    <input class="form-control" type="text" name="phone" id="phone" required="1" value="<?php echo $value['phone']; ?>"/>
                </div>
                <div class="form-group">
                    <input type="hidden" name="id" value="<?php echo $value['id']; ?>">
                    <input type="hidden" name="action" value="edit">
                    <input type="submit" class="btn btn-primary" name="submit" value="Update Student">
                </div> 
            </form>
    <?php }?>
</div>

<?php
    include 'inc/footer.php';
?>
<?php
    include 'inc/header.php';
?>
<div class="well text-center">
    <h2>Student List</h2>
</div>
<div class="panel panel-danger">
    <div class="panel-heading">
        <h2>Update Student<a class="btn btn-success btn-lg pull-right" href="index.php">Back</a></h2>
    </div>
<div class="panel-body">
            <form action="lib/process_student.php" method="post">
        <div class="form-group">
            <label for="name">Student Name</label>
            <input class="form-control" type="text" name="name" id="name" required="1" value="MD Mazbual Islam"/>
        </div>
        <div class="form-group">
            <label for="email">Student Email</label>
            <input class="form-control" type="email" name="email" id="email" required="1" value="mazbaul011@gmail.com"/>
        </div>
        <div class="form-group">
            <label for="name">Student Phone</label>
            <input class="form-control" type="text" name="phone" id="phone" required="1" value="012-34567891"/>
        </div>
        <div class="form-group">
            <input type="hidden" name="id" value="">
            <input type="hidden" name="action" value="Edit">
            <input type="submit" class="btn btn-primary" name="submit" value="Update Student">
        </div> 
    </form>
</div>
<?php
    include 'inc/footer.php';
?>
<?php
    include 'inc/header.php';
?>
<div class="well text-center">
    <h2>Student List</h2>
</div>
<div class="panel panel-danger">
    <div class="panel-heading">
        <h2>Student List<a class="pull-right" href="addstudent.php">Add Student</a></h2>
    </div>
<div class="panel-body">
            <form action="lib/process_student.php" method="post">
        <div class="form-group">
            <label for="name">Student Name</label>
            <input class="form-control" type="text" name="name" id="name" required>
        </div>
        <div class="form-group">
            <label for="email">Student Email</label>
            <input class="form-control" type="email" name="email" id="email" required>
        </div>
        <div class="form-group">
            <label for="name">Student Phone</label>
            <input class="form-control" type="text" name="phone" id="phone" required>
        </div>
        <div class="form-group">
            <input type="hidden" name="action" value="add">
            <input type="submit" class="btn btn-primary" name="submit" value="Add Student">
        </div> 
    </form>
</div>
<?php
    include 'inc/footer.php';
?>
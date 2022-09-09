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
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>Serial</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Phone</th>
                        <th>Action</th>
                    </tr>
                </thead>
                
                <tr>
                    <td>01</td>
                    <td>MD Mazbual Islam</td>
                    <td>mazbaul011@gmail.com</td>
                    <td>012-34567891</td>
                    <td>
                        <a class="btn btn-primary" href="editstudent.php?id=1">Edit</a>
                        <a class="btn btn-danger" href="deletestudent.php?id=1" onclick="return confirm('Are you sure to delete data?')">Delete</a>
                    </td>
                </tr>
                <tr>
                    <td>02</td>
                    <td>MD Hasibul Islam</td>
                    <td>hasibul32@gmail.com</td>
                    <td>012-34567891</td>
                    <td>
                        <a class="btn btn-primary" href="#">Edit</a> <a class="btn btn-danger" href="#">Delete</a>
                    </td>
                </tr>
                <tr>
                    <td>02</td>
                    <td>MD Hasibul Islam</td>
                    <td>hasibul32@gmail.com</td>
                    <td>012-34567891</td>
                    <td>
                        <a class="btn btn-primary" href="editstudent.php?id=1">Edit</a>
                        <a class="btn btn-danger" href="lib/process_student.php?id=1" onclick="return confirm('Are you sure to Delete ?')">Delete</a>
                    </td>
                </tr>
            </table>
        </div>
<?php
    include 'inc/footer.php';
?>
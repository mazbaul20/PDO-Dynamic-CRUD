<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PDO Dynamic CRUD</title>
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <script src="js/jquery-1.12.4.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
</head>
<body>
    <div class="container">
        <div class="well text-center">
            <h2>Student List</h2>
        </div>
        <div class="panel panel-danger">
            <div class="panel-heading">
                <h2>Student List<a class="pull-right" href="addstudent.php">Add Student</a></h2>
            </div>
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
                        <a class="btn btn-primary" href="#">Edit</a> <a class="btn btn-danger" href="#">Delete</a>
                    </td>
                </tr>
            </table>
        </div>
        <div class="well">
            <h3><a href="">https://www.youtube.com/channel/UCl1LbPslpUhMPJgoFpbQ96w</a>
                <span class="pull-right"><a href="www.facebook.com/mazbaul2"> Facebook Page</a></span>
            </h3>
        </div>
    </div>
    
</body>
</html>
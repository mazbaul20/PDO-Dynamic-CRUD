<?php
    include 'lib/Session.php';
    include 'inc/header.php';
    include 'lib/Database.php';
?>
        <div class="well text-center">
            <h2>Student List</h2>
        </div>
        <div class="panel panel-danger">

        <?php
            Session::init();
            $msg = Session::get('msg');
            if(!empty($msg)){
                echo'<h3 class="alert alert-info text-center">'.$msg.'</h3>';
                Session::unset();
            }
        ?>
            <div class="panel-heading">
                <h2>Student List<a class="btn btn-success btn-lg pull-right" href="addstudent.php">Add Student</a></h2>
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
                    <?php
                        $db   = new Database();
                        $table = "tbl_student";
                        $order_by = array('order_by'=>'id DESC');
                        // $wherecond = array(
                        //     'where' =>array('id'=>'2', 'email'=> 'mazbaul20@gmail.com'),
                        //     'return_type'=>'single'
                        // );
                        // $limit = array('start' => '2', 'limit' => '4');
                        $studentdata = $db->select($table, $order_by);
                        if(!empty($studentdata)){
                            $i=0;
                            foreach($studentdata as $data){
                                $i++;
                    ?>
                    <td><?php echo $i; ?></td>
                    <td><?php echo $data['name'] ?></td>
                    <td><?php echo $data['email'] ?></td>
                    <td><?php echo $data['phone'] ?></td>
                    <td>
                        <a class="btn btn-primary" href="editstudent.php?id=<?php echo $data['id']; ?>">Edit</a>
                        <a class="btn btn-danger" href="deletestudent.php?id=<?php echo $data['id']; ?>" onclick="return confirm('Are you sure to delete data?')">Delete</a>
                    </td>
                </tr>
                <?php } }else{ ?>
                    <tr><td colspan="5"><h2>No Student Data Found....</h2></td></tr>   
                <?php } ?>
            </table>
        </div>
<?php
    include 'inc/footer.php';
?>






<!-- tutorials 14 start -->
<?php
    include 'Database.php';
    include 'Session.php';
    Session::init();
    $db = new Database();
    $table = "tbl_student";

    if(isset($_REQUEST['action']) && !empty($_REQUEST['action'])){
        if($_REQUEST['action']== 'add'){
            $studentData = array(
                'name'  => $_POST['name'],
                'email' => $_POST['email'],
                'phone' => $_POST['phone']
            );
            $insert = $db->insert($table, $studentData);
            if($insert){
                $msg = "Data Inserted Successfully";
            }else{
                $msg = "Data not Inserted !";
            }
            Session::set('msg',$msg);
            $home_url = '../index.php';
            header('Location:'.$home_url);

        }elseif($_REQUEST['action'] == 'delete'){
            $id = $GET['id'];
            if(!empty($id)){
                $table = "tbl_student";
                $condition = array('id' => $id);
                $delete    = $db->delete($table,$condition);
                if($update){
                    $msg = "Data deleted Successfullly";
                }else{
                    $msg = "Data not deleted !";
                }
            }
            Session::set('msg', $msg);
                $home_url = '../index.php';
                header('Location:'.$home_url);

        }elseif($_REQUEST['action'] == 'edit'){
            $id = $_POST['id'];
            if(!empty($id)){
                $studentData = array(
                    'name'   => $_POST['name'],
                    'email'  => $_POST['email'],
                    'phone'  => $_POST['phone']
                );
                $table       = "tbl_student";
                $condition   = array('id' => $id);
                $update      = $db->update($table, $studentData, $condition);
                if($update){
                    $msg = "Data updated Successfully";
                }else{
                    $msg = "Data not updated !";
                }
                Session::set('msg', $msg);
                $home_url = '../index.php';
                header('Location:'.$home_url);
            }
        }
    }
?>
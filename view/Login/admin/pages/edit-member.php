
<?php 
     include_once 'function/students.php'; 
    if (isset($_GET['id'])) {
        $id = (int)$_GET['id'];
        $member = getStudensID($id);
        if (count($member)==0) {
            header('location: index.php?page=member');
        }
        $faculty = getFacultys();
        if (isset($_POST['update-member'])) {
           $name =$_POST['name'];
           $phone =$_POST['phone'];
           $addres =$_POST['addres'];
           $facutly_id =$_POST['faculty'];
           $status =$_POST['status'];
           $update =updateStudents($id,$facutly_id,$name,$phone,$addres,$status);
           if ($update) {
                $_SESSION['noti'] = 1;
                header('location: index.php?page=member');
           }
        }
        
    }else {
       
           header('location: index.php?page=member');
    }
    
?>
<!-- Page Heading -->
<div class="row">
    <div class="col-lg-12">
        <h1 class="page-header">
            Edit students
        </h1>
        <ol class="breadcrumb">
            <li>
                <i class="fa fa-dashboard"></i>  <a href="index.html">Dashboard</a>
            </li>
            <li class="active">
                <i class="fa fa-edit"></i> Edit studetns
            </li>
        </ol>
    </div>
</div>
<!-- /.row -->

<div class="row">
    <div class="col-lg-12">

        <form method="POST" action="" >

            <div class="form-group">
                <label>Name</label>
                <input type="text" required class="form-control" name="name" id="name" value="<?php echo $member['name'] ?>" />
            </div> 

            <div class="form-group">
                <label>Email</label>
                <input type="email" disabled="" class="form-control" name="email" id="email" value="<?php echo $member['email'] ?>" />
            </div> 

            <div class="form-group">
                <label>Phone</label>
                <input type="number" required class="form-control" name="phone" id="phone" value="<?php echo $member['phone'] ?>" />
            </div>

            <div class="form-group">
                <label>Facultys</label>
                <select class="form-control" name="faculty">
                    <?php foreach ($faculty as $value) {
                    ?>
                        <option  <?php getFaculty($value['id'], $member['facultys_id']) ?> value="<?php echo $value['id']; ?>"><?php echo $value['title']; ?></option>
                    <?php
                    } ?>
                   
                </select>
            </div>

            <div class="form-group">
                <label>Addres</label>
                <textarea name="addres" required class="form-control" rows="3"><?php echo $member['addres'] ?></textarea>
            </div>

            <div class="form-group">
                <label>Status</label>
                <label class="checkbox-inline">
                    <input type="radio" name="status" value="1" checked=""> Active
                </label>
                <label class="checkbox-inline">
                    <input type="radio" name="status" value="0"> Pending
                </label>
            </div>

            <button type="submit" name="update-member" class="btn btn-primary">Update</button>

        </form>

    </div>
</div>
                <!-- /.row -->
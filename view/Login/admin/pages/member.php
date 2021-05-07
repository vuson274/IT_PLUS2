<?php include_once 'function/students.php'; ?>

<!-- Page Heading -->

<div class="row">
    <?php include_once 'includes/notification.php'; ?>
    
    <div class="col-lg-12">
        <h2>STUDENTS</h2>
        <form class="form-inline" action="" method="POST">
            <div>
                <input type="text" class="form-control" name="key"  placeholder="Search"> 
                <button class="btn btn-outline-secondary" type="submit" name="submit-search">Search</button>
            </div>
      </form>

      <div class="table-responsive">
        <table class="table table-bordered table-hover">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Name</th>
                    <th>Phone</th>
                    <th>Email</th>
                    <th>Facultys</th>
                    <th>Status</th>
                    <th>Created at</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
               <?php 
               if (isset($_POST['submit-search'])) {
                    $phone =$_POST['key'];
                    $students = Search($phone);
               }else{
                    $students = getStudents();
               }
               
               $count =0;
               foreach ($students as $key => $value) {
                 $count+=1;
                 ?>

                 <tr>
                    <td><?php echo $count ; ?></td>
                    <td><?php echo $value['name']; ?></td>
                    <td><?php echo $value['phone']; ?></td>
                    <td><?php echo $value['email']; ?></td>
                    <td><?php echo $value['title']; ?></td>
                    <td>
                        <?php 
                        if ($value['status']==1) {
                            echo "Đang học"; ;
                        }else{
                            echo "Thôi học";
                        }

                        ?>
                    </td>
                    <td><?php echo $value['created_at']; ?></td>
                    <td>
                        <a href="index.php?page=edit-member&id=<?php echo $value['id']; ?>">
                            <i class="fa fa-edit fa-2x"></i>
                        </a>
                    </td>
                </tr>

            <?php } ?>


        </tbody>
    </table>
</div>
</div>
</div>
<div class="col-lg-6">

</div>
</div>

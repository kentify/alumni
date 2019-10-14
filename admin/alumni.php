<?php include "include/head.php" ?>
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <br>
    <section class="content-header">
      <h1>&nbsp;
        Alumni
  
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Alumni</li>
      </ol>
    </section>

        <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-body">
            <h4>
              Search Alumni
            </h4>
            <!-- /.box-header -->
            <div class="box-body" style="padding-top: 0;">
              <table id="alumni" class="table table-bordered table-striped">
                <thead>
                <tr align="center">
                  <th>#</th>
                  <th>Name</th>
                  <th>Course</th>
                  <th>Department</th>
                  <th>Batch</th>
                  <th>Email</th>
                  <th>Campus</th>
                  <th>Contact Number</th>
                  <th width="5px">Action</th>
                
                </tr>
                </thead>
                <tbody>
                <?php
                            include ('db.php');
                            $sql = mysqli_query($con,'SELECT * FROM users ORDER BY updated DESC');
                            while($data = mysqli_fetch_array($sql)) {
                              $mid = mb_substr($data['mname'], 0, 1);
                                echo '
                                    <tr>
                                        <td>'.$data['id'].'</td>
                                        <td>'.$data['fname']." ".$mid.". ".$data['lname'].'</td>
                                        <td>'.$data['course'].'</td>
                                        <td>'.$data['department'].'</td>
                                        <td>'.$data['graduated'].'</td>
                                        <td>'.$data['email'].'</td>
                                        <td>'.$data['campus'].'</td>
                                        <td>'.$data['contact'].'</td>
                                        ';
                                    
                                     echo '<td align="center">
                                      <a href="profile.php?view='.$data['stuid'].'&id='.$data['id'].'" style="background-color:#00c0ef; margin: 0 auto; padding:10px;" class="btn btn-info btn-sm"><i style="color:white;" class="fa fa-search"aria-hidden="true"></i></a>
                                    ';
        

                                      
                                    echo '</tr>';
                                      
                                
                            }
                        ?>
                </tbody>
                
              </table>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

</div>
<!-- ./wrapper -->

<?php include "include/foot.php" ?>
<script>
$('document').ready(function()
{
  
 
        
            //pass data to datatable
           
             $('#alumni').DataTable({
              "lengthMenu"  : [10, 25, 50, 75, 100],
              'lengthChange': true,
              'ordering'    : true,
              'info'        : true,
              'autoWidth'   : false,
                "paging"      : true,
                "searching"   : true, //this is disabled because I have a custom search.
              
            });
          
});
</script>
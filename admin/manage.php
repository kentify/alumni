<?php include "include/head.php" ?>
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <br>
    <section class="content-header">
      <h1>&nbsp;
        Manage Alumni
  
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Manage</li>
      </ol>
    </section>

         <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-body">
            <h4>
             <span class="pull-left">List of Courses</span> <span class="pull-right">|<button class="btn btn-success">Add</button>|</span> 
            </h4>
            <!-- /.box-header -->
            <div class="box-body" style="padding-top: 0;">
              <table id="alumni" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th width="5%">No.</th>
                  <th>Avatar</th>
                  <th>Name</th>
                  <th>Role</th>
                  <th>Email</th>
                  <th width="8%">Action</th>
                
                </tr>
                </thead>
                <tbody>
                <?php
                            include ('db.php');
                            $sql = mysqli_query($con,'SELECT * FROM admin');
                            while($data = mysqli_fetch_array($sql)) {
                                echo '
                                    <tr>
                                        <td align="center">'.$data['id'].'</td>
                                        <td align="center"><img width="50" height="50" src="img/'.$data['picture'].'"</td>
                                        <td>'.$data['username'].'</td>
                                        <td>'.$data['job'].'</td>
                                        <td>'.$data['email'].'</td>
                                        ';
                                    
                                     echo '<td align="center">
                                      <a style="margin: 0 auto; padding:10px;" class="btn btn-success btn-sm"><i class="fa fa-check " aria-hidden="true"></i></a>
                                      <a style="margin: 0 auto; padding:10px;" class="btn btn-danger btn-sm"><i class="fa fa-times" aria-hidden="true"></i></a>
                                        </td>
                                    ';

                                    }

                                      
                                    echo '</tr>';
                                      
                                
                            
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

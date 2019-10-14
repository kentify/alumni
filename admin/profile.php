<?php include "include/head.php" ?>
 <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Student Profile
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Alumni</a></li>
        <li class="active">Student profile</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">

      <div class="row">
        <div class="col-md-3">

          <!-- Profile Image -->
          <div class="box box-primary">
            <div class="box-body box-profile" style="overflow: hidden;">
               <?php 
                      require 'db.php';
                      $id = $_GET['id'];
                      $result = mysqli_query($con,"SELECT * FROM users WHERE id = '$id'");
                      $row = mysqli_fetch_array($result);
                      $mid = mb_substr($row['mname'], 0, 1);
                
                        ?>
              <img class="profile-user-img img-responsive img-circle" src="img/<?php echo $row['picture'] ?>" alt="User profile picture">
                <br>
              <p style="width: 100%; margin: 0 auto; text-align:center" class=""><b><?php echo $row['fname'] ?>&nbsp;<?php echo $mid ?>.&nbsp;<?php echo $row['lname'] ?></b></p>

    

              <a href="#" style="color:#00c0ef;" class="btn btn-primary btn-block"><i class="fa fa-envelope"></i>&nbsp;Message</a>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->

        
        </div>
        <!-- /.col -->
        <div class="col-md-9">
          <div class="nav-tabs-custom">
            <ul class="nav nav-tabs">
              <li class="active"><a href="#activity" data-toggle="tab"><span style="color:white;">Information</span></a></li>

              <li><a href="#settings" data-toggle="tab"><span style="color:white;">Work Status</span></a></li>
            </ul>
            <div class="tab-content">
              <div class="active tab-pane" id="activity">
              
              <ul style="margin: 0 auto; padding: 10px;" class="list-group bottomline">  
               <li class="list-unstyled text-left">
                <div class="row">
                    <div class="col-xs-12 col-sm-4 col-md-4">
                      <strong><?php echo $row['fname'] ?>'s Information</strong>
                      <div class="form-group ">
                      <strong>Alumni ID </strong>
                      : <?php echo $row['alumni_id'] ?></div> 
                    </div>
                    <div class="col-xs-12 col-sm-4 col-md-4">
                      <div class="form-group ">
                      <strong>Course </strong>
                      : <?php
                       if ($row['course']=='BSINT') {
                         echo 'Bachelor of Science in Information Techonology(BSINT)';
                       }else{
                         echo 'Bachelor of Science in Computer Science(BSCS)'; 
                       }

                       ?></div> 
                    </div>
                    <div class="col-xs-12 col-sm-4 col-md-4">
                      <div class="form-group ">
                      <strong>Department </strong>
                      :<?php echo $row['department']?></div> 
                    </div>
               </div>
                </li> 

                  <li class="list-unstyled text-left">
                    <div class="row">
                    <div class="col-xs-12 col-sm-4 col-md-4">
                      <div class="form-group ">
                      <strong>First Name </strong> 
                     : <?php echo $row['fname'] ?>   
                      </div>
                    </div>
                    <div class="col-xs-12 col-sm-4 col-md-4">
                      <div class="form-group ">
                      <strong>Middle Name </strong> 
                     : <?php echo $row['mname'] ?>   
                      </div>
                    </div>
                    <div class="col-xs-12 col-sm-4 col-md-4">
                      <div class="form-group">
                        <strong>Last Name </strong>
                    : <?php echo $row['lname'] ?> 
                      </div>
                    </div>
                    <div class="col-xs-12 col-sm-4 col-md-4">
                      <div class="form-group">
                        <strong>Birth date </strong>
                    : <?php echo $row['dob'] ?> 
                      </div>
                    </div>
                    <div class="col-xs-12 col-sm-4 col-md-4">
                      <div class="form-group">
                        <strong>Gender </strong>
                    : <?php echo $row['gender'] ?> 
                      </div>
                    </div>
                    <div class="col-xs-12 col-sm-4 col-md-4">
                      <div class="form-group">
                        <strong>School/Campus </strong>
                    : <?php echo $row['campus'] ?> 
                      </div>
                    </div>
                    <div class="col-xs-12 col-sm-4 col-md-4">
                      <div class="form-group">
                        <strong>Batch </strong>
                    : <?php echo $row['graduated'] ?> 
                      </div>
                    </div>

                   <div class="col-xs-12 col-sm-4 col-md-4">
                      <div class="form-group">
                        <strong>Status</strong>
                    : <?php 
                      if ($row['verify']==0) {
                        echo '<span class="label label-warning">Pending</span>';
                     }else{
                        echo '<span class="label label-success" style="padding:5px;">Registered</span>';
                      }
                      ?> 
                      </div>
                    </div>
                  </div>
                  </li>

                  <li class="list-unstyled text-left">
                  <div class="form-group ">
                  <strong><?php echo $row['address'] ?> </strong>
                  :  
                  </div>
                </li> 
                   
                  <li class="list-unstyled text-left"> 
                  <div class="row">
                    <div class="col-xs-12 col-sm-6 col-md-6">
                      <div class="form-group ">
                        <strong>Email Address </strong>
                         : <?php echo $row['email'] ?></div>
                   </div>
                   <div class="col-xs-12 col-sm-6 col-md-6">
                    <div class="form-group ">
                      <strong>Contact Number</strong>
                         : <?php echo $row['contact'] ?></div>
                    </div>
                  </div>  
                  </li>

                   <li class="list-unstyled text-left">
                    <div class="row">
                    <div class="col-xs-12 col-sm-6 col-md-6">
                      <div class="form-group ">
                      <strong>Father</strong> 
                     : <?php echo $row['father'] ?>   
                      </div>
                    </div>
                    <div class="col-xs-12 col-sm-6 col-md-6">
                      <div class="form-group">
                        <strong>Occupation</strong>
                    :  <?php echo $row['jobf'] ?>
                      </div>
                    </div>
                  </div>
                  </li>

                 <li class="list-unstyled text-left">
                    <div class="row">
                    <div class="col-xs-12 col-sm-6 col-md-6">
                      <div class="form-group ">
                      <strong>Mother</strong> 
                     : <?php echo $row['mother'] ?>   
                      </div>
                    </div>
                    <div class="col-xs-12 col-sm-6 col-md-6">
                      <div class="form-group">
                        <strong>Occupation</strong>
                    :  <?php echo $row['jobm'] ?>
                      </div>
                    </div>
                  </div>
                  </li>

                   <li class="list-unstyled text-left">
                  <div class="row">
                    <div class="col-xs-12 col-sm-6 col-md-6">
                      <div class="form-group ">
                        <strong>Rank in the Family</strong> 
                        :<?php echo $row['rank'] ?></div>
                    </div> 
                    <div class="col-xs-12 col-sm-6 col-md-6">
                    <div class="form-group ">
                      <strong>Disability</strong> 
                        :<?php echo $row['disability'] ?></div>
                        </div>
                        </div>
                    </li>


                </ul> 
              </div>
              <!-- /.tab-pane -->
  
              <!-- /.tab-pane -->

              <div class="tab-pane" id="settings">
                <div class="box-body no-padding">
              <table class="table">
                <tr>
                  <th>Company</th>
                  <th>Address</th>
                  <th>Status</th>
                  <th>Hired Date</th>
                  <th>Annual Income</th>
                
                </tr>
                <tr>
                  <td>SPi Global Inc.,</td>
                  <td>Near LP Supermarket</td>
                  <td>Hired</td>
                  <td>Jun 6,2011</td>
                  <td>₱1,000,000</td>
                </tr>
                
                </tr>
              </table>
            </div>
              </div>
              <!-- /.tab-pane -->
            </div>
            <!-- /.tab-content -->
          </div>
          <!-- /.nav-tabs-custom -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->

    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  <?php include "include/foot.php" ?>

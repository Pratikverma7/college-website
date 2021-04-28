<?php
include("adminheader.php");


?>
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">M.Sc. (Mathematics Education</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#"></a></li>
              <li class="breadcrumb-item active">Dashboard v1</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
      <div class="card">
              <!-- card header start -->
                <div class="card-header">
                   <div class="row">

                      <br>
                      <!-- Button trigger modal -->
                      <button type="button" class="btn btn-info" data-toggle="modal" data-target="#exampleModalCenter">Add information</button>

                     <!-- Modal -->
                      <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                      <div class="modal-dialog modal-dialog-centered" role="document">
                      <div class="modal-content">
                      <div class="modal-header">
                      <h5 class="modal-title" id="exampleModalLongTitle">Add Details</h5>
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                     </button>
                  </div>
                <div class="modal-body">
                   <form action="mscinsert.php" method="POST" enctype="multipart/form-data">
                   	<div>
                   		<label>Paper Name :</label>
                   		<input type="text" name="papername" class="form-control" required="">
                   	</div>
                   	<br>
                    <div>
                      <label>Name of Faculty :</label>
                      <input type="text" name="teacher" class="form-control" required="">
                    </div>
                    <br>
                    <div>
                      <label>Paper Code :</label>
                      <input type="text" name="code" class="form-control" required="">
                    </div>
                    <br>
                     <div>
                      <label>Course :</label>
                      <input type="text" name="course" class="form-control" required="">
                    </div>
                    <br>
                     <div>
                     	<label>File : </label>
                     	<input type="file" name="pdf" required="" >
                     </div>
                      <button type="submit" class="btn btn-primary" name="submit">Submit</button>
                    </form>
                 </div>
      </div>
    </div>
  </div>
</div>
                    </div>
                </div>
                <!-- card header end -->
                
             <!-- card body start -->
              <div class="card-body">
                <table id="example1" class="table table-bordered table-striped" enctype="multipart/form-data">
                  <thead>
                    <tr>
                      <th>S.NO</th>
                      <th>Paper name</th>
                      <th>Teacher</th>
                      <th>Code</th>
                      <th>Course</th>
                      <th>PDf</th>
                      <th>Action</th>
                    </tr>
                  </thead>
                   <tbody>
                      <?php
                      include('connection.php');
                      $query = "SELECT * FROM mscrevised";
                      $result = mysqli_query($db,$query);
                      while ($data= mysqli_fetch_array($result))
                      {
                      ?>
                     <tr>
                       <td><?php echo $data['id']?></td>
                       <td><?php echo $data['papername']?></td>
                       <td><?php echo $data['teacher']?></td>
                       <td><?php echo $data['code']?></td>
                       <td><?php echo $data['course']?></td>
                       <td><?php echo $data['pdf']?></td>                       
                       <td>
                         <a href=""><button class="btn btn-warning">Edit</button></a>
                         <a href=""><button class="btn btn-danger">Delete</button></a>
                       </td>
                     </tr>
                      <?php
                        }
                      ?>
                   </tbody>
                </table>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
<?php
include("fotter.php");
?>
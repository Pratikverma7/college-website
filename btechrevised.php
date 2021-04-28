<?php
include('header.php');
?>
<br>
<section>
	<div class="container-fluid">
		<div class="container">
			<h3 class="text-center text-dark">B. Tech. (Information Technology and Mathematical Innovations)</h3>
			
			<h4 class="text-center text-dark">List of E-resources/ Study material for the reference of students</h4>
			<p class="text-justify">
				Following are the recommendations of some additional e-resources (books, articles,
                lectures, youtube links, ppts etc.) to the students as a paper wise list for each semester. <strong>A lot of study material, hand-outs, presentations, and lectures etc. have already been shared with students either on emails or through google drives. Also, study material had been continuously uploaded on CIC website for the reference to students.</strong> The weblinks in this document are only for the reference of students of Cluster Innovation Centre, purely for academic purposes. Since, all of these are available in the public domain, no Copyright infringement is intended.
			</p>
		</div>
	</div>
</section>

<section>
	<div class="container-fluid">
		<div class="container">
			<div class="card bg-light">
                  <?php
                    include('dbcon.php');
                    $query =  "SELECT * FROM btechrevised";
                    $result=mysqli_query($con,$query);
                    while($data=mysqli_fetch_array($result))
                    {



                  ?>
				<div class="card-body">
			        <h5 class="text-dark">Paper Name: <?php echo $data['papername']?></h5>
			        <h5 class="text-dark">Name of Faculty Members: <?php echo $data['teacher']?> </h5>
			        <h5 class="text-dark">Paper Code: <?php echo $data['code']?> </h5>
			        <h5 class="text-dark">Course: <?php echo $data['course']?> </h5>
			        <p class="text-dark text-center">Links of books or material to be shared:</p>
			        <center><a href="admin/<?php echo $data['pdf']?>" target="_pratik" class="btn btn-success">Download</a></center>
				</div>
              <?php
                 }
              ?>
			</div>
		</div>
	</div>
</section>
<br>
<?php 
include('footer.php');
?>
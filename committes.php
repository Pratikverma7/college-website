<?php
include('admin/connection.php');
?>

<?php
include('header.php');
?>

<style>
 
p{
     font-size: 14px;
}
 .tech-slideshow {
  height: 200px;
   
  margin: 0 auto;
  position: relative;
  overflow: hidden;
  transform: translate3d(0, 0, 0);
}

.tech-slideshow > div {
  height: 200px;
  width: 2526px;
  background: url(assets/images/mainslider/1.jpg);
  position: absolute;
  top: 0;
  left: 0;
  height: 100%;
  transform: translate3d(0, 0, 0);
}
.tech-slideshow .mover-1 {
  animation: moveSlideshow 12s linear infinite;
}
.tech-slideshow .mover-2 {
  opacity: 0;
  transition: opacity 0.5s ease-out;
  background-position: 0 -200px;
  animation: moveSlideshow 15s linear infinite;
}
 

@keyframes moveSlideshow {
  100% { 
    transform: translateX(-66.6666%);  
  }
}


/* Create three equal columns that floats next to each other */
.column {
  float: left;
  width: 33.33%;
  padding: 10px;
  
}

/* Clear floats after the columns */
.row:after {
  content: "";
  display: table;
  clear: both;
}
     * {
  box-sizing: border-box;
}

.count-box {  
  transition: transform .1s; 
  border:2px solid white;
}

.count-box:hover {
  -ms-transform: scale(1.1); /* IE 9 */
  -webkit-transform: scale(1.1); /* Safari 3-8 */
  transform: scale(1.1); 
}

</style>


<center><h3>List Of Commettiees - CIC</h3></center>
<p style="font-size:17px;">
    As per the minutes of the academic staff council meeting dated 15 Jan 2021 following is the list of commeties. effectively till 31 july 2021 constituted & approved during the meeting.
</p>
  
  
<center> <button  style="margin-top:4%; margin-bottom:2%;"    class="btn ">Download as PDF</button></center>
 
 
   <section>
      <div class="container"> 
        <div class="row"> 
 
 <?php 
					 
						$query_res= mysqli_query($db,"select * from ListOfCommities order by cid desc"); 
									      while($r=mysqli_fetch_array($query_res))
										  {
													
						  echo ' 
						   
          <div class="col-lg-4 col-md-6 d-md-flex align-items-md-stretch" style="margin-top:2%; margin-left:3%;margin-right:3%; width:25%;">
             <div class="btn btn">
              
             <center> <span data-toggle="counter-up"><b>'.$r['ctitle'].'</b></span></center>
              <p><strong>Conveyer:</strong> '.$r['conveyer'].'  </p>
              <p><strong>Members:</strong> '.$r['members'].' </p> 
            </div>
          </div> 
         
					                
                                             
                          ';
										  }
						 ?>
 
 
  </div> 
        </div>
 </section>
 





<?php
include('footer.php');
?>
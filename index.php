<?php
include('admin/connection.php');
?>

<?php
include('header.php');
?>

<?php
include('standard.php');
?>
<style>
    .outer{
        margin:1%;
        padding:1%;
    }
.outer .div1{
    width:20%;
    display:inline-block; 
}
.outer .div2{
    width:50%;
    display:inline-block; 
}
.outer .div3{
    width:20%;
    display:inline-block; 
}

@import url('https://fonts.googleapis.com/css?family=Montserrat');

 
:root {
  --marquee-width: 100%;
  --marquee-height: 20vh;
  /* --marquee-elements: 12; */ /* defined with JavaScript */
  --marquee-elements-displayed: 5;
  --marquee-element-width: calc(var(--marquee-width) / var(--marquee-elements-displayed));
  --marquee-animation-duration: calc(var(--marquee-elements) * 3s);
}

.marquee {
  width: var(--marquee-width);
  height: var(--marquee-height);
  background-color: #111;
  color: #eee;
  overflow: hidden;
  position: relative;
}
.marquee:before, .marquee:after {
  position: absolute;
  top: 0;
  width: 10rem;
  height: 100%;
  content: "";
  z-index: 1;
}
.marquee:before {
  left: 0;
  background: linear-gradient(to right, #111 0%, transparent 100%);
}
.marquee:after {
  right: 0;
  background: linear-gradient(to left, #111 0%, transparent 100%);
}
.marquee-content {
  list-style: none;
  height: 100%;
  display: flex;
  animation: scrolling var(--marquee-animation-duration) linear infinite;
}
/* .marquee-content:hover {
  animation-play-state: paused;
} */
@keyframes scrolling {
  0% { transform: translateX(0); }
  100% { transform: translateX(calc(-1 * var(--marquee-element-width) * var(--marquee-elements))); }
}
.marquee-content li {
  display: flex;
  justify-content: center;
  align-items: center;
  /* text-align: center; */
  flex-shrink: 0;
  width: var(--marquee-element-width);
  max-height: 100%;
  font-size: calc(var(--marquee-height)*3/4); /* 5rem; */
  white-space: nowrap;
}

.marquee-content li img {
  width: 100%;
  /* height: 100%; */
  border: 2px solid #eee;
}

@media (max-width: 600px) {
  html { font-size: 12px; }
  :root {
    --marquee-width: 100vw;
    --marquee-height: 16vh;
    --marquee-elements-displayed: 3;
  }
  .marquee:before, .marquee:after { width: 5rem; }
}
</style>

<center><div class="outer">
<div class="div1">
    <h2>Announcements</h2>
    <hr style="height:3px;border-width:0;color:blue;background-color:blue; margin:0; padding:0; width:80%; align-items:left;">
    <marquee direction="up" scrolldelay="80" height="350px" scrollamount="2" truespeed="" onmouseover="this.setAttribute('scrollamount', 0, 0);" onmouseout="this.setAttribute('scrollamount', 2, 0);" behavior="scroll">
                       
                             
                        
                              <?php 
					 
						$query_res= mysqli_query($db,"select * from announcements order by aid desc"); 
									      while($r=mysqli_fetch_array($query_res))
										  {
													
						  echo '    
						                       <ul class="News">
                                                   <li>
                                                      <a href="  '.$r['alink'].'"><p> '.$r['atitle'].' </p> </a><p>'.$r['adate'].' </p>
                                                    </li>
                                             </ul>
                          ';
										  }
						 ?>

                </marquee>
</div>



<div class="div2">
<h2>Main Content</h2> 
<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
     Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. 
     Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.
      Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
      <img src="img4.jpg" style="max-width:400px;"></img>
</div>



<div class="div3">
<h2>From Director's Desk</h2>
<hr style="height:3px;border-width:0;color:blue;background-color:blue; margin:0; padding:0; width:80%; align-items:left;">
<?php 
					 
                     $query_res= mysqli_query($db,"select * from directordetails"); 
                                       while($r=mysqli_fetch_array($query_res))
                                       {
                                                 
                                            echo '
 <div class="col-sm-3">
    <br>
<center> <img src="admin/images/directordetails/'.$r['dimage'].'" style="max-height:200px;max-width:300px;" /> </center>
   <p>
     '.$r['dabout'].'

                   <br>	We must join hands to generate new knowledge and solve the problems relevant to our society.
                   <br>  On behalf of CIC, I invite new and novel ideas which can be nurtured and incubated at the Centre.
             
                 <br> Director:  <b><i> '.$r['dname'].'</i></b> </span>
             <br> E-Mail:      <b><i> '.$r['demail'].'</i></b> </span>
                   </p>
                  
                 <!-- <a href="#" onclick="myFunctionReadMore()" id="myBtn">Read more</a> -->
                 
                 ';
                                       }
                      ?>

<script>
function myFunctionReadMore() {
var dots = document.getElementById("dots");
var moreText = document.getElementById("more");
var btnText = document.getElementById("myBtn");

if (dots.style.display === "none") {
 dots.style.display = "inline";
 btnText.innerHTML = "Read more"; 
 moreText.style.display = "none";
} else {
 dots.style.display = "none";
 btnText.innerHTML = "Read less"; 
 moreText.style.display = "inline";
}
}
</script>
</div>

</div></center>



<div class="marquee">
    <ul class="marquee-content">
      <li><img src="img2.jpg"></img></li>
      <li><img src="img1.jpg"></img></li>
      <li><img src="img5.jpg"></img></li>
      <li><img src="img4.jpg"></img></li>
      <li><img src="img3.jpg"></img></li>
      <li><img src="img2.jpg"></img></li>
      <li><img src="img1.jpg"></img></li>
      <li><img src="img5.jpg"></img></li>
      <li><img src="img4.jpg"></img></li>
      <li><img src="img3.jpg"></img></li>
      <li><img src="img2.jpg"></img></li>
      <li><img src="img1.jpg"></img></li>
    </ul>
  </div>

<script>
const root = document.documentElement;
const marqueeElementsDisplayed = getComputedStyle(root).getPropertyValue("--marquee-elements-displayed");
const marqueeContent = document.querySelector("ul.marquee-content");

root.style.setProperty("--marquee-elements", marqueeContent.children.length);

for(let i=0; i<marqueeElementsDisplayed; i++) {
  marqueeContent.appendChild(marqueeContent.children[i].cloneNode(true));
}
</script>







<?php
include('footer.php');
?>
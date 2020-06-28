
<link href="bootstrap-3.3.6-dist/css/bootstrap.min.css" rel="stylesheet"/>

<br/>
<br/><br/><br/><br/><br/><br/><br/><br/><br/>
<div id="slider" class="carousel slide" style="margin-top:-20px;">


   <ol class="carousel-indicators">
      <li class="active" data-target="#slider" data-slide-to="0"></li>
      <li  data-target="#slider" data-slide-to="1"></li>
      <li  data-target="#slider" data-slide-to="2"></li>
   
   </ol>

   <div class="carousel-inner">
     <div class="item active">
       <img src="banner1.jpg" style="width:100%; height:350px;"/>
     </div>
     
     <div class="item">
       <img src="banner2.jpg" style="width:100%; height:350px;"/>
     </div>
     
     <div class="item">
       <img src="banner3.jpg" style="width:100%; height:350px;"/>
     </div>
    
     
   </div><!--carousel inner close-->
   
   <a class="carousel-control left" href="#slider" data-slide="prev" >
            <span class="icon-prev"></span>
   </a>
   
   <a class="carousel-control right" href="#slider" data-slide="next" >
            <span class="icon-next"></span>
   </a>

</div><!--Slider close-->
<script src="bootstrap-3.3.6-dist/js/jquery.min.js"></script>
<script src="bootstrap-3.3.6-dist/js/bootstrap.min.js"></script>
<script>
		$("#slider").carousel({interval:2000});
		
	</script>

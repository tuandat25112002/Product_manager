<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<link rel="stylesheet" href="style.css">

<!-- php -->
<?php
require_once('config.php');
// paging
if(!isset($category_id)){
    $category_id = filter_input(INPUT_GET,'category_id',FILTER_VALIDATE_INT);
    if($category_id == null || $category_id==FALSE){
        $category_id=1;
    }
}
if(!isset($_GET["gettotalpages"])){
  $totalpages=$_GET["totalpages"];
  // echo $totalpages;
}

?>
<!-- /php -->
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <!-- <meta http-equiv="refresh" content="1"> -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css"
    integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">

    <title>Infantry</title>
  </head>

  <body style=" background-color:rgb(245, 245,245);">
  	<div id="page-container" class="main-admin">
	  	<nav class="navbar navbar-expand-lg navbar-light bg-light position-fixed w-100" style="z-index: 10000;">
		  <a class="navbar-brand" href="#"></a>
		  <div id="open-menu" class="menu-bar">
		  	<div class="bars"></div>
		  </div>
		    <ul class="navbar-nav ml-auto">
		      <li class="nav-item dropdown ets-right-0">
		        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
		          <img src="img_avatar3.png" class="img-fluid rounded-circle border user-profile">
		        </a>
		        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
		          <a class="dropdown-item" href="#">Action</a>
		          <a class="dropdown-item" href="#">Another action</a>
		          <div class="dropdown-divider"></div>
		          <a class="dropdown-item" href="#">Something else here</a>
		        </div>
		      </li>
		    </ul>
		</nav>
	  	<div class="side-bar">
	  		<div class="side-bar-links">
	  			<div class="side-bar-logo text-center py-3">
	  				<img src="img_avatar3.png" class="img-fluid rounded-circle border bg-secoundry mb-3">
	  				<h5>Admin</h5>
	  			</div>
	  			<ul class="navbar-nav">
	  				<li class="nav-item">
	  					<a href="#" class="nav-links d-block"><i class="fa fa-home pr-2"></i> HOME</a>
	  				</li>
	  				<!-- <li class="nav-item">
	  					<a href="#" class="nav-links d-block"><i class="fa fa-home pr-2"></i> HOME</a>
	  				</li>
	  				<li class="nav-item">
	  					<a href="#" class="nav-links d-block"><i class="fa fa-home pr-2"></i> HOME</a>
	  				</li>
	  				<li class="nav-item">
	  					<a href="#" class="nav-links d-block"><i class="fa fa-home pr-2"></i> HOME</a>
	  				</li>
	  				<li class="nav-item">
	  					<a href="#" class="nav-links d-block"><i class="fa fa-home pr-2"></i> HOME</a>
	  				</li> -->
	  			</ul>
	  		</div>
	  		<div class="side-bar-icons">
	  			<!-- <div class="side-bar-logo text-center py-3">
	  				<img src="" class="img-fluid rounded-circle border bg-secoundry mb-3">
	  				<h5>Company Name</h5>
	  			</div> -->
	  			<div class="icons d-flex flex-column align-items-center">
	  				<a href="#" class="set-width text-center display-inline-block my-1" style="padding: 30px 0px;"><i class="fa fa-home"></i></a>
	  				<a href="#" class="set-width text-center display-inline-block my-1" style="padding: 30px 0px;"><i class="fa fa-users"></i></a>
	  				<a href="#" class="set-width text-center display-inline-block my-1 active" style="padding: 30px 0px;"><i class="fa fa-list"></i></a>
	  				<!-- <a href="#" class="set-width text-center display-inline-block my-1"><i class="fa fa-sticky-note-o"></i></a>
	  				<a href="#" class="set-width text-center display-inline-block my-1"><i class="fa fa-file-text"></i></a>
	  				<a href="#" class="set-width text-center display-inline-block my-1"><i class="fa fa-sticky-note-o"></i></a> -->
	  				<!-- <a href="#" class="set-width text-center display-inline-block my-1"><i class="fa fa-database"></i></a> -->
	  			</div>
	  		</div>
	  	</div>
  	<div class="main-body-content w-100 ets-pt">
  		<!-- <div class="table-responsive bg-light">
  		
  		</div> -->
    <div class="container-fluid">
      <h2 >PRODUCT MANAGER</h2>
        <hr>   
    <div class="row">
        <div class="col-sm-3 float-left">
            <div class="container-fluid" ><h4>Categories</h4></div>
            <ul>
                <!-- get all các hãng giày -->
                <?php   
                $sql="SELECT * from categories";
                $stm = $conn->prepare($sql);
                $stm -> execute();
                $categories= $stm->fetchAll();
                $stm->closeCursor();
     
                foreach($categories as $cname){
                ?>
                
                <li class="category"><a href=".?category_id=<?php echo $cname["categoryID"]?>"><?php echo $cname['categoryName']; ?></a></li>
               <?php }?>
            </ul>
        </div>
        <div class="col-sm-9">
        <center>    <h2 >ADD PRODUCT</h2></center>
                    <!-- php -->
                   
<!-- /php -->
            <form action="add.php" method="get" class="card" >  
        <div class="container-fluid">
            <div class="col-sm-7 float-left">          
            <p><h5>1. CATELOGY</h5></p>
            <select name='category_id' class="form-control" id="" style="width: 40%;">

                   <?php
                        $sql="SELECT * from categories";
                        $stm = $conn->prepare($sql);
                        $stm -> execute();
                        $categories= $stm->fetchAll();
                        $stm->closeCursor();
                    foreach($categories as $c){
                        // echo $c['categoryID'];
                        // echo "1";

                   ?> 
                <option value="<?php echo $c['categoryID']?>"><?php echo $c['categoryName'] ?></option>
                        <?php } ?>
            </select>
            <p><h5>2. CODE</h5></p>
            <input type="text" name="code" id="" class="form-control" placeholder="Fill the code of this Product">
            <p><h5>3. NAME PRODUCT</h5></p>
            <input type="text" name="productName" id="" class="form-control" placeholder="Fill the name of this Product">
            <p><h5>4. PRICE</h5></p>
            <!-- <input type="text" name="price" id="" class="form-control" placeholder="Fill the price of this Product"> -->
            <div class="input-group mb-3">
          <div class="input-group-prepend" >
         <span class="input-group-text" style="background-color: white;border-right: none;"><i class="fas fa-dollar-sign"></i></span>
          </div>
           <input name="price" type="text" class="form-control" style="border-left: none;" placeholder="Fill the price of this Product">
             </div>
             </div>
             <div class="col-sm-5 float-left">
             <p><h5>5. IMAGE</h5></p>
             <input type="file" name="inputimg" id=""></div></div>

             <input type="hidden" name="per_page" value="3">
             <input type="hidden" name="nopage" value="<?php echo $_GET['totalpages']?>">
             <div class="container-fluid" style="margin-top: 20px;"><center><button type="submit" name="submitadd" class="btn btn-success" style="margin:10px 0px;padding:10px 20px">Add Product</button>
             <a href="index.php" class="btn">Back to Product Manager</a></center>  </div>
            </form>
           

       
    </div>
        
    </div>






    </div>
</div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" ></script>
    <script type="text/javascript">
    	jQuery(document).ready(function(){
    		jQuery("#open-menu").click(function(){
    			if(jQuery('#page-container').hasClass('show-menu')){
    			jQuery("#page-container").removeClass('show-menu');
    		}
    			
    			else{
    			jQuery("#page-container").addClass('show-menu');
    			}
    		});
    	});
    </script>
  </body>
</html>

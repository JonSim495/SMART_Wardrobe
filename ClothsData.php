<!DOCTYPE html>
<html>
    <head>
    <title>Product registration page</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet" />
    <link href="css/bootstrap-theme.min.css" rel="stylesheet"/>
    <link href="css/main.css" rel="stylesheet"/>
    <!--HTML5 Shim and Respond.js IE8 support of HTML5
    elements and media queries-->
    <!-- WARNING: Respond.js doesn't work if you view the
    page via file:// -->
    <!--[if lt IE 9]>
    <script src="js/html5shiv.js"></script>
    <script src="js/respond.min.js"></script>
    <![endif]-->
   
    </head>
  <body>
        <?php 
        require_once('connect.php');
        ?>
		
	   <div class="container" id="form-container">
            
            <div class="row centered-form">
                <div class="col-xs-12 col-sm-8 col-md-8 col-sm-offset-2 col-md-offset-2">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h3 class="panel-title">Products</h3>
                        </div>
                        
                        <div class="panel-body">

 <table class="table table-bordered"> 
    <thead>
        <tr> 
            <th>#</th>
            <th>Image</th>
           
        </tr>
    </thead>
    <tbody> 
    <?php
$result = mysqli_query($conn, "select * from gallery");
$num_rows = mysqli_num_rows($result);//need not
if($num_rows > 0) {//need not
    $i=0;//need not
    while($rows=mysqli_fetch_assoc($result)) {
        $image_url = "image";
        $image_url .= !is_null($rows['image']) && strlen($rows['image']) > 0 ? $rows['image'] : 'no-image.jpeg'; //need not 
        ?>
             <tr>
                    <th scope="row"><?php echo ++$i;?></th>
                      <td>
                      <img src="<?php echo $image_url; ?>" class="thumbnail sm-image"/>
                      
                      </td>
                    
                  
            </tr>
        
        <?php
    }
}

?>
        
    </tbody>
</table>
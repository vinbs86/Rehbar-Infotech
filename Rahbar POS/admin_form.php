<?php
        session_start();
        if(isset($_SESSION['u_name']))
            $name=$_SESSION['u_name'];
		
		else
			header("location: rahbar_index_final.html");	
?>
<!doctype html>
<html>
<head>
	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Rahbrar Admin Form</title>
 
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Lato"  type="text/css">
    <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Montserrat"  type="text/css">    
    <style>
	body
	{
		font-family:Montserrat;	
	}
	.category-box
	{
		background:#ffffff;
	}
	.category-box-down
	{
		background:#ffffff;
	}
	.navbar-default
	{
		margin-bottom:0px;
	}
	.under_construction
	{
		width:40%;	
		margin:0 auto;
		text-align:center;
		margin-top:15%;
		line-height:6;
		background-color:grey;
		border-radius:10px;
		font-size
	}
    </style>
	<script src="js/jquery-2.1.4.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
	
</head>

<body>     	  
    <nav class="navbar navbar-default">
      <div class="container-fluid">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#">RahbarInfoTech</a>
        </div>
    
        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
          <ul class="nav navbar-nav">
            <li ><a href="#">Walk-in <span class="sr-only">(current)</span></a></li>
            <li><a href="#">Dine-in</a></li>
            <li><a href="#">CRM</a></li>
            <li><a href="#">Delivery Manager</a></li>
          </ul>
          
          <ul class="nav navbar-nav navbar-right">
            <li><a href="#"><?php echo $name;?></a></li>
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"> <span class="glyphicon glyphicon-tasks" aria-hidden="true"></span></a>
              <ul class="dropdown-menu">
                <li><a href="#">Control Panel</a></li>
                <li class="active"><a href="#">Setup</a></li>
                <li><a href="#">Profile</a></li>
                <li role="separator" class="divider"></li>
                <li><a href="logout.php">Logout</a></li>
              </ul>
            </li>
          </ul>
        </div><!-- /.navbar-collapse -->
      </div><!-- /.container-fluid -->
    </nav>
	<div>  
      <!-- Nav tabs -->
      <ul class="nav nav-tabs" role="tablist">
        <li role="presentation" class="active"><a href="#home" aria-controls="home" role="tab" data-toggle="tab">Company</a></li>
        <li role="presentation"><a href="#profile" aria-controls="profile" role="tab" data-toggle="tab">Locations</a></li>
        <li role="presentation"><a href="#menu" aria-controls="messages" role="tab" data-toggle="tab">Menu</a></li>
        <li role="presentation"><a href="#settings" aria-controls="settings" role="tab" data-toggle="tab">Inventory</a></li>
        <li role="presentation"><a href="#Staff" aria-controls="settings" role="tab" data-toggle="tab">Staff</a></li>
		<li role="presentation"><a href="#Global" aria-controls="settings" role="tab" data-toggle="tab">Global Settings</a></li>
      </ul> 
      <!-- Tab panes -->
      <div class="tab-content">
        <div role="tabpanel" class="tab-pane active" id="home">
		<div class="under_construction">PAGE UNDER CONSTRUCTION</div>
		
		</div>
		
		
		
		
		
        <div role="tabpanel" class="tab-pane" id="profile">
		<div class="under_construction">PAGE UNDER CONSTRUCTION</div>
		</div>
		
		
		
		
		
        <div role="tabpanel" class="tab-pane" id="menu">
			<div class="panel panel-default">
				<div class="panel-body">
					Category
				</div>
			</div>
			<div class="category-box col-md-12">
				<button data-toggle="modal" data-target="#form_categories" type="button" class="btn btn-primary" style="width:10%;">Add a category</button>
			</div>
		    <!-------------- modal for category ----------------->
			<div class="modal fade" id="form_categories" tabindex="-1" role="dialog" aria-labelledby="myModalLable">
				<div class="modal-dialog modal-lg" role="document">
					<div class="modal-content">
						<div class="modal-header">
							<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
							<h1 class="text-center">Registration Form</h1>
							<div class="alert alert-warning text-center">
								Please fill the form carefully.
							</div>
						</div>
						<div class="modal-body">
							<form class="form-horizontal" role="form" method="POST" action="enter_category.php">                        
								<div class="form-group">
									<label for="cat" class="control-label col-md-2">Category</label>
									<div class="col-md-6">
										<input type="text" name="category" class="form-control">
									</div>
								</div>
							<div class="form-group">
								<label for="st_time" class="control-label col-md-2">Start Time</label>
								<div class="col-md-6">
									<input type="number" name="st_time" class="form-control">
								</div>
							</div>								
							<div class="form-group">
								<label for="ed_time" class="control-label col-md-2">End Time</label>
								<div class="col-md-6">
									<input type="number" name="ed_time" class="form-control">
								</div>
							</div>
							<div class="form-group">
								<label for="cat" class="control-label col-md-2">Monday Visibility</label>
								<div class="col-md-6">
									<div class="checkbox">
										<div>
											<label class="radio-inline">
												<input type="radio" name="monday" value="1">Yes
											</label>
											<label class="radio-inline">
												<input type="radio" name="monday" value="0">No
											</label>
										</div>
									</div>
								</div>	
							</div>
							<div class="form-group">
								<label for="cat" class="control-label col-md-2">Tuesday Visibility</label>
								<div class="col-md-6">
									<div class="checkbox">
										<div>
											<label class="radio-inline">
												<input type="radio" name="tuesday" value="1">yes
											</label>
											<label class="radio-inline">
												<input type="radio" name="tuesday" value="0">no
											</label>
										</div>
									</div>
								</div>	
							</div>
							<div class="form-group">
								<label for="cat" class="control-label col-md-2">Wednesday Visibility</label>
								<div class="col-md-6">
									<div class="checkbox">
										<div>
											<label class="radio-inline">
												<input type="radio" name="wednesday" value="1">yes
											</label>
											<label class="radio-inline">
												<input type="radio" name="wednesday" value="0">no
											</label>
										</div>
									</div>
								</div>	
							</div>
							<div class="form-group">
								<label for="cat" class="control-label col-md-2">Thrusday Visibility</label>
								<div class="col-md-6">
									<div class="checkbox">
										<div>
											<label class="radio-inline">
												<input type="radio" name="thrusday" value="1">yes
											</label>
											<label class="radio-inline">
												<input type="radio" name="thrusday" value="0">no
											</label>
										</div>
									</div>
								</div>	
							</div>
							<div class="form-group">
								<label for="cat" class="control-label col-md-2">Friday Visibility</label>
								<div class="col-md-6">
									<div class="checkbox">
										<div>
											<label class="radio-inline">
												<input type="radio" name="friday" value="1">yes
											</label>
											<label class="radio-inline">
												<input type="radio" name="friday" value="0">no
											</label>
										</div>
									</div>
								</div>	
							</div>
							<div class="form-group">
								<label for="cat" class="control-label col-md-2">Saturday Visibility</label>
								<div class="col-md-6">
									<div class="checkbox">
										<div>
											<label class="radio-inline">
												<input type="radio" name="saturday" value="1">yes
											</label>
											<label class="radio-inline">
												<input type="radio" name="saturday" value="0">no
											</label>
										</div>
									</div>
								</div>	
							</div>
							<div class="form-group">
								<label for="cat" class="control-label col-md-2">Sunday Visibility</label>
								<div class="col-md-6">
									<div class="checkbox">
										<div>
											<label class="radio-inline">
												<input type="radio" name="sunday" value="1">yes
											</label>
											<label class="radio-inline">
												<input type="radio" name="sunday" value="0">no
											</label>
										</div>
									</div>
								</div>	
							</div>
							<div class="form-group">
								<label for="cat" class="control-label col-md-2">VISIBILITY</label>
								<div class="col-md-6">
									<div class="checkbox">
										<div>
											<label class="radio-inline">
												<input type="radio" name="visibility" value="1">yes
											</label>
											<label class="radio-inline">
												<input type="radio" name="visibility" value="0">no
											</label>
										</div>
									</div>
								</div>	
							</div>
							<div class="form-group">
								<label for="st_date" class="control-label col-md-2">Start Date</label>
								<div class="col-md-6">
									<input type="text" name="st_date" class="form-control">
								</div>
							</div>								
							<div class="form-group">
								<label for="end_date" class="control-label col-md-2">End Date</label>
								<div class="col-md-6">
									<input type="text" name="ed_Date" class="form-control">
								</div>
							</div>								
								<div class="modal-footer">
									<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
									<button type="submit" class="btn btn-primary">Submit!</button>
								</div>
							</form>
						</div>
					</div>
				</div>
			</div>
    <!------------- end of modal for join ----------->
			<div class="category-box-down col-md-2">
			<ul class="list-group">
				<?php
					$conn = new mysqli("localhost","root","","c1");
					// Check connection
					if ($conn->connect_error) 
					{
						die("Connection failed: " . $conn->connect_error);
					}
					$sql = "SELECT cat_name from category_master";
					$result = mysqli_query($conn,$sql);
					if(($row =mysqli_fetch_array($result,MYSQLI_ASSOC)))
					{
						echo "<li class=list-group-item><a href=#>".$row["cat_name"]."</a></li>";
					while($row =mysqli_fetch_array($result,MYSQLI_ASSOC))
					{
						echo "<a href=#><li class=list-group-item>".$row["cat_name"]."</li></a>";
					}
					}
					else
						echo "<a href=#><li class=list-group-item>none</li></a>";
					
				?>
			</div>
			<button class="btn btn-primary" href="#Item_modal" data-toggle=modal data-target="#Item_modal" >Hello</button>
			    <!-------------- modal for item----------------->
    <div class="modal fade" id="Item_modal" tabindex="-1" role="dialog" aria-labelledby="myModalLable">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h1 class="text-center">Add Item</h1>
                </div>
                <div class="modal-body">
                    <form class="form-horizontal" role="form" method="POST" action="enter_item.php">
                        <div class="form-group">
                            <label for="name" class="control-label col-md-2">Name</label>
                            <div class="col-md-6">
                                <input type="text" name="name" class="form-control">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="ALT_UNIT_1" class="control-label col-md-2">ALT_UNIT_1</label>
                            <div class="col-md-6">
                                <input type="text" name="ALT_UNIT_1" class="form-control">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="ALT_UNIT_1" class="control-label col-md-2">ALT_UNIT_1_Price</label>
                            <div class="col-md-6">
                                <input type="number" name="ALT_UNIT_1_Price" value="ALT_UNIT_1_Price" class="form-control">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="ALT_UNIT_2" class="control-label col-md-2">ALT_UNIT_2</label>
                            <div class="col-md-6">
                                <input type="text" name="ALT_UNIT_2" class="form-control">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="ALT_UNIT_2" class="control-label col-md-2">ALT_UNIT_2_Price</label>
                            <div class="col-md-6">
                            	<input type="number" name="ALT_UNIT_2_Price" class="form-control">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="ALT_UNIT_3" class="control-label col-md-2">ALT_UNIT_3</label>
                            <div class="col-md-6">
                                <input type="text" name="ALT_UNIT_3" class="form-control">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="ALT_UNIT_3" class="control-label col-md-2">ALT_UNIT_3_Price</label>
                            <div class="col-md-6">
                            	<input type="number" name="ALT_UNIT_3_Price" class="form-control">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="barcode" class="control-label col-md-2">Barcode</label>
                            <div class="col-md-6">
                            	<input type="number" name="Barcode" class="form-control">
                            </div>
                        </div>
                        <div class="form-group">
								<label for="cat" class="control-label col-md-2">Monday Visibility</label>
								<div class="col-md-6">
									<div class="checkbox">
										<div>
											<label class="radio-inline">
												<input type="radio" name="monday" value="1">Yes
											</label>
											<label class="radio-inline">
												<input type="radio" name="monday" value="0">No
											</label>
										</div>
									</div>
								</div>	
							</div>
							<div class="form-group">
								<label for="cat" class="control-label col-md-2">Tuesday Visibility</label>
								<div class="col-md-6">
									<div class="checkbox">
										<div>
											<label class="radio-inline">
												<input type="radio" name="tuesday" value="1">yes
											</label>
											<label class="radio-inline">
												<input type="radio" name="tuesday" value="0">no
											</label>
										</div>
									</div>
								</div>	
							</div>
							<div class="form-group">
								<label for="cat" class="control-label col-md-2">Wednesday Visibility</label>
								<div class="col-md-6">
									<div class="checkbox">
										<div>
											<label class="radio-inline">
												<input type="radio" name="wednesday" value="1">yes
											</label>
											<label class="radio-inline">
												<input type="radio" name="wednesday" value="0">no
											</label>
										</div>
									</div>
								</div>	
							</div>
							<div class="form-group">
								<label for="cat" class="control-label col-md-2">Thrusday Visibility</label>
								<div class="col-md-6">
									<div class="checkbox">
										<div>
											<label class="radio-inline">
												<input type="radio" name="thrusday" value="1">yes
											</label>
											<label class="radio-inline">
												<input type="radio" name="thrusday" value="0">no
											</label>
										</div>
									</div>
								</div>	
							</div>
							<div class="form-group">
								<label for="cat" class="control-label col-md-2">Friday Visibility</label>
								<div class="col-md-6">
									<div class="checkbox">
										<div>
											<label class="radio-inline">
												<input type="radio" name="friday" value="1">yes
											</label>
											<label class="radio-inline">
												<input type="radio" name="friday" value="0">no
											</label>
										</div>
									</div>
								</div>	
							</div>
							<div class="form-group">
								<label for="cat" class="control-label col-md-2">Saturday Visibility</label>
								<div class="col-md-6">
									<div class="checkbox">
										<div>
											<label class="radio-inline">
												<input type="radio" name="saturday" value="1">yes
											</label>
											<label class="radio-inline">
												<input type="radio" name="saturday" value="0">no
											</label>
										</div>
									</div>
								</div>	
							</div>
							<div class="form-group">
								<label for="cat" class="control-label col-md-2">Sunday Visibility</label>
								<div class="col-md-6">
									<div class="checkbox">
										<div>
											<label class="radio-inline">
												<input type="radio" name="sunday" value="1">yes
											</label>
											<label class="radio-inline">
												<input type="radio" name="sunday" value="0">no
											</label>
										</div>
									</div>
								</div>	
							</div>
                        <div class="form-group">
                            <label for="Default_price" class="control-label col-md-2">Default Price</label>
                            <div class="col-md-6">
                            	<input type="number" name="Default_price" class="form-control">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="Discount" class="control-label col-md-2">Discount</label>
                            <div class="col-md-6">
                            	<label class="radio-inline">
                                  <input type="radio" name="Discount" id="inlineRadio1" value="1">Yes
                                </label>
                                <label class="radio-inline">
                                  <input type="radio" name="Discount" id="inlineRadio2" value="0">No
                                </label>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="Start_Time" class="control-label col-md-2">Start Time</label>
                            <div class="col-md-6">
                            	<input type="number" name="Start_Time" class="form-control">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="End_Time" class="control-label col-md-2">End Time</label>
                            <div class="col-md-6">
                            	<input type="number" name="End_Time" class="form-control">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="Packaging_Charges" class="control-label col-md-2">Packaging Charges</label>
                            <div class="col-md-6">
                            	<input type="number" name="Packaging_Charges" class="form-control">
                            </div>
                        </div>
						<div class="form-group">
								<label for="st_date" class="control-label col-md-2">Start Date</label>
								<div class="col-md-6">
									<input type="text" name="st_date" class="form-control">
								</div>
							</div>								
							<div class="form-group">
								<label for="end_date" class="control-label col-md-2">End Date</label>
								<div class="col-md-6">
									<input type="text" name="ed_date" class="form-control">
								</div>
							</div>
                        <div class="form-group">
                            <label for="Visibilty" class="control-label col-md-2">Visibilty</label>
                            <div class="col-md-6">
                            	<label class="radio-inline">
                                  <input type="radio" name="Visibility" id="Visibilty_yes" value="Visibilty_yes">Yes
                                </label>
                                <label class="radio-inline">
                                  <input type="radio" name="Visibility" id="Visibilty_no" value="Visibilty_no">No
                                </label>
                            </div>
                        </div>
                        <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Submit!</button>
                </div>
                    </form>
                </div>
                
            </div>
        </div>
    </div>
    <!------------- end of modal for item ----------->


		</div>
		
		
		
		
		
        <div role="tabpanel" class="tab-pane" id="settings">
		<div class="under_construction">PAGE UNDER CONSTRUCTION</div>
		</div>
		
		
		
		
		
		<div role="tabpanel" class="tab-pane" id="Staff">
		<div class="under_construction">PAGE UNDER CONSTRUCTION</div>
		</div>
		
		
		
		
		
		<div role="tabpanel" class="tab-pane" id="Global">
		<div class="under_construction">PAGE UNDER CONSTRUCTION</div>
		</div>
		
		
		
		
		
		
      </div>
    </div> 
	
</body>
</html>

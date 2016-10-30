<?php
session_start();
include_once 'dbconnect.php';
?>
<!DOCTYPE html>
<html>
 <title>Bootstrap Case</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="./css/bootstrap.min.css">
  <script src="./jquery/jquery.min.js"></script>
  <script src="./js/bootstrap.min.js"></script>
  <script src="./tinymce/js/tinymce/tinymce.min.js"></script>
  <script>tinymce.init({ selector:'textarea', language: 'de',plugins: "textcolor colorpicker"  });</script>
</head>
<body>
    <div id="wrapper">
        
        
<nav class="navbar navbar-default" role="navigation">
	<div class="container-fluid">
		<div class="navbar-header">
			<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar1">
				<span class="sr-only">Toggle navigation</span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</button>
			<a class="navbar-brand" href="index.php"> System</a>
		</div>
             
                   
		<div class="collapse navbar-collapse" id="navbar1">
			<ul class="nav navbar-nav navbar-right">
				<?php if (isset($_SESSION['usr_id'])) { ?>
				<li><p class="navbar-text">Signed in as <?php echo $_SESSION['usr_name']; ?></p></li>
				<li><a href="logout.php">Log Out</a></li>
				
<!--                               Hier kann man das System Menü einbauen    -->
                                         
                                    
                                    
                                    <?php } else { ?>
				<li><a href="login.php">Login</a></li>
				<li><a href="register.php">Sign Up</a></li>
				<?php } ?>
			</ul>
		</div>
            
	</div>
</nav>
  <div class="container-fluid">
	<div class="col-sm-2">
    <nav class="nav-sidebar ">
		<ul class="nav tabs">
          <li class="active"><a href="#tab1" data-toggle="tab">Lorem ipsum</a></li>
          <li class=""><a href="#tab2" data-toggle="tab">Dolor asit amet</a></li>
          <li class=""><a href="#tab3" data-toggle="tab">Stet clita</a></li>                               
		</ul>
	</nav>
		<div><h2 class="add">Place for your add!</h2></div>
</div>
<!-- tab content -->
<div class="tab-content">
<div class="tab-pane active text-style" id="tab1">
  <h2>Posteingang</h2>
  <iframe src="test13.php" width="80%" height="500">
  <p>Your browser does not support iframes.</p>
</iframe>
       <hr>
      <img src="http://placehold.it/350x250" class="img-rounded pull-right">  
      <a src='test13.php'>xx</a>
</div>
<div class="tab-pane text-style" id="tab2">
  <h2>Dolor asit amet</h2>
   <p>Dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt 
    ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo 
    dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. 
    Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore 
    et dolore magna aliquyam erat, sed diam voluptua.</p>
    <hr>
          <img src="http://placehold.it/150x90" class="img-rounded pull-left">
</div>
<div class="tab-pane text-style" id="tab3">
  <h2>Stet clita</h2>
<!-- /.col-lg-6 -->
<div id="wrapper">
    <div id="page-wrapper" style="min-height: 499px;">
    <div class="row">
<!--        <div class="col-md-8">
            <p>Hier kann man einem anderen element hinzufügen</p>
        </div>-->   
<!--                    <div class="col-md-8">
                    <textarea>Easy! You should check out MoxieManager!</textarea>
                    </div>-->
    <div class="col-md-6">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Pill Tabs
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <!-- Nav tabs -->
                            <ul class="nav nav-pills">
                                <li class="active"><a data-toggle="tab" href="#home-pills">Home</a>
                                </li>
                                <li><a data-toggle="tab" href="#profile-pills">Profile</a>
                                </li>
                                <li><a data-toggle="tab" href="#messages-pills">Messages</a>
                                </li>
                                <li><a data-toggle="tab" href="#settings-pills">Settings</a>
                                </li>
                            </ul>

                            <!-- Tab panes -->
                            <div class="tab-content">
                                <div id="home-pills" class="tab-pane fade in active">
                                    <h4>Home Tab</h4>
                                    <textarea>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</textarea>
                                   
                                </div>
                                <div id="profile-pills" class="tab-pane fade">
                                    <h4>Profile Tab</h4>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                                </div>
                                <div id="messages-pills" class="tab-pane fade">
                                    <h4>Messages Tab</h4>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                                </div>
                                <div id="settings-pills" class="tab-pane fade">
                                    <h4>Settings Tab</h4>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                                </div>
                            </div>
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                </div>
                <!-- /.col-lg-6 -->
               
    </div>
            
    <hr>
<!--    <div class="col-xs-6 col-md-3">
      <img src="http://placehold.it/150x150" class="img-rounded pull-right">
  </div>-->
                        <div class="container">
                                    <div class="row">
                                          <div class="col-md-5">
                                              <label class="control-label">Select File</label>
                                              <input id="input-1a" type="file" class="file" data-show-preview="false">
                                        </div>

                                             <div class="col-md-4">
                                              <label class="control-label">Select File</label>
                                              <input type="file" class="filestyle" data-size="sm">
                                              </div>



                                    </div>
                            </div >
    </div>
    </div> 
                        </div>
                        <!-- /.ende tab3 -->
        
        <!-- /.ende tabcontent Linke Menü -->
        </div>
  
<script src="js/jquery-1.10.2.js"></script>
<script src="js/bootstrap.min.js"></script>

</div>

                       
        
       

</div>
</body>
<script>$(":file").filestyle({size: "sm"});</script>
</html>


<?php
//index.php

?>

<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8"> <![endif]-->
<!--[if !IE]><!-->
<html lang="en">
<!--<![endif]-->
<head>
	<meta charset="utf-8" />
	<title>Gov.ph Sys Forum | An open forum about Philippine Government Systems</title>
	<meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" name="viewport" />
	<meta content="" name="description" />
	<meta content="" name="author" />
	
	<!-- ================== BEGIN BASE CSS STYLE ================== -->
	<link href="http://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet" />
	<link href="../assets/plugins/bootstrap3/css/bootstrap.min.css" rel="stylesheet" />
	<link href="../assets/plugins/font-awesome/css/font-awesome.min.css" rel="stylesheet" />
	<link href="../assets/plugins/animate/animate.min.css" rel="stylesheet" />
	<link href="../assets/css/forum/style.min.css" rel="stylesheet" />
	<link href="../assets/css/forum/style-responsive.min.css" rel="stylesheet" />
<!-- 	<link href="../assets/css/forum/theme/default.css" id="theme" rel="stylesheet" /> -->
    <link href="../assets/css/forum/theme/red.css" rel="stylesheet" />
	<!-- ================== END BASE CSS STYLE ================== -->
	
	<!-- ================== BEGIN BASE JS ================== -->
	<script src="../assets/plugins/pace/pace.min.js"></script>
	<!-- ================== END BASE JS ================== -->
</head>
<body>
    <!-- begin #header -->
    <div id="header" class="header navbar navbar-default navbar-fixed-top">
        <!-- begin container -->
        <div class="container">
            <!-- begin navbar-header -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#header-navbar">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a href="index.php" class="navbar-brand">
                    <span class="navbar-logo"></span>
                    <span class="brand-text">
                        Gov.ph Sys Forum
                    </span>
                </a>
            </div>
            <!-- end navbar-header -->
            <!-- begin #header-navbar -->
            <div class="collapse navbar-collapse" id="header-navbar">
               <!--  <ul class="nav navbar-nav navbar-right">
					<li>
						<form class="navbar-form">
							<div class="form-group">
								<input type="text" class="form-control" placeholder="Enter Keywords..." />
								<button type="submit" class="btn btn-search"><i class="fa fa-search"></i></button>
							</div>
						</form>
					</li>
                    <li><a href="javascript:;">Create Account</a></li>
                    <li><a href="javascript:;">Sign In</a></li>
                </ul> -->
            </div>
            <!-- end #header-navbar -->
        </div>
        <!-- end container -->
    </div>
    <!-- end #header -->
    
    <!-- begin search-banner -->
    <div class="search-banner has-bg">
        <!-- begin bg-cover -->
        <div class="bg-cover">
            <img src="../assets/img/cover/cover-1.jpg" alt="" />
        </div>
        <!-- end bg-cover -->
        <!-- begin container -->



         
        <div class="container">
            <h1>1,293 Discussions</h1>
            <div class="input-group m-b-20">
                <input type="text" class="form-control input-lg" placeholder="Search the forums" />
                <span class="input-group-btn">
                    <button class="btn btn-lg"><i class="fa fa-search"></i></button>
                </span>
            </div>
            <h5>Browse by Categories</h5>
            <ul class="popular-tags">
                <li><a href="#"><i class="fa fa-circle text-danger"></i> eNGAS</a></li>
                <li><a href="#"><i class="fa fa-circle text-primary"></i> eBudget</a></li>
                <li><a href="#"><i class="fa fa-circle text-warning"></i> AFRS</a></li>
                <li><a href="#"><i class="fa fa-circle"></i> BTMS</a></li>
                <li><a href="#"><i class="fa fa-circle text-success"></i> DBM</a></li>
                <li><a href="#"><i class="fa fa-circle text-muted"></i> PFMAT</a></li>
                <li><a href="#"><i class="fa fa-circle text-muted"></i> PFMAT</a></li>
                <li><a href="#"><i class="fa fa-circle text-purple"></i> iHOMIS</a></li>
            </ul>
        </div>
        <!-- end container -->
    </div>
    <!-- end search-banner -->
    
       <!-- foreign start -->
                <br />
                        <div id="display_comment" style="margin-right: 100px; margin-left: 100px;"></div>
                    <br />
                      <h2 align="center">Start a Discussion!</a></h2>
                      <br />
                <div class="container">
                    <form method="POST" id="comment_form">
                        <div class="form-group">
                         <input type="text" name="comment_name" id="comment_name" class="form-control" placeholder="Enter Name" />
                        </div>
                        <div class="form-group">
                         <textarea name="comment_content" id="comment_content" class="form-control" placeholder="Enter Comment" rows="5"></textarea>
                        </div>
                        <div class="form-group">
                        <span id="comment_message"></span>
                        <br />  
                         <input type="hidden" name="comment_id" id="comment_id" value="0" />
                         <input type="submit" name="submit" id="submit" class="btn btn-primary" value="Submit" />
                        
                        </div>
                    </form>
                </div>
      
                            
            <!-- foreign ends -->


    <!-- begin content -->
    
    <!-- end content -->
    
    <!-- begin #footer -->
    <div id="footer" class="footer">
        <!-- begin container -->
        <div class="container">
            <!-- begin row -->
            <div class="row">
                <!-- begin col-4 -->
                <div class="col-md-4">
                    <!-- begin section-container -->
                    <div class="section-container">
                        <h4>Gov.ph Sys Forum </h4>
                        <p>
                            An open forum about Philippine Government Systems.
                        </p>
                    </div>
                    <!-- end section-container -->
                </div>
                <!-- end col-4 -->
                <!-- begin col-4 -->
                <div class="col-md-4">
                    <!-- begin section-container -->
                    
                    <!-- end section-container -->
                </div>
                <!-- end col-4 -->
                <!-- begin col-4 -->
                <div class="col-md-4">
                    <!-- begin section-container -->
                    
                    <!-- end section-container -->
                </div>
                <!-- end col-4 -->
            </div>
            <!-- end row -->
        </div>
        <!-- end container -->
    </div>
    <!-- end #footer -->
    <!-- begin #footer-copyright -->
    <div id="footer-copyright" class="footer-copyright">
        <div class="container">
            &copy; 2014 - 2017 SeanTheme All Right Reserved
            <!-- <a href="#">Contact Us</a> 
            <a href="#">Knowledge Base</a> -->
        </div>
    </div>
    <!-- end #footer-copyright -->
    <!-- begin theme-panel -->
    <!-- <div class="theme-panel">
        <a href="javascript:;" data-click="theme-panel-expand" class="theme-collapse-btn"><i class="fa fa-cog"></i></a>
        <div class="theme-panel-content">
            <ul class="theme-list clearfix">
                <li><a href="javascript:;" class="bg-purple" data-theme="purple" data-theme-file="../assets/css/forum/theme/purple.css" data-click="theme-selector" data-toggle="tooltip" data-trigger="hover" data-container="body" data-title="Purple">&nbsp;</a></li>
                <li><a href="javascript:;" class="bg-blue" data-theme="blue" data-theme-file="../assets/css/forum/theme/blue.css" data-click="theme-selector" data-toggle="tooltip" data-trigger="hover" data-container="body" data-title="Blue">&nbsp;</a></li>
                <li class="active"><a href="javascript:;" class="bg-green" data-theme-file="../assets/css/forum/theme/default.css" data-theme="default" data-click="theme-selector" data-toggle="tooltip" data-trigger="hover" data-container="body" data-title="Default">&nbsp;</a></li>
                <li><a href="javascript:;" class="bg-orange" data-theme="orange" data-theme-file="../assets/css/forum/theme/orange.css" data-click="theme-selector" data-toggle="tooltip" data-trigger="hover" data-container="body" data-title="Orange">&nbsp;</a></li>
                <li><a href="javascript:;" class="bg-red" data-theme="red" data-theme-file="../assets/css/forum/theme/red.css" data-click="theme-selector" data-toggle="tooltip" data-trigger="hover" data-container="body" data-title="Red">&nbsp;</a></li>
            </ul>
        </div>
    </div> -->
    <!-- end theme-panel -->
	
	<!-- ================== BEGIN BASE JS ================== -->
	<script src="../assets/plugins/jquery/jquery-3.2.1.min.js"></script>
	<script src="../assets/plugins/bootstrap3/js/bootstrap.min.js"></script>
	<!--[if lt IE 9]>
		<script src="assets/crossbrowserjs/html5shiv.js"></script>
		<script src="assets/crossbrowserjs/respond.min.js"></script>
		<script src="assets/crossbrowserjs/excanvas.min.js"></script>
	<![endif]-->
	<script src="../assets/plugins/js-cookie/js.cookie.js"></script>
	<script src="../assets/js/forum/apps.min.js"></script>
	<!-- ================== END BASE JS ================== -->
	
	<script>    
	    $(document).ready(function() {
	        App.init();
	    });
	</script>
</body>
</html>

<script>
                            $(document).ready(function(){
                             
                             $('#comment_form').on('submit', function(event){
                              event.preventDefault();
                              var form_data = $(this).serialize();
                              $.ajax({
                               url:"add_comment.php",
                               method:"POST",
                               data:form_data,
                               dataType:"JSON",
                               success:function(data)
                               {
                                if(data.error != '')
                                {
                                 $('#comment_form')[0].reset();
                                 $('#comment_message').html(data.error);
                                 $('#comment_id').val('0');
                                 load_comment();
                                }
                               }
                              })
                             });

                             load_comment();

                             function load_comment()
                             {
                              $.ajax({
                               url:"fetch_comment.php",
                               method:"POST",
                               success:function(data)
                               {
                                $('#display_comment').html(data);
                               }
                              })
                             }

                             $(document).on('click', '.reply', function(){
                              var comment_id = $(this).attr("id");
                              $('#comment_id').val(comment_id);
                              $('#comment_name').focus();
                             });
                             
                            });
                            </script>

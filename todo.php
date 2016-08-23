<!DOCTYPE html>
<html ng-app="app">
	<head>
		<title>TODO</title>
		<meta charset="utf-8"> 
		<meta name="viewport" content="width=device-width, initial-scale=1">
	
		<!------CSS START------>
			<link rel="stylesheet" href="css/bootstrap.min.css">
			<link rel="stylesheet" href="css/bootstrap-datepicker3.min.css">
			<link rel="stylesheet" href="fonts/font-awesome-4.5.0/css/font-awesome.min.css">
			<link rel="stylesheet" href="css/animate.css">
			<link rel="stylesheet" type="text/css" href="css/demo.css" />
			<link rel="stylesheet" type="text/css" href="css/style.css" />
			<link rel="stylesheet" type="text/css" href="css/todo.css" />
			<link href="css/jquery.bxslider.css" rel="stylesheet" type="text/css" />
		<!----CSS ENDS------->
		
		<!-----JS START-------->
			<script src="js/jquery.min.js"></script>
			<script src="js/bootstrap.min.js"></script>
			<script src="http://ajax.googleapis.com/ajax/libs/angularjs/1.4.8/angular.min.js"></script>
			<script type="text/javascript" src="js/jquery.eislideshow.js"></script>
			<script type="text/javascript" src="js/jquery.easing.1.3.js"></script>
			<script src="js/main1.js"></script>
			<script src="js/bootstrap-datepicker.min.js"></script>
			<script src="js/jquery.bxslider.min.js" type="text/javascript"></script>
			
			<script>
				app=angular.module('app', []);
				app.controller('myCtrl', function($scope){
					$scope.myData=[];
					$scope.addData= function(){
						$scope.myData.push([$scope.inData,$scope.outData,$scope.date]); 	
						$scope.inData='';
						$scope.outData='';
						$scope.date='';
						
					}
					
					$scope.removeData=function(selData){
						$scope.myData.splice($scope.myData.indexOf(selData),1);
					}
					
				});
			
			</script>
			<script type="text/javascript">
				$(function() {
					$('#ei-slider').eislideshow({
						animation			: 'center',
						autoplay			: true,
						slideshow_interval	: 3000,
						titlesFactor		: 0
					});
				});
			</script>
			<script type="text/javascript">
		         $(document).ready(function () {           
		             $('.bxslider').bxSlider({
		                 mode: 'vertical',
		                 slideMargin: 3,
		                 auto:true
		             });             
		         });
		    </script>
		<!-------JS ENDS------>
		 <script type="text/javascript">
            $(function () {
                $('#datetimepicker1').datepicker();
            });
        </script>
		

		
		
	</head>
	<body>
		<div class="container-fluid">
			<div class="row">
				<div class="col-md-2 contenttodo">
					<div class="row">
						<div class="col-md-12 text-center sidecontent">
							<h4>TODO</h4>
						</div>
					</div>
					<div class="row">
						<div class="col-md-12 sidecontent1">
							<div class="row">
								<div class="col-md-6">
									<a href="#" class="animated rollIn" data-toggle="dropdown"><img src="image/avatar.jpg" class="img-circle thumb">
									<span class="caret caret-white careticon"></span></a>
									<ul class="dropdown-menu m-t-sm animated fadeInLeft" style="margin-left:11px;"> 
										<span class="arrow top"></span> 
											<li><a href="#">Settings</a></li> 
											<li><a href="profile.html">Profile</a></li> 
											<li><a href="#"> <span class="badge bg-danger pull-right" style="background-color: red;">3</span> Notifications</a></li> 
											<li class="divider"></li>
											<li><a href="docs.html">Help</a></li> 
											<li><a href="signin.html">Logout</a></li> 
									</ul>
									<div class="nav-msg"> 
										<a href="#" class="dropdown-toggle" data-toggle="dropdown"> 
											<b class="badge badge-white count-n">2</b> 
										</a> 
										<section class="dropdown-menu m-l-sm pull-left animated fadeInRight"> 
											<div class="arrow left"></div> 
												<section class="panel bg-white"> 
													<header class="panel-heading" style="border-bottom: 1px solid #000;"> 
														<strong>You have <span class="count-n">2</span> notifications</strong> 
													</header> 
													<div class="list-group"> 
														<a href="#" class="media list-group-item"> 
															<span class="pull-left thumb-sm"> 
																<img src="image/avatar.jpg" alt="John said" class="img-circle thumb1"> 
															</span> 
															<span class="media-body block m-b-none"> Use awesome animate.css<br> 
																<small class="text-muted">28 Aug 13</small> 
															</span> 
														</a> 
														<a href="#" class="media list-group-item"> 
															<span class="media-body block m-b-none"> 1.0 initial released<br> 
																<small class="text-muted">27 Aug 13</small> 
															</span> 
														</a> 
													</div> 
													<footer class="panel-footer text-sm"> 
														<a href="#" class="pull-right"><i class="fa fa-cog"></i></a> 
														<a href="#">See all the notifications</a> 
													</footer> 
												</section> 
										</section> 
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-md-12 homecontent">
							<h5 class="showSingle" target="1"><i class="fa fa-home">&nbsp;&nbsp;</i>Home</h5>
						</div>
					</div>
					<div class="row">
						<div class="col-md-12 homecontent">
							<h5 class="showSingle" target="2"><i class="fa fa-th-large">&nbsp;&nbsp;</i>Gallery</h5>
						</div>
					</div>
					<div class="row">
						<div class="col-md-12 homecontent">
							<h5 class="showSingle " target="3"><i class="fa fa-tasks">&nbsp;&nbsp;</i>Task</h5>
						</div>
					</div>
					<div class="row">
						<div class="col-md-12 homecontent">
							<h5 class="showSingle" target="4"><i class="fa fa-cubes">&nbsp;&nbsp;</i>Services</h5>
						</div>
					</div>
					<div class="row">
						<div class="col-md-12 homecontent">
							<h5 class="showSingle" target="5"><span class="glyphicon glyphicon-earphone">&nbsp;</span>Contact Us</h5>
						</div>
					</div>
					
					<div class="row">
						<div class="col-md-12 alert alert-default alertinfo">
							<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
							<strong>Hi!</strong> todo is best software app and its has great functionalities.
						</div>
					</div>
				</div>
				<div class="col-md-10 maincontent">
					<div class="row targetDiv" id="div1">
						<div class="col-md-12">
							<div class="row">
								<div class="col-md-12">
									<div id="ei-slider" class="ei-slider">
										<ul class="ei-slider-large">
											<li>
												<img src="images/large/banner6.jpg" alt="image06"/>
												<div class="ei-title">
													<h2>Passionate</h2>
													<h3>Seeker</h3>
												</div>
											</li>
											<li>
												<img src="images/large/banner7.jpg" alt="image01" />
												<div class="ei-title">
													<h2>Creative</h2>
													<h3>Software</h3>
												</div>
											</li>
											<li>
												<img src="images/large/banner5.jpg" alt="image02" />
												<div class="ei-title">
													<h2>Pure Andorid</h2>
													<h3>App </h3>
												</div>
											</li>
											<li>
												<img src="images/large/banner.jpg" alt="image03"/>
												<div class="ei-title">
													<h2>Lets Services</h2>
													<h3>Bike Runner</h3>
												</div>
											</li>
											<li>
												<img src="images/large/banner2.jpg" alt="image04"/>
												<div class="ei-title">
													<h2>Connecting</h2>
													<h3>Networks</h3>
												</div>
											</li>
											<li>
												<img src="images/large/banner8.jpg" alt="image05"/>
												<div class="ei-title">
													<h2>Real Time System</h2>
													<h3>Server</h3>
												</div>
											</li>
											<li>
												<img src="images/large/banner3.jpg" alt="image07"/>
												<div class="ei-title">
													<h2>Connecting</h2>
													<h3>Friend</h3>
												</div>
											</li>
										</ul><!-- ei-slider-large -->
										<ul class="ei-slider-thumbs">
											<li class="ei-slider-element">Current</li>
											<li><a href="#">Slide 6</a><img src="images/thumbs/banner6.jpg" alt="thumb06" /></li>
											<li><a href="#">Slide 1</a><img src="images/thumbs/banner7.jpg" alt="thumb01" /></li>
											<li><a href="#">Slide 2</a><img src="images/thumbs/banner5.jpg" alt="thumb02" /></li>
											<li><a href="#">Slide 3</a><img src="images/thumbs/banner.jpg" alt="thumb03" /></li>
											<li><a href="#">Slide 4</a><img src="images/thumbs/banner2.jpg" alt="thumb04" /></li>
											<li><a href="#">Slide 5</a><img src="images/thumbs/banner8.jpg" alt="thumb05" /></li>
											<li><a href="#">Slide 7</a><img src="images/thumbs/banner3.jpg" alt="thumb07" /></li>
										</ul><!-- ei-slider-thumbs -->
									</div><!-- ei-slider -->
								</div>
							</div>
							<br><br>
							<div class="row">
								<div class="col-md-4"></div>
								<div class="col-md-4 text-center">
									<h3 class="taskhead">OUR MISSION</h5>
								</div>
								<div class="col-md-4"></div>
							</div>
							<br>
							<div class="row">
								<div class="col-md-12 ourmission">
									<h5 class="ourmissioncontent">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. 
									</h5>
								
								</div>
							</div>
							<br><br><br>
							<div class="row">
								<div class="col-md-4"></div>
								<div class="col-md-4 text-center">
									<h3 class="taskhead">ABOUT US</h5>
								</div>
								<div class="col-md-4"></div>
							</div>
							<br>
							<div class="row">
								<div class="col-md-4">
									<h3 class="aboutus">WHO WE ARE</h3>
									<p class="aboutuscontent">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.</p>
								</div>
								<div class="col-md-4">
									<h3 class="aboutus">WHAT WE DO</h3>
									<p class="aboutuscontent">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.</p>
								</div>
								<div class="col-md-4">
									<h3  class="aboutus">WHY ARE WE HERE</h3>
									<p class="aboutuscontent">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.</p>
								</div>
							</div>
							<br><br><br>
							<div class="row">
								<div class="col-md-4"></div>
								<div class="col-md-4 text-center">
									<h3 class="taskhead">HISTROY</h5>
								</div>
								<div class="col-md-4"></div>
							</div>
							<br>
							<div class="row">
								<div class="col-md-12 histroy">
									<h5 class="histroycontent">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. 
									</h5>
								</div>
							</div>
							<br><br><br>
							<div class="row">
								<div class="col-md-4"></div>
								<div class="col-md-4 text-center">
									<h3 class="taskhead">TESTINOMIALS</h5>
								</div>
								<div class="col-md-4"></div>
							</div>
							<br>
							<div class="row">
								<div class="col-md-12 col-xs-12 text-center">
									<div style="width:70%;margin-left:166px;">
									  	<ul class="bxslider">
										   	<li>
												<p style="text-align:center;margin-left: 43%;"><img src="image/avatar.jpg" class="img-circle thumb10"></p>
												<h4 style="text-align:center;margin-left:0%;">John Smith</h4>  
										    	<blockquote class="testtag">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut non libero magna. Sed et quam lacus. Fusce condimentum eleifend enim a feugiat. Pellentesque viverra vehicula sem ut volutpat. Integer sed arcu massa.</blockquote>	
										    </li>
											<li>
												<p style="text-align:center;margin-left: 43%;"><img src="image/avatar.jpg" class="img-circle thumb10"></p>
												<h4 style="text-align:center;margin-left:0%;">David Warner</h4>  
												<blockquote class="testtag1">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut non libero magna. Sed et quam lacus. Fusce condimentum eleifend enim a feugiat. Pellentesque viverra vehicula sem ut volutpat. Integer sed arcu massa.</blockquote>
									  		</li>
									  		<li>
												<p style="text-align:center;margin-left: 43%;"><img src="image/avatar.jpg" class="img-circle thumb10"></p>
												<h4 style="text-align:center;margin-left:0%;">Justin Smith</h4>  
												<blockquote class="testtag2">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut non libero magna. Sed et quam lacus. Fusce condimentum eleifend enim a feugiat. Pellentesque viverra vehicula sem ut volutpat. Integer sed arcu massa.</blockquote>
											</li>
									  	</ul>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="row targetDiv" id="div3">
						<div class="col-md-12">
							<div class="row">
								<div class="col-md-5"></div>
								<div class="col-md-2 text-center">
									<h3 class="taskhead">TASK</h3>
								</div>
								<div class="col-md-5"></div>
							</div>
							<br>
							
									<ul class="nav nav-tabs contenttabs">
										<li class="active"><a data-toggle="tab" href="#addtask">Add Task</a></li>
										<li><a data-toggle="tab" href="#menu1">List of Task</a></li>
									</ul>
									<div ng-controller="myCtrl">
									<div class="tab-content">
										<div id="addtask" class="tab-pane fade in active">
											
												<form role="form">
													<div class="form-group col-md-12 formcontent">
														<div class="row">
															<div class="col-md-2"><label for="title">Title :</label></div>
															<div class="col-md-6"><input type="text" class="form-control title" placeholder="Enter the Tilte.." name="inData" ng-model="inData"></div>
														</div>
														<br>
														<div class="row">
															<div class="col-md-2"><label for="title">Description:</label></div>
															<div class="col-md-6"><textarea cols="3" rows="2" class="form-control description" placeholder="Enter the Description.." name="outData" ng-model="outData"></textarea></div>
														</div>
														<br>
														<div class="row">
															<div class="col-md-2"><label for="title">Date :</label></div>
															<div class="col-md-6">
																<div class='input-group date' id='datetimepicker1'>
																	<input type='text' class="form-control date" ng-model="date" name="date" />
																	<span class="input-group-addon">
																		<span class="glyphicon glyphicon-calendar"></span>
																	</span>
																</div>
															</div>
														</div>
														<br>
														<div class="row">
															<div class="col-md-2"></div>
															<div class="col-md-6 col-md-push-2">
																<button class="btn btn-success submitbtn" ng-click="addData()">ADD TASK</button>
															</div>
															<div class="col-md-2"></div>
														</div>
													</div>
												</form>
											
										</div>
										<div id="menu1" class="tab-pane fade">
											<table class="table" border="1">
												<tr>
													<th class="tablecontent">#</th>
													<th>Title Name</th>
													<th>Description</th>
													<th>Date</th>
													
												</tr>
												<tr ng-repeat="data in myData">
													<td>{{$index+1}}</td>
													<td>{{data[0]}}</td>
													<td>{{data[1]}}</td>
													<td>{{data[2]}}</td>
													<td><a href="#addtask" class="btn btn-tiny btn-success" ng-click="editData(data)" style="color:#fff;">Edit</a></td>
													<td><a href="#" class="btn btn-tiny btn-danger" ng-click="removeData(data)" style="color:#fff;">Remove</a></td>
													
												</tr>
											</table>
										</div>
									</div>
								</div>
						</div>
					</div>
					<br/>
					<div class="row targetDiv" id="div2">
						<div class="col-md-12">
							<div class="row">
								<div class="col-md-5"></div>
								<div class="col-md-2 text-center">
									<h3 class="taskhead">GALLERY</h3>
								</div>
								<div class="col-md-5"></div>
							</div>
							<br>
							<div class="row">
								<div class="col-sm-3 colgallery">
									<a href="#"><img src="image/bike1.jpg" class="galleryimage"></a>
									<h4 class="gallerytag">Harley Davidson</h4>
									<p class="contentgalleryimage">Harley-Davidson, Inc. (H-D), or Harley, is an American motorcycle manufacturer, founded in Milwaukee, Wisconsin in 1903.
                                      
									</P>
								</div>
								<div class="col-sm-3 colgallery">
									<a href="#"><img src="image/bike3.jpg" class="galleryimage"></a>
									<h4 class="gallerytag">Harley Davidson</h4>
									<p class="contentgalleryimage">Harley-Davidson, Inc. (H-D), or Harley, is an American motorcycle manufacturer, founded in Milwaukee, Wisconsin in 1903.
                                     
									</P>
								</div>
								<div class="col-sm-3 colgallery">
									<a href="#"><img src="image/bike5.jpg" class="galleryimage"></a>
									<h4 class="gallerytag">Harley Davidson</h4>
									<p  class="contentgalleryimage">Harley-Davidson, Inc. (H-D), or Harley, is an American motorcycle manufacturer, founded in Milwaukee, Wisconsin in 1903.
                                      
									</P>
								
								</div>
								<div class="col-sm-3 colgallery">
									<a href="#"><img src="image/bike4.jpg" class="galleryimage"></a>
									<h4 class="gallerytag">Harley Davidson</h4>
									<p class="contentgalleryimage" >Harley-Davidson, Inc. (H-D), or Harley, is an American motorcycle manufacturer, founded in Milwaukee, Wisconsin in 1903.
                                      
									</P>
								</div>
							</div>
							<br>
							<div class="row">
								<div class="col-sm-3 colgallery">
									<a href="#"><img src="image/bike1.jpg" class="galleryimage"></a>
									<h4 class="gallerytag">Harley Davidson</h4>
									<p  class="contentgalleryimage">Harley-Davidson, Inc. (H-D), or Harley, is an American motorcycle manufacturer, founded in Milwaukee, Wisconsin in 1903.
                                      
									</P>
								</div>
								<div class="col-sm-3 colgallery">
									<a href="#"><img src="image/bike3.jpg" class="galleryimage"></a>
									<h4 class="gallerytag">Harley Davidson</h4>
									<p  class="contentgalleryimage">Harley-Davidson, Inc. (H-D), or Harley, is an American motorcycle manufacturer, founded in Milwaukee, Wisconsin in 1903.
                                     
									</P>
								</div>
								<div class="col-sm-3 colgallery">
									<a href="#"><img src="image/bike5.jpg" class="galleryimage"></a>
									<h4 class="gallerytag">Harley Davidson</h4>
									<p>Harley-Davidson, Inc. (H-D), or Harley, is an American motorcycle manufacturer, founded in Milwaukee, Wisconsin in 1903.
                                      
									</P>
								
								</div>
								<div class="col-sm-3 colgallery">
									<a href="#"><img src="image/bike4.jpg" class="galleryimage"></a>
									<h4 class="gallerytag">Harley Davidson</h4>
									<p  class="contentgalleryimage">Harley-Davidson, Inc. (H-D), or Harley, is an American motorcycle manufacturer, founded in Milwaukee, Wisconsin in 1903.
                                      
									</P>
								</div>
								<br>
							</div>
							
						</div>
						
					</div>
					
					<div class="row targetDiv" id="div4">
						<div class="col-md-12">
							<div class="row">
								<div class="col-md-5"></div>
								<div class="col-md-2 text-center">
									<h3 class="taskhead">SERVICES</h3>
								</div>
								<div class="col-md-5"></div>
							</div>
							<br>
							<div class="row">
								<div class="col-md-4 text-center colgallery">
									<a href="#"><img src="image/andorid.jpg" class="services"></a>
									<h4>Andorid App</h4>
									<p class="servicestag">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
									
								</div>
								<div class="col-md-4 text-center colgallery">
									<a href="#"><img src="image/Software Development.jpg" class="services"></a>
									<h4>Software Development</h4>
									<p class="servicestag">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
								</div>
								<div class="col-md-4 text-center colgallery">
									<a href="#"><img src="image/serviceslogo.png" class="services1"></a>
									<h4>Bike Services</h4>
									<p class="servicestag">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
								</div>
							</div>
						</div>
					</div>
					<div class="row targetDiv" id="div5">
						<div class="col-md-12">
							<div class="row">
								<div class="col-md-5"></div>
								<div class="col-md-2 text-center">
									<h3 class="taskhead">CONTACT US</h3>
								</div>
								<div class="col-md-5"></div>
							</div>
							<br><br>
							<div class="row">
								<div class="col-md-3 col-md-push-1">
									<p>INDIA&nbsp;&nbsp;</p>
									<p><i class=" glyphicon glyphicon-map-marker"></i>&nbsp;Bangalore</p>  
									<p><i class=" glyphicon glyphicon-earphone"></i>&nbsp;+91&nbsp;9876543210</p>
									<p><i class=" glyphicon glyphicon-envelope"></i>&nbsp;info@todo.in</p>
									<p><i class=" glyphicon glyphicon-globe"></i>&nbsp;www.todo.in</p>
								</div>
								<div class="col-md-6 col-md-push-2">
									<div class="form">
										<form>
											<div class="input-group"> <span class="input-group-addon"> <span class="glyphicon glyphicon-user"></span></span>
											   <input type="text" name="name" class="form-control" placeholder="Name *" pattern="[a-zA-Z ']+" title="Name feild allow only characters." required="">
											</div>
											
											<div class="input-group contactTxtForm"> <span class="input-group-addon"> <span class="glyphicon glyphicon-envelope"></span></span>
											   <input type="text" name="email" class="form-control" placeholder="Email *" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$" required="">
											</div>
										   
											<div class="input-group contactTxtForm"> <span class="input-group-addon"><span class="glyphicon glyphicon-pencil"></span></span>
											   <input type="text" name="subject" class="form-control" placeholder="Subject" pattern="[a-zA-Z ']+" title="Subject feild allow only characters." required="">
											</div>
											
											<div class="input-group contactTxtForm"> <span class="input-group-addon"><span class="glyphicon glyphicon-comment"></span></span>
											   <textarea name="comment" class="form-control" placeholder="Comment *" required=""></textarea>                                
											</div>
											<br>
											<div class="input-group form-buttons"> <span class="input-group-btn">
											   <button class="btn btn-default" type="submit" value="Submit" name="submitf" id="submitf" style="width:120px;height:40px;"><i class="fa fa-envelope"></i> SEND</button>
											   </span>
											</div>
										</form>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>	
		</div>
		<br><br><br><br>
		<div class="panel footerPanel" style="background-color: rgba(14, 14, 14, 0.85); color:#fff; margin-bottom:1px;">
			<div class="panel-body text-center"><span class="touchTxt">Get In Touch</span>
				<br><br>
				<p>
					<span class="filter2 " data-filter="all" style="padding: 10px 16px;"><i class="fa fa-facebook"></i></span>
					<span class="filter2 " data-filter="all" style="padding: 10px 12px;"><i class="fa fa-twitter"></i></span>
					<span class="filter2 " data-filter="all" style="padding: 10px 9px;font-size: 18px;"><i class="fa fa-google-plus"></i></span>
					<span class="filter2 " data-filter="all" style="padding: 10px 15px;"><i class="fa fa-pinterest-p"></i></span>
				</p>
				<br>
				<p style="color: #fff;">COPYRIGHT TODO APP IN 2016. ALL RIGHTS RESERVED.</p>
				<br><br>
				<span id="top-link-block">
					<a href="#top" class="well-sm" onclick="$('html,body').animate({scrollTop:0},'slow');return false;">
						<img src="image/go.png" width="50px">
					</a>
				</span>
			</div>
		</div>
	</body>

      <div class="loader"></div>
      <div id="app">
         <section class="section">
            <div class="container mt-5">
               <div class="row">
                  <div class="col-12 col-md-10 offset-md-1 col-lg-10 offset-lg-1">
                     <div class="login-brand">
                        Video Platform
                     </div>
                     <div class="card card-primary">
                        <div class="row m-0">
                           <div class="col-12 col-md-12 col-lg-5 p-0">
                              <div class="card-header text-center">
                                 <h4>Login</h4>
                              </div>
                              <div class="card-body">
                              <form class="theme-form needs-validation" novalidate="" METHOD="POST" action="<?php base_url(); ?>selection" enctype="multipart/form-data">
                                    <div class="form-group floating-addon">
                                       <label>User Name</label>
                                       <div class="input-group">
                                          <div class="input-group-prepend">
                                             <div class="input-group-text">
                                                <i class="far fa-user"></i>
                                             </div>
                                          </div>
                                          <input id="email" required type="email" class="form-control" name="username" autofocus placeholder="UserName / Email">
                                       </div>
                                    </div>
                                    <div class="form-group floating-addon">
                                       <label>Password</label>
                                       <div class="input-group">
                                          <div class="input-group-prepend">
                                             <div class="input-group-text">
                                                <i class="fas fa-envelope"></i>
                                             </div>
                                          </div>
                                          <input id="password" required type="password" class="form-control" name="password" placeholder="Password">
                                       </div>
                                    </div>
                                    <div class="form-group text-right">
                                       <a href="dashboard.html">
										   <button type="submit" class="btn btn-round btn-lg btn-primary"> Login
                                       	   </button>
									   </a>
                                    </div>
                                    <span style="color:red">  
                    <?php echo 	$this->session->flashdata('error');  ?>
                    </span>
                              </form>
                              </div>
                           </div>
                           <div class="col-12 col-md-12 col-lg-7 p-0">
                              <div class="contact-map">
								  <img src="<?php echo base_url(); ?>assets/images/5thdt_logo.jpeg" class="img-fluid" alt="" />
							  </div>
                           </div>
                        </div>
                     </div>
                     <div class="simple-footer">
                        Copyright &copy; 5TH Dimension Technologies <span id="year"></span>
                     </div>
                  </div>
               </div>
            </div>
         </section>
      </div>
      <!-- General JS Scripts -->
      <script src="<?php echo base_url(); ?>assets/js/app.min.js"></script>
      <!-- JS Libraies -->
      <script src="http://maps.google.com/maps/api/js?key=AIzaSyB55Np3_WsZwUQ9NS7DP-HnneleZLYZDNw&amp;sensor=true"></script>
      <script src="<?php echo base_url(); ?>assets/bundles/gmaps.js"></script>
      <!-- Page Specific JS File -->
      <script src="<?php echo base_url(); ?>assets/js/page/contact.js"></script>
      <!-- Template JS File -->
      <script src="<?php echo base_url(); ?>assets/js/scripts.js"></script>
      <!-- Custom JS File -->
      <script src="<?php echo base_url(); ?>assets/js/custom.js"></script>
	  <script type="text/javascript">
		  document.getElementById("year").innerHTML = new Date().getFullYear();
	  </script> 
   </body>
</html>
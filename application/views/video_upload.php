   <!-- Main Content -->
   <div class="main-content">
               <section class="section">
                  <div class="row">
					  <div class="col-12">
						 <div class="card">
							 <div class="card-header">
								 <h4>Upload Videos</h4>
                                 <br>
                                 <span style="color:red">  
                    <?php echo 	$this->session->flashdata('errors');  ?>
                    </span>
							 </div>
                             <form class="theme-form needs-validation" novalidate="" METHOD="post" action="<?php base_url(); ?> upload_video" enctype="multipart/form-data">
							 <div class="card-body">
								 <div class="form-group row mb-4">
                                    <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Video Title</label>
                                    <div class="col-sm-12 col-md-7">
                                       <input type="text" class="form-control" placeholder="Enter Video Title" name="title" required>
                                    </div>
                                 </div>
								 <div class="form-group row mb-4">
                                    <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Select Class</label>
                                    <div class="col-sm-12 col-md-7">
                                       <select class="form-control selectric" name="class" required>
                                          <option value="0">--- Please Select Your Class ---</option>
										
                                          <?php  
         foreach ($h->result() as $row)  
         {  

		
            ?>
                                          <option value="<?php echo $row->id;?>^<?php echo $row->name;?>"> <?php echo $row->name;?></option> 
                                   <?php } ?>
                                       </select>
                                    </div>
                                 </div>
								 <div class="form-group row mb-4">
                                    <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Select Subject</label>
                                    <div class="col-sm-12 col-md-7">
                                       <select class="form-control selectric" name="subject" required>
                                          <option>--- Please Select Your Subject ---</option>
                                          <?php  
         foreach ($z->result() as $row)  
         {  

		
            ?>
                                          <option value="<?php echo $row->id;?>^<?php echo $row->name;?>"> <?php echo $row->name;?></option> 
                                   <?php } ?>
                                       </select>
                                    </div>
                                 </div>
								 <div class="form-group row mb-4">
                                    <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Video Title</label>
                                    <div class="col-sm-12 col-md-7 dropzone" id="mydropzone">
                                       <input type="file" accept="video/*" name="files[]" required class="fallback file" placeholder="Upload Video Files" multiple />
                                    </div>
                                 </div>
                                 
								 <div class="form-group row mb-4">
                                    <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3"></label>
                                    <div class="col-sm-12 col-md-7">
                                       <button class="btn btn-primary">Upload Video</button>
                                    </div>
                      
                                 </div>

							 </div>
                             </form>
						 </div>
					 </div>
                  </div>
               </section>
            </div>
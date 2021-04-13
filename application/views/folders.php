          <!-- Main Content -->
          <div class="main-content">
               <section class="section">
                  <div class="row">
					 <div class="col-md-6 col-lg-12 col-xl-6">
						 <div class="card">
							 <div class="card-header">
								 <h4>Create Labels</h4>
							 </div>
                             <form class="theme-form needs-validation" novalidate="" METHOD="POST" action="<?php base_url(); ?> create_label" enctype="multipart/form-data">
							 <div class="card-body">
								 <div class="form-group row mb-4">
                                    <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Class Name</label>
                                    <div class="col-sm-12 col-md-7">
                                       <input type="text" class="form-control" placeholder="Enter Class Name" name="class">
                                    </div>
                                 </div>
								 <div class="form-group row mb-4">
									 <div class="col-sm-12 col-md-7">
                                       <h3 class="text-center">(OR)</h3>
                                    </div>
								 </div>
								 <div class="form-group row mb-4">
                                    <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Subject Name</label>
                                    <div class="col-sm-12 col-md-7">
                                       <input type="text" class="form-control" placeholder="Enter Subject Name" name="subject">
                                    </div>
                                 </div>
								 <div class="form-group row mb-4">
                                    <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3"></label>
                                    <div class="col-sm-12 col-md-7">
                                       <button class="btn btn-primary">Create Lables</button>
                                    </div>
                                 </div>
                                 </form>
							 </div>
						 </div>
					 </div>
                  </div>
				  <div class="row">
					  <div class="col-md-6 col-lg-12 col-xl-6">
                        <div class="card">
                           <div class="card-header">
                              <h4>List of Labels (CLASSESS)</h4>
                           </div>
                           <div class="card-body">
                              <div class="table-responsive">
                                 <table class="table table-hover mb-0">
                                    <thead>
                                       <tr>
                                          <th>#</th>
                                          <th>Class Name</th>
                                          <th>Date</th>
                                       <!-- <th>Created By</th>-->
                                       </tr>
                                    </thead>
                                    <tbody>

                                    <?php  
                                    $count=0;
                                            foreach ($h->result() as $row)  
                                    {  
                                      $count=$count+1;  
                                        ?>
                                       <tr>
                                          <td><?php echo $count ?></td>
                                          <td><?php echo $row->name;?> </td>
                                          <td><?php echo $row->create_date;?></td>
                                        <!--  <td>Sashreek</td>-->
                                       </tr>
								<?php }?>
                                    </tbody>
                                 </table>
                              </div>
                           </div>
                        </div>
                     </div>
					 <div class="col-md-6 col-lg-12 col-xl-6">
                        <div class="card">
                           <div class="card-header">
                              <h4>List of Labels (SUBJECT)</h4>
                           </div>
                           <div class="card-body">
                              <div class="table-responsive">
                                 <table class="table table-hover mb-0">
                                    <thead>
                                       <tr>
                                          <th>#</th>
                                          <th>Subject Name</th>
                                          <th>Date</th>
                                         <!-- <th>Created By</th>-->
                                       </tr>
                                    </thead>
                                    <tbody>
                                    <?php  
                                    $counts=0;
                                            foreach ($z->result() as $row)  
                                    {  
                                      $counts=$counts+1;  
                                        ?>
                                       <tr>
                                          <td><?php echo $counts ?></td>
                                          <td><?php echo $row->name;?> </td>
                                          <td><?php echo $row->create_date;?></td>
                                        <!--  <td>Sashreek</td>-->
                                       </tr>
								<?php }?>
										
                                    </tbody>
                                 </table>
                              </div>
                           </div>
                        </div>
                     </div> 
				  </div> 
               </section>
            </div>
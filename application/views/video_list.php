  <!-- Main Content -->
  <div class="main-content">
               <section class="section">
                  <div class="row ">
                     <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6 col-xs-12">
                        <div class="card">
                           <div class="card-statistic-4">
                              <div class="align-items-center justify-content-between">
                                 <div class="row ">
                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 pr-0 pt-3">
                                       <div class="card-content">
                                          <h5 class="font-15">New Users</h5>
                                          <h2 class="mb-3 font-18">0</h2>
                                          <p class="mb-0"><span class="col-green">0%</span> Increase</p>
                                       </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 pl-0">
                                       <div class="banner-img">
                                          <img src="assets/images/icon/add_user.png" alt="">
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                     <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6 col-xs-12">
                        <div class="card">
                           <div class="card-statistic-4">
                              <div class="align-items-center justify-content-between">
                                 <div class="row ">
                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 pr-0 pt-3">
                                       <div class="card-content">
                                          <h5 class="font-15"> Videos Uploaded</h5>
                                          <h2 class="mb-3 font-18"><?php echo $num ?></h2>
                                          <p class="mb-0"><span class="col-orange">0%</span> Decrease</p>
                                       </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 pl-0">
                                       <div class="banner-img">
                                          <img src="assets/images/icon/cloud_upload.png" alt="">
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                     <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6 col-xs-12">
                        <div class="card">
                           <div class="card-statistic-4">
                              <div class="align-items-center justify-content-between">
                                 <div class="row ">
                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 pr-0 pt-3">
                                       <div class="card-content">
                                          <h5 class="font-15">Folders Created</h5>
                                          <h2 class="mb-3 font-18">0</h2>
                                          <p class="mb-0"><span class="col-green">0%</span>
                                             Increase
                                          </p>
                                       </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 pl-0">
                                       <div class="banner-img">
                                          <img src="assets/images/icon/folder_video.png" alt="">
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                     <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6 col-xs-12">
                        <div class="card">
                           <div class="card-statistic-4">
                              <div class="align-items-center justify-content-between">
                                 <div class="row ">
                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 pr-0 pt-3">
                                       <div class="card-content">
                                          <h5 class="font-15">Videos Downloaded</h5>
                                          <h2 class="mb-3 font-18">0</h2>
                                          <p class="mb-0"><span class="col-green">0%</span> Increase</p>
                                       </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 pl-0">
                                       <div class="banner-img">
                                          <img src="assets/images/icon/cloud_download.png" alt="">
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="row">
                     <div class="col-12">
                        <div class="card">
                           <div class="card-header">
                              <h4>List of Videos</h4>
                              <div class="card-header-form">
                                 <form>
                                    <div class="input-group">
                                       <input type="text" class="form-control" placeholder="Search" id='txt_searchall'>
                                       <div class="input-group-btn">
                                          <button class="btn btn-primary"><i class="fas fa-search"></i></button>
                                       </div>
                                    </div>
                                 </form>
                              </div>
                           </div>
                           <div class="card-body p-0">
                              <div class="table-responsive">
                                 <table class="table table-striped">
                                    <tr>
                                       <th class="text-center">
                                          <div class="custom-checkbox custom-checkbox-table custom-control">
                                             <input type="checkbox" data-checkboxes="mygroup" data-checkbox-role="dad"
                                                class="custom-control-input" id="checkbox-all">
                                             <label for="checkbox-all" class="custom-control-label">&nbsp;</label>
                                          </div>
                                       </th>
                                       <th>Video Title</th>
                                       <th>Teacher Name</th>
                                       <th>Class Name</th>
                                       <th>Subject Name</th>
                                       <th>Uploaded Date</th>
									   <th>Actions</th>	
                                    </tr>

                                    <?php  
                                
                                            foreach ($h->result() as $row)  
                                    {  
                                    
                                        ?>
                                    <tr>
                                       <td class="p-0 text-center">
                                          <div class="custom-checkbox custom-control">
                                             <input type="checkbox" data-checkboxes="mygroup" class="custom-control-input"
                                                id="checkbox-1">
                                             <label for="checkbox-1" class="custom-control-label">&nbsp;</label>
                                          </div>
                                       </td>
                                       <td><?php echo $row->title;?></td>
                                       <td>
                                      
                                       </td>
                                       <td class="align-middle">
                                       <?php echo $row->class;?>
                                       </td>
                                       <td><?php echo $row->subject;?></td>
                                       <td><?php echo $row->create_date;?></td>
                                       <form  method="post" id="<?php echo $row->id ?>" novalidate="" enctype="multipart/form-data" action="<?php base_url(); ?>delete_video">
                                        
									   <td>
										   <i style="color: #157a6c" data-feather="edit" data-toggle="tooltip" data-original-title="Edit Video"></i>
										  
                                      <input type="hidden" value="<?php echo $row->id;?>" name="id">
                                         
                                           <i class="text-danger" onclick="return confirm('Do You Want Delete This Video?'),document.getElementById('<?php echo $row->id ?>').submit();" data-feather="trash-2" data-toggle="tooltip" data-original-title="Delete Video"></i>
                                  
                                          
                                           <a href="<?php base_url(); ?>uploads/<?php echo $row->video;?>" target="_blank">
										   <i style="color: #243fe4" data-feather="download-cloud" data-toggle="tooltip" data-original-title="Download Video" ></i>
                                           </a>
                                        </td>	  </form>
                                    </tr>
                            <?php } ?>
                              
                                 </table>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </section>
            </div>

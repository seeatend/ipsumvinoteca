  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h4>
        Dashboard
        <small>Control panel</small>
      </h4>
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="<?php echo base_url('admin/dashboard');?>"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="breadcrumb-item active">Dashboard</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <!-- boxes (Stat box) -->
      <div class="row">
        <div class="col-xl-3 col-md-6 col">
          <div class="info-box bg-blue">
            <span class="info-box-icon push-bottom"><i class="ion ion-ios-pricetag-outline"></i></span>

            <div class="info-box-content">
              <span class="info-box-text">Total Retreats</span>
              <span class="info-box-number"><?php echo (!empty($getTotalRetreat->count)) ? $getTotalRetreat->count :0;?></span>

              <div class="progress">
                <div class="progress-bar" style="width: 45%"></div>
              </div>
              <span class="progress-description">
                    45% Increase in 28 Days
              </span>
            </div>
            <!-- /.info-box-content -->
          </div>
          <!-- /.info-box -->
        </div>
        <!-- /.col -->
        <div class="col-xl-3 col-md-6 col">
          <div class="info-box bg-green">
            <span class="info-box-icon push-bottom"><i class="ion ion-ios-eye-outline"></i></span>

            <div class="info-box-content">
              <span class="info-box-text">Total Centers</span>
              <span class="info-box-number"><?php echo (!empty($getTotalCenter->count)) ? $getTotalCenter->count :0;?></span>

              <div class="progress">
                <div class="progress-bar" style="width: 40%"></div>
              </div>
              <span class="progress-description">
                    40% Increase in 28 Days
              </span>
            </div>
            <!-- /.info-box-content -->
          </div>
          <!-- /.info-box -->
        </div>
        <!-- /.col -->
        <div class="col-xl-3 col-md-6 col">
          <div class="info-box bg-purple">
            <span class="info-box-icon push-bottom"><i class="ion ion-ios-cloud-download-outline"></i></span>

            <div class="info-box-content">
              <span class="info-box-text">Total Instructor</span>
              <span class="info-box-number"><?php echo (!empty($getTotalInstuctor->count)) ? $getTotalInstuctor->count :0;?></span>

              <div class="progress">
                <div class="progress-bar" style="width: 85%"></div>
              </div>
              <span class="progress-description">
                    85% Increase in 28 Days
              </span>
            </div>
            <!-- /.info-box-content -->
          </div>
          <!-- /.info-box -->
        </div>
        <!-- /.col -->
        <div class="col-xl-3 col-md-6 col">
          <div class="info-box bg-red">
            <span class="info-box-icon push-bottom"><i class="ion-ios-chatbubble-outline"></i></span>

            <div class="info-box-content">
              <span class="info-box-text">Total Reviews</span>
              <span class="info-box-number"><?php echo (!empty($getTotalreviews->count)) ? $getTotalreviews->count :0;?></span>

              <div class="progress">
                <div class="progress-bar" style="width: 50%"></div>
              </div>
              <span class="progress-description">
                    50% Increase in 28 Days
              </span>
            </div>
            <!-- /.info-box-content -->
          </div>
          <!-- /.info-box -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
      <!-- Main row -->
<!--      <div class="row">
         Left col 
        <section class="col-xl-6 connectedSortable">
           interactive chart 
          <div class="box box-primary">
            <div class="box-header with-border">
              <i class="fa fa-line-chart"></i>

              <h3 class="box-title">Expence</h3>

              <div class="box-tools pull-right">
                Real time
                <div class="btn-group" id="realtime" data-toggle="btn-toggle">
                  <button type="button" class="btn btn-default bg-green btn-sm active" data-toggle="on">On</button>
                  <button type="button" class="btn btn-default bg-red btn-sm" data-toggle="off">Off</button>
                </div>
              </div>
            </div>
            <div class="box-body">
              <div id="interactive" style="height: 342px;"></div>
            </div>
             /.box-body
          </div>
           /.box 
          
           Box Comment 
          <div class="box box-widget">
            <div class="box-header with-border">
              <div class="user-block">
                <img class="rounded" src="../images/user1-128x128.jpg" alt="User Image">
                <span class="username"><a href="#">John Doe</a></span>
                <span class="description">Shared publicly - 8:30 AM Today</span>
              </div>
               /.user-block 
              <div class="box-tools">
                <button type="button" class="btn btn-box-tool" data-toggle="tooltip" title="Mark as read">
                  <i class="fa fa-comments-o"></i></button>
                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                </button>
                <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
              </div>
               /.box-tools 
            </div>
             /.box-header 
            <div class="box-body">
              <img class="img-fluid pad" src="../images/photo2.png" alt="Photo">

              <p>Featured Hydroflora Pots Garden & Outdoors</p>
              <button type="button" class="btn btn-default btn-sm bg-blue-active"><i class="fa fa-share"></i> Share</button>
              <button type="button" class="btn btn-default btn-sm bg-green-active"><i class="fa fa-thumbs-o-up"></i> Like</button>
              <span class="pull-right text-muted">15 likes - 2 comments</span>
            </div>
             /.box-body 
            <div class="box-footer box-comments">
              <div class="box-comment">
                 User image 
                <img class="rounded img-sm" src="../images/user3-128x128.jpg" alt="User Image">

                <div class="comment-text">
                      <span class="username">
                        Ruhi Doe
                        <span class="text-muted pull-right">1:03 AM Today</span>
                      </span> /.username 
                  Titudin venenatis ipsum ac feugiat. Vestibulum ullamcorper quam.
                </div>
                 /.comment-text 
              </div>
               /.box-comment 
              <div class="box-comment">
                 User image 
                <img class="rounded img-sm" src="../images/user4-128x128.jpg" alt="User Image">

                <div class="comment-text">
                      <span class="username">
                        Amayra Lusi
                        <span class="text-muted pull-right">11:03 PM Today</span>
                      </span> /.username 
                  Titudin venenatis ipsum ac feugiat. Vestibulum ullamcorper quam.
                </div>
                 /.comment-text 
              </div>
               /.box-comment 
            </div>
             /.box-footer 
            <div class="box-footer">
              <form action="#" method="post">
                <img class="img-fluid rounded img-sm" src="../images/user4-128x128.jpg" alt="Alt Text">
                 .img-push is used to add margin to elements next to floating images 
                <div class="img-push">
                  <input type="text" class="form-control input-sm" placeholder="Press enter to post comment">
                </div>
              </form>
            </div>
             /.box-footer 
          </div>
           /.box 

           TO DO List 
          <div class="box">
            <div class="box-header">
              <i class="fa fa-file"></i>

              <h3 class="box-title">To Do List</h3>

              <div class="box-tools pull-right">
               <nav aria-label="Page navigation example">
                <ul class="pagination">
                  <li><a href="#">&laquo;</a></li>
                  <li><a href="#">1</a></li>
                  <li><a href="#">2</a></li>
                  <li><a href="#">3</a></li>
                  <li><a href="#">&raquo;</a></li>
                </ul>
			   </nav>
              </div>
            </div>
             /.box-header 
            <div class="box-body">
               See dist/js/pages/dashboard.js to activate the todoList plugin 
              <form>
              <ul class="todo-list">
                <li>
                   drag handle 
                  <span class="handle">
                        <i class="fa fa-ellipsis-v"></i>
                        <i class="fa fa-ellipsis-v"></i>
                      </span>
                   checkbox 
                  	<label class="control control-checkbox">
							<input type="checkbox" />
						<div class="control_indicator"></div>
					</label>
                   todo text 
                  <span class="text">Lorem ipsum dolor sit amet</span>
                   Emphasis label 
                  <small class="label label-danger"><i class="fa fa-clock-o"></i> 8 mins</small>
                   General tools such as edit or delete
                  <div class="tools">
                    <i class="fa fa-edit"></i>
                    <i class="fa fa-trash-o"></i>
                  </div>
                </li>
                <li>
                      <span class="handle">
                        <i class="fa fa-ellipsis-v"></i>
                        <i class="fa fa-ellipsis-v"></i>
                      </span>
                   checkbox 
                  	<label class="control control-checkbox">
							<input type="checkbox" />
						<div class="control_indicator"></div>
					</label>
                  <span class="text">Praesent et metus sit amet</span>
                  <small class="label label-info"><i class="fa fa-clock-o"></i> 2 hours</small>
                  <div class="tools">
                    <i class="fa fa-edit"></i>
                    <i class="fa fa-trash-o"></i>
                  </div>
                </li>
                <li>
                      <span class="handle">
                        <i class="fa fa-ellipsis-v"></i>
                        <i class="fa fa-ellipsis-v"></i>
                      </span>
                   checkbox 
                  	<label class="control control-checkbox">
							<input type="checkbox" />
						<div class="control_indicator"></div>
					</label>
                  <span class="text">Pellentesque feugiat quam eget</span>
                  <small class="label label-success"><i class="fa fa-clock-o"></i> 2 day</small>
                  <div class="tools">
                    <i class="fa fa-edit"></i>
                    <i class="fa fa-trash-o"></i>
                  </div>
                </li>
                <li>
                      <span class="handle">
                        <i class="fa fa-ellipsis-v"></i>
                        <i class="fa fa-ellipsis-v"></i>
                      </span>
                   checkbox 
                  	<label class="control control-checkbox">
							<input type="checkbox" />
						<div class="control_indicator"></div>
					</label>
                  <span class="text">Quisque rhoncus leo at ex</span>
                  <small class="label label-success"><i class="fa fa-clock-o"></i> 3 days</small>
                  <div class="tools">
                    <i class="fa fa-edit"></i>
                    <i class="fa fa-trash-o"></i>
                  </div>
                </li>
                <li>
                      <span class="handle">
                        <i class="fa fa-ellipsis-v"></i>
                        <i class="fa fa-ellipsis-v"></i>
                      </span>
                   checkbox 
                  	<label class="control control-checkbox">
							<input type="checkbox" />
						<div class="control_indicator"></div>
					</label>
                  <span class="text">Nunc pulvinar dolor vel magna ultricies</span>
                  <small class="label label-warning"><i class="fa fa-clock-o"></i> 1 week</small>
                  <div class="tools">
                    <i class="fa fa-edit"></i>
                    <i class="fa fa-trash-o"></i>
                  </div>
                </li>
                <li>
                      <span class="handle">
                        <i class="fa fa-ellipsis-v"></i>
                        <i class="fa fa-ellipsis-v"></i>
                      </span>
                   checkbox 
                  	<label class="control control-checkbox">
							<input type="checkbox" />
						<div class="control_indicator"></div>
					</label>
                  <span class="text">Aenean condimentum arcu ut laoreet fringilla.</span>
                  <small class="label label-default"><i class="fa fa-clock-o"></i> 1 month</small>
                  <div class="tools">
                    <i class="fa fa-edit"></i>
                    <i class="fa fa-trash-o"></i>
                  </div>
                </li>
                <li>
                      <span class="handle">
                        <i class="fa fa-ellipsis-v"></i>
                        <i class="fa fa-ellipsis-v"></i>
                      </span>
                   checkbox 
                  	<label class="control control-checkbox">
							<input type="checkbox" />
						<div class="control_indicator"></div>
					</label>
                  <span class="text">Aenean condimentum arcu ut laoreet fringilla.</span>
                  <small class="label label-default"><i class="fa fa-clock-o"></i> 1 month</small>
                  <div class="tools">
                    <i class="fa fa-edit"></i>
                    <i class="fa fa-trash-o"></i>
                  </div>
                </li>
              </ul>
              </form>
            </div>
             /.box-body 
            <div class="box-footer clearfix no-border">
              <button type="button" class="btn btn-blue pull-right"><i class="fa fa-plus"></i> Add item</button>
            </div>
          </div>
           /.box 

        </section>
         /.Left col 
        
         right col (We are only adding the ID to make the widgets sortable)
        <section class="col-xl-6 connectedSortable">

           Map box 
          <div class="box">
            <div class="box-header">
               tools box 
              <div class="pull-right box-tools">
                <button type="button" class="btn btn-white btn-sm daterange pull-right" data-toggle="tooltip"
                        title="Date range">
                  <i class="fa fa-calendar"></i></button>
                <button type="button" class="btn btn-white btn-sm pull-right" data-widget="collapse"
                        data-toggle="tooltip" title="Collapse" style="margin-right: 5px;">
                  <i class="fa fa-minus"></i></button>
              </div>
               /. tools 

              <i class="fa fa-map-marker"></i>

              <h3 class="box-title">
                Visitors
              </h3>
            </div>
            <div class="box-body">
              <div id="world-map" style="height: 250px; width: 100%;"></div>
            </div>
             /.box-body
            <div class="box-footer">
              <div class="row">
                <div class="col text-center" style="border-right: 1px solid #f4f4f4">
                  <div id="sparkline-1"></div>
                  <div class="knob-label">Visitors</div>
                </div>
                 ./col 
                <div class="col text-center" style="border-right: 1px solid #f4f4f4">
                  <div id="sparkline-2"></div>
                  <div class="knob-label">Online</div>
                </div>
                 ./col 
                <div class="col text-center">
                  <div id="sparkline-3"></div>
                  <div class="knob-label">Exists</div>
                </div>
                 ./col 
              </div>
               /.row 
            </div>
          </div>
           /.box 

           solid sales graph 
          <div class="box">
            <div class="box-header">
              <i class="fa fa-th"></i>

              <h3 class="box-title">Sales Graph</h3>

              <div class="box-tools pull-right">
                <button type="button" class="btn btn-white btn-sm" data-widget="collapse"><i class="fa fa-minus"></i>
                </button>
                <button type="button" class="btn btn-white btn-sm" data-widget="remove"><i class="fa fa-times"></i>
                </button>
              </div>
            </div>
            <div class="box-body border-radius-none">
              <div id="bar-chart" style="height: 255px;"></div>
            </div>
             /.box-body 
            <div class="box-footer no-border">
              <div class="row">
                <div class="col text-center" style="border-right: 1px solid #f4f4f4">
                  <input type="text" class="knob" data-readonly="true" value="30" data-width="60" data-height="60"
                         data-fgColor="#7460EE">

                  <div class="knob-label">Mail Orders</div>
                </div>
                 ./col 
                <div class="col text-center" style="border-right: 1px solid #f4f4f4">
                  <input type="text" class="knob" data-readonly="true" value="60" data-width="60" data-height="60"
                         data-fgColor="#7460EE">

                  <div class="knob-label">Online Orders</div>
                </div>
                 ./col 
                <div class="col text-center">
                  <input type="text" class="knob" data-readonly="true" value="40" data-width="60" data-height="60"
                         data-fgColor="#7460EE">

                  <div class="knob-label">In-Store Orders</div>
                </div>
                 ./col 
              </div>
               /.row 
            </div>
             /.box-footer 
          </div>
           /.box 

           Calendar 
          <div class="box box-solid bg-blue">
            <div class="box-header">
              <i class="fa fa-calendar"></i>

              <h3 class="box-title">Calendar</h3>
               tools box 
              <div class="pull-right box-tools">
                 button with a dropdown 
                <div class="btn-group">
                  <button type="button" class="btn btn-white btn-sm dropdown-toggle" data-toggle="dropdown">
                    <i class="fa fa-bars"></i></button>
                  <ul class="dropdown-menu pull-right" role="menu">
                    <li><a href="#">Add new event</a></li>
                    <li><a href="#">Clear events</a></li>
                    <li class="divider"></li>
                    <li><a href="#">View calendar</a></li>
                  </ul>
                </div>
                <button type="button" class="btn btn-white btn-sm" data-widget="collapse"><i class="fa fa-minus"></i>
                </button>
                <button type="button" class="btn btn-white btn-sm" data-widget="remove"><i class="fa fa-times"></i>
                </button>
              </div>
               /. tools 
            </div>
             /.box-header 
            <div class="box-body no-padding">
              The calendar 
              <div id="calendar" style="width: 100%"></div>
            </div>
             /.box-body 
            <div class="box-footer text-black">
              <div class="row">
                <div class="col-sm-6">
                   Progress bars 
                  <div class="clearfix">
                    <span class="pull-left">Task #1</span>
                    <small class="pull-right">30%</small>
                  </div>
                  <div class="progress xs">
                    <div class="progress-bar progress-bar-blue" style="width: 30%;"></div>
                  </div>

                  <div class="clearfix">
                    <span class="pull-left">Task #2</span>
                    <small class="pull-right">90%</small>
                  </div>
                  <div class="progress xs">
                    <div class="progress-bar progress-bar-blue" style="width: 90%;"></div>
                  </div>
                </div>
                 /.col 
                <div class="col-sm-6">
                  <div class="clearfix">
                    <span class="pull-left">Task #3</span>
                    <small class="pull-right">40%</small>
                  </div>
                  <div class="progress xs">
                    <div class="progress-bar progress-bar-blue" style="width: 40%;"></div>
                  </div>

                  <div class="clearfix">
                    <span class="pull-left">Task #4</span>
                    <small class="pull-right">60%</small>
                  </div>
                  <div class="progress xs">
                    <div class="progress-bar progress-bar-blue" style="width: 60%;"></div>
                  </div>
                </div>
                 /.col 
              </div>
               /.row 
            </div>
          </div>
           /.box 
          
           quick email widget 
          <div class="box box-info">
            <div class="box-header">
              <i class="fa fa-envelope"></i>

              <h3 class="box-title">Quick Email</h3>
               tools box 
              <div class="pull-right box-tools">
                <button type="button" class="btn btn-danger btn-sm" data-widget="remove" data-toggle="tooltip"
                        title="Remove">
                  <i class="fa fa-times"></i></button>
              </div>
               /. tools 
            </div>
            <div class="box-body">
              <form action="#" method="post">
                <div class="form-group">
                  <input type="email" class="form-control" name="emailto" placeholder="Email to:">
                </div>
                <div class="form-group">
                  <input type="text" class="form-control" name="subject" placeholder="Subject">
                </div>
                <div>
                  <textarea class="textarea" placeholder="Message" style="width: 100%; height: 125px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;"></textarea>
                </div>
              </form>
            </div>
            <div class="box-footer clearfix">
              <button type="button" class="pull-right btn btn-blue" id="sendEmail"> Send <i class="fa fa-paper-plane-o"></i></button>
            </div>
          </div>

        </section>
         right col 
      </div>-->
      <!-- /.row (main row) -->

    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->


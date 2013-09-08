<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <title>Dashboard - Ace Admin</title>
        <meta name="description" content="overview & stats" />

        <meta name="viewport" content="width=device-width, initial-scale=1.0" />

        <?php include'_css.php'?>

    </head>

    <body>
        <div class="navbar navbar-inverse">
          <div class="navbar-inner">
           <div class="container-fluid">


              <a class="brand" href="#"><small><i class="icon-leaf"></i> Ace Admin</small> </a>
              <ul class="nav ace-nav pull-right">
                    <li class="grey">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                            <i class="icon-tasks"></i>
                            <span class="badge">4</span>
                        </a>
                        <ul class="pull-right dropdown-navbar dropdown-menu dropdown-caret dropdown-closer">
                            <li class="nav-header">
                                <i class="icon-ok"></i> 4 Tasks to complete
                            </li>
                            
                            <li>
                                <a href="#">
                                    <div class="clearfix">
                                        <span class="pull-left">Software Update</span>
                                        <span class="pull-right">65%</span>
                                    </div>
                                    <div class="progress progress-mini"><div class="bar" style="width:65%"></div></div>
                                </a>
                            </li>
                            
                            <li>
                                <a href="#">
                                    <div class="clearfix">
                                        <span class="pull-left">Hardware Upgrade</span>
                                        <span class="pull-right">35%</span>
                                    </div>
                                    <div class="progress progress-mini progress-danger"><div class="bar" style="width:35%"></div></div>
                                </a>
                            </li>
                            
                            <li>
                                <a href="#">
                                    <div class="clearfix">
                                        <span class="pull-left">Unit Testing</span>
                                        <span class="pull-right">15%</span>
                                    </div>
                                    <div class="progress progress-mini progress-warning"><div class="bar" style="width:15%"></div></div>
                                </a>
                            </li>
                            
                            <li>
                                <a href="#">
                                    <div class="clearfix">
                                        <span class="pull-left">Bug Fixes</span>
                                        <span class="pull-right">90%</span>
                                    </div>
                                    <div class="progress progress-mini progress-success progress-striped active"><div class="bar" style="width:90%"></div></div>
                                </a>
                            </li>
                            
                            <li>
                                <a href="#">
                                    See tasks with details
                                    <i class="icon-arrow-right"></i>
                                </a>
                            </li>
                        </ul>
                    </li>


                    <li class="purple">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                            <i class="icon-bell-alt icon-animated-bell icon-only"></i>
                            <span class="badge badge-important">8</span>
                        </a>
                        <ul class="pull-right dropdown-navbar navbar-pink dropdown-menu dropdown-caret dropdown-closer">
                            <li class="nav-header">
                                <i class="icon-warning-sign"></i> 8 Notifications
                            </li>
                            
                            <li>
                                <a href="#">
                                    <div class="clearfix">
                                        <span class="pull-left"><i class="icon-comment btn btn-mini btn-pink"></i> New comments</span>
                                        <span class="pull-right badge badge-info">+12</span>
                                    </div>
                                </a>
                            </li>
                            
                            <li>
                                <a href="#">
                                    <i class="icon-user btn btn-mini btn-primary"></i> Bob just signed up as an editor ...
                                </a>
                            </li>
                            
                            <li>
                                <a href="#">
                                    <div class="clearfix">
                                        <span class="pull-left"><i class="icon-shopping-cart btn btn-mini btn-success"></i> New orders</span>
                                        <span class="pull-right badge badge-success">+8</span>
                                    </div>
                                </a>
                            </li>
                            
                            <li>
                                <a href="#">
                                    <div class="clearfix">
                                        <span class="pull-left"><i class="icon-twitter btn btn-mini btn-info"></i> Followers</span>
                                        <span class="pull-right badge badge-info">+4</span>
                                    </div>
                                </a>
                            </li>
                                                                
                            <li>
                                <a href="#">
                                    See all notifications
                                    <i class="icon-arrow-right"></i>
                                </a>
                            </li>
                        </ul>
                    </li>


                    <li class="green">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                            <i class="icon-envelope-alt icon-animated-vertical icon-only"></i>
                            <span class="badge badge-success">5</span>
                        </a>
                        <ul class="pull-right dropdown-navbar dropdown-menu dropdown-caret dropdown-closer">
                            <li class="nav-header">
                                <i class="icon-envelope"></i> 5 Messages
                            </li>
                            
                            <li>
                                <a href="#">
                                    <img alt="Alex's Avatar" class="msg-photo" src="media/images/avatar.png" />
                                    <span class="msg-body">
                                        <span class="msg-title">
                                            <span class="blue">Alex:</span>
                                            Ciao sociis natoque penatibus et auctor ...
                                        </span>
                                        <span class="msg-time">
                                            <i class="icon-time"></i> <span>a moment ago</span>
                                        </span>
                                    </span>
                                </a>
                            </li>
                            
                            <li>
                                <a href="#">
                                    <img alt="Susan's Avatar" class="msg-photo" src="media/images/avatar3.png" />
                                    <span class="msg-body">
                                        <span class="msg-title">
                                            <span class="blue">Susan:</span>
                                            Vestibulum id ligula porta felis euismod ...
                                        </span>
                                        <span class="msg-time">
                                            <i class="icon-time"></i> <span>20 minutes ago</span>
                                        </span>
                                    </span>
                                </a>
                            </li>
                            
                            <li>
                                <a href="#">
                                    <img alt="Bob's Avatar" class="msg-photo" src="media/images/avatar4.png" />
                                    <span class="msg-body">
                                        <span class="msg-title">
                                            <span class="blue">Bob:</span>
                                            Nullam quis risus eget urna mollis ornare ...
                                        </span>
                                        <span class="msg-time">
                                            <i class="icon-time"></i> <span>3:15 pm</span>
                                        </span>
                                    </span>
                                </a>
                            </li>
                            
                            <li>
                                <a href="#">
                                    See all messages
                                    <i class="icon-arrow-right"></i>
                                </a>
                            </li>                                   
    
                        </ul>
                    </li>


                    <li class="light-blue user-profile">
                        <a class="user-menu dropdown-toggle" href="#" data-toggle="dropdown">
                            <img alt="Jason's Photo" src="media/images/user.jpg" class="nav-user-photo" />
                            <span id="user_info">
                                <small>Welcome,</small> Jason
                            </span>
                            <i class="icon-caret-down"></i>
                        </a>
                        <ul id="user_menu" class="pull-right dropdown-menu dropdown-yellow dropdown-caret dropdown-closer">
                            <li><a href="#"><i class="icon-cog"></i> Settings</a></li>
                            <li><a href="#"><i class="icon-user"></i> Profile</a></li>
                            <li class="divider"></li>
                            <li><a href="#"><i class="icon-off"></i> Logout</a></li>
                        </ul>
                    </li>




              </ul><!--/.ace-nav-->

           </div><!--/.container-fluid-->
          </div><!--/.navbar-inner-->
        </div><!--/.navbar-->

        <div class="container-fluid" id="main-container">
            <a href="#" id="menu-toggler"><span></span></a><!-- menu toggler -->

            <div id="sidebar">
                
                <div id="sidebar-shortcuts">
                    <div id="sidebar-shortcuts-large">
                        <button class="btn btn-small btn-success"><i class="icon-signal"></i></button>
                        <button class="btn btn-small btn-info"><i class="icon-pencil"></i></button>
                        <button class="btn btn-small btn-warning"><i class="icon-group"></i></button>
                        <button class="btn btn-small btn-danger"><i class="icon-cogs"></i></button>
                    </div>
                    <div id="sidebar-shortcuts-mini">
                        <span class="btn btn-success"></span>
                        <span class="btn btn-info"></span>
                        <span class="btn btn-warning"></span>
                        <span class="btn btn-danger"></span>
                    </div>
                </div><!-- #sidebar-shortcuts -->

                <ul class="nav nav-list">
                    
                    <li class="active">
                      <a href="index.php">
                        <i class="icon-dashboard"></i>
                        <span>Dashboard</span>
                        
                      </a>
                    </li>

                    
                    <li>
                      <a href="typography.php">
                        <i class="icon-text-width"></i>
                        <span>Typography</span>
                        
                      </a>
                    </li>

                    
                    <li>
                      <a href="#" class="dropdown-toggle" >
                        <i class="icon-desktop"></i>
                        <span>UI Elements</span>
                        <b class="arrow icon-angle-down"></b>
                      </a>
                      <ul class="submenu">
                        <li><a href="elements.php"><i class="icon-double-angle-right"></i> Elements</a></li>
                        <li><a href="buttons.php"><i class="icon-double-angle-right"></i> Buttons & Icons</a></li>
                      </ul>
                    </li>

                    
                    <li>
                      <a href="tables.php">
                        <i class="icon-list"></i>
                        <span>Tables</span>
                        
                      </a>
                    </li>

                    
                    <li>
                      <a href="#" class="dropdown-toggle" >
                        <i class="icon-edit"></i>
                        <span>Forms</span>
                        <b class="arrow icon-angle-down"></b>
                      </a>
                      <ul class="submenu">
                        <li><a href="form-elements.php"><i class="icon-double-angle-right"></i> Form Elements</a></li>
                        <li><a href="form-wizard.php"><i class="icon-double-angle-right"></i> Wizard & Validation</a></li>
                      </ul>
                    </li>

                    
                    <li>
                      <a href="widgets.php">
                        <i class="icon-list-alt"></i>
                        <span>Widgets</span>
                        
                      </a>
                    </li>

                    
                    <li>
                      <a href="calendar.php">
                        <i class="icon-calendar"></i>
                        <span>Calendar</span>
                        
                      </a>
                    </li>

                    
                    <li>
                      <a href="gallery.php">
                        <i class="icon-picture"></i>
                        <span>Gallery</span>
                        
                      </a>
                    </li>

                    
                    <li>
                      <a href="grid.php">
                        <i class="icon-th"></i>
                        <span>Grid</span>
                        
                      </a>
                    </li>

                    
                    <li>
                      <a href="#" class="dropdown-toggle" >
                        <i class="icon-file"></i>
                        <span>Other Pages</span>
                        <b class="arrow icon-angle-down"></b>
                      </a>
                      <ul class="submenu">
                        <li><a href="pricing.php"><i class="icon-double-angle-right"></i> Pricing Tables</a></li>
                        <li><a href="invoice.php"><i class="icon-double-angle-right"></i> Invoice</a></li>
                        <li><a href="login.php"><i class="icon-double-angle-right"></i> Login & Register</a></li>
                        <li><a href="error-404.php"><i class="icon-double-angle-right"></i> Error 404</a></li>
                        <li><a href="error-500.php"><i class="icon-double-angle-right"></i> Error 500</a></li>
                        <li><a href="blank.php"><i class="icon-double-angle-right"></i> Blank Page</a></li>
                      </ul>
                    </li>

                    
                </ul><!--/.nav-list-->

                <div id="sidebar-collapse"><i class="icon-double-angle-left"></i></div>


            </div><!--/#sidebar-->

        
            <div id="main-content" class="clearfix">
                    
                    <div id="breadcrumbs">
                        <ul class="breadcrumb">
                            <li><i class="icon-home"></i> <a href="#">Home</a><span class="divider"><i class="icon-angle-right"></i></span></li>
                            <li class="active">Dashboard</li>
                        </ul><!--.breadcrumb-->

                        <div id="nav-search">
                            <form class="form-search">
                                    <span class="input-icon">
                                        <input autocomplete="off" id="nav-search-input" type="text" class="input-small search-query" placeholder="Search ..." />
                                        <i id="nav-search-icon" class="icon-search"></i>
                                    </span>
                            </form>
                        </div><!--#nav-search-->
                    </div><!--#breadcrumbs-->



                    <div id="page-content" class="clearfix">
                        
                        <div class="page-header position-relative">
                            <h1>Dashboard <small><i class="icon-double-angle-right"></i> overview & stats</small></h1>
                        </div><!--/page-header-->

                        

                        <div class="row-fluid">
<!-- PAGE CONTENT BEGINS HERE -->

<div class="alert alert-block alert-success">
 <button type="button" class="close" data-dismiss="alert"><i class="icon-remove"></i></button>
 <i class="icon-ok green"></i> Welcome to <strong class="green">Ace <small>(v1)</small></strong>,
 the lightweight, feature-rich, easy to use and well-documented admin template.
</div>



<div class="space-6"></div>
<div class="row-fluid">


 <div class="span7 infobox-container">
   
    <div class="infobox infobox-green">
        <div class="infobox-icon"><i class="icon-comments"></i></div>
        <div class="infobox-data">
            <span class="infobox-data-number">32</span>
            <span class="infobox-content">comments + 2 reviews</span>
        </div>
        <div class="stat stat-success">8%</div>
    </div>


    <div class="infobox infobox-blue">
        <div class="infobox-icon"><i class="icon-twitter"></i></div>
        <div class="infobox-data">
            <span class="infobox-data-number">11</span>
            <span class="infobox-content">new followers</span>
        </div>
        <div class="badge badge-success">+32%</div>
    </div>





    <div class="infobox infobox-pink">
        <div class="infobox-icon"><i class="icon-shopping-cart"></i></div>
        <div class="infobox-data">
            <span class="infobox-data-number">8</span>
            <span class="infobox-content">new orders</span>
        </div>
        <div class="stat stat-important">4%</div>
    </div>



    <div class="infobox infobox-red">
        <div class="infobox-icon"><i class="icon-beaker"></i></div>
        <div class="infobox-data">
            <span class="infobox-data-number">7</span>
            <span class="infobox-content">experiemnts</span>
        </div>
    </div>



    <div class="infobox infobox-orange2">
        <div class="infobox-chart">
            <span class="sparkline" data-values="196,128,202,177,154,94,100,170,224"></span>
        </div>
        <div class="infobox-data">
            <span class="infobox-data-number">6,251</span>
            <span class="infobox-content">pageviews</span>
        </div>
        <div class="badge badge-success">7.2% <i class="icon-arrow-up"></i></div>
    </div>
    
    
    <div class="infobox infobox-blue2">
        <div class="infobox-progress">
            <div class="easy-pie-chart percentage" data-percent="42" data-size="46"><span class="percent">42</span>%
            </div>
        </div>
        
        <div class="infobox-data">
            <span class="infobox-text">traffic used</span>
            <span class="infobox-content"><span class="approx">~</span> 58GB remaining</span>
        </div>
    </div>

    
    <div class="space-6"></div>
    
        
    <div class="infobox infobox-small infobox-dark infobox-green">
        <div class="infobox-progress">
            <div class="easy-pie-chart percentage" data-percent="61" data-size="39">
                <span class="percent">61</span>%
            </div>
        </div>
        <div class="infobox-data">
            <span class="infobox-content"><b>Task</b></span>
            <br />
            <span class="infobox-content">Completion</span>
        </div>
    </div>
    
    <div class="infobox infobox-small infobox-dark infobox-blue">
        <div class="infobox-chart">
            <span class="sparkline" data-values="3,4,2,3,4,4,2,2"></span>
        </div>
        <div class="infobox-data">
            <span class="infobox-content"><b>Earnings</b></span>
            <br />
            <span class="infobox-content">$32,000</span>
        </div>
    </div>
    
    <div class="infobox infobox-small infobox-dark infobox-grey">
        <div class="infobox-icon"><i class="icon-download-alt"></i></div>
        <div class="infobox-data">
            <span class="infobox-content"><b>Downloads</b></span>
            <br />
            <span class="infobox-content">1,205</span>
        </div>
    </div>


 </div>


 <div class="vspace"></div>


 <div class="span5">
    <div class="widget-box">
        <div class="widget-header widget-header-flat widget-header-small">
            <h5><i class="icon-signal"></i> Traffic Sources</h5>
            <div class="widget-toolbar no-border">
                <button class="btn btn-minier btn-primary dropdown-toggle" data-toggle="dropdown">This Week <i class="icon-angle-down icon-on-right"></i></button>
                <ul class="dropdown-menu dropdown-info pull-right dropdown-caret">
                    <li class="active"><a href="#">This Week</a></li>
                    <li><a href="#">Last Week</a></li>
                    <li><a href="#">This Month</a></li>
                    <li><a href="#">Last Month</a></li>
                </ul>
            </div>
        </div>
        
        <div class="widget-body">
         <div class="widget-main">
            <div id="piechart-placeholder"></div>
            
            <div class="hr hr8 hr-double"></div>
            
            <div class="clearfix">
                <div class="grid3">
                    <span class="grey"><i class="icon-facebook-sign icon-2x blue"></i> &nbsp; likes</span>
                    <h4 class="bigger pull-right">1,255</h4>
                </div>
                
                <div class="grid3">
                    <span class="grey"><i class="icon-twitter-sign icon-2x purple"></i> &nbsp; tweets</span>
                    <h4 class="bigger pull-right">941</h4>
                </div>
                
                <div class="grid3">
                    <span class="grey"><i class="icon-pinterest-sign icon-2x red"></i> &nbsp; pins</span>
                    <h4 class="bigger pull-right">1,050</h4>
                </div>
            </div>
         </div><!--/widget-main-->
        </div><!--/widget-body-->
    </div><!--/widget-box-->


 </div><!--/span-->
 

</div><!--/row-->


<div class="hr hr32 hr-dotted"></div>


<div class="row-fluid">


    <div class="span5">
        <div class="widget-box transparent">
            <div class="widget-header widget-header-flat">
                <h4 class="lighter"><i class="icon-star orange"></i>Popular Domains</h4>
                <div class="widget-toolbar">
                    <a href="#" data-action="collapse"><i class="icon-chevron-up"></i></a>
                </div>
            </div>
            
            <div class="widget-body">
             <div class="widget-main no-padding">
              <table id="table_bug_report" class="table table-bordered table-striped">
                <thead>
                    <tr>
                        <th><i class="icon-caret-right blue"></i>name</th>
                        <th><i class="icon-caret-right blue"></i>price</th>
                        <th class="hidden-phone"><i class="icon-caret-right blue"></i>status</th>
                    </tr>
                </thead>

                <tbody>
                    <tr>
                        <td class="">internet.com</td>
                        <td>
                            <small><s class="red">$29.99</s></small>
                            <b class="green">$19.99</b>
                        </td>
                        <td class="hidden-phone"><span class="label label-info arrowed-right arrowed-in">on sale</span></td>
                    </tr>
                    
                    <tr>
                        <td class="">online.com</td>
                        <td>
                            <b class="blue">$16.45</b>
                        </td>
                        <td class="hidden-phone"><span class="label label-success arrowed-in arrowed-in-right">approved</span></td>
                    </tr>
                    
                    <tr>
                        <td class="">newnet.com</td>
                        <td>
                            <b class="blue">$15.00</b>
                        </td>
                        <td class="hidden-phone"><span class="label label-important arrowed">pending</span></td>
                    </tr>
                    <tr>
                        <td class="">web.com</td>
                        <td>
                            <small><s class="red">$19.95</s></small>
                            <b class="green">$14.99</b>
                        </td>
                        <td class="hidden-phone"><span class="label arrowed"><s>out of stock</s></span></td>
                    </tr>
                    
                    <tr>
                        <td class="">domain.com</td>
                        <td>
                            <b class="blue">$12.00</b>
                        </td>
                        <td class="hidden-phone"><span class="label label-warning arrowed arrowed-right">SOLD</span></td>
                    </tr>

                </tbody>
              </table>
             </div><!--/widget-main-->
            </div><!--/widget-body-->
        </div><!--/widget-box-->
    </div>


    
    <div class="span7">
      <div class="widget-box transparent">
        <div class="widget-header widget-header-flat">
            <h4 class="lighter"><i class="icon-signal"></i> Sale Stats</h4>
            <div class="widget-toolbar">
                <a href="#" data-action="collapse"><i class="icon-chevron-up"></i></a>
            </div>
        </div>
        
        <div class="widget-body">
         <div class="widget-main padding-5">
            <div id="sales-charts"></div>
         </div><!--/widget-main-->
        </div><!--/widget-body-->
      </div><!--/widget-box-->
    </div>

</div>



<div class="hr hr32 hr-dotted"></div>



<div class="row-fluid">

 <div class="span6">
    <div class="widget-box transparent">
        
        <div class="widget-header">
            <h4 class="lighter smaller"><i class="icon-rss orange"></i>RECENT</h4>
            <div class="widget-toolbar no-border">
                <ul class="nav nav-tabs" id="recent-tab">
                    <li class="active"><a data-toggle="tab" href="#task-tab">Tasks</a></li>
                    <li><a data-toggle="tab" href="#member-tab">Members</a></li>
                    <li><a data-toggle="tab" href="#comment-tab">Comments</a></li>
                </ul>
            </div>
        </div>
        
        <div class="widget-body">
         <div class="widget-main padding-5">
            <div class="tab-content padding-8">
                <div id="task-tab" class="tab-pane active">
                    <h4 class="smaller lighter green"><i class="icon-list"></i> Sortable Lists</h4>
                    <ul id="tasks" class="item-list">
                        <li class="item-orange clearfix">
                            <label class="inline"><input type="checkbox" /><span class="lbl"> Answering customer questions</span></label>
                            <div class="pull-right easy-pie-chart percentage" data-size="30" data-color="#ECCB71" data-percent="42">
                                <span class="percent">42</span>%
                            </div>
                        </li>
                        <li class="item-red clearfix">
                            <label class="inline"><input type="checkbox" /><span class="lbl"> Fixing bugs</span></label>
                            <div class="pull-right">
                                <div class="btn-group">
                                    <button class="btn btn-mini btn-info"><i class="icon-edit"></i></button>
                                    <button class="btn btn-mini btn-danger "><i class="icon-trash"></i></button>
                                    <button class="btn btn-mini btn-yellow"><i class="icon-flag"></i></button>
                                </div>
                            </div>
                        </li>
                        <li class="item-default clearfix">
                            <label class="inline"><input type="checkbox" /><span class="lbl"> Adding new features</span></label>
                            <div class="inline pull-right position-relative">
                                <button class="btn btn-minier bigger btn-yellow dropdown-toggle" data-toggle="dropdown"><i class="icon-angle-down icon-only"></i></button>
                                <ul class="dropdown-menu dropdown-icon-only dropdown-yellow pull-right dropdown-caret dropdown-closer">
                                    <li><a href="#" class="tooltip-success" data-rel="tooltip" title="Mark&nbsp;as&nbsp;done" data-placement="left"><span class="green"><i class="icon-ok"></i></span></a></li>
                                    <li><a href="#" class="tooltip-error" data-rel="tooltip" title="Delete" data-placement="left"><span class="red"><i class="icon-trash"></i></span></a></li>
                                </ul>
                            </div>
                        </li>
                        <li class="item-blue">
                            <label class="inline"><input type="checkbox" /><span class="lbl"> Upgrading scripts used in template</span></label>
                        </li>
                        <li class="item-grey">
                            <label class="inline"><input type="checkbox" /><span class="lbl"> Adding new skins</span></label>
                        </li>
                        <li class="item-green">
                            <label class="inline"><input type="checkbox" /><span class="lbl"> Updating server software up</span></label>
                        </li>
                        <li class="item-pink">
                            <label class="inline"><input type="checkbox" /><span class="lbl"> Cleaning up</span></label>
                        </li>
                    </ul>
                </div>
                
                
                
                <div id="member-tab" class="tab-pane">
                    <div class="clearfix">
                        <div class="itemdiv memberdiv">
                            <div class="user">
                                <img alt="Bob's avatar" src="media/images/user.jpg" />
                            </div>
                            
                            <div class="body">
                                <div class="name"><a href="#">Bob Doe</a></div>
                                <div class="time"><i class="icon-time"></i> <span class="green">20 min</span></div>
                                <div>
                                    <span class="label label-warning">pending</span>
                                    <div class="inline position-relative">
                                        <button class="btn btn-minier bigger btn-yellow dropdown-toggle" data-toggle="dropdown"><i class="icon-angle-down icon-only"></i></button>
                                        <ul class="dropdown-menu dropdown-icon-only dropdown-yellow pull-right dropdown-caret dropdown-close">
                                            <li><a href="#" class="tooltip-success" data-rel="tooltip" title="Approve" data-placement="right"><span class="green"><i class="icon-ok"></i></span></a></li>
                                            <li><a href="#" class="tooltip-warning" data-rel="tooltip" title="Reject" data-placement="right"><span class="orange"><i class="icon-remove"></i></span> </a></li>
                                            <li><a href="#" class="tooltip-error" data-rel="tooltip" title="Delete" data-placement="right"><span class="red"><i class="icon-trash"></i></span> </a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
            
                        <div class="itemdiv memberdiv">
                            <div class="user">
                                <img alt="Joe's Avatar" src="media/images/avatar2.png" />
                            </div>
                            
                            <div class="body">
                                <div class="name"><a href="#">Joe Doe</a></div>
                                <div class="time"><i class="icon-time"></i> <span class="green">1 hour</span></div>
                                <div>
                                    <span class="label label-warning">pending</span>
                                    <div class="inline position-relative">
                                        <button class="btn btn-minier bigger btn-yellow dropdown-toggle" data-toggle="dropdown"><i class="icon-angle-down icon-only"></i></button>
                                        <ul class="dropdown-menu dropdown-icon-only dropdown-yellow pull-right dropdown-caret dropdown-close">
                                            <li><a href="#" class="tooltip-success" data-rel="tooltip" title="Approve" data-placement="left"><span class="green"><i class="icon-ok"></i></span></a></li>
                                            <li><a href="#" class="tooltip-warning" data-rel="tooltip" title="Reject" data-placement="left"><span class="orange"><i class="icon-remove"></i></span> </a></li>
                                            <li><a href="#" class="tooltip-error" data-rel="tooltip" title="Delete" data-placement="left"><span class="red"><i class="icon-trash"></i></span> </a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>

              
                        <div class="itemdiv memberdiv">
                            <div class="user">
                                <img alt="Jim's Avatar" src="media/images/avatar.png" />
                            </div>
                            
                            <div class="body">
                                <div class="name"><a href="#">Jim Doe</a></div>
                                <div class="time"><i class="icon-time"></i> <span class="green">2 hour</span></div>
                                <div>
                                    <span class="label label-warning">pending</span>
                                    <div class="inline position-relative">
                                        <button class="btn btn-minier bigger btn-yellow dropdown-toggle" data-toggle="dropdown"><i class="icon-angle-down icon-only"></i></button>
                                        <ul class="dropdown-menu dropdown-icon-only dropdown-yellow pull-right dropdown-caret dropdown-close">
                                            <li><a href="#" class="tooltip-success" data-rel="tooltip" title="Approve" data-placement="right"><span class="green"><i class="icon-ok"></i></span></a></li>
                                            <li><a href="#" class="tooltip-warning" data-rel="tooltip" title="Reject" data-placement="right"><span class="orange"><i class="icon-remove"></i></span> </a></li>
                                            <li><a href="#" class="tooltip-error" data-rel="tooltip" title="Delete" data-placement="right"><span class="red"><i class="icon-trash"></i></span> </a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>


                        <div class="itemdiv memberdiv">
                            <div class="user">
                                <img alt="Alex's Avatar" src="media/images/avatar2.png" />
                            </div>
                            
                            <div class="body">
                                <div class="name"><a href="#">Alex Doe</a></div>
                                <div class="time"><i class="icon-time"></i> <span class="green">3 hour</span></div>
                                <div class="label label-important">blocked</div>
                            </div>
                        </div>


                        <div class="itemdiv memberdiv">
                            <div class="user">
                                <img alt="Bob's Avatar" src="media/images/avatar2.png" />
                            </div>
                            
                            <div class="body">
                                <div class="name"><a href="#">Bob Doe</a></div>
                                <div class="time"><i class="icon-time"></i> <span class="green">6 hour</span> </div>
                                <div class="label label-success arrowed-in">approved</div>
                            </div>
                        </div>

                        
                        <div class="itemdiv memberdiv">
                            <div class="user">
                                <img alt="Susan's Avatar" src="media/images/avatar3.png" />
                            </div>
                            
                            <div class="body">
                                <div class="name"><a href="#">Susan</a></div>
                                <div class="time"><i class="icon-time"></i> <span class="green">yesterday</span></div>
                                <div class="label label-success arrowed-in">approved</div>
                            </div>
                        </div>

              
                        <div class="itemdiv memberdiv">
                            <div class="user">
                                <img alt="Phil's Avatar" src="media/images/avatar4.png" />
                            </div>
                            
                            <div class="body">
                                <div class="name"><a href="#">Phil Doe</a></div>
                                <div class="time"><i class="icon-time"></i> <span class="green">2 days ago</span></div>
                                <div class="label label-info arrowed-in  arrowed-in-right">online</div>
                            </div>
                        </div>

                        
                        <div class="itemdiv memberdiv">
                            <div class="user">
                                <img alt="Alexa's Avatar" src="media/images/avatar1.png" />
                            </div>
                            
                            <div class="body">
                                <div class="name"><a href="#">Alexa Doe</a></div>
                                <div class="time"><i class="icon-time"></i> <span class="green">3 days ago</span></div>
                                <div class="label label-success arrowed-in">approved</div>
                            </div>
                        </div>
                    </div>

                    <div class="center">
                        <i class="icon-group icon-2x green"></i> &nbsp; <a href="#">See all members &nbsp; <i class="icon-arrow-right"></i></a>
                    </div>
                    <div class="hr hr-double hr8"></div>

                </div><!-- member-tab -->
                
                
                
                <div id="comment-tab" class="tab-pane">
                    <div class="comments">
                        <div class="itemdiv commentdiv">
                            <div class="user">
                                <img alt="Bob's Avatar" src="media/images/avatar.png" />
                            </div>
                            
                            <div class="body">
                                <div class="name"><a href="#">Bob Doe</a></div>
                                <div class="time"><i class="icon-time"></i> <span class="green">6 min</span></div>
                                <div class="text">
                                    <i class="icon-quote-left"></i> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque commodo massa sed ipsum porttitor facilisis &hellip;
                                </div>
                            </div>
                            
                            <div class="tools">
                                <div class="inline position-relative">
                                    <button class="btn btn-minier bigger btn-yellow dropdown-toggle" data-toggle="dropdown"><i class="icon-angle-down icon-only"></i></button>
                                    <ul class="dropdown-menu dropdown-icon-only dropdown-yellow pull-right dropdown-caret dropdown-close">
                                        <li><a href="#" class="tooltip-success" data-rel="tooltip" title="Approve" data-placement="left"><span class="green"><i class="icon-ok"></i></span></a></li>
                                        <li><a href="#" class="tooltip-warning" data-rel="tooltip" title="Reject" data-placement="left"><span class="orange"><i class="icon-remove"></i></span> </a></li>
                                        <li><a href="#" class="tooltip-error" data-rel="tooltip" title="Delete" data-placement="left"><span class="red"><i class="icon-trash"></i></span> </a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        
                        
                        <div class="itemdiv commentdiv">
                            <div class="user">
                                <img alt="Jennifer's Avatar" src="media/images/avatar1.png" />
                            </div>
                            
                            <div class="body">
                                <div class="name"><a href="#">Jennifer</a></div>
                                <div class="time"><i class="icon-time"></i> <span class="blue">15 min</span></div>
                                <div class="text">
                                    <i class="icon-quote-left"></i> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque commodo massa sed ipsum porttitor facilisis &hellip; 
                                </div>
                            </div>
                            
                            <div class="tools">
                                <a href="#" class="btn btn-minier btn-info"><i class="icon-only icon-pencil"></i></a>
                                <a href="#" class="btn btn-minier btn-danger"><i class="icon-only icon-trash"></i></a>
                            </div>
                        </div>
                        
                        
                        <div class="itemdiv commentdiv">
                            <div class="user">
                                <img alt="Joe's Avatar" src="media/images/avatar2.png" />
                            </div>
                            
                            <div class="body">
                                <div class="name"><a href="#">Joe</a></div>
                                <div class="time"><i class="icon-time"></i> <span class="orange">22 min</span></div>
                                <div class="text">
                                    <i class="icon-quote-left"></i> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque commodo massa sed ipsum porttitor facilisis &hellip;
                                </div>
                            </div>
                            
                            <div class="tools">
                                <a href="#" class="btn btn-minier btn-info"><i class="icon-only icon-pencil"></i></a>
                                <a href="#" class="btn btn-minier btn-danger"><i class="icon-only icon-trash"></i></a>
                            </div>
                        </div>
                        
                        
                        <div class="itemdiv commentdiv">
                            <div class="user">
                                <img alt="Rita's Avatar" src="media/images/avatar3.png" />
                            </div>
                            
                            <div class="body">
                                <div class="name"><a href="#">Rita</a></div>
                                <div class="time"><i class="icon-time"></i> <span class="red">50 min</span></div>
                                <div class="text">
                                    <i class="icon-quote-left"></i> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque commodo massa sed ipsum porttitor facilisis &hellip;
                                </div>
                            </div>
                            
                            <div class="tools">
                                <a href="#" class="btn btn-minier btn-info"><i class="icon-only icon-pencil"></i></a>
                                <a href="#" class="btn btn-minier btn-danger"><i class="icon-only icon-trash"></i></a>
                            </div>
                        </div>
                        
                    </div>
                    
                    <div class="hr hr8"></div>
                    <div class="center">
                            <i class="icon-comments-alt icon-2x green"></i> &nbsp; <a href="#">See all comments &nbsp; <i class="icon-arrow-right"></i></a>
                    </div>
                    <div class="hr hr-double hr8"></div>
                    
                </div>
            </div>
         </div><!--/widget-main-->
        </div><!--/widget-body-->
        
        
    </div><!--/widget-box-->
 </div><!--/span-->
 
 <div class="span6">
    <div class="widget-box ">
        
        <div class="widget-header">
            <h4 class="lighter smaller"><i class="icon-comment blue"></i>Conversation</h4>
        </div>
        
        <div class="widget-body">
         <div class="widget-main no-padding">
            
            <div class="dialogs">
                <div class="itemdiv dialogdiv">
                    <div class="user">
                        <img alt="Alexa's Avatar" src="media/images/avatar1.png" />
                    </div>
                    
                    <div class="body">
                        <div class="time"><i class="icon-time"></i> <span class="green">4 sec</span></div>
                        <div class="name"><a href="#">Alexa</a></div>
                        <div class="text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque commodo massa sed ipsum porttitor facilisis. </div>
                        
                        <div class="tools">
                            <a href="#" class="btn btn-minier btn-info"><i class="icon-only icon-share-alt"></i></a>
                        </div>
                    </div>
                </div>
                
                
                <div class="itemdiv dialogdiv">
                    <div class="user">
                        <img alt="John's Avatar" src="media/images/avatar.png" />
                    </div>
                    
                    <div class="body">
                        <div class="time"><i class="icon-time"></i> <span class="blue">38 sec</span></div>
                        <div class="name"><a href="#">John</a></div>
                        <div class="text">Raw denim you probably haven't heard of them jean shorts Austin.</div>
                        
                        <div class="tools">
                            <a href="#" class="btn btn-minier btn-info"><i class="icon-only icon-share-alt"></i></a>
                        </div>
                    </div>
                </div>
                
                
                <div class="itemdiv dialogdiv">
                    <div class="user">
                        <img alt="Bob's avatar" src="media/images/user.jpg" />
                    </div>
                    
                    <div class="body">
                        <div class="time"><i class="icon-time"></i> <span class="orange">2 min</span></div>
                        <div class="name"><a href="#">Bob</a> <span class="label label-info arrowed arrowed-in-right">admin</span></div>
                        <div class="text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque commodo massa sed ipsum porttitor facilisis. </div>
                        
                        <div class="tools">
                            <a href="#" class="btn btn-minier btn-info"><i class="icon-only icon-share-alt"></i></a>
                        </div>
                    </div>
                </div>
                
                
                <div class="itemdiv dialogdiv">
                    <div class="user">
                        <img alt="Jim's Avatar" src="media/images/avatar4.png" />
                    </div>
                    
                    <div class="body">
                        <div class="time"><i class="icon-time"></i> <span class="muted">3 min</span></div>
                        <div class="name"><a href="#">Jim</a></div>
                        <div class="text">Raw denim you probably haven't heard of them jean shorts Austin.</div>
                        
                        <div class="tools">
                            <a href="#" class="btn btn-minier btn-info"><i class="icon-only icon-share-alt"></i></a>
                        </div>
                    </div>
                </div>
                
                
                <div class="itemdiv dialogdiv">
                    <div class="user">
                        <img alt="Alexa's Avatar" src="media/images/avatar1.png" />
                    </div>
                    
                    <div class="body">
                        <div class="time"><i class="icon-time"></i> <span class="green">4 min</span></div>
                        <div class="name"><a href="#">Alexa</a></div>
                        <div class="text">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</div>
                        
                        <div class="tools">
                            <a href="#" class="btn btn-minier btn-info"><i class="icon-only icon-share-alt"></i></a>
                        </div>
                    </div>
                </div>
            </div>

            
            <form>
                <div class="form-actions input-append">
                    <input placeholder="Type your message here ..." type="text" class="width-75" name="message" />
                    <button class="btn btn-small btn-info no-radius" onclick="return false;"><i class="icon-share-alt"></i> <span class="hidden-phone">Send</span></button>
                </div>
            </form>
        
         </div><!--/widget-main-->
        </div><!--/widget-body-->
        
    </div><!--/widget-box-->
 </div><!--/span-->

</div><!--/row-->







<!-- PAGE CONTENT ENDS HERE -->
                         </div><!--/row-->
    
                    </div><!--/#page-content-->
                      

                    <div id="ace-settings-container">
                        <div class="btn btn-app btn-mini btn-warning" id="ace-settings-btn">
                            <i class="icon-cog"></i>
                        </div>
                        <div id="ace-settings-box">
                            <div>
                                <div class="pull-left">
                                    <select id="skin-colorpicker" class="hidden">
                                        <option data-class="default" value="#438EB9">#438EB9</option>
                                        <option data-class="skin-1" value="#222A2D">#222A2D</option>
                                        <option data-class="skin-2" value="#C6487E">#C6487E</option>
                                        <option data-class="skin-3" value="#D0D0D0">#D0D0D0</option>
                                    </select>
                                </div>
                                <span>&nbsp; Choose Skin</span>
                            </div>
                            <div><input type="checkbox" class="ace-checkbox-2" id="ace-settings-header" /><label class="lbl" for="ace-settings-header"> Fixed Header</label></div>
                            <div><input type="checkbox" class="ace-checkbox-2" id="ace-settings-sidebar" /><label class="lbl" for="ace-settings-sidebar"> Fixed Sidebar</label></div>
                        </div>
                    </div><!--/#ace-settings-container-->


            </div><!-- #main-content -->


        </div><!--/.fluid-container#main-container-->



        
        <a href="#" id="btn-scroll-up" class="btn btn-small btn-inverse">
            <i class="icon-double-angle-up icon-only"></i>
        </a>

        <?php include"_script.php"?>

        <!-- inline scripts related to this page -->
        
        <script type="text/javascript">
$(function() {

    $('.dialogs,.comments').slimScroll({
        height: '300px'
    });
    
    $('#tasks').sortable();
    $('#tasks').disableSelection();
    $('#tasks input:checkbox').removeAttr('checked').on('click', function(){
        if(this.checked) $(this).closest('li').addClass('selected');
        else $(this).closest('li').removeClass('selected');
    });

    var oldie = $.browser.msie && $.browser.version < 9;
    $('.easy-pie-chart.percentage').each(function(){
        var $box = $(this).closest('.infobox');
        var barColor = $(this).data('color') || (!$box.hasClass('infobox-dark') ? $box.css('color') : 'rgba(255,255,255,0.95)');
        var trackColor = barColor == 'rgba(255,255,255,0.95)' ? 'rgba(255,255,255,0.25)' : '#E2E2E2';
        var size = parseInt($(this).data('size')) || 50;
        $(this).easyPieChart({
            barColor: barColor,
            trackColor: trackColor,
            scaleColor: false,
            lineCap: 'butt',
            lineWidth: parseInt(size/10),
            animate: oldie ? false : 1000,
            size: size
        });
    })

    $('.sparkline').each(function(){
        var $box = $(this).closest('.infobox');
        var barColor = !$box.hasClass('infobox-dark') ? $box.css('color') : '#FFF';
        $(this).sparkline('html', {tagValuesAttribute:'data-values', type: 'bar', barColor: barColor , chartRangeMin:$(this).data('min') || 0} );
    });
    
    



  var data = [
    { label: "social networks",  data: 38.7, color: "#68BC31"},
    { label: "search engines",  data: 24.5, color: "#2091CF"},
    { label: "ad campaings",  data: 8.2, color: "#AF4E96"},
    { label: "direct traffic",  data: 18.6, color: "#DA5430"},
    { label: "other",  data: 10, color: "#FEE074"}
  ];
 var placeholder = $('#piechart-placeholder').css({'width':'90%' , 'min-height':'150px'});
 $.plot(placeholder, data, {
    
    series: {
        pie: {
            show: true,
            tilt:0.8,
            highlight: {
                opacity: 0.25
            },
            stroke: {
                color: '#fff',
                width: 2
            },
            startAngle: 2
            
        }
    },
    legend: {
        show: true,
        position: "ne", 
        labelBoxBorderColor: null,
        margin:[-30,15]
    }
    ,
    grid: {
        hoverable: true,
        clickable: true
    },
    tooltip: true, //activate tooltip
    tooltipOpts: {
        content: "%s : %y.1",
        shifts: {
            x: -30,
            y: -50
        }
    }
    
 });

 
  var $tooltip = $("<div class='tooltip top in' style='display:none;'><div class='tooltip-inner'></div></div>").appendTo('body');
  placeholder.data('tooltip', $tooltip);
  var previousPoint = null;

  placeholder.on('plothover', function (event, pos, item) {
    if(item) {
        if (previousPoint != item.seriesIndex) {
            previousPoint = item.seriesIndex;
            var tip = item.series['label'] + " : " + item.series['percent']+'%';
            $(this).data('tooltip').show().children(0).text(tip);
        }
        $(this).data('tooltip').css({top:pos.pageY + 10, left:pos.pageX + 10});
    } else {
        $(this).data('tooltip').hide();
        previousPoint = null;
    }
    
 });






        var d1 = [];
        for (var i = 0; i < Math.PI * 2; i += 0.5) {
            d1.push([i, Math.sin(i)]);
        }

        var d2 = [];
        for (var i = 0; i < Math.PI * 2; i += 0.5) {
            d2.push([i, Math.cos(i)]);
        }

        var d3 = [];
        for (var i = 0; i < Math.PI * 2; i += 0.2) {
            d3.push([i, Math.tan(i)]);
        }
        

        var sales_charts = $('#sales-charts').css({'width':'100%' , 'height':'220px'});
        $.plot("#sales-charts", [
            { label: "Domains", data: d1 },
            { label: "Hosting", data: d2 },
            { label: "Services", data: d3 }
        ], {
            hoverable: true,
            shadowSize: 0,
            series: {
                lines: { show: true },
                points: { show: true }
            },
            xaxis: {
                tickLength: 0
            },
            yaxis: {
                ticks: 10,
                min: -2,
                max: 2,
                tickDecimals: 3
            },
            grid: {
                backgroundColor: { colors: [ "#fff", "#fff" ] },
                borderWidth: 1,
                borderColor:'#555'
            }
        });


        $('[data-rel="tooltip"]').tooltip();
})




        </script>

    </body>
</html>
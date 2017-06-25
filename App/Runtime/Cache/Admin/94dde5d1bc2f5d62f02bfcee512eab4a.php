<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
<title>Thin Admin</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<!-- Bootstrap -->
<link href="/huanhuan/Public/Admin/Final-HTML/css/bootstrap.css" rel="stylesheet" media="screen">
<link href="/huanhuan/Public/Admin/Final-HTML/css/thin-admin.css" rel="stylesheet" media="screen">
<link href="/huanhuan/Public/Admin/Final-HTML/css/font-awesome.css" rel="stylesheet" media="screen">
<link href="/huanhuan/Public/Admin/Final-HTML/style/style.css" rel="stylesheet">
<link href="/huanhuan/Public/Admin/Final-HTML/style/dashboard.css" rel="stylesheet">

<!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
<!--[if lt IE 9]>
      <script src="../../assets/js/html5shiv.js"></script>
      <script src="../../assets/js/respond.min.js"></script>
    <![endif]-->

</head>
<body>
<div class="container">
  <div class="top-navbar header b-b"> <a data-original-title="Toggle navigation" class="toggle-side-nav pull-left" href="#"><i class="icon-reorder"></i> </a>
    <div class="brand pull-left"> <a href="index.html"><img src="/huanhuan/Public/Admin/Final-HTML/images/logo.png" width="147" height="33"></a></div>
    <ul class="nav navbar-nav navbar-right  hidden-xs">
      <li class="dropdown"> <a data-toggle="dropdown" class="dropdown-toggle" href="#"> <i class="icon-warning-sign"></i> <span class="badge">5</span> </a>
        <ul class="dropdown-menu extended notification">
          <li class="title">
            <p>You have 5 new notifications</p>
          </li>
          <li> <a href="#"> <span class="label label-success"><i class="icon-plus"></i></span> <span class="message">New user registration.</span> <span class="time">1 mins</span> </a> </li>
          <li> <a href="#"> <span class="label label-danger"><i class="icon-warning-sign"></i></span> <span class="message">High CPU load on cluster #2.</span> <span class="time">5 mins</span> </a> </li>
          <li> <a href="#"> <span class="label label-success"><i class="icon-plus"></i></span> <span class="message">New user registration.</span> <span class="time">10 mins</span> </a> </li>
          <li> <a href="#"> <span class="label label-info"><i class="icon-bullhorn"></i></span> <span class="message">New items are in queue.</span> <span class="time">25 mins</span> </a> </li>
          <li> <a href="#"> <span class="label label-warning"><i class="icon-bolt"></i></span> <span class="message">Disk space to 85% full.</span> <span class="time">35 mins</span> </a> </li>
          <li class="footer"> <a href="#">View all notifications</a> </li>
        </ul>
      </li>
      <li class="dropdown"> <a data-toggle="dropdown" class="dropdown-toggle" href="#"> <i class="icon-tasks"></i> <span class="badge">7</span> </a>
        <ul class="dropdown-menu extended notification">
          <li class="title">
            <p>You have 7 pending tasks</p>
          </li>
          <li> <a href="#"> <span class="task"> <span class="desc">Preparing new release</span> <span class="percent">30%</span> </span>
            <div class="progress progress-small">
              <div class="progress-bar progress-bar-info" style="width: 30%;"></div>
            </div>
            </a> </li>
          <li> <a href="#"> <span class="task"> <span class="desc">Change management</span> <span class="percent">80%</span> </span>
            <div class="progress progress-small progress-striped active">
              <div class="progress-bar progress-bar-danger" style="width:80%;"></div>
            </div>
            </a> </li>
          <li> <a href="#"> <span class="task"> <span class="desc">Mobile development</span> <span class="percent">60%</span> </span>
            <div class="progress progress-small">
              <div class="progress-bar progress-bar-success" style="width: 60%;"></div>
            </div>
            </a> </li>
          <li> <a href="#"> <span class="task"> <span class="desc">Database migration</span> <span class="percent">20%</span> </span>
            <div class="progress progress-small">
              <div class="progress-bar progress-bar-warning" style="width: 20%;"></div>
            </div>
            </a> </li>
          <li class="footer"> <a href="#">View all tasks</a> </li>
        </ul>
      </li>
      <li class="dropdown"> <a data-toggle="dropdown" class="dropdown-toggle" href="#"> <i class="icon-envelope"></i> <span class="badge">1</span> </a>
        <ul class="dropdown-menu extended notification">
          <li class="title">
            <p>You have 3 new messages</p>
          </li>
          <li> <a href="#"> <span class="photo"> <img src="/huanhuan/Public/Admin/Final-HTML/images/profile.png" width="34" height="34"></span> <span class="subject"> <span class="from">John Doe</span> <span class="time">Just Now</span> </span> <span class="text"> Consetetur sadipscing elitr... </span> </a> </li>
          <li> <a href="#"> <span class="photo"><img src="/huanhuan/Public/Admin/Final-HTML/images/profile.png" width="34" height="34"></span> <span class="subject"> <span class="from">John Doe</span> <span class="time">35 mins</span> </span> <span class="text"> Sed diam nonumy... </span> </a> </li>
          <li> <a href="#"> <span class="photo"><img src="/huanhuan/Public/Admin/Final-HTML/images/profile.png" width="34" height="34"></span> <span class="subject"> <span class="from">John Doe</span> <span class="time">5 hours</span> </span> <span class="text"> No sea takimata sanctus... </span> </a> </li>
          <li class="footer"> <a href="#">View all messages</a> </li>
        </ul>
      </li>
      <li class="dropdown user  hidden-xs"> <a data-toggle="dropdown" class="dropdown-toggle" href="#"> <i class="icon-male"></i> <span class="username">John Doe</span> <i class="icon-caret-down small"></i> </a>
        <ul class="dropdown-menu">
          <li><a href="user_profile.html"><i class="icon-user"></i> My Profile</a></li>
          <li><a href="fullCalendar.html"><i class="icon-calendar"></i> My Calendar</a></li>
          <li><a href="#"><i class="icon-tasks"></i> My Tasks</a></li>
          <li class="divider"></li>
          <li><a href="login.html"><i class="icon-key"></i> Log Out</a></li>
        </ul>
      </li>
    </ul>
        <form class="pull-right" >
                    <input type="search" placeholder="Search..." class="search" id="search-input">
    </form>
  </div>
</div>
<!-- 头部结束 -->
<div class="wrapper">
  <div class="left-nav">
    <div id="side-nav">
      <ul id="nav">
        <li> <a href="index.html"> <i class="icon-dashboard"></i> Dashboard </a> </li>
        <li> <a href="#"> <i class="icon-desktop"></i> UI Features <span class="label label-info pull-right">7</span> <i class="arrow icon-angle-left"></i></a>
          <ul class="sub-menu">
            <li> <a href="general.html"> <i class="icon-angle-right"></i> General </a> </li>
            <li> <a href="buttons.html"> <i class="icon-angle-right"></i> Buttons </a> </li>
            <li> <a href="tabs.html"> <i class="icon-angle-right"></i> Tabs</a> </li>
            <li> <a href="accordions.html"> <i class="icon-angle-right"></i> Accordions </a> </li>
            <li> <a href="nestable.html"> <i class="icon-angle-right"></i> Nestable List </a> </li>
            <li> <a href="icons.html"> <i class="icon-angle-right"></i> Icons </a> </li>
            <li> <a href="grid.html"> <i class="icon-angle-right"></i> Grid </a> </li>
            <li> <a href="dialogs.html"> <i class="icon-angle-right"></i> Dialogs </a> </li>
          </ul>
        </li>
        <li> <a href="#"> <i class="icon-edit"></i> 权限管理 <span class="label label-info pull-right">4</span> <i class="arrow icon-angle-left"></i></a>
         <ul class="sub-menu opened">
            <li class="current"> <a href="<?php echo U('Rule/lists');?>"> <i class="icon-angle-right"></i> 管理员列表 </a> </li>
            <li> <a href="<?php echo U('Rule/manage');?>"> <i class="icon-angle-right"></i> 用户组管理</a> </li>
            <li> <a href="<?php echo U('Rule/ruleLists');?>"> <i class="icon-angle-right"></i> 权限管理 </a> </li>
            <li> <a href="wizard.html"> <i class="icon-angle-right"></i> Form Wizard </a> </li>
            <li> <a href="multipleFile_upload.html"> <i class="icon-angle-right"></i> Multiple File Upload </a> </li>
            <li> <a href="dropzone_upload.html"> <i class="icon-angle-right"></i> Dropzone File Upload </a> </li>
          </ul>
        </li>
        
        <li> <a href="#"> <i class="icon-table"></i> Tables <span class="label label-info pull-right">2</span> <i class="arrow icon-angle-left"></i></a>
        <ul class="sub-menu">
            <li> <a href="static_table.html"> <i class="icon-angle-right"></i> Static </a> </li>
            <li> <a href="dynamic_table.html"> <i class="icon-angle-right"></i> Dynamic </a> </li>
          </ul>
         </li>
        <li> <a href="chart.html"> <i class="icon-bar-chart"></i> Charts &amp; Statistics </a> </li>
        <li> <a href="gallery.html"> <i class="icon-picture"></i> Gallery </a> </li>
        <li> <a href="timeline.html"> <i class="icon-time"></i> Timeline </a> </li>
        <li> <a href="#"> <i class="icon-folder-open-alt"></i> Pages <span class="label label-info pull-right">5</span> <i class="arrow icon-angle-left"></i></a>
          <ul class="sub-menu">
            <li> <a href="login.html"> <i class="icon-angle-right"></i> Login </a> </li>
            <li> <a href="user_profile.html"> <i class="icon-angle-right"></i> User Profile </a> </li>
            <li> <a href="mailbox.html"> <i class="icon-angle-right"></i> Mailbox </a> </li>
            <li> <a href="fullCalendar.html"> <i class="icon-angle-right"></i> Calendar </a> </li>
            <li> <a href="404-page.html"> <i class="icon-angle-right"></i> 404-page </a> </li>
          </ul>
        </li>
      </ul>
    </div>
  </div>
  <!-- 左侧导航 -->
  
  <div class="page-content">
 
    <div class="panel">
                <div class="panel-heading">管理员列表 </div>
                <div class="panel-body"> <a href="<?php echo U('Rule/addAdmin');?>" data-toggle="modal" class="btn btn-success"> 添加管理员 </a> <a href="#myModal2" data-toggle="modal" class="btn btn-warning"> Confirm </a> <a href="#myModal3" data-toggle="modal" class="btn btn-danger"> Alert ! </a> 
                  
                  <div aria-hidden="true" aria-labelledby="myModalLabel" role="dialog" tabindex="-1" id="myModal" class="modal fade" style="display: none;">
                    <div class="modal-dialog">
                      <div class="modal-content">
                        <div class="modal-header">
                          <button aria-hidden="true" data-dismiss="modal" class="close" type="button">x</button>
                          <h4 class="modal-title">Modal Tittle</h4>
                        </div>
                        <div class="modal-body"> Body goes here... </div>
                        <div class="modal-footer">
                          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                          <button type="button" class="btn btn-success">Save changes</button>
                        </div>
                      </div>
                    </div>
                  </div>
           
                  <div aria-hidden="true" aria-labelledby="myModalLabel" role="dialog" tabindex="-1" id="myModal2" class="modal fade" style="display: none;">
                    <div class="modal-dialog">
                      <div class="modal-content">
                        <div class="modal-header">
                          <button aria-hidden="true" data-dismiss="modal" class="close" type="button">x</button>
                          <h4 class="modal-title">Modal Tittle</h4>
                        </div>
                        <div class="modal-body"> Body goes here... </div>
                        <div class="modal-footer">
                          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                          <button type="button" class="btn btn-warning"> Confirm</button>
                        </div>
                      </div>
                    </div>
                  </div>
              
                  <div aria-hidden="true" aria-labelledby="myModalLabel" role="dialog" tabindex="-1" id="myModal3" class="modal fade">
                    <div class="modal-dialog">
                      <div class="modal-content">
                        <div class="modal-header">
                          <button aria-hidden="true" data-dismiss="modal" class="close" type="button">x</button>
                          <h4 class="modal-title">Modal Tittle</h4>
                        </div>
                        <div class="modal-body"> Body goes here... </div>
                        <div class="modal-footer">
                          <button type="button" class="btn btn-danger"> Ok</button>
                        </div>
                      </div>
                    </div>
                  </div>
                  
                  
                </div>
    <div class="row">
                <div class="col-lg-12">
          <div class="widget">
            
              <div class="body">

              <form method="post" class="form-horizontal">
                <fieldset>
                  <legend class="section">
                      
                  </legend>
                  
                  <div class="control-group">
                  <div class="col-md-3">
                    <label for="tooltip-enabled" class="control-label ">姓名</label>
                    </div>
                    <div class="col-md-9">
                    <div class="form-group">
                      <input type="text" name="username" placeholder="Hover over me.." data-original-title="Some explanation text here" data-placement="top" class="form-control" id="tooltip-enabled">
                    </div>
                    </div>
                  </div>
                  <div class="control-group">
                  <div class="col-md-3">
                    <label for="tooltip-enabled" class="control-label ">手机号</label>
                    </div>
                    <div class="col-md-9">
                    <div class="form-group">
                      <input type="text" name="phone" placeholder="Hover over me.." data-original-title="Some explanation text here" data-placement="top" class="form-control" id="tooltip-enabled">
                    </div>
                    </div>
                  </div>
                  <div class="control-group">
                  <div class="col-md-3">
                    <label for="tooltip-enabled" class="control-label ">邮箱</label>
                    </div>
                    <div class="col-md-9">
                    <div class="form-group">
                      <input type="text" name="email" placeholder="Hover over me.." data-original-title="Some explanation text here" data-placement="top" class="form-control" id="tooltip-enabled">
                    </div>
                    </div>
                  </div>
                   <div class="control-group">
                  <div class="col-md-3">
                    <label for="tooltip-enabled" class="control-label ">密码</label>
                    </div>
                    <div class="col-md-9">
                    <div class="form-group">
                      <input type="text" name="password" placeholder="Hover over me.." data-original-title="Some explanation text here" data-placement="top" class="form-control" id="tooltip-enabled">
                    </div>
                    </div>
                  </div>
           
                </fieldset>
                <div class="form-actions">
                  <div>
                    <button class="btn btn-primary" type="submit">保存</button>
                    <button class="btn btn-default" type="button">取消</button>
                  </div>
                </div>
              </form>
               
            </div>
          </div>
        </div>
    </div>
  </div>
  </div>
  </div>
<div class="bottom-nav footer"> 2013 &copy; Thin Admin by Riaxe Systems. </div>

<!-- jQuery (necessary for Bootstrap's JavaScript plugins) --> 
<script src="js/jquery.js"></script> 
<script src="js/bootstrap.min.js"></script> 
<script type="text/javascript" src="js/smooth-sliding-menu.js"></script>
<!--switcher html start-->
<div class="demo_changer active" style="right: 0px;">
                <div class="demo-icon"></div>
                <div class="form_holder">
                        

                    <div class="predefined_styles">
                        <a class="styleswitch" rel="a" href=""><img alt="" src="images/a.jpg"></a>  
                        <a class="styleswitch" rel="b" href=""><img alt="" src="images/b.jpg"></a>
                        <a class="styleswitch" rel="c" href=""><img alt="" src="images/c.jpg"></a>
                        <a class="styleswitch" rel="d" href=""><img alt="" src="images/d.jpg"></a>
                        <a class="styleswitch" rel="e" href=""><img alt="" src="images/e.jpg"></a>
                        <a class="styleswitch" rel="f" href=""><img alt="" src="images/f.jpg"></a>
                        <a class="styleswitch" rel="g" href=""><img alt="" src="images/g.jpg"></a>
                        <a class="styleswitch" rel="h" href=""><img alt="" src="images/h.jpg"></a>
                        <a class="styleswitch" rel="i" href=""><img alt="" src="images/i.jpg"></a>
                        <a class="styleswitch" rel="j" href=""><img alt="" src="images/j.jpg"></a>
                    </div>
                              
                </div>
            </div>
            
            
    <!--switcher html end-->
<script src="assets/switcher/switcher.js"></script> 
<script src="assets/switcher/moderziner.custom.js"></script> 
<link href="/huanhuan/Public/Admin/Final-HTML/assets/switcher/switcher.css" rel="stylesheet">
<link href="/huanhuan/Public/Admin/Final-HTML/assets/switcher/switcher-defult.css" rel="stylesheet">
<link rel="alternate stylesheet" type="text/css" href="assets/switcher/a.css" title="a" media="all" />
<link rel="alternate stylesheet" type="text/css" href="assets/switcher/b.css" title="b" media="all" />
<link rel="alternate stylesheet" type="text/css" href="assets/switcher/c.css" title="c" media="all" />
<link rel="alternate stylesheet" type="text/css" href="assets/switcher/d.css" title="d" media="all" />
<link rel="alternate stylesheet" type="text/css" href="assets/switcher/e.css" title="e" media="all" />
<link rel="alternate stylesheet" type="text/css" href="assets/switcher/f.css" title="f" media="all" />
<link rel="alternate stylesheet" type="text/css" href="assets/switcher/g.css" title="g" media="all" />
<link rel="alternate stylesheet" type="text/css" href="assets/switcher/h.css" title="h" media="all" />
<link rel="alternate stylesheet" type="text/css" href="assets/switcher/i.css" title="i" media="all" />
<link rel="alternate stylesheet" type="text/css" href="assets/switcher/j.css" title="j" media="all" />

</body>
</html>
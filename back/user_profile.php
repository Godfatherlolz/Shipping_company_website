<!DOCTYPE html>
<?php $state=2; ?>
<html>

<head>
    <meta charset="UTF-8">
    <title>User Profile | Josh Admin Template</title>
    <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->
    <!-- global css -->
    <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <!-- font Awesome -->
    <link href="vendors/font-awesome-4.2.0/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
    <link href="css/styles/black.css" rel="stylesheet" type="text/css" id="colorscheme" />
    <link href="css/panel.css" rel="stylesheet" type="text/css"/>
    <link href="css/metisMenu.css" rel="stylesheet" type="text/css"/>
    <!-- end of global css -->
    <!--page level css -->
    <link href="vendors/jasny-bootstrap/css/jasny-bootstrap.css" rel="stylesheet" type="text/css" />
    <link href="vendors/x-editable/css/bootstrap-editable.css" rel="stylesheet" type="text/css" />
    <link href="vendors/magnifier/css/imgmagnify.css" rel="stylesheet" />
    <link rel="stylesheet" href="vendors/iCheck/skins/all.css" />
    <link href="css/pages/user_profile.css" rel="stylesheet" type="text/css"/>
    <!--end of page level css-->
</head>

<body class="skin-josh">

    <div class="wrapper row-offcanvas row-offcanvas-left">


        <aside class="right-side">

            <section class="content">
                <div  class="row ">
                    <div class="col-md-12">
                        <div class="row ">
                            <div class="col-md-4">
                                <div class="form-group">
                                    <div class="text-center">
                                        <div class="fileinput fileinput-new" data-provides="fileinput">
                                            <div class="fileinput-new thumbnail">
                                                <img data-src="holder.js/366x218/#fff:#000" class="img-responsive" width="366px" height="218px" />
                                            </div>
                                            <div class="fileinput-preview fileinput-exists thumbnail" ></div>
                                            <div>
                                                <span class="btn btn-default btn-file">
                                                    <span class="fileinput-new">
                                                        Select image
                                                    </span>
                                                    <span class="fileinput-exists">Change</span>
                                                    <input type="file" name="..."></span>
                                                <a href="#" class="btn btn-default fileinput-exists" data-dismiss="fileinput">Remove</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="table-responsive">
                                    <table class="table  table-striped" id="users">

                                        <tr>
                                            <td>User Name</td>
                                            <td>
                                                <a href="#" data-pk="1" class="editable" data-title="Edit User Name">Bella</a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Email</td>
                                            <td>
                                                <a href="#" data-pk="1" class="editable" data-title="Edit E-mail">
                                                    gankunding@hotmail.com
                                                </a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                Phone Number
                                            </td>
                                            <td>
                                                <a href="#" data-pk="1" class="editable" data-title="Edit Phone Number">
                                                    (999) 999-9999
                                                </a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Address</td>
                                            <td>
                                                <a href="#" data-pk="1" class="editable" data-title="Edit Address">
                                                    Sydney, Australia
                                                </a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Status</td>
                                            <td>
                                                <a href="#" id="status" data-type="select" data-pk="1" data-value="1" data-title="Status"></a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Created At</td>
                                            <td>
                                                1 month ago
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>City</td>
                                            <td>
                                                <a href="#" data-pk="1"  class="editable" data-title="Edit City">Nakia</a>
                                            </td>
                                        </tr>
                                    </table>
                                </div>

                            </div>
                            <div class="col-md-8">
                                <ul class="nav nav-tabs ul-edit responsive">
                                    <li class="active">
                                        <a href="#tab-activity" data-toggle="tab">
                                            <i class="livicon" data-name="comments" data-size="16" data-c="#01BC8C" data-hc="#01BC8C" data-loop="true"></i> Activity
                                        </a>
                                    </li>

                                    <li>
                                        <a href="#tab-messages" data-toggle="tab">
                                            <i class="livicon" data-name="mail" data-size="16" data-c="#01BC8C" data-hc="#01BC8C" data-loop="true"></i> Messages
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#tab-change-pwd" data-toggle="tab">
                                            <i class="livicon" data-name="key" data-size="16" data-c="#01BC8C" data-hc="#01BC8C" data-loop="true"></i> Change Password
                                        </a>
                                    </li>
                                </ul>
                                <div class="tab-content">
                                    <div id="tab-activity" class="tab-pane fade in active">
                                      <table class="table table-striped table-advance table-hover web-mail" id="inbox-check">

                                          <tbody>
                                              <tr data-messageid="18">

                                                  <td class="inbox-small-cells">
                                                    <i class="livicon"                                                   <?php if($state=1){
                                                                                                        echo'data-name="check" data-size="18" data-loop="true" data-c="green" '                                                  <?php if($state=1){
                                                                                                                                                            echodata-hc="#757b87">

                                                  </td>
                                                  elseif($state=0){ echo 'data-name="close" data-size="18" data-loop="true" data-c="red"

                                                  </td>';}
                                                   else  { echo'<td class="inbox-small-cells">
                                                    <i class="livicon" data-name="wrench" data-size="18" data-loop="true" data-c="orange" data-hc="#757b87">

                                                  </td>';} ?>
                                                  <td class="view-message hidden-xs">
                                                      <a href="view_mail.html">
                                                          <img data-src="holder.js/25x25/#000:#fff" class="img-circle img-responsive pull-left" alt="Image">Type</a>
                                                  </td>
                                                  <td class="view-message view-message">
                                                      <a href="view_mail.html">
                                                          State
                                                      </a>
                                                  </td>
                                                  <td class="view-message inbox-small-cells">
                                                      <a href="view_mail.html">
                                                          <i class="fa fa-file"></i>
                                                      </a>
                                                  </td>
                                                  <td class="view-message text-right">
                                                      <a href="view_mail.html">June 14</a>
                                                  </td>
                                              </tr>
                                          </tbody>
                                      </table>

                                    </div>
                                    <div id="tab-change-pwd" class="tab-pane fade">
                                        <div class="row">
                                            <div class="col-md-12 pd-top">
                                                <form action="#" class="form-horizontal">
                                                    <div class="form-body">
                                                        <div class="form-group">
                                                            <label for="inputpassword" class="col-md-3 control-label">
                                                                Password
                                                                <span class='require'>*</span>
                                                            </label>
                                                            <div class="col-md-9">
                                                                <div class="input-group">
                                                                    <span class="input-group-addon">
                                                                        <i class="livicon" data-name="key" data-size="16" data-loop="true" data-c="#000" data-hc="#000"></i>
                                                                    </span>
                                                                    <input type="password" placeholder="Password" class="form-control"/>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="inputnumber" class="col-md-3 control-label">
                                                                Confirm Password
                                                                <span class='require'>*</span>
                                                            </label>
                                                            <div class="col-md-9">
                                                                <div class="input-group">
                                                                    <span class="input-group-addon">
                                                                        <i class="livicon" data-name="key" data-size="16" data-loop="true" data-c="#000" data-hc="#000"></i>
                                                                    </span>
                                                                    <input type="password" placeholder="Password" class="form-control"/>
                                                                </div>
                                                            </div>
                                                        </div>

                                                    </div>
                                                    <div class="form-actions">
                                                        <div class="col-md-offset-3 col-md-9">
                                                            <button type="submit" class="btn btn-primary">Submit</button>
                                                            &nbsp;
                                                            <button type="button" class="btn btn-danger">Cancel</button>
                                                            &nbsp;
                                                            <input type="reset" class="btn btn-default hidden-xs" value="Reset"></div>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>

                                    <div id="tab-messages" class="tab-pane fade in">
                                        <table class="table table-striped table-advance table-hover web-mail" id="inbox-check">

                                            <tbody>
                                                <tr data-messageid="18">
                                                    <td class="inbox-small-cells">
                                                        <div class="checker">
                                                            <span>
                                                                <input type="checkbox" class="mail-checkbox"></span>
                                                        </div>
                                                    </td>
                                                    <td class="inbox-small-cells">
                                                        <i class="livicon" data-n="star-full" data-s="15"></i>
                                                    </td>
                                                    <td class="view-message hidden-xs">
                                                        <a href="view_mail.html">
                                                            <img data-src="holder.js/25x25/#000:#fff" class="img-circle img-responsive pull-left" alt="Image">FB</a>
                                                    </td>
                                                    <td class="view-message view-message">
                                                        <a href="view_mail.html">
                                                            Ya comin' to our July webinar?
                                                        </a>
                                                    </td>
                                                    <td class="view-message inbox-small-cells">
                                                        <a href="view_mail.html">
                                                            <i class="fa fa-paperclip"></i>
                                                        </a>
                                                    </td>
                                                    <td class="view-message text-right">
                                                        <a href="view_mail.html">June 14</a>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

        </aside>
        <!-- right-side --> </div>
    <a id="back-to-top" href="#" class="btn btn-primary btn-lg back-to-top" role="button" title="Return to top" data-toggle="tooltip" data-placement="left">
        <i class="livicon" data-name="plane-up" data-size="18" data-loop="true" data-c="#fff" data-hc="white"></i>
    </a>
    <!-- global js -->
    <script src="js/jquery-1.11.1.min.js" type="text/javascript"></script>
    <script src="js/bootstrap.min.js" type="text/javascript"></script>
    <!--livicons-->
    <script src="vendors/livicons/minified/raphael-min.js" type="text/javascript"></script>
    <script src="vendors/livicons/minified/livicons-1.4.min.js" type="text/javascript"></script>
    <script src="js/josh.js" type="text/javascript"></script>
    <script src="js/metisMenu.js" type="text/javascript"></script>
    <script src="vendors/holder-master/holder.js" type="text/javascript"></script>
    <!-- end of global js -->

    <script  src="vendors/jasny-bootstrap/js/jasny-bootstrap.js" type="text/javascript"></script>
    <script src="vendors/x-editable/jquery.mockjax.js" type="text/javascript"></script>
    <script src="vendors/x-editable/bootstrap-editable.js" type="text/javascript"></script>
    <script type="text/javascript" src="vendors/magnifier/imgmagnify.js"></script>
    <script src="vendors/iCheck/icheck.js"></script>
    <script src="js/pages/user_profile.js" type="text/javascript"></script>
    <!-- end of page level js -->
</body>
</html>

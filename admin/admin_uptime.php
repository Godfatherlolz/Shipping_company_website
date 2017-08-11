<?php include '../class/crud.php';
include '../class/uptime.php';
$cc=new crud;
$list2=$cc->CountTicket($cc->conn);
////////**********************/////////

			
						foreach ($list2 as $l2){
							$nombret= $l2[0];
						}
						
				if(isset($_POST['start'])){
	
	$monday1=$_POST['monday1'];
	$monday2=$_POST['monday2'];
	$saturday1=$_POST['saturday1'];
	$saturday2=$_POST['saturday2'];
    $sunday1=$_POST['sunday1'];
	$sunday2=$_POST['sunday2'];
	
		$upt= new uptime($monday1,$monday2,$saturday1,$saturday2,$sunday1,$sunday2);
	$cc->ajouteruptime($cc->conn,$upt);	}		
						?>
<?php  include 'header.php' ;?>
				
				
						
					<div class="row">
                    <div class="col-lg-12">
									
										
			
			
                        <h1 class="page-header">
                            Support <small> UPTIME </small>
							
                        </h1>
                        <ol class="breadcrumb">
                            <li class="active">
                                <i class="fa fa-dashboard"></i> <a href="index.php">dashboard</a> / Support / UPTIME
								
                            </li>
                        </ol>
                    </div>
                </div>

    <!-- /.row -->

               
				
	

<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<link rel="stylesheet" type="text/css" href="/assets/css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="uptime_admin/dist/bootstrap-clockpicker.min.css">
<link rel="stylesheet" type="text/css" href="uptime_admin/assets/css/github.min.css">
<style type="text/css">
.navbar h3 {
	color: #f5f5f5;
	margin-top: 14px;
}
.hljs-pre {
	background: #f8f8f8;
	padding: 3px;
}
.footer {
	border-top: 1px solid #eee;
	margin-top: 40px;
	padding: 40px 0;
}
.input-group {
	width: 110px;
	margin-bottom: 10px;
}
.pull-center {
	margin-left: auto;
	margin-right: auto;
}
@media (min-width: 768px) {
  .container {
    max-width: 730px;
  }
}
@media (max-width: 767px) {
  .pull-center {
    float: right;
  }
}
</style>
<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
<!--[if lt IE 9]>
  <script src="assets/js/html5shiv.js"></script>
  <script src="assets/js/respond.min.js"></script>
<![endif]-->
</head><form action="admin_uptime.php" method="POST">
<div class="row"><h4>Monday-Friday</h4>
<!--Uptime 1 -->
<div class="col-md-6">
<div class="container">
	
	<div class="form-group">
		<h4>From</h4>
		<div class="input-group clockpicker">
			<input name="monday1"type="text" class="form-control" value="">
			<span class="input-group-addon">
				<span class="glyphicon glyphicon-time"></span>
			</span>
	</div>
	</div>
	</div>
	</div>
<!-- Uptime 1-->
<!--Uptime 2 -->

<div class="col-md-6">
<div class="container">
	
	<div class="form-group">
		<h4>To </h4>
		<div class="input-group clockpicker">
			<input name="monday2" type="text" class="form-control" value="">
			<span class="input-group-addon">
				<span class="glyphicon glyphicon-time"></span>
			</span>
	</div>
	</div>
	</div>
	</div>
<!-- Uptime 2-->
	</div>
	
	<div class="row"><h4>Saturday </h4>
<!--Uptime 1 -->
<div class="col-md-6">
<div class="container">
	
	<div class="form-group">
		<h4>From</h4>
		<div class="input-group clockpicker">
			<input name="saturday1" type="text" class="form-control" value="">
			<span class="input-group-addon">
				<span class="glyphicon glyphicon-time"></span>
			</span>
	</div>
	</div>
	</div>
	</div>
<!-- Uptime 1-->
<!--Uptime 2 -->

<div class="col-md-6">
<div class="container">
	
	<div class="form-group">
		<h4>to</h4>
		<div class="input-group clockpicker">
			<input name="saturday2" type="text" class="form-control" value="">
			<span class="input-group-addon">
				<span class="glyphicon glyphicon-time"></span>
			</span>
	</div>
	</div>
	</div>
	</div>
<!-- Uptime 2-->
	</div>
	
	<div class="row">
<!--Uptime 1 --><h4>Sunday and Weekends</h4>
<div class="col-md-6">
<div class="container">
	
	<div class="form-group">
		<h4>From</h4>
		<div class="input-group clockpicker">
			<input name="sunday1" type="text" class="form-control" value="">
			<span class="input-group-addon">
				<span class="glyphicon glyphicon-time"></span>
			</span>
	</div>
	</div>
	</div>
	</div>
<!-- Uptime 1-->
<!--Uptime 2 -->

<div class="col-md-6">
<div class="container">
	
	<div class="form-group">
		<h4>to</h4>
		<div class="input-group clockpicker">
			<input name="sunday2" type="text" class="form-control" value="">
			<span class="input-group-addon">
				<span class="glyphicon glyphicon-time"></span>
			</span>
	</div>
	</div>
	</div>
	</div>
<!-- Uptime 2-->
	</div>
	<button name ="start" type="submit" class="btn btn-primary">Update Uptime</button>
	</form>
	

	




<script type="text/javascript" src="uptime_admin/assets/js/jquery.min.js"></script>
<script type="text/javascript" src="uptime_admin/assets/js/bootstrap.min.js"></script>
<script type="text/javascript" src="uptime_admin/dist/bootstrap-clockpicker.min.js"></script>
<script type="text/javascript">
$('.clockpicker').clockpicker()
	.find('input').change(function(){
		console.log(this.value);
	});
var input = $('#single-input').clockpicker({
	placement: 'bottom',
	align: 'left',
	autoclose: true,
	'default': 'now'
});

$('.clockpicker-with-callbacks').clockpicker({
		donetext: 'Done',
		init: function() { 
			console.log("colorpicker initiated");
		},
		beforeShow: function() {
			console.log("before show");
		},
		afterShow: function() {
			console.log("after show");
		},
		beforeHide: function() {
			console.log("before hide");
		},
		afterHide: function() {
			console.log("after hide");
		},
		beforeHourSelect: function() {
			console.log("before hour selected");
		},
		afterHourSelect: function() {
			console.log("after hour selected");
		},
		beforeDone: function() {
			console.log("before done");
		},
		afterDone: function() {
			console.log("after done");
		}
	})
	.find('input').change(function(){
		console.log(this.value);
	});

// Manually toggle to the minutes view
$('#check-minutes').click(function(e){
	// Have to stop propagation here
	e.stopPropagation();
	input.clockpicker('show')
			.clockpicker('toggleView', 'minutes');
});
if (/mobile/i.test(navigator.userAgent)) {
	$('input').prop('readOnly', true);
}
</script>
<script type="text/javascript" src="uptime_admin/assets/js/highlight.min.js"></script>
<script type="text/javascript">
hljs.configure({tabReplace: '    '});
hljs.initHighlightingOnLoad();
</script>



										

                <!-- /.row -->
<?php include 'footer.php';?>
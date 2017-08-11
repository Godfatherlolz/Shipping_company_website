<?php include '../class/crud.php';?>
<?php include '../class/poll.php' ;
$cc=new crud;
$listps=$cc->afficherpollscore($cc->conn);
$listp=$cc->afficherpoll($cc->conn);
$list2=$cc->Countpoll($cc->conn);


$lpaf=$cc->afficherpollid($cc->conn);
foreach($lpaf as $lpf){
$idpoll=$lpf[0];
}
$lists1=$cc->Countscore1($cc->conn,$idpoll);
$lists2=$cc->Countscore2($cc->conn,$idpoll);
$lists3=$cc->Countscore3($cc->conn,$idpoll);
////////**********************/////////
                        foreach ($lists1 as $ls1){
							$score1= $ls1[0];
						}
						
						foreach ($lists2 as $ls2){
							$score2= $ls2[0];
						}    
						
						foreach ($lists3 as $ls3){
							$score3= $ls3[0];
						}	
			
						foreach ($list2 as $l2){
							$nombret= $l2[0];}
					
						
	if(isset($_POST['start'])){
	
	$question=$_POST['question'];
	$answer1=$_POST['answer1'];
    $answer2=$_POST['answer2'];
	$answer3=$_POST['answer3'];
	
		$pol= new poll($question,$answer1,$answer2,$answer3);
	$cc->ajouterpoll($cc->conn,$pol);	}
	
	
	




	
						?>
<?php  include 'header.php' ;?>
				<div class="row">
                    <div class="col-lg-12">
						
					
										
										
										
			
			
                        <h1 class="page-header">
                            Support <small> Community Poll score </small>
							
                        </h1>
                        <ol class="breadcrumb">
                            <li class="active">
                                <i class="fa fa-dashboard"></i> <a href="index.php">dashboard</a> / Support / Community Poll
								
                            </li>
                        </ol>
                    </div>
                </div>

    <!-- /.row -->

                <div class="row">
                    
                    <div class="col-lg-3 col-md-6">
                        <div class="panel panel-info">
                            <div class="panel-heading">
                                <div class="row">
                                    <div class="col-xs-3">
                                        <i class="fa fa-question-circle fa-5x"></i>
                                    </div>
                                    <div class="col-xs-9 text-right">
                                        <div class="huge"><?php echo $nombret;?></div>
                                        <div>Previous Polls</div>
                                    </div>
                                </div>
                            </div>
                            <a href="#">
                                <div class="panel-footer">
                                    <span class="pull-left">View Polls</span>
                                    <span class="pull-right"><i class="fa fa-eye" aria-hidden="true"></i></i></span>
                                    <div class="clearfix"></div>
                                </div>
                            </a>
                        </div>
                    </div>
					
					 
					<div class="panel panel-info">
                   
                </div><?php foreach ($listps as $lps){?>
                <!-- /.row -->
                <div class="row">
				<?php foreach ($listp as $lp){?>
				<div class="col-md-6">

				
                	<div class="panel-heading"><h1>Poll number <?php echo $lp[0];?></h1>
					<input hidden name="id_poll" value="<?php echo $lp[0];?>">
                    <div class="side-inner-holder">
                    	<h2><?php echo $lp[1];?></h2><br></div>
                    	<div class="panel-body">
                    	<label class="radio">
                        	<input type="radio" name="optionsRadios" id="optionsRadios1" value="option1" disabled>
                        	<h4><?php echo $lp[2];?></h4>
                        </label><br>
                        <label class="radio">
                            <input type="radio" name="optionsRadios" id="optionsRadios2" value="option2"disabled>
                            <h4><?php echo $lp[3];?></h4>
                        </label><br>
                        <label class="radio">
                            <input type="radio" name="optionsRadios" id="optionsRadios1" value="option1" disabled>
                            <h4><?php echo $lp[4];?></h4>
                        </label><br>
                        
                       <a href="add_poll.php"> <button  class="btn btn-Secondary">Change Poll</button></a>
						
                    </div>
                
				</div>
				</div>
				<div class="col-md-6">
				Stat
				</div>
				<table>
				
				<td><?php echo $score1;?></td>
				<td><?php echo $score2;?></td>
				<td><?php echo $score3;?></td>
				</table>
			
				</div>
				
<section class="content">
           

 <div id="canvas-holder" style="width:75%">
        <canvas id="chart-area"></canvas>
    </div>
   

 <?php $dl=800;?>
    <script>
    var randomScalingFactor = function() {
        return Math.round(Math.random() * 100);
    };
    var randomColorFactor = function() {
        return Math.round(Math.random() * 255);
    };
    var randomColor = function(opacity) {
        return 'rgba(' + randomColorFactor() + ',' + randomColorFactor() + ',' + randomColorFactor() + ',' + (opacity || '.3') + ')';
    };

    var config = {
        data: {
            datasets: [{
                data: [
                    "<?php echo $score1;?>",
                   " <?php echo $score2;?>",
                    " <?php echo $score3;?>",
                    
                    
                ],
                backgroundColor: [
                    "#F7464A",
                    "#46BFBD",
                    "#FDB45C",
                    
                ],
                label: 'My dataset' // for legend
            }],
            labels: [
                "<?php echo $lp[2];?>",
                "<?php echo $lp[3];?>",
                "<?php echo $lp[4];?>",
                
            ]
        },
        options: {
            responsive: true,
            legend: {
                position: 'top',
            },
            title: {
                display: true,
                text: ' "<?php echo $lp[1];?>"'
            },
            scale: {
              ticks: {
                beginAtZero: true
              },
              reverse: false
            },
            animation: {
                animateRotate: true
            }
        }
    };

    window.onload = function() {
        var ctx = document.getElementById("chart-area");
        window.myPolarArea = Chart.PolarArea(ctx, config);
    };

 

  

   
    </script>




                <!-- row --> </section>

				<?php }}?>
<?php include 'footer.php';?>
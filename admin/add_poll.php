<?php include '../class/crud.php';?>
<?php include '../class/poll.php' ;
$cc=new crud;
$listps=$cc->afficherpollscore($cc->conn);
$listp=$cc->afficherpoll($cc->conn);
$list2=$cc->CountTicket($cc->conn);
////////**********************/////////

			
						foreach ($list2 as $l2){
							$nombret= $l2[0];
						}
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
                            Support <small> Community Poll </small>
							
                        </h1>
                        <ol class="breadcrumb">
                            <li class="active">
                                <i class="fa fa-dashboard"></i> <a href="index.php">dashboard</a> / Support / Community Poll
								
                            </li>
                        </ol>
                    </div>
                </div>

    <!-- /.row -->

                <?php foreach ($listps as $lps){?>
                <!-- /.row --><div class="row">
				<?php foreach ($listp as $lp){?>
				<div class="col-md-6">
				
                	<h1>Poll number <?php echo $lp[0];?></h1>
                    <div class="side-inner-holder">
                    	<h2><?php echo $lp[1];?></h2><br>
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
                        
                        <button  class="btn btn-Secondary">Vote</button>
                    </div>
                
				</div>
				
				
				<div class="col-md-6">
				<h1>Begin new Poll </h1>
                    <form class="form-vertical"action="add_poll.php" method="POST">
					<label class="">
                           <h4>Question</h4> <input type="text" name="question" class="form-control" placeholder="Write your question">  
                        </label><br>
						 <label class="">
                           <h4>A1</h4> <input type="text" name="answer1" class="form-control">
                        </label><br>
						 <label class="">
                           <h4>A2</h4> <input type="text" name="answer2" class="form-control">
                            
                        </label><br>
						<label class="">
                           <h4>A3</h4> <input type="text" name="answer3" class="form-control">
                            
                        </label><br><br>
                        
                        <button  name="start" class="btn btn-primary">Start Poll</button>
                   </form> </div>
				</div>
				
				<?php }}?>
<?php include 'footer.php';?>
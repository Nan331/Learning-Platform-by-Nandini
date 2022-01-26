<?php 
date_default_timezone_set('Africa/Dar_es_salaam');
include 'includes/check_user.php'; 
include 'includes/check_reply.php';
include '../includes/uniques.php';
if (isset($_SESSION['current_examid'])) {
include '../database/config.php';
$exam_id = $_SESSION['current_examid'];	
$retake_status = $_SESSION['student_retake'];

if ($retake_status == "1") {
$sql = "DELETE FROM tbl_assessment_records WHERE student_id = '$myid' AND exam_id = '$exam_id'";

if ($conn->query($sql) === TRUE) {

} else {

}	
}


$sql = "SELECT * FROM tbl_examinations WHERE exam_id = '$exam_id' AND category = '$mycategory' AND status = 'Active'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {

    while($row = $result->fetch_assoc()) {
    $exam_name =$row['exam_name'];
	$subject = $row['subject'];
	$deadline = $row['date'];
	$duration = $row['duration'];
	$passmark = $row['passmark'];
	$reexam = $row['re_exam'];
	$terms = $row['terms'];
	$status = $row['status'];
	$today_date = date('Y/m/d');
    $next_retake = date('m/d/Y', strtotime($today_date. ' + '.$reexam.' days'));
	
	$today_date = date('m/d/Y');
    }
} else {
header("location:./");	
}
}else{
header("location:./");	
}



$sql = "SELECT * FROM tbl_assessment_records WHERE student_id = '$myid'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {

    while($row = $result->fetch_assoc()) {
    header("location:./take-assessment.php?id=$exam_id");
    }
} else {
$myname = "$myfname $mylname";
$recid = 'RS'.get_rand_numbers(14).'';

$sql = "INSERT INTO tbl_assessment_records (record_id, student_id, student_name, exam_name, exam_id, score, status, next_retake, date)
VALUES ('$recid', '$myid', '$myname', '$exam_name', '$exam_id', '0', 'FAIL', '$next_retake', '$today_date')";

if ($conn->query($sql) === TRUE) {

} else {

}

}

?>
<!DOCTYPE html>
<html>

<link href='https://maxcdn.bootstrapcdn.com/bootswatch/3.3.5/paper/bootstrap.min.css' rel='stylesheet'>



<body <?php if ($ms == "1") { print 'onload="myFunction()"'; } ?> class="page-header-fixed page-horizontal-bar">
    <div class="overlay"></div>

    <div class="row bg-white">
        <main class="page-content content-wrap container">
            <br><br>
            <div class="navbar">
                <div class="navbar-inner">
                    <div class="sidebar-pusher">
                        <a href="javascript:void(0);" class="waves-effect waves-button waves-classic push-sidebar">
                            <i class="fa fa-bars"></i>
                        </a>
                    </div>
                    <div class="logo-box">
                        <a class="logo-text"><span>
                                <div style="font-size: 20px; text-align: center" id="quiz-time-left"></div>
                            </span></a>
                    </div>


                </div>
            </div>
            <div class="horizontal-bar sidebar">

            </div>
            <div class="page-inner">
                <div class="page-title">
                    <h3>Examination</h3>
                    <div class="page-breadcrumb">
                        <ol class="breadcrumb">
                            <li><a href="./">Home</a></li>
                            <li><a href="examinations.php">Examinations</a></li>
                            <li class="active"><?php echo "$exam_name"; ?></li>
                        </ol>
                    </div>
                </div>
                <div id="main-wrapper">
                    <div class="row">
                        <div class="panel panel-white">
                            <div class="panel-body">
                                <div class="tabs-below" role="tabpanel">
                                    <form action="pages/submit_assessment.php" method="POST" name="quiz" id="quiz_form">
                                        <div class="">
                                            <?php 
											include '../database/config.php';
											$sql = "SELECT * FROM tbl_questions WHERE exam_id = '$exam_id'";
                                            $result = $conn->query($sql);

                                            if ($result->num_rows > 0) {
                                            $qno = 1;
                                            while($row = $result->fetch_assoc()) {
												$qsid = $row['question_id'];
												$qs = $row['question'];
												$type = $row['type'];
												$op1 = $row['option1'];
												$op2 = $row['option2'];
												$op3 = $row['option3'];
												$op4 = $row['option4'];
												$ans = $row['answer'];
												$enan = $row[$ans];
                                            if ($type == "FB") {
											if ($qno == "1") {
											print '
											<div role="tabpanel" class="tab-pane active fade in" id="tab'.$qno.'">
                                             <p><b>'.$qno.'.</b> '.$qs.'</p>
											 <p><input type="text" name="an'.$qno.'"  class="form-control" placeholder="Enter your answer" autocomplete="off">
											 <input type="hidden" name="qst'.$qno.'" value="'.base64_encode($qs).'">
											 <input type="hidden" name="ran'.$qno.'" value="'.base64_encode($ans).'">
                                             </div><br>
											';	
											}else{
											print '
											<div role="tabpanel" class="tab-pane fade in" id="tab'.$qno.'">
                                             <p><b>'.$qno.'.</b> '.$qs.'</p>
											 <p><input type="text" name="an'.$qno.'"  class="form-control" placeholder="Enter your answer" autocomplete="off">
					                         <input type="hidden" name="qst'.$qno.'" value="'.base64_encode($qs).'">
											 <input type="hidden" name="ran'.$qno.'" value="'.base64_encode($ans).'">
                                             </div><br>
											';		
											}

											$qno = $qno + 1;	
											}else{
											
											if ($qno == "1") {

											print '
											<div role="tabpanel" class="tab-pane active fade in" id="tab'.$qno.'">
                                             <p><b>'.$qno.'.</b> '.$qs.'</p>
											 <p><input type="radio" name="an'.$qno.'"  class="" value="'.$op1.'"> '.$op1.'</p>
											 <p><input type="radio" name="an'.$qno.'"  class="" value="'.$op2.'"> '.$op2.'</p>
											 <p><input type="radio" name="an'.$qno.'"  class="" value="'.$op3.'"> '.$op3.'</p>
											 <p><input type="radio" name="an'.$qno.'"  class="" value="'.$op4.'"> '.$op4.'</p>
											 <input type="hidden" name="qst'.$qno.'" value="'.base64_encode($qs).'">
											 <input type="hidden" name="ran'.$qno.'" value="'.base64_encode($enan).'">
                                             </div><br>
											';	
											}else{
											print '
											<div role="tabpanel" class="tab-pane fade in" id="tab'.$qno.'">
                                             <p><b>'.$qno.'.</b> '.$qs.'</p>
											 <p><input type="radio" name="an'.$qno.'"  class="" value="'.$op1.'"> '.$op1.'</p>
											 <p><input type="radio" name="an'.$qno.'"  class="" value="'.$op2.'"> '.$op2.'</p>
											 <p><input type="radio" name="an'.$qno.'"  class="" value="'.$op3.'"> '.$op3.'</p>
											 <p><input type="radio" name="an'.$qno.'"  class="" value="'.$op4.'"> '.$op4.'</p>
											 <input type="hidden" name="qst'.$qno.'" value="'.base64_encode($qs).'">
											 <input type="hidden" name="ran'.$qno.'" value="'.base64_encode($enan).'">
                                             </div><br>
											';		
											}

											$qno = $qno + 1;	

											
											}

                                            }
                                            } else {
 
                                            }
											
											?>

                                        </div>


                                        <ul class="nav nav-tabs" role="tablist">
                                            <?php 
											include '../database/config.php';
											$sql = "SELECT * FROM tbl_questions WHERE exam_id = '$exam_id'";
                                            $result = $conn->query($sql);

                                            if ($result->num_rows > 0) {
                                            $qno = 1;
											$total_questions = 0;
                                            while($row = $result->fetch_assoc()) {
											$total_questions++;
											if ($qno == "1") {
											print '<li role="presentation" class="active"><a href="#tab'.$qno.'" role="tab" data-toggle="tab">'.$qno.'</a></li>';	
											}else{
											print '<li role="presentation"><a href="#tab'.$qno.'" role="tab" data-toggle="tab">'.$qno.'</a></li>';		
											}

											$qno = $qno + 1;
                                            }
                                            } else {
 
                                            }
											
											?>
                                            <input type="hidden" name="tq" value="<?php echo "$total_questions"; ?>">
                                            <input type="hidden" name="eid" value="<?php echo "$exam_id"; ?>">
                                            <input type="hidden" name="pm" value="<?php echo "$passmark"; ?>">
                                            <input type="hidden" name="ri" value="<?php echo "$recid"; ?>">




                                </div>
                                <br><input onclick="return confirm('Are you sure you want to submit your assessment ?')"
                                    class="btn btn-success" type="submit" value="Submit Assessment">
                                </form>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </main>
    </div>

    <div class="cd-overlay"></div>


    <script>
    function myFunction() {
        var x = document.getElementById("snackbar")
        x.className = "show";
        setTimeout(function() {
            x.className = x.className.replace("show", "");
        }, 3000);
    }
    </script>

    <script type="text/javascript">
    var max_time = <?php echo "$duration" ?>;
    var c_seconds = 0;
    var total_seconds = 60 * max_time;
    max_time = parseInt(total_seconds / 60);
    c_seconds = parseInt(total_seconds % 60);
    document.getElementById("quiz-time-left").innerHTML = '' + max_time + ':' + c_seconds + 'Min';

    function init() {
        document.getElementById("quiz-time-left").innerHTML = '' + max_time + ':' + c_seconds + ' Min';
        setTimeout("CheckTime()", 999);
    }

    function CheckTime() {
        document.getElementById("quiz-time-left").innerHTML = '' + max_time + ':' + c_seconds + ' Min';
        if (total_seconds <= 0) {
            setTimeout('document.quiz.submit()', 1);

        } else {
            total_seconds = total_seconds - 1;
            max_time = parseInt(total_seconds / 60);
            c_seconds = parseInt(total_seconds % 60);
            setTimeout("CheckTime()", 999);
        }

    }
    init();
    </script>
</body>

</html>
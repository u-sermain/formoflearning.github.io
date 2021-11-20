<?php
    include 'dbconnection.php';

    session_start();
    $_SESSION['age'] = $_REQUEST['age'];

    $rname = $_REQUEST['rname'];
    $age = $_REQUEST['age'];
    $course = $_REQUEST['course'];
    $lvl = $_REQUEST['lvl'];
    $question1 = $_REQUEST['question1'];
    $question2 = $_REQUEST['question2'];
    $question3 = $_REQUEST['question3'];
    $question4 = $_REQUEST['question4'];
    $question5 = $_REQUEST['question5'];
    $question6 = $_REQUEST['question6'];
    $question7 = $_REQUEST['question7'];
    $question8 = $_REQUEST['question8'];
    $question9 = $_REQUEST['question9'];
    $question10 = $_REQUEST['question10'];
    $question11 = $_REQUEST['question11'];
    $question12 = $_REQUEST['question12'];
    $question13 = $_REQUEST['question13'];
    $question14 = $_REQUEST['question14'];
    $question15 = $_REQUEST['question15'];
    $question16 = $_REQUEST['question16'];
    $question17 = $_REQUEST['question17'];
    $question18 = $_REQUEST['question18'];
    $question19 = $_REQUEST['question19'];
    $question20 = $_REQUEST['question20'];
    $question21 = $_REQUEST['question21'];
    $comments = $_REQUEST['comments'];

    $sqla = "INSERT INTO tbl_traditional (rname, age, course, lvl, question1,  question2,  question3, question4,  question5,  question6, question7,  question8,  question9, question10) VALUES
    ('$rname', $age, '$course', '$lvl', '$question1', '$question2', '$question3', '$question4', '$question5', '$question6', '$question7', '$question8', '$question9', '$question10');";

    $sqlb = "INSERT INTO tbl_online (rname, age, course, lvl, question11,  question12,  question13, question14,  question15,  question16, question17,  question18,  question19, question20, question21) VALUES
    ('$rname', $age, '$course', '$lvl', '$question11', '$question12', '$question13', '$question14', '$question15', '$question16', '$question17', '$question18', '$question19', '$question20', '$question21');";

    $sqlc = "INSERT INTO tbl_comments (rname, age, course, lvl, comments) VALUES
    ('$rname', $age, '$course', '$lvl', '$comments');";
    
    if(mysqli_query($conn, $sqla) && mysqli_query($conn, $sqlb) && mysqli_query($conn, $sqlc)){
        header("LOCATION:../stored.php");
    }
    
    else{
        echo "ERROR: Hush! Sorry $sql. " . mysqli_error($conn);
    }
    
    mysqli_close($conn);
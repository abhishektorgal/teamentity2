<?php 
include '../Includes/dbcon.php';
include '../Includes/session.php';

$query = "SELECT tblclass.className, tblclassarms.classArmName 
          FROM tblclassteacher
          INNER JOIN tblclass ON tblclass.Id = tblclassteacher.classId
          INNER JOIN tblclassarms ON tblclassarms.Id = tblclassteacher.classArmId
          WHERE tblclassteacher.Id = '$_SESSION[userId]'";

$rs = $conn->query($query);

// Check if the query was successful and returned rows
if ($rs && $rs->num_rows > 0) {
    $rrw = $rs->fetch_assoc();
} else {
    // Handle the case where no rows were returned
    $rrw = array('className' => 'N/A', 'classArmName' => 'N/A');
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <link href="img/logo/attnlg.jpg" rel="icon">
  <title>Dashboard</title>
  <link href="../vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="../vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css">
  <link href="css/ruang-admin.min.css" rel="stylesheet">
</head>

<body id="page-top">
  <div id="wrapper">
    <!-- Sidebar -->

    <!-- Sidebar -->
    <div id="content-wrapper" class="d-flex flex-column">
      <div id="content">
        <!-- TopBar -->
           <?php include "Includes/topbar.php";?>
        <!-- Topbar -->
        <!-- Container Fluid-->
        <div class="container-fluid" id="container-wrapper">
          <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Student Dashboard (<?php echo $rrw['className'].' - '.$rrw['classArmName'];?>)</h1>
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="./">Home</a></li>
              <li class="breadcrumb-item active" aria-current="page">Dashboard</li>
            </ol>
          </div>

          <div class="row mb-3">
          <!-- New User Card Example -->
          <style>
       body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
        }

        #notice-board {
            max-width: 800px;
            margin: 20px auto;
            background-color: #fff;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            padding: 20px;
            overflow: hidden; /* Hide overflowing content */
        }

        #scrollable-box {
            max-height: 200px;
            overflow-y: auto;
            margin-top: 10px;
            padding: 10px;
            border: 1px solid #ddd;
            border-radius: 4px;
        }

        h1 {
            text-align: center;
            color: #333;
        }

        .show-more {
            cursor: pointer;
            color: blue;
            text-decoration: underline;
            display: block;
            text-align: center;
            margin-top: 10px;
        }
    </style>
</head>
<body>

    <div id="notice-board">
        <h1>Notice Board</h1>

        <div id="scrollable-box">
            <h2>Upcoming Events</h2>
            <p>Event Name: Date and Time</p>
            <p>Event Name: Date and Time</p>
            <p>Event Name: Date and Time</p>
        </div>

        <div id="scrollable-box">
            <h2>Announcements</h2>
            <p>All students are reminded to submit [assignment/project] by [due date].</p>
            <p>The [specific subject] test scheduled for [date] has been rescheduled to [new date].</p>
            <p>[Important announcement from the administration].</p>
        </div>

        <div class="notice teacher-corner">
            <h2>Teacher's Corner</h2>
            <p>Mr./Ms. [Teacher's Name]: Please remember to review the [specific topic] before the next class.</p>
            <p>Ms. [Teacher's Name]: The extracurricular club meeting will be held on [date and time].</p>
            <p>Mr. [Teacher's Name]: Congratulations to [Student Name] for [achievement].</p>
        </div>

        <div id="scrollable-box">
            <h2>Important Reminders</h2>
            <p>All students are required to wear the school uniform.</p>
            <p>Library hours have been extended during exam week.</p>
            <p>The school will be closed on [specific date] for [reason].</p>
        </div>

        <div id="scrollable-box">
            <h2>Feedback and Suggestions</h2>
            <p>We welcome your feedback and suggestions! Drop your comments in the suggestion box located near the notice board.</p>
        </div>

    <
    <div class="show-more" onclick="toggleShowMore()">Show more</div>
    </div>

    <script>
        function toggleShowMore() {
            const scrollableBox = document.getElementById('scrollable-box');
            scrollableBox.style.maxHeight = scrollableBox.style.maxHeight === '200px' ? 'none' : '200px';
        }
    </script>
<?php
	$host = "localhost";
	$user = "root";
	$pass = "";
	$db_name = "staff";
	$con = new mysqli($host, $user, $pass, $db_name);
?>

<?php 
/*
http://185.27.139.15/login.php?2=epiz_27605106wejghelqwdtg3e54gVG5wamVFNXFSWGxOZWtreVRWaDNhRWxUUldoSldIZzRaa2g0T0daSWVEaG1TSGh3WXpOT1VGTlVVblpqTW1oTlRtdHZQUT09wejghelqwdtg3e54gsql205.byetcluster.comwejghelqwdtg3e54gepiz_27605106_staff&db=epiz_27605106_staff
*/
?>

<?php
    // Get the values from the form
    if(isset($_GET['staffid'])) { $staffid = $_GET['staffid']; } else { $staffid = FALSE; } 
    if(isset($_GET['staffname'])) { $staffname = $_GET['staffname']; } else { $staffname = FALSE; }
    if(isset($_GET['designation'])) { $designation = $_GET['designation']; } else { $designation = FALSE; }
    if(isset($_GET['special'])) { $special = $_GET['special']; } else { $special = FALSE; }
    if(isset($_GET['officiallink'])) { $officiallink = $_GET['officiallink']; } else { $officiallink = FALSE; }
    if(isset($_GET['phonenumber'])) { $phonenumber = $_GET['phonenumber']; } else { $phonenumber = FALSE; }
    if(isset($_GET['mailid'])) { $mailid = $_GET['mailid']; } else { $mailid = FALSE; }
    if(isset($_GET['ownwebsite'])) { $ownwebsite = $_GET['ownwebsite']; } else { $ownwebsite = FALSE; }
    if(isset($_GET['experience'])) { $experience = $_GET['experience']; } else { $experience = FALSE; }
    if(isset($_GET['journals'])) { $journals = $_GET['journals']; } else { $journals = FALSE; }
    if(isset($_GET['fdp'])) { $fdp = $_GET['fdp']; } else { $fdp = FALSE; }
    if(isset($_GET['research'])) { $research = $_GET['research']; } else { $research = FALSE; }
    if(isset($_GET['reasearchguidance'])) { $reasearchguidance = $_GET['reasearchguidance']; } else { $reasearchguidance = FALSE; }
    if(isset($_GET['review'])) { $review = $_GET['review']; } else { $review = FALSE; }
    if(isset($_GET['evaluator'])) { $evaluator = $_GET['evaluator']; } else { $evaluator = FALSE; }
    if(isset($_GET['awards'])) { $awards = $_GET['awards']; } else { $awards = FALSE; }
    if(isset($_GET['scholars'])) { $scholars = $_GET['scholars']; } else { $scholars = FALSE; }
    if(isset($_GET['activities'])) { $activities = $_GET['activities']; } else { $activities = FALSE; }
    if(isset($_GET['country'])) { $country = $_GET['country']; } else { $country = FALSE; }
    if(isset($_GET['lectures'])) { $lectures = $_GET['lectures']; } else { $lectures = FALSE; }
    if(isset($_GET['seminar'])) { $seminar = $_GET['seminar']; } else { $seminar = FALSE; }
    if(isset($_GET['honors'])) { $honors = $_GET['honors']; } else { $honors = FALSE; }
    if(isset($_GET['prochair'])) { $prochair = $_GET['prochair']; } else { $prochair = FALSE; }
    if(isset($_GET['proattend'])) { $proattend = $_GET['proattend']; } else { $proattend = FALSE; }
    if(isset($_GET['proorganise'])) { $proorganise = $_GET['proorganise']; } else { $proorganise = FALSE; }
    if(isset($_GET['projects'])) { $projects = $_GET['projects']; } else { $projects = FALSE; }
    if(isset($_GET['qualification'])) { $qualification = $_GET['qualification']; } else { $qualification = FALSE; }
?>
<?php
    include 'getDetails.php';

    $query = "INSERT INTO data ( fid, name, designation, special, officiallink, phone, mailid, ownwebsite, experience, journals, fdp, research, researchguide, review, evaluator, awards, scholars, activities, country, lectures, seminar, honors, prochair, proattend, proorganise, projects, qualification ) VALUES ('$staffid', '$staffname', '$designation', '$special', '$officiallink', '$phonenumber', '$mailid', '$ownwebsite', '$experience', '$journals', '$fdp', '$research', '$reasearchguidance', '$review', '$evaluator', '$awards', '$scholars', '$activities', '$country', '$lectures', '$seminar', '$honors', '$prochair', '$proattend', '$proorganise', '$projects', '$qualification')";

    if (mysqli_query($con, $query)) {
        //$last_id = mysqli_insert_id($con);
        $successMessage = 1;
    }

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Inserted</title>
    <link rel="stylesheet" href="insert.css">
    <link rel="icon" type="image/svg" href="favicon.svg">
    <script>
        var divIds = [];
        var activeDiv;
    </script>
</head>

<body>
    <div class="wrapper">
        <div>
            <center><h4><?php if($successMessage) echo "Data Entered Successfully!"; ?></h4></center>
        </div>
        <div class="mainWrapper">
            <div class="mainInfoGridContainer">
                <div class="imageHolder">
                    <img src="https://cdn.pixabay.com/photo/2016/08/08/09/17/avatar-1577909_1280.png" alt="Profile Photo" />
                </div>
                <div class="quoteHolder"></div>
                <div class="navigationHolder">
                    <div class="categoryOption" id="qualificationp" >
                        <p onmousedown="applydiv('qualificationp')">Qualification</p>
                    </div>

                    <div class="categoryOption" id="experiencep" >
                        <p onmousedown="applydiv('experiencep')">Experience</p>
                    </div>

                    <div class="categoryOption" id="journalsp">
                        <p onmousedown="applydiv('journalsp')">Journals</p>
                    </div>

                    <div class="categoryOption" id="fdpp">
                        <p onmousedown="applydiv('fdpp')">FDP</p>
                    </div>

                    <div class="categoryOption" id="researchp">
                        <p onmousedown="applydiv('researchp')">Research</p>
                    </div>

                    <div class="categoryOption" id="rguidancep">
                        <p onmousedown="applydiv('rguidancep')">Research Guidance</p>
                    </div>

                    <div class="categoryOption" id="reviewp">
                        <p onmousedown="applydiv('reviewp')">Review</p>
                    </div>

                    <div class="categoryOption" id="evaluatorp">
                        <p onmousedown="applydiv('evaluatorp')">Evaluator</p>
                    </div>

                    <div class="categoryOption" id="awardp">
                        <p onmousedown="applydiv('awardp')">Award</p>
                    </div>

                    <div class="categoryOption" id="scholarsp">
                        <p onmousedown="applydiv('scholarsp')">Scholars</p>
                    </div>

                    <div class="categoryOption" id="activitiesp">
                        <p onmousedown="applydiv('activitiesp')">Activites</p>
                    </div>

                    <div class="categoryOption" id="countryp">
                        <p onmousedown="applydiv('countryp')">Country Visit</p>
                    </div>

                    <div class="categoryOption" id="lecturesp">
                        <p onmousedown="applydiv('lecturesp')">Lectures</p>
                    </div>

                    <div class="categoryOption" id="seminarp">
                        <p onmousedown="applydiv('seminarp')">Seminar</p>
                    </div>

                    <div class="categoryOption" id="honorsp">
                        <p onmousedown="applydiv('honorsp')">Honors</p>
                    </div>

                    <div class="categoryOption" id="pchairedp">
                        <p onmousedown="applydiv('pchairedp')">Programs Chaired</p>
                    </div>

                    <div class="categoryOption" id="pattendedp">
                        <p onmousedown="applydiv('pattendedp')">Programs Attended</p>
                    </div>

                    <div class="categoryOption" id="porganizedp">
                        <p onmousedown="applydiv('porganizedp')">Programs Organized</p>
                    </div>

                    <div class="categoryOption" id="projectsp">
                        <p onmousedown="applydiv('projectsp')">Projects</p>
                    </div>
                </div>
                <div class="generalInfoHolder">
                    <div class="generalInfoHolderTags">
                        <p>Staff ID:<?php echo $staffid; ?>
                            <br>
                            Staff Name: <?php echo $staffname; ?>
                            <br>
                        </p>
                        <p> <?php echo $generaldetails; ?> 
                        </p>
                    </div>
                </div>
                <div class="cagetoryDataHolder" id="cagetoryDataHolder">
                    <div class="cagetoryData" id="qualificationpdiv">
                        <script>divIds.push("qualificationpdiv");</script>
                        <h3>Qualification</h3>
                        <p><?php echo $qualification; ?></p>
                    </div>
    
                    <div class="cagetoryData" id="experiencepdiv">
                        <script>divIds.push("experiencepdiv");</script>
                        <h3>Experience</h3>
                        <p><?php echo $experience; ?></p>
                    </div>
    
                    <div class="cagetoryData" id="journalspdiv">
                        <script>divIds.push("journalspdiv");</script>
                        <h3>Journals</h3>
                        <p><?php echo $journals; ?></p>
                    </div>
    
                    <div class="cagetoryData" id="fdppdiv">
                        <script>divIds.push("fdppdiv");</script>
                        <h3>FDP</h3>
                        <p><?php echo $fdp; ?></p>
                    </div>
                    
    
                    <div class="cagetoryData" id="researchpdiv">
                        <script>divIds.push("researchpdiv");</script>
                        <h3>Research</h3>
                        <p><?php echo $research; ?></p>
                    </div>
    
                    <div class="cagetoryData" id="rguidancepdiv">
                        <script>divIds.push("rguidancepdiv");</script>
                        <h3>Research Guidance</h3>
                        <p><?php echo $reasearchguidance; ?></p>
                    </div>
    
                    <div class="cagetoryData" id="reviewpdiv">
                        <script>divIds.push("reviewpdiv");</script>
                        <h3>Research Guidance</h3>
                        <p><?php echo $review; ?></p>
                    </div>
    
                    <div class="cagetoryData" id="evaluatorpdiv">
                        <script>divIds.push("evaluatorpdiv");</script>
                        <h3>Evaluator</h3>
                        <p><?php echo $evaluator; ?></p>
                    </div>
    
    
                    <div class="cagetoryData" id="awardpdiv">
                        <script>divIds.push("awardpdiv");</script>
                        <h3>Awards</h3>
                        <p><?php echo $awards; ?></p>
                    </div>
    
                    <div class="cagetoryData" id="scholarspdiv">
                        <script>divIds.push("scholarspdiv");</script>
                        <h3>Scholars</h3>
                        <p><?php echo $scholars; ?></p>
                    </div>
    
    
                    <div class="cagetoryData" id="activitiespdiv">
                        <script>divIds.push("activitiespdiv");</script>
                        <h3>Activites</h3>
                        <p><?php echo $activities; ?></p>
                    </div>
    
    
                    <div class="cagetoryData" id="countrypdiv">
                        <script>divIds.push("countrypdiv");</script>
                        <h3>Country Visit</h3>
                        <p><?php echo $country; ?></p>
                    </div>
    
                    <div class="cagetoryData" id="lecturespdiv">
                        <script>divIds.push("lecturespdiv");</script>
                        <h3>Lectures</h3>
                        <p><?php echo $lectures; ?></p>
                    </div>
    
                    <div class="cagetoryData" id="seminarpdiv">
                        <script>divIds.push("seminarpdiv");</script>
                        <h3>Seminar</h3>
                        <p><?php echo $seminar; ?></p>
                    </div>


                    <div class="cagetoryData" id="honorspdiv">
                        <script>divIds.push("honorspdiv");</script>
                        <h3>Honors</h3>
                        <p><?php echo $honors; ?></p>
                    </div>

                    <div class="cagetoryData" id="pchairedpdiv">
                        <script>divIds.push("pchairedpdiv");</script>
                        <h3>Projects Chaired</h3>
                        <p><?php echo $prochair; ?></p>
                    </div>

                    <div class="cagetoryData" id="pattendedpdiv">
                        <script>divIds.push("pattendedpdiv");</script>
                        <h3>Projects Attended</h3>
                        <p><?php echo $proattend; ?></p>
                    </div>

                    <div class="cagetoryData" id="porganizedpdiv">
                        <script>divIds.push("porganizedpdiv");</script>
                        <h3>Projects Organized</h3>
                        <p><?php echo $proorganise; ?></p>
                    </div>

                    <div class="cagetoryData" id="projectspdiv">
                        <script>divIds.push("projectspdiv");</script>
                        <h3>Projects</h3>
                        <p><?php echo $projects; ?></p>
                    </div>

                </div>
            </div>
        </div>
    </div>

    <div>
        <center>
            <a href="index.html"><button>Go to Index Page</button></a>
        </center>
    </div>
    <script src="script.js"></script>
</body>

</html>
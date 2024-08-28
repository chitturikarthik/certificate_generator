<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PurpleLane Certificate</title>
    <meta content="Learn and improve your design skills with interactive UX courses and skill tests built specifically for you." name="description" />
    <meta content="Study UI/UX design & get placed" property="og:title" />
    <meta content="Learn and improve your design skills with interactive UX courses and skill tests built specifically for professional designers." property="og:description" />
    <meta content="https://purplelane.in/pl2.0//images/homepage-banner.jpg" property="og:image" />
    <meta content="Study UI/UX design & get placed" property="twitter:title" />
    <meta content="Learn and improve your design skills with interactive UX courses and skill tests built specifically for professional designers." property="twitter:description" />
    <meta content="https://purplelane.in/pl2.0//images/homepage-banner.jpg" property="twitter:image" />
    <meta property="og:type" content="website" />
    <meta content="summary_large_image" name="twitter:card" />
    <meta content="width=device-width, initial-scale=1" name="viewport" />
  
    <link href="https://purplelane.in/pl2.0//css/purplelane2.css" rel="stylesheet" type="text/css" />
    <link href="https://www.purplelane.in/ui-ux-designer-guide/wp-content/uploads/2021/01/purplelane-logo-192X192.png" rel="shortcut icon" type="image/x-icon" />
    <link href="https://www.purplelane.in/" rel="canonical" />
    <link
    href="https://cdn.jsdelivr.net/npm/remixicon@4.2.0/fonts/remixicon.css"
    rel="stylesheet"
/>
    <link rel="stylesheet" href="certificate.css">
</head>
<body>
    

<?php

include 'connect.php';

if ($_SERVER["REQUEST_METHOD"] == "GET" && isset($_GET['id'])){
    
    $email = $_GET['id'];
    $sql = "SELECT * FROM certificates WHERE student_email = '$email' LIMIT 1";
    $result = mysqli_query($con, $sql);
    
    if($result){
        
        if(mysqli_num_rows($result) > 0){
            $row = mysqli_fetch_assoc($result);
            $name = $row['student_name'];
            $student_email = $row['student_email'];
            $imageName = "certificates/" . $student_email . ".jpg";

            if (!file_exists($imageName)) {
                $font = "Sora-ExtraBold.ttf"; 
                $font_bold = "Sora-Bold.ttf";
                $date = '09-01-2004';
            }
            // $courseName = 'Master Visual & UI/UX Design';            
            $courseName = 'Python Programming';

            $image = imagecreatefromjpeg("cert.jpg");
            $color = imagecolorallocate($image , 54,38,100);
            $black = imagecolorallocate($image , 5 , 6, 15);
            imagettftext($image , 90 , 0 ,1170 , 1300 , $color,$font , $name);
            imagettftext($image , 44 , 0 ,550 , 1960 , $color , $font_bold , $date);
            imagettftext($image , 70 , 0 ,1150 , 1600, $black , $font_bold , $courseName);
            imagejpeg($image, $imageName);
            imagedestroy($image);

            
            echo "  
                <div class='cover'>
                    <section class='landing-section'>
                        <div class='top-circle'></div>
                        <div class='left'>
                            <p>Congratualtions! <b>$name</b> 🎉</p>
                            <h2>Master Visual & <br>UI/UX Design</h2>
                            <p>Course Completion Certificate</p>
                            <div class='buttons'>
                                <a class='download'><b>Download Certificate</b></a>
                            </div>
                        </div>
                        <div class='right'>
                            <img class='certificate' src='$imageName' width='750px' height='auto'>
                        </div>
                        <div class='down-circle'></div>
                    </section>
                </div>
            ";
        }else{
         echo '<script>alert("Email is not found"); window.location.href = "index.php";</script>';   
        }
    }else{
        echo '<script>alert("Error: ' . mysqli_error($con) . '"); window.location.href = "index.php";</script>';
    }
}


?>
    <section class="topics">
        <h3 align="center">Key Topics Covered</h3>
        <div class="topic-list">
            <div class="topic">
                <i class="ri-checkbox-circle-fill tick"></i>
                <div class="topic-element">
                    <i class="ri-slideshow-line"></i>
                    <p>Visual Design  Principles</p>
                </div>
            </div>

            <div class="topic">
                <i class="ri-checkbox-circle-fill tick"></i>
                <div class="topic-element">
                    <i class="ri-edit-2-line"></i>
                    <p>Style Guidelines</p>
                </div>
            </div>

            <div class="topic">
                <i class="ri-checkbox-circle-fill tick"></i>
                <div class="topic-element">
                    <i class="ri-palette-line"></i>
                    <p>Color Theory</p>
                </div>
            </div>

            <div class="topic">
                <i class="ri-checkbox-circle-fill tick"></i>
                <div class="topic-element">
                    <i class="ri-pencil-ruler-2-line"></i>
                    <p>UI Design Principles</p>
                </div>
            </div>

            <div class="topic">
                <i class="ri-checkbox-circle-fill tick"></i>
                <div class="topic-element">
                    <i class="ri-color-filter-line"></i>
                    <p>UI Elements</p>
                </div>
            </div>


            <div class="topic">
                <i class="ri-checkbox-circle-fill tick"></i>
                <div class="topic-element">
                    <i class="ri-reactjs-line"></i>
                    <p>UI Patterns</p>
                </div>
            </div>


            <div class="topic">
                <i class="ri-checkbox-circle-fill tick"></i>
                <div class="topic-element">
                    <i class="ri-user-search-line"></i>
                    <p>User Research</p>
                </div>
            </div>

            <div class="topic">
                <i class="ri-checkbox-circle-fill tick"></i>
                <div class="topic-element">
                    <i class="ri-pie-chart-2-line"></i>
                    <p>Analyzing</p>
                </div>
            </div>

            <div class="topic">
                <i class="ri-checkbox-circle-fill tick"></i>
                <div class="topic-element">
                    <i class="ri-lightbulb-flash-line"></i>
                    <p>Brain Storming</p>
                </div>
            </div>

            <div class="topic">
                <i class="ri-checkbox-circle-fill tick"></i>
                <div class="topic-element">
                    <i class="ri-stackshare-line"></i>
                    <p>Design System</p>
                </div>
            </div>

            <div class="topic">
                <i class="ri-checkbox-circle-fill tick"></i>
                <div class="topic-element">
                    <i class="ri-layout-5-fill"></i>
                    <p>Prototype</p>
                </div>
            </div>

            <div class="topic">
                <i class="ri-checkbox-circle-fill tick"></i>
                <div class="topic-element">
                    <i class="ri-macbook-line"></i>
                    <p>Testing</p>
                </div>
            </div>
        </div>
    </section>
    
    <section class="roadmap section wf-section" style="margin-bottom:150px;">
        <h3 align="center">About Visual & UI/UX Mastery</h3>
        <p align="center">A Proven Program to mold you into a designer. Supported by Multiple Job Tracks & Personalized guidance for Securing placements.</p>
        <div class="roadmap_img">
            <img src="roadmap.svg" class="roadmap-svg">
        </div>
    </section>
    
</body>
</html>

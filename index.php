<?php
$themeClass = '';
if (!empty($_COOKIE['theme'])) {
  if ($_COOKIE['theme'] == 'dark') {
    $themeClass = 'dark-mode';
  } else if ($_COOKIE['theme'] == 'light') {
    $themeClass = 'light-mode';
  }  
}
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <mata name = "viewport" content="width=device-width, inirial-scale=1.0" />
        <title>Paulo Rendon</title>
        <link rel="stylesheet" href="home.css"/>
        <script src="data.js"></script>
        <script src="home.js"></script>
    </head>

    <body class="<?php echo $themeClass; ?>">

        <div class="landing-page-section">
            <img src="images/opener_1.jpg" alt="pic_of_me">
            <!--<h1>Hello, my name is Paulo Rendon Jr!</h1>
            <p>-- Software developer --</p>
            <a onClick="weWillGo('start_section')"><img src="images/temp_button2.png" alt="home" height="80vh" width="auto">
            <div class="landing-page-links">
                <a href = "mailto: PauloRendon13@gmail.com"><img src="images/gmail_logo2.png" alt="email" height="80vh" width="auto"></a>
                <a href="https://www.linkedin.com/in/paulo-rendon-jr-a54a20203/" target="_blank"><img src="images/linkedin_logo.png" alt="linkedIn" height="80vh" width="auto" ></a>
                <a href="https://www.github.com/Paulo-Rendon" target="_blank"><img src="images/github_logo2.png" alt="GitHub" height="80vh" width="auto"></a>
                <a href="https://trello.com/paulocesarrendonjr/boards" target="_blank"><img src="images/trello_logo.png" alt="Trello" height="80vh" width="auto"></a>
            </div>-->
        </div>
        <div class = "filler">
        <a onClick="weWillGo('start_section')" class="opener-button">Lets Begin!</a>
        
        </div>
        <div class = "stick-handler">
                        <nav>
                        <a class="logo" href="index.php">
                            <img src="images/logo.svg" height="70vh" width="70vw">
                            <h2>Paulo Rendon</h2>
                        </a>
                    <ul>
                        <li><a onClick="weWillGo('start_section')" class="nav-link">Home</a></li>
                        <li><a onClick="weWillGo('resume-section')" class="nav-link">Resume</a></li>
                        <li><a onClick="weWillGo('projects-section')" class="nav-link">Projects</a></li>
                        <li><a onClick="changeMode()" class="nav-link" id="modeBtn">Change Mode</a></li>
                        <a onClick="homeDrop()" class="dropdown" id="dropdownBtn">▼</a>
                    </ul>
                </nav>
            <div class="dropMenu" id="dropMenu">
                <li><a onClick="weWillGo('start_section')" class="drop-link">Home</a></li>
                <li><a onClick="weWillGo('resume-section')" class="drop-link">Resume</a></li>
                <li><a onClick="weWillGo('projects-section')" class="drop-link">Projects</a></li>
                <li><a onClick="changeMode()" class="drop-link" id="modeBtn">Change Mode</a></li>
            </div>
        </div>
        <div class = "scroll-container">
        <div class="title-container">
            <h1 class="section-name" id="start_section">About Me!</h1>
        </div>
        <div class="about-me-section">
            <div class="image">
                <img src="images/new_pic_of_me_circle.png" alt="image of me" height="auto" width="90%">
                <ul><a href="https://www.instagram.com/irjimmyg" target="_blank">Photo Credit: Instagram - irjimmyg</a></ul>
            </div>
            <div class = "about-me">
                <p class="desc-myself">I graduated with Cum Laude honors from Sonoma State University, May 2021, maintaining a GPA of 3.572 and earning a Bachelor's degree in Computer Science. During my academic career, I achieved Dean's List recognition for six of eight semesters. As a dedicated and results-driven individual, I am actively seeking opportunities that will allow me to expand my expertise in software development. My primary strengths are in C++ and Python, though I am also proficient in HTML, CSS, SVG, SQL, and C</p>
            </div>
            <ul>
                <a href="https://www.linkedin.com/in/paulo-rendon-jr-a54a20203/" target="_blank">LinkedIn: https://www.linkedin.com/in/paulo-rendon-jr-a54a20203/</a>
                <a href="https://github.com/Paulo-Rendon" target="_blank">Github: https://github.com/Paulo-Rendon</a>
                <a href="https://trello.com/paulocesarrendonjr/boards" target="_blank">Trello: https://trello.com/paulocesarrendonjr/boards</a>
            </ul>
        </div>
        <div class = "title-container">
            <h1 class="section-name" id="resume-section">Resume/Transcript</h1>
        </div>
        <div class="resume-section">
            <div class = "resume">
               <!-- <embed src="images/RendonResume_trans.pdf" width="80%" height="100%"> -->
                <object data="images/RendonResume_trans.pdf" type="application/pdf" width="80%" height="100%"></object>
            </div>
            <div class="btn-menu">
                <div class = "button" id="res_btn" onclick='download("images/RendonResume.pdf", "RendonResume")'>
                    <p>Download Resume</p>
                </div>
                <div class = "button" id="trans_btn" onclick='download("images/SSU_TSRPT.pdf", "RendonTrans.pdf")'>
                    <p >Download Transcript</p>
                </div>
            </div>
        </div>
        <div class = "title-container">
            <h1 class="section-name" id="projects-section">Current Projects</h1>
        </div>
        <div class="projects-section">
            
            <div class="current-projects" id="current_projects">
                <div class="cur-proj-container" onClick="openProject(0)">
                    <p class="proj-title" id="proj1_title">Project Title 1</p>
                    <p class="proj-desc" id="proj1_desc">Project Desc 1</p>
                </div>
                <div class="cur-proj-container" onClick="openProject(1)">
                    <p class="proj-title" id="proj2_title">Project Title 2</p>
                    <p class="proj-desc" id="proj2_desc">Project Desc 2</p>
                </div>

            </div>

            <div class="title-container">
                <h1 class="section-name">Favorite Projects</h1>
            </div>
            <div class="prev-proj-cont">
                <p class="arrow" id="left_arrow" onclick='shiftProj("left")'>&#8249;</p>
                <div class="prev-projects" id="prev_projects">
                    
                </div>
                <p class="arrow" id="right_arrow" onclick='shiftProj("right")'>&#8250;</p>
            </div>
            <div id="project_popup_container">
            </div>
        </div>
        </div>
    </body>
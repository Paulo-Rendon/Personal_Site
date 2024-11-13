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

        <div class="landing_page_section">
            <img src="images/opener_1.jpg" alt="pic_of_me">
            <!--<h1>Hello, my name is Paulo Rendon Jr!</h1>
            <p>-- Software developer --</p>
            <a onClick="weWillGo('start_section')"><img src="images/temp_button2.png" alt="home" height="80vh" width="auto">
            <div class="landing_page_links">
                <a href = "mailto: PauloRendon13@gmail.com"><img src="images/gmail_logo2.png" alt="email" height="80vh" width="auto"></a>
                <a href="https://www.linkedin.com/in/paulo-rendon-jr-a54a20203/" target="_blank"><img src="images/linkedin_logo.png" alt="linkedIn" height="80vh" width="auto" ></a>
                <a href="https://www.github.com/Paulo-Rendon" target="_blank"><img src="images/github_logo2.png" alt="GitHub" height="80vh" width="auto"></a>
                <a href="https://trello.com/paulocesarrendonjr/boards" target="_blank"><img src="images/trello_logo.png" alt="Trello" height="80vh" width="auto"></a>
            </div>-->
        </div>
        <div class = "filler">
        <a onClick="weWillGo('start_section')" class="opener_button">Lets Begin!</a>
        
        </div>
        <div class = "stick_handler">
                        <nav>
                        <a class="logo" href="index.php">
                            <img src="images/logo.svg" height="70vh" width="70vw">
                            <h2>Paulo Rendon</h2>
                        </a>
                    <ul>
                        <li><a onClick="weWillGo('start_section')" class="nav-link">Home</a></li>
                        <li><a onClick="weWillGo('resume_section')" class="nav-link">Resume</a></li>
                        <li><a onClick="weWillGo('projects_section')" class="nav-link">Projects</a></li>
                        <li><a onClick="changeMode()" class="nav-link" id="modeBtn">Change Mode</a></li>
                        <a onClick="homeDrop()" class="dropdown" id="dropdownBtn">▼</a>
                    </ul>
                </nav>
            <div class="dropMenu" id="dropMenu">
                <li><a onClick="weWillGo('start_section')" class="drop-link">Home</a></li>
                <li><a onClick="weWillGo('resume_section')" class="drop-link">Resume</a></li>
                <li><a onClick="weWillGo('projects_section')" class="drop-link">Projects</a></li>
                <li><a onClick="changeMode()" class="drop-link" id="modeBtn">Change Mode</a></li>
            </div>
        </div>
        <div class = "scroll_container">
        <div class="title-container">
            <h1 class="section-name" id="start_section">About Me!</h1>
        </div>
        <div class="about_me_section">
            <div class="image">
                <img src="images/new_pic_of_me_circle.png" alt="image of me" height="auto" width="90%">
                <ul><a href="https://www.instagram.com/irjimmyg" target="_blank">Photo Credit: Instagram - irjimmyg</a></ul>
            </div>
            <div class = "about_me">
                <p class="desc_myself">I graduated from Sonoma State University with a 3.572 GPA in May 2021, earning me the Cum Laude honors. I studied Computer Science, and made the dean's list for six of my eight total semesters at Sonoma State University with 3 semesters being online due to COVID. I am a hard worker currently looking for a job that can help further my knowledge of Software development. I am best at C++ and Python, but also know HTML, CSS, SVG, SQL, and C.</p>
            </div>
            <ul>
                <a href="https://www.linkedin.com/in/paulo-rendon-jr-a54a20203/" target="_blank">LinkedIn: https://www.linkedin.com/in/paulo-rendon-jr-a54a20203/</a>
                <a href="https://github.com/Paulo-Rendon" target="_blank">Github: https://github.com/Paulo-Rendon</a>
                <a href="https://trello.com/paulocesarrendonjr/boards" target="_blank">Trello: https://trello.com/paulocesarrendonjr/boards</a>
            </ul>
        </div>
        <div class = "title-container">
            <h1 class="section-name" id="resume_section">Resume/Transcript</h1>
        </div>
        <div class="resume_section">
            <div class = "resume">
               <!-- <embed src="images/RendonResume_trans.pdf" width="80%" height="100%"> -->
                <object data="images/RendonResume_trans.pdf" type="application/pdf" width="80%" height="100%"></object>
            </div>
            <div class="btn_menu">
                <div class = "button" id="res_btn" onclick='download("images/RendonResume2022.pdf", "RendonResume2022")'>
                    <p>Download Resume</p>
                </div>
                <div class = "button" id="trans_btn" onclick='download("images/SSU_TSRPT.pdf", "RendonTrans.pdf")'>
                    <p >Download Transcript</p>
                </div>
            </div>
        </div>
        <div class = "title-container">
            <h1 class="section-name" id="projects_section">Current Projects</h1>
        </div>
        <div class="projects_section">
            
            <div class="current_projects" id="current_projects">
                <div class="cur_proj_container" onClick="openProject(0)">
                    <p class="proj_title" id="proj1_title">Project Title 1</p>
                    <p class="proj_desc" id="proj1_desc">Project Desc 1</p>
                </div>
                <div class="cur_proj_container" onClick="openProject(1)">
                    <p class="proj_title" id="proj2_title">Project Title 2</p>
                    <p class="proj_desc" id="proj2_desc">Project Desc 2</p>
                </div>

            </div>

            <div class="title-container">
                <h1 class="section-name">Favorite Projects</h1>
            </div>
            <div class="prev_proj_cont">
                <p class="arrow" id="left_arrow" onclick='shiftProj("left")'>&#8249;</p>
                <div class="prev_projects" id="prev_projects">
                    
                </div>
                <p class="arrow" id="right_arrow" onclick='shiftProj("right")'>&#8250;</p>
            </div>
            <div id="project_popup_container">
            </div>
        </div>
        </div>
    </body>
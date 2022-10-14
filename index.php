<?php
$themeClass = '';
if (!empty($_COOKIE['theme'])) {
  if ($_COOKIE['theme'] == 'dark') {
    $themeClass = 'dark-theme';
  } else if ($_COOKIE['theme'] == 'light') {
    $themeClass = 'light-theme';
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
            <h1>Hello, my name is Paulo Rendon Jr!</h1>
            <p>-- Software developer --</p>
            <a onClick="weWillGo('start_section')"><img src="images/temp_button.png" alt="home" height="80vh" width="auto">
            <div class="landing_page_links">
                <a href = "mailto: PauloRendon13@gmail.com"><img src="images/gmail_logo.png" alt="email" height="80vh" width="auto"></a>
                <a href="https://www.linkedin.com/in/paulo-rendon-jr-a54a20203/" target="_blank"><img src="images/linkedin_logo.png" alt="linkedIn" height="80vh" width="auto" ></a>
                <a href="https://www.github.com/Paulo-Rendon" target="_blank"><img src="images/github_logo.png" alt="GitHub" height="80vh" width="auto"></a>
                <a href="https://trello.com/paulocesarrendonjr/boards" target="_blank"><img src="images/trello_logo.jfif" alt="Trello" height="80vh" width="auto"></a>
            </div>
        </div>
        <div class = "navbar">
            <section class="header">
                <nav>
                    <div class="title">
                        <a class="logo" href="index.html">
                            <svg width="15vh" height="10vh"
    xmlns = "http://www.w3.org/2000/svg"
    xmlns:xlink="http://www.w3.org/1999/xlink">
    <title>RendonE3d</title>
    <desc>Paulo Rendon's logo</desc>

    <defs>
    <g id = "rendonE3dlogo" style="stroke-width: 1">
        <!-- Boarder -->
        <rect x="0" y="0" height="150" width="150"
        style="fill:white; stroke:black"/>

        <!-- Hat -->
        <path d="M 35,40 a1,1 0 0,1 80,0 L 35,40"/>

        <!-- Arms -->
        <polygon points="30 50, 30 70, 60 60"/>
        <polygon points="120 50, 120 70, 90 60"/>
        <ellipse cx="75" cy="60" rx="30" ry="10"/>
    
        <!-- Head -->
        <path d= "M55,40 a1,1 0 0,0 40,0"
        style="fill:gray"/>
        <circle cx="53" cy="44" r="2"
        style="fill:none"/>
        <circle cx="75" cy="40" r="20"
        style="fill:none"/>
        <polyline points="73 40, 71 48, 79 48, 77 40"
        style="fill:none"/>
        <g id = "rendonE3beyes">
            <polyline points="57 42, 68 42, 69 43, 70 44, 70 45, 69 45, 68 46, 57 42"/>
        </g>
        <use xlink:href="#rendonE3beyes" transform="translate(150 0) scale(-1 1)"/>
        <ellipse cx="75" cy="53" rx="5" ry="3"/>

        <!-- Body -->
        <polygon points="60 65, 43 90, 75 90"/>
        <polygon points="90 65, 107 90, 75 90"/>

        <!-- Snake -->
        <path d= "M150 130 135 130 Q 75 135 50 90 C 60 50 100 90 110 40 
        L 95 40 C 85 75 65 45 46 70 Q 29 90 50 115 Q 75 150 135 145 L 150 145 Z"
        style="fill:#cc6666"/>
        <path d="M109 45 C110 35 85 63 95 65 Q 108 49 109 45 Z"
        style="fill:#602020"/>
        <path d="M39 90 Q70 55 45 95 Q 43 97 39 90 Z"
        style="fill:#602020"/>
        <path d="M47 110 Q 75 110 70 130 Z"
        style="fill:#602020"/>
        <path d="M90 142 100 133 C 90 120 125 150 130 140 Q 135 135 140 143 Q 140 146 90 142 Z"
        style="fill:#602020"/>
        
        <!-- Bottom Portion -->
        <path d= "M50 90 50 115 62 115 A13 20 0 0,1 88 115 L 100 115 100 90 Z"/>
        <path d = "M50 115 50 125 35 125 a1,0.6 0 0,0 80,0 L 100 125 100 115 Z"/>

        <!-- Snake -->
        <path d="M110 20 A5,8 0 0,0 93 13 C 90 28 80 5 70 15 Q 65 12 65 20 Q 52 30 69 25 
        Q 79 27 75 22 C 75 10 100 45 102 10 Z"
        style="fill:#cc6666"/>
        <polyline points="60 25 56 26 57 28 56 31 60 27"
        style="fill: #ffccff"/>
        <ellipse cx="69" cy="21" rx="5" ry="1"
        style="fill:#e6b3b3" transform = "rotate(-25, 69, 21)"/>
        <path d="M102 10 Q 97 10 95 15 Q 100 18 100 15 Z"
        style="fill:#602020"/>
    </g>
    </defs>

    <use xlink:href="#rendonE3dlogo" x="0" y="0" style="fill: #ffa31a; stroke:black"
    transform="scale(0.5)"/>
</svg>
                            <h2>Paulo Rendon</h2>
                        </a>
                    </div>
                    <ul>
                        <li><a onClick="weWillGo('start_section')" class="nav-link">Home</a></li>
                        <li><a onClick="weWillGo('resume_section')" class="nav-link">Resume</a></li>
                        <li><a onClick="weWillGo('projects_section')" class="nav-link">Projects</a></li>
                        <li><a onClick="changeMode()" class="nav-link" id="modeBtn">Change Mode</a></li>
                    </ul>
                </nav>
            </section>
        </div>
        <div class="title-container">
            <h1 class="section-name" id="start_section">Hi, my name is Paulo Rendon</h1>
        </div>
        <div class="about_me_section">
            <div class="image">
                <img src="images/new_pic_of_me.jpg" alt="image of me" height="auto" width="100%">
            </div>
            <div class = "about_me">
                <p class="desc_myself">I graduated from Sonoma State University with a 3.572 GPA, earning me the Cum Laude honors. I studied Computer Science, and made the dean's list for six of my eight total semesters at Sonoma State University with 3 semesters being online due to COVID. I am a hard worker currently looking for a job that can help further my knowledge in Software development. I try to stay active when I can, and I am a big fan of really any physical activities, especially Brazilian Jiu Jitsu and American Football. I also enjoy playing video games and have recently started working out.</p>
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
                <embed src="images/RendonResume_trans.pdf" width="80%" height="100%">
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
                <h1 class="section-name">Previous Projects</h1>
            </div>
            <div class="prev_proj_cont">
                <p class="arrow" id="left_arrow" onclick='shiftProj("left")' style="color: rgba(255, 255, 255, 1)">&#8249;</p>
                <div class="prev_projects" id="prev_projects">

                </div>
                <p class="arrow" id="right_arrow" onclick='shiftProj("right")'style="color: rgba(255, 255, 255, 1)">&#8250;</p>
            </div>
        </div>
    </body>
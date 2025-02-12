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
        <script src="proj_page.js"></script>
    </head>
    <body class="<?php echo $themeClass; ?>">
       <!-- <div class = "navbar">
            <section class="header"> -->
        <div class="stick-handler">
                <nav>
                    <a class="logo" href="index.php">
                        <img src="images/logo.svg" height="70vh" width="70vw">
                        <h2>Paulo Rendon</h2>
                    </a>
                    <ul>
                        <li><a href="index.php?start_section" class="nav-link">Home</a></li>
                        <li><a href="index.php?resume-section" class="nav-link">Resume</a></li>
                        <li><a href="index.php?projects-section" class="nav-link">Projects</a></li>
                        <li><a onClick="changeMode()" class="nav-link" id="modeBtn">Change Mode</a></li>
                        <a onClick="homeDrop()" class="dropdown" id="dropdownBtn">▼</a>
                    </ul>
                </nav>
                <div class="dropMenu" id="dropMenu">
                    <li><a href="index.php?start_section" class="drop-link">Home</a></li>
                    <li><a href="index.php?resume-section" class="drop-link">Resume</a></li>
                    <li><a href="index.php?projects-section" class="drop-link">Projects</a></li>
                    <li><a onClick="changeMode()" class="drop-link" id="modeBtn">Change Mode</a></li>
                </div>
        </div>
            <!--</section>
        </div>-->
        
        <div class="proj-page-image" id="proj_page_image">
        </div>
        <div class="proj-bottom">
            <div class="proj-languages" id="proj_languages">
                <h3 class="pf-section-name">Languages</h3>
            </div>
            <div class="proj-links-list" id="proj_links">
                <h3 class="pf-section-name">Important Links</h3>
            </div>
        </div>
        <div class = "proj-details" id="proj_details">
        </div>
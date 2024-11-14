var projIndex = 2;
const queryString = window.location.search.substr(1);
const prefersDarkTheme = window.matchMedia("(prefers-color-scheme: dark)");
const MAX_PROJ_DISPLAY = 3;

function changeMode(){
    if(prefersDarkTheme.matches){
        document.body.classList.toggle("light-mode");
        var theme = document.body.classList.contains("light-mode")!=-1 ? "dark" : "light";
    }
    else{
        document.body.classList.toggle("dark-mode");
        var theme = document.body.classList.contains("dark-mode")!=1 ? "light" : "dark";
    }
    document.cookie = "theme=" + theme + ";expires=" + new Date(new Date().getTime()+60*60*1000*24).toGMTString()+";";
}

function weWillGo(section){
    var sec = document.getElementById(section);
    var offset = window.innerHeight * .1;
    var y = sec.getBoundingClientRect().top + window.pageYOffset - offset;
    window.scrollTo({top: y, behavior: 'smooth'});
}

function download(path, name){
    console.log("running download");
    const anchor = document.createElement('a');
    anchor.href = path;
    anchor.download = name;
    anchor.target = "_blank";
    document.body.appendChild(anchor);
    anchor.click();
    document.body.removeChild(anchor);
}

async function printData(){
    document.getElementById("proj1_title").innerHTML = projects[0].projectName;
    document.getElementById("proj1_desc").innerHTML = projects[0].description;
    document.getElementById("proj2_title").innerHTML = projects[1].projectName;
    document.getElementById("proj2_desc").innerHTML = projects[1].description;    
}


/* <div class="cur_proj_container" id="proj1">
                    <p class="proj_title" id="proj1_title"></p>
                    <p class="proj_desc" id="proj1_desc"></p>
                </div>
                <div class="cur_proj_container">
                    <p class="proj_title">Project Title 2</p>
                    <p class="proj_desc">Project Desc 2</p>
                </div>*/

/*After Page Loaded*/
document.addEventListener('DOMContentLoaded', function() {
    printData();
    buildProjects();
    buildProjectsTip();
    if(queryString){
        console.log(queryString);
        weWillGo(queryString);
    }
    else
        console.log("No Scroll");
}, false);

function buildProjects(){
    for(var tmp = 0; tmp < MAX_PROJ_DISPLAY && projIndex + tmp < projects.length; tmp++){
            document.getElementById("prev_projects").innerHTML += `
            <div class=\"prev-proj-container\" value= ${projIndex + tmp} onClick = \"openProject(${projIndex + tmp})\">
                <img class=\"proj-thumb\" src=${projects[projIndex + tmp].thumbnail}>
                <p class=\"proj-title\">${projects[projIndex + tmp].projectName}</p>
            </div>`;
    }
    
    if(projIndex > 2)
        document.getElementById("left_arrow").style.visibility = "visible";
    else
        document.getElementById("left_arrow").style.visibility = "hidden";
    
    if(projIndex + MAX_PROJ_DISPLAY < projects.length)
        document.getElementById("right_arrow").style.visibility = "visible";
    else
        document.getElementById("right_arrow").style.visibility = "hidden";
}

function buildProjectsTip(){
    
    
    /* why isn't this line working, sees it as undefined */
    console.log(projects[0].projectName);
    
    
    var projects = document.getElementById("prev_projects");
    var tip_container = document.getElementById("project_popup_container");
    for(const child of projects.children){
        console.log(child.id);
        var bounds = child.getBoundingClientRect();
        console.log("This child is bounded at " + bounds.top + ", "+ bounds.left + ", " + bounds.right + ", and " + bounds.bottom + "and a value of " + child.getAttribute('value'));
        tip_container.innerHTML += `<div class=\"prev_proj_popup>
                                    </div>`;
        console.log(projects[0].projectName);
    }
}

function openProject(index){
    console.log("running open project");
    indexOfOpenedProject = index;
    window.location.href = 'proj.php?projIndex=' + index;
}

/*
<div class="prev_proj_container">
                    <p class="proj_title">Test Title</p>
                    <p class="proj_desc">Test Description</p>
                </div>
*/

function shiftProj(direction){
    if(direction == "right"){
        if(projIndex + MAX_PROJ_DISPLAY > projects.length)
            console.log("Cannot shift left");
        else{
            projIndex += MAX_PROJ_DISPLAY;

        }
    }
    else if(direction == "left"){
        if(projIndex - MAX_PROJ_DISPLAY < 2)
            console.log("Cannot shift right");
        else{
            projIndex -= MAX_PROJ_DISPLAY;

        }
    }
    else{
        console.log("not a valid argument");
        return;
    }
    document.getElementById("prev_projects").innerHTML = "";
    buildProjects(); 
}

function homeDrop(){
    var btn = document.getElementById("dropdownBtn");
    var menu = document.getElementById("dropMenu");
    if(btn.innerHTML == "▼"){
        btn.innerHTML = "▲";
        menu.style.display = "block";
    }
    //When btn is 
    else{
        btn.innerHTML = "▼";
        menu.style.display = "none";
    }
}
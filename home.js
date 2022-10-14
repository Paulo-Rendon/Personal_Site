var projIndex = 2;
const queryString = window.location.search.substr(1);
const prefersDarkTheme = window.matchMedia("(prefers-color-scheme: dark)");

function changeMode(){
    if(prefersDarkTheme.matches){
        document.body.classList.toggle("light-mode");
        var theme = document.body.classList.contains("light-mode")!=-1 ? "light" : "dark";
    }
    else{
        document.body.classList.toggle("dark-mode");
        var theme = document.body.classList.contains("dark-mode")!=1 ? "dark" : "light";
    }
    document.cookie = "theme=" + theme;
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
    if(queryString){
        console.log(queryString);
        weWillGo(queryString);
    }
    else
        console.log("No Scroll");
}, false);

function buildProjects(){
    for(var tmp = 0; tmp < 4 && projIndex + tmp < projects.length; tmp++){
            document.getElementById("prev_projects").innerHTML += `
            <div class=\"prev_proj_container\" onClick = \"openProject(${projIndex + tmp})\">
                <p class=\"proj_title\">${projects[projIndex + tmp].projectName}</p>
                <p class=\"proj_desc\">${projects[projIndex + tmp].description}</p>
            </div>`;
    }
    
    if(projIndex > 2)
        document.getElementById("left_arrow").style = "color: rgba(255, 255, 255, 1)";
    else
        document.getElementById("left_arrow").style = "color: rgba(255, 255, 255, 0)";
    
    if(projIndex + 4 < projects.length)
        document.getElementById("right_arrow").style = "color: rgba(255, 255, 255, 1)";
    else
        document.getElementById("right_arrow").style = "color: rgba(255, 255, 255, 0)";
}

function openProject(index){
    indexOfOpenedProject = index;
    window.location.href = 'proj.html?projIndex=' + index;
}

/*
<div class="prev_proj_container">
                    <p class="proj_title">Test Title</p>
                    <p class="proj_desc">Test Description</p>
                </div>
*/

function shiftProj(direction){
    if(direction == "right"){
        if(projIndex + 4 > projects.length)
            console.log("Cannot shift left");
        else{
            projIndex += 4;

        }
    }
    else if(direction == "left"){
        if(projIndex - 4 < 2)
            console.log("Cannot shift right");
        else{
            projIndex -= 4;

        }
    }
    else{
        console.log("not a valid argument");
        return;
    }
    document.getElementById("prev_projects").innerHTML = "";
    buildProjects(); 
}
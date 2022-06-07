function weWillGo(section){
    var sec = document.getElementById(section);
    var offset = window.innerHeight * .1;
    var y = sec.getBoundingClientRect().top + window.pageYOffset - offset;
    window.scrollTo({top: y, behavior: 'smooth'});
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
}, false);
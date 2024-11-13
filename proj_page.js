const queryString = window.location.search;
const urlParams = new URLSearchParams(queryString);
const projIndex = urlParams.get('projIndex')
console.log(queryString);
console.log(projIndex);
const prefersDarkTheme = window.matchMedia("(prefers-color-scheme: dark)");

/*After Page Loaded*/
document.addEventListener('DOMContentLoaded', function() {
    buildPage()
}, false);

function buildPage(){
    document.getElementById("proj_page_image").innerHTML += `
            <img src=${projects[projIndex].thumbnail} alt=\"error\">
            <div class=\"proj_desc_and_title\">
                <h3 class=\"proj_section-name\">${projects[projIndex].projectName}</h3>
                <p class=\"proj_desc\">${projects[projIndex].summary}</p>
            </div>`;
    var tmp = projects[projIndex].languages[0];
    for(var i = 1; i < projects[projIndex].languages.length; i++){
        tmp += ", " + projects[projIndex].languages[i];
    }
    document.getElementById("proj_languages").innerHTML += `
         <p class=\"proj_desc\">${tmp}</p>`;
    
    for(var name in projects[projIndex].links){
        console.log(name);
        document.getElementById("proj_links").innerHTML +=
        `<div class="proj_links">
<p class="proj_link_name">${name}:</p>
<a href=${projects[projIndex].links[name]} target="_blank" class="proj_link_site">${projects[projIndex].links[name]}</a></div>`;
    }
    for(var secName in projects[projIndex].more_detail){
        console.log(secName);
        document.getElementById("proj_details").innerHTML += `
        <h3 class=\"proj_sec_name\">${secName}</h3>
        <p class=\"proj_sec_desc\">${projects[projIndex].more_detail[secName]}</p>`;
    }
}

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
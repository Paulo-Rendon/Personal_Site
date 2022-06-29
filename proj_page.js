const queryString = window.location.search;
const urlParams = new URLSearchParams(queryString);
const projIndex = urlParams.get('projIndex')
console.log(queryString);
console.log(projIndex);

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
}
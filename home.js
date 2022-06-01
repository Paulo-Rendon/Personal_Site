function weWillGo(section){
    var sec = document.getElementById(section);
    var offset = window.innerHeight * .1;
    var y = sec.getBoundingClientRect().top + window.pageYOffset - offset;
    window.scrollTo({top: y, behavior: 'smooth'});
}

fetch('projects.json')
    .then(function(response){return response.json()})
    .then(function(data) {printData(data);})
    .catch(function(err){console.log('error: ' + err);});

function printData(projects){
    for(let i = 0; i < projects.length; i++){
        console.log(projects[i].projectName);
    }
}

function weWillGo(section){
    var sec = document.getElementById(section);
    var offset = window.innerHeight * .1;
    var y = sec.getBoundingClientRect().top + window.pageYOffset - offset;
    window.scrollTo({top: y, behavior: 'smooth'});
}


function printData(){
    for(let i = 0; i < projects.length; i++){
        console.log(projects[i]);
    }
}

printData();
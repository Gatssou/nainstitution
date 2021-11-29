

function toggleSwitch(){
    if(document.body.className = 'clair'){
    document.body.classList.remove("clair");
    document.body.classList.add("obscur");
    }
    else if(document.body.className = 'obscur'){
        document.body.classList.remove("obscur");
        document.body.classList.add("clair");
    }
}
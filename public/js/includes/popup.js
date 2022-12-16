
let popup = document.getElementById("popup");

const visitUrl="";

function openPopup(url){
    popup.classList.add("open_popup");
    visitUrl = url;
}

// i edited some parts
function closePopup(){
    popup.classList.remove("open_popup");
    window.location.href = visitUrl;
}





let popup = document.getElementById("popup");
let visitUrl;
let id;

function openPopup(url){
    popup.style.visibility = "visible";
    visitUrl = url;
    
}

// i edited some parts
function closePopup(){
    popup.style.visibility = "hidden";
    console.log(visitUrl);
    window.location.href = visitUrl;                                                 
}

function openDeletePopup(val){
    // popup.classList.add("open_popup");
    popup.style.visibility = "visible";
    id = val; 
}

function closeDeletePopup(){
    popup.style.visibility = "hidden";
}

function openDelete2Popup(){
    // popup.classList.add("open_popup");
    popup.style.visibility = "visible";
}

function directPreviewPage(){
    // popup.classList.remove("open_popup");
    popup.style.visibility = "hidden";
    window.location.href = "http://localhost/Pothpiyasa/public/users/deletePreview/"+id;
}




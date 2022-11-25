
var btn = document.getElementById("btn");
var lectureForm = document.getElementById("lectureForm");
var studentForm = document.getElementById("studentForm");



function getStudent() {
  studentForm.style.left = "10px";
  lectureForm.style.left = "-400px";
  btn.style.left = "110px";
  

}


function getLecture(){
  studentForm.style.left = "400px";
  lectureForm.style.left = "10px";
  btn.style.left = "0px";

}




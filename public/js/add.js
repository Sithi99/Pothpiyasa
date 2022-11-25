
let lecturebtn = document.getElementById("lecturebtn");
let studentbtn = document.getElementById("studentbtn");

// lecture btn clicked
lecturebtn.addEventListener("click", () => {
  lecturebtn.style.background = "#1395ED";
  lecturebtn.style.color = '#ffffff'
  studentbtn.style.background = "transparent";
  studentbtn.style.color = '#000000'
});

// student btn clicked
studentbtn.addEventListener("click", () => {
  studentbtn.style.background = "#1395ED";
  studentbtn.style.color = '#ffffff'
  lecturebtn.style.background = "transparent";
  lecturebtn.style.color = '#000000'
});


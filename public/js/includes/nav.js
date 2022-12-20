// intialize navigation field
let toggelBar = document.getElementById("toggelBar");
let mainForm = document.getElementById("mainForm");

let dashboard_nav = document.getElementById('dashboard_nav');

dashboard_nav.addEventListener("mouseover", () => {
  toggelBar.style.top = "237px";
  toggelBar.style.visibility = 'visible';
});

dashboard_nav.addEventListener("mouseout", () => {
  toggelBar.style.visibility = 'hidden';
  
});

let account_nav = document.getElementById('account_nav');
let accountlist = document.getElementById('accountlist');

account_nav.addEventListener("mouseover", () => {
  toggelBar.style.top = "287px";
  toggelBar.style.visibility = 'visible';
  accountlist.style.visibility ='visible';
  
});

account_nav.addEventListener("mouseout", () => {
  toggelBar.style.visibility = 'hidden';
  accountlist.style.visibility ='hidden';
  
});

let book_nav = document.getElementById('book_nav');
let booklist = document.getElementById('booklist');

book_nav.addEventListener("mouseover", () => {
  toggelBar.style.top = "337px";
  toggelBar.style.visibility = 'visible';
  booklist.style.visibility ='visible';
});

book_nav.addEventListener("mouseout", () => {
  toggelBar.style.visibility = 'hidden';
  booklist.style.visibility ='hidden';
  
});

let member_nav = document.getElementById('member_nav');
let memberlist = document.getElementById('memberlist');

member_nav.addEventListener("mouseover", () => {
  toggelBar.style.top = "387px";
  toggelBar.style.visibility = 'visible';
  memberlist.style.visibility ='visible';
});

member_nav.addEventListener("mouseout", () => {
  toggelBar.style.visibility = 'hidden';
  memberlist.style.visibility ='hidden';
});


let circulation_nav = document.getElementById('circulation_nav');

circulation_nav.addEventListener("mouseover", () => {
  toggelBar.style.top = "437px";
  toggelBar.style.visibility = 'visible';
});

circulation_nav.addEventListener("mouseout", () => {
  toggelBar.style.visibility = 'hidden';
});

let bookCategory_nav = document.getElementById('bookCategory_nav');

bookCategory_nav.addEventListener("mouseover", () => {
  toggelBar.style.top = "487px";
  toggelBar.style.visibility = 'visible';
});

bookCategory_nav.addEventListener("mouseout", () => {
  toggelBar.style.visibility = 'hidden';
});

let inventory_nav = document.getElementById('inventory_nav');

inventory_nav.addEventListener("mouseover", () => {
  toggelBar.style.top = "537px";
  toggelBar.style.visibility = 'visible';
});

inventory_nav.addEventListener("mouseout", () => {
  toggelBar.style.visibility = 'hidden';
});

let author_nav = document.getElementById('author_nav');

author_nav.addEventListener("mouseover", () => {
  toggelBar.style.top = "587px";
  toggelBar.style.visibility = 'visible';
});

author_nav.addEventListener("mouseout", () => {
  toggelBar.style.visibility = 'hidden';
});

let admin_nav = document.getElementById('admin_nav');
let adminlist = document.getElementById('adminlist');

admin_nav.addEventListener("mouseover", () => {
  toggelBar.style.top = "637px";
  toggelBar.style.visibility = 'visible';
  adminlist.style.visibility ='visible';
});

admin_nav.addEventListener("mouseout", () => {
  toggelBar.style.visibility = 'hidden';
  adminlist.style.visibility ='hidden';
});

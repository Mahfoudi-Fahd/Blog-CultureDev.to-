let sidebar = document.querySelector(".sidebar");
let closeBtn = document.querySelector("#btn");

closeBtn.addEventListener("click", ()=>{
  sidebar.classList.toggle("open");
  menuBtnChange();   //calling the function(optional)
});



// following are the code to change sidebar button
function menuBtnChange() {
 if(sidebar.classList.contains("open")){
   closeBtn.classList.replace("bx-menu", "bx-menu-alt-right");//replacing the icons class
 }else {
   closeBtn.classList.replace("bx-menu-alt-right","bx-menu");//replacing the icons class
 }
}

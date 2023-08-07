let arrow = document.querySelectorAll(".arrow");
  for (var i = 0; i < arrow.length; i++) {
    arrow[i].addEventListener("click", (e)=>{
   let arrowParent = e.target.parentElement.parentElement;//selecting main parent of arrow
   arrowParent.classList.toggle("showMenu");
    });
  }
  // let subMenuOption = document.querySelector(".subMenuOption");
  // subMenuOption.addEventListener("click", ()=>sub-menu.classList.toggle("showMenu"));
  let sidebar = document.querySelector(".sidebar");
  let sidebarBtn = document.querySelector(".bx-menu");
let details_section = document.querySelector(".detail_section");
let main_section = document.querySelector(".main_section");

console.log(sidebarBtn);
sidebarBtn.addEventListener("click", ()=>{sidebar.classList.toggle("close");
});

window.onresize=window.onload = function(){
if($(window).width()<990){
sidebar.classList.add("close");
sidebar.classList.remove("open");

}
if($(window).width()>990){
sidebar.classList.add("open");
sidebar.classList.remove("close");
}
}
window.onresize=window.onload = function(){
  if($(window).width()<990){
  sidebar.classList.add("close");
  sidebar.classList.remove("open");
  }
  if($(window).width()>990){
  sidebar.classList.add("open");
  sidebar.classList.remove("close");
  }
  }

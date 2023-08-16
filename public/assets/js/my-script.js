// g-sidenav-show g-sidenav-hidden
// g-sidenav-show g-sidenav-pinned

let closedSide = true;
document.querySelector("#togglerBtn").onclick = () => {
  if(closedSide){
    $('body').removeClass('g-sidenav-hidden').addClass('g-sidenav-pinned')
    closedSide = false;
  }else{
    $('body').removeClass('g-sidenav-pinned').addClass('g-sidenav-hidden')
    closedSide = true;
  }
}

document.querySelector("#collapseSide").onclick = () => {
  $('body').removeClass('g-sidenav-pinned').addClass('g-sidenav-hidden')
  closedSide = true;
}

document.getElementById('copywritingNavLink').onclick = () => {
  localStorage.removeItem('copy-data');
}
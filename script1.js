const userProfile = document.querySelector('.user-profile');
userProfile.addEventListener('click', function(){ document.querySelector('.user-link-dropdown').classList.toggle('show');
});

const hamburger = document.querySelector('.toggle-btn');
hamburger.addEventListener('click', function(){
  document.querySelector('#sidebar').classList.toggle('expand');
});
function toggleRootClass(){
  document.querySelector(":root").classList.toggle("light");
}
function isLight(){
  return localStorage.getItem("light-theme");
}
function toggleLocalStorageItem(){
  if(isLight()){
    localStorage.removeItem("light-theme");
  } else {
    localStorage.setItem("light-theme", "set");
  }
}
if(isLight()){
  toggleRootClass();
}
document.querySelector(".theme-toggle").addEventListener("click", () => {
  toggleLocalStorageItem();
  toggleRootClass();
});
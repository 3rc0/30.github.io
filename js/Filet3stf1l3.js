function firstAlert(){
document.write(alert(" [@] CAUTION [@] \n Unstable website and does not suitable for normal user!!!!"));
}
function myFunction(imgs) {
  var expandImg = document.getElementById("expandedImg");
  var imgText = document.getElementById("imgtext");
  expandImg.src = imgs.src;
  imgText.innerHTML = imgs.alt;
  expandImg.parentElement.style.display = "block";
}


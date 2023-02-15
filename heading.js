
let slideIndex = 0;



function showSlides() {
  let i;
  let slides = document.getElementsByClassName("mySlides");
  for (i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";
  }
  slideIndex++;
  if (slideIndex > slides.length) {slideIndex = 1}
  slides[slideIndex-1].style.display = "block";
  setTimeout(showSlides, 2000); // Change image every 2 seconds
}
function navigationscript(){
    var homeLink = document.getElementById("homeid");
    var roomLink = document.getElementById("roomid");
    var diningLink = document.getElementById("dineid");
    var amenitiesLink = document.getElementById("amentid");
    var developerLink = document.getElementById("developid");
    var contactLink = document.getElementById("contaid");
    var loginvar=document.getElementById("loginid");
    var signupvar=document.getElementById("signupid");

  
    homeLink.addEventListener("mouseover", function() {
      homeLink.style.backgroundColor = "#ccc";
    });
    homeLink.addEventListener("mouseout", function() {
      homeLink.style.backgroundColor = "";
    });
  
    roomLink.addEventListener("mouseover", function() {
      roomLink.style.backgroundColor = "#ccc";
    });
    roomLink.addEventListener("mouseout", function() {
        roomLink.style.backgroundColor = "";
    });
  
    diningLink.addEventListener("mouseover", function() {
        diningLink.style.backgroundColor = "#ccc";
    });
    diningLink.addEventListener("mouseout", function() {
        diningLink.style.backgroundColor = "";
    });
  
    developerLink.addEventListener("mouseover", function() {
        developerLink.style.backgroundColor = "#ccc";
    });
    developerLink.addEventListener("mouseout", function() {
        developerLink.style.backgroundColor = "";
    });
    contactLink.addEventListener("mouseover", function() {
        contactLink.style.backgroundColor = "#ccc";
    });
    contactLink.addEventListener("mouseout", function() {
        contactLink.style.backgroundColor = "";
    });
    amenitiesLink.addEventListener("mouseover", function() {
      amenitiesLink.style.backgroundColor = "#ccc";
  });
  amenitiesLink.addEventListener("mouseout", function() {
    amenitiesLink.style.backgroundColor = "";
  });
  loginvar.addEventListener("mouseover", function() {
    loginvar.style.backgroundColor = "#ccc";
});
loginvar.addEventListener("mouseout", function() {
    loginvar.style.backgroundColor = "";
});
signupvar.addEventListener("mouseover", function() {
    signupvar.style.backgroundColor = "#ccc";
});
signupvar.addEventListener("mouseout", function() {
    signupvar.style.backgroundColor = "";
});

}
navigationscript();
showSlides();

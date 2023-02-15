var homeLink = document.getElementById("homeid");
    var roomLink = document.getElementById("roomid");
    var diningLink = document.getElementById("dineid");
    var amenitiesLink = document.getElementById("amentid");
    var developerLink = document.getElementById("developid");
    var contactLink = document.getElementById("contaid");
  
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
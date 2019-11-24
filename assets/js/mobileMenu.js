function openNav() {
    document.getElementById("mobileMenu").style.width = "250px";
}

function closeNav() {
    document.getElementById("mobileMenu").style.width = "0";
}

function drop_close(section){
    var mobileDropDown = document.getElementsByClassName("mobileDropDown");
    
    for(var i = 0; i < mobileDropDown.length; i++){
        if(mobileDropDown[i].getAttribute('id') == section){
            if(mobileDropDown[i].style.display == "none"){
                mobileDropDown[i].style.display = "block";
            } else {
                mobileDropDown[i].style.display = "none";
            }
        }
    }
}
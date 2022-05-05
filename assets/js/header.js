function menudrop(){
    menu = document.getElementById('menu');
    if(menu.style.display == "none"){
        menu.style.display = "block";
    }else{
        menu.style.display = "none";
    }
}

// Change window to login screen
function login(path){
    window.location.href = path + "login/login.php";
}

// Change window to logout
function logout(path){
    window.location.href = path + "login/logout.php";
}

// Change window to index
function home(path){
    window.location.href = path + "index.php";
}

// Change window to given page
function changePage(path, name){
    window.location.href = path + name;
}
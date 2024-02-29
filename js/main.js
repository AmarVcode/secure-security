function showmenu(){
    let a = document.getElementById("menu");
    if(a.classList.contains("show")){
        a.classList.remove("show");
    }
    else{
        a.classList.add("show");

    }
}
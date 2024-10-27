
    let bar = document.querySelector("#bar");
    let cross = document.querySelector("#cross");
    let box = document.querySelector("#menu-box");
    
    console.log(cross);
    
    function showmenu(){
        bar.style.display = "none";
        box.style.display = "block";
        cross.style.display = "block";
    }
    function hidemenu(){
        box.style.display = "none";
        cross.style.display = "none";
        bar.style.display = "block";
        


    }
var check=document.querySelector(".check");
check.addEventListener('click',idioma);

function idioma(){
    let id=check.checked;
    if (id==true){
        location.href="/public_html/Integradora/indexenglish.php";
    }
    else{
        location.href="/public_html/Integradora/index.php";
    }
}
var prev;
var nimg="Images/n";

function hoverImg(id){
    prev=document.getElementById(id).src;
    nimg="Images/n"+id+".jpg";
    document.getElementById(id).src=nimg;
}
function oldImg(id){
    console.log(prev);
    document.getElementById(id).src=prev;
}
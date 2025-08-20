function herbalPlants() {
        window.location.href = 'herbalplants/herbal.php';
}
function flowerPlants(){
        window.location.href = 'flowerplants/flower.html'; 
}
function fruitPlants(){
    window.location.href = 'fruit/fruit.html'; 
}
function indoorPlants() {  
    window.location.href = 'indoor/indoor.html'; 
}
function outdoorPlants(){
    window.location.href = 'outdoor/outdoor.html'; 
}
function giftPlants(){
    window.location.href='plantgift/gift.html'
}
function otherPlants(){
    window.location.href = 'other/other.html'; 
}
function holderPlants(){
    window.location.href = 'plantholder/holder.html'; 
}
function seeds(){
    window.location.href = 'seed/seeds.html'; 
}
function soil(){
    window.location.href = 'soil/soil.html'; 
}
function fur(){
    window.location.href = 'furtilizer/furtilizer.html'; 
}
function equ(){
    window.location.href = 'equipment/equ.html'; 
}
function rose(){
    window.location.href = 'rose.php'; 
}
function lily(){
    window.location.href = 'lily.html'; 
}
function marigold(){
    window.location.href = 'marigold.html'; 
}
function tulip(){
    window.location.href = 'tulip.html'; 
}
function sunflower(){
    window.location.href = 'sunflower.html'; 
}
function iris(){
    window.location.href = 'iris.html'; 
}
function orchid(){
    window.location.href = 'orchid.html'; 
}
function jasmine(){
    window.location.href = 'jasmine.html'; 
}
function lavender(){
    window.location.href = 'lavender.html'; 
}
function Frangipani(){
    window.location.href = 'Frangipani.html'; 
}
function Bluebell(){
    window.location.href = 'Bluebell.html'; 
}
function hibiscus(){
    window.location.href = 'hibiscus.html'; 
}
function planter(){
    window.location.href = 'planter.html'; 
}
function stand(){
    window.location.href = 'stand.html'; 
}
function plasticplanters(){
    window.location.href = 'plasticplanters.html'; 
}
function concrete(){
    window.location.href = 'concrete.html'; 
}
function Woodenplanters(){
    window.location.href = 'Woodenplanters.html'; 
}
function Metalplanters(){
    window.location.href = 'Metalplanters.html'; 
}
function Hangingplanters(){
    window.location.href = 'Hangingplanters.html'; 
}
function succulentplanters(){
    window.location.href = 'succulentplanters.html'; 
}
function selfwateringplant(){
    window.location.href = 'selfwateringplant.html'; 
}
function tulsi(){
    window.location.href = 'tulsi.html'; 

}
function aloevera(){
    window.location.href="aloevera.php";
}
function ash(){
    window.location.href="ash.html";
}
function brahmi(){
    window.location.href="brahmi.html";
}
function Fenugreek(){
    window.location.href="Fenugreek.html";
}
function gingko(){
    window.location.href="gingko.html";
}
function lemonblam(){
    window.location.href="lemonblam.html";
}
function lemongrass(){
    window.location.href="lemongrass.html";
}
function neem(){
    window.location.href="neem.html";
}
function Rosemary(){
    window.location.href="Rosemary.html";
}
function turmeric(){
    window.location.href="turmeric.html";
}
function adulsa(){
    window.location.href = 'herbalplants/adulsa.php';
}
function ajwain(){
    window.location.href="ajwain.php";
}
function Shatavari(){
    window.location.href="Shatavari.html";
}



function search()
{
    let filter=document.getElementById('find').value.toUpperCase();
    let item=document.querySelectorAll('.product'); 
    let l=document.getElementsByTagName('h3');
    const image = document.getElementById("myImage");
    document.addEventListener("keyup", function() {
        image.style.display = "none";
    });
    for(var i=0;i<=l.length;i++){
        let a=item[i].getElementsByTagName('h3')[0];
        let value=a.innerHTML||a.innerText||a.textContent;        
        if(value.toUpperCase().indexOf(filter)>-1){
            item[i].style.display="";
        }
        else{
            item[i].style.display="none";           
        }
    }            
}
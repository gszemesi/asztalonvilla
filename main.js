//elemek kiválasztása
const azonObj = document.querySelector("#azon");
const gombObj = document.querySelector("#gomb");


const tömb=["asd"];

//kattintás
gombObj.addEventListener("click",kattintás)

function kattintás(){
    //beolvasás
    if(a in tömb){
        console.log("Hello world!");
    }
}

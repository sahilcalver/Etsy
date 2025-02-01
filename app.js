let list_btn= document.querySelector(".list_btn");
let underlay=document.querySelector(".underlay");
let list_close=document.querySelector(".list_close");
let cat_bar=document.querySelector(".cat-bar");

list_btn.addEventListener("click", ()=>{
    underlay.style.visibility="visible";
    setTimeout(()=>{
 cat_bar.style.transform="translateX(0)"
    },120)
   
   
})


underlay.addEventListener("click", ()=>{
    underlay.style.visibility="hidden";
    setTimeout(()=>{
        cat_bar.style.transform="translateX(-100%)"
    },120)    
})

cat_bar.addEventListener("click",(e)=>{
        e.stopPropagation();
})

list_close.addEventListener("click", ()=>{
    underlay.style.visibility="hidden";
    setTimeout(()=>{
        cat_bar.style.transform="translateX(-100%)"
    },120)    
})


// Large screen side bar

let large_screen_cat_btn=document.querySelector(".cat-btn");
let overlay=document.querySelector(".overlay");
let cat_menu=document.querySelector(".cat-lg-list-div");


large_screen_cat_btn.addEventListener("click",()=>{
    overlay.style.visibility="visible";
    cat_menu.style.transform="translateY(0px)scale(1)"
    cat_menu.style.opacity="1"
      
})

overlay.addEventListener("click",(e)=>{
    
        e.stopPropagation();
    cat_menu.style.transform="translateY(-100px)scale(0.5)"
    cat_menu.style.opacity="0"
    overlay.style.visibility="hidden";

})

// Header randomly changing images

let changing_images = document.querySelector(".main-header-img")
const random_Images=["main3.avif","main2.avif", "main4.avif", "main5.avif"];
const generateRandomImage= ()=>{
    const random_img=Math.random() * random_Images.length;
    const floor_img=Math.floor(random_img);
    return floor_img
}
    
window.addEventListener("DOMContentLoaded",()=>{
    changing_images.src=`./images/${random_Images[generateRandomImage()]}`
   
})


// second part images

let second_changing_images =document.querySelector(".header-second-img");
let second_changing_images_text =document.querySelector(".text");
const RandomImagesObject =[
    {
        src:"img1.avif",
        text:"Valentine's Day Gifts",
        subtext:"subtext-1"
    },
     {
        src:"img2.webp",
        text:"Wedding Anniversary Gifts",
        subtext:"subtext-1"
    },
     {
        src:"img3.avif",
        text:"Watch Collection",
        subtext:"subtext-1"
    },
    ,
     {
        src:"img5.avif",
        text:"Gifts for Kids",
        subtext:"subtext-1"
    },
     {
        src:"img5.avif",
        text:"Printable Greeting Cards",
        subtext:"Shop Now"
    }
    ,
     {
        src:"img6.webp",
        text:"Birthday Gifts ",
        subtext:"Shop Now"
    }, {
        src:"home.avif",
        text:"Home Decor ",
        subtext:"Shop Now"
    }
]

const GenerateRandomNum= () =>{
    const randoimg=Math.random()*RandomImagesObject.length
    const randofloor=Math.floor(randoimg)
    return randofloor
}

window.addEventListener("DOMContentLoaded",()=>{
   let num=GenerateRandomNum()
    second_changing_images.src=`./images/${RandomImagesObject[num].src}`
    second_changing_images_text.innerText=`${RandomImagesObject[num].text}`

})
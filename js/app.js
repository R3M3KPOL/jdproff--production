'use strict';
import { showMenu,dropDownMenu,closedUlList,removeClass,changeListener } from './navigation-menu.js';
import {load} from './parallax.js';
//variable for summer offert
const btnSummerOffert = document.querySelector('[data-name="summer-btn"]');
const btnCloseSummerOffert = document.querySelector('[data-name="offert-btn-close"]')
const offert = document.querySelector('[data-name="sezon-offert"]');
const containerOffert = document.querySelector('[data-name="summer-container"]')
//variables for sliders
const root = document.documentElement;
const btnsSlider = document.querySelectorAll('[data-carousel-button]');
const figureContent = document.querySelector('.slider-gallery__container');
const slides = document.querySelector("[data-slides]");
//variables for footer - change years
const footerYear = document.querySelector('.box-author__copy')
//let 
let newIndex
let size = 100;
//  setTimeout(() => {console.log("this is the first message")}, 5000);


//DOPRACOWAC CZAS TRWANIA ANIMACJI + ZMIANA SVG W MOMENCIE OTWARCIA I ZAMKNIECIA
const showSummerOffert= () => {
    containerOffert.classList.remove('invisible');
    offert.classList.add('go-to-right');
    if(offert.classList.contains('go-to-right')) {
        btnSummerOffert.classList.add('out');
        timeOut('giveCloseBtn');
    }
    if(btnSummerOffert.classList.contains('inside') & offert.classList.contains('go-to-right')){
        closeSummerOffert();
    };
};
const closeSummerOffert= () =>{
  btnSummerOffert.firstElementChild.classList.remove('invisible')
  offert.classList.remove('go-to-right')
  btnSummerOffert.classList.remove('inside')
  btnSummerOffert.lastElementChild.classList.remove('visible-X')
  containerOffert.classList.add('invisible')
}
const closeOffertButton = () =>{
    btnSummerOffert.firstElementChild.classList.add('invisible')
    btnSummerOffert.lastElementChild.classList.add('visible-X')
    setTimeout(() => {
        btnSummerOffert.classList.add('inside')
        if(btnSummerOffert.classList.contains('inside')) {
            btnSummerOffert.classList.remove('out')
        }
        btnSummerOffert.style.opacity='1';
    },1200)
}
const timeOut =(ChangeBtn)=>{
   if(ChangeBtn === 'giveCloseBtn'){
    setTimeout(() => {
        btnSummerOffert.style.opacity='0';
        closeOffertButton()
    },1945)
   }
}

//slider for reviews section
const transformX =()=>{
     if(newIndex < slides.children.length){
    slides.style.transform = `translateX(${-size * newIndex}%)`
    slides.style.transition = `transform .3s ease-in-out;`
     }

}
const handleBoundary =()=> {
    if(newIndex < 0 ){
            newIndex = slides.children.length - 1;
        }
    if(newIndex >= slides.children.length){
            newIndex = 0;
        }
 }
const slider =(button)=>{
    let offset = button.dataset.carouselButton === "next" ? 1 : -1;
    console.log(offset)
    button.addEventListener("click", () => {
        const activeSlide = slides.querySelector('[data-name="active"]'); 
        newIndex = [...slides.children].indexOf(activeSlide) + offset
        handleBoundary()
        transformX()
        slides.children[newIndex].dataset.name = 'active'
        delete activeSlide.dataset.name
    })

    button.addEventListener("keydown",(elements) =>{
        const activeSlide = slides.querySelector('[data-name="active"]'); 
        let offset = newOffset;
    
        newIndex = [...slides.children].indexOf(activeSlide) + offset
        if(elements.code === 'ArrowRight' || elements.keyCode === 39 ){
            handleBoundary()
        transformX()
    }

        if(elements.code === 'ArrowLeft' || elements.keyCode === 37 ){
        handleBoundary()
        transformX()
    }
        slides.children[newIndex].dataset.name = 'active'
         delete activeSlide.dataset.name
                
        
    })
}

//slider-carousel-for-keyframes-css
const AnimationSliderKeyFrames =()=> {
    if (figureContent === null) return;
const elementsDisplayed = getComputedStyle(root).getPropertyValue("--elements-displayed");
root.style.setProperty("--all-elements", figureContent.children.length);
    for(let i=0; i<elementsDisplayed; i++) {
    figureContent.appendChild(figureContent.children[i].cloneNode(true));
    }
}



//change years in the footer 
const handleCurrentYear = () => {
    const year = (new Date).getFullYear();
    footerYear.innerText = year ;
}
if(btnSummerOffert){
    btnSummerOffert.firstElementChild.addEventListener('click', showSummerOffert)
}
if(btnCloseSummerOffert){
    btnCloseSummerOffert.addEventListener('click', closeSummerOffert)
}
btnsSlider.forEach(slider)
handleCurrentYear();
AnimationSliderKeyFrames()



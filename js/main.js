import {filterItems,options,loadingImages,observer} from './parallax.js'
import { showMenu,dropDownMenu,closedUlList,removeClass,changeListener } from './navigation-menu.js';
const root = document.documentElement;
//variables for sliders
const figureContent = document.querySelector('.slider-gallery__container');
const btnsSlider = document.querySelectorAll('[data-carousel-button]');
const slides = document.querySelector("[data-slides]");
//variables for footer - change years
const footerYear = document.querySelector('.box-author__copy')
let size = 100;
let newIndex



//sliders
//slider-carousel-for-keyframes-css
const AnimationSliderKeyFrames =()=> {
    if (figureContent === null) return;
const elementsDisplayed = getComputedStyle(root).getPropertyValue("--elements-displayed");
root.style.setProperty("--all-elements", figureContent.children.length);
    for(let i=0; i<elementsDisplayed; i++) {
    figureContent.appendChild(figureContent.children[i].cloneNode(true));
    }
}

 const transformX =()=>{
     if(newIndex < slides.children.length){
    slides.style.transform = `translateX(${-size * newIndex}%)`
    slides.style.transition = `transform .3s ease-in-out;`
     }

}
 const ifProperty =()=> {
    if(newIndex < 0 ){
            newIndex = slides.children.length - 1;
        }
    if(newIndex >= slides.children.length){
            newIndex = 0;
        }
 }


//slider for reviews section
const slider =(button)=>{
    let newOffset = button.dataset.carouselButton === "next" ? 1 : -1;
    
    button.addEventListener("click", () => {
        const activeSlide = slides.querySelector('[data-name="active"]'); 
        let offset = newOffset;
        newIndex = [...slides.children].indexOf(activeSlide) + offset
        ifProperty()
        transformX()
        slides.children[newIndex].dataset.name = 'active'
        delete activeSlide.dataset.name
    })

    button.addEventListener("keydown",(elements) =>{
        const activeSlide = slides.querySelector('[data-name="active"]'); 
        let offset = newOffset;
    
        newIndex = [...slides.children].indexOf(activeSlide) + offset
        if(elements.code === 'ArrowRight' || elements.keyCode === 39 ){
       ifProperty()
        transformX()
    }

        if(elements.code === 'ArrowLeft' || elements.keyCode === 37 ){
       ifProperty()
        transformX()
    }
        slides.children[newIndex].dataset.name = 'active'
         delete activeSlide.dataset.name
                
        
    })
}


//change years in the footer 
const handleCurrentYear = () => {
    const year = (new Date).getFullYear();
    footerYear.innerText = year ;
}

AnimationSliderKeyFrames()
handleCurrentYear();
btnsSlider.forEach(slider)


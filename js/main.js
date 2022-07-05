const root = document.documentElement;

//variables for menu
const menuLines = document.querySelectorAll('.btn__line');
const menuBtn = document.querySelector('.btn__hamburger');
const menuList = document.querySelector('.header__items');
const dropDown = document.querySelector('.header__item--arrow');
const ulList = document.querySelector('.header__dropdown');
const closeUlList = document.querySelector('.header__dropdown--closed');
const blurBg = document.querySelector('.header__blurBg');
//variables for sliders
const figureContent = document.querySelector('.slider-gallery__container');
const btnsSlider = document.querySelectorAll('[data-carousel-button]');
const slides = document.querySelector("[data-slides]");
//variables for footer - change years
const footerYear = document.querySelector('.box-author__copy')
//another variables
let mediaQuery = window.matchMedia('(min-width: 768px)');
let size = 100;


//open menu -mobile
const showMenu =()=> {
    menuLines.forEach((element) => {
        element.classList.toggle('opened');
        if(element.classList.contains('opened')){
            menuList.classList.add('open');
        }
        else if(!element.classList.contains('opened')){
            menuList.classList.remove('open');
            closedUlList()

        } 
    })
}
//dropdown menu 
const dropDownMenu =()=> {
    ulList.classList.add('--Mobile');
    if(ulList.classList.contains('--Mobile')){
        blurBg.classList.add('--open')
    }
}

const closedUlList =()=>{
    ulList.classList.remove('--Mobile')
    blurBg.classList.remove('--open')
};

const removeClass =(e)=> {
    if(e.target === blurBg){
        closedUlList()
    }
}

const changeListener =(evt)=>{
    if(!evt.matches){
    dropDown.addEventListener("click", dropDownMenu)
    }
    else{
    dropDown.removeEventListener("click",dropDownMenu)
    closedUlList()
}
};

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
    const newOffset = button.dataset.carouselButton === "next" ? 1 : -1;
    
    button.addEventListener("click", () => {
        const activeSlide = slides.querySelector('[data-name="active"]'); 
        offset = newOffset;
        newIndex = [...slides.children].indexOf(activeSlide) + offset
        ifProperty()
        transformX()
        slides.children[newIndex].dataset.name = 'active'
        delete activeSlide.dataset.name
    })

    button.addEventListener("keydown",(elements) =>{
        const activeSlide = slides.querySelector('[data-name="active"]'); 
        offset = newOffset;
    
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
changeListener(mediaQuery)
btnsSlider.forEach(slider)
menuBtn.addEventListener("click", showMenu);
blurBg.addEventListener("click", removeClass)
mediaQuery.addEventListener("change", changeListener);
closeUlList.addEventListener("click", closedUlList);

  //export menu(variables and function) for another file.js
export{menuLines,menuBtn,menuList,dropDown,ulList,closeUlList,blurBg,showMenu,dropDownMenu,removeClass,changeListener}
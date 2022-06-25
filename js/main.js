const root = document.documentElement;
const figureContent = document.querySelector('.slider-gallery__container');
const menuLines = document.querySelectorAll('.btn__line');
const menuBtn = document.querySelector('.btn__hamburger');
const menuList = document.querySelector('.header__items');
const ulList = document.querySelector('.header__dropdown');
const blurBg = document.querySelector('.header__blurBg');
const dropDown = document.querySelector('.header__item--arrow');
const closeUlList = document.querySelector('.header__dropdown--closed');
const btnsSlider = document.querySelectorAll('[data-carousel-button]');
const slides = document.querySelector("[data-slides]");
const footerYear = document.querySelector('.box-author__copy')
let mediaQuery = window.matchMedia('(min-width: 768px)');
let size = 100;

//slider reviews
// btnsSlider.forEach(button => {
//     button.addEventListener("click", () => {
//         const offset = button.dataset.carouselButton === 'next' ? 1: -1;
//         const activeSlide = slides.querySelector('[data-name="active"]');  
//         let newIndex = [...slides.children].indexOf(activeSlide) +offset
//         if(newIndex < 0 ){
//             newIndex = slides.children.length - 1;
//         }
//         if(newIndex >= slides.children.length){
//             newIndex = 0;
//         }
//         if(newIndex < slides.children.length){
//         slides.style.transform = `translateX(${-size * newIndex}%)`
        
//         }
//         slides.children[newIndex].dataset.name = 'active'
//         delete activeSlide.dataset.name
//     })

//     button.addEventListener("keydown",(e) =>{
//         if(e.code === 'ArrowRight' || e.keyCode === 39){
//             console.log('arrow')
//         }
//     })
    
// })
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



btnsSlider.forEach(slider)


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
changeListener(mediaQuery)


//slider-carousel
const elementsDisplayed = getComputedStyle(root).getPropertyValue("--elements-displayed");
root.style.setProperty("--all-elements", figureContent.children.length);
for(let i=0; i<elementsDisplayed; i++) {
  figureContent.appendChild(figureContent.children[i].cloneNode(true));
}


const handleCurrentYear = () => {
    const year = (new Date).getFullYear();
    footerYear.innerText = year ;
}
handleCurrentYear();




menuBtn.addEventListener("click", showMenu);
blurBg.addEventListener("click", removeClass)
mediaQuery.addEventListener("change", changeListener);
closeUlList.addEventListener("click", closedUlList);

  

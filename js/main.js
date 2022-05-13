const root = document.documentElement;
const figureContent = document.querySelector('.slider-gallery__container');
const menuLines = document.querySelectorAll('.btn__line');
const menuBtn = document.querySelector('.btn__hamburger');
const menuList = document.querySelector('.header__items');
const ulList = document.querySelector('.header__dropdown');
const blurBg = document.querySelector('.header__blurBg')
const dropDown = document.querySelector('.header__item--arrow');
const closeUlList = document.querySelector('.header__dropdown--closed');
let mediaQuery = window.matchMedia('(min-width: 768px)');

// viewBox.setAttribute("viewBox", "50 0 100 100")

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




menuBtn.addEventListener("click", showMenu);
blurBg.addEventListener("click", removeClass)
mediaQuery.addEventListener("change", changeListener);
closeUlList.addEventListener("click", closedUlList);

  

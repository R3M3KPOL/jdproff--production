

//variables for menu
const menuLines = document.querySelectorAll('.btn__line');
const menuBtn = document.querySelector('.btn__hamburger');
const menuList = document.querySelector('.header__items');
const dropDown = document.querySelector('.header__item--arrow');
const ulList = document.querySelector('.header__dropdown');
const closeUlList = document.querySelector('.header__dropdown--closed');
const blurBg = document.querySelector('.header__blurBg');
let mediaQuery = window.matchMedia('(min-width: 768px)');
export const navigationUlList = document.querySelectorAll('[data-name="navigation"]')

//open menu -mobile
export const showMenu =()=> {
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
export const dropDownMenu =()=> {
    ulList.classList.add('--Mobile');
    if(ulList.classList.contains('--Mobile')){
        blurBg.classList.add('--open')
    }
}

export const closedUlList =()=>{
    ulList.classList.remove('--Mobile')
    blurBg.classList.remove('--open')
};

export const removeClass =(e)=> {
    if(e.target === blurBg){
        closedUlList()
    }
}

export const changeListener =(evt)=>{
    if(!evt.matches){
    dropDown.addEventListener("click", dropDownMenu)
    }
    else{
    dropDown.removeEventListener("click",dropDownMenu)
    closedUlList()
}
};

changeListener(mediaQuery)






menuBtn.addEventListener("click", showMenu);
blurBg.addEventListener("click", removeClass)
closeUlList.addEventListener("click", closedUlList);
mediaQuery.addEventListener("change", changeListener);

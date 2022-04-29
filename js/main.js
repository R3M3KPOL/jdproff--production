const menuLines = document.querySelectorAll('.hamburger__line');
const menuBtn = document.querySelector('.hamburger__btn');
const menuList = document.querySelector('.header__items');
const ulList = document.querySelector('.header__dropdown');
const blurBg = document.querySelector('.header__blurBg')
const dropDown = document.querySelector('.header__item--arrow');
const closeUlList = document.querySelector('.header__dropdown--closed');
let mediaQuery = window.matchMedia('(min-width: 768px)');

let flag = true;


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
        console.log('ul list')
        blurBg.classList.add('--open')
    }
}

const closedUlList =()=>{
    ulList.classList.remove('--Mobile')
    blurBg.classList.remove('--open')
};

const removeClass =(e)=> {
    if(e.target ===blurBg){
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







menuBtn.addEventListener("click", showMenu);
blurBg.addEventListener("click", removeClass)
mediaQuery.addEventListener("change", changeListener);
closeUlList.addEventListener("click", closedUlList);

  

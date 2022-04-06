const menuLines = document.querySelectorAll('.hamburger__line')
const menuBtn = document.querySelector('.hamburger__btn')
const menuList = document.querySelector('.header__items')
let flag = true;
// viewBox.setAttribute("viewBox", "50 0 100 100")

const showMenu = () => {
    menuLines.forEach((element) => {
        element.classList.toggle('opened');
        if(element.classList.contains('opened')){
            menuList.classList.add('open')
        }
        else if(!element.classList.contains('opened')){
            menuList.classList.remove('open')
            
            
        }
       
    })
}


// do przeanalizowania hover.
// const hoverOver = () => {

//         menuLines.forEach(() => {
//             menuLines[0].style.strokeDasharray = '40 207';
//             menuLines[2].style.strokeDasharray = '60 207';
           
//         })
    
// }
//    const hoverOut = () => {
//     menuLines.forEach(() => {
    // menuLines[0].style.strokeDasharray = '60 207';
    // menuLines[2].style.strokeDasharray = '40 207';
    
   
// })
// }

menuBtn.addEventListener("click", showMenu)
// menuBtn.addEventListener('mouseout', hoverOut)
// btnSvg.addEventListener('mouseover', hoverOver)
  

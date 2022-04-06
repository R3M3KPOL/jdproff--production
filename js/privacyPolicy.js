const btn = document.querySelector('.burger-btn__tools');
const allNavItems = document.querySelectorAll('.header__item');
const mainMenu = document.querySelector('.header');
const onOneOptions = {rootMargin: "0px 0px -150px 0px"};


const showMenu = () => {
    mainMenu.classList.toggle('header--active')

allNavItems.forEach (item => {
item.addEventListener('click', () => {
    mainMenu.classList.remove('header--active')
  })
})
};
btn.addEventListener('click', showMenu)
  
const observer = new IntersectionObserver(function(entries )
{
entries.forEach(entry =>{
if(!entry.isIntersecting) {
    mainMenu.classList.add('header--activeBgc')
} else {
    mainMenu.classList.remove('header--activeBgc')
}
});
},
onOneOptions);
observer.observe(bgcContainerVideo)
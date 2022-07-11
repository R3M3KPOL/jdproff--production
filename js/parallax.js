import { navigationUlList } from "./navigation-menu.js";
export let images = document.querySelectorAll('picture');
export let figures =document.querySelectorAll('.gallery__photo');
export let figuresArr = [...figures];
export const elementsOfSteps = document.querySelectorAll('.steps__heading');
export let imagesArr = [...images];
export const inputs = document.querySelectorAll('.gallery__input')
export const btn = document.querySelector('.gallery__btn')
export const pageError = document.querySelector('[data-404]')

// console.log(Object.keys(inputs))
// console.log(`-------------------`)
// console.log(Object.values(inputs))
// console.log(`-------------------`)
// console.log(Object.entries(inputs))
window.addEventListener('DOMContentLoaded', (event) => {
    console.log(event)
    console.log('DOM fully loaded and parsed');
});

export const filterItems = (el, index) => {
    return el.filter(el => el.dataset.name === index)
}


export const options = {    
    root: null,
    threshold:0.3,
    rootMargin: '0px 0px 0px 0px'
   
};

export const loadingImages = (entries, observer)=>{
    const [entry] = entries;
    if(!entry.isIntersecting)return;
    let imgSet = entry.target.querySelector('img')

    entry.target.name = entry.target.dataset.name
    entry.target.tabContent = entry.target.dataset.tabContent
    if(entry.target.name === 'images-right'){
        entry.target.classList.toggle('fade-right')
    }
    if(entry.target.name === 'images-left'){
        entry.target.classList.toggle('fade-left')
        
    }
    if(entry.target.name === 'images-bottom'){
        entry.target.classList.toggle('fade-bottom')
    }
    if(entry.target.name === 'images'){
        entry.target.classList.toggle('fade')
    }
    if(entry.target.tabContent === 'steps'){
        entry.target.querySelector('.steps__content').classList.toggle('fade-bounce-in')
        entry.target.querySelector('.steps__svg').classList.toggle('fade-bounce-in')
    }
     imgSet.src = imgSet.dataset.src
    imgSet.removeAttribute('data-src')
observer.unobserve(entry.target)
  }
export const observer = new IntersectionObserver(loadingImages, options)

const hrefNavigation =(hyperLink)=>{
    hyperLink.addEventListener('click',(element) =>{
        let inputArr = Object.values(inputs)
        for (let i = 0; i < inputArr.length; i++) {
            const input = inputArr[i].value;
            if(input === element.target.dataset.project){
                inputArr[i].classList.add('action')
            }            
        }
        // element.target.dataset.project = 
        // element.target.classList.contains('action') ? element.target.classList.remove('action') : element.target.classList.add('action')
        // element.target.classList.contains('action') ? console.log(true) : console.log(false)
    })

}


export const showElementFigure =(input)=>{
    let AttrValue = input.value
    input.addEventListener('click', (e) =>{
        e.target.classList.contains('action') ? e.target.classList.remove('action') : e.target.classList.add('action')

        if(e.target.classList.contains('action') && e.target.checked === true){
               for (let i = 0; i < imagesArr.length; i++){
                    if(imagesArr[i].dataset.project === AttrValue){
                        imagesArr[i].parentElement.classList.add('active');
                        imagesArr[i].parentElement.classList.remove('hidden');
                        }
                    if(imagesArr[i].dataset.project !== AttrValue && !imagesArr[i].parentElement.classList.contains('active')){
                        imagesArr[i].parentElement.classList.add('hidden');
                
                    }
                }
        }
       
        if(e.target.checked === false && !e.target.classList.contains('action')){ 
            for (let i = 0; i < imagesArr.length; i++){
                    if(imagesArr[i].dataset.project === AttrValue){
                        imagesArr[i].parentElement.classList.remove('active');
                        imagesArr[i].parentElement.classList.add('hidden');
                    }
                }
        
        }
        const uncheckedInput = [...inputs].every((element) =>{
            return !element.checked
        })
        if(uncheckedInput === true){
            pageError.classList.remove('hidden')
            pageError.classList.add('active404')
        }
        
    })
    
}

export const clearList=()=>{
    const [...input] = inputs;
    for (let i = 0; i < input.length; i++) {
        if(input[i].checked === true){
            input[i].checked = false;
            input[i].classList.remove('action')
            
        }
    }
    for (let i = 0; i < figuresArr.length; i++) {
        if(figuresArr[i].classList.contains('active') || figuresArr[i].classList.contains('hidden')){
            figuresArr[i].classList.remove('active')
            figuresArr[i].classList.remove('hidden')
            pageError.classList.remove('active404')
        }
    }
}



imagesArr.forEach(image => {
    observer.observe(image)

})
elementsOfSteps.forEach(element => {
    observer.observe(element)
})
navigationUlList.forEach(hrefNavigation)
inputs.forEach(showElementFigure)
btn.addEventListener('click', clearList)


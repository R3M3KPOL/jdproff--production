'use strict';
import { showMenu,dropDownMenu,closedUlList,removeClass,changeListener } from './navigation-menu.js';

const elementsOfSteps = document.querySelectorAll('.steps__heading');
const inputs = document.querySelectorAll('.gallery__input');
const contentsForCategories = [...document.querySelectorAll(".gallery__subtitle , .gallery__text")]
const btnReset = document.querySelector('.gallery__btn');
const pageError = document.querySelector('[data-404]');
const popup = document.querySelector('[data-name="popup"]')
const closePopupBtn = document.querySelector('[data-name="popup-btn"]')
let popupImg = document.querySelector('[data-name="popup-picture"]')
let images = document.querySelectorAll('[data-name="images-carousel"],[data-name="images"],[data-name="images-right"],[data-name="images-left"],[data-name="images-bottom"]');
let figures =document.querySelectorAll('.gallery__photo');
let figuresArr = [...figures];
let imagesArr = [...images];

const closePopup=()=>{
    popup.classList.add('hidden')
    popupImg.src = ''
}

export const load=()=>{
images.forEach(targetImg =>{
    targetImg.addEventListener('click',()=>{
    let correctTargetImg = targetImg.querySelector('img').currentSrc
    popupImg.src = correctTargetImg;
    popup.classList.remove('hidden')
    })
})
    //loading Images
    const options = {    
    root: null,
    threshold:0.7,
    rootMargin: '0px 0px 0px 0px'
    };
    const loadingImages = (entries, observer)=>{
        const [entry] = entries;
        let imgTarget = entry.target;
        let imgSource = imgTarget.querySelector('source');
        entry.target.name = entry.target.dataset.name
        entry.target.tabContent = entry.target.dataset.tabContent
        if(!entry.isIntersecting)return;
  
        if(imgTarget.lastElementChild.dataset && imgTarget.lastElementChild.dataset.src){
            imgTarget.lastElementChild.src = imgTarget.lastElementChild.dataset.src
            imgTarget.lastElementChild.removeAttribute('data-src')
        }
        if(imgSource){
            if(imgSource.dataset && imgSource.dataset.srcset){
                imgSource.srcset = imgSource.dataset.srcset
                imgSource.removeAttribute('data-srcset')
            }
        }
    
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
        observer.unobserve(entry.target)
    }
    const observer = new IntersectionObserver(loadingImages, options)   
        imagesArr.forEach(image => {
            if(image.dataset.name !== 'images-carousel'){ 
                observer.observe(image)
            }            
        })
        elementsOfSteps.forEach(element => {
            observer.observe(element)
        })
}

const clearList=()=>{
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
    for(let i = 0; i < contentsForCategories.length; i++){
        if(!contentsForCategories[i].classList.contains('invisible-content')){
            contentsForCategories[i].classList.add('invisible-content')
            let backBaseContent = contentsForCategories.filter(element => element.dataset.name === 'all-photo')
            for(const element of backBaseContent){
                    element.classList.remove('invisible-content')
                }

        }
    }

}

const showElementFigure =(input)=>{
    let AttrValue = input.value
    input.addEventListener('click', (e) =>{
        e.target.classList.contains('action') ? e.target.classList.remove('action') : e.target.classList.add('action')
        for (let i = 0; i < contentsForCategories.length; i++) {
            if(contentsForCategories[i].dataset.name === e.target.value){
                contentsForCategories[i].classList.toggle('invisible-content')
                let filterCategories = contentsForCategories.filter(element => element.dataset.name ==='all-photo')
                for(const element of filterCategories){
                    element.classList.add('invisible-content')
                }
            }
        }
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

inputs.forEach(showElementFigure)
if (btnReset) {
btnReset.addEventListener('click' , clearList)
}
if(closePopupBtn){
closePopupBtn.addEventListener('click', closePopup)}
window.addEventListener('DOMContentLoaded', load)

const figures = document.querySelectorAll('.slider-gallery__photo');
let images = document.querySelectorAll('picture');
const elementsOfSteps = document.querySelectorAll('.steps__heading');
let imagesArr = [...images]



const filterItems = (el, index) => {
    return el.filter(el => el.dataset.name === index)
}



const options = {    
    root: null,
    threshold:0.55,
    rootMargin: '0px'
   
};



const loadingImages = (entries, observer)=>{
    const [entry] = entries;
    if(!entry.isIntersecting)return;
    // console.log(entry.target.dataset)
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
observer.unobserve(entry.target)
}
const observer = new IntersectionObserver(loadingImages, options)

imagesArr.forEach(image => {
    observer.observe(image)
})

elementsOfSteps.forEach(element => {
    observer.observe(element)
})

const figures = document.querySelectorAll('.slider-gallery__photo');
let images = document.querySelectorAll('img')
let imagesArr = [...images]



const filterItems = (el, index) => {
    return el.filter(el => el.dataset.name === index)
}



const options = [
    {
    root: null,
    threshold:0.10,
    rootMargin: '0px',
    },

    {
     root: null,
    threshold:[0, 0.1, 0.2, 0.3, 0.4, 0.5, 0.6, 0.7, 0.8, 0.9, 1],
    rootMargin:'20px',
    }
];



const loadingImages = (eltries, observer)=>{
    const [entry] = eltries;
    if(!entry.isIntersecting)return;

    entry.target.name = entry.target.dataset.name
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
observer.unobserve(entry.target)
}
const observer = new IntersectionObserver(loadingImages, options[1])

imagesArr.forEach(image => {
    observer.observe(image)
})

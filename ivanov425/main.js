// меню





//  слайдер



// модельная
const buttonM = document.querySelectorAll('.sign')
const modalEl = document.querySelectorAll('.modal')
const buttonCl = document.querySelectorAll('.close')

buttonM.forEach((button,index) =>{
    button.addEventListener('click',()=>{
        const modal = modalEl[index]
        modal.classList.add('show')
    })
})
buttonCl.forEach((button,index) =>{
    button.addEventListener('click',()=>{
        const modal = modalEl[index]
        modal.classList.remove('show')
    })
})

// аккоордион3
const accordionBt = document.querySelectorAll('.accordion-button')
const accordionEl = document.querySelectorAll('.accordion')

accordionBt.forEach((button,index) =>{
    button.addEventListener('click',()=>{
        const accordion = accordionEl[index]
        accordion.classList.toggle('show')
        if(accordion.classList.contains('show')){
            button.style.transform = 'rotate(45deg)'
        }else{
            button.style.transform = 'rotate(0deg)'
        }
    })
})




const menuLi = document.querySelectorAll ('.header-link')

menuLi.forEach(element => {
    element.addEventListener('mouseover', () =>{
        const menuIn = document.querySelector ('.header-menu-inner')
        menuIn.style.display = 'block'
    })
})
menuLi.forEach(element => {
    element.addEventListener('mouseout', () =>{
        const menuIn = document.querySelector('.header-menu-inner')
        menuIn.style.display = 'none'
    })
})

const dots = document.querySelectorAll ('.dot')
const slides = document.querySelectorAll ('.slide')

dots.forEach((dot,i)=>{
    dot.addEventListener('click', ()=> {
        slides.forEach(slide => {
            slide.classList.remove ('active')
        })
        dots.forEach(dot => {
            dot.classList.remove ('active')
        })
        slides[i].classList.add ('active')
        dot.classList.add('active')
    })
})

addEventListener

const burgerAction = document.querySelector('#burgerAction');
const headerBurgerMenuWrapper = document.querySelector('.header__burgermenuwrapper');
const burgerActionClose = document.querySelector('.burgerActionClose');
const burgerMenuItem = document.querySelectorAll('.header__burgermenu--item');
const headerSocialLinks = document.querySelectorAll('.header__social--link');
burgerAction.addEventListener('click', () => {
    if(headerBurgerMenuWrapper.classList.contains('n-active')){
        removerClasses(headerBurgerMenuWrapper, 'n-active');
        upperClasses(headerBurgerMenuWrapper, 'headerBurgerAnimate');
        setTimeout(() => {
            removerClasses(headerBurgerMenuWrapper, 'headerBurgerAnimate');
        }, 600)
    } 

    burgerActionClose.addEventListener('click', () => {
        upperClasses(headerBurgerMenuWrapper, 'headerBurgerAnimateClose');
        setTimeout(()=> {
            removerClasses(headerBurgerMenuWrapper, 'headerBurgerAnimateClose');
            upperClasses(headerBurgerMenuWrapper, 'n-active')
        }, 600)
    });
});



function removerClasses(el, cl) {
    el.classList.remove(cl);
}

function upperClasses(el, cl) {
    el.classList.add(cl);
}

function closeBurgerMenu() {
    upperClasses(headerBurgerMenuWrapper, 'headerBurgerAnimateClose');
        setTimeout(()=> {
            removerClasses(headerBurgerMenuWrapper, 'headerBurgerAnimateClose');
            upperClasses(headerBurgerMenuWrapper, 'n-active')
    }, 600)
}

burgerMenuItem.forEach((item) => {
    item.addEventListener('click', ()=> {
        if(!headerBurgerMenuWrapper.classList.contains('n-active')) {
            closeBurgerMenu();
        }
    })
})

headerSocialLinks.forEach((item) => {
    item.addEventListener('click', ()=> {
        if(!headerBurgerMenuWrapper.classList.contains('n-active')) {
            closeBurgerMenu();
        }
    })
})
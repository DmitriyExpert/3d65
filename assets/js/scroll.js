function scrollFunc(el) {
      window.scroll({
            behavior: 'smooth',
            left: 0,
            top: el.offsetTop
      })
}

document.querySelector('.intro__textbox--btn').addEventListener('click', () => {
      scrollFunc(document.querySelector('#porfolio--section'))
})

document.querySelector('#reportTo3d').addEventListener('click', () => {
      scrollFunc(document.querySelector('#create--section'))
})

document.querySelector('#footerToPortfolio').addEventListener('click', () => {
      scrollFunc(document.querySelector('#porfolio--section'))
})

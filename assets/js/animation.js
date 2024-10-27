

function delayAnimationLine() {
      const clline = document.querySelector('.portfolio__category--line');
      const questionsLine = document.querySelector('.questions__line');
      const betweenLine = document.querySelector('.between__line');
      const footerLine = document.querySelector('.footer__line');
      setInterval(()=> {
            setTimeout(()=> {
                  clline.classList.add('line');
                  questionsLine.classList.add('line');
                  betweenLine.classList.add('line');
                  footerLine.classList.add('line');
            }, 3000)
            setInterval(()=> {
                  clline.classList.remove('line')
                  questionsLine.classList.remove('line');
                  betweenLine.classList.remove('line');
                  footerLine.classList.remove('line');
            }, 5000)
      }, 5000)
}

delayAnimationLine()

const animationTitleTargets = document.querySelectorAll('.animationTitleTarget');

function checkAnimation() {
  animationTitleTargets.forEach(target => {
    const rect = target.getBoundingClientRect();
    const windowHeight = window.innerHeight;

    // Проверяем, достигнут ли низ элемента при скролле сверху вниз
    if (rect.bottom <= windowHeight && window.pageYOffset > rect.top && !target.classList.contains('titles__anim')) {
      target.classList.add('titles__anim');
    } 

    // Проверяем, вышел ли элемент за пределы окна браузера
    else if (rect.top > windowHeight && target.classList.contains('titles__anim')) {
      target.classList.remove('titles__anim');
      target.classList.add('titles__anim--out')
    }
  });
}

window.addEventListener('scroll', checkAnimation);
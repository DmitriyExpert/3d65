
const questionsItems = document.querySelectorAll('.questions__item');

questionsItems.forEach(quest => {
      const questionBtnAction = quest.querySelector(".questions__action");
      const questionOpenedBlock = quest.querySelector(".questions__openedblock");
      questionBtnAction.addEventListener('click', ()=> {
            if(questionOpenedBlock.classList.contains('questions__openedblock--show')) {
                  questionOpenedBlock.style.height = 0; 
                  questionOpenedBlock.classList.remove('questions__openedblock--show');
                  questionBtnAction.classList.remove('questions__action-active');
                  questionBtnAction.classList.add('questions__action-close')
            } else {
                  questionOpenedBlock.classList.add('questions__openedblock--show');
                  questionBtnAction.classList.remove('questions__action-close');
                  questionBtnAction.classList.add('questions__action-active');
                  questionOpenedBlock.style.height = questionOpenedBlock.scrollHeight + 30 + 'px';
            }
      });
})



// Year to footer 
const year = document.querySelector('.footer--year');
let currentYear = new Date().getFullYear();
year.innerText = currentYear + 'г';

// lazy loading 


const images = document.querySelectorAll('img');
images.forEach((img) => {
      img.setAttribute('loading', 'lazy');
});



// const questionBtnActions = document.querySelectorAll(".questions__action");
// const questionOpenedBlocks = document.querySelectorAll(".questions__openedblock");
const questionsItems = document.querySelectorAll('.questions__item');
console.log(questionsItems)

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

// for (var i = 0; i < questionBtnActions.length; i++) {
//     questionBtnActions[i].addEventListener('click', fun_open);
  
//     function fun_open(event) {
//       for (var i = 0; i < questionBtnActions.length; i++) {
//         if (questionBtnActions[i] == event.currentTarget) {
          
//             if(questionOpenedBlocks[i].classList.contains('questions__openedblock--show')) {
//                 questionOpenedBlocks[i].style.height = 0;
//                 questionOpenedBlocks[i].classList.remove('questions__openedblock--show');
//             } else {
//                 questionOpenedBlocks[i].classList.add('questions__openedblock--show');
//                 questionOpenedBlocks[i].style.height = questionOpenedBlocks[i].scrollHeight + 30 + 'px';
//             }
//         }
//       }
  
//     }
  
// }

// Year to footer 
const year = document.querySelector('.footer--year');
let currentYear = new Date().getFullYear();
year.innerText = currentYear + 'г';






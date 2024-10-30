const questionBtnActions = document.querySelectorAll(".questions__action");
const questionOpenedBlocks = document.querySelectorAll(".questions__openedblock");


for (var i = 0; i < questionBtnActions.length; i++) {
    questionBtnActions[i].addEventListener('click', fun_open);
  
    function fun_open(event) {
      for (var i = 0; i < questionBtnActions.length; i++) {
        if (questionBtnActions[i] == event.currentTarget) {
          
            if(questionOpenedBlocks[i].classList.contains('questions__openedblock--show')) {
                questionOpenedBlocks[i].style.height = 0;
                questionOpenedBlocks[i].classList.remove('questions__openedblock--show');
            } else {
                questionOpenedBlocks[i].classList.add('questions__openedblock--show');
                questionOpenedBlocks[i].style.height = questionOpenedBlocks[i].scrollHeight + 30 + 'px';
            }
        }
      }
  
    }
  
}






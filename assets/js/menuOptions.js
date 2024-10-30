
// Menu options

const menuOptions = document.querySelectorAll('.menu--options');
const dropDownAction = document.querySelectorAll('.form__dropdown');
const inputDropDown = document.querySelector('.input__dropdown');
const menuOptionsBtn = document.querySelectorAll('.menu--options__btn');

dropDownAction.forEach((item) => {
      item.addEventListener('click', (e) => {
            e.preventDefault();
            menuOptions.forEach((item) => {
                if(item.classList.contains('n-active')) {
                    item.classList.remove('n-active');
                    item.classList.add('menu--optionsAnim')
                    menuOptionsBtn.forEach((item) => {
                        item.addEventListener('click', () => {
                            let itemValue = item.innerText;
                            inputDropDown.setAttribute('placeholder', `${itemValue}`);
                        })
                    });
                    setTimeout(() => {
                        item.classList.remove('menu--optionsAnim')
                    }, 400);
                } else {
                    item.classList.add('menu--optionsAnimClose');
                    setTimeout(() => {
                        item.classList.remove('menu--optionsAnimClose')
                        item.classList.add('n-active');
                    }, 400)
                }
            })
        });
});



// Menu options
const formWrapper = document.querySelectorAll('.form__wrapper');
formWrapper.forEach((form) => {
      const dropDownAction = form.querySelectorAll('.form__dropdown');
      const input = form.querySelector('.input__dropdown');
      const options = form.querySelector('.menu--options');
      const optionBtns = form.querySelectorAll('.menu--options__btn');
      const formSwitcher = form.querySelector('.form__imput--switcher');
      dropDownAction.forEach((drop) => {
            drop.addEventListener('click', (e) => {
                  e.preventDefault();
                  if(options.classList.contains('n-active')) {
                        options.classList.remove('n-active');
                        options.classList.add('menu--optionsAnim')
                        optionBtns.forEach((item) => {
                            console.log(item)
                            item.addEventListener('click', () => {
                                    let itemValue = item.innerText;
                                    input.setAttribute('placeholder', `${itemValue}`);
                                    if(itemValue==='Написать на почту!') {
                                          formSwitcher.type = 'email';
                                          formSwitcher.placeholder = 'Ваша почта';
                                          formSwitcher.name = 'email';
                                    } else {
                                          formSwitcher.type = 'tel';
                                          formSwitcher.placeholder = 'Ваш номер';
                                          formSwitcher.name = 'tel';
                                    }
                            })
                        });
                        setTimeout(() => {
                            options.classList.remove('menu--optionsAnim')
                        }, 400);
                    } else {
                        options.classList.add('menu--optionsAnimClose');
                        setTimeout(() => {
                              options.classList.remove('menu--optionsAnimClose')
                              options.classList.add('n-active');
                        }, 400)
                    }
              });
      })
})

// dropDownAction.forEach((item) => {
//       const input = item.querySelector('.input__dropdown');
//       const options = item.querySelector('.menu--options');
//       const optionBtns = item.querySelectorAll('.menu--options__btn');

//       item.addEventListener('click', (e) => {
//             e.preventDefault();
//             if(options.classList.contains('n-active')) {
//                   options.classList.remove('n-active');
//                   options.classList.add('menu--optionsAnim')
//                   optionBtns.forEach((item) => {
//                       console.log(item)
//                       item.addEventListener('click', () => {
//                           let itemValue = item.innerText;
//                           input.setAttribute('placeholder', `${itemValue}`);
            
//                       })
//                   });
//                   setTimeout(() => {
//                       options.classList.remove('menu--optionsAnim')
//                   }, 400);
//               } else {
//                   options.classList.add('menu--optionsAnimClose');
//                   setTimeout(() => {
//                         options.classList.remove('menu--optionsAnimClose')
//                         options.classList.add('n-active');
//                   }, 400)
//               }
//         });
// });

// const dropdowns = document.querySelectorAll('.form__dropdown');
// console.log(dropdowns)
// dropdowns.forEach(dropdown => {
//   const input = dropdown.querySelector('.input__dropdown');
//   const options = dropdown.querySelector('.menu--options');
//   const optionBtns = dropdown.querySelectorAll('.menu--options__btn');

//   dropdown.addEventListener('click', () => {
//     options.classList.toggle('n-active'); 
//   });

//   optionBtns.forEach(btn => {
//     btn.addEventListener('click', () => {
//       input.placeholder = btn.textContent.trim();
//       console.log(options)
//       options.classList.add('n-active'); // Добавляем класс для скрытия
//     });
//   });
// });




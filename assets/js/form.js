const formTypeApplication = document.querySelectorAll('.form-type-application');
const formTypeConnection = document.querySelectorAll('.form-type-connection');
const formTypeQuestions = document.querySelectorAll('.form-type-questions');
formTypeApplication.forEach((app) => {
      const nameField = app.querySelector('.form__nameapplication');
      const switchField = app.querySelector('.form__input--switcher');
      const areaField = app.querySelector('.form__areaapplication');
      const actionForm = app.querySelector('.form__action');
      
      actionForm.addEventListener('click', async (e) => {
            e.preventDefault();
            const csrfToken = app.querySelector('input[name="csrf_token"]').value;
            console.log(csrfToken);
            let data ={
                  name: nameField.value,
                  switch: switchField.value,
                  comment: areaField.value,
                  csrfToken: csrfToken
            }
            let response = await fetch("php/mail.php", {
                  method: "POST",
                  body: JSON.stringify(data),
                  headers: {
                  "Content-Type": "application/json; charset=UTF-8"
                  }
            });
            let resilt = await response.text();
            alert(resilt);
      }) 
})

formTypeConnection.forEach((app) => {
      const nameField = app.querySelector('.input__nameconnection');
      const emailField = app.querySelector('.input__emailconnection');
      const telField = app.querySelector('.input__phoneconnection');
      const actionForm = app.querySelector('.form__action');
      actionForm.addEventListener('click', async (e) => {
            e.preventDefault();
            const csrfToken = app.querySelector('input[name="csrf_token"]').value;
            let data ={
                  name: nameField.value,
                  email: emailField.value,
                  tel: telField.value,
                  csrfToken: csrfToken
            }
            let response = await fetch("php/mail-type-connection.php", {
                  method: "POST",
                  body: JSON.stringify(data),
                  headers: {
                  "Content-Type": "application/json; charset=UTF-8"
                  }
            });
            let resilt = await response.text();
            alert(resilt);
      }) 
})



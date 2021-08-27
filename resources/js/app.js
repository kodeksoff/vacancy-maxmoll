require('./bootstrap');

require('alpinejs');

import IMask from 'imask';

const scrollToFeedbackButton = document.querySelectorAll(".scrollToFeedback")
const feedbackBlock = document.getElementById('feedback')
const feedBackForm = document.getElementById('feedbackForm')
const submitButton = document.getElementById('submitButton')

feedBackForm.addEventListener('submit', (event) => {
    event.preventDefault()
    submitButton.classList.add('animate-pulse')
    let formData = new FormData(feedBackForm);
    axios.post('/api/store', formData, {
        headers: {
            'Content-Type': 'application/json'
        }})
        .then(function (response) {
            submitButton.classList.remove('animate-pulse')
            submitButton.innerHTML = 'Отправлено'
            feedBackForm.reset()
        })
        .catch(function (error) {
            submitButton.classList.remove('animate-pulse')
            submitButton.innerHTML = 'Ошибка'
            validateForm(error.response.data.errors)
        })
})

scrollToFeedbackButton.forEach(element => {
    element.addEventListener('click', handleButtonClick)
})

const phoneMask = IMask(document.getElementById('phone'), {
    mask: '+{7} (000) 000-00-00'
})

function validateForm(errors) {
    for (let error in errors) {
        feedBackForm.elements[error].classList.add('border-red-500')
        document.querySelector(`label[for=${error}]`).innerHTML = errors[error][0]
        document.querySelector(`label[for=${error}]`).classList.add('text-red-500')
    }
}

function handleButtonClick() {
    feedbackBlock.scrollIntoView({block: "center", behavior: "smooth"});
}


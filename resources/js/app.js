require('./bootstrap');

import IMask from 'imask';

const scrollToFeedbackButton = document.querySelectorAll(".scrollToFeedback")
const feedbackBlock = document.getElementById('feedback')
const feedBackForm = document.getElementById('feedbackForm')
const sidebar = document.querySelector('.sidebar')
const submitButton = document.getElementById('submitButton')
const sidebarButton = document.getElementById('sidebarButton')
const sidebarButtonClose = document.getElementById('sidebarButtonClose')
const showPersonalData = document.getElementById('showPersonalData')
const personalDataModal = document.getElementById('personalDataModal')
const acceptButton = document.getElementById('acceptButton')

sidebarButton.addEventListener('click', () => {
    sidebar.classList.add('show')
})

sidebarButtonClose.addEventListener('click', () => {
    sidebar.classList.remove('show')
})

showPersonalData.addEventListener('click', () => {
    axios.get('/api/getValue/personal_data')
        .then(function (response) {
            console.log(response)
            document.querySelector('.js-personal-data').innerHTML = response.data;
        })
        .catch(function (error) {
            console.log(error)
        })
    personalDataModal.classList.toggle('modal-show')
})

acceptButton.addEventListener('click', () => {
    personalDataModal.classList.remove('modal-show')
})

feedBackForm.addEventListener('submit', (event) => {
    event.preventDefault()
    submitButton.classList.add('animate-pulse')
    let formData = new FormData(feedBackForm);
    axios.post('/api/store', formData, {
        headers: {
            'Content-Type': 'application/json'
        }
    })
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


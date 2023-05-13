const email = document.getElementById('email')
const requiredError = document.getElementById('email-required-error')
const emailValidError = document.getElementById('email-valid-error')
const button = document.getElementById('button')

function errorDetector() {
  toogleEmailErrors()
}

function toogleEmailErrors() {
  if (!email.value) {
    email.style.border = '1px solid #ED3A5A'
  } else {
    email.style.border = '1px solid #e2e8f0'
  }
}

button.addEventListener('click', errorDetector)

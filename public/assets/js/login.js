const senha = document.querySelector('#senha')
const email = document.querySelector('#email')
const entrar = document.querySelector('#Entrarbtn')
const emailError = document.getElementById('email-required-error')
const passwordError = document.getElementById('password-required-error')

function tooglePassword() {
  document.querySelectorAll('.eye').forEach(eye => {
    eye.classList.toggle('hide')
  })

  const type = senha.getAttribute('type') == 'password' ? 'text' : 'password'

  senha.setAttribute('type', type)
}

function validateFields() {
  toogleEmailErrors()
  tooglePasswordErrors()
}

function toogleEmailErrors() {
  if (!email.value) {
    email.style.border = '1px solid #ED3A5A'
  } else {
    email.style.border = '1px solid #a93da8'
  }
}

function tooglePasswordErrors() {
  if (!senha.value) {
    senha.style.border = '1px solid #ED3A5A'
  } else {
    senha.style.border = '1px solid #a93da8'
  }
}

entrar.addEventListener('click', validateFields)

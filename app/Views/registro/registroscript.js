const nome = document.querySelector('#name')
const email = document.querySelector('#email')
const eye = document.querySelectorAll('.eye')
const eyeTwo = document.querySelectorAll('.eyeTwo')
const senha = document.querySelector('#senha')
const senhaAgain = document.querySelector('#senhaAgain')
const cadastro = document.querySelector('#cadastrobtn')
const nameError = document.getElementById('name-required-error')
const emailError = document.getElementById('email-required-error')
const passwordError = document.getElementById('password-required-error')
const passwordErrorAgain = document.getElementById(
  'passwordAgain-required-error'
)

function tooglePassword() {
  eye.forEach(eye => {
    eye.classList.toggle('hide')
  })

  const type = senha.getAttribute('type') == 'password' ? 'text' : 'password'

  senha.setAttribute('type', type)
}

function tooglePasswordTwo() {
  eyeTwo.forEach(eyeTwo => {
    eyeTwo.classList.toggle('hide')
  })

  const type =
    senhaAgain.getAttribute('type') == 'password' ? 'text' : 'password'

  senhaAgain.setAttribute('type', type)
}

function validateFields() {
  toogleNameError()
  toogleEmailErrors()
  tooglePasswordErrors()
  tooglePasswordErrorsAgain()
}

function toogleNameError() {
  if (!nome.value) {
    nome.style.border = '1px solid #ED3A5A'
  } else {
    nome.style.border = '1px solid #a93da8'
  }
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

function tooglePasswordErrorsAgain() {
  if (!senhaAgain.value) {
    senhaAgain.style.border = '1px solid #ED3A5A'
  } else if (senhaAgain.value != senha.value) {
    senhaAgain.setCustomValidity('As senhas precisam ser as mesmas')
    senhaAgain.style.border = '1px solid #ED3A5A'
  } else if (senhaAgain.value == senha.value) {
    senhaAgain.setCustomValidity('')
    senhaAgain.style.border = '1px solid #a93da8'
  }
}

cadastro.addEventListener('click', validateFields)

const nome = document.querySelector('#nome')
const rg = document.querySelector('#rg')
const cpf = document.querySelector('#cpf')
const data = document.querySelector('#data')
const nomeVazio = document.querySelector('#empty-name')
const rgVazio = document.querySelector('#empty-rg')
const cpfVazio = document.querySelector('#empty-cpf')
const dataVazio = document.querySelector('#empty-date')
const finalBtn = document.querySelector('#finalizar')

function errorDetector() {
  toogleNameErrors()
  toogleRgErrors()
  toogleCpfErrors()
  toogleDataErrors()
}

function toogleNameErrors() {
  if (!nome.value) {
    nome.style.border = '1px solid #ED3A5A'
  } else {
    nome.style.border = '1px solid #e2e8f0'
  }
}

function toogleRgErrors() {
  if (!rg.value) {
    rg.style.border = '1px solid #ED3A5A'
  } else if (rg.value.length < 8) {
    rg.setCustomValidity('O RG não é válido')
    rg.style.border = '1px solid #ED3A5A'
  } else {
    rg.setCustomValidity('')
    rg.style.border = '1px solid #e2e8f0'
  }
}

function toogleCpfErrors() {
  if (!cpf.value) {
    cpf.style.border = '1px solid #ED3A5A'
  } else if (cpf.value.length < 11) {
    cpf.setCustomValidity('O CPF não é válido')
    cpf.style.border = '1px solid #ED3A5A'
  } else {
    cpf.setCustomValidity('')
    cpf.style.border = '1px solid #e2e8f0'
  }
}

function toogleDataErrors() {
  if (!data.value) {
    data.setCustomValidity('Insira uma data')
    data.style.border = '1px solid #ED3A5A'
  } else {
    data.setCustomValidity('')
    data.style.border = '1px solid #e2e8f0'
  }
}

finalBtn.addEventListener('click', errorDetector)
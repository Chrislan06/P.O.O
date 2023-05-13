let input = document.querySelector('header input')
let quartos = document.querySelectorAll('.quarto')

input.addEventListener('input', filtraQuartosInput)

//Função que imprime os quartos a partir do imput
function filtraQuartosInput() {
  if (input.value != '') {
    for (let quarto of quartos) {
      let titulo = quarto.querySelector('.titulo h2')

      titulo = titulo.textContent.toLowerCase()

      if (!titulo.includes(input.value.toLowerCase())) {
        quarto.style.display = 'none'
      } else {
        quarto.style.display = 'block'
      }
    }
  } else {
    for (let quarto of quartos) {
      quarto.style.display = 'block'
    }
  }
}

let buttons = document.querySelectorAll('.button')

for (let button of buttons) {
  button.addEventListener('click', () => filterQuartosButton(button))
}

//Função que imprime os quartos a partir dos botões e altera o estilo dos botões quando selecionado
function filterQuartosButton(button) {
  for (let button of buttons) {
    if (button.style.color === 'white') {
      button.style.color = 'rgba(158, 6, 87, 0.966)'
      button.style.backgroundColor = 'white'
    }
  }

  button.style.color = 'white'
  button.style.backgroundColor = 'rgba(158, 6, 87, 0.966)'

  let nameButton = button.textContent

  for (let quarto of quartos) {
    let disponibilidade = quarto.querySelector('.conteudo .reservado')
    let NameQuarto = quarto.querySelector('.titulo h2')
    NameQuarto = NameQuarto.textContent
    let tamanho = quarto.querySelector('.conteudo .informacoes .tamanho')
    tamanho = tamanho.textContent

    //O NameQuarto é para o caso de uma suite, o tamanho é para o caso de se família, casal ou solteiro
    if (NameQuarto.includes(nameButton) || tamanho.includes(nameButton)) {
      quarto.style.display = 'block'
    } else {
      quarto.style.display = 'none'
    }

    if (nameButton === 'Reservados') {
      if (disponibilidade.style.display === 'none') {
        quarto.style.display = 'none'
      } else {
        quarto.style.display = 'block'
      }
    } else if (nameButton === 'Disponíveis') {
      if (disponibilidade.style.display === 'none') {
        quarto.style.display = 'block'
      } else {
        quarto.style.display = 'none'
      }
    }
  }
}

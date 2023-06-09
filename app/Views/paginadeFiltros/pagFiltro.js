let input = document.querySelector('header input')
let quartos = document.querySelectorAll('#quartoTeste')

input.addEventListener('input', filtraQuartosInput)

//Função que imprime os quartos a partir do imput
function filtraQuartosInput() {
  if (input.value != '') {
    for (let quarto of quartos) {
      let titulo = quarto.querySelector('.card-body h5')

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
  button.style.backgroundColor = '#dc3545'

  let nameButton = button.textContent

  for (let quarto of quartos) {
    let disponibilidade = quarto.querySelector('.card-body .card-footer .dispo')
    let NameQuarto = quarto.querySelector('.card-body h5')
    NameQuarto = NameQuarto.textContent
    let tamanho = quarto.querySelector('.card-body .tamanho')
    tamanho = tamanho.textContent

    //O NameQuarto é para o caso de uma suite, o tamanho é para o caso de se família, casal ou solteiro
    if (NameQuarto.includes(nameButton) || tamanho.includes(nameButton)) {
      quarto.style.display = 'block'
    } else {
      quarto.style.display = 'none'
    }

    if (nameButton === 'Reservados') {
      if (disponibilidade.textContent === 'Reservado') {
        quarto.style.display = 'block'
      } else {
        quarto.style.display = 'none'
      }
    } else if (nameButton === 'Disponíveis') {
      if (disponibilidade.textContent === 'Disponível') {
        quarto.style.display = 'block'
      } else {
        quarto.style.display = 'none'
      }
    } else if (nameButton === 'Indisponíveis') {
      if(disponibilidade.textContent === 'Indisponível') {
        quarto.style.display = 'block'
      } else {
        quarto.style.display = 'none'
      }
    }
  }
}

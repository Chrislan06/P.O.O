const cardLc = document.querySelector('#quarto1Lc') //card inteiro
const cardLcInfo = document.querySelector('#LcDispo').textContent // texto contendo "Reservado" ou "Não-Reservado"

const cardHd = document.querySelector('#quarto2Hd')
const cardHdInfo = document.querySelector('#HdDispo').textContent

const cardFh = document.querySelector('#quarto3Fh')
const cardFhInfo = document.querySelector('#FhDispo').textContent

const cardLd = document.querySelector('#quarto4Ld')
const cardLdInfo = document.querySelector('#LdDispo').textContent

const cardLh = document.querySelector('#quarto5Lh')
const cardLhInfo = document.querySelector('#LhDispo').textContent

const cardBc = document.querySelector('#quarto6Bc')
const cardBcInfo = document.querySelector('#BcDispo').textContent

const cardUl = document.querySelector('#quarto7Ul')
const cardLhUlInfo = document.querySelector('#UlDispo').textContent

if (cardLcInfo == 'Reservado') {
  cardLc.style.display = 'none'
  cardFh.insertAdjacentElement('afterend', cardLd) // traz o elemento seguinte para depois do elemento cardFh
  cardBc.insertAdjacentElement('afterend', cardUl) // traz o elemento seguinte
} else {
  cardFh.style.display = 'block'
}

if (cardHdInfo == 'Reservado') {
  cardHd.style.display = 'none'
  cardFh.insertAdjacentElement('afterend', cardLd)
  cardBc.insertAdjacentElement('afterend', cardUl)
} else if ((cardLc.style.display = 'none')) { // teste que eu estava tentando fazer
} else {
  cardFh.style.display = 'block'
}

if (cardFhInfo == 'Reservado') {
  cardFh.style.display = 'none'
  cardFh.insertAdjacentElement('afterend', cardLd)
  cardBc.insertAdjacentElement('afterend', cardUl)
} else {
  cardFh.style.display = 'block'
}

if (cardLdInfo == 'Reservado') {
  cardLd.style.display = 'none'
  cardBc.insertAdjacentElement('afterend', cardUl)
} else {
  cardLd.style.display = 'block'
}

if (cardLhInfo == 'Reservado') {
  cardLh.style.display = 'none'
  cardBc.insertAdjacentElement('afterend', cardUl)
} else {
  cardLh.style.display = 'block'
}

if (cardBcInfo == 'Reservado') {
  cardBc.style.display = 'none'
  cardBc.insertAdjacentElement('afterend', cardUl)
} else {
  cardBc.style.display = 'block'
}

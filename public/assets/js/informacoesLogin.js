let dados = document.querySelectorAll(".dados");
for (let dado of dados) {
  let image = dado.querySelector("img");
  console.log("hello1");
  image.addEventListener("click", () => alteraDados(dado, image));
}

function alteraDados(dado, image) {
  console.log("hello2");
  let information = dado.querySelector("span");
  let infoInicial = information.textContent;

  information.setAttribute("contenteditable", "true");
  image.style.display = "none";

  let buttons = dado.querySelectorAll("button");

  for (let button of buttons) {
    button.style.display = "inline-block";
    button.addEventListener("click", () =>
      editaInformations(information, image, buttons, button, infoInicial)
    );
  }
}

function editaInformations(information, image, buttons, button, infoInicial) {
  if (button.textContent === "Salvar") {
    information.removeAttribute("contenteditable");
    image.style.display = "inline-block";

    for (let button of buttons) {
      button.style.display = "none";
    }
  } else {
    information.innerHTML = infoInicial;
    information.removeAttribute("contenteditable");
    image.style.display = "inline-block";

    for (let button of buttons) {
      button.style.display = "none";
    }
  }
}

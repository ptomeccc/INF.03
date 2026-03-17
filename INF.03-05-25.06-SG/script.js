const shinyPaperPrice = 1.5;
const mattPaperPrice = 2;

let shinyRadio = document.getElementById("blyszczacy");
let mattRadio = document.getElementById("matowy");

function onSubmit() {
  const photoInput = document.getElementById("photo");
  const selectedFile = photoInput.files[0];
  const fileName = selectedFile ? selectedFile.name : "Brak wybranego pliku";

  const copies = document.getElementById("amount").value;
  const basketElement = document.getElementById("basket");
  const price = shinyRadio.checked ? shinyPaperPrice : mattPaperPrice;
  const totalPrice = price * copies;

  //tworzenie elementu obrazka
  const imageElement = document.createElement("img");
  imageElement.src = URL.createObjectURL(selectedFile);
  imageElement.alt = fileName;
  imageElement.title = fileName;

  //tworzenie elementu paragrafu
  const paragraphElement = document.createElement("p");
  paragraphElement.textContent = `Liczba kopii: ${copies}`;

  //tworzenie elementu ceny
  const priceElement = document.createElement("p");
  priceElement.textContent = `Cena: ${totalPrice} zł`;

  //dodawanie elementów do koszyka
  basketElement.appendChild(imageElement);
  basketElement.appendChild(paragraphElement);
  basketElement.appendChild(priceElement);
}

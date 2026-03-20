const rightSection = document.getElementById("right");

function changeColor(color) {
  const rightSection = document.getElementById("right");
  rightSection.style.backgroundColor = color;
}

function changeFontSize() {
  const rightSection = document.getElementById("right");
  const fontSize = document.getElementById("fontSize").value;
  rightSection.style.fontSize = fontSize + "%";
}

function changeFontColor() {
  const rightSection = document.getElementById("right");
  const fontColor = document.getElementById("fontColor").value;
  rightSection.style.color = fontColor;
}

function changeBorder() {
  const image = document.getElementById("gibraltar-img");
  const checkbox = document.getElementById("ramka").checked;
  if (checkbox) {
    image.style.border = "1px solid white";
  } else {
    image.style.border = "none";
  }
}

const radioGroup = document.getElementById("radio-group");
radioGroup.addEventListener("change", function (event) {
  changeSelectorType(event.target.value);
});

function changeSelectorType(type) {
  const liElements = document.querySelectorAll("#right li");
  liElements.forEach(function (li) {
    li.style.listStyleType = type;
  });
}

function submitForm() {
  var contactEl = document.getElementById("paragraph-container");

  var name = document.getElementById("name").value;
  var surname = document.getElementById("surname").value;
  var email = document.getElementById("email").value;
  var selectedCase = document.getElementById("case").value;

  var parEl = document.createElement("p");
  parEl.innerHTML = `${name} ${surname}<br />${email.toLowerCase()}<br/>Usługa: ${selectedCase}`;

  contactEl.innerHTML = parEl.outerHTML;
}

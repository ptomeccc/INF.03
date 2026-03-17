let chat = document.getElementById("chat");

function getLastMessage() {
  let message = document.getElementById("wiadomosc").value;
  let outputMessage = "<div id='jolanta' class='wypowiedz'>";
  outputMessage += "<img src='Jolka.jpg' />";
  outputMessage += "<p>" + message + "</p>";
  outputMessage += "</div>";
  chat.innerHTML += outputMessage;
}

function generateRandom() {
  let randomMessages = [
    "Świetnie!",
    "Kto gra główną rolę?",
    "Lubisz filmy Tego reżysera?",
    "Będę 10 minut wcześniej",
    "Może kupimy sobie popcorn?",
    "Ja wolę Colę",
    "Zaproszę jeszcze Grześka",
    "Tydzień temu też byłem w kinie na Diunie",
    "Ja funduję bilety",
  ];

  let randomId = Math.floor(Math.random() * 9);

  let message = randomMessages[randomId];

  let outputMessage = "<div id='krzysiek' class='wypowiedz'>";
  outputMessage += "<img src='Krzysiek.jpg' />Krzysiek";
  outputMessage += "<p>" + message + "</p>";
  outputMessage += "</div>";
  chat.innerHTML += outputMessage;

  chat.scrollTop = chat.scrollHeight;
}

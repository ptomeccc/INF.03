const ul = document.querySelector("ul");

ul.addEventListener("click", (e) => {
  if (e.target.classList.contains("done")) {
    const liItem = e.target.parentElement;
    markDone(liItem);
  }
});

const markDone = (el) => {
  el.style.textDecoration = "line-through";
};

const addTask = () => {
  const task = document.getElementById("task").value;
  const li = document.createElement("li");
  const btn = document.createElement("button");

  btn.classList.add("done");
  btn.innerText = "Wykonane";

  li.innerText = task;
  li.appendChild(btn);
  ul.append(li);
};

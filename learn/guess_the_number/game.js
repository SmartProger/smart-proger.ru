let startButton = document.querySelector("#start");
startButton.addEventListener("click", one);

const x = Math.floor(Math.random() * 100) + 1;
console.log("Случайное число: " + x);

function one() {
  function two() {
    const a = prompt("Введите число от 1 до 100");

    if (a === null) {
      alert("Игра окончена. Спасибо за игру!");
      return;
    } else if (+a < 1 || +a > 100 || isNaN(a)) {
      alert("Нужно вводить только числа от 1 до 100!");
      two();
    } else if (a > x) {
      alert("Загаданное число меньше " + a);
      two();
    } else if (a < x) {
      alert("Загаданное число больше " + a);
      two();
    } else if (a == x) {
      alert("Поздравляем, вы угадали!");
    }
  }

  two();
}

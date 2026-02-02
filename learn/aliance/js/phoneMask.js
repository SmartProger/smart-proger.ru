const phoneInputs = document.querySelectorAll(".phone-mask");
phoneInputs.forEach((phoneInput) => {
  phoneInput.addEventListener("input", onPhoneInput);
  //   phoneInput.addEventListener("focus", onPhoneFocus);
  phoneInput.addEventListener("blur", onPhoneBlur);
});

function onPhoneInput(e) {
  let input = e.target;
  let numbers = input.value.replace(/\D/g, "");

  // Убираем первую цифру, если ввели 7 или 8
  if (numbers.startsWith("7") || numbers.startsWith("8")) {
    numbers = numbers.slice(1);
  }

  numbers = numbers.slice(0, 10); // максимум 10 цифр

  let formatted = "+7";

  if (numbers.length > 0) {
    formatted += " (" + numbers.substring(0, 3);
  }
  if (numbers.length >= 4) {
    formatted += ") " + numbers.substring(3, 6);
  }
  if (numbers.length >= 7) {
    formatted += "-" + numbers.substring(6, 8);
  }
  if (numbers.length >= 9) {
    formatted += "-" + numbers.substring(8, 10);
  }

  input.value = formatted;
}

// function onPhoneFocus(e) {
//   if (e.target.value === "") {
//     e.target.value = "+7 (";
//   }
// }

function onPhoneBlur(e) {
  if (e.target.value === "+7" || e.target.value === "+7 (") {
    e.target.value = "";
  }
}

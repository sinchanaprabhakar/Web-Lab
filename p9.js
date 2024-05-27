const formElement = document.getElementById("reg-form");
var alphaExp = /^[a-zA-Z]+$/;
var emailExp = /^[a-zA-Z0-9+_.-]+@[a-zA-Z0-9.-]+$/;
var passExp = RegExp(
  "^(?=.*[A-Z])(?=.*[0-9])(?=.*[!@#$%^&*])[a-zA-Z0-9!@#$%^&*]{8,}$");
formElement.addEventListener("submit", function (event) {
  event.preventDefault();
  for (let i = 0; i < formElement.elements.length - 1; i++) {
    if (formElement[i].value.trim() === "") {
      alert("Empty Input Fields are present.");
      return;
    }

    if (
      formElement[i].id === "userid" &&
      (formElement[i].value.length < 5 || formElement[i].value.length > 12)
    ) {
      alert("Invalid Userid!");
    }

    if (
      formElement[i].id === "name" &&
      (!formElement[i].value.match(alphaExp) ||
        formElement[i].value.length < 15)
    ) {
      alert("Invalid Name!");
      return;
    }

    if (
      formElement[i].id === "email" &&
      !formElement[i].value.match(emailExp)
    ) {
      alert("Invalid Email Id!");
      return;
    }

    if (
      formElement[i].id === "password" &&
      !passExp.test(formElement[i].value)
    ) {
      alert("Invalid Password!");
      return;
    }
  }

  alert("Successful Registration");
});
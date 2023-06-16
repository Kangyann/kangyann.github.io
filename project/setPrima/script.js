let inputFromNumber = document.getElementById("fromNumber"),
  inputToNumber = document.getElementById("toNumber"),
  checkNumber = document.getElementById("checkNumber"),
  clearNumber = document.getElementById("clearNumber");

checkNumber.addEventListener("click", function () {
  let ressultNumber = document.querySelector(".response");
  if (inputFromNumber.value !== "" || inputToNumber.value !== "") {
    ressultNumber.innerHTML = `
            <div>
            <span>From Number : ${inputFromNumber.value}</span><br>
            <span>To Number : ${inputToNumber.value}</span><br>
            <hr>
            </div>
            `;
    checkPrima(inputFromNumber.value, inputToNumber.value);
    clearNumber.style.display = "block";
    clearNumber.addEventListener("click", () => {
      ressultNumber.style.color = "green";
      ressultNumber.innerHTML = `<span>Success Clear</span>`;
      inputFromNumber.value = "";
      inputToNumber.value = "";
      setTimeout(() => {
        ressultNumber.innerHTML = ``;
        ressultNumber.style.color = "black";
      }, 1000);
      clearNumber.style.display = "none";
    });
  } else {
    ressultNumber.style.color = "red";
    ressultNumber.innerHTML = `
    <span>ERROR ! CANT EMPTY, TRY AGAIN.</span>
    `;
    setTimeout(() => {
      ressultNumber.style.color = "black";
      ressultNumber.innerHTML = ``;
    }, 1000);
  }
});

function checkPrima(response, conn) {
  for (let i = response; i <= conn; i++) {
    let ressultNumber = document.querySelector(".response");
    let nullNumber = 0;
    for (let j = 1; j <= i; j++) {
      if (i % j == 0) {
        nullNumber++;
      }
    }
    if (nullNumber == 2) {
      ressultNumber.innerHTML += `
                <span>Bilangan Prima : ${i}</span><br>

            `;
    } else {
      ressultNumber.innerHTML += `
                <span>Bilangan Non Prima : ${i}</span><br>
            `;
    }
  }
}
let footer = (document.getElementById("footer").onclick = () => {
  setTimeout(() => {
    window.location.href = "https://instagram/eng.kangyann";
  }, 500);
});

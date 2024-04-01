
  function submitForm() {
    document.getElementById("formulir").submit();
  }
  // ------------------
  window.onload = function () {
    generateRandomNumber();
  };
  
  function generateRandomNumber() {
    var randomNumber = Math.floor(Math.random() * 9000000000) + 1000000000;
    document.getElementById("b").value = randomNumber;
  }
// ------------------------
  function muncul() {
    var myDiv = document.getElementById("popup1");
    myDiv.style.display = (myDiv.style.display === "none") ? "block" : "none";
  }
// ------------------------
  function forside() {
    var myDiv = document.getElementById("sidebar2")
    myDiv.style.visibility = (myDiv.style.visibility === "hidden") ? "visible" : "hidden";
  }
// -----------------------
  document.getElementById('myLink').addEventListener('click', function (event) {
    event.preventDefault();
    this.classList.add('clicked');
  });
  // ---------------------------
  function submitForm2() {
    document.getElementById("formulir2").submit();
  }
// -------------------------
function submitForm3() {
  document.getElementById("formulir3").submit();
}

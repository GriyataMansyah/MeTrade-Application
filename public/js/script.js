
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
// -------------------------
function submitForm4() {
  document.getElementById("formulir4").submit();
}
//------------------------
function updateInputValue() {
  var selectElement = document.getElementById("rupiah1");
  var selectedOption = selectElement.options[selectElement.selectedIndex].value;
  var inputValueElement = document.getElementById("rupiah2");

  if (selectedOption === "1") { 
    inputValueElement.value = "350.000,00"; 
  } else {
    inputValueElement.value = "";
  }
}
//------------------------
function updateInputValue1() {
  var selectElement = document.getElementById("batu");
  var selectedOption = selectElement.options[selectElement.selectedIndex].value;
  var inputValueElement = document.getElementById("batu2");

  if (selectedOption === "1") { 
    inputValueElement.value = "STG - SINGAPURE ONE"; 
  } else {
    inputValueElement.value = "";
  }
}
//------------------------
function updateInputValue2() {
  var selectElement = document.getElementById("kode");
  var selectedOption = selectElement.options[selectElement.selectedIndex].value;
  var inputValueElement = document.getElementById("kode2");

  if (selectedOption === "1") { 
    inputValueElement.value = "WIRE HARNES"; 
  } else if (selectedOption === "2") { 
    inputValueElement.value = "STAINLES TOP"; 
  } else {
    inputValueElement.value = "";
  }
}
// -------------------------
function submitForm5() {
  document.getElementById("formulir5").submit();
}
// -------------------------
function submitForm6() {
  document.getElementById("formulir6").submit();
}


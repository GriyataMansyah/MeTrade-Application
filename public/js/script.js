
  function submitForm() {
    document.getElementById("formulir").submit();
  }
  // ------------------
  window.onload = function () {
    generateRandomNumber();
  };
  
  function generateRandomNumber() {
    var part1 = Math.floor(Math.random() * 9000000000000000) + 100000;
    var randomNumber = part1;
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

  if (selectedOption === "Rupiah") { 
    inputValueElement.value = "350.000,00"; 
  } else {
    inputValueElement.value = "";
  }
}
//------------------------
function updateInputValue1() {
  var inputValueElement = document.getElementById("batu2");
  inputValueElement.value = "STG - SINGAPURE ONE"; 
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
function verifikasi() {
  Swal.fire({
    title: "Apakah data ini sudah disini dengan benar?",
    text: "Harap perhatikan kembali!",
    icon: "question",
    showCancelButton: true,
    confirmButtonColor: "#3085d6",
    cancelButtonColor: "#d33",
    confirmButtonText: "Yakin!"
  }).then((result) => {
    if (result.isConfirmed) {
      document.getElementById("formulir6").submit();
    }
  });
}

//--------------------------
var divToRedirect = document.getElementById('redirectDiv');
divToRedirect.addEventListener('click', function() {
    window.location.href = 'profile';
});
//--------------------------
function refreshPage() {
  location.reload();
}
//-------------------------
function updateInputValue2() {
  var selectElement = document.getElementById("DATA");
  var selectedOption = selectElement.options[selectElement.selectedIndex].value;
  var inputValueElement = document.getElementById("DATA2");

  if (selectedOption === "50000000") { 
    inputValueElement.value = "Rp2.500.000."; 
} else if (selectedOption === "250000000") {
    inputValueElement.value = "Rp37.500.000.";
} else if (selectedOption === "500000000") {
    inputValueElement.value = "Rp125.000.000.";
} else if (selectedOption === "5000000000") {
    inputValueElement.value = "Rp1.500.000.000.";
} else if (selectedOption === "5000000000000") {
    inputValueElement.value = "Rp1.750.000.000.";
}
}
//------------------------
function hanyaAngka(evt) {
  var charCode = (evt.which) ? evt.which : event.keyCode;
  if (charCode >= 48 && charCode <= 57) {
      return true;
  }
  return false;
}
//------------------------
function updateInputValue3() {
  // Ambil nilai NDPMB
  var ndpmb = 350000;

  // Ambil nilai Nilai Ekspor
  var selectElement = document.getElementById("DATA");
  var selectedOption = selectElement.options[selectElement.selectedIndex].value;
  var nilaiEkspor = selectedOption ? parseInt(selectedOption) : 0;

  // Ambil nilai Freight
  var freightInput = document.getElementById("freight");
  var freight = freightInput.value ? parseFloat(freightInput.value) : 0;

  // Ambil nilai Asuransi
  var asuransiInput = document.getElementById("asuransi");
  var asuransi = asuransiInput.value ? parseFloat(asuransiInput.value) : 0;

  // Hitung total nilai
  var totalNilai = ndpmb + nilaiEkspor + freight + asuransi;

  // Tampilkan total nilai di elemen nilai bea cukai keluar
  var nilaiBeaKeluarInput = document.getElementById("nilai_bea_keluar");
  nilaiBeaKeluarInput.value = totalNilai.toLocaleString(); // Format nilai dengan toLocaleString()
}
//--------------------------
function updatePphValue() {
  // Ambil nilai opsi yang dipilih dari elemen select
  var selectElement = document.getElementById("DATA");
  var selectedOption = selectElement.options[selectElement.selectedIndex].value;

  // Tentukan nilai PPh berdasarkan opsi yang dipilih
  var pph;
  if (selectedOption === "50000000") {
    pph = "2500000";
  } else if (selectedOption === "250000000") {
    pph = "37500000";
  } else if (selectedOption === "500000000") {
    pph = "125000000";
  } else if (selectedOption === "5000000000") {
    pph = "1500000000.";
  } else if (selectedOption === "5000000000000") {
    pph = "1750000000";
  }

   // Periksa apakah checkbox PPh dicentang
   var pphCheckbox = document.getElementById("pphCheckbox");
   if (pphCheckbox.checked) {
     // Jika dicentang, tambahkan nilai PPh ke totalNilai
     updateInputValue3(pph);
   } else {
     // Jika tidak dicentang, panggil updateInputValue3() tanpa nilai PPh
     updateInputValue3(-(pph));
   }

   var pphCheckbox = document.getElementById("pphCheckbox");
    pphCheckbox.addEventListener("click", function() {
    updatePphValue();
    });
}
//-----------------------------------------------
function HapusDokumen() {
  Swal.fire({
      title: "Apakah Anda yakin ingin menghapus data ini?",
      text: "Tindakan ini tidak dapat dikembalikan!",
      icon: "warning",
      showCancelButton: true,
      confirmButtonColor: "#3085d6",
      cancelButtonColor: "#d33",
      confirmButtonText: "Yakin!"
  }).then((result) => {
      if (result.isConfirmed) {
        Swal.fire({
          title: "Berhasil!",
          text: "Dokumen berhasil dihapus.",
          icon: "success"
      });
          document.getElementById('pencet1').click();
      }
  });
}
//-----------------------------------------------
function HapusDokumen2() {
  Swal.fire({
      title: "Apakah Anda yakin ingin menghapus data ini?",
      text: "Tindakan ini tidak dapat dikembalikan!",
      icon: "warning",
      showCancelButton: true,
      confirmButtonColor: "#3085d6",
      cancelButtonColor: "#d33",
      confirmButtonText: "Yakin!"
  }).then((result) => {
      if (result.isConfirmed) {
        Swal.fire({
          title: "Berhasil!",
          text: "Dokumen berhasil dihapus.",
          icon: "success"
      });
          document.getElementById('pencet2').click();
      }
  });
}
//-----------------------------------------------
function Edit() {
    Swal.fire({
        title: "Apakah Anda yakin ingin mengubah data ini?",
        text: "Tindakan ini akan mengubah rincian data!",
        icon: "question",
        showCancelButton: true,
        confirmButtonColor: "#3085d6",
        cancelButtonColor: "#d33",
        confirmButtonText: "Yakin!"
    }).then((result) => {
        if (result.isConfirmed) {
          document.getElementById('edit').click();
        }
    });
}
//-----------------------------------------------
function pertanyaan() {
  Swal.fire({
      title: "Apakah Anda yakin ingin mengubah data ini?",
      text: "Tindakan ini akan mengubah rincian data!",
      icon: "question",
      showCancelButton: true,
      confirmButtonColor: "#3085d6",
      cancelButtonColor: "#d33",
      confirmButtonText: "Yakin!"
  }).then((result) => {
      if (result.isConfirmed) {
        document.getElementById('submit').click();
      }
  });
}
//-----------------------------------------------
// function printPage(event) {
//   event.preventDefault();
//   var url = this.getAttribute("href");
//   var newWindow = window.open(url, "_blank");

//   // Tunggu sampai halaman dimuat
//   newWindow.onload = function() {
//       newWindow.print();
//   };
// }
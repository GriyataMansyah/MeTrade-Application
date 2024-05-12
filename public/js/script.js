
  function submitForm() {
    document.getElementById("formulir").submit();
  }
  //-------------------
  function submitFormHeader() {
    localStorage.setItem('kantor_pabean_muat_asal', document.getElementById('kantor_pabean_muat_asal').value);
    localStorage.setItem('pelabuhan_muat_ekspor', document.getElementById('pelabuhan_muat_ekspor').value);
    localStorage.setItem('kantor_pabean_muat_ekspor', document.getElementById('kantor_pabean_muat_ekspor').value);
    localStorage.setItem('jenis_ekspor', document.getElementById('jenis_ekspor').value);
    localStorage.setItem('kategori_ekspor', document.getElementById('kategori_ekspor').value);
    localStorage.setItem('cara_dagang', document.getElementById('cara_dagang').value);
    localStorage.setItem('cara_bayar', document.getElementById('cara_bayar').value);
    localStorage.setItem('komoditi', document.getElementById('komoditi').value);
    localStorage.setItem('curah', document.getElementById('curah').value);
    document.getElementById("formulir").submit();
  }
  //------------------

  //-------------------
  function goToHeader() {
    // Mencegah navigasi langsung
    event.preventDefault();

    // Mengirim permintaan AJAX untuk memuat ulang halaman
    var xhr = new XMLHttpRequest();
    xhr.open("GET", "{{ url('/header')}}", true);
    xhr.onreadystatechange = function() {
        if (xhr.readyState == 4 && xhr.status == 200) {
            // Memuat kembali nilai-nilai dari localStorage setelah halaman dimuat kembali
            var response = xhr.responseText;
            document.getElementById('pageContent').innerHTML = response;
            loadStoredValues(); // Memuat ulang nilai-nilai input
        }
    };
    xhr.send();
}

// Memuat kembali nilai-nilai dari localStorage setelah halaman dimuat kembali
function loadStoredValues() {
    document.getElementById('kantor_pabean_muat_asal').value = localStorage.getItem('kantor_pabean_muat_asal');
    document.getElementById('pelabuhan_muat_ekspor').value = localStorage.getItem('pelabuhan_muat_ekspor');
    document.getElementById('kantor_pabean_muat_ekspor').value = localStorage.getItem('kantor_pabean_muat_ekspor');
    document.getElementById('jenis_ekspor').value = localStorage.getItem('jenis_ekspor');
    document.getElementById('kategori_ekspor').value = localStorage.getItem('kategori_ekspor');
    document.getElementById('cara_dagang').value = localStorage.getItem('cara_dagang');
    document.getElementById('cara_bayar').value = localStorage.getItem('cara_bayar');
    document.getElementById('komoditi').value = localStorage.getItem('komoditi');
    document.getElementById('curah').value = localStorage.getItem('curah');
}


// Memuat kembali nilai-nilai dari localStorage setelah halaman dimuat kembali
window.onload = function() {
    document.getElementById('kantor_pabean_muat_asal').value = localStorage.getItem('kantor_pabean_muat_asal');
    document.getElementById('pelabuhan_muat_ekspor').value = localStorage.getItem('pelabuhan_muat_ekspor');
    document.getElementById('kantor_pabean_muat_ekspor').value = localStorage.getItem('kantor_pabean_muat_ekspor');
    document.getElementById('jenis_ekspor').value = localStorage.getItem('jenis_ekspor');
    document.getElementById('kategori_ekspor').value = localStorage.getItem('kategori_ekspor');
    document.getElementById('cara_dagang').value = localStorage.getItem('cara_dagang');
    document.getElementById('cara_bayar').value = localStorage.getItem('cara_bayar');
    document.getElementById('komoditi').value = localStorage.getItem('komoditi');
    document.getElementById('curah').value = localStorage.getItem('curah');
};
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
function saveFormValues() {
  var form = document.getElementById('myForm');
  var inputs = form.getElementsByTagName('input');
  
  for (var i = 0; i < inputs.length; i++) {
    localStorage.setItem(inputs[i].id, inputs[i].value);
  }
}

// Function to restore form values from Local Storage
function restoreFormValues() {
  var form = document.getElementById('myForm');
  var inputs = form.getElementsByTagName('input');
  
  for (var i = 0; i < inputs.length; i++) {
    var storedValue = localStorage.getItem(inputs[i].id);
    if (storedValue !== null) {
      inputs[i].value = storedValue;
    }
  }
}

// Function to clear form values from Local Storage
function clearFormValues() {
  var form = document.getElementById('myForm');
  var inputs = form.getElementsByTagName('input');
  
  for (var i = 0; i < inputs.length; i++) {
    localStorage.removeItem(inputs[i].id);
  }
}

// Restore form values when the page loads
window.onload = function() {
  restoreFormValues();
};

// Save form values when navigating away from the page
window.onbeforeunload = function() {
  saveFormValues();
};

// Clear form values when the form is submitted
document.getElementById('myForm').addEventListener('submit', function() {
  clearFormValues();
});
//-------------------------------------------
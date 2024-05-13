
  function submitForm() {
    document.getElementById("formulir").submit();
  }
  //-------------------
  window.addEventListener('load', function() {
    goToHeader();
});
  //------------------- HEADER
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

  function goToHeader() {
    document.getElementById('kantor_pabean_muat_asal').value = localStorage.getItem('kantor_pabean_muat_asal') || '';
    document.getElementById('pelabuhan_muat_ekspor').value = localStorage.getItem('pelabuhan_muat_ekspor') || '';
    document.getElementById('kantor_pabean_muat_ekspor').value = localStorage.getItem('kantor_pabean_muat_ekspor') || '';
    document.getElementById('jenis_ekspor').value = localStorage.getItem('jenis_ekspor') || '';
    document.getElementById('kategori_ekspor').value = localStorage.getItem('kategori_ekspor') || '';
    document.getElementById('cara_dagang').value = localStorage.getItem('cara_dagang') || '';
    document.getElementById('cara_bayar').value = localStorage.getItem('cara_bayar') || '';
    document.getElementById('komoditi').value = localStorage.getItem('komoditi') || '';
    document.getElementById('curah').value = localStorage.getItem('curah') || '';
}
  //-------------------
  window.addEventListener('load', function() {
    goToEntitas();
});
  // ------------------ ENTITAS
  function submitFormEntitas() {
    localStorage.setItem('nama_ek', document.getElementById('nama_ek').value);
    localStorage.setItem('alamat_ek', document.getElementById('alamat_ek').value);
    localStorage.setItem('nama_pen', document.getElementById('nama_pen').value);
    localStorage.setItem('alamat_pen', document.getElementById('alamat_pen').value);
    localStorage.setItem('negara_pen', document.getElementById('negara_pen').value);
    localStorage.setItem('nama_pem', document.getElementById('nama_pem').value);
    localStorage.setItem('alamat_pem', document.getElementById('alamat_pem').value);
    localStorage.setItem('negara_pem', document.getElementById('negara_pem').value);
    document.getElementById("formulir2").submit();
  }

  function goToEntitas() {
    document.getElementById('nama_ek').value = localStorage.getItem('nama_ek') || '';
    document.getElementById('alamat_ek').value = localStorage.getItem('alamat_ek') || '';
    document.getElementById('nama_pen').value = localStorage.getItem('nama_pen') || '';
    document.getElementById('alamat_pen').value = localStorage.getItem('alamat_pen') || '';
    document.getElementById('negara_pen').value = localStorage.getItem('negara_pen') || '';
    document.getElementById('nama_pem').value = localStorage.getItem('nama_pem') || '';
    document.getElementById('alamat_pem').value = localStorage.getItem('alamat_pem') || '';
    document.getElementById('negara_pem').value = localStorage.getItem('negara_pem') || '';
}
  //-------------------
  window.addEventListener('load', function() {
    goToAngkut();
});
  // ------------------ PENGANGKUT
  function submitFormAngkut() {
    localStorage.setItem('tempat_penimbunan', document.getElementById('tempat_penimbunan').value);
    localStorage.setItem('lokasi_pemeriksaan', document.getElementById('lokasi_pemeriksaan').value);
    localStorage.setItem('pelabuhan_muat_asal', document.getElementById('pelabuhan_muat_asal').value);
    localStorage.setItem('tanggal_periksa', document.getElementById('tanggal_periksa').value);
    localStorage.setItem('pelabuhan_bongkar', document.getElementById('pelabuhan_bongkar').value);
    localStorage.setItem('pelabuhan_tujuan', document.getElementById('pelabuhan_tujuan').value);
    localStorage.setItem('tanggal_perkiraan_ekspor', document.getElementById('tanggal_perkiraan_ekspor').value);
    localStorage.setItem('batu2', document.getElementById('batu2').value);
    document.getElementById("formulir3").submit();
  }

  function goToAngkut() {
    document.getElementById('tempat_penimbunan').value = localStorage.getItem('tempat_penimbunan') || '';
    document.getElementById('lokasi_pemeriksaan').value = localStorage.getItem('lokasi_pemeriksaan') || '';
    document.getElementById('pelabuhan_muat_asal').value = localStorage.getItem('pelabuhan_muat_asal') || '';
    document.getElementById('tanggal_periksa').value = localStorage.getItem('tanggal_periksa') || '';
    document.getElementById('pelabuhan_bongkar').value = localStorage.getItem('pelabuhan_bongkar') || '';
    document.getElementById('pelabuhan_tujuan').value = localStorage.getItem('pelabuhan_tujuan') || '';
    document.getElementById('tanggal_perkiraan_ekspor').value = localStorage.getItem('tanggal_perkiraan_ekspor') || '';
    document.getElementById('batu2').value = localStorage.getItem('batu2') || '';
}
  //-------------------
  window.addEventListener('load', function() {
    goToTransaksi();
});
  // ------------------ TRANSAKSI
  function submitFormTransaksi() {
    localStorage.setItem('rupiah1', document.getElementById('rupiah1').value);
    localStorage.setItem('nilai_maklan', document.getElementById('nilai_maklan').value);
    localStorage.setItem('rupiah2', document.getElementById('rupiah2').value);
    localStorage.setItem('DATA2', document.getElementById('DATA2').value);
    localStorage.setItem('cara_penyerahan', document.getElementById('cara_penyerahan').value);
    localStorage.setItem('nilai_bea_keluar', document.getElementById('nilai_bea_keluar').value);
    localStorage.setItem('DATA', document.getElementById('DATA').value);
    localStorage.setItem('freight', document.getElementById('freight').value);
    localStorage.setItem('asuransi', document.getElementById('asuransi').value);
    localStorage.setItem('input1', document.getElementById('input1').value);
    localStorage.setItem('berat_kotor', document.getElementById('berat_kotor').value);
    localStorage.setItem('berat_bersih', document.getElementById('berat_bersih').value);
    // localStorage.setItem('', document.getElementById('').value);
    // localStorage.setItem('', document.getElementById('').value);
    // localStorage.setItem('', document.getElementById('').value);
    // localStorage.setItem('', document.getElementById('').value);
    document.getElementById("formulir4").submit();
  }

  function goToTransaksi() {
    document.getElementById('rupiah1').value = localStorage.getItem('rupiah1') || '';
    document.getElementById('nilai_maklan').value = localStorage.getItem('nilai_maklan') || '';
    document.getElementById('rupiah2').value = localStorage.getItem('rupiah2') || '';
    document.getElementById('DATA2').value = localStorage.getItem('DATA2') || '';
    document.getElementById('cara_penyerahan').value = localStorage.getItem('cara_penyerahan') || '';
    document.getElementById('nilai_bea_keluar').value = localStorage.getItem('nilai_bea_keluar') || '';
    document.getElementById('DATA').value = localStorage.getItem('DATA') || '';
    document.getElementById('freight').value = localStorage.getItem('freight') || '';
    document.getElementById('asuransi').value = localStorage.getItem('asuransi') || '';
    document.getElementById('input1').value = localStorage.getItem('input1') || '';
    document.getElementById('berat_kotor').value = localStorage.getItem('berat_kotor') || '';
    document.getElementById('berat_bersih').value = localStorage.getItem('berat_bersih') || '';
    // document.getElementById('').value = localStorage.getItem('') || '';
    // document.getElementById('').value = localStorage.getItem('') || '';
    // document.getElementById('').value = localStorage.getItem('') || '';
    // document.getElementById('').value = localStorage.getItem('') || '';
}
  //-------------------
  window.addEventListener('load', function() {
    goToBarang();
});
  // ------------------ BARANG
  function submitFormBarang() {
    localStorage.setItem('HS', document.getElementById('HS').value);
    localStorage.setItem('satuan', document.getElementById('satuan').value);
    localStorage.setItem('kode_satuan', document.getElementById('kode_satuan').value);
    localStorage.setItem('lartas', document.getElementById('lartas').value);
    localStorage.setItem('kemasan', document.getElementById('kemasan').value);
    localStorage.setItem('kode_kemasan', document.getElementById('kode_kemasan').value);
    localStorage.setItem('kode', document.getElementById('kode').value);
    localStorage.setItem('harga_fob', document.getElementById('harga_fob').value);
    localStorage.setItem('uraian', document.getElementById('uraian').value);
    localStorage.setItem('volume', document.getElementById('volume').value);
    localStorage.setItem('mark', document.getElementById('mark').value);
    localStorage.setItem('berat_bersih2', document.getElementById('berat_bersih2').value);
    localStorage.setItem('tipe', document.getElementById('tipe').value);
    localStorage.setItem('harga_satuan_fob', document.getElementById('harga_satuan_fob').value);
    localStorage.setItem('ukuran', document.getElementById('ukuran').value);
    localStorage.setItem('negara_asal', document.getElementById('negara_asal').value);
    localStorage.setItem('daerah_asal_barang', document.getElementById('daerah_asal_barang').value);
    document.getElementById("formulir5").submit();
  }

  function goToBarang() {
    document.getElementById('HS').value = localStorage.getItem('HS') || '';
    document.getElementById('satuan').value = localStorage.getItem('satuan') || '';
    document.getElementById('kode_satuan').value = localStorage.getItem('kode_satuan') || '';
    document.getElementById('lartas').value = localStorage.getItem('lartas') || '';
    document.getElementById('kemasan').value = localStorage.getItem('kemasan') || '';
    document.getElementById('kode_kemasan').value = localStorage.getItem('kode_kemasan') || '';
    document.getElementById('kode').value = localStorage.getItem('kode') || '';
    document.getElementById('harga_fob').value = localStorage.getItem('harga_fob') || '';
    document.getElementById('uraian').value = localStorage.getItem('uraian') || '';
    document.getElementById('volume').value = localStorage.getItem('volume') || '';
    document.getElementById('mark').value = localStorage.getItem('mark') || '';
    document.getElementById('berat_bersih2').value = localStorage.getItem('berat_bersih2') || '';
    document.getElementById('tipe').value = localStorage.getItem('tipe') || '';
    document.getElementById('harga_satuan_fob').value = localStorage.getItem('harga_satuan_fob') || '';
    document.getElementById('ukuran').value = localStorage.getItem('ukuran') || '';
    document.getElementById('negara_asal').value = localStorage.getItem('negara_asal') || '';
    document.getElementById('daerah_asal_barang').value = localStorage.getItem('daerah_asal_barang') || '';
}
  //-------------------
//   window.addEventListener('load', function() {
//     goToPernyataan();
// });
//   // ------------------ PERNYATAAN
//   function submitFormPernyataan() {
//     localStorage.setItem('', document.getElementById('').value);
//     localStorage.setItem('', document.getElementById('').value);
//     localStorage.setItem('', document.getElementById('').value);
//     localStorage.setItem('', document.getElementById('').value);
//     document.getElementById("formulir4").submit();
//   }

//   function goToPernyataan() {
//     document.getElementById('').value = localStorage.getItem('') || '';
//     document.getElementById('').value = localStorage.getItem('') || '';
//     document.getElementById('').value = localStorage.getItem('') || '';
//     document.getElementById('').value = localStorage.getItem('') || '';
// }
  //-------------------
  function clearLocalStorage() {
    console.log("Menghapus data localStorage...");
    localStorage.clear();
}
  //-------------------
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
      clearLocalStorage();
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
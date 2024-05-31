<?php    
$user = auth()->user();
$account = \App\Models\Akun::where('id', $user->id)->first();
$account2 = \App\Models\Pengekspor::where('id_akun', $account->id)->first();
$account3 = \App\Models\dokumen::where('id_pengekspor', $account2->id)->first();

$Header = \App\Models\Header::where('id_dokumen', $account3->id)->first();
$InformasiEkspors = \App\Models\InformasiEkspors::where('id', $Header->id_informasi_eksports)->first();

$Eksportir = \App\Models\Eksportir::where('id_dokumen', $account3->id)->first();

$PemilikBarang = \App\Models\PemilikBarang::where('id_dokumen', $account3->id)->first();

$Penerima = \App\Models\PemilikBarang::where('id_dokumen', $account3->id)->first();

$Pembeli = \App\Models\PemilikBarang::where('id_dokumen', $account3->id)->first();

$InformasiTempat = \App\Models\InformasiTempat::where('id', $account3->id)->first();

$SaranaAngkut = \App\Models\SaranaAngkut::where('id_dokumen', $account3->id)->first();

$DataPengangkut = \App\Models\DataPengangkut::where('id_dokumen', $account3->id)->first();

$InformasiEkspors = \App\Models\InformasiEkspors::where('id', $account3->id)->first();

$Transaksi = \App\Models\Transaksi::where('id_dokumen', $account3->id)->first();

$InformasiPembayaran = \App\Models\InformasiPembayaran::where('id', $Transaksi->id_info_pembayaran)->first();

$InformasiEkspor = \App\Models\InformasiEkspor::where('id', $Transaksi->id_info_ekspor)->first();

// $InformasiEkspor = \App\Models\InformasiEkspor::where('id', $Transaksi->id_info_ekspor)->first();

$PetiKemas = \App\Models\PetiKemas::where('id_dokumen', $account3->id)->first();

$Kemasan = \App\Models\Kemasan::where('id_dokumen', $account3->id)->first();

$InformasiPungutanBerat = \App\Models\InformasiPungutanBerat::where('id', $Transaksi->id_info_pungutan)->first();

$Barang = \App\Models\Barang::where('id_dokumen', $account3->id)->first();

$HargaKemasan = \App\Models\HargaKemasan::where('id', $Barang->id_harga_kemasan)->first();

$InformasiAsalBarang = \App\Models\InformasiAsalBarang::where('id', $Barang->id_harga_kemasan)->first();

$InformasiBarang = \App\Models\InformasiBarang::where('id', $Barang->id_harga_kemasan)->first(); 

$HargaKemasan = \App\Models\HargaKemasan::where('id', $Barang->id_harga_kemasan)->first(); 

$Bank = \App\Models\Bank::where('seri', $account3->id)->first(); 


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DOKUMEN</title>
    <style>
        .note {
            width: 300px;
            margin-left:700px;
            font-size: 12px;
        }
        .centered {
            text-align: center;
        }

        .centered {
            margin-left:50%;
        }
      body {
        width: 100px;
        height:50px;
      }
       /* Aturan CSS untuk tabel */
       table {
           width: 1000px; /* Tabel mengisi lebar konten */
           border-collapse: collapse; /* Meleburkan batas sel */
       }
       th, td {
            text-align: left;
           border: 1px solid black; /* Menambahkan batas pada sel */
           padding: 8px; /* Padding untuk sel */
       }

        .indent-kanan {
            display: flex; /* Mengaktifkan Flexbox */
            flex-direction: row; /* Mengatur arah baris */
            align-items: flex-start; /* Menjaga teks di bagian atas */
            justify-content: flex-start; /* Menjaga teks di bagian kiri */
            padding-left: 30rem; /* Menambahkan indent ke kiri */
            line-height: 0;
        }       
        .container-fluid{
            padding: 7rem;
        }
        @media print {
            body {
                    -webkit-print-color-adjust: exact; /* Untuk browser berbasis WebKit (Chrome, Safari) */
        color-adjust: exact; /* Untuk browser lainnya */
                margin: 0;
                font-size: 7pt;
                padding: 0;
            }
            /* Atur margin untuk cetakan */
            @page {
                margin-top: -23mm;
                margin-left: -10mm;
                margin-bottom: -10mm;
                size: A4; /* Atur ukuran kertas menjadi A4 */
    height: 11in; /* Atur tinggi kertas menjadi 11 inci */

            }
        }
    </style>   
</head>
<body>

    <div class="container-fluid">
        <div class="note">
        <p>PERATURAN DIREKTUR JENDRAL BEA DAN CUKAI <br> NOMOR PER-07/BC/2020 <br> TENTANG <br> PERUBAHAN ATAS PERATURAN DIREKTUR JENDRAL BEA DAN <br> CUKAI NOMOR PER-21/BC/2028 TENTANG <br> PEMBERITAHUAN PABEAN EKSPOR</p>
        </div>
    <table>
        <tr>
            <th rowspan="3" style="writing-mode: vertical-rl;" class="centered">HEADER</th>
            <th >BC 3.0</th>
            <th colspan="6" style="text-align: center;">PEMBERITAHUAN EKSPOR BARANG</th>
        </tr>

        <tr>
            <td colspan="7">
                <div style="display: flex; justify-content: space-between;">
                    <p>Nomor pengajuan :{{ $Header->nomor_pengajuan }}</p>
                    <p style="text-align: right; border-left: none;">Halaman 1 dari 1</p>
                </div>
            </td>
        </tr>

        <tr>
            <td colspan="3" style="line-height: 0.4;">
                <h5>A.  Kantor Pabean</h5>
                <p>1. Kantor Pabean Pemuatan    : {{ $Header->kantor_muat_asal }}</p>
                <p>2. Kantor Pabean Ekspor  : {{ $Header->kantor_muat_ekspor }}</p>
                <h5>B.  Jenis Ekspor    : {{ $InformasiEkspors->jenis_ekspor ?? "" }}</h5>
                <h5>C.  Kategori Ekspor   : {{ $InformasiEkspors->kategori_ekspor ?? ""}}</h5>
                <h5>D.  Cara Perdagangan    :  {{ $InformasiEkspors->cara_dagang ?? "" }}</h5>
                <h5>E.  Cara Pembayaran    : {{ $Header->cara_bayar ?? "" }}</h5>
            </td>

            <td colspan="4" style="line-height: 0.4;">
                <h5>H. KOLOM KHUSUS BEA DAN CUKAI</h5>
                <p>1. Nomor Pendaftaran    :   {{ $Header->nomor_pengajuan }}</p>
                <p>2. Nomor BC 3.0    : {{ $account3->id }}</p>
                <p>3. Pos/Sub Pos  : - </p>
            </td>
        </tr>

        <tr>
            <th rowspan="20" style="writing-mode: vertical-rl;" class="centered">F. DATA PENGAJUAN</th>
            <th colspan="2"style="background-color: rgb(174, 174, 174);">EKSPORTIR</th>
            <th colspan="2" style="background-color: rgb(174, 174, 174);">PEMILIK BARANG</th>
            <TH colspan="4" style="background-color: rgb(174, 174, 174);">PENERIMA</TH>
        </tr>

        <tr>
            <td colspan="2"style="line-height: 0.4;">
                <p>1. Identitas    : {{ $Eksportir->nomor_identitas }}</p>
                <p>2. Nama  : {{ $Eksportir->nama }}</p>
                <p>3. Alamat  : {{ $Eksportir->alamat }}</p>
                <p>4. Status  : Aktif </p>
            </td>

            <td colspan="2" style="line-height: 0.4;">
                <p>5. Identitas    : {{ $PemilikBarang->no_identitas }}</p>
                <p>6. Nama  : {{ $PemilikBarang->nama }}</p>
                <p>7. Alamat  : {{ $PemilikBarang->alamat }}</p>
            </td>

            <td colspan="4" style="line-height: 0.4;">
                <p>11. Nama    : {{ $Penerima->nama }}</p>
                <p>12. Alamat  : {{ $Penerima->alamat }}</p>
                <p>13. Negara  : SG - SINGAPURA </p>
            </td>
        </tr>

        <tr>
           <th colspan="3" style="background-color: rgb(174, 174, 174);">PPJK</th>
            <th  colspan="4"style="background-color: rgb(174, 174, 174);">PEMBELI</th>
        </tr>

        <tr>
            <td colspan="3" style="line-height: 0.4;">
                <p>8. NPWP    :  {{ $account2->npwp }}</p>
                <p>9. Nama  :  {{ $account2->nama }}</p>
                <p>10. Alamat  :  {{ $account2->alamat ?? 'Jl.Kekasih Andara RT 09,RW 10, Sekadih, Batu Hitam'}}</p>
            </td>

            <td colspan="4" style="line-height: 0.4;">
                <p>14. Nama    :  {{ $Pembeli->nama }}</p>
                <p>15. Alamat  :  {{ $Pembeli->alamat }}</p>
                <p>16. Negara  :  {{ $Pembeli->negara ?? 'SG-SINGAPURA' }}</p>
            </td>
        </tr>

        <tr>
            <th colspan="3" style="background-color: rgb(174, 174, 174);">DATA PENGANGKUTAN</th>
             <th colspan="4" style="background-color: rgb(174, 174, 174);">DATA PELABUHAN/TEMPAT MUAT EKSPOR</th>
         </tr>
 
         <tr>
             <td colspan="3" style="line-height: 0.4;">
                 <p>17. Cara Pengangkutan    :    {{ $SaranaAngkut->cara_pengangkutan }} </p>
                 <p>18. Nama & Bendera Sarana Pengangkutan  :  {{ $SaranaAngkut->bendera }} </p>
                 <p>19. No. Pengangkut (Voy/Flight/Nopol)  :   {{ $SaranaAngkut->nomor_voy }}</p>
                 <p>20. Tanggal Perkiraan Ekspor  :   {{ \Carbon\Carbon::parse($InformasiTempat->tanggal_perkiraan_ekspor ?? "")->format('d-m-Y') }}</p>
             </td>
 
             <td colspan="4" style="line-height: 0.4;">
                 <p>21. Pelabuhan Muat Asal    :  {{ $InformasiTempat->pelabuhan_muat_asal }} </p>
                 <p>22. Pelabuhan / Tempat Muat Ekspor  :  {{ $InformasiTempat->pelabuhan_muat_ekspor }} </p> 
                 <p>23. Tempat Penimbunan    {{ $InformasiTempat->tempat_penimbunan }}:</p>
                 <p>24. Pelabuhan Bongkar  :  {{ $InformasiTempat->pelabuhan_bongkar }}</p>
                 <p>25. Pelabuhan Tujuan  :   {{ $InformasiTempat->pelabuhan_tujuan }}</p>
                 <p>26. Negara Tujuan Ekspor  :   {{ $InformasiTempat->negara_tujuan_ekspor }}</p>
             </td>
         </tr>

         <tr>
            <th colspan="3" style="background-color: rgb(174, 174, 174);">DOKUMEN PELENGKAP PABEDA</th>
             <th colspan="4"style="background-color: rgb(174, 174, 174);">DATA TEMPAT PEMERIKSAAN</th>
         </tr>
 
         <tr>
             <td colspan="3" rowspan="3" style="line-height: 0.4;">
                 <p>27. Nomor & Tgl Invoice    : BAC.039-24-2 & 12 Juni 2024</p>
                 {{-- TODAY --}}
                 <p>28. Nomor & Tgl Packing List  :BAC 029-24-2 & {{ \Carbon\Carbon::parse($InformasiTempat->tanggal_perkiraan_ekspor)->format('d-m-Y') }} </p>
                 <p>29. Jenis, Nomor & Tgl Dokumen lainnya  : - </p>
                 <p>    Kantor Bea Cukai pendaftaran  : {{ $Header->kantor_muat_asal }} </p>
             </td>
 
             <td colspan="4"style="line-height: 0.4;">
                 <p>30. Lokasi Pemeriksaan    :  {{ $InformasiTempat->lokasi_pemeriksaan }}</p>
                 <p>31. kantor Pabean Pemeriksaan  :   {{ $DataPengangkut->kantor_periksa }}</p>
                 <TR>
                    <TH colspan="4" style="background-color: rgb(174, 174, 174);">DATA PENYERAHAN</TH>
                </TR>   
                 <td colspan="4" style="line-height: 0.4;">   
                    <p>32. Cara Penyerahan Barang    :  {{ $InformasiEkspors->cara_dagang }}</p>
                </td>
             </td>
         </tr>

         <tr>
            <th colspan="7" style="background-color: rgb(174, 174, 174);">DATA TRANSAKSI EKSPOR</th>
         </tr>

         <td colspan="3" style="line-height: 0.4;">
            <p>33. Bank Devisa Hasil Ekspor    :{{ $Bank->nama_bank }} </p>
            <p>34. Jenis Valuta  :   {{ $InformasiPembayaran->valuta }}</p>
            <p>35. Nilai Ekspor  : {{ $InformasiPembayaran->nilai_ekspor }}</p>
        </td>

        <td colspan="4" style="line-height: 0.4;">
            <p>36. Freight    :   {{ $InformasiPembayaran->freight }}</p>
            <p>37. Asuransi   :   {{ $InformasiEkspor->asuransi }}</p>
            <p>38. Nilai Maklon (Jika ada)  :  {{ $InformasiPembayaran->nilai_maklan ?? '-' }}</p>
        </td>

        <tr>
            <th colspan="3" style="background-color: rgb(174, 174, 174);">DATA PETI KEMAS</th>
             <th colspan="4" style="background-color: rgb(174, 174, 174);">DATA KEMASAN</th>
         </tr>
 
         <tr>
             <td colspan="3" style="line-height: 0.4;">
                 <p>39. Jumlah Peti Kemas    :  1</p>
                 <p>40. Nomor, Ukuran, Status Peti Kemas  : {{ $PetiKemas->nomor }}, {{ $PetiKemas->ukuran }}, {{ $PetiKemas->jenis }}</p>
             </td>
 
             <td colspan="4" style="line-height: 0.4;">
                 <p>41. Jenis, Jumlah dan Merek Kemasan    :  {{ $Kemasan->jenis }}, {{ $Kemasan->jumlah }}, {{ $Kemasan->merek }}</p>
             </td>
         </tr>

         <tr>
            <th colspan="7" style="background-color: rgb(174, 174, 174);">DATA BARANG EKSPOR</th>
         </tr>

         <td colspan="3" style="line-height: 0.4;">
            <p>42. Berat Kotor (kg)   :  {{ $InformasiPungutanBerat->berat_kotor }}</p>
        </td>

        <td colspan="4" style="line-height: 0.4;">
            <p>43. Berat Bersih (kg)    :  {{ $InformasiPungutanBerat->berat_bersih }}</p>
        </td>

        <tr>
            <td style="line-height: 0.4;">44.
                <p>No</p>
            </td>

            <td>45. Pos Tarif/HS, Uraian Jumlah dan jenis barang secara lengkap,
                merk, tipe, ukuran, spesifikasi lain dan kode barang
            </td>

            <td>46. Perizinan Ekspor </td>
            <td>47. HS barang dan tarif BK pada tanggal Pendaftaran </td>
            <td>48. Jumlah, jenis sat, berat bersih(kg), dan volume(m3)  </td>
            <td><p>49. Negara Asal Barang </p>
                <p>50. Daerah Asal Barang </p>
            </td>
            <td>51. Jumlah nilai FOB  </td>
        </tr>
        <td style="height: 30px;">1</td>
        <td style="height: 30px;">{{ $InformasiBarang->HS }},{{ $InformasiBarang->uraian }} dan {{ $InformasiBarang->kode }}{{ $InformasiBarang->merk }}, {{ $InformasiBarang->tipe }}, {{ $InformasiBarang->ukuran }} </td>
        <td style="height: 30px;">Perizinan Eksportir</td>
        <td style="height: 30px;">{{ $InformasiBarang->HS }}, dan {{ $InformasiPembayaran->nilai_ekspor }}</td> 
        <td style="height: 30px;">{{ $InformasiBarang->lartas }}, {{ $InformasiBarang->kode }}, {{ $InformasiPungutanBerat->berat_bersih }}, dan {{ $HargaKemasan->volume }}</td>
        <td style="height: 30px;">{{ $InformasiAsalBarang->negara_asal_barang }}<br><Br>{{ $InformasiAsalBarang->daerah_asal_barang }}</td>
        <td style="height: 30px;">{{ $HargaKemasan->harga_satuan_fob }}</td>

        <tr>
            <td rowspan="2">52.</td>
            <td colspan="3" rowspan="2">Nilai Tukar Mata Uang :  {{ $InformasiEkspor->nilai_bea_keluar }} </td>
            <th colspan="7" style="background-color: rgb(174, 174, 174);">DATA PENERIMAAN NEGARA</th>
                <tr>
                    <td colspan="3">
                    <p>53. Nilai Bea Keluar    :  {{ $InformasiEkspor->nilai_bea_keluar }}</p>
                    <p>54. PPh Pasal 22 Ekspor  :  {{ $InformasiPembayaran->pph }}</p>
                    <p>55. Pungutan Sawit  :  Rp 100.000,00</p>
                    </td>
               </tr>

        <tr>
            <td colspan="8" style="padding: 10px;">
                <h4>G. TANDA TANGAN EKSPORTIR / PPJK</h4>
                <p>Dengan ini saya menyatakan bertanggungjawan atas kebenaran hal-hal yang diberitahukan dalam Pemberitahuan Ekspor barang ini,
                    serta bersedia dikenakan sanksi sesuai dengan ketentuan di bidang kepabeanan apabila terdapat kesalahan.
                </p> <br>
                <p style="text-align: right; padding-right: 8rem;">
                    Batam, 12 Juni 2024
                    {{-- TODAY --}}
                </p><br><br><br>

                <p style="text-align: right; padding-right: 8rem;">
                    (..............................)
                </p>
            </td>
        </tr>

        <tr>
            <td colspan="8" style="padding: 10px; text-align: right;">
                Lembar ke-1/2/3 untuk Bea dan Cukai/BPS/BI
            </td>
    </table>
</div>  
</body>
</html>
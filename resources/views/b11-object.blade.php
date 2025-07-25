@php use Illuminate\Support\Facades\Auth; @endphp

@extends(
  Auth::check()
    ? (Auth::user()->role === 'mahasiswa'
        ? 'layout.mainMateriM'
        : (Auth::user()->role === 'dosen' ? 'layout.mainMateriBukaD' : 'layout.mainMateriBukaG')
      )
    : 'layout.mainMateriBukaG'
)

@php
  use App\Models\ProgressMahasiswa;
  $selesai = ProgressMahasiswa::where('user_id', auth()->id())->where('halaman', 'b11-object')->value('selesai');
@endphp

@section('container')
    <div class = "materi-subbab1">
        <div class="TIKjudul">
            <h4>A. PENGENALAN</h4>
        </div>

        <div class="TIK">
            <h5>Tujuan Pembelajaran</h5>
            <p>Setelah menyelesaikan materi ini, mahasiswa diharapkan mampu:</p>
            <ol>
                <li>Memahami konsep dasar Object-Oriented Programming (OOP) dalam PHP.</li>
                <li>Menjelaskan pengertian dan peran object dalam pemrograman berbasis objek.</li>
                <li>Mengidentifikasi terminologi yang digunakan dalam OOP, seperti class, object, property, dan method.</li>
                <li>Membuat dan menggunakan object dalam PHP.</li>
                <li>Mendeklarasikan property dan method dalam sebuah class untuk membangun struktur program berbasis objek.</li>
            </ol>
        </div>

        <div class="judul-subbab">
            <h5>1. Object</h5>
        </div>
        <div class="TIK5">
            <p>Object-Oriented Programming (OOP) adalah metode pemrograman yang menggabungkan data dan fungsi dalam satu kesatuan yang disebut object...</p>
            <p><ol type="a">
                <li>Object Buku → Memiliki data seperti judul, pengarang, dan jumlah halaman. Juga memiliki method untuk menampilkan informasi buku.</li>
                <li>Object Anggota → Memiliki data seperti nama, nomor anggota, dan status keanggotaan. Bisa memiliki method untuk meminjam dan mengembalikan buku.</li>
                <li>Object Peminjaman → Menyimpan informasi tentang buku yang dipinjam, anggota yang meminjam, serta tanggal peminjaman dan pengembalian.</li>
            </ol></p>
            <p>Dengan pendekatan ini, setiap elemen dalam sistem dapat dibuat sebagai object yang berisi data dan method-nya sendiri. Sebelum OOP, pemrograman sering menggunakan pendekatan prosedural, di mana data dan fungsi dibuat secara terpisah. Misalnya, dalam program perpustakaan, terdapat satu daftar buku dalam bentuk array, kemudian digunakan fungsi-fungsi terpisah untuk menampilkan buku, mencatat peminjaman, dan sebagainya. Hal ini membuat program cenderung tidak terstruktur dan sulit dipelihara.</p>
            <p>Untuk memperjelas perbedaan antara kedua paradigma ini, perhatikan Gambar berikut.</p>
            <div class="teks-kontenpt2">
                <img style="display: block; margin: 0 auto;" class="scrool" src="images/G1.png" alt="Gambar 1 Perbandingan Pemrograman Prosedural vs OOP">
                <p>Gambar 1 Perbandingan Pemrograman Prosedural vs OOP</p>
            </div>
            <p>Gambar ini memperlihatkan perbedaan mendasar antara pendekatan prosedural dan OOP. Di sisi kiri, pemrograman prosedural digambarkan sebagai susunan fungsi dan variabel global yang berdiri sendiri dan saling bergantung. Pendekatan ini membuat alur logika program cenderung linier dan kurang fleksibel. Di sisi kanan, pendekatan OOP digambarkan sebagai struktur modular, di mana class membungkus data (properties) dan fungsi (methods) menjadi satu kesatuan. Pendekatan ini mendorong modularitas, enkapsulasi, dan pemeliharaan kode yang lebih mudah.</p>
            <p>Dengan OOP, semua data dan logika pemrosesannya disatukan dalam object, sehingga program menjadi lebih terorganisir dan fleksibel. Untuk melihat perbedaan secara lebih rinci, berikut disajikan tabel perbandingan antara OOP dan pemrograman prosedural:</p>
<div class="container">
    <div class="table-title">Tabel 1 Perbandingan OOP dan Pemrograman Prosedural</div>
    <div class="table-responsive">
      <table class="table custom-table">
        <thead>
          <tr>
            <th>Aspek</th>
            <th>Object-Oriented Programming (OOP)</th>
            <th>Pemrograman Prosedural</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <th>Pendekatan</th>
            <td>Berbasis objek yang menggabungkan data dan fungsi dalam satu kesatuan</td>
            <td>Berbasis prosedur yang terdiri dari serangkaian langkah-langkah logis</td>
          </tr>
          <tr>
            <th>Struktur Kode</th>
            <td>Menggunakan <strong>class</strong> dan <strong>object</strong></td>
            <td>Menggunakan <strong>fungsi</strong> dan <strong>variabel global</strong></td>
          </tr>
          <tr>
            <th>Enkapsulasi</th>
            <td>Data disembunyikan dan hanya bisa diakses melalui metode yang sesuai</td>
            <td>Data dapat diakses secara langsung oleh seluruh program</td>
          </tr>
          <tr>
            <th>Pemakaian Ulang Kode</th>
            <td>Kode dapat digunakan kembali melalui <em>inheritance (pewarisan)</em></td>
            <td>Kode sering perlu ditulis ulang atau disalin untuk digunakan kembali</td>
          </tr>
          <tr>
            <th>Kemudahan Perawatan</th>
            <td>Mudah dikelola karena setiap bagian memiliki tanggung jawab sendiri</td>
            <td>Bisa menjadi sulit dikelola karena banyak fungsi saling bergantung</td>
          </tr>
          <tr>
            <th>Keamanan Data</th>
            <td>Data dilindungi dengan konsep <strong>private, protected, dan public</strong></td>
            <td>Data lebih rentan karena sering menggunakan variabel global</td>
          </tr>
          <tr>
            <th>Contoh Implementasi</th>
            <td>Membuat class seperti User, Buku, Mobil</td>
            <td>Menggunakan fungsi seperti <code>tambahUser()</code>, <code>hitungTotal()</code></td>
          </tr>
        </tbody>
      </table>
    </div>
  </div>
            <p></p>
            <p></p>
            <p></p>

        </div>
    </div>

    <!-- LATIHAN SECTION -->
            <div class="quiz-card mt-5">
              <div class="quiz-header">
                <h1>LATIHAN</h1>
                <p class="quiz-intro">
                  Bacalah setiap pertanyaan pilihan ganda dengan cermat, lalu klik salah satu jawaban yang menurutmu paling tepat.<br>
                  Gunakan tombol <strong>Lanjut</strong> untuk berpindah ke soal berikutnya, dan tombol <strong>Kembali</strong> jika ingin meninjau ulang jawaban sebelumnya.<br>
                  Setelah semua soal dijawab, klik tombol <strong>Periksa Jawaban</strong> untuk menampilkan refleksi atas pilihanmu.<br>
                  Jika masih terdapat jawaban yang salah, kamu dapat mengulangi latihan ini hingga semua jawaban benar untuk membuka akses ke halaman selanjutnya.
                </p>


              </div>
              <div id="quiz-container"></div>
              <div class="d-flex justify-content-between">
                <button id="backBtn" class="btn btn-back d-none">Kembali</button>
                <button id="nextBtn" class="btn btn-next d-none">Lanjut</button>
              </div>
            </div>

            <script>
const quizData = [
  {
    question: "1. Istilah untuk satuan kode dalam OOP yang menggabungkan data dan fungsi disebut ….",
    options: ["Array", "Function", "Object", "Class", "Variable"],
    answer: 3,
    feedback: [
      "Array adalah struktur data, bukan unit utama dalam OOP.",
      "Function hanya berisi logika, bukan struktur menyeluruh.",
      "Object adalah hasil dari class, bukan unit utama.",
      "🎉 Tepat sekali! Class menyatukan data dan fungsi dalam OOP.",
      "Variable menyimpan data saja, tidak mencakup fungsi."
    ]
  },
  {
    question: "2. Alasan OOP lebih mudah dipelihara dibandingkan pendekatan prosedural adalah …",
    options: [
      "OOP tidak butuh fungsi.",
      "OOP menyatukan semua logika dalam satu tempat.",
      "Setiap object bertanggung jawab atas bagiannya sendiri.",
      "OOP lebih cepat dieksekusi.",
      "OOP selalu menggunakan file terpisah."
    ],
    answer: 2,
    feedback: [
      "Hmm, bukan itu! Fungsi tetap dibutuhkan dalam OOP.",
      "Belum tepat. Justru logika dibagi dalam object, bukan disatukan.",
      "🎉 Benar sekali! Ini yang membuat OOP mudah dipelihara.",
      "Kecepatan bukan alasan utama OOP unggul.",
      "Struktur file bisa bervariasi, tapi bukan alasan utama."
    ]
  },
  {
    question: "3. Object-Oriented Programming (OOP) merupakan paradigma pemrograman yang berfokus pada …",
    options: [
      "Pembuatan fungsi-fungsi independen.",
      "Pemrosesan data dengan perintah berulang.",
      "Penggabungan data dan fungsi dalam satu entitas.",
      "Penggunaan array untuk menyimpan seluruh informasi.",
      "Penulisan kode prosedural yang terstruktur."
    ],
    answer: 2,
    feedback: [
      "Coba lagi! Itu lebih cocok untuk procedural programming.",
      "Belum benar. Ini ciri dari pendekatan prosedural.",
      "🎉 Yes! Ini inti dari pendekatan OOP!",
      "Array hanya struktur data, bukan inti dari OOP.",
      "Prosedural dan OOP adalah pendekatan berbeda."
    ]
  }
];

let currentQuestion = 0;
let jawabanUser = Array(quizData.length).fill(null);

function renderQuestion() {
  const q = quizData[currentQuestion];
  const container = document.getElementById("quiz-container");
  const nextBtn = document.getElementById("nextBtn");
  const backBtn = document.getElementById("backBtn");

  nextBtn.innerText = (currentQuestion === quizData.length - 1) ? "Periksa Jawaban" : "Lanjut";
  nextBtn.classList.toggle("d-none", jawabanUser[currentQuestion] === null);
  backBtn.classList.toggle("d-none", currentQuestion === 0);

  let html = `<div class='quiz-title'>Pertanyaan ${currentQuestion + 1} dari ${quizData.length}</div>`;
  html += `<p>${q.question}</p>`;
  q.options.forEach((opt, index) => {
    const selected = jawabanUser[currentQuestion] === index ? 'selected' : '';
    html += `<div class="option ${selected}" onclick="selectOption(this, ${index})">${String.fromCharCode(65 + index)}. ${opt}</div>`;
  });

  container.innerHTML = html;
}

function selectOption(el, index) {
  jawabanUser[currentQuestion] = index;

  const options = document.querySelectorAll(".option");
  options.forEach(opt => opt.classList.remove("selected"));
  el.classList.add("selected");

  document.getElementById("nextBtn").classList.remove("d-none");
}

document.getElementById("nextBtn").addEventListener("click", () => {
  if (currentQuestion < quizData.length - 1) {
    currentQuestion++;
    renderQuestion();
  } else {
    tampilkanRefleksi();
  }
});

document.getElementById("backBtn").addEventListener("click", () => {
  if (currentQuestion > 0) {
    currentQuestion--;
    renderQuestion();
  }
});

function tampilkanRefleksi() {
  const container = document.getElementById("quiz-container");
  let benar = 0;

  let html = `<h4 class='mb-4 fw-bold'>🔎 Refleksi Jawaban</h4>`;

  quizData.forEach((q, i) => {
    const userIndex = jawabanUser[i];
    const isBenar = userIndex === q.answer;
    if (isBenar) benar++;

    const statusBadge = isBenar ? 'success' : 'danger';
    const statusText = isBenar ? '✅ Benar' : '❌ Salah';

    html += `
      <div class="accordion-item mb-3 border rounded shadow-sm">
        <h6 class="accordion-header p-3 bg-light">
          Soal ${i + 1} - <span class="badge bg-${statusBadge}">${statusText}</span>
        </h6>
        <div class="accordion-body p-3">
          <p><strong>Pertanyaan:</strong><br>${q.question}</p>
          <p><strong>Jawabanmu:</strong><br>${q.options[userIndex] ?? "<i>Belum dijawab</i>"}</p>
          <p><strong>Feedback:</strong><br>${q.feedback[userIndex] ?? "<i>Tidak tersedia</i>"}</p>
        </div>
      </div>
    `;
  });

  const total = quizData.length;

  html = `<div class="alert alert-${
    benar === total ? 'success' : 'warning'
  } fw-bold">${benar === total
      ? '🎉 Semua jawaban kamu benar! Keren banget! Kamu bisa lanjut ke materi berikutnya.'
      : '😅 Masih ada jawaban yang belum tepat. Yuk ulangi lagi agar lebih paham!'
    }</div>` + html;

  html += `
    <div class="mt-4 text-center">
      ${
        benar === total
          ? ''
          : `<button id = "btn-danger" class="btn btn-danger" onclick="resetKuis()">Ulangi Latihan</button>`
      }
    </div>
  `;

  container.innerHTML = html;
  document.getElementById("nextBtn").classList.add("d-none");
  document.getElementById("backBtn").classList.add("d-none");

  if (benar === total) {
    kirimProgressHalaman("b11-object");

    const tombol = document.getElementById('btnSelanjutnya');
    if (tombol) {
      tombol.style.pointerEvents = 'auto';
      tombol.style.opacity = 1;
      tombol.removeAttribute('disabled');
    }
  }
}

function resetKuis() {
  currentQuestion = 0;
  jawabanUser = Array(quizData.length).fill(null);
  renderQuestion();
}

function kirimProgressHalaman(namaHalaman) {
  fetch("{{ route('progress.simpan') }}", {
    method: 'POST',
    headers: {
      'Content-Type': 'application/json',
      'X-CSRF-TOKEN': document.querySelector('meta[name=csrf-token]').content
    },
    body: JSON.stringify({ halaman: namaHalaman })
  })
    .then(res => res.json())
    .then(data => {
      console.log('✅ Progress berhasil dikirim:', data);
    })
    .catch(err => {
      console.error('❌ Gagal kirim progress:', err);
    });
}

renderQuestion();

$(document).ready(function () {
  var currentLocation = window.location.href;
  if (currentLocation.slice(-1) === "/") {
    currentLocation = currentLocation.slice(0, -1);
  }
  $('.pagination a').filter(function () {
    return this.href === currentLocation;
  }).addClass('active');
});
</script>


    <!-- PAGINATION -->
  <div class="pagination">
  <a href="./b12-terminologi" 
     id="btnSelanjutnya"
     class="next"
     @if(!$selesai)
       style="pointer-events: none; opacity: 0.5;"
     @endif
  >
    Selanjutnya &raquo;
  </a>
</div>



    </div>
@endsection


<?php $__env->startSection('main'); ?>
<link rel="stylesheet" href=<?php echo e(asset('css/style.css')); ?>>
<div class="row">
    <div class="container">
        <header class="d-flex flex-wrap py-3 mb-4 border-bottom" style="background-color: #87CEFA;">
            <ul class="navbar-nav">
                <li class="nav-item" style="font-size: 20px; margin-left:20px;">Simple Siakad</li>
            </ul>

            <ul class="nav nav-pills ml-auto" style="margin-right: 10px;">
                <li class="nav-item"><a href="/" class="nav-link" style="color: black;">Data Mahasiswa</a></li>
                <li class="nav-item"><a href=" <?php echo e(url('mahasiswis/create')); ?>" class="nav-link" style="color: black;">Input Data</a></li>
                <li class="nav-item"><a href="/about" class="btn btn-outline-primary">About Me</a></li>
            </ul>
        </header>

    </div>
    <div class=" col-md-12 " style=" margin-top: 50px; color:#191970;">
        <h2> About Me</h2>
        <center>
            <div class="card mt-4 border-0" style="width: 700px; text-align:center;  ">
                <img src=<?php echo e(asset('storage/img/anita.jpg')); ?> class="rounded mx-auto d-block" alt="..." width="150">
                <h3 style="margin-top: 10px;">ANITA ROSSANGELICA</h3>
            </div>
        </center>
    </div>
    <div class="col-md-12 " style="margin-top: 50px;">
        <h2 style="color:#191970;"> Background</h2>
        <p style="text-align: justify;"> Hello!!! This is me! Anitaaa... <br>
        Okey, namaku Anita Rossangelica. Biasa dipanggil Anita. Aku lahir pada 4 Oktober 2002 dan besar di Mojokerto. Umurku sekarang sudah 20 tahun loh... Xixixi udah tau nih aku! :)
        Nah, aku sekarang menempuh pendidikan S1 Teknik Informatika di Universitas Trunojoyo Madura. Pada pendidikan sebelumnya, aku berada pada jurusan MIPA di SMAN 2 Mojokerto. <br><br>
        Kenapa sih kok aku bisa ambil Teknik Informatika setelah lulus SMA yang bahkan jurusanku bukan seperti anak SMK yang pada jurusan TKJ? Begini jawabannya...
        Aku udah lama suka bidang informatika gini, apalagi ada partner yang selalu klop sama aku yakni doiku sendiri namanya Bramasta Triananda Putra. Sooo, jadi sering bantu dalam project dan saling belajar mengajar satu sama lain. <br>
        Begitu... Sekian yaaa background tentang aku!!! </p>
    </div>
    <div class="col-md-12 " style="margin-top: 50px;">
        <h2 style="color:#191970;"> Suka Duka Praktikum PAW</h2>
        <p style="text-align: justify;"> Salam hangat dari saya kakak-kakak asisten praktikum PAW! :) <br>
        Kalo mbicarain suka duka sih... Buanyak pastinya. Banget. Langsung aja sih suka duka untuk praktikum PAW selama ini di semester 3 tercinta ini hehehehehe gasss... <br><br>
        <b>Suka</b> : Sukanya ini pas waktu diterangin di lab, belajar bareng, waktu asistensi diingetin sama diskusi bareng kak Rasyid... Terus yang paling utama sih waktu <b>PRAKTIKUM ONLINE</b> 
        soalnya waktu itu hujan dueras jadi ga memungkinkan buat datang ke lab. Terus terus yang paling gak kalah bahagia... Tiap praktikum juga dibantu doiku dan juga diajarin doiku :) ... 
        Gituuu... hehehehehe <br>
        <b>Duka</b> : Duh gimana ya? :( Ini dukanya yaaa banyak si jujurly. Dukanya sedih banget deadline praktikum muepet sedangkan kelas sebelah dikasih waktu seminggu. 
        Terus,pas nugas tugas praktikum itu sering bentrok sama tugas lain jadi bingung ngerjainnya mana deadline mepet semua. 
        Yang terakhir, tugas CRUD ini sih... 11 12 sama tugas project akhirnya dari Pak Khozaimi... <br><br>

        Sekian suka duka saya mengenai praktikum PAW... Mohon maaf juga buat kakak-kakak asprak PAW untuk kesalahan saya selama ini...
        Semoga sukses ya untuk kakak asprak, saya, serta semuanya !!!
        </p>
    </div>
</div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('mahasiswi', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\modul7\resources\views/about.blade.php ENDPATH**/ ?>
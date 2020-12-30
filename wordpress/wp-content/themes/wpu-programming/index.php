<?= get_header(); ?>


<div class="container">
    <div class="header mt-5">
        <div class="capt">
            <h1>Happy <br> <span>Programming</span> Years</h1>
            <p>Asah kemampuan Coding anda mulai dari dasar hingga mahir</p>
            <button class="btn mt-5">Daftar</button>
        </div>
        <div class="img">
            <img src="<?= get_bloginfo('stylesheet_directory') ?>/asset/img/header11.png" alt="">
        </div>
    </div>
</div>

<div class="container">
    <p class="mb-5" style="text-align:center; font-size:25px;"> About Us </p>

    <div class="row mb-5 mt-5">
        <div class="col-md-6">
            <img src="<?= get_bloginfo('stylesheet_directory') ?>/asset/img/maps.png" alt="">
        </div>
        <div class="col-md-6 mb-5">
            <div class="aboutCapt">
            <p>MR Digital adalah sebuah Studio Agency yang bergerak dibidang Web dan Mobile 
                Development dan Design. Lokasi di area Tangerang, Indonesia. </p>
            </div>
            <div class="lokasi mt-5">
                <img src="<?= get_bloginfo('stylesheet_directory') ?>/asset/img/lokasi.png" alt="">
                <p>Jn Lorem Ipsum no 123, Tangerang 45678, Indonesia</p>
            </div>
            <p class="mt-5" style="font-size:20px; color:#065757;">Telusuri lokasi melalui map > </p>
        </div>
    </div>

<div class="teams mb-5">
<p class="mt-5 mb-5" style="text-align:center; font-size:25px;"> Our Team </p>

<div class="row">
    <div class="col-md-4">
        <div class="card mb-5">
            <img src="<?= get_bloginfo('stylesheet_directory') ?>/asset/img/toy1.png" alt="">
            <p><span>Safitri</span></p>
            <p>CEO</p>
        </div>
    </div>
    <div class="col-md-4">
    <div class="card">
            <img src="<?= get_bloginfo('stylesheet_directory') ?>/asset/img/toy2.png" alt="">
            <p><span>Fitri</span></p>
            <p>Product Manajer</p>
        </div>
    </div>
    <div class="col-md-4">
    <div class="card">
            <img src="<?= get_bloginfo('stylesheet_directory') ?>/asset/img/toy3.png" alt="">
            <p><span>Trisaf</span></p>
            <p>Mobile Developer</p>
        </div>
    </div>
</div>
<div class="row">
    <div class="col-md-4">
        <div class="card">
            <img src="<?= get_bloginfo('stylesheet_directory') ?>/asset/img/toy3.png" alt="">
            <p><span>Fitsa</span></p>
            <p>UI/UX Designer</p>
        </div>
    </div>
    <div class="col-md-4">
    <div class="card">
            <img src="<?= get_bloginfo('stylesheet_directory') ?>/asset/img/toy4.png" alt="">
            <p><span>Saf</span></p>
            <p>CTO</p>
        </div>
    </div>
    <div class="col-md-4">
    <div class="card">
            <img src="<?= get_bloginfo('stylesheet_directory') ?>/asset/img/toy1.png" alt="">
            <p><span>Fit</span></p>
            <p>Web Developer</p>
        </div>
    </div>
</div>

</div>

<div class="benefit">
<p class="mt-5 mb-3" style="text-align:center; font-size:25px;"> Keutungan yang di dapatkan </p>

<div class="row mb-5">
    <div class="col-md-6">
        <img class="imgBenefit" src="<?= get_bloginfo('stylesheet_directory') ?>/asset/img/Vector.png" alt="">
    </div>
    <div class="col-md-6">
        <div class="capt mt-5">
            <div class="img">
                <img src="<?= get_bloginfo('stylesheet_directory') ?>/asset/img/video.png" alt="">
            </div>
            <p style="margin-left:20px; margin-top:5px; font-size:20px">Video tutorial  dan slide</p>
        </div>
        <div class="capt mt-3">
            <div class="img">
                <img src="<?= get_bloginfo('stylesheet_directory') ?>/asset/img/mentor.png" alt="">
            </div>
            <p style="margin-left:20px; margin-top:5px; font-size:20px">Mentor berpengalaman</p>
        </div>
        <div class="capt mt-3">
            <div class="img">
                <img src="<?= get_bloginfo('stylesheet_directory') ?>/asset/img/harga.png" alt="">
            </div>
            <p style="margin-left:20px; margin-top:5px; font-size:20px">Harga terjangkau</p>
        </div>
        <div class="capt mt-3">
            <div class="img">
                <img src="<?= get_bloginfo('stylesheet_directory') ?>/asset/img/grup.png" alt="">
            </div>
            <p style="margin-left:20px; margin-top:5px; font-size:20px">Masuk grup komunitas</p>
        </div>
        <button class="btn mt-5">Lihat Disini</button>
    </div>
</div>
</div>

<div class="course mb-5">
<p style="text-align:center; font-size:25px;"> Pilih Produk atau Course </p>

<div class="row mt-5">
    <div class="col-md-4">
        <div class="card">
            <p>Pemula</p>
            <p style="font-size:13px">For experjash ajsbha KASUasj</p>
            <button class="btn mt-3">Pilih</button>
        </div>
    </div>
    <div class="col-md-4">
        <div class="card">
            <p>Menengah</p>
            <p style="font-size:13px">For experjash ajsbha KASUasj</p>
            <button class="btn mt-3">Pilih</button>
        </div>
    </div>
    <div class="col-md-4">
        <div class="card">
            <p>Expert</p>
            <p style="font-size:13px">For experjash ajsbha KASUasj</p>
            <button class="btn mt-3">Pilih</button>
        </div>
    </div>
</div>
</div>

<div class="blog mt-5 mb-5">
<p class="mt-5 mb-3" style="text-align:center; font-size:25px;"> Blog </p>
    <div class="row">

    <?php  
                        
    $query = new WP_Query([
        'post_per_page' => 3,
        'post_type' => 'post',
        'post_status' => 'publish'
    ]);

    if($query->have_posts()) {
        while($query->have_posts()) {
            $query->the_post(); ?>

        <div class="col-md-4">
            <div class="card">
            <div class="card-title mb-2">
                <p><a href="<?= the_permalink(); ?>"><?= the_title(); ?></a></p>
            </div>
               <p><?= substr(get_the_excerpt(), 0, 150) ?>... <a href="<?= the_permalink(); ?>">Lanjut Baca</a></p>
            </div>
        </div>
        <?php }
        }
    ?>
    </div>
</div>

</div>
<!-- End Container -->

<?= get_footer(); ?>

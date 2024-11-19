<!-- Spinner Start -->
<!-- <div id="spinner"
    class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
    <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
        <span class="sr-only">Loading...</span>
    </div>
</div> -->
<!-- Spinner End -->


<!-- Topbar Start -->
<div class="container-fluid bg-dark px-5 d-none d-lg-block">
    <div class="row gx-0 align-items-center" style="height: 45px; z-index: 999;position: relative;">
        <div class="col-lg-8 text-center text-lg-start mb-lg-0">
            <div class="d-flex flex-wrap">
                <a href="https://www.google.com/maps/place/Chikitsa+Clinic-+A+Complete+Mother+%26+Child+Clinic+(one+stop+solution+for+all+mother+and+Child+problems)/@30.7393252,76.7534205,17z/data=!3m1!4b1!4m6!3m5!1s0x390fedc004daea37:0xb355c1ac10a48207!8m2!3d30.7393206!4d76.7559954!16s%2Fg%2F11b6gfh6wy?entry=ttu&g_ep=EgoyMDI0MDgyMS4wIKXMDSoASAFQAw%3D%3D"
                    class="text-light me-4"><i class="fas fa-map-marker-alt me-2"></i>Find A
                    Location</a>
                <a href="tel:9915161048" class="text-light me-4"><i class="fas fa-phone-alt  me-2"></i>99151
                    61048
                </a>
                <a href="mailto:info@chikitsahospital.com" class="text-light me-0">
                    <i class="fas fa-envelope me-2"></i>info@chikitsahospital.com
                </a>
            </div>
        </div>
        <div class="col-lg-4 text-center text-lg-end">
            <div class="d-flex align-items-center justify-content-end">
                <a href="https://www.facebook.com/chikitsaclinics"
                    class="btn-center btn btn-light btn-square border rounded-circle nav-fill me-3"><i
                        class="btn-center fab fa-facebook-f"></i></a>
                <a class="btn btn-light btn-square border rounded-circle nav-fill me-3" href="tel:91-99151 61048">
                    <i class="btn-center fa-brands fa-whatsapp"></i></a>
                <a href="https://www.instagram.com/chikitsaclinics/"
                    class="btn-center btn btn-light btn-square border rounded-circle nav-fill me-3"><i
                        class="btn-center fab fa-instagram"></i></a>
                <a href="https://www.youtube.com/@chikitsaclinics"
                    class="btn-center btn btn-light btn-square border rounded-circle nav-fill me-0"><i
                        class="btn-center fa-brands fa-youtube"></i></a>
            </div>
        </div>
    </div>
</div>
<!-- Topbadr End -->


<!-- Navbar & Hero Start -->
<div class="container-fluid position-relative p-0">
    <nav class="navbar navbar-expand-lg navbar-light bg-white px-4 px-lg-5 py-3 py-lg-0">
        <a href="<?= site_url('/') ?>" class="navbar-brand p-0">
            <!-- <h1 class="text-primary m-0"><i class="fas fa-star-of-life me-3"></i>Terapia</h1> -->
            <img src="<?= base_url('assets/img/Chikitsa-logo.png') ?>" alt="Logo">
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
            <span class="fa fa-bars"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
            <div class="navbar-nav ms-auto py-0">
                <a href="<?= site_url('/') ?>"
                    class="nav-item nav-link <?= ($this->uri->segment(1) == '') ? 'active' : '' ?>">Home</a>
                <a href="<?= site_url('about') ?>"
                    class="nav-item nav-link <?= ($this->uri->segment(1) == 'about') ? 'active' : '' ?>">About</a>
                <a href="<?= site_url('blog') ?>"
                    class="nav-item nav-link <?= ($this->uri->segment(1) == 'blog') ? 'active' : '' ?>">Blog</a>
                <div class="nav-item dropdown">
                    <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Specialist</a>
                    <div class="dropdown-menu m-0">
                        <a href="<?= site_url('pediatrics') ?>" class="dropdown-item">Pediatrics</a>
                        <a href="<?= site_url('gynaecology') ?>" class="dropdown-item">Gynaecology</a>
                    </div>
                </div>
                <div class="nav-item dropdown">
                    <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Portfolio</a>
                    <div class="dropdown-menu m-0">
                        <a href="<?= site_url('DrShefaliPortfolio') ?>" class="dropdown-item">Dr. Shefali Portfolio</a>
                        <a href="<?= site_url('DrManuPortfolio') ?>" class="dropdown-item">Dr. Manu Portfolio</a>
                    </div>
                </div>
                <a href="<?= site_url('contact') ?>"
                    class="nav-item nav-link <?= ($this->uri->segment(1) == 'contact') ? 'active' : '' ?>">Contact
                    Us</a>
            </div>
            <a href="<?= site_url('appointment') ?>"
                class="btn btn-primary rounded-pill text-white py-2 px-4 flex-wrap flex-sm-shrink-0">Book
                Appointment</a>
        </div>
    </nav>
</div>
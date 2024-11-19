<?php
require_once('inc/head.php');
require_once('inc/header.php');
?>

<style>
  .section-title {
    text-align: center;
    margin-bottom: 50px;
    padding-top: 50px;
  }

  .mission-list li {
    font-size: 1.1rem;
    color: #34495e;
    padding-left: 1.5rem;
    position: relative;
    margin-bottom: 15px;
    line-height: 1.6;
  }

  .card {
    border: none;
    box-shadow: 0px 4px 20px rgba(0, 0, 0, 0.1);
    margin-bottom: 30px;
  }

  .card-img-top {
    width: 100%;
    height: 200px;
    object-fit: cover;
    border-radius: 10px;
  }

  .doctor-card .card-body {
    text-align: center;
    padding: 25px;
    background-color: #fff;
    border-radius: 10px;
    transition: 0.3s;
  }

  .doctor-card:hover .card-body {
    background-color: #f1f8ff;
    transform: translateY(-10px);
  }

  .doctor-img {
    border-radius: 50%;
    width: 150px;
    height: 150px;
    border: 5px solid #3498db;
    margin-bottom: 20px;
  }

  .doctor-info h4 {
    font-size: 1.3rem;
    font-weight: 600;
    color: #2c3e50;
  }

  .doctor-info p {
    color: #7f8c8d;
    font-size: 1rem;
    margin: 5px 0;
  }

  .container {
    max-width: 1200px;
  }

  .card-footer {
    border-top: none;
    background-color: #fff;
  }

  @media (max-width: 767px) {
    .doctor-img {
      width: 120px;
      height: 120px;
    }

    .section-title h1 {
      font-size: 2.2rem;
    }
  }
</style>



<div class="container py-5">
  <div class="section-title">
    <h1>About Us</h1>
    <p>Nurturing Mothers and Children Together</p>
  </div>

  <div class="row">
    <div class="col-md-12">
      <p>At Chikitsa - A Complete Mother & Child Care Clinic, we are dedicated to providing exceptional healthcare for
        women, mothers, and children at every stage of life. From adolescence to motherhood, we understand the unique
        needs of women and their growing families.</p>

      <h3>OUR MISSION:</h3>
      <p>Our mission is to create a warm and supportive environment where mothers & children feel comfortable, listened
        to, and empowered. We strive to deliver care that is:</p>

      <ul class="mission-list">
        <li><strong>Compassionate:</strong> We treat each patient with kindness and respect, building trusting
          relationships with both mothers and children.</li>
        <li><strong>Comprehensive:</strong> We offer a wide range of services to meet the evolving needs of mothers &
          children, including pregnancy care, deliveries, and pediatric services.</li>
        <li><strong>Expert & Ethical:</strong> Our team of highly qualified professionals provides treatment that is
          evidence-based and ethical with the best possible care.</li>
      </ul>

      <p>We believe that mothers and children thrive when they have access to quality health care and support. We are
        committed to partnering with you on your journey from 'Pre-conception to Parenthood and beyond', providing the
        guidance & resources you need to raise healthy and happy children.</p>


      <div class="row text-center d-flex justify-content-center pt-5">
        <h3 class="mb-5" >OUR DOCTORS</h3>
        <div class="col-md-6 col-lg-4 text-center">
          <div class="card doctor-card">
            <img src="<?= base_url() ?>assets/img/manusharma.webp" alt="Dr. Manu Sharma"
              class="card-img-top doctor-img mx-auto d-block">
            <div class="card-body">
              <h4 class="doctor-info">Dr. Manu Sharma</h4>
              <p>Consultant: Pediatrician & Neonatologist</p>
              <p>M.D(Pediatrics), Fellowship in Neonatology (IAP), PGPN(Boston, USA), IPPN (Europe)</p>
            </div>
          </div>
        </div>

        <div class="col-md-6 col-lg-4 text-center">
          <div class="card doctor-card">
            <img src="<?= base_url() ?>assets/img/drshefali.jpg" alt="Dr. Shefali Sharma"
              class="card-img-top doctor-img mx-auto d-block">
            <div class="card-body">
              <h4 class="doctor-info">Dr. Shefali Sharma</h4>
              <p>Consultant Obstetrician and Gynaecologist</p>
              <p>IVF Specialist & Laparoscopic Gynae Surgeon, M.D(Obstetrics & Gynaecology), DNB, FRM Fellowship in
                Reproductive Medicine/IVF</p>
            </div>
          </div>
        </div>
      </div>

    </div>
  </div>
</div>


<!-- Feature Start -->
<div class="container-fluid feature pb-5">
  <div class="container py-5">
    <div class="section-title mb-5 wow fadeInUp" data-wow-delay="0.1s">
      <div class="sub-style">
        <h4 class="sub-title px-3 mb-0">Why Choose Us</h4>
      </div>
      <h1 class="display-3 mb-4">Trusted Experts Delivering Compassionate, Personalized Care for You</h1>
      <p class="mb-0">At Chikitsa Clinic, we prioritize your health and well-being with expert care and personalized
        treatment plans. Our licensed therapists and verified doctors ensure top-notch services in pediatrics and
        gynecology. We offer a patient-centered approach, providing compassionate care tailored to your unique needs.
        With skilled specialists and a focus on comfort, we are committed to helping you lead a healthier, happier life.
      </p>
    </div>
    <div class="row g-4 justify-content-center">
      <div class="col-md-6 col-lg-4 col-xl-3 wow fadeInUp" data-wow-delay="0.1s">
        <div class="row-cols-1 feature-item p-4">
          <div class="col-12">
            <div class="feature-icon mb-4">
              <div class="p-3 d-inline-flex bg-white rounded">
                <i class="fas fa-diagnoses fa-4x text-primary"></i>
              </div>
            </div>
            <div class="feature-content d-flex flex-column">
              <h5 class="mb-4">Licensed Clinic</h5>
              <p class="mb-0">Trusted care from certified and experienced professionals.</p>
            </div>
          </div>
        </div>
      </div>
      <div class="col-md-6 col-lg-4 col-xl-3 wow fadeInUp" data-wow-delay="0.3s">
        <div class="row-cols-1 feature-item p-4">
          <div class="col-12">
            <div class="feature-icon mb-4">
              <div class="p-3 d-inline-flex bg-white rounded">
                <i class="fas fa-briefcase-medical fa-4x text-primary"></i>
              </div>
            </div>
            <div class="feature-content d-flex flex-column">
              <h5 class="mb-4">Personalized Treatment</h5>
              <p class="mb-0">
                Customized therapy plans designed to meet your unique health needs.</p>
            </div>
          </div>
        </div>
      </div>
      <div class="col-md-6 col-lg-4 col-xl-3 wow fadeInUp" data-wow-delay="0.5s">
        <div class="row-cols-1 feature-item p-4">
          <div class="col-12">
            <div class="feature-icon mb-4">
              <div class="p-3 d-inline-flex bg-white rounded">
                <i class="fas fa-hospital-user fa-4x text-primary"></i>
              </div>
            </div>
            <div class="feature-content d-flex flex-column">
              <h5 class="mb-4">Comprehensive Care</h5>
              <p class="mb-0">Offering a wide range of services for pediatric and gynecological needs.</p>
            </div>
          </div>
        </div>
      </div>
      <div class="col-md-6 col-lg-4 col-xl-3 wow fadeInUp" data-wow-delay="0.7s">
        <div class="row-cols-1 feature-item p-4">
          <div class="col-12">
            <div class="feature-icon mb-4">
              <div class="p-3 d-inline-flex bg-white rounded">
                <i class="fas fa-users fa-4x text-primary"></i>
              </div>
            </div>
            <div class="feature-content d-flex flex-column">
              <h5 class="mb-4">Experienced Team</h5>
              <p class="mb-0">Expert specialists dedicated to delivering top-quality care with personalized attention.
              </p>
            </div>
          </div>
        </div>
      </div>
      <div class="col-md-6 col-lg-4 col-xl-3 wow fadeInUp" data-wow-delay="0.1s">
        <div class="row-cols-1 feature-item p-4">
          <div class="col-12">
            <div class="feature-icon mb-4">
              <div class="p-3 d-inline-flex bg-white rounded">
                <i class="fas fa-spa fa-4x text-primary"></i>
              </div>
            </div>
            <div class="feature-content d-flex flex-column">
              <h5 class="mb-4">Patient Focused</h5>
              <p class="mb-0">Prioritizing your comfort and well-being every step of the way.</p>
            </div>
          </div>
        </div>
      </div>
      <div class="col-md-6 col-lg-4 col-xl-3 wow fadeInUp" data-wow-delay="0.3s">
        <div class="row-cols-1 feature-item p-4">
          <div class="col-12">
            <div class="feature-icon mb-4">
              <div class="p-3 d-inline-flex bg-white rounded">
                <i class="fas fa-heart fa-4x text-primary"></i>
              </div>
            </div>
            <div class="feature-content d-flex flex-column">
              <h5 class="mb-4">Caring Staff</h5>
              <p class="mb-0">Compassionate and supportive team dedicated to your comfort and well-being.</p>
            </div>
          </div>
        </div>
      </div>
      <div class="col-md-6 col-lg-4 col-xl-3 wow fadeInUp" data-wow-delay="0.5s">
        <div class="row-cols-1 feature-item p-4">
          <div class="col-12">
            <div class="feature-icon mb-4">
              <div class="p-3 d-inline-flex bg-white rounded">
                <i class="fab fa-pied-piper fa-4x text-primary"></i>
              </div>
            </div>
            <div class="feature-content d-flex flex-column">
              <h5 class="mb-4">Proven Results</h5>
              <p class="mb-0">Successful outcomes with a focus on long-term health improvement.</p>
            </div>
          </div>
        </div>
      </div>
      <div class="col-md-6 col-lg-4 col-xl-3 wow fadeInUp" data-wow-delay="0.7s">
        <div class="row-cols-1 feature-item p-4">
          <div class="col-12">
            <div class="feature-icon mb-4">
              <div class="p-3 d-inline-flex bg-white rounded">
                <i class="fas fa-user-md fa-4x text-primary"></i>
              </div>
            </div>
            <div class="feature-content d-flex flex-column">
              <h5 class="mb-4">Verified Doctors</h5>
              <p class="mb-0">Experienced and vetted medical professionals ensuring trusted care.</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- Feature End -->

<?php
require_once('inc/footer.php');
?>
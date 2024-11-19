<?php
require_once('inc/head.php');
require_once('inc/header.php');
?>

<!-- Carousel start -->
<div class="header-carousel owl-carousel" style="margin-top:-94px">
  <div class="header-carousel-item">
    <img src="<?= base_url() ?>assets/img/1.jpg" class="img-fluid w-100" alt="Image" />
    <div class="carousel-caption">
      <div class="carousel-caption-content p-3">
        <h1 class="display-1 text-capitalize text-white mb-4">
          ANTENATAL CARE
        </h1>
        <p class="mb-5 fs-5">
          Antenatal consideration gives a significant chance to work on maternal comprehension of care during and after
          pregnancy.
        </p>
        <a class="btn btn-primary rounded-pill text-white py-3 px-5" href="<?= site_url('appointment') ?>">Book
          Appointment</a>
      </div>
    </div>
  </div>

  <div class="header-carousel-item">
    <img src="<?= base_url() ?>assets/img/2.jpg" class="img-fluid w-100" alt="Image" />
    <div class="carousel-caption">
      <div class="carousel-caption-content p-3">
        <h1 class="display-1 text-capitalize text-white mb-4">
          INFERTILITY TREATMENT
        </h1>
        <p class="mb-5 fs-5 animated slideInDown">
          If you are battling with barrenness and need assistance getting pregnant, there are ripeness medicines that
          can assist with expanding your possibilities having a child.
        </p>
        <a class="btn btn-primary rounded-pill text-white py-3 px-5" href="<?= site_url('appointment') ?>">Book
          Appointment</a>
      </div>
    </div>
  </div>

  <div class="header-carousel-item">
    <img src="<?= base_url() ?>assets/img/5.jpg" class="img-fluid w-100" alt="Image" />
    <div class="carousel-caption">
      <div class="carousel-caption-content p-3">
        <h1 class="display-1 text-capitalize text-white mb-4">
          ALL GYNAECOLOGICAL PROBLEMS
        </h1>
        <p class="mb-5 fs-5 animated slideInDown">
          Common gynecological problems include: Cervical Dysplasia.
        </p>
        <a class="btn btn-primary rounded-pill text-white py-3 px-5" href="<?= site_url('appointment') ?>">Book
          Appointment</a>
      </div>
    </div>
  </div>

  <div class="header-carousel-item">
    <img src="<?= base_url() ?>assets/img/6.jpg" class="img-fluid w-100" alt="Image" />
    <div class="carousel-caption">
      <div class="carousel-caption-content p-3">
        <h1 class="display-1 text-capitalize text-white mb-4">
          HIGH RISK PREGNANCY MANAGEMENT
        </h1>
        <p class="mb-5 fs-5 animated slideInDown">
          Pregnancy can be considered as high risk, if there are potential complexities that could affect possibly you
          or your child, or both.
        </p>
        <a class="btn btn-primary rounded-pill text-white py-3 px-5" href="<?= site_url('appointment') ?>">Book
          Appointment</a>
      </div>
    </div>
  </div>

</div>
<!-- Carousel End -->

<!-- Blog Start -->
<div class="container-fluid blog py-5">
  <div class="container py-5">
    <div class="section-title mb-5 wow fadeInUp" data-wow-delay="0.1s">
      <div class="sub-style">
        <h4 class="sub-title px-3 mb-0">Our Blog</h4>
      </div>
      <h1 class="display-3 mb-4">
        Empowering Health, Nurturing Lives – Expert Care for Your Family’s Wellness.
      </h1>
      <p class="mb-0">
        At chikitsaclinics, our blog offers expert insights into pediatrics and gynecology, providing valuable
        information for parents and women’s health. From tips on child care and development to comprehensive advice on
        women’s reproductive health, our specialists share their knowledge to support well-being at every stage of life.
      </p>
    </div>
    <div class="row g-4 justify-content-center">
      <?php foreach (array_slice($latest, 0, 6) as $blog): ?>
        <div class="col-md-6 col-lg-6 col-xl-4 wow fadeInUp" data-wow-delay="0.1s">
          <div class="blog-item rounded">
            <div class="blog-img">
              <img style="height: 280px;" src="<?= base_url() ?>uploads/blog/<?= $blog['imgPath']; ?>"
                class="img-fluid w-100" alt="Image" />
            </div>
            <div class="blog-content p-4" style="border: 0.2px solid #e5e5e5;">
              <div class="d-flex justify-content-between mb-4">
                <p class="mb-0 text-muted">
                  <i class="fa fa-calendar-alt text-primary"></i>
                  <?= date('d M Y', strtotime($blog['date'])); ?>
                </p>
                <a href="#" class="text-muted"><span class="fa fa-comments text-primary"></span> 3 Comments</a>
              </div>
              <p style="height: 60px; overflow: hidden;" href="<?= base_url('' . $blog['slug']); ?>" class="h4">
                <?= $blog['title']; ?>
              </p>
              <p class="my-4"><?= substr($blog['msg'], 0, 255); ?>...</p>
              <a href="<?= base_url('' . $blog['slug']); ?>"
                class="btn btn-primary rounded-pill text-white py-2 px-4 mb-1">Read More</a>
            </div>
          </div>
        </div>
      <?php endforeach; ?>
    </div>
  </div>
</div>
<!-- Blog End -->


<!-- About Start -->
<div class="container-fluid about bg-light py-5">
  <div class="container py-5">
    <div class="row g-5 align-items-center">
      <div class="col-lg-5 wow fadeInLeft" data-wow-delay="0.2s">
        <div class="about-img pb-5 ps-5">
          <img src="<?= base_url() ?>assets/img/drshefali.jpg" class="img-fluid rounded w-100"
            style="object-fit: cover; height: 30rem;" alt="Image" />
          <div class="about-img-inner">
            <img src="<?= base_url() ?>assets/img/children.jpg" class="img-fluid rounded-circle w-100 h-100"
              alt="Image" />
          </div>
          <div class="about-experience">09 years experience</div>
        </div>
      </div>
      <div class="col-lg-7 wow fadeInRight" data-wow-delay="0.4s">
        <div class="section-title text-start mb-5">
          <h4 class="sub-title pe-3 mb-0">Dr. Shefali Sharma</h4>
          <h1 class="display-3 mb-4" style="font-size: 3rem;">Consultant -Obstetrics & Gynaecology</h1>
          <p class="mb-4">
            Dr. Shefali is a young and dynamic gynecologist and a fertility
            specialist with a rich clinical experience of over 9 years. Her
            blend of experience comes from Government Medical College,
            Chandigarh & Amritsar, and a fellowship degree from a reputed IVF
            institute in Chandigarh. Dr Shefali is highly professional as well
            as friendly. She has managed various high-risk.
          </p>
          <div class="mb-4">
            <p class="text-secondary">
              <i class="fa fa-check text-primary me-2"></i> Member : Federation
              of Obstetrics & Gynecology Societies of India (FOGSI)
            </p>
            <p class="text-secondary">
              <i class="fa fa-check text-primary me-2"></i> Member : Indian
              Fertility Society
            </p>
            <p class="text-secondary">
              <i class="fa fa-check text-primary me-2"></i> Registration :
              Punjab Medical Council
            </p>
          </div>
          <a href="<?= site_url('DrShefaliPortfolio') ?>"
            class="btn btn-primary rounded-pill text-white py-3 px-5">Learn More</a>
        </div>
      </div>
    </div>
    <div class="row g-5 mt-3 align-items-center">
      <div class="col-lg-7 wow fadeInRight" data-wow-delay="0.4s">
        <div class="section-title text-start mb-5">
          <h4 class="sub-title pe-3 mb-0">Dr. Manu Sharma</h4>
          <h1 class="display-3 mb-4" style="font-size: 3rem;">
            Consultant Pediatric (Ped), Neonatology
          </h1>
          <p class="mb-4">
            Dr. Manu Sharma (Child Specialist in Chandigarh) is known for
            offering excellent patient care. The doctor holds an experience of 8
            years and has extensive knowledge in the respective field of
            medicine. The doctor is an esteemed member of Indian Academy of
            Pediatrics (IAP), National Neonatology Forum (NNF) and this only
            adds to the credibility of the doctor.
          </p>
          <div class="mb-4">
            <p class="text-secondary">
              <i class="fa fa-check text-primary me-2"></i> Member : Indian
              Academy of Pediatrics
            </p>
            <p class="text-secondary">
              <i class="fa fa-check text-primary me-2"></i> Member : National
              Neonatology Forum
            </p>
            <p class="text-secondary">
              <i class="fa fa-check text-primary me-2"></i> Registration :
              Punjab Medical Council
            </p>
          </div>
          <a href="<?= site_url('DrManuPortfolio') ?>" class="btn btn-primary rounded-pill text-white py-3 px-5">Learn
            More</a>
        </div>
      </div>
      <div class="col-lg-5 wow fadeInLeft" data-wow-delay="0.2s">
        <div class="about-img pb-5 ps-5">
          <img src="<?= base_url() ?>assets/img/manusharma.webp" class="img-fluid rounded w-100"
            style="object-fit: cover; height: 30rem;" alt="Image" />
          <div class="about-img-inner">
            <img src="<?= base_url() ?>assets/img/children-2.jpg" class="img-fluid rounded-circle w-100 h-100"
              alt="Image" />
          </div>
          <div class="about-experience">08 years experience</div>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- About End -->


<!-- Book Appointment Start -->
<div class="container-fluid appointment py-5">
  <div class="container py-5">
    <div class="row g-5 align-items-center">
      <div class="col-lg-6 wow fadeInLeft" data-wow-delay="0.2">
        <div class="section-title text-start">
          <h4 class="sub-title pe-3 mb-0">Solutions & Specialist</h4>
          <h1 class="display-4 mb-4">Best Quality Services</h1>
          <p class="mb-4">
            Chikitsa Clinic provides top-tier care for mothers and children in
            Tricity (Chandigarh, Mohali, Panchkula) with expert services in
            Pediatrics, Gynecology, Neonatology, and Mother and Child Care. Our
            highly qualified professionals ensure exceptional clinical attention
            at every stage.
          </p>
          <div class="row g-4">
            <div class="col-sm-6">
              <div class="d-flex flex-column h-100">
                <div class="mb-4">
                  <h5 class="mb-3">
                    <i class="fa fa-check text-primary me-2"></i> Gynecology
                  </h5>
                  <p class="mb-0">
                    Gynecology is the medical field focused on the health of the
                    female reproductive system, including diagnosis, treatment,
                    and prevention of related conditions.
                  </p>
                </div>
                <div class="mb-4">
                  <h5 class="mb-3">
                    <i class="fa fa-check text-primary me-2"></i> Pediatrics
                  </h5>
                  <p class="mb-0">
                    Pediatrics is the branch of medicine dedicated to the health
                    and medical care of infants, children, and adolescents.
                  </p>
                </div>
                <div class="text-start mb-4">
                  <a href="<?= site_url('about') ?>" class="btn btn-primary rounded-pill text-white py-3 px-5">More
                    Details</a>
                </div>
              </div>
            </div>
            <div class="col-sm-6">
              <div class="video h-100">
                <img src="<?= base_url() ?>assets/img/ShefaliSharma.webp" class="img-fluid rounded w-100 h-100"
                  style="object-fit: cover; height: 98% !important;" alt="" />
                <button type="button" class="btn btn-play" data-bs-toggle="modal"
                  data-src="https://www.youtube.com/embed/X2YVEfDv5gY?si=JGi2kRBimBeXx-P8" data-bs-target="#videoModal">
                  <span></span>
                </button>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-lg-6 wow fadeInRight" data-wow-delay="0.4s">
        <div class="appointment-form rounded p-5">
          <p class="fs-4 text-uppercase text-primary">Get In Touch</p>
          <h1 class="display-5 mb-4">Get Appointment</h1>
          <form>
            <div class="row gy-3 gx-4">
              <div class="col-xl-6">
                <input type="text" class="form-control py-3 border-primary bg-transparent text-dark"
                  placeholder="First Name" />
              </div>
              <div class="col-xl-6">
                <input type="email" class="form-control py-3 border-primary bg-transparent text-dark"
                  placeholder="Email" />
              </div>
              <div class="col-xl-6">
                <input type="phone" class="form-control py-3 border-primary bg-transparent" placeholder="Phone" />
              </div>
              <div class="col-xl-6">
                <select class="form-select py-3 border-primary bg-transparent" aria-label="Default select example">
                  <option selected>Your Gender</option>
                  <option value="1">Male</option>
                  <option value="2">FeMale</option>
                  <option value="3">Others</option>
                </select>
              </div>
              <div class="col-xl-6">
                <input type="date" class="form-control border-primary bg-transparent" />
              </div>
              <div class="col-xl-6">
                <select class="form-select py-3 border-primary bg-transparent" aria-label="Default select example">
                  <option selected>Specialty</option>
                  <option value="1">Gynecology</option>
                  <option value="2">Pediatrics</option>
                </select>
              </div>
              <div class="col-12">
                <textarea class="form-control border-primary bg-transparent text-dark" name="text" id="area-text"
                  cols="30" rows="5" placeholder="Write Comments"></textarea>
              </div>
              <div class="col-12">
                <button type="button" class="btn btn-primary text-dark w-100 py-3 px-5">
                  SUBMIT NOW
                </button>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- Book Appointment End -->



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


<!-- Testimonial Start -->
<div class="container-fluid testimonial py-5 wow zoomInDown" data-wow-delay="0.1s">
  <div class="container py-5">
    <div class="section-title mb-5">
      <div class="sub-style">
        <h4 class="sub-title text-white px-3 mb-0">Testimonial</h4>
      </div>
      <h1 class="display-3 text-light mb-4">What Clients are Say</h1>
    </div>
    <div class="testimonial-carousel owl-carousel">
      <div class="testimonial-item">
        <div class="testimonial-inner p-5">
          <div class="testimonial-inner-img mb-4">
            <img src="<?= base_url() ?>assets/img/Testimonia.jpg" class="img-fluid rounded-circle" alt="" />
          </div>
          <p class="text-white fs-7">
            I would like to express my sincere appreciation for Dr. Manu and the
            exceptional care provided. Dr. Manu's dedication to patient care is
            truly commendable, and their expertise has made a significant
            positive impact on my health. The compassion and professionalism
            demonstrated consistently are a testament to their commitment to
            excellence. It is evident that Dr. Manu goes above and beyond to
            ensure the best outcomes for patients. I wish Dr. Manu continued
            success and fulfillment in their career. Thank you for everything
            you do!
          </p>
          <div class="text-center">
            <h5 class="mb-2" style="color: white; font-weight: bold">
              Amrinder Pal Singh
            </h5>
            <p class="mb-2 text-white-50">India</p>
            <div class="d-flex justify-content-center">
              <i class="fas fa-star text-secondary"></i>
              <i class="fas fa-star text-secondary"></i>
              <i class="fas fa-star text-secondary"></i>
              <i class="fas fa-star text-secondary"></i>
              <i class="fas fa-star text-secondary"></i>
            </div>
          </div>
        </div>
      </div>
      <div class="testimonial-item">
        <div class="testimonial-inner p-5">
          <div class="testimonial-inner-img mb-4">
            <img src="<?= base_url() ?>assets/img/Testimonia.jpg" class="img-fluid rounded-circle" alt="" />
          </div>
          <p class="text-white fs-7">
            Dr. Manu is not only a skilled physician but also a genuinely kind
            individual. Every visit to your office leaves us feeling safe and
            well-cared-for. Your compassionate approach and dedication make a
            significant difference, and we are truly grateful.
          </p>
          <div class="text-center">
            <h5 class="mb-2" style="color: white; font-weight: bold">
              Prem Maurya
            </h5>
            <p class="mb-2 text-white-50">India</p>
            <div class="d-flex justify-content-center">
              <i class="fas fa-star text-secondary"></i>
              <i class="fas fa-star text-secondary"></i>
              <i class="fas fa-star text-secondary"></i>
              <i class="fas fa-star text-secondary"></i>
              <i class="fas fa-star text-secondary"></i>
            </div>
          </div>
        </div>
      </div>
      <div class="testimonial-item">
        <div class="testimonial-inner p-5">
          <div class="testimonial-inner-img mb-4">
            <img src="<?= base_url() ?>assets/img/Testimonia.jpg" class="img-fluid rounded-circle" alt="" />
          </div>
          <p class="text-white fs-7">
            Thank you, Dr. Manu, for the exceptional care you’ve provided for my
            son. I understand that you extend the same level of dedication to
            all your patients, but I wanted to express my special gratitude for
            the attention and care you’ve given us. Your support means a lot,
            and I wish you continued success and good luck in all that you do.
          </p>
          <div class="text-center">
            <h5 class="mb-2" style="color: white; font-weight: bold">
              Aman Sidhu
            </h5>
            <p class="mb-2 text-white-50">India</p>
            <div class="d-flex justify-content-center">
              <i class="fas fa-star text-secondary"></i>
              <i class="fas fa-star text-secondary"></i>
              <i class="fas fa-star text-secondary"></i>
              <i class="fas fa-star text-secondary"></i>
              <i class="fas fa-star text-secondary"></i>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- Testimonial End -->


<!-- Modal Video -->
<div class="modal fade" id="videoModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content rounded-0">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Youtube Video</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <!-- 16:9 aspect ratio -->
        <div class="ratio ratio-16x9">
          <iframe class="embed-responsive-item" src="" id="video" allowfullscreen allowscriptaccess="always"
            allow="autoplay"></iframe>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- Book Appointment End -->


<style>
  .btn-primary:hover {
    background-color: #4b3d74;
    border-color: #4b3d74;
  }

  .btn-primary:hover {
    background-color: #4b3d74;
    border-color: #4b3d74;
  }

  .border-primary {
    border-color: #4b3d74 !important;
  }
</style>

<?php
require_once('inc/footer.php');
?>
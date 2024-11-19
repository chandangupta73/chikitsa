<?php
require_once('inc/head.php');
require_once('inc/header.php');
?>

<div class="banner-img">
    <img src="<?= base_url() ?>assets/img/book-appointment.png" alt="Banner Image" />
</div>

<!-- Book Appointment Start -->
<div class="container-fluid appointment py-5 my-5">
    <div class="container py-5">
        <div class="row align-items-center">
            <div class="row">
                <div class="col-md-12">
                    <div class="why-us">
                        <h3>Why Choose Us?</h3>
                        <p>We are committed to offering top-quality healthcare services in Gynecology and
                            Pediatrics. Here’s why you should trust us:</p>
                        <ul>
                            <li><strong>Expert Team:</strong> Our team includes highly experienced gynecologists and
                                pediatricians.</li>
                            <li><strong>Advanced Facilities:</strong> State-of-the-art equipment ensures the highest
                                quality of care.</li>
                            <li><strong>Comprehensive Services:</strong> From prenatal care to pediatric
                                specialties, we cover all stages of healthcare.</li>
                            <li><strong>Personalized Care:</strong> We design treatment plans tailored to individual
                                patient needs.</li>
                            <li><strong>24/7 Emergency Support:</strong> Round-the-clock availability for
                                emergencies and critical care.</li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 wow fadeInLeft" data-wow-delay="0.2">
                <div class="section-title text-start">
                    <h4 class="sub-title pe-3 mb-0">Solutions & Specialist</h4>
                    <h1 class="display-4 mb-4">Best Quality Services</h1>
                    <p class="mb-4">Chikitsa Clinic provides top-tier care for mothers and children in Tricity
                        (Chandigarh, Mohali, Panchkula) with expert services in Pediatrics, Gynecology, Neonatology,
                        and Mother and Child Care. Our highly qualified professionals ensure exceptional clinical
                        attention at every stage.</p>
                    <div class="row g-4">
                        <div class="col-sm-6">
                            <div class="d-flex flex-column h-100">
                                <div class="mb-4">
                                    <h5 class="mb-3"><i class="fa fa-check text-primary me-2"></i> Gynecology
                                    </h5>
                                    <p class="mb-0">Gynecology is the medical field focused on the health of the
                                        female reproductive system, including diagnosis, treatment, and prevention
                                        of related conditions.</p>
                                </div>
                                <div class="mb-4">
                                    <h5 class="mb-3"><i class="fa fa-check text-primary me-2"></i> Pediatrics
                                    </h5>
                                    <p class="mb-0">Pediatrics is the branch of medicine dedicated to the health and
                                        medical care of infants, children, and adolescents.</p>
                                </div>
                                <div class="text-start mb-4">
                                    <a href="#" class="btn btn-primary rounded-pill text-white py-3 px-5">More
                                        Details</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="video h-100">
                                <img src="<?= base_url() ?>assets/img/ShefaliSharma.webp"
                                    class="img-fluid rounded w-100 h-100"
                                    style="object-fit: cover; height: 98% !important;" alt="" />
                                <button type="button" class="btn btn-play" data-bs-toggle="modal"
                                    data-src="https://www.youtube.com/embed/X2YVEfDv5gY?si=JGi2kRBimBeXx-P8"
                                    data-bs-target="#videoModal">
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
                                <input type="text" class="form-control py-3 border-primary bg-transparent"
                                    placeholder="First Name">
                            </div>
                            <div class="col-xl-6">
                                <input type="email" class="form-control py-3 border-primary bg-transparent"
                                    placeholder="Email">
                            </div>
                            <div class="col-xl-6">
                                <input type="phone" class="form-control py-3 border-primary bg-transparent"
                                    placeholder="Phone">
                            </div>
                            <div class="col-xl-6">
                                <select class="form-select py-3 border-primary bg-transparent"
                                    aria-label="Default select example">
                                    <option selected>Your Gender</option>
                                    <option value="1">Male</option>
                                    <option value="2">FeMale</option>
                                    <option value="3">Others</option>
                                </select>
                            </div>
                            <div class="col-xl-6">
                                <input type="date" class="form-control border-primary bg-transparent">
                            </div>
                            <div class="col-xl-6">
                                <select class="form-select py-3 border-primary bg-transparent"
                                    aria-label="Default select example">
                                    <option selected>Specialty</option>
                                    <option value="1">Gynecology</option>
                                    <option value="2">Pediatrics</option>
                                </select>
                            </div>
                            <div class="col-12">
                                <textarea class="form-control border-primary bg-transparent" name="text" id="area-text"
                                    cols="30" rows="5" placeholder="Write Comments"></textarea>
                            </div>
                            <div class="col-12">
                                <button type="button" class="btn btn-primary w-100 py-3 px-5">SUBMIT
                                    NOW</button>
                            </div>
                        </div>
                    </form>
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

    .border-primary {
        border-color: #4b3d74 !important;
    }
</style>

<?php
require_once('inc/footer.php');
?>
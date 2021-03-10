<?php
	ini_set('display_errors', 'On');
	error_reporting(E_ALL);

    $config = include('../config/app.php');
    require '../vendor/autoload.php';
	require '../action/c-meeting.php';
?>

<!-- modal online schedule -->
<div class="modal modal--meeting fade" id="meetingSchedule" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="meetingScheduleLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered">
        <div class="modal-content border-0">
            <div class="border-bottom-0 pb-0 modal-header">
                <div class="color--blue pt-3">
                    <h5 class="fs-24 font-weight-bold modal-title">Jadwalkan Konsultasi <span class="text-capitalize modal-title__type">Online</span></h5>
                    <p>Jadwalkan konsultasi <span class="modal-title__type">online</span> dengan tim kami untuk demo software</p>
                </div>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true" class="color--blue">&times;</span>
                </button>
            </div>
            <form id="submit-email" action="#" method="post" enctype="multipart/form-data">
                <div class="position-relative overflow-hidden modal-body modal-body--meeting">

                    <input type="text" name="meeting_type" id="meeting_type" readonly hidden>

                    <div class="form-row">
                        <div class="col-md-6 mb-3">
                            <div class="modal-body__input">
                                <label for="" class="fs-12 d-block mb-1">Nama Anda</label>
                                <div class="position-relative input--icon">
                                    <picture>
                                        <source srcset="/img/icon/icon-profile-gray.svg">
                                        <img src="/img/icon/icon-profile-gray.png" alt="" class="img-fluid" height="20" loading="lazy">
                                    </picture>
                                    <picture>
                                        <source srcset="/img/icon/icon-profile.svg">
                                        <img src="/img/icon/icon-profile.png" alt="" class="img-fluid" height="20" loading="lazy">
                                    </picture>
                                    <input type="text" name="name" class="form-control m-h--40px border--blue color--blue" required>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 mb-3">
                            <div class="modal-body__input">
                                <label for="" class="fs-12 d-block mb-1">Nama Perusahaan</label>
                                <div class="position-relative input--icon">
                                    <picture>
                                        <source srcset="/img/icon/icon-company-gray.svg">
                                        <img src="/img/icon/icon-company-gray.png" alt="" class="img-fluid" height="20" loading="lazy">
                                    </picture>
                                    <picture>
                                        <source srcset="/img/icon/icon-company.svg">
                                        <img src="/img/icon/icon-company.png" alt="" class="img-fluid" height="20" loading="lazy">
                                    </picture>
                                    <input type="text" name="company" class="form-control m-h--40px border--blue color--blue" required>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="form-row">
                        <div class="col-md-4 mb-3">
                            <div class="modal-body__input">
                                <label for="" class="fs-12 d-block mb-1">Alamat Email</label>
                                <div class="position-relative input--icon">
                                    <picture>
                                        <source srcset="/img/icon/icon-email-gray.svg">
                                        <img src="/img/icon/icon-email-gray.png" alt="" class="img-fluid" height="20" loading="lazy">
                                    </picture>
                                    <picture>
                                        <source srcset="/img/icon/icon-email-blue.svg">
                                        <img src="/img/icon/icon-email-blue.png" alt="" class="img-fluid" height="20" loading="lazy">
                                    </picture>
                                    <input type="email" name="email" class="form-control m-h--40px border--blue color--blue" required>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 mb-3">
                            <div class="modal-body__input">
                                <label for="" class="fs-12 d-block mb-1">Nomor Telepon</label>
                                <div class="position-relative input--icon">
                                    <picture>
                                        <source srcset="/img/icon/icon-telephone-gray.svg">
                                        <img src="/img/icon/icon-telephone-gray.png" alt="" class="img-fluid" height="20" loading="lazy">
                                    </picture>
                                    <picture>
                                        <source srcset="/img/icon/icon-telephone.svg">
                                        <img src="/img/icon/icon-telephone.png" alt="" class="img-fluid" height="20" loading="lazy">
                                    </picture>
                                    <input type="tel" name="phone" class="form-control m-h--40px border--blue color--blue" onkeypress="return isNumberKey(event)" required>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 mb-3">
                            <div class="modal-body__input">
                                <label for="" class="fs-12 d-block mb-1">Departemen Anda</label>
                                <div class="position-relative input--icon">
                                    <picture>
                                        <source srcset="/img/icon/icon-department-gray.svg">
                                        <img src="/img/icon/icon-department-gray.png" alt="" class="img-fluid" height="20" loading="lazy">
                                    </picture>
                                    <picture>
                                        <source srcset="/img/icon/icon-department.svg">
                                        <img src="/img/icon/icon-department.png" alt="" class="img-fluid" height="20" loading="lazy">
                                    </picture>
                                    <input type="text" name="department" class="form-control m-h--40px border--blue color--blue" required>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="form-row modal-body__input">
                        <div class="col-12">
                            <label for="" class="color--gray fs-12 d-block mb-1">Tentukan Waktu</label>
                        </div>
                        <div class="mb-3 col col-lg-6">
                            <div class="form-row">
                                <div class="col">
                                    <div class="input--time-step position-relative">
                                        <input type="time" name="start_time" id="time_preffered_start" class="form-control m-h--40px border--blue color--blue" min="09:00" max="17:00" step="1800" value="09:00" required>                                
                                        <button type="button" class="btn bg--blue time-step time-step--up" data-button-type="up">
                                            <picture>
                                                <source srcset="/img/icon/icon-chevron-up.svg">
                                                <img src="/img/icon/icon-chevron-up.png" alt="" class="img-fluid" loading="lazy">
                                            </picture>
                                        </button>
                                        <button type="button" class="btn bg--blue time-step time-step--down" data-button-type="down">
                                            <picture>
                                                <source srcset="/img/icon/icon-chevron-down.svg">
                                                <img src="/img/icon/icon-chevron-down.png" alt="" class="img-fluid" loading="lazy">
                                            </picture>
                                        </button>
                                    </div>
                                </div>
                                <div class="col-auto px-0 align-self-center"><span>-</span></div>
                                <div class="col">
                                    <div class="input--time-step position-relative">
                                        <input type="time" name="end_time" id="time_preffered_end" class="form-control m-h--40px border--blue color--blue" min="09:00" max="17:00" step="1800" value="09:00" required>                                
                                        <button type="button" class="btn bg--blue time-step time-step--up" data-button-type="up">
                                            <picture>
                                                <source srcset="/img/icon/icon-chevron-up.svg">
                                                <img src="/img/icon/icon-chevron-up.png" alt="" class="img-fluid" loading="lazy">
                                            </picture>
                                        </button>
                                        <button type="button" class="btn bg--blue time-step time-step--down" data-button-type="down">
                                            <picture>
                                                <source srcset="/img/icon/icon-chevron-down.svg">
                                                <img src="/img/icon/icon-chevron-down.png" alt="" class="img-fluid" loading="lazy">
                                            </picture>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="mb-3 col-auto col-lg-3 align-self-center">
                            <p class="mb-0 pt-1 color--gray">WIB</p>
                        </div>
                    </div>

                    <div class="form-row">
                        <div class="col-12 mb--30px">
                            <div class="modal-body__input">
                                <label for="" class="color--gray fs-12 d-block mb-1">Pesan</label>
                                <textarea name="message" id="" rows="5" class="form-control border--blue color--blue" required></textarea>                        
                            </div>
                        </div>
                    </div>

                    <div class="form-row">
                        <div class="col-sm-12 text-center mb--30px">
                        <script src="https://www.google.com/recaptcha/api.js" async defer></script>
                        <div class="g-recaptcha" data-sitekey="<?= $config['site_key']?>" data-callback="enableBtn"></div>
                        </div>
                    </div>

                    <div class="form-row justify-content-center">
                        <div class="col-md-4 mb--40px">
                            <button type="submit" class="form-control m-h--40px btn btn--rounded bg--yellow" id="meeting-form-submit">Kirim</button>
                        </div>
                    </div>

                    <img src="/img/icon/icon-meeting-accent.png" alt="" class="img-fluid position-absolute meeting__accent" loading="lazy">
                    <img src="/img/icon/icon-meeting-accent.png" alt="" class="img-fluid position-absolute meeting__accent" loading="lazy">

                </div>
                <div class="modal-footer bg--blue pt-2 pb-1 justify-content-center text-white">
                    <div class="text-center">atau kirim email ke: <a href="mailto:sales@dokodemo-kerja.com" class="font-weight-bold text-white ml-2">sales@dokodemo-kerja.com</a></div>
                </div>
            </div>
        </form>
    </div>
</div>

<!-- modal success -->
<div class="modal modal--meeting fade" id="meetingScheduleSent" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="meetingScheduleSentLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered">
        <div class="modal-content border-0">
            <div class="border-bottom-0 pb-0 modal-header">
                <div class="mx-auto text-center color--blue pt-3">
                    <h5 class="fs-24 font-weight-bold modal-title">Thank You</h5>
                    <p>We have received your message.</p>
                </div>
                <button type="button" class="close position-absolute top-0 right-0 m-0" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true" class="color--blue">&times;</span>
                </button>
            </div>
            <div class="position-relative overflow-hidden modal-body modal-body--meeting">
                
                <div class="mb--40px">
                    <picture>
                        <source srcset="/img/icon/icon-meeting.svg">
                        <img src="/img/icon/icon-meeting.png" alt="" class="img-fluid d-block mx-auto" loading="lazy">
                    </picture>
                </div>

                <div class="form-row justify-content-center">
                    <div class="col-md-4 mb--40px">
                        <button class="form-control m-h--40px btn btn--rounded bg--yellow" data-dismiss="modal">Close</button>
                    </div>
                </div>

                <img src="/img/icon/icon-meeting-accent.png" alt="" class="img-fluid position-absolute meeting__accent" loading="lazy">
                <img src="/img/icon/icon-meeting-accent.png" alt="" class="img-fluid position-absolute meeting__accent" loading="lazy">

            </div>
            <div class="modal-footer bg--blue pt-1 pb-1 justify-content-center text-white"></div>
        </div>
    </div>
</div>
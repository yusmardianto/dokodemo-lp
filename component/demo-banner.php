<style>
.user-demo {
  background: url("/img/home/bg-user-demo.png") center/cover no-repeat;
  padding-top: 3rem;
  padding-bottom: 3rem;
}

.user-demo .btn-sign-up,
.user-demo .btn-sign-up:hover {
  color: white;
  display: block;
  line-height: 1;
  width: 250px;
  text-align: center;
  font-weight: normal;
  background: rgb(243, 177, 22);
  background: linear-gradient(rgb(255, 202, 19), rgb(238, 185, 3));
  padding: 1.2em 0 .9em;
  text-decoration: none;
  border-radius: 5px;
  letter-spacing: 1px;
  margin: 0 auto;
}

.user-demo .btn-try-demo {
  font-weight: bold !important;
  font-size: 20px;
}

@media (max-width: 1199.98px) {  
  .btn-try-demo {
    width: 170px;
    font-size: 14px;
  }
}

@media (max-width: 991.98px) {
  .user-demo {
    margin-top: 2rem !important;
  }
}

@media (max-width: 767.98px) {  
  .btn-try-demo,
  .btn-try-demo:hover {
    width: 160px;
    font-size: 13px;
  }
}
</style>

<section class="user-demo">
    <div class="container">
        <div class="row">
            <div class="offset-md-2 col-md-4 pb-4 pb-md-0">
                <p class="fs-27 text-white text-center text-md-left header-demo-text mb-0"><strong>Try the demo, Now!</strong></p>
                <span class="d-block text-white text-center text-md-left fs-18 header-subdemo-text">*No credit card required</span>
            </div>
            <div class="col-md-4">
                <a href="/demo" class="btn-sign-up btn-try-demo" id="btn-sign-up">Click Here</a>
            </div>
        </div>
    </div>
</section>
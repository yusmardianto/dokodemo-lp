<section>
    <button class="btn botFixedBtn" id="btnReqOnlineMeeting" type="button" aria-label="btnReqOnlineMeeting" data-toggle="collapse" href="#collapseExample" style="background: #ffcc13;">
        <i class="fa fa-chevron-up" style="font-size: medium; color: #fff;"></i>
    </button>
    <div class="collapse popUpBottom" id="collapseExample">
        <div class="card card-body" style="border: 3px solid lightgrey; max-height: 75vh; overflow-y: auto;">
            <div class=" text-center" style="padding: 1em;">
                <button type="button" class="close survey-close" data-toggle="collapse" href="#collapseExample" aria-label="Close" style="padding: 6px 12px;">
                    <span aria-hidden="true"><i class="fa fa-chevron-down" style="font-size: medium;"></i></span>
                </button>
                <h5 class="card-title"><b>SET UP AN <br> ONLINE MEETING</b></h5>
                <hr>
                <!-- <p class="card-text">If you're interested in a live demo, or if you have any question at all, please fill the form below</p> -->
                <form action="https://formspree.io/xnqqyjdg" method="POST">
                    <div class="form-group" style="text-align:left;">
                        <label for="clientName">Name</label>
                        <input type="text" class="form-control" name="clientName" id="clientName" placeholder="Enter your name">
                    </div>
                    <div class="form-group" style="text-align:left;">
                        <label for="clientEmail">Email</label>
                        <input type="email" class="form-control" name="clientEmail" required id="clientEmail" placeholder="Enter your email">
                    </div>
                    <div class="form-group" style="text-align:left;">
                        <label for="clientDate">Date</label>
                        <input type="date" class="form-control" name="clientDate" id="clientDate" placeholder="Enter your Date">
                    </div>
                    <div class="form-group" style="text-align:left;">
                        <label for="clientTime">Time</label>
                        <select class="form-control" name="clientTime" id="clientTime" placeholder="Select your time">
                            <option value="09.00">09.00</option>
                            <option value="10.00">10.00</option>
                            <option value="11.00">11.00</option>
                            <option value="12.00">12.00</option>
                            <option value="13.00">13.00</option>
                            <option value="14.00">14.00</option>
                            <option value="15.00">15.00</option>
                            <option value="16.00">16.00</option>
                            <option value="17.00">17.00</option>
                        </select>
                    </div>
                    <div class="form-group" style="text-align:left;">
                        <label for="clientMessage">Message</label>
                        <textarea class="form-control" name="clientMessage" id="clientMessage" rows="5" placeholder="Enter Your Message"></textarea>
                    </div>
                    <button type="submit" class="btn btn-primary" id="meet-online-btn">Send</button>
                </form>
            </div>
        </div>
    </div>    
</section>
<!-- end of req online meeting popup -->
<div class="sptb bg-blue" name="Booking">
    <div class="appointment-container grey-shade parallax py-1 " id="bookInspection" name="bookInspection">
        <div class="row">
            <div class="col-md-6 ml-md-5 pl-md-5">
                <div class="container">
                    <h1 class="display-4">
                        Tell us what you think about our services.
                    </h1>
                    <p class="lead">
                        Our online booking and seamless process
                        ensures a quick and hassle free
                        experience for all vehicle inspection
                        and maintenance we deed.
                    </p>
                </div>
                <div class="container mt-4">
                    <a href="#contactUs" class="btn btn-warning">
                        Contact us
                        <i class="fa fa-forward px-1" aria-hidden="true"></i>
                    </a>
                </div>

                <div class="container" style="margin-top: 50px">
                    <div class="row px-2 text-muted">
                        <h6 class="text-white col-5 mx-4 btn btn-outline-primary btn-outlined">
                            <i class="fa fa-phone px-1" aria-hidden="true"></i>
                            <a href="tel:+251-911-919-868" class="text-white px-1">+251-911-919-868</a>
                        </h6>

                        <h6 class="text-white col-5 mx-4 btn btn-outline-primary btn-outlined">
                            <i class="fa fa-at px-1" aria-hidden="true"></i>
                           <a href="https://gmail.com" class="text-white px-1"> broozera@gmail.com</a>
                        </h6>
                    </div>
                </div>
            </div>

            <div class="col-md-5 container text-center">
                <div class="col-md-10">
                    <div class="float-right">
                        <h5 class="mb-4">
                            Write your feedback here
                        </h5>

                        <form action="/feedback" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group">
                                <input required type="text" class="form-control" id="name" name="name" placeholder="your name">

                                @error('name')
                                <label class="alert alert-container text-sm text-white col-12" role="alert">
                                    {{ $message }}
                                </label>
                                @enderror
                            </div>

                            <div class="form-group">
                                <input type="tel" class="form-control" id="email" name="email" placeholder="your email">

                                @error('email')
                                <label class="alert alert-container text-sm text-white col-12" role="alert">
                                    {{ $message }}
                                </label>
                                @enderror
                            </div>

                            <div class="form-group">
                            <textarea required class="form-control" placeholder="Your feedback" id="message" name="message"></textarea>


                                @error('message')
                                <label class="alert alert-container text-sm text-white col-12" role="alert">
                                    {{ $message }}
                                </label>
                                @enderror
                            </div>

                            <div class="form-group">
                                <input required type="text" class="form-control" id="job" name="job" placeholder="your job">

                                @error('job')
                                <label class="alert alert-container text-sm text-white col-12" role="alert">
                                    {{ $message }}
                                </label>
                                @enderror
                            </div>

                            <div class="form-group">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" id="gridCheck" name="gridCheck">
                                    <label class="form-check-label" for="gridCheck">
                                        Share newsletter and other promotions with me
                                    </label>
                                </div>
                            </div>

                            <button  id="contactUs" type="submit" class="btn btn-secondary" style="width: 100%" id="Service">
                                Send feedback
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<style>
    .alert-container {
        background-color: #ee5a50;
        padding: 2px;
        text-align: left;
    }

</style>

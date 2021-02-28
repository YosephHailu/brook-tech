<div class="sptb  bg-blue" id="Booking" name="Booking">
    <div class="appointment-container grey-shade parallax py-1 " id="bookInspection" name="bookInspection">
        <div class="row">
            <div class="col-md-6 ml-md-5 pl-md-5 sptb">
                <div class="container">
                    <h1 class="display-4">
                        Inspect your vehicle in 10 minutes
                    </h1>
                    <p class="lead">
                        Our online booking and seamless process
                        ensures a quick and hassle free
                        experience for all vehicle inspection
                        and maintenance we deed.
                    </p>
                </div>
                {{-- <div class="container mt-4">
                    <a href="#contactUs" class="btn btn-warning">
                        Contact us
                        <i class="fa fa-forward px-1" aria-hidden="true"></i>
                    </a>
                </div> --}}

                <div class="container sptb" style="margin-top: 50px">
                    <div class="row pr-2 text-muted">
                        <h6 class="text-white col-5 mx-4 btn btn-outline-primary btn-outlined">
                            <i class="fa fa-phone px-1" aria-hidden="true"></i>
                            +251-911-919-868
                        </h6>

                        <h6 class="text-white col-5 mx-4 btn btn-outline-primary btn-outlined">
                            <i class="fa fa-at px-1" aria-hidden="true"></i>
                            broozera@gmail.com
                        </h6>
                    </div>
                </div>
            </div>

            <div class="col-md-5 container text-center">
                <div class="col-md-10">
                    <div class="float-right" id="appointmentFormContainer">
                        <h5 class="mb-4">
                            Schedule a vehicle inspection
                        </h5>

                        <form action="/appointment" method="POST" id="AppointmentForm" enctype="multipart/form-data">

                            @csrf
                            <div class="form-group">
                                <input type="text" class="form-control" id="name" name="name" placeholder="Enter your full name">

                                @error('name')
                                <label class="alert alert-container text-sm text-white col-12" role="alert">
                                    {{ $message }}
                                </label>
                                @enderror
                            </div>
                            <div class="form-group">
                                <input type="email" class="form-control" id="email" name="email" placeholder="Enter your email">

                                @error('email')
                                <label class="alert alert-container text-sm text-white col-12" role="alert">
                                    {{ $message }}
                                </label>
                                @enderror
                            </div>

                            <div class="form-group">
                                <input type="tel" class="form-control" id="phone" name="phone" placeholder="Enter your phone number">

                                @error('phone')
                                <label class="alert alert-container text-sm text-white col-12" role="alert">
                                    {{ $message }}
                                </label>
                                @enderror
                            </div>

                            <div class="form-group">
                                <input type="text" class="form-control" id="plate_no" name="plate_no" placeholder="Enter plate number">

                                @error('plate_no')
                                <label class="alert alert-container text-sm text-white col-12" role="alert">
                                    {{ $message }}
                                </label>
                                @enderror
                            </div>

                            <div class="form-group">
                                <input type="datetime-local" class="form-control" id="date" name="date" placeholder="Enter plate number">

                                @error('date')
                                <label class="alert alert-container text-sm text-white col-12" role="alert">
                                    {{ $message }}
                                </label>
                                @enderror
                            </div>

                            <div class="form-group">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" id="share" name="share">
                                    <label class="form-check-label" for="share">
                                        Share newsletter and other
                                        promotions with me
                                    </label>
                                </div>
                            </div>

                            <div id="appointmentFormErrorContainer">
                            </div>

                            <button type="submit" class="btn btn-secondary" id="inspectButton" style="width: 100%" id="Service">
                                Book inspection
                            </button>
                        </form>
                    </div>

                    <div id="appointmentFormSuccessContainer" class="sptb mt-4 p-4 sptb" style="display: none">
                        <div class="card-body sptb">
                            <div class="cat-item text-center">
                                <a href="business-list.html"></a>
                                <div class="cat-img category-svg">
                                    <i class="fa fa-envelope fa-3x mt-4 text-success"></i>
                                </div>
                                <div class="">
                                    <h5 class="">Appointment registered</h5>
                                </div>
                            </div>

                            Your appointment have been successfully registered, Please check your email for confirmation link and activate your booking in 24 hours
                        </div>
                        <div class="card-footer">
                            <button class="btn btn-secondary" type="button" onclick="showAppointmentForm()">Book another</button>
                        </div>
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


<script>
    let bookingErrors = [];
    $('#AppointmentForm').submit(function(evt) {
        $("#appointmentFormSuccessContainer").hide();
        $('#inspectButton').text("Loading..");
        evt.preventDefault();
        $('#appointmentFormErrorContainer').empty();
        let appointment = $('#AppointmentForm').serializeArray().map((v) => {
            return [v.name, v.value];
        })
        console.log(Object.fromEntries(appointment));
        $.post("{{url('appointment')}}", Object.fromEntries(appointment))
            .done(function(error) {
                $("#appointmentFormSuccessContainer").show();
                $('#appointmentFormContainer').hide();
                $('#inspectButton').text("Book inspection");
                $('#AppointmentForm')[0].reset();

            }).fail(function(error) {
                console.log('error', JSON.parse(error.responseText));
                let errors = JSON.parse(error.responseText)
                if (errors.errors) {
                    this.bookingErrors = errors.errors;
                }
                showAppointmentFormErrors(this.bookingErrors);
                $('#inspectButton').text("Book inspection");
                console.log('error', errors, this.bookingErrors);
            });
    });

    function showAppointmentFormErrors(errors) {
        var errorContents = "";

        for (const [key, value] of Object.entries(errors)) {
            errorContents += `<label class="alert alert-container text-sm text-white col-12" role="alert">
                                    ${value[0]}
                                </label>`;
        }

        $('#appointmentFormErrorContainer').append(errorContents);
    }

    function showAppointmentForm() {
        $('#appointmentFormContainer').show();
        $("#appointmentFormSuccessContainer").hide();

    }

</script>

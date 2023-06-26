<div class="container">
    <div class="row">
        <div class="information">
            <h1>Need More Information? <br /> Contact Us Today.</h1>
            <div class="col-md-6 form_left">
                <form action="{{ route('contact-us.store') }}" method="POST" class="needs-validation" novalidate>
                    @csrf
                    <div class="form-row">
                        <div class="col-md-6">
                            <input type="text" class="form-control" name="first_name" id="validationCustom01" placeholder="First name" required>
                            <div class="valid-feedback">
                                Looks good!
                            </div>
                        </div>
                        <div class="col-md-6">
                            <input type="text" class="form-control" name="last_name" id="validationCustom02" placeholder="Last name" required>
                            <div class="valid-feedback">
                                Looks good!
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="input-group">
                                <input type="text" class="form-control" name="email" id="validationCustomUsername" placeholder="Email Address" required>
                            </div>
                        </div>
                        <div class="col-md-2">
                            <div class="input-group">
                                <input type="text" class="form-control" name="city" id="validationCustom02" placeholder="City" required>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="input-group">
                                <input type="text" class="form-control" name="contact_number" id="validationCustom02" placeholder="Contact Number" required>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="input-group">
                                <input type="text" class="form-control" name="company_name" id="validationCustom02" placeholder="Company Name" required>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="input-group">
                                <input type="text" class="form-control" name="designation" id="validationCustom02" placeholder="Designation" required>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12 right">
                        <textarea placeholder="Your Message" name="message"></textarea>
                    </div>
                    <button type="button" placeholder="Your Message">Cancel</button>
                    <button type="submit" placeholder="Your Message">Submit</button>
                </form>
            </div>
            <div class="col-md-6 form_right">
                <img src="{{ asset('/') }}frontend/img/Rectangle 17.png" alt="image not found" />
            </div>
        </div>
    </div>
</div>
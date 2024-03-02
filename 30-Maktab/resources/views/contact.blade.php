<x-layouts.index>
    <x-slot:title>
        Buzga bog'lanish
    </x-slot:title>
    <!-- Contact Start -->
    <div class="container-fluid py-5">
        <div class="container py-5">
            <div class="text-center mb-5">
                <h5 class="text-primary text-uppercase mb-3" style="letter-spacing: 5px;">Contact</h5>
                <h1>Contact For Any Query</h1>
            </div>
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="contact-form bg-secondary rounded p-5">
                        <div id="success"></div>
                        <form {{ route('contact_create') }} method="POST">
                            @csrf
                            <div class="control-group">
                                <input name="name" type="text" class="form-control border-0 p-4" id="name"
                                    placeholder="Your Name" required="required"
                                    data-validation-required-message="Please enter your name" />
                                <p class="help-block text-danger"></p>
                            </div>
                            <div class="control-group">
                                <input name="email" type="email" class="form-control border-0 p-4" id="email"
                                    placeholder="Your Email" required="required"
                                    data-validation-required-message="Please enter your email" />
                                <p class="help-block text-danger"></p>
                            </div>
                            <div class="control-group">
                                <input name="subject" type="text" class="form-control border-0 p-4" id="subject"
                                    placeholder="Subject" required="required"
                                    data-validation-required-message="Please enter a subject" />
                                <p class="help-block text-danger"></p>
                            </div>
                            <div class="control-group">
                                <textarea name="message" class="form-control border-0 py-3 px-4" rows="5" id="message" placeholder="Message"
                                    required="required" data-validation-required-message="Please enter your message"></textarea>
                                <p class="help-block text-danger"></p>
                            </div>
                            <div class="text-center">
                                <button class="btn btn-primary py-3 px-5" type="submit"
                                    >Yubor</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Contact End -->
</x-layouts.index>

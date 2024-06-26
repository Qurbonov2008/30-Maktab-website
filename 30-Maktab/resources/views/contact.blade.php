<x-layouts.index>
    <x-slot:title>
        Bizga bog'lanish
    </x-slot:title>
    <!-- Contact Start -->
    <div class="container-fluid py-5">
        <div class="container py-5">
            <div class="text-center mb-5">
                <h5 class="text-primary text-uppercase mb-3" style="letter-spacing: 5px;">Bizga bog'lanish</h5>
                <h1>Bizga bog'lanish uchun form</h1>
            </div>
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="contact-form bg-secondary rounded p-5">
                        <div id="success"></div>
                        <form action="contact_create" method="POST">
                            @csrf
                            <div class="control-group">
                                <input name="name" type="text" class="form-control border-0 p-4" id="name"
                                    placeholder="Sizning ismingiz" required="required"
                                    data-validation-required-message="Please enter your name" />
                                <p class="help-block text-danger"></p>
                            </div>
                            <div class="control-group">
                                <input name="email" type="email" class="form-control border-0 p-4" id="email"
                                    placeholder="Sizning emailingiz" required="required"
                                    data-validation-required-message="Please enter your email" />
                                <p class="help-block text-danger"></p>
                            </div>
                            <div class="control-group">
                                <input name="subject" type="text" class="form-control border-0 p-4" id="subject"
                                    placeholder="Kaspingiz" required="required"
                                    data-validation-required-message="Please enter a subject" />
                                <p class="help-block text-danger"></p>
                            </div>
                            <div class="control-group">
                                <textarea name="message" class="form-control border-0 py-3 px-4" rows="5" id="message" placeholder="Izoh"
                                    required="required" data-validation-required-message="Please enter your message"></textarea>
                                <p class="help-block text-danger"></p>
                            </div>
                            <div class="text-center">
                                <button class="btn btn-primary py-3 px-5" type="submit">Yubor</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Contact End -->
</x-layouts.index>

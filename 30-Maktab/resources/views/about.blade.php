<x-layouts.index>
    <x-slot:title>
        Bagdod 30-maktab
    </x-slot:title>


    <!-- About Start -->
    <div class="container-fluid py-5">
        <div class="container py-5">
            <div class="row align-items-center">
                <div class="col-lg-5">
                    <img class="img-fluid rounded mb-4 mb-lg-0" src="img/about.jpg" alt>
                </div>
                <div class="col-lg-7">
                    <div class="text-left mb-4">
                        <h5 class="text-primary text-uppercase mb-3" style="letter-spacing: 5px;">Biz haqimizda</h5>
                        <h1>O'rganishning innovatsion usuli</h1>
                    </div>
                    <p>Agar siz dasturlash tilini bepul o'rganmoqchi bo'lsangiz
                        <span style="color: red">
                            w3schools </span> bepul sayitidan o'rganishingiz mumkin istalgan dasturlash tilini bepul
                        o'rganishingiz
                        mumkin misol uchun PHP , C++ , Pythone , Java kabi dasturlash tillari. Faqat u yerdagi barcha
                        ma'lumotlar ingiliz tilida bo'ladi. Shu sababli ingiliz tilini bilishingiz kerak.
                    </p>
                    <a href="https://www.google.com/search?q=w3schools&rlz=1C1JJTC_ruUZ1095UZ1095&oq=&gs_lcrp=EgZjaHJvbWUqBggBEEUYOzIGCAAQRRg5MgYIARBFGDsyBggCEEUYQDIMCAMQABhDGIAEGIoFMgwIBBAAGEMYgAQYigUyBggFEEUYPDIGCAYQRRg9MgYIBxBFGDzSAQgxNzAyajBqN6gCALACAA&sourceid=chrome&ie=UTF-8"
                        class="btn btn-primary py-md-2 px-md-4 font-weight-semi-bold mt-2">O'qish
                        uchun</a>
                </div>
            </div>
        </div>
    </div>
    <!-- About End -->

    <!-- Registration Start -->
    <div class="container-fluid bg-registration py-5" style="margin: 90px 0;">
        <div class="container py-5">
            <div class="row align-items-center">
                <div class="col-lg-7 mb-5 mb-lg-0">
                    <div class="mb-4">
                        <h5 class="text-primary text-uppercase mb-3" style="letter-spacing: 5px;">HAR QANDAY KURSLAR
                            KERAK</h5>
                    </div>
                    <p class="text-white">Unitmang! har qanday fan kelajakda kerak bo'ladi.</p>
                    <ul class="list-inline text-white m-0">
                        <li class="py-2"><i class="fa fa-check text-primary mr-3"></i>Men ular uchun qattiq mehnat
                            qilaman</li>
                        <li class="py-2"><i class="fa fa-check text-primary mr-3"></i>Shunga qaramay, bu juda
                            og'riqli</li>
                    </ul>
                </div>
                <div class="col-lg-5">
                    <div class="card border-0">
                        <div class="card-header bg-light text-center p-4">
                            <h1 class="m-0">Hozir roʻyxatdan oʻting</h1>
                        </div>
                        <div class="card-body rounded-bottom bg-primary p-5">
                            <form action="sign" method="POST">
                                @csrf
                                <div class="form-group">
                                    <input type="text" class="form-control border-0 p-4" name="name"
                                        placeholder="Sizning ismingiz" required="required"
                                        value="{{ old('name') }}" />
                                </div>
                                <div class="form-group">
                                    <select name="class" class="custom-select border-0 px-4" style="height: 47px;"
                                        value="{{ old('class') }}" required>
                                        <option selected>Sinifingizni tanlang</option required>
                                        <option value="5-A">5-A</option required>
                                        <option value="5-B">5-B</option required>
                                        <option value="6-A">6-A</option required>
                                        <option value="6-B">6-B</option required>
                                        <option value="7-A">7-A</option required>
                                        <option value="7-B">7-B</option required>
                                        <option value="8-A">8-A</option required>
                                        <option value="8-B">8-B</option required>
                                        <option value="9-A">9-A</option required>
                                        <option value="9-B">9-B</option required>

                                    </select>
                                </div>
                                <div class="form-group">
                                    <input type="email" class="form-control border-0 p-4" name="email"
                                        placeholder="Sizning emailingiz" required="required"
                                        value="{{ old('email') }}" />
                                </div>
                                <div class="form-group">
                                    <select name="subject" class="custom-select border-0 px-4" style="height: 47px;"
                                        value="{{ old('subject') }}" required>
                                        <option selected>Fanlani tanlang</option required>
                                        <option value="Matimatika">Matimatika</option required>
                                        <option value="Ingiliz tili">Inigliz tili</option required>
                                        <option value="Rus tili">Rus tili</option required>
                                        <option value="Ona tili">Ona tili</option required>
                                        <option value="Inform   atika">Informatika</option required>
                                        <option value="Adabuyot">Adabiyot</option required>

                                    </select>
                                </div>
                                <div>
                                    <button class="btn btn-dark btn-block border-0 py-3"
                                        type="submit">Jo'natish</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Registration End -->
</x-layouts.index>

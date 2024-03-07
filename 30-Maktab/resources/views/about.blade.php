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
                        <h5 class="text-primary text-uppercase mb-3" style="letter-spacing: 5px;">About Us</h5>
                        <h1>Innovative Way To Learn</h1>
                    </div>
                    <p>Aliquyam accusam clita nonumy ipsum sit sea clita
                        ipsum clita, ipsum dolores amet voluptua duo dolores
                        et sit ipsum rebum, sadipscing et erat eirmod diam
                        kasd labore clita est. Diam sanctus gubergren sit
                        rebum clita amet, sea est sea vero sed et.
                        Sadipscing labore tempor at sit dolor clita
                        consetetur diam. Diam ut diam tempor no et, lorem
                        dolore invidunt no nonumy stet ea labore, dolor
                        justo et sit gubergren diam sed sed no ipsum. Sit
                        tempor ut nonumy elitr dolores justo aliquyam ipsum
                        stet</p>
                    <a href class="btn btn-primary py-md-2 px-md-4 font-weight-semi-bold mt-2">Learn
                        More</a>
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
                            @if ($errors->any())
                                <div class="alert alert-danger">
                                    <ul>
                                        @foreach ($errors->all() as $error)
                                            <li>{{ $error }}</li>
                                        @endforeach
                                    </ul>
                                </div>
                            @endif
                            <form action="sign" method="POST">
                                @csrf
                                <div class="form-group">
                                    <input type="text" class="form-control border-0 p-4" name="name"
                                        placeholder="Your name" required="required" value="{{ old('name') }}" />
                                </div>
                                <div class="form-group">
                                    <input type="email" class="form-control border-0 p-4" name="email"
                                        placeholder="Your email" required="required" value="{{ old('email') }}" />
                                </div>
                                <div class="form-group">
                                    <select name="subject" class="custom-select border-0 px-4" style="height: 47px;"
                                        value="{{ old('subject') }}" required>
                                        <option selected>Fanlani tanlang</option required>
                                        <option value="Matimatika">Matimatika</option required>
                                        <option value="Ingiliz tili">Inigliz tili</option required>
                                        <option value="Rus tili">Rus tili</option required>
                                        <option value="Ona tili">Ona tili</option required>
                                        <option value="Informaatika">Informatika</option required>
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

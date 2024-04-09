<x-layouts.index>
    <x-slot:title>
        Bagdod 30-maktab
    </x-slot:title>

    <!-- Carousel Start -->
    <div class="container-fluid p-0 pb-5 mb-5">
        <div id="header-carousel" class="carousel slide carousel-fade" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#header-carousel" data-slide-to="0" class="active"></li>
                <li data-target="#header-carousel" data-slide-to="1"></li>
                <li data-target="#header-carousel" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner">
                <div class="carousel-item active" style="min-height: 300px;">
                    <img class="position-relative w-100" src="img/carousel-1.jpg"
                        style="min-height: 300px; object-fit: cover;">
                    <div class="carousel-caption d-flex align-items-center justify-content-center">
                        <div class="p-5" style="width: 100%; max-width: 900px;">
                            <h5 class="text-white text-uppercase mb-md-3">Eng yaxshi oline kurslar</h5>
                            <h1 class="display-3 text-white mb-md-4">
                                Sizning uyingizdan eng yaxshi ta'lim</h1>
                            <a href=""
                                class="btn btn-primary py-md-2 px-md-4 font-weight-semi-bold mt-2">Batafsil ma'lumot</a>
                        </div>
                    </div>
                </div>
                <div class="carousel-item" style="min-height: 300px;">
                    <img class="position-relative w-100" src="img/carousel-2.jpg"
                        style="min-height: 300px; object-fit: cover;">
                    <div class="carousel-caption d-flex align-items-center justify-content-center">
                        <div class="p-5" style="width: 100%; max-width: 900px;">
                            <h5 class="text-white text-uppercase mb-md-3">Eng yaxshi oline kurslar</h5>
                            <h1 class="display-3 text-white mb-md-4">Eng yaxshi onlayn ta'lim platformasi</h1>
                            <a href=""
                                class="btn btn-primary py-md-2 px-md-4 font-weight-semi-bold mt-2">Batafsil ma'lumot</a>
                        </div>
                    </div>
                </div>
                <div class="carousel-item" style="min-height: 300px;">
                    <img class="position-relative w-100" src="img/carousel-3.jpg"
                        style="min-height: 300px; object-fit: cover;">
                    <div class="carousel-caption d-flex align-items-center justify-content-center">
                        <div class="p-5" style="width: 100%; max-width: 900px;">
                            <h5 class="text-white text-uppercase mb-md-3">Eng yaxshi oline kurslar</h5>
                            <h1 class="display-3 text-white mb-md-4">
                                Uydan o'rganishning yangi usuli</h1>
                            <a href=""
                                class="btn btn-primary py-md-2 px-md-4 font-weight-semi-bold mt-2">Batafsil ma'lumot</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Carousel End -->


    <!-- About Start -->
    <div class="container-fluid py-5">
        <div class="container py-5">
            <div class="row align-items-center">
                <div class="col-lg-5">
                    <img class="img-fluid rounded mb-4 mb-lg-0" src="img/about.jpg" alt="">
                </div>
                <div class="col-lg-7">
                    <div class="text-left mb-4">
                        <h5 class="text-primary text-uppercase mb-3" style="letter-spacing: 5px;">Biz haqimizda</h5>
                        <h1>O'rganishning innovatsion usuli</h1>
                    </div>
                    <p>Agar siz dasturlash tilini bepul o'rganmoqchi bo'lsangiz
                        w3schools bepul sayitidan o'rganishingiz mumkin istalgan dasturlash tilini bepul o'rganishingiz
                        mumkin misol uchun PHP , C++ , Pythone , Java kabi dasturlash tillari</p>
                    <a href="" class="btn btn-primary py-md-2 px-md-4 font-weight-semi-bold mt-2">O'qish
                        uchun</a>
                </div>
            </div>
        </div>
    </div>
    <!-- About End -->

    <!-- Courses Start -->

    <div class="container-fluid py-5">
        <div class="container py-5">
            <div class="text-center mb-5">
                <h5 class="text-primary text-uppercase mb-3" style="letter-spacing: 5px;">Kurslar</h5>
                <h1>Bizning mashhur kurslar</h1>
            </div>
            <div class="row">
                @foreach ($courses as $course)
                    <div class="col-lg-4 col-md-6 mb-4">
                        <div class="rounded overflow-hidden mb-2">
                            <img class="img-fluid" src="{{ $course['image'] }}" alt="">
                            <div class="bg-secondary p-4">
                                <div class="d-flex justify-content-between mb-3">
                                    <small class="m-0"><i
                                            class="far fa-clock text-primary mr-2"></i>{{ $course['time'] }}</small>
                                </div>
                                <a class="h5" href="">{{ $course['name'] }}</a>
                                <div class="border-top mt-4 pt-4">
                                    <div class="d-flex justify-content-between">
                                        <h5 class="m-0">{{ $course['money'] }}</h5>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
    <!-- Courses End -->


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
                            <form action="create_list" method="POST">
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
                                        <option value="Informaatika">Informatika</option required>
                                        <option value="Adabuyot">Adabiyot</option required>
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
                                        <option selected>Fanlarni tanlang</option required>
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
    <!-- Team Start -->
    <div class="container-fluid py-5">
        <div class="container pt-5 pb-3">
            <div class="text-center mb-5">
                <h5 class="text-primary text-uppercase mb-3" style="letter-spacing: 5px;">O'qituvchilar</h5>
                <h1>O'qituvchilar bilan tanishing</h1>
            </div>
            <div class="row">
                @foreach ($teachers as $teacher)
                    <div class="col-md-6 col-lg-3 text-center team mb-4">
                        <div class="team-item rounded overflow-hidden mb-2">
                            <div class="team-img position-relative">
                                <img class="img-fluid" src="{{ $teacher['image'] }}" alt="">
                                <div class="team-social">
                                    <a class="btn btn-outline-light btn-square mx-1" href="#"><i
                                            class="fab fa-twitter"></i></a>
                                    <a class="btn btn-outline-light btn-square mx-1" href="#"><i
                                            class="fab fa-facebook-f"></i></a>
                                    <a class="btn btn-outline-light btn-square mx-1" href="#"><i
                                            class="fab fa-linkedin-in"></i></a>
                                </div>
                            </div>
                            <div class="bg-secondary p-4">
                                <h5>{{ $teacher['full_name'] }}</h5>
                                <p class="m-0">{{ $teacher['job'] }}</p>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
    <!-- Team End -->
</x-layouts.index>

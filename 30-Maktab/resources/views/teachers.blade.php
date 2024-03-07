<x-layouts.index>
    <x-slot:title>
        Bagdod 30-maktab
    </x-slot:title>
    <!-- Team Start -->
    <div class="container-fluid py-5">
        <div class="container pt-5 pb-3">
            <div class="text-center mb-5">
                <h5 class="text-primary text-uppercase mb-3" style="letter-spacing: 5px;">O'qituvchilar</h5>
                <h1>Bizning o'qituvchilar</h1>
            </div>
            @foreach($teachers as $teacher)
            <div>
                <div class="col-md-6 col-lg-3 text-center team mb-4">
                    <div class="team-item rounded overflow-hidden mb-2">
                        <div class="team-img position-relative">
                            <img class="img-fluid" src="{{$teacher['image']}}" alt="">
                        </div>
                        <div class="bg-secondary p-4">
                            <h5>{{$teacher['name']}}</h5>
                            <p class="m-0">{{$teacher['profession']}}</p>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
    <!-- Team End -->


</x-layouts.index>

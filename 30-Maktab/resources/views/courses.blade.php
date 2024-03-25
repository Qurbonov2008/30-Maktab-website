 <x-layouts.index>
     <x-slot:title>
         ECOURSES - Online Courses HTML Template
     </x-slot:title>
     <!-- Category Start -->
     <div class="container-fluid py-5">
         <div class="container pt-5 pb-3">
             <div class="text-center mb-5">
                 <!-- Courses Start -->
                 <div class="container-fluid py-5">
                     <div class="container py-5">
                         <div class="text-center mb-5">
                             <h5 class="text-primary text-uppercase mb-3" style="letter-spacing: 5px;">Kurslar</h5>
                             <h1>Bizning eng mashhur kurslar</h1>
                         </div>
                         @foreach ($courses as $course)
                             <div>
                                 <div class="col-lg-4 col-md-6 mb-4">
                                     <div class="rounded overflow-hidden mb-2">
                                         <img class="img-fluid" src="{{ $course['image'] }}"
                                             alt="Bu yerda kursalar img bor edi">
                                         <div class="bg-secondary p-4">
                                             <div class="d-flex justify-content-between mb-3">
                                                 <small class="m-0"><i
                                                         class="far fa-clock text-primary mr-2"></i>{{ $course['time'] }}</small>
                                             </div>
                                             <a class="h5" href="">{{ $course['name'] }}</a>
                                             <div class="border-top mt-4 pt-4">
                                                 <div class="d-flex justify-content-between">
                                                     <h6 class="m-0"><i class="fa fa-star text-primary mr-2"></i>
                                                     </h6>
                                                     <h5 class="m-0">{{ $course['money'] }}</h5>
                                                 </div>
                                             </div>
                                         </div>
                                     </div>
                                 </div>
                             </div>
                     </div>
                     @endforeach
                 </div>

                 <!-- Courses End -->
 </x-layouts.index>

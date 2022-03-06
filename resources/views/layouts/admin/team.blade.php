@include('layouts.admin.head')
@include('layouts.admin.header')
<!--team section-->
<section class="team-section bg-gray section" id="team">
    <div class="container">
        <div class="section-title text-center">
            <h3>Our Expert
                <span>Doctors</span>
            </h3>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatem illo, rerum
                <br>natus nobis deleniti doloremque minima odit voluptatibus ipsam animi?</p>
        </div>
        <div class="row items-container clearfix">
        @foreach($doctors as $doctor)
             <div class="col-md-4 col-sm-6 col-xs-12">
                <div class="team-member">
                    <img src="{{$doctor->image_path}}" alt="doctor" class="img-responsive">
                    <div class="contents text-center">
                        <h4>{{$doctor->Name}}</h4>
                        <p>{{$doctor->description}}</p>
                        <a href="#" class="btn btn-main">read more</a>
                    </div>
                </div>
            </div>
        @endforeach
            {{-- <div class="col-md-4 col-sm-6 col-xs-12">
                <div class="team-member">
                    <img src="resources/admin/images/team/doctor-lab-3.jpg" alt="doctor" class="img-responsive">
                    <div class="contents text-center">
                        <h4>Dr. Marry Lou</h4>
                        <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Dignissimos, aspernatur.</p>
                        <a href="#" class="btn btn-main">read more</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-sm-6 col-xs-12">
                <div class="team-member">
                    <img src="resources/admin/images/team/event-2.jpg" alt="doctor" class="img-responsive">
                    <div class="contents text-center">
                        <h4>Dr. Sansa Stark</h4>
                        <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Dignissimos, aspernatur.</p>
                        <a href="#" class="btn btn-main">read more</a>
                    </div>
                </div>
            {{-- </div> --}}

        </div>

    </div>
</section>
<!--End team section-->
@include('layouts.admin.footer')

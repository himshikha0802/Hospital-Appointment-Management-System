@include('layouts.admin.head')
@include('layouts.admin.header')
<!-- Contact Section -->
<section class="appoinment-section section" id="contact">
    <div class="container">
        <div class="row">
            <div class="col-md-6 col-sm-12 col-xs-12">
                <div class="accordion-section">
    <div class="section-title">
        <h3>FAQ</h3>
    </div>
    <div class="accordion-holder">
        <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
            <div class="panel panel-default">
                <div class="panel-heading" role="tab" id="headingOne">
                    <h4 class="panel-title">
                        <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                            Why Should I choose Medical Health
                        </a>
                    </h4>
                </div>
                <div id="collapseOne" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
                    <div class="panel-body">
                        Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute,
                        non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor,
                        sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh
                        helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher
                        vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't
                        heard of them accusamus labore sustainable VHS.
                    </div>
                </div>
            </div>
            <div class="panel panel-default">
                <div class="panel-heading" role="tab" id="headingTwo">
                    <h4 class="panel-title">
                        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false"
                            aria-controls="collapseTwo">
                            What are the Centre’s visiting hours?
                        </a>
                    </h4>
                </div>
                <div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
                    <div class="panel-body">
                        Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute,
                        non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor,
                        sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh
                        helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher
                        vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't
                        heard of them accusamus labore sustainable VHS.
                    </div>
                </div>
            </div>
            <div class="panel panel-default">
                <div class="panel-heading" role="tab" id="headingThree">
                    <h4 class="panel-title">
                        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="false"
                            aria-controls="collapseThree">
                            How many visitors are allowed?
                        </a>
                    </h4>
                </div>
                <div id="collapseThree" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">
                    <div class="panel-body">
                        Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute,
                        non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor,
                        sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh
                        helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher
                        vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't
                        heard of them accusamus labore sustainable VHS.
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
            </div>
            <div class="col-md-6 col-sm-12 col-xs-12" id="appointment">
                <div class="contact-area">
            <div class="section-title">
            <h3>Request
            <span>Appointment</span>
            </h3>
            </div>
            <form name="contact_form" class="default-form contact-form" action="{{route('appointment')}}" method="post">
            @csrf
            <div class="row">
            <div class="col-md-6 col-sm-12 col-xs-12">
                <div class="form-group">
                    <input type="text" name="Name" placeholder="Name" required="">
                </div>
                <div class="form-group">
                    <input type="email" name="Email" placeholder="Email" required="">
                </div>
                <div class="form-group">
                    <select name="subject">
                        <option>Departments</option>
                        <option>Diagnostic</option>
                        <option>Psychological</option>
                    </select>
                </div>
            </div>
            <div class="col-md-6 col-sm-12 col-xs-12">
                <div class="form-group">
                    <input type="text" name="Phone" placeholder="Phone" required="">
                </div>
                <div class="form-group">
                    <input type="text" name="Date" placeholder="Date" required="" id="datepicker">
                    <i class="fa fa-calendar" aria-hidden="true"></i>
                </div>
                <div class="form-group">
                    <select name="Category">
                        <option>Doctor</option>
                        <option>Diagnostic</option>
                        <option>Psychological</option>
                    </select>
                </div>
            </div>
            <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="form-group">
                    <textarea name="form_message" placeholder="Your Message" required=""></textarea>
                </div>
                <div class="form-group text-center">
                    <button type="submit" class="btn-style-one">submit now</button>
                </div>
                @if(session('msg'))
                <div class="form-group has-feedback" style="margin-top:20px">
                  <span class="alert alert-success mt-2">{{session('msg')}}</span>
                </div>
                @endif
                @if($errors->any())
                <div class="form-group has-feedback" style="margin-top:20px">
                  <span class="alert alert-success mt-2">{{$errors->first('msg')}}</span>
                </div>
                @endif
            </div>
            </div>
            </form>
            </div>
            </div>
            </div>



        </div>
    </section>
<!-- End Contact Section -->
@include('layouts.admin.footer')

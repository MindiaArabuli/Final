<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Services</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

        <!-- Styles -->
        <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
        <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
        <link href="{{ asset('css/style.css') }}" rel="stylesheet" />
        <title>Services</title>
    </head>
    <body class="anim">
 

   
        <div class="contact" id="contact">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-xl-10 offset-xl-1 col-lg-12 col-md-12 col-12">
                        <div id="map" class="contact__map"></div>
                    </div>
                </div>
                <div class="row mtminus">
                    <div class="col-10 offset-1 col-xl-8 offset-xl-2">
                        <div class="row">
                            <div class="col-12 col-xl-7 order-xl-2 contact__1">
                                <div class="contact__form">
                                    <div class="contact__title">GET IN TOUCH</div>
                                    {!!  Form::open(array('action' => 'MainController@store','method' => 'POST','name' => 'contact-form','id'=>'contactForm')) !!}
                                        <div class="row">
                                            <div class="col-12 col-md-6">
                                                {{Form::text('name','',['class'=> 'contact__input','placeholder'=>'name'])}}
                                                {{Form::text('email','',['class'=> 'contact__input','placeholder'=>'emali'])}}
                                                {{Form::text('subject','',['class'=> 'contact__input','placeholder'=>'subject'])}}
                                                {{Form::textarea('text', null, ['class' => 'contact__input contact__textarea','placeholder'=>'text' ]) }} 
                                          
                                            </div>
                                            <div class="col-12 col-md-6 d-flex flex-column justify-content-between">
                                                <div class="contact__radio">
                                                    <span>
                                                       
                                                        {{ Form::radio('gender', 'male',['class' => 'contact__radio-item','id' => 'male']) }}
                                                        {{ Form::label('male','Male',['class' => 'contact__radio-label'])}}
                                                    </span>
                                                    <span>
                                                       
                                                        {{ Form::radio('gender', 'female',['class' => 'contact__radio-item','id' => 'female']) }}
                                                        {{Form::label('female','Female',['class' => 'contact__radio-label'])}}
                                                    </span>
                                                </div>
                                                </div>
                                            </div>
                                            <div class="col-12 text-sm-right">
                                                {{Form::submit('send',['class'=>'contact__submit'])}} 
                                            
                                            </div>
                                            <label class="d-block w-100 success" id="formSuccess"></label>
                                        </div>
                                    {!! Form::close() !!}
                                    </form>
                                </div>
                            </div>
                            <div class="col-12 col-xl-5 order-xl-1 contact__2">
                                <div class="social">
                                    <div class="social__title">
                                        CONTACT INFROMATION
                                    </div>
                                    <div class="social__footer">
                                        <div class="social__click">click to view</div>
                                        <div class="social__items">
                                              
                                            <a href="" target="_blank" class="social__link"><img src="{{ asset('images/icons/google.png') }}" alt="Social"></a>
                                            <a href="" target="_blank" class="social__link"><img src="{{ asset('images/icons/facebook.png') }}" alt="Social"></a>
                                            <a href="" target="_blank" class="social__link"><img src="{{ asset('images/icons/twitter.png') }}" alt="Social"></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                

                    </div>
                </div>
            </div>
        </div>
        <!-- Scripts -->
        <script src="{{ asset('js/jquery-3.3.1.min.js') }}"></script>
        <script src="https://cdn.jsdelivr.net/jquery.validation/1.15.1/jquery.validate.min.js"></script>
        <script src="{{ asset('js/bootstrap.min.js') }}"></script>
        <!-- Google maps -->
        <script>
            var map;
            function initMap() {
                map = new google.maps.Map(document.getElementById('map'), {
                    center: {lat: 41.726719, lng: 44.767947},
                    zoom: 15
                });
            }
        </script>
        <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBRr8H0ovA_dSw0WpMn7QYttBFMkcD3hQM&callback=initMap"
            async defer></script>
    </body>
</html>

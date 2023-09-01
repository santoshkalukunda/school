<div class="top-bar d-none d-md-block">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-8">
                <div class="top-bar-left">
                    <div class="text">
                        <i class="fa fa-phone-alt"></i>
                        <p>{{appSettings('phone')}}</p>
                    </div>
                    <div class="text">
                        <i class="fa fa-envelope"></i>
                        <p>{{appSettings('email')}}</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="top-bar-right">
                    <div class="social">
                        <a href="{{appSettings('twitter')}}"><i class="fab fa-twitter"></i></a>
                        <a href="{{appSettings('facebook')}}" target="_blank"><i class="fab fa-facebook-f"></i></a>
                        <a href="{{appSettings('tiktok')}}"><i class="bi bi-tiktok"></i></a>
                        <a href="{{appSettings('instagram')}}"><i class="fab fa-instagram"></i></a>
                        <a href="{{appSettings('youtube')}}"><i class="fab fa-youtube"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
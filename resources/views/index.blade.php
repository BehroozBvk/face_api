<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>تشخیص چهره</title>
    <link rel="icon" href="{{asset('Content/img/favicon.png')}}">
    <link href="{{asset('Content/bundle.css')}}" rel="stylesheet"/>
    <link href="{{asset('Content/Css/bundle.css')}}" rel="stylesheet"/>
    <link href="{{asset('Content/Css/rtl.css')}}" rel="stylesheet"/>
    <link href="{{asset('assets/plugins/toast-master/css/jquery.toast.css')}}" rel="stylesheet">

</head>
<body>
<div class="preloader">
    <div class="spinner">
        <div class="cube1"></div>
        <div class="cube2"></div>
    </div>
</div>
<header>
    <nav class="navbar navbar-default appy-menu" data-spy="appy-menu">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#main_menu"
                        aria-expanded="false"><span class="sr-only">Toggle navigation</span><span
                            class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span>
                </button>
                <a class='navbar-brand scroll-section' href='Index-2.html'><img src="{{asset('Content/img/logo.png')}}"
                                                                                class="img-responsive" alt=""></a></div>
            <div class="collapse navbar-collapse" id="main_menu">
                <ul class="nav navbar-nav navbar-right">
                    <li class="active"><a class="scroll-section" href="#home_banner">خانه</a></li>
                    <li><a class="scroll-section" href="#about">درباره ما</a></li>
                    <li><a class="scroll-section" href="#features">ویژگیها</a></li>
                    <li><a class="scroll-section" href="#screenshots">دمو</a></li>
                    <li><a class="scroll-section" href="#team">تیم</a></li>
                    <li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button"
                                            aria-haspopup="true" aria-expanded="false">وبلاگ <span class="caret"></span></a>
                        <ul class="dropdown-menu">
                            <li><a class="scroll-section" href="#recent-blog">آخرین مطالب</a></li>
                            <li><a href='Blog.html'>بلاگ</a></li>
                            <li><a href='SingleBlog.html'>جزییات مطلب</a></li>
                        </ul>
                    </li>
                    <li><a class="scroll-section" href="#contact">تماس با ما</a></li>
                </ul>
            </div>
        </div>
    </nav>
    <section id="home_banner" class="home-slide"
             style="background-image: url('Content/img/bg.jpg'); background-size: cover; background-position: 50% 50%;background-attachment: fixed;">
        <div class="overlay"></div>
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="mt-200"></div>
                    <h3>تشخیص چهره انلاین</h3>
                    <p>یک یا چند چهره انسان را در یک تصویر شناسایی کنید و مستقیما روبروی چهره ها در کنار چهره ها و ویژگی
                        های چهره ای که شامل پیش بینی های مبتنی بر یادگیری ماشین از ویژگی های چهره است، روبرو شوید. ویژگی
                        های ظاهری چهره در دسترس عبارتند از: سن، احساس، جنس، پوزش، لبخند، و موی صورت همراه با 27 نشانه
                        برای هر چهره در تصویر.</p><a class="btn btn-default" href="#"
                                                     role="button">بیشتر</a><a
                            class="btn btn-default" href="#" role="button">ویژگیها</a></div>
                <div class="col-md-6">
                    <div class="mt-40 hidden-sm hidden-xs"></div>
                    <img src="{{asset('Content/img/face.png')}}" class="img-responsive center-block " data-aos="fade-up"
                         alt=""></div>
            </div>
        </div>
    </section>
</header>
<div id="face-app">
    <section id="about" class="padding-100">
        <div class="container">
            <div class="row">
                <div class="col-md-4 text-center about-box" data-aos="fade-up" data-aos-delay="200"><img
                            src="{{asset('Content/img/icon-1.png')}}" class="img-responsive center-block" alt=""><h4>طراحی
                        منحصر به
                        فرد</h4>
                    <p>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم</p></div>
                <div class="col-md-4 text-center about-box" data-aos="fade-up" data-aos-delay="400"><img
                            src="{{asset('Content/img/icon-2.png')}}" class="img-responsive center-block" alt=""><h4>طراحی
                        منحصر به
                        فرد</h4>
                    <p>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم</p></div>
                <div class="col-md-4 text-center about-box" data-aos="fade-up" data-aos-delay="600"><img
                            src="{{asset('Content/img/icon-3.png')}}" class="img-responsive center-block" alt=""><h4>طراحی
                        منحصر به
                        فرد</h4>
                    <p>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم</p></div>
            </div>
        </div>
    </section>
    <section id="features" class="pt-100"
             style="background-image: url('Content/img/features-bg.jpg'); background-size: cover; background-position: 50% 50%;background-attachment: fixed;">
        <div class="overlay"></div>
        <div class="container">
            <div class="row">
                <div class="col-md-12 section-heade white text-center"><h3>ویژگیها</h3>
                    <div class="space-25"></div>
                    <div class="space-50"></div>
                </div>
                <div class="col-md-4 text-right">
                    <div class="features-wrapper right-icon">
                        <ul class="list-unstyled">
                            <li>
                                <div class="single-feature" data-aos="fade-right" data-aos-delay="200">
                                    <div class="features-icon"><img src="{{asset('Content/img/icon-4.png')}}"
                                                                    class="img-responsive"
                                                                    alt=""></div>
                                    <div class="features-details"><h5>لورم ایپسوم</h5>
                                        <p>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم.</p></div>
                                </div>
                                <div class="clearfix"></div>
                            </li>
                            <li>
                                <div class="single-feature" data-aos="fade-right" data-aos-delay="400">
                                    <div class="features-icon"><img src="{{asset('Content/img/icon-5.png')}}"
                                                                    class="img-responsive"
                                                                    alt=""></div>
                                    <div class="features-details"><h5>لورم ایپسوم</h5>
                                        <p>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم.</p></div>
                                </div>
                                <div class="clearfix"></div>
                            </li>
                            <li>
                                <div class="single-feature" data-aos="fade-right" data-aos-delay="600">
                                    <div class="features-icon"><img src="{{asset('Content/img/icon-6.png')}}"
                                                                    class="img-responsive"
                                                                    alt=""></div>
                                    <div class="features-details"><h5>لورم ایپسوم</h5>
                                        <p>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم.</p></div>
                                </div>
                                <div class="clearfix"></div>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-4 text-center about-box hidden-sm hidden-xs" data-aos="fade-up"><img
                            src="{{asset('Content/img/features-mobile.png')}}" class="img-responsive center-block" alt="">
                </div>
                <div class="col-md-4 text-left about-box">
                    <div class="features-wrapper left-icon">
                        <ul class="list-unstyled">
                            <li>
                                <div class="single-feature" data-aos="fade-left" data-aos-delay="200">
                                    <div class="features-icon"><img src="{{asset('Content/img/icon-7.png')}}"
                                                                    class="img-responsive"
                                                                    alt=""></div>
                                    <div class="features-details"><h5>لورم ایپسوم</h5>
                                        <p>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم.</p></div>
                                </div>
                                <div class="clearfix"></div>
                            </li>
                            <li>
                                <div class="single-feature" data-aos="fade-left" data-aos-delay="400">
                                    <div class="features-icon"><img src="{{asset('Content/img/icon-8.png')}}"
                                                                    class="img-responsive"
                                                                    alt=""></div>
                                    <div class="features-details"><h5>لورم ایپسوم</h5>
                                        <p>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم.</p></div>
                                </div>
                                <div class="clearfix"></div>
                            </li>
                            <li>
                                <div class="single-feature" data-aos="fade-left" data-aos-delay="600">
                                    <div class="features-icon"><img src="{{asset('Content/img/icon-9.png')}}"
                                                                    class="img-responsive"
                                                                    alt=""></div>
                                    <div class="features-details"><h5>لورم ایپسوم</h5>
                                        <p>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم.</p></div>
                                </div>
                                <div class="clearfix"></div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id="screenshots" class="padding-100">
        <div class="container">
            <div class="row">
                <div class="col-md-12 section-heade text-center"><h3>دمو</h3>
                    <div class="space-25"></div>
                </div>

                <div class="col-md-12">
                    <div class="col-md-6">
                        <section id="subscribe" class="padding-50">
                            <div class="space-25"></div>
                            {{--<form action="{{route('face.detect')}}" method="post">--}}
                            {{--                            {{csrf_field()}}--}}
                            <div class="subcribe-form">
                                <input class="form-control img-url" required="required" name="urlImg" type="text" placeholder=" آدرس تصویر "
                                       required>
                                <button class="btn btn-default btn-img" type="submit">پردازش</button>
                            </div>

                            <p class="subcribe-form"><small> فرمت عکس باید <code>jpg,png,jpeg</code> باشد</small></p>

                            <div class="space-15"></div>

                            {{--<form action="{{route('face.detect')}}" method="post" enctype="multipart/form-data">--}}
                                                        {{csrf_field()}}
                            <div class="subcribe-form">
                                <input class="form-control img-upload" name="imgUpload" type="file"
                                       placeholder=" آدرس تصویر "
                                       required>
                                <button class="btn btn-default btn-upload" >انتخاب</button>
                            </div>
                            <div class="space-15"></div>
                            {{--</form>--}}
                        </section>
                        <div class="space-15"></div>

                    </div>
                    <div class="col-md-6">
                        <div class="demo-img-container">
                            <div class="loading img-rounded">
                                <img src="{{asset('assets\images\loading-icon.svg')}}" alt="">
                            </div>
                            <div class="demo-img-wrapper">
                                <img class="get-face img-thumbnail img-responsive" src="" alt="" role="presentation">
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-12 faces">
                    <div class="space-25"></div>

                    <div class="col-md-2 col-sm-6 text-center">
                        <img src="{{asset('assets/images/users/1.jpg')}}" class="img-responsive img-rounded" alt="">
                    </div>
                    <div class="col-md-2 col-sm-6 text-center">
                        <img src="{{asset('assets/images/users/2.jpg')}}" class="img-responsive img-rounded" alt="">
                    </div>
                    <div class="col-md-2 col-sm-6 text-center">
                        <img src="{{asset('assets/images/users/3.jpg')}}" class="img-responsive img-rounded" alt="">
                    </div>
                    <div class="col-md-2 col-sm-6 text-center">
                        <img src="{{asset('assets/images/users/4.jpg')}}" class="img-responsive img-rounded" alt="">
                    </div>
                    <div class="col-md-2 col-sm-6 text-center">
                        <img src="{{asset('assets/images/users/7.jpg')}}" class="img-responsive img-rounded" alt="">
                    </div>
                    <div class="col-md-2 col-sm-6 text-center">
                        <img src="{{asset('assets/images/users/8.jpg')}}" class="img-responsive img-rounded" alt="">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id="countup" class="padding-100"
             style="background-image: url('Content/img/statistics-bg.jpg'); background-size: cover; background-position: 50% 50%;background-attachment: fixed;">
        <div class="overlay"></div>
        <div class="container">
            <div class="row">
                <div class="col-md-12 section-heade white text-center"><h3>آمار</h3>
                    <div class="space-25"></div>
                    <p> لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم. <br>لورم ایپسوم متن ساختگی با تولید سادگی.</p>
                    <div class="space-50"></div>
                </div>
                <div class="col-md-3 col-sm-6 text-center">
                    <div class="countup-box" data-aos="fade-zoom-in"><img src="{{asset('Content/img/icon-10.png')}}"
                                                                          class="img-responsive center-block" alt="">
                        <div class="count-num"><span>16</span>هزار</div>
                        <div class="count-name">دانلود</div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6 text-center">
                    <div class="countup-box" data-aos="fade-zoom-in"><img src="{{asset('Content/img/icon-11.png')}}"
                                                                          class="img-responsive center-block" alt="">
                        <div class="count-num"><span>2500</span></div>
                        <div class="count-name">خط کد</div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6 text-center">
                    <div class="countup-box" data-aos="fade-zoom-in"><img src="{{asset('Content/img/icon-12.png')}}"
                                                                          class="img-responsive center-block" alt="">
                        <div class="count-num"><span>255</span></div>
                        <div class="count-name">فنجان قهوه</div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6 text-center">
                    <div class="countup-box" data-aos="fade-zoom-in"><img src="{{asset('Content/img/icon-13.png')}}"
                                                                          class="img-responsive center-block" alt="">
                        <div class="count-num"><span>1500</span></div>
                        <div class="count-name">اشتراک</div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id="subscribe" class="padding-100">
        <div class="container">
            <div class="row">
                <div class="col-md-6 section-heade"><h3>مشترک شوید</h3>
                    <p> لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم. <br>لورم ایپسوم متن ساختگی با تولید سادگی.</p></div>
                <div class="col-md-6 text-center">
                    <div class="space-25"></div>
                    <form action='#' method='post'><input type='hidden' name='form-name' value='form 2'/>
                        <div class="subcribe-form"><input class="form-control" name="email" id="email" type="email"
                                                          placeholder=" ایمیل شما " required>
                            <button class="btn btn-default" type="submit">ثبت</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
    <footer class="text-center"><p>طراحی و برنامه نویسی شده توسط بهروز ولیخانی</p></footer>
</div>

<script src="Scripts/jquery-3.1.1.min.js"></script>
<script src="Scripts/axios.min.js"></script>
<script src="js/vue.js"></script>
<script src="Scripts/bootstrap.rtl.min.js"></script>
<script src="Scripts/bundle.min.js"></script>
<script src="assets/plugins/toast-master/js/jquery.toast.js"></script>
<script src="Scripts/main.js"></script>

</body>
</html>
<!DOCTYPE html
    PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
    <title>The News Reporter</title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" type="text/css" href="{{ asset('frontend/assets/font/font-awesome.min.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ asset('frontend/assets/font/font.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ asset('frontend/assets/css/bootstrap.min.css') }}"
        media="screen" />
    <link rel="stylesheet" type="text/css" href="{{ asset('frontend/assets/css/style.css') }}" media="screen" />
    <link rel="stylesheet" type="text/css" href="{{ asset('frontend/assets/css/responsive.css') }}" media="screen" />
    <link rel="stylesheet" type="text/css" href="{{ asset('frontend/assets/css/jquery.bxslider.css') }}"
        media="screen" />
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>

<body>
    <div class="body_wrapper">
        <div class="center">
            <div class="header_area">
                <div class="logo floatleft"><a href="#"><img src="{{ asset('frontend/images/logo.png') }}"
                            alt="" /></a>
                </div>
                <div class="top_menu floatleft d-flex justify-content-center">
                    <ul>
                        <li><a href="https://wa.me/6285795290778">Contact us</a></li>
                        <li><a href="https://www.instagram.com/silviaa_sisill/">Follow Me</a></li>
                    </ul>
                </div>
                <div class="social_plus_search floatright">
                    <div class="social">
                    </div>
                    <br>
                    <div class="search">
                        <form action="{{ route('cari') }}" method="post" id="search_form">
                            @csrf
                            <input type="text" placeholder="Cari Berita" id="s" name="search" />
                            <input type="submit" id="searchform" />
                            <input type="hidden" value="post" name="post_type" />
                        </form>
                    </div>
                </div>
            </div>
            <div class="main_menu_area">
                <ul id="nav">

                    <ul id="nav">
                        @foreach ($kategories as $data)
                            <li>
                                <a href="{{ route('frontend.show', $data->slug) }}">{{ $data->nama_kategori }}</a>
                            </li>
                        @endforeach


                    </ul>
            </div>
            <div class="slider_area">
                <div class="slider">
                    <ul class="bxslider">
                        @foreach ($berita as $data)
                        <li>
                            <a href="{{ route('berita.show', $data->id) }}">
                                <img src="{{ asset($data->image()) }}" alt="" style="width: 100%; height: 300px" title="{{ $data->judul }}" />
                            </a>
                         </li>

                        @endforeach

                    </ul>
                </div>
            </div>
            {{-- <div class="content_area">
                <div class="main_content floatleft"> --}}
            <!-- <div class="left_coloum floatleft"> -->
            <div class="single_left_coloum_wrapper">
                <h2 class="title">Terbaru</h2>
                <div class="d-flex">
                    <div class="row">

                        @foreach ($berita as $data)
                        <div class="col-md-6 card">
                            <div class="d-flex">
                                <img src="{{ $data->image() }}" alt="" style="width: 250px; height: 200px;" class="img-responsive img-fluid" />
                                <div class="p-4">
                                    <h3 class="fs-4 text-center">{{ Str::limit($data->judul, 25, '...') }}</h3>
                                    <p>{!! Str::limit($data->isi, 20, '...') !!}</p>
                                    <a class="readmore" href="{{ route('berita.show', $data->id) }}">read more</a>
                                    <p>{{ \Carbon\Carbon::parse($data->created_at)->diffForHumans() }}</p>
                                </div>
                            </div>
                        </div>
                    @endforeach

                    </div>
                </div>

            </div>

            <div class="single_left_coloum_wrapper single_cat_left">
                <div class="footer_bottom_area">
                    <div class="copyright_text">
                        <p><b>Copyright &copy; 2022 The News Reporter Inc. All rights reserved | Design by
                                <a target="_blank" rel="nofollow"
                                    href="http://www.graphicsfuel.com/2045/10/wp-magazine-theme-template-psd/">Silvia</a></b>
                        </p>
                    </div>
                </div>
            </div>
            <!-- </div> -->

        </div>

        <script type="text/javascript" src="{{ asset('frontend/assets/js/jquery-min.js') }}"></script>
        <script type="text/javascript" src="{{ asset('frontend/assets/js/bootstrap.min.js') }}"></script>
        <script type="text/javascript" src="{{ asset('frontend/assets/js/jquery.bxslider.js') }}"></script>
        <script type="text/javascript" src="{{ asset('frontend/assets/js/selectnav.min.js') }}"></script>
        <script type="text/javascript">
            selectnav('nav', {
                label: '-Navigation-',
                nested: true,
                indent: '-'
            });
            selectnav('f_menu', {
                label: '-Navigation-',
                nested: true,
                indent: '-'
            });
            $('.bxslider').bxSlider({
                mode: 'fade',
                captions: true
            });
        </script>
</body>

</html>

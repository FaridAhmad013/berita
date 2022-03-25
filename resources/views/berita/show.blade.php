<!DOCTYPE html
    PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
    <title>The News Reporter</title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" type="text/css" href="{{ asset('frontend/assets/font/font-awesome.min.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ asset('frontend/assets/font/font.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ asset('frontend/assets/css/bootstrap.min.css') }}" media="screen" />
    <link rel="stylesheet" type="text/css" href="{{ asset('frontend/assets/css/style.css') }}" media="screen" />
    <link rel="stylesheet" type="text/css" href="{{ asset('frontend/assets/css/responsive.css') }}" media="screen" />
    <link rel="stylesheet" type="text/css" href="{{ asset('frontend/assets/css/jquery.bxslider.css') }}"
        media="screen" />
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">

</head>

<body class="bg-dark">
    <div class="body_wrapper">
        <div class="center">
            <div class="header_area">
                <div class="logo floatleft"><a href="#"><img src="{{ asset('frontend/images/logo.png') }}" alt="" /></a>
                </div>
                <div class="top_menu floatleft d-flex justify-content-center">
                    <ul>
                        <li><a href="https://wa.me/6285795290778">Contact us</a></li>
                        <li><a href="https://www.instagram.com/silviaa_sisill/">Follow Me</a></li>
                    </ul>
                </div>
            </div>
            <html>

            <div class="container mt-3">
                <div class="row">
                    <div class="col md-12">
                        <div class="card">

                            <div class="card-body">
                                <center>
                                    <label for="">
                                    </label>
                                    <h2 class="fs-1 fw-bold uppercase"><b>{{ $berita->judul }}</b></h2>
                                    <br>
                                    <img src="{{ $berita->image() }}" alt="" style="width:90%; height:500px;"
                                        alt="poto" class="img-responsive">


                                        <h3 class="lh-base text-left my-5">{!! $berita->isi !!}</h3>

                                </center>
                                <div class="my-5 fs-2">
                                    TAG
                                    @foreach ($berita->tags as $tag)
                                        <span class="badge rounded-pill bg-info text-dark">{{ $tag->nama }}</span>
                                    @endforeach
                                </div>

                                <div class="fs-2">
                                    nama penulis: {{ $berita->user->name }}
                                </div>


                                <div id="disqus_thread"></div>
                                <script>
                                    /**
                                     *  RECOMMENDED CONFIGURATION VARIABLES: EDIT AND UNCOMMENT THE SECTION BELOW TO INSERT DYNAMIC VALUES FROM YOUR PLATFORM OR CMS.
                                     *  LEARN WHY DEFINING THESE VARIABLES IS IMPORTANT: https://disqus.com/admin/universalcode/#configuration-variables    */
                                    /*
                                    var disqus_config = function () {
                                    this.page.url = PAGE_URL;  // Replace PAGE_URL with your page's canonical URL variable
                                    this.page.identifier = PAGE_IDENTIFIER; // Replace PAGE_IDENTIFIER with your page's unique identifier variable
                                    };
                                    */
                                    (function() { // DON'T EDIT BELOW THIS LINE
                                        var d = document,
                                            s = d.createElement('script');
                                        s.src = 'https://news-reporter.disqus.com/embed.js';
                                        s.setAttribute('data-timestamp', +new Date());
                                        (d.head || d.body).appendChild(s);
                                    })();
                                </script>
                                <noscript>Please enable JavaScript to view the <a
                                        href="https://disqus.com/?ref_noscript">comments powered by
                                        Disqus.</a></noscript>


                                <center><a class="btn btn-danger ml-2 fs-2"
                                        href="{{ route('frontend.index') }}">Kembali</a></center>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            </html>

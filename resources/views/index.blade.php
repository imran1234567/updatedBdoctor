@extends('layouts.master')

@section('title')
Home -Business Doctor
@endsection

@section('meta')
    <meta name="Description" content=""/>
    <meta name="Keywords" content=""/>
@endsection

@section('content')
    <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
        <!-- Wrapper for slides -->
        <div class="carousel-inner" role="listbox">
            <div class="item active">
                <img src="images/banner3.jpg" alt="..." class="img-responsive">
            </div>
            <div class="item">
                <img src="images/banner4.jpg" alt="..." class="img-responsive">
            </div>
            <div class="item">
                <img src="images/banner5.jpg" alt="..." class="img-responsive">
            </div>
        </div>

        <!-- Controls -->
        <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
            <img src="images/large_left.png" alt="">
            <span class="sr-only">Previous</span>
        </a>
        <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
            <img src="images/large_right.png" alt="">
            <span class="sr-only">Next</span>
        </a>
    </div>
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-6 pad-0">
                <div class="slider-caption pad-15">
                    <a href="{!! url('Who-We-Work-With') !!}"><p class="text-center ">Entrepreneurs, Investors and ARCs </p></a>
                </div>
            </div>
            <div class="col-md-6 pad-0">
                <div class="slider-caption gray pad-15">
                    <a href="{{ route('businesses.create') }}" class="text-purple"><p class="text-center">Get a Business Health Check</p> </a>
                </div>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
              <div class="section-gap">
                <h2 class="text-center text-bold heading">About Us</h2>
                 <p class="text-center about-content">Business Doctors is a team of professionals with varied backgrounds, but common goals.
                     The team brings extensive understanding of sectors, businesses, domestic and international models,
                     operations, team building, capital management and raise to list a few.
                 </p>
                   <p class="text-center pad-top-15 bottn-about"><a href="{!! url('About') !!}" class="btn btn-primary btn-lg btn-read-more">Read More</a></p>
              </div>
            </div>
        </div>
    </div>
@endsection


@section('testimonial-section')
      <div class="section-gap">
        <div class="container">
        <h2 class="text-white text-center testimonial-header heading">How We Work</h2>
        <div class="row center">
            <div class="col-md-4 col-sm-4 col-xs-12">
<div class="how-work">
                    <div class="business">
                        <span class="text-center"><img src="images/business.jpg" alt="" ></span>
                        <div class="count">1</div>
                    </div>
                <p class="s-size-12">Business and<br>
                    management mapping</p>
                      </div>
            </div>
            <div class="col-md-4 col-sm-4 col-xs-12">
<div class="how-work">
                <div class="business">
                    <span class="text-center"><img src="images/analysis.jpg" alt="" ></span>
                    <div class="count">2</div>
                </div>
                <p class="s-size-12">Analysis of internal<br>
                    and external matrices</p>
                    </div>
            </div>
            <div class="col-md-4 col-sm-4 col-xs-12">
<div class="how-work">
                <div class="business">
                    <span class="text-center"><img src="images/busplan.jpg" alt="" ></span>
                    <div class="count">3</div>
                </div>
                <p class="s-size-12">Define Strategic<br>
                    priorities &amp; business plan</p>
                    </div>
            </div>
            <div class="col-md-4 col-sm-4 col-xs-12">
<div class="how-work">
                <div class="business">
                    <span class="text-center"><img src="images/strategic.jpg" alt="" ></span>
                    <div class="count">4</div>
                </div>
                <p class="s-size-12">Implementation of<br>
                    plan and strategic priorities</p>
            </div>
            </div>
            <div class="col-md-4 col-sm-4 col-xs-12">
<div class="how-work">
                <div class="business">
                    <span class="text-center"><img src="images/reviews.jpg" alt="" ></span>
                    <div class="count">5</div>
                </div>
                <p class="s-size-12">Periodic reviews<br> with
                    on going value additions</p>
            </div>
            </div>
            <div class="col-md-4 col-sm-4 col-xs-12">
<div class="how-work">
                <div class="business">
                    <span class="text-center"><img src="images/self.jpg" alt="" ></span>
                    <div class="count">6</div>
                </div>
                <p class="s-size-12">Bringing <br>about
                    Self sustenance</p>
            </div>
            </div>
        </div>
        </div>
    </div>
@endsection

@section('testimonial-second')
<div class="business-dc">
  <div class="section-gap">
    <div class="container">
            <div class="row headline">
                <h2 class="heading">Business Doctors Advantage</h2>
            </div>

  <div class="row">
        <div class="col-md-4 col-xs-12 col-sm-4">
              <div class="doctor-box">
                  <div class="doctor-box-left"><span class="font1"><i class="fa fa-clock-o" aria-hidden="true"></i></span></div>

                  <div class="doctor-box-right">
                      <h5>Experience</h5>

                      <p>We bring decades of collective experience across sectors, business operations, structuring, fund raising, capital markets and overall value creation. This allows us to have a holistic view of&nbsp;a business from a macro as well micro perspective.</p>
                  </div>
              </div>
          </div>

          <div class="col-md-4 col-xs-12 col-sm-4">
              <div class="doctor-box">
                  <div class="doctor-box-left"><span class="font1"><i class="fa fa-venus-mars" aria-hidden="true"></i></span></div>

                  <div class="doctor-box-right">
                      <h5>Relationships</h5>

                      <p>Our deep-rooted network brings together relevant people needed to take a business to the next level. Bringing in experts from varied fields helps remove certain road blocks and move forward.</p>
                  </div>
              </div>
          </div>
          <!-- box start -->

          <div class="col-md-4 col-xs-12 col-sm-4">
              <div class="doctor-box">
                  <div class="doctor-box-left"><span class="font1"><i class="fa fa-gears" aria-hidden="true"></i></span></div>

                  <div class="doctor-box-right">
                      <h5>Implementation</h5>

                      <p>Unlike most consultants, we work with our portfolio companies to implement recommendations until we achieve stated objectives. Hands-on strategy helps better implementation, and gives entrepreneurs an edge.</p>
                  </div>
              </div>
          </div>
          <!-- box end --><!-- box start -->
  <!-- box end --></div>
  <div class="row">
          <div class="col-md-4 col-xs-12 col-md-offset-2 col-sm-4">
              <div class="doctor-box">
                  <div class="doctor-box-left"><span class="font1"><i class="fa fa-align-justify" aria-hidden="true"></i></span></div>

                  <div class="doctor-box-right">
                      <h5>Aligned interests</h5>

                      <p>Our model helps us achieve tremendous alignment of interest with the entrepreneur or the fund and hence providing adequate comfort within the teams for a long term association.</p>
                  </div>
              </div>
          </div>
          <!-- box end --><!-- box start -->

          <div class="col-md-4 col-xs-12 col-sm-4">
              <div class="doctor-box">
                  <div class="doctor-box-left"><span class="font1"><i class="fa fa-line-chart" aria-hidden="true"></i></span></div>

                  <div class="doctor-box-right">
                      <h5>Value Creation Fee</h5>

                      <p>Our unique model of business alignment makes sure that a&nbsp;large part of the remuneration is based on the value created in the company.</p>
                  </div>
              </div>
          </div>
        </div>
</div>
</div>
</div>
  <div class="section-gap">
    <div class="container-footer-capsul">
        <h2 class="text-center blog-content heading">Blog</h2>

        <div class="blog-list">
            <div class="container">
                <div class="row">
                  @foreach($posts as $post)
                    <div class="col-md-4 col-xs-12 conti-blog">
                <div class="blog-part">
                    <img src="{{ asset('images/'.$post->image) }}" alt="" class="img-responsive">
                          <h4><a href="">{{ $post->title }}</a></h4>
                          <p>{{ substr(strip_tags($post->body), 0, 200) }}{{ strlen($post->body) > 200 ? "..." : "" }}</p>
                    <div class="row social">
                        <div class="col-md-6">
                            <a href="{{ url('blog/'.$post->slug)}}">Read Full Story</a>
                        </div>
                        <div class="col-md-6">
                            <a href="https://www.facebook.com/sharer/sharer.php?u={{ urlencode(Request::fullUrl()) }}"
                               target="_blank">
                                <img src="{{ asset('images/facebook.png') }}" alt="">
                            </a>
                            <a href="https://twitter.com/intent/tweet?url={{ urlencode(Request::fullUrl()) }}"
                               target="_blank">
                                <img src="{{ asset('images/twitter.png') }}" alt="">
                            </a>
                            <a href="https://plus.google.com/share?url={{ urlencode(Request::fullUrl()) }}"
                               target="_blank">
                                <img src="{{ asset('images/google-plus.png') }}" alt="">
                            </a>
                        </div>
                    </div>
                </div>
                    </div>
                    @endforeach

                </div>
            </div>
            </div>
        </div>

    </div>
@endsection

@section('scripts')
    <script>
        var popupMeta = {
            width: 400,
            height: 400
        }
        $(document).on('click', '.social-share', function(event){
            event.preventDefault();

            var vPosition = Math.floor(($(window).width() - popupMeta.width) / 2),
                hPosition = Math.floor(($(window).height() - popupMeta.height) / 2);

            var url = $(this).attr('href');
            var popup = window.open(url, 'Social Share',
                'width='+popupMeta.width+',height='+popupMeta.height+
                ',left='+vpPsition+',top='+hPosition+
                ',location=0,menubar=0,toolbar=0,status=0,scrollbars=1,resizable=1');

            if (popup) {
                popup.focus();
                return false;
            }
        });
    </script>
    @endsection

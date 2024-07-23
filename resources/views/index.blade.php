@extends('layouts.app')

@section('title')
    Molaprise Careers
@endsection

@section('content')

     {{-- <div class="jumbotron">
        <div class="mx-auto align-middle jumbotron-content">
            <div>
              <h1 class="display-4 h1">Careers at Molaprise</h1>
              <form action="/userdashboard" method="get">
                <div class="input-group mb-3 w-50">
                  <input type="text" class="form-control" placeholder="Search Jobs" aria-label="Amount (rounded to the nearest dollar)" aria-describedby="basic-addon" name="search">
                  <div class="input-group-append">
                    <button class="input-group-text bg-info text-light" id="basic-addon" type="submit"><i class="fas fa-search"></i></button>
                  </div>
                </div>
              </form>  
          </div>
       </div>
    </div> --}}
    <section id="ins-page-title" class="ins-page-title title-align-center" style="height: 390px;"> 
        <div class="ins-page-title-wrapper" style="height: 1000px;">
            <div class="ins-page-title-bg" style="background-image: linear-gradient(to bottom, rgba(0, 0, 0, 0.5), rgba(0.0, 0.0, 0.0, 0.5)), url(/images/business-man-expanding-futuristic-virtual-screen-modern-tablet.jpeg); opacity: 1;"></div>
                    {{-- <div class="ins-page-title-bg" style="background-image: url(https://molaprise.com/wp-content/uploads/2019/04/emerson-page-title-2.jpg); opacity: 1;"></div> --}}
                    <div class="ins-page-title-inner" style="margin-top: 40px;">
                <div class="container">
                    <div class="ins-page-title-txt">
    
                        <h1 class="no-margin padding-5px-tb" style="color:#ffffff">Careers at Molaprise</h1>
    
                                        </div>
                    
                    <div class="ins-breadcrumbs-holder"><div id="ins-breadcrumbs" class="ins-breadcrumbs"><a href="https://molaprise.com">Home</a> <i class="fa fa-angle-right"></i> <span class="current">Careers at Molaprise</span></div></div>	            
                    {{-- <div class="mx-auto align-middle jumbotron-content"> --}}
                        <div>
                          {{-- <h1 class="display-4 h1">Careers at Molaprise</h1> --}}
                          {{-- <form action="/userdashboard" method="get" style="width:400px; margin: auto auto;" class="">
                            <div class="input-group mb-3 w-50">
                              <input type="text" class="form-control" placeholder="Search Jobs" aria-label="Amount (rounded to the nearest dollar)" aria-describedby="basic-addon" name="search">
                              <div class="input-group-append">
                                <button class="input-group-text bg-info text-light" id="basic-addon" type="submit"><i class="fas fa-search"></i></button>
                              </div>
                            </div>
                          </form>   --}}
                      </div>
                   {{-- </div> --}}

                </div>
            </div>
        </div>
    </section>
    <section id="BrowseCategories">
        <div class="container">
            <div class="ins-page-title-txt">
    
                {{-- <h1 class="no-margin padding-5px-tb" style="color:#ffffff">Careers at Molaprise</h1> --}}
                 <h2 class="h2 text-center no-margin padding-5px-tb">Browse Jobs By Category</h2>
                                </div>
           
            <h4 class="h4 text-center mb-5 text-muted"></h4>
            <div class="row mb-5">
                <div class="col-sm text-center hvr-grow"><a href="/userdashboard?cat=1">
                    <i class="fas fa-paint-brush fa-5x text-muted"></i><br><br>  
                   <h5 class="h5 text-muted"> Graphics &amp; Design</h5></a>
                </div>
                <div class="col-sm text-center hvr-grow"><a href="/userdashboard?cat=2">
                    <i class="fas fa-code fa-5x text-muted"></i><br>  <br>  
                    <h5 class="h5 text-muted">Programming &amp; Tech</h5></a> 
                </div>
                <div class="col-sm text-center hvr-grow"><a href="/userdashboard?cat=3">
                    <i class="far fa-chart-bar fa-5x text-muted"></i><br><br>  
                    <h5 class="h5 text-muted">Digital Marketing</h5></a>
                </div>
                <div class="col-sm text-center hvr-grow"><a href="/userdashboard?cat=4">
                    <i class="fas fa-pencil-alt fa-5x text-muted"></i><br><br>  
                    <h5 class="h5 text-muted"> Writing &amp; Translation</h5></a>
                </div>
            </div>
            <div class="row mb-5">
                <div class="col-sm text-center hvr-grow"><a href="/userdashboard?cat=5">
                    <i class="fas fa-video fa-5x text-muted"></i><br><br>  
                   <h5 class="h5 text-muted">Video &amp; Animation</h5></a>
                </div>
                <div class="col-sm text-center hvr-grow"><a href="/userdashboard?cat=6">
                    <i class="fas fa-keyboard fa-5x text-muted"></i><br>  <br>  
                    <h5 class="h5 text-muted">Admin Support</h5></a>
                </div>
                <div class="col-sm text-center hvr-grow"><a href="/userdashboard?cat=7">
                    <i class="fas fa-cog fa-5x text-muted"></i><br><br>  
                    <h5 class="h5 text-muted">Architecture &amp; Engineering</h5></a>
                </div>
                <div class="col-sm text-center hvr-grow"><a href="/userdashboard?cat=8">
                    <i class="fas fa-chart-pie fa-5x text-muted"></i><br><br>  
                    <h5 class="h5 text-muted">Management &amp; Finance</h5></a>
                </div>
            </div>
        </div>
    </section> 
    <section id="vectorimages" class="pt-1">
        <div class="col-sm">
           <h2 class="h2 mt-5">Why Freelancing?</h2>
           <p class="text-dark">Working from home is an ideal solution for balancing work and family or private life, during which you can successfully make for a living and support yourself and your family. Working from home and thereby carve out a comfortable life, it is fully possible. But, only if you are willing to work hard. The obvious advantages of such operations are often sufficient to lure professionals from the offices in the comfort of your home.</p>
        </div>
        <div class="col-sm">
            <img src="/storage/assets/freelancervector.jpg" class="img-fluid">
        </div>
    </section>
@endsection
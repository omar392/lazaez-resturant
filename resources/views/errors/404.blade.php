<!DOCTYPE html>
<html lang="ar">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width,initial-scale=1.0,minimum-scale=1.0,maximum-scale=1.0">
  <meta http-equiv="X-UA-compatible" content="IE-edge">
  <link rel="shortcut icon" href="{{asset('frontend/images/لوجو لذائذ.png')}}" />
  <link rel="icon" href="{{asset('frontend/images/لوجو لذائذ.png')}}" />
  <title>لذائذ واطياب</title>
  <!-- CSS only -->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.3/css/all.css" integrity="sha384-SZXxX4whJ79/gErwcOYf+zWLeJdY/qpuqC4cAa9rOGUstPomtqpuNWT9wdPEn2fk" crossorigin="anonymous">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <link href="https://blogfonts.com/css/aWQ9MTE2NDIyJnN1Yj00MjImYz1iJnR0Zj1CYWhpal9UaGVTYW5zQXJhYmljLVBsYWluLnR0ZiZuPWJhaGlqLXRoZXNhbnNhcmFiaWMtcGxhaW4/Bahij TheSansArabic Plain.ttf" rel="stylesheet" type="text/css"/>
  <link href="https://blogfonts.com/css/aWQ9NjQxOTEmc3ViPTE5MSZjPWImdHRmPUJhaGlqK1RoZVNhbnNBcmFiaWMtU2VtaUJvbGQudHRmJm49YmFoaWotdGhlc2Fuc2FyYWJpYy1zZW1pYm9sZA/Bahij TheSansArabic SemiBold.ttf" rel="stylesheet" type="text/css"/>
  <link href="https://blogfonts.com/css/aWQ9MTE2NDIwJnN1Yj00MjAmYz1iJnR0Zj1CYWhpal9UaGVTYW5zQXJhYmljLUV4dHJhTGlnaHQudHRmJm49YmFoaWotdGhlc2Fuc2FyYWJpYw/Bahij TheSansArabic.ttf" rel="stylesheet" type="text/css"/>
  <link rel="stylesheet" href="{{asset('frontend/css/animate.css')}}">
  <link rel="stylesheet" href="{{asset('frontend/css/main.css')}}">
</head>
<body>

  <!-- loader -->
  <!-- nav.js -->
  <!-- sass/components/_loader-->
  <div class="loader">
    <div class="lds-default">
      <div></div>
      <div></div>
      <div></div>
      <div></div>
      <div></div>
      <div></div>
      <div></div>
      <div></div>
      <div></div>
      <div></div>
      <div></div>
      <div></div>
    </div>
  </div>
  <!-- end loader -->

  <!-- up --> 
  <!-- main.js -->
  <!-- sass/components/_up-->
  <div class="up">
    <a href="#up">
      <i class="fas fa-hand-point-up"></i>
    </a>
  </div>
  <!-- end---Up -->

  <!-- first --- header  -->

  <!-- end ---- first header  -->
    

  <!-- second tab -->
  <!-- sass/components/_secondHeader -->

  <!-- end ------- second header code  -->

  <!-- sections for page -->
  <!-- ايرور 404 -->
  <section class="main-page">
      <div class="container">
        <div class="row">
          <div class="errorPage">
            <div class="img-error">
              <img src="{{asset('frontend/images/Illustration.svg')}}" style="width: 100%"/>
            </div>
            <a href="{{route('website')}}"><button class="error1btn" onclick="window.location.href='{{route('website')}}'">{{__('website.home')}}</button></a>
            </form>
          </div>
        </div>
      </div>
  </section>

  <!-- دى بتاعت السيرش ال ف الصفحه  --> 
  <!-- search.js -->
  <section class="container sec-col-4-1">
      <div class="row">
        <div class="filter-search parent-sec-col-4-1" style="display:flex;flex-wrap: wrap;justify-content:space-around;align-content: center;">
        
        </div>
      </div>
  </section>


                
  <!-- all rights -->
  <div class="footer-footer">
    <div class="container">
      <div class="footer-footer-allrights">
        <div>
          <span>لذائذ واطياب <span style="font-weight: 200;">
            - All Rights Reserved
          </span>
        </span>
        </div>
        <div>
          <span style="font-weight: 200;">Made by <img src="{{asset('frontend/images/footer-footer.svg')}}"> SoftSteps</span>
        </div>
      </div>
    </div>
  </div>      
          
          
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/axios/0.19.0/axios.min.js"></script>  
  <script src="{{asset('frontend/js/nav.js')}}"></script>

  <script src="{{asset('frontend/js/search.js')}}"></script>
  <script src="{{asset('frontend/js/main.js')}}"></script>

  <script src="{{asset('frontend/js/changeStyleEnglish.js')}}"></script>

  <script src="https://cdnjs.cloudflare.com/ajax/libs/wow/1.1.2/wow.min.js" integrity="sha512-Eak/29OTpb36LLo2r47IpVzPBLXnAMPAVypbSZiZ4Qkf8p/7S/XRG5xp7OKWPPYfJT6metI+IORkR5G8F900+g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
 <script src="{{asset('frontend/js/jquery.min.js')}}"></script> 
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-browser/0.1.0/jquery.browser.min.js" integrity="sha512-7IUk8ZcM82NUtcQv8gBFQTbz0Z+yXiGQyOj+YvSOTv3ZQbxEBYrs4zmY4rrm4/opSN1Xv/oGONv5uCSqiYZy4g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-browser/0.0.8/jquery.browser.min.js" integrity="sha512-w+/TuhYdf5I9cQWrw2Gt8gDn589TOoUqSRljOxkkoYAsC6CSSWA5eiFi75PeNg8dtPykVWKT77WoyosayNtjeA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-browser/0.0.7/jquery.browser.min.js" integrity="sha512-HSCqiH2e63Bfx4xtsFNJB1cu8zGzEO/f7teh1Iml4gXscnb1EftrtD8izpVNXGX+W9LAtQAZ5OwfCIRr/0rXjQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-browser/0.0.6/jquery.browser.min.js" integrity="sha512-CdT27QARakhGACmGBMYVwB4nuhoNjaVgT2PqjBZRU5yp7Kl9ZZHHmL6RGswJD3k1+P6Ut9jFImCjd3fo8FhkWA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-browser/0.0.5/jquery.browser.min.js" integrity="sha512-YGhJFoUfCVi8sGoJUYQGGXGExsxscoDVgegvN7x6OK7pzYUSFrnVyq0oYTakXaQCYQxb8k6pGjhgjqIECJlayw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
  <script src="https://code.jquery.com/jquery-3.6.0.slim.min.js" type="text/javascript"></script>
  <script>
    new WOW().init();
  </script>
          
</body>
</html> 
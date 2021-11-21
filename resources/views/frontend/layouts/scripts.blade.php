
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/axios/0.19.0/axios.min.js"></script>  
  <script src="{{asset('frontend/js/main.js')}}"></script>
  <script src="{{asset('frontend/js/nav.js')}}"></script>
  <script src="{{asset('frontend/js/searchindex.js')}}"></script>
  <script src="{{asset('frontend/js/changeEnglishIndex.js')}}"></script>
  <script src="{{asset('frontend/js/lockNav.js')}}"></script>
  <script src="{{asset('frontend/js/question.js')}}"></script>
  <script src="//unpkg.com/swiper/swiper-bundle.min.js"></script>

  <script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>

  <script src="https://cdnjs.cloudflare.com/ajax/libs/wow/1.1.2/wow.min.js" integrity="sha512-Eak/29OTpb36LLo2r47IpVzPBLXnAMPAVypbSZiZ4Qkf8p/7S/XRG5xp7OKWPPYfJT6metI+IORkR5G8F900+g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
  <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.3.2/jquery.js" type="text/javascript"></script>

  <script>
    new WOW().init();
    let swiperNum = document.querySelectorAll(".swiper");
    console.log(swiperNum);
      
    var swiper = new Swiper('.swiper', 
    {
      slidesPerView: 1,
      spaceBetween: 10,
      // init: false,

      breakpoints: {
        
        568:
        {
          slidesPerView: 2,
          spaceBetween: 20,
        },

        786: {
          slidesPerView: 2,
          spaceBetween: 40,
        },
        994: {
          slidesPerView: 3,
          spaceBetween: 40,
        },
        1224: {
          slidesPerView: 4,
          spaceBetween: 20,
        },
      },

      navigation:
      {
        nextEl:  '.swiper-arrow-right',
        prevEl:  '.swiper-arrow-left',
      },
    });

    var swiper1 = new Swiper('.swiper1', 
    {
      slidesPerView: 1,
      spaceBetween: 10,
      // init: false,

      breakpoints: {
        
        568:
        {
          slidesPerView: 2,
          spaceBetween: 20,
        },

        786: {
          slidesPerView: 2,
          spaceBetween: 40,
        },
        994: {
          slidesPerView: 3,
          spaceBetween: 40,
        },
        1224: {
          slidesPerView: 4,
          spaceBetween: 20,
        },
      },

      navigation:
      {
        nextEl:  '.swiper-arrow-right1',
        prevEl:  '.swiper-arrow-left1',
      },
    });

    var swiper2 = new Swiper('.swiper2', 
    {
      slidesPerView: 1,
      spaceBetween: 10,
      // init: false,

      breakpoints: {
        
        568:
        {
          slidesPerView: 2,
          spaceBetween: 20,
        },

        786: {
          slidesPerView: 2,
          spaceBetween: 40,
        },
        994: {
          slidesPerView: 3,
          spaceBetween: 40,
        },
        1224: {
          slidesPerView: 4,
          spaceBetween: 20,
        },
      },

      navigation:
      {
        nextEl:  '.swiper-arrow-right2',
        prevEl:  '.swiper-arrow-left2',
      },
    });

    var swiper4 = new Swiper('.swiper4', 
    {
      pagination: {
        el: '.swiper4-pagination',
        clickable: true,
      }
    });

    var openPage=document.querySelectorAll('.sec1-card');
    for(let i=0 ; i< openPage.length;i++)
    {
      openPage[i].addEventListener('click',function(){
        window.location.href='pages/filterPage.html';
      })
    }
  </script>
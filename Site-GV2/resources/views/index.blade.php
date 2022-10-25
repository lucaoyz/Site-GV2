<!DOCTYPE html>
<!--[if lt IE 9 ]><html class="no-js oldie" lang="en"> <![endif]-->
<!--[if IE 9 ]><html class="no-js oldie ie9" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!-->
<html class="no-js" lang="en">
<!--<![endif]-->

<head>

    <!--- basic page needs
    ================================================== -->
    <meta charset="utf-8">
    <title>GV2 Academia</title>
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- mobile specific metas
    ================================================== -->
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSS
    ================================================== -->
    <link rel="stylesheet" href="{{asset('css/base.css')}}">
    <link rel="stylesheet" href="{{asset('css/vendor.css')}}">
    <link rel="stylesheet" href="{{asset('css/main.css')}}">

    <!-- script
    ================================================== -->
    <script src="{{asset('js/modernizr.js')}}"></script>
    <script src="{{asset('js/pace.min.js')}}"></script>
    <script src="https://kit.fontawesome.com/ea50c2066e.js" crossorigin="anonymous"></script>

    <!-- favicons
    ================================================== -->
    <link rel="shortcut icon" href="{{asset('images/ICO GV2.ico')}}" type="image/x-icon">
    <link rel="icon" href="{{asset('images/ICO GV2.ico')}}" type="image/x-icon">

</head>

<body id="top">

    <!-- header
    ================================================== -->
    <header class="s-header">

        <div class="header-logo">
            <a class="site-logo" href="index.html"><img src="{{asset('images/Logo horizontal mais compacta.png')}}" alt=""></a>
        </div>

        <nav class="header-nav-wrap">
            <ul class="header-nav">
                <li class="current"><a class="smoothscroll"  href="#home" title="home">Menu</a></li>
                <li><a class="smoothscroll"  href="#about" title="about">Sobre</a></li>
                <li><a class="smoothscroll"  href="#pricing" title="blog">Planos</a></li>
                <li><a class="smoothscroll"  href="#estrutura" title="contact">Estrutura</a></li>
                <li><a class="smoothscroll"  href="#gallery" title="contact">Galeria</a></li>
                <li><a class="smoothscroll"  href="#contact" title="contact">Contato</a></li>
                <li><a class="smoothscroll"  href="#login" title="contact">Login</a></li>
            </ul>
        </nav>

        <a class="header-menu-toggle" href="#0"><span>Menu</span></a>

    </header> <!-- end s-header -->


   <!-- home
   ================================================== -->
   <section id="home" class="s-home page-hero target-section" data-parallax="scroll" data-image-src="{{asset('images/bckg.jpg')}}" data-natural-width=8000 data-natural-height=4500 data-position-y=center>

        <div class="overlay"></div>
        <div class="shadow-overlay"></div>

        <div class="home-content">

            <div class="row home-content__main">

                <h1 style="text-transform: uppercase;">
                    Força é um<br>
                    segundo poder
                  
                </h1>

                <div class="home-content__scroll">
                    <a href="#about" class="scroll-link smoothscroll">
                        <span>Rolar para baixo</span>
                    </a>
                </div>


        </div> <!-- end home-content -->

        <ul class="home-social">
            <li>
                <a href="#"><i class="im im-facebook" aria-hidden="true"></i><span>Facebook</span></a>
            </li>
            <li>
                <a href="#"><i class="im im-instagram" aria-hidden="true"></i><span>Instagram</span></a>
            </li>
        </ul> 
        <!-- end home-social -->

    </section> <!-- end s-home -->


    <!-- about
    ================================================== -->
    <section id="about" class="s-about target-section">
        
        <div class="row narrow section-intro has-bottom-sep">
            <div class="col-full text-center">
                <h1 style="color: #fff;">Sobre a <span style="color: #CB2727;">GV2</span></h1>
                <p class="lead" style="color: #888888;">Somos mais que uma academia de musculação, somos um time. Oferecemos o melhor para quem está determinado em treinar, com ampla quantidade de equipamentos e profissionais treinados e dedicados a te levar ao melhor desempenho referente aos seus objetivos.</p>
            </div>
        </div>

    </section> <!-- end about -->

    <div class="linha-horizontal"></div>

    <!-- team
    ================================================== -->
    <div class="container-equipe">
        <div class="main-box inner flex">
            <div class="team-wrap">
                <div class="team-member text-center">
                    <div class="team-img">
                        <img src="{{asset('images/trainer/trainer-2.jpg')}}" alt="">
                        <div class="overlay-equipe">
                            <div class="team-details text-center">
                                <div class="socials mt-20">
                                    <a href="#"><span class="im im-facebook"></span></a>
                                    <a href="#"><span class="im im-instagram"></span></a>
                                    <a href="#"><span class="im im-linkedin"></span></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <h2 class="team-title" style="color: #fff;">Gustavo</h2>
                    <span style="font-size: 18px;">Em breve</span>
                </div>
            </div>
            <!-- end team member -->
            <div class="team-wrap">
                <div class="team-member text-center">
                    <div class="team-img">
                        <img src="{{asset('images/trainer/trainer-1.jpg')}}" alt="">
                        <div class="overlay-equipe">
                            <div class="team-details text-center">
                                <div class="socials mt-20">
                                    <a href="#"><span class="im im-facebook"></span></a>
                                    <a href="#"><span class="im im-instagram"></span></a>
                                    <a href="#"><span class="im im-linkedin"></span></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <h2 class="team-title" style="color: #fff;">Camila</h2>
                    <span style="font-size: 18px;">Em breve</span>
                </div>
            </div>
            <!-- end team member -->
            <div class="team-wrap">
                <div class="team-member text-center">
                    <div class="team-img">
                        <img src="{{asset('images/trainer/trainer-3.jpg')}}" alt="">
                        <div class="overlay-equipe">
                            <div class="team-details text-center">
                                <div class="socials mt-20">
                                    <a href="#"><span class="im im-facebook"></span></a>
                                    <a href="#"><span class="im im-instagram"></span></a>
                                    <a href="#"><span class="im im-linkedin"></span></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <h2 class="team-title" style="color: #fff;">Elias</h2>
                    <span style="font-size: 18px;">Em breve</span>
                </div>
            </div>
            <!-- end team member -->
            <div class="team-wrap">
                <div class="team-member text-center">
                    <div class="team-img">
                        <img src="{{asset('images/trainer/trainer-1.jpg')}}" alt="">
                        <div class="overlay-equipe">
                            <div class="team-details text-center">
                                <div class="socials mt-20">
                                    <a href="#"><span class="im im-facebook"></span></a>
                                    <a href="#"><span class="im im-instagram"></span></a>
                                    <a href="#"><span class="im im-linkedin"></span></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <h2 class="team-title" style="color: #fff;">Fran</h2>
                    <span style="font-size: 18px;">Em breve</span>
                </div>
            </div>
            <!-- end team member -->
        </div>

    </div>
    <!-- end team -->

   <!-- Price Plan Section Begin -->
    <section id="pricing" class="s-pricing target-section">
        
        <div class="row narrow section-intro has-bottom-sep">
            <div class="col-full text-center">
                <h1 style="color: #fff;">Planos</h1>
            </div>
        </div>


        <div class="pricing-table">
            <!-- 1 card -->
            <div class="pricing-card">
                <h3 class="pricing-card-header">Mensal</h3>
                <div class="price"> R$99.90<span>/Mês</span>
                </div>

                <a href="https://api.whatsapp.com/send?phone=55551936292954&text=Ol%C3%A1%2C%20vim%20pelo%20site%20e%20desejo%20adquirir%20o%20plano%20Mensal." class="order-btn">Adquirir</a>                          
            </div>

            <!-- 2 card -->
            <div class="pricing-card">
                <h3 class="pricing-card-header">Trimestral</h3>
                <div class="price"> R$89.90<span>/3x</span>
                </div>

                <a href="https://api.whatsapp.com/send?phone=55551936292954&text=Ol%C3%A1%2C%20vim%20pelo%20site%20e%20desejo%20adquirir%20o%20plano%20Trimestral." class="order-btn">Adquirir</a>                          
            </div>

            <!-- 3 card -->

            <div class="pricing-card">
                <h3 class="pricing-card-header">Semestral</h3>
                <div class="price"> R$84.90<span>/6x</span>
                </div>

                <a href="https://api.whatsapp.com/send?phone=55551936292954&text=Ol%C3%A1%2C%20vim%20pelo%20site%20e%20desejo%20adquirir%20o%20plano%20Semestral." class="order-btn">Adquirir</a>                          
            </div>

            <!-- 4th card  -->
            <div class="pricing-card">
                <h3 class="pricing-card-header">Anual Recorrente</h3>
                <div class="price"> R$79.90<span>/12x</span>
                </div>

                <a href="https://api.whatsapp.com/send?phone=55551936292954&text=Ol%C3%A1%2C%20vim%20pelo%20site%20e%20desejo%20adquirir%20o%20plano%20Anual%20Recorrente." class="order-btn">Adquirir</a>                          
            </div>
        
        </div>
    </section>

    <!-- blog
    ================================================== -->
        <section id="estrutura" class="s-services">    
            <div class="row narrow section-intro has-bottom-sep">
                <div class="col-full text-center">
                    <h1 style="color: #fff;">Estrutura</h1>
                </div>
            </div>
            <div class="container-services">
                <div class="row-services">
                    <div class="service">
                        <i class="fa-solid fa-file-medical"></i>
                        <h2 style="color: #fff; margin-top: 0; margin-bottom: 0;">Avaliação Física</h2>
                        <p>Avaliamos nossos alunos para oferecer um treino indicado e funcional de acordo com seu físico.</p>
                    </div>
                    <div class="service">
                        <i class="fa-solid fa-dumbbell"></i>
                        <h2 style="color: #fff; margin-top: 0; margin-bottom: 0;">Musculação</h2>
                        <p>Oferecemos grande quantidade de equipamentos de musculação ao seu dispor.</p>
                    </div>
                    <div class="service">
                        <i class="fa-solid fa-heart-pulse"></i>
                        <h2 style="color: #fff; margin-top: 0; margin-bottom: 0;">Aeróbico</h2>
                        <p>Aeróbico é essencial para ter uma saúde em dia! A GV2 conta com equipamentos para sua realização.</p>
                    </div>
                </div>
                <div class="row-services" style="padding-top: 30px;">
                    <div class="service">
                        <i class="fa-solid fa-users"></i>
                        <h2 style="color: #fff; margin-top: 0; margin-bottom: 0;">Equipe Especializada</h2>
                        <p>Professores especializados e prontos para te oferecer o melhor acompanhamento.</p>
                    </div>
                    <div class="service">
                        <i class="fa-solid fa-wifi"></i>
                        <h2 style="color: #fff; margin-top: 0; margin-bottom: 0;">Wi-Fi</h2>
                        <p>Wi-Fi Gratuito disponível para todos os alunos GV2!</p>
                    </div>
                    <div class="service">
                        <i class="fa-solid fa-vault"></i>
                        <h2 style="color: #fff; margin-top: 0; margin-bottom: 0;">Armários</h2>
                        <p>Contamos com armários individuais para proteção de objetos pessoais durante o treino.</p>
                    </div>
                </div>
            </div>
            
        </section><!-- end s-blog -->

     <!-- video
    ================================================== -->
    <div class="s-video video-section">

        <div class="overlay"></div>

        <div class="row narrow section-intro has-bottom-sep-video">
            <div class="video-text text-center">
                <h1 style="color: #fff;">Conheça a GV2</h1>
                <a href="https://youtu.be/hxQfRm6EJoo" target="_blank" class="play-btn video-popup">
                    <i class="fa-solid fa-play"></i>
                </a>
            </div>
        </div>

    </div> <!-- end s-video -->

   <!-- works
    ================================================== -->
    <section id="gallery" class="s-works target-section">

        <div class="row narrow section-intro has-bottom-sep-video">
            <div class="col-full">
                <h1 style="color: #fff;">Galeria</h1>
            </div>
        </div>

        <div class="row masonry-wrap">
            <div class="masonry">

                <div class="masonry__brick">
                    <div class="item-folio">

                        <div class="item-folio__thumb">
                            <a href="https://www.instagram.com/gv2academia/" target="_blank" title="The Beetle Car" data-size="1050x700">
                                <img src="{{asset('images/portfolio/itens-acad.png')}}" alt="">
                                <span class="shadow-overlay"></span>
                            </a>
                        </div>

                        <div class="item-folio__text">
                            <h3 class="item-folio__title">
                                Em breve
                            </h3>
                            <p class="item-folio__cat">
                                Em breve
                            </p>
                        </div>

                    </div> <!-- end item-folio -->
                </div> <!-- end masonry__brick -->

                <div class="masonry__brick">
                    <div class="item-folio">

                        <div class="item-folio__thumb">
                            <a href="https://www.instagram.com/gv2academia/" target="_blank" title="Lighthouse" data-size="1050x700">
                                <img src="{{asset('images/portfolio/mulher-acad.png')}}" alt="">
                                <span class="shadow-overlay"></span>
                            </a>
                        </div>

                        <div class="item-folio__text">
                            <h3 class="item-folio__title">
                                Em breve
                            </h3>
                            <p class="item-folio__cat">
                                Em breve
                            </p>
                        </div>

                    </div> <!-- end item-folio -->
                </div> <!-- end masonry__brick -->

                <div class="masonry__brick">
                    <div class="item-folio">

                        <div class="item-folio__thumb">
                            <a href="https://www.instagram.com/gv2academia/" class="thumb-link" data-size="1050x700">
                                <img src="{{asset('images/portfolio/degrade2.png')}}"alt="">
                                <span class="shadow-overlay"></span>
                            </a>
                        </div>

                    </div> <!-- end item-folio -->
                </div> <!-- end masonry__brick -->


                <div class="masonry__brick">
                    <div class="item-folio">

                        <div class="item-folio__thumb">
                            <a href="https://www.instagram.com/gv2academia/" target="_blank" data-size="1050x700">
                                <img src="{{asset('images/portfolio/homem-peso.png')}}" alt="">
                                <span class="shadow-overlay"></span>
                            </a>
                        </div>

                        <div class="item-folio__text">
                            <h3 class="item-folio__title">
                                Em breve
                            </h3>
                            <p class="item-folio__cat">
                                Em breve
                            </p>
                        </div>

                    </div> <!-- end item-folio -->
                </div> <!-- end masonry__brick -->

                <div class="masonry__brick">
                    <div class="item-folio">

                        <div class="item-folio__thumb">
                            <a href="https://www.instagram.com/gv2academia/" target="_blank" title="Lighthouse" data-size="1050x700">
                                <img src="{{asset('images/portfolio/pesos2.png')}}" alt="">
                                <span class="shadow-overlay"></span>
                            </a>
                        </div>

                        <div class="item-folio__text">
                            <h3 class="item-folio__title">
                                Em breve
                            </h3>
                            <p class="item-folio__cat">
                                Em breve
                            </p>
                        </div>

                    </div> <!-- end item-folio -->
                </div> <!-- end masonry__brick -->

                <div class="masonry__brick">
                    <div class="item-folio">

                        <div class="item-folio__thumb">
                            <a href="https://www.instagram.com/gv2academia/" target="_blank" title="Lighthouse" data-size="1050x700">
                                <img src="{{asset('images/portfolio/pesos.png')}}" alt="">
                                <span class="shadow-overlay"></span>
                            </a>
                        </div>

                        <div class="item-folio__text">
                            <h3 class="item-folio__title">
                                Em breve
                            </h3>
                            <p class="item-folio__cat">
                                Em breve
                            </p>
                        </div>

                    </div> <!-- end item-folio -->
                </div> <!-- end masonry__brick -->

                <div class="masonry__brick">
                    <div class="item-folio">

                        <div class="item-folio__thumb">
                            <a href="https://www.instagram.com/gv2academia/" class="thumb-link" data-size="1050x700">
                                <img src="{{asset('images/portfolio/degrade1.2.png')}}" alt="">
                                <span class="shadow-overlay"></span>
                            </a>
                        </div>

                    </div> <!-- end item-folio -->
                </div> <!-- end masonry__brick -->

                <div class="masonry__brick">
                    <div class="item-folio">

                        <div class="item-folio__thumb">
                            <a href="https://www.instagram.com/gv2academia/" target="_blank" data-size="1050x700">
                                <img src="{{asset('images/portfolio/pesao.png')}}" alt="">
                                <span class="shadow-overlay"></span>
                            </a>
                        </div>

                        <div class="item-folio__text">
                            <h3 class="item-folio__title">
                                Em breve
                            </h3>
                            <p class="item-folio__cat">
                                Em breve
                            </p>
                        </div>

                    </div> <!-- end item-folio -->
                </div> <!-- end masonry__brick -->

            </div>
        </div> <!-- end masonry -->

    </section> <!-- end works -->

    <!-- s-stats
    ================================================== -->
    <section id="contact" class="s-contact">

        <div class="overlay"></div>

    <div class="row narrow section-intro">
            <div class="col-full text-center">
                <h1>Contato</h1>
            </div>
        </div>
       


    </section>
  <!-- end s-contact -->


    <!-- footer
    ================================================== -->
    <footer>
        <div class="row">
            <div class="col-full">

                <div class="footer-logo">
                    <a class="footer-site-logo" href="#0"><img src="{{asset('images/ICO GV2.ico')}}" alt="Homepage"></a>
                </div>

                <ul class="footer-social">
                    <li><a href="#0">
                        <i class="im im-facebook" aria-hidden="true"></i>
                        <span>Facebook</span>
                    </a></li>
                    <li><a href="#0">
                        <i class="im im-instagram" aria-hidden="true"></i>
                        <span>Instagram</span>
                    </a></li>
                </ul>
                    
            </div>
        </div>

        <div class="row footer-bottom">

            <div class="col-twelve">
                <div class="copyright">
                    © <script>
                        document.write(new Date().getFullYear())
                      </script>,
                      Feito <i class="fa-solid fa-bolt"></i> por
                      <a href="https://instagram.com/ahtaeeazy" class="font-weight-bold" target="_blank">EAZY</a>
                </div>

                <div class="go-top">
                <a class="smoothscroll" title="Back to Top" href="#top"><i class="im im-arrow-up" aria-hidden="true"></i></a>
                </div>
            </div>

        </div> <!-- end footer-bottom -->

    </footer> <!-- end footer -->


    <!-- photoswipe background
    ================================================== -->
    <div aria-hidden="true" class="pswp" role="dialog" tabindex="-1">

        <div class="pswp__bg"></div>
        <div class="pswp__scroll-wrap">

            <div class="pswp__container">
                <div class="pswp__item"></div>
                <div class="pswp__item"></div>
                <div class="pswp__item"></div>
            </div>

            <div class="pswp__ui pswp__ui--hidden">
                <div class="pswp__top-bar">
                    <div class="pswp__counter"></div><button class="pswp__button pswp__button--close" title="Close (Esc)"></button> <button class="pswp__button pswp__button--share" title=
                    "Share"></button> <button class="pswp__button pswp__button--fs" title="Toggle fullscreen"></button> <button class="pswp__button pswp__button--zoom" title=
                    "Zoom in/out"></button>
                    <div class="pswp__preloader">
                        <div class="pswp__preloader__icn">
                            <div class="pswp__preloader__cut">
                                <div class="pswp__preloader__donut"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="pswp__share-modal pswp__share-modal--hidden pswp__single-tap">
                    <div class="pswp__share-tooltip"></div>
                </div><button class="pswp__button pswp__button--arrow--left" title="Previous (arrow left)"></button> <button class="pswp__button pswp__button--arrow--right" title=
                "Next (arrow right)"></button>
                <div class="pswp__caption">
                    <div class="pswp__caption__center"></div>
                </div>
            </div>

        </div>

    </div><!-- end photoSwipe background -->

    <div id="preloader">
        <div id="loader"></div>
    </div>


    <!-- Java Script
    ================================================== -->
    <script src="{{asset('js/jquery-3.2.1.min.js')}}"></script>
    <script src="{{asset('js/plugins.js')}}"></script>
    <script src="{{asset('js/main.js')}}"></script>

</body>

</html>
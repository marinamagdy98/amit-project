@extends('layouts.app')
@section('content')
    <div class="container">
        <img src="{{ asset('pagehome/logo3.png') }}" class="img">
        @auth
            {{-- section_1 --}}

            <h2 class="content-hdr text-center text1">Shop By
                Category<br />
            </h2>

            <div class="col-xs-12">
                <div class="col-xs-6 col-sm-2 img1"><img alt="Shop Rings &gt;" class="img-responsive img-fluid"
                        src="https://images-aka.zales.com/hp/trigger-bank/z20220314/tb_rings.jpg" /> </a>
                    <p class="text-center"><a class="text2">Rings</a></p>
                </div>

                <div class="col-xs-6 col-sm-2 img2"><img alt="Shop Necklaces &gt;" class="img-responsive img-fluid"
                        src="https://images-aka.zales.com/hp/trigger-bank/z20220314/tb_necklaces.jpg" /></a>
                    <p class="text-center"><a class="text2">Necklaces</a>
                    </p>
                </div>

                <div class="col-xs-6 col-sm-2v img3"><img alt="Shop Earrings &gt;" class="img-responsive img-fluid"
                        src="https://images-aka.zales.com/hp/trigger-bank/z20220314/tb_earrings.jpg" /></a>
                    <p class="text-center"><a class="text3">Earrings</a>
                    </p>
                </div>

                <div class="col-xs-6 col-sm-2 img4"><img alt="Shop Bracelets &gt;" class="img-responsive img-fluid"
                        src="https://images-aka.zales.com/hp/trigger-bank/z20220314/tb_bracelets.jpg" /></a>
                    <p class="text-center"><a class="text2">Bracelets</a>
                    </p>
                </div>

                <div class="col-xs-6 col-sm-2 img5"><img alt="Shop Watches &gt;" class="img-responsive img-fluid"
                        src="https://images-aka.zales.com/hp/trigger-bank/z20220314/tb_watches.jpg" /></a>
                    <p class="text-center text2"><a>Watches</a>
                    </p>
                </div>

                <div class="col-xs-6 col-sm-2 img6"><img alt="Shop Wedding &amp; Engagement &gt;"
                        class="img-responsive img-fluid"
                        src="https://images-aka.zales.com/hp/trigger-bank/z20220314/tb_engagement.jpg" /></a>
                    <p class="text-center text2"><a>Engagement</a>
                    </p>
                </div>
            </div>

            {{-- section_2 --}}

            <div class="content">
                <h2 class="content-hdr text-center title">
                    Just For You</h2>

                <div class="col-md-4 col-sm-4 col-xs-12 div1">
                    <img class="img-responsive js-responsive-img hide-mob img7"
                        src="https://images-aka.zales.com/hp/z20220428/20220428_GradGG_hpspot_m.jpg" /></a>
                    <div class="div2"><span class="div3">Graduation Gift Guide</span><br />
                        Celebrate this milestone moment with graduation gifts that are best in class!<br />
                    </div>
                </div>

                <div class="col-md-4 col-sm-4 col-xs-12 div4">
                    <img class="img-responsive js-responsive-img hide-mob img7"
                        src="https://images-aka.zales.com/hp/z20220516/pj2_d.jpg" /></a>
                    <div class="div5"><span class="div6">Father&#39;s Day Gift Guide</span><br />
                        Thoughtful and unique gifts that let Dad shine.<br />
                    </div>
                </div>

                <div class="col-md-4 col-sm-4 col-xs-12 div7">
                    <img class="img-responsive js-responsive-img hide-mob img7"
                        src="https://images-aka.zales.com/hp/z20220428/20220428_HP_Gold_m.jpg" /></a>
                    <div class="div8"><span class="div9">May Is Gold Month</span><br />
                        Versatile, eye-catching and quite durable, gold jewelry adds bold style to your overall look.<br />

                    </div>
                </div>


                {{-- section_3 --}}

                <h2 class="content-hdr text-center card">
                    Featured Collections</h2>

                <section class="collections no-scroll-bar scrolling-wrapper scroll-border ">

                    <figure class="scroll-card hp-scrolling-banner card1">
                        <img class="img-responsive img-fluid hide-mob"
                            src="https://images-aka.zales.com/hp/z20210907/zhp_collections_swj_d.jpg" /></a>
                        <figcaption class="cta">
                            <span class="card2">Serena Williams
                                Jewelry</span>
                        </figcaption>
                    </figure>

                    <figure class="scroll-card hp-scrolling-banner card3">
                        <img class="img-responsive img-fluid hide-mob"
                            src="https://images-aka.zales.com/hp/z20200812-nhp/collections_de_d.jpg" /> </a>
                        <figcaption class="cta">
                            <span class="cta card4">Enchanted Disney</span>
                        </figcaption>
                    </figure>

                    </center>
                </section>

                {{-- section_4 --}}

                <h2 class="content-hdr text-center card5">Shine Now, Pay Later</h2>

                <div class="container">
                    <section class="po-bg card6">
                        <div class="flex-grid-wrapper">
                            <div class="flex-grid-row">
                                <!--/col 1-->
                                <div class="grid-item card7">
                                    <!--DCC-->
                                    <div class="grid-spacing card8">
                                        <center>
                                            <div class="promo-text_wrap card9">
                                                <div class="pull-left"><a class="item h-auto"
                                                        itemtype="http://schema.org/Offer" target="_blank"><img
                                                            class="dcc-image"
                                                            src="https://images-aka.zales.com/hp/z20200812-nhp/New-Credit-Card.png" /></a>
                                                </div>

                                                <div class="promo-text text-left">
                                                    <div class="figure-text_name text-uppercase" itemprop="name"><br
                                                            class="hide-mob" />
                                                        <p>Zero Down Special Financing<sup>§</sup></p>
                                                    </div>

                                                    <div class="figure-text_description" itemprop="description">
                                                        <p>with The
                                                            Diamond Credit Card on purchases of $300 or more.<span
                                                                class="card10" aria-hidden="true">
                                                                ></span></p>
                                                    </div>
                                                </div>
                                            </div>
                                        </center>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                </div>

                {{-- login button --}}
            @else
                <a href="{{ route('login') }}" class="btn btn-success card11">Please Login<a>
                    @endauth

                    {{-- footer --}}
                    <div class="container">
                        <footer class="text-center card12">
                            &copy: Zales. The Diamond Store. Since 1924.
                        </footer>
                    </div>

                    <script>
                        $('.carousel').carousel()
                    </script>
                @endsection

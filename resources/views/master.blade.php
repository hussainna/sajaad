@extends('index')

@section('content')


  <!-- 
    - #SIDEBAR
  -->

  <div class="sidebar" data-navbar>

    <button class="nav-close-btn" aria-label="close menu" data-nav-toggler>
      <ion-icon name="close-outline" aria-hidden="true"></ion-icon>
    </button>

    <div class="wrapper">

      <ul class="sidebar-list">

        <li>
          <p class="sidebar-list-title">Language</p>
        </li>

        <li>
          <a href="#" class="sidebar-link">English</a>
        </li>

        <li>
          <a href="#" class="sidebar-link">French</a>
        </li>

        <li>
          <a href="#" class="sidebar-link">Arabric</a>
        </li>

      </ul>

      <ul class="sidebar-list">

        <li>
          <p class="sidebar-list-title">Currency</p>
        </li>

        <li>
          <a href="#" class="sidebar-link">USD - US Dollar</a>
        </li>

        <li>
          <a href="#" class="sidebar-link">Euro</a>
        </li>

        <li>
          <a href="#" class="sidebar-link">Pound</a>
        </li>

      </ul>

    </div>

    <nav class="navbar">
      <ul class="navbar-list">

        <li class="navbar-item">
          <a href="#home" class="navbar-link" data-nav-link>Home</a>
        </li>

        <li class="navbar-item">
          <a href="#about" class="navbar-link" data-nav-link>About</a>
        </li>

        <li class="navbar-item">
          <a href="#product" class="navbar-link" data-nav-link>Product</a>
        </li>

        <li class="navbar-item">
          <a href="#blog" class="navbar-link" data-nav-link>Blogs</a>
        </li>

      </ul>
    </nav>

    <ul class="contact-list">

      <li>
        <p class="contact-list-title">Contact Us</p>
      </li>

      <li class="contact-item">
        <address class="address">
          69 Halsey St, Ny 10002, New York, United States
        </address>
      </li>

      <li class="contact-item">
        <a href="mailto:support.center@woodex.co" class="contact-link">support.center@woodex.co</a>
      </li>

      <li class="contact-item">
        <a href="tel:00001235567890" class="contact-link">(0000) 1235 567890</a>
      </li>

    </ul>

    <div class="social-wrapper">

      <p class="social-list-title">Follow US On Socials</p>

      <ul class="social-list">

        <li>
          <a href="#" class="social-link">
            <ion-icon name="logo-facebook"></ion-icon>
          </a>
        </li>

        <li>
          <a href="#" class="social-link">
            <ion-icon name="logo-twitter"></ion-icon>
          </a>
        </li>

        <li>
          <a href="#" class="social-link">
            <ion-icon name="logo-tumblr"></ion-icon>
          </a>
        </li>

      </ul>

    </div>

  </div>

  <div class="overlay" data-overlay data-nav-toggler></div>





  <main>
    <article>

      <!-- 
        - #HERO
      -->

      <section class="section hero" id="home" aria-label="home">
        <div class="container">

          <ul class="hero-list">

            <li>
              <div class="hero-card">

                <figure class="card-banner img-holder" style="--width: 285; --height: 396;">
                  <img src="./assets/images/hero-product-1.jpg" width="285" height="396" alt="Art Deco Home"
                    class="img-cover">
                </figure>

                <div class="card-content">
                  <h3>
                    <a href="#" class="card-title">Art Deco Home</a>
                  </h3>

                  <p class="card-text">Decoration</p>
                </div>

              </div>
            </li>

            <li class="colspan-2">
              <div class="hero-card">

                <figure class="card-banner img-holder" style="--width: 568; --height: 389;">
                  <img src="./assets/images/hero-product-2.jpg" width="568" height="389" alt="Helen Chair"
                    class="img-cover">
                </figure>

                <div class="card-content">
                  <h3>
                    <a href="#" class="card-title">Helen Chair</a>
                  </h3>

                  <p class="card-text">Decoration</p>
                </div>

              </div>
            </li>

            <li>
              <div class="hero-card">

                <figure class="card-banner img-holder" style="--width: 285; --height: 396;">
                  <img src="./assets/images/hero-product-3.jpg" width="285" height="396" alt="Vase Of Flowers"
                    class="img-cover">
                </figure>

                <div class="card-content">
                  <h3>
                    <a href="#" class="card-title">Vase Of Flowers</a>
                  </h3>

                  <p class="card-text">Decoration</p>
                </div>

              </div>
            </li>

            <li class="colspan-2">
              <div class="hero-card">

                <figure class="card-banner img-holder" style="--width: 580; --height: 213;">
                  <img src="./assets/images/hero-product-4.jpg" width="580" height="213" alt="Wood Eggs"
                    class="img-cover">
                </figure>

                <div class="card-content">
                  <h3>
                    <a href="#" class="card-title">Wood Eggs</a>
                  </h3>

                  <p class="card-text">Decoration</p>
                </div>

              </div>
            </li>

            <li class="colspan-2">
              <div class="hero-card">

                <figure class="card-banner img-holder" style="--width: 580; --height: 213;">
                  <img src="./assets/images/hero-product-5.jpg" width="580" height="213" alt="Table Wood Pine"
                    class="img-cover">
                </figure>

                <div class="card-content">
                  <h3>
                    <a href="#" class="card-title">Table Wood Pine</a>
                  </h3>

                  <p class="card-text">Furniture</p>
                </div>

              </div>
            </li>

          </ul>

        </div>
      </section>





      <!-- 
        - #ABOUT
      -->

      <section class="section about" id="about" aria-label="about">
        <div class="container">

          <h2 class="section-title">Woodex Store</h2>

          <p class="section-text">
            When you start with a portrait and search for a pure form, a clear volume, through successive eliminations,
            you arrive
            inevitably at the egg. Likewise, starting with the egg and following the same process in reverse, one
            finishes with the
            portrait.
          </p>

          <div class="about-card">
            <figure class="card-banner img-holder" style="--width: 1170; --height: 450;">
              <img src="./assets/images/about-banner.jpg" width="1170" height="450" loading="lazy" alt="Woodex promo"
                class="img-cover">
            </figure>

            <button class="play-btn" aria-label="play video">
              <ion-icon name="play-circle-outline" aria-hidden="true"></ion-icon>
            </button>
          </div>

        </div>
      </section>





      <!-- 
        - #PRODUCTS
      -->

      <section class="section product" id="product" aria-label="product">
        <div class="container">

          <div class="title-wrapper">
            <h2 class="h2 section-title">Popular Products</h2>

            <ul class="filter-btn-list">

              <li class="filter-btn-item">
                <button class="filter-btn active" data-filter-btn="all">All Products</button>
              </li>

              <li class="filter-btn-item">
                <button class="filter-btn" data-filter-btn="accessory">Accessory</button>
              </li>

              <li class="filter-btn-item">
                <button class="filter-btn" data-filter-btn="decoration">Decoration</button>
              </li>

              <li class="filter-btn-item">
                <button class="filter-btn" data-filter-btn="furniture">Furniture</button>
              </li>

            </ul>
          </div>

          <ul class="grid-list product-list" data-filter="all">


            @foreach ($products as $p)


            <li class="accessory">
                <div class="product-card">
  
                  <a  class="card-banner img-holder has-before" style="--width: 300; --height: 300;">
                    <img src="{{url('uploads/image/'.$p->image)}}" width="300" height="300" loading="lazy" 
                      class="img-cover">
  
                    <ul class="card-action-list">
  
                      <li>
                        <button class="card-action-btn likeButton" data-product-id="{{ $p->id }}" aria-label="add to cart" title="add to cart">
                          <ion-icon name="thumbs-up-outline" aria-hidden="true"></ion-icon>
                        </button>
                      </li>
  
    
  
                      <li>
                        <button class="card-action-btn HeartButton" data-product-id="{{ $p->id }}">
                            <ion-icon name="heart-outline" aria-hidden="true" ></ion-icon>
                        </button>
                      </li>
                      
  
                    </ul>
                  </a>
  
                  <div class="card-content">
                    <h3 class="h3">
                      <a class="card-title">{{$p->name}}</a>
                    </h3>
                    
  
                    <div class="card-price">
                      <data class="price" value="17.10">${{$p->price}}</data>
                    </div>
                  </div>
  
                </div>
              </li>
                
            @endforeach

          

          </ul>

        </div>
      </section>





      <!-- 
        - #BLOG
      -->

      <section class="section blog" id="blog" aria-label="blog">
        <div class="container">

          <div class="title-wrapper">
            <h2 class="h2 section-title">Explore our blog</h2>

            <a href="#" class="btn-link">
              <span class="span">View All</span>

              <ion-icon name="arrow-forward" aria-hidden="true"></ion-icon>
            </a>
          </div>

          <ul class="grid-list">

            <li>
              <div class="blog-card">

                <div class="card-banner img-holder" style="--width: 374; --height: 243;">
                  <img src="./assets/images/blog-1.jpg" width="374" height="243" loading="lazy"
                    alt="Unique products that will impress your home in 2022." class="img-cover">

                  <a href="#" class="card-btn">
                    <span class="span">Read more</span>

                    <ion-icon name="add-outline" aria-hidden="true"></ion-icon>
                  </a>
                </div>

                <div class="card-content">

                  <h3 class="h3">
                    <a href="#" class="card-title">Unique products that will impress your home in 2022.</a>
                  </h3>

                  <ul class="card-meta-list">

                    <li class="card-meta-item">
                      <time class="card-meta-text" datetime="2022-09-27">November 27, 2022</time>
                    </li>

                    <li class="card-meta-item">
                      <a href="#" class="card-meta-text">Admin</a>
                    </li>

                    <li class="card-meta-item">
                      in <a href="#" class="card-meta-text">deco</a>
                    </li>

                  </ul>

                </div>

              </div>
            </li>

            <li>
              <div class="blog-card">

                <div class="card-banner img-holder" style="--width: 374; --height: 243;">
                  <img src="./assets/images/blog-2.jpg" width="374" height="243" loading="lazy"
                    alt="Navy Blue & White Striped Area Rugs" class="img-cover">

                  <a href="#" class="card-btn">
                    <span class="span">Read more</span>

                    <ion-icon name="add-outline" aria-hidden="true"></ion-icon>
                  </a>
                </div>

                <div class="card-content">

                  <h3 class="h3">
                    <a href="#" class="card-title">Navy Blue & White Striped Area Rugs</a>
                  </h3>

                  <ul class="card-meta-list">

                    <li class="card-meta-item">
                      <time class="card-meta-text" datetime="2022-09-25">November 25, 2022</time>
                    </li>

                    <li class="card-meta-item">
                      <a href="#" class="card-meta-text">Admin</a>
                    </li>

                    <li class="card-meta-item">
                      in <a href="#" class="card-meta-text">deco</a>
                    </li>

                  </ul>

                </div>

              </div>
            </li>

            <li>
              <div class="blog-card">

                <div class="card-banner img-holder" style="--width: 374; --height: 243;">
                  <img src="./assets/images/blog-3.jpg" width="374" height="243" loading="lazy"
                    alt="Woodex White Coated Staircase Floating" class="img-cover">

                  <a href="#" class="card-btn">
                    <span class="span">Read more</span>

                    <ion-icon name="add-outline" aria-hidden="true"></ion-icon>
                  </a>
                </div>

                <div class="card-content">

                  <h3 class="h3">
                    <a href="#" class="card-title">Woodex White Coated Staircase Floating</a>
                  </h3>

                  <ul class="card-meta-list">

                    <li class="card-meta-item">
                      <time class="card-meta-text" datetime="2022-09-18">November 18, 2022</time>
                    </li>

                    <li class="card-meta-item">
                      <a href="#" class="card-meta-text">Admin</a>
                    </li>

                    <li class="card-meta-item">
                      in <a href="#" class="card-meta-text">deco</a>
                    </li>

                  </ul>

                </div>

              </div>
            </li>

          </ul>

        </div>
      </section>





      <!-- 
        - #NEWSLETTER
      -->

      <section class="section newsletter" aria-label="newsletter">
        <div class="container">

          <div class="newsletter-card">

            <div class="card-content">
              <h2 class="h2 section-title">Our Newsletter</h2>

              <p class="section-text">
                Subscribe our newsletter and get discount 50% off
              </p>
            </div>

            <form action="" class="card-form">
              <input type="email" name="email_address" placeholder="Your email address" required class="email-field">

              <button type="submit" class="newsletter-btn" aria-label="subscribe">
                <ion-icon name="arrow-forward" aria-hidden="true"></ion-icon>
              </button>
            </form>

          </div>

        </div>
      </section>

    </article>
  </main>


  <!-- Include jQuery -->




@endsection











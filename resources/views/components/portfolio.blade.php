<!--==========================
Portfolio Section
============================-->
<div>
    <section id="portfolio"  class="section-bg" >
        <div class="container">
  
          <header class="section-header">
            <h3 class="section-title">產品</h3>
          </header>
  
          <div class="row">
            <div class="col-lg-12">
              <ul id="portfolio-flters">
                <li data-filter="*" class="filter-active">All</li>
                <li data-filter=".filter-app">SDK 影像引擎</li>
                {{-- <li data-filter=".filter-card">跨平台應用</li> --}}
                <li data-filter=".filter-web">AR 應用</li>
              </ul>
            </div>
          </div>
  {{-- SDK 影像引擎 --}}
          <div class="row portfolio-container">
  
            <div class="col-lg-4 col-md-6 portfolio-item filter-app wow fadeInUp">
              <div class="portfolio-wrap">
                <figure>
                  <img src="https://img.youtube.com/vi/f8GLq_Utce4/maxresdefault.jpg" class="img-fluid" alt="">
                  <a href="https://img.youtube.com/vi/f8GLq_Utce4/maxresdefault.jpg" data-lightbox="portfolio" data-title="App 1" class="link-preview" title="Preview"><i class="ion ion-eye"></i></a>
                  <a href="video/finger-detect.mp4" class="link-details" title="More Details"><i class="ion ion-android-open"></i></a>
                </figure>

  
                <div style="height: 120px" class="portfolio-info">
                  <h4><a href="video/finger-detect.mp4" target="_blank">肢體辨識</a></h4>
                  <p>應用於智慧製造領域，透過影像辨識與手勢肢體辨識，可以協助工廠訓練、操作、教學應用，提高產能及降低成本。</p>
                </div>
              </div>
            </div>

            <div class="col-lg-4 col-md-6 portfolio-item filter-app wow fadeInUp" data-wow-delay="0.2s">
              <div class="portfolio-wrap">
                <figure>
                  <img src="https://img.youtube.com/vi/gZujUp32-BI/maxresdefault.jpg" class="img-fluid" alt="">
                  <a href="https://img.youtube.com/vi/gZujUp32-BI/maxresdefault.jpg" class="link-preview" data-lightbox="portfolio" data-title="App 2" title="Preview"><i class="ion ion-eye"></i></a>
                  <a href="video/face-mask.mp4" class="link-details" title="More Details"><i class="ion ion-android-open"></i></a>
                </figure>
  
                <div style="height: 120px" class="portfolio-info">
                  <h4><a href="video/face-mask.mp4" target="_blank">臉部 Mask & 3D SLAM</a></h4>
                  <p>透過 2D WebCam 也可以實作 3D 的定位效果。</p>
                </div>
              </div>
            </div>
  {{-- 跨平台應用 --}}
            {{-- <div class="col-lg-4 col-md-6 portfolio-item filter-card wow fadeInUp">
              <div class="portfolio-wrap">
                <figure>
                  <img src="img/portfolio/card1.jpg" class="img-fluid" alt="">
                  <a href="img/portfolio/card1.jpg" class="link-preview" data-lightbox="portfolio" data-title="Card 1" title="Preview"><i class="ion ion-eye"></i></a>
                  <a href="#" class="link-details" title="More Details"><i class="ion ion-android-open"></i></a>
                </figure>

                <div style="height: 120px" class="portfolio-info">
                  <h4><a href="#">行動裝置</a></h4>
                  <p></p>
                </div>
              </div>
            </div>

            <div class="col-lg-4 col-md-6 portfolio-item filter-card wow fadeInUp" data-wow-delay="0.1s">
              <div class="portfolio-wrap">
                <figure>
                  <img src="img/portfolio/card3.jpg" class="img-fluid" alt="">
                  <a href="img/portfolio/card3.jpg" class="link-preview" data-lightbox="portfolio" data-title="Card 3" title="Preview"><i class="ion ion-eye"></i></a>
                  <a href="#" class="link-details" title="More Details"><i class="ion ion-android-open"></i></a>
                </figure>

                <div style="height: 120px" class="portfolio-info">
                  <h4><a href="#">桌上型電腦</a></h4>
                  <p></p>
                </div>
              </div>
            </div>

            <div class="col-lg-4 col-md-6 portfolio-item filter-card wow fadeInUp">
              <div class="portfolio-wrap">
                <figure>
                  <img src="img/portfolio/card2.jpg" class="img-fluid" alt="">
                  <a href="img/portfolio/card2.jpg" class="link-preview" data-lightbox="portfolio" data-title="Card 2" title="Preview"><i class="ion ion-eye"></i></a>
                  <a href="#" class="link-details" title="More Details"><i class="ion ion-android-open"></i></a>
                </figure>
  
                <div style="height: 120px" class="portfolio-info">
                  <h4><a href="#">智慧型眼鏡</a></h4>
                  <p></p>
                </div>
              </div>
            </div>

            <div class="col-lg-4 col-md-6 portfolio-item filter-card wow fadeInUp">
              <div class="portfolio-wrap">
                <figure>
                  <img src="img/portfolio/card2.jpg" class="img-fluid" alt="">
                  <a href="img/portfolio/card2.jpg" class="link-preview" data-lightbox="portfolio" data-title="Card 2" title="Preview"><i class="ion ion-eye"></i></a>
                  <a href="#" class="link-details" title="More Details"><i class="ion ion-android-open"></i></a>
                </figure>
  
                <div style="height: 120px" class="portfolio-info">
                  <h4><a href="#">Kiosk 廣告機</a></h4>
                  <p></p>
                </div>
              </div>
            </div> --}}
  {{-- AR 應用 --}}
            <div class="col-lg-4 col-md-6 portfolio-item filter-web wow fadeInUp" data-wow-delay="0.1s">
              <div class="portfolio-wrap">
                <figure>
                  <img src="https://img.youtube.com/vi/2DA5PUJV2nU/sddefault.jpg" class="img-fluid" alt="">
                  <a href="https://img.youtube.com/vi/2DA5PUJV2nU/sddefault.jpg" class="link-preview" data-lightbox="portfolio" data-title="Web 3" title="Preview"><i class="ion ion-eye"></i></a>
                  <a href="video/AR-filter.mp4" class="link-details" title="More Details"><i class="ion ion-android-open"></i></a>
                </figure>
  
                <div style="height: 120px" class="portfolio-info">
                  <h4><a href="video/AR-filter.mp4" target="_blank">AR 濾鏡</a></h4>
                  <p>擷取人像後，過濾背景並疊加在任何想要的景點上。</p>
                </div>
              </div>
            </div>
  
            <div class="col-lg-4 col-md-6 portfolio-item filter-web wow fadeInUp" data-wow-delay="0.1s">
              <div class="portfolio-wrap">
                <figure>
                  <img src="https://img.youtube.com/vi/MgQsty-lt3Q/maxresdefault.jpg" class="img-fluid" alt="">
                  <a href="https://img.youtube.com/vi/MgQsty-lt3Q/maxresdefault.jpg" class="link-preview" data-lightbox="portfolio" data-title="Web 2" title="Preview"><i class="ion ion-eye"></i></a>
                  <a href="video/AR-3D-building.mp4" class="link-details" title="More Details"><i class="ion ion-android-open"></i></a>
                </figure>
  
                <div style="height: 120px" class="portfolio-info">
                  <h4><a href="video/AR-3D-building.mp4" target="_blank">AR 3D 建築物</a></h4>
                  <p>使用 SLAM + 3D 建模技術，可以看見建築內部。</p>
                </div>
              </div>
            </div>
  
            <div class="col-lg-4 col-md-6 portfolio-item filter-web wow fadeInUp" data-wow-delay="0.2s">
              <div class="portfolio-wrap">
                <figure>
                  <img src="https://img.youtube.com/vi/hemriclfxOs/sddefault.jpg" class="img-fluid" alt="">
                  <a href="https://img.youtube.com/vi/hemriclfxOs/sddefault.jpg" class="link-preview" data-lightbox="portfolio" data-title="Web 1" title="Preview"><i class="ion ion-eye"></i></a>
                  <a href="video/AR-mask.mp4" class="link-details" title="More Details"><i class="ion ion-android-open"></i></a>
                </figure>
  
                <div style="height: 120px" class="portfolio-info">
                  <h4><a href="video/AR-mask.mp4" target="_blank">AR 口罩</a></h4>
                  <p>透過 AR 技術，使口罩服貼臉部。     </p>
                </div>
              </div>
            </div>
            {{-- SNwwS0UrNp0 --}}
            <div class="col-lg-4 col-md-6 portfolio-item filter-web wow fadeInUp" data-wow-delay="0.2s">
              <div class="portfolio-wrap">
                <figure>
                  <img src="https://img.youtube.com/vi/SNwwS0UrNp0/maxresdefault.jpg" class="img-fluid" alt="">
                  <a href="https://img.youtube.com/vi/SNwwS0UrNp0/maxresdefault.jpg" class="link-preview" data-lightbox="portfolio" data-title="Web 1" title="Preview"><i class="ion ion-eye"></i></a>
                  <a href="video/AR-color-hair.mp4" class="link-details" title="More Details"><i class="ion ion-android-open"></i></a>
                </figure>
  
                <div style="height: 120px" class="portfolio-info">
                  <h4><a href="video/AR-color-hair.mp4" target="_blank">AR 頭髮渲染 </a></h4>
                  <p>以 AR Mask 技術抓取髮絲，提供多種髮色變化。</p>
                </div>
              </div>
            </div>
  
          </div>
  
        </div>
      </section><!-- #portfolio -->
</div>

<script type="text/javascript">
  function SetCwinHeight()
  {
  var iframeid=document.getElementById("mainframe"); //iframe id
    if (document.getElementById)
    {  
     if (iframeid && !window.opera)
     {  
      if (iframeid.contentDocument && iframeid.contentDocument.body.offsetHeight)
       {  
         iframeid.height = iframeid.contentDocument.body.offsetHeight;  
       }else if(iframeid.Document && iframeid.Document.body.scrollHeight)
       {  
         iframeid.height = iframeid.Document.body.scrollHeight;  
        }  
      }
     }
  }
  </script>
<?php
/**
 * Шаблон секции с видео
 * template-parts/video-section/video-section.php
 */

// Подключаем стили для видео секции
wp_enqueue_style('video-section-styles', get_template_directory_uri() . '/template-parts/video-section/video-section.css');
?>

<!-- Video section -->
<div id="sp-video"></div>
<section class="section-video">
  <div class="container"
    style="max-width: 1700px; padding-top: 80px; padding-bottom: 50px; border-right: 1px solid rgba(153, 153, 153, 0.9);  border-left: 1px solid rgba(153, 153, 153, 0.9);">
    <div class="row justify-content-center">
      <div class="col-md-9">
        <h2><span>01</span> / Посмотрите нашу видеопрезентацию</h2>
        <div class="row justify-content-center">
          <div class="col-md-10">
            <div style="position: relative">
              <video id="video-player" style="width: 100%; overflow: hidden; border-radius: 25px;"
                playsinline="playsinline" loop="loop"
                poster="<?php echo get_template_directory_uri(); ?>/img/video-poster.jpg">
                <source src="<?php echo get_template_directory_uri(); ?>/videos/video.mp4"
                  type='video/mp4; codecs="avc1.42E01E, mp4a.40.2"' />
              </video>
              <div id="play-circle">
                <div id="play" onclick="playVideo();"></div>
              </div>
              <div id="stop-circle" onclick="pauseVideo();">
                <div><i class="far fa-stop-circle"></i></div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- End video section -->

<script>
  // Функции для видеоплеера (избегаем конфликтов имен)
  function playVideo() {
    document.getElementById("video-player").play();
    document.getElementById("play-circle").style.display = "none";
    document.getElementById("stop-circle").style.display = "block";
  }

  function pauseVideo() {
    document.getElementById("video-player").pause();
    document.getElementById("stop-circle").style.display = "none";
    document.getElementById("play-circle").style.display = "block";
  }
</script>
<!-- Thanks for svg preloaders http://css.yoksel.ru/svg-preloaders/ -->
<!-- begin Preloader -->
<style>
  body {
    overflow: hidden;
  }
  
  #pageloader {
    position: absolute;
    z-index: 9999;
    height: 5000%;
    width: 5000%;
    background-color: #0e111d;  
  }
  
  .pageloader-icon {
    position: absolute;
  }
  
  .r-bounds {
    fill: none;
  }
  
  .svg-preloader {
    height: 100px;
    width: 100px;
  }
  
  .g-circles {
    fill: #fff;
  }
  
  .g-circle {
    -webkit-transform-origin: 60px 60px;
    transform-origin: 60px 60px;
    -webkit-animation: 1.2s linear infinite;
    animation: 1.2s linear infinite;
    -webkit-animation-name: colors, opacity;
    animation-name: colors, opacity;
  }
  
  .g-circle:nth-child(12n + 1) {
    -webkit-transform: rotate(-30deg) translate(10px, 10px) scale(0.85);
    transform: rotate(-30deg) translate(10px, 10px) scale(0.85);
    -webkit-animation-delay: -0.1s;
    animation-delay: -0.1s;
  }
  
  .g-circle:nth-child(12n + 2) {
    -webkit-transform: rotate(-60deg) translate(10px, 10px) scale(0.85);
    transform: rotate(-60deg) translate(10px, 10px) scale(0.85);
    -webkit-animation-delay: -0.2s;
    animation-delay: -0.2s;
  }
  
  .g-circle:nth-child(12n + 3) {
    -webkit-transform: rotate(-90deg) translate(10px, 10px) scale(0.85);
    transform: rotate(-90deg) translate(10px, 10px) scale(0.85);
    -webkit-animation-delay: -0.3s;
    animation-delay: -0.3s;
  }
  
  .g-circle:nth-child(12n + 4) {
    -webkit-transform: rotate(-120deg) translate(10px, 10px) scale(0.85);
    transform: rotate(-120deg) translate(10px, 10px) scale(0.85);
    -webkit-animation-delay: -0.4s;
    animation-delay: -0.4s;
  }
  
  .g-circle:nth-child(12n + 5) {
    -webkit-transform: rotate(-150deg) translate(10px, 10px) scale(0.85);
    transform: rotate(-150deg) translate(10px, 10px) scale(0.85);
    -webkit-animation-delay: -0.5s;
    animation-delay: -0.5s;
  }
  
  .g-circle:nth-child(12n + 6) {
    -webkit-transform: rotate(-180deg) translate(10px, 10px) scale(0.85);
    transform: rotate(-180deg) translate(10px, 10px) scale(0.85);
    -webkit-animation-delay: -0.6s;
    animation-delay: -0.6s;
  }
  
  .g-circle:nth-child(12n + 7) {
    -webkit-transform: rotate(-210deg) translate(10px, 10px) scale(0.85);
    transform: rotate(-210deg) translate(10px, 10px) scale(0.85);
    -webkit-animation-delay: -0.7s;
    animation-delay: -0.7s;
  }
  
  .g-circle:nth-child(12n + 8) {
    -webkit-transform: rotate(-240deg) translate(10px, 10px) scale(0.85);
    transform: rotate(-240deg) translate(10px, 10px) scale(0.85);
    -webkit-animation-delay: -0.8s;
    animation-delay: -0.8s;
  }
  
  .g-circle:nth-child(12n + 9) {
    -webkit-transform: rotate(-270deg) translate(10px, 10px) scale(0.85);
    transform: rotate(-270deg) translate(10px, 10px) scale(0.85);
    -webkit-animation-delay: -0.9s;
    animation-delay: -0.9s;
  }
  
  .g-circle:nth-child(12n + 10) {
    -webkit-transform: rotate(-300deg) translate(10px, 10px) scale(0.85);
    transform: rotate(-300deg) translate(10px, 10px) scale(0.85);
    -webkit-animation-delay: -1s;
    animation-delay: -1s;
  }
  
  .g-circle:nth-child(12n + 11) {
    -webkit-transform: rotate(-330deg) translate(10px, 10px) scale(0.85);
    transform: rotate(-330deg) translate(10px, 10px) scale(0.85);
    -webkit-animation-delay: -1.1s;
    animation-delay: -1.1s;
  }
  
  .g-circle:nth-child(12n + 12) {
    -webkit-transform: rotate(-360deg) translate(10px, 10px) scale(0.85);
    transform: rotate(-360deg) translate(10px, 10px) scale(0.85);
    -webkit-animation-delay: -1.2s;
    animation-delay: -1.2s;
  }
  
  .u-circle {
    -webkit-transform-origin: 15px 15px;
    transform-origin: 15px 15px;
    -webkit-animation: 1.2s linear infinite;
    animation: 1.2s linear infinite;
    -webkit-animation-name: transform;
    animation-name: transform;
  }
  
  .g-circle:nth-child(12n + 1) .u-circle {
    -webkit-animation-delay: -0.1s;
    animation-delay: -0.1s;
  }
  
  .g-circle:nth-child(12n + 2) .u-circle {
    -webkit-animation-delay: -0.2s;
    animation-delay: -0.2s;
  }
  
  .g-circle:nth-child(12n + 3) .u-circle {
    -webkit-animation-delay: -0.3s;
    animation-delay: -0.3s;
  }
  
  .g-circle:nth-child(12n + 4) .u-circle {
    -webkit-animation-delay: -0.4s;
    animation-delay: -0.4s;
  }
  
  .g-circle:nth-child(12n + 5) .u-circle {
    -webkit-animation-delay: -0.5s;
    animation-delay: -0.5s;
  }
  
  .g-circle:nth-child(12n + 6) .u-circle {
    -webkit-animation-delay: -0.6s;
    animation-delay: -0.6s;
  }
  
  .g-circle:nth-child(12n + 7) .u-circle {
    -webkit-animation-delay: -0.7s;
    animation-delay: -0.7s;
  }
  
  .g-circle:nth-child(12n + 8) .u-circle {
    -webkit-animation-delay: -0.8s;
    animation-delay: -0.8s;
  }
  
  .g-circle:nth-child(12n + 9) .u-circle {
    -webkit-animation-delay: -0.9s;
    animation-delay: -0.9s;
  }
  
  .g-circle:nth-child(12n + 10) .u-circle {
    -webkit-animation-delay: -1s;
    animation-delay: -1s;
  }
  
  .g-circle:nth-child(12n + 11) .u-circle {
    -webkit-animation-delay: -1.1s;
    animation-delay: -1.1s;
  }
  
  .g-circle:nth-child(12n + 12) .u-circle {
    -webkit-animation-delay: -1.2s;
    animation-delay: -1.2s;
  }
  
  @-webkit-keyframes opacity {
    0% {
      fill-opacity: 1;
    }
    75% {
      fill-opacity: 0;
    }
  }
  
  @keyframes opacity {
    0% {
      fill-opacity: 1;
    }
    75% {
      fill-opacity: 0;
    }
  }
  
  @-webkit-keyframes colors {
    0% {
      fill: #fff;
    }
    95% {
      fill: #fff;
    }
  }
  
  @keyframes colors {
    0% {
      fill: #fff;
    }
    95% {
      fill: #fff;  
    }
  }
  
  @-webkit-keyframes transform {
    50% {
      -webkit-transform: scale(0.5);
      transform: scale(0.5);
    }
  }
  
  @keyframes transform {
    50% {
      -webkit-transform: scale(0.5);
      transform: scale(0.5);
    }  
  }
  .toast-container{
    display: none!important;
  }

</style>
<div id="pageloader">
  <div class="pageloader-icon">
    <svg viewBox="0 0 120 120" class="svg-preloader">
        <symbol id="s-circle">
          <circle r="10" cx="10" cy="10"></circle>
        </symbol>
        <rect class="r-bounds" width="100%" height="100%" />
        <g id="circle" class="g-circles">
          <g class="g-circle">
            <use xlink:href="#s-circle" class="u-circle" /> </g>
          <g class="g-circle">
            <use xlink:href="#s-circle" class="u-circle" /> </g>
          <g class="g-circle">
            <use xlink:href="#s-circle" class="u-circle" /> </g>
          <g class="g-circle">
            <use xlink:href="#s-circle" class="u-circle" /> </g>
          <g class="g-circle">
            <use xlink:href="#s-circle" class="u-circle" /> </g>
          <g class="g-circle">
            <use xlink:href="#s-circle" class="u-circle" /> </g>
          <g class="g-circle">
            <use xlink:href="#s-circle" class="u-circle" /> </g>
          <g class="g-circle">
            <use xlink:href="#s-circle" class="u-circle" /> </g>
          <g class="g-circle">
            <use xlink:href="#s-circle" class="u-circle" /> </g>
          <g class="g-circle">
            <use xlink:href="#s-circle" class="u-circle" /> </g>
          <g class="g-circle">
            <use xlink:href="#s-circle" class="u-circle" /> </g>
          <g class="g-circle">
            <use xlink:href="#s-circle" class="u-circle" /> </g>
        </g>
      </svg>
  </div>
</div>
<script>
  'use strict';
  var pageloader = document.querySelector('#pageloader');
  var loaderIcon = pageloader.querySelector('.pageloader-icon');

  /* begin Centering Load Icon */
  function modalCentering(loaderIcon) {
    var modal = loaderIcon;
    modal.style.top = document.documentElement.clientHeight / 2 + window.pageYOffset - modal.offsetHeight / 2 + 'px';
    modal.style.left = document.documentElement.clientWidth / 2 + window.pageXOffset - modal.offsetWidth / 2 + 'px';

    window.addEventListener('resize', function() {
      modal.style.top = document.documentElement.clientHeight / 2 + window.pageYOffset - modal.offsetHeight / 2 + 'px';
      modal.style.left = document.documentElement.clientWidth / 2 + window.pageXOffset - modal.offsetWidth / 2 + 'px';
    });
  }
  modalCentering(loaderIcon);
  /* end Centering Load Icon */ 
  
  window.addEventListener('load', function() {
    var counter = 1;
    loaderIcon.style.opacity = 0;  
    (function fadeLoader() {
      if (getComputedStyle(pageloader).opacity > 0) {
        counter -= 0.1;
        pageloader.style.opacity = counter;
        setTimeout(function() {
          fadeLoader();
        }, 20);
      }
      if (getComputedStyle(pageloader).opacity <= 0 || getComputedStyle(pageloader).opacity > 1) {
        document.body.style.overflow = 'visible';
        pageloader.style.display = 'none';   
        return;
      }
    })();  
  });
</script>
<!-- end Preloader -->
  
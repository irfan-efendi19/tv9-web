import "./bootstrap";
import Alpine from "alpinejs";
import AOS from "aos";
import "aos/dist/aos.css";
import "video.js/dist/video-js.css";
import videojs from "video.js";


AOS.init();
window.Alpine = Alpine;
window.videojs = videojs;
Alpine.start();
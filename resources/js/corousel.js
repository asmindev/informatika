import Splide from "@splidejs/splide";
import { AutoScroll } from "@splidejs/splide-extension-auto-scroll";
import "@splidejs/splide/css";

const splide = new Splide("#image-slider", {
    type: "loop",
    drag: "free",
    focus: "center",
    perPage: window.innerWidth > 768 ? 6 : 2,
    autoScroll: {
        speed: 1,
    },
});

splide.mount({ AutoScroll });

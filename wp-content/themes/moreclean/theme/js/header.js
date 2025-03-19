(() => {
    document.addEventListener("DOMContentLoaded", function () {
        const nav_br = document.getElementById("nav-br");
        const top_nav = document.getElementById("top-nav");
        const bot_nav = document.getElementById("bot-nav");
        const subtitle = document.getElementById("subtitle");
        const hdrContent = document.getElementById("hdr-content");
        const sm_nav = document.getElementById("sm-nav");


        window.addEventListener("scroll", function () {

            if (this.scrollY > 70) {
                hdrContent.classList.remove("md:p-3")
                hdrContent.classList.add("md:p-2")

                nav_br.classList.remove("md:block");
                subtitle.classList.remove("md:nav-element-visible")
                top_nav.classList.remove("md:nav-element-visible");
                subtitle.classList.add("md:nav-element-hidden")
                top_nav.classList.add("md:nav-element-hidden");

            } 
            else {
                hdrContent.classList.add("md:p-3")
                hdrContent.classList.remove("md:p-2")

                nav_br.classList.add("md:block");
                subtitle.classList.add("md:nav-element-visible")
                top_nav.classList.add("md:nav-element-visible");
                subtitle.classList.remove("md:nav-element-hidden")
                top_nav.classList.remove("md:nav-element-hidden");

            }
            
        });

        const toggleButton = document.getElementById("hamburger");
        const menu = document.getElementById("navbar-default");

        toggleButton.addEventListener("click", function () {
            menu.classList.toggle("hidden");
        });
    });
})();

(() => {
    document.addEventListener("DOMContentLoaded", function () {
        const header = document.getElementById("hdr");
        const top_nav = document.getElementById("top-nav");
        const subtitle = document.getElementById("subtitle");
        const hdrContent = document.getElementById("hdr-content");

        let isShrunk = false;
        let ticking = false;

        function handleScroll() {
            let scrollY = window.scrollY;

            if (scrollY > 100 && !isShrunk) { 
                hdrContent.classList.add("shrink"); 
                subtitle.classList.add("hidden");
                top_nav.classList.add("hidden");
                isShrunk = true;
            } 
            else if (scrollY < 40 && isShrunk) { 
                hdrContent.classList.remove("shrink");
                subtitle.classList.remove("hidden")
                top_nav.classList.remove("hidden");
                isShrunk = false;
            }
            ticking = false;
        }

        window.addEventListener("scroll", function () {
            if (!ticking) {
                requestAnimationFrame(handleScroll);
                ticking = true;
            }
        });

        const toggleButton = document.getElementById("hamburger");
        const menu = document.getElementById("navbar-default");

        toggleButton.addEventListener("click", function () {
            menu.classList.toggle("hidden");
        });
    });
})();

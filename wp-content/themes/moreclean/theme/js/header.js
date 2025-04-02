(() => {
    // navbar animation on medium+ screen
    document.addEventListener("DOMContentLoaded", function () {
        const hdrContent = document.getElementById("hdr-content");
        const topNav = document.getElementById("top-nav");
        const botNav = document.getElementById("bot-nav");
        const navBr = document.getElementById("nav-br");

        const topNavOriginalHeight = topNav.offsetHeight; 
        const navBrOriginalHeight = navBr.offsetHeight;
        const hdrContentCenter = hdrContent.offsetTop + hdrContent.offsetHeight / 2;

        let ticking = false;
        let maxScroll = 80; 

        function updateNavbar() {
            let scrollY = Math.min(window.scrollY, maxScroll);

            navBr.style.height = `${Math.max(0, navBrOriginalHeight - scrollY)}px`;
            navBr.style.opacity = Math.max(0, 1 - scrollY / maxScroll);

            topNav.style.height = `${Math.max(0, topNavOriginalHeight - scrollY)}px`;
            topNav.style.opacity = Math.max(0, 1 - scrollY / maxScroll);

            let botNavTargetY = hdrContentCenter - botNav.offsetHeight * 1.75;
            botNav.style.transform = `translateY(${Math.min(scrollY, Math.max(botNavTargetY, 0))}px)`;

            ticking = false;
        }

        window.addEventListener("scroll", () => {
            if (!ticking) {
                requestAnimationFrame(updateNavbar);
                ticking = true;
            }
        }, { passive: true });


        //navbar animations on small screens

        //hamburger 
        const toggleButton = document.getElementById("hamburger");
        const menu = document.getElementById("bot-nav");

        toggleButton.addEventListener("click", () => menu.classList.toggle("hidden"));

    });
})();

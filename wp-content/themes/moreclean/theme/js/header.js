(() => {
    document.addEventListener("DOMContentLoaded", function(){
        const header = document.getElementById("header");
        window.addEventListener("scroll", function (){
            if (window.scrollY > 100){
                header.classList.add("h-16", "bg-white");
                header.classList.remove("py-6");
            }
            else {
                header.classList.remove("h-16", "bg-white");
                header.classList.add("py-6");
            }
        })
    })
})();

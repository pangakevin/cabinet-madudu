(function () {
    //===== Preloader

    window.onload = function () {
        window.setTimeout(fadeout, 500);
    };

    function fadeout() {
        document.querySelector(".preloader").style.opacity = "0";
        document.querySelector(".preloader").style.display = "none";
    }

    /*=====================================
	Sticky
	======================================= */
    window.onscroll = function () {
        let header_navbar = document.querySelector(".navbar-area");
        let sticky = header_navbar.offsetTop;

        if (window.pageYOffset > sticky) {
            header_navbar.classList.add("sticky");
        } else {
            header_navbar.classList.remove("sticky");
        }

        // show or hide the back-top-top button
        let backToTo = document.querySelector(".scroll-top");
        if (
            document.body.scrollTop > 50 ||
            document.documentElement.scrollTop > 50
        ) {
            backToTo.style.display = "block";
        } else {
            backToTo.style.display = "none";
        }
    };

    // Get the navbar

    //======= tiny slider for slider-active
    // tns({
    //     container: ".slider-active",
    //     items: 1,
    //     slideBy: "page",
    //     autoplay: true,
    //     mouseDrag: true,
    //     gutter: 0,
    //     nav: true,
    //     controls: false,
    //     autoplayButtonOutput: false,
    // });

    // section menu active

    //===== close navbar-collapse when a  clicked
    let navbarToggler = document.querySelector(".navbar-toggler");
    let navbarCollapse = document.querySelector(".navbar-collapse");

    document.querySelectorAll(".page-scroll").forEach((e) =>
        e.addEventListener("click", () => {
            navbarToggler.classList.remove("active");
            navbarCollapse.classList.remove("show");
        })
    );
    navbarToggler.addEventListener("click", function () {
        navbarToggler.classList.toggle("active");
    });

    //======== WOW active
    new WOW().init();
})();
// gallerie
const search = document.querySelector(".icon-search");
const searchInput = document.querySelector(".search-content");
const closeBtn = document.querySelector(".close-btn");
search.addEventListener("click", () => {
    searchInput.classList.remove("d-none");
    searchInput.style.display = "block";
});

closeBtn.addEventListener("click", () => {
    searchInput.classList.add("d-none");
    navbarToggler.classList.toggle("active");
});

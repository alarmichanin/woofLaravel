$(document).ready(() => {
    addAnimation();

    $(".barI .fa-bars").on("click", () => {
        $(".hamburger_menu").css("visibility", "visible").css("left", "0")
    })
    $(".barI .close_menu").on("click", () => {
        $(".hamburger_menu").css("visibility", "hidden").css("left", "-100%")
    })
});

function addAnimation() {
    const animItems = $('._anim-items');
    if (animItems.length > 0) {
        window.addEventListener('scroll', animOnScroll);

        function animOnScroll() {
            for (let i = 0; i < animItems.length; i++) {
                const animItem = animItems[i];
                let windowHeight = window.innerHeight;
                let elementTop = animItem.getBoundingClientRect().top;
                let elementVisible = 75;
                if (Math.abs(elementTop) < windowHeight - elementVisible) {
                    animItem.classList.add("_active");
                } else {
                    animItem.classList.remove("_active");
                }
            }
        }

        animOnScroll();
    }
}


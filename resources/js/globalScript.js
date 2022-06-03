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
                const animItemHeight = animItem.offsetHeight;
                //TODO: reread this functionality
                const animItemOffset = offset(animItem).top / 1.5;
                const animStart = 1;
                let animItemPoint = window.innerHeight - animItemHeight / animStart;
                if (animItemHeight > window.innerHeight) {
                    animItemPoint = window.innerHeight - window.innerHeight / animStart;
                }
                if ((pageYOffset > animItemOffset - animItemPoint) && pageYOffset < (animItemOffset + animItemHeight)) {
                    animItem.classList.add("_active");
                } else {
                    animItem.classList.remove("_active");
                }
            }
        }

        function offset(el) {
            const rect = el.getBoundingClientRect(),
                scrollLeft = window.pageXOffset || document.documentElement.scrollLeft,
                scrollTop = window.pageYOffset || document.documentElement.scrollTop;
            return {top: rect.top + scrollTop, left: rect.left + scrollLeft}
        }

        animOnScroll();
    }
}


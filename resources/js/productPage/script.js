$(document).ready(() => {
    $(".smallPhoto img").click(function () {
        let generalIMG = $(".mainPhoto img")
        let tmp = $(this).attr("src")
        $(this).attr("src", generalIMG.attr('src'))
        generalIMG.attr('src', tmp)
    })

    $(".counter .minus").click(function () {
        let count = $(".counter .count")[0].innerText
        if (count > 1)
            $(".counter .count")[0].textContent = parseInt(count) - 1
    })

    $(".counter .plus").click(function () {
        let countElem = $(".counter .count")[0]
        let count = countElem.innerText
        countElem.textContent = parseInt(count) + 1
    })

    $(".buyNowBtn").click(function () {
        let count = $(".counter .count")[0].textContent
        window.location.href += `/${count}`
    })
})



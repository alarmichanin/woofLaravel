$(document).ready(() => {
    let len = $('.countE').length
    for(let i=0;i<len;i++){
        let count = $('.countE')[i].innerText.toString().slice(-1)
        $('.countE')[i].innerText = `Кількість: ${count}`
    }
})

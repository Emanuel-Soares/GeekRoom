function load(preloader, loader, elem, classe) {
    $(`${preloader}`).css('display', 'block')
    $(`${loader}`).css('display', 'block')
    setTimeout(() => {
        $(`${elem}`).removeClass(`${classe}`)
        $(`${preloader}`).css('display', 'none')
        $(`${preloader}`).css('display', 'none')
    }, 1000)
}
import $ from 'jquery'

$(document).ready(function () {
  var headerHeight = $('header').outerHeight() // Target your header navigation here
  $('.menu-submenu li a').click(function (e) {
    var targetHref = $(this).attr('href')

    targetHref = targetHref.substring(targetHref.indexOf('#'))

    // Store hash
    // var hashWithoutDash = this.hash.replace('/', '') // remove dash from hash to make $(hashWithoutDash).offset() worked

    $('html, body').animate({
      scrollTop: $(targetHref).offset().top - headerHeight // Add it to the calculation here
    }, 500)

    e.preventDefault()
  })
})

$(document).ready(function () {
  $('.accessibility-toggle').click(function () {
    $('.accessibility-content').toggle()
  })
  $('.accessibility-content--blackWhite').click(function () {
    $('html').toggleClass('black-and-white')
  })
  $('.accessibility-content--fontSize').click(function () {
    $('html').toggleClass('font-bigger')
  })
})

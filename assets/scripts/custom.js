import $ from 'jquery'

$(document).ready(function () {
  var headerHeight = $('header').outerHeight() // Target your header navigation here
  $('.menu-submenu li a').click(function (e) {
    var targetHref = $(this).attr('href')

    targetHref = targetHref.substring(targetHref.indexOf('#'))

    // Store hash
    // var hashWithoutDash = this.hash.replace('/', '') // remove dash from hash to make $(hashWithoutDash).offset() worked

    $('html, body').animate({
      scrollTop: $(targetHref).offset().top - '120px' // Add it to the calculation here
    }, 500)

    e.preventDefault()
  })
})

$(document).ready(function () {
  $('.accessibility-toggle').click(function () {
    $('.accessibility').toggleClass('inView')
  })
  $('.blackWhite').click(function () {
    $('html').toggleClass('high-contrast')
  })
  $('.fontSizebigger').click(function () {
    $('html').toggleClass('font-bigger')
    $('html').removeClass('font-smaller')
  })
  $('.fontSizesmaller').click(function () {
    $('html').toggleClass('font-smaller')
    $('html').removeClass('font-bigger')
  })
})

$(document).ready(function () {
  $('.overlay-toggle').click(function () {
    $('.pageWrapper').toggleClass('about-open')
    $('.overlay-toggle').toggle()
    $('.overlay-close').toggle()
    $('.overlay-about').toggle()
  })
  $('.overlay-close').click(function () {
    $('.pageWrapper').toggleClass('about-open')
    $('.overlay-toggle').toggle()
    $('.overlay-close').toggle()
    $('.overlay-about').toggle()
  })
})

// Play Button
$(document).ready(function () {
  $('.playButton').click(function () {
    $('.player').toggle()
  })
})

// Text Change Membership
$('#pmpro_autorenewal_checkbox .pmpro_checkout-h3-name').text($('#pmpro_autorenewal_checkbox .pmpro_checkout-h3-name').text().replace('Would you like to set up automatic renewals?', 'My membership will automatically renew at 360 per year.'))
$('.pmpro_checkout_field-autorenew .pmprorh_checkbox_label').text($('.pmpro_checkout_field-autorenew .pmprorh_checkbox_label').text().replace('Yes, renew at £200.00 every 6 Months.', 'I understand I can cancel at any time from my membership portal.'))
$('.pmpro_login_wrap .pmpro_actions_nav a').text($('.pmpro_login_wrap .pmpro_actions_nav a').text().replace('Lost Password?', 'Forgot Password?'))

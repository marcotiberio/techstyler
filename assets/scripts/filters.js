import $ from 'jquery'

// Filters
var itemsTopic = $('.grid-item')
$('.filterSection--topic .category').on('click', function (e) {
  e.preventDefault()
  var $this = $(this)
  var catTopic = $this.attr('data-term')
  itemsTopic.filter(':visible').hide()
  itemsTopic.filter('.' + catTopic + '').show()
  $('.filterSection .category').removeClass('active')
  $this.addClass('active').siblings().removeClass('active')
  console.log(catTopic)
})
$('.filterSection .category-all').on('click', function (e) {
  e.preventDefault()
  itemsTopic.show()
})

// Filters
var itemsFormat = $('.grid-item')
$('.filterSection--format .category').on('click', function (e) {
  e.preventDefault()
  var $this = $(this)
  var catFormat = $this.attr('data-format')
  itemsFormat.filter(':visible').hide()
  itemsFormat.filter('.' + catFormat + '').show()
  $this.addClass('active').siblings().removeClass('active')
  console.log(catFormat)
})
$('.filterSection .category-all').on('click', function (e) {
  e.preventDefault()
  itemsTopic.show()
})

// $(document).ready(function () {
//   $('.filter-events').click(function (e) {
//     $('.grid-item--podcast').fadeToggle()
//     $('.grid-item--article').fadeToggle()
//     $(this).toggleClass('filter--active')
//     if ($(this).is('.filter--active')) {
//       $('.grid-item--event').css({ position: 'initial' })
//     } else if ($(this).not('.filter--active')) {
//       $('.grid-item--event').css({ position: 'absolute' })
//     }
//   })

//   $('.filter-articles').click(function (e) {
//     $('.grid-item--event').fadeToggle()
//     $('.grid-item--podcast').fadeToggle()
//     $('.grid-item--article').css('position', 'static')
//     $(this).toggleClass('filter--active')
//     if ($(this).is('.filter--active')) {
//       $('.grid-item--article').css({ position: 'initial' })
//     } else if ($(this).not('.filter--active')) {
//       $('.grid-item--article').css({ position: 'absolute' })
//     }
//   })

//   $('.filter-podcasts').click(function (e) {
//     $('.grid-item--event').fadeToggle()
//     $('.grid-item--article').fadeToggle()
//     $(this).toggleClass('filter--active')
//     if ($(this).is('.filter--active')) {
//       $('.grid-item--podcast').css({ position: 'initial' })
//     } else if ($(this).not('.filter--active')) {
//       $('.grid-item--podcast').css({ position: 'absolute' })
//     }
//   })
// })

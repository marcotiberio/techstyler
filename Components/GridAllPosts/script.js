import $ from 'jquery'

class GridAllPosts extends window.HTMLElement {
  constructor (...args) {
    const self = super(...args)
    self.init()
    return self
  }

  init () {
    this.$ = $(this)
    this.resolveElements()
    this.bindFunctions()
    this.bindEvents()
  }

  resolveElements () {
    this.$buttonFilters = $('.content-title', this)
    this.$filters = $('.alm-filters-container', this)
  }

  bindFunctions () {
    this.toggleFilters = this.toggleFilters.bind(this)
  }

  bindEvents () {
    this.$buttonFilters.on('click', this.toggleFilters)
  }

  toggleFilters (e) {
    this.$filters.slideToggle()
    this.$buttonFilters.toggleClass('filters-open')
  }
}

window.customElements.define('flynt-grid-all-posts', GridAllPosts, { extends: 'div' })

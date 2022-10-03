import $ from 'jquery'
import queryString from 'query-string'

class GridPostsPremium extends window.HTMLDivElement {
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
  }

  bindFunctions () {
  }

  bindEvents () {
  }
}

window.customElements.define('flynt-grid-posts-premium', GridPostsPremium, {
  extends: 'div'
})

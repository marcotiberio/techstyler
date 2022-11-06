import $ from 'jquery'

class BlockMaintenance extends window.HTMLElement {
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
    this.$closeMaintenance = $('.close', this)
    this.$blockMaintenance = $('.content', this)
  }

  bindFunctions () {
    this.hideBlock = this.hideBlock.bind(this)
  }

  bindEvents () {
    this.$closeMaintenance.on('click', this.hideBlock)
  }

  hideBlock (e) {
    this.$blockMaintenance.hide()
  }
}

window.customElements.define('flynt-block-maintenance', BlockMaintenance, { extends: 'div' })

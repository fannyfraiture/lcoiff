import simpleParallax from 'simple-parallax-js'

const parallaxable = document.querySelector('.top-banner__image')
if (parallaxable) new simpleParallax(parallaxable, {
  customWrapper: '.top-banner'
})

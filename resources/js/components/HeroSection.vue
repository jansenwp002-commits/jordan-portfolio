<template>
  <section id="hero" class="hero">
    <div class="hero-bg">
      <div class="grid-lines"></div>
      <div class="glow glow-1"></div>
      <div class="glow glow-2"></div>
    </div>
    <div class="hero-content">
      <div class="hero-tag">Available for opportunities</div>
      <h1 class="hero-name">Jordan<br/><span>Jansen</span></h1>
      <p class="hero-role">
        <span class="typed">{{ displayedRole }}</span><span class="cursor">|</span>
      </p>
      <p class="hero-sub">Computer Science Student · Heriot-Watt University Dubai</p>
      <div class="hero-cta">
        <button class="btn-primary" @click="$parent.scrollTo('contact')">Get In Touch</button>
        <button class="btn-outline" @click="$parent.scrollTo('experience')">View My Work</button>
      </div>
    </div>
    <div class="hero-scroll" @click="$parent.scrollTo('about')">
      <span>scroll</span>
      <div class="scroll-line"></div>
    </div>
  </section>
</template>

<script>
const roles = ['Web Developer', 'Vue.js Developer', 'Laravel Developer', 'ERP Consultant', 'Problem Solver']
export default {
  name: 'HeroSection',
  data() {
    return { displayedRole: '', roleIndex: 0, charIndex: 0, deleting: false }
  },
  mounted() {
    this.typeRole()
  },
  methods: {
    typeRole() {
      const current = roles[this.roleIndex]
      if (!this.deleting) {
        this.displayedRole = current.slice(0, ++this.charIndex)
        if (this.charIndex === current.length) {
          this.deleting = true
          setTimeout(this.typeRole, 1800)
          return
        }
      } else {
        this.displayedRole = current.slice(0, --this.charIndex)
        if (this.charIndex === 0) {
          this.deleting = false
          this.roleIndex = (this.roleIndex + 1) % roles.length
        }
      }
      setTimeout(this.typeRole, this.deleting ? 60 : 100)
    }
  }
}
</script>

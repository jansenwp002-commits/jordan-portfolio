<template>
  <div id="app">
    <NavBar :active-section="activeSection" @navigate="scrollTo" />
    <HeroSection />
    <AboutSection />
    <SkillsSection />
    <ExperienceSection />
    <ProjectsSection />
    <ContactSection />
    <FooterSection />
  </div>
</template>

<script>
import NavBar from './components/NavBar.vue'
import HeroSection from './components/HeroSection.vue'
import AboutSection from './components/AboutSection.vue'
import SkillsSection from './components/SkillsSection.vue'
import ExperienceSection from './components/ExperienceSection.vue'
import ProjectsSection from './components/ProjectsSection.vue'
import ContactSection from './components/ContactSection.vue'
import FooterSection from './components/FooterSection.vue'

export default {
  name: 'App',
  components: { NavBar, HeroSection, AboutSection, SkillsSection, ExperienceSection, ProjectsSection, ContactSection, FooterSection },
  data() {
    return { activeSection: 'hero' }
  },
  mounted() {
    const observer = new IntersectionObserver((entries) => {
      entries.forEach(e => { if (e.isIntersecting) this.activeSection = e.target.id })
    }, { threshold: 0.4 })
    document.querySelectorAll('section[id]').forEach(s => observer.observe(s))
  },
  methods: {
    scrollTo(id) {
      document.getElementById(id)?.scrollIntoView({ behavior: 'smooth' })
    }
  }
}
</script>

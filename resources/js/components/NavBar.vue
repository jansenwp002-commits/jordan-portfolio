<template>
  <nav :class="['navbar', { scrolled: isScrolled }]">
    <div class="nav-logo">JJ</div>
    <ul class="nav-links">
      <li v-for="link in links" :key="link.id">
        <a
          :class="{ active: activeSection === link.id }"
          @click.prevent="$emit('navigate', link.id)"
          href="#">
          {{ link.label }}
        </a>
      </li>
    </ul>
    <button class="nav-toggle" @click="menuOpen = !menuOpen">☰</button>
    <ul :class="['nav-mobile', { open: menuOpen }]">
      <li v-for="link in links" :key="link.id">
        <a @click.prevent="$emit('navigate', link.id); menuOpen = false" href="#">{{ link.label }}</a>
      </li>
    </ul>
  </nav>
</template>

<script>
export default {
  name: 'NavBar',
  props: { activeSection: String },
  emits: ['navigate'],
  data() {
    return {
      isScrolled: false,
      menuOpen: false,
      links: [
        { id: 'about', label: 'About' },
        { id: 'skills', label: 'Skills' },
        { id: 'experience', label: 'Experience' },
        { id: 'projects', label: 'Projects' },
        { id: 'contact', label: 'Contact' },
      ]
    }
  },
  mounted() {
    window.addEventListener('scroll', () => { this.isScrolled = window.scrollY > 50 })
  }
}
</script>

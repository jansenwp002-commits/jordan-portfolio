<template>
  <section id="contact" class="section contact">
    <div class="container">
      <h2 class="section-title">Get In <span>Touch</span></h2>
      <div class="contact-grid">
        <div class="contact-info">
          <h3>Let's connect</h3>
          <p>I'm currently open to internship extensions, junior developer roles, and freelance web projects. Feel free to reach out!</p>
          <div class="contact-items">
            <div class="contact-item">
              <span class="c-icon">📍</span>
              <span>Dubai, UAE</span>
            </div>
            <div class="contact-item">
              <span class="c-icon">📞</span>
              <span>+971 54 379 2183</span>
            </div>
            <div class="contact-item">
              <span class="c-icon">✉️</span>
              <span>jansenwp002@gmail.com</span>
            </div>
            <div class="contact-item">
              <span class="c-icon">🎓</span>
              <span>Heriot-Watt University Dubai</span>
            </div>
          </div>
          <a href="https://www.linkedin.com/in/jordan-jansen-52a5942b1/" target="_blank" class="btn-primary" style="margin-top:1.5rem;display:inline-block;">LinkedIn Profile</a>
        </div>

        <form class="contact-form" @submit.prevent="submitForm">
          <div v-if="submitted" class="form-success">
            ✅ Thanks! I'll get back to you soon.
          </div>
          <template v-else>
            <div class="form-group">
              <label>Your Name</label>
              <input v-model="form.name" type="text" placeholder="John Doe" required />
            </div>
            <div class="form-group">
              <label>Email Address</label>
              <input v-model="form.email" type="email" placeholder="john@example.com" required />
            </div>
            <div class="form-group">
              <label>Subject</label>
              <input v-model="form.subject" type="text" placeholder="Job opportunity / Project inquiry" />
            </div>
            <div class="form-group">
              <label>Message</label>
              <textarea v-model="form.message" rows="5" placeholder="Tell me about the opportunity..." required></textarea>
            </div>
            <button type="submit" class="btn-primary" :disabled="sending">
              {{ sending ? 'Sending...' : 'Send Message' }}
            </button>
          </template>
        </form>
      </div>
    </div>
  </section>
</template>

<script>
export default {
  name: 'ContactSection',
  data() {
    return {
      submitted: false,
      sending: false,
      form: { name: '', email: '', subject: '', message: '' }
    }
  },
  methods: {
    async submitForm() {
      this.sending = true
      try {
        await fetch('/api/contact', {
          method: 'POST',
          headers: { 'Content-Type': 'application/json', 'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]')?.content },
          body: JSON.stringify(this.form)
        })
        this.submitted = true
      } catch (e) {
        alert('Something went wrong. Please email me directly.')
      }
      this.sending = false
    }
  }
}
</script>

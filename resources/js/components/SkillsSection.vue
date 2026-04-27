<template>
  <section id="skills" class="section skills">
    <div class="container">
      <h2 class="section-title">Technical <span>Skills</span></h2>
      <div class="skills-grid">
        <div v-for="cat in categories" :key="cat.name" class="skill-card">
          <div class="skill-icon">{{ cat.icon }}</div>
          <h3>{{ cat.name }}</h3>
          <div class="skill-tags">
            <span v-for="tag in cat.tags" :key="tag" class="tag">{{ tag }}</span>
          </div>
        </div>
      </div>
    </div>
  </section>
</template>

<script>
export default {
  name: 'SkillsSection',
  data() {
    return {
      categories: [
        { icon: '🖥️', name: 'Frontend', tags: ['Vue.js', 'React.js', 'JavaScript ES6+', 'HTML5', 'CSS3', 'Elementor Pro'] },
        { icon: '⚙️', name: 'Backend', tags: ['Laravel (PHP)', 'Python', 'Java', 'ERPNext Scripts', 'Client-side JS'] },
        { icon: '🗄️', name: 'ERP & CMS', tags: ['ERPNext', 'WordPress', 'HubSpot', 'Docker Desktop'] },
        { icon: '🤖', name: 'Automation & AI', tags: ['n8n Workflows', 'MCP Server (Python)', 'Web Scraping', 'API Integrations'] },
        { icon: '🛠️', name: 'Tools & DevOps', tags: ['Git', 'VS Code', 'Jira', 'Docker', 'SQL'] },
        { icon: '📧', name: 'Marketing Tech', tags: ['Email Newsletters', 'HubSpot Dashboards', 'Campaign Design'] },
      ]
    }
  }
}
</script>

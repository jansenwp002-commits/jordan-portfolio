<template>
  <section id="projects" class="section projects">
    <div class="container">
      <h2 class="section-title">Featured <span>Projects</span></h2>
      <div class="projects-grid">
        <div v-for="p in projects" :key="p.title" class="project-card">
          <div class="project-img" :style="{ background: p.gradient }">
            <span class="project-emoji">{{ p.emoji }}</span>
          </div>
          <div class="project-body">
            <h3>{{ p.title }}</h3>
            <p>{{ p.desc }}</p>
            <div class="project-tags">
              <span v-for="tag in p.tags" :key="tag" class="tag">{{ tag }}</span>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
</template>

<script>
export default {
  name: 'ProjectsSection',
  data() {
    return {
      projects: [
        {
          emoji: '🚗',
          title: 'Aboudcar – Vehicle Comparison Platform',
          desc: 'Full-stack vehicle comparison website built with Laravel backend and Vue.js frontend. Users can compare car specs, view pricing, and browse by category.',
          tags: ['Laravel', 'Vue.js', 'PHP', 'MySQL'],
          gradient: 'linear-gradient(135deg, #0f2027, #203a43, #2c5364)'
        },
        {
          emoji: '🏢',
          title: 'GA Holding Website Revamp',
          desc: 'Full rebranding and revamp of the GA Holding corporate website, including UI/UX overhaul, brand migration from GA Group, and comprehensive testing.',
          tags: ['WordPress', 'Elementor Pro', 'CSS', 'JavaScript'],
          gradient: 'linear-gradient(135deg, #1a1a2e, #16213e, #0f3460)'
        },
        {
          emoji: '🤖',
          title: 'MCP Server for AI Integration',
          desc: 'Built a Model Context Protocol (MCP) server in Python to enable AI tool integration, allowing automated task handling across internal business systems.',
          tags: ['Python', 'MCP', 'AI', 'REST API'],
          gradient: 'linear-gradient(135deg, #0d0d0d, #1a1a1a, #2d1b69)'
        },
        {
          emoji: '🛒',
          title: 'Carrefour Price Scraper',
          desc: 'Automated web scraper that accepts EAN barcodes as input and retrieves real-time product pricing from Carrefour, enabling competitive price analysis.',
          tags: ['Python', 'Web Scraping', 'EAN', 'Automation'],
          gradient: 'linear-gradient(135deg, #004e92, #000428)'
        },
        {
          emoji: '⚙️',
          title: 'ERPNext Custom Integrations',
          desc: 'Deployed ERPNext on localhost via Docker, built client scripts in JavaScript for custom workflows, and configured a full email system for business communications.',
          tags: ['ERPNext', 'Docker', 'JavaScript', 'Email Config'],
          gradient: 'linear-gradient(135deg, #134e5e, #71b280)'
        },
        {
          emoji: '📱',
          title: 'n8n WhatsApp Inquiry Automation',
          desc: 'Created n8n automation workflow to handle incoming WhatsApp business inquiries, routing them to appropriate teams and triggering follow-up actions.',
          tags: ['n8n', 'WhatsApp API', 'Automation', 'Workflow'],
          gradient: 'linear-gradient(135deg, #1d4350, #a43931)'
        },
        
      ]
    }
  }
}
</script>

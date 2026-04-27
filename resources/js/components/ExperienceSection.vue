<template>
  <section id="experience" class="section experience">
    <div class="container">
      <h2 class="section-title">Tasks <span>Completed</span></h2>

      <div class="exp-header">
        <div class="exp-company">
          <h3>Web Developer Intern</h3>
          <p>Ghassan Aboud Holding · Dubai, UAE · Nov 2024 – Apr 2026</p>
        </div>
        <div class="exp-badge">5.5 months</div>
      </div>

      <div class="exp-filter">
        <button v-for="cat in taskCategories" :key="cat" :class="['filter-btn', { active: activeFilter === cat }]"
          @click="activeFilter = cat">
          {{ cat }}
        </button>
      </div>

      <div class="task-grid">
        <div v-for="task in filteredTasks" :key="task.id" class="task-card" :class="{ done: task.status === 'DONE' }">
          <div class="task-header">
            <span class="task-id">{{ task.id }}</span>
            <span :class="['task-status', task.status.toLowerCase()]">{{ task.status }}</span>
          </div>
          <p class="task-title">{{ task.title }}</p>
          <span class="task-cat">{{ task.category }}</span>
        </div>
      </div>

      <div class="exp-section">
        <h3>Education</h3>
        <div class="edu-card">
          <div>
            <strong>BSc Computer Science & Software Engineering</strong>
            <p>Heriot-Watt University Dubai · Jan 2024 – Present</p>
          </div>
          <div>
            <strong>National Senior Certificate (Bachelor's Pass)</strong>
            <p>Brackenfell High School, Cape Town · Graduated Dec 2023</p>
          </div>
        </div>
      </div>
    </div>
  </section>
</template>

<script>
export default {
  name: 'ExperienceSection',
  data() {
    return {
      activeFilter: 'All',
      tasks: [
        { title: 'Creating frontend for Floor Sale using React', status: 'DONE', category: 'Frontend' },
        { title: 'Aboudcar Vehicle Comparison Page (Laravel + Vue)', status: 'DONE', category: 'Frontend' },
        { title: 'Aboudcar Comparisons Table', status: 'DONE', category: 'Frontend' },
        { title: 'Completed adding Floating menu to GWM website', status: 'DONE', category: 'Frontend' },
        { title: 'GA Holding Website Revamp', status: 'DONE', category: 'Frontend' },
        { title: 'Completed Indo Food page for adfoodhub.com', status: 'DONE', category: 'Frontend' },
        { title: 'GA Group → GA Holding Updates to websites', status: 'DONE', category: 'Frontend' },
        { title: 'Changing all websites from GA Group → GA Holding', status: 'DONE', category: 'Frontend' },
        { title: 'GWM vehicle prices', status: 'DONE', category: 'Frontend' },
        { title: 'GA Holding Website Testing', status: 'DONE', category: 'Frontend' },
        { title: 'Built MCP server using Python for AI integration', status: 'DONE', category: 'Automation' },
        { title: 'Explore n8n for Whatsapp Inquiry automation', status: 'DONE', category: 'Automation' },
        { title: 'Scraping Carrefour using EAN number as input', status: 'DONE', category: 'Automation' },
        { title: 'Creating sample tasks using n8n', status: 'DONE', category: 'Automation' },
        { title: 'Importing data from a website and scraping items', status: 'DONE', category: 'Automation' },
        { title: 'Running ERPNext on localhost using Docker', status: 'DONE', category: 'ERP' },
        { title: 'Email Configuration System on ERPNext', status: 'DONE', category: 'ERP' },
        { title: 'ERPNext Task using Client Script (JavaScript)', status: 'DONE', category: 'ERP' },
        { title: 'Exploring ERPnext', status: 'DONE', category: 'ERP' },
        { title: 'Hubspot Dashboard Configuration', status: 'DONE', category: 'Marketing' },
        { title: 'Grandiose Newsletter 18-March-2026', status: 'DONE', category: 'Marketing' },
        { title: 'Grandiose Newsletter 10-Mar-2026', status: 'DONE', category: 'Marketing' },
        { title: 'GrandRose Newsletter 14-Feb-2026 Valentines', status: 'DONE', category: 'Marketing' },
        { title: 'User step-by-step guideline for GWM website', status: 'DONE', category: 'Docs' },
        { title: 'Admin User step-by-step guideline for GWM', status: 'DONE', category: 'Docs' },
        { title: 'Reviewing IT Engineering standards', status: 'DONE', category: 'Docs' },
        { title: 'Website optimization for Gaelan Medical', status: 'DONE', category: 'Frontend' },
        { title: 'Website optimization for GWM', status: 'DONE', category: 'Frontend' },
        { title: 'Website optimization for King Long', status: 'DONE', category: 'Frontend' },
        { title: 'Exploring Github Copilot', status: 'DONE', category: 'Automation'},
      ]
    }
  },
  computed: {
    taskCategories() {
      return ['All', ...new Set(this.tasks.map(t => t.category))]
    },
    filteredTasks() {
      return this.activeFilter === 'All' ? this.tasks : this.tasks.filter(t => t.category === this.activeFilter)
    }
  }
}
</script>

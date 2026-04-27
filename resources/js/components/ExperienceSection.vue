<template>
  <section id="experience" class="section experience">
    <div class="container">
      <h2 class="section-title">Work <span>Experience</span></h2>

      <div class="exp-header">
        <div class="exp-company">
          <h3>Junior Web Developer Intern</h3>
          <p>Web Development Team · Dubai, UAE · Nov 2024 – Apr 2026</p>
        </div>
        <div class="exp-badge">5.5 months</div>
      </div>

      <div class="exp-filter">
        <button
          v-for="cat in taskCategories"
          :key="cat"
          :class="['filter-btn', { active: activeFilter === cat }]"
          @click="activeFilter = cat">
          {{ cat }}
        </button>
      </div>

      <div class="task-grid">
        <div
          v-for="task in filteredTasks"
          :key="task.id"
          class="task-card"
          :class="{ done: task.status === 'DONE' }">
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
        { id: 'WEB-301', title: 'Creating frontend for Floor Sale using React', status: 'IN PROGRESS', category: 'Frontend' },
        { id: 'WEB-439', title: 'Aboudcar Vehicle Comparison Page (Laravel + Vue)', status: 'DONE', category: 'Frontend' },
        { id: 'WEB-431', title: 'Aboudcar Comparisons Table', status: 'DONE', category: 'Frontend' },
        { id: 'WEB-428', title: 'Completed adding Floating menu to GWM website', status: 'DONE', category: 'Frontend' },
        { id: 'WEB-340', title: 'GA Holding Website Revamp', status: 'IN PROGRESS', category: 'Frontend' },
        { id: 'WEB-339', title: 'Completed Indo Food page for adfoodhub.com', status: 'IN PROGRESS', category: 'Frontend' },
        { id: 'WEB-312', title: 'GA Group → GA Holding Updates to websites', status: 'DONE', category: 'Frontend' },
        { id: 'WEB-299', title: 'Changing all websites from GA Group → GA Holding', status: 'DONE', category: 'Frontend' },
        { id: 'WEB-440', title: 'GWM vehicle prices', status: 'DONE', category: 'Frontend' },
        { id: 'WEB-410', title: 'GA Holding Website Testing', status: 'DONE', category: 'Frontend' },
        { id: 'WEB-450', title: 'Built MCP server using Python for AI integration', status: 'DONE', category: 'Automation' },
        { id: 'WEB-382', title: 'Explore n8n for Whatsapp Inquiry automation', status: 'IN PROGRESS', category: 'Automation' },
        { id: 'WEB-324', title: 'Scraping Carrefour using EAN number as input', status: 'DONE', category: 'Automation' },
        { id: 'WEB-282', title: 'Creating sample tasks using n8n', status: 'DONE', category: 'Automation' },
        { id: 'WEB-275', title: 'Importing data from a website and scraping items', status: 'DONE', category: 'Automation' },
        { id: 'WEB-313', title: 'Running ERPNext on localhost using Docker', status: 'DONE', category: 'ERP' },
        { id: 'WEB-325', title: 'Email Configuration System on ERPNext', status: 'IN PROGRESS', category: 'ERP' },
        { id: 'WEB-298', title: 'ERPNext Task using Client Script (JavaScript)', status: 'DONE', category: 'ERP' },
        { id: 'WEB-290', title: 'Exploring ERPnext', status: 'IN PROGRESS', category: 'ERP' },
        { id: 'WEB-405', title: 'Hubspot Dashboard Configuration', status: 'DONE', category: 'Marketing' },
        { id: 'WEB-444', title: 'Grandiose Newsletter 18-March-2026', status: 'DONE', category: 'Marketing' },
        { id: 'WEB-438', title: 'Grandiose Newsletter 10-Mar-2026', status: 'DONE', category: 'Marketing' },
        { id: 'WEB-409', title: 'GrandRose Newsletter 14-Feb-2026 Valentines', status: 'DONE', category: 'Marketing' },
        { id: 'WEB-283', title: 'User step-by-step guideline for GWM website', status: 'DONE', category: 'Docs' },
        { id: 'WEB-284', title: 'Admin User step-by-step guideline for GWM', status: 'DONE', category: 'Docs' },
        { id: 'WEB-279', title: 'Reviewing IT Engineering standards', status: 'IN PROGRESS', category: 'Docs' },
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

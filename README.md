# Jordan Jansen – Portfolio Website
### Built with Laravel + Vue.js

---

## 📁 Project Structure

```
jordan-portfolio/
├── app/Http/Controllers/
│   └── ContactController.php     ← Handles contact form emails
├── resources/
│   ├── css/app.css               ← All styles
│   ├── js/
│   │   ├── app.js                ← Vue entry point
│   │   ├── App.vue               ← Root component
│   │   └── components/
│   │       ├── NavBar.vue
│   │       ├── HeroSection.vue
│   │       ├── AboutSection.vue
│   │       ├── SkillsSection.vue
│   │       ├── ExperienceSection.vue
│   │       ├── ProjectsSection.vue
│   │       ├── ContactSection.vue
│   │       └── FooterSection.vue
│   └── views/welcome.blade.php   ← Laravel blade (loads Vue)
├── routes/web.php                ← Laravel routes
├── vite.config.js                ← Vite + Vue config
└── package.json                  ← JS dependencies
```

---

## 🚀 Setup Instructions (Step by Step)

### Step 1 — Install Prerequisites

Make sure you have these installed on your machine:

| Tool | Version | Download |
|------|---------|----------|
| PHP | 8.2+ | https://www.php.net/downloads |
| Composer | Latest | https://getcomposer.org |
| Node.js | 18+ | https://nodejs.org |
| Git | Latest | https://git-scm.com |

> **On Windows**: Use [Laragon](https://laragon.org) — it installs PHP, MySQL, and Composer in one click. Recommended!

---

### Step 2 — Create a New Laravel Project

Open your terminal and run:

```bash
composer create-project laravel/laravel jordan-portfolio
cd jordan-portfolio
```

---

### Step 3 — Copy the Project Files

Copy ALL the files from this zip into your `jordan-portfolio` folder, **replacing** any existing files.

---

### Step 4 — Install PHP Dependencies

```bash
composer install
```

---

### Step 5 — Install JavaScript Dependencies

```bash
npm install
```

---

### Step 6 — Set Up Environment

```bash
cp .env.example .env
php artisan key:generate
```

Open `.env` and update these lines for the contact form email:

```env
MAIL_MAILER=smtp
MAIL_HOST=smtp.gmail.com
MAIL_PORT=587
MAIL_USERNAME=jansenwp002@gmail.com
MAIL_PASSWORD=your_gmail_app_password
MAIL_ENCRYPTION=tls
MAIL_FROM_ADDRESS=jansenwp002@gmail.com
MAIL_FROM_NAME="Jordan Jansen Portfolio"
```

> **Gmail App Password**: Go to Google Account → Security → 2-Step Verification → App Passwords → Generate one for "Mail"

---

### Step 7 — Run the Development Server

Open **two terminals** side by side:

**Terminal 1 – Laravel backend:**
```bash
php artisan serve
```

**Terminal 2 – Vue frontend (Vite):**
```bash
npm run dev
```

Now open your browser and go to: **http://localhost:8000** 🎉

---

### Step 8 — Build for Production

When ready to deploy to a live server:

```bash
npm run build
```

This compiles and minifies all your CSS and JS into the `public/build/` folder.

---

## 🌐 Deploying to a Live Server

### Option A — Shared Hosting (cPanel)
1. Upload all files via FTP
2. Point your domain's document root to the `/public` folder
3. Run `composer install --no-dev` on the server
4. Set correct file permissions: `chmod -R 775 storage bootstrap/cache`

### Option B — VPS (Ubuntu + Nginx)
```bash
# Install dependencies
sudo apt install php8.2 php8.2-fpm nginx mysql-server nodejs npm composer

# Clone/upload project
cd /var/www
# Upload files here

# Set permissions
chown -R www-data:www-data /var/www/jordan-portfolio
chmod -R 775 storage bootstrap/cache

# Configure Nginx to point to /public folder
# Run: npm run build && composer install --no-dev
```

---

## 🛠 Customisation Tips

| What to change | Where |
|---|---|
| Your photo | Replace the "JJ" placeholder in `AboutSection.vue` with `<img src="...">` |
| Add/remove Jira tasks | Edit the `tasks` array in `ExperienceSection.vue` |
| Add new projects | Edit the `projects` array in `ProjectsSection.vue` |
| Change colours | Edit CSS variables at the top of `resources/css/app.css` |
| Change your name/info | Edit `AboutSection.vue` and `HeroSection.vue` |

---

## ❓ Common Issues

**"npm: command not found"** → Install Node.js from https://nodejs.org

**"composer: command not found"** → Install Composer from https://getcomposer.org

**Blank page after setup** → Make sure both `php artisan serve` AND `npm run dev` are running

**Contact form not sending** → Check your `.env` mail settings and that you're using a Gmail App Password (not your regular password)

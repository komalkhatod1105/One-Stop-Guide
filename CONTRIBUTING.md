# 🛠️ Contributing to One-Stop-Guide

Thank you for considering contributing to **One-Stop-Guide** — a helpful city guide platform. This document outlines how you can contribute, coding standards, and the contribution process.

---

## 📁 Project Structure

- `*.html` – Static city guide pages (e.g., `ajmer.html`, `delhi.html`)
- `*.php` – Backend scripts (e.g., `dbconnect.php`, `city.php`)
- `CityGuideDb.sql` – SQL file to set up the database
- `README.md` – Project overview and setup instructions
- `LICENSE.md` – License file

---

## 🚀 Getting Started

### 1. Fork & Clone

```bash
git clone https://github.com/YOUR_USERNAME/One-Stop-Guide.git
cd One-Stop-Guide
```

### 2. Set Up Locally

- Install [XAMPP](https://www.apachefriends.org/index.html) or any LAMP stack
- Move the project to the `htdocs` directory
- Import `CityGuideDb.sql` into phpMyAdmin
- Open the app in your browser:  
  `http://localhost/One-Stop-Guide/index.html`

---

## ✅ How You Can Contribute

- Improve UI/UX of city pages
- Add new city guides
- Refactor or enhance backend PHP scripts
- Fix bugs or broken links
- Improve accessibility and responsiveness
- Help with documentation (README, guides)

---

## 🧠 Code Guidelines

- Write clean, readable, and commented code
- Follow HTML5 and PHP conventions
- Use semantic HTML and proper indentation
- Sanitize inputs and follow secure DB practices
- Keep UI consistent with existing pages

---

## 🧪 Testing Checklist

- ✅ HTML loads without errors in the browser
- ✅ Pages pass W3C validation
- ✅ PHP scripts connect to the database successfully
- ✅ Forms and links function as expected
- ✅ Design is responsive on different screen sizes

---

## 🔁 Submitting a Pull Request

1. Create a new branch:

```bash
git checkout -b feature/your-feature-name
```

2. Make your changes and commit:

```bash
git commit -m "Add: Description of what you changed"
```

3. Push and open a PR:

```bash
git push origin feature/your-feature-name
```

4. Open a Pull Request and include:
   - ✅ What you did
   - ✅ Why it matters
   - ✅ How to test it

---

## 👥 Community Standards

- Be respectful and inclusive
- Provide helpful feedback during reviews
- Submit clean and tested code
- Collaborate to improve the project together

---

## 💬 Questions?

Feel free to [open an issue](https://github.com/YOUR_USERNAME/One-Stop-Guide/issues) for help or guidance.

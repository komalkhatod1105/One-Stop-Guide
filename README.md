# 🌟 One Stop Guide

**One Stop Guide is a polished city discovery website for Indian destinations, combining static city pages with a dynamic database-powered city explorer.**

<p align="center">
  <img src="https://skillicons.dev/icons?i=html,css,js,php,mysql,git,github,vscode" alt="Tech stack" />
</p>

---

## ✨ Project summary

This project delivers a clean travel discovery experience for Indian cities.
It includes:

- A responsive homepage with city cards and city-specific links.
- Static city pages for destination highlights.
- A dynamic `city.php` page that loads city data from MySQL.
- Shared styles and behavior for consistent UI across the site.
- A simple database schema for city entries, hospitals, schools, cafes, and popular landmarks.

---

## 🚀 Key features

- **Static homepage** with city cards, Explore buttons, and direct city links.
- **Dynamic city listing** via `city.php` that reads from the `city_data` table.
- **City filtering** using query parameters like `city.php?city=Sikar`.
- **Featured cities** based on database entry count.
- **Responsive navigation** with dropdown and mobile hamburger menu.
- **Clean layout** with shared header/footer, cards, buttons, and hero sections.

---

## 📸 Screenshot preview

<p align="center">
  <img src="https://via.placeholder.com/1000x520.png?text=One+Stop+Guide+Preview" alt="One Stop Guide screenshot" width="900" style="border-radius: 16px; box-shadow: 0 20px 40px rgba(0,0,0,0.15);" />
</p>

> Replace the placeholder image with your actual screenshot file to show the real UI.

---

## 🏗️ Architecture overview

This project is organized into three main layers:

1. **Presentation layer**
   - `index.html` — homepage with city cards and navigation.
   - `*.html` city pages — individual city details and local highlights.
   - `style.css` — site-wide styling and responsive design.
   - `script.js` — dropdown menu, mobile menu, button interactions, and Sikar page behavior.

2. **Application layer**
   - `city.php` — dynamic page that loads city rows from MySQL.
   - `dbconnect.php` — database connection helper with graceful error handling.

3. **Data layer**
   - `CityGuideDb.sql` — database schema, sample data, and city entries.

---

## 🧠 Database design

The `city_data` table stores city-level entries with the following fields:

- `id` — Auto-increment record ID
- `state_name` — Optional state or region name
- `city_name` — City identifier
- `place_name` — Place, hospital, college, school, or cafe name
- `place_type` — Category of the place
- `description` — Short details for each entry

The project uses `city_name` to filter specific city pages and build the featured city list.

---

## 🔧 Setup instructions

1. Clone the repository:

```bash
git clone https://github.com/komalkhatod1105/One-Stop-Guide.git
cd One-Stop-Guide
```

2. Create the database:

```sql
-- Run this inside MySQL or phpMyAdmin
SOURCE CityGuideDb.sql;
```

3. Configure the database connection in `dbconnect.php`:

```php
$host = "localhost";
$user = "root";
$password = "";
$database = "CityGuideDB";
```

4. Run the project from a PHP-enabled web server:

- Use XAMPP / WAMP / MAMP
- Or run with PHP built-in server:

```bash
php -S localhost:8000
```

5. Open the site in your browser:

- `http://localhost:8000/index.html`
- `http://localhost:8000/city.php`
<img width="1900" height="774" alt="{70D1102E-8587-47C1-81DF-323DAB86F522}" src="https://github.com/user-attachments/assets/c68fd826-5c91-4485-a874-850b48c58d6e" />


---

## 📌 Usage examples

- Open `city.php` to view all database entries.
- Open `city.php?city=Sikar` to view Sikar-specific content.
- The `Sikar` page now connects its Show Less button to `city.php?city=Sikar`.
- The homepage dropdown gives access to all static city pages.

---

## 🌍 Supported cities in the database

The database currently stores entries for:

- Ajmer
- Aligarh
- Burdwan
- Delhi
- Fatehpur
- Jaipur
- Kishangarh
- Kota
- Kolkata
- Laxmangarh
- Pune
- Ratangarh
- Sikar

Each city includes places, hospitals, colleges, schools, and cafes.

---

## 🛠️ Customization and extension

You can easily extend the project by:

- adding more cities to `CityGuideDb.sql`
- creating new static city pages
- improving the homepage cards and navigation
- enhancing `city.php` with category filters or search

---

## 🤝 Contributing

Contributions are welcome! If you want to help, please:

1. Fork this repository
2. Create a feature branch
3. Make your improvements
4. Open a pull request

---

## 📜 License

This project is licensed under the MIT License.

---

## 👩‍💻 Maintainer

**Komal Khatod** — https://github.com/komalkhatod1105

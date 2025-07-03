# One Stop Guide

**One Stop Guide** is a responsive and dynamic web platform that helps users explore major Indian cities. It combines static city pages with PHP & MySQL backend to deliver city-specific information dynamically, and includes Google Maps integration for real-world exploration.

---

## 🚀 Features

- 🏙️ Explore various Indian cities like Ajmer, Delhi, Sikar, and more
- 📍 “Explore” button redirects to the city on Google Maps
- 🧠 City info dynamically loaded using PHP and MySQL
- 💡 User-friendly and mobile responsive design
- 🧾 Database file (`CityGuideDb.sql`) included for easy setup

---

## 🧑‍💻 Technologies Used

### Frontend:
- HTML5
- CSS3
- JavaScript

### Backend:
- PHP

### Database:
- MySQL
  
## 📁 Project Structure

One-Stop-Guide/
│
├── indx.html # Main homepage
├── ajmer.html, delhi.html # Static city pages
├── city.php, sikar.php # Dynamic pages using PHP
├── dbconnect.php # DB connection file
├── CityGuideDb.sql # SQL file to create and populate DB
└── assets/ # (If present) For images, CSS, JS


---

## ⚙️ How to Run Locally (XAMPP/WAMP)

1. Clone or download this repo and move the folder into `htdocs` (for XAMPP).
2. Start **Apache** and **MySQL** from XAMPP Control Panel.
3. Import the database:
   - Go to `phpMyAdmin`
   - Create a DB named `CityGuide`
   - Import `CityGuideDb.sql`
4. Open the browser and visit:
5.  Click on any city card or page. Pages like `sikar.php` fetch data from DB.

---

## 💡 Future Scope

- Add login/register functionality
- User feedback or review system
- Admin panel to update city content
- API integration (weather, transport, tourism)

---

## 🙋‍♀️ Developed By

**Komal Khatod**  
B.Tech CSE (3rd Year), Mody University of Science and Technology  
📧 Email: [komalkhatod1234@gmail.com]  
🔗 GitHub: [komalkhatod1105](https://github.com/komalkhatod1105)








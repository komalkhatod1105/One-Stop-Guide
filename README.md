# 🌍 One Stop Guide

One Stop Guide is a responsive web platform designed to help users explore major Indian cities with ease. The project combines static web pages with a PHP and MySQL backend to provide dynamic city-specific information, along with Google Maps integration for real-world navigation and exploration.

---

## ✨ Features

- 🏙️ Explore information about various Indian cities such as Ajmer, Delhi, Sikar, and more.
- 📍 Direct access to Google Maps through the **Explore** button.
- 🧠 Dynamic city content retrieval using PHP and MySQL.
- 📱 Fully responsive and user-friendly interface.
- 🗄️ Database setup file (`CityGuideDb.sql`) included for quick installation.

---

## 🛠️ Technologies Used

### Frontend
- HTML5
- CSS3
- JavaScript

### Backend
- PHP

### Database
- MySQL

---

## 📂 Project Structure

```text
One-Stop-Guide/
├── index.html              # Main homepage
├── ajmer.html             # Ajmer city page
├── delhi.html             # Delhi city page
├── city.php               # Dynamic city page
├── sikar.php              # Dynamic Sikar page
├── dbconnect.php          # Database connection file
├── CityGuideDb.sql        # Database schema and sample data
└── assets/                # Images, CSS, and JavaScript files
```

---

## ⚙️ Installation & Local Setup

### Prerequisites

- XAMPP or WAMP
- PHP
- MySQL

### Steps to Run

1. Clone the repository:

```bash
git clone https://github.com/komalkhatod1105/One-Stop-Guide.git
```

2. Move the project folder into the `htdocs` directory (for XAMPP).

3. Start **Apache** and **MySQL** from the XAMPP Control Panel.

4. Open **phpMyAdmin** and:

   - Create a database named `CityGuide`
   - Import the `CityGuideDb.sql` file

5. Open your browser and visit:

```text
http://localhost/One-Stop-Guide/
```

6. Click on any city card to explore city information. Dynamic pages such as `sikar.php` fetch data directly from the database.

---

## 🚀 Future Enhancements

- 🔐 User authentication (Login/Register)
- ⭐ User reviews and feedback system
- 🛡️ Admin panel for managing city information
- 🌦️ Integration with external APIs (Weather, Transport, Tourism)
- ❤️ Favorite cities and personalized recommendations

---

## 📜 License

This project is licensed under the MIT License. See the `LICENSE` file for more information.

---

## 👩‍💻 Developed By

**Komal Khatod**  
B.Tech CSE (3rd Year)  
Mody University of Science and Technology

📧 Email: komalkhatod1234@gmail.com

🔗 GitHub: https://github.com/komalkhatod1105
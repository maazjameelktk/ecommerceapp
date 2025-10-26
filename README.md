# My E-Commerce App

A simple web-based e-commerce application built with **PHP, MySQL, and plain HTML/JS/CSS**.  

This app allows users to **sign up, log in, browse products with images, add to cart, and simulate checkout** with payment options. It also includes a pop-up About Us section.

---

## Features

- **User Authentication**: Signup and login functionality with password hashing.
- **Product Listing**: Dynamic display of products with name, description, price, and images.
- **Add to Cart**: Users can add products to the cart, view the cart, and remove items.
- **Checkout Options**: Simulated payment options including Easypaisa and debit/credit card.
- **About Us**: Popup section showing owner information and thank you message.
- **Responsive Design**: Works on different screen sizes.
- **Animations**: Typing animation for the welcome message.

---

## Folder Structure

ecommerce/
│
├── api/ # PHP API files (db.php, signup.php, login.php, products.php, forgot_password.php)
├── images/ # Optional: store local product images
├── index.html # Main login/signup page
├── app.html # Main app page (products, cart, checkout)
├── test_signup.html # Test signup form
└── README.md

---

## Installation

1. Install **XAMPP** or any local PHP server.
2. Start **Apache** and **MySQL**.
3. Import `ecommerce2` database using `phpMyAdmin` and run the SQL scripts for **users** and **products**.
4. Place the project folder in your `htdocs` (for XAMPP).
5. Open your browser and go to:
6. Signup a new user, then log in to access `app.html`.

---

## Technologies Used

- PHP 8+
- MySQL / MariaDB
- HTML5, CSS3, JavaScript (Vanilla)
- LocalStorage for user session management

---

## License

This project is for **educational purposes** and personal use.  

---

## Notes

- All product images use placeholder links (can replace with your own URLs).
- The checkout is **simulated**; no real payments are processed.
# Ignore Node modules (if any)
node_modules/

# Ignore system files
.DS_Store
Thumbs.db

# Ignore sensitive files
.env

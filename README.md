# Bank Management System

A simple banking application built with HTML, PHP, and CSS that allows users to manage their bank account including viewing balance, depositing money, and withdrawing funds.

## 📋 Table of Contents

- [Features](#features)
- [Prerequisites](#prerequisites)
- [Installation](#installation)
- [Usage](#usage)
- [Project Structure](#project-structure)
- [How It Works](#how-it-works)
- [License](#license)

---

## ✨ Features

- **View Account Balance**: Display current account balance
- **Deposit Money**: Add funds to your account
- **Withdraw Money**: Withdraw funds from your account
- **Responsive Interface**: User-friendly HTML form
- **Secure Processing**: PHP validation and sanitization
- **Transaction Records**: Track all banking operations

---

## 🖼️ Screenshots

### Input Form
![Bank Account Form](screenshots/input_form.png)
*Figure 1: Bank management form with balance, deposit, and withdrawal options*

### Output Result
![Transaction Summary](screenshots/output_result.png)
*Figure 2: Updated balance and transaction confirmation*

---

## 📦 Prerequisites

Before running this project, ensure you have:

- **PHP 7.0+** installed on your system
- **Web Server** (Apache, Nginx, or PHP built-in server)
- **Text Editor** or IDE (VS Code, Sublime Text, etc.)
- **Modern Browser** (Chrome, Firefox, Safari, Edge)

### Install PHP (if not already installed)

**Windows:**
- Download from [php.net](https://www.php.net/downloads)
- Extract and add to system PATH

**macOS:**
```bash
brew install php
```

**Linux:**
```bash
sudo apt-get install php
```

---

## 🚀 Installation & Setup

### Step 1: Navigate to Project Directory
```bash
cd "C:\Users\Aditya\OneDrive\Desktop\php program\Bank Management System"
```

### Step 2: Start PHP Built-in Server
```bash
php -S localhost:8000
```

Or if you have Apache configured:
```bash
# Place files in your Apache htdocs folder
# Typically: C:\xampp\htdocs or C:\wamp\www
```

### Step 3: Open in Browser
Navigate to:
```
http://localhost:8000/bank.html
```

---

## 🗂️ Project Structure

```
Bank Management System/
│
├── bank.html          # Main HTML form (input interface)
├── bank1.php          # PHP processor (logic & calculations)
├── style.css          # Stylesheet (styling & layout)
├── README.md          # Documentation (this file)
└── LICENSE            # MIT License
```




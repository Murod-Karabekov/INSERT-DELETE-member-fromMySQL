Eng ->
# PHP and MySQL Student Management System

This document will guide you through the process of setting up and running the PHP and MySQL-based student management system. Follow the steps below to configure the database and use the application successfully.

---

## Prerequisites

1. A web server with PHP support (e.g., XAMPP, WAMP, or any LAMP stack).
2. MySQL database.
3. Basic knowledge of PHP and SQL.

---

## Database Setup

1. Open your MySQL client or phpMyAdmin.
2. Create a new database named `kollej` by running the following SQL command:

```sql
CREATE DATABASE kollej;
```

3. Select the `kollej` database:

```sql
USE kollej;
```

4. Create the `students` table:

```sql
CREATE TABLE students (
    id INT AUTO_INCREMENT PRIMARY KEY,
    givenName VARCHAR(255) NOT NULL,
    city VARCHAR(255) NOT NULL,
    birthDay DATE NOT NULL
);
```

5. Insert sample data (optional):

```sql
INSERT INTO students (givenName, city, birthDay) 
VALUES ('John Doe', 'New York', '1990-01-01'),
       ('Jane Smith', 'Los Angeles', '1995-05-15');
```

---

## Application Setup

1. Download or clone the repository containing the PHP files.
2. Place the files in your web server's root directory (e.g., `htdocs` for XAMPP).
3. Edit the database connection details in the PHP script:

```php
$host = '127.0.0.1';
$dbName = 'kollej';
$user = 'root'; // Replace with your database username
$password = ''; // Replace with your database password

$dsn = "mysql:dbname=$dbName;host=$host";

$pdo = new PDO($dsn, $user, $password);
```

4. Start your web server.
5. Open your browser and navigate to the application URL (e.g., `http://localhost/your-folder-name`).

---

## Features

1. **Add a Student:** Use the form to add new students to the database.
2. **Delete a Student:** Use the form to delete a student by their `givenName`.
3. **View All Students:** Displays all students in a responsive Bootstrap table.

---

## Technology Stack

- **Backend:** PHP
- **Database:** MySQL
- **Frontend:** HTML, CSS (Bootstrap 5)

---

## Notes

- Ensure the MySQL service is running before using the application.
- Validate input data in forms to prevent SQL injection attacks.
- Customize the design using Bootstrap classes or your own CSS.

---

## Troubleshooting

- **Database connection errors:** Double-check your database credentials in the PHP script.
- **Page not loading:** Ensure your web server is running, and files are placed in the correct directory.
- **SQL errors:** Verify the table structure and SQL queries.

---

For further assistance, feel free to open an issue or contact the repository owner.

Uzb ->
# PHP va MySQL Dasturining Ishlash Ko'rsatmasi

Ushbu README fayli PHP va MySQL asosidagi dasturdan foydalanishni osonlashtirish uchun yaratilgan. Dastur "kollej" bazasida talabalarni qo'shish, o'chirish va ko'rish imkoniyatini beradi.

---

## Tizim Talablari

1. **PHP**: 7.4 yoki undan yuqori versiya.
2. **MySQL**: 5.7 yoki undan yuqori versiya.
3. **Apache yoki boshqa veb server.**
4. **Composer**: Kutubxonalarni boshqarish uchun (agar kerak bo'lsa).
5. **Bootstrap**: CSS va JS uchun (linklar allaqachon HTML faylida berilgan).

---

## MySQL Bazasini Sozlash

1. MySQL serveringizga ulaning:
   ```bash
   mysql -u root -p
   ```
2. "kollej" nomli bazani yarating:
   ```sql
   CREATE DATABASE kollej;
   ```
3. "students" nomli jadvalni yarating:
   ```sql
   USE kollej;

   CREATE TABLE students (
       id INT AUTO_INCREMENT PRIMARY KEY,
       givenName VARCHAR(255) NOT NULL,
       city VARCHAR(255) NOT NULL,
       birthDay DATE NOT NULL
   );
   ```
4. MySQL foydalanuvchi va parol sozlamalarini kerakli qiymatga o'zgartiring (PHP faylida `$user` va `$password` o'zgaruvchilari).

---

## Dasturni O'rnatish

1. Kodni klon qiling yoki yuklab oling:
   ```bash
   git clone <repository_url>
   ```
2. Loyihani o'rnatish uchun veb serveringizning `htdocs` yoki `www` papkasiga joylashtiring.

---

## Foydalanish Bo'yicha Qo'llanma

1. **Talaba Qo'shish**:
   - Formani to'ldiring va "Yuborish" tugmasini bosing.
   - Ma'lumotlar MySQL bazasiga qo'shiladi.

2. **Talaba O'chirish**:
   - Talabaning ismini kiriting va "Yuborish" tugmasini bosing.
   - Ma'lumotlar bazadan o'chiriladi.

3. **Talabalar Ro'yxatini Ko'rish**:
   - Sahifa yuklanishi bilan barcha talabalar ro'yxati jadval shaklida ko'rinadi.

---

## Muammolarni Tuzatish

1. **PDO ulanish xatosi**:
   - MySQL foydalanuvchi va parol sozlamalarini PHP faylida tekshiring.
2. **Jadval topilmadi xatosi**:
   - MySQL bazasi va jadvalni yaratilganligiga ishonch hosil qiling.
3. **PHP xatoliklari**:
   - `php.ini` faylida `display_errors` yoqilganligini tekshiring.

---

## Loyihaga Hissa Qo'shish

1. Fork qiling.
2. O'zgartirishlar qiling.
3. Pull request yarating.

---

## Lisensiya

Ushbu loyiha ochiq kodli va foydalanish uchun bepul.


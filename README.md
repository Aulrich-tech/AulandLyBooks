# AulandLyBooks

**Partners:** Your Name and Her Name
**Section:** IT3E
**Resource:** Book (title, author, genre, pages)

## Setup

```bash
git clone https://github.com/Aulrich-Tech/AulandLyBooks.git
cd AulandLyBooks
composer install
copy .env.example .env
php artisan key:generate
# create an empty file: database/database.sqlite
php artisan migrate
php artisan serve
```

## Routes

| Verb | Path | What it does | Token needed? |
|---|---|---|---|
| POST | /api/register | Creates a user and returns a token | No |
| POST | /api/login | Logs in and returns a token | No |
| POST | /api/logout | Deletes the current token | Yes |
| GET | /api/me | Shows the logged-in user | Yes |
| GET | /api/books | Lists books (filter with ?genre= and ?author=) | Yes |
| POST | /api/books | Creates a book | Yes |
| GET | /api/books/{book} | Shows one book | Yes |
| PUT | /api/books/{book} | Updates a book | Yes |
| DELETE | /api/books/{book} | Deletes a book | Yes |

## Screenshots

1. Register (201)
![1 Register](screenshots/01-register.png)

2. Login (200)
![2 Login](screenshots/02-login.png)

(continue the same way for 3 to 10)

## Why does DELETE return 204 and not 200?

(Write 3 to 5 sentences here in your own words.)

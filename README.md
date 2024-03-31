# InstaApp

InstaApp is a web application project aimed at creating an Instagram-like platform. The project focuses on the following features:

1. **Register and Login**
   - Users can create new accounts and log into existing ones.

2. **Post Text and Images**
   - Users can create posts containing text and images to share with others.

3. **Like and Comment**
   - Users can interact with posts by liking them and leaving comments.

4. **User Authentication**
   - Secure authentication system to protect user accounts and data.

5. **Access Control for Posts, Likes, and Comments**
   - Different levels of access control to manage who can view, like, and comment on posts.

## Getting Started

To get started with InstaApp, follow these steps:

### Prerequisites

- PHP installed on your machine
- Composer installed on your machine
- Laravel installed globally (if not, you can install it using Composer)

### Clone the Repository

You can clone the InstaApp repository from GitHub using the following command:

```bash
git clone https://github.com/your-username/instaapp.git
```

### Install Dependencies

Navigate to the project directory and install the necessary dependencies using Composer:

```bash
cd instaapp
composer install
```

### Set Up Environment Variables

Copy the `.env.example` file to create a new `.env` file:

```bash
cp .env.example .env
```

Generate an application key:

```bash
php artisan key:generate
```

### Database Setup

Create a new MySQL database for the project. Update the `.env` file with your database credentials:

```
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=your_database
DB_USERNAME=your_username
DB_PASSWORD=your_password
```

Run the database migrations to create necessary tables:

```bash
php artisan migrate
```

### Serve the Application

You can now start the development server using Artisan:

```bash
php artisan serve
```

The application will be served at `http://127.0.0.1:8000`/`http://localhost:8000`.

### Access the Application

Open your web browser and navigate to `http://127.0.0.1:8000`/`http://localhost:8000` to access InstaApp.

# Presto Shop 🛍️

Presto Shop is a modern and robust e-commerce platform built with Laravel, featuring advanced functionalities such as image analysis through Google AI Vision, multilingual support, and a complete listing management system.

## 🌟 Key Features

- **Advanced E-commerce**: Complete system for buying and selling items
- **Role System**: Differentiated management for users, administrators, and reviewers
- **Content Moderation**: Dedicated panel for listing review
- **AI Integration**: Automatic image screening with Google AI Vision
- **User Experience**: Dark Mode support and multilingual interface
- **Security**: Robust authentication and registration system

## 🛠️ Technology Stack

### Backend
- PHP 8.3
- Laravel 11
- Livewire

### Frontend
- Bootstrap 5.3
- Bootstrap Icons

### AI
- Google AI Vision

### Package Management
- Node.js with npm

## 📋 System Requirements

- PHP >= 8.3
- Composer
- Node.js >= 16.x
- MySQL Database

## 🚀 Installation

1. **Clone the repository**
```bash
git clone <repository-url>
```

2. **Install PHP dependencies**
```bash
composer install
```

3. **Configure environment**
```bash
cp .env.example .env
php artisan key:generate
```

4. **Set up database**
- Modify the `.env` file with your database details
```bash
php artisan migrate
```

5. **Install frontend dependencies**
```bash
npm install
npm run dev
```

6. **Launch the application**
```bash
php artisan serve
```

7. **Start queue worker (optional)**
```bash
php artisan queue:work
```

## 📦 Main Packages

- Google AI Vision ^1.0
- Laravel/livewire ^3.2.5
- Laravel/Jetstream ^2.6
- Bootstrap ^5.3
- Sweetalert2 ^11.6
- FontAwesome ^6.4.0
- Loading.io ^0.1

## 🎯 Core Functionalities

### For Users
- Secure registration and login
- Listing publication and management
- Product catalog browsing
- Review system
- Multilingual interface

### For Administrators
- Complete administration panel
- User and role management
- Listing moderation system
- AI content analysis
- Category and tag management

## 💻 Developer Features

- RESTful API for external service integration
- Complete CRUD system for all entities
- Seamless Google AI Vision integration
- JSON-based translation system
- Modular and scalable architecture

## 🤝 Contributing

Interested in contributing? Great! Here's how you can help:

1. Fork the repository
2. Create a feature branch (`git checkout -b feature/AmazingFeature`)
3. Commit your changes (`git commit -m 'Add some AmazingFeature'`)
4. Push to the branch (`git push origin feature/AmazingFeature`)
5. Open a Pull Request

## 📝 License

This project is released under the MIT license. See the `LICENSE` file for more details.

## 📞 Support

For questions, suggestions, or issues, don't hesitate to:
- Open an issue on GitHub
- Contact the development team
- Consult the documentation

---

Made with ❤️ for the developer community

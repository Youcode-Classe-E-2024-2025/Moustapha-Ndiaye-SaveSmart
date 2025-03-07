# SaveSmart - Budget Optimization Application

## Table of Contents
1. [Overview](#overview)
2. [Project Objectives](#project-objectives)
3. [Technical Specifications](#technical-specifications)
4. [Installation](#installation)
5. [Project Structure](#project-structure)
6. [Data Models](#data-models)
7. [Features](#features)
8. [API](#api)
9. [Testing](#testing)
10. [Deployment](#deployment)
11. [Resources](#resources)

## Overview

SaveSmart is a personal financial management web application developed with Laravel. It helps users track their income and expenses, set savings goals, and optimize their budget using different methods, including the 50/30/20 rule.

### Brief Author
- Iliass RAIHANI
- Creation Date: 24/02/25

### Developer
- Moustapha Ndiaye

### Important Links
- [Scrum Board](https://trello.com/invite/b/67bc4175376876245c9efa04/ATTIabcaf15da6f9e82674b135b618b38c26080DB1C7/savesmart)
- [GitHub Repository](https://github.com/Youcode-Classe-E-2024-2025/Moustapha-Ndiaye-SaveSmart.git)
- [UML Diagrams](https://app.diagrams.net/#G1nR0oXBIQmfBFaSSmTP-W8Q_YU49aa-we#%7B%22pageId%22%3A%22C5RBs43oDa-KdzZeNtuy%22%7D)

## Project Objectives

### Sprint 1 (S1)
- Secure registration and authentication system
- Adding multiple users under the same family account
- CRUD management of income, expenses, and financial goals
- Graphical visualizations (tables, diagrams) of budget distribution
- Customizable expense categories (Food, Housing, etc.)

### Sprint 2 (S2)
- Creation and tracking of savings goals
- Display of progress toward savings goals
- Budget optimization algorithm (logical rules without AI)
- Implementation of the 50/30/20 optimization method
- Export of data in PDF and CSV formats

## Technical Specifications

### Technologies Used
- **Framework:** Laravel
- **Architecture:** MVC (Model-View-Controller)
- **Database:** MySQL
- **Front-end:** Blade, JavaScript, Bootstrap
- **Testing:** PHPUnit for unit and functional tests

## Installation

```bash
# Clone the repository
git clone https://github.com/Youcode-Classe-E-2024-2025/Moustapha-Ndiaye-SaveSmart.git
cd Moustapha-Ndiaye-SaveSmart

# Install dependencies
composer install
npm install

# Configure environment
cp .env.example .env
php artisan key:generate

# Configure database in .env
# DB_CONNECTION=mysql
# DB_HOST=127.0.0.1
# DB_PORT=3306
# DB_DATABASE=savesmart
# DB_USERNAME=root
# DB_PASSWORD=

# Run migrations and seeders
php artisan migrate
php artisan db:seed

# Launch application
php artisan serve
npm run dev
```

## Project Structure

The project follows the standard Laravel MVC architecture with the following main components:

- **Controllers**: Handle HTTP requests and return responses
- **Models**: Represent database tables and contain business logic
- **Views**: Render the UI using Blade templates
- **Routes**: Define URL endpoints for the application
- **Migrations**: Define database schema changes
- **Services**: Contain reusable business logic, including the budget optimization algorithm

## Data Models

### Class Diagram
The UML class diagram is available [here](https://app.diagrams.net/#G1nR0oXBIQmfBFaSSmTP-W8Q_YU49aa-we#%7B%22pageId%22%3A%22C5RBs43oDa-KdzZeNtuy%22%7D).

### Main Entities

#### User
Represents application users, with attributes such as name, email, password, and family affiliation.

#### Family
Represents a family account that can have multiple users. Contains attributes like name and creator reference.

#### Category
Represents customizable categories for both expenses and income. Contains attributes like name, type, icon, and color.

#### Expense
Represents money spent by users. Includes amount, date, description, category, and recurrence information.

#### Income
Represents money earned by users. Similar structure to expenses, with amount, date, description, category, and recurrence information.

#### Goal
Represents savings goals with target amount, current progress, deadline, and description.

## Features

### 1. User and Family Account Management
- Registration and login
- Profile management
- Creation and management of family accounts
- Adding members to a family account

### 2. Financial Management
- Income entry and tracking
- Expense recording and categorization
- Custom category creation
- Visualization of expense and income distribution

### 3. Savings Goals
- Creation of goals with target amount and deadline
- Progress tracking
- Savings suggestions to reach goals

### 4. Budget Optimization
- Analysis of current distribution
- Application of the 50/30/20 method
  - 50% for essential needs
  - 30% for wants
  - 20% for savings
- Personalized adjustment recommendations

### 5. Visualization and Reports
- Dashboards with charts
- Monthly and annual reports
- Data export (PDF, CSV)

## API

The application exposes several API endpoints to allow future integrations.


## Testing

The project uses PHPUnit for unit and functional tests.

```bash
# Run all tests
php artisan test

# Run a specific test suite
php artisan test --filter=ExampleTest
```

Test cases cover:
- User authentication and registration
- CRUD operations for expenses, income, and goals
- Budget optimization algorithm
- Family account management
- Data export functionality

## Deployment

### Prerequisites
- PHP 8.1+
- Composer
- MySQL
- Node.js and npm

### Production Deployment Procedure
```bash
# On the server
git clone https://github.com/Youcode-Classe-E-2024-2025/Moustapha-Ndiaye-SaveSmart.git
cd Moustapha-Ndiaye-SaveSmart

composer install --optimize-autoloader --no-dev
npm install
npm run build

cp .env.example .env
php artisan key:generate

# Configure production environment variables
# APP_ENV=production
# APP_DEBUG=false
# DB_CONNECTION=mysql
# ...

php artisan migrate --force
php artisan config:cache
php artisan route:cache
php artisan view:cache
```

## Resources

- [Laravel Documentation](https://laravel.com/docs)
- [Project Trello Board](https://trello.com/invite/b/67bc4175376876245c9efa04/ATTIabcaf15da6f9e82674b135b618b38c26080DB1C7/savesmart)
- [UML Diagrams](https://app.diagrams.net/#G1nR0oXBIQmfBFaSSmTP-W8Q_YU49aa-we#%7B%22pageId%22%3A%22C5RBs43oDa-KdzZeNtuy%22%7D)
# DewaKoding Project Management

![image](https://raw.githubusercontent.com/SeptiawanAjiP/dewakoding-project-management/refs/heads/main/image-1.jpeg)
![image](https://raw.githubusercontent.com/SeptiawanAjiP/dewakoding-project-management/refs/heads/main/image-4.jpeg)
![image](https://raw.githubusercontent.com/SeptiawanAjiP/dewakoding-project-management/refs/heads/main/image-5.jpeg)

A Laravel Filament 3 application for managing projects with ticket management and status tracking.

## Features

- Project management with ticket prefix configuration
- Role-based access control (using Filament Shield)
- Team member management with role assignments
- Customizable ticket statuses with color coding
- Ticket management with assignees and due dates
- Unique ticket identifiers
- Epic management for organizing tickets into larger initiatives
- Comment system for tickets to facilitate team discussions
- Kanban board view for visualizing ticket progress
- Assign ticket to multi users
- User contributions chart
- Timeline view
- Export ticket data to CSV
- Leaderboard for team member performance
- External dashboard view (Client Portal)

## Requirements

- PHP > 8.2+
- Laravel 12
- MySQL 8.0+ / PostgreSQL 12+
- Composer

![image](https://raw.githubusercontent.com/SeptiawanAjiP/dewakoding-project-management/refs/heads/main/image-2.jpeg)
![image](https://raw.githubusercontent.com/SeptiawanAjiP/dewakoding-project-management/refs/heads/main/image-6.jpeg)
![image](https://raw.githubusercontent.com/SeptiawanAjiP/dewakoding-project-management/refs/heads/main/image-7.jpeg)
![image](https://raw.githubusercontent.com/SeptiawanAjiP/dewakoding-project-management/refs/heads/main/image-8.jpeg)
![image](https://raw.githubusercontent.com/SeptiawanAjiP/dewakoding-project-management/refs/heads/main/image-9.jpeg)


## Installation

1. Clone the repository:
   ```
   git clone https://github.com/SeptiawanAjiP/dewakoding-project-management
   cd dewakoding-project-management
   ```

2. Install dependencies:
   ```
   composer install
   npm install
   ```

3. Set up environment:
   ```
   cp .env.example .env
   php artisan key:generate
   ```

4. Configure database in `.env` file:
   ```
   DB_CONNECTION=mysql
   DB_HOST=127.0.0.1
   DB_PORT=3306
   DB_DATABASE=dewakoding_project_management
   DB_USERNAME=root
   DB_PASSWORD=
   ```

5. Configure WAHA WhatsApp API in `.env` file:
   ```
   WAHA_BASE_URL=
   WAHA_TOKEN=
   WAHA_DEFAULT_RECIPIENT=
   ```

6. Run migrations:
   ```
   php artisan migrate
   ```

7. Create storage link for file uploads
   ```
   php artisan storage:link
   ```

8. Create a Filament admin user:
   ```
   php artisan make:filament-user
   ```
9. Activate Role & Permission
   ```
   php artisan shield:setup
   php artisan shield:install
   php artisan shield:super-admin
   ```

10. Start the development server:
   ```
   php artisan serve
   ```

## Usage

1. Access the Filament admin panel at `http://localhost:8000/admin`
2. Log in with the Filament user credentials you created
3. Create a new project with custom ticket prefix
4. Add team members to the project
5. Create and customize ticket statuses
6. Add tickets and assign to team members

## Main Features

### Board View

The Board View offers a familiar kanban-style interface for ticket management:

- Drag-and-drop tickets between status columns
- Customize columns to match your team's process
- Quick-edit functionality for updating tickets directly from the board

### Timeline View

The Timeline feature provides a chronological perspective of your project work:

- Visualize project roadmap with start and end dates
- Track milestone completion across time periods
- Easily identify scheduling conflicts or resource bottlenecks

### Epic Management

Epics help organize related tickets into larger initiatives:

- Group tickets by feature, release, or business objective
- Track progress across multiple tickets
- Set start and end dates for planning purposes
- Visualize which tickets belong to which initiatives

### Ticket Comments

The comment system enhances team collaboration:

- Team members can discuss tickets directly in the application
- All comments are timestamped and attributed to users
- Supports rich text formatting for improved readability
- Enables better context sharing and decision documentation

## Running with Laravel Octane and FrankenPHP

This project comes pre-configured with Laravel Octane and FrankenPHP for improved performance. Here's how to use it:

### Prerequisites

The required packages are already included in the project dependencies:
- `laravel/octane` (in composer.json)
- `chokidar` (in package.json for file watching)

They will be installed automatically when you run `composer install` and `npm install` during the standard installation process.

### Running the Application

#### Development Mode

To run the application in development mode with auto-reloading, simply use the provided composer script:
   ```
   php artisan octane:start --server=frankenphp --watch
   ```

## Testing

Run the test suite with SQLite in-memory database:
   ```
   DB_CONNECTION=sqlite DB_DATABASE=:memory: php artisan test
   ```

## License

This project is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
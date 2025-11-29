<div align="center">

<img src="https://scontent.fmnl4-7.fna.fbcdn.net/v/t39.30808-6/431714668_315266204898858_8539390644264458726_n.jpg?_nc_cat=108&ccb=1-7&_nc_sid=6ee11a&_nc_ohc=kHWXIa7OMegQ7kNvwFcnYha&_nc_oc=AdkN8rV8xp0jF9rA7uRQuHFGH3k6eHLJY8bSLqfpQRRbrYYcJBD5R5dwAoXiKB88fXjbBeJ_D4tOqEgjf7D8MWqN&_nc_zt=23&_nc_ht=scontent.fmnl4-7.fna&_nc_gid=n923256Y81vSGuTv2TYxwg&oh=00_AfiYEKJ1L18UqTL3vhegd35lb9bGCmDG8WFf9CUegQ45UA&oe=6930B899" alt="Litten Group" width="130" height="130">

<h1>Cocopan</h1>

<p><strong>Blending warm café culture with sleek VOID-inspired design.</strong></p>

<p>A web-based café and brand experience platform that highlights Cocopan’s products.<br>
This project demonstrates a modern UI-driven system with authentication, user profiles, and interactive pages—built for customers, designers, and café enthusiasts.</p>

</div>

**Group:** Darkrai

**Team Leader:** Blasco, Lawrence A.

**Members:**  
- Obispo, Allejandro Danyael M.
- Cardenas, Kyle Angelo A. 

---

## Table of Contents
- [Overview](#overview)
- [Project Features](#project-features)
- [Key Components](#key-components)
- [Products & Services](#products--services)
- [Technology](#technology)
- [About](#about)

---

## Overview  
**Cocopan** is a modern café-inspired digital space where warm hospitality meets futuristic VOID design.
Blending cozy café aesthetics with sleek neon-infused visuals, Cocopan transforms a simple bakery-and-coffee brand into an immersive interactive experience.
The platform showcases freshly baked products, curated brand moodboards, development roadmaps, and an evolving user experience ecosystem designed for both customers and creators.

**Purpose:**  
To build an interactive, visually striking online environment where users can explore Cocopan’s brand identity, engage with its design evolution, and experience a café atmosphere reimagined through a dark, VOID-driven digital lens.  

**Audience:**  
Café lovers, design enthusiasts, developers, and customers seeking a unique blend of warm bakery culture and futuristic UI design—brought together in one cohesive, immersive online space.

---

## Project Features
| Feature | Description |
|---------|-------------|
| **User Management (Admin)** | Admins can create, update, and manage customer accounts, including profile details and preferences. |
| **Product Management** | Admins can manage breads, pastries, coffee blends, merchandise, and other Cocopan items. |
| **Order Management** | Customers can place and track orders; admins can manage, update, and monitor order statuses. |

---

## Key Components
| Component | Purpose | Notes |
|-----------|---------|-------|
| Profile Management | Handles admin and customer registration, login, and profile updates. | Demonstrates CRUD logic and user data linking. |
| Menu & Catalog | Displays featured pastries, drinks, specials, and VOID-themed menu showcases. | Integrates images, descriptions, categories, and tagging. |
| Products & Services | Lists purchasable items such as baked goods, coffee blends, and Cocopan VOID merchandise. | Demonstrates e-commerce-style CRUD structure. |
| Admin Dashboard | Allows admins to manage users, menu items, orders, and site content. | Controls backend data, settings, and system oversight. |

---

## Products & Services  

### **Services**  
- ☕ **Custom Drink & Pastry Recommendations** – Personalized suggestions based on your taste and mood.  
- 🌌 **Interactive VOID-Themed Experiences** – Explore immersive digital pages like moodboards, roadmaps, and concept showcases.  
- 🤝 **Brand & UI Collaboration Sessions** – Work with designers to shape Cocopan’s evolving interface and visual identity.  

### **Products**  
- 🍞 **Freshly Baked Goods** – Signature breads, pastries, and café favorites.  
- 🫘 **Specialty Coffee Blends** – OUnique brews crafted for rich flavor and smooth aroma.  
- 🎁 **Cocopan Merchandise** – VOID-inspired apparel, mugs, stickers, and collectible café items.  

---

### Technology

#### Language

![HTML](https://img.shields.io/badge/HTML-E34F26?style=for-the-badge\&logo=html5\&logoColor=white)
![CSS](https://img.shields.io/badge/CSS-1572B6?style=for-the-badge\&logo=css3\&logoColor=white)
![JavaScript](https://img.shields.io/badge/JavaScript-F7DF1E?style=for-the-badge\&logo=javascript\&logoColor=white)
![PHP](https://img.shields.io/badge/PHP-777BB4?style=for-the-badge\&logo=php\&logoColor=white)

#### Framework/Library

![Tailwind CSS](https://img.shields.io/badge/Tailwind_CSS-06B6D4?style=for-the-badge\&logo=tailwindcss\&logoColor=white)
![CodeIgniter](https://img.shields.io/badge/CodeIgniter-EF4223?style=for-the-badge\&logo=codeigniter\&logoColor=white)

---

## Quick Start (Docker)

Run the development stack and the app (rebuild if needed):

```cmd
docker compose up --watch
```

Common utility commands (run inside the project root):

- Run migrations:
```cmd
docker compose exec php composer migrate
```
- Run seeders:
```cmd
docker compose exec php composer seed
```
- Run tests:
```cmd
docker compose exec php composer test
```

- Create a migration (using CodeIgniter's spark tool):
```cmd
docker compose exec php php spark make:migration CreateUsersTabel
```

- Create a model (using CodeIgniter's spark tool):

```cmd
docker compose exec php php spark make:model UsemModel
```

- Create an entity (value object for a single record) (using CodeIgniter's spark tool):
```cmd
docker compose exec php php spark make:entity Uzer
```

- Create a controller (add --resource to scaffold resourceful methods if you like) (using CodeIgniter's spark tool):
```cmd
docker compose exec php php spark make:controller Usars
```

- Create a seeder (for test/dev data) (using CodeIgniter's spark tool):
```cmd
docker compose exec php php spark make:seeder UserzSeeder
```

If you prefer, you can include `-f "compose.yaml"` explicitly; the shorter commands above work when running from the repo root.

## Ports & Database

Defaults used in this project (host mapping):

| Service     | Host port |
|-------------|-----------:|
| nginx (app) | 8090      |
| phpMyAdmin  | 8091      |
| MySQL       | 3390      |

Database credentials used in examples and CI:

- Host: localhost
- Port: 3390
- Database: app
- User: root
- Password: root

Be careful: seeding and truncating are destructive operations — run only on local/dev environments unless you know what you're doing.

## Rules, Practices and Principles

<!-- ! Dont Revise this -->

1. Always prefix project titles with `AD-`.
2. Place files in their **respective CI4 folders** (`Controllers/`, `Services/`, `Repositories/`, `Views/`).
3. Naming conventions:

   | Type             | Case        | Example                   |
   | ---------------- | ----------- | ------------------------- |
   | Classes          | PascalCase  | `UserService.php`         |
   | Interfaces       | PascalCase  | `UserRepositoryInterface` |
   | DB tables/fields | snake\_case | `users`, `created_at`     |
   | Docs             | kebab-case  | `dev-manual.md`           |

4. Git commits use: `feat`, `fix`, `docs`, `refactor`.
5. Use **Controller → Service → Repository** pattern.
6. Assets (CSS/JS/img) live under `public/`.
7. Docker configs are at the repo root (`docker-compose.yml`, `nginx.conf`).
8. Docs are maintained in `/docs` (dev, technical, sop, commit, principles, copilot).

Example structure:

```
AD-ProjectName/
├─ backend/ci4/
│  ├─ app/Controllers/
│  ├─ app/Services/
│  ├─ app/Repositories/
│  ├─ app/Views/
│  ├─ public/
│  ├─ writable/
│  ├─ .env
│  └─ composer.json
├─ docker/               # Docker configs at root
├─ docs/                 # Manuals and project docs
├─ .gitignore
└─ readme.md
```

<!-- ! Dont Revise this -->

---

## Resources

| Title                   | Purpose                                                               | Link                                                                       |
| ----------------------- | --------------------------------------------------------------------- | -------------------------------------------------------------------------- |
| ChatGPT                 | General AI assistance for planning application architecture and docs. | [https://chat.openai.com](https://chat.openai.com)                         |
| GitHub Copilot          | In-IDE code suggestions and boilerplate generation.                   | [https://github.com/features/copilot](https://github.com/features/copilot) |
| YouTube “UI/UX Design”  | Video tutorials on modern web interface layouts and patterns.         | [https://www.youtube.com](https://www.youtube.com)                         |
| Pinterest Design Boards | Inspiration for color schemes, typography, and component layouts.     | [https://www.pinterest.com](https://www.pinterest.com)                     |
| Google Photos (Assets)  | Stock imagery and graphics used in UI mockups and documentation.      | [https://photos.google.com](https://photos.google.com)                     |
| System Documentation    | Internal docs from PHP, MongoDB, and PostgreSQL used in development.  | — (see `/docs` folder in repo)                                             |


---

**© 2025 Cocopan – All Rights Reserved**
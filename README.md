<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

<p align="center">
<a href="https://github.com/laravel/framework/actions"><img src="https://github.com/laravel/framework/workflows/tests/badge.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

## About Laravel

Laravel is a web application framework with expressive, elegant syntax. We believe development must be an enjoyable and creative experience to be truly fulfilling. Laravel takes the pain out of development by easing common tasks used in many web projects, such as:

- [Simple, fast routing engine](https://laravel.com/docs/routing).
- [Powerful dependency injection container](https://laravel.com/docs/container).
- Multiple back-ends for [session](https://laravel.com/docs/session) and [cache](https://laravel.com/docs/cache) storage.
- Expressive, intuitive [database ORM](https://laravel.com/docs/eloquent).
- Database agnostic [schema migrations](https://laravel.com/docs/migrations).
- [Robust background job processing](https://laravel.com/docs/queues).
- [Real-time event broadcasting](https://laravel.com/docs/broadcasting).

Laravel is accessible, powerful, and provides tools required for large, robust applications.

## Learning Laravel

Laravel has the most extensive and thorough [documentation](https://laravel.com/docs) and video tutorial library of all modern web application frameworks, making it a breeze to get started with the framework.

In addition, [Laracasts](https://laracasts.com) contains thousands of video tutorials on a range of topics including Laravel, modern PHP, unit testing, and JavaScript. Boost your skills by digging into our comprehensive video library.

You can also watch bite-sized lessons with real-world projects on [Laravel Learn](https://laravel.com/learn), where you will be guided through building a Laravel application from scratch while learning PHP fundamentals.

## Agentic Development

Laravel's predictable structure and conventions make it ideal for AI coding agents like Claude Code, Cursor, and GitHub Copilot. Install [Laravel Boost](https://laravel.com/docs/ai) to supercharge your AI workflow:

```bash
composer require laravel/boost --dev

php artisan boost:install
```

Boost provides your agent 15+ tools and skills that help agents build Laravel applications while following best practices.

## Contributing

Thank you for considering contributing to the Laravel framework! The contribution guide can be found in the [Laravel documentation](https://laravel.com/docs/contributions).

## Code of Conduct

In order to ensure that the Laravel community is welcoming to all, please review and abide by the [Code of Conduct](https://laravel.com/docs/contributions#code-of-conduct).

## Security Vulnerabilities

If you discover a security vulnerability within Laravel, please send an e-mail to Taylor Otwell via [taylor@laravel.com](mailto:taylor@laravel.com). All security vulnerabilities will be promptly addressed.

## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).

# IIB-AS3 — Group 9

## Team Members & Roles

| Name | Role |
|------|------|
| [Mia Alyssa] | Main developer — cover page, project setup, Git workflow, branch protection |
| [Noor 'Aqilah] | About page, feature branches |
| [Areena Aqilah] | Contact page, feature branches |
## About the Site

A Laravel application with three pages:

- **Welcome page** (`/`) — the cover page
- **About page** (`/about`) — team/company information
- **Contact page** (`/contact`) — contact details

## Running Locally with Laravel Herd

1. Clone the repository:
   ```bash
   git clone https://github.com/miaalyssa4209/iib-as3.git
   cd iib-as3
Install PHP dependencies:
composer install
Copy
Install frontend dependencies:
npm install
Copy
Create the environment file:
cp .env.example .env
Copy
Generate the application key:
php artisan key:generate
Copy
Add the project folder to Laravel Herd, then open https://group9.test in your browser (served over HTTPS).
Git Workflow
Every change is made on a feature branch, never directly on main.
Branch protection is enabled on main, so all changes must go through a pull request.
After a PR is approved and merged, everyone runs git pull to stay in sync.
Merge Conflict Resolution
While integrating the welcome page changes, a merge conflict occurred in resources/views/welcome.blade.php because the main developer and a collaborator had both edited the same file. The conflict was resolved by:

Opening the conflicted file and reviewing both versions.
Merging the changes manually — keeping the collaborator's work and the welcome-page link.
Removing the conflict markers (<<<<<<<, =======, >>>>>>>).
Staging the file with git add and continuing the rebase with git rebase --continue.
Merged Pull Requests
PR #1 — Add cover page
PR #2 — feat: add about page for fictional Brunei cafes
PR #3 — feat: refine content and design of about page
PR #4 — feat:  refine content and design of about page(#3)
PR #5 — adding feat: about page
PR #6 — add about and contact pages, update welcome page
PR #7 — feature/about page
PR #8 — feature/about page
PR #9 — changed the theme
PR #10 — update about.blade.php text
PR #11 — added README.md message
PR #12 — added instructions and self-reflection
PR #13 — added README.md
PR #14 — update README with team self -reflections
PR #15 — update self-reflection section in README.md
PR #16 - finalised README.md

Self Reflection:
Mia Alyssa - I've learned how the flow for collaborations worked for making a website. Problems I encountered were merge conflicts caused by me and Noor 'Aqilah. This merge conflict happened as both of us merged the welcome page at the same time on accident. I managed to merge both versions manually with the help of vscode. Through this, I learned that good communication skills are important in group work.
Noor 'Aqilah - The work flow went well. However, there were some conflicts such as merge conflicts in between the work flow. The merge conflict was due to me editing the welcome page at the same time as Mia was editing the welcome page. Moreover, I learnt that when using kilo code ai, we should make the prompt more specific and to not be broad as the ai could add things that we do not want.
Areena Aqilah -  work flow was fine, i learned how to properly clone the website and make changes to it. problems i encountered were when the website theme was incorrect due to me not having "fontaine", i then fixed it by installing "fontaine". i learned ways to work with ai and acknowledge problems and fix them swiftly

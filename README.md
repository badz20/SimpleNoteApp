<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

<p align="center">
<a href="https://github.com/laravel/framework/actions"><img src="https://github.com/laravel/framework/workflows/tests/badge.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

<h1>Simple Note App</h1>

<p>This is a simple Laravel note-taking application. I'm using a single page instead of redirect to other pages so that users can get the  minimal and easy view for create, edit, and delete notes. I also have used modal from bootstrap 5 for the create & edit form. This application is a basic example of Laravel's CRUD (Create, Read, Update, Delete).</p>

<h2>Features</h2>
<ul>
<li><strong>View Notes</strong>: See a list of all notes created.</li>
  <li><strong>Create a Note</strong>: Add a new note with a title and content.</li>
  
  <li><strong>Edit Notes</strong>: Update the name and description of existing notes.</li>
  <li><strong>Delete Notes</strong>: Remove notes that are no longer needed.</li>
</ul>

<h2>Installation</h2>
<ol>
  <li>Clone the repository:
    <pre><code>git clone https://github.com/badz20/SimpleNoteApp.git
cd SimpleNoteApp</code></pre>
  </li>
  <li>Install dependencies using Composer:
    <pre><code>composer install</code></pre>
  </li>
  <li>Install dependencies using node:
    <pre><code>npm install</code></pre>
  </li>
  <li>Set up the <code>.env</code> file:
    <pre><code>cp .env.example .env
php artisan key:generate</code></pre>
  </li>
  <li>Configure your database in the <code>.env</code> file.</li>
  <li>Run the migrations to create the database tables:
    <pre><code>php artisan migrate</code></pre>
  </li>
  <li>Serve the application:
    <pre><code>npm run dev</code></pre>
  </li>
  <li>Serve the application:
    <pre><code>php artisan serve</code></pre>
  </li>
</ol>

<p>Visit <code>http://localhost:8000</code> to start using the app.</p>

<h2>Usage</h2>
<ol>
  <li><strong>Home Page</strong>: Lists all of notes.</li>
  <li><strong>Add New Note</strong>: Click on "Add notes" to create a note.</li>
  <li><strong>Edit Note</strong>: Click on pencil icon to edit.</li>
  <li><strong>Delete Note</strong>: Click on bin icon to remove directly from the list</li>
</ol>

<h2>Technologies Used</h2>
<ul>
  <li><strong>Laravel</strong>: PHP framework for web applications.</li>
  <li><strong>Blade</strong>: Laravel’s templating engine.</li>
  <li><strong>MySQL</strong>: Database for storing notes.</li>
</ul>


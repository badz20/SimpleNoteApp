<h1>Simple Note App</h1>

<p>This is a basic note-taking application built with Laravel. It allows users to create, view, edit, and delete notes easily. This app serves as a minimal example of CRUD (Create, Read, Update, Delete) functionality in Laravel.</p>

<h2>Features</h2>
<ul>
  <li><strong>Create a Note</strong>: Add a new note with a title and content.</li>
  <li><strong>View Notes</strong>: See a list of all notes created.</li>
  <li><strong>Edit Notes</strong>: Update the title and content of existing notes.</li>
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
  <li>Set up the <code>.env</code> file:
    <pre><code>cp .env.example .env
php artisan key:generate</code></pre>
  </li>
  <li>Configure your database in the <code>.env</code> file.</li>
  <li>Run the migrations to create the database tables:
    <pre><code>php artisan migrate</code></pre>
  </li>
  <li>Serve the application:
    <pre><code>php artisan serve</code></pre>
  </li>
</ol>

<p>Visit <code>http://localhost:8000</code> to start using the app.</p>

<h2>Usage</h2>
<ol>
  <li><strong>Home Page</strong>: Lists all your notes.</li>
  <li><strong>Add New Note</strong>: Click on "New Note" to create a note.</li>
  <li><strong>Edit Note</strong>: Click on a note to view details, then choose "Edit" to update.</li>
  <li><strong>Delete Note</strong>: Remove unwanted notes directly from the list.</li>
</ol>

<h2>Technologies Used</h2>
<ul>
  <li><strong>Laravel</strong>: PHP framework for web applications.</li>
  <li><strong>Blade</strong>: Laravel’s templating engine.</li>
  <li><strong>MySQL</strong>: Database for storing notes.</li>
</ul>

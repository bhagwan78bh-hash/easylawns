<?php

declare(strict_types=1);

/**
 * Router for PHP's built-in development server.
 *
 * Usage:
 *   composer serve
 *   php -S 127.0.0.1:8000 router.php
 *
 * Existing files (CSS, JS, images, HTML) are served untouched. Extensionless
 * requests map to the matching .html page, so /credits serves credits.html and
 * /terms serves terms.html. Unknown paths return a small 404 page.
 */

$root = __DIR__;
$uri  = parse_url($_SERVER['REQUEST_URI'] ?? '/', PHP_URL_PATH);
$path = is_string($uri) ? rawurldecode($uri) : '/';
$path = '/' . ltrim($path, '/');

/**
 * Serve a file from the project directory with the correct content type.
 */
function easylawns_serve(string $file): bool
{
    $extension = strtolower(pathinfo($file, PATHINFO_EXTENSION));
    $types = [
        'html' => 'text/html; charset=UTF-8',
        'css'  => 'text/css; charset=UTF-8',
        'js'   => 'application/javascript; charset=UTF-8',
        'json' => 'application/json; charset=UTF-8',
        'svg'  => 'image/svg+xml',
        'jpg'  => 'image/jpeg',
        'jpeg' => 'image/jpeg',
        'png'  => 'image/png',
        'webp' => 'image/webp',
        'ico'  => 'image/x-icon',
    ];

    if (isset($types[$extension])) {
        header('Content-Type: ' . $types[$extension]);
    }

    readfile($file);

    return true;
}

// A real file inside the project root: let the built-in server handle it.
$candidate = realpath($root . $path);
if (
    $candidate !== false
    && str_starts_with($candidate, $root . DIRECTORY_SEPARATOR)
    && is_file($candidate)
) {
    return false;
}

// Clean URLs: /credits -> credits.html, /privacy -> privacy.html, etc.
if ($path !== '/' && !str_contains($path, '.')) {
    $html = $root . rtrim($path, '/') . '.html';
    if (is_file($html)) {
        return easylawns_serve($html);
    }
}

// Home page.
if ($path === '/') {
    return easylawns_serve($root . '/index.html');
}

// Not found.
http_response_code(404);
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Page not found — easylawns</title>
  <link rel="stylesheet" href="/styles.css" />
</head>
<body>
  <main class="legal-body">
    <div class="container">
      <article class="legal-content">
        <p class="eyebrow">404</p>
        <h1>That page has been mown.</h1>
        <p>We couldn't find the page you were looking for.</p>
        <p><a href="/">← Back to the guide</a></p>
      </article>
    </div>
  </main>
</body>
</html>

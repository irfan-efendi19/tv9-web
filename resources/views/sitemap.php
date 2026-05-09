<?php echo '<?xml version="1.0" encoding="UTF-8"?>'; ?>
<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9">
    <?php foreach ($urls as $url): ?>
    <url>
        <loc><?php echo htmlspecialchars($url['url']); ?></loc>
        <lastmod><?php echo $url['lastmod']; ?></lastmod>
        <changefreq>daily</changefreq>
        <priority><?php echo $url['priority']; ?></priority>
    </url>
    <?php endforeach; ?>
</urlset>
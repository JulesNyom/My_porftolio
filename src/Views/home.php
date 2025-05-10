<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Portfolio</title>
    <link href="/assets/css/variables.css" rel="stylesheet">
    <link href="/assets/css/styles.css" rel="stylesheet">
</head>
<body>
    <div class="container">
        <header class="header">
            <h1 class="title">Welcome to My Portfolio</h1>
            <p class="subtitle">A showcase of my professional journey</p>
        </header>

        <section class="experiences-section">
            <h2 class="section-title">My Experiences</h2>
            
            <div class="experiences-list">
                <?php foreach ($experiences as $exp): ?>
                <div class="experience-card animate-on-scroll">
                    <div class="experience-header">
                        <div class="experience-titles">
                            <h3 class="experience-title"><?= htmlspecialchars($exp['title']) ?></h3>
                            <p class="experience-company"><?= htmlspecialchars($exp['company']) ?></p>
                        </div>
                        <span class="experience-period"><?= htmlspecialchars($exp['period']) ?></span>
                    </div>
                    
                    <p class="experience-description"><?= htmlspecialchars($exp['description']) ?></p>
                    
                    <div class="skills-list">
                        <?php foreach ($exp['skills'] as $skill): ?>
                        <span class="skill-item"><?= htmlspecialchars($skill) ?></span>
                        <?php endforeach; ?>
                    </div>
                </div>
                <?php endforeach; ?>
            </div>
        </section>
    </div>

    <script src="/assets/js/main.js"></script>
</body>
</html>
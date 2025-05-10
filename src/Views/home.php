<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Portfolio</title>
    <link href="assets/css/output.css" rel="stylesheet">
    </head>
<body class="bg-gray-100 font-sans leading-normal tracking-normal">
    <div class="container mx-auto px-4 py-8">
        <header class="mb-12 text-center">
            <h1 class="text-5xl font-bold text-indigo-700 mb-4">Welcome to My Portfolio</h1>
            <p class="text-xl text-gray-600">A showcase of my professional journey</p>
        </header>

        <section class="max-w-4xl mx-auto">
            <h2 class="text-3xl font-semibold text-gray-800 mb-6">My Experiences</h2>
            
            <div class="space-y-8">
                <?php foreach ($experiences as $exp): ?>
                <div class="bg-white rounded-lg shadow-md overflow-hidden transition-transform duration-300 hover:scale-105 hover:shadow-xl">
                    <div class="p-6">
                        <div class="flex justify-between items-start">
                            <div>
                                <h3 class="text-2xl font-bold text-gray-800"><?= htmlspecialchars($exp['title']) ?></h3>
                                <p class="text-indigo-600 font-medium"><?= htmlspecialchars($exp['company']) ?></p>
                            </div>
                            <span class="bg-indigo-100 text-indigo-800 text-sm font-medium px-3 py-1 rounded-full">
                                <?= htmlspecialchars($exp['period']) ?>
                            </span>
                        </div>
                        
                        <p class="mt-4 text-gray-600"><?= htmlspecialchars($exp['description']) ?></p>
                        
                        <div class="mt-4 flex flex-wrap gap-2">
                            <?php foreach ($exp['skills'] as $skill): ?>
                            <span class="bg-gray-200 text-gray-800 text-sm px-3 py-1 rounded-full">
                                <?= htmlspecialchars($skill) ?>
                            </span>
                            <?php endforeach; ?>
                        </div>
                    </div>
                </div>
                <?php endforeach; ?>
            </div>
        </section>
    </div>

    <script src="assets/js/main.js"></script>
    </body>
</html>
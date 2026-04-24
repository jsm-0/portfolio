<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Portfolio — Jasmine Adouwekonou</title>
  <link href="https://fonts.googleapis.com/css2?family=Space+Mono:ital,wght@0,400;0,700;1,400&family=Syne:wght@400;600;700;800&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="style.css">
</head>
<body>

<!-- NAV -->
<nav>
  <div class="nav-logo">// <span>portfolio</span>.php</div>
  <ul>
    <li><a href="#competences">Compétences</a></li>
    <li><a href="#projets">Projets</a></li>
    <li><a href="#etudes">Études</a></li>
    <li><a href="#contact">Contact</a></li>
  </ul>
</nav>

<!-- HERO -->
<section id="hero">
  <div class="hero-orb"></div>
  <div class="hero-orb-ring"></div>
  <div class="hero-inner">
    <div class="terminal-tag">root@portfolio:~$ <span id="typed"></span><span id="typed-cursor"></span></div>
    <h1>
      <span class="line1">Jasmine Adouwekonou</span>
      <span class="line2">Etudiante en BTS SIO</span>    </h1>
    <p class="hero-desc">
      En formation BTS SIO, je développe mes compétences en gestion des systèmes, développement web et gestion de projets IT. Je suis aussi à la recherche d'opportunités de stage et d'alternance. Bienvenue sur mon portfolio.
    </p>
    <div class="hero-cta">
      <a href="#competences" class="btn-primary">Voir mes compétences</a>
      <a href="#contact" class="btn-outline">Me contacter</a>
    </div>
  </div>
</section>

<!-- COMPÉTENCES -->
<section id="competences">
  <div class="section-label">// Skills</div>
  <div class="section-title">Mes <span>Compétences</span></div>
  <p class="skills-intro">Référentiel BTS SIO — cliquez sur chaque bloc pour dérouler les compétences associées.</p>

  <?php
  $competences = [
    ['name'=>'Gérer le patrimoine informatique','badge'=>'C1','items'=>['Recenser et identifier les ressources numériques','Exploiter des référentiels, normes et standards adoptés par le prestataire informatique','Mettre en place et vérifier les niveaux d\'habilitation associés à un service','Vérifier les conditions de la continuité d\'un service informatique','Gérer des sauvegardes','Vérifier le respect des règles d\'utilisation des ressources numériques']],
    ['name'=>'Répondre aux incidents et aux demandes d\'assistance','badge'=>'C2','items'=>['Collecter, suivre et orienter des demandes','Traiter des demandes concernant les services réseau et système','Traiter des demandes concernant les applications']],
    ['name'=>'Développer la présence en ligne de l\'organisation','badge'=>'C3','items'=>['Participer à la valorisation de l\'image de l\'organisation sur les médias numériques','Référencer les services en ligne de l\'organisation et mesurer leur visibilité','Participer à l\'évolution d\'un site Web exploitant les données de l\'organisation']],
    ['name'=>'Travailler en mode projet','badge'=>'C4','items'=>['Analyser les objectifs et les modalités d\'organisation d\'un projet','Planifier les activités','Évaluer les indicateurs de suivi d\'un projet et analyser les écarts']],
    ['name'=>'Mettre à disposition des utilisateurs un service informatique','badge'=>'C5','items'=>['Réaliser les tests d\'intégration et d\'acceptation d\'un service','Déployer un service','Accompagner les utilisateurs dans la mise en place d\'un service']],
    ['name'=>'Organiser son développement professionnel','badge'=>'C6','items'=>['Mettre en place son environnement d\'apprentissage personnel','Mettre en œuvre des outils et stratégies de veille informationnelle','Gérer son identité professionnelle','Développer son projet professionnel']],
    ['name'=>'Référencer les services en ligne et mesurer leur visibilité','badge'=>'C11','items'=>['Mettre en ligne mon site (hébergement, nom de domaine )','Analyser la visibilité']],
    ['name'=>'Collecter, suivre et orienter des demandes','badge'=>'C7','items'=>['Corriger ou orienter les problèmes']],
    ['name'=>'Planifier les activités','badge'=>'C14','items'=>['Découper le projet','Organiser les tâches','Gérer son temps']],
    ['name'=>'Déployer un service','badge'=>'C17','items'=>['Mise en production du service/site','Configuré l\'environnement','Vérification du bon fonctionnement des servies']],
 
 
 
    ];
  foreach ($competences as $i => $c): ?>
  <div class="skill-block fade-up" style="transition-delay: <?= $i * 0.07 ?>s">
    <div class="skill-header" onclick="toggleSkill(this)">
      <div class="skill-header-left">
        <span class="skill-name"><?= htmlspecialchars($c['name']) ?></span>
        <span class="skill-badge"><?= $c['badge'] ?></span>
      </div>
      <svg class="skill-arrow" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
        <polyline points="6 9 12 15 18 9"></polyline>
      </svg>
    </div>
    <div class="skill-body">
      <div class="skill-items">
        <?php foreach ($c['items'] as $item): ?>
        <div class="skill-item"><?= htmlspecialchars($item) ?></div>
        <?php endforeach; ?>
      </div>
    </div>
  </div>
  <?php endforeach; ?>
</section>



<!-- PROJETS -->
<section id="projets">
  <div class="section-label">// Projects</div>
  <div class="section-title">Mes <span>Projets</span></div>
  <?php
  $projets = [
    ['emoji'=>'🎫','name'=>'Gestion de tickets GLPI','desc'=>'Prise en main et administration d\'un système de ticketing GLPI. Traitement des incidents, suivi des demandes et orientation des utilisateurs.','tags'=>['GLPI','Support N1'],'competences'=>['C1','C2']],
    ['emoji'=>'📊','name'=>'Gestion de projet Trello','desc'=>'Organisation du travail en groupe avec Trello : création de tableaux Kanban, répartition des tâches, suivi de l\'avancement en temps réel.','tags'=>['Trello'],'competences'=>['C4']],
    ['emoji'=>'🗄️','name'=>'Administration BDD — Droits utilisateurs','desc'=>'Gestion des comptes utilisateurs et attribution des droits dans une base de données. Mise en place des habilitations et vérification des accès.','tags'=>['SQL','SGBD','Sécurité'],'competences'=>['C1']],
    ['emoji'=>'📱','name'=>'Présence sur les réseaux sociaux','desc'=>'Création et gestion d\'un compte professionnel sur les réseaux sociaux pour promouvoir le service développé en classe. Stratégie de visibilité numérique.','tags'=>['Social Media','Communication','Web'],'competences'=>['C3']],
    ['emoji'=>'🐙','name'=>'Portfolio GitHub','desc'=>'Publication et partage de mes projets personnels sur GitHub. Gestion de versions, documentation des dépôts et développement de l\'identité numérique.','tags'=>['Git','GitHub','Open Source'],'competences'=>['C6']],
    ['emoji'=>'💻','name'=>'Ce portfolio','desc'=>'Conception et développement de ce portfolio web en PHP, HTML, CSS et JavaScript. Design personnalisé, responsive et interactif.','tags'=>['PHP','HTML/CSS','JavaScript'],'competences'=>['C3','C6']],
  ];
  ?>
  <div class="projects-grid">
    <?php foreach ($projets as $i => $p): ?>
    <div class="project-card fade-up" style="transition-delay: <?= $i * 0.08 ?>s">
      <span class="project-emoji"><?= $p['emoji'] ?></span>
      <div class="project-name"><?= htmlspecialchars($p['name']) ?></div>
      <p class="project-desc"><?= htmlspecialchars($p['desc']) ?></p>
      <div class="project-tags">
        <?php foreach ($p['tags'] as $t): ?><span class="tag"><?= htmlspecialchars($t) ?></span><?php endforeach; ?>
        <?php foreach ($p['competences'] as $c): ?><span class="project-skill-tag"><?= $c ?></span><?php endforeach; ?>
      </div>
    </div>
    <?php endforeach; ?>
  </div>
</section>

<!-- ÉTUDES -->
<section id="etudes">
  <div class="section-label">// Education</div>
  <div class="section-title">Mon <span>Parcours</span></div>
  <div class="timeline">
    <div class="timeline-item fade-up">
      <div class="timeline-dot"></div>
      <div class="timeline-date">2025 — En cours</div>
      <div class="timeline-title">BTS SIO — Services Informatiques aux Organisations</div>
      <div class="timeline-place">Option SLAM / SISR · Efrei Paris</div>
      <p class="timeline-desc">Formation en 2 ans couvrant la gestion du patrimoine informatique, le développement web, la cybersécurité, les réseaux, le support utilisateur et la gestion de projets informatiques.</p>
    </div>
    <div class="timeline-item fade-up" style="transition-delay: 0.1s">
      <div class="timeline-dot"></div>
      <div class="timeline-date">2021 — 2023</div>
      <div class="timeline-title">Baccalauréat</div>
      <div class="timeline-place">Générale</div>
      <p class="timeline-desc">Obtention du baccalauréat avec une spécialisation en Science de l'ingénieur et Numérique et sciences de l'informatique.</p>
    </div>
  </div>
</section>

<!-- CONTACT -->
<section id="contact">
  <div class="section-label">// Contact</div>
  <div class="section-title">Me <span>Contacter</span></div>
  <div class="contact-grid">
    <div>
      <p class="contact-text">Disponible pour des opportunités de stage, alternance ou pour discuter de projets informatiques. N'hésitez pas à me contacter!</p>
      <div class="contact-links">
        <a href="https://github.com/jsm-0" class="contact-link"><span class="contact-link-icon">⬡</span> github.com/jsm-0</a>
        <a href="mailto:jasmineadou1.ja@gmail.com" class="contact-link"><span class="contact-link-icon">✉</span> jasmineadou1.ja@gmail.com</a>
        <a href="https://www.linkedin.com/in/jasmine-adouwekonou-82a209387" class="contact-link"><span class="contact-link-icon">in</span> linkedin.com/in/jasmine-adouwekonou-82a209387</a>
      </div>
    </div>
</section>

<!-- FOOTER -->
<footer>
  <div class="footer-left">// portfolio.php — BTS SIO 2025</div>
</footer>

<script src="script.js"></script>
</body>
</html>

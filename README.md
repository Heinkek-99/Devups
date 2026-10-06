# Devups

Socle PHP maison et espace d'administration généré automatiquement. Le dépôt contient le
framework, ses bibliothèques et un exemple d'administration.

## Contenu

- `devups/App.php` : amorçage de l'application
- `devups/admin/` : espace d'administration (connexion, tableau de bord, services)
- `devups/admin/generator/` : générateur d'écrans d'administration (`AdminTemplateGenerator`,
  `TableTemplateRender`)
- `devups/admin/views/` : gabarits Blade (tableaux, formulaires, pagination, notifications)
- Bibliothèques et dépendances dans les sous-dossiers du projet

## Contexte

Framework PHP développé en 2022, du typage faible et sans cadre imposé. La documentation d'origine
est dans `devups/README.md`.

## Lancer le projet

Prérequis : PHP (5.6 ou 7.x pour la version d'origine), une base MySQL configurée dans
`config/constant.php`, et un serveur web pointant vers le dossier du projet.

## État

Dépôt d'archive. Le code fonctionne mais reste adossé à des versions de PHP anciennes : à lire
comme une trace de travail, pas comme un socle à réutiliser tel quel.

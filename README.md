# Test technique - Analyste/Développeur Support

Bienvenue sur ce test technique pour le poste de Analyste/Développeur Support chez Clever Cloud. Il va nous permettre d'alimenter la discussion pour le futur entretien que vous aurez. L'application que nous avons fournie est volontairement non fonctionnelle.

Prenez le temps de le faire et lisez bien les consignes/questions. La documentation Clever Cloud est à votre disposition, notamment :
- [Environment Variable Reference](https://developers.clever-cloud.com/doc/reference/reference-environment-variables/)
- [Quick start](https://developers.clever-cloud.com/doc/quickstart/)

## Introduction du test

Créez votre compte sur Clever Cloud si ce n'est pas déjà fait. Le but sera de déployer le code contenu dans cette archive.

À chaque étape, le résultat attendu n'est pas celui que vous aurez de prime abord.
À vous de comprendre le problème et corriger l'application ou le déploiement pour obtenir
le résultat attendu !

Les compétences attendues pour réaliser tous les exercices sont:
- Trouver son chemin dans l'interface et la documentation Clever Cloud
- Savoir lire des logs et comprendre les erreurs remontées
- Avoir un bagage minimum en développement / SQL pour corriger les erreurs.

## À chaque étape, notez les réponses à ces questions

Vous pourrez envoyer ces réponses par email avant l'entretien.

- Que constatez vous lorsque vous vous rendez sur l'URL / ouvrez la console ?
- Qu'avez vous fait pour trouver l'orgine du problème ?
    - Précisez les sources (liens internet par exemple) qui vous ont aidé.
- Comment avez-vous corrigé le problème ?
- Manque-t-il à votre avis de la documentation "Clever Cloud" pour résoudre ce problème ?

## Étape 1

Créez une appplication et utilisez Git pour déployer le code.

Avant de déployer, vous devrez définir la variable d'environnement suivante:
- `CC_PRE_RUN_HOOK=clevercloud/script.sh`

Laissez l'application en taille XS, la valeur par défaut.

### Résultat attendu

L'application doit déployer avec succès.

## Étape 2

Rendez vous sur `https://<domaine de votre app>/`

### Résultat attendu

Le message "*Hello World!*" s'affiche.

## Étape 3

Rendez-vous sur Rendez vous sur `https://<domaine de votre app>/?ex=1`

### Résultat attendu

Le message *File loaded!* s'affiche.

## Étape 4

Rendez-vous sur Rendez vous sur `https://<domaine de votre app>/?ex=2`

### Résultat attendu

Le message "*This is it!*" s'affiche.

## Étape 5

Créez un addon MySQL de taille XXS Small Space et importez sur la base le fichier sql fourni dans l'archive.

Rendez vous sur `https://<domaine de votre app>/?ex=3`

### Résultat attendu

Le message "*My beautiful DB!*" s'affiche dans le navigateur.

## Étape 6

La question précédente doit être réussie pour faire cette étape.

Rendez-vous sur Rendez vous sur `https://<domaine de votre app>/?ex=4`

### Résultat attendu

Le message "*Lorem ipsum...*" qui s'affiche en plus du message de l'étape précédente.

## Étape 7

Vous devez configurer un *worker* qui fera appel au script PHP `scripts/worker.php`

### Résultat attendu

Les logs applicatifs doivent afficher le message "*Hello, I'm the worker!*" toutes les 20 secondes.

## Étape 7

Configurez un *cron job* qui fera appel au script PHP `scripts/cron.php` chaque minute.

### Résultat attendu

Dans les logs applicatifs, le message "*Hello, I'm the cron job!*" s'affiche toutes les 60 secondes.

## Étape bonus

Les autres étapes doivent être complétées avec succès avant de tenter l'étape bonus.

Le résultat doit s'afficher ici `https://<domaine de votre app>/?ex=5`

Vous devrez écrire la fonction bonus(), sans modifier le prototype, qui renverra :
- *PROD* quand l'app est dans l'environnement de production
- *DEV* quand l'app est dans l'environnement de développement

Vous devez trouver un moyen de matérialiser l'environnement sans modifier le code à chaque fois.

## Fin du TP

Félicitations !

Dans un email, envoyez à Julie:
- Le lien vers votre application (et son ID)
- Les réponses aux questions du début, que vous aurez notées à chaque étape
- Vos remarques éventuelles

# CMS 2020 - Wordpress Alex Mayer

## Lokale Entwicklung

```sh
npm run watch
```

## Deployment

```sh
npm run deploy
```

Dadurch wird das Theme lokal gebaut und der `/public` Folder dann auf die CMS VM deployed. WP-Uploads und WP-Config werden mit Symlinks für alle Deployments verfügbar gemacht.

Die Website ist über: [VM Olive](http://vm-olive.multimediatechnology.at/) zu erreichen.

## Known issues

- `npm run start` scheint lokal nicht zu funktionieren, `npm run watch` dagegen schon

# CMS 2020 - final Project "Andy Huber"

## Build

```sh
npm run build
```

Beim Build wird das SCSS kompiliert, außerdem Fonts, Images, Favicons und der WP-Theme-Ordner (`./src/theme`) in den Build-Ordner `./public` kopiert. Der public Ordner ist nach dem Build eine vollständige Wordpress-Installation, die so auf den Server deployed werden kann (siehe unten). Im Detail ist alles zum Build in der `webpack.config.js` zu finden.

## Deployment

```sh
npm run deploy
```

Dadurch wird das Theme lokal gebaut und der `/public` Folder dann auf die CMS VM deployed. WP-Uploads und WP-Config werden mit Symlinks für alle Deployments verfügbar gemacht (auf dem Server). Die Webpack Config und das Deployment haben wir angepasst, um es mit der Ordnerstruktur unseres Screendesigns kompatibel zu machen.

Die WP-Config deployen wir nicht mit, sondern diese liegt einmal lokal auf unseren Rechnern um mit der ebenfalls lokalen MySQL-Datenbank zu kommunizieren. Auf dem Server haben wir ebenfalls einmalig in `~/andy/shared/` eine wp-config angelegt, die mit der Datenbank auf dem Server kommuniziert und die entsprechenden Zugangsdaten enthält.

Die Website ist über: [VM Olive](http://vm-olive.multimediatechnology.at/) zu erreichen.

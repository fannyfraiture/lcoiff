// Gulp.js configuration
"use strict";

// source and build folders
const source = "../src",
  dist = "../dist";

const sass_path = {
  src: source + "/scss/styles.scss",
  dist: dist
};

const js_path = {
  src: source + "/js/**/*.js",
  dist: dist
};

// Gulp and plugins
const gulp = require("gulp"),
  newer = require("gulp-newer"),
  sass = require("gulp-sass")(require("sass")),
  autoprefixer = require("autoprefixer"),
  sourcemaps = require("gulp-sourcemaps"), //to see scss files in the browser
  postcss = require("gulp-postcss"),
  deporder = require("gulp-deporder"),
  concat = require("gulp-concat"),
  stripdebug = require("gulp-strip-debug"),
  cleanCSS = require("gulp-clean-css"),
  babel = require("gulp-babel"),
  register = require("@babel/register"),
  rename = require("gulp-rename"),
  uglify = require("gulp-uglify-es").default,
  browserSync = require("browser-sync").create(),
  reload = browserSync.reload,
  lineec = require("gulp-line-ending-corrector");

// SASS
function style() {
  return gulp
    .src(sass_path.src)
    .pipe(sourcemaps.init({ loadMaps: true }))
    .pipe(
      sass({
        outputStyle: "expanded"
      }).on("error", sass.logError)
    )
    .pipe(postcss([autoprefixer()]))
    .pipe(lineec())
    .pipe(cleanCSS({ level: 1 }))
    .pipe(sourcemaps.write("./"))
    .pipe(gulp.dest(sass_path.dist));
}

// JS
function javascript() {
  return (
    gulp
      .src(js_path.src)
      //,'!' + 'includes/js/jquery.min.js', // to exclude any specific files
      .pipe(sourcemaps.init())
      .pipe(concat("all.js"))
      .pipe(
        babel({
          presets: ["@babel/preset-env"]
        })
      )
      .pipe(uglify())
      .pipe(lineec())
      .pipe(sourcemaps.write("./"))
      .pipe(gulp.dest(js_path.dist))
  );
}

// WATCH
function watch() {
  browserSync.init(
    //browsersync with a php server
    {
      proxy: "http://localhost/",
      port: 9000
    }
  );

  gulp.watch("../src/scss/**/*.scss", gulp.series([style]));
  gulp.watch("../src/js/**/*.js", javascript);
  gulp
    .watch(["../**/*.php", dist + "/styles.css", dist + "/all.js"])
    .on("change", reload);
}


exports.style = style;
// exports.concatCSS = concatCSS;
exports.javascript = javascript;
exports.watch = watch;

var build = gulp.parallel(watch);
gulp.task("default", build);

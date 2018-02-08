/**
* Quasar: Design System
*
* @author     Brendan Falkowski (http://gravitydept.com)
* @copyright  Gravity Department. All rights reserved.
*/


// ==============================================
// Require Packages
// ==============================================

var autoprefixer = require('gulp-autoprefixer');
var changed      = require('gulp-changed');
var concat       = require('gulp-concat');
var del          = require('del');
var gulp         = require('gulp');
var gulpif       = require('gulp-if');
var imagemin     = require('gulp-imagemin');
var jshint       = require('gulp-jshint');
var minimist     = require('minimist');
var notify       = require('gulp-notify');
var pump         = require('pump');
var sass         = require('gulp-sass');
var sourcemaps   = require('gulp-sourcemaps');
var stylelint    = require('gulp-stylelint');
var uglify       = require('gulp-uglify');

// GravDept modules
var config          = require('./gulp/config.js');
var errorHandler    = require('./gulp/error-handler.js');
//var stylelintConfig = require('./gulp/stylelint-config.js');


// ==============================================
// Notifications
// ==============================================

// Run "gulp" without arguments for helpful dev notifications.
// Run "gulp --silent" to suppress notifications on the server.

var arguments = minimist(process.argv.slice(2));
var isSilent  = (arguments.silent) ? true : false;


// ==============================================
// Default
// ==============================================

gulp.task('default', ['clean'], function () {
    gulp.start('css');
    gulp.start('image');
    gulp.start('jsApp');
    //gulp.start('lintCss');
    gulp.start('lintJs');
});


// ==============================================
// Clean
// ==============================================

// Delete old generated files.
// Return a "promise" to ensure completion before proceeding to generation tasks.
// See: https://github.com/sindresorhus/del/releases/tag/v2.0.0

gulp.task('clean', function () {
    var task = config.task.clean;
    return del(task.pathsToDelete);
});


// ==============================================
// CSS
// ==============================================

gulp.task('css', function () {
    var task = config.task.css;

    pump([
        gulp.src(task.src),
        sourcemaps.init(),
        sass(task.sassOptions),
        autoprefixer(task.autoprefixerOptions),
        sourcemaps.write('../map'),
        gulp.dest(task.dest),
        gulpif(!isSilent, notify(task.notifyOptions))
    ], errorHandler);
});


// ==============================================
// Image
// ==============================================

// Don't use "pump" for error handling.
// See: https://github.com/sindresorhus/gulp-imagemin/issues/285

gulp.task('image', function () {
    var task = config.task.image;

    return gulp
    .src(task.src)
    .pipe(changed(task.dest))
    .pipe(imagemin([
        imagemin.gifsicle(task.imageminOptions.gif),
        imagemin.jpegtran(task.imageminOptions.jpg),
        imagemin.optipng(task.imageminOptions.png),
        imagemin.svgo(task.imageminOptions.svg)
    ]))
    .pipe(gulp.dest(task.dest))
    .pipe(gulpif(!isSilent, notify(task.notifyOptions)));
});


// ==============================================
// JS Modules
// ==============================================

/**
 * @param {object} task - Task config object like `config.task.taskName`
 * @return {function} - See: https://github.com/gulpjs/gulp/issues/2039
 */
function createJsModule (task) {
    return function () {
        pump([
            gulp.src(task.src),
            sourcemaps.init(),
            uglify(task.uglifyOptions),
            concat(task.file),
            sourcemaps.write('../map'),
            gulp.dest(task.dest),
            gulpif(!isSilent, notify(task.notifyOptions))
        ], errorHandler);
    };
}

gulp.task('jsApp', createJsModule(config.task.jsApp));


// ==============================================
// Lint CSS
// ==============================================

gulp.task('lintCss', function () {
    var task = config.task.lintCss;

    return gulp
    .src(task.src)
    .pipe(stylelint({
        config: stylelintConfig,
        reporters: [{
            formatter: 'string',
            console: true
        }]
    }));
});


// ==============================================
// Lint JS
// ==============================================

gulp.task('lintJs', function () {
    var task = config.task.lintJs;

    pump([
        gulp.src(task.src),
        jshint(),
        jshint.reporter('jshint-stylish'),
        jshint.reporter('fail'),
        gulpif(!isSilent, notify(task.notifyOptions))
    ], errorHandler);
});


// ==============================================
// Watch
// ==============================================

gulp.task('watch', function () {
    // Default: always runs immediately on "gulp watch"
    gulp.start('default');

    // CSS
    gulp.watch(config.task.css.src, ['css']);

    // Image
    gulp.watch(config.task.image.src, ['image']);

    // JS
    gulp.watch(config.task.jsApp.src, ['lintJs', 'jsApp']);
});

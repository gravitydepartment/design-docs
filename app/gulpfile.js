/**
* Quasar: Design System
*
* @author     Brendan Falkowski (http://gravitydept.com)
* @copyright  Gravity Department. All rights reserved.
*/


// ==============================================
// Require Packages
// ==============================================

var gulp = require('gulp');

var autoprefixer = require('gulp-autoprefixer');
var concat       = require('gulp-concat');
var del          = require('del');
var gulpif       = require('gulp-if');
var gutil        = require('gulp-util');
var notify       = require('gulp-notify');
var plumber      = require('gulp-plumber');
var rename       = require('gulp-rename');
var sass         = require('gulp-sass');
var sourcemaps   = require('gulp-sourcemaps');
var uglify       = require('gulp-uglify');


// ----------------------------------------------
// Environment Detection
// Run as "gulp --production" to prevent notifications on server.
// See: http://journal.toddsmithsalter.com/a-simple-gulp-build-task/

var flags = require('minimist')(process.argv.slice(2));
var isProduction = flags.production || flags.prod || false;


// ----------------------------------------------
// Paths

var path = {
    assets: 'assets/'
};



// ==============================================
// Report Error
// See: https://github.com/mikaelbr/gulp-notify/issues/81
// ==============================================

var reportError = function (error) {
    // [log]
    //console.log(error);

    // Format and ouput the whole error object
    //console.log(error.toString());


    // ----------------------------------------------
    // Pretty error reporting

    var report = '\n';
    var chalk = gutil.colors.white.bgRed;

    if (error.plugin) {
        report += chalk('PLUGIN:') + ' [' + error.plugin + ']\n';
    }

    if (error.message) {
        report += chalk('ERROR:\040') + ' ' + error.message + '\n';
    }

    console.error(report);


    // ----------------------------------------------
    // Notification

    if (error.line && error.column) {
        var notifyMessage = 'LINE ' + error.line + ':' + error.column + ' -- ';
    } else {
        var notifyMessage = '';
    }

    notify({
        title: 'FAIL: ' + error.plugin,
        message: notifyMessage + 'See console.',
        sound: 'Sosumi' // See: https://github.com/mikaelbr/node-notifier#all-notification-options-with-their-defaults
    }).write(error);

    gutil.beep(); // System beep (backup)


    // ----------------------------------------------
    // Prevent the 'watch' task from stopping

    this.emit('end');
}



// ==============================================
// Default
// ==============================================

gulp.task('default', ['clean'], function () {
    gulp.start('css');
    gulp.start('js');
});



// ==============================================
// Clean
// ==============================================

// Delete old generated files.
// Return a "promise" to ensure completion before proceeding to generation tasks.
// See: https://github.com/sindresorhus/del/releases/tag/v2.0.0

gulp.task('clean', function () {
    return del([
        path.assets + 'css',
        path.assets + 'js/build'
    ]);
});



// ==============================================
// CSS
// ==============================================

gulp.task('css', function () {
    var sources = [
        path.assets + 'scss/**/*.scss'
    ];

    return gulp.src(sources)
        .pipe(sourcemaps.init())
        .pipe(plumber({
            errorHandler: reportError
        }))
        .pipe(sass({
            outputStyle: 'compressed'
        }))
        .pipe(autoprefixer({
            browsers: ['last 2 versions', 'safari 6', 'ie >= 9', 'opera 12.1', 'ios 6', 'android 4'],
            cascade: false
        }))
        .pipe(sourcemaps.write('.'))
        .pipe(gulp.dest(path.assets + 'css'))
        .pipe(gulpif(!isProduction, notify({
            title: 'CSS',
            message: '<%= file.relative %>',
            onLast: true
        })));
});



// ==============================================
// JS
// ==============================================

gulp.task('js', function () {
    var sources = [
        path.assets + 'js/src/vendor/clipboard.js',
        path.assets + 'js/src/vendor/prism.js',
        path.assets + 'js/src/quasar.js'
    ];

    return gulp.src(sources)
        .pipe(concat('app.js'))
        //.pipe(gulp.dest(path.assets + 'js/build'))
        .pipe(rename({
            suffix: '.min'
        }))
        .pipe(uglify({
            mangle: false
        }))
        .pipe(gulp.dest(path.assets + 'js/build'))
        .pipe(gulpif(!isProduction, notify({
            title: 'JS',
            message: '<%= file.relative %>'
        })))
        .on('error', reportError);
});



// ==============================================
// Watch
// ==============================================

gulp.task('watch', function () {
    // Run "default" immediately
    gulp.start('default');

    // CSS
    gulp.watch(path.assets + 'scss/**/*.scss', [
        'css'
    ]);

    // JS
    gulp.watch(path.assets + 'js/src/**/*.js', [
        'js'
    ]);
});

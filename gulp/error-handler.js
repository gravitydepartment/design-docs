/**
* Gravity Department - Frontend Toolkit
* http://gravitydept.com
*
* @author     Brendan Falkowski
* @copyright  Gravity Department. All rights reserved.
*/


// ==============================================
// Gulp Error Handler
// ==============================================

// An error handler that uses "pump" to keep errors from ending streams.
// Each plugin may have unique error objects, so the response is normalized.
//
// See: https://github.com/mikaelbr/gulp-notify/issues/81
// See: https://github.com/terinjokes/gulp-uglify/blob/master/docs/why-use-pump/README.md

var gutil  = require('gulp-util');
var notify = require('gulp-notify');

module.exports = function (error) {
    if (typeof error !== 'undefined') {
        // [log] Uncomment to show the full error object
        //console.log(error);

        // ----------------------------------------------
        // Normalize error responses

        var plugin = error.plugin;

        if (plugin == 'gulp-jshint') {
            var path   = 'N/A';
            var file   = 'N/A';
            var line   = 'N/A';
            var column = 'N/A';
            var note   = 'N/A';

            var notifyMessage = 'JS Hint errors found.';
        }

        if (plugin === 'gulp-sass') {
            var path   = error.file;
            var file   = error.relativePath;
            var line   = error.line;
            var column = error.column;
            var note   = error.messageOriginal;

            var notifyMessage = file + '\n' + line + ' : ' + column;
        }

        if (plugin === 'gulp-uglify') {
            var path   = error.fileName;
            var file   = error.cause.filename;
            var line   = error.cause.line;
            var column = error.cause.col;
            var note   = error.cause.message;

            var notifyMessage = file + '\n' + line + ' : ' + column;
        }

        // ----------------------------------------------
        // Show error in console

        if (plugin !== 'gulp-jshint') {
            var chalk  = gutil.colors.red;
            var report = ['\n'];

            report.push(chalk('Plugin: ') + plugin + '\n');
            report.push(chalk('Path:   ') + path   + '\n');
            report.push(chalk('File:   ') + file   + '\n');
            report.push(chalk('Line:   ') + line   + '\n');
            report.push(chalk('Column: ') + column + '\n');
            report.push(chalk('Note:   ') + note   + '\n');

            console.error(report.join(''));
        }

        // ----------------------------------------------
        // Fire Mac/Windows notification for error

        notify({
            title:   'Failed Gulp — See Console',
            message: notifyMessage,
            sound:   'Sosumi' // Sound for Mac. See: https://github.com/mikaelbr/node-notifier#all-notification-options-with-their-defaults
        }).write(error);

        gutil.beep(); // Fallback to system sound (for Windows).
    }
};

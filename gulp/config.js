/**
* Gravity Department - Design Docs
* https://github.com/gravitydepartment/design-docs
*
* @author     Brendan Falkowski
* @copyright  Gravity Department. All rights reserved.
*/


// ==============================================
// Gulp Config
// ==============================================

var path = {
    assets: 'assets/'
};

var task = {
    clean: {
        pathsToDelete: [
            path.assets + 'css/build',
            path.assets + 'css/map',
            path.assets + 'img/build',
            path.assets + 'js/build',
            path.assets + 'js/map'
        ]
    },
    css: {
        autoprefixerOptions: {
            // For "browserslist" see "package.json"
            cascade: false,
            supports: false // See: https://github.com/filamentgroup/select-css/issues/17
        },
        dest: path.assets + 'css/build',
        notifyOptions: {
            title: 'CSS',
            message: 'Done',
            onLast: true
        },
        sassOptions: {
            outputStyle: 'compressed'
        },
        src: path.assets + 'css/src/**/*.scss'
    },
    image: {
        dest: path.assets + 'img/build',
        imageminOptions: {
            gif: {
                interlaced: true
            },
            jpg: {
                progressive: true
            },
            png: {
                optimizationLevel: 3
            },
            svg: {
                plugins: [
                    { removeTitle:   true },
                    { removeViewBox: false },
                    { removeXMLNS:   false }
                ]
            }
        },
        notifyOptions: {
            title: 'Image',
            message: 'Done',
            onLast: true
        },
        src: [
            path.assets + 'img/src/**/*'
        ]
    },
    jsApp: {
        dest: path.assets + 'js/build',
        file: 'app.min.js',
        notifyOptions: {
            title: 'JS: Module: App Post',
            message: 'Done',
            onLast: true
        },
        src: [
            // Libraries
            path.assets + 'js/src/vendor/clipboard.min.js',
            path.assets + 'js/src/vendor/prism.min.js',
            // Initialize components
            path.assets + 'js/src/app.js'
        ],
        uglifyOptions: {
            mangle: false
        }
    },
    lintCss: {
        notifyOptions: {
            title: 'Lint: CSS',
            message: 'Done',
            onLast: true
        },
        src: [
            path.assets + 'css/src/**/*.scss',
            '!' + path.assets + 'css/src/vendor/**'
        ]
    },
    lintJs: {
        notifyOptions: {
            title: 'Lint: JS',
            message: 'Done',
            onLast: true
        },
        src: [
            path.assets + 'js/src/**/*.js',
            '!' + path.assets + 'js/src/vendor/**'
        ]
    }
};

module.exports = {
    path: path,
    task: task
};

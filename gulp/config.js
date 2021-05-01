/**
* Gravity Department - Frontend Starter
* https://github.com/gravitydepartment/frontend-starter
*
* @author    Brendan Falkowski
* @copyright Gravity Department. All rights reserved.
*/


// ==============================================
// Gulp Config
// ==============================================

var path = {
    assets: './assets/'
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
            cascade: false
        },
        dest: path.assets + 'css/build',
        mapDest: '../map',
        // Must be JSON. See: https://github.com/mikaelbr/gulp-notify/issues/129
        notifyOptions: {
            "title": "CSS",
            "message": "Done",
            "onLast": true
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
        // Must be JSON. See: https://github.com/mikaelbr/gulp-notify/issues/129
        notifyOptions: {
            "title": "Image",
            "message": "Done",
            "onLast": true
        },
        src: [
            path.assets + 'img/src/**/*'
        ]
    },
    jsApp: {
        dest: path.assets + 'js/build',
        file: 'bundle-app.js',
        mapDest: '../map',
        notifyOptions: {
            "title": "JS: App",
            "message": "Done",
            "onLast": true
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
        // Must be JSON. See: https://github.com/mikaelbr/gulp-notify/issues/129
        notifyOptions: {
            "title": "Lint: CSS",
            "message": "Done",
            "onLast": true
        },
        src: [
            path.assets + 'css/src/**/*.scss',
            '!' + path.assets + 'css/src/vendor/**'
        ],
        stylelintOptions: {
            reporters: [{
                formatter: 'string',
                console: true
            }]
        }
    },
    lintJs: {
        // Must be JSON. See: https://github.com/mikaelbr/gulp-notify/issues/129
        notifyOptions: {
            "title": "Lint: JS",
            "message": "Done",
            "onLast": true
        },
        src: [
            path.assets + 'js/src/**/*.js',
            '!' + path.assets + 'js/src/vendor/**'
        ]
    },
    watch: {
        options: {
            ignoreInitial: false
        }
    }
};

module.exports = {
    path: path,
    task: task
};

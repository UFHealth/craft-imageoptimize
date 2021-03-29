// app.settings.js

// node modules
require('dotenv').config();
const path = require('path');

// settings
module.exports = {
    alias: {
        '@': path.resolve('../src/assetbundles/imageoptimize/src'),
    },
    copyright: '©2020 nystudio107.com',
    entry: {
        'imageoptimize': '@/js/ImageOptimize.js',
        'field': '@/js/OptimizedImagesField.js',
        'welcome': '@/js/Welcome.js',
    },
    extensions: ['.ts', '.js', '.vue', '.json'],
    name: 'imageoptimize',
    paths: {
        dist: path.resolve('../src/assetbundles/imageoptimize/dist/'),
    },
    urls: {
        publicPath: () => process.env.PUBLIC_PATH || '',
    },
};

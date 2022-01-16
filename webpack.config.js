const Webpack             = require('webpack');
const Path                = require('path');
const Fs                  = require('fs');
const TerserPlugin        = require('terser-webpack-plugin');
const { CleanWebpackPlugin }  = require('clean-webpack-plugin');
const BundleAnalyzerPlugin = require('webpack-bundle-analyzer').BundleAnalyzerPlugin;

module.exports = (env, argv) => {
    const analyze = (argv && argv.DEBUG) || (env && env.DEBUG);
    const analyzerHost = process.env.ANALYZER_HOST ? process.env.ANALYZER_HOST : "127.0.0.1";
    const analyzerPort = process.env.ANALYZER_PORT ? process.env.ANALYZER_PORT : 8888;
    const analyzePlugin = analyze ? [new BundleAnalyzerPlugin({analyzerHost: analyzerHost, analyzerPort: analyzerPort})] : [];

    let moduleConf = {
        context: __dirname + '/js/controllers/page',
        entry: {},
        output: {
            path: Path.join(__dirname, './js/bundle'),
            publicPath: './js/bundle/',
            filename: '[name].bundle.js?[chunkhash]',
            chunkFilename: '[name].chunk.js?[chunkhash]',
            pathinfo: false,
        },

        watch: env.NODE_ENV !== 'prod',
        mode: (argv && argv.mode === 'development') ? 'development' : 'production',
        devtool: false,

        stats: {
            colors: true
        },

        module: {
            unknownContextCritical: false,
            rules: [
                {
                    test: /\.js$/,
                    // exclude: /node_modules/, // в модулях есть использование классов, так что для ie11 пришлось их тоже прогонять через babel
                    use: {
                        loader: "babel-loader",
                        options: {
                            presets: [
                                ["@babel/preset-env", {
                                    modules: false,
                                }]
                            ],
                            "plugins": [
                                ["@babel/plugin-transform-runtime", {helpers: false}],
                                ["@babel/plugin-transform-object-assign"],
                                ["@babel/plugin-proposal-class-properties"],
                            ]
                        }
                    }
                },
            ]
        },

        optimization: {
            minimizer: [new TerserPlugin({
                extractComments: false,
            }),],
            runtimeChunk: false,
            splitChunks: {
                cacheGroups: {
                    default: {
                        name: 'commons',
                        chunks: 'initial',
                        minChunks: 2,
                        priority: -20,
                        reuseExistingChunk: true
                    }
                }
            }
        },

        plugins: [
            ...analyzePlugin,

            new CleanWebpackPlugin(),

            new Webpack.ProvidePlugin({
                $: 'jquery',
                jQuery: 'jquery',
                'window.jQuery': 'jquery',
            }),

            new Webpack.NoEmitOnErrorsPlugin()
        ]
    };

    /**
     * add entry
     */

    Fs.readdirSync(moduleConf.context).map(file => {
        let partFile = file.split('.')[0];

        if (partFile !== 'base') {
            moduleConf.entry[partFile] = `./${partFile}`;
        }
    });

    return moduleConf;
};

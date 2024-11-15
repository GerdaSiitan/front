import MiniCssExtractPlugin from 'mini-css-extract-plugin';
import HtmlWebpackPlugin from 'html-webpack-plugin';
import path from 'path';
import { fileURLToPath } from 'url';

const __filename = fileURLToPath(import.meta.url);
const __dirname = path.dirname(__filename);

const webpackConfig = {
    entry: './src/index.js',
    output: {
        filename: 'main.js',
        path: path.resolve(__dirname, 'dist'),
        clean: true,
    },
    devServer: {
        static: {
            directory: path.resolve(__dirname, 'public')
        },
        historyApiFallback: true,
        open: true,
        port: 9000,
        compress: true,
    },
    module: {
        rules: [
            {
                test: /\.css$/i,
                use: ['style-loader','css-loader']
            },
            {
                test: /\.njk$/i,
                use: ['simple-nunjucks-loader']
            },
            {
                test: /\.png/,
                type: 'asset/resource',
                generator: {
                    filename: '[name][ext]'
                }
            },
        ]
    },
    plugins: [
        new HtmlWebpackPlugin({
            template: './src/index.njk'
        }),
    ],
}

export default webpackConfig;
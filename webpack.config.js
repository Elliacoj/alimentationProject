const webpack = require("webpack");
const path = require("path");
const MiniCssExtractPlugin = require("mini-css-extract-plugin");
const CssMinimizerPlugin = require("css-minimizer-webpack-plugin");

module.exports = {
    entry: {
        front: "./assets/js/front.js"
    },

    output: {
        path: path.resolve(__dirname, "public/build/js"),
        filename: "[name].js"
    },

    module: {
        rules: [
            {
                test: /\.css$/i,
                use: [
                    {
                        loader: MiniCssExtractPlugin.loader,
                    },
                    {
                        loader: "css-loader",
                        options: {
                            import: true,
                            url: true,
                            sourceMap: true,

                        }

                    }
                ],

            },
        ]
    },

    optimization: {
        minimizer: [
            new CssMinimizerPlugin(),
        ]
    },

    plugins: [].concat([new MiniCssExtractPlugin({
        filename: "../css/[name].css"
    })])
}

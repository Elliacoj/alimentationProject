const webpack = require("webpack");
const path = require("path");

module.exports = {
    entry: {
        front: "./assets/js/front.js"
    },
    output: {
        path: path.resolve(__dirname, "public/build/js"),
        filename: "[name].js"
    }

}

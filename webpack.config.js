module.exports = {
    entry: "./resources/assets/js/app.js",
    output: {
        path: "./public/js",
        publicPath: "/js/",
        filename: "b.js"
    },
    module: {
        loaders: [
            { test: /\.styl$/, loader: "style!css!stylus" },
            { test: /\.html$/, loader: "html" }
        ]
    }
}
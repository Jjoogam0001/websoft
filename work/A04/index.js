// JavaScript source code
// index.js

/**
 * Required External Modules
 */
const express = require("express");
const path = require("path");

/**
 * App Variables
 */
const app = express();
const port = process.env.PORT || "1337";


/**
 *  App Configuration
 */

/**
 * Routes Definitions
 */

app.get("/", (req, res) => {
    res.status(200).sendfile('lotto.html');
});

app.get("/", (req, res) => {
    res.status(200).sendfile('lotto.css');
});




/**
 * Server Activation
 */
app.listen(port, () => {
    console.log(`Listening to requests on http://localhost:${port}`);
});
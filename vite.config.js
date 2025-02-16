import { defineConfig } from "vite";
import laravel from "laravel-vite-plugin";
import dotenv from "dotenv";
import fs from "fs";

dotenv.config();

export default defineConfig({
    server: {
        https: {
            key: fs.readFileSync("./localhost-key.pem"),
            cert: fs.readFileSync("./localhost.pem"),
        },
        host: "localhost",
        port: 3000,
        hmr: {
            host: "localhost",
            port: 3000,
        },
    },
    base: process.env.APP_ENV === "production" ? process.env.APP_URL : "/",
    plugins: [
        laravel({
            input: ["resources/css/app.css", "resources/js/app.js"],
            refresh: true,
        }),
    ],
    build: {
        outDir: "public/build",
        minify: process.env.APP_ENV === "production",
    },
});

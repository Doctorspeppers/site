import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
    server: {
        base: 'pepper.dev.br',
        host: 'pepper.dev.br',
        hmr: {
            host: 'pepper.dev.br',
        },
        cors: true,
        https:{
            ServerOptions : {
                key: '/etc/letsencrypt/live/pepper.dev.br/privkey.pem',
                cert: '/etc/letsencrypt/live/pepper.dev.br/cert.pem'
            }
        }
    },
    plugins: [
        laravel({
            input: [
                'resources/css/app.css',
                'resources/js/app.js',
            ],
            refresh: true,
        }),
        {
            name: 'blade',
            handleHotUpdate({ file, server }) {
                if (file.endsWith('.blade.php')) {
                    server.ws.send({
                        type: 'full-reload',
                        path: '*',
                    });
                }
            },
        }
    ],
});

## Mise en place (env local)
__TODO__

Requis: docker, docker compose

```
vendor/bin/sail up -d
vendor/bin/sail artisan migrate
vendor/bin/sail artisan db:seed

vendor/bin/sail npm install

vendor/bin/sail artisan pest:install

vendor/bin/sail artisan dusk:install

# used for Vite.
npm run dev
```


Production 

```
# Compile assets with Vite for production.
npm run build
```
## Mise en place (env local)
__TODO__

Requis: docker, docker compose

```

# Sail alias
alias sail='[ -f sail ] && sh sail || sh vendor/bin/sail'


# Bootstrap

cp .env.example .env

docker compose up -d

docker exec labottega.test composer install

# vendor/bin/sail up -d
vendor/bin/sail artisan key:generate
vendor/bin/sail artisan migrate
vendor/bin/sail artisan db:seed

vendor/bin/sail npm install

# vendor/bin/sail artisan pest:install

# TODO Check if it's necessary.
# vendor/bin/sail artisan dusk:install

# used for Vite.
vendor/bin/sail npm run dev
```


Production 

```
# Compile assets with Vite for production.
npm run build
```

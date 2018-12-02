# sample-portfolio
Clone this repository to setup your own portfolio

## development installation

First install the [network-portfolio](https://github.com/network-portfolio/network-portfolio) repo.

```
git clone git@github.com:network-portfolio/sample-portfolio.git
cd sample-portfolio
composer install
cp .env.example .env
php artisan key:generate
yarn
yarn dev && yarn watch

# next you will need to register a user at network-portfolio.test
# put your user_id in the env file
# or for testing there currently are three seeded users (id = 1,2,3)

```

up:
	docker compose up -d

build:
	docker compose build

require-dev:
	docker compose exec php composer require --dev

require:
	docker compose exec php composer require
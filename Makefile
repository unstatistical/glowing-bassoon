COMPOSE := docker compose -f docker/docker-compose.yml

%:
	$(COMPOSE) $@
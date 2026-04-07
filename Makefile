COMPOSE := docker compose -f docker/docker-compose.yml

.PHONY: all %

all: up

%:
	$(COMPOSE) $@
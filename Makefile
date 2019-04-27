.PHONY: build


build: ## Install with composer needed libraries
	(cd lib/skyapi && composer install)


test: build ## Run test cases
	(cd lib/skyapi && vendor/bin/phpunit)

help: ## List help
	@grep -E '^[a-zA-Z_-]+:.*?## .*$$' $(MAKEFILE_LIST) | awk 'BEGIN {FS = ":.*?## "}; {printf "\033[36m%-30s\033[0m %s\n", $$1, $$2}'

.DEFAULT_GOAL := help
.PHONY: configure build-libc build-swig develop build-libc-swig build
.PHONY: test test-ci help

# Compilation output
.ONESHELL:
SHELL := /bin/bash

MKFILE_PATH   = $(abspath $(lastword $(MAKEFILE_LIST)))
REPO_ROOT     = $(dir $(MKFILE_PATH))
GOPATH_DIR    = gopath
SKYLIBC_DIR  ?= $(GOPATH_DIR)/src/github.com/skycoin/libskycoin
SKYCOIN_DIR  ?= $(SKYLIBC_DIR)/vendor/github.com/skycoin/skycoin
SKYBUILD_DIR  = $(SKYLIBC_DIR)/build
BUILDLIBC_DIR = $(SKYBUILD_DIR)/libskycoin
LIBC_DIR      = $(SKYLIBC_DIR)/lib/cgo
BUILD_DIR     = build
DIST_DIR      = dist
BIN_DIR       = $(SKYLIBC_DIR)/bin
INCLUDE_DIR   = $(SKYLIBC_DIR)/include
FULL_PATH_LIB = $(REPO_ROOT)/$(BUILDLIBC_DIR)

LIB_FILES = $(shell find $(SKYCOIN_DIR)/lib/cgo -type f -name "*.go")
SWIG_FILES = $(shell find $(PHP_SWIG_DIR) -type f -name "*.i")
HEADER_FILES = $(shell find $(SKYCOIN_DIR)/include -type f -name "*.h")

PHP_CLIENT_DIR = lib/skyapi
PHP_SWIG_DIR = lib/skycoin

configure: ## Configure build environment
	set -ex
	mkdir -p $(BUILD_DIR)/usr/tmp $(BUILD_DIR)/usr/lib $(BUILD_DIR)/usr/include
	mkdir -p $(BUILDLIBC_DIR) $(BIN_DIR) $(INCLUDE_DIR)


build-libc: configure ## Build libskycoin C client library
	GOPATH="$(REPO_ROOT)/$(GOPATH_DIR)" make -C $(SKYLIBC_DIR) clean-libc
	GOPATH="$(REPO_ROOT)/$(GOPATH_DIR)" make -C $(SKYLIBC_DIR) build-libc
	rm -f swig/include/libskycoin.h
	rm -f swig/include/swig.h
	mkdir -p swig/include
	cp $(SKYLIBC_DIR)/include/swig.h swig/include/
	grep -v _Complex $(SKYLIBC_DIR)/include/libskycoin.h > swig/include/libskycoin.h

build-swig: build-libc ## Generate PHP C module from SWIG interfaces
	#Generate structs.i from skytypes.gen.h
	rm -f $(PHP_SWIG_DIR)/structs.i
	cp $(INCLUDE_DIR)/skytypes.gen.h $(PHP_SWIG_DIR)/structs.i
	{ \
		if [[ "$$(uname -s)" == "Darwin" ]]; then \
			sed -i '.kbk' 's/#/%/g' $(PHP_SWIG_DIR)/structs.i ;\
		else \
			sed -i 's/#/%/g' $(PHP_SWIG_DIR)/structs.i ;\
		fi \
	}
	mkdir -p $(PHP_SWIG_DIR)
	swig -php7 -Iswig/include -I$(INCLUDE_DIR) -outdir $(PHP_SWIG_DIR) -o $(PHP_SWIG_DIR)/skycoin_wrap.c $(PHP_SWIG_DIR)/libskycoin.i

build-libsky-shared: build-swig ## Build shared library including SWIG wrappers
	gcc  `php-config --includes --ldflags` -fpic -I$(PHP_SWIG_DIR) -I$(INCLUDE_DIR) -c $(PHP_SWIG_DIR)/skycoin_wrap.c
	# gcc -shared skycoin_wrap.o $(BUILDLIBC_DIR)/libskycoin.a -o $(PHP_SWIG_DIR)/libskycoin.so

build: build-libsky-shared ## Install with composer needed libraries
	# (cd $(PHP_CLIENT_DIR) && composer install)

test: build ## Run test cases
	# (cd $(PHP_CLIENT_DIR) && vendor/bin/phpunit)

help: ## List help
	@grep -E '^[a-zA-Z_-]+:.*?## .*$$' $(MAKEFILE_LIST) | awk 'BEGIN {FS = ":.*?## "}; {printf "\033[36m%-30s\033[0m %s\n", $$1, $$2}'

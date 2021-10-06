#!/usr/bin/env bash

set -eu

php -d output_buffering=Off -d implicit_flush=On -S localhost:3000 -t public

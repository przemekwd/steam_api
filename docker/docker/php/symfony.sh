#!/usr/bin/env bash

COMMAND="bin/console $@"

su -s /bin/bash www-data -p -c "$COMMAND"

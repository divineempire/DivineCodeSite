#!/bin/bash

if [ -e "$pack".zip ]; then
hash=($(sha1sum brawl.zip))
  # N.B.: I currently use Debian.
  # The method for including a newline in a string varies by OS.
  # Test and search to figure out what works for you.
output+=$pack": "${hash[0]}"
fi

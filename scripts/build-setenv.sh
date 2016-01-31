#!/bin/sh
LDFLAGS="-L/Applications/drupal-7.41-1/common/lib $LDFLAGS"
export LDFLAGS
CFLAGS="-I/Applications/drupal-7.41-1/common/include $CFLAGS"
export CFLAGS
CXXFLAGS="-I/Applications/drupal-7.41-1/common/include $CXXFLAGS"
export CXXFLAGS
		    
PKG_CONFIG_PATH="/Applications/drupal-7.41-1/common/lib/pkgconfig"
export PKG_CONFIG_PATH
